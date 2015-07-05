<?php
	//前台用户级别管理Action类
	class UlevelAction extends CommonAction{
		//重写浏览方法
		public function index(){
			//创建数据库操作对象
			$m = M("Ulevel");
			
			//检索信息
			$list = $m->order("level")->select();
			
			//向模板引擎添加信息
			$this->assign("list",$list);
			
			//载入模板并输出
			$this->display("index");
		}
	}