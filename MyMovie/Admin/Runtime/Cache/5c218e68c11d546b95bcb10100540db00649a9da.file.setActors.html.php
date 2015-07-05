<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:09:02
         compiled from "./Admin/Tpl/Movie/setActors.html" */ ?>
<?php /*%%SmartyHeaderCode:831818299553e7b3eaa1319-04135212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c218e68c11d546b95bcb10100540db00649a9da' => 
    array (
      0 => './Admin/Tpl/Movie/setActors.html',
      1 => 1430098906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831818299553e7b3eaa1319-04135212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'movid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553e7b3eb3ee2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7b3eb3ee2')) {function content_553e7b3eb3ee2($_smarty_tpl) {?><style type="text/css">
	.pageFormContent p{
		width: 500px;
	}
	.pageFormContent label {
    float: left;
    line-height: 21px;
    padding: 0 5px;
    width: 60px;
	}
	#tag{
		border:1px solid #ccc;
		height: 21px;
		line-height: 21px;
		margin-left: 10px;
		padding: 5px;
		display: none;
	}
	.haserror {
		color: red;
		font-style: italic;
		background-color: #ccffcc;
	}
	.done {
		color: green;
		font-style: normal;
		border: 1px solid #ccc;
	}
</style>

<script type="text/javascript">
	$(function(){

		var movid = $("#aname").attr('movid');
		// alert(movid);

		$("#addActor").click(function(){

			$("#aname").trigger('focus').val("");
			$("#tag").hide();
		});

		// 文本框获得焦点事件
		$("#aname").focus(function(){
			$("#tag").removeClass('haserror done').show().html("actor name");
		});

		$("#aname").blur(function(){
			// 是否为空
			var actname = $("#aname").val();

			if (actname.length == 0) {
				$("#tag").show().addClass("haserror").html("can not be null！");
			}else{
				// 异步请求
				$.ajax({
					url : "__URL__/setActorsHandle",
					detaType : "text",
					type : "post",
					data : { id : movid,
							 name : actname	
						},
					success : function(data){
						if (data == "true") {

							$("#tag").show().addClass("ok").html("successful add");
						} else {
							$("#tag").show().addClass("haserror").html(data);
						}
					}
				})
			}



			// $("#tag").show().addClass("haserror").html("演员不存在，请补充详细信息");
		})
	});
</script>
<div class="pageContent">
	<form method="post" action="__URL__/setActorsHandle/navTabId/listactor/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div  class="pageFormContent" layoutH="56">
			<input type="button" id="addActor" value="add actor" />
			<div class="divider"></div>
			<div id="form">
				<p>
					<label>actor name:</label>
					<input id="aname" type="text" size="30" value="" movid="<?php echo $_smarty_tpl->tpl_vars['movid']->value;?>
" />
					<span id="tag"></span>	
				</p>
			</div>

		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">OK</button></div></div>
				</li>
				
			</ul>
		</div>
	</form>
</div>
<?php }} ?>