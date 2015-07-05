<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:47:24
         compiled from "./Home/Tpl/User/forbid.html" */ ?>
<?php /*%%SmartyHeaderCode:1480015300553dcd6c4e9428-86627891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed68dedf1a5125d3ce25e3120ed6e7f4d9df6f2' => 
    array (
      0 => './Home/Tpl/User/forbid.html',
      1 => 1430103318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1480015300553dcd6c4e9428-86627891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dcd6c557bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dcd6c557bb')) {function content_553dcd6c557bb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - The user has been forbidded</title>
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
		
		<div class="nav"></div>
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">
				<!-- 左侧心情签名 -->
				<div id="psign">
					<div id="psmallimg">
						<img src="__ROOT__/Public/front/images/Bell.png" width="120px;" />
					</div>
					<div id="ptext">
						<div id="mytext">
							<span id="mytexttitle"><h3>This account is forbidden</h3></span>
								<span id="mytextcontent" style="color:red;">Your account have already forbidden. You can contact us with manage memeber email </span>
								<br/><br/>Manage Member Email:useradmin@mymovie.com
						</div>
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