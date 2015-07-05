<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:20:32
         compiled from "./Admin/Tpl/Ppt/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:310918737553dd5300c9984-80291509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea885b48d22031df6fbe65414af5d8b80680f5f' => 
    array (
      0 => './Admin/Tpl/Ppt/edit.html',
      1 => 1430099174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310918737553dd5300c9984-80291509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd53014b3d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd53014b3d')) {function content_553dd53014b3d($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/update/navTabId/pptlist/callbackType/closeCurrent"  class="pageForm required-validate" enctype="multipart/form-data"
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>title:</dt>
				<dd><input type="text"  style="width:100%" name="title" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
"/></dd>
			</dl>
			<dl>
				<dt>image:</dt>
				<dd><input type="file"  style="width:100%" name="picname" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
"/></dd>
			</dl>
			<dl>
				<dt>status:</dt>
				<dd>
					<input type="radio" name="state" value="1" <?php if ($_smarty_tpl->tpl_vars['vo']->value['state']==1){?>checked<?php }?> />display
					<input type="radio" name="state" value="2" <?php if ($_smarty_tpl->tpl_vars['vo']->value['state']==2){?>checked<?php }?> />hidden
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
</div>
<?php }} ?>