<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:47:21
         compiled from "./Home/Tpl\Prevue\prevue.html" */ ?>
<?php /*%%SmartyHeaderCode:7555416452944cc86-39818728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab4f31dafbdcb4aa7095ebcac83b989cee75045c' => 
    array (
      0 => './Home/Tpl\\Prevue\\prevue.html',
      1 => 1387287796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7555416452944cc86-39818728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5416452959560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416452959560')) {function content_5416452959560($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/prevue.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
 		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script> 
		<!-- 流媒体 -->
		<script type="text/javascript" src="__PUBLIC__/ckplayer/js/offlights.js"></script>
		<script type="text/javascript" src="__PUBLIC__/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
		
		<!--[if IE 6]>
		<script language="javascript" type="text/javascript" src="__PUBLIC__/front/js/DD_belatedPNG.js"></script>
		<script language="javascript" type="text/javascript">
			DD_belatedPNG.fix('.pngImg,img');
			DD_belatedPNG.fix('.pngBackground,background');
			DD_belatedPNG.fix('#showFaqPanel,a:hover');
		</script>
		<![endif]-->
	</head>	
	<script type="text/javascript">
	window.onload=function(){
		var flashvars={
			f:"http://<?php echo $_smarty_tpl->tpl_vars['video']->value['video_play_path'];?>
/Uploads/Video/<?php echo $_smarty_tpl->tpl_vars['video']->value['videoname'];?>
",
			c:0,
			b:1
			};
		var params={ bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};
		CKobject.embedSWF('http://<?php echo $_smarty_tpl->tpl_vars['video']->value['video_play_path'];?>
/Public/ckplayer/ckplayer/ckplayer.swf','video','ckplayer_a1','683','400',flashvars,params);
		/*
		CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
		下面三行是调用html5播放器用到的
		*/
		var video=['http://movie.ks.js.cn/flv/other/1_0.mp4->video/mp4'];
		var support=['iPad','iPhone','ios','android+false','msie10+false','webKit'];
		CKobject.embedHTML5('video','ckplayer_a1',683,400,video,flashvars,support);
	}
	</script>
	<script language="javascript"> 
	//雪花效果
	(function(){ function k(a,b,c){ if(a.addEventListener)a.addEventListener(b,c,false);else a.attachEvent&&a.attachEvent("on"+b,c)}function g(a){ if(typeof window.onload!="function")window.onload=a;else{ var b=window.onload;window.onload=function(){ b();a()}}}function h(){ var a={ };for(type in{ Top:"",Left:""}){ var b=type=="Top"?"Y":"X";if( typeof window["page"+b+"Offset"]!="undefined")a[type.toLowerCase()]=window["page"+b+"Offset"];else{ b=document.documentElement.clientHeight?document.documentElement:document.body; a[type.toLowerCase()]=b["scroll"+type]}}return a}function l(){ var a=document.body,b;if(window.innerHeight)b=window.innerHeight;else if(a.parentElement.clientHeight)b=a.parentElement.clientHeight;else if(a&&a.clientHeight)b=a.clientHeight;return b}function i(a){ this.parent=document.body;this.createEl(this.parent,a);this.size=Math.random()*5+5;this.el.style.width=Math.round(this.size)+"px";this.el.style.height=Math.round(this.size)+"px";this.maxLeft=document.body.offsetWidth-this.size;this.maxTop=document.body.offsetHeight- this.size;this.left=Math.random()*this.maxLeft;this.top=h().top+1;this.angle=1.4+0.2*Math.random();this.minAngle=1.4;this.maxAngle=1.6;this.angleDelta=0.01*Math.random();this.speed=2+Math.random()}var j=false;g(function(){ j=true});var f=true;window.createSnow=function(a,b){ if(j){ var c=[],m=setInterval(function(){ f&&b>c.length&&Math.random()<b*0.0025&&c.push(new i(a));!f&&!c.length&&clearInterval(m);for(var e=h().top,n=l(),d=c.length-1;d>=0;d--)if(c[d])if(c[d].top<e||c[d].top+c[d].size+1>e+n){ c[d].remove(); c[d]=null;c.splice(d,1)}else{ c[d].move();c[d].draw()}},40);k(window,"scroll",function(){ for(var e=c.length-1;e>=0;e--)c[e].draw()})}else g(function(){ createSnow(a,b)})};window.removeSnow=function(){ f=false};i.prototype={ createEl:function(a,b){ this.el=document.createElement("img");this.el.setAttribute("src","__PUBLIC__/front/images/snow"+Math.floor(Math.random()*4)+".gif");this.el.style.position="absolute";this.el.style.display="block";this.el.style.zIndex="99999";this.parent.appendChild(this.el)},move:function(){ if(this.angle< this.minAngle||this.angle>this.maxAngle)this.angleDelta=-this.angleDelta;this.angle+=this.angleDelta;this.left+=this.speed*Math.cos(this.angle*Math.PI);this.top-=this.speed*Math.sin(this.angle*Math.PI);if(this.left<0)this.left=this.maxLeft;else if(this.left>this.maxLeft)this.left=0},draw:function(){ this.el.style.top=Math.round(this.top)+"px";this.el.style.left=Math.round(this.left)+"px"},remove:function(){ this.parent.removeChild(this.el);this.parent=this.el=null}}})();
	</script>			
	<script language="javascript">
	createSnow('',100);
	</script>
	<!-- 解决滚动条显示 -->
	<body id="bodyheight">
		<!-- 个人中心菜单结束 -->
	
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		<!-- 主体部分开始	-->
		<div id="prevue_main">
			<!-- 标题 -->
			<div class="left_top">
				<div class="top pngBackground"></div>
				<div class="center pngBackground"><?php echo $_smarty_tpl->tpl_vars['video']->value['filmname'];?>
——<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</div>
				<div class="bottom pngBackground"></div>
			</div>	
			<!-- 视频播放 -->
			<div class="left_down">
				<div class="top pngBackground"></div>
				<div class="center pngBackground">
					<div id="video" >
					
					</div>
				</div>
				<div class="bottom pngBackground"></div>
			</div>
			
			<img src="__PUBLIC__/front/images/magic.png" class="pngImg"/>
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>