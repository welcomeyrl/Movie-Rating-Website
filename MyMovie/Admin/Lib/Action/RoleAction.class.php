<?php
	// 角色控制器
	/**
	* 
	*/
	class RoleAction extends CommonAction {

		//封装搜素条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				$where['name']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['title']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
		}

		// 配置权限视图
		public function access(){

			/*$rid = I('rid', 0, 'intval');

			$node = M('node')->select();
			$nodelist = node_merge($node);

			$this->assign('rid', $rid);
			$this->assign('list', $nodelist);
			$this->display();*/

			$rid = I('rid', 0, 'intval');
			$field = array('id','name','title','pid');
			$node = M('node')->field($field)->select();

			// 原有权限
			$access = M('access')->where(array('role_id' =>$rid ))->getField('node_id', true);
			
			$node = node_merge($node, $access);
			
			$this->assign('list', $node);
			$this->rid = $rid;
			$this->display();
		}

		// 设置权限表单处理
		public function setAccess(){
			
			// roleID
			$rid = I('rid', 0, 'intval');
			
			$db = M('access');
			$db->where(array('role_id' => $rid))->delete();

			$data = array();
			foreach ($_POST['access'] as $v) {
				$tmp = explode('_', $v);
				$data[] = array(
					'role_id' => $rid,
					'node_id' => $tmp[0],
					'level' => $tmp[1]
					);
			}
			
			if (empty($_POST['access'])) {
				$this->success("success！");
				exit();
			}
			if ($db->addAll($data)) {
				$this->success("success！");
			}else {
				$this->error("fail！");
			}
		}

		// 查看权限信息视图showAccess
		public function showAccess(){

			$rid = I('rid', 0, 'intval');
			$field = array('id','name','title','pid');
			$node = M('node')->field($field)->select();

			// 原有权限
			$access = M('access')->where(array('role_id' =>$rid ))->getField('node_id', true);
			
			$node = node_merge($node, $access);
			
			$this->assign('list', $node);
			$this->rid = $rid;
			$this->display();
		}

	}
?>