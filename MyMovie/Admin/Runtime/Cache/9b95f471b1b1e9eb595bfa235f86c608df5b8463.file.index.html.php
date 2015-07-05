<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 11:08:20
         compiled from "./Admin/Tpl\Ppt\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19713541644fef3cfd6-30432988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b95f471b1b1e9eb595bfa235f86c608df5b8463' => 
    array (
      0 => './Admin/Tpl\\Ppt\\index.html',
      1 => 1430099332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19713541644fef3cfd6-30432988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644ff255d9',
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
<?php if ($_valid && !is_callable('content_541644ff255d9')) {function content_541644ff255d9($_smarty_tpl) {?><form id="pagerForm" action="__URL__/index" method="post">
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
						<label>search title:</label>
						<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> 
					</td>
					<td>&nbsp; status
						<select name="state" >
							<option value="" >-select-</option>
							<option value="1" <?php if ($_REQUEST['state']==1){?>selected<?php }?>>display</option>
							<option value="2" <?php if ($_REQUEST['state']==2){?>selected<?php }?>>hidden</option>
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
			
			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/del/id/{item_id}" target="ajaxTodo" title="wanna delete?"><span>delete</span></a></li>
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}" target="dialog"><span>change</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>

			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="list" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="90">
		<thead>
			<tr>
				<th width="40">ID</th>
				<th width="40">movie id</th>
				<th width="150">title</th>
				<th width="150">slide</th>
				<th width="150">status</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['mid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['picname']){?><td><img src="__ROOT__/Uploads/News/mypic/c_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
"/></td><?php }else{ ?><td><a href="__URL__/add/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="dialog">set image</a></td><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['state']==1){?><td>display</td><?php }else{ ?><td>hide<?php }?>
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