<?php
// 前台电影详情页入口文件

class DetailAction extends Action {

	//浏览电影详情
    public function index(){
		$fid=$_GET["id"];//影片id
		
		if(empty($fid)){
			$this->redirect("List/index");//无影评id跳转
			die();
		}
		
		//预告片
		$video=M("Prevue")->where("fid={$fid}")->find();
		$this->assign("video",$video);
		
		//浏览数自增 
		M()->query("UPDATE mm_movie SET clicknum=clicknum+1 WHERE id={$fid}");
		
		//影片详情
		$movie=D("Movie")->relation(true)->find($fid);

		//添加影片的评论数
		$sum=0;
		$sum+=M("Longreview")->where("fid=".$fid)->count();
		$sum+=M("Shortreview")->where("fid=".$fid)->count();
		$movie["reviewtotal"]=$sum;
		//计算评分
		$m=M("Rate");
		$score=$m->where("fid=".$fid)->avg("score");//评分数

		
		$movie["score"]=$score;
		$this->assign("movie",$movie);

		//影评列表
		$reviewlist=D("Longreview")->relation("user")->where("fid={$fid} and status in(1,2)")->limit(5)->order("rnum desc")->select();
		//处理显示的影评内容
		foreach($reviewlist as &$v){
			$str=strip_tags($v["content"]);
			$str=preg_replace("/[\s\ ]*/","",$str);
			$v["content"]=substr($str,0,450)."......";
			$v["countreply"]=M("Reviewreply")->where("rid=".$v["id"])->count();//统计回复数
		}
		$this->assign("reviewlist",$reviewlist);
		// dump($reviewlist);
		// die();
		
		// 电影分类
		$this->moviesort();

		//台词
		$this->dialogue();

		// 热评榜
		$this->review();

		// top10
		$this->clicknum();
		
		//幻灯片
		$this->link();
		$this->display("detail");
		
	}
	
	//赞操作
	public function dopraise(){
		//定义放回的json数组
		$res=array("stat"=>"","prasenum"=>"");
	
		$fid=$_POST["fid"];//电影id
		//判断是否登陆
		if(empty($_SESSION["loginuser"])){
			$res["stat"]=1;
			echo  json_encode($res);//提示登陆
			die();
		}
		
		$m=M("Praise");
		//判断用户是否评价
		$map["fid"]=$fid;//影片id
		$map["uid"]=$_SESSION['loginuser']['id'];//用户id
		$info=$m->where($map)->find();
		if(!empty($info)){//不为空表示已经赞过
			$res["stat"]=2;
			echo json_encode($res);
			die();
		}
		
		//为空进行添加操作
		$map["addtime"]=time();
		$m->add($map);
		$res["stat"]=3;//赞成功
		$praisenum=$m->where("fid={$fid}")->count();//赞数
		$res["praisenum"]=$praisenum;
		echo  json_encode($res);
		//电影赞数写入电影表
		M()->query("UPDATE mm_movie SET pnum={$praisenum} WHERE id={$fid}");
		die();	
	}
	
	
	//看过操作
	public function dosaw(){
		//定义放回的json数组
		$res=array("stat"=>"","seenum"=>"","sawnum"=>"");
	
		$fid=$_POST["fid"];//电影id
		//判断是否登陆
		if(empty($_SESSION["loginuser"])){
			$res["stat"]=1;
			echo  json_encode($res);//提示登陆
			die();
		}
		
		$m=M("Seeorsaw");
		//判断用户是否评价
		$map["fid"]=$fid;//影片id
		$map["uid"]=$_SESSION['loginuser']['id'];//用户id
		$info=$m->where($map)->find();
		$map["status"]=2;
		if(empty($info)){//为空进行添加操作	
			$m->add($map);
			$res["stat"]=3;
		}else{//存在进行修改
			if($info["status"]==2){
				$res["stat"]=2;
				echo  json_encode($res);//提示登陆
				die();
			}else{
				$map["id"]=$info["id"];//修改必须有主键id
				$m->save($map);
				$res["stat"]=3;
			}	
		}
		//电影看过数写入电影表
		//计算看过
		
		$sawnum=$m->where("fid={$fid} and status=2")->count();//看过数
		$seenum=$m->where("fid={$fid} and status=1")->count();//看过数
		
		$res["sawnum"]=$sawnum;
		$res["seenum"]=$seenum;
		echo  json_encode($res);
		
		M()->query("UPDATE mm_movie SET onum={$sawnum} WHERE id={$fid}");
		die();	
	}	
	
	//想看操作
	public function dosee(){
		//定义放回的json数组
		$res=array("stat"=>"","seenum"=>"","sawnum"=>"");
		
		$fid=$_POST["fid"];//电影id
		//判断是否登陆
		if(empty($_SESSION["loginuser"])){
			$res["stat"]=1;
			echo  json_encode($res);//提示登陆
			die();
		}
		
		$m=M("Seeorsaw");
		//判断用户是否收藏
		$map["fid"]=$fid;//影片id
		$map["uid"]=$_SESSION['loginuser']['id'];//用户id
		$info=$m->where($map)->find();
		$map["status"]=1;
		if(empty($info)){//为空进行添加操作	
			$m->add($map);
			$res["stat"]=3;
		}else{//存在进行修改
			if($info["status"]==1){
				$res["stat"]=2;
				echo  json_encode($res);
				die();
			}else{
				$map["id"]=$info["id"];//修改必须有主键id
				$m->save($map);
				$res["stat"]=3;
				
			}	
		}
		//电影想看数写入电影表
		//计算想看
		$seenum=$m->where("fid={$fid} and status=1")->count();//想看数
		$sawnum=$m->where("fid={$fid} and status=2")->count();//想看数
		$res["seenum"]=$seenum;
		$res["sawnum"]=$sawnum;
		echo  json_encode($res);
		M()->query("UPDATE mm_movie SET snum={$seenum} WHERE id={$fid}");
		die();	
	}	
	
	//评分操作
	public function score(){
		$fid=$_GET["fid"];//电影id
		//判断是否登陆
		if(empty($_SESSION["loginuser"])){
			echo  1;//提示登陆
			die();
		}
		
		$m=M("Rate");
		//判断用户是否收藏
		if($m->where("fid={$fid} and uid={$_SESSION['loginuser']['id']}")->find()){
			echo  2;//提示已评分
			die();
		}
		
		//进行评分操作
		$data["uid"]=$_SESSION["loginuser"]["id"];
		$data["fid"]=$fid;
		$data["score"]=$_GET["score"];
		$t=$m->add($data);
		if(empty($t)){
			echo  3;//评分失败
			die();	
		}
		//电影评分数写入电影表
		//计算评分
		$m=M("Rate");
		$score=$m->where("fid=".$fid)->avg("score");//评分数
		$ratenum=$m->where("fid=".$fid)->count();//评分数
		M()->query("UPDATE mm_movie SET rate={$score},ratenum={$ratenum} WHERE id={$fid}");
		echo  4;//评分成功
		die();	
	}
	
	//经典台词输出
	public function dialogue(){
		$m=M("Dialogue");
		$total=$m->where("status=1")->count();
		$dialogue=$m->where("status=1")->select();
		$this->assign("dialogue",$dialogue[rand(0,$total-1)]);
	}

	
	//收藏操作
	public function collect(){
		$fid=$_POST["fid"];//电影id
		//判断是否登陆
		if(empty($_SESSION["loginuser"])){
			echo  1;//提示登陆
			die();
		}
		
		$m=M("store");
		//判断用户是否收藏
		if($m->where("mid={$fid} and uid={$_SESSION['loginuser']['id']}")->find()){
			echo  2;//提示已收藏
			die();
		}
		
		//进行收藏操作
		$data["uid"]=$_SESSION["loginuser"]["id"];
		$data["mid"]=$fid;
		$data["addtime"]=time();
		$t=$m->add($data);
		if(empty($t)){
			echo  3;//收藏失败
			die();	
		}
		
		//电影收藏数
		M()->query("UPDATE mm_movie SET collectnum=collectnum+1 WHERE id={$fid}");
		echo  4;//收藏成功
		die();	
	}
	
	//长评举报操作
	public function lreport(){
		$lid=$_GET["id"];//短评id
		$m=M("Report");
		if($m->where("lid={$lid}")->find()){//举报表中存在
			M()->query("update mm_report set count=count+1 where lid={$lid}");//举报数自增
		}else{//举报表中不存在（添加）
			$map["lid"]=$lid;
			$map["count"]=1;
			$m->add($map);//添加举报
			//修改短评的状态
			M()->query("update mm_longreview set status=2 where id={$lid}");
		}
		echo 1;//举报成功
		die();
	}	
	
	// 演员举报操作
	public function zreport(){
		$zid=$_GET["id"]; // 回复id
		$m=M("Report");

		if($m->where("zid={$zid}")->find()){//举报表中存在
			M()->query("update mm_report set count=count+1 where zid={$zid}");//举报数自增
		}else{//举报表中不存在（添加）
			$map["zid"]=$zid;
			$map["count"]=1;
			$m->add($map);//添加举报
			//修改短评的状态
			M()->query("update mm_acomment set status=2 where id={$zid}");
		}
		echo 1;//举报成功
		die();
	}
	//短评举报操作
	public function sreport(){
		$rid=$_GET["id"];//短评id
		$m=M("Report");
		if($m->where("rid={$rid}")->find()){//举报表中存在
			M()->query("update mm_report set count=count+1 where rid={$rid}");//举报数自增
		}else{//举报表中不存在（添加）
			$map["rid"]=$rid;
			$map["count"]=1;
			$m->add($map);//添加举报
			//修改短评的状态
			M()->query("update mm_shortreview set status=2 where id={$rid}");
		}
		echo 1;//举报成功
		die();
	}
	
	//短评回复操作
	public function insert(){
		if(empty($_SESSION["loginuser"])){
			echo 1;//用户不存在
			die();
		}
		$data["fid"]=$_POST["fid"];
		$data["uid"]=$_SESSION["loginuser"]["id"];
		$data["content"]=$_POST["content"];
		$data["rtime"]=time();
		$m=M("Shortreview");
		if($m->add($data)){//短评添加成功
			//添加成功后更新评论数
			$sum=0;
			$sum+=M("Longreview")->where("fid=".$_POST["fid"])->count();
			$sum+=M("Shortreview")->where("fid=".$_POST["fid"])->count();
			M("Movie")->query("update mm_movie set replynum={$sum} where id={$_POST['fid']}");
		
			$data["rtime"]=date("Y-m-d H:i:s",$data["rtime"]);
			$data["username"]=$_SESSION["loginuser"]["username"];//添加用户名
			echo json_encode($data);
			
			//回复成功后积分添加
			
			M()->query("update mm_user set score=score+5 where id={$_SESSION['loginuser']['id']}");
			
			
			die();
		}
		echo 2;//添加失败
		die();
	}
	
	//ajax请求分页
	public function pageload(){
		$fid=$_GET["fid"];//获取影片id
		$m=M("Shortreview");
		$count=$m->where("fid={$fid} and status in(1,2)")->count();//总数
		import("ORG.Util.Page");
		$page=new Page($count,5);//创建分页对象
		//此处页码以get中的p接受 
		$map["fid"]=$fid;
		$map["status"]=array("in",array(1,2));
		$list=$m->where($map)->limit($page->firstRow.",".$page->listRows)->order("rtime desc")->select();

		//添加用户名
		foreach($list as &$v){
			$v["rtime"]=date("Y-m-d H:i:s",$v["rtime"]);//转换时间
			$tmp=M("User")->find($v["uid"]);
			$v["username"]=$tmp["username"];
		}
		
		$totalpage=ceil($count/5);//计算页码
		$data["totalpage"]=$totalpage;
		$data["list"]=$list;
		$data["maxrows"]=$count;
		
		echo json_encode($data);
		die();//防止其他输出影响		
	}

	// 影片分类
	public function moviesort(){
		
		$mtype = M("type")->where('fid=1')->order('id')->limit(30)->select();
		$this->assign('mtype', $mtype);
	}

	// 热评榜
	public function review(){
		$num = M('movie')->field('id,filmname,replynum')->order('replynum desc')->limit(10)->select();
		$this->assign("num", $num);
	}

	// Top10《点击排行》
	public function clicknum(){

		$clicknum = M('movie')->field('id,filmname,picname,clicknum')->order('clicknum desc')->limit(8)->select();
		$this->assign("clicknum", $clicknum);
	}
	
	//友情链接
	public function link(){
		$link=M("Friendlink");
		$this->assign("link",$link->select());
	}

	// 演员详情
	public function actor(){

		$aid = $_GET['id'];
		$actor = M('actors')->where("id={$aid}")->find();

		$this->assign("actor", $actor);

		// 电影分类
		$this->moviesort();

		//台词
		$this->dialogue();

		// 热评榜
		$this->review();
		
		// top10
		$this->clicknum();		
		
		//友情链接
		$this->link();
		$this->display("Actor/adetail");
	}

	// 演员回复
	public function actorReview(){
		if(empty($_SESSION["loginuser"])){
			echo 1;//用户不存在
			die();
		}
		$data["aid"]     = $_POST["aid"];
		$data["uid"]     = $_SESSION["loginuser"]["id"];
		$data["content"] = $_POST["content"];
		$data["rtime"]   = time();
		$m = M("acomment");
		if($m->add($data)){//短评添加成功

			$data["rtime"]    = date("Y-m-d H:i:s",$data["rtime"]);
			$data["username"] = $_SESSION["loginuser"]["username"];//添加用户名
			echo json_encode($data);

			die();
		}
		echo 2;//添加失败
		die();
	}

	// 请求回复
	public function actorLoad(){
		$aid = $_GET["aid"];         //获取演员id
		$m = M("acomment");
		$count = $m->where("aid={$aid} and status in (1,2)")->count();//总数
		import("ORG.Util.Page");
		$page = new Page($count,5);//创建分页对象
		//此处页码以get中的p接受 
		$map["aid"] = $aid;
		$map['status'] = array("in", array(1,2));

		$list=$m->where($map)->limit($page->firstRow.",".$page->listRows)->order("rtime desc")->select();

		//添加用户名
		foreach($list as &$v){
			$v["rtime"]=date("Y-m-d H:i:s",$v["rtime"]);//转换时间

			$tmp=M("User")->find($v["uid"]);
			
			$v["username"]=$tmp["username"];
		}
		
		$totalpage=ceil($count/5);//计算页码
		$data["totalpage"]=$totalpage;
		$data["list"]=$list;
		$data["maxrows"]=$count;
		
		echo json_encode($data);
		die();//防止其他输出影响	
	}

}