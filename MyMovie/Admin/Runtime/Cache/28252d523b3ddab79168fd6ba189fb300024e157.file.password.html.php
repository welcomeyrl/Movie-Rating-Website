<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:20:00
         compiled from "./Admin/Tpl/Index/password.html" */ ?>
<?php /*%%SmartyHeaderCode:995129124553dd51065f2a2-88006151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28252d523b3ddab79168fd6ba189fb300024e157' => 
    array (
      0 => './Admin/Tpl/Index/password.html',
      1 => 1430088346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995129124553dd51065f2a2-88006151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd5106c423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd5106c423')) {function content_553dd5106c423($_smarty_tpl) {?><div class="pageContent">
	<form method="post" action="__URL__/updatePasswd/id/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>old password:</label>
				<input type="text" name="prepasswd" class="required textInput" type="text"/>
			</p>
			
			
			<p>
				<label>new password:</label>
				<input type="password" name="password" class="required textInput">
			</p>
			<p>
				<label>confirm password:</label>
				<input name="repasswd" class="required textInput" type="password" />
			</p>
			
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">save</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">cancel</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>
<?php }} ?>