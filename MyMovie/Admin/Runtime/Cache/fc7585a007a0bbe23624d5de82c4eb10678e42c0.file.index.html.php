<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:19:47
         compiled from "./Admin/Tpl/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2125395746553dd50330f820-97196659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7585a007a0bbe23624d5de82c4eb10678e42c0' => 
    array (
      0 => './Admin/Tpl/Index/index.html',
      1 => 1430103766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125395746553dd50330f820-97196659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd50349ab7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd50349ab7')) {function content_553dd50349ab7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title> the admin page </title>

<link href="__PUBLIC__/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="__PUBLIC__/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="__PUBLIC__/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="__PUBLIC__/dwz/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
<!--自定义样式-->
<link href="__PUBLIC__/css/node.css" rel="stylesheet" type="text/css"/>
<!--[if IE]>
<link href="__PUBLIC__/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<script src="__PUBLIC__/dwz/js/speedup.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>

<script src="__PUBLIC__/dwz/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/uploadify/scripts/swfobject.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/uploadify/scripts/jquery.uploadify.v2.1.0.js" type="text/javascript"></script>


<script src="__PUBLIC__/dwz/js/dwz.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

<!-- uploadify -->
<!-- uploadify -->

<script type="text/javascript">
$(function(){
	DWZ.init("__PUBLIC__/dwz/dwz.frag.xml", {
		//loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
		//loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{ pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({ themeBase:"__PUBLIC__/dwz/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
			<!--	<a class="logo" href="#">logo</a>-->
				
				<ul class="nav">
					<li><a class="home" href="__ROOT__/index.php">Home</a></li>
					<li><a href="#" target="_blank">welcome：<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
					<li><a href="__APP__/Index/password" target="dialog">change password</a></li>
					<li><a href="__APP__/Index/logout">exit</a></li>
				</ul>
				
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">blue</div></li>
					<li theme="green"><div>green</div></li>
					<li theme="purple"><div>purple</div></li>
					<li theme="silver"><div>silver</div></li>
					<li theme="azure"><div>azure</div></li>
				</ul>
			</div>
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>menu</h2><div>shrink</div></div>
				<div class="accordion" fillSpace="sidebar">
				<!--
					<div class="accordionHeader">
						<h2><span>Folder</span>about user</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><span>users</span>
								<ul>
									<li><a href="__APP__/Auser/index" target="navTab" rel="listuser" title="用户信息" >user information</a></li>
								</ul>
							</li>
							<!--
							<li><span>角色管理</span>
								<ul>	
									<li><a href="__APP__/Role/index" target="navTab" rel="listrole" title="角色信息" >浏览角色信息</a></li>
								</ul>
							</li>	
							<li><span>节点管理</span>
								<ul>	
									<li><a href="__APP__/Node/index" target="navTab" rel="listnode" title="节点信息" >浏览节点信息</a></li>
									<li><a href="__APP__/Node/nodeList" target="navTab" rel="nodelist" title="添加节点" >添加节点信息</a></li>
								
								</ul>
							</li>	
							<!-- <li><span>节点信息</span>
								<ul>
									<li><a href="__APP__/Rbac/nodeList" target="navTab" rel="nodelist" title="节点信息" >节点列表</a></li>
								</ul>
							</li>	 
						</ul>
					</div>
					<!-- 用户权限管理End -->

					<div class="accordionHeader">
						<h2><span>Folder</span>about system</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><span>slide</span>
								<ul>
									<li><a href="__APP__/Ppt/index" target="navTab" rel="pptlist">slide information</a></li>
									<!--
									<li><a href="__APP__/Ppt/add" target="dialog" width="600" height="300">添加幻灯片信息</a></li>
									-->
								</ul>
							</li>
							<!--
							<li><span>每日台词</span>
								<ul>
									<li><a href="__APP__/Dialogue/index" target="navTab" rel="listdialogue" title="每日台词管理" >浏览台词信息</a></li>
									<li><a href="__APP__/Dialogue/add" target="dialog" width="830" height="350">添加台词信息</a></li>
								</ul>	
							</li>
							<li><span>友情链接</span>
								<ul>
									<li><a href="__APP__/Friendlink/index" target="navTab" rel="linklist">浏览友情链接信息</a></li>
									<li><a href="__APP__/Friendlink/add" target="dialog" width="600" height="300">添加友情链接信息</a></li>
								</ul>
							</li>
						-->
						</ul>
					</div>

					<!--  -->
					<!-- <div class="accordionHeader">
						<h2><span>Folder</span>每日台词管理</h2>
					</div>				
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="__APP__/Dialogue/index" target="navTab" rel="listdialogue" title="每日台词管理" >浏览台词信息</a></li>
							<li><a href="__APP__/Dialogue/add" target="dialog" width="830" height="350">添加台词信息</a></li>
						</ul>
					</div> 
					<div class="accordionHeader">
						<h2><span>Folder</span>友情链接信息管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="__APP__/Friendlink/index" target="navTab" rel="linklist">浏览友情链接信息</a></li>
							<li><a href="__APP__/Friendlink/add" target="dialog" width="600" height="300">添加友情链接信息</a></li>
						</ul>
					</div>
					<div class="accordionHeader">
						<h2><span>Folder</span>幻灯片信息管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="__APP__/Ppt/index" target="navTab" rel="pptlist">浏览幻灯片信息</a></li>
							<li><a href="__APP__/Ppt/add" target="dialog" width="600" height="300">添加幻灯片信息</a></li>
						</ul>
					</div>-->

					<div class="accordionHeader">
						<h2><span>Folder</span>about movie</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><span>movie</span>
								<ul>
									<li><a href="__APP__/Movie/index" target="navTab" rel="listmovie" title="movie information" >movie information</a></li>

									<li><a class="add" href="__APP__/Movie/add" target="navTab" rel="addmovie" title="add movie"><span>add movie</span></a></li>
								</ul>
							</li>
							<li><span>actor</span>
								<ul>
									<li><a href="__APP__/Actors/index" target="navTab" rel="listactor" title="actor information" >actor information</a></li>
									<li><a href="__APP__/Actors/add" target="navTab" rel="listactor" title="add actor" >add actor</a></li>
								</ul>
							</li>
							<!--
							<li><span>分类管理</span>
								<ul>	
									<li><a href="__APP__/Type/index" target="navTab" rel="listtype" title="浏览分类信息" >浏览分类信息</a></li>
								</ul>
							</li>
							<li><span>演员评论管理</span>
								<ul>	
									<li><a href="__APP__/Acomment/index" target="navTab" rel="Acomment" title="演员评论管理" >演员评论管理</a></li>
								</ul>
							</li>	
						-->
						</ul>
					</div>
					
					<!-- 电影院 -->
					<!-- <div class="accordionHeader">
						<h2><span>Folder</span>影院管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><span>影院管理</span>
								<ul>
									<li><a href="__APP__/Mhouse/index" target="navTab" rel="listhouse" title="浏览影片信息" >浏览影片信息</a></li>

									<li><a class="add" href="__APP__/Mhouse/add" target="navTab" rel="addhouse" title="添加影院"><span>添加影院信息</span></a></li>
								</ul>
							</li> -->

							<!--<li><span>演员管理</span>
								<ul>
									<li><a href="__APP__/Actors/index" target="navTab" rel="listactor" title="浏览演员信息" >浏览演员信息</a></li>
									<li><a href="__APP__/Actors/add" target="navTab" rel="listactor" title="添加演员信息" >添加演员信息</a></li>
								</ul>
							</li>
							<li><span>分类管理</span>
								<ul>	
									<li><a href="__APP__/Type/index" target="navTab" rel="listtype" title="浏览分类信息" >浏览分类信息</a></li>
								</ul>
							</li>	
						</ul>
					</div>-->

					<!-- 电影院管理 -->


					<!-- 预告片管理 -->
					<div class="accordionHeader">
						<h2><span>Folder</span>about trailer</h2>
					</div>				
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li>
									<li>
										<a href="__APP__/Prevue/index" target="navTab" rel="listprevue" title="trailer information" >trailer information</a>
									</li>	
									<li>
										<a href="__APP__/Prevue/add" target="dialog"  title="add trailer" width="600" height="400">add trailer</a>
									</li>
								</ul>
							
							</li>
						</ul>
					</div>	
					

					<!-- 影评管理 -->
					<div class="accordionHeader">
						<h2><span>Folder</span>about review</h2>
					</div>				
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li>
									<li>
										<a href="__APP__/Longreview/index" target="navTab" rel="listlreview" title="review information" >review information</a>
									</li>	
									<li>
										<a href="__APP__/Shortreview/index" target="navTab" rel="listsreview" title="short review" >short review</a>
									</li>
								</ul>
							
							</li>
						</ul>
					</div>	

					<div class="accordionHeader">
						<h2><span>Folder</span>about user</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="__APP__/User/index" target="navTab" rel="userlist" title="user information" >user information</a></li>
							<!--
							<li><a href="__APP__/Notice/index" target="navTab" rel="listnotice" title="公告信息" >管理公告信息</a></li>
							<li><a href="__APP__/Ulevel/index" target="navTab" rel="listlevel" title="用户级别划分" >用户级别划分</a></li>
						-->
						</ul>
					</div>
					
					<!--
					<div class="accordionHeader">
						<h2><span>Folder</span>新闻信息管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><span>电影新闻管理</span>
								<ul>
									<li><a href="__APP__/Mnews/index" target="navTab" rel="mnewslist">浏览电影新闻信息</a></li>
									<li><a href="__APP__/Mnews/add" target="navTab" width="600" height="300">添加电影新闻信息</a></li>
								<!-- <li><a href="__APP__/Role/add" target="dialog" width="600" height="300">添加角色信息</a></li> -->
								<!--
								</ul>
							</li>
							<li><span>人物新闻管理</span>
								<ul>
									<li><a href="__APP__/Pnews/index" target="navTab" rel="pnewslist">浏览人物新闻信息</a></li>
									<li><a href="__APP__/Pnews/add" target="navTab" width="600" height="300">添加人物新闻信息</a></li>
								<!-- <li><a href="__APP__/Role/add" target="dialog" width="600" height="300">添加角色信息</a></li> -->
								<!--
								</ul>
							</li>
							<li><span>新闻评论管理</span>
								<ul>
									<li><a href="__APP__/Comment/index1" target="navTab" rel="mcommentlist">浏览电影新闻评论</a></li>
									<li><a href="__APP__/Comment/index2" target="navTab" rel="pcommentlist">浏览人物新闻评论</a></li>
								<!-- <li><a href="__APP__/Role/add" target="dialog" width="600" height="300">添加角色信息</a></li> -->
								<!--
								</ul>
							</li>
						</ul>
					</div>
					
					-->
				
					
					
					
				</div>
			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">homepage</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">Home</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<p><b style="color:#48BFF9;font-Size:20px;">let's happy together!!!	</b>
								<a href="#" target="_blank"></a>
							</p>
						<!--	<p>今天是 <?php echo smarty_modifier_date_format(time(),'%Y 年 %m 月 %d 日');?>
</p>-->
						</div>
						
					<div class="pageFormContent" layoutH="80" style="margin-right:230px">


						<!-- 	<h3>PUBLIC:__PUBLIC__</h3>  
							<h3>APP:__APP__</h3>  
							<h3>URL:__URL__</h3>  
							<h3>URL:__UPLOAD__</h3>		 -->				
						<!--
						<div style="width:230px;position: absolute;top:60px;right:0" layoutH="80">
							<img src="001.jpg" width="200">
							
							<h2>事件消息</h2>
							<ul>
								<li >1.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >2.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >3.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >4.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >5.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
							</ul>
						</div>						
						-->						
					</div>	
				</div>
			</div>
		</div>
	</div>

<!--	<div id="footer">Copyright &copy; 2012 <a href="demo_page2.html" target="dialog">开发团队</a><!-- Tel：</div>-->
</body>
</html><?php }} ?>