<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:58:21
         compiled from "./Home/Tpl/Friend/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2130508033553dcffda96bf3-43222233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67694c270a0264b4f1bd5f1f421a30bc4ad06cc6' => 
    array (
      0 => './Home/Tpl/Friend/index.html',
      1 => 1387468940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2130508033553dcffda96bf3-43222233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
    'iattlistnum' => 0,
    'attmetnum' => 0,
    'friendnum' => 0,
    'friendlist' => 0,
    'vo' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dcffdb717e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dcffdb717e')) {function content_553dcffdb717e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
					<div class="prlist_title"><?php echo $_smarty_tpl->tpl_vars['listtitle']->value;?>

						<div class="guanzhuchoose">
							<a href="__APP__/Friend/attlist/uid/<?php echo $_GET['uid'];?>
">我关注(<?php echo $_smarty_tpl->tpl_vars['iattlistnum']->value;?>
)</a>
							<a href="__APP__/Friend/attlist/type/attme/uid/<?php echo $_GET['uid'];?>
">关注我(<?php echo $_smarty_tpl->tpl_vars['attmetnum']->value;?>
)</a>
							<a href="__APP__/Friend/attlist/type/friend/uid/<?php echo $_GET['uid'];?>
">彼此关注(<?php echo $_smarty_tpl->tpl_vars['friendnum']->value;?>
)</a>
						</div>
					
					</div>

					
					<div class="nav"></div>
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="review_list">
						<div class="rl">
							<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="_blank">
								<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
" width="90"/>
							</a> 
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="_blank">
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 
								</a>
								
								<span class="hufen"><?php if ($_smarty_tpl->tpl_vars['vo']->value['hufen']=="true"){?>已互粉<?php }else{ ?>未互粉<?php }?></span>
							</div>
							<div class="acthor">
								 最后登陆时间: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['lastlog'],'%Y-%m-%d %H:%M');?>

							</div>
							<div class="content">
								<span class="titlestyle">性别:</span><span class="contentstyle"><?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>小正太<?php }else{ ?>小萝莉<?php }?></span><br/>
								<span class="titlestyle">级别:</span><span class="contentstyle"><?php echo $_smarty_tpl->tpl_vars['vo']->value['levelname'];?>
</span><span class="titlestyle">积分:</span><span class="contentstyle"><?php echo $_smarty_tpl->tpl_vars['vo']->value['score'];?>
</span><br/>
								<span class="titlestyle">最新心情短语：</span>
								<div class="fripmood"><?php if ($_smarty_tpl->tpl_vars['vo']->value['mypmood'][0]['content']==null){?>这家伙很懒，什么话都没有留下<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vo']->value['mypmood'][0]['content'];?>
<?php }?></div>
							</div>
						</div>
					</div>
					<div class="nav"></div>
					<?php } ?>
					<div style="float:right; margin-right:60px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
				</div>
			</div>
	
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		
	</body>
</html><?php }} ?>