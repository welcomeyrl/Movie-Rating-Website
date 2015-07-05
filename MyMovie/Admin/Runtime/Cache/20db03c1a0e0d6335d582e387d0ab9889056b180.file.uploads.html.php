<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:31:13
         compiled from "./Admin/Tpl/Movie/uploads.html" */ ?>
<?php /*%%SmartyHeaderCode:186364988553dd7b1d05224-46827970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20db03c1a0e0d6335d582e387d0ab9889056b180' => 
    array (
      0 => './Admin/Tpl/Movie/uploads.html',
      1 => 1430099098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186364988553dd7b1d05224-46827970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'movid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd7b1d6f7a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd7b1d6f7a')) {function content_553dd7b1d6f7a($_smarty_tpl) {?>
<script type="text/javascript">
	$(function(){
		$("#upload").click(function(){
			$("#uploadphotos").append("<input type='file' name='picname[]' />");
			$(this).attr('value', 'continue');
		});

	});
</script>

<style type="text/css">
	
</style>

<div class="pageContent">
	<form method="post"  enctype="multipart/form-data" action="__URL__/uploadsHandle/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<h2>upload image</h2>
			<hr/>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['movid']->value;?>
" />
			<div id="uploadphotos">
				<input type="button" id="upload" value="choose a image" /><br/>
				<input type="file" name="picname[]" class="" />
			</div>
			
				
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">save</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">cancel</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div><?php }} ?>