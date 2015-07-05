<?php
	//个人收藏Action类
	class UstoreAction extends Action{
		//载入收藏列表页
		public function index(){
			//获取当前用户ID
			$uid = $_SESSION['loginuser']['id'];

			//创建数据库操作对象
			$m = D("StorefView");
		
			//导入分页类文件
			import("ORG.Util.Page");
		
			//计算总结果数
			$count = $m->where("uid={$uid}")->count();
			
			//计算总页数
			$totalPages = ceil($count,10);
			
			//创建分页对象
			$page = new Page($count,10);
			
			$show = $page->show();// 分页显示输出

			//获取当前页数据
			$list = $m->order("addtime desc")->where("uid={$uid}")->limit($page->firstRow.",".$page->listRows)->select();
			
			//遍历我的收藏，处理收藏电影的描述长度
			//foreach($list as &$v){
			//	$str=strip_tags($v["content"]);
			//	$str=preg_replace("/[\s\ ]*/","",$str);
			//	$v["content"]=substr($str,0,450)."......";
			//}
			
			//获取信息加载如模板
			$this->assign("listtitle","View and manage my collections");
			$this->assign("list",$list);
			$this->assign("totalPages",$totalPages);
			$this->assign("count",$count);
			$this->assign('page',$show);// 赋值分页输出

			//加载模板并输出
			$this->display("index");
		}
		
		//定义删除收藏方法
		public function delstore(){
			//获得要删除收藏id
			$id = $_GET['id'];
			
			//获取数据库操作对象
			$m = M("Store");
			
			//查询该日志作者id
			$uid = $m->where("id={$id}")->getField("uid");
			
			//判断是否是收藏者本人
			if($uid != $_SESSION['loginuser']['id']){
				$this->error("You have no right to operate");
			}
			
			//通过验证，开始删除
			if($m->delete($id)){
				//删除成功
				redirect(U("/Ustore/index/uid/{$uid}"));
				
			}else{
				//删除失败
				$this->error("Delete failed");
			}
		}
	}