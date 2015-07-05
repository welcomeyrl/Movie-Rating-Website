<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:35:41
         compiled from "./Admin/Tpl\Node\nodeList.html" */ ?>
<?php /*%%SmartyHeaderCode:3946553d3e0d433521-15349520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48f8e225bdb32dec3fd115b4f08c11ca639e90db' => 
    array (
      0 => './Admin/Tpl\\Node\\nodeList.html',
      1 => 1387401216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3946553d3e0d433521-15349520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'app' => 0,
    'action' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3e0d494fc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3e0d494fc')) {function content_553d3e0d494fc($_smarty_tpl) {?><style type="text/css">
	.com {
		border:1px solid #B8D0D6;
		border-bottom: 0px;
		padding: 5px;
		margin:  5px 5px 0 5px; 
		background-color: #C0C0C0;
	}
	.mcom {
		border:1px solid #B8D0D6;
		padding: 3px;
		margin:  0px 5px 5px 5px; 
		
	}
	.method {
		display: inline-block;
		padding-left:3px; 
		width: 120px;
		height:18px;
		line-height: 18px;
		margin: 3px 3px 3px 15px;
		background-color: #ccffcc;
	}

</style>

<!-- <h2 class="contentTitle">添加节点</h2> -->

<div class="pageContent" layoutH="42">

	<?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
	<fieldset style="border:1px solid #D8D0D6;margin:5px;paddng:5px;" class="app">
    	<legend style="border:1px solid #B8D0D6; padding:5px;"><?php echo $_smarty_tpl->tpl_vars['app']->value['title'];?>
 [<a style="color:blue;" target="dialog" href="__URL__/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
/level/2"> 添加控制器 </a>]
    	</legend>
    	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
    		<div class="com">
    		<?php echo $_smarty_tpl->tpl_vars['action']->value['title'];?>
 [ <a style="color:blue" target="dialog"  href="__URL__/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['action']->value['id'];?>
/level/3"> 添加方法 </a> ]
    		</div>
    		<div class="mcom">
    		<?php  $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['action']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['method']->key => $_smarty_tpl->tpl_vars['method']->value){
$_smarty_tpl->tpl_vars['method']->_loop = true;
?>
    			<span class="method"><?php echo $_smarty_tpl->tpl_vars['method']->value['title'];?>
</span>
    		<?php } ?>
    		</div>
    	<?php } ?>
    	
  	</fieldset>
  	<?php } ?>
	
</div><?php }} ?>