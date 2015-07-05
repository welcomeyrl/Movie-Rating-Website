<?php
class FriendlinkAction extends CommonAction{
	//浏览
	public function index(){
		//判断排序条件
		//$order="id asc,addtime desc"; //id升序
		if(!empty($_REQUEST['_order'])){
			$order=$_REQUEST['_order']." ".$_REQUEST['_sort'];
		}
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['linkname']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
		}
		//状态的搜索
		if(!empty($_REQUEST["state"])){
			$map["state"]=$_REQUEST['state'];
		}
		
		$m=M("Friendlink");
		//分页
		$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
		
		$numPerPage=isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:10;
		
		import("ORG.Util.Page");//导入分页类
		$count=$m->where($map)->count();//查询满足要求的总记录数
		$Page=new Page($count,$numPerPage);//实例化分页类 传入总记录数和每页显示的记录数
		
		$this->assign("list",$m->where($map)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select());
		
		$this->assign("totalCount",$count);//封装总数据条数
		$this->assign("numPerPage",$numPerPage);//封装页大小
		$this->assign("currentPage",$_REQUEST['pageNum']);//当前页
		
		$this->display("index");
	}
	//添加友情链接
	public function add(){
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
		$upload->thumbMaxWidth = '90';
		$upload->thumbMaxHeight = '30';
		$upload->thumbPrefix="c_";
		$upload->thumbRemoveOrigin=true;//删除原图
		
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo();
			//$name = $info[0]['savename'];//获取文件名
		}
	
		// 保存表单数据 包括附件数据
		$m=M("Friendlink");
		$m->create();
		$m->picname=$info[0]['savename']; // 保存上传的照片根据需要自行组装
		$m->dtime=time();
		if($m->add()){
			$this->success("success！");
		}else{
			$this->error("fail！");
		}
		
	}
	//删除
	public function del(){
		$m=M("Friendlink");
		
		//echo __ROOT__;
		//die;
		$pic=$m->find($_GET['id']);
		$res=$m->delete($_GET['id']);
		if($res){
			unlink('./Uploads/News/mypic/c_'.$pic['picname']);
			$this->success('success！');
		}else{
			$this->error("fail！");
		}
	}
	//修改
	public function edit(){
		$m=M("Friendlink");
		$this->assign("vo",$m->find($_GET['id']));
		$this->display('edit');
	}
	//执行修改
	public function update(){
		$m=M("Friendlink");
		$pic=$m->find($_GET['id']);
		//dump($pic);
		$m->create();
		
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
			$upload->thumbMaxWidth = '90';
			$upload->thumbMaxHeight = '30';
			$upload->thumbPrefix="c_";
			$upload->thumbRemoveOrigin=true;//删除原图
			
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info=$upload->getUploadFileInfo();
				$name=$info[0]['savename'];//获取文件名
			}
			unlink('./Uploads/News/mypic/c_'.$pic['picname']);
			
			$m->picname=$name; // 保存上传的照片根据需要自行组装
		}
		
		if($m->save()){
			$this->success("success！");
		}else{
			$this->error("fail！");
		}
	}

}