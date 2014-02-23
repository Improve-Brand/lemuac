<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:27
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7718377585309d1473f66f5-87109765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b4c516c673bfc2f94296d19b03434cca911c98' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1391945059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7718377585309d1473f66f5-87109765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14741d2f9_35018534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14741d2f9_35018534')) {function content_5309d14741d2f9_35018534($_smarty_tpl) {?>

<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
</div>
<br />
<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
</div><?php }} ?>