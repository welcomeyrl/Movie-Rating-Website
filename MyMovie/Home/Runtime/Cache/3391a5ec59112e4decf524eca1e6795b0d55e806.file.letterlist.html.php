<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:58:27
         compiled from "./Home/Tpl/User/letterlist.html" */ ?>
<?php /*%%SmartyHeaderCode:430891584553dd0037dbfe0-90505696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3391a5ec59112e4decf524eca1e6795b0d55e806' => 
    array (
      0 => './Home/Tpl/User/letterlist.html',
      1 => 1387477012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430891584553dd0037dbfe0-90505696',
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
  'unifunc' => 'content_553dd003899d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd003899d9')) {function content_553dd003899d9($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - 站内信列表</title>
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
					<div class="prlist_title">
						<?php echo $_smarty_tpl->tpl_vars['listtitle']->value;?>

					</div>
					
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="notice_list">
						<div class="rr">
							<div class="title">
								<a href="__APP__/User/myletter/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['uid'];?>
/lid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
 
								</a> 
								<span id="ntime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>
</span>
								<span><?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==0){?>【未查看】<?php }else{ ?>【已查看】<?php }?></span>
							</div>
							
							<div class="content">
								公告简要：<?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>

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