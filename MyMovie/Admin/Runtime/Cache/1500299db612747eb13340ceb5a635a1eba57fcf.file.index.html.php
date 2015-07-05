<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:00:17
         compiled from "./Admin/Tpl\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26336541644bf0dd4d5-76691809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1500299db612747eb13340ceb5a635a1eba57fcf' => 
    array (
      0 => './Admin/Tpl\\Login\\index.html',
      1 => 1430089216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26336541644bf0dd4d5-76691809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644bf1aaf4',
  'variables' => 
  array (
    'Think' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644bf1aaf4')) {function content_541644bf1aaf4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> the admin page </title>
<link href="__PUBLIC__/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '__URL__/verify/'+timenow);
	}
}

//-->
</script>
<style type="text/css">
a {
	text-decoration: none;
	font-style: italic;
}

</style>
</head>
<body>
<div id="login">
	<div id="login_header">
		<h1 class="login_logo">
			<a href="__APP__" style="font-size:35px;color:#00B1F6;text-decoration:none;">MyMovie</a>
		</h1>
		<div class="login_headerContent">
			<div class="navList">
				<ul>

				</ul>
			</div>
			<h2 class="login_title" style="font-size:16px; text-align:left;">login the administrator</h2>
		</div>
	</div>
	<div id="login_content">
		<div class="loginForm">
			<form method="post" action="__URL__/checkLogin/">
				<p>
					<label>username:</label>
					<input type="text" name="username" size="20" class="login_input" />
				</p>
				<p>
					<label>password:</label>
					<input type="password" name="password" size="20" class="login_input" />
				</p>
				<p>
					<label>verification code</label>
					<input class="code" name="verify" type="text" size="5" />
					<span><img id="verifyImg" SRC="__URL__/verify" onClick="fleshVerify()" border="0" alt="get new verification code" style="cursor:pointer" align="absmiddle"></span>
				</p>
				<div class="login_bar">
					<input class="sub" type="submit" value=" " />
				</div>
			</form>
		</div>
		<div class="login_banner">login</div>
		<div class="login_main">
		</div>
	</div>
	<div id="login_footer">
		Copyright &copy; 2015 <?php echo $_smarty_tpl->tpl_vars['Think']->value['config']['COMPANY'];?>
 Inc. All Rights Reserved.
	</div>
</div>

</body>
</html><?php }} ?>