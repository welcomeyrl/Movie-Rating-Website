<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:45:19
         compiled from "./Home/Tpl\User\mylongreview.html" */ ?>
<?php /*%%SmartyHeaderCode:21319541644afcbf0e9-53524282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb15933bdb4e1e4d7f9e35c4ef62168b4a2ccc1' => 
    array (
      0 => './Home/Tpl\\User\\mylongreview.html',
      1 => 1387430212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21319541644afcbf0e9-53524282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
    'list' => 0,
    'vo' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644afdc284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644afdc284')) {function content_541644afdc284($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - 我的长评</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 页头开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/uhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页头结束 -->
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">

				<!-- 左侧当前用户影评 -->
				<div class="prlist">
					<div class="prlist_title"><?php echo $_smarty_tpl->tpl_vars['listtitle']->value;?>
</div>
					
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="review_list">
						<div class="rl">
							<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="_blank">
								<img src="__ROOT__/Uploads/Movie/Cover/<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" />
							</a>
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="_blank">
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
 
								</a> 
							</div>
							<div class="acthor">
								 评论: <a href=""><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
 </a>
							</div>
							<div class="content">
								<?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>

							</div>
						</div>
					</div>
					<div class="nav"></div>
					<?php } ?>
					<div style="float:right; margin-right:60px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
				</div>	
			</div>		
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		
	</body>
</html><?php }} ?>