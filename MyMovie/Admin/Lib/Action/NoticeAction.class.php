<?php
	//公告管理Action类
	class NoticeAction extends CommonAction{
		//重写公告添加方法
		public function insert(){
			//绑定添加事件
			$_POST['addtime'] = time();
			parent::insert();
		}
		
		//重写add方法
		public function add(){
			$_SESSION['notice_img'] = array(); //清空session中的公告图片信息
			parent::add();
		}
		
		//重写edit方法
		public function edit(){
			$_SESSION['notice_img'] = array(); //清空session中的公告图片信息
			parent::edit();
		}
		
		//添加成功后回调方法(在这里主要处理添加文章的图片信息)
		public function _tigger_insert($model){
			//获取当前文章的所有关联图片
			$map['id']  = array('in',$_SESSION['notice_img']);
			$mod = M("Picture");
			$plist = $mod->where($map)->select();
			if(!empty($plist)){
				//遍历查出的每个图片
				foreach($plist as $v){
					//使用正则匹配并判断图片是否存在
					if(preg_match("/Uploads\/Notice\/{$v['picname']}/",$_POST['content'])){
						$mod->where("id={$v['id']}")->setField('tid',$model->id);
					}else{
						//若图片不在文章内，则执行删除。
						$mod->delete($v['id']);
						unlink("./Uploads/Notice/".$v['picname']);
					}
				}
			}
			unset($_SESSION['notice_img']);
		}
			
		//修改成功后回调方法(在这里主要处理添加文章的图片信息)
		public function _tigger_update($model){
			//获取当前文章的所有关联图片
			$map['tid']  = $_POST['id'];
			if($_SESSION['notice_img'] != null){
				$map['id']  = array('in',$_SESSION['notice_img']);
				$map['_logic'] = 'OR';
			}
			$mod = M("Picture");
			$plist = $mod->where($map)->select();
		
			if(!empty($plist)){
				//遍历查出的每个图片
				foreach($plist as $v){
					//使用正则匹配并判断图片是否存在
					if(preg_match("/Uploads\/Notice\/{$v['picname']}/",$_POST['content'])){
						$mod->where("id={$v['id']}")->setField('tid',$_POST['id']);
					}else{
						//若图片不在文章内，则执行删除。
						$mod->delete($v['id']);
						unlink("./Uploads/Notice/".$v['picname']);
					}
				}
			}
			unset($_SESSION['notice_img']);
		}
			
		//定义图片上传方法
		public function doupload(){
			//准备上传返回的结果
		$resinfo = array("err"=>"","msg"=>"");
		
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/Notice/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$resinfo['err']=$upload->getErrorMsg();
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$resinfo['msg']=__ROOT__."/Uploads/Notice/".$info[0]['savename']; //获取上传的图片名
			
			//执行图片信息的添加
			$data['tbname']="notice";
			$data['tid']=0;
			$data['picname']=$info[0]['savename'];	
			$data['create_time']=time();
			$id = M("Picture")->add($data);
			$_SESSION['notice_img'][]=$id; //保存住当前图片id号
		}
		echo json_encode($resinfo); //通过json形式返回给编辑器
		exit();
			
		}
		
	}