<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:35:57
         compiled from "./Admin/Tpl\Dialogue\add.html" */ ?>
<?php /*%%SmartyHeaderCode:10667553d3e1d2b4281-16480951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec998ec54aebbe88af6f5d142ae8aa28d7d04d7' => 
    array (
      0 => './Admin/Tpl\\Dialogue\\add.html',
      1 => 1386218846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10667553d3e1d2b4281-16480951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3e1d2fe61',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3e1d2fe61')) {function content_553d3e1d2fe61($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listdialogue/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<div class="pageFormContent" layoutH="60" style="padding-right:100px;">
				<dl class="nowrap">
					<dt>英文台词：</dt>
					<dd><textarea name="en_dialogue" cols="80" rows="2"></textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>中文台词：</dt>
					<dd><textarea name="cn_dialogue" class="required" cols="80" rows="2"></textarea></dd>
				</dl>
				<dl>
					<dt>来源影片：</dt>
					<dd><input name="source" type="text" style="width:100%"/></dd>
				</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

<?php }} ?>