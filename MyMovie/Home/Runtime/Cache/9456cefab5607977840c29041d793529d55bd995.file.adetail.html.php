<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 04:49:24
         compiled from "./Home/Tpl/Actor/adetail.html" */ ?>
<?php /*%%SmartyHeaderCode:1299384869553d4f54d3e8f5-87338617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9456cefab5607977840c29041d793529d55bd995' => 
    array (
      0 => './Home/Tpl/Actor/adetail.html',
      1 => 1387447604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299384869553d4f54d3e8f5-87338617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actor' => 0,
    'dialogue' => 0,
    'mtype' => 0,
    'vo' => 0,
    'num' => 0,
    'clicknum' => 0,
    'link' => 0,
    'l' => 0,
    'movie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d4f5503ffa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d4f5503ffa')) {function content_553d4f5503ffa($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
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
	<!-- head页头部分开始 -->
	
	<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	<!-- head页头部分结束 -->
		
		
		
		<!-- 主体部分开始	-->
		<div id="main">
			
			<!-- 左侧内容 -->
			<div id="detail_main_left">
				<!-- 演员详情 -->
				<div class="movie_detail">
					<div class="d_title">
						<?php echo $_smarty_tpl->tpl_vars['actor']->value['cname'];?>

					</div>
					<div class="d_left01">
						<img src="__ROOT__/__UPLOAD__/Actor/Photo/a_<?php echo $_smarty_tpl->tpl_vars['actor']->value['picname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['actor']->value['cname'];?>
" />
					</div>						
					<div class="d_left02">
						<ul>
							<li>中文名:<?php echo $_smarty_tpl->tpl_vars['actor']->value['cname'];?>
</li>
							<li>英文名:<?php echo $_smarty_tpl->tpl_vars['actor']->value['ename'];?>
</li>
							<li>性&nbsp;&nbsp;别: 
								<?php if ($_smarty_tpl->tpl_vars['actor']->value['sex']==0){?>女
								<?php }else{ ?>男
								<?php }?>
							</li>
							<li>星&nbsp;&nbsp;座: 
								<?php echo $_smarty_tpl->tpl_vars['actor']->value['constellation'];?>

							</li>
							<li>生&nbsp;&nbsp;日: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['actor']->value['birthday'],'%Y-%m-%d');?>
</li>
							<li>出生地: <?php echo $_smarty_tpl->tpl_vars['actor']->value['bornaddress'];?>
</li>
							<li>职&nbsp;&nbsp;业：<?php echo $_smarty_tpl->tpl_vars['actor']->value['professtion'];?>
</li>
						</ul>
					</div>					 
				</div>
				
				<div class="nav"></div>
				
				<!-- 演员简介 -->
				<div class="movie_plot">
					<div class="p_head">
						<?php echo $_smarty_tpl->tpl_vars['actor']->value['cname'];?>
的个人简介  ·  ·  ·  ·  ·  ·
					</div>
					<div class="p_content">
					<?php echo $_smarty_tpl->tpl_vars['actor']->value['intro'];?>

					</div>
			
				</div>
			
				<div class="nav"></div>
				<script type="text/javascript">
					//ajax请求分页函数
					var page=1;//页码
					var totalpage=0;//页大小
					var maxrows=0;//总数据
					var aid="<?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
";//获取电影id
					
					var tmp_data=new Array();//缓存数组
					function doPageLoad(m){
						page+=m;
						//判断是否有缓存 没有就加载
						if(tmp_data[page]==undefined){
							$.ajax({
								url:"__APP__/Detail/actorLoad",
								type:"get",
								data:{ aid:aid,p:page},
								dataType:"json",
								async:false,
								success:function(res){
									tmp_data[page]=res;
								}
							});
						}
						
						//遍历输出
						data=tmp_data[page]["list"];
						totalpage=tmp_data[page]["totalpage"];
						maxrows=tmp_data[page]["maxrows"];
						if(data!=null){
							var str="";
							for(var i=0;i<data.length;i++){
								
								str+="<div class='review_list'><div class='acthor'>";
								str+="<div class='l'><a href='__APP__/User/index/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].rtime+"</div>";	
								str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data[i].id+");'>举报</a></div></div>";
								str+="<div class='content'>"+data[i].content+"</div></div>";
							}
							
							//越界判断
							if(page>totalpage){
								page=totalpage;
							}
							if(page<1){
								page=1
							}
							
							$("#detail_main_left .movie_short_review .nobody").css("display","none");//隐藏提示
							$("#detail_main_left .movie_short_review .fy").css("display","block");//显示页码
							$("#ajax_shortreview_list").html(str);//添加数据
							$("#detail_main_left .movie_short_review .fy span").html(maxrows+" 条记录 "+page+"/"+totalpage+" 页 ");
						}
					}
					$(function(){
						//加载页面自动显示默认页
						doPageLoad(0);
					});
						
				</script>
					
				<script type="text/javascript">
					function doSreport(id){
						$.ajax({
							url:"__APP__/Detail/zreport",
							data:{ id:id},//演员回复id
							type:"get",
							dataType:"text",
							success:function(data){
								if(data==1){
									alert("举报成功！");
								}else{
									alert("出错了，休息会吧！");
								}
							}
						});
					 };
				</script>
				<div class="movie_short_review">
					<div class="review_head">
						<span><?php echo $_smarty_tpl->tpl_vars['actor']->value['cname'];?>
的评论  ·  ·  ·  ·  ·  ·</span>
						<a class="post">看看大家说了什么</a>
					</div>
					<!-- 短评列表 -->
					<div id="ajax_shortreview_list"></div>
					<div class="nobody">
						还没有人回复哦,快来抢占沙发吧！！！
					</div>
					<!-- 分页显示短评 -->
					<div class="fy">
					<span></span>
					<a href="javascript:doPageLoad(-1)">上一页</a>
					<a href="javascript:doPageLoad(1)">下一页</a>
					</div>
					
					<!-- 短评留言 -->
					<div class="message" id="js_message">
						<form action="" method="post" onsubmit="return false;">
							<p id="js_message_p">这里需要你的脚印......</p>
							<textarea name="message" id="js_message_textarea" cols="70" rows="6" style="resize:none;"></textarea>
							<button id="message_button" class="sub" />我来说两句</button>
						</form>
					</div>
				</div>	
				<script type="text/javascript">
					// 演员评论
					
					$(function(){
						var aid = <?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
;    // 演员ID
						var bBtn = true;
						var timer = null;
						var iNum = 0;
						// 文本输入框获取焦点
						$("#js_message_textarea").focus(function(){
							$("#js_message_p").html("风继续吹，不忍离去......<a>还可以输入</a><span>140</span>字");
							bBtn = false;
						});

						// 文本输入框失去焦点
						$("#js_message_textarea").focusout(function(){
							if ($("#js_message_textarea").val() == "") {
								$("#js_message_p").html("这里需要你的痕迹......");
								bBtn = true;
							};
						})

						// 限制文本输入框中字符数量
						jQuery.fn.maxLength = function(max,ele){
							this.each(function(){
								var type = this.tagName.toLowerCase();
								var inputType = this.type ? this.type.toLowerCase() : null;

								if (type == "input" && inputType == "text" || inputType == "password") {
									this.maxLength = max;
								} else if(type == "textarea"){
									this.onkeypress = function(e){
										var ev = e || event;
										var keyCode = ev.keyCode;
										return !(this.value.length >= max && (keyCode == 32 || keyCode == 13) && !ev.ctrlKey && !ev.altKey);
									};
									this.onkeyup = function(){
										if (this.value.length > max) {

											this.value = this.value.substring(0,max);
										}
										$("#"+ele).html(max - this.value.length);
									};
									this.onchange = this.onkeyup;
								};
							})
						}
						// 调用函数，文本输入框字数限制为140字，超出则截断
						$("#js_message_textarea").maxLength(140, "js_message_p span");

						// 发布按钮点击事件
						$("#message_button").click(function(){
							// 判断用户输入内容是否为空
							if ($.trim($("#js_message_textarea").val()) == "") {
								$("#js_message_textarea").val("").focus();
								alert("回复不能为空...");
							} else{
								// 如果回复内容不为空
								var aid = "<?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
";   // 演员ID
								var content = $("#js_message_textarea").val();
								$.ajax({
									url  : "__APP__/Detail/actorReview",
									data : { aid:aid,content:content },
									type : "post",
									dataType : "json",
									success:function(data){
										//用户没有登录提示
										if(data=="1"){
											alert("请先登录");
											return;
										}
										//添加失败
										if(data=="2"){
											alert("有点小问题，稍等一下！");
											return;
										}

										//回复成功 返回数组
										var str="";
										str+="<div class='review_list'><div class='acthor'>";
										str+="<div class='l'><a href='__APP__/User/index/uid/"+data.uid+"'>"+data.username+"</a>"+data.rtime+"</div>";	
										str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data.id+");'>举报</a></div></div>";
										str+="<div class='content'>"+data.content+"</div></div>";
										
										//回复成功 加载回复列表
										tmp_data=new Array();//清空缓存

										doPageLoad(0);
										//$("#detail_main_left .movie_short_review .review_head").after(str);
										$("#js_message_textarea").val("");//清空留言框短评内容
										
									}
								});
							};
						});
					});
						
				</script>	
				<div class="nav"></div>
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">
				<!-- 右侧经典台词 -->
				<div class="movie_word">
					<div class="word_title">
						经典台词
					</div>
					<div class="word_con">
						<p><?php echo $_smarty_tpl->tpl_vars['dialogue']->value['en_dialogue'];?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['dialogue']->value['cn_dialogue'];?>
</p>
					</div>
					<div class="source">
						《<?php echo $_smarty_tpl->tpl_vars['dialogue']->value['source'];?>
》
					</div>
				</div>
				
				<div class="nav"></div>
				
				<!--右侧分类列表 -->
				<div class="movie_sort">
					<div class="sort_head">
						影片分类
						<span style="float:right;padding-top:10px;"><a href="__APP__/Typelist/index">所有分类 >>></a></span>
					</div>
					<div class="sort_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
								<li><a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['typename'];?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				<!-- 口碑榜 -->
				<div class="movie_rank">
					<div class="rank_head">
						<span>MyMovie热评榜</span><!-- 
						<span style="float:right;padding-top:10px;"><a href="">更多榜单 >>></a></span> -->
					</div>
					<div class="rank_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li>
								<span style="display:inline-block; width:200px;"><a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a></span>
								<span style="display:inline-block; width:50px; color:#8CB5C3;">评论数：</span>
								<span style="color:#8CB5C3;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['replynum'];?>
</span>
							</li>
							<?php } ?>

							<!-- margin-left:120px;color:#8CB5C3; -->
							
						</ul>
					</div>
				</div>
				<div class="nav"></div>
				
				<!-- 电影top10-->
				<!-- 电影top10-->
				<div class="movie_top">
					<div class="top_head">
						<span>电影Top10 </span>
						<span style="float:right;padding-top:10px;"><a href="__APP__/List/movietop">更多 >>></a></span>
					</div>
					<div class="top_list">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clicknum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<li style="height:140px;">
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><img src="__ROOT__/__UPLOAD__/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="" /></a>
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['filmname'];?>
</a>
							</li>
							<?php } ?>
							
						</ul>
					</div>
				</div>
				
				<div class="nav"></div>
				
				<!-- 友情链接 -->
				<div class="movie_link">
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
			
		</div>
		
		<!-- 主体部分结束	-->
		
		<!-- 隐藏的弹框div -->
			
			<div  id="alert_review_bg"></div>
			<div id="words_edit">
				<img src="__PUBLIC__/front/images/close.jpg" alt="关闭" />
				<div class="atitle">
					向大家分享下你对这部电影的感受吧......
				</div>
				<div class="acon">
				<form action="__APP__/Review/insert/fid/<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
" method="post">
				
					标题:<input type="text" name="title" class="winput"/>
					<textarea name="content" id="text" style="resize:none;"   cols="70" rows="10" ></textarea>
	
					<input type="submit" value="发表影评" class="wsub"/>
				</form>
				</div>		
			</div>
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>