<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:30:05
         compiled from "./Admin/Tpl/Movie/showPhotos.html" */ ?>
<?php /*%%SmartyHeaderCode:1660376057553dd76d31b6f7-38556568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd380fd9f7b77bcb941ba2b8862e0738a0bd37ae8' => 
    array (
      0 => './Admin/Tpl/Movie/showPhotos.html',
      1 => 1430099034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660376057553dd76d31b6f7-38556568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pic' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd76d3879c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd76d3879c')) {function content_553dd76d3879c($_smarty_tpl) {?><style type="text/css">
	#mpic img {
		border:1px solid #ccc;
		padding: 3px;
		margin: 5px;
	}
</style>

<div class="pageContent">
	<form method="post" action="__URL__/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">

			<div id="mpic">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
						<li style="float:left">
							<img src="__ROOT__/__UPLOAD__/Movie/mPhotos/m_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />	
						</li>
					<?php } ?>
				</ul>
			</div>	
			
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">OK</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div><?php }} ?>