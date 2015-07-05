<?php
// 前台主页入口文件

class IndexAction extends Action {

	//浏览主页
    public function index(){
		//幻灯片
		$this->ppt();
		//首页影评列表
		$this->reviewlist();
		//调用台词方法
		$this->dialogue();
		// 影片分类
		$this->moviesort();
		//友情链接
		$this->link();
		// 正在热映
		$this->hot();
		// 近期热门
		$this->recent();
		// 评论榜
		$this->review();
		// TOP10
		$this->clicknum();
		$this->display("index");
	}
	
	//幻灯片
	public function ppt(){
		$m=M("Ppt");
		$ppt=$m->where("state=1")->limit(7)->select();
		//查询相关电影信息
		$movie=M("Movie");
		$ma=M('Movie_actor');
		$a=M("Actors");
		$mt=M("Movie_type");
		$t=M("Type");
		foreach($ppt as &$v1){
			$mo=$movie->where("id={$v1['mid']}")->select();
			$v1['nation']=$mo[0]['nation'];
			$v1['language']=$mo[0]['language'];
			$v1['replynum']=$mo[0]['replynum'];
			$v1['showtime']=$mo[0]['showtime'];
			//dump($v1);
			//查询影片相关演员
			$ma1=$ma->field("aid")->where("fid={$v1['mid']}")->limit(2)->select();
			foreach($ma1 as $av){
				//dump($av);
				$a1=$a->field("cname")->where("id={$av['aid']}")->select();
				$v1['cname'][]=$a1[0]['cname'];
			}
			//dump($v1);
			//查询影片相关类型
			$mt1=$mt->field("tid")->where("fid={$v1['mid']}")->select();
			foreach($mt1 as $tv){
				$t1=$t->field("typename")->where("fid=1 and id={$tv['tid']}")->select();
				$v1['typename'][]=$t1[0]['typename'];
			}
		}
		$this->assign("ppt",$ppt);
	}
	
	//经典台词输出
	public function dialogue(){
		$m=M("Dialogue");
		$total=$m->where("status=1")->count();
		$dialogue=$m->where("status=1")->select();
		$this->assign("dialogue",$dialogue[rand(0,$total-1)]);
	}
	
	//影片分类
	public function moviesort(){
		
		$mtype = M("type")->where('fid=1')->order('id')->limit(30)->select();
		$this->assign('mtype', $mtype);
	}
	
	//最受欢迎的影评
	public function reviewlist(){
		//现实的影评（按点击率5条）
		$list=M()->query("select r.id,r.fid,r.uid,r.title,r.content,u.username,m.filmname,m.picname from mm_longreview r,mm_movie m,mm_user u where r.status in(1,2) and r.fid=m.id and r.uid=u.id order by r.rnum desc limit 0,5");

		//处理现实的影评内容
		foreach($list as &$v){
			$str=strip_tags($v["content"]);
			$str=preg_replace("/[\s\ ]*/","",$str);
			$v["content"]=substr($str,0,450)."......";
			//$v["content"]=strip_tags($v["content"]);
		}
		$this->assign("reviewlist",$list);
	}
	
	//幻灯片
	public function link(){
		$link=M("Friendlink");
		$this->assign("link",$link->select());
	}

	// 正在热映
	public function hot(){

		$hot = M('movie')->field('id,filmname,picname,rate')->order("id asc")->limit("0,4")->select();
		$hide = M('movie')->field('id,filmname,picname,rate')->order("id asc")->limit("4,4")->select();
		$this->assign("hide", $hide);
		$this->assign("hot", $hot);
	}

	// 近期热播
	public function recent(){

		$recent = M('movie')->field('id,filmname,picname')->order('addtime desc')->limit(10)->select();
		$this->assign("recent", $recent);
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

	// 搜索
	public function search(){
		$key = trim($_POST['key']);
		//调用台词方法
		$this->dialogue();
		// 1. 搜索电影
		$mv['filmname'] = array('like', "%{$key}%");
		$mv['status']   = array('in', '1,2');
		$mv['_logic']   = 'and';

		// 搜索分类
		$mt['typename'] = array('like', "%{$key}%");

		// 搜索长评
		$map['title']   = array('like', "%{$key}%");

		$findmv = M('movie')->where($mv)->select();
		$findty = M('type')->where($mt)->select();
		$findlr = M('longreview')->where($map)->select();
		
		if ($findmv && count($findmv)) {
			// 1. 搜索电影
			import('ORG.Util.Page');
			$where['filmname'] = array('like', "%{$key}%");
			$where['status'] = array('in', '1,2');
			$where['_logic'] = 'and';

			$count = M('movie')->where($where)->count(); // 满足条件的总记录数
			$Page = new Page($count, 10); // 实例化分页类
			$show = $Page->show();  // 分页显示输出

			$Mactor = D('Movie');
			$list = $Mactor->relation('actorlist')->where($where)->order('clicknum desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			

			$this->assign('tag', "Movie Search："." ".$key);
			$this->assign('list', $list);
			$this->assign('page', $show);
			
			//友情链接
			$this->link();
			$this->display("Typelist/tags");

		}elseif ($findty && count($findty)) {
			// 2. 搜索分类
			$tags = $findty;


			$tid = $findty[0]['id'];
			$typename = $findty[0]['typename'];

			//分页
			$Model = new Model();
			$movies = $Model->query("SELECT m.* FROM mm_movie m LEFT JOIN mm_movie_type mt ON mt.fid=m.id WHERE mt.tid={$tid} AND m.status in (1,2)");	

			import('ORG.Util.Page');        //导入分页类
			$count = count($movies);      //满足要求的总记录数  

			$Page = new Page($count, 10);   //实例化分页类

			$show = $Page->show();          // 分页显示输出
			// 分页数据查询
			$list = $Model->query("SELECT m.* FROM mm_movie m LEFT JOIN mm_movie_type mt ON mt.fid=m.id WHERE mt.tid={$tid} AND m.status in (1,2) ORDER BY clicknum DESC LIMIT {$Page->firstRow},{$Page->listRows}");
			// 

			$this->assign('tag', "Movie Tags: ".$typename);
			
			$this->assign('list', $list);
			$this->assign('page', $show);
			
			//友情链接
			$this->link();
			$this->display("Typelist/tags");
		} else {
			$this->assign("tag", "Searching: ".$key);
			$this->hot();
			$this->dialogue();
			//友情链接
			$this->link();
			$this->display("recommend");
		}
	}
} 