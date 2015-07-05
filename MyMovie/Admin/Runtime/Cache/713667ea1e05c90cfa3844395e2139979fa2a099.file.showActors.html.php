<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:29:57
         compiled from "./Admin/Tpl/Movie/showActors.html" */ ?>
<?php /*%%SmartyHeaderCode:321685643553dd765d4d862-77271484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '713667ea1e05c90cfa3844395e2139979fa2a099' => 
    array (
      0 => './Admin/Tpl/Movie/showActors.html',
      1 => 1430099024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321685643553dd765d4d862-77271484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
    'list' => 0,
    'vo' => 0,
    'totalCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd765e7ff5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd765e7ff5')) {function content_553dd765e7ff5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><form id="pagerForm" action="__URL__/showActors" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['currentPage']->value)===null||$tmp==='' ? '1' : $tmp);?>
" />
	<input type="hidden" name="numPerPage" value="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" />
	<input type="hidden" name="_order" value="<?php echo $_REQUEST['_order'];?>
"/>
	<input type="hidden" name="_sort" value="<?php echo $_REQUEST['_sort'];?>
"/>
</form>


<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						<label>search actor:</label>
						<input type="text" name="keywords"/>
					</td>
				
					<td>
						<div class="buttonActive"><div class="buttonContent"><button type="submit">search</button></div></div>
					</td>	
				</tr>
			</table>
		</div>
	</form>	
</div>

<div class="pageContent">
	<table class="list" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="116">
		<thead>
			<tr>
				<th>ID</th>
				<th>actor</th>
				<th>actor name</th>
				<th>翻译名</th>
				<th>gender</th>
				
				<th>horoscope</th>
				<th>birthday</th>
						
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
			<tr target="item_id" rel="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
				<td>
					<img src="__ROOT__/__UPLOAD__/Actor/Photo/s_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['ename'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>male<?php }else{ ?>female<?php }?></td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['constellation'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['birthday'],"%Y - %m - %d");?>
</td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="panelBar" >
		<div class="pages">
			<span>display</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==10){?>selected<?php }?>>10</option>
				<option value="15" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==15){?>selected<?php }?>>15</option>
				<option value="20" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==20){?>selected<?php }?>>20</option>
				<option value="25" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==25){?>selected<?php }?>>25</option>
				<option value="30" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==30){?>selected<?php }?>>30</option>
			</select>
			<span>total <?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
" numPerPage="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"></div>

	</div>
</div>
<?php }} ?>