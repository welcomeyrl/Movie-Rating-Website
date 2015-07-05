<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 03:35:55
         compiled from "./Admin/Tpl\Dialogue\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1834254164503d3e0f1-99402857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7eb814d4804cf048c1c35b8ad2a72367090ea95' => 
    array (
      0 => './Admin/Tpl\\Dialogue\\index.html',
      1 => 1387401126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834254164503d3e0f1-99402857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416450413a1c',
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
<?php if ($_valid && !is_callable('content_5416450413a1c')) {function content_5416450413a1c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> [ID,台词,影片]
				</td>
				<td>&nbsp; 状态：
					<select name="status" >
						<option value="" >-选择-</option>
						<option value="0" <?php if ($_REQUEST['status']=="0"){?>selected<?php }?>>新添加</option>
						<option value="1" <?php if ($_REQUEST['status']=="1"){?>selected<?php }?>>显示</option>
						<option value="2" <?php if ($_REQUEST['status']=="2"){?>selected<?php }?>>不显示</option>
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
			<li><a class="add" href="__URL__/add" target="dialog" width="830" height="350" rel="user_msg" title="添加用户信息"><span>添加</span></a></li>
			<li class="line">line</li>
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listdialogue" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li class="line">line</li>
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="830" height="350" target="dialog"><span>修改信息</span></a></li>
			<li class="line">line</li>
			<li><a class="edit" href="__URL__/editstatus/id/{item_id}"  width="830" height="350" target="dialog"><span>修改状态</span></a></li>
		
	<!-- 		<li><a class="edit" href="__URL__/password/id/{item_id}/navTabId/listuser"  width="400" height="220" target="dialog"><span>重设密码</span></a></li> -->
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
				<th width="100">英文台词内容</th>
				<th width="100">中文台词内容</th>
				<th width="80">来源影片</th>
				<th width="20" orderField="addtime" <?php if ($_REQUEST['_order']=='addtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>添加时间</th>
				<th width="20">状态</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['en_dialogue'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['cn_dialogue'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['source'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
				
				<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="1"){?>
				<td style="color:blue;">显示</td>
				<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=="0"){?>
				<td style="color:red;">新添加</td>
				<?php }else{ ?>
				<td style="color:#666;">不显示</td>
				<?php }?>					
				
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