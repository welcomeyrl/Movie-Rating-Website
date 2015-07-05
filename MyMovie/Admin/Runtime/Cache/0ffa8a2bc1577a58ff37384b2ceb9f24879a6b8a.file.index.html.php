<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:15:45
         compiled from "./Admin/Tpl\Longreview\index.html" */ ?>
<?php /*%%SmartyHeaderCode:143865416457a575e26-03685460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ffa8a2bc1577a58ff37384b2ceb9f24879a6b8a' => 
    array (
      0 => './Admin/Tpl\\Longreview\\index.html',
      1 => 1387462038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143865416457a575e26-03685460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416457a8e1be',
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
<?php if ($_valid && !is_callable('content_5416457a8e1be')) {function content_5416457a8e1be($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pageHeader">
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
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listlreview" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="830" height="350" target="dialog"><span>修改状态</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="30" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="80">标题</th>
				<!-- <th width="40">评论内容</th> -->
				<th width="50">影片</th>
				<th width="20">作者</th>
				<th width="20" orderField="vnum" <?php if ($_REQUEST['_order']=='vnum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>浏览数</th>
				<th width="20" orderField="rnum" <?php if ($_REQUEST['_order']=='rnum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>回复数</th>
				<th width="20" style="color:red;">举报数</th>
				<!-- <th width="80" orderField="unum" <?php if ($_REQUEST['_order']=='unum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>有用数</th> -->
				<th width="40" orderField="ptime" <?php if ($_REQUEST['_order']=='ptime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>评论时间</th>					
				<th width="30" orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>  >评论状态</th>
				<th width="30"  >操作1</th>
				<th width="40"  >操作2</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				<!-- <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td> -->
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['filmname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['vnum'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['rnum'];?>
</td>
				
				<?php if (empty($_smarty_tpl->tpl_vars['v']->value['report'])){?>
				<td style="color:#666;">0</td>
				<?php }else{ ?>
				<td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['report'];?>
</td>
				<?php }?>
			
				<!-- <td><?php echo $_smarty_tpl->tpl_vars['v']->value['unum'];?>
</td> -->
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ptime'],"%Y-%m-%d   %H:%M:%S");?>
</td>
				
				<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="正常"){?>
				<td style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=="举报"){?>
				<td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }else{ ?>
				<td style="color:#666;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }?>	
				
				<td ><a href="__URL__/content/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="dialog" style="color:green;" width="700" height="500" >查看内容</a></td>	
				<td ><a href="__URL__/listreply/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/navTabId/listreply" target="dialog" style="color:blue;" width="700" height="500">查看回复列表</a></td>
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