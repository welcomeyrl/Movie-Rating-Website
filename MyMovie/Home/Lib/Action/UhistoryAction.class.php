<?php
	//影迹uhistory操作Action类
	class UhistoryAction extends Action{
		//载入列表方法
		public function index(){
			//获得用户的id
			$uid = $_GET['uid'];
			
			//创建数据库操作对象，获取用户信息
			$username = M("User")->where("id={$uid}")->getField("username");
			
			//向模板引擎加载信息
			$this->assign("listtitle","【".$username."】's reviews");
			
			//加载模板并输出
			$this->display("index");
		}
		
		//定义长评加载方法
		public function ldoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Longreview");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid}")->Distinct(true)->field("fid")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid}")->Distinct(true)->field("fid")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[fid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("ltotalPages"=>$totalPages,"lcount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		//定义短评加载方法
		public function sdoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Shortreview");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid}")->Distinct(true)->field("fid")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid}")->Distinct(true)->field("fid")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[fid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("stotalPages"=>$totalPages,"scount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		//定义想看电影加载方法
		public function wdoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Seeorsaw");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid} and status=1")->field("fid")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid} and status=1")->field("fid")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[fid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("wtotalPages"=>$totalPages,"wcount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		//定义看过的电影加载方法
		public function hdoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Seeorsaw");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid} and status=2")->Distinct(true)->field("fid")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid} and status=2")->Distinct(true)->field("fid")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[fid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("htotalPages"=>$totalPages,"hcount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		//定义评分过的电影加载方法
		public function rdoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Rate");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid}")->field("fid,score")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid}")->field("fid,score")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[fid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("rtotalPages"=>$totalPages,"rcount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		//定义收藏的电影加载方法
		public function stodoload(){
			//获得用户ID
			$uid = $_GET['uid'];
			
			//获得数据库操作对象
			$m = M("Store");
			
			//导入分页类
			import("ORG.Util.Page");
			
			//计算总数据条数
			$count = count($m->where("uid={$uid}")->field("mid")->select());
			
			//计算页总数
			$totalPages = ceil($count/6);
			
			//创建分页对象
			$page = new Page($count,6);
			
			//获得信息
			$list = $m->where("uid={$uid}")->field("mid")->limit($page->firstRow.",".$page->listRows)->select();
			
			//循环遍历得到的信息，将影片资料加载
			foreach($list as &$vo){
				//创建影片数据库操作对象
				$mod = M("Movie");
				
				//根据条件查询电影信息
				$flist = $mod->where("id={$vo[mid]}")->field("filmname,picname")->find();
				
				//拼装数据
				$vo['filmname'] = $flist['filmname'];
				$vo['picname'] = $flist['picname'];
			}
			
			//拼装数据返回
			$data = array("stototalPages"=>$totalPages,"stocount"=>$count,"list"=>$list);
			
			//输出返回
			echo json_encode($data);
			
		}
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	