<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:31:09
         compiled from "./Admin/Tpl/Movie/edittype.html" */ ?>
<?php /*%%SmartyHeaderCode:82426770553dd7ad607766-06534411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed5d511d50397542d3b3b551c6b3e8fd70f1a19' => 
    array (
      0 => './Admin/Tpl/Movie/edittype.html',
      1 => 1430098232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82426770553dd7ad607766-06534411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'movie_id' => 0,
    'type1' => 0,
    'k' => 0,
    'v' => 0,
    'vo' => 0,
    'type2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd7ad6a616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd7ad6a616')) {function content_553dd7ad6a616($_smarty_tpl) {?>
<h2 class="contentTitle">set category</h2>
<form method="post" action="__URL__/editTypeHandle/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
	<div class="pageFormContent" layoutH="98">

		<input type="hidden" name="movid" value="<?php echo $_smarty_tpl->tpl_vars['movie_id']->value;?>
" />
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<p width="100" ><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
：</p>
			<div class="divider"></div>
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<label><input type="checkbox" name="type<?php echo $_smarty_tpl->tpl_vars['vo']->value['fid'];?>
[]" value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'/><?php echo $_smarty_tpl->tpl_vars['vo']->value['typename'];?>
</label>
				<?php } ?>
			</ul>
			<div class="divider"></div>
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<p width="100" ><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
：</p>
			<div class="divider"></div>
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<label><input type="radio" name="type<?php echo $_smarty_tpl->tpl_vars['vo']->value['fid'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'/><?php echo $_smarty_tpl->tpl_vars['vo']->value['typename'];?>
</label>
				<?php } ?>
			</ul>
			<div class="divider"></div>
		<?php } ?>
		
	</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">submit</button></div></div></li>
			<li><div class="button"><div class="buttonContent"><button type="button" class="close">cancel</button></div></div>
			</li>
		</ul>
	</div>
</form>
<?php }} ?>