<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:09:47
         compiled from "./Admin/Tpl\Type\index.html" */ ?>
<?php /*%%SmartyHeaderCode:233755416456a903428-19976953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6af35262558e025103a78c4b2346fe9d25667b' => 
    array (
      0 => './Admin/Tpl\\Type\\index.html',
      1 => 1386652150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233755416456a903428-19976953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416456ab7ec8',
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
<?php if ($_valid && !is_callable('content_5416456ab7ec8')) {function content_5416456ab7ec8($_smarty_tpl) {?><form id="pagerForm" action="__URL__/index" method="post">
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
						<label>搜索节点：</label>
						<input type="text" name="keyword" value="<?php echo $_POST['keyword'];?>
"/>[关键字：类型名]
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
			<li><a class="add" href="__URL__/add" target="dialog" rel="user_msg" width="480" height="270" title="添加类型"><span>添加类型</span></a></li>
			<li class="line">line</li>

			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listtype" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>			
			<li class="line">line</li>	

			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="480" height="270" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>

			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>

			<!-- <li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li> -->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="table" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="116">
		<thead>
			<tr>
				<th width="60"  orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="120">所属类别</th>
				<th width="120"  orderField="typename" <?php if ($_REQUEST['_order']=='typename'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>类 型 名</th>
				<th width="120"  orderField="clicknum" <?php if ($_REQUEST['_order']=='clicknum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>点击次数</th>
				
				<!-- <th width="80" orderField="name" class="asc">客户号</th>
				<th width="100" orderField="num" class="desc">客户名称</th> -->
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
				<td>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['fid']==1){?>类型
					<?php }elseif($_smarty_tpl->tpl_vars['vo']->value['fid']==2){?>国家/地区
					<?php }else{ ?>年代
					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['typename'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['clicknum'];?>
</td>	
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
	
</div>







<?php }} ?>