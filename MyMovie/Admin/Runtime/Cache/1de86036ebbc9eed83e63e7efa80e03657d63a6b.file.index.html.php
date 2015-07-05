<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:22:09
         compiled from "./Admin/Tpl/User/index.html" */ ?>
<?php /*%%SmartyHeaderCode:744243083553dd5916abe85-19534462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1de86036ebbc9eed83e63e7efa80e03657d63a6b' => 
    array (
      0 => './Admin/Tpl/User/index.html',
      1 => 1387477012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744243083553dd5916abe85-19534462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'vo' => 0,
    'numPerPage' => 0,
    'totalCount' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd5917ef84',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd5917ef84')) {function content_553dd5917ef84($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> [ 账号,真实姓名 ]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="icon" href="__URL__/detail/id/{item_id}"  height="480" width="800" max="true" target="dialog"><span>详细</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="40" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="40">账号</th>
				<th width="40">真实姓名</th>
				<th width="40">性别</th>
				<th width="40">级别</th>
				<th width="40" orderField="addtime" <?php if ($_REQUEST['_order']=='addtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>注册时间</th>
				<th width="40" orderField="logtimes" <?php if ($_REQUEST['_order']=='logtimes'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>登陆次数</th>
				<th width="40" orderField="lastlog" <?php if ($_REQUEST['_order']=='lastlog'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>最后登陆</th>
				<th width="40">状态</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>男<?php }else{ ?>女<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['level'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['logtimes'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['lastlog'],"%Y-%m-%d %H:%M");?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['disable']==0){?>正常<?php }else{ ?>禁言<?php }?></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==10){?>selected<?php }?>>10</option>
				<option value="15" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==15){?>selected<?php }?>>15</option>
				<option value="20" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==20){?>selected<?php }?>>20</option>
				<option value="25" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==25){?>selected<?php }?>>25</option>
				<option value="30" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==30){?>selected<?php }?>>30</option>
			</select>
			<span>共<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
" numPerPage="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"></div>
	</div>
</div>
<?php }} ?>