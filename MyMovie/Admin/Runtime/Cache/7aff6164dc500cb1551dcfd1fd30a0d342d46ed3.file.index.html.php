<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:35:33
         compiled from "./Admin/Tpl\Role\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29321541644e3373389-29718656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aff6164dc500cb1551dcfd1fd30a0d342d46ed3' => 
    array (
      0 => './Admin/Tpl\\Role\\index.html',
      1 => 1387290492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29321541644e3373389-29718656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644e3649d6',
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
    'list' => 0,
    'vo' => 0,
    'totalCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644e3649d6')) {function content_541644e3649d6($_smarty_tpl) {?><form id="pagerForm" action="__URL__/index" method="post">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						<label>搜索角色：</label>
						<input type="text" name="keyword" value="<?php echo $_POST['keyword'];?>
"/> [关键字：角色、角色名称]
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
			<li><a class="add" href="__URL__/add" target="dialog" width="480" height="270" rel="user_msg" title="添加角色"><span>添加角色</span></a></li>

			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listrole" target="ajaxTodo" title="确定要删除吗?"><span>删除角色</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="480" height="270" target="dialog" title="修改角色" ><span>修改角色</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" height="480" width="800" title="配置权限信息" max="true" target="dialog" href="__URL__/access/rid/{item_id}"><span>配置权限</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" height="480" width="800" title="查看权限信息" target="dialog" href="__URL__/showAccess/rid/{item_id}"><span>查看权限信息</span></a></li>

			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>

			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="table" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="116">
		<thead>
			<tr>
				<th  orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th  orderField="name" <?php if ($_REQUEST['_order']=='name'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>角色</th>
				<th>角色名称</th>
				<th>角色描述</th>
				<th  orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>开启状态</th>
				<!--<th>配置权限</th>-->
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
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['remark'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['status']){?>开启<?php }else{ ?>禁用<?php }?>
				</td>
				<!--
				<td><a height="480" width="800" title="配置权限信息" max="true" rel="dlg" target="dialog" style="color:blue" target="dialog" href="__URL__/access/rid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">配置权限</a></td>
				
				<td><a style="color:blue" target="dialog" href="__APP__/User/rolelist/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">分配角色</a></td>-->
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	
	<div class="panelBar" >
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==10){?>selected<?php }?>>10</option>
				<option value="15" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==15){?>selected<?php }?>>15</option>
				<option value="20" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==20){?>selected<?php }?>>20</option>
				<option value="25" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==25){?>selected<?php }?>>25</option>
				<option value="50" <?php if ($_smarty_tpl->tpl_vars['numPerPage']->value==50){?>selected<?php }?>>50</option>
			</select>
			<span>共<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
" numPerPage="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"></div>

	</div>

</div><?php }} ?>