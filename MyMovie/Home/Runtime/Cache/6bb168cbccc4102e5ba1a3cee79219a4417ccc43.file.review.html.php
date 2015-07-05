<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:21:56
         compiled from "./Home/Tpl/Review/review.html" */ ?>
<?php /*%%SmartyHeaderCode:815777951553d5d8623c143-54831214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb168cbccc4102e5ba1a3cee79219a4417ccc43' => 
    array (
      0 => './Home/Tpl/Review/review.html',
      1 => 1430117218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815777951553d5d8623c143-54831214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d5d864a7ea',
  'variables' => 
  array (
    'review' => 0,
    'typename' => 0,
    'actors' => 0,
    'reviewlist' => 0,
    'relist' => 0,
    'link' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d5d864a7ea')) {function content_553d5d864a7ea($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 个人中心菜单结束 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		
		<!-- 主体部分开始	-->
		<div id="main">
		
			<!-- 左侧内容 -->
			<div id="review_main_left">
				<script type="text/javascript">
					//长评举报
					 function doLreport(id){
						$.ajax({
							url:"__APP__/Detail/lreport",
							data:{ id:id},//短评id
							type:"get",
							dataType:"text",
							success:function(data){
								if(data==1){
									alert_display_block("Report Successfully!");
								}else{
									alert_display_block("Error!");
								}
							}
						});
					 }
				</script>
				<!-- 影评内容 -->
				<div class="movie_review_detail">
					<div class="title">
						<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>

					</div>
					<div class="author">
						<div class="pic">
							<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['review']->value['user']['headpic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['review']->value['user']['username'];?>
" width="30" height="30"/>
						</div>
						<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['review']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['user']['username'];?>
</a>
						<span>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['ptime'],"%Y-%m-%d %H:%M:%S");?>

						</span>
						<a href="javascript:doLreport(<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
);" class="r">Report</a>
						<a href="javascript:doDel(<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
);" class="r deledit">Delete</a>
						<a href="javascript:doEdit(<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
);" class="r deledit">Edit</a>
					</div>
					<div class="re_detail">
						<?php echo $_smarty_tpl->tpl_vars['review']->value['content'];?>

					</div>
				</div>
				
				<div class="nav"></div>
				
				<!-- 影评留言框 -->
				<div class="message" id="js_message">
					<p id="js_message_p">Leave your reviews</p>
					<form action="" method="post" onsubmit="return false;">
						<textarea name="message"  cols="65" rows="6"></textarea>
						<input type="submit"  value="Reply" id="de_review_input" class="sub" style="float:right;margin-right:50px;"/>
					</form>
				</div>
				<script type="text/javascript">
						//删除
						function doDel(id){
							
								$.ajax({
									url:"__APP__/Review/judge",
									type:"get",
									data:{ id:id},
									dataType:"text",
									success:function (data){
										switch(data){
											case "1":
												alert_display_block("Can't delete others' reviews!");
												break;
											case "2":
												if(confirm("Are you sure to delete it?")){
													window.location="__APP__/Review/del/id/"+id;
												}
												break;
										}
									}
								});
							
							
						}
						function doEdit(id){
							$.ajax({
								url:"__APP__/Review/judge",
								type:"get",
								data:{ id:id},
								dataType:"text",
								success:function (data){
									switch(data){
										case "1":
											alert_display_block("Can't edit others' reviews!");
											break;
										case "2":
											window.location="__APP__/Review/edit/id/"+id;
											break;
									}
								}
							});
						}
				
						//发布框js
				
						var oDiv=document.getElementById("js_message")
						var oP = document.getElementById("js_message_p");
						var oT = document.getElementsByTagName("textarea")[0];
						var oA = oDiv.getElementsByTagName('input')[0];
							
						var ie = !-[1,];
						var bBtn = true;
						var timer = null;
						var iNum = 0;
						//获取焦点事件
						oT.onfocus = function(){
							if(bBtn){
								oP.innerHTML = "<a>You can still enter</a><span>140</span>words";
								bBtn = false;
							}
							
						};
						//失去焦点事件
						oT.onblur = function(){
							
							if(oT.value==''){
								oP.innerHTML = 'Leave your messages';
								bBtn = true;
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
							var oSpan = oDiv.getElementsByTagName('span')[0];
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
							
							if(oT.value=='' || num>140){
								oA.className = 'sub';
							}else{
								oA.className = '';
							}
							
						}
						//获取字符的长度转换汉字进制数
						function getLength(str){
							return String(str).replace(/[^\x00-\xff]/g,'aa').length;
						}
						//点击事件
						oA.onclick = function(){		
							if(this.className == 'sub'){
								alert_display_block("Words number is wrong!");
							}else{
								var str=oT.value;
								//去除两侧的空白字符
								if($.trim(str)==""){
									alert_display_block("Can't be empty!");
									return;
								}
							
								var rid="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
";//影评id
								var content=$("#js_message_textarea").val();//短评内容
								var message=$("textarea[name=message]").val();
								
								if(message.length<10){
									alert_display_block("Can't less than 10 characters");
									return false;
								}	
								$.ajax({
									url:"__APP__/Review/rinsert",
									data:{ content:message,rid:rid},
									type:"post",
									dataType:"json",
									success:function(data){
										if(data.error==1){
											alert_display_block("Please log in first");
											return;
										}
										var str="<div class='review_list' id='rplist"+data.id+"'>";
										str+="<div class='acthor'>";
										str+="<div class='l'>";
										str+="<a href='__APP__/User/Index/uid/"+data.uid+"'>"+data.username+"</a>"+data.rtime;
										str+="</div><div class='r'>";
										str+="<a href='javascript:delReply("+data.id+");'>delete</a></div></div>";
										str+="<div class='content'>"+data.content+"</div></div>";
										//清空表单
										$("#review_main_left .message textarea").val("");
										if(oT.value==''){
											oP.innerHTML = 'Leave your messages';
											bBtn = true;
										}
										
										$("#review_main_left .movie_review_reply .nobody").css("display","none");
										
										//更新内容 添加成功后刷新列表
										tmp_data=new Array();
										doPageLoad(0);
										$("#review_main_left .movie_review_reply .fy").css("display","block");//显示分页
									}
								});
										
										
							}
						}

					</script>
				
				
				<div class="nav"></div>
		
			
				<div class="movie_review_reply">
					<!-- 影评回复列表 -->
					<div class="review_head">
						<span>Message Wall</span>
						<a class="post">Look at what others' said</a>
					</div>
					
					<!-- ajax回复列表 -->
					<script type="text/javascript">
					var id="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
";//影片id
					var page=1;//当前页号
					var totalpage=0;//页总数
					var maxrows=0;//总数
					var tmp_data=new Array();//缓存数组
					//加载分页函数
					function doPageLoad(m){
						//如果为0 跳到首页
						page+=m;
						//ajax请求 开启缓存会报错
						if(tmp_data[page]==undefined){
							$.ajax({
								url:"__APP__/Review/pageload",
								data:{ p:page,id:id},
								type:"get",
								async:false,//设置同步
								dataType:"json",
								success:function(res){
									tmp_data[page]=res;
									
									
								}
							});
						}
						
						data=tmp_data[page]["list"];	
						totalpage=tmp_data[page]["totalpage"];
						maxrows=tmp_data[page]["maxrows"];
						if(data!=null){
							
							var str="";
							for(var i=0;i<data.length;i++){
								str+="<div class='review_list' id='rplist"+data[i].id+"'>";
								str+="<div class='acthor'>";
								str+="<div class='l'>";
								str+="<a href='__APP__/User/Index/uid/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].rtime;
								str+="</div><div class='r'>";
								str+="<a href='javascript:delReply("+data[i].id+");'>delete</a></div></div>";
								str+="<div class='content'>"+data[i].content+"</div></div>";
							}
							//防止越界
							if(page>totalpage){
								page=totalpage;
							}
							if(page<1){
								page=1;
							}
							//有数据就隐藏提示
							if(data.length>0){
								$("#review_main_left .movie_review_reply .nobody").css("display","none");
							}
							
							//显示页码
							$("#review_main_left .movie_review_reply .fy").css("display","block");
							$("#ajax_page_show").html("The&nbsp;"+page+"/"+totalpage+"&nbsp;Page&nbsp;has "+maxrows+" records");
							$("#ajax_reply_list").html(str);
						}else{
								$("#ajax_reply_list").html("");//防止str没有数据时报错
								$("#review_main_left .movie_review_reply .nobody").css("display","block");
								$("#review_main_left .movie_review_reply .fy").css("display","none");
						}
						
						
					}
					//显示当前页面
					$(function(){
						doPageLoad(0);
					});
					
					//删除回复信息 ajax请求
						function delReply(id){
							if(confirm("Are you sure to delete?")){
								$.ajax({
									url:"__APP__/Review/delete",
									datatype:"text",
									data:{ id:id},
									type:"post",
									success:function(data){
										if(data=="true"){
											//删除一次清除缓存 防止页面刷新无效
											tmp_data=new Array();
											doPageLoad(0);
											
										}else{
											alert_display_block("You have no right to operate!");
										}
										
									},
									error:function(){
										alert_display_block("Delete failed. Please try it again!");
									}
								});
							}
						}
					</script>
					<div id="ajax_reply_list"></div>
					
					<div class="nobody">
						No one reply yet. Come and grab the sofa!
					</div>
					

					
					<!-- 分页显示短评 -->
					<div class="fy">
						<a id="ajax_page_show"></a>
						
						<a href="javascript:doPageLoad(-1);">Last Page</a>
						<a href="javascript:doPageLoad(1);">Next Page</a>
					
					</div>
					
					
				</div>	
				
				
				<div class="nav"></div>
			
			</div>
			
			<!-- 右侧内容 -->
			<div id="review_main_right">
				<!-- 右侧经典台词 -->
				<div class="movie_alert">
		<!--			<div class="word_title">
						Warm Prompt
					</div> -->
				<!--	<div class="word_con">
						本评论版权属于作者<?php echo $_smarty_tpl->tpl_vars['review']->value['username'];?>
，并受法律保护。除非评论正文中另有声明，未经合法书面许可任何人不得转载或使用整体或任何部分的内容。特此提示。
					</div>  -->
				</div>
				
				<div class="nav"></div>
				
				<!-- 评论的影片信息 -->
				<div class="relative_movie">
					<ul>
						<li class="ut"><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['id'];?>
">><?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['filmname'];?>
</a></li>
						<li><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['id'];?>
"><img src="__ROOT__/Uploads/Movie/Cover/c_<?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['picname'];?>
" alt="" /></a></li>
						<li>Showtime: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['movie']['showtime']," %Yyear ");?>
</li>
						<li>
							<?php  $_smarty_tpl->tpl_vars['typename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['typename']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['review']->value['movie']['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['typename']->key => $_smarty_tpl->tpl_vars['typename']->value){
$_smarty_tpl->tpl_vars['typename']->_loop = true;
?>
								<?php echo $_smarty_tpl->tpl_vars['typename']->value['typename'];?>
/
							<?php } ?>
						</li>
						<li>Director:<?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['director'];?>
</li>
						<li>Starring: 
							<?php  $_smarty_tpl->tpl_vars['actors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['review']->value['movie']['actors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actors']->key => $_smarty_tpl->tpl_vars['actors']->value){
$_smarty_tpl->tpl_vars['actors']->_loop = true;
?>
								<a href="aid/<?php echo $_smarty_tpl->tpl_vars['actors']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['actors']->value['cname'];?>
</a>/
							<?php } ?>
						</li>
						
						<li class="ut"><a href="__APP__/List/index/id/<?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['id'];?>
">More <?php echo $_smarty_tpl->tpl_vars['review']->value['movie']['filmname'];?>
 Reviews</a></li>
					</ul>
					<ul class="relative_review">
						<?php  $_smarty_tpl->tpl_vars['relist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviewlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relist']->key => $_smarty_tpl->tpl_vars['relist']->value){
$_smarty_tpl->tpl_vars['relist']->_loop = true;
?>
						<li class="retop"><a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['relist']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['relist']->value['title'];?>
</a></li>
						<li>From <?php echo $_smarty_tpl->tpl_vars['relist']->value['username'];?>
</li>
						<?php } ?>
					</ul>
				</div>
	
				<div class="nav"></div>
				
				<!-- 友情链接 -->
		<!--		<div class="movie_link">
					<div class="link_head">
						<span>友情链接</span>
					</div>
					<div class="link_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['l']->value['url'];?>
"><img src="__ROOT__/Uploads/News/mypic/c_<?php echo $_smarty_tpl->tpl_vars['l']->value['picname'];?>
"/></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
			</div>
			
		</div>  -->
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>