<?php
class LoginAction extends Action{
	//进入登陆页面
	public function index(){
		$this->display("login");
	}
	
	//验证码
	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
	/*
	public function verify(){
		import('ORG.Xly.VCode');
		$fonts=array('./Public/Font/arialbd.ttf','./Public/Font/comicbd.ttf','./Public/Font/framd.ttf');
		$vcode=new VCode(array("width"=>150,"height"=>30,"fontfiles"=>$fonts));
		$vcode->getCode();
		$vcode->getImg();
	}
	*/
	//执行登陆
	public function login(){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$code=md5($_POST['code']);
		//验证码判断
		if($code==''){
			$this->error("Security code can't be empty!");
		}
		if($_SESSION['verify']!=$code){
			$this->error('Security code is wrong!');
		}
		$m=M("user");
		$where=array("username"=>$username,"password"=>$password);
		$data=$m->where($where)->field("password",true)->find();
		if(!$data){
			$this->error("User name or password is not correct. Please enter again!");
		}
		
		//判断用户状态
		if($data['disable']!=0){
			redirect(U("/User/forbid"));
		}

		//判断是否可以登录
		if($data){
			$_SESSION['loginuser']=$data;
			//$data['logtimes']++;//用户登录次数加1
			$data['logtimes']++;//用户登录次数加1
			//判断如果不是在同一天登陆
			if(date("Y-m-d",$data['login_time'])!=date("Y-m-d",time())){
				$data['score']+=1;//用户积分加2
			}
			$data['login_time'] = time();
			$data['login_ip']   = get_client_ip();
			
			//登陆阶段级别验证
			//创建级别数据库操作对象
			$l = M("Ulevel");
			
			//检索所有的级别信息
			$list = $l->order("level")->select();
			
			//遍历所有级别信息，并判断用户所属级别
			foreach($list as $k=>$v){
				if($data['score']>$v['lscore']){
					//$m->where("id={$_SESSION['loginuser']['id']}")->setField("levle",$k);
					$data['level'] = $v['level'];
				}
			}

			$m->save($data);
			$id=$_GET['id'];
			//echo $id;
			if($id==1){
				header("Location:{$_SERVER['HTTP_REFERER']}");
			}else{
				$this->redirect('Index/index');
			}
		}else{
			$this->error("Login failed");
		}
	}
	//退出
	function loginout(){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();
		$this->redirect('Index/index');
	}
}