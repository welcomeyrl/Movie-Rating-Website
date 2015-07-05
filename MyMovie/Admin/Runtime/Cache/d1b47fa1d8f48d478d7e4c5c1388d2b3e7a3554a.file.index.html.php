<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:08:00
         compiled from "./Admin/Tpl/Prevue/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1084361698553e7b00298c19-91755996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b47fa1d8f48d478d7e4c5c1388d2b3e7a3554a' => 
    array (
      0 => './Admin/Tpl/Prevue/index.html',
      1 => 1430101874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1084361698553e7b00298c19-91755996',
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
  'unifunc' => 'content_553e7b00408a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7b00408a0')) {function content_553e7b00408a0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>search</b> &nbsp; keyword:<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> [title]
				</td>
				<td>&nbsp; status:
					<select name="status" >
						<option value="" >-select-</option>
						<option value="0" <?php if ($_REQUEST['status']=="0"){?>selected<?php }?>>new</option>
						<option value="1" <?php if ($_REQUEST['status']=="1"){?>selected<?php }?>>display</option>
						<option value="2" <?php if ($_REQUEST['status']=="2"){?>selected<?php }?>>hidden</option>
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
			<li><a class="add" href="__APP__/Prevue/add" target="dialog" width="600" height="400"  title="add"><span>add</span></a></li>
			<li class="line">line</li>
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="830" height="350" target="dialog"><span>change</span></a></li>	
			<li class="line">line</li>
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listprevue" target=	"ajaxTodo" title="wanna delete?"><span>delete</span></a></li>
			<li class="line">line</li>
			<li><a class="add" href="__URL__/addpic/id/{item_id}" target="dialog" width="830" height="450" rel="listprevue" title="set poster"><span>set poster</span></a></li>
			
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>
		</ul>
	</div>
	
	<div id="w_list_print">
	<table class="list" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="40" orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th width="100">movie</th>
				<th width="140">title</th>
				<th width="40">title of trailer</th>
				<th width="40">poster</th>
				<th width="30" orderField="clicknum" <?php if ($_REQUEST['_order']=='clicknum'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>number of click</th>
				<th width="40" orderField="addtime" <?php if ($_REQUEST['_order']=='addtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>add time</th>
				<th width="40">status</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['videoname'];?>
</td>
				<td><img src="__ROOT__/Uploads/Prevue/a_<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
" alt="" /></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['clicknum'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
				
				<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="add"){?>
				<td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=="display"){?>
				<td style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }else{ ?>
				<td style="color:#666;"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
				<?php }?>	
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
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