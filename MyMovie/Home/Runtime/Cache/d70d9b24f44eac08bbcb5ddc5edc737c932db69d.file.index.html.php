<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:32:24
         compiled from "./Home/Tpl/Typelist/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1009900354553d71e6b8efd4-05674784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70d9b24f44eac08bbcb5ddc5edc737c932db69d' => 
    array (
      0 => './Home/Tpl/Typelist/index.html',
      1 => 1430100014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009900354553d71e6b8efd4-05674784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d71e6cb319',
  'variables' => 
  array (
    'typelist' => 0,
    'vo' => 0,
    'vlist' => 0,
    'dialogue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d71e6cb319')) {function content_553d71e6cb319($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
				font-size: 26px;
				font-weight: normal;
			}

			#listheader {
				border-bottom: 1px solid #ccc;
				height: 20px;
				line-height: 20px;
			}
			.fl {
				float: left;
			}
			.fr {
				float: right;
			}

			#listmain .type {
				font-size: 16px;
				height: 36px;
				line-height: 36px;
			}
			#listmain ul li {
				font-size: 14px;
				width: 140px;
			}
			#listmain ul li a {
				text-decoration: none;
				color: #3377aa;
			}

			#listmain ul li a:hover {
				text-decoration: underline;
			}

			.fonti {
				font-style: italic;
				color: #c2AAc2;
			} 

			#searchbox {
				margin-top: 10px;
				padding: 10px 0;
			}
			#searchbox p {
				height: 20px;
				line-height: 20px;
				padding:5px 0;
			}
			#searchbox .txt {
				width: 200px;
				height: 20px;
				line-height: 20px;
				padding-left: 5px;
				border:1px solid #ccc;
			}
		</style>

		
	</head>
	
	<body>
		<!-- 个人中心菜单结束 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->

		<!-- 主体部分 -->
		<div id="main">

			<!-- 主体左边部分 -->
			<!-- <h2>MyMovie电影标签</h2> -->

			<div id="main_left">
				<h2>My Movie Tags</h2>
				<div id='listheader'>	
					<p class="fr">Browse By Categories</p>	
				</div>
				<div class="nav"></div>	
				<div id="listmain">
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>

						<div class='type'>
							<?php echo $_smarty_tpl->tpl_vars['vo']->value['type'];?>
······
						</div>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vlist']->key => $_smarty_tpl->tpl_vars['vlist']->value){
$_smarty_tpl->tpl_vars['vlist']->_loop = true;
?>
								<li class="fl"><a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['vlist']->value['id'];?>
/tags/<?php echo $_smarty_tpl->tpl_vars['vlist']->value['typename'];?>
"><?php echo $_smarty_tpl->tpl_vars['vlist']->value['typename'];?>
<span class="fonti">(<?php echo $_smarty_tpl->tpl_vars['vlist']->value['num'];?>
)</sapn></a></li>
							<?php } ?>
						</ul>
						<div class="nav"></div>	
					<?php } ?>
				</div>

			</div>
			<!-- 主体左边部分结束 -->

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
				<!-- 右侧AD -->
				
				<div class='ad'>
					<img src="__ROOT__/Public/front/images/ad1.png" alt="" />
				</div>

				<div class="nav"></div>

				<div id="searchbox">
					<form method="get" action="__APP__/Typelist/tags">
						<p>Tags</p>
						<input type="text" class="txt" name="tags" placeholder="Go to other tags" />
						<input type="submit" value=" Enter " />
						<label>
					</form>
				</div>
				<div class="nav"></div>
			</div>	

		</div>
		<!-- 主体部分结束 -->

	
	<div class="nav"></div>	
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	</body>
</html><?php }} ?>