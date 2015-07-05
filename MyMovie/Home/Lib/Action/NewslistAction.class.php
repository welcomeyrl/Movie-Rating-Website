<?php
class NewslistAction extends Action{
	
	public function mnews(){
		$mnews=M("Mnews");//创建操作对象
		$mpicnews=M('Mpicnews');
		
		//=================电影新闻=====================
		import('ORG.Util.Page');// 导入分页类
		$count=$mnews->where('state=2')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$mnews->where("state=2")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['mid']=$v1['id'];
			$mpic1=$mpicnews->where($where1)->select();
			$v1['pica']=$mpic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$mnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['mid']=$mv['id'];
			$mp=$mpicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$mnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$mnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$mnews->where("state=2 and status=4 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['mid']=$v3['id'];
			$mp3=$mpicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("movienewslist"); // 输出模板
	}
	
	public function pnews(){
		$pnews=M("Pnews");//创建操作对象
		$ppicnews=M('Ppicnews');
		
		//================人物新闻================
		import('ORG.Util.Page');// 导入分页类
		$count=$pnews->where('state=2')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$pnews->where("state=2")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['pid']=$v1['id'];
			$ppic1=$ppicnews->where($where1)->select();
			$v1['pica']=$ppic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$pnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['pid']=$mv['id'];
			$mp=$ppicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$pnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$pnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$pnews->where("state=2 and status=2 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['pid']=$v3['id'];
			$mp3=$ppicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("pmovienewslist"); // 输出模板
	}
	
	
	public function mnewslist1(){
		$mnews=M("Mnews");//创建操作对象
		$mpicnews=M('Mpicnews');
		
		//=================近期焦点=====================
		$t = time()-864000;
		import('ORG.Util.Page');// 导入分页类
		$count=$mnews->where('state=2 and status=1 and addtime>{$t}')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$mnews->where("state=2 and status=1 and addtime>{$t}")->order('looknum desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['mid']=$v1['id'];
			$mpic1=$mpicnews->where($where1)->select();
			$v1['pica']=$mpic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$mnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['mid']=$mv['id'];
			$mp=$mpicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$mnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$mnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$mnews->where("state=2 and status=4 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['mid']=$v3['id'];
			$mp3=$mpicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("movienewslist"); // 输出模板
	}
	
	public function mnewslist2(){
		$mnews=M("Mnews");//创建操作对象
		$mpicnews=M('Mpicnews');
		
		//=================试听抢先看================
		import('ORG.Util.Page');// 导入分页类
		$count=$mnews->where('state=2 and status=3')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$mnews->where("state=2 and status=3")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['mid']=$v1['id'];
			$mpic1=$mpicnews->where($where1)->select();
			$v1['pica']=$mpic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$mnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['mid']=$mv['id'];
			$mp=$mpicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$mnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$mnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$mnews->where("state=2 and status=4 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['mid']=$v3['id'];
			$mp3=$mpicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("movienewslist"); // 输出模板
	}
	
	public function mnewslist3(){
		$mnews=M("Mnews");//创建操作对象
		$mpicnews=M('Mpicnews');
		
		//================专题策划================
		import('ORG.Util.Page');// 导入分页类
		$count=$mnews->where('state=2 and status=2')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$mnews->where("state=2 and status=2")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['mid']=$v1['id'];
			$mpic1=$mpicnews->where($where1)->select();
			$v1['pica']=$mpic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$mnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['mid']=$mv['id'];
			$mp=$mpicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$mnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$mnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$mnews->where("state=2 and status=4 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['mid']=$v3['id'];
			$mp3=$mpicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("movienewslist"); // 输出模板
	}
	
	public function pnewslist4(){
		$pnews=M("Pnews");//创建操作对象
		$ppicnews=M('Ppicnews');
		
		//================人物专访================
		import('ORG.Util.Page');// 导入分页类
		$count=$pnews->where('state=2 and status=2')->count();// 查询满足要求的总记录数
		$Page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		//$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list=$pnews->where("state=2 and status=2")->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as &$v1){
			$where1['pid']=$v1['id'];
			$ppic1=$ppicnews->where($where1)->select();
			$v1['pica']=$ppic1[0]['pica'];
		}
		$this->assign('list',$list);// 赋值数据集
		$this->assign('pageinfo',$Page->show());// 赋值分页输出
		
		//右侧输出
		$mpic=$pnews->where("state=2")->order("addtime")->limit(10)->select();
		foreach($mpic as &$mv){
			$where['pid']=$mv['id'];
			$mp=$ppicnews->where($where)->select();
			$mv['pica']=$mp[0]['pica'];
		}
		$this->assign("mpic",$mpic);
		
		//最近一周
		$t1 = time()-604800;
		$mnew1=$pnews->where("state=2 and addtime>{$t1}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew1",$mnew1);
		//最近一月
		$t2 = time()-2592000;
		$mnew2=$pnews->where("state=2 and addtime>{$t2}")->order('looknum desc')->limit(10)->select();
		$this->assign("mnew2",$mnew2);
		
		
		//精彩推荐
		$mnew3=$pnews->where("state=2 and status=2 and addtime>{$t1}")->order('looknum desc')->limit(6)->select();
		foreach($mnew3 as &$v3){
			$where['pid']=$v3['id'];
			$mp3=$ppicnews->where($where)->select();
			$v3['pica']=$mp3[0]['pica'];
		}
		$this->assign("mnew3",$mnew3);
		$this->display("pmovienewslist"); // 输出模板
	}

}