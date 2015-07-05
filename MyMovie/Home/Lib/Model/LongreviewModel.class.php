<?php

//创建一个影评关联的model类

class LongreviewModel extends RelationModel{
	protected $_link=array(
		//电影一对一（一个影评属于一个电影）
		'Movie'=>array(
			'mapping_type'=>BELONGS_TO,//关联类型 
				'class_name'=>'Movie',//关联的模型类名
				'foreign_key'=>'fid',//关联的外键名	
				'mapping_name'=>'movie'//关联的映射名 默认是表名
		),		
		//影评对用户一对一
		'User'=>array(
			'mapping_type'=>BELONGS_TO,//关联类型 
				'class_name'=>'User',//关联的模型类名
				'foreign_key'=>'uid',//关联的外键名	
				'mapping_name'=>'user'//关联的映射名 默认是表名
		),	
		
		//影评一对多回复
		/* 'Reviewreply'=>array(
			'mapping_type'=>HAS_MANY,//关联类型
				'class_name'=>'Reviewreply',//关联的模型类名
				'foreign_key'=>'rid',//关联的外键名	
				'mapping_name'=>'replys',//关联的映射名 默认是表名 不要和长评中的字段重合
				//'mapping_fields'=>'id,content',//关联要查询的字段,默认全部字段，如查询个别字段定义mapping_fields。
				'mapping_order'=>'id desc'//关联的排序方式
		), */
		
	);
}

