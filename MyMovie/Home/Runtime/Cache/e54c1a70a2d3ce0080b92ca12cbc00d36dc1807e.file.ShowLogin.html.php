<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:18:42
         compiled from "./Home/Tpl/Login/ShowLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:1623446258553d54b5ec90e5-56694723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54c1a70a2d3ce0080b92ca12cbc00d36dc1807e' => 
    array (
      0 => './Home/Tpl/Login/ShowLogin.html',
      1 => 1430107024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623446258553d54b5ec90e5-56694723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d54b60021c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d54b60021c')) {function content_553d54b60021c($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>
<style type="text/css">
	*{ margin:0px;border:0px;padding:0px;}
	body{ font:12px "宋体";}
	a{ color:#000;text-decoration:none;}
	a:hover{ color:#F30;text-decoration:underline;}
	input{ padding:0px;margin:0px;}
	.txtbox{ border:1px solid #E79F50;height:20px;line-height:22px;width:120px;}
	.bfont{ font:700 12px "宋体";}
	#login{ width:600px;height:100%;overflow:hidden;margin:0px auto;}
	#login_one{ width:400px;float:left;}
	#login_two{ width:180px;height:220px;margin-top:10px;float:right;}
	#title{ width:400px;height:30px;line-height:30px;color:#F60;font-weight:700;background-color:#FDEBD9;text-align:center;margin:0px auto;}
	#loginbox{ width:185px;height:120px;margin:10px 20px;float:left;display:inline;}
	#btnlogin{ width:55px;height:120px;float:right;margin:10px 30px 10px 5px;}
	#forget{ width:200px;margin:0px auto;height:25px;line-height:25px;text-align:center;}
	#forget span{ width:80px;display:inline;margin:0px 10px;}
</style>
<body>
<div id="login">
	<div id="login_one">
	<div id="title">Welcome to login MyMovie</div>
    <div style="width:360px;height:160px;margin:0px auto;">
        <form method="post" action="__APP__/Login/login/id/1">
		<table id="loginbox" border="0" cellpadding="0" cellspacing="0">
            <tr style="height:40px">
                <td class="bfont">username: </td>
                <td><input class="txtbox" type="text" name="username" style="width:180px;"/></td>
            </tr>
            <tr>
                <td class="bfont">password: </td>
                <td><input class="txtbox" type="password" name="password" style="width:180px;"/></td>
            </tr>
			<tr>
                <td class="bfont">security code: </td>
				<td><input class="txtbox" type="text" name="code" style="width:100px;float:left;margin-top:10px;"/>
                <img style="margin-top:10px;" src="__APP__/Login/verify" onclick="this.src=this.src+'?'+Math.random()"/></td>
            </tr>
			 <tr>
                <td class="bfont">&nbsp;</td>
                <td><input class="txtbox" type="submit" name="" value="login now" style="width:120px;height:30px;color:#fff;margin-top:20px;background-color:#3E8D2A;"/></td>
            </tr>
        </table>
		</form>
       <!-- <div id="btnlogin"><a href="__APP__/Login/login"><img src="__PUBLIC__/front/images/login.gif" width="55" height="55" /></a></div>-->
    </div>
    <div id="forget">
    	<span style="float:left;"><a href="#">forget password? </a></span>
        <span style="float:right;"><a href="__APP__/Reqister/reqister">register now</a></span>
 <!--   </div>
    <div style="height:25px;line-height:25px;text-align:center">马上注册还可以对喜爱的电影和影星进行收藏哦(⊙o⊙)！ </div>
	</div>  -->
<!--	<div id="login_two">
		<img style="width:180px;height:220px;" src="__PUBLIC__/front/images/loginpic.jpg"/>
	</div>  -->
</div>
</body>
</html>
<?php }} ?>