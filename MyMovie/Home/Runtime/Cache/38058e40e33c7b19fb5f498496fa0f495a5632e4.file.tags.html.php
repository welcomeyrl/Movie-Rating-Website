<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:04:06
         compiled from "./Home/Tpl/Typelist/tags.html" */ ?>
<?php /*%%SmartyHeaderCode:2000579090553d3f820fc3e3-60876653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38058e40e33c7b19fb5f498496fa0f495a5632e4' => 
    array (
      0 => './Home/Tpl/Typelist/tags.html',
      1 => 1430100186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2000579090553d3f820fc3e3-60876653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3f8220c8a',
  'variables' => 
  array (
    'tag' => 0,
    'list' => 0,
    'vo' => 0,
    'v' => 0,
    'page' => 0,
    'dialogue' => 0,
    'link' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3f8220c8a')) {function content_553d3f8220c8a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>

		<style type="text/css">
			h2 {
				height: 70px;
				line-height: 70px;
				width: 100%;
				font-size: 20px;
				font-weight: normal;
				border-bottom: 1px solid #ccc;

			}

			.content {
				padding: 5px 0;
			}
			.none {
				width:100%;
				height: 100px;
				line-height: 100px;
				background-color: #ccffcc;
				border:1px solid #ccc;
				color: #3377aa;
				font-size: 14px;
				text-align: center;
			}
			.page {
				float: right;
				text
			}
		</style>
	</head>
	<body>
		<!-- 个人中心菜单结束 -->
	
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		
		<!-- 主体部分开始	-->
		<div id="main">
			
			<!-- <h2>电影标签：<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</h2> -->
			<!-- 左侧内容 -->
			
			<div id="main_left">
			<h2><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</h2>	
				<div class="movie_review">
					
					<?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
						<div class="none">
							No movie in this category, go to other category to watch!
							<a style="color:blue" href="__APP__/Typelist/index">Go back</a>
						</div>
					<?php }else{ ?>

						<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<div class="review_list">
								<div class="rl">
									<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								</div>
								<div class="rr">
									<div class="title">
										<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>

										</a> 
									</div>
									<!-- <div class="acthor">
										 Miss Sajarevo 评论: <a href="">《地心引力》 </a>
									</div> -->
									<div class="content">
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['showtime'],'%Y-%m-%d');?>
(<?php echo $_smarty_tpl->tpl_vars['vo']->value['nation'];?>
) / <?php echo $_smarty_tpl->tpl_vars['vo']->value['director'];?>
 / <?php echo $_smarty_tpl->tpl_vars['vo']->value['editor'];?>
 / <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['actorlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
 /<?php } ?> <?php echo $_smarty_tpl->tpl_vars['vo']->value['petname'];?>

									</div>
								
									<div class="point">
										<span>Scores：<?php echo $_smarty_tpl->tpl_vars['vo']->value['rate'];?>
 </span><span style="font-style: italic;color:#000">( <?php echo $_smarty_tpl->tpl_vars['vo']->value['ratenum'];?>
 persons reply )</span>
									</div> 
									
									<div class="">

									</div>	
								</div>
							</div>
					
						<?php } ?>
						<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
					<img src="__ROOT__/Public/front/images/ad1.png" alt="" />
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
			
		</div>  -->
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>