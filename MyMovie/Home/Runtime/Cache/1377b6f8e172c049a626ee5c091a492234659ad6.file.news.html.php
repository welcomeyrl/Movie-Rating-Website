<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:42:57
         compiled from "./Home/Tpl\News\news.html" */ ?>
<?php /*%%SmartyHeaderCode:889454164421efa8f3-15448470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1377b6f8e172c049a626ee5c091a492234659ad6' => 
    array (
      0 => './Home/Tpl\\News\\news.html',
      1 => 1387161510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889454164421efa8f3-15448470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mlist1' => 0,
    'mv1' => 0,
    'mlist2' => 0,
    'mv2' => 0,
    'mlist3' => 0,
    'mv3' => 0,
    'mlist4' => 0,
    'mv4' => 0,
    'mlist5' => 0,
    'mv5' => 0,
    'mlist6' => 0,
    'mv6' => 0,
    'plist2' => 0,
    'pv2' => 0,
    'plist3' => 0,
    'pv3' => 0,
    'plist4' => 0,
    'pv4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644222f789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644222f789')) {function content_541644222f789($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/news.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 个人中心菜单开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		<!-- 主体部分开始	-->
		<div id="main">
			<!--主体头-->
			<div id="main_top">
				<div id="main_top_1">
					<span id="x1">新闻</span>&nbsp;&nbsp;&nbsp;<span id="x2">news</span>
				</div>
			</div>
			<!--主体左侧-->
			<div id="main_left">
				<div id="ml_top">
					<a href="__APP__/Newslist/mnewslist1"><span>近期焦点</span></a>
				</div>
				<?php  $_smarty_tpl->tpl_vars['mv1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv1']->key => $_smarty_tpl->tpl_vars['mv1']->value){
$_smarty_tpl->tpl_vars['mv1']->_loop = true;
?>
				<div class="mlc">
					<div class="mlc1">
						<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv1']->value['title'];?>
</a>
					</div>
					<div class="mlc2">
						<?php echo $_smarty_tpl->tpl_vars['mv1']->value['title2'];?>

					</div>
				</div>
				<?php } ?>
				<div class="mlc3">
					<a href="__APP__/Newslist/mnewslist1">更多>></a>
				</div>
			</div>
			<!--主体中间-->
			<div id="main_center">
				<?php  $_smarty_tpl->tpl_vars['mv2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv2']->key => $_smarty_tpl->tpl_vars['mv2']->value){
$_smarty_tpl->tpl_vars['mv2']->_loop = true;
?>
				<div class="mc">
					<div class="mc1">
						<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv2']->value['title2'];?>
</a>
					</div>
					<div class="mc2">
						<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv2']->value['id'];?>
"><img src="__ROOT__/Uploads/News/article/d_<?php echo $_smarty_tpl->tpl_vars['mv2']->value['picname'];?>
"/></a>
					</div>
					<div class="mc3">
						<?php echo $_smarty_tpl->tpl_vars['mv2']->value['summary'];?>
<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv2']->value['id'];?>
">【阅读全文】</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<!--主体右侧-->
			<div id="main_right">
				<div class="mr_top">
					<a href="__APP__/Newslist/mnewslist2"><span>试听抢先看</span></a>
				</div>
				<?php  $_smarty_tpl->tpl_vars['mv3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv3']->key => $_smarty_tpl->tpl_vars['mv3']->value){
$_smarty_tpl->tpl_vars['mv3']->_loop = true;
?>
				<div class="mrc">
					<div class="mrc1">
						<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv3']->value['id'];?>
"><img style="width:180px;height:100px;" src="__ROOT__/Uploads/News/article/c_<?php echo $_smarty_tpl->tpl_vars['mv3']->value['pica'];?>
"/></a>
					</div>
					<div class="mrc2">
					<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv3']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv3']->value['title'];?>
</a>
					</div>
					<div class="mrc3">
					<?php echo $_smarty_tpl->tpl_vars['mv3']->value['title2'];?>

					</div>
				</div>
				<?php } ?>
				<div class="mlc3">
					<a href="__APP__/Newslist/mnewslist2">更多>></a>
				</div>
			</div>
				<div class="cb_top">
					<a href="__APP__/Newslist/mnews"><span class="c1">电影新闻&nbsp;</span><span class="c2">MOVIE NEWS</span></a>
				</div>
				<div id="mc_left">
					<div class="mc_left_left">
						<?php  $_smarty_tpl->tpl_vars['mv4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv4']->key => $_smarty_tpl->tpl_vars['mv4']->value){
$_smarty_tpl->tpl_vars['mv4']->_loop = true;
?>
						<div class="mc_left_top">
							<div class="mcl_top1">
								<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv4']->value['id'];?>
"><img style="width:300px;height:200px;" src="__ROOT__/Uploads/News/article/a_<?php echo $_smarty_tpl->tpl_vars['mv4']->value['pica'];?>
"></a>
							</div>
							<div class="mcl_top2">
								<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv4']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv4']->value['title2'];?>
</a>
							</div>
							<div class="mcl_top3">
								<?php echo $_smarty_tpl->tpl_vars['mv4']->value['summary'];?>

							</div>
						</div>
						<?php } ?>
					</div>
					<div id="mc_left_right">
						<?php  $_smarty_tpl->tpl_vars['mv5'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv5']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv5']->key => $_smarty_tpl->tpl_vars['mv5']->value){
$_smarty_tpl->tpl_vars['mv5']->_loop = true;
?>
						<div class="mc_center">
							<div class="mc_center1">
								<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv5']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv5']->value['title'];?>
</a>
							</div>
							<div class="mc_center2">
								<?php echo $_smarty_tpl->tpl_vars['mv5']->value['summary'];?>

							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<div id="mc_right">
					<div class="mr_top">
						<a href="__APP__/Newslist/mnewslist3"><span>专题&策划</span></a>
					</div>
					<?php  $_smarty_tpl->tpl_vars['mv6'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv6']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist6']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv6']->key => $_smarty_tpl->tpl_vars['mv6']->value){
$_smarty_tpl->tpl_vars['mv6']->_loop = true;
?>
					<div class="mcr_bottom">
						<div class="mcb1">
							<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv6']->value['id'];?>
"><img style="width:250px;height:80px;" src="__ROOT__/Uploads/News/article/d_<?php echo $_smarty_tpl->tpl_vars['mv6']->value['picname'];?>
"></a>
						</div>
						<div class="mcb2">
							<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv6']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mv6']->value['title'];?>
</a>
						</div>
						<div class="mcb3">
							<?php echo $_smarty_tpl->tpl_vars['mv6']->value['summary'];?>

						</div>
					</div>
					<?php } ?>
					<div class="mlc3">
						<a href="__APP__/Newslist/mnewslist3">更多>></a>
					</div>
				</div>
			<div id="center_bottom">
				<div class="cb_top">
					<a href="__APP__/Newslist/pnews"><span class="c1">人物新闻&nbsp;</span><span class="c2">CELEBRITY NEWS</span></a>
				</div>
				<div id="cb_left">
					<div class="mc_left_left">
						<?php  $_smarty_tpl->tpl_vars['pv2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plist2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv2']->key => $_smarty_tpl->tpl_vars['pv2']->value){
$_smarty_tpl->tpl_vars['pv2']->_loop = true;
?>
						<div class="mc_left_top">
							<div class="mcl_top1">
								<a href="__APP__/Newsdetail/pnewsdetail/id/<?php echo $_smarty_tpl->tpl_vars['pv2']->value['id'];?>
"><img style="width:300px;height:200px;" src="__ROOT__/Uploads/News/article/a_<?php echo $_smarty_tpl->tpl_vars['pv2']->value['pica'];?>
"></a>
							</div>
							<div class="mcl_top2">
								<a href="__APP__/Newsdetail/pnewsdetail/id/<?php echo $_smarty_tpl->tpl_vars['pv2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pv2']->value['title2'];?>
</a>
							</div>
							<div class="mcl_top3">
								<?php echo $_smarty_tpl->tpl_vars['pv2']->value['summary'];?>

							</div>
						</div>
						<?php } ?>
					</div>
				
					<div id="bb_right">
						<?php  $_smarty_tpl->tpl_vars['pv3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plist3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv3']->key => $_smarty_tpl->tpl_vars['pv3']->value){
$_smarty_tpl->tpl_vars['pv3']->_loop = true;
?>
						<div class="mc_center">
							<div class="mc_center1">
								<a href="__APP__/Newsdetail/pnewsdetail/id/<?php echo $_smarty_tpl->tpl_vars['pv3']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pv3']->value['title'];?>
</a>
							</div>
							<div class="mc_center2">
								<?php echo $_smarty_tpl->tpl_vars['pv3']->value['summary'];?>

							</div>
						</div>
						<?php } ?>
						<!--
						<div class="mlc3">
							更多>>
						</div>
						-->
					</div>
				</div>
				<div id="cb_right">
					<div class="mr_top">
						<a href="__APP__/Newslist/pnewslist4"><span>人物专访</span></a>
					</div>
					<?php  $_smarty_tpl->tpl_vars['pv4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plist4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv4']->key => $_smarty_tpl->tpl_vars['pv4']->value){
$_smarty_tpl->tpl_vars['pv4']->_loop = true;
?>
					<div class="cbr">
						
						<div class="cbr2">
							<a href="__APP__/Newsdetail/pnewsdetail/id/<?php echo $_smarty_tpl->tpl_vars['pv4']->value['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['pv4']->value['title2'];?>
</span></a>
						</div>
						<div class="cbrb">
							<div class="cbr3">
								<?php echo $_smarty_tpl->tpl_vars['pv4']->value['summary'];?>

							</div>
							<div class="cbr4">
								<a href="__APP__/Newsdetail/pnewsdetail/id/<?php echo $_smarty_tpl->tpl_vars['pv4']->value['id'];?>
"><img src="__ROOT__/Uploads/News/article/d_<?php echo $_smarty_tpl->tpl_vars['pv4']->value['picname'];?>
"/></a>
							</div>
						</div>
						
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>