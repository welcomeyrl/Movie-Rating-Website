<?php
class ReqisterAction extends Action{
	//进入用户注册页面
	public function reqister(){
		$this->display('reqister');
	}
	//验证码
	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
		
	}
	/*
	//验证码
	public function verify(){
		import('ORG.Xly.VCode');
		$fonts=array('./Public/Font/arialbd.ttf','./Public/Font/comicbd.ttf','./Public/Font/framd.ttf');
		$vcode=new VCode(array("width"=>150,"height"=>30,"fontfiles"=>$fonts));
		$code=$vcode->getCode();
		$vcode->getImg();
		echo $code;
		exit;
	}
	*/
	//执行注册
	public function req(){
		$data['username']=$_POST['username'];
		$data['password']=md5($_POST['password']);
		$data['email']=$_POST['email'];
		$data['addtime']=time();
		$data['lastlog']=time();
		$code=md5($_POST['code']);
		$m=M('User');
		$where['username']=$data['username'];
		$list=$m->where($where)->find();
		//判断
		if($data['username']==''){
			$this->error("User name can't be empty!");
		}elseif($code!=$_SESSION['verify']){
			$this->error('Security code is wrong!');
		}elseif($data['email']==''){
			$this->error("Email can't be empty!");
		}elseif($data['username']==$list['username']){
			$this->error('User name has been registered');
		}else{
			//添加用户
			$_SESSION['username']=$data['username'];
			$data['score']=10;//新注册用户积分为10
			$data['logtimes']=1;//新注册用户登录次数为1	
			$user=D('User')->add($data);
			if($user){
				$this->success('Register successfully!','__APP__/Login/index');
			}
		}
	}
	//验证用户名是否被注册
	public function docode(){
		
		$name = $_GET['name']; //获取要验证的用户信息
		
		$m=M("User");
		$user=$m->field('username')->select();
		$a=array();
		foreach($user as $v){
			$a[]=$v['username'];
		}
		
		if(in_array($name,$a)){
			echo "aa";
		}else{
			echo "bb";
		}
		
	}
}