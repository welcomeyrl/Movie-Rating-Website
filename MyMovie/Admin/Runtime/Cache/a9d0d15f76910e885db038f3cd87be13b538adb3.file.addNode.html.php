<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:04:01
         compiled from "./Admin/Tpl\Node\addNode.html" */ ?>
<?php /*%%SmartyHeaderCode:4536553d6ee1f28021-23898592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d0d15f76910e885db038f3cd87be13b538adb3' => 
    array (
      0 => './Admin/Tpl\\Node\\addNode.html',
      1 => 1387230670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4536553d6ee1f28021-23898592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pid' => 0,
    'level' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d6ee2033e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d6ee2033e3')) {function content_553d6ee2033e3($_smarty_tpl) {?><div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/nodelist/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		
		<input type='hidden' name='pid' value='<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
' />
		<input type='hidden' name='level' value='<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
' />
		<input type='hidden' name='sort' value='1' />

		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>节点：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name"/></dd>
			</dl>
			<dl>
				<dt><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
			<dl>
				<dt><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
描述：</dt>
				<dd><input type="text"  style="width:100%" name="remark"/></dd>
			</dl>
			<dl>
				<dt>是否开启：</dt>
				<dd><input type="radio" name="status" value="1" checked="checked"/>开启
					<input type="radio" name="status" value="0"/>关闭
				</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div><?php }} ?>