<?php
	//计划任务Action类
	class TimeAction extends Action{
		//载入页面
		public function index(){
			//创建数据库操作对象
			$m = M("Prevue");
			
			//获取用户所有事件
			$list = $m->select();
			
			//遍历处理事件
			foreach($list as &$vo){
				$vo['date'] = date("d/m/Y",$vo['screentime']);
			}
			
			//向模板引擎加载信息
			$this->assign("list",$list);
			
			//加载模板并输出
			$this->display("index");
		}
	}