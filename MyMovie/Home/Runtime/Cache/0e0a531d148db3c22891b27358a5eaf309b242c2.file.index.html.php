<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:45:22
         compiled from "./Home/Tpl\Uhistory\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11538541644b2c24939-15066813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0a531d148db3c22891b27358a5eaf309b242c2' => 
    array (
      0 => './Home/Tpl\\Uhistory\\index.html',
      1 => 1387161510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11538541644b2c24939-15066813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listtitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_541644b30c0f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541644b30c0f5')) {function content_541644b30c0f5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript">
			//默认入口
			$(function(){
				ldoload(0); //载入长评前6个电影
				sdoload(0); //载入短评前6个电影
				wdoload(0); //载入想看的电影
				hdoload(0); //载入看过的电影
				rdoload(0); //载入评分过的电影
				stodoload(0); //载入珍藏的电影
			});
			
			//载入当前用户id 
			var uid = <?php echo $_GET['uid'];?>
;
			
			var lpage = 1; //定义长评页号
			var ltotalPage = 1; //定义长评页面总数
			var ltmp_data = new Array(); //定义长评缓存数组
			var ltotalrow = 0; //定义长评总数据条数
		
			function ldoload(m){
				//获得请求的页号
				lpage += m;
				
				//判断是否有缓存数据
				if(ltmp_data[lpage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/ldoload",
						type:"get",
						data:{ p:lpage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							ltmp_data[lpage] = res;
						},
					});
				}
				ltotalPages = ltmp_data[lpage]['ltotalPages'];
				ltotalrows = ltmp_data[lpage]['lcount'];
				ldata = ltmp_data[lpage]['list'];
				
				if(ldata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<ldata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+ldata[i].fid+"'>";
						//str += "<img src='__ROOT__/Uploads/Movie/Cover/c_'"+ldata[i].picname+"><br/>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+ldata[i].picname+"'/><br/>";
						str += "<span>"+ldata[i].filmname+"</span>";
						str += "</a>";
						str += "</div>";
					}
					
					$(".longload").html(str);
					
					//防止溢出
					if(lpage>ltotalPages){
						lpage = ltotalPages;
					}
					if(lpage<1){
						lpage = 1;
					}
					if(ltotalPages<1){
						ltotalPages = 1;
					}
					
					//输出分页信息
					$("#lpageinfo").html("第 "+lpage+"/"+ltotalPages+" 页 共"+ltotalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:ldoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:ldoload(1)'>下一页</a>");
				}else{
					$(".longload").html("<div class='unonehere'>还没有给电影长篇大论过呢！</div>");
				}
				
			}
			
			//短评部分
			var spage = 1; //定义短评页号
			var stotalPage = 1; //定义短评页面总数
			var stmp_data = new Array(); //定义短评缓存数组
			var stotalrow = 0; //定义短评总数据条数
		
			function sdoload(m){
				//获得请求的页号
				spage += m;
				
				//判断是否有缓存数据
				if(stmp_data[spage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/sdoload",
						type:"get",
						data:{ p:spage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							stmp_data[spage] = res;
						},
					});
				}
				stotalPages = stmp_data[spage]['stotalPages'];
				stotalrows = stmp_data[spage]['scount'];
				sdata = stmp_data[spage]['list'];
				
				if(sdata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<sdata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+sdata[i].fid+"'>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+sdata[i].picname+"'/><br/>";
						str += "<span>"+sdata[i].filmname+"</span>";
						str += "</a>";
						str += "</div>";
					}
					$(".shortload").html(str);
					
					//防止溢出
					if(spage>stotalPages){
						spage = stotalPages;
					}
					if(spage<1){
						spage = 1;
					}
					if(stotalPages<1){
						stotalPages = 1;
					}
					
					//输出分页信息
					$("#spageinfo").html("第 "+spage+"/"+stotalPages+" 页 共"+stotalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:sdoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:sdoload(1)'>下一页</a>");
				}else{
					$(".shortload").html("<div class='unonehere'>还没有给电影画龙点睛的短评过呢！</div>");
				}
			}
			
			//想看的电影部分
			var wpage = 1; 
			var wtotalPage = 1; 
			var wtmp_data = new Array();
			var wtotalrow = 0;
		
			function wdoload(m){
				//获得请求的页号
				wpage += m;
				
				//判断是否有缓存数据
				if(wtmp_data[wpage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/wdoload",
						type:"get",
						data:{ p:wpage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							wtmp_data[wpage] = res;
						},
					});
				}
				wtotalPages = wtmp_data[wpage]['wtotalPages'];
				wtotalrows = wtmp_data[wpage]['wcount'];
				wdata = wtmp_data[wpage]['list'];
				
				if(wdata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<wdata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+wdata[i].fid+"'>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+wdata[i].picname+"'/><br/>";
						str += "<span>"+wdata[i].filmname+"</span>";
						str += "</a>";
						str += "</div>";
					}
					$(".wantseeload").html(str);
					
					//防止溢出
					if(wpage>wtotalPages){
						wpage = wtotalPages;
					}
					if(wpage<1){
						wpage = 1;
					}
					if(wtotalPages<1){
						wtotalPages = 1;
					}
					
					//输出分页信息
					$("#wpageinfo").html("第 "+wpage+"/"+wtotalPages+" 页 共"+wtotalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:wdoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:wdoload(1)'>下一页</a>");
				}else{
					$(".wantseeload").html("<div class='unonehere'>还没有想看的电影么？快快收集一下吧！</div>");
				}
			}
			
			//看过的电影部分
			var hpage = 1; 
			var htotalPage = 1; 
			var htmp_data = new Array();
			var htotalrow = 0;
		
			function hdoload(m){
				//获得请求的页号
				hpage += m;
				
				//判断是否有缓存数据
				if(htmp_data[hpage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/hdoload",
						type:"get",
						data:{ p:hpage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							htmp_data[hpage] = res;
						},
					});
				}
				htotalPages = htmp_data[hpage]['htotalPages'];
				htotalrows = htmp_data[hpage]['hcount'];
				hdata = htmp_data[hpage]['list'];
				
				if(hdata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<hdata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+hdata[i].fid+"'>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+hdata[i].picname+"'/><br/>";
						str += "<span>"+hdata[i].filmname+"</span>";
						str += "</a>";
						str += "</div>";
					}
					$(".hseenload").html(str);
					
					//防止溢出
					if(hpage>htotalPages){
						hpage = htotalPages;
					}
					if(hpage<1){
						hpage = 1;
					}
					if(htotalPages<1){
						htotalPages = 1;
					}
					
					//输出分页信息
					$("#hpageinfo").html("第 "+hpage+"/"+htotalPages+" 页 共"+htotalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:hdoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:hdoload(1)'>下一页</a>");
				}else{
					$(".hseenload").html("<div class='unonehere'>让朋友们看看你的见识是多么的广大！</div>");
				}
			}
			
			//评分过的电影部分
			var rpage = 1; 
			var rtotalPage = 1; 
			var rtmp_data = new Array();
			var rtotalrow = 0;
		
			function rdoload(m){
				//获得请求的页号
				rpage += m;
				
				//判断是否有缓存数据
				if(rtmp_data[rpage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/rdoload",
						type:"get",
						data:{ p:rpage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							rtmp_data[rpage] = res;
						},
					});
				}
				rtotalPages = rtmp_data[rpage]['rtotalPages'];
				rtotalrows = rtmp_data[rpage]['rcount'];
				rdata = rtmp_data[rpage]['list'];
				
				if(rdata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<rdata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+rdata[i].fid+"'>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+rdata[i].picname+"'/><br/>";
						str += "<span>"+rdata[i].filmname+"("+rdata[i].score+")</span>";
						str += "</a>";
						str += "</div>";
					}
					$(".rateload").html(str);
					
					//防止溢出
					if(rpage>rtotalPages){
						rpage = rtotalPages;
					}
					if(rpage<1){
						rpage = 1;
					}
					if(rtotalPages<1){
						rtotalPages = 1;
					}
					
					//输出分页信息
					$("#rpageinfo").html("第 "+rpage+"/"+rtotalPages+" 页 共"+rtotalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:rdoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:rdoload(1)'>下一页</a>");
				}else{
					$(".rateload").html("<div class='unonehere'>给看过的电影打打分吧！</div>");
				}
			}
			
			//收藏的电影部分
			var stopage = 1; 
			var stototalPage = 1; 
			var stotmp_data = new Array();
			var stototalrow = 0;
		
			function stodoload(m){
				//获得请求的页号
				stopage += m;
				
				//判断是否有缓存数据
				if(stotmp_data[stopage]==undefined){
					//缓存没有数据，执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Uhistory/stodoload",
						type:"get",
						data:{ p:stopage,uid:uid},
						dataType:"json",
						async:false,
						success:function(res){
							stotmp_data[stopage] = res;
						},
					});
				}
				stototalPages = stotmp_data[stopage]['stototalPages'];
				stototalrows = stotmp_data[stopage]['stocount'];
				stodata = stotmp_data[stopage]['list'];
				
				if(stodata!=null){
					var str="";
					//循环遍历所有数据
					for(var i=0;i<stodata.length;i++){
						str += "<div class='recommovie'>";
						str += "<a href='__APP__/Detail/index/id/"+stodata[i].fid+"'>";
						str += "<img src='__ROOT__/Uploads/Movie/Cover/c_"+stodata[i].picname+"'/><br/>";
						str += "<span>"+stodata[i].filmname+"</span>";
						str += "</a>";
						str += "</div>";
					}
					$(".storeload").html(str);
					
					//防止溢出
					if(stopage>stototalPages){
						stopage = stototalPages;
					}
					if(stopage<1){
						stopage = 1;
					}
					if(stototalPages<1){
						stototalPages = 1;
					}
					
					//输出分页信息
					$("#stopageinfo").html("第 "+stopage+"/"+stototalPages+" 页 共"+stototalrows+"条&nbsp;&nbsp;&nbsp;<a href='javascript:stodoload(-1)'>上一页</a>&nbsp;&nbsp;&nbsp;<a href='javascript:stodoload(1)'>下一页</a>");
				}else{
					$(".storeload").html("<div class='unonehere'>给大家展示一下你认为值得珍藏的佳片吧！</div>");
				}
			}
			
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
</div>
					
					<div class="recom_list">
						<div class="title"><a href="">长篇大论过的</a></div>
						<div class="recontent">
							<div class="longload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="lpageinfo"></span>
							</div>
						</div>
					</div>
					
					<div class="recom_list">
						<div class="title"><a href="">画龙点睛过的</a></div>
						<div class="recontent">
							<div class="shortload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="spageinfo"></span>
							</div>
						</div>
					</div>
					
					<div class="recom_list">
						<div class="title"><a href="">想看的电影</a></div>
						<div class="recontent">
							<div class="wantseeload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="wpageinfo"></span>
							</div>
						</div>
					</div>
					
					<div class="recom_list">
						<div class="title"><a href="">看过的电影</a></div>
						<div class="recontent">
							<div class="hseenload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="hpageinfo"></span>
							</div>
						</div>
					</div>
					
					<div class="recom_list">
						<div class="title"><a href="">评分过的电影</a></div>
						<div class="recontent">
							<div class="rateload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="rpageinfo"></span>
							</div>
						</div>
					</div>
					
					<div class="recom_list">
						<div class="title"><a href="">珍藏的电影</a></div>
						<div class="recontent">
							<div class="storeload">

							</div>
							<div class="nav"></div>
							<div id="fy">
								<span id="stopageinfo"></span>
							</div>
						</div>
					</div>
					
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