<?php
	// Ticket控制器

	class TicketAction extends Action {

		// 1. 获取电影信息
		public function getminfo() {
			$mid = $_POST['mid'];
			
			$info = M("movie")->where($mid)->find();

		}
	}
?>