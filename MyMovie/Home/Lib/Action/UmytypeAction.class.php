<?php
	//用户喜欢类型Action类
	class UmytypeAction extends Action{
		//浏览用户喜欢类型的影视页
		public function index(){
			//获得用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			if($_GET['uid']!=$uid){
				$this->error("You have no right to view");
			}
			
			//创建数据库操作对象
			$m = D("User");
			
			//查询用户信息
			$vo = $m->field("password",true)->relation("mytypes")->find($uid);
			
			//遍历电影类型，找出每类电影最新六部信息，并封装
			foreach($vo['mytypes'] as &$type){
				//获取当前类别ID
				$tid = $type['id'];
				
				//创建电影数据库对象
				$mod = M();
				
				//获取电影信息
				$films = $mod->table("mm_movie,mm_movie_type")->field("fid,filmname,picname")->where("mm_movie_type.fid=mm_movie.id and mm_movie_type.tid={$tid}")->order("showtime desc")->limit('6')->select();
				
				//把电影信息封装到数组中
				$type['films'] = $films;
			}

			//加载信息入模板
			$this->assign("listtitle",$vo['username']."Latest 6 movies you like"); //抬头标题
			$this->assign("typelist",$vo['mytypes']);

			//加载模板并输出
			$this->display("index");
		}
		
		//载入喜欢电影类型选择页
		public function mytype(){
			//获得用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			if($_GET['uid']!=$uid){
				$this->error("You have no right to view");
			}
			
			//创建数据库操作对象
			$m = M("Type");
			
			//获得待选类型总表
			$typelist = $m->where("fid=1")->order("id")->select();
			
			//创建管理模型对象，获得用户已选类型
			$mod = D("User");
			
			$mytypelist = $mod->relation("mytypes")->find($uid);
			
			//将数据载入模板引擎
			$this->assign("typelist",$typelist);
			$this->assign("mytypes",$mytypelist['mytypes']);
			
			//载入模板也并输出
			$this->display("changemytype");
		}
		
		//设定用户喜欢类型方法
		public function mytypechoose(){
			//获得用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			//获得用户选择的数组
			$typelist = array_unique($_POST['mytypechoose']);
			
			//创建数据库操作对象
			$m = M("User_type");
			
			//清除原有信息
			$m->where("uid={$uid}")->delete();
			
			//遍历数组执行添加
			foreach($typelist as $tid){
				//封装数据
				$data['tid'] = $tid;
				$data['uid'] = $uid;
				
				//执行添加
				$m->add($data);
			}
			
			//执行完成，返回资料页
			redirect(U("/User/myinfo/uid/{$_SESSION['loginuser']['id']}"));
			
		}
	}