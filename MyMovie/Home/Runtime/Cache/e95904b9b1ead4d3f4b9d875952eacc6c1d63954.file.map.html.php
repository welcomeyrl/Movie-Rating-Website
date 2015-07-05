<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:43:23
         compiled from "./Home/Tpl\Map\map.html" */ ?>
<?php /*%%SmartyHeaderCode:200275416443b5c9472-52178639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e95904b9b1ead4d3f4b9d875952eacc6c1d63954' => 
    array (
      0 => './Home/Tpl\\Map\\map.html',
      1 => 1387415238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200275416443b5c9472-52178639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416443b723d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416443b723d6')) {function content_5416443b723d6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<style>
		#center{ width:960px; height:450px; border:1px solid #c9c9c9;margin:0 auto;background:url(__PUBLIC__/front/images/bg_forum.jpg) no-repeat center 0;}
		#div1{ position:relative; width:960px; height:400px;  margin:auto; overflow:hidden; }
		#div1 a{ position:absolute; color:#fff; text-decoration:none; top:260px; display:block; border:solid 1px #000; background:#90244F; filter:alpha(opacity:80); opacity:0.8; font-size:14px; padding:3px 5px; font-family:arial;}
		#div1 a:hover { filter:alpha(opacity:100); opacity:1; font-weight:bold; font-size:16px; }
	</style>
	<script type="text/javascript">
		window.onload=function()
		{
			var oDiv=document.getElementById('div1');
			var aA=oDiv.getElementsByTagName('a');
			var i=0;
			for(i=0;i<aA.length;i++)
			{
				aA[i].pause=1;
				aA[i].time=null;
				initialize(aA[i]);
				aA[i].onmouseover=function()
				{
					this.pause=0;	
				};
				aA[i].onmouseout=function()
				{
					this.pause=1;
				};
			}
			setInterval(starmove,24);
			function starmove()
			{
				for(i=0;i<aA.length;i++)
				{
					if(aA[i].pause)
					{
						domove(aA[i]);
					}
				}
			}
			function domove(obj)
			{
				if(obj.offsetTop<=-obj.offsetHeight)
				{
					obj.style.top=oDiv.offsetHeight+"px";
					initialize(obj);
				}
				else
				{
					obj.style.top=obj.offsetTop-obj.ispeed+"px";	
				}
			}
			function initialize(obj)
			{
				var iLeft=parseInt(Math.random()*oDiv.offsetWidth);
				var scale=Math.random()*1+1;
				var iTimer=parseInt(Math.random()*1500);
				obj.pause=0;

				obj.style.fontSize=12*scale+'px';

				if((iLeft-obj.offsetWidth)>0)
				{
					obj.style.left=iLeft-obj.offsetWidth+"px";
				}
				else
				{
					obj.style.left=iLeft+"px";
				}
				clearTimeout(obj.time);
				obj.time=setTimeout(function(){
					obj.pause=1;
				},iTimer);
				obj.ispeed=Math.ceil(Math.random()*4)+1;
			}
		};
		</script>
	<body>
	<!-- head页头部分开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!--主体-->
		<div id="center">
				<div id="div1">
					<a href="__APP__/Index/index" target="_blank">首页</a>
					<a href="__APP__/Newslist/mnewslist1" target="_blank">近期热门</a>
					<a href="__APP__/List/index" target="_blank">影评列表</a>
					<a href="__APP__/List/index/order/rnum" target="_blank">最热影评</a>
					<a href="__APP__/List/index/order/ptime" target="_blank">最新影评</a>
					<a href="__APP__/Newslist/pnews" target="_blank">人物新闻</a>
					<a href="__APP__/Newslist/mnews" target="_blank">影讯</a>
					<a href="__APP__/Typelist/index" target="_blank">电影标签</a>
					<a href="__APP__/Requister/requister" target="_blank">去注册</a>
					<a href="__APP__/Login/index" target="_blank">去登录</a>
					<a href="__APP__/Prevue/index" target="_blank">预告片</a>
					<a href="__APP__/Newslist/pnewslist4" target="_blank">明星动态</a>
					<a href="__APP__/Newslist/mnewslist3" target="_blank">影视专题</a>
					<a href="__APP__/Newslist/mnewslist1" target="_blank">近期焦点</a>
					<a href="__APP__/Newslist/mnewslist2" target="_blank">影视前瞻</a>
					<a href="__APP__/List/movietop" target="_blank">影片TOP10</a>
				</div>
		</div>
		<!-- 页脚部分开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>