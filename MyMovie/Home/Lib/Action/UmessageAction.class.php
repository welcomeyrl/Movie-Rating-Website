<?php
	//用户留言Action类
	class UmessageAction extends Action{
		//载入用户留言页面
		public function index(){
			//获得前台id
			$uid = isset($_GET['uid'])?$_GET['uid']:$_SESSION['loginuser']['id'];
			
			//创建数据库操作对象，获取用户信息
			$username = M("User")->where("id={$uid}")->getField("username");
		
			//向模板放置信息
			$this->assign("messtitle",$username."'s message board");
		
			//加载留言页模板并输出
			$this->display("index");
		}
		
		//加载当前用户的留言方法
		public function doload(){
			//获得当前用户ID
			$uid1 = $_GET['uid1'];
			
			//创建数据库操作对象
			$m = D("Message");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//创建搜索条件
			$map['uid1'] = $uid1;
			
			//计算得到总数据条数
			$count = $m->where($map)->count();
			
			//计算总页数
			$totalPages = ceil($count/5);
			
			//创建分页对象
			$page = new Page($count,10);
			
			//获取当前页的数据
			$list = $m->order("addtime desc")->where($map)->relation(true)->limit($page->firstRow.",".$page->listRows)->select();
			
			//遍历留言修改时间
			foreach($list as &$vo){
				$vo['addtime'] = date("Y-m-d H:i:s",$vo['addtime']);
			}
			
			//拼装数据返回
			$data = array("totalPages"=>$totalPages,"count"=>$count,"list"=>$list);
			
			//输出数据
			echo json_encode($data);
		}
		
		//定义留言删除方法
		public function dodel(){
			//获取被删除留言id
			$id = $_GET['id'];
			
			//创建数据库操作对象，获得留言者id
			$m = M("Message");
			$uid2 = $m->where("id={$id}")->getField("uid2");
			
			//判断是否是本人删除
			if($uid2 != $_SESSION['loginuser']['id']){
				//不是本人
				echo "cannot";
				exit();
			}
			
			//是本人，执行删除留言
			$n1 = $m->delete($id);
			
			//获得回复表操作对象
			$r = M("Ureply");
			
			//设定检索条件
			$map['typeid'] = 1;
			$map['rid'] = $id;
			$n2 = $r->where($map)->delete();
			
			//判断是否删除成功
			if($n1>0){
				echo "true";
			}else{
				echo "false";
			}
		}
		
		//定义添加留言方法
		public function doinsert(){
			//判断用户是否登录
			if($_SESSION['loginuser']==null){
				echo "nologin";
				exit();
			}
		
			//创建数据库操作对象
			$m = M("Message");
			
			//追加其他信息
			$m->uid1 = $_POST['uid1'];
			$m->uid2 = $_SESSION['loginuser']['id'];
			$m->addtime = time();
			$m->content = $_POST['mcontent'];
			
			//执行添加并获得添加ID
			$n = $m->add();
			
			//判断添加是否成功
			if($n>0){
				//添加成功
				echo "true";
			}else{
				echo "false";
			}
		}
		
		//定义回复留言方法
		public function replymess(){
			//判断用户是否登录
			if($_SESSION['loginuser']==null){
				echo "nologin";
				exit();
			}
		
			//创建数据库操作对象
			$m = M("Ureply");
			
			//封装表单过来的数据
			$m->create();
			
			//追加其他信息
			$m->uid = $_SESSION['loginuser']['id'];
			$m->addtime = time();
			$m->typeid = 1;
			
			//执行添加并获得添加ID
			$n = $m->add();
			
			//判断添加是否成功
			if($n>0){
				//添加成功
				echo "true";
			}else{
				echo "false";
			}
		}
		
		//定义留言回复载入方法
		public function rdoload(){
			//获取留言的id
			$rid = $_GET['rid'];
			
			//创建数据库操作对象
			$m = M("Ureply");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//创建搜索条件
			$map['rid'] = $rid;
			$map['typeid'] = 1;
			
			//计算得到总数据条数
			$count = $m->where($map)->count();
			
			//计算总页数
			$totalPages = ceil($count/5);
			
			//创建分页对象
			$page = new Page($count,5);
			
			//获取当前页的数据
			//$list = $m->where($map)->order("addtime asc")->limit($page->firstRow.",".$page->listRows)->select();
			$list = M()->query("select mm_user.username,mm_user.id as uid,mm_ureply.rcontent,mm_ureply.rid,mm_ureply.addtime,mm_ureply.bid from mm_user,mm_ureply where mm_user.id=mm_ureply.uid and mm_ureply.rid={$rid} and typeid=1 order by addtime limit {$page->firstRow},{$page->listRows}");
			
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
		
	}
