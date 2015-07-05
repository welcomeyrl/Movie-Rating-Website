<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:08:04
         compiled from "./Admin/Tpl/Prevue/add.html" */ ?>
<?php /*%%SmartyHeaderCode:2140875167553e7b043969a1-37484902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c5e970d1525feb835ed9aa506d8d673aacfbe36' => 
    array (
      0 => './Admin/Tpl/Prevue/add.html',
      1 => 1430100554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140875167553e7b043969a1-37484902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553e7b04412ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7b04412ab')) {function content_553e7b04412ab($_smarty_tpl) {?>		
<div class="pageContent">
<!-- 	<form method="post" enctype="multipart/form-data" action="__URL__/insert/navTabId/listprevue/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this,dialogAjaxDone);"> -->
		
		<form method="post"  enctype="multipart/form-data" action="__URL__/insert/navTabId/listprevue/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		
		<div class="pageFormContent" layoutH="60" style="padding-right:100px;">

				<dl >
					<dt>title:</dt>
					<dd>
						<select name="fid"  style="width:200px;">
						<option value="">choose movie</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['filmname'];?>
</option>
						<?php } ?>
						
						</select>
					</dd>
				</dl>
				<dl>
					<dt>title of trailer:</dt>
					<dd><input type="text" name="title" size="50"/></dd>
				</dl>
				<dl>
					<dt>uplpad trailer:</dt>
					<dd><input type="file" name="videoname"/></dd>
				</dl>
<!-- 				<dl>
					<dt>封面图：</dt>
					<dd><input type="file" name="picname" id="form_pic"/></dd>
				</dl>
				 -->
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