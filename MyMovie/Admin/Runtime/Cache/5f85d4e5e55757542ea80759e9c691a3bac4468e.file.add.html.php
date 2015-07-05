<?php /* Smarty version Smarty-3.1.6, created on 2015-04-27 14:21:38
         compiled from "./Admin/Tpl/Actors/add.html" */ ?>
<?php /*%%SmartyHeaderCode:858325921553dd5727163b5-64128372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f85d4e5e55757542ea80759e9c691a3bac4468e' => 
    array (
      0 => './Admin/Tpl/Actors/add.html',
      1 => 1430107750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858325921553dd5727163b5-64128372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_553dd57278872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd57278872')) {function content_553dd57278872($_smarty_tpl) {?>
<div class="pageContent">

	<form method="post" enctype="multipart/form-data" action="__URL__/insert/navTabId/listactor" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>Chinese name:</label>
				<input name="cname" class="required" type="text" size="30" value="" alt=""/>
			</p>
			<p>
				<label>English name:</label>
				<input name="ename" class="required" type="text" size="30" value="" alt=""/>
			</p>
			
			<p>
				<label>Gender:</label>
				<input type="radio" value="1" name="sex"/>male
				<input type="radio" value="0" name="sex"/>femal
			</p>
			<p>
				<label>Horoscope:</label>
				<select name="constellation" class="required combox" size="30">
					<option value="" selected>- - select - -</option>
					<option value="Aries">Aries</option>
					<option value="Taurus">Taurus</option>
					<option value="Gemini">Gemini</option>
					<option value="Cancer">Cancer</option>
					<option value="Leo">Leo</option>
					<option value="Virgo">Virgo</option>
					<option value="Libra">Libra</option>
					<option value="Scorpio">Scorpio</option>
					<option value="Sagittarius">Sagittarius</option>
					<option value="Capricorn">Capricorn</option>
					<option value="Aquarius">Aquarius</option>
					<option value="Pisces">Pisces</option>
				</select>
			</p>
			<p>
				<label>Birthday:</label>
				<input type="text" name="birthday" class="date" size="30" /><a class="inputDateButton" href="javascript:;">select</a>
			</p>
			<p>
				<label>Born address:</label>
				<input name="bornaddress" type="text" size="30" class="required" />
			</p>
			
			<p>
				<label>Professtion:</label>
				<input name="professtion" type="text" size="30" class="required" />
			</p>

			<p>
				<label>Picture:</label>
				<input type="file" name="picname" class="required" />
			</p>
			
			<p>
				<label>Intro</label>
				<textarea class="editor" name="intro" rows="6" cols="100" tools="simple">simple</textarea>
			<p>
			
			<div class="divider"></div>
			
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