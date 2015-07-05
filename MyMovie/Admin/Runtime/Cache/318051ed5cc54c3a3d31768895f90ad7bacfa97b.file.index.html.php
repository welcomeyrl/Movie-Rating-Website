<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:03:21
         compiled from "./Admin/Tpl\Auser\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28111553d3dea03f892-62814384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318051ed5cc54c3a3d31768895f90ad7bacfa97b' => 
    array (
      0 => './Admin/Tpl\\Auser\\index.html',
      1 => 1430086584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28111553d3dea03f892-62814384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3dea1398d',
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
    'list' => 0,
    'vo' => 0,
    'v' => 0,
    'totalCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3dea1398d')) {function content_553d3dea1398d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><form id="pagerForm" action="__URL__/index" method="post">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="__URL__/index2" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						<label style="width:60px;">search user:</label>
						<input type="text" name="keyword" value="<?php echo $_POST['keyword'];?>
" /> [keyword:username]
					</td>
					<td>
						<label style="width:60px;">status:</label>
						<select name="status" class="required combox">
							<option value="">select</option>
							<option value="0" selected>enable</option>
							<option value="1">disable</option>
						</select>
					</td>
					<td>
						<div class="buttonActive"><div class="buttonContent"><button type="submit">submit</button></div></div>
					</td>	
				</tr>
			</table>
		</div>
	</form>	
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/add" target="dialog" width="480" height="360" rel="user_msg" title="添加用户信息"><span>add user</span></a></li>

			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listuser" target="ajaxTodo" title="确定要删除吗?"><span>delete user</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="480" height="360" target="dialog"><span>change profile</span></a></li>

			<li class="line">line</li>			
			<li><a class="add" href="__URL__/setRole/id/{item_id}"  width="480" height="360" target="dialog"><span>assign role</span></a></li>

			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>

			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="list" width="100%" targetType="navTab" layoutH="116">
		<thead>
			<tr>
				<th orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th>username</th>
				<th>fullname</th>
				<th>Email</th>
				<th>phone</th>
				<th>login time</th>
				<th>login IP</th>
				<th orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>status</th>
				<th>group</th>
				<!--<th width="80" orderField="name" class="asc">客户号</th>
				<th width="100" orderField="num" class="desc">客户名称</th>-->
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
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['fullname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['phone'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['login_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['login_ip'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==0){?>enable<?php }else{ ?>disable<?php }?>
				</td>
				<td>
					<ul>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['username']==C("RBAC_SUPERADMIN")){?>
						admin
					<?php }else{ ?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 ]</li>
					<?php } ?>
					<?php }?>
					</ul>
				</td>
				<!--
				<td><a href='__URL__/access/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'>配置权限</a></td>
				
				-->
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	
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

</div><?php }} ?>