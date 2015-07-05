<?php
//创建一个留言的关联model类
class MessageModel extends RelationModel{
	protected $_link = array(
		//回复与发布者是多对一
		'User'=>array(
			'mapping_type'=>BELONGS_TO, //关联类型
			'class_name'=>'User', //关联的模型名
			'foreign_key'=>'uid2',  // 关联的外键名
			'mapping_name'=>'user', //关联的映射名
			'mapping_fields'=>'username,headpic', //要关联查询的字段
		),
	);
}