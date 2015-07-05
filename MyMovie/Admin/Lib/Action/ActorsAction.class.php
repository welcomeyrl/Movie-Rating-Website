<?php
	// 演员管理控制器
	class ActorsAction extends CommonAction {

		public function index(){

			$list = M('')->query("SELECT act.*,COUNT(pic.aid) 'num' FROM mm_actors act LEFT JOIN mm_picactor pic ON pic.aid=act.id");

			$this->assign("list", $list);

			// var_dump($list);die();
			parent::index();
		}

		//封装搜素条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['cname']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['ename']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
		}

		// 添加演员表单处理
		public function insert(){
			// 文件上传
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '35,140';
			$upload->thumbMaxHeight = '50,200';
			$upload->thumbPrefix = "s_,l_";

			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Actor/Photo/';// 设置附件上传目录

			if(!$upload->upload()) {
				// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());

			}else{
				// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

		
			$_POST['picname'] = $info[0]['savename'];
			$_POST['birthday'] = strtotime($_POST['birthday']);
			$_POST['addtime'] = time();


			// 添加影片基本信息
			if(M('actors')->add($_POST)){
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// 修改演员信息表单处理
		public function update(){
	
			// 未修改演员图片
			if($_FILES['picname']['name'] == ""){

				parent::update();
			}

			// 修改演员头像时
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '35,140';
			$upload->thumbMaxHeight = '50,200';
			$upload->thumbPrefix = "s_,l_";

			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Actor/Photo/';// 设置附件上传目录

			if(!$upload->upload()) {
				// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());

			}else{
				// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

			// 获取原图片名
			/*$vo =  M('actors')->where($_POST['id'])->find();
			echo $vo['picname'];*/
			
			$picname = $_POST['picname'];
			// 删除原图片
			unlink("./Uploads/Actor/Photo/".$picname);
			unlink("./Uploads/Actor/Photo/s_".$picname);
			unlink("./Uploads/Actor/Photo/l_".$picname);

			// 更新数据库信息
			$_POST['picname'] = $info[0]['savename'];
			$_POST['birthday'] = mktime($_POST['birthday']);

			parent::update();
		}

		// 添加演员剧照视图
		public function addActorImgs(){
			$this->assign('aid', $_GET['id']);

			$this->display();
		}

		// 删除演员时
		public function delete(){

			$aid = $_GET['id'];

			// 查找演员头像
			$pname = M('actors')->field('picname')->where($aid)->find();
			$picname = $pname['picname'];
			// 删除演员头像
			unlink("__UPLOAD__/Actor/Photo/".$picname);
			unlink("__UPLOAD__/Actor/Photo/s_".$picname);
			unlink("__UPLOAD__/Actor/Photo/l_".$picname);
			
			parent::delete();
		}

		// 演员详情视图
		public function content(){

			$map['id'] = $_GET['id'];
			$vo = M('actors')->field('intro')->where($map)->find();
			$this->assign('intro', $vo['intro']);

			$this->display();
		}



		// 添加演员剧照表单处理
		public function uploadsHandle(){
			// var_dump($_FILES);
			$aid = $_POST['aid'];    // ID

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Actor/Photos/';// 设置附件上传目录

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '50,100';
			$upload->thumbMaxHeight = '50,100';
			$upload->thumbPrefix = "s_,m_";


			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

			// 添加剧照信息
			
			$pic = M('picactor');
			
			foreach ($info as $val) {
				
				$data['aid'] = $_POST['id'] ;
				$data['picname'] = $val['savename'];
				
				if (!$pic->add($data)) {
					$this->error('fail！');
					exit();
				}
			}

			$this->success("success！");
		}

		// 查看演员剧照视图
		public function showpics(){

			$imgs = M('picactor')->where("aid={$_GET['id']}")->select();
			$this->assign('pic', $imgs);
			$this->display();
		}

		// 修改演员剧照
		public function editActorImgs(){

			$aid = $_GET['id'];  // 演员ID
			
			$map['aid'] = $aid;
			$imgs = M('picactor')->where($map)->select();

			$i = 1;
			$res = array();
			foreach ($imgs as $v) {
				$v['natid'] = $i;
				$i++;
				$res[] = $v;
			}

			$this->assign("imgs", $res);
			$this->display();
		}

		// 删除演员剧照
		public function deleteimg(){

			$pid = $_POST['id'];   // 剧照ID

			$pic = M('picactor')->field('picname')->where($pic)->find();
			$picname = $pic['picname'];

			$map['id'] = $pid;
			if (!M('picactor')->where($map)->delete()) {
				echo "false";
			}
			// 删除演员剧照
			unlink("./Uploads/Actor/Photos/".$picname);
			unlink("./Uploads/Actor/Photos/s_".$picname);
			unlink("./Uploads/Actor/Photos/m_".$picname);

			echo "true";
		}
	}
?>