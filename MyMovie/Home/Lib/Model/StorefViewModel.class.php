<?php
	//定义收藏的视图模型
	class StorefViewModel extends ViewModel{
		public $viewFields =array(
			'Store'=>array('id','addtime','uid','mid'),
			'Movie'=>array('filmname','content','picname','_on'=>'Store.mid=Movie.id'),
		);
	}