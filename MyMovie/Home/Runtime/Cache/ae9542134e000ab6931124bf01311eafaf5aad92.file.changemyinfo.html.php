<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:58:29
         compiled from "./Home/Tpl/User/changemyinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1843783531553dd005ef1f02-33908310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9542134e000ab6931124bf01311eafaf5aad92' => 
    array (
      0 => './Home/Tpl/User/changemyinfo.html',
      1 => 1430102794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1843783531553dd005ef1f02-33908310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd0060b151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd0060b151')) {function content_553dd0060b151($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie-Edit my profile</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/time/my.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript" src="__PUBLIC__/time/my.js"></script>
		
		<script type="text/javascript">
			var info={ required:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Let more friends know you",email:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Please enter right format email!",age:"&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req1.png'/>&nbsp;&nbsp;Please enter your age!"};
			
			$(function(){
				//获取所有input输入框，并添加获取和失去焦点事件
				$("#name,#email,#age").focus(function(){
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
							if($(this).val()==null){
								$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;Name is required!</span>");
							}else{
								$("#name").after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/>&nbsp;&nbsp;Will be more friends to know you!</span>");
							}
							break;
						case "email":
							if($(this).val().match(/^\w+@\w+(\.\w+){0,3}$/)==null){
								$(this).after("<span style='color:red;font-size:12px;'>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req3.png'/>&nbsp;&nbsp;Wrong format email!</span>");
							}else{
								$(this).after("<span>&nbsp;&nbsp;<img src='__PUBLIC__/front/images/req2.png'/></span>");
							}
							break;
					}
					
				});
			});
				
			function doCheck(myform){
				//判断数据添加是否正确
				if($("#email").val().match(/^\w+@\w+(\.\w+){0,3}$/)==null){
					alert("Please enter right format email");
					return false;
				}
					
				if($("#name").val()==null){
					alert("Add real name to let more friends know you");
					return false;
				}
			}
			
		</script>
	</head>
	<body>
		<!-- 页头开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/uhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页头结束 -->
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">

				<!-- 用户资料修改 -->
				<div class="prlist">
					<div class="prlist_title">&nbsp;Edit Profile Page<span id="changemyinfolink"><a href="__APP__/User/changepass/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Edit your password</a></span></div>
					
					<div class="myinfo">
						<form action="__URL__/dochangeinfo" method="post" onsubmit="return doCheck(this);">
							<input type="hidden" name="id" value="<?php echo $_SESSION['loginuser']['id'];?>
"
							<div class="item">
								<label class="labelinp" ><b><span class="myinfotag">User ID:</span></b></label>
								<label class="labelinp" ><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</label>&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp" ><b><span class="myinfotag">User Account:</span></b></label>
								<label class="labelinp"><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</label>&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp"><b><span class="myinfotag">User Name:</span></b></label>
								<input style="color:#222;" id="name" name="name" class="basic-input" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
" type="text" classname="required">&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp"><b/><span class="myinfotag">User Email:</span></b></label>
								<input style="color:#222;"id="email" name="email" class="basic-input" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['email'];?>
" type="text" classname="email">&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp"><b><span class="myinfotag">User Gender:</span></b></label>
								<label class="labelinp"><input type="radio" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>checked<?php }?> > 男 </label>
								<label class="labelinp"><input type="radio" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==0){?>checked<?php }?> > 女 </label>
								
							</div>
							
							<div class="item">
								<label class="labelinp" for="birthday"><b><span class="myinfotag">Birthday:</span></b></label>
								<input style="color:#222;" id="birthday" name="birthday" class="basic-input" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['birthday'];?>
"  type="text" classname="birthday">&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp"><b><span class="myinfotag">User Address:</span></b></label>
								<input style="color:#222;" id="address" name="address" class="basic-input2" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['address'];?>
" type="text">&nbsp;&nbsp;
							</div>
							
							<div class="item">
								<label class="labelinp">&nbsp;</label>
								<input value="Edit" id="user_login" name="user_login" class="btn-submit" type="submit" classname="sub">&nbsp;&nbsp;
								<input value="Reset" id="user_login" name="user_login" class="btn-submit" type="reset" classname="sub">
							</div>
						</form>
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