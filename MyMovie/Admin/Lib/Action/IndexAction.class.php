<?php
// 后台首页控制器
class IndexAction extends CommonAction {
    // 后台首页视图
    public function index(){

    	$this->assign('username', session('username'));
    	$this->display();
    }

    // 修改密码视图
    public function password(){
    	$this->assign('uid', session('uid'));
    	$this->display();
    }

    // 修改密码
    public function updatePasswd(){
        $id = session('uid');
    	$user = M('auser')->where("id={$id}")->find();

    	if(md5($_POST['prepasswd']) != $user['password']){
    		$this->error('wrong,type again！');
    	}

    	if ($_POST['password'] != $_POST['repasswd']) {
    		$this->error('wrong,type again！');
    	}
    	
    	$data = array(
    		'id' => session('uid'),
    		'password' => md5($_POST['password']),
    		);
    	
    	if (M('auser')->save($data)) {
    		$this->success('success！');	
    	}else{
    		$this->error('fail！');
    	}

    }

    // 退出
    public function logout(){
        session_unset();
        session_destroy();
        
        $this->redirect('Login/index');
    }
}