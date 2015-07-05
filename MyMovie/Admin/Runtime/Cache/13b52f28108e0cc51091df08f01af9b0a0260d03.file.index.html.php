<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:09:56
         compiled from "./Admin/Tpl\Acomment\index.html" */ ?>
<?php /*%%SmartyHeaderCode:89245416456d9e7b65-31536659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b52f28108e0cc51091df08f01af9b0a0260d03' => 
    array (
      0 => './Admin/Tpl\\Acomment\\index.html',
      1 => 1430085529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89245416456d9e7b65-31536659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416456dcb6da',
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
    'numPerPage' => 0,
    'totalCount' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416456dcb6da')) {function content_5416456dcb6da($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>search</b> &nbsp; keyword:<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> 
				</td>
				<td>&nbsp; status:
					<select name="status" >
						<option value="" >-select-</option>
						<option value="1" <?php if ($_REQUEST['status']==1){?>selected<?php }?>>normal</option>
						<option value="2" <?php if ($_REQUEST['status']==2){?>selected<?php }?>>report</option>
						<option value="3" <?php if ($_REQUEST['status']==3){?>selected<?php }?>>ban to post</option>
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
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listsreview" target="ajaxTodo" title="确定要删除吗?"><span>delete</span></a></li>
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="600" height="350" target="dialog"><span>change status</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="40" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="40">actor</th>
				<th width="40">poster</th>
				<!-- <th width="40">回复内容</th> -->
				<!-- <th width="80" orderField="unum" <?php if ($_REQUEST['_order']=='unum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>有用数</th> -->
				<th width="40" orderField="rtime" <?php if ($_REQUEST['_order']=='rtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>time</th>
				<th width="30" style="color:red;">report number</th>			
				<th width="40" orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>status</th>	
				<th width="40">action</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
				
				<!-- <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td> -->
				<!-- <td><?php echo $_smarty_tpl->tpl_vars['v']->value['unum'];?>
</td> -->
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['rtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['report'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="normal"){?>
				<td style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=="report"){?>
				<td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }else{ ?>
				<td style="color:#666;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }?>
				<td><a style="color:green;"href="__URL__/content/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="dialog">view</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="panelBar">
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