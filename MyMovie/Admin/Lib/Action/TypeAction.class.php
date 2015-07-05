<?php
	// 影片类别控制器
	class TypeAction extends CommonAction {

		//封装搜素条件
		public function _filter(&$map){
			//搜索条件有值则做封装
			if(!empty($_REQUEST['keyword'])){
				// $where['fid']  = array('like', "%{$_REQUEST['keyword']}%");
				$where['typename']  = array('like',"%{$_REQUEST['keyword']}%");
				$where['_logic'] = 'or';
				$map['_complex'] = $where;
			}
		}

	}
?>