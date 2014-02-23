<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:35
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1278022205309d14fdf9b30-19486233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3edcb348fc18c23720edfd37890e1e4addfb4da' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1391945112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278022205309d14fdf9b30-19486233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14fe16a26_13559556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14fe16a26_13559556')) {function content_5309d14fe16a26_13559556($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>