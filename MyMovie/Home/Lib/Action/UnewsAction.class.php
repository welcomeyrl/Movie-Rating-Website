<?php
	//用户新鲜事Action类
	class UnewsAction extends Action{
		//载入新鲜事页面
		public function index(){
			//禁止未登陆用户进入
			if($_SESSION['loginuser']==null){
				$this->error("Please log in first!");
			}
		
			//获得用户ID
			$uid = $_SESSION['loginuser']['id'];
			
			//创建数据库操作对象
			$user = M("User");
			
			//获得当前用户信息
			$vo = $user->field("id,username")->find($uid); 
			
			//加载信息
			$this->assign("newstitle",$vo['username']."'s friends news ");
			$this->assign("vo",$vo);
			
			//加载模板并输出
			$this->display("index");
		}
		
		//定义新鲜事载入方法
		public function doload(){
			//获得当前用户id
			$uid = $_SESSION['loginuser']['id'];
			
			//创建关注表数据库操作对象
			$m = M("Attention");
			
			//获得当前用户关注对象的id列表
			$iattlist = $m->where("uid={$uid}")->getField("bid",true);
	
			//将得到的用户id列表拼装成字符串
			$str = implode(",",$iattlist);
			
			//创建心情表数据库操作对象
			$p = M("Pmood");
			
			//获取好友信息
			$map['uid'] = array("in",$str);
			
			$totallist = $p->where($map)->select();
			
			//获得总数
			$count = count($totallist);
			
			//计算总页数
			$totalPages = ceil($count/10);
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//创建分页对象
			$page = new Page($count,10);
			
			$friendplist = $p->where($map)->limit($page->firstRow.",".$page->listRows)->order("addtime desc")->select();
			
			//遍历得到的好友信息表，附加好友信息
			foreach($friendplist as &$friend){
				//创建数据库操作对象
				$user = M("User");
				
				//得到好友信息并封装
				$friend['username'] = $user->where("id={$friend['uid']}")->getField("username");
				$friend['headpic'] = $user->where("id={$friend['uid']}")->getField("headpic");
				$friend['addtime'] = date("Y-m-d H:i:s",$friend['addtime']);
			}

			//拼凑返回数据
			$data = array("list"=>$friendplist,"totalPages"=>$totalPages);
			
			//返回数据
			echo json_encode($data);
		}
	}