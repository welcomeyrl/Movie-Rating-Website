<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:07:27
         compiled from "./Admin/Tpl\Auser\add.html" */ ?>
<?php /*%%SmartyHeaderCode:19345553d6faf4bef20-69222818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3be6733d58c0b93175d9ea25d039814304b176a8' => 
    array (
      0 => './Admin/Tpl\\Auser\\add.html',
      1 => 1430085763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19345553d6faf4bef20-69222818',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d6faf5092b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d6faf5092b')) {function content_553d6faf5092b($_smarty_tpl) {?><div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listuser/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>username:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username"/></dd>
			</dl>
			<dl>
				<dt>password:</dt>
				<dd><input type="password" class="required"  style="width:100%" name="password"/></dd>
			</dl>
			<dl>
				<dt>confirm password:</dt>
				<dd><input type="password" class="required"  style="width:100%" name="repasswd"/></dd>
			</dl>
			<dl>
				<dt>fullname:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="fullname"/></dd>
			</dl>
			<dl>
				<dt>Email:</dt>
				<dd><input type="text" class="required email" style="width:100%" name="email"/></dd>
			</dl>
			<dl>
				<dt>phone:</dt>
				<dd><input type="text" class="required phone" style="width:100%" name="phone"/></dd>
			</dl>
			<dl>
				<dt>status:</dt>
				<dd><input type="radio" name="status" value="0" checked />enable
					<input type="radio" name="status" value="1"/>disable
				</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">save</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">cancel</button></div></div></li>
			</ul>
		</div>
	</form>
</div><?php }} ?>