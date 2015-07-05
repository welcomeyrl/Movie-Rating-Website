<?php /* Smarty version Smarty-3.1.6, created on 2014-09-15 09:43:03
         compiled from "./Home/Tpl\Newsdetail\movienewsdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:2435154164427afacd2-62877171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a5481386bedee65f18e2cf31d4fcc6c4a356a45' => 
    array (
      0 => './Home/Tpl\\Newsdetail\\movienewsdetail.html',
      1 => 1387422140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435154164427afacd2-62877171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'mpic' => 0,
    'mv' => 0,
    'mnew1' => 0,
    'i' => 0,
    'm1' => 0,
    'mnew2' => 0,
    'm2' => 0,
    'mnew3' => 0,
    'v3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_54164427e9e2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54164427e9e2c')) {function content_54164427e9e2c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\MyMovie\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/newsdetail.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
	</head>
	<body>
		<!-- 个人中心菜单开始 -->
		
		<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
		<!-- 个人中心菜单结束 -->
		
		<!-- 主体部分开始	-->
				<!-- 主体部分开始	-->
		<div id="main">
			<div id="m_top">
				您当前的位置：<a href="__APP__/News/news">新闻</a>>><?php echo $_smarty_tpl->tpl_vars['new']->value['title2'];?>

			</div>
			<!-- 左侧内容 -->
			<div id="main_left">
				<div id="ml_buttom">
					<div id="mlb_top">
						<div id="mlb_top1">
							<?php echo $_smarty_tpl->tpl_vars['new']->value['title2'];?>

						</div>
						<div id="mlb_top2">
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['addtime'],"%Y-%m-%d %H:%M");?>
 &nbsp;&nbsp;来源：<?php echo $_smarty_tpl->tpl_vars['new']->value['source'];?>
 &nbsp;&nbsp;作者：<?php echo $_smarty_tpl->tpl_vars['new']->value['author'];?>
 &nbsp;&nbsp;浏览次数：<?php echo $_smarty_tpl->tpl_vars['new']->value['looknum'];?>
次
						</div>
					</div>
					<div id="mlb_bottom">
						<?php echo $_smarty_tpl->tpl_vars['new']->value['content'];?>

					</div>
					<div id="mlb_bottom2">编辑：<?php echo $_smarty_tpl->tpl_vars['new']->value['edit'];?>
</div>
					<div id="main_left_bottom">
						<span>&nbsp;&nbsp;</span>
					</div>
				</div>
				<!-- 评论 -->
				<script type="text/javascript">
					//ajax请求分页函数
					var page=1;//页码
					var totalpage=0;//页大小
					var maxrows=0;//总数据
					var nid="<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
";//获取新闻id
					
					var tmp_data=new Array();//缓存数组
					function doPageLoad(m){
						page+=m;
						//判断是否有缓存 没有就加载
						if(tmp_data[page]==undefined){
							$.ajax({
								url:"__APP__/Newsdetail/mnewspage",
								type:"get",
								data:{ nid:nid,p:page},
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
								
								str+="<div class='review_list'><a href='__APP__/User/index/uid/"+data.uid+"'></a><div class='acthor'>";
								str+="<div class='l'><a href='__APP__/User/index/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].addtime+"</div>";	
								str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data[i].id+");'></a></div></div>";
								str+="<div class='content'>"+data[i].content+"</div></div>";
							}
							
							//越界判断
							if(page>totalpage){
								page=totalpage;
							}
							if(page<1){
								page=1
							}
							
							$("#main_left .movie_short_review .nobody").css("display","none");//隐藏提示
							$("#main_left .movie_short_review .fy").css("display","block");//显示页码
							$("#ajax_shortreview_list").html(str);//添加数据
							$("#main_left .movie_short_review .fy span").html(maxrows+" 条记录 "+page+"/"+totalpage+" 页 ");
						}
					}
					$(function(){
						//加载页面自动显示默认页
						doPageLoad(0);
					});
						
				</script>
				
				<div class="movie_short_review">
					<div class="review_head">
						
					</div>
					<!-- 短评列表 -->
					<div id="ajax_shortreview_list"></div>
					<!-- 分页显示短评 -->
					<div class="fy">
					<span></span>
					<a href="javascript:doPageLoad(-1)">上一页</a>
					<a href="javascript:doPageLoad(1)">下一页</a>
					</div>
					
					<!-- 短评留言 -->
					<div class="message" id="js_message">
						<form action="" method="post" onsubmit="return false;">
							<p id="js_message_p">说点什么......</p>
							<textarea name="message" id="js_message_textarea" cols="70" rows="6" style="resize:none;"></textarea>
							<button id="message_button" class="sub" />马上发表</button>
						</form>
					</div>
					<script type="text/javascript">
						//发布框js
				
						//发布框
						$(function(){
							var nid = <?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
;    // 新闻id
							var bBtn = true;
							var timer = null;
							var iNum = 0;
							// 文本输入框获取焦点
							$("#js_message_textarea").focus(function(){
								$("#js_message_p").html("<a>还可以输入</a><span>140</span>字");
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
									alert_display_block("回复不能为空...");
								} else{
									// 如果回复内容不为空
									var nid = "<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
";   // 新闻id
									var content = $("#js_message_textarea").val();
									$.ajax({
										url:"__APP__/Newsdetail/mnewscomment",
										data:{ nid:nid,content:content},
										type : "post",
										dataType : "json",
										success:function(data){
											//用户没有登录提示
											if(data=="1"){
												alert_display_block("请先登录");
												return;
											}
											//添加失败
											if(data=="2"){
												alert_display_block("评论失败，请重新评论！");
												return;
											}

											//回复成功 返回数组
											var str="";
											str+="<div class='review_list'><a href='__APP__/User/index/uid/"+data.uid+"'><div class='acthor'>";
											str+="<div class='l'><a href='__APP__/User/index/uid/"+data.uid+"'>"+data.username+"</a>"+data.addtime+"</div>";	
											str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data.id+");'></a></div></div>";
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
				</div>
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">
				<div id="mmr" style="overflow:hidden;">
					<?php  $_smarty_tpl->tpl_vars['mv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mpic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mv']->key => $_smarty_tpl->tpl_vars['mv']->value){
$_smarty_tpl->tpl_vars['mv']->_loop = true;
?>
					<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['mv']->value['id'];?>
"><img style="width:300px;height:250px;" src="__ROOT__/Uploads/News/article/b_<?php echo $_smarty_tpl->tpl_vars['mv']->value['pica'];?>
"/></a>
					<?php } ?>
				</div>
				<script type="text/javascript">
					//jquery的使用
					$(function(){
						doMove();
					});
					//定义移动信息
					function doMove(){
						//获取最后一个img节点对象
						var img=$("#mmr img:last");
						img.hide().prependTo("#mmr").slideDown(1500);
						//img.hide().prependTo("div").fadeIn(4000);
						setTimeout(doMove,4000);
					}
				</script>
				<div id="mr1">
					
					<!--每周和每月新闻排行的显示-->
					<script type="text/javascript">
						$(function(){
							$("#mrt3").click(function(){
								$("#mrp").css("display","block");
								$("#mrt3").css("background-color","#eee");
								$("#mrt3").css("color","#02bcf5");
								$("#mrb").css("display","none");
								$("#mrt2").css("background-color","#2a6881");
								$("#mrt2").css("color","#fff");
							});
							$("#mrt2").click(function(){
								$("#mrb").css("display","block");
								$("#mrt2").css("background-color","#eee");
								$("#mrt2").css("color","#02bcf5");
								$("#mrp").css("display","none");
								$("#mrt3").css("background-color","#2a6881");
								$("#mrt3").css("color","#fff");
							});
						});
						
					</script>
					<div id="mrt">
						<div id="mrt1">热门新闻TOP10</div>
						<div id="mrt3">月</div>
						<div id="mrt2">周</div>
					</div>
					<div id="mrb">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['m1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mnew1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m1']->key => $_smarty_tpl->tpl_vars['m1']->value){
$_smarty_tpl->tpl_vars['m1']->_loop = true;
?>
						<div class="mrb1">
							<span><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
<?php if ($_smarty_tpl->tpl_vars['i']->value==10){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php }?></span>
							<div class="mrb2">
								<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['m1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m1']->value['title2'];?>
</a>...
							</div>
						</div>
						<?php } ?>
					</div>
					<div id="mrp" style="display:none;">
						<?php  $_smarty_tpl->tpl_vars['m2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mnew2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m2']->key => $_smarty_tpl->tpl_vars['m2']->value){
$_smarty_tpl->tpl_vars['m2']->_loop = true;
?>
						<div class="mrb1">
							<span><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
<?php if ($_smarty_tpl->tpl_vars['i']->value==10){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php }?></span>
							<div class="mrb2">
								<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['m2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m2']->value['title2'];?>
</a>...
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<div id="mr2">
					<div class="mr_l">
						<span>精彩推荐</span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mnew3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
$_smarty_tpl->tpl_vars['v3']->_loop = true;
?>
					<div class="mr_center">
						<div class="mrc1">
							<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['v3']->value['id'];?>
"><img style="width:130px;height:100px;" src="__ROOT__/Uploads/News/article/b_<?php echo $_smarty_tpl->tpl_vars['v3']->value['pica'];?>
"/></a>
						</div>
						<div class="mrc3">
							<a href="__APP__/Newsdetail/newsdetail/id/<?php echo $_smarty_tpl->tpl_vars['v3']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v3']->value['title2'];?>
</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
				<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>