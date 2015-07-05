<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:21:10
         compiled from "./Admin/Tpl/Movie/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1517411552553dd556d0a4b2-84135572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98634c633c55c7dd5ebe1db9f45ba17e13200bf9' => 
    array (
      0 => './Admin/Tpl/Movie/index.html',
      1 => 1430098760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1517411552553dd556d0a4b2-84135572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
    'list' => 0,
    'vo' => 0,
    'totalCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd556f06cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd556f06cb')) {function content_553dd556f06cb($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
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
						<label>search:</label>
						<input type="text" name="keyword" value="<?php echo $_REQUEST['keyword'];?>
" /> [keyword:movie title]
					</td>
					<td>
						<select class="combox" name="status">
							<option value="">--movie status--</option>
							<option value="0">new</option>
							<option value="1">display</option>
							<option value="2">slide</option>
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
			<li><a class="add" href="__URL__/add" target="navTab" rel="user_msg" title="add movie"><span>add movie</span></a></li>

			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/delete/id/{item_id}" target="ajaxTodo" title="really want to delete?"><span>delete</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}" target="navTab"><span>change</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/setmtype/id/{item_id}" target="dialog"><span>set category</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edittype/id/{item_id}" target="dialog"><span>change category</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/uploads/id/{item_id}" target="dialog"><span>upload image</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/editUploads/id/{item_id}" target="dialog"><span>change image</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/setActors/id/{item_id}" target="dialog"><span>set actor information</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/editactors/id/{item_id}" target="dialog"><span>change actor information</span></a></li>

			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/editstatus/id/{item_id}" target="dialog"><span>change status</span></a></li>

			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>fresh</span></a></li>

			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>

	<div id="w_list_print">
	<table class="list" width="100%" targetType="navTab" asc="asc" desc="desc" layoutH="116">
		<thead>
			<tr>
				<th  orderField="id" <?php if ($_REQUEST['_order']=='id'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>ID</th>
				<th>poster</th>
				<th  orderField="filmname" <?php if ($_REQUEST['_order']=='filmname'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>title</th>
				<th>alias</th>
				
				<th>director</th>
				<th>writer</th>
				<th  orderField="nation" <?php if ($_REQUEST['_order']=='nation'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>country</th>
				<th>language</th>
				
				<th  orderField="showtime" <?php if ($_REQUEST['_order']=='showtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>year</th>
				<th  orderField="addtime" <?php if ($_REQUEST['_order']=='addtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>add time</th>
				<th  orderField="minutes" <?php if ($_REQUEST['_order']=='minutes'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>runtime</th>
				<th>Intro</th>
				
				<th  orderField="status" <?php if ($_REQUEST['_order']=='status'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>status</th>
				<!--<th width="80" orderField="name" class="asc">客户号</th>
				<th width="100" orderField="num" class="desc">客户名称</th>-->
				<th>set actor information</th>
				<th>post images</th>
				<th>category</th>
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
					<img src="__ROOT__/__UPLOAD__/Movie/Cover/a_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['petname'];?>
</td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['director'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['editor'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['nation'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['language'];?>
</td>
				
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['showtime'],'%Y-%m-%d');?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['minutes'];?>
</td>
				<td><a style="color:blue" href="__URL__/content/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="dialog" width="600" height="480"  rel="listmovie" title="view Intro">
				view intro</a>
				</td>
				
				<td>
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==0){?>new
					<?php }elseif($_smarty_tpl->tpl_vars['vo']->value['status']==1){?>display
					<?php }elseif($_smarty_tpl->tpl_vars['vo']->value['status']==2){?>slide
					<?php }?>
				</td>
				<td>
					<a style="color:blue" target="dialog" rel="setActors" href="__URL__/showActors/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">see actor detail</a>		
				</td>
				<td>	
					<a style="color:blue" target="dialog" rel="showPhotos" href="__URL__/showPhotos/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">see image detail</a>			
				</td>
			<!--	<td>   
					<a style="color:blue" target="dialog" rel="showMType" href="__URL__/showType/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">查看分类信息</a>
				</td>  -->
				<!--<td><a href='__URL__/access/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'>配置权限</a></td>-->
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