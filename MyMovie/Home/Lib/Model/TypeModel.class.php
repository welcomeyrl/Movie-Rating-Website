<?php
//定义Type表的关联查询
class TypeModel extends RelationModel{
	protected $_link = array(
		//类型表与电影表 多对多的关系
		'Movie'=>array(
			'mapping_type' => MANY_TO_MANY,
			'class_name' => 'Movie',
			'mapping_name' => 'mymovies',
			'foreign_key' => 'tid',
			'relation_foreign_key' => 'fid',
			'relation_table' => 'mm_movie_type',
		),
	);
}