<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:54:52
         compiled from "./Home/Tpl/User/myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1800248497553dcf2c96d5f1-11107099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd650d82c7f0bd4925f315c14e384688db8ade955' => 
    array (
      0 => './Home/Tpl/User/myinfo.html',
      1 => 1430105698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800248497553dcf2c96d5f1-11107099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
    'filmtype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dcf2cabeae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dcf2cabeae')) {function content_553dcf2cabeae($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - User Profile</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 页头开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/uhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页头结束 -->
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">

				<!-- 左侧当前用户影评 -->
				<div class="prlist">
					<div class="prlist_title">&nbsp;<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
's profile
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['id']==$_SESSION['loginuser']['id']){?>
						<span id="changemyinfolink">
							<a href="__APP__/User/changemyinfo/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Edit my profile or password</a>
						</span>
					<?php }?>
					</div>
					
					<div class="myinfo">
						<table width="600" border="0" cellspacing="10">
							<tr>
								<th><span class="myinfotag">Photo:</span></th>
								<td>
									<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
"/>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['id']==$_SESSION['loginuser']['id']){?>
									<td><span id="changepiclink"><a href="__URL__/changepic/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Click to edit my photo </a></span></td>
								<?php }?>
							<tr>
							<tr>
								<th><span class="myinfotag">User ID:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
								<th><span class="myinfotag">User Account:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</td>
							</tr>
							
					<!--		<tr>
								<th><span class="myinfotag">用户积分:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['score'];?>
</td>
								<th><span class="myinfotag">用户级别:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['level'];?>
</td>
							</tr> -->
							
							<tr>
								<th><span class="myinfotag">User Name:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</td>
								<th><span class="myinfotag">User Email:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['email'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">User Gender:</span></th>
								<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>Male<?php }else{ ?>Female<?php }?></td>
								<th><span class="myinfotag">User Birthday:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['birthday'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">Register Time:</span></th>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>
								<th><span class="myinfotag">Last Time for Login</span></th>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['lastlog'],"%Y-%m-%d %H:%M");?>
</td>
							</tr>
								
							<tr>
								<th><span class="myinfotag">User Address:</span></th>
								<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['vo']->value['address'];?>
</td>
							</tr>

							<tr>
								<th><span class="myinfotag">Login Times:</span></th>
								<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['vo']->value['logtimes'];?>
</td>
							</tr>
						</table>
						
						<div class="recom_list">
							<div class="title">
								<a>Movie Genres you like</a>
								<?php if ($_GET['uid']==$_SESSION['loginuser']['id']){?>
									<span id="changmytype"><a href="__APP__/Umytype/mytype/uid/<?php echo $_GET['uid'];?>
">Edit genres you like</a></span>
								<?php }?>
							</div>
							<div>
								<?php  $_smarty_tpl->tpl_vars['filmtype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filmtype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['mytypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filmtype']->key => $_smarty_tpl->tpl_vars['filmtype']->value){
$_smarty_tpl->tpl_vars['filmtype']->_loop = true;
?>
									<span class="filmtype">
										<a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['filmtype']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['filmtype']->value['typename'];?>
</a>
									</span>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>