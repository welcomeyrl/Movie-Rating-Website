<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 12:16:08
         compiled from "./Home/Tpl/Public/head.html" */ ?>
<?php /*%%SmartyHeaderCode:1722910877553d3dee1972f8-14871775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd586c9822bcfea2f4e3b75e09956f265662f62a' => 
    array (
      0 => './Home/Tpl/Public/head.html',
      1 => 1430108166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722910877553d3dee1972f8-14871775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3dee23277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3dee23277')) {function content_553d3dee23277($_smarty_tpl) {?><script type="text/javascript">
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
						<li class="disuser"><a href="__APP__/Login/ShowLogin.html?height=245;width=600" class="thickbox"  title="Login">Login | </a></li> 
						
						<li><a href="__APP__/Reqister/reqister">Signup</a></li>
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
						<form action="__APP__/Index/search" method="post">
							<input type="text" class="inp" placeholder="movies, genres" style="font-size:12px; padding-left:5px;" name="key" />
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
						<li><a href="__APP__/Index/index">Home Page</a></li>
				<!--		<li><a href="__APP__/News/news">影讯</a></li>   -->
						<li><a href="__APP__/List/movielist">Rank List</a></li>
						<li><a href="__APP__/List/index">Reviews</a></li>
						<li><a href="__APP__/Typelist/index">Categories</a></li>
						<li><a href="__APP__/Prevue/index">Trailers</a></li>
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
					$(this).find('a').css({ left:"-90px",opacity:"0.6"});
					$(this).hover(function(){
						$(this).find('a').animate({ left:"0px",opacity:"1"},"normal");
					},function(){
						$(this).find('a').animate({ left:"-90px",opacity:"0.6"},"normal");
					});
				}
			});
		
	
		});
		//点击个人中心进行判断
		function persionCheckLogin(){
			var uid="<?php echo $_SESSION['loginuser']['id'];?>
";
			if(uid.length>0){
				window.location="__APP__/User/index/id/"+uid;
			}else{
				alert_display_block("You have not login yet!");
			}
		}
		
		</script>
		
		<div id="person_menu">
			<ul>
				<li class="nav0 current_page"><a href="javascript:persionCheckLogin();">Personal Center</a></li>
				<li class="nav1"><a title="Home Page" href="__APP__/Index/index">Home Page</a></li>
			<!--	<li class="nav2"><a title="影讯" href="__APP__/News/news">影讯</a></li>  -->
				<li class="nav3"><a title="Rank List" href="__APP__/List/movielist">Rank List</a></li>
				<li class="nav4"><a title="Movie Reviews" href="__APP__/List/index">Movie Reviews</a></li>
				<li class="nav5"><a title="Categories" href="__APP__/Typelist/index">Categories</a></li>
				<li class="nav6"><a title="Trailers" href="__APP__/Prevue/index">Trailers</a></li>
				<li class="nav7"><a title="Links" href="__APP__/Map/map">Links</a></li>
			</ul>
		</div>
	
		<!-- 个人中心菜单结束 -->
		
		<!-- 弹框提示框 -->
		<div  id="define_my_alert_bg"></div>
		<div id="define_my_alert">
			<div class="close" ></div>
			
			<div class="alert_msg">
				Hint
			</div>
		</div>
		<script type="text/javascript">
			
			//弹框js		
			//点击弹出div层
			function alert_display_block(msg){
				var aw=($(window).outerWidth()-$("#define_my_alert").width())/2;
				var ah=($(window).outerHeight()-$("#define_my_alert").height())/2;	
				//输入内容
				$("#define_my_alert .alert_msg").html(msg);
				$("#define_my_alert_bg").fadeIn("fast");
				$("#define_my_alert").fadeIn("fast").css({ top:$(window).scrollTop()+ah+"px",left:aw+"px"});
				
			}
			
			//点击关闭隐藏div层
			$("#define_my_alert .close").click(function(){	
				$("#define_my_alert_bg").fadeOut("fast");
				$("#define_my_alert").fadeOut("fast");
			});
			
			var aw=($(window).outerWidth()-$("#define_my_alert").width())/2;
			var ah=($(window).outerHeight()-$("#define_my_alert").height())/2;	
			//滚动窗滚动跟随滚动
			$(window).scroll(function(){
				$("#define_my_alert_bg").css({ top:$(window).scrollTop()+"px"});
				$("#define_my_alert").css({ top:$(window).scrollTop()+ah+"px"});
			});

			
			
		</script><?php }} ?>