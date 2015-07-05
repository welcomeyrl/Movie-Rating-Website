<?php
class NewsAction extends Action{
	//新闻主页
	public function news(){
		//查询电影新闻表中的信息
		$mnews=M("Mnews");//创建操作对象
		$pnews=M("Pnews");
		$mpicnews=M('Mpicnews');
		$ppicnews=M('Ppicnews');
		//近期热点的查询（最近五天上传并且点击最高的6条新闻信息）
		$t = time()-864000;
		$mlist1=$mnews->where("state=2 and status=1 and addtime>{$t}")->order('looknum desc')->limit(6)->select();
		//dump($mlist1);
		//dump($mlist1);die();
		
		$this->assign("mlist1",$mlist1);
		$this->assign("plist1",$plist1);
		//影视前瞻
		$mlist2=$mnews->where("state=2 and status=3")->order('addtime desc')->limit(2)->select();
		$this->assign("mlist2",$mlist2);
		//试听抢先看
		$mlist3=$mnews->where("state=2 and status=3")->order('addtime desc')->limit(2,3)->select();
		foreach($mlist3 as &$v3){
			$mpicnews=M('Mpicnews');
			$where3['mid']=$v3['id'];
			$mpic3=$mpicnews->where($where3)->select();
			//dump($mpic3);
			//dump($mpic3[0]['pica']);
			$v3['pica']=$mpic3[0]['pica'];
		}
		//dump($mlist3);die();
		$this->assign("mlist3",$mlist3);
		//电影新闻左
		$mlist4=$mnews->where("state=2 and status=1")->order('addtime desc')->limit(2)->select();
		foreach($mlist4 as &$v4){
			$mpicnews=M('Mpicnews');
			$where4['mid']=$v4['id'];
			$mpic4=$mpicnews->where($where4)->select();
			//dump($mpic4);die();
			$v4['pica']=$mpic4[0]['pica'];
		}
		$this->assign("mlist4",$mlist4);
		//dump($mlist4);
		//电影新闻中
		$mlist5=$mnews->where("state=2 and status=1")->order('addtime desc')->limit(2,7)->select();
		$this->assign("mlist5",$mlist5);
		//dump($mlist5);die();
		//电影新闻右
		$mlist6=$mnews->where("state=2 and status=2")->order('addtime desc')->limit(3)->select();
		$this->assign("mlist6",$mlist6);
		//dump($mlist6);die();
		
		//人物新闻左
		$plist2=$pnews->where("state=2 and status=1")->order('addtime desc')->limit(2)->select();
		foreach($plist2 as &$v2){
			$ppicnews=M('Ppicnews');
			$where2['pid']=$v2['id'];
			$ppic2=$ppicnews->where($where2)->select();
			//dump($ppic2);die();
			$v2['pica']=$ppic2[0]['pica'];
		}
		$this->assign("plist2",$plist2);
		//dump($plist2);
		//人物新闻中
		$plist3=$pnews->where("state=2 and status=1")->order('addtime desc')->limit(2,7)->select();
		$this->assign("plist3",$plist3);
		//dump($plist3);die();
		//人物新闻右
		$plist4=$pnews->where("state=2 and status=2")->order('addtime desc')->limit(4)->select();
		$this->assign("plist4",$plist4);
		//dump($plist4);die();
		$this->display("news");
	}
}