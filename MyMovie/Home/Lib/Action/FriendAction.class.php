<?Php
	//好友方面管理Action类
	class FriendAction extends Action{
		//关注好友方法
		public function doatt(){
			//判断是否登录
			if($_SESSION['loginuser']==null){
				echo "nologin";
				exit();
			}
		
			//获得被关注人ID
			$bid = $_GET['bid'];
			
			//获得关注者ID
			$uid = $_SESSION['loginuser']['id'];
			
			//判断是否添加自己
			if($uid == $bid){
				echo "self";
				exit();
			}
			
			//放置用户重复添加的部分
			//创建数据库操作对象
			$m = M("Attention");
			
			//提取当前用户所有好友id
			$friendlist = $m->where("uid={$uid}")->select();
			
			//拼装待测数组
			$arr = array("uid"=>$uid,"bid"=>$bid);
			
			//判断是否已经有该好友
			if(in_array($arr,$friendlist)){
				echo "already";
				exit;
			}
			
			//通过审查，执行添加,封装信息
			$data['uid'] = $uid;
			$data['bid'] = $bid;
			
			//获得结果
			$n = $m->add($data);
			
			//判断结果，返回
			if($n>0){
				//关注成功
				echo "true";
			}else{
				//关注失败
				echo "false";
			}
		}
		
		//取消关注方法
		public function noatt(){
			//判断是否登录
			if($_SESSION['loginuser']==null){
				echo "nologin";
				exit();
			}
		
			//获得被关注人ID
			$bid = $_GET['bid'];
			
			//获得关注者ID
			$uid = $_SESSION['loginuser']['id'];
			
			//创建数据库操作对象
			$m = M("Attention");
			
			//获得结果
			$n = $m->where("uid={$uid} and bid={$bid}")->delete();
			
			//判断结果，返回
			if($n>0){
				//取消关注成功
				echo "true";
			}else{
				//取消关注失败
				echo "false";
			}
		}
		
		//获得关注列表方法
		public function attlist(){
			//获得当前用户id
			$uid = $_SESSION['loginuser']['id'];
			
			//判断用户是否登陆
			if($_SESSION['loginuser']==null){
				$this->error("Please log in first");
			}
			
			//创建关注表数据库操作对象
			$m = M("Attention");
			
			//获得当前用户关注对象的id列表
			$iattlist = $m->where("uid={$uid}")->getField("bid",true);
			
			//获得关注当前用户的对象的id列表
			$attmelist = $m->where("bid={$uid}")->getField("uid",true);
			
			//两者取交集，获得互粉的数组列表
			$hufenlist = array_intersect($iattlist,$attmelist);
			
			//创建用户表操作对象
			$user = M("User");
			
			//导入分页类文件
			import("ORG.Util.Page");
			
			//获得查询类型
			$type = $_GET['type'];
			
			//判断获得那种列表情况
			switch($type){
				case "attme": //关注我的
					//获取关注我的总数据条数
					$count = count($attmelist);
					
					//创建分页对象
					$page = new Page($count,10);
					
					//分页显示输出
					$show = $page->show();
					
					//定义字符串保存所有ID
					$idstr = "";
					
					//将获取的对象列表拼装
					foreach($attmelist as $vo){
						$idstr .= ",".$vo['uid'];
					}
					$idstr = trim($idstr,",");

					//绑定搜索条件
					$map['id'] = array("in",$idstr);
					
					//获得我关注的对象所有的信息
					$listtitle = "Follow my friends";
					$friendlist = $user->field("id,username,sex,headpic,level,score,lastlog")->where($map)->limit($page->firstRow.",".$page->listRows)->select();
					
					break;
				case "friend": //互粉
					//获取互粉的总数据条数
					$count = count($hufenlist);
					
					//创建分页对象
					$page = new Page($count,10);
					
					//分页显示输出
					$show = $page->show();
					
					//定义字符串保存所有ID
					$idstr = "";
					
					//将获取的对象列表拼装
					foreach($hufenlist as $vo){
						$idstr .= ",".$vo['uid'];
					}
					$idstr = trim($idstr,",");

					//绑定搜索条件
					$map['id'] = array("in",$idstr);
					
					//获得互粉的好友所有的信息
					$listtitle = "Mutual Following Friends";
					$friendlist = $user->field("id,username,sex,headpic,level,score,lastlog")->where($map)->limit($page->firstRow.",".$page->listRows)->select();
					break;
					
				default: //我关注的		
					//获取我关注的总数据条数
					$count = count($iattlist);
					
					//创建分页对象
					$page = new Page($count,10);
					
					//分页显示输出
					$show = $page->show();
					
					//定义字符串保存所有ID
					$idstr = "";
					
					//将获取的对象列表拼装
					foreach($iattlist as $vo){
						$idstr .= ",".$vo['bid'];
					}
					$idstr = trim($idstr,",");

					//绑定搜索条件
					$map['id'] = array("in",$idstr);
					
					//获得我关注的对象所有的信息
					$listtitle = "My Following Friends";
					$friendlist = $user->field("id,username,sex,headpic,level,score,lastlog")->where($map)->limit($page->firstRow.",".$page->listRows)->select();
					break;
			}
			
			//遍历得到的朋友列表，封装每个朋友的个性签名
			foreach($friendlist as &$vo){
				//获得当前好友的id
				$fid = $vo['id'];
				
				//判断是否互粉
				if(in_array($fid,$hufenlist)){
					$vo['hufen'] = "true";
				}
				
				//创建心情表数据库操作对象
				$p = M("Pmood");
				
				//获得当前用户心情
				$mypmood = $p->where("uid={$fid}")->field("content")->order("addtime desc")->limit("1")->select();
				
				//将心情信息追加到每个用户信息中
				$vo['mypmood'] = $mypmood;
				
				//封装用户级别
				$vo['levelname'] = M("Ulevel")->where("level={$vo['level']}")->getField("levelname");
			}

			
			//分页显示输出
			$page = $page->show();
			
			//将输入加载到模板引擎中
			$this->assign("listtitle",$listtitle);
			$this->assign("friendlist",$friendlist);
			$this->assign("page",$page);
			
			$this->assign("iattlistnum",count($iattlist));
			$this->assign("attmetnum",count($attmelist));
			$this->assign("friendnum",count($hufenlist));
			
			
			//载入模板引擎并输出
			$this->display("index");
		}
	}