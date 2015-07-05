<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:32:40
         compiled from "./Admin/Tpl\Movie\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3553dbbe8e99157-45650587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50236ddb20e0eba08c1e2ecd464958ccb96f3c6' => 
    array (
      0 => './Admin/Tpl\\Movie\\edit.html',
      1 => 1430097980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3553dbbe8e99157-45650587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dbbe8f25b7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dbbe8f25b7')) {function content_553dbbe8f25b7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><div class="pageContent">
	<form method="post"  enctype="multipart/form-data" action="__URL__/update/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>title:</label>
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" />
				<input  class="required" size="30" name="filmname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
" />
			</p>
			
			<p>
				<label>alias:</label>
				<input name="petname" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['petname'];?>
" />
			</p>
			<p>
				<label>director:</label>
				<input name="director" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['director'];?>
" />
			</p>
			<p>
				<label>writer:</label>
				<input name="editor" class="required" type="text" size="30"  value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['editor'];?>
" />
			</p>
			<p>
				<label>country:</label>
				<input type="text" name="nation" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['nation'];?>
" />
			</p>
			<p>
				<label>language:</label>
				<input type="text" name="language" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['language'];?>
" />
			</p>
			
			<p>
				<label>year:</label>
				<input type="text" name="showtime" class="date" size="30" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['showtime'],'%Y-%m-%d');?>
" /><a class="inputDateButton" href="javascript:;">select</a>
			</p>
			<p>
				<label>runtime:</label>
				<input name="minutes" class="digits textInput required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['minutes'];?>
" alt="" />
			</p>
			<!-- <p>
				<label>状 态：</label>
				<input name="status" type="radio" size="30" value='0' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==0){?>checked<?php }?> />新添加
				<input name="status" type="radio" size="30" value='1' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==1){?>checked<?php }?> />显示
				<input name="status" type="radio" size="30" value='2' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==2){?>checked<?php }?>/>幻灯片
			</p> -->
			<p style="height:60px; line-height:60px">
				<label style="height:60px; line-height:60px">poster<img src="__ROOT__/__UPLOAD__/Movie/Cover/a_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" /></label>
				<input type="file" name="picname" />
				<input type="hidden" name="pname" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />
			</p>
			<dl class="nowrap">
				<dt>Intro</dt>
				<dd></textarea><textarea class="editor" name="content" rows="9" cols="68" tools="simple" ><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</textarea></dd>
			</dl>
				
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
</div><?php }} ?>