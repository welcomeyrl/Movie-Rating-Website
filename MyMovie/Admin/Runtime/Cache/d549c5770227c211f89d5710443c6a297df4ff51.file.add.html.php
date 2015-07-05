<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:21:13
         compiled from "./Admin/Tpl/Movie/add.html" */ ?>
<?php /*%%SmartyHeaderCode:1419257095553dd5596b1023-54755058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd549c5770227c211f89d5710443c6a297df4ff51' => 
    array (
      0 => './Admin/Tpl/Movie/add.html',
      1 => 1430097784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419257095553dd5596b1023-54755058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd55972d8f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd55972d8f')) {function content_553dd55972d8f($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post"  enctype="multipart/form-data" action="__URL__/insert/navTabId/listmovie/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>title:</label>
				<input  class="required" size="30" name="filmname" type="text" />
			</p>
			
			<p>
				<label>alias:</label>
				<input name="petname" class="required" type="text" size="30" />
			</p>
			<p>
				<label>director:</label>
				<input name="director" class="required" type="text" size="30" />
			</p>
			<p>
				<label>writer:</label>
				<input name="editor" class="required" type="text" size="30" />
			</p>
			<p>
				<label>country:</label>
				<input type="text" name="nation" class="required" size="30" />
			</p>
			<p>
				<label>language:</label>
				<input type="text" name="language" class="required" size="30" />
			</p>
			
			<p>
				<label>year:</label>
				<input type="text" name="showtime" class="date" size="30" /><a class="inputDateButton" href="javascript:;">select</a>
			</p>
			<p>
				<label>runtime:</label>
				<input name="minutes" class="digits textInput" type="text" size="30" />
			</p>
			<p style="width:600px;">
				<label>status:</label>
				<input name="status" type="radio" size="30" value='0' checked />new
				<!-- <input name="status" type="radio" size="30" value='1' />显示
				<input name="status" type="radio" size="30" value='2' />幻灯片 -->
			</p>
			<p style="width:600px;">
				<label>poster</label>
				<input type="file" name="picname" class="required" />
			</p>
			<dl class="nowrap">
				<dt>Intro:</dt>
				<dd></textarea><textarea class="editor" name="content" rows="10" cols="68" tools="simple"></textarea></dd>
			</dl>
				
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