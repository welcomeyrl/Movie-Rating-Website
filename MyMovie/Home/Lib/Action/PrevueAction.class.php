<?php
//预告片

class PrevueAction extends Action{
	
	//预告片列表
	public function index(){
		$m=M("Prevue");
		//分页
		import("ORG.Util.Page");
		
		$count=$m->where("status=1")->count();
		$page=new Page($count,9);
		//排序
		//$order="addtime";
		if($_GET["order"]=="a"){
			$order="addtime";
		}else{
			$order="clicknum";
		}
		
		
		$list=$m->where("status=1")->order("{$order} desc")->limit($page->firstRow.",".$page->listRows)->select();
		foreach($list as &$v){
			$tmp=M("Movie")->field("filmname")->find($v["fid"]);
			$v["filmname"]=$tmp["filmname"];
		}
		//设置分页样式
		$page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %end%");
		$this->assign("page",$page->show());
		$this->assign("list",$list);
		$this->display("videolist");
		
	}
	
	//预告片播放
	public function play(){
		//点击数自增
		M()->query("update mm_prevue set clicknum=clicknum+1 where id={$_GET['id']}");
		
		$video=M("Prevue")->find($_GET["id"]);
		$tmp=M("Movie")->field("filmname")->find($video["fid"]);
		$video["filmname"]=$tmp["filmname"];
		$video["video_play_path"]=C("VIDEO_PLAY_PATH");
		$this->assign("video",$video);
		$this->display("prevue");
	}
}
