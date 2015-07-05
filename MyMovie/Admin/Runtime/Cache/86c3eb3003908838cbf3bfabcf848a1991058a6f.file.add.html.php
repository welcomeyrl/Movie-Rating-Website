<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:36:06
         compiled from "./Admin/Tpl\Friendlink\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2056553d3e2603d519-07197102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86c3eb3003908838cbf3bfabcf848a1991058a6f' => 
    array (
      0 => './Admin/Tpl\\Friendlink\\add.html',
      1 => 1386710554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2056553d3e2603d519-07197102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3e26083a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3e26083a2')) {function content_553d3e26083a2($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/pptlist/callbackType/closeCurrent"  class="pageForm required-validate" enctype="multipart/form-data"
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>连接名称:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="linkname"/></dd>
			</dl>
			<dl>
				<dt>连接地址:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="url"/></dd>
			</dl>
			<dl>
				<dt>LOGO:</dt>
				<dd><input type="file" class="required"  style="width:100%" name="picname"/></dd>
			</dl>
			<dl>
				<dt>状态:</dt>
				<dd>
					<input type="radio" name="state" value="1" />新添加
					<input type="radio" name="state" value="2" />显示中
					<input type="radio" name="state" value="3" />已过期
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
</div>

<?php }} ?>