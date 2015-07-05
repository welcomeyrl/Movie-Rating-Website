<?php
//人物新闻信息管理Action

class PnewsAction extends CommonAction{
	//浏览
	public function index(){
		//判断排序条件
		//$order="id asc,addtime desc"; //id升序
		if(!empty($_REQUEST['_order'])){
			$order=$_REQUEST['_order']." ".$_REQUEST['_sort'];
		}
		
		//搜索条件有值则做封装
		if(!empty($_REQUEST['keyword'])){
			$where['author']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['title']  = array('like', "%{$_REQUEST['keyword']}%");
			$where['_logic'] = 'or';
			$map['_complex'] = $where;
		}
		//状态的搜索
		if(!empty($_REQUEST["state"])){
			$map["state"]=$_REQUEST['state'];
		}
		//类型的搜索
		if(!empty($_REQUEST["status"])){
			$map["status"]=$_REQUEST['status'];
		}
		$m=M("Pnews");
		//分页
		$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
		
		$numPerPage=isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:7;
		
		import("ORG.Util.Page");//导入分页类
		$count=$m->where($map)->count();//查询满足要求的总记录数
		$Page=new Page($count,$numPerPage);//实例化分页类 传入总记录数和每页显示的记录数
		
		$this->assign("list",$m->where($map)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select());
		
		$this->assign("totalCount",$count);//封装总数据条数
		$this->assign("numPerPage",$numPerPage);//封装页大小
		$this->assign("currentPage",$_REQUEST['pageNum']);//当前页
		
		$this->display("index");
	}
	
	public function doupload(){
		//准备上传返回的结果
		$resinfo = array("err"=>"","msg"=>"");
		
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/News/article/';// 设置附件上传目录
		
		//对上传图片的缩放设置
		$upload->thumb = true;
		$upload->thumbMaxWidth = '500,300,180';
		$upload->thumbMaxHeight = '330,250,100';
		$upload->thumbPrefix="a_,b_,c_";
		$upload->thumbRemoveOrigin=true;//删除原图
		
		if(!$upload->upload()) {// 上传错误提示错误信息
			$resinfo['err']=$upload->getErrorMsg();
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$resinfo['msg']=__ROOT__."/Uploads/News/article/a_".$info[0]['savename']; //获取上传的图片名
			
			//执行图片信息的添加
			$data['pid']=0;
			$data['pica']=$info[0]['savename'];	
			$data['create_time']=time();
			$id=M("Ppicnews")->add($data);
			$_SESSION['article_img'][]=$id; //保存住当前图片id号
		}
		
		echo json_encode($resinfo);
		exit();
	}
	
	
	//添加
	public function add(){
		$_SESSION['article_img']=array();
		$this->display("add");
	}
	//执行添加
	public function insert(){
	
		//图片上传处理
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/News/article/';// 设置附件上传目录
		
		//对上传图片的缩放设置
		$upload->thumb = true;
		$upload->thumbMaxWidth = '90,50';
		$upload->thumbMaxHeight = '90,50';
		$upload->thumbPrefix="d_,e_";
		$upload->thumbRemoveOrigin=true;//删除原图
		
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo();
			$name = $info[0]['savename'];//获取文件名
		}
	
		// 保存表单数据 包括附件数据
		$m=M("Pnews");
		$n=$m->create();
		
		if(empty($n['content']) && $n['state']==2){
			$this->error("请添加新闻内容！");
		}
		
		$m->picname=$info[0]['savename']; // 保存上传的照片根据需要自行组装
		$m->addtime=time();
		if($result=$m->add()){
			$m->id=$result;
			//获取当前文章的所有关联图片
			$map['id']=array('in',$_SESSION['article_img']);
			$mod=M("Ppicnews");
			$plist = $mod->where($map)->select();
			if(!empty($plist)){
				//遍历查出的每个图片
				foreach($plist as $v){
					//使用正则匹配并判断图片是否存在
					if(preg_match("/Uploads\/News\/article\/a_{$v['pica']}/",$_POST['content'])){
						$mod->where("id={$v['id']}")->setField('pid',$m->id);
					}else{
						//若图片不在文章内，则执行删除。
						$mod->delete($v['id']);
						unlink("./Uploads/News/article/a_".$v['pica']);
						unlink("./Uploads/News/article/b_".$v['pica']);
						unlink("./Uploads/News/article/c_".$v['pica']);
					}
				}
			}
			unset($_SESSION['article_img']);
			
			$this->success("成功！");
		}else{
			$this->error("失败！");
		}
		
	}
	//删除
	public function del(){
		$m=M("Pnews");
		$pic=$m->find($_GET['id']);
		$map['pid']=$_GET['id'];
		$res=M('Ppicnews')->where($map)->select();
		foreach($res as $vo){	
			$map['id']=$vo['id'];
			unlink('./Uploads/News/article/a_'.$vo['pica']);
			unlink('./Uploads/News/article/b_'.$vo['pica']);
			unlink('./Uploads/News/article/c_'.$vo['pica']);
			M('Ppicnews')->where($map)->delete();
		}
		$map['id']=$_GET['id'];
		$list=$m->where($map)->delete();
		if($list){
			unlink('./Uploads/News/article/d_'.$pic['picname']);
			unlink('./Uploads/News/article/e_'.$pic['picname']);
			$this->success('删除成功！');
		}else{
			$this->error("删除失败！");
		}
	}
	//修改
	public function edit(){
		$_SESSION['article_img']=array();
		$m=M("Pnews");
		$this->assign("vo",$m->find($_GET['id']));
		$this->display('edit');
	}
	//执行修改
	public function update(){
		$m=M("Pnews");
		$pic=$m->find($_POST['id']);
		$map['pid']=$pic['id'];
		//dump($map);die();	//id
		$n=$m->create();
		
		if($_FILES['picname']['name']){
			//dump ($_FILES['picname']['name']);
			//图片上传处理
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Uploads/News/article/';// 设置附件上传目录
			
			//对上传图片的缩放设置
			$upload->thumb = true;
			$upload->thumbMaxWidth = '90,50';
			$upload->thumbMaxHeight = '90,50';
			$upload->thumbPrefix="d_,e_";
			$upload->thumbRemoveOrigin=true;//删除原图
			
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info=$upload->getUploadFileInfo();
				$name=$info[0]['savename'];//获取文件名
			}
			
			unlink('./Uploads/News/article/d_'.$pic['picname']);
			unlink('./Uploads/News/article/e_'.$pic['picname']);
			
			$m->picname=$name; // 保存上传的照片根据需要自行组装
		}
		
		if(empty($pic['content']) && empty($n['content']) && $n['state']==2){
			$this->error("请添加新闻内容！");
		}
		
		
		if($m->save()){
			$res = M('Ppicnews')->where($map)->select();
				//dump($res);die();
				foreach( $res as $vo ){
					if(preg_match("/{$vo['pica']}/",$_POST['content'])){
						//$mod->where("id={$v['id']}")->setField('pid',$map['pid']);	
					}else{
						//M("Ppicnews")->where($vo)->delete();
						//若图片不在文章内，则执行删除。
						M("Ppicnews")->delete($vo['id']);
						unlink("./Uploads/News/article/a_".$vo['pica']);
						unlink("./Uploads/News/article/b_".$vo['pica']);
						unlink("./Uploads/News/article/c_".$vo['pica']);
					}
				}
				//die();
			if(!empty($_SESSION['article_img'])){
				//获取当前文章的所有关联图片
				$mp['id']=array('in',$_SESSION['article_img']);
				//dump($mp);die();
				$mod=M("Ppicnews");
				$plist = $mod->where($mp)->select();
				//dump($plist);die();
				//$list=array_merge($mlist,$plist);
				//dump($list);die();
				if(!empty($plist)){
					//遍历查出的每个图片
					foreach($plist as $v){
						//使用正则匹配并判断图片是否存在
						//dump($v);die();
						if(preg_match("/Uploads\/News\/article\/a_{$v['pica']}/",$_POST['content'])){
							$mod->where("id={$v['id']}")->setField('pid',$map['pid']);
						}else{
							//若图片不在文章内，则执行删除。
							$mod->delete($v['id']);
							unlink("./Uploads/News/article/a_".$v['pica']);
							unlink("./Uploads/News/article/b_".$v['pica']);
							unlink("./Uploads/News/article/c_".$v['pica']);
						}
					}
				}
				unset($_SESSION['article_img']);
			}
			
			$this->success("修改成功！");
		}else{
			$this->error("修改失败！");
		}
	}
	//查看新闻详情
	public function detail(){
		$m=M("Pnews");
		$this->assign("vo",$m->find($_GET['id']));
		$this->display('detail');
	}
}