<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:55:34
         compiled from "./Home/Tpl/Umessage/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1612660455553d70d612b126-79961312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '861ff05cd3202f47d345e95c38551d52a534424e' => 
    array (
      0 => './Home/Tpl/Umessage/index.html',
      1 => 1430101372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612660455553d70d612b126-79961312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d70d631a94',
  'variables' => 
  array (
    'messtitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d70d631a94')) {function content_553d70d631a94($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			
			var uid1 = <?php echo $_GET['uid'];?>
; //当前被留言者用户
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
						url:"__APP__/Umessage/doload",
						type:"get",
						data:{ p:page,uid1:uid1},
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
						str += "<a href='__APP__/User/index/uid/"+data[i].uid2+"'>";
						str += "<img width='40' height='40' alt='' src='__ROOT__/Uploads/User/Headpic/"+data[i].user.headpic+"'>";
						str += "</a>";
						str += "</div>";
						str += "<a href='__APP__/User/index/uid/"+data[i].uid2+"'>"+data[i].user.username+"</a>"+data[i].addtime+"";
						str += "</div>";
						str += "<div class='r'><a href='javascript:dodel("+data[i].id+");'>Delete</a><a class='mreply' href='javascript:remessage("+data[i].id+","+data[i].uid2+");' bid="+data[i].uid2+" rid="+data[i].id+">Reply</a></div>";
						str += "</div>";
						str += "<div class='content'>"+data[i].content+"</div>";
						str += "<div class='seereply'><a href='javascript:seereply("+data[i].id+")'>View</a></div>";
						str += "<div id='replydiv"+data[i].id+"' class='replydivdis'>";	
						str += "</div>";		
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
					$("#pageinfo").html("The "+page+"/"+totalPages+" page has "+totalrows+" records");
					
				}else{
					$(".diaryreply_content").html("");
				}
			}
			
			//定义删除留言函数
			function dodel(id){
				//再次确认
				if(confirm("Are you sure to delete this message?")){
					//ajax删除数据
					$.ajax({
						url:"__APP__/Umessage/dodel",
						type:"get",
						data:{ id:id},
						dataType:"text",
						success:function(res){
							if(res=="true"){
								tmp_data = new Array();
								doload(0);
							}else if(res=="cannot"){
								alert("You have no right to operate!");
							}else{
								alert("Delete failed! Try it again!");
							}
						},

					});
				}
			}
			
			//定义留言函数
			function doreply(form){
				//获得表单添加数据
				var message = $("textarea[name='mcontent']").val();
	
				if(message.length<5){
					alert("Words are too few! Please say something more!");
					return false;
				}
				
				if(message.length>60){
					alert("Message words exceed limitation");
					return false;
				}
				
				//封装当前信息
				var data = $(form).serialize(); //form表单数据串行化
	
				//执行ajax
				$.ajax({
					url:"__APP__/Umessage/doinsert",
					type:"post",
					data:data,
					dataType:"text",
					success:function(res){
						if(res=="nologin"){
							alert("Please log in first");
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
							alert("Add failed. Please add it again!");
						}
					}
				});
				
				return false;
			}
			
			//定义回复留言方法
			function replymess(form){
				//获得表单添加数据
				var message = $("textarea[name='rcontent']").val();
				var rid = $("input[name='rid']").val();
				
				if(message.length<1){
					alert("Words are too few. Please say something more!");
					return false;
				}
				
				if(message.length>70){
					alert("Words number exceed maximum limitation");
					return false;
				}
				
				//封装当前信息
				var data = $(form).serialize(); //form表单数据串行化
	
				//执行ajax
				$.ajax({
					url:"__APP__/Umessage/replymess",
					type:"post",
					data:data,
					dataType:"text",
					success:function(res){
						if(res=="nologin"){
							alert("You can't reply message not given to yours");
							return false;
						}
						
						if(res=="true"){
							//1 清空缓存
							tmp_data = new Array();
							
							//2 重载列表
							doload(0);
							
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
						url:"__APP__/Umessage/rdoload",
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
						str += "<div class='rcontent' style='background-color: #FFFFFF;'>"+rdata[i].addtime+" - 【"+rdata[i].username+"】 Reply 【"+rdata[i].busername+"】Content: "+rdata[i].rcontent+"<a href='javascript:rereply("+rdata[i].rid+","+rdata[i].uid+")'>Reply</a></div>";
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
					$(".replydivdis").html("<div class='nobody'>No one reply this message</div>");
				}

			}
			
			//定义回复留言回复函数
			function rereply(rid,bid){
				$("#alert_review_bg").css({ display:"block"});
				$("#words_edit").css({ display:"block",top:$(window).scrollTop()+100+"px"});
				$("input[name='rid']").val(rid);
				$("input[name='bid']").val(bid);
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
					
					<!-- 日志评论表单部分 -->
					
					<div class="diary_message">
						<p id="js_message_p">Leave message to care about him/her.</p>
						<form onsubmit="return doreply(this)">
							<input type="hidden" name="uid1" value="<?php echo $_GET['uid'];?>
" />
							<textarea rows="6" cols="65" name="mcontent" id="js_message_textarea"></textarea>
							<input class="sub" type="submit" value="leave message">
						</form>
					</div>
					<div class="nav"></div>	
					
					<!-- 日志评论列表部分 -->
					<div class="diaryreply_list">
						<div class="diaryreply_head">
							<span>Message Wall</span>
							<a class="say">look at what others' comments</a>
						</div>
					
						<div class="diaryreply_content">
							
						</div>
						<div class="fenye">
							<a href="javascript:doload(1)">Next Page</a>&nbsp;<a href="javascript:doload(-1)">Last Page</a>&nbsp;<span id="pageinfo">No Data</span>
						</div>
					</div>

				</div>
			</div>	
		</div>
		
		<script type="text/javascript">
			//发布框js
			var oP = document.getElementById("js_message_p");
			var oT = document.getElementById("js_message_textarea");
				
			var ie = !-[1,];
			var bBtn = true;
			var timer = null;
			var iNum = 0;
			//获取焦点事件
			oT.onfocus = function(){
				if(bBtn){
					oP.innerHTML = "<a>You can still enter</a><span id='textnum'>60</span>words";
				}
				
			};
			//失去焦点事件
			oT.onblur = function(){
				
				if(oT.value==''){
					oP.innerHTML = 'Say something';
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
				
				if(num<=60){
					opa.innerHTML="You can still enter";
					oSpan.innerHTML = 60 - num;
					oSpan.style.color = '#d20000';
				}else{
					opa.innerHTML="have exceeded";
					oSpan.innerHTML = num-60;
					oSpan.style.color = 'red';
				}
				
			}
			//获取字符的长度转换汉字进制数
			function getLength(str){
				return String(str).replace(/[^\x00-\xff]/g,'aa').length;
			}
		</script>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<div  id="alert_review_bg"></div>
			<div id="words_edit">
				<img src="__PUBLIC__/front/images/close.jpg" alt="close" />
				<div class="atitle" id="umess">
					Do you have some opinions about what he/she commented?
				</div>
				<div class="acon">
				<form onsubmit="return replymess(this)">
					<input type="hidden" name="selfid" value="<?php echo $_GET['uid'];?>
" />
					<input type="hidden" name="rid" value="" />
					<input type="hidden" name="bid" value="" />
					<textarea name="rcontent" id="text" style="resize:none;" cols="70" rows="10" ></textarea>
					<input type="submit" value="reply messages" class="wsub"/>
				</form>
				</div>		
			</div>
		<script type="text/javascript">
			//发布框js
			var uoP = document.getElementById("umess");
			var uoT = document.getElementById("text");
				
			var ie = !-[1,];
			var timer = null;
			var iNum = 0;
			//获取焦点事件
			uoT.onfocus = function(){
				uoP.innerHTML = "<a>You can still enter</a><span id='textnum'>70</span>words";
			};
			//失去焦点事件
			uoT.onblur = function(){
				
				if(uoT.value==''){
					uoP.innerHTML = 'Leave your message!';
				}
			};
			//进行ie兼容性判断
			if(ie){
				uoT.onpropertychange = toChange;
			}else{
				uoT.oninput = toChange;
			}
			//单个字符改变事件
			function toChange(){
				var num = Math.ceil(getLength(uoT.value)/2);
				var uoSpan = document.getElementById("textnum");
				var uopa=uoP.getElementsByTagName("a")[0];
				
				if(!uoSpan){ return}
				
				if(num<=70){
					uopa.innerHTML="You can still enter";
					uoSpan.innerHTML = 70 - num;
					uoSpan.style.color = '#d20000';
				}else{
					uopa.innerHTML="have exceeded";
					uoSpan.innerHTML = num-70;
					uoSpan.style.color = 'red';
				}
				
			}
			//获取字符的长度转换汉字进制数
			function getLength(str){
				return String(str).replace(/[^\x00-\xff]/g,'aa').length;
			}
		</script>	
			
			

		<!-- 发影评弹框页js -->
		<script type="text/javascript">
		//点击弹出div层
		function remessage(rid,bid){
			$("#alert_review_bg").css({ display:"block"});
			$("#words_edit").css({ display:"block",top:$(window).scrollTop()+100+"px"});
			$("input[name='rid']").val(rid);
			$("input[name='bid']").val(bid);	
		}
		
		$(function(){
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