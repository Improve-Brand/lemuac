<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:28
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15902651945309d1488fc562-40362357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73b94c210ef17c01920d7041c779953241cc6a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1391945066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15902651945309d1488fc562-40362357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d148931d50_06838089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d148931d50_06838089')) {function content_5309d148931d50_06838089($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound'){?>
<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<ul>
<li><a href="index.php"><?php echo smartyTranslate(array('s'=>'Go to the dashboard.'),$_smarty_tpl);?>
</a></li>
<li><a href="#" onclick="window.history.back();"><?php echo smartyTranslate(array('s'=>'Back to the previous page.'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>