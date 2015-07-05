<?php
	//前台用户Action类
	class UserAction extends CommonAction{
		//封装搜素条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['username']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['name']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
		}
		
		//数据加工
		public function _tigger_list(&$list){
			//遍历得到的数据
			foreach($list as &$user){
				//创建级别表数据库操作对象
				$l = M("Ulevel");
				
				//获得用户的级别
				$user['level'] = $l->where("level={$user['level']}")->getField("levelname");
			}
		}
		
		//用户禁言设置
		public function forbid(){
			//获得用户id
			$uid = $_GET['id'];
			
			//创建数据库操作对象
			$m = M("User");
			
			$data['disable'] = 2;
			$data['id'] = $uid;
			
			//执行修改
			if($m->save($data)>0){
				$this->success("success");
			}else{
				$this->error("set before");
			}
		}
		
		//用户释放禁言
		public function free(){
			//获得用户id
			$uid = $_GET['id'];
			
			//创建数据库操作对象
			$m = M("User");
			
			$data['disable'] = 0;
			$data['id'] = $uid;
			
			//执行修改
			if($m->save($data)>0){
				$this->success("success");
			}else{
				$this->error("set before");
			}
		}
		
		//载入用户详细页面
		public function detail(){
			//获得用户id
			$uid = $_GET['id'];
			
			//创建数据库操作对象
			$user = M("User");
			
			//获得用户个人信息
			$vo = $user->find($uid);
			
			//向模板引擎加载信息
			$this->assign("vo",$vo);
			
			//加载模板并输出
			$this->display("detail");
		}
		
		//定义载入用户长评方法
		public function checklongreview(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Longreview");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,title,ptime")->where("uid={$uid}")->order("ptime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//循环遍历得到的信息，处理
			foreach($list as &$vo){
				$vo['addtime'] = $vo['ptime'];
			}
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checklongreview");
			
			//调用用户信息方法
			$this->detail();
		}
		
		//定义载入用户短评方法
		public function checkshortreview(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Shortreview");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,fid,content,rtime")->where("uid={$uid}")->order("rtime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//循环遍历得到的信息，处理
			foreach($list as &$vo){
				$vo['addtime'] = $vo['rtime'];
				$vo['title'] = $vo['content'];
			}
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checkshortreview");
			
			//调用用户信息方法
			$this->detail();
		}
		
		//定义载入用户心情方法
		public function checkpmood(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Pmood");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,content,addtime")->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//循环遍历得到的信息，处理
			foreach($list as &$vo){
				$vo['title'] = $vo['content'];
			}
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checkpmood");
			
			//调用用户信息方法
			$this->detail();
		}
		
		//定义载入用户日志方法
		public function checkdiary(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Diary");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,title,addtime")->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checkdiary");
			
			//调用用户信息方法
			$this->detail();
		}
		
		//定义载入用户相册方法
		public function checkphotoalbum(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Photoalbum");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,title,addtime")->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checkphotoalbum");
			
			//调用用户信息方法
			$this->detail();
		}
		
		//定义载入站内信添加模板
		public function addletter(){
			//获得当前用户id
			$uid = $_GET['id'];
			
			//将用户id发送到模板引擎
			$this->assign("uid",$uid);
			
			//加载模板并输出
			$this->display("addletter");
		}
		
		//定义发送站内信方法
		public function insertletter(){
			//获得被发送者id
			$uid = $_POST['uid'];
			
			// 创建数据库操作对象
			$m = M("Uletter");
			
			//手工封装数据
			$data['uid'] = $uid;
			$data['title'] = $_POST['title'];
			$data['content'] = $_POST['content'];
			$data['addtime'] = time();
			$data['status'] = 0;
			
			
			//执行添加
			if($m->add($data)){
				//发送成功
				$this->success("success");
			}else{
				//发送失败
				$this->error("fail");
			}
		}
		
		//定义载入用户站内信方法
		public function checkletter(){
			//获得用户id
			$uid = $_REQUEST['id'];
				
			//创建数据库操作对象
			$m = M("Uletter");
			
			$_GET['p']=$_REQUEST['pageNum']+0;//转换参数实现当前页号的传递
			$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;
			
			//导入分页类
			import("ORG.Util.Page");
			
			//获得总数据条数
			$count = $m->where("uid={$uid}")->count();
			
			//创建分页对象
			$page = new Page($count,$numPerPage);
			
			//获得所需信息
			$list = $m->field("id,title,addtime,status")->where("uid={$uid}")->order("addtime desc")->limit($page->firstRow.','.$page->listRows)->select();
			
			//向模板发送信息
			$this->assign("list",$list);
			//封装分页信息
			$this->assign("totalCount",$count); //封装总数据条数
			$this->assign("numPerPage",$numPerPage);     //封装页大小
			$this->assign("currentPage",$_REQUEST['pageNum']);     //当前页
			$this->assign("type","checkletter");
			
			//调用用户信息方法
			$this->detail();
		}
		
	}