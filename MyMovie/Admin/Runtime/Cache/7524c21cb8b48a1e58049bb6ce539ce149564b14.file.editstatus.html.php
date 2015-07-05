<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:13:19
         compiled from "./Admin/Tpl/Movie/editstatus.html" */ ?>
<?php /*%%SmartyHeaderCode:687978756553e7c3f60e466-61219532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7524c21cb8b48a1e58049bb6ce539ce149564b14' => 
    array (
      0 => './Admin/Tpl/Movie/editstatus.html',
      1 => 1430098182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '687978756553e7c3f60e466-61219532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553e7c3f6a8fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7c3f6a8fd')) {function content_553e7c3f6a8fd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><div class="pageContent">
	<form method="post" action="__URL__/editStatusHandle/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
		
		<input type='hidden' name='pstatus' value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['status'];?>
" />
		
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" />

		<div class="pageFormContent" layoutH="56">
			<p>
				<label>title:</label>
				
				<input  class="textInput readonly disabled" size="30" type="text" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
" />
			</p>
			
			<p>
				<label>alias:</label>
				<input class="textInput readonly disabled" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['petname'];?>
" />
			</p>
			
			<p>
				<label>year:</label>
				<input type="text" class="textInput readonly disabled" size="30" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],'%Y-%m-%d');?>
" />
			</p>

			<p>
				<label>status:</label>
				<input name="status" type="radio" size="30" value='0' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==0){?>checked<?php }?> />new
				<input name="status" type="radio" size="30" value='1' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==1){?>checked<?php }?> />display
				<input name="status" type="radio" size="30" value='2' <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==2){?>checked<?php }?>/>slide		
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
</div><?php }} ?>