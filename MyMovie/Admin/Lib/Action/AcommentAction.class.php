<?php
	// 演员评论管理控制器
	class AcommentAction extends CommonAction {
		
		//封装多字段的搜索条件(加地址符直接修改原值)
		public function _filter(&$map){
			
			//关键字模糊搜索
			if(!empty($_REQUEST["keyword"])){
				$map["content"]=array("like","%{$_REQUEST['keyword']}%");
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
				//查询发表用户 搜索用户名
				$tmp=M("user")->find($v["uid"]);
				$v["username"]=$tmp["username"];
				
				//插入演员名
				$tmp=M("Actors")->find($v["aid"]);
				$v["cname"]=$tmp["cname"];
				
				//统计举报数
				$res=M("report")->where("zid=".$v["id"])->find();
				if($res){
					$v["report"]=$res["count"];
				}
			
			}	
		}
		//修改回复状态
		public function update(){
			//状态为正常时举报数清空
			if($_POST["status"]==1){
				M()->query("update mm_report set count=0 where zid={$_POST['id']}");
			}
			
			parent::update();
		}
		
		//查看短评内容
		public function content(){
			$vo=M("Acomment")->find($_GET["id"]);
			$this->assign("vo",$vo);
			$this->display();//调用当前方法模板
		}

		// 

	}
?>