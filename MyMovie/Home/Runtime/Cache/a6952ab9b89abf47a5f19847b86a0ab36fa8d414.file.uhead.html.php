<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:47:24
         compiled from "./Home/Tpl/Public/uhead.html" */ ?>
<?php /*%%SmartyHeaderCode:941556696553d709a08c7b7-73049276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6952ab9b89abf47a5f19847b86a0ab36fa8d414' => 
    array (
      0 => './Home/Tpl/Public/uhead.html',
      1 => 1430098210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941556696553d709a08c7b7-73049276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d709a196cb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d709a196cb')) {function content_553d709a196cb($_smarty_tpl) {?><script type="text/javascript">
		//左侧公共个人中心特效
		$(function(){
			$(window).scroll(function(){
				//获取个人中心的top位置
				var ptop=$("#person_menu").css("top");
				//改变头的位置和透明度
				$("#header .h_top").css({ position:"relative",top:$(window).scrollTop()+"px"});
				if($(window).scrollTop()>1){
					$("#header .h_top").css({ opacity:"0.7",filter:"Alpha(opacity=70)"});
				}else{
					$("#header .h_top").css({ opacity:"1",filter:"Alpha(opacity=100)"});
				}
				
				//动态改变个人中心的位置
				if($(window).scrollTop()>100){
					$("#person_menu").css({ top:$(window).scrollTop()+60+"px"});
				}else{
					$("#person_menu").css({ top:ptop});
				}
			})	
		});

	</script>
	
	<script type="text/javascript" src="__PUBLIC__/front/js/totop.js"></script>
	<!-- <script type="text/javascript" src="__PUBLIC__/front/js/jquery.js"></script> -->
	<script type="text/javascript" src="__PUBLIC__/front/js/thickbox_plus.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/thickbox.css"/>
	
	<!-- head页头部分开始 -->
		<div id="header">
			<div class="h_top">
				<div class="con">
					<ul class="left">
						<li><a href="__APP__/Index/index" class="title">My Movie</a></li>
						<!-- <li><a href="">群组</a></li> -->
					</ul>
					<ul class="right">
						<?php if (empty($_SESSION['loginuser'])){?>
						<!--<li class="disuser"><a href="__APP__/Login/index" >登录</a></li>-->
						<li class="disuser"><a href="__APP__/Login/ShowLogin.html?height=245;width=600" class="thickbox"  title="Login">Login</a></li>
						<li><a href="__APP__/Reqister/reqister">Sign up</a></li>
						<?php }else{ ?>
					
						<li class="disuser"><a href="__APP__/User/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
"  style="color:#fff;"><?php echo $_SESSION['loginuser']['username'];?>
</a></li>
						<li><a href="__APP__/Login/loginout">Logout</a></li>
						<?php }?>
					</ul>
				</div>
			</div>
			<!-- 搜索 logo -->
			<div class="h_center">
				<div class="con">
					<div class="logo">
						<a href="__APP__/Index/index"><span>My Movie</span></a>
						<!-- <img src="__PUBLIC__/front/images/logo.jpg" alt="" /> -->
					</div>
					<!-- 搜索 -->
					<div class="search">
						<form action="" method="get">
							<input type="text" class="inp" placeholder="movies, trailers, genres"/>
							<input type="submit" class="sub" value=""/>
						</form>
					</div>
					<div class="logoimg">
						<img src="__PUBLIC__/front/images/logo.jpg" alt="" />
					</div>
				</div> 
			</div>
			<!-- menu菜单 -->
			<div class="h_down">
				<div class="menu">
					<ul>
						<li><a href="__APP__/User/index/uid/<?php echo $_GET['uid'];?>
">Personal Center</a></li>
						<li><a href="__APP__/User/mylongreview/uid/<?php echo $_GET['uid'];?>
">Reviews</a></li>
						<li><a href="__APP__/Pmood/index/uid/<?php echo $_GET['uid'];?>
">Moods</a></li>
						<li><a href="__APP__/Diary/diarylist/uid/<?php echo $_GET['uid'];?>
">Blogs</a></li>
						<li><a href="__APP__/Uphotoalbum/index/uid/<?php echo $_GET['uid'];?>
">Albums</a></li>
						<li><a href="__APP__/Uhistory/index/uid/<?php echo $_GET['uid'];?>
">Histories</a></li>
						<li><a href="__APP__/Umessage/index/uid/<?php echo $_GET['uid'];?>
">Messages</a></li>
						<li><a href="__APP__/User/myinfo/uid/<?php echo $_GET['uid'];?>
">Personal Profiles</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- header页头部分结束 -->
		
		<div class="nav"></div>
		
		<!-- 个人中心菜单开始 -->
		<script type="text/javascript">
		//个人中心滑动特效
		$(function(){
			$("#person_menu ul li").each(function(){
				if(this.className.indexOf("current_page")==-1){
					var color;
					$(this).css({ left:"-90px",opacity:"0.6"});
					$(this).hover(function(){
						$(this).animate({ left:"0px",opacity:"1"},"normal");
					},function(){
						$(this).animate({ left:"-90px",opacity:"0.6"},"normal");
					});
				}
			});
		
	
		});
		</script>
		
		<?php if ($_SESSION['loginuser']!=null){?>
		<div id="person_menu">
			<ul>
				<li class="nav1"><a href="__APP__/Index/index">Home Page</a></li>
				<li class="nav2"><a title="Personal Center" href="__APP__/User/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Personal Center</a></li>
				<li class="nav3"><a title="Fresh News" href="__APP__/Unews/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Fresh News</a></li>
				<li class="nav4"><a title="Attention" href="__APP__/Friend/attlist/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Attention</a></li>
				<li class="nav5"><a title="My Collections" href="__APP__/Ustore/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
">My Collections</a></li>
				<li class="nav6"><a title="Guess you like" href="__APP__/Umytype/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Guess You like</a></li>
				<li class="nav7"><a title="" href="__APP__/Time/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
" target="_blank">Movies Released In This Month</a></li>
				<li class="nav8"><a title="My Announcement" href="__APP__/User/noticelist/uid/<?php echo $_SESSION['loginuser']['id'];?>
">My Announcement</a></li>
				<li class="nav9"><a title="Messages" href="__APP__/User/letterlist/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Messages</a></li>
				<li class="nav10"><a title="Profile Editing" href="__APP__/User/changemyinfo/uid/<?php echo $_SESSION['loginuser']['id'];?>
">Profile Editing</a></li>
			</ul>
		</div>
		<?php }?>
		
		<!-- 个人中心菜单结束 --><?php }} ?>