<?php
	// 用户管理控制器
	class AuserAction extends CommonAction {

		public function index(){

			$order = "id asc";

			// 排序条件
			$order = "id asc";
			if (!empty($_REQUEST['_order'])) {
				$order = $_REQUEST['_order']." ".$_REQUEST['_sort'];
			}

			$auser = D('UserRelation')->relation(true)->count();

			// 分页处理
			$_GET['p'] = $_REQUEST['pageNum'] + 0;  // 当前页号
			// $numPerPage 每页显示记录条数
			$numPerPage = isset($_REQUEST['numPerPage']) ? $_REQUEST['numPerPage'] : '10';

			// 导入分页类
			import('ORG.Util.Page');
			// $totalCount 满足记录的总条数
			$count = $auser;   // 获取满足记录的总条数
			$Page = new Page($count, $numPerPage);

			// 获取信息并分配变量
			
			$this->assign('list', D('UserRelation')->field('password', true)->limit($Page->firstRow.','.$Page->listRows)->relation(true)->select());

			// 分页信息
			$this->assign('totalCount', $count);                 // 总记录数
			$this->assign('numPerPage', $numPerPage);            // 分页数
			$this->assign('pageNumShow', 10);                    // 每页显示记录数
			$this->assign('currentPage', $_REQUEST['pageNum']);  // 当前页
			 
			$this->display();
		}

		//封装搜素条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['username']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['fullname']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
		}

		// 搜索分页
		public function index2(){
			// 搜索条件有值则封装
			// var_dump($_POST);die;
			$where['username'] = array('like',"%{$_REQUEST['keyword']}%");
			$where['fullname'] = array('like',"%{$_REQUEST['keyword']}%",);
			$where['_logic']   = 'or';
			$map['_complex']   = $where;
			$map['status']     = $_POST['status'];
			
			$auser = D('UserRelation')->where($map)->relation(true)->count();
			
			// 分页处理
			$_GET['p'] = $_REQUEST['pageNum'] + 0;  // 当前页号
			// $numPerPage 每页显示记录条数
			$numPerPage = isset($_REQUEST['numPerPage']) ? $_REQUEST['numPerPage'] : '10';

			// 导入分页类
			import('ORG.Util.Page');
			// $totalCount 满足记录的总条数
			$count = $auser;   // 获取满足记录的总条数
			$Page = new Page($count, $numPerPage);

			// 获取信息并分配变量
			
			$this->assign('list', D('UserRelation')->where($map)->field('password', true)->limit($Page->firstRow.','.$Page->listRows)->relation(true)->select());

			// 分页信息
			$this->assign('totalCount', $count);                 // 总记录数
			$this->assign('numPerPage', $numPerPage);            // 分页数
			$this->assign('pageNumShow', 10);                    // 每页显示记录数
			$this->assign('currentPage', $_REQUEST['pageNum']);  // 当前页
			 
			$this->display('Auser/index');

		}

		public function insert(){

			$_POST['login_time'] = time();
			$_POST['password'] = md5($_POST['password']);
			$_POST['login_ip'] = get_client_ip(); 
			parent::insert();
		}

		// 分配角色视图
		public function setRole(){

			$id = $_GET['id'];
			// 获取用户基本信息
			$user = M('Auser')->field('id,username, fullname')->where(array('id'=>$id))->find();
			
			// 获取角色列表
			$role = M('role')->select();

			$this->assign('user', $user);   // 用户信息
			$this->assign('role', $role);   // 角色列表
			$this->display();
		}

		// 分配角色
		public function setRoleHandle(){
			$uid = $_POST['uid'];  // 用户ID

			// 删除用户原有角色
			M('role_user')->where(array('user_id' => $uid))->delete();
			$role = array();
			foreach ($_POST['role_id'] as $v) {
				 $role[] = array(
				 	'role_id' => $v,
				 	'user_id' => $uid
				 ); 	
			} 

			if (M('role_user')->addAll($role)) {
				$this->success('success！');
			} else {
				$this->error('fail！');
			}
			
		}
	}
?>