<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 07:12:15
         compiled from "./Home/Tpl/Uphotoalbum/add.html" */ ?>
<?php /*%%SmartyHeaderCode:810375454553d70cfe8abd2-43478370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9e4280c58a8fb4df51b90a46b3d22ddf9cc189' => 
    array (
      0 => './Home/Tpl/Uphotoalbum/add.html',
      1 => 1388192006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810375454553d70cfe8abd2-43478370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553d70d002ff1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d70d002ff1')) {function content_553d70d002ff1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>相册添加</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript">
			var __root__="__ROOT__";
		</script>
		<link href="__PUBLIC__/front/css/public.css" rel="stylesheet" type="text/css"/>
		<link href="__PUBLIC__/front/css/bo.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="__PUBLIC__/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/front/js/move.js"></script>
		<script type="text/javascript" src="__PUBLIC__/swfupload/swfupload.js"></script>
		<script type="text/javascript" src="__PUBLIC__/swfupload/bopic.js"></script>
		
		
		
		<script type="text/javascript">
			var swfu;
			window.onload = function () {
				swfu = new SWFUpload({
					// Backend Settings
					upload_url: "__APP__/Uphotoalbum/doupload",
					post_params: { "PHPSESSID": "<?php echo session_id();?>
"}, //定义了一些键/值对，允许在上传每个文件时候捎带地post给服务器

					// File Upload Settings
					file_size_limit : "2 MB",	// 2MB 特殊值0表示文件大小无限
					file_types : "*.jpg;*.gif", // 类型
					file_types_description : "JPG Images",  //设置文件选择对话框中显示给用户的文件描述。
					file_upload_limit : 0, //设置SWFUpload实例允许上传的最多文件数量

					// 事件处理程序设置，这些函数的定义在handlers.js
					// 该处理程序不属于SwfUpload但是我的网站和控制
					// 我的网站到SwfUpload事件的反应。
					swfupload_preload_handler : preLoad,		//预加载上传处理程序
					swfupload_load_failed_handler : loadFailed, //当页面不能正常加载flash影片的时候
					file_queue_error_handler : fileQueueError,			//fileQueueError事件侦听函数(加入文件上传队列错误)
					file_dialog_complete_handler : fileDialogComplete,  //fileDialogComplete事件侦听函数（加入文件队列完成后）
					upload_progress_handler : uploadProgress,	//由flash控件定时触发,以达到及时显示上传进度的效果
					upload_error_handler : uploadError,			//文件失败成功后触发的事件处理函数
					upload_success_handler : uploadSuccess,		//文件上传成功后触发的事件处理函数
					upload_complete_handler : uploadComplete, 	//上传（无论成功还是失败）一个后触发的事件处理函数

					// Button Settings
					button_image_url : "__PUBLIC__/swfupload/images/SmallSpyGlassWithTransperancy_17x18.png",
					button_placeholder_id : "spanButtonPlaceholder",
					button_width: 180,
					button_height: 18,
					button_text : '<span class="button">选择照片<span class="buttonSmall"> &nbsp;(最大2 MB)</span></span>',
					button_text_style : '.button { font-family: Helvetica, Arial, sans-serif; color: #FFFFFF; font-weight: bold; font-size: 14pt; } .buttonSmall { color: #ccc;font-size: 12pt; }',
					button_text_top_padding: 0,
					button_text_left_padding: 18,
					button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
					button_cursor: SWFUpload.CURSOR.HAND,
					
					// Flash Settings
					flash_url : "__PUBLIC__/swfupload/swfupload.swf",
					flash9_url : "__PUBLIC__/swfupload/swfupload_FP9.swf",

					custom_settings : {
						upload_target : "divFileProgressContainer"
					},
					
					// Debug Settings
					debug: false
				});
			};
			
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
					<div class="prlist_title">相册添加</div>
					
					<!-- 心情评论列表部分 -->
					<div class="diaryreply_list">
						<div class="diaryreply_head">
							<span>记录精彩瞬间......</span>
							<a class="say">把美好定格到永远</a>
						</div>
					
						<div class="diaryreply_content">
							<form>
								<div id="buttonforchoose">
									<span id="spanButtonPlaceholder"></span>
								</div>
							</form>
						</div>
						
						<form action="__APP__/Uphotoalbum/doinsert" method="post">
							<div id="divFileProgressContainer" style="height: 75px;"></div>
							<div id="thumbnails"></div>
							<br/>
							&nbsp;相册名称:&nbsp;<input type="text" name="ablumname" /><br/><br/>
							&nbsp;相册描述:&nbsp;<p id="js_message_p" style="margin-left:60px;">言简意赅描述一下吧......</p><br/>
							<textarea name="albumdes" rows="2" cols="60" class="pictext" id="js_message_textarea" style="margin-left:55px;resize:none;"></textarea><br/><br/>
							&nbsp;&nbsp;<input id="xctijiao" type="submit" value="提交" style="float:right;margin-right:160px;"/>
						
						</form>
					</div>

				</div>
			</div>	
		</div>
		
		<!-- 主体部分结束	-->
		
		<div class="nav"></div>
		
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<script type="text/javascript">
			function dodel(obj){
				x = document.getElementById(obj.id);
				x.parentNode.removeChild(x); 
			}
			
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
					oP.innerHTML = "用文字定格时间...... <a>还可以输入</a><span id='textnum'>30</span>字";
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
				
				if(num<=30){
					opa.innerHTML="还可以输入";
					oSpan.innerHTML = 30 - num;
					oSpan.style.color = '#d20000';
				}else{
					opa.innerHTML="已超出";
					oSpan.innerHTML = num-30;
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