<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 13:53:47
         compiled from "./Home/Tpl/User/index.html" */ ?>
<?php /*%%SmartyHeaderCode:346917966553d7099b65253-02146310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d7ed10b10956fb8ad78715a5082591e19f5ffa' => 
    array (
      0 => './Home/Tpl/User/index.html',
      1 => 1430104878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346917966553d7099b65253-02146310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d709a07b86',
  'variables' => 
  array (
    'vo' => 0,
    'myfriendlist' => 0,
    'myfriend' => 0,
    'photolist' => 0,
    'vp' => 0,
    'mytypes' => 0,
    'vlist' => 0,
    'visitor' => 0,
    'birthdaylist' => 0,
    'birday' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d709a07b86')) {function content_553d709a07b86($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/MyMovie/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>My Movie - User Space</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript">
			//定义发布心情函数
			function doreply(form){
				//获得表单添加数据
				var message = $("textarea").val();
	
				if(message.length<1){
					alert("At least say something");
					return false;
				}
				
				if(message.length>70){
					alert("Can't exceed 70 words");
					return false;
				}
	
				//执行ajax
				$.ajax({
					url:"__APP__/Pmood/doinsert",
					type:"post",
					data:{ content:message},
					dataType:"text",
					success:function(res){
						if(res=="nologin"){
							alert("Please log in first");
							return false;
						}
						
						if(res=="true"){
							form.reset();
							$("#mytextcontent").html(message);
							$("#js_message_p").html("Leave message now");
							$("#js_message_textarea").html("");
						}else{
							alert("Add failed. Please try it again!");
						}
					}
				});
				return false;
			}
			
			//定义关注函数
			function doatt(bid){
				//执行Ajax
				$.ajax({
					url:"__APP__/Friend/doatt",
					type:"get",
					data:{ bid:bid},
					dataType:"text",
					success:function(res){
						if(res == "nologin"){
							alert("Please log in first!");
							return false;
						}else if(res == "self"){
							alert("Can't add yourself!");
							return false;
						}else if(res == "already"){
							alert("You have already add this friend!");
						}else if(res == "true"){
							alert("Add successfully");
							$("#gzbut").html("<a href='javascript:noatt(<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
)' >Ignore him/her</a>");
						}else{
							alert("Can't add");
						}
					},
					error:function(){
						alert("Can't add");
					}
					
				});
			}
			
			//定义取消关注函数
			function noatt(bid){
				//执行Ajax
				if(confirm("Are you sure to unfollow?")){
					$.ajax({
						url:"__APP__/Friend/noatt",
						type:"get",
						data:{ bid:bid},
						dataType:"text",
						success:function(res){
							if(res == "nologin"){
								alert("Please log in first");
								return false;
							}else if(res == "true"){
								alert("Unfollow successfully");
								$("#gzbut").html("<a href='javascript:doatt(<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
)'>Follow him/her</a>");
							}else{
								alert("He/she is not your friend now");
							}
						},
						error:function(){
							alert("He/she is not your friend now");
						}
					});
				}

			}
		</script>
	</head>
	<body>
		<!-- 页头开始 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/uhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- 页头结束 -->
		
		<div class="nav"></div>
		
		<!-- 主体部分开始	-->
		<div id="pmain">
		
			<!-- 左侧内容 -->
			<div id="pmain_left">
				<!-- 左侧心情签名 -->
				<div id="psign">
					<div id="psmallimg">
						<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
" />
					</div>
					<div id="ptext">
						<div id="mytext">
							<span id="mytexttitle">Personalized Signature：</span>
							<?php if ($_smarty_tpl->tpl_vars['vo']->value['pmood'][0]['content']!=null){?>
								<span id="mytextcontent"><?php echo $_smarty_tpl->tpl_vars['vo']->value['pmood'][0]['content'];?>
<span>
							<?php }else{ ?>
								<span id="mytextcontent" style="color:#ccc;">Come and record your first mood<span>
							<?php }?>
						</div>
						<?php if ($_GET['uid']==$_SESSION['loginuser']['id']){?>
							<form onsubmit="return doreply(this)">
							<p id="js_message_p">Leave your message now</p>
								<div id="psignarea">
									<textarea rows=2 cols=63 id="js_message_textarea"></textarea>
								</div>
								<div id="psignbut">
									<input type="submit" class="btn-submit" value="submit mood"></button>
								</div>
							</form>
						<?php }?>
					</div>
				</div>
				<!-- 左侧当前用户最新影评 -->
				<div class="plist">
					<div class="plist_title">Latest Reviews</div>
					<div class="review_list">
						<?php if ($_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['filmname']==null){?>
							<div class="nothing">Add your first review</div>
						<?php }else{ ?>
							<div class="rl">
								<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['id'];?>
" target="_blank">
									<img src="__ROOT__/Uploads/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['picname'];?>
" />
								</a>
							</div>
							<div class="rr">
								<div class="title">
									<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['id'];?>
" target="_blank">
										<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['title'];?>

									</a>
									<span class="titletime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['ptime'],'%Y-%m-%d %H:%M:%S');?>
</span>
								</div>
								<div class="acthor">
									 <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 Comments: <a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['fid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['filmname'];?>
 </a>
								</div>
								<div class="content">
									<?php if ($_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['content']!="......"){?>
										<?php echo $_smarty_tpl->tpl_vars['vo']->value['longreview'][0]['content'];?>

									<?php }else{ ?>
										No review yet
									<?php }?>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
				
				<!-- 左侧当前用户最新短评 -->
				<div class="plist">
					<div class="plist_title">Latest Short Reviews</div>
					<div class="review_list">
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['picname']==null){?>
						<div class="nothing">Add your first short review</div>
					<?php }else{ ?>
						<div class="rl">
							<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['fid'];?>
" target="_blank">
								<img src="__ROOT__/Uploads/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['picname'];?>
" />
							</a>
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['fid'];?>
" target="_blank">
									Latest Short Reviews
								</a>
								<span class="titletime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['rtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
							</div>
							<div class="acthor">
								 <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 Comments: <a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['fid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['filmname'];?>
 </a>
							</div>
							<div class="content">
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['content']!=null){?>
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['shortreview'][0]['content'];?>

								<?php }else{ ?>
									No short review yet
								<?php }?>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				
				<!-- 左侧当前用户最新回复 -->
				<div class="plist">
					<div class="plist_title">Latest Replies</div>
					<div class="review_list">
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['picname']==null){?>
						<div class="nothing">Add your first reply</div>
					<?php }else{ ?>
						<div class="rl">
							<a href="__APP__/Detail/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['fid'];?>
" target="_blank">
								<img src="__ROOT__/Uploads/Movie/Cover/b_<?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['picname'];?>
" />
							</a>
						</div>
						<div class="rr">
							<div class="title">
								<a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['rid'];?>
">
								Latest replies
								</a>
								<span class="titletime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['rtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
							</div>
							<div class="acthor">
								 <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 Comments: <a href="__APP__/Review/index/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['rid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['retitle'];?>
 </a>
							</div>
							<div class="content">
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['content']!="......"){?>
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['reviewreply'][0]['content'];?>

								<?php }else{ ?>
									No reply yet
								<?php }?>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				
				<!-- 左侧当前用户最新日记 -->
				<div class="plist">
					<div class="plist_title">Latest Blogs</div>
					<div class="review_list">
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['diary'][0]['content']=="......"){?>
						<div class="nothing">Add your first blog</div>
					<?php }else{ ?>
						<div class="rl">
							<a href="__APP__/Diary/mydiary/uid/<?php echo $_GET['uid'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['diary'][0]['id'];?>
" target="_blank">
								<img src="__PUBLIC__/front/images/diary.jpg" />
							</a>
						</div>
					
						<div class="rr">
							<div class="title">
								<a href="__APP__/Diary/mydiary/uid/<?php echo $_GET['uid'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['diary'][0]['id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['vo']->value['diary'][0]['title'];?>

								</a>
								<span class="titletime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['diary'][0]['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
							</div>
							<div class="acthor">

							</div>
							<div class="content">
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['diary'][0]['content']!="......"){?>
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['diary'][0]['content'];?>

								<?php }else{ ?>
									No blog yet
								<?php }?>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				
				<!-- 左侧当前用户最新留言 -->
				<div class="plist">
					<div class="plist_title">Latest Messages</div>
					<div class="review_list">
					<?php if ($_smarty_tpl->tpl_vars['vo']->value['message'][0]['content']=="......"){?>
						<div class="nothing">Add your first message</div>
					<?php }else{ ?>
						<div class="rl">
							<a href="__APP__/Diary/mydiary/uid/<?php echo $_GET['uid'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['diary'][0]['id'];?>
" target="_blank">
								<img src="__PUBLIC__/front/images/message.jpg" />
							</a>
						</div>
					
						<div class="rr">
							<div class="title">
								<a href="__APP__/Umessage/index/uid/<?php echo $_GET['uid'];?>
/">
									Latest Messages
								</a> 
								<span class="titletime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['diary'][0]['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
							</div>
							<div class="acthor">
								 <?php echo $_smarty_tpl->tpl_vars['vo']->value['message'][0]['username'];?>
 Leave Mesaage:
							</div>
							<div class="content">
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['message'][0]['content']!="......"){?>
									<?php echo $_smarty_tpl->tpl_vars['vo']->value['message'][0]['content'];?>

								<?php }else{ ?>
									No message
								<?php }?>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				
				<!-- 左侧当前用户的好友 -->
				<div class="plist">
					<div class="plist_title">My Friend</div>
					<div>
						<div class="plist_content_pic">
							<?php  $_smarty_tpl->tpl_vars['myfriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['myfriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myfriendlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['myfriend']->key => $_smarty_tpl->tpl_vars['myfriend']->value){
$_smarty_tpl->tpl_vars['myfriend']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['myfriend']->value['id']!=$_GET['uid']){?>
									<a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['myfriend']->value['id'];?>
">
										<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['myfriend']->value['headpic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['myfriend']->value['username'];?>
" />
									</a>
								<?php }?>
							<?php } ?>
						</div>
					</div>
				</div>
				
				<!-- 左侧当前用户的相册 -->
				<div class="plist">
					<div class="plist_title">My Ablum</div>
					<div>
						<div class="plist_content_pic">
							<?php  $_smarty_tpl->tpl_vars['vp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photolist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vp']->key => $_smarty_tpl->tpl_vars['vp']->value){
$_smarty_tpl->tpl_vars['vp']->_loop = true;
?>
								<a href="__APP__/Uphotoalbum/albumdetail/uid/<?php echo $_GET['uid'];?>
/pid/<?php echo $_smarty_tpl->tpl_vars['vp']->value['id'];?>
">
									<img src="__ROOT__/Uploads/Photoalbum/Small/<?php echo $_smarty_tpl->tpl_vars['vp']->value['coverpic'];?>
" width="120" height="120"/>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
				
				
			</div>
			
			<!-- 右侧内容 -->
			<div id="pmain_right">
				<div class="pinfoboxtop">
					<p class="prighttitle"><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</p>
					
					<div id="rpic">
						<div id="psmallimg">
							<img src="__ROOT__/Uploads/User/Headpic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['headpic'];?>
" />
						</div>
					</div>
					
					<ul class="prightcc">
						<li>
							<em><?php echo $_smarty_tpl->tpl_vars['vo']->value['iattnum'];?>
</em>
							Following
						</li>
						<li>
							<em><?php echo $_smarty_tpl->tpl_vars['vo']->value['attmenum'];?>
</em>
							Followers
						</li>
						<li>
							<em><?php echo $_smarty_tpl->tpl_vars['vo']->value['hufennum'];?>
</em>
							Mutual Following
						</li>
					</ul>
					
	<!--				<div class="nav"></div>
					<p>积分：<?php echo $_smarty_tpl->tpl_vars['vo']->value['score'];?>
</p>
					<p>等级：<?php echo $_smarty_tpl->tpl_vars['vo']->value['levelname'];?>
</p>
				</div>  -->
				
				<?php if ($_GET['uid']!=$_SESSION['loginuser']['id']){?>
					<div class="ucaozuo">
						<p class="caozuotitle">Operation</p>
						
						<ul>
							<li id="gzbut">
								<?php if ($_smarty_tpl->tpl_vars['vo']->value['attstatus']!="true"){?>
									<a href="javascript:doatt(<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
)">Follow him/her</a>
								<?php }else{ ?>
									<a href="javascript:noatt(<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
)" >Ignore him/her</a>
								<?php }?>
							</li>
						</ul>
					</div>
				<?php }?>
				
				<div class="pinfobox">
					<p class="prighttitle">Personal Tag(<?php echo $_smarty_tpl->tpl_vars['vo']->value['mytypenum'];?>
)</p>
					
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mytypes']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['name'] = "vo";
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["vo"]['total']);
?>
							<li class="mytag"><a href="__APP__/Typelist/tags/id/<?php echo $_smarty_tpl->tpl_vars['mytypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vo']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mytypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vo']['index']]['typename'];?>
</a></li>
						<?php endfor; endif; ?>
					</ul>
				</div>
				
				<div class="pinfobox">
					<p class="prighttitle">Recent Vistors</p>
					
					<ul>
						<?php  $_smarty_tpl->tpl_vars['visitor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visitor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visitor']->key => $_smarty_tpl->tpl_vars['visitor']->value){
$_smarty_tpl->tpl_vars['visitor']->_loop = true;
?>
							<li class="mytag"><a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['visitor']->value['id'];?>
" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['visitor']->value['vtime'],'%Y-%m-%d %H:%M:%S');?>
"><?php echo $_smarty_tpl->tpl_vars['visitor']->value['visitorname'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
				
				<div class="pinfobox">
					<p class="prighttitle">Friends' Birthdays</p>
					
					<ul>
						<?php  $_smarty_tpl->tpl_vars['birday'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['birday']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['birthdaylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['birday']->key => $_smarty_tpl->tpl_vars['birday']->value){
$_smarty_tpl->tpl_vars['birday']->_loop = true;
?>
							<li class="mytag"><a href="__APP__/User/index/uid/<?php echo $_smarty_tpl->tpl_vars['birday']->value['id'];?>
" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['birday']->value['birthday'],'%Y-%m-%d');?>
"><?php echo $_smarty_tpl->tpl_vars['birday']->value['username'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
				
			</div>
			
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
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
					oP.innerHTML = "<a>You can still enter</a><span id='textnum'>70</span>words";
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
				
				if(num<=70){
					opa.innerHTML="You can still enter";
					oSpan.innerHTML = 70 - num;
					oSpan.style.color = '#d20000';
				}else{
					opa.innerHTML="have exceeded";
					oSpan.innerHTML = num-70;
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