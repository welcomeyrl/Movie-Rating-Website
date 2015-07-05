<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:45:23
         compiled from "./Home/Tpl\User\myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:23779541644b3afa520-61162657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9d2f7e3e10e05df0db973a0b6208e03058f468' => 
    array (
      0 => './Home/Tpl\\User\\myinfo.html',
      1 => 1387430212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23779541644b3afa520-61162657',
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
  'unifunc' => 'content_541644b3d45eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644b3d45eb')) {function content_541644b3d45eb($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - 用户资料</title>
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
的资料
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['id']==$_SESSION['loginuser']['id']){?>
						<span id="changemyinfolink">
							<a href="__APP__/User/changemyinfo/uid/<?php echo $_SESSION['loginuser']['id'];?>
">修改我的资料或密码</a>
						</span>
					<?php }?>
					</div>
					
					<div class="myinfo">
						<table width="600" border="0" cellspacing="10">
							<tr>
								<th><span class="myinfotag">头像:</span></th>
								<td>
									<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
"/>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['id']==$_SESSION['loginuser']['id']){?>
									<td><span id="changepiclink"><a href="__URL__/changepic/uid/<?php echo $_SESSION['loginuser']['id'];?>
">修改头像点这里</a></span></td>
								<?php }?>
							<tr>
							<tr>
								<th><span class="myinfotag">用户ID:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
								<th><span class="myinfotag">用户账号:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">用户积分:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['score'];?>
</td>
								<th><span class="myinfotag">用户级别:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['level'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">用户姓名:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</td>
								<th><span class="myinfotag">用户Email:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['email'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">用户性别:</span></th>
								<td><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>男<?php }else{ ?>女<?php }?></td>
								<th><span class="myinfotag">用户生日:</span></th>
								<td><?php echo $_smarty_tpl->tpl_vars['vo']->value['birthday'];?>
</td>
							</tr>
							
							<tr>
								<th><span class="myinfotag">注册时间:</span></th>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>
								<th><span class="myinfotag">最后一次登陆:</span></th>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['lastlog'],"%Y-%m-%d %H:%M");?>
</td>
							</tr>
								
							<tr>
								<th><span class="myinfotag">用户地址:</span></th>
								<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['vo']->value['address'];?>
</td>
							</tr>

							<tr>
								<th><span class="myinfotag">登陆次数:</span></th>
								<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['vo']->value['logtimes'];?>
</td>
							</tr>
						</table>
						
						<div class="recom_list">
							<div class="title">
								<a>喜欢的电影类型</a>
								<?php if ($_GET['uid']==$_SESSION['loginuser']['id']){?>
									<span id="changmytype"><a href="__APP__/Umytype/mytype/uid/<?php echo $_GET['uid'];?>
">修改喜欢的电影类型</a></span>
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