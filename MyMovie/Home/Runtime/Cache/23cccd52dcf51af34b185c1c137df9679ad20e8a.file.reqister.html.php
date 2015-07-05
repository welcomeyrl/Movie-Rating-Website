<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:07:22
         compiled from "./Home/Tpl/Reqister/reqister.html" */ ?>
<?php /*%%SmartyHeaderCode:1034899154553d5647b04a12-03775328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23cccd52dcf51af34b185c1c137df9679ad20e8a' => 
    array (
      0 => './Home/Tpl/Reqister/reqister.html',
      1 => 1430098938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1034899154553d5647b04a12-03775328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d5647c61f3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d5647c61f3')) {function content_553d5647c61f3($_smarty_tpl) {?><!DOCTYPE html>
<html class="" lang="zh-CN">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta property="wb:webmaster" content="f307b26227e4f2c3">
		<title>Sign Up My Movie</title>
			<style type="text/css">
			/* Reset */
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { margin:0; padding:0; }
			table { border-collapse:collapse; border-spacing:0; }
			fieldset,img { border:0; }
			address,caption,cite,code,dfn,em,strong,th,var { font-style:normal; font-weight:normal; }
			ol,ul { list-style:none; }

			/* Font,  Link & Container */
			body { font:12px/1.6 arial,helvetica,sans-serif; background:url(__PUBLIC__/front/images/bg_forum.jpg);}
			a:link { color:#369;text-decoration:none; }
			a:visited { color:#669;text-decoration:none; }
			a:hover { color:#fff;text-decoration:none;background:#039; }
			a:active { color:#fff;text-decoration:none;background:#f93; }
			button { cursor:pointer;line-height:1.2; }
			
			/* Layout */
			.wrapper { width:950px;margin:0 auto; }
			#header { padding-top:30px; }
			#content { min-height:400px;*height:400px; }
			#header, #content { margin-bottom:40px; }
			#header, #content, #footer { width:100%;overflow:hidden; }
			#footer { color:#999;padding-top:6px;border-top: 1px dashed #ddd; }
			.article { float:left;width:590px; }
			.aside { float:right;width:310px;color:#666; }
			.aside li { padding-bottom: 20px; }

			/* header */
			.logo { float:left; width:215px;  height:30px; overflow:hidden; line-height:10em; }
			a.logo:link,
			a.logo:visited,
			a.logo:hover,
			a.logo:active { background:transparent url(data:#) no-repeat;
			*background-image:url(mhtml:#); }
			h1 { color:#494949;display:block;font-size:25px;font-weight:bold;line-height:1.1;margin:0;padding:0 0 30px;word-wrap:break-word; }

			/* form */
			.item { clear:both;margin:15px 0;zoom:1; }
			label { display: inline-block; float:left; margin-right: 15px; text-align: right; width: 60px; font-size: 14px; line-height: 30px; vertical-align: baseline }
			.remember { cursor: pointer; font-size: 12px; display: inline; width: auto; text-align: left; float: none; margin: 0; color: #666 }
			.item-captcha input,
			.basic-input { width: 200px; padding: 5px; height: 18px; font-size: 14px;vertical-align:middle; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; border: 1px solid #c9c9c9 }
			.basic-input1 { width: 100px; padding: 5px; height: 18px; font-size: 14px;vertical-align:middle; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; border: 1px solid #c9c9c9 }
			.item-captcha input:focus,
			.basic-input:focus { border: 1px solid #a9a9a9 }
			.item-captcha input { width:100px; }
			.item-captcha .pl { color:#666; }
			.btn-submit { cursor: pointer;color: #ffffff;background: #3fa156; border: 1px solid #528641; font-size: 14px; font-weight: bold; padding:6px 26px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; *width: 100px;*height:30px; }
			.btn-submit:hover { background-color:#4fca6c;border-color:#6aad54; }
			.btn-submit:active { background-color:#3fa156;border-color:#528641; }
			#item-error { padding-left:75px; }

			/* footer */
			.fright { float:right; }
			.icp { float:left; }

			.item-captcha img { max-width:70%; }
			body { -webkit-text-size-adjust: none;-webkit-touch-callout: none;-webkit-tap-highlight-color: transparent; }

			</style>
			<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
			<!--表单验证-->
			<script type="text/javascript">
				var info={ required:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;account should be composed of 4-12 characters!",password:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;password should be larger than 6 charaters!",email:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Please enter right email format!",yzm:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Please enter security code!",password1:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Please enter the exactly same password!",sub:""};
				//jquery的使用
				$(function(){
					//获取所有input输入框，并添加获取和失去焦点事件
					$("input").focus(function(){
						//获取焦点事件处理
						$(this).next("span").remove();
						var cname=$(this).attr("classname");
						$(this).after("<span style='color:blue;font-size:12px;'>"+info[cname]+"</span>")		
					}).blur(function(){
						//失去焦点事件处理
						$(this).next("span").remove();
						//做验证
						var cname=$(this).attr("classname");
						switch(cname){
							case "required":
								if($(this).val().match(/^\w{4,12}$/)==null){
									$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;Account format is not right!</span>");
								}else{
									var uname = $(this).val();//获取输入框中的值
									//ajax请求并判断此账号是否存在。
									$.get("__APP__/Reqister/docode",{ name:uname},function(data){
										
										if(data=="aa"){
											$("#username").after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;User name exists</span>");
										}
										if(data=="bb"){
											$("#username").after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/>&nbsp;&nbsp;This username is available</span>");
										}
									});
								}
								break;
							case "password":
								if($(this).val().match(/^[a-zA-Z0-9!@#\$%\^&\*\?]{6,}$/)==null){
									$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;Password format is not right</span>");
								}else{
									$(this).after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/></span>");
								}
								break;
							case "password1":
								if($(this).val()!=$("#password").val()){
									$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;The passwords are not matched</span>");
								}else{
									$(this).after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/></span>");
								}
								break;
							case "email":
								if($(this).val().match(/^\w+@\w+(\.\w+){0,3}$/)==null){
									$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;Email is wrong!</span>");
								}else{
									$(this).after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/></span>");
								}
								break;
						}
						
					});
				});
				function validateForm(){
					if($("#username").val().match(/^\w{4,12}$/)==null){
						alert("Wrong user name!");
						return false;
					}
					if($("#password").val().match(/^[a-zA-Z0-9!@#\$%\^&\*\?]{4,}$/)==null){	
						alert("Please enter right format password!");
						return false;
					}
					if($("#password").val()!=$("#password1").val()){
						alert("Passwords are not matched!");
						return false;
					}
					if($("#email").val().match(/^\w+@\w+(\.\w+){0,3}$/)==null){
						alert("Please enter right format email!");
						return false;
					}
							
				}
			</script>
			
			<!--密码强度开始-->
			<script language=javascript>
			<!--
			function Charstring(iN){              
			if (iN>=48 && iN <=57)                
			return 1; 
			if (iN>=65 && iN <=90)              
			return 2;
			if (iN>=97 && iN <=122)             
			return 4;
			else
			return 8;         
			}

			function modetotal(num){      
			modes=0;
			for (i=0;i<4;i++){
			if (num & 1) 
				modes++;
				num>>>=1;
			}
			return modes;
			}

			function checkpwd(spwd){   
			if (spwd.length<=4)
			return 0;                         
			Modes=0;
			for (i=0;i<spwd.length;i++){         
				Modes|=Charstring(spwd.charCodeAt(i));
			}
			return modetotal(Modes);
			} 

			function pwdstrong(pwd){       
			O_color="#cccccc";              
			L_color="#ffff00";               
			M_color="#DC440F";                
			H_color="#FF0000";                  
			if (pwd==null||pwd==''){             
				Lcolor=Mcolor=Hcolor=O_color;   
			} 
			else{
				S_level=checkpwd(pwd);        
				switch(S_level) {
				case 0:
					Lcolor=Mcolor=Hcolor=O_color;  
				case 1:
					Lcolor=L_color;
					Mcolor=Hcolor=O_color;           
					break;
				case 2:
					Lcolor=Mcolor=M_color;
					Hcolor=O_color;           
					break;
				default:
				Lcolor=Mcolor=Hcolor=H_color;
			}
			} 
			document.getElementById("pwd_L").style.background=Lcolor;    
			document.getElementById("pwd_M").style.background=Mcolor; 
			document.getElementById("pwd_H").style.background=Hcolor; 
			return;
			}
			//-->
			</script>
			<!--密码强度结束-->
	</head>
	<body>
		<div class="wrapper">
			<div id="header">
				<a href="" class="logo">Sign Up My Movie</a>
			</div>
			<div id="content">
				<h1>Welcome to My Movie</h1>
				<div class="article">
					<form id="lzform" name="lzform" method="post" action="__APP__/Reqister/req" onsubmit="return validateForm()">
						<div style="display:none;">
							<img src="" onload="loadTestImage('')">
						</div>
						<div class="item">
							<label>Account</label>
							<input style="color:#222;" id="username" name="username" class="basic-input" maxlength="60" value="" tabindex="1" type="text" classname="required">&nbsp;&nbsp;
						</div>
						<div class="item">
							<label>Password</label>
							<input id="password" name="password" class="basic-input" maxlength="20" tabindex="2" type="password" onKeyUp=pwdstrong(this.value) onBlur=pwdstrong(this.value) classname="password">
						</div>
						<div class="item">
							<label>&nbsp;</label>
							<div>
								<div id="pwd_L" style="width:50px;height:10px; background-color:#ddd; float:left;"></div><div id="pwd_M" style="width:50px;height:10px; background-color:#ddd; float:left;"></div><div id="pwd_H" style="width:50px;height:10px; background-color:#ddd; float:left;"></div>
							</div>
						</div>
						<div class="item">
							<label>Confirm Password</label>
							<input id="password1" name="password1" class="basic-input" maxlength="20" tabindex="2" type="password" onKeyUp=pwdstrong(this.value) onBlur=pwdstrong(this.value) classname="password1">
						</div>
						<div class="item">
							<label>Email</label>
							<input style="color:#222;" id="email" name="email" class="basic-input" maxlength="60" value="" tabindex="1" type="text" classname="email">
						</div>
						<div class="item">
							<label>&nbsp;</label>
							<img id="aa" src="__APP__/Reqister/verify" onclick="this.src=this.src+'?'+Math.random()"/>
						</div>
						<div class="item">
							<label>Security Code</label>
							<input style="color:#222; width: 100px;" id="code" name="code" class="basic-input1" maxlength="60" value="" tabindex="1" type="text" classname="yzm">
						</div>
						<div class="item">
							<label>&nbsp;</label>
							<input value="Sign Up" id="user_login" name="user_login" class="btn-submit" tabindex="5" type="submit" classname="sub">
						</div>
					</form>
				</div>
					<ul id="side-nav" class="aside">
						<li>&gt;&nbsp; Own your account?<a rel="nofollow" href="__APP__/Login/index">Sign Up Now</a></li>
						<li>&gt;&nbsp;<a href="__APP__/Index/index" style="color:red;">Home Page</a></li>
					 </ul>
			</div>
			<div id="footer">
				<span id="icp" class="fleft gray-link">
					© 2005－2013 mymovie.com, all rights reserved
				</span>
		<!--		<span class="fright">
					<a href="#">关于MyMovie</a>
					· <a href="#">联系我们</a>
					· <a href="__APP__/Map/map">网站地图</a>
					· <a href="#">免责声明</a>
					
					· <a href="">帮助中心</a>
					· <a href="#">友情链接</a>
					· <a href="#">移动应用</a>
					· <a href="#">MyMovie广告</a>
				</span>    -->
			</div>
		</div>
	</body>
</html><?php }} ?>