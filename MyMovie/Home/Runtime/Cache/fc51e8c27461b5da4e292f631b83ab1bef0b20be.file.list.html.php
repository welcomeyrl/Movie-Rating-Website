<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:45:21
         compiled from "./Home/Tpl\Diary\list.html" */ ?>
<?php /*%%SmartyHeaderCode:18292541644b1326af6-44193115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc51e8c27461b5da4e292f631b83ab1bef0b20be' => 
    array (
      0 => './Home/Tpl\\Diary\\list.html',
      1 => 1387354326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18292541644b1326af6-44193115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
    'list' => 0,
    'vo' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644b14c3d0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644b14c3d0')) {function content_541644b14c3d0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script src="__PUBLIC__/dwz/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>	
		<script>
			$(function(){
				$("#text").xheditor({
					skin:'default',tools:'simple',
					upImgUrl:'__APP__/Diary/doupload',
					upImgExt:'jpg,jpeg,gif,png',
					html5Upload:false,
					width:600,
					height:200,
				});
			});
		</script>
		
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

					<?php if ($_GET['uid']==$_SESSION['loginuser']['id']){?>
						<button class="btn-submit">发布日志</button>
					<?php }?>
					</div>
					
					<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="review_list">
						<div class="rl">
							<img src="__PUBLIC__/front/images/diary.jpg"/>
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/Diary/mydiary/uid/<?php echo $_GET['uid'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
 
								</a> 
							</div>
							<div class="acthor">
								 <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
感慨于: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>

							</div>
							<div class="content">
								<?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>

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

			<div  id="alert_review_bg"></div>
			<div id="words_edit">
				<img src="__PUBLIC__/front/images/close.jpg" alt="关闭" />
				<div class="atitle">
					感慨一下最近的心情吧......
				</div>
				<div class="acon">
				<form action="__APP__/Diary/insert" method="post">
					日志标题:<input type="text" name="title" class="winput"/>
					<textarea name="content" id="text" style="resize:none;" cols="70" rows="10" ></textarea>
	
					<input type="submit" value="发表日志" class="wsub"/>
				</form>
				</div>		
			</div>

			<!-- 发影评弹框页js -->
		<script type="text/javascript">
		$(function(){
			//点击弹出div层
			$(".btn-submit").click(function(){
				$("#alert_review_bg").css({ display:"block"});
				$("#words_edit").css({ display:"block",top:$(window).scrollTop()+100+"px"});
				
			});
			
			//点击关闭隐藏div层
			$("#words_edit img").click(function(){	
				$("#alert_review_bg").css({ display:"none"});
				$("#words_edit").css({ display:"none"});
			});
			
			//滚动窗滚动跟随滚动
			$(window).scroll(function(){
				$("#alert_review_bg").css({ top:$(window).scrollTop()+"px"});
				$("#words_edit").css({ top:$(window).scrollTop()+100+"px"});
			});
			
		});
		</script>
	</body>
</html><?php }} ?>