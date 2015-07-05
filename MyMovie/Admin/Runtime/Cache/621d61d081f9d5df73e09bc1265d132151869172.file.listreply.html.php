<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:08:37
         compiled from "./Admin/Tpl/Longreview/listreply.html" */ ?>
<?php /*%%SmartyHeaderCode:276596123553e7b2500eef3-79367459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621d61d081f9d5df73e09bc1265d132151869172' => 
    array (
      0 => './Admin/Tpl/Longreview/listreply.html',
      1 => 1430096936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276596123553e7b2500eef3-79367459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lid' => 0,
    'currentPage' => 0,
    'numPerPage' => 0,
    'list' => 0,
    'v' => 0,
    'totalCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553e7b2513bda',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7b2513bda')) {function content_553e7b2513bda($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><form id="pagerForm" action="__URL__/listreply/id/<?php echo $_smarty_tpl->tpl_vars['lid']->value;?>
" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['currentPage']->value)===null||$tmp==='' ? '1' : $tmp);?>
" />
	<input type="hidden" name="numPerPage" value="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" />
	<input type="hidden" name="_order" value="<?php echo $_REQUEST['_order'];?>
"/>
	<input type="hidden" name="_sort" value="<?php echo $_REQUEST['_sort'];?>
"/>
</form>
<!-- <div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
 	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> [标题,内容]
				</td>	
				<td>&nbsp; 状态：
					<select name="status" >
						<option value="" >-选择-</option>
						<option value="1" <?php if ($_REQUEST['status']==1){?>selected<?php }?>>正常</option>
						<option value="2" <?php if ($_REQUEST['status']==2){?>selected<?php }?>>举报</option>
						<option value="3" <?php if ($_REQUEST['status']==3){?>selected<?php }?>>禁言</option>
					</select>
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div> 
	</form>
</div> -->
<div class="pageContent">

	<table class="table" width="100%" layoutH="55">
		<thead>
			<tr>
				<th width="20" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="100">content</th>
				<th width="30" orderField="rtime" <?php if ($_REQUEST['_order']=='rtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>time</th>				
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<tr target="item_id" rel="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['rtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		

	<div class="panelBar">
		<div class="pages">
			<span>display</span>
			<select class="combox" name="numPerPage" onchange="dialogPageBreak({numPerPage:this.value})">
				<option value="10" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==10){?>selected<?php }?>>10</option>
				<option value="15" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==15){?>selected<?php }?>>15</option>
				<option value="20" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==20){?>selected<?php }?>>20</option>
				<option value="25" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==25){?>selected<?php }?>>25</option>
				<option value="30" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==30){?>selected<?php }?>>30</option>
			</select>
			<span>total <?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</span>
		</div>
		<div class="pagination" targetType="dialog" totalCount="<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
" numPerPage="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"></div>
	</div>
</div>
<?php }} ?>