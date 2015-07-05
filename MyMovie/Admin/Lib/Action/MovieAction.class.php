<?php
	// 影片管理控制器
	class MovieAction extends CommonAction {
		
		// 封装搜索条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['filmname']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['petname']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
			// var_dump($_POST);
		}

		// 添加影片基本信息
		public function insert(){
			// 文件上传
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '50,70,100,140';
			$upload->thumbMaxHeight = '50,100,150,200';
			$upload->thumbPrefix = "a_,b_,c_,d_";

			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Movie/Cover/';// 设置附件上传目录
			
			if(!$upload->upload()) {
				// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{
				// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

			$_POST['showtime'] = strtotime($_POST['showtime']);
			$_POST['picname'] = $info[0]['savename'];
			$_POST['addtime'] = time();

			// 添加影片基本信息
			parent::insert();
		}

		/**
		 *	删除影片时
		 *	1. 删除影片的基本信息;
		 *	2. 删除影片的封面图片及相关缩略图
		 *	3. 删除与影片相关联的类别信息
		 **/

		public function delete(){

			$map['id']  = $_GET['id'];
			$movie = M('movie')->where($map)->find();
			$picname = $movie['picname'];

			// 2. 删除影片的封面图片及相关缩略图
			$path = "./Uploads/Movie/Cover";
			unlink($path."/".$picname);
			unlink($path."/a_".$picname);
			unlink($path."/b_".$picname);
			unlink($path."/c_".$picname);
			unlink($path."/d_".$picname);

			
			// 1. 删除影片基本信息
			parent::delete();
		}

		/*
		 *	更新影片基本信息时
		 * 	1. 判断是否有图片上传，如果有图片上传，则在新图片上传成功后删除原有图片
		 *	2. 如果没有图片上传，则更新其他信息
		 */
		public function update(){

			if($_FILES['picname']['error'] == 4){
				// 没有图片上传时
				$_POST['picname'] = $_POST['pname'];

				$_POST['showtime'] = strtotime($_POST['showtime']);
				parent::update();
			}
 
			// 删除影片的原封面图片及相关缩略图
			$picname = $_POST['pname'];
			$_POST['showtime'] = strtotime($_POST['showtime']);

			$path = "./Uploads/Movie/Cover";
			unlink($path."/".$picname);
			unlink($path."/a_".$picname);
			unlink($path."/b_".$picname);
			unlink($path."/c_".$picname);
			unlink($path."/d_".$picname);


			// 上传新图片
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '50,70,100,140';
			$upload->thumbMaxHeight = '50,100,150,200';
			$upload->thumbPrefix = "a_,b_,c_,d_";

			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Movie/Cover/';// 设置附件上传目录

			if(!$upload->upload()) {
				// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());

			}else{
				// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

			
			$_POST['picname'] = $info[0]['savename'];

			parent::update();
		}

		// 查看详情
		public function content(){
			$map['id'] = $_GET['id'];
			$vo = M('movie')->field('content')->where($map)->find();
			$this->assign('content', $vo['content']);

			$this->display();
		}

		// 设置演员视图
		

		// 设置分类视图
		public function setMType(){

			// 获取影片ID
			$movid = $_GET['id'];
			// $mt = M('mm_movie_type')->where('fid={$movid}')->select();
			$mt = M('movie_type')->where("fid={$movid}")->select();
		
			if($mt && count($mt)>0){
				$this->error('this movie has been set！');
				exit();
			}
			$type = M('type')->select();

			$mtype = array('category' => array(), 'country' => array(), 'year' => array());
			foreach ($type as $vo) {
				if ($vo['fid'] == 1) {
					$mtype1['category'][] = $vo;			
				}
			}

			foreach ($type as $vo) {
				if ($vo['fid'] == 2) {
					$mtype2['country'][] = $vo;
				}elseif ($vo['fid'] == 3){
					$mtype2['year'][] = $vo;
				}
			}

			$this->assign('movie_id', $movid);
			$this->assign('type1', $mtype1);
			$this->assign('type2', $mtype2);
			
			$this->display("setMType");
		}

		// 设置分类表单处理
		public function setTypeHandle(){


			$fid = array_shift($_POST);
				
			$movie_type = M('movie_type');

			$movie = M('Movie')->where($fid)->find();

			foreach ($_POST as $value) {
				if (is_array($value)) {
					foreach ($value as $v) {
						$data['fid'] = $fid;
						$data['tid'] = $v;
						if (!$movie_type->data($data)->add()) {
							$this->error("fail！");
						}	
					}
				}else{
					$data['fid'] = $fid;
					$data['tid'] = $value;
					if (!$movie_type->data($data)->add()) {
						$this->error("fail！");
					}	
				}
			}
			
			$this->success("success！");
		}

		// 查看影片分类
		public function showType(){

			$map['id'] = $_GET['id'];
			$movie = M('movie')->field('id,filmname,addtime')->where($map)->find();

			$mt['fid'] = $movie['id'];
			$mtype = M('movie_type')->field('tid')->where($mt)->select();
			
			foreach ($mtype as $vo) {
				$t['id'] = $vo['tid'];
				$type[] = M('type')->field('fid,typename')->where($t)->find();
			}
			$movie['type'] = $type;

			$this->assign('mt', $movie);

			$this->display();
		}

		// 修改分类视图
		public function edittype(){
			// 获取影片ID
			$movid = $_GET['id'];

			$type = M('type')->select();

			$mtype = array('category' => array(), 'country' => array(), 'year' => array());
			foreach ($type as $vo) {
				if ($vo['fid'] == 1) {
					$mtype1['category'][] = $vo;			
				}
			}

			foreach ($type as $vo) {
				if ($vo['fid'] == 2) {
					$mtype2['country'][] = $vo;
				}elseif ($vo['fid'] == 3){
					$mtype2['year'][] = $vo;
				}
			}

			$this->assign('movie_id', $movid);
			$this->assign('type1', $mtype1);
			$this->assign('type2', $mtype2);
			$this->display();
		}

		// 修改分类表单处理
		public function editTypeHandle(){
			// 删除影片原有类型
			
			// var_dump($_POST); 

			M('movie_type')->where("fid = {$_POST['movid']}")->delete();
			

			// 为影片添加新类型
			$fid = array_shift($_POST);
				
			$movie_type = M('movie_type');

			$movie = M('Movie')->where($fid)->find();

			foreach ($_POST as $value) {
				if (is_array($value)) {
					foreach ($value as $v) {
						$data['fid'] = $fid;
						$data['tid'] = $v;
						if (!$movie_type->data($data)->add()) {
							$this->error("fail！");
						}	
					}
				}else{
					$data['fid'] = $fid;
					$data['tid'] = $value;
					if (!$movie_type->data($data)->add()) {
						$this->error("fail！");
					}	
				}
			}
			$this->success("success！");

		}

		// 上传剧照视图
		public function uploads(){
			$movid = $_GET['id'];
			$this->assign('movid', $movid);
			$this->display();
		}

		// 上传剧照表单处理
		public function uploadsHandle(){
			
			// 上传
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/Movie/mPhotos/';// 设置附件上传目录

			$upload->thumb = true;
			$upload->thumbMaxWidth  = '100';
			$upload->thumbMaxHeight = '100';
			$upload->thumbPrefix = "m_";


			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}

			// 添加剧照信息
			
			$pic = M('filmpic');
			
			foreach ($info as $val) {
				
				$data['fid'] = $_POST['id'] ;
				$data['picname'] = $val['savename'];
				
				if (!$pic->add($data)) {
					$this->error('fail！');
				}
			}
			
			// 修改影片剧照是否设置字段
			M('Movie')->where("id={$_POST['id']}")->setField('hasphotos', 1);

			//
			$this->success("success！");

		}
		// 修改影片剧照视图
		public function edituploads(){
			$imgs = M('filmpic')->where("fid={$_GET['id']}")->select();
			$this->assign('pic', $imgs);
			$this->display();
		}

		// 修改影片剧照
		public function deleteimg(){
	
			$id = $_POST['id'];
			$pic = M('filmpic')->where($id)->find();

			$path = "./Uploads/Movie/mPhotos";
			$picname =  $pic['picname'];
			
			if(!unlink($path."/".$picname)){
				echo $path."/".$picname;
				exit();
			}

			if (!unlink($path."/m_".$picname)) {
				echo "false";
				exit();	
			}

			// 1. 删除数据库中相应信息
			$map['id'] = $id;
			if(!M('filmpic')->where($map)->delete()){
				echo "false";
				exit();
			}

			// 2. 删除相对应的图片
			
			echo "true";

		}

		// 查看影片剧照视图showPhotos
		public function showPhotos(){

			$imgs = M('filmpic')->where("fid={$_GET['id']}")->select();
			$this->assign('pic', $imgs);

			$this->display();
		}

		// 修改影片状态视
		public function editstatus(){
			
			$map['id'] = $_GET['id'];
			$vo = M('movie')->field('id,filmname,petname,addtime,status')->where($map)->find();
			
			$this->assign('vo', $vo);
			$this->display();
		}

		// 修改影片状态表单处理
		public function editStatusHandle(){

			$fid = $_POST['id'];  // 影片ID
			// 1. 是否上传剧照
			$Model = new Model();  // 实例化一个model对象
			$hasphotos = $Model->query("SELECT COUNT(mp.fid) 'pnum' FROM mm_movie m LEFT JOIN mm_filmpic mp ON mp.fid=m.id WHERE m.id={$fid}");

			if ($hasphotos[0]['pnum'] == 0 ) {
				$this->error("no image！");
				exit();
			}

			// 2. 是否设置类型信息
			$hastypes = $Model->query("SELECT COUNT(mt.fid) 'tnum' FROM mm_movie m LEFT JOIN mm_movie_type mt ON mt.fid=m.id WHERE m.id={$fid}");
			if ($hastypes[0]['tnum'] == 0 ) {
				$this->error("no category！");
				exit();
			}

			// 3. 是否设置演员信息
			$hasactors = $Model->query("SELECT COUNT(ma.fid) 'anum' FROM mm_movie m LEFT JOIN mm_movie_actor ma ON ma.fid=m.id WHERE m.id={$fid}");
			if ($hasactors[0]['anum'] == 0 ) {
				$this->error("no actor information！");
				exit();
			}


			$data['status'] = $_POST['status'];
			$map['id'] = $_POST['id'];
			
			if (M('movie')->where($map)->save($data)) {
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// 设置演员视图
		public function setActors(){
			
			$this->assign('movid', $_GET['id']);
			$this->display();
		}

		// 设置演员表单处理
		public function setActorsHandle(){
			// var_dump($_POST);
			$map['cname'] = $_POST['name'];
			$movid = $_POST['id'];

			// 查找
			$name = M('actors')->field('id')->where($map)->find();

			if ($name && count($name)) {
				$data['fid'] = $movid;
				$data['aid'] = $name['id'];
				$mactor = M('movie_actor');

				if (!$mactor->where($data)->find()) {

					if ($mactor->add($data)){
						echo "true";
					} else {
						echo "wrong,try again";
					}

				} else {
					echo "you have add this actor";
				}
			}else {
				echo "actor not exist";
			}
		}

		// 查看演员信息
		public function showActors(){
			
			$movid = $_GET['id'];  // 影片ID
			$Model = new Model();  // 实例化一个model对象
			$list = $Model->query("SELECT ma.* FROM mm_actors ma LEFT JOIN mm_movie_actor act ON ma.id=act.aid WHERE act.fid='{$movid}'");
			
			$this->assign('list', $list);
			$this->display();
		}

		// 修改演员信息
		public function editactors(){
			$movid = $_GET['id'];  // 影片ID
			$Model = new Model();  // 实例化一个model对象
			$list = $Model->query("SELECT ma.* FROM mm_actors ma LEFT JOIN mm_movie_actor act ON ma.id=act.aid WHERE act.fid='{$movid}'");
			
			$this->assign('movid', $movid);
			$this->assign('list', $list);
			$this->display();	
		}

		// 删除演员操作
		public function deleteactor(){

			//var_dump($_GET); die();
			$aid = $_GET['id'];
			$movid = $_GET['movid'];

			if(M('movie_actor')->where("aid = {$aid} and fid = {$movid}")->delete()){
				$this->success('success');
			}else{
				$this->error('fail');
			}

		}
	}
?>