<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:12:12
         compiled from "./Home/Tpl/Diary/mydiary.html" */ ?>
<?php /*%%SmartyHeaderCode:1327016992553d70cc383cc6-86453079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a020aa3655fd3f513a306b1d1534e6abd0cc861' => 
    array (
      0 => './Home/Tpl/Diary/mydiary.html',
      1 => 1387472540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1327016992553d70cc383cc6-86453079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d70cc4edb0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d70cc4edb0')) {function content_553d70cc4edb0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript">
			$(function(){
				//载入评论
				doload(0);
			});
			
			var did = <?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
; //当前日志ID
			var page = 1; //当前页
			var totalPages = 1; //总页面数
			var tmp_data = new Array(); //缓存数据
			var totalrows = 0; //总数据条数
			
			function doload(m){
				//获得请求页号
				page += m;
				
				//判断是否有缓存数据
				if(tmp_data[page]==undefined){
					//ajax获得分页信息
					$.ajax({
						url:"__APP__/Diary/doload",
						type:"get",
						data:{ p:page,id:did},
						dataType:"json",
						async:false, //设置同步
						success:function(res){
							tmp_data[page] = res;
						}
					});
				}
				
				totalPages = tmp_data[page]['totalPages'];
				totalrows = tmp_data[page]['count'];
				data = tmp_data[page]['list'];
				
				//判断是否有值
				if(data!=null){
					var str = "";
					//循环遍历所有数据
					for(var i=0;i<data.length;i++){
						str += "<div class='diaryreply_content_list'>";
						str += "<div class='acthor'>";
						str += "<div class='l'>";
						str += "<div class='user_pic'>";
						str += "<a href='__APP__/User/index/id/"+data[i].uid+"'>";
						str += "<img width='40' height='40' alt='' src='__ROOT__/Uploads/User/Headpic/"+data[i].headpic+"'>";
						str += "</a>";
						str += "</div>";
						str += "<a href='__APP__/User/index/id/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].addtime+"";
						str += "</div>";
						str += "<div class='r'><a href='javascript:dodel("+data[i].id+");'>删除</a></div>";
						str += "</div>";
						str += "<div class='content'>"+data[i].content+"</div>";
						str += "</div>";			
					}
					$(".diaryreply_content").html(str);
				}else{
					$(".diaryreply_content").html("");
				}
				
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
				$("#pageinfo").html("第 "+page+"/"+totalPages+" 页 共"+totalrows+"条");
			}
			
			//定义删除回复函数
			function dodel(id){
				//再次确认
				if(confirm("确认要删除这条回复吗？")){
					//ajax删除数据
					$.ajax({
						url:"__APP__/Diary/delreply",
						type:"get",
						data:{ id:id},
						dataType:"text",
						success:function(res){
							if(res=="true"){
								tmp_data = new Array();
								doload(0);
							}else if(res=="cannot"){
								alert("不是本人，无权操作！");
							}else{
								alert("删除失败,请稍后再试!");
							}
						},

					});
				}
			}
			
			//定义回复函数
			function doreply(form){
				//获得表单添加数据
				var message = $("textarea").val();
				
				if(message.length<5){
					alert("字数太少，说几句吧");
					return false;
				}
				
				if(message.length>140){
					alert("字数不能超过140个字");
					return false;
				}
				
				//封装当前信息
				var data = $(form).serialize(); //form表单数据串行化
	
				//执行ajax
				$.ajax({
					url:"__APP__/Diary/doreply",
					type:"post",
					data:data,
					dataType:"text",
					success:function(res){
						if(res=="nologin"){
							alert("请先登录！");
							return false;
						}
						
						if(res=="true"){
							//1 清空缓存
							tmp_data = new Array();
							
							//2 重载列表
							doload(0);
							
							//3 清空form表单
							form.reset();
						}else{
							alert("添加失败，稍后再试!");
						}
					}
				});
				
				return false;
			}
			
			//定义删除日志函数
			function deldiary(id){
				//询问是否真的要删除
				if(confirm("是否真的要删除这篇日志？")){
					window.location="__APP__/Diary/deldiary/id/"+id;
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

				<!-- 左侧当前用户日志 -->
				<div class="prlist">
					<div class="prlist_title"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
 
						<span>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>

						</span>
					</div>
					
					
					
					<!-- 日志内容 -->
					<div class="diary_detail">
						<div class="re_detail">
							<span id="deldiary"><a href="javascript:deldiary(<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
)">删除</a></span><span id="editdiary"><a href="__APP__/Diary/editdiary/uid/<?php echo $_GET['uid'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">编辑</a></span>
							<br/><h3>日志内容：</h3><br/>
							<?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>

						</div>
					</div>
					<div class="nav"></div>	
					
					<!-- 日志评论表单部分 -->
					
					<div class="diary_message">
						<p id="js_message_p">我来评论一下</p>
						<form onsubmit="return doreply(this)">
							<input type="hidden" name="did" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" />
							<textarea rows="6" cols="65" name="content" id="js_message_textarea"></textarea>
							<input class="sub" type="submit" value="回复">
						</form>
					</div>
					<div class="nav"></div>	
					
					<!-- 日志评论列表部分 -->
					<div class="diaryreply_list">
						<div class="diaryreply_head">
							<span>点点滴滴留言墙......</span>
							<a class="say">别人都是怎么评价的</a>
						</div>
					
						<div class="diaryreply_content">
							
						</div>
						<div class="fenye">
							<a href="javascript:doload(1)">下一页</a>&nbsp;<a href="javascript:doload(-1)">上一页</a>&nbsp;<span id="pageinfo">第 1/4 页 共17条</span>
						</div>
					</div>

				</div>
			</div>	
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<script type="text/javascript">
			//发布框js
			var oDiv=document.getElementById("diary_message")
			var oP = document.getElementById("js_message_p");
			var oT = document.getElementById("js_message_textarea");
				
			var ie = !-[1,];
			var bBtn = true;
			var timer = null;
			var iNum = 0;
			//获取焦点事件
			oT.onfocus = function(){
				if(bBtn){
					oP.innerHTML = "用文字定格时间...... <a>还可以输入</a><span id='textnum'>140</span>字";
				}
				
			};
			//失去焦点事件
			oT.onblur = function(){
				
				if(oT.value==''){
					oP.innerHTML = '这里需要你的痕迹......';
				}
			};
			//进行ie兼容性判断
			if(ie){
				oT.onpropertychange = toChange;
			}else{
				oT.oninput = toChange;
			}
			//单个字符改变事件
			function toChange(){
				var num = Math.ceil(getLength(oT.value)/2);
				var oSpan = document.getElementById("textnum");
				var opa=oP.getElementsByTagName("a")[0];
				
				if(!oSpan){ return}
				
				if(num<=140){
					opa.innerHTML="还可以输入";
					oSpan.innerHTML = 140 - num;
					oSpan.style.color = '#d20000';
				}else{
					opa.innerHTML="已超出";
					oSpan.innerHTML = num-140;
					oSpan.style.color = 'red';
				}
				
			}
			//获取字符的长度转换汉字进制数
			function getLength(str){
				return String(str).replace(/[^\x00-\xff]/g,'aa').length;
			}
		</script>
	</body>
</html><?php }} ?>