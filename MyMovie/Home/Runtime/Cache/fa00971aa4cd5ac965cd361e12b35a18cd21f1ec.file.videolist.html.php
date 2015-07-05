<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:43:13
         compiled from "./Home/Tpl\Prevue\videolist.html" */ ?>
<?php /*%%SmartyHeaderCode:12442541644314741c9-61604260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa00971aa4cd5ac965cd361e12b35a18cd21f1ec' => 
    array (
      0 => './Home/Tpl\\Prevue\\videolist.html',
      1 => 1387287654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12442541644314741c9-61604260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644315ea25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644315ea25')) {function content_541644315ea25($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/prevue.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<!-- 图片特效 -->
		<script src="__PUBLIC__/front/outlink/js/jquery.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/front/outlink/js/cufon-yui.js" type="text/javascript"></script>
		<script src="__PUBLIC__/front/outlink/js/cufon-replace.js" type="text/javascript"></script>
		<script type="text/javascript" src="__PUBLIC__/front/outlink/js/sprites.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/outlink/js/gSlider.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/outlink/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/outlink/js/jquery.prettyPhoto.js"></script>
		
		<!--[if IE 6]>
		<script language="javascript" type="text/javascript" src="__PUBLIC__/front/js/DD_belatedPNG.js"></script>
		<script language="javascript" type="text/javascript">
			DD_belatedPNG.fix('.pngImg,img');
			DD_belatedPNG.fix('.pngBackground,background');
			DD_belatedPNG.fix('#showFaqPanel,a:hover');
		</script>
		<![endif]-->
		
	</head>	
	<body>
		<!-- 个人中心菜单结束 -->
	
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		<!-- 图片轮换特效 -->
		<div class="tumbvr">
			<!-- <div class="mask"><img src="__PUBLIC__/front/images/mask.jpg" class="pngImg pngBackground" /></div>  -->
			<ul>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li><img src="__ROOT__/Uploads/Prevue/c_<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
" class="videoid"></li>
				<?php } ?>
				<!-- <li><img src="__PUBLIC__/front/outlink/images/01.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/02.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/03.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/04.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/05.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/06.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/07.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/08.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/09.jpg" alt=""></li>
				<li><img src="__PUBLIC__/front/outlink/images/10.jpg" alt=""></li> -->
			</ul>
		</div>
		<script type="text/javascript">Cufon.now();
		<!-- 图片特效 -->
			$(window).load(function(){
				$('.tumbvr')._fw({ tumbvr:{
					duration:2000,
					easing:'easeOutQuart'
				}});
				//.bind('click',function(){
					//location="index-3.html"
				//});
			});
			
			var video=document.getElementsByClassName("videoid");
			for(var i=0;i<video.length;i++){
				video[i].onclick=function(){
					alert("1");
				}
			}
			
		</script>
		<!-- 主体部分开始	-->
		<div id="main">
			<div class="video_top">
				<a href="__APP__/Prevue/index/order/c">最热预告</a> 
				<a href="__APP__/Prevue/index/order/a">最新预告</a> 
			</div>
			<div class="video_list">
				
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<div class="video_item">
					<div class="t"><a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div>
					<div class="c">
						<a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<img src="__ROOT__/Uploads/Prevue/b_<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
"  />
						<img src="__PUBLIC__/front/images/play.jpg"  class="play"/>
						</a>
					<a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="gk">立即观看</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="nav"></div>
			<div class="video_fy"> <span><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span> </div>
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- 页脚不封结束 -->
		
	</body>
</html><?php }} ?>