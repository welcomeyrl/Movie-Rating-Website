<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 15:28:27
         compiled from "./Home/Tpl/Detail/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:728582327553d3dfea0aac4-88859778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2660c348ed284db09b5b11583ed10374659245f6' => 
    array (
      0 => './Home/Tpl/Detail/detail.html',
      1 => 1430118591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728582327553d3dfea0aac4-88859778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d3dfee20bc',
  'variables' => 
  array (
    'movie' => 0,
    'alist' => 0,
    'tlist' => 0,
    'video' => 0,
    'plist' => 0,
    'reviewlist' => 0,
    'review' => 0,
    'dialogue' => 0,
    'mtype' => 0,
    'vo' => 0,
    'num' => 0,
    'clicknum' => 0,
    'link' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d3dfee20bc')) {function content_553d3dfee20bc($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		
		
		
		<!-- 编辑器文件导入 -->
		<script src="__PUBLIC__/dwz/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>		
		<script>
			$(function(){
				$("#text").xheditor({
					skin:'default',tools:'simple',
					upImgUrl:'__APP__/Review/upload',
					upImgExt:'jpg,jpeg,gif,png',
					html5Upload:false,
					width:800,
					height:280,
				});
			});
		</script>
		
	</head>
	<body>
	<!-- head页头部分开始 -->
	
	<?php echo $_smarty_tpl->getSubTemplate ("Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	<!-- head页头部分结束 -->
		
		
		
		<!-- 主体部分开始	-->
		<div id="main">
			
			<!-- 左侧内容 -->
			<div id="detail_main_left">
				<!-- 电影详情 -->
				<div class="movie_detail">
					<div class="d_title">
						<?php echo $_smarty_tpl->tpl_vars['movie']->value['filmname'];?>

					</div>
					<div class="d_left01">
						<img src="__ROOT__/Uploads/Movie/Cover/c_<?php echo $_smarty_tpl->tpl_vars['movie']->value['picname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value['filmname'];?>
" />
					</div>						
					<div class="d_left02">
						<ul>
							<li>Director:<?php echo $_smarty_tpl->tpl_vars['movie']->value['director'];?>
</li>
							<li>Screenwriter:<?php echo $_smarty_tpl->tpl_vars['movie']->value['editor'];?>
</li>
							<li>Starring: 
								<?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie']->value['actorlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value){
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
									<a href="__APP__/Detail/actor/id/<?php echo $_smarty_tpl->tpl_vars['alist']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['alist']->value['cname'];?>
</a>/
								<?php } ?>

							</li>
							<li>Genre: 
								<?php  $_smarty_tpl->tpl_vars['tlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie']->value['typelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tlist']->key => $_smarty_tpl->tpl_vars['tlist']->value){
$_smarty_tpl->tpl_vars['tlist']->_loop = true;
?>
									<a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['tlist']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tlist']->value['typename'];?>
</a>/
								<?php } ?>
							</li>
							<li>Country/Region: <?php echo $_smarty_tpl->tpl_vars['movie']->value['antion'];?>
</li>
							<li>Language: <?php echo $_smarty_tpl->tpl_vars['movie']->value['language'];?>
</li>
							<li>Showtime: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['movie']->value['showtime'],"%Y-%m-%d ");?>
(U.S.)</li>
							<li>Runtime: <?php echo $_smarty_tpl->tpl_vars['movie']->value['minutes'];?>
mins</li>
							<li>Alias:<?php echo $_smarty_tpl->tpl_vars['movie']->value['petname'];?>
</li>
						</ul>
					</div>
					
					<div class="d_right">
						<ul>

							<li>Scores: <span><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['movie']->value['score']);?>
 points</span></li>
							<li><a >(<?php echo $_smarty_tpl->tpl_vars['movie']->value['reviewtotal'];?>
persons' ratings)</a></li>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
							<li><a>My rating</a></li>
							<li id="pingfen">
								<ul>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</li>
						</ul>
					</div>
					<script type="text/javascript">
						var oPf=document.getElementById('pingfen');
						var aLi=oPf.getElementsByTagName('li');
						var i=0;
						
						for(i=0;i<aLi.length;i++){
							aLi[i].index=i;
							aLi[i].onmouseover=function(){
								for(i=0;i<aLi.length;i++){
									if(i<=this.index)
									{
										aLi[i].style.background="url(__PUBLIC__/front/images/star.gif) no-repeat 0 -29px";
									}
									else
									{
										aLi[i].style.background="url(__PUBLIC__/front/images/star.gif) no-repeat 0 0";
									}
								}
							};
							
							aLi[i].onmousedown=function ()
							{	//ajax评分操作
								//alert('提交成功:'+(this.index+1)+'分');
								var score=(this.index+1)*2;
								var fid="<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
";
								$.ajax({
									url:"__APP__/Detail/score",
									type:"get",
									data:{ fid:fid,score:score},
									dataType:"text",
									success:function(data){
										switch(data){
											case "4":alert_display_block(score+" points. Rating successfully！");break;
											case "1":alert_display_block("Please log in first!");break;
											case "2":alert_display_block("Can't score again！");break;
											case "3":alert_display_block("Please try it again！");break;
										}
									}
								});
							};
						}
					</script>

					<div class="d_down">
						<span ><t id="update_saw"><?php echo $_smarty_tpl->tpl_vars['movie']->value['onum'];?>
</t> ppl </span><button class="l" onclick="doSaw(<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
);">have watched</button>
						<span ><t id="update_see"><?php echo $_smarty_tpl->tpl_vars['movie']->value['snum'];?>
</t> ppl </span><button class="l" onclick="doSee(<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
);">want to watch</button>
						<span ><t id="update_collect"><?php echo $_smarty_tpl->tpl_vars['movie']->value['collectnum'];?>
</t> ppl </span><button href="" class="l c" onclick="doCollect(<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
)">collect</button>
						<span ><t id="update_praise"><?php echo $_smarty_tpl->tpl_vars['movie']->value['pnum'];?>
</t> ppl </span><button href="" class="l c" onclick="doPraise(<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
)">thumb</button>
						
						 <button class="r alert_post_review">write reviews</button>
					</div>
					 <script type="text/javascript">
					 //短评举报
					 function doSreport(id){
						$.ajax({
							url:"__APP__/Detail/sreport",
							data:{ id:id},//短评id
							type:"get",
							dataType:"text",
							success:function(data){
								if(data==1){
									alert_display_block("Report successfully!");
								}else{
									alert_display_block("Error!");
								}
							}
						});
					 }
					 
					 
					 //赞操作
					function doPraise(fid){
						$.ajax({
							url:"__APP__/Detail/dopraise",
							type:"post",
							data:{ fid:fid},
							dataType:"json",
							success:function(data){
								switch(data.stat){
									case 3:
										//更新页面想看数
										$("#update_praise").html(data.praisenum);
										alert_display_block("thumb up +1!");
									break;
									case 1:alert_display_block("Please log in first");break;
									case 2:alert_display_block("You have already thumb up!");break;
								}
							}
						});
					}
					 
					 //想看操作
					function doSee(fid){
						$.ajax({
							url:"__APP__/Detail/dosee",
							type:"post",
							data:{ fid:fid},
							dataType:"json",
							success:function(data){
								switch(data.stat){
									case 3:
										//更新页面想看数
										$("#update_see").html(data.seenum);
										$("#update_saw").html(data.sawnum);
										alert_display_block("Want to watch +1！");
									break;
									case 1:alert_display_block("Please log in first!");break;
									case 2:alert_display_block("We have already wanted to watch!");break;
								}
							}
						});
					}
					
					//看过操作
					function doSaw(fid){
						$.ajax({
							url:"__APP__/Detail/dosaw",
							type:"post",
							data:{ fid:fid},
							dataType:"json",
							success:function(data){
								switch(data.stat){
									case 3:
									//更新页面看过数
										$("#update_saw").html(data.sawnum);
										$("#update_see").html(data.seenum);
										alert_display_block("have watched!");
									break;
									case 1:alert_display_block("Please log in first!");break;
									case 2:alert_display_block("You have already watched!");break;
								}
							}
						});
					}
					 
					 
					 //收藏ajax操作
					function doCollect(fid){
						$.ajax({
							url:"__APP__/Detail/collect",
							type:"post",
							data:{ fid:fid},
							dataType:"text",
							success:function(data){
								switch(data){
									case "4":alert("Collect successfully！");
										//更新页面收藏数
										var tmp=$("#update_collect").html();
										tmp=parseInt(tmp)+1;
										$("#update_collect").html("");
										$("#update_collect").html(tmp);
									break;
									case "1":alert_display_block("Please log in first!");break;
									case "2":alert_display_block("Can't collect again!");break;
									case "3":alert_display_block("Please try to collect it again!");break;
								}
							}
						});
					}
					 </script>
					 
				</div>
				
				<div class="nav"></div>
				
				<!-- 电影剧情 -->
				<div class="movie_plot">
					<div class="p_head">
						<?php echo $_smarty_tpl->tpl_vars['movie']->value['filmname'];?>
's synopsis
					</div>
					<div class="p_content">
					<?php echo $_smarty_tpl->tpl_vars['movie']->value['content'];?>

					</div>
			
				</div>
				<div class="nav"></div>
				<?php if (!empty($_smarty_tpl->tpl_vars['video']->value['id'])){?>
				<div class="prevue_video">
					
					<div class="video_item">
						<div class="t"><a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" >trailers</a></div>
						<div class="c">
							<a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
">
							<img src="__ROOT__/Uploads/Prevue/b_<?php echo $_smarty_tpl->tpl_vars['video']->value['picname'];?>
"  />
							<img src="__PUBLIC__/front/images/play.jpg"  class="play"/>
							</a>
						<a href="__APP__/Prevue/play/id/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" class="gk">Watch Now</a>
						</div>
					</div>

				</div>
				<?php }?>
				<div class="nav"></div>
				
				<div class="relative_pic_title">
						Movie stills
				</div>
				<!--  影片相关图片 -->
				<div class="relative_pic" >
					
					<ul id="js_relative_pic">
						<?php  $_smarty_tpl->tpl_vars['plist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie']->value['piclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plist']->key => $_smarty_tpl->tpl_vars['plist']->value){
$_smarty_tpl->tpl_vars['plist']->_loop = true;
?>
							<li><img src="__ROOT__/Uploads/Movie/mPhotos/<?php echo $_smarty_tpl->tpl_vars['plist']->value['picname'];?>
" /></li>
						<?php } ?>
					</ul>
				</div>
				
			
				
				<!-- js	特效-->
				<script type="text/javascript">
					var ob=document.getElementById("js_relative_pic");
					var list=ob.getElementsByTagName("li");
					var minZindex=2;
					
						//1.布局转换
					for(i=0;i<list.length;i++)
					{
						list[i].style.left=list[i].offsetLeft+'px';
						list[i].style.top=list[i].offsetTop+'px';
					}
					
					for(i=0;i<list.length;i++)
					{
						list[i].style.position='absolute';
						list[i].style.margin='0';
					}
					
					
					for(var i=0;i<list.length;i++){
						list[i].onmouseover=function (){
							this.style.zIndex=minZindex++;
							startMove(this, { width: 200, height: 200, marginLeft: -50, marginTop: -50});
						};
						
						list[i].onmouseout=function (){
							startMove(this, { width: 100, height: 100, marginLeft: 0, marginTop: 0});
						};
					}
					
				</script>
			
			
				<div class="nav"></div>
				<script type="text/javascript">
					//ajax请求分页函数
					var page=1;//页码
					var totalpage=0;//页大小
					var maxrows=0;//总数据
					var fid="<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
";//获取电影id
					
					var tmp_data=new Array();//缓存数组
					function doPageLoad(m){
						page+=m;
						//判断是否有缓存 没有就加载
						if(tmp_data[page]==undefined){
							$.ajax({
								url:"__APP__/Detail/pageload",
								type:"get",
								data:{ fid:fid,p:page},
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
								str+="<div class='l'><a href='__APP__/User/index/uid/"+data[i].uid+"'>"+data[i].username+"</a>"+data[i].rtime+"</div>";	
								str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data[i].id+");'>Report</a></div></div>";
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
							$("#detail_main_left .movie_short_review .fy span").html(maxrows+" records  "+page+"/"+totalpage+" page ");
						}
					}
					$(function(){
						//加载页面自动显示默认页
						doPageLoad(0);
					});
						
				</script>
				
				<div class="movie_short_review">
					<div class="review_head">
						<span><?php echo $_smarty_tpl->tpl_vars['movie']->value['filmname'];?>
's review.</span>
						<a class="post">look at others' said</a>
					</div>
					<!-- 短评列表 -->
					<div id="ajax_shortreview_list"></div>
					<div class="nobody">
						No one reply yet. Come and grab the sofa!
					</div>
					<!-- 分页显示短评 -->
					<div class="fy">
					<span></span>
					<a href="javascript:doPageLoad(-1)">Last Page</a>
					<a href="javascript:doPageLoad(1)">Next Page</a>
					</div>
					
					<!-- 短评留言 -->
					<div class="message" id="js_message">
						<form action="" method="post" onsubmit="return false;">
							<p id="js_message_p">Leave your message</p>
							<textarea name="message" id="js_message_textarea" cols="70" rows="6" style="resize:none;"></textarea>
							<button id="message_button" class="sub" />Let me say</button>
						</form>
					</div>
					<script type="text/javascript">
						//发布框js
				
						var oDiv=document.getElementById("js_message")
						var oP = document.getElementById("js_message_p");
						var oT = document.getElementById("js_message_textarea");
						var oA = oDiv.getElementsByTagName('button')[0];
							
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
								oP.innerHTML = 'Please leave your message';
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
							
							if(num<10 || num>140){
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
								alert_display_block("Words should be between 10 to 140 words！");
							}else{
								var str=oT.value;
								//去除两侧的空白字符
								if($.trim(str)==""){
									alert_display_block("Words can't be empty！");
									return;
								}
								var fid="<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
";//影片id
								var content=$("#js_message_textarea").val();//短评内容
								
								//如果输入合法进行ajax请求
								$.ajax({
									url:"__APP__/Detail/insert",
									data:{ fid:fid,content:content},
									type:"post",
									dataType:"json",
									success:function(data){
										//用户没有登录提示
										if(data=="1"){
											alert_display_block("Please log in first!");
											return;
										}
										//添加失败
										if(data=="2"){
											alert_display_block("Please wait for a moment!");
											return;
										}
										//回复成功 返回数组
										var str="";
										str+="<div class='review_list'><div class='acthor'>";
										str+="<div class='l'><a href='__APP__/User/index/uid/"+data.uid+"'>"+data.username+"</a>"+data.rtime+"</div>";	
										str+="<div class='r'><span>&nbsp;&nbsp;</span><a href='javascript:doSreport("+data.id+");'>Report</a></div></div>";
										str+="<div class='content'>"+data.content+"</div></div>";
										
										//回复成功 加载回复列表
										tmp_data=new Array();//清空缓存
										doPageLoad(0);
										//$("#detail_main_left .movie_short_review .review_head").after(str);
										$("#js_message_textarea").val("");//清空留言框短评内容
										//清空数字计数
										if(oT.value==''){
											oP.innerHTML = 'Please leave your message!';
											bBtn = true;
										}
										
										
									}
								});
							}	
						};	
				
					</script>
				</div>	
				
				
				<div class="nav"></div>

				
				<!-- 最受欢迎的影评 -->
				<div class="movie_review">
					<div class="review_head">
						<span><?php echo $_smarty_tpl->tpl_vars['movie']->value['filmname'];?>
's reviews</span>
						<a href="__APP__/List/index/fid/<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
">more relative reviews</a>
						<button  class="post alert_post_review">Let me review movie</button>
					</div>
					<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviewlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>			
					<div class="review_list">
							
							<div class="title">
								<div class="user_pic">
									<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['review']->value['user']['id'];?>
"><img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['review']->value['user']['headpic'];?>
" alt="" width="40" height="40"/></a>
								</div>
								<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>

								</a> 
							</div>
							<div class="acthor">
								  <a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['review']->value['user']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['user']['username'];?>
 </a> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['ptime'],"%Y-%m-%d %H:%M:%S");?>

							</div>
							<div class="content">
								<?php echo $_smarty_tpl->tpl_vars['review']->value['content'];?>

							</div>
							<div class="point">
								<!-- <span>546/678&nbsp;&nbsp;有用</span> --><a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
">(<?php echo $_smarty_tpl->tpl_vars['review']->value['countreply'];?>
 persons replies)</a>
							</div> 	
					</div>
					<?php }
if (!$_smarty_tpl->tpl_vars['review']->_loop) {
?>
					<div class="nobody">
						No one reply! Come and grab first comment!
					</div>
					<?php } ?>		
				</div>
			
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">
				<!-- 右侧经典台词 -->
				<div class="movie_word">
					<div class="word_title">
						Classical Lines
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
						Movie Categories
						<span style="float:right;padding-top:10px;"><a href="__APP__/Typelist/index">All categories >>></a></span>
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
				<!-- 评论榜 -->
				<div class="movie_rank">
					<div class="rank_head">
						<span>Hot List</span><!-- 
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
								<span style="display:inline-block; width:50px; color:#8CB5C3;">Number of reviews</span>
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
				<div class="movie_top">
					<div class="top_head">
						<span>Top 10 Movies </span>
						<span style="float:right;padding-top:10px;"><a href="__APP__/List/movietop">More >>></a></span>
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
	<!--			<div class="movie_link">
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
			
		</div> -->
		
		<!-- 主体部分结束	-->
		
		<!-- 隐藏的弹框div -->
			
			<div  id="alert_review_bg"></div>
			<div id="words_edit">
				<img src="__PUBLIC__/front/images/close.jpg" alt="关闭" />
				<div class="atitle">
					Share with others how you feel about this movie
				</div>
				<div class="acon">
				<form action="__APP__/Review/insert/fid/<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
" method="post" onsubmit="return reviewJudge();">
				
					Title:<input type="text" name="title" class="winput"/>
					<textarea name="content" id="text" style="resize:none;"   cols="70" rows="10" ></textarea>
	
					<input type="submit" value="submit reviews" class="wsub"/>
				</form>
				</div>		
			</div>

			<!-- 发影评弹框页js -->
		<script type="text/javascript">
		//发布影评内容可标题不可以为空
		function reviewJudge(){
			
			if($('#words_edit .winput').val()==""){
				alert_display_block("Title can't be empty!");
				return false;
			}
			if($('#text').val()==""){
				alert_display_block("Must write some words!");
				return false;
			}
			return true;
		}
		
		
		
		$(function(){
			//获取屏幕的宽高		
			
			var w=($(window).outerWidth()-$("#words_edit").width())/2;
			var h=($(window).outerHeight()-$("#words_edit").height())/2;
			var userid="<?php echo $_SESSION['loginuser'];?>
";
			
			//点击弹出div层
			$(".alert_post_review").click(function(){
				if(userid==""){
					alert_display_block("Please log in first!");
					return;
				}
				$("#alert_review_bg").fadeIn("normal");
				$("#words_edit").slideDown("normal").css({ top:$(window).scrollTop()+h+"px",left:w+"px"});
			});
			
			//点击关闭隐藏div层
			$("#words_edit img").click(function(){	
				$("#alert_review_bg").fadeOut("normal");
				$("#words_edit").fadeOut("normal");
			});
			
			//滚动窗滚动跟随滚动
			$(window).scroll(function(){
				$("#alert_review_bg").css({ top:$(window).scrollTop()+"px"});
				$("#words_edit").css({ top:$(window).scrollTop()+h+"px"});
			});
			
			
		});
		</script>
		
		
		<div class="nav"></div>
		
		<!-- 页脚部分开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页脚不封结束 -->
		
		
	</body>
</html><?php }} ?>