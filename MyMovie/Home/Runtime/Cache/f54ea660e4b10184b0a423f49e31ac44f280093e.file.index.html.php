<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:58:18
         compiled from "./Home/Tpl/Unews/index.html" */ ?>
<?php /*%%SmartyHeaderCode:668260066553dcffa184a36-55078584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54ea660e4b10184b0a423f49e31ac44f280093e' => 
    array (
      0 => './Home/Tpl/Unews/index.html',
      1 => 1387208312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668260066553dcffa184a36-55078584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
    'newstitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dcffa260b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dcffa260b1')) {function content_553dcffa260b1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript">
			//载入新鲜事列表第一页
			$(function(){
				doload(0);
			});
			
			var uid = <?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
; //获得当前用户id
			var page = 1; //默认当前页
			var totalPages = 1; //默认总页数
			var tmp_data = new Array(); //定义缓存数据存储
			
			//定义载入新鲜事函数
			function doload(m){
				//获得请求页号
				page += m;
				
				//判断是否有缓存数据
				if(tmp_data[page]==undefined){
					//执行ajax获得分页信息
					$.ajax({
						url:"__APP__/Unews/doload",
						type:"get",
						data:{ uid:uid,p:page},
						dataType:"json",
						async:false, //设置同步
						success:function(res){
							tmp_data[page] = res;
						}
					});
				}
				
				totalPages = tmp_data[page]['totalPages'];
				data = tmp_data[page]['list'];
				
				//判断是否有值
				if(data != null){
					//有值，准备遍历输出
					var str = ""; //定义字符串准备接收
					for(var i=0;i<data.length;i++){
						str += "<div class='diaryreply_content_list'>";
						str += "<div class='acthor'>";
						str += "<div class='l'>";
						str += "<div class='user_pic'>";
						str += "<a href='__APP__/User/index/uid/"+data[i].uid+"'>";
						str += "<img width='40' height='40' alt='' src='__ROOT__/Uploads/User/Headpic/"+data[i].headpic+"'>";
						str += "</a>";
						str += "</div>";
						str += "<a href='__APP__/User/index/uid/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].addtime+"";
						str += "</div>";
						str += "<div class='r'><a class='mreply' href='__APP__/Pmood/index/uid/"+data[i].uid+"'>去回复</a></div>";
						str += "</div>";
						str += "<div class='content'>"+data[i].content+"</div>";
						str += "</div>";
					}
					$(".diaryreply_content").html(str);
					//防止溢出
					if(page>totalPages){
						page = totalPages;
					}
					if(page<1){
						page = 1;
					}
					if(totalPages<1){
						totalPages = 1;
					}
					
					//输出分页信息
					$("#pageinfo").html("第 "+page+"/"+totalPages+" 页");
				}else{
					$(".diaryreply_content").html("<div class='nobody'>好友还没有新鲜事</div>");
				}
				
			}
			
			function here(){
				 uid = <?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
;
				 page = 1; 
				 totalPages = 1;
				 tmp_data = new Array();
		
				doload(0);
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

				<!-- 左侧当前用户留言 -->
				<div class="prlist">
					<div class="prlist_title"><?php echo $_smarty_tpl->tpl_vars['newstitle']->value;?>
</div>
					
					<!-- 心情评论列表部分 -->
					<div class="diaryreply_list">
						<div class="diaryreply_head">
							<span>最近他们都遇到了什么......</span>
							<a href="javascript:here()" class="say" >刷新一下更精彩</a>
						</div>
					
						<div class="diaryreply_content">
							
						</div>
						<div class="fenye">
							<a href="javascript:doload(1)">下一页</a>&nbsp;<a href="javascript:doload(-1)">上一页</a>&nbsp;<span id="pageinfo"></span>
						</div>
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
					对【<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
】的心情有什么看法？
				</div>
				<div class="acon">
				<form onsubmit="return replypmood(this)">
					<input type="hidden" name="selfid" value="<?php echo $_GET['uid'];?>
" />
					<input type="hidden" name="rid" value="" />
					<input type="hidden" name="bid" value="" />
					<textarea name="rcontent" id="text" style="resize:none;" cols="70" rows="10" ></textarea>
					<input type="submit" value="回复心情" class="wsub"/>
				</form>
				</div>		
			</div>
	</body>
</html><?php }} ?>