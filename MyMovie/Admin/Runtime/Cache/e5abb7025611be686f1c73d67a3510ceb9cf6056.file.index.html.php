<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:36:08
         compiled from "./Admin/Tpl\Friendlink\index.html" */ ?>
<?php /*%%SmartyHeaderCode:219085416450a975722-32455586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5abb7025611be686f1c73d67a3510ceb9cf6056' => 
    array (
      0 => './Admin/Tpl\\Friendlink\\index.html',
      1 => 1386770588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219085416450a975722-32455586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416450ac0415',
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
<?php if ($_valid && !is_callable('content_5416450ac0415')) {function content_5416450ac0415($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						<label>搜索名称：</label>
						<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
"/>
					</td>
					<td>&nbsp; 状态：
						<select name="state" >
							<option value="" >-选择-</option>
							<option value="1" <?php if ($_REQUEST['state']==1){?>selected<?php }?>>新添加</option>
							<option value="2" <?php if ($_REQUEST['state']==2){?>selected<?php }?>>前台显示</option>
							<option value="3" <?php if ($_REQUEST['state']==3){?>selected<?php }?>>已下架</option>
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
			<li><a class="add" href="__URL__/add" target="dialog" rel="user_msg" title="添加幻灯片"><span>添加</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/del/id/{item_id}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}" target="dialog"><span>修改</span></a></li>

			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>

			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="list" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="90">
		<thead>
			<tr>
				<th width="40">ID</th>
				<th width="150">链接名称</th>
				<th width="150">链接地址</th>
				<th width="150">网站LOGO</th>
				<th width="150" orderField="dtime" <?php if ($_REQUEST['_order']=='dtime'){?>class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>添加时间</th>
				<th width="150">显示状态</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['linkname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
</td>
					<td>
						<img src="__ROOT__/Uploads/News/mypic/c_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
"/>
					</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['dtime'],"%Y-%m-%d");?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['state']==1){?><td>新添加</td><?php }elseif($_smarty_tpl->tpl_vars['vo']->value['state']==2){?><td>前台显示</td><?php }else{ ?><td>已下架</td><?php }?>
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

</div><?php }} ?>