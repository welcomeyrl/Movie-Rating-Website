<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:58:24
         compiled from "./Home/Tpl/Umytype/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1805980403553dd000b1c882-52955407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cc0f933bed95871de78fc43cdf00a735c7064a' => 
    array (
      0 => './Home/Tpl/Umytype/index.html',
      1 => 1430101670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805980403553dd000b1c882-52955407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
    'typelist' => 0,
    'type' => 0,
    'film' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd000be442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd000be442')) {function content_553dd000be442($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
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
					<div class="prlist_title">
						<?php echo $_smarty_tpl->tpl_vars['listtitle']->value;?>

						<span id="changemyinfolink">
						<a href="__APP__/Umytype/mytype/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Add genres you like</a>
						</span>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['typelist']->value==null){?>
							<div class="recom_list">
								<div class="title"><a href="">You have not chosen the genres that you liked</a></div>
								<div class="recontent">
									<div class="longload">
										<div class="nomovie">
											<a href="__APP__/Umytype/mytype/uid/<?php echo $_SESSION['loginuser']['id'];?>
"><img src="__ROOT__/Public/front/images/plane.jpg"/></a><br/>
											To select the genres what you like
										</div>
									</div>
									<div class="nav"></div>
								</div>
							</div>
					
					<?php }else{ ?>
						<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
							<div class="recom_list">
								<div class="title"><a href=""><?php echo $_smarty_tpl->tpl_vars['type']->value['typename'];?>
</a></div>
								<div class="recontent">
									<div class="longload">
										<?php if ($_smarty_tpl->tpl_vars['type']->value['films']==null){?>
											<div class="nomovie">
												Sorry, the genres are too few. Checking...
											</div>
										<?php }else{ ?>
											<?php  $_smarty_tpl->tpl_vars['film'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['film']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value['films']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['film']->key => $_smarty_tpl->tpl_vars['film']->value){
$_smarty_tpl->tpl_vars['film']->_loop = true;
?>
												<div class="recommovie">
													<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['film']->value['fid'];?>
">
														<img src="__ROOT__/Uploads/Movie/Cover/c_<?php echo $_smarty_tpl->tpl_vars['film']->value['picname'];?>
"><br>
														<span><?php echo $_smarty_tpl->tpl_vars['film']->value['filmname'];?>
</span>
													</a>
												</div>
											<?php } ?>
										<?php }?>
									</div>
									<div class="nav"></div>
								</div>
							</div>
						<?php } ?>
					<?php }?>
					<div class="nav"></div>
				</div>
				
			</div>
				
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		
	</body>
</html><?php }} ?>