<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:22:05
         compiled from "./Admin/Tpl/Longreview/index.html" */ ?>
<?php /*%%SmartyHeaderCode:76590211553dd58d10b275-29020496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fc80da1057fea532ecbd9e3e8a9a272511d472' => 
    array (
      0 => './Admin/Tpl/Longreview/index.html',
      1 => 1430108550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76590211553dd58d10b275-29020496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
    'numPerPage' => 0,
    'totalCount' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd58d2b52b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd58d2b52b')) {function content_553dd58d2b52b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
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
						<option value="3" <?php if ($_REQUEST['status']==3){?>selected<?php }?>>forbidden</option>
					</select>
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
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listlreview" target="ajaxTodo" title="wanna delete?"><span>delete</span></a></li>
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="830" height="350" target="dialog"><span>change status</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="30" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="80">title</th>
				<!-- <th width="40">评论内容</th> -->
				<th width="50">movie</th>
				<th width="20">author</th>
				<th width="20" orderField="vnum" <?php if ($_REQUEST['_order']=='vnum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>number of view</th>
				<th width="20" orderField="rnum" <?php if ($_REQUEST['_order']=='rnum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>number of reply</th>
				<th width="20" style="color:red;">number of report</th>
				<!-- <th width="80" orderField="unum" <?php if ($_REQUEST['_order']=='unum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>有用数</th> -->
				<th width="40" orderField="ptime" <?php if ($_REQUEST['_order']=='ptime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>time</th>					
				<th width="30" orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>  >status</th>
			<!--	<th width="30"  >操作1</th>
				<th width="40"  >操作2</th>-->
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
				
				<td ><a href="__URL__/content/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="dialog" style="color:green;" width="700" height="500" >view content</a></td>	
				<td ><a href="__URL__/listreply/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/navTabId/listreply" target="dialog" style="color:blue;" width="700" height="500">list of reply</a></td>
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