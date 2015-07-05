<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:56:01
         compiled from "./Home/Tpl/Pmood/index.html" */ ?>
<?php /*%%SmartyHeaderCode:896436135553d70c23d3a72-91231577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548b9203af1ce6e3d4d4aa85813f9b4bc15f15dd' => 
    array (
      0 => './Home/Tpl/Pmood/index.html',
      1 => 1430090428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896436135553d70c23d3a72-91231577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d70c25faad',
  'variables' => 
  array (
    'messtitle' => 0,
    'list' => 0,
    'v' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d70c25faad')) {function content_553d70c25faad($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
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
			//定义删除心情函数
			function dodel(id){
				//询问是否真的要删除
				if(confirm("Are you sure to delete your mood? ")){
					window.location="__APP__/Pmood/dodel/id/"+id;
				}
			}
			
			//获取字符的长度转换汉字进制数
			function getLength(str){
				return String(str).replace(/[^\x00-\xff]/g,'aa').length;
			}

			//定义回复心情方法
			function replypmood(form){
				//获得表单添加数据
				var message = $("textarea[name='rcontent']").val();
				var rid = $("input[name='rid']").val();
				
				if(message.length<1){
					alert("At least one word");
					return false;
				}
				
				if(message.length>140){
					alert("Can't exceed 140 words");
					return false;
				}
				
				//封装当前信息
				var data = $(form).serialize(); //form表单数据串行化
	
				//执行ajax
				$.ajax({
					url:"__APP__/Pmood/replypmood",
					type:"post",
					data:data,
					dataType:"text",
					success:function(res){
						if(res=="nologin"){
							alert("Not login and can't reply");
							return false;
						}
						
						if(res=="self"){
							alert("You can't reply to yourself");
							return false;
						}
						
						if(res=="true"){
							//1 清空缓存
							rtmp_data = new Array();
							
							//2 重载列表
							rdoload(0);
							
							//3 清空form表单
							form.reset();
							
							//4 关闭弹出框
							$("#alert_review_bg").css({ display:"none"});
							$("#words_edit").css({ display:"none"});
							
							//显示当前回复
							seereply(rid);
							
						}else{
							alert("Add failed. Please try it again!");
						}
					}
				});
				
				return false;
			}
			
			//定义显示留言回复
			function seereply(id){
				rtmp_data = new Array(); //清空缓存
				$(".replydivdis").slideUp("fast");
				$("#replydiv"+id+"").slideDown("slow");
				rdoload(0,id);
				$(".rcontent").css("background-color","#ffffff");
			}
			
			//定义收起函数
			function replydisplay(id){
				$("#replydiv"+id+"").slideUp("slow");
			}
			
			//ajax请求数据
			var rpage = 1; //定义当前页
			var rtotalPages = 1; //定义总页数
			var rtmp_data = new Array(); //定义缓存数组
			var rtotalRows = 0; //定义总数据条数
			
			//留言回复载入页面
			function rdoload(m,rid){
				//获得请求页号
				rpage += m;
				
				//判断是否有缓存数据
				if(rtmp_data[rpage]==undefined){
					//ajax获得分页信息
					$.ajax({
						url:"__APP__/Pmood/rdoload",
						type:"get",
						data:{ p:rpage,rid:rid},
						dataType:"json",
						async:false, //设置同步
						success:function(res){
							rtmp_data[rpage] = res;
						}
					});
				}
				
				rtotalPages = rtmp_data[rpage]['rtotalPages'];
				rtotalrows = rtmp_data[rpage]['rcount'];
				rdata = rtmp_data[rpage]['rlist'];
				rid = rtmp_data[rpage]['rid'];
					
				if(rtotalrows>0){
					var str = "";
					//循环遍历所有数据
					for(var i=0;i<rdata.length;i++){
						str += "<div class='rcontent' style='background-color:white;'>"+rdata[i].addtime+" - 【"+rdata[i].username+"】 Reply 【"+rdata[i].busername+"】 Contents："+rdata[i].rcontent+"<a href='javascript:rereply("+rdata[i].rid+","+rdata[i].uid+")'>Reply</a></div>";
					}
					str += "<a href='javascript:rdoload(1,"+rid+")'>Next Page</a>&nbsp;<a href='javascript:rdoload(-1,"+rid+")'>Last Page</a>&nbsp;<span id='rpageinfo'></span>";
					str += "<div class='seereply'><a href='javascript:replydisplay("+rid+")'>Retract</a></div>";
					$(".replydivdis").html(str);

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
					$("#rpageinfo").html("The "+rpage+"/"+rtotalPages+" page has "+rtotalrows+" records");
				}else{
					$(".replydivdis").html("<div class='nobody'>No one reply this mood yet.</div>");
				}

			}
			
			//定义回复留言回复函数
			function rereply(rid,bid){
				$("#alert_review_bg").css({ display:"block"});
				$("#words_edit").css({ display:"block",top:$(window).scrollTop()+100+"px"});
				$("input[name='rid']").val(rid);
				$("input[name='bid']").val(bid);
				$("#js_message_p").html("Do you want to leave message to him/her?");
				$("#text").val("");
			}
			
			//定义心情转发的函数
			function doquote(id){
				//执行ajax转发操作
				$.ajax({
					url:"__APP__/Pmood/doquote",
					type:"get",
					data:{ id:id},
					dataType:"text",
					success:function(res){
						//判断是否转发成功
						if(res=="true"){
							alert("Forward successfully!");
						}else if(res=="self"){
							alert("You don't forward yourself!");
						}else if(res=="nologin"){
							alert("Please log in first!");
						}else if(res=="already"){
							alert("You have already forward!");
						}else{
							alert("Forward failed!");
						}
					},
					
				});
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
					<div class="prlist_title"><?php echo $_smarty_tpl->tpl_vars['messtitle']->value;?>
</div>
					
					<!-- 心情评论列表部分 -->
					<div class="diaryreply_list">
						<div class="diaryreply_head">
							<span>One step by step</span>
							<a class="say">Leave your feelings</a>
						</div>
					
						<div class="diaryreply_content">
							
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==0){?>
									<div class="diaryreply_content_list">
										<div class="acthor">
											<div class="l">
												<div class="user_pic">
													<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
														<img width="40" height="40" src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
">
													</a>
												</div>
												<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">【<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
】</a>

											</div>
											<div class="r">
												<a href="javascript:dodel(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
);">Delete</a>
												<a rid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" bid="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" class="mreply">Reply</a>
												<a href="javascript:doquote(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">Forward</a>
											</div>
										</div>
										<span class="titletime">Release time: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
										<div class="content">
											<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

										</div>
										<div class="seereply">
											<a href="javascript:seereply(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">View</a>
										</div>
										<div class="replydivdis" id="replydiv<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
										</div>
									</div>
								<?php }else{ ?>
									<div class="diaryreply_content_list">
										<div class="acthor">
											<div class="l">
												<div class="user_pic">
													<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
														<img width="40" height="40" src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
">
													</a>
												</div>
												<a href="__APP__/Pmood/index/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">Forward from【<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
】</a>
												<div class="user_pic" sytle="float:right;">
													<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
														<img width="40" height="40" src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['v']->value['headpic'];?>
">
													</a>
												</div>
											</div>
											<div class="r">
												<a href="javascript:dodel(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
);">Delete</a>
												<a rid="<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
" bid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="mreply">Reply</a>
												<a href="javascript:quote(<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
)">Forward</a>
											</div>
										</div>
										<span class="titletime">Release time: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
										<div class="content">
											<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

										</div>
										<div class="seereply">
											<a href="javascript:seereply(<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
)">View</a>
										</div>
										<div class="replydivdis" id="replydiv<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
">
										</div>
									</div>
								<?php }?>
							<?php } ?>
						</div>
						<div class="fenye">
							<a href="javascript:doload(1)">Next Page</a>&nbsp;<a href="javascript:doload(-1)">Last Page</a>&nbsp;<span id="pageinfo"></span>
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
				Do you have some opinions to【<?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
】's moods?
			</div>
			<div class="acon">
			<form onsubmit="return replypmood(this)">
				<input type="hidden" name="selfid" value="<?php echo $_GET['uid'];?>
" />
				<input type="hidden" name="rid" value="" />
				<input type="hidden" name="bid" value="" />
				<p id="js_message_p">Leave your message</p>
				<textarea name="rcontent" id="text" style="resize:none;" cols="70" rows="10" ></textarea><br/>
				<input type="submit" value="reply moods" class="wsub"/>
			</form>
			</div>		
		</div>
		
		<script type="text/javascript">
			//发布框js
			var oDiv=document.getElementById("words_edit")
			var oP = document.getElementById("js_message_p");
			var oT = document.getElementById("text");
				
			var ie = !-[1,];
			var bBtn = true;
			var timer = null;
			var iNum = 0;
			//获取焦点事件
			oT.onfocus = function(){
				if(bBtn){
					oP.innerHTML = "<a>You can still enter</a><span id='textnum'>140</span>words";
				}
				
			};
			//失去焦点事件
			oT.onblur = function(){
				
				if(oT.value==''){
					oP.innerHTML = 'Leave your message';
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
					opa.innerHTML="You can still enter";
					oSpan.innerHTML = 140 - num;
					oSpan.style.color = '#d20000';
				}else{
					opa.innerHTML="have exceeded";
					oSpan.innerHTML = num-140;
					oSpan.style.color = 'red';
				}
				
			}
			//获取字符的长度转换汉字进制数
			function getLength(str){
				return String(str).replace(/[^\x00-\xff]/g,'aa').length;
			}
		</script>
		
		<!-- 发影评弹框页js -->
		<script type="text/javascript">
		$(function(){
			//点击弹出div层
			$(".mreply").click(function(){
				$("#alert_review_bg").css({ display:"block"});
				$("#words_edit").css({ display:"block",top:$(window).scrollTop()+100+"px"});
				$("input[name='rid']").val($(this).attr('rid'));
				$("input[name='bid']").val($(this).attr('bid'));
				$("#text").val("");
				$("#js_message_p").html("Do you want to leave some message to him/her?");
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