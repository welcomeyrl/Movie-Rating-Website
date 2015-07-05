<?php
	//用户心情Action类
	class PmoodAction extends Action{
		//添加用户心情方法
		public function doinsert(){
			//判断用户是否登录
			if($_SESSION['loginuser']['id']==null){
				$this->error("Please log in first");
			}
		
			//获取用户id
			$uid = $_SESSION['loginuser']['id'];
			
			//创建数据库操作对象
			$m = M("Pmood");
			
			//封装要添加的数据
			$m->create();
			
			//追加数据
			$m->uid = $uid;
			$m->addtime = time();
			
			//执行添加并返回结果
			if($m->add()){
				//添加成功
				echo "true";
			}else{
				//添加失败
				echo "false";
			}
		}
		
		//定义载入心情列表页
		public function index(){
			//获得当前用户ID
			$uid = $_GET['uid'];
			
			//获取数据库操作对象
			$user = M("User");
			
			//获得当前用户信息
			$vo = $user->field("password",true)->find($uid);
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总条数
			$count = M("Pmood")->where("uid={$uid}")->count();
			
			//创建分页类对象
			$page = new Page($count,10);
			
			// 分页显示输出
			$show = $page->show();

			//获得对应数据
			$list = M("Pmood")->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.",".$page->listRows)->select();
			
			//遍历获得的数据，如果是转发，进行处理
			foreach($list as &$p){
				//判断是否是转发
				if($p['type']==1){ //是转发的心情
					//保存zid
					$p['zid'] = $p['content'];
				
					//获得被转发者id
					$p['uid'] = M("Pmood")->where("id={$p['content']}")->getField("uid");
				
					//获得内容进行替换
					$p['content'] = M("Pmood")->where("id={$p['content']}")->getField("content");
				}
				
				//获得帖子作者姓名与头像照片
				$p['username'] = $user->where("id={$p['uid']}")->getField("username");
				$p['headpic'] = $user->where("id={$p['uid']}")->getField("headpic");
			}
			
			//向模板引擎加载信息
			$this->assign("messtitle",$vo['username']."'s mood");
			$this->assign("vo",$vo);
			$this->assign("list",$list);
			$this->assign("page",$show);
			
			//加载模板并输出
			$this->display("index");
		}
		
		//定义删除心情短语函数
		public function dodel(){
			//获得要删除的id
			$id = $_GET['id'];
			
			//得到写该ID的作者
			$uid = M("Pmood")->where("id={$id}")->getField("uid");
			
			//判断是否是本人执行删除
			if($uid != $_SESSION['loginuser']['id']){
				$this->error("You have no right to operate");
			}
			
			//执行心情与心情回复的删除
			$n = M('Pmood')->where("id={$id}")->delete();
			
			M("Ureply")->where("rid={$id} and typeid=2 and bid={$uid}")->delete();

			if($n>0){
				//删除成功
				redirect(U("/Pmood/index/uid/{$uid}"));
			}else{
				//删除失败
				$this->error("Delete failed");
			}
		}
		
		//定义回复心情方法
		public function replypmood(){
			//判断用户是否登陆
			if($_SESSION['loginuser']==null){
				//用户未登陆
				echo "nologin";
				exit();
			}
			
			//获得当前用户的id
			$uid = $_SESSION['loginuser']['id'];
			
			if($uid == $_POST['bid']){
				//是本人
				echo "self";
				exit();
			}
			
			//创建数据库操作对象
			$m = M("Ureply");
			
			//封装传递过来的数据
			$m->create();
			
			//追加数据
			$m->typeid = 2;
			$m->addtime = time();
			$m->uid = $uid;
			
			//执行添加
			if($m->add()){
				//添加成功
				echo "true";
			}else{
				//添加失败
				echo "false";
			}
		}
		
		//定义载入心情留言方法
		public function rdoload(){
			//获取心情的id
			$rid = $_GET['rid'];
			
			//创建数据库操作对象
			$m = M("Ureply");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//创建搜索条件
			$map['rid'] = $rid;
			$map['typeid'] = 2;
			
			//计算得到总数据条数
			$count = $m->where($map)->count();
			
			//计算总页数
			$totalPages = ceil($count/5);
			
			//创建分页对象
			$page = new Page($count,5);
			
			//获取当前页的数据
			//$list = $m->where($map)->order("addtime asc")->limit($page->firstRow.",".$page->listRows)->select();
			$list = M()->query("select mm_user.username,mm_user.id as uid,mm_ureply.rcontent,mm_ureply.rid,mm_ureply.addtime,mm_ureply.bid from mm_user,mm_ureply where mm_user.id=mm_ureply.uid and mm_ureply.rid={$rid} and typeid=2 order by addtime limit {$page->firstRow},{$page->listRows}");
			
			//为获得被回复用户的用户名，不把sql语句弄得太复杂，我这里执行二次遍历拼装，真后悔没用关联查询啊，非得练原生态的。
			foreach($list as &$vo){
				//创建用户表操作对象
				$user = M("User");
				
				//根据ID提取用户名并执行封装
				$vo['busername'] = $user->where("id={$vo['bid']}")->getField("username");
				$vo['addtime'] = date("Y-m-d H:i:s",$vo['addtime']);
			}
			
			//拼装数据返回
			$data = array("rtotalPages"=>$totalPages,"rcount"=>$count,"rlist"=>$list,"rid"=>$rid);
			
			//输出数据
			echo json_encode($data);
		}
		
		//定义心情转发函数
		public function doquote(){
			//获得要转发的id
			$zid = $_GET['id'];
			
			//判断是否登陆
			if($_SESSION['loginuser']==null){
				//未登陆
				echo "nologin";
				exit();
			}
			
			//获得当前用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			//创建数据库操作对象
			$p = M("Pmood");
			
			//判断是否是自己的心情
			$zuid = $p->where("id={$zid}")->getField("uid");
			if($zuid == $uid){
				//是自己的心情
				echo "self";
				exit();
			}
			
			//判断是否转发过
			$map['content'] = $zid;
			$map['uid'] = $uid;
			$map['type'] = 1;
			
			if($p->where($map)->select()){
				//之前转发过
				echo "already";
				exit;
			}

			//通过判断，执行转发
			$data['uid'] = $uid;
			$data['content'] = $zid;
			$data['addtime'] = time();
			$data['type'] = 1;
			
			$n = $p->data($data)->add();
			
			//判断是否成功
			if($n>0){
				//转发成功
				echo "true";
				exit();
			}else{
				//转发失败
				echo "false";
				exit();
			}

		}
	}