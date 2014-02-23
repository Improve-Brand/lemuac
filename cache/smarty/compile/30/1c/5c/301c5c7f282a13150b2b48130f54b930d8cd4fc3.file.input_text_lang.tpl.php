<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:31
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/products/input_text_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1663581445309d14b7118e1-16522374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301c5c7f282a13150b2b48130f54b930d8cd4fc3' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/products/input_text_lang.tpl',
      1 => 1391945074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663581445309d14b7118e1-16522374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'input_name' => 0,
    'input_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14b766f08_79209874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14b766f08_79209874')) {function content_5309d14b766f08_79209874($_smarty_tpl) {?>

<div class="translatable">
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="<?php if (!$_smarty_tpl->tpl_vars['language']->value['is_default']){?>display:none;<?php }?>float: left;">
	<input size="30" type="text" id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" 
	name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
		value="<?php echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]))===null||$tmp==='' ? '' : $tmp);?>
"
		onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" onblur="updateLinkRewrite();"/>
</div>
<?php } ?>
</div>
<?php }} ?>