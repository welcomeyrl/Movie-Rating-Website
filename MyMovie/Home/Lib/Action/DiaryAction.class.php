<?php
	//用户日志Action类
	class DiaryAction extends Action{
		//日志列表页显示
		public function diarylist(){
			//获得前台id
			$uid = $_GET['uid'];
			
			//创建数据库操作对象，获取用户信息
			$username = M("User")->where("id={$uid}")->getField("username");
			
			//创建数据库操作对象
			$m = M("Diary");
			
			import('ORG.Util.Page');// 导入分页类
			$count      = $m->where("uid={$uid}")->count();// 查询满足要求的总记录数
			$Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $m->where("uid={$uid}")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			
			//遍历日志信息，处理日志长度
			foreach($list as &$v){
				$str=strip_tags($v["content"]);
				$str=preg_replace("/[\s\ ]*/","",$str);
				$v["content"]=substr($str,0,150)."......";
			}

			//向模板放置信息
			$this->assign("listtitle",$username."'s Blog");
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出

			//加载模板并输出
			$this->display("list");
		}
		
		//日志图片上传方法
		public function doupload(){
			//准备上传返回的结果
			$resinfo = array("err"=>"","msg"=>"");
			
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Diary/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$resinfo['err']=$upload->getErrorMsg();
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				$resinfo['msg']=__ROOT__."/Uploads/Diary/".$info[0]['savename']; //获取上传的图片名
				
				//执行图片信息的添加
				$data['tbname']="notice";
				$data['did']=0;
				$data['picname']=$info[0]['savename'];	
				$data['create_time']=time();
				$id = M("Diarypic")->add($data);
				$_SESSION['diary_img'][]=$id; //保存住当前图片id号
			}
			echo json_encode($resinfo); //通过json形式返回给编辑器
			exit();
		}
		
		//日志文章添加方法
		public function insert(){
			//判断用户是否登录
			if($_SESSION['loginuser']['id']==null){
				$this->error("Must login to post blog");
			}
			
			//创建数据库操作对象
			$m = M("Diary");
			
			//封装要添加的数据
			$m->create();
			
			//数据追加
			$m->addtime = time();
			$m->uid = $_SESSION['loginuser']['id'];
			
			//执行日志添加并判断成功与否
			if($did = $m->add()){
				//执行图片添加
				//获取当前文章的所有关联图片
				$map['id']  = array('in',$_SESSION['diary_img']);
				$mod = M("Diarypic");
				$plist = $mod->where($map)->select();
				
				if(!empty($plist)){
					//遍历查出的每个图片
					foreach($plist as $v){
						//使用正则匹配并判断图片是否存在
						if(preg_match("/Uploads\/Diary\/{$v['picname']}/",$_POST['content'])){	
							$mod->where("id={$v['id']}")->setField('did',$did);
						}else{
							//若图片不在文章内，则执行删除。
							$mod->delete($v['id']);
							unlink("./Uploads/Diary/".$v['picname']);
						}
					}
				}
				unset($_SESSION['diary_img']);
				redirect(U("/Diary/mydiary/uid/{$_SESSION['loginuser']['id']}/id/{$did}"));
			}else{
				$this->error("Adding blog failed");
			}	
		}
		
		//定义日志编辑方法
		public function updatediary(){
			//获得日志ID
			$id = $_POST['id'];
			
			//创建数据库操作对象
			$m = M("Diary");
		
			//获得日志信息
			$uid = $m->where("id={$id}")->getField("uid");
	
			//判断是否是作者本人
			if($uid != $_SESSION['loginuser']['id']){
				$this->error("You have no right to operate");
			}
			
			//封装要修改的数据
			$m->create();
			
			$m->addtime = time();
			$m->uid = $uid;
			
			//执行修改并判断
			if($m->save()){
				//修改成功
				//执行图片修改判断
				//获取当前文章的所有关联图片
				$map['tid']  = $_POST['id'];
				if(!empty($_SESSION['diary_img'])){
					$map['id']  = array('in',$_SESSION['diary_img']);
					$map['_logic'] = 'OR';
				}
				$mod = M("diarypic");
				$plist = $mod->where($map)->select();
				if(!empty($plist)){
					//遍历查出的每个图片
					foreach($plist as $v){
						//使用正则匹配并判断图片是否存在
						if(preg_match("/Uploads\/Diary\/{$v['picname']}/",$_POST['content'])){
							$mod->where("id={$v['id']}")->setField('did',$id);
						}else{
							//若图片不在文章内，则执行删除。
							$mod->delete($v['id']);
							unlink("./Uploads/Diary/".$v['picname']);
						}
					}
				}
				unset($_SESSION['Diary_img']);
				redirect(U("/Diary/mydiary/uid/{$_SESSION['loginuser']['id']}/id/{$id}"));
			}else{
				//修改失败
				$this->error("Edit failed");
			}
		}
		
		//日志内容页
		public function mydiary(){
			//获取日志ID
			$id = $_GET['id'];
		
			//获取数据库操作对象
			$m = M("Diary");
			
			//获取日志信息
			$vo = $m->find($id);
			
			//将信息加载入模板引擎
			$this->assign("vo",$vo);
			
			//载入模板
			$this->display("mydiary");
		}
		
		//日志内容回复分页浏览
		public function doload(){
			//获取日志ID
			$did = $_GET['id'];
		
			//创建数据库操作对象
			$m = D("Diaryreply");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//创建搜索条件
			$map['did'] = $did;
			
			//计算总数据条数
			$count = $m->where($map)->count();
			
			//计算总页数
			$totalPages = ceil($count/5);
			
			//创建分页对象
			$page = new Page($count,5);
			
			//获取当前页数据
			$list = $m->order("addtime desc")->where($map)->relation(true)->limit($page->firstRow.",".$page->listRows)->select();
			
			//遍历回复修改时间
			foreach($list as &$vo){
				$vo['addtime'] = date("Y-m-d H:i:s",$vo['addtime']);
			}
			
			//拼装返回数据
			$data = array("totalPages"=>$totalPages,"count"=>$count,"list"=>$list);
			
			//输出数据
			echo json_encode($data);	
		}
		
		//删除日志回复
		public function delreply(){
			//获取要删除的回复id
			$id = $_GET['id'];
			
			//获取数据库操作对象
			$m = M("Diaryreply");
			
			//查询该日志作者id
			$uid = $m->where("id={$id}")->getField("uid");
			
			//判断是否是本人
			if($_SESSION['loginuser']['id'] != $uid){
				//不是本人操作
				echo "cannot";
				exit();
			}
			
			//通过验证，执行操作
			$n = $m->delete($id);
			
			if($n>0){
				//删除成功
				echo "true";
			}else{
				echo "flase";
			}
		}
		
		//日记回复的添加
		public function doreply(){
			//判断用户是否登录
			if($_SESSION['loginuser']==null){
				echo "nologin";
				exit();
			}
			//创建数据库操作对象
			$m = M("Diaryreply");
			
			//封装要添加的数据
			$m->create();
			
			$m->addtime = time();
			$m->uid = $_SESSION['loginuser']['id'];
			
			//执行添加并得到添加ID
			$n = $m->add();
			
			if($n>0){
				//添加成功
				echo "true";
			}else{
				echo "false";
			}
		}
		
		//定义删除日记函数
		public function deldiary(){
			//得到要删除日志的id
			$id = $_GET['id'];
			
			//创建数据库操作对象
			$m = M("Diary");
			
			//检索作者ID做判断
			$uid = $m->where("id={$id}")->getField("uid");
			
			//判断是否是作者本人
			if($uid != $_SESSION['loginuser']['id']){
				$this->error("You have no right to operate");
			}
			
			//执行删除
			if($m->delete($id)){
				//日志删除成功，开始删除相关内容
				//删除日志的图片
				$mod = M("Diarypic");
				
				//查询日志的图片列表
				$list = $mod->where("did={$id}")->select();
				
				//循环遍历删除每一张日志的图片
				foreach($list as $v){
					unlink("./Uploads/Diary/".$v['picname']);
				}
				
				//删除数据库中的记录
				$mod->where("did={$id}")->delete();
			
				//删除回复表所有相关回复
				M("Diaryreply")->where("did={$id}")->delete();
				redirect(U("/Diary/diarylist/uid/{$uid}"));
			}else{
				$this->error("Delete failed");
			}
		}
		
		//载入日志编辑页面
		public function editdiary(){
			//获得日志ID
			$id = $_GET['id'];
		
			//创建数据库操作对象
			$m = M("Diary");
		
			//获得日志信息
			$vo = $m->find($id);
			
			//判断是否是作者本人
			if($vo['uid'] != $_SESSION['loginuser']['id']){
				$this->error("You have no right to operate");
			}
			
			//讲日志信息加载入模板
			$this->assign("vo",$vo);
		
			//加载日志编辑模板并输出
			$this->display("editdiary");
		}
	}