<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:21:25
         compiled from "./Admin/Tpl/Actors/index.html" */ ?>
<?php /*%%SmartyHeaderCode:819806499553dd56593d8b5-85977984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdc906746955369d5a9a0ad700355ed5ff3d61e' => 
    array (
      0 => './Admin/Tpl/Actors/index.html',
      1 => 1430107934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819806499553dd56593d8b5-85977984',
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
  'unifunc' => 'content_553dd565ac048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd565ac048')) {function content_553dd565ac048($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
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
						<label>search actor:</label>
						<input type="text" name="keyword" alue="<?php echo $_POST['keyword'];?>
"/> [keyword:name]
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
			<li><a class="add" href="__URL__/add" target="dialog" rel="user_msg" title="add actor"><span>add actor</span></a></li>

			<li class="line">line</li>			
			<li><a class="delete" href="__URL__/delete/id/{item_id}/navTabId/listactor" target="ajaxTodo" title="wanna delete?"><span>delete</span></a></li>
			
			<li class="line">line</li>			
			<li><a class="edit" href="__URL__/edit/id/{item_id}"  width="480" height="360" target="dialog"><span>change</span></a></li>

			<li class="line">line</li>
			<li><a class="add" href="__URL__/addActorImgs/id/{item_id}" target="dialog" title="add actor picture" ><span>post picture</span></a></li>

			<li class="line">line</li>
			<li><a class="add" href="__URL__/editActorImgs/id/{item_id}" target="dialog" title="change picture" ><span>change picture</span></a></li>

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
				<th>actor picture</th>
				<th>Chinese name</th>
				<th>English name</th>
				<th>Gender</th>
				
				<th>Horoscope:</th>
				<th>Birthday</th>
				<th>Born Address</th>
				<th>Professtion:</th>

				<th>Intro</th>
				
				<th  orderField="addtime" <?php if ($_REQUEST['_order']=='addtime'){?> class="<?php echo $_REQUEST['_sort'];?>
"<?php }?>>time</th>

				<th>information</th>		
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
					<img src="__ROOT__/__UPLOAD__/Actor/Photo/s_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['ename'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>male<?php }else{ ?>female<?php }?></td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['constellation'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['birthday'],"%Y - %m - %d");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['bornaddress'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['professtion'];?>
</td>
				
				<td><a style="color:blue" href="__URL__/content/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="dialog" width="600" height="480"  rel="listmovie" title="view intro">
				view</a></td>

				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d / %H:%M:%S");?>
</td>
				
				<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['num']>0){?><span style="color:red">do not have image<?php echo $_smarty_tpl->tpl_vars['vo']->value['num'];?>
</span><?php }else{ ?><a style="color:blue" href="__URL__/showpics/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="dialog" title="view image">view images <?php echo $_smarty_tpl->tpl_vars['vo']->value['num'];?>
 </a><?php }?>	
				</td>
				<!--
				<td><a href='__URL__/access/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'>配置权限</a></td>
				
				-->
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