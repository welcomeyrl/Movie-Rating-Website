<?php
	//个人相册管理Action类
	class UphotoalbumAction extends Action{
		//指定上传文件的目录
		private $bpath="./Uploads/Photoalbum/Big/"; 
		private $spath="./Uploads/Photoalbum/Small/"; 
		
		//载入相册浏览管理页面
		public function index(){
			//获取当前用户id
			$uid = $_GET['uid'];
			
			//创建数据库操作对象，获取当前用户数据
			$vo = M("User")->field("password",true)->find($uid);
		
			//向模板引擎加载信息
			$this->assign("vo",$vo);
			$this->assign("listtitle",$vo['username']."'s album");
			
			//创建相册数据库操作对象
			$mod = M("Photoalbum");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//获取总数据条数
			$count = $mod->where("uid={$uid}")->count;
			
			//创建分页类对象
			$page = new Page($count,10);
			
			//获得对应信息
			$list = $mod->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.",".$page->listRows)->select();
			
			//分页显示输出
			$show = $page->show();
			
			//向模板引擎加载
			$this->assign("list",$list);
			$this->assign("page",$show);
			
			//加载模板并输出
			$this->display("index");
		}
	
	
		//载入相册添加页面
		public function add(){
			$this->display("add");
		}
		
		//执行图片上传
		public function doupload(){
			//判断文件上传信息是否有效
			if (!isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) 		{
				echo "ERROR:invalid upload";
				exit(0);
			}

			// 获取图片上传临时文件名及路径
			$img = imagecreatefromjpeg($_FILES["Filedata"]["tmp_name"]);
			if (!$img) {
				echo "ERROR:could not create image handle ". $_FILES["Filedata"]["tmp_name"];
				exit(0);
			}
			//保存图片信息
			$filename = md5($_FILES["Filedata"]["tmp_name"] + rand()*100000).".jpg";
			move_uploaded_file($_FILES["Filedata"]["tmp_name"],$this->bpath.$filename);
			
			//上传成功，将图片信息保存入数据库，并把结果id放入session
			//执行图片信息的添加
			$data['pid']=0;
			$data['picname']=$filename;	
			$data['descr']="No description";	
			$data['addtime']=time();
			
			$id = M("Pics")->add($data);
			$_SESSION['photoalbum_img'][]=$id; //保存住当前图片id号
		
			//进行图片缩放小图
			$this->loadpic($img,$filename);
		}
		
		private function loadpic($img,$filename){
			$width = imageSX($img);
			$height = imageSY($img);
			$target_width = 135;
			$target_height = 135;
			$target_ratio = $target_width / $target_height;

			$img_ratio = $width / $height;

			if ($target_ratio > $img_ratio) {
				$new_height = $target_height;
				$new_width = $img_ratio * $target_height;
			} else {
				$new_height = $target_width / $img_ratio;
				$new_width = $target_width;
			}

			if ($new_height > $target_height) {
				$new_height = $target_height;
			}
			if ($new_width > $target_width) {
				$new_height = $target_width;
			}

			$new_img = ImageCreateTrueColor(135, 135);
			$c = imagecolorallocate($new_img,255,255,255); //分配一个颜色
			imagefill($new_img,0,0,$c); //填充背景颜色

			if (!@imagecopyresampled($new_img, $img, ($target_width-$new_width)/2, ($target_height-$new_height)/2, 0, 0, $new_width, $new_height, $width, $height)) {
				echo "ERROR:Could not resize image";
				exit(0);
			}
			imagejpeg($new_img,$this->spath."s_".$filename); //输出图像。
			echo "FILEID:".$filename;
			exit();
		}
		
		//定义添加相册函数
		function doinsert(){
			
			//判断用户是否登录
			if($_SESSION['loginuser']==null){
				$this->error("Must login to post albums");
			}
			
			//创建数据库操作对象
			$m = M("Photoalbum");
			
			//判断封面是否选择
			if($_POST['cover']==null){
				//没有定义封面，则用默认封面
				$cover = "cover.jpg";
			}else{
				$cover = $_POST['cover'];
			}
			
			//判断是否字数超过
			if(strlen($_POST['albumdes'])>90){
				$this->error("Description words are too many");
			}
			
			//获得要添加的数据，执行封装
			$data['uid'] = $_SESSION['loginuser']['id'];
			$data['coverpic'] = "s_".$cover;
			$data['title'] = $_POST['ablumname'];
			$data['content'] = $_POST['albumdes'];
			$data['addtime'] = time();
			
			//执行相册添加并判断是否成功
			if($pid = $m->add($data)){
				//添加成功，执行图片添加
				//获取当前相册的所有关联图片
				$map['id'] = array('in',$_SESSION['photoalbum_img']);
				$mod = M("Pics");
				$plist = $mod->where($map)->select();

				if(!empty($plist)){
					foreach($plist as $v){
					//判断照片是否在发送的数组中
						$k = array_search($v['picname'],$_POST['picname']);
						if($k === false){
							//若图片不在文章内，则执行删除。
							$mod->delete($v['id']);
							unlink("./Uploads/Photoalbum/Big/".$v['picname']);
							unlink("./Uploads/Photoalbum/Small/s_".$v['picname']);
						}else{
							$mod->where("id={$v['id']}")->setField('pid',$pid);
							$mod->where("id={$v['id']}")->setField('descr',substr($_POST['pictext'][$k],0,60));
						}
					}

					unset($_SESSION['photoalbum_img']);
					redirect(U("/Uphotoalbum/albumdetail/uid/{$_SESSION['loginuser']['id']}/pid/{$pid}"));
				}else{
					$this->error("Adding albums failed");
				}
			}
		}
		
		//载入具体相册页面
		public function albumdetail(){
			//获得当前用户id
			$uid = $_GET['uid'];
			
			//获得当前相册id
			$pid = $_GET['pid'];
			
			//创建数据库操作对象
			$m = M("Pics");
			$n = M("Photoalbum");
			$user = M("User");
			
			//获得当前用户信息
			$uo = $user->field("username,headpic")->where("id={$uid}")->find();
			
			//获得相册信息
			$vo = $n->find($pid);
			
			//获取相片列表
			$plist = $m->where("pid={$pid}")->order("addtime")->select();
			
			//遍历相片列表，处理描述id
			foreach($plist as &$p){
				$p['pdesid'] = substr($p['picname'],0,32);
				
				//拼装照片名称
				$picover = "s_".$p['picname'];
				
				//判断是否是封面
				if($picover == $vo['coverpic']){
					//追加信息
					$p['iscover'] = 1;
				}else{
					$p['iscover'] = 0;
				}
				
				//处理照片的描述长度
				$p['descr'] = substr($p['descr'],0,90);
			}
			
			//向模板引擎发送信息
			$this->assign("vo",$vo);
			$this->assign("uo",$uo);
			$this->assign("plist",$plist);
			
			//加载模板并输出
			$this->display("detail");
		}
		
		//载入相册编辑页面
		public function doedit(){
			//判断是否登陆
			if($_SESSION['loginuser']==null){
				$this->error("Please log in");
			}
		
			//获得相册信息id
			$pid = $_GET['pid'];
			
			//获得用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			//创建相册数据库操作对象
			$mod = M("Photoalbum");
			
			//根据相册id获取数据
			$vo = $mod->find($pid);
			
			//判断是否是自己的相册
			if($vo['uid'] != $uid){
				//不是当前用户的相册
				$this->error("You have no right to edit others' albums");
			}

			//获得该相册照片列表
			$plist = M("Pics")->where("pid={$pid}")->select();
			
			//遍历照片列表，追加信息
			foreach($plist as &$p){
				//拼装照片名称
				$picover = "s_".$p['picname'];
				
				//判断是否是封面
				if($picover == $vo['coverpic']){
					//追加信息
					$p['iscover'] = 1;
				}else{
					$p['iscover'] = 0;
				}
			}
			
			//向模板引擎放入信息
			$this->assign("vo",$vo);
			$this->assign("plist",$plist);
			
			//载入编辑页面并输出
			$this->display("edit");
		}
		
		//执行相册编辑
		public function doupdate(){
			//判断是否登陆
			if($_SESSION['loginuser']==null){
				$this->error("Please log in");
			}
		
			//获得要修改的相册id
			$pid = $_GET['pid'];
			
			//获得当前用户id
			$uid = $_SESSION['loginuser']['id'];
			
			//创建相册数据库操作对象
			$mod = M("Photoalbum");
			
			//根据相册id获取数据
			$vo = $mod->find($pid);
			
			//判断是否是自己的相册
			if($vo['uid'] != $uid){
				//不是当前用户的相册
				$this->error("You have no right to edit others' albums");
			}
			
			//判断封面是否选择
			if($_POST['cover']==null){
				//没有定义封面，则用默认封面
				$cover = cover.jpg;
			}else{
				$cover = $_POST['cover'];
			}
			
			//判断是否字数超过
			if(strlen($_POST['albumdes'])>90){
				$this->error("Description words are too many");
			}
			
			//获得要添加的数据，执行封装
			$data['id'] = $pid;
			$data['coverpic'] = "s_".$cover;
			$data['title'] = $_POST['ablumname'];
			$data['content'] = $_POST['albumdes'];
			$data['addtime'] = time();
			
			//执行修改并判断
			if($mod->save($data)){
				//修改成功
				//获取当前相册的所有关联图片
				$map['pid']  = $pid;
				if(!empty($_SESSION['photoalbum_img'])){
					$map['id'] = array('in',$_SESSION['photoalbum_img']);
					$map['_logic'] = 'OR';
				}
				//创建照片表操作对象
				$mod = M("Pics");
				$plist = $mod->where($map)->select();				
				
				if(!empty($plist)){
					foreach($plist as $v){
					//判断照片是否在发送的数组中
						$k = array_search($v['picname'],$_POST['picname']);
						if($k === false){
							//若图片不在文章内，则执行删除。
							$mod->delete($v['id']);
							unlink("./Uploads/Photoalbum/Big/".$v['picname']);
							unlink("./Uploads/Photoalbum/Small/s_".$v['picname']);
						}else{
							$mod->where("id={$v['id']}")->setField('pid',$pid);
							$mod->where("id={$v['id']}")->setField('descr',substr($_POST['pictext'][$k],0,60));
						}
					}

					unset($_SESSION['photoalbum_img']);
					redirect(U("/Uphotoalbum/albumdetail/uid/{$_SESSION['loginuser']['id']}/pid/{$pid}"));
				}else{
					//修改失败
					$this->error("Editing albums failed");
				}
			}

		}
		
		//定义删除相册方法
		public function dodel(){
			//判断是否登陆
			if($_SESSION['loginuser']==null){
				$this->error("Please log in");
			}
		
			//获得要删除相册id
			$pid = $_GET['pid'];
			
			//获得当前用户id
			$uid = $_SESSION['loginuser']['id'];
			
			//创建相册数据库操作对象
			$mod = M("Photoalbum");
			
			//根据相册id获取数据
			$vo = $mod->find($pid);
			
			//判断是否是自己的相册
			if($vo['uid'] != $uid){
				//不是当前用户的相册
				$this->error("You have no right to edit albums");
			}
			
			//执行相册删除
			if($mod->delete($pid)){
				//创建照片表数据库操作对象
				$p = M("Pics");
				
				//查询照片表中相关照片
				$list = $p->where("pid={$pid}")->select();
				
				//循环遍历列表删除每一张照片
				foreach($list as $v){
					unlink("./Uploads/Photoalbum/Big/".$v['picname']);
					unlink("./Uploads/Photoalbum/Small/s_".$v['picname']);
				}
				
				//删除数据库中的记录
				$p->where("pid={$pid}")->delete();
				
				redirect(U("/Uphotoalbum/index/uid/{$uid}"));
				
			}else{
				//删除相册失败
				$this->error("Delete albums failed");
			}
		}
		
	}