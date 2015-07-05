<?php
	// Rbac控制器
	// class RbacAction extends Action {
	
	class RbacAction extends CommonAction{
		
		// Rbac首页视图（用户列表） 
		public function index(){
			$order = "id asc";

			// 排序条件
			$order = "id asc";
			if (!empty($_REQUEST['_order'])) {
				$order = $_REQUEST['_order']." ".$_REQUEST['_sort'];
			}

			$user = M('admin_user');

			// 分页处理
			$_GET['p'] = $_REQUEST['pageNum'] + 0;  // 当前页号
			// $numPerPage 每页显示记录条数
			$numPerPage = isset($_REQUEST['numPerPage']) ? $_REQUEST['numPerPage'] : '10';

			// 导入分页类
			import('ORG.Util.Page');
			// $totalCount 满足记录的总条数
			$count = $user->count();   // 获取满足记录的总条数
			$Page = new Page($count, $numPerPage);

			// 获取信息并分配变量
			
			$this->assign('userlist', $user->order($order)->limit($Page->firstRow.','.$Page->listRows)->select());

			// 分页信息
			$this->assign('totalCount', $count);                 // 总记录数
			$this->assign('numPerPage', $numPerPage);            // 分页数
			$this->assign('pageNumShow', 10);                    // 每页显示记录数
			$this->assign('currentPage', $_REQUEST['pageNum']);  // 当前页
			 
			$this->display();
		}

		// role视图（角色列表）
		public function role(){
			// $rolelist = M('Role')->select();

			// 排序条件
			$order = "id asc";
			if (!empty($_REQUEST['_order'])) {
				$order = $_REQUEST['_order']." ".$_REQUEST['_sort'];
			}

			$role = M('role');

			// 分页处理
			$_GET['p'] = $_REQUEST['pageNum'] + 0;  // 当前页号
			// $numPerPage 每页显示记录条数
			$numPerPage = isset($_REQUEST['numPerPage']) ? $_REQUEST['numPerPage'] : '10';

			// 导入分页类
			import('ORG.Util.Page');
			// $totalCount 满足记录的总条数
			$count = $role->count();   // 获取满足记录的总条数
			$Page = new Page($count, $numPerPage);

			// 获取信息并分配变量
			
			$this->assign('rolelist', $role->order($order)->limit($Page->firstRow.','.$Page->listRows)->select());

			// 分页信息
			$this->assign('totalCount', $count);                 // 总记录数
			$this->assign('numPerPage', $numPerPage);            // 分页数
			$this->assign('pageNumShow', 10);                    // 每页显示记录数
			$this->assign('currentPage', $_REQUEST['pageNum']);  // 当前页
			 
			$this->display();
		}

		// 添加角色视图
		public function addRole(){

			$this->display();
		}

		// 添加角色表单处理
		public function addRoleHandle(){

			if(M('role')->add($_POST)){
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// 修改角色视图
		public function editRole(){
			$vo = M('role')->find($_GET['id']);
			$this->assign('vo', $vo);
			$this->display();
		}

		// 修改角色表单处理
		public function editRoleHandle(){
			$role = M('role');

			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['title'] = $_POST['title'];
			$data['remark']    = $_POST['remark'];
			$data['status']   = $_POST['status'];

			if ($role->save($data)) {
				$this->success("success！");
			}else{
				$this->error("fail！");
			}
		}

		// 删除角色
		public function deleteRole(){

			if(M('role')->delete($_GET['id'])){
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// node视图（节点列表）
		public function node(){
			// $rolelist = M('Node')->select();

			// 排序条件
			$order = "level asc";
			if (!empty($_REQUEST['_order'])) {
				$order = $_REQUEST['_order']." ".$_REQUEST['_sort'];
			}

			$role = M('Node');

			// 分页处理
			$_GET['p'] = $_REQUEST['pageNum'] + 0;  // 当前页号
			// $numPerPage 每页显示记录条数
			$numPerPage = isset($_REQUEST['numPerPage']) ? $_REQUEST['numPerPage'] : '10';

			// 导入分页类
			import('ORG.Util.Page');
			// $totalCount 满足记录的总条数
			$count = $role->count();   // 获取满足记录的总条数
			$Page = new Page($count, $numPerPage);

			// 获取信息并分配变量
			
			$this->assign('nodelist', $role->order($order)->limit($Page->firstRow.','.$Page->listRows)->select());

			// 分页信息
			$this->assign('totalCount', $count);                 // 总记录数
			$this->assign('numPerPage', $numPerPage);            // 分页数
			$this->assign('pageNumShow', 10);                    // 每页显示记录数
			$this->assign('currentPage', $_REQUEST['pageNum']);  // 当前页
			 
			$this->display();
		}

		// 节点列表视图
		public function nodeList(){

			$field = array('id' ,'name', 'title', 'pid');
			$node = M('node')->field($field)->select();

			$nlist = node_merge($node);

			$this->assign('nlist', $nlist);
			
			$this->display();
		}

		// 添加节点视图
		public function addNode(){
			$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
			$level = isset($_GET['level']) ? $_GET['level'] : 1;

			$this->assign('pid', $pid);
			$this->assign('level', $level);

			switch ($level) {
				case 1:
					$type = "application";
					break;
				case 2:
					$type = 'controller';
					break;
				case 3:
					$type = 'method';
					break;
			}
			
			$this->assign('type', $type);
			$this->display();
		}

		// 添加节点视图
		public function addNode2(){
			$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
			$level = isset($_GET['level']) ? $_GET['level'] : 1;

			$this->assign('pid', $pid);
			$this->assign('level', $level);

			switch ($level) {
				case 1:
					$type = "application";
					break;
				case 2:
					$type = 'controller';
					break;
				case 3:
					$type = 'method';
					break;
			}
			
			$this->assign('type', $type);
			$this->display();
		}

		// 添加节点表单处理
		public function addNodeHandle(){
			if(M('node')->add($_POST)){
				$this->success("success！");
			}else{
				$this->error("fail！");
			}
		}

		// 删除节点
		public function deleteNode(){

			if(M('node')->delete($_GET['id'])){
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// 修改节点视图
		public function editNode(){
			
			$vo = M('node')->find($_GET['id']);
			
			$level = $vo['level'];

			switch ($level) {
				case 1:
					$type = "application";
					break;
				case 2:
					$type = 'controller';
					break;
				case 3:
					$type = 'method';
					break;
			}

			$this->assign('type', $type);
			$this->assign('vo', $vo);
			$this->display();
		}

		// 修改节点表单处理
		public function editNodeHandle(){
			$node = M('node');

			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['title'] = $_POST['title'];
			$data['remark']    = $_POST['remark'];
			$data['status']   = $_POST['status'];

			if ($node->save($data)) {
				$this->success("success！");
			}else{
				$this->error("fail！");
			}

		}

		// 添加用户视图
		public function addUser(){

			$this->display();
		}

		// 添加用户表单处理
		public function addUserHandle(){
			// var_dump($_POST);
			if ($_POST['password'] != $_POST['repasswd']) {
				$this->error("password wrong！");
			}

			$_POST['password'] = md5($_POST['password']);

			if(M('admin_user')->add($_POST)){
				$this->success("success！");
			}else{
				$this->error("fail！");
			}

		}

		// 删除用户
		public function deleteUser(){

			if(M('admin_user')->delete($_GET['id'])){
				$this->success('success！');
			}else{
				$this->error('fail！');
			}
		}

		// 修改用户信息视图
		public function editUser(){
			$vo = M('admin_user')->find($_GET['id']);
			$this->assign('vo', $vo);
			$this->display();
		}

		// 修改用户信息表单处理
		public function editUserHandle(){
			$user = M('admin_user');

			$data['id'] = $_POST['id'];
			$data['username'] = $_POST['username'];
			$data['fullname'] = $_POST['fullname'];
			$data['email']    = $_POST['email'];
			$data['phone']    = $_POST['phone'];
			$data['status']   = $_POST['status'];

			if ($user->save($data)) {
				$this->success("success！");
			}else{
				$this->error("fail！");
			}
		}

		// 配置权限视图
		public function access(){
			$uid = $_GET['id'];
			
			$node = M('node')->select();
			$node = node_merge($node);

			$this->assign('node', $node);
			$this->display();
		}
	}
?>