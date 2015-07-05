<?php
class PptAction extends CommonAction{
	//浏览
	public function index(){
		$m=M("Movie");
		$map['status']=2;
		$q=$m->field("id,filmname,status,picname")->where($map)->select();
		
		foreach($q as $v){
			$n=array();
			$where['title']=$v['filmname'];
			$n['title']=$v['filmname'];
			$n['mid']=$v['id'];
			$n['state']=2;
			$p=M("Ppt");
			$count=$p->where($where)->select();
			if(empty($count)){
				$p->add($n);
			}
		}
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['title']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$mp['_complex'] = $where;
		}
		
		//状态的搜索
		if(!empty($_REQUEST["state"])){
			$mp["state"]=$_REQUEST['state'];
		}
		$ppt=M('Ppt');
		$list=$ppt->where($mp)->select();
		$this->assign("list",$list);
		$this->display("index");
	}
	
	//添加幻灯片图片
	public function add(){
		$m=M("Ppt");
		$this->assign("vo",$m->find($_GET['id']));
		$this->display("add");
	}
	//执行添加
	public function insert(){
		
		//图片上传处理
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/News/mypic/';// 设置附件上传目录
		
		//对上传图片的缩放设置
		$upload->thumb = true;
		$upload->thumbMaxWidth = '960,137,100';
		$upload->thumbMaxHeight = '340,53,40';
		$upload->thumbPrefix="b_,c_,s_";
		$upload->thumbRemoveOrigin=true;//删除原图
		
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo();
			//$name = $info[0]['savename'];//获取文件名
		}
		//
		// 保存表单数据 包括附件数据
		$m=M("Ppt");
		$m->find($_POST['id']);
		$m->picname=$info[0]['savename']; // 保存上传的照片根据需要自行组装
		if($m->save()){
			$this->success("success！");
		}else{
			$this->error("fail！");
		}
		
	}
	//删除
	public function del(){
		$m=M("Ppt");
		
		//echo __ROOT__;
		//die;
		$pic=$m->find($_GET['id']);
		$res=$m->delete($_GET['id']);
		if($res){
			unlink('./Uploads/News/mypic/b_'.$pic['picname']);
			unlink('./Uploads/News/mypic/s_'.$pic['picname']);
			unlink('./Uploads/News/mypic/c_'.$pic['picname']);
			$this->success('success！');
		}else{
			$this->error("fail！");
		}
	}
	//修改
	public function edit(){
		$m=M("Ppt");
		$this->assign("vo",$m->find($_GET['id']));
		$this->display('edit');
	}
	//执行修改
	public function update(){
		$m=M("Ppt");
		$pic=$m->find($_POST['id']);
		$n=$m->create();
		if($_FILES['picname']['name']){
			//dump ($_FILES['picname']['name']);
			//图片上传处理
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/News/mypic/';// 设置附件上传目录
			
			//对上传图片的缩放设置
			$upload->thumb = true;
			$upload->thumbMaxWidth = '960,137,100';
			$upload->thumbMaxHeight = '340,53,40';
			$upload->thumbPrefix="b_,c_,s_";
			$upload->thumbRemoveOrigin=true;//删除原图
			
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info=$upload->getUploadFileInfo();
				$name=$info[0]['savename'];//获取文件名
			}
			unlink('./Uploads/News/mypic/b_'.$pic['picname']);
			unlink('./Uploads/News/mypic/s_'.$pic['picname']);
			unlink('./Uploads/News/mypic/c_'.$pic['picname']);
			
			$m->picname=$name; // 保存上传的照片根据需要自行组装
		}
		if(empty($pic['picname']) && empty($name) && $n['state']==1){
			$this->error("please upload image！");
		}
			//dump($p);die();
		if($m->save()){
			$this->success("success！");
		}else{
			$this->error("fail！");
		}
	}
}