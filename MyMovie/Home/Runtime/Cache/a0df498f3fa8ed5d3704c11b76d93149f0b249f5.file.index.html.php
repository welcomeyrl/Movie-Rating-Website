<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:41:59
         compiled from "./Home/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5186541643e7809e57-49967740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0df498f3fa8ed5d3704c11b76d93149f0b249f5' => 
    array (
      0 => './Home/Tpl\\Index\\index.html',
      1 => 1387161702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5186541643e7809e57-49967740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ppt' => 0,
    'pv' => 0,
    'tv' => 0,
    'i' => 0,
    'hot' => 0,
    'vo' => 0,
    'hide' => 0,
    'recent' => 0,
    'reviewlist' => 0,
    'v' => 0,
    'dialogue' => 0,
    'mtype' => 0,
    'num' => 0,
    'clicknum' => 0,
    'link' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541643e809353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541643e809353')) {function content_541643e809353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>

		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery.ui.core.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery.ui.tabs.js"></script>

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/jquery.ui.core.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/jquery.ui.theme.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/jquery.ui.tabs.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/mail.css" />
		<style type="text/css">
		

			/* focusbox */
			.focusbox{ width:960px;height:405px;position:relative;margin:5px auto;overflow:hidden; border-radius:10px;}
			.arrowbtn{ background:#ddd;width:60px;height:60px;cursor:pointer;position:absolute;top:100px;}
			.prebtn{ left:0;}
			.nextbtn{ right:0;}
			.contentimg{ position:absolute;top:0;left:0;width:7000px;}
			.contentimg li{ width:960px;height:340px;float:left;margin-right:10px;overflow:hidden;}
			.contentimg li img{ width:960px;height:340px;}
			.contentdesc{
				position:absolute;top:0;right:0;width:260px;height:340px;background:rgba(0,0,0,0.7);overflow:hidden;
				filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#B2000000', endColorstr='#B2000000');
			}
			.contentdesc .desc{ color:#dadada;}
			.contentdesc .desc h4{ font-size:15px;font-weight:bold;color:#fff;}
			.contentdesc .desc strong{ color:#e4007f;}
			.contentdesc .desc .def_ico{ display:inline-block;*display:inline;zoom:1;width:68px;height:18px;overflow:hidden;background:url(__ROOT__/Uploads/News/mypic/T193mCXnRQXXXXXXXX-300-300.png) no-repeat -112px -129px;vertical-align:middle;}
			.contentdesc .desc .stars{ display:inline-block;width:53px;height:10px;background:url(__ROOT__/Uploads/News/mypic/T1t2aCXnVZXXXXXXXX-53-10.png) no-repeat;}
			.contentdesc .desc_btn{ display:block;width:119px;height:38px;background:url(__ROOT__/Uploads/News/mypic/T1t2aCXnVZXXXXXXXX-102-26.png) no-repeat;margin-top:12px;}
			.contentdesc li{ width:262px;height:320px;padding:20px 0 0 20px;}
			.focusbox .navbox{ width:990px;overflow:hidden;position:absolute;right:0px;left:0px;bottom:0;}
			.focusbox .navbox li{ width:134px;height:55px;overflow:hidden;float:left;margin-right:2px;border:1px solid #fff;}
			.focusbox .navbox li img{ width:134px;height:55px;}
			.focusbox .navbox li.selected{ width:134px;height:53px;border:1px solid #ff32a5;}
			.focusbox .navbox li.selected img{ width:134px;height:53px;}


			/**/
			#main_left span.btn {
				display: inline-block;
				float: right;
				width:120px;
				height: 30px;
				line-height: 30px;
				background-color: #CCFFCC; 
				border-radius:5px;
				text-align: center;
			}
			#main_left .btn a{
				display: inline-block;
				float: right;
				width:120px;
				height: 30px;
				line-height: 30px;
				text-align: center;
				border-radius:5px;
				cursor: pointer;
			}
			#main_left .hide {
				display: none;
			}
			/**/
			span.buy {
				width:130px;
				height: 25px;
				line-height: 25px; 
				border-radius:5px;
				text-align: center;
			}
			span.buy a{
				display: inline-block;
				background-color: #CCFFCC;
				width:130px;
				height: 25px;
				line-height: 25px;
				font-size: 12px;
				text-align: center;
				border-radius:3px;
				cursor: pointer;
			}
		</style>
		<script type="text/javascript">
			$(function(){
				$(".btn").click(function(){
					if ($(".hide").is(":visible")) {
						$(".hide").hide();
					} else{
						$(".hide").show();
					}
				});
			});

		</script>
	</head>

	
	<body>
		<!-- 个人中心菜单结束 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		<div class="focusbox">

			<div class="contentbox">
				<ul class="contentimg">
					<?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
?>
					<li><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['pv']->value['mid'];?>
" target="_blank"><img width="960" height="340" src="__ROOT__/Uploads/News/mypic/b_<?php echo $_smarty_tpl->tpl_vars['pv']->value['picname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pv']->value['title'];?>
"></a></li>
					<?php } ?>
				</ul>
				<ul class="contentdesc">
					<?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
?>
					<li>
						<div class="desc">            
							<h4><?php echo $_smarty_tpl->tpl_vars['pv']->value['title'];?>
</h4>
							<p style="padding-top:10px;">演员：<?php echo $_smarty_tpl->tpl_vars['pv']->value['cname'][0];?>
</p>
							<p style="text-indent:3em;"><?php echo $_smarty_tpl->tpl_vars['pv']->value['cname'][1];?>
</p>
							
							<p>类型：<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pv']->value['typename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
$_smarty_tpl->tpl_vars['tv']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
&nbsp;
							<?php } ?></p>
							<p>上映时间： <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['pv']->value['showtime'],'%Y-%m-%d');?>
</p>
							<p>国家：<?php echo $_smarty_tpl->tpl_vars['pv']->value['nation'];?>
</p>
							<!--
							<p style="padding-bottom:10px;">授权有效期： 2012年11月30日前均可看</p>
							<p>清晰度：<span class="def_ico"></span></p>
							-->
							<p>评 价：<span class="stars"></span>（已有<?php echo $_smarty_tpl->tpl_vars['pv']->value['replynum'];?>
条评论）</p>         
							<a class="desc_btn" href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['pv']->value['mid'];?>
" title="去评论"></a>
						</div> 
					</li>    
					<?php } ?>
				</ul>
			</div>
			
			<div class="navbox">
				<ul class="mfoc_nav">
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value){
$_smarty_tpl->tpl_vars['pv']->_loop = true;
?>
					<li _index="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" class="selected"><img width="134" height="53" src="__ROOT__/Uploads/News/mypic/c_<?php echo $_smarty_tpl->tpl_vars['pv']->value['picname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['pv']->value['title'];?>
" /></li>
					<?php } ?>
				</ul>
			</div>
			
		</div>   

		<script type="text/javascript">
		(function(jQuery){
			jQuery.fn.th_focus_swing = function(options)
			{
				var defaults = {
					time		:3500,		//轮换秒数
					index		:1,			//默认第几张		
					speed		:500,		//切换时间
					dis			:970,
					splits 		:1			//总标签
				};
				var opts = jQuery.extend(defaults, options);
				
				var _index = opts.index;
				var _time = opts.time;
				var _speed = opts.speed;
				var _dis = opts.dis;
				var _splits = opts.splits;
				
				var _this = jQuery(this);
				
				var node_ul = _this.find(".contentimg");	
				var node_li = node_ul.find("li");
				var node_li_desc = jQuery(".contentdesc").find("li");
				var node_li_nav = jQuery(".mfoc_nav").find("li");
				
				var li_len = node_li.length;
				
				var _countIndex = (node_li.length/opts.split -  1)    
				var _start_left = node_ul.css("left");                
				
				var _timer = setInterval(show, _time);

				init();
				//alert(1);
				function init() {
					node_ul.mouseover(function() {
						_timer = clearInterval(_timer);
					}).mouseout(function() {
						_timer = setInterval(show, _time);
					});
					node_li_desc.mouseover(function() {
						_timer = clearInterval(_timer);
					}).mouseout(function() {
						_timer = setInterval(show, _time);
					});
					
					node_li_nav.mouseover(function() {
						 node_ul.stop(true, true);
						 node_li_desc.stop(true, true);
						 node_li_desc.eq(_index-1).css("display", "none");
						 node_li_nav.eq(_index-1).removeClass("selected");
						 _index = parseInt(jQuery(this).attr("_index"));
						 node_li_desc.eq(_index-1).fadeIn(_speed);
						 node_li_nav.eq(_index-1).addClass("selected");
						 _left = -_dis*(_index - 1); 
						 node_ul.animate({ "left": _left}, _speed);
						_timer = clearInterval(_timer);
					}).mouseout(function() {
						_timer = setInterval(show, _time);
					});
				}
				
				function show() {
								//alert(2);
					node_ul.stop(true, true);
					node_li_nav.eq(_index-1).removeClass("selected");
					node_li_desc.eq(_index-1).css("display", "none");
					_index++;
					if(_index > li_len) {
						node_ul.append(node_ul.find("li:lt(1)"));
						node_ul.css("left", parseInt(node_ul.css("left")) + _dis);
						node_li_nav.eq(0).addClass("selected");
						node_li_desc.eq(0).fadeIn(_speed);
					}
					else {
						node_li_nav.eq(_index-1).addClass("selected");
						node_li_desc.eq(_index-1).fadeIn(_speed);
					}
					var _left = parseInt(node_ul.css("left")) - _dis;
					node_ul.animate({ "left": _left}, _speed, function() {
							if(_index > li_len) {
								node_ul.prepend(node_ul.find("li:gt("+(li_len-_splits-1)+")"));
								node_ul.css("left", 0);
								_index = 1;
							}
							
					});
					
				}
			}
		})(jQuery);
		</script>

		<script>
		$(document).ready(function(){
			//focus
			$(".focusbox").th_focus_swing();
		});
		</script>
		<div class="nav"></div>
		<!-- 主体部分开始	-->
		<div id="main">
		
			<!-- 左侧内容 -->
			<div id="main_left">
				<!--  
				<script type="text/javascript">
					$(function(){
						$("#tabs").tabs();
						$("#tabs2").tabs();
					

						/**
						 * 根据当前页面与滚动条位置，设置窗口的Top与Left
						 */
						function showDialog(){
							var objW = $(window);    // 当前窗口
							var objC = $("#mbox");   // 弹出窗口
							var brsW = objW.width();
							var brsH = objW.height();
							var sclL = objW.scrollLeft();
							var sclT = objW.scrollTop();
							var curW = objC.width();
							var curH = objC.height();
							var left = sclL + (brsW - curW)/2;
							var top  = sclT + (brsH - curH)/2;
							objC.css({ "top":top, "left":left });
						}
						// 改变浏览器窗口时
						$(window).resize(function(){
							if(!$("#mbox").is(":visible")){
								return;
							}
							showDialog();
						})
						// 改变滚动条时
						$(window).scroll(function(){

							if(!$("#mbox").is(":visible")){
								return;
							}
							showDialog();
						})
						// 关闭按钮点击时
						$("#main .close img").click(function(){
							$("#mbox").hide();
						})

						// 选座买票时
						// “选座购票”按键点击事件
						$(".buy").click(function(){
							showDialog();
							$("#mbox").show();

							// 影片ID
							var mid = $(this).attr("mid");
							$.ajax({
								url : "__APP__/Ticket/getminfo",
								detaType : "json",
								type : "post",
								data : { mid : mid },
								success : function(data){
										alert("OK");
								}
							})
						})
					});


				</script>-->

				<!--  -->
				<!-- 正在热映 -->
				<div class="movie_hot">
					<div class="hot_head">
						<span>正在热映</span>
						<span class="btn"><a>显示更多</a></span>
					</div>
					<div class="hot_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li>
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/d_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								
								<span><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a></span>
								<span>
									综合评分：<?php echo $_smarty_tpl->tpl_vars['vo']->value['rate'];?>

								</span>
							
								<!-- <span class="buy" mid="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><a>选座购票</a></span> -->
								
							</li>
							<?php } ?>
						</ul>
						<ul class="hide">
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li>
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/d_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								
								<span><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a></span>
								<span>
									综合评分：<?php echo $_smarty_tpl->tpl_vars['vo']->value['rate'];?>

								</span>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				
				<!-- 电影大图间隔带 -->
				<div class="movie_bpic">
					<img src="__PUBLIC__/front/images/movie_sz.jpg" alt="" />
				</div>
				
				<div class="nav"></div>
				
				<!-- 近期热播 -->
				<div class="movie_recent">
					<div class="recent_head">
						<span>近期热门</span>
						<!-- <span  style="float:right;padding-top:8px;"><a href="">更多影视>>></a></span> -->
					</div>
					<div class="recent_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li>		
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/c_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								<span  style="height:36px;"><a style=" font-size:12px" href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a></span>							
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				
				<!-- 最受欢迎的影评 -->
				<div class="movie_review">
					<div class="review_head">
						<span>最受欢迎的影评</span>
						<span   style="float:right;padding-top:8px;"><a href="__APP__/List/index">更多热门影评>>></a></span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviewlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<div class="review_list">
						<div class="rl">
							<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
"><img src="__ROOT__/Uploads/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['filmname'];?>
" /></a>
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

								</a> 
							</div>
							<div class="acthor">
								<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
 评论: <a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">《<?php echo $_smarty_tpl->tpl_vars['v']->value['filmname'];?>
》 </a>
							</div>
							<div class="content">
								<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

							</div>
							
							<!--  如果是影片列表打开评分选项 -->
							<!-- 
							<div class="point">
								<span>综合评分：7.7</span><a href="">(176人回复)</a>
							</div> 
							-->
						</div>
					</div>
					<?php } ?>
				
					
				</div>
			
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">
				<!-- 右侧经典台词 -->
				<div class="movie_word">
					<div class="word_title">
						经典台词
					</div>
					<div class="word_con">
						<p><?php echo $_smarty_tpl->tpl_vars['dialogue']->value['en_dialogue'];?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['dialogue']->value['cn_dialogue'];?>
</p>
					</div>
					<div class="source">
						《<?php echo $_smarty_tpl->tpl_vars['dialogue']->value['source'];?>
》
					</div>
				</div>
				
				<div class="nav"></div>
			
				
				<!--右侧分类列表 -->
				<div class="movie_sort" style="height:180px">
					<div class="sort_head">
						影片分类
						<span style="float:right;padding-top:10px;"><a href="__APP__/Typelist/index">所有分类 >>></a></span>
					</div>
					<div class="sort_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
								<li><a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['typename'];?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				


				<!-- 评论榜 -->
				<div class="movie_rank">
					<div class="rank_head">
						<span>MyMovie热评榜</span><!-- 
						<span style="float:right;padding-top:10px;"><a href="">更多榜单 >>></a></span> -->
					</div>
					<div class="rank_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li>
								<span style="display:inline-block; width:200px;"><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a></span>
								<span style="display:inline-block; width:50px; color:#8CB5C3;">评论数：</span>
								<span style="color:#8CB5C3;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['replynum'];?>
</span>
							</li>
							<?php } ?>

							<!-- margin-left:120px;color:#8CB5C3; -->
							
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				

				<!-- 电影top10-->
				<div class="movie_top">
					<div class="top_head">
						<span>电影Top10 </span>
						<span style="float:right;padding-top:10px;"><a href="__APP__/List/movietop">更多 >>></a></span>
					</div>
					<div class="top_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clicknum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li style="height:140px;">
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a>
							</li>
							<?php } ?>
							
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				
				<!-- 友情链接 -->
				<div class="movie_link">
					<div class="link_head">
						<span>友情链接</span>
					</div>
					<div class="link_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['l']->value['url'];?>
"><img src="__ROOT__/Uploads/News/mypic/c_<?php echo $_smarty_tpl->tpl_vars['l']->value['picname'];?>
"/></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
			</div>
			
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 隐藏 -->
		<!-- <div id="mbox">
			<div id="mhouse">
				<div id="main">
					<div class="header">
						<h2>《/$moviename/》选座购票</h2>
						<a href="javascript:return false;"><span class="add">北京<img src="__PUBLIC__/front/images/down.png" alt="" /></span></a>
						<span class="close"><img src="__PUBLIC__/front/images/close.png" alt="关闭"/></span>
					</div>
					<div class="clear"></div>
					<div class="mainbox">
						<div class="intro">
							<div class="introtitle">
								<span>影片</span>
							</div>
							<div class="contentbox">
								<div class="content">
									<img src="__ROOT__/Uploads/Movie/Cover/b_52a60c3d9b5d7.jpg" alt="" />
									<h3>无人区</h3>
									<p>影片评分：<span style="color:red;">8.4</span></p>
									<p>影片时长</p>
									<p>影片类型</p>
									<p>国家/地区</p>
									<p>导演：</P>
									<p>主演：</p>
									<p>本片讲述了一个钢琴天才传奇的一生。 
		　　1900年，Virginian号豪华邮轮上，一个孤儿被遗弃在头等舱，由船上的水手抚养长大，取名1900（蒂姆•罗斯 饰）。1900慢慢长大，显示出了无师自通的非凡钢琴天赋，在船上的乐队表演钢琴，每个听过他演奏的人，都被深深打动。爵士 乐鼻祖杰尼听说了1900的高超技艺，专门上船和他比赛，最后自叹弗如，黯然离去。 
		　　可惜，这一切的事情都发生在海上，1900从来不愿踏上陆地，直到有一天，他爱上了一个女孩，情愫在琴键上流淌。他会不会为了爱情，踏上陆地开始新的生活，用他的琴声惊艳世界？他将怎样谱写自己非凡的人生 </p>
								</div>	
								<div class="clear"></clear></div>
								<span class="more"><a href="">更多影视资料>></a></span>
								
							</div>
						</div>
						<div class="area">
							<div id="tabs">
								<ul>
									<li><a href="#tabs-3">选择影院</a></li>
									<li><a href="#tabs-2">按区域查询</a></li>
									<li><a href="#tabs-1">搜影院</a></li>
								</ul>
								<div id="tabs-1">
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
								</div>
								<div id="tabs-2">
									<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
								</div>
								<div id="tabs-3">
									<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
								
								</div>
							</div>
						</div>
						<div class="play">
							<div id="tabs2">
								<ul>
									<li><a href="#tabs-6">今天 12月13日 周五</a></li>
									<li><a href="#tabs-5">明天</a></li>
									<li><a href="#tabs-4">后天</a></li>
								</ul>
								<div id="tabs-4">
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
									<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
								</div>
								<div id="tabs-5">
									<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
								</div>
								<div id="tabs-6">
									<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--  -->
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	</body>
</html><?php }} ?>