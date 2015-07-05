<?php
class NewsdetailAction extends Action{
	public function newsdetail(){
		$mnews=M("Mnews");
		$mpicnews=M("Mpicnews");
		$data=$mnews->find($_GET['id']);
		$data['looknum']++;
		$mnews->save($data);
		$this->assign("new",$data);
		//右侧输出
		$mpic=$mnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['mid']=$mv['id'];
			$mp=$mpicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
			
		//最近一周
		$t1 = time()-604800;
		$mnew1=$mnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$mnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		//精彩推荐
		$mnew3=$mnews->where("state=2 and status=4 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['mid']=$v3['id'];
			$mp3=$mpicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("movienewsdetail");		
	}
	public function pnewsdetail(){
		$pnews=M("Pnews");
		$ppicnews=M("Ppicnews");
		$data=$pnews->find($_GET['id']);
		$data['looknum']+=1;
		//echo $p;die();
		$pnews->save($data);
		$this->assign("new",$data);
		//右侧输出
		$mpic=$pnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['pid']=$mv['id'];
			$mp=$ppicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
			
		//最近一周
		$t1 = time()-604800;
		$mnew1=$pnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$pnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
			
		//精彩推荐
		$mnew3=$pnews->where("state=2 and status=3 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['pid']=$v3['id'];
			$mp3=$ppicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("pmovienewsdetail");
	}
	//ajax请求分页
	public function newspage(){
		$nid=$_GET['nid'];
		$m=M("Newscomment");
		$count=$m->where("nid={$nid} and state=1")->count();
		import("ORG.Util.Page");
		$page=new Page($count,5);//创建分页对象
		//此处页码以get中的p接受 
		$map["nid"]=$nid;
		$map['state']=1;
		$list=$m->where($map)->limit($page->firstRow.",".$page->listRows)->order("addtime desc")->select();
		//添加用户
		foreach($list as &$v){
			$v['addtime']=date("Y-m-d H:i:s",$v['addtime']);
			$tmp=M("User")->find($v['uid']);
			$v['username']=$tmp['username'];
			$v['headpic']=$tmp['headpic'];
		}
		$totalpage=ceil($count/5);
		$data['totalpage']=$totalpage;
		$data['list']=$list;
		$data['maxrows']=$count;
		
		echo json_encode($data);
		die();
	}
	//ajax请求分页
	public function mnewspage(){
		$nid=$_GET['nid'];
		$m=M("Mnewscomment");
		$count=$m->where("nid={$nid} and state=1")->count();
		import("ORG.Util.Page");
		$page=new Page($count,5);//创建分页对象
		//此处页码以get中的p接受 
		$map["nid"]=$nid;
		$map['state']=1;
		$list=$m->where($map)->limit($page->firstRow.",".$page->listRows)->order("addtime desc")->select();
		//添加用户
		foreach($list as &$v){
			$v['addtime']=date("Y-m-d H:i:s",$v['addtime']);
			$tmp=M("User")->find($v['uid']);
			$v['username']=$tmp['username'];
			$v['headpic']=$tmp['headpic'];
		}
		$totalpage=ceil($count/5);
		$data['totalpage']=$totalpage;
		$data['list']=$list;
		$data['maxrows']=$count;
		
		echo json_encode($data);
		die();
	}
	//新闻评论
	public function newscomment(){
		if(empty($_SESSION['loginuser'])){
			echo 1;//用户不存在
			die();
		}
		$data["nid"]=$_POST["nid"];
		$data["uid"]=$_SESSION["loginuser"]["id"];
		$data["content"]=$_POST["content"];
		$data["addtime"]=time();
		$m=M("Newscomment");
		if($m->add($data)){//短评添加成功
			$tmp=M("User")->find($data['uid']);
			$data["addtime"]=date("Y-m-d H:i:s",$data["addtime"]);
			$data["username"]=$_SESSION["loginuser"]["username"];//添加用户名
			$data['headpic']=$tmp['headpic'];
			echo json_encode($data);
			
			die();
		}
		echo 2;//添加失败
		die();
	}
	//新闻评论
	public function mnewscomment(){
		if(empty($_SESSION['loginuser'])){
			echo 1;//用户不存在
			die();
		}
		$data["nid"]=$_POST["nid"];
		$data["uid"]=$_SESSION["loginuser"]["id"];
		$data["content"]=$_POST["content"];
		$data["addtime"]=time();
		$m=M("Mnewscomment");
		if($m->add($data)){//短评添加成功
			$tmp=M("User")->find($data['uid']);
			$data["addtime"]=date("Y-m-d H:i:s",$data["addtime"]);
			$data["username"]=$_SESSION["loginuser"]["username"];//添加用户名
			$data['headpic']=$tmp['headpic'];
			echo json_encode($data);
			
			die();
		}
		echo 2;//添加失败
		die();
	}
}