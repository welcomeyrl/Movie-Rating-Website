<?php

//预告片类 
class PrevueAction extends CommonAction{
	
	//封装多字段的搜索条件(加地址符直接修改原值)
	public function _filter(&$map){
		
		//关键字模糊搜索
		if(!empty($_REQUEST["keyword"])){
			$map["title"]=array("like","%{$_REQUEST['keyword']}%");
		}
		//状态的搜索
		if(!empty($_REQUEST["status"])){
			$map["status"]=$_REQUEST['status'];
		}
		
		
	}

	//数据加工回调函数
	public function _tigger_list(&$list){
		//状态显示
		foreach($list as &$v){
			//判断状态转换中文
			switch($v["status"]){
				case "0":		
					$v["status"]="new";
					break;
				case "1":
					$v["status"]="display";
					break;
				case "2":
					$v["status"]="hidden";
					break;	
			}
		}
		
		//电影名
		foreach($list as &$v){
			$tmp=M("Movie")->field("filmname")->find($v["fid"]);
			$v["fid"]=$tmp["filmname"];
		}
	}
	
	//添加表单追加影片信息
	public function add(){
		$list=M("Movie")->field("id,filmname")->select();
		$this->assign("list",$list);
		parent::add();
	}
	
	//添加预告片
	public function insert(){
		//预告片上传
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 314572800000;// 设置附件上传大小300M
		$upload->allowExts  = array('flv', 'avi', 'mp4', 'rmvb');// 设置附件上传类型
		$upload->savePath =  './Uploads/Video/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
		//封装POST
		$_POST["videoname"]=$info[0]["savename"];
		$_POST["addtime"]=time();
		//dump($_POST);
		parent::insert();
	}
	
	//修改预告片
	public function edit(){
		$list=M("Movie")->field("id,filmname")->select();
		$this->assign("list",$list);
		
		parent::edit();
	}
	
	//修改操作
	public function update(){
		//修改影片删除老影片

		if(!empty($_FILES["name"])){
			//预告片上传
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 314572800000;// 设置附件上传大小300M
			$upload->allowExts  = array('flv', 'avi', 'mp4', 'rmvb');// 设置附件上传类型
			$upload->savePath =  './Uploads/Video/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				die();
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			
			$oldpic=M("Prevue")->field("videoname")->find($_POST["id"]);
			unlink("./Uploads/Video/{$oldpic['videoname']}");
			
			//封装POST
			$_POST["videoname"]=$info[0]["savename"];
		}
		
		parent::update();
	}
	
	//添加封面表单
	public function addpic(){
		$list=M("Prevue")->find($_GET["id"]);
		$tmp=M("Movie")->find($list["fid"]);
		$list["filmname"]=$tmp["filmname"];
		$this->assign("list",$list);
		$this->display("addpic");
	}
	
	//添加封面图
	public function insertpic(){
		if(!empty($_FILES)){
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728;// 设置附件上传大小3M
			$upload->allowExts  = array('jpg', 'jpeg', 'gif', 'png');// 设置附件上传类型
			$upload->savePath =  './Uploads/Prevue/';// 设置附件上传目录
			$upload->thumb=true;//开启缩略图
			$upload->thumbMaxWidth="60,260,586";//宽
			$upload->thumbMaxHeight="40,170,390";//高
			$upload->thumbPrefix="a_,b_,c_";//缩略图前缀
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				die();
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			
			//如果有原图就删除原图
			$oldpic=M("Prevue")->find($_POST["id"]);
			if($old["picname"]!="null"){
				//存在原图删除原图
				unlink("./Uploads/Prevue/a_".$oldpic["picname"]);
				unlink("./Uploads/Prevue/b_".$oldpic["picname"]);
				unlink("./Uploads/Prevue/c_".$oldpic["picname"]);
				unlink("./Uploads/Prevue/".$oldpic["picname"]);
			}
			
			//添加数据库
			$_POST["picname"]=$info[0]["savename"];
			$model=M("Prevue");
			if($model->save($_POST)){
				$this->success(L('success'));
			}else{
				$this->error(L('fail').$model->getLastSql());
			}
		}else{
			$this->error(L('no change'));
		}
	}
	
	//删除预告片图片和视频
	public function delete(){
		$del=M("Prevue")->find($_GET["id"]);
		if($del){
			//删除视频
			unlink("./Uploads/Video/".$del["videoname"]);
			//删除图片
			unlink("./Uploads/Prevue/a_".$del["picname"]);
			unlink("./Uploads/Prevue/b_".$del["picname"]);
			unlink("./Uploads/Prevue/c_".$del["picname"]);
			unlink("./Uploads/Prevue/".$del["picname"]);
		}
		
		parent::delete();
	}
}