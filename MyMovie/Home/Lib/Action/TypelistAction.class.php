<?php
	
	/**
	* 影片类型列表控制器
	*/
	class TypelistAction extends Action {
		
		// 影片类型列表页视图
		public function index(){

			$Model = new Model();
			// $list = $Model->query("SELECT mm_type.fid,mm_type.id,mm_type.typename,COUNT(mm_movie_type.tid) 'num' FROM mm_type LEFT JOIN mm_movie_type ON mm_type.id=mm_movie_type.tid GROUP BY mm_type.id order by num desc");
			$list = $Model->query("SELECT t.fid,t.id,t.typename,COUNT(m.id) 'num' FROM mm_type t LEFT JOIN mm_movie_type mt ON  t.id=mt.tid LEFT JOIN mm_movie m ON mt.fid=m.id AND m.status IN(1,2) GROUP BY t.id order by num desc");
			$typelist = array(array('type' => "Genre"), array('type' => "Country/Region"), array('type' => "Year"));

			foreach ($list as $v) {
				if ($v['fid'] == 1 ) {
					array_shift($v);
					$typelist[0]['list'][] = $v;

				}elseif ($v['fid'] == 2 ) {
					array_shift($v);
					$typelist[1]['list'][] = $v;

				}elseif ($v['fid'] == 3 ) {
					array_shift($v);
					$typelist[2]['list'][] = $v;
				}
			}

			$this->assign('typelist', $typelist);
			$this->dialogue();
			$this->display();
		}
		

		// 标签搜索
		public function tags(){

			// 获取类型id
			if (isset($_GET['id'])) {
				$tid = $_GET['id'];
			} else {
				$map['typename'] = $_GET['tags'];   
				$typeid = M('type')->field('id')->where($map)->find();
				$tid = $typeid['id'];    
			}
			
			$t = M('type')->field('typename')->where("id={$tid}")->find();
			$typename = isset($_GET['tags'])?$_GET['tags']:$t['typename'];

			//分页
			$Model = new Model();
			$movies = $Model->query("SELECT m.id FROM mm_movie m LEFT JOIN mm_movie_type mt ON mt.fid=m.id WHERE mt.tid={$tid} AND m.status in (1,2)");	
			// var_dump($count);die;
			
			import('ORG.Util.Page');        //导入分页类
			$count = count($movies);        //满足要求的总记录数  

			$Page = new Page($count, 10);  //实例化分页类

			$show = $Page->show();         // 分页显示输出
			// 分页数据查询

			$tmp = array();
			foreach ($movies as $v) {
				$tmp[] = D('Movie')->relation('actorlist')->where("id = {$v['id']} and status in (1,2)")->select();
			}
			
			$list = array();
			foreach ($tmp as $vo) {
				$list[] = $vo[0];
			}
			// var_dump($list);die;
			// $list = $Model->query("SELECT m.* FROM mm_movie m LEFT JOIN mm_movie_type mt ON mt.fid=m.id WHERE mt.tid={$tid} AND m.status in (1,2) ORDER BY clicknum DESC LIMIT {$Page->firstRow},{$Page->listRows}");
			
			$this->assign('tag', "Movie Tags：".$typename);
			$this->assign('list', $list);
			$this->assign('page', $show);
			$this->dialogue();
			//友情链接
			$this->link();
			$this->display();

		}

		//经典台词输出
		public function dialogue(){
			$m=M("Dialogue");
			$total=$m->where("status=1")->count();
			$dialogue=$m->where("status=1")->select();
			$this->assign("dialogue",$dialogue[rand(0,$total-1)]);
		}
		
		//友情链接
		public function link(){
			$link=M("Friendlink");
			$this->assign("link",$link->select());
		}
		
    } 
?>