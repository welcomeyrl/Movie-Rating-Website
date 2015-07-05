<?php /* Smarty version Smarty-3.1.6, created on 2015-04-28 02:13:27
         compiled from "./Admin/Tpl/Movie/editUploads.html" */ ?>
<?php /*%%SmartyHeaderCode:1228675151553e7c473742b8-10727533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e890d0c9c997d753d764a5dd8ada84adf9c9f1e9' => 
    array (
      0 => './Admin/Tpl/Movie/editUploads.html',
      1 => 1430098290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1228675151553e7c473742b8-10727533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pic' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553e7c47405ec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e7c47405ec')) {function content_553e7c47405ec($_smarty_tpl) {?><style type="text/css">
	#mpic img {
		border:1px solid #ccc;
		padding: 3px;
	}
	#mpic .imglist{
		padding: 3px;
		text-align: center;
		float: left;
		height: 135px;
		width: 110px;
		margin: 3px;
		border: 1px solid #ccc;
		background-color: #ccffcc;
	}
	#mpic p{
		width: 110px;
		height: 20px;
		line-height: 20px;
		padding-top: 5px;
	}
	#mpic p a{
		width: 110px;
		height: 20px;
		line-height: 20px;
		padding-top: 5px;
	}

</style>

<script type="text/javascript">
	$(function(){
		$("#mpic .imglist a").click(function(){
			var pid = $(this).attr('mid');
			// alert(pid);
			// alert($("#mpic"+pid).html());

			$.ajax({
				url : "__URL__/deleteimg",
				detaType : "text",
				type : "post",
				data : { id : pid },
				success : function(data){
					if(data == 'true'){
						$("#mpic"+pid).remove();
					}
				}
			})
		});
	});

</script>

<div class="pageContent">
	<form method="post" action="__URL__/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">

			<div id="mpic">			
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<div class="imglist" id="mpic<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
						<img src="__ROOT__/__UPLOAD__/Movie/mPhotos/m_<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />	
						<p><a style="color:blue"  mid="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
">delete</a></p>
					</div>
					<!-- href="__URL__/deleteimg/pid/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" -->

				<?php } ?>
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
</div><?php }} ?>