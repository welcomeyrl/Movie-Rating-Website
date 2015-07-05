<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:59:29
         compiled from "./Home/Tpl/Time/index.html" */ ?>
<?php /*%%SmartyHeaderCode:623169164553dd041e00740-55210358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df9f5453f85e8a29d156f2ddc1afa638ba90a8c' => 
    array (
      0 => './Home/Tpl/Time/index.html',
      1 => 1387468940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '623169164553dd041e00740-55210358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd041e865b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd041e865b')) {function content_553dd041e865b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<link rel="stylesheet" href="__PUBLIC__/time/style/documentation.css" type="text/css" />
		<link rel="stylesheet" href="__PUBLIC__/time/style/jalendar.css" type="text/css" />
		<script type="text/javascript" src="__PUBLIC__/time/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/time/js/jalendar.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#myId3').jalendar();
			});
		</script>
	</head>
	<body>
		<!-- 页头开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/uhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页头结束 -->
		
		<div class="nav"></div>
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">
				<div id="myId3" class="jalendar mid">
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="added-event" data-date="<?php echo $_smarty_tpl->tpl_vars['vo']->value['date'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
"></div>
					<?php } ?>
				</div>
			</div>
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		
	</body>
</html><?php }} ?>