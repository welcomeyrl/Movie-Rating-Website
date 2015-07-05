<?php
//自定义Pmood管理模型
class PmoodModel extends RelationModel{
	protected $_link = array(
		//心情表与回复表 1对多的关系
		'Ureply'=>array(
			'mapping_type' => HAS_MANY,
			'class_name' => 'Ureply',
			'foreign_key' => 'rid',
			'mapping_name' => 'ureply',
			'condition' =>'typeid=2',
		),
	);
}