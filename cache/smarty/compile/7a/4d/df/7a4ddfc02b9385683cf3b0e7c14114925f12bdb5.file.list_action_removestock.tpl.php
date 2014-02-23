<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:35
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8297268135309d14fdafe78-21526675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4ddfc02b9385683cf3b0e7c14114925f12bdb5' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1391945112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8297268135309d14fdafe78-21526675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14fdc6318_88011955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14fdc6318_88011955')) {function content_5309d14fdc6318_88011955($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>