<?php

//电影影评类 入口

class LongreviewAction extends CommonAction{
	
	//封装多字段的搜索条件(加地址符直接修改原值)
	public function _filter(&$map){
		
		//关键字模糊搜索
		if(!empty($_REQUEST["keyword"])){
			$where["title"]=array("like","%{$_REQUEST['keyword']}%");
			$where["content"]=array("like","%{$_REQUEST['keyword']}%");
			$where["_logic"]="or";
			$map["_complex"]=$where;
		}
		//状态的搜索
		if(!empty($_REQUEST["status"])){
			$map["status"]=$_REQUEST['status'];
		}
		
		
	}
	
	//index中数据加工替换某个字段显示的回调函数
	public function _tigger_list(&$list){
		
		//状态显示转换
		foreach($list as &$v){
			//判断状态转换中文
			switch($v["status"]){
				case "1":		
					$v["status"]="normal";
					break;
				case "2":
					$v["status"]="report";
					break;
				case "3":
					$v["status"]="forbidden";
					break;	
			}
			//查询用户 搜索用户名
			$tmp=M("user")->find($v["uid"]);
			$v["username"]=$tmp["username"];
			
			//查询回复数
			$v["rnum"]=M("Reviewreply")->where("rid=".$v["id"])->count();
			
			//插入影片名
			$tmp=M("Movie")->find($v["fid"]);
			$v["filmname"]=$tmp["filmname"];
			//统计举报数
			$res=M("report")->where("lid=".$v["id"])->find();
			if($res){
				$v["report"]=$res["count"];
			}
			
		}	
	}
	
	//修改影评状态
	public function update(){
		//状态为正常时举报数清空
		if($_POST["status"]==1){
			M()->query("update mm_report set count=0 where lid={$_POST['id']}");
		}
		
		parent::update();
	}
	
	//查看影评内容
	public function content(){
		$vo=M("Longreview")->find($_GET["id"]);
		$this->assign("vo",$vo);
		$this->display();//调用当前方法模板
	}
	
	//查看影评回复列表信息
	public function listreply(){
		$rid=$_GET["id"];//获取影评id
		$this->assign("lid",$rid);//电影id
		//排序
		$order="id asc";
		if(!empty($_REQUEST["_order"])){
			$order=$_REQUEST["_order"]." ".$_REQUEST["_sort"];
		}
		
		
		$m=M("Reviewreply");
		//添加分页信息
			
		$_GET["p"]=$_REQUEST["pageNum"]+0;//转换页码数 smarty用get【p】接受  框架用的是post的pagenum传递
		$numPerPage=isset($_REQUEST["numPerPage"])?$_REQUEST["numPerPage"]:10;//接受传递的页大小
		
		
		$count=$m->where("rid=".$rid)->count();//计算总数据条数
		import("ORG.Util.Page");//导入分页类
		$page=new Page($count,$numPerPage);//创建分页对象
	
		$this->assign("totalCount",$count);//数据总数
		$this->assign("currentPage",$_REQUEST["pageNum"]);//当前页码数
		$this->assign("numPerPage",$numPerPage);//每页条数 即页大小
		$this->assign("pageNumShown",0);//显示多少个页码
	
		
		$this->assign("list",$m->where("rid=".$rid)->limit($page->firstRow.",".$page->listRows)->select());
		
		$this->display();
	}
	
	//删除影评 相关的都删除(覆盖父类)
	public function delete(){
		//删除影评相关的所有回复
		M("Reviewreply")->where("rid=".$_REQUEST["id"])->delete();
		//调用父类中的方法 删除本条数据
		parent::delete();
		
	}
	
	
	
}