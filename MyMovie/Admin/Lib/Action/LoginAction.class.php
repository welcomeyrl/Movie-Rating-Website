<?php
	// 后台登陆控制器
	class LoginAction extends Action {

		// 后台登录页视图
		public function index(){

			$this->display();
		}

		// 获取验证码
		Public function verify(){
		    import('ORG.Util.Image');
		    Image::buildImageVerify();
			
		    /*import('ORG.Xly.VCode');
			$fonts=array('__PUBLIC__/Font/arialbd.ttf','__PUBLIC__/Font/comicbd.ttf','__PUBLIC__/Font/framdcn.ttf');
			$vcode=new VCode(array("width"=>100,"height"=>35,"fontfiles"=>$fonts));
			$vcode->getCode();
			$vcode->getImg();*/
		}

		// 	验证登陆
		public function checkLogin(){
			
			// 验证码验证
			if (I('verify', '', 'md5') != session('verify')) {
				$this->error('verification code wrong！');
			}
			
			
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$user = M('auser')->where(array('username' => $username))->find();

			if(!user || $user['password'] != $password ){
				$this->error('username or password wrong！');
			}

			if($user['status']) {
				$this->error('can not use this user！');
			}

			$data = array(
				'id' => $user['id'],
				'login_time' => time(),
				'login_ip'   => get_client_ip(), 
				);

			M('auser')->save($data);
			// SESSION

			session(C('USER_AUTH_KEY'), $user['id']);
			session('username', $user['username']);
			session('logintime', date('Y-m-d H:i:s', $user['login_time']));
			session('loginip', $user['login_ip']);
			

			// 超级管理员识别

			if ($user['username'] == C('RBAC_SUPERADMIN')) {	
				session(C('ADMIN_AUTH_KEY'), true);
			}
			
			// 读取用户权限
			import('ORG.Util.RBAC');
			RBAC::saveAccessList();

			// var_dump($_SESSION);die;

			// 跳转至后台首页
			$this->redirect('Index/index');

		}

	}
?>