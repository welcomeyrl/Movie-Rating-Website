<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:45:22
         compiled from "./Home/Tpl\Uphotoalbum\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29853541644b2072f98-99378231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093367aef56f72abbc0a5f47a266017b5ec5f9b4' => 
    array (
      0 => './Home/Tpl\\Uphotoalbum\\index.html',
      1 => 1387161516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29853541644b2072f98-99378231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
    'list' => 0,
    'v' => 0,
    'vo' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644b21aeb1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644b21aeb1')) {function content_541644b21aeb1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
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

					<?php if ($_GET['uid']==$_SESSION['loginuser']['id']){?>
						<button class="btn-submit">发布相册</button>
					<?php }?>
					</div>
					
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<div class="review_list">
						<div class="picrl">
							<img src="__ROOT__/Uploads/Photoalbum/Small/<?php echo $_smarty_tpl->tpl_vars['v']->value['coverpic'];?>
"/>
						</div>
						<div class="picrr">
							<div class="title">
								<a href="__APP__/Uphotoalbum/albumdetail/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
/pid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/">
									<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 
								</a> 
							</div>
							<div class="acthor">
								 <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
上传于于: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],"%Y-%m-%d %H:%M");?>

							</div>
							<div class="content">
								<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

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


		<script type="text/javascript">
		$(function(){
			//点击弹出div层
			$(".btn-submit").click(function(){
				window.location="__APP__/Uphotoalbum/add/uid/<?php echo $_GET['uid'];?>
";
			});
		});
		</script>
	</body>
</html><?php }} ?>