<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:52:01
         compiled from "./Home/Tpl/List/reviewlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1610149422553d5450975151-30117925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2d183ac7fcdb1ce9e2d9a39fbf1e1bd30841331' => 
    array (
      0 => './Home/Tpl/List/reviewlist.html',
      1 => 1430117519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610149422553d5450975151-30117925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d5450abd66',
  'variables' => 
  array (
    'toptitle' => 0,
    'display' => 0,
    'list' => 0,
    'v' => 0,
    'pageshow' => 0,
    'dialogue' => 0,
    'link' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d5450abd66')) {function content_553d5450abd66($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 个人中心菜单结束 -->
	
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		
		<!-- 主体部分开始	-->
		<div id="main">
		
			<!-- 左侧内容 -->
			<div id="main_left">
				<div class="list_title">
					<?php echo $_smarty_tpl->tpl_vars['toptitle']->value;?>
 reviews
				</div>
				<?php if ($_smarty_tpl->tpl_vars['display']->value=='block'){?>
				<div class="list_title_down">
					<a href="__APP__/List/index/order/ptime">latest movie reviews</a>
					<a href="__APP__/List/index/order/rnum">most popular reviews</a>
				</div>
				<?php }else{ ?>
				<?php }?>
				<div class="nav"></div>
				<!-- 最受欢迎的影评 -->
				<div class="movie_review">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
 Comments: <a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
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
					<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
					<div class="nobody">
						Now reviews yet! Please submit one review now!
					</div>
					<?php } ?>
					<?php if (isset($_smarty_tpl->tpl_vars['list']->value)){?>
					<div class="review_list_page" style=""><?php echo $_smarty_tpl->tpl_vars['pageshow']->value;?>
</div>
					<?php }?>
					
				</div>
				
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">

				<!-- 右侧经典台词 -->
				<div class="movie_word">
					<div class="word_title">
						Classical Lines
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
				<div class='ad'>
					<img src="__ROOT__/Public/front/images/ad2.jpg" alt="" />
				</div>
				<div class="nav"></div>	
				<!-- 友情链接 -->
	<!--			<div class="movie_link">
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
		-->
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>