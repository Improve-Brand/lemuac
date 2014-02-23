<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:35
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19904655055309d14fbb2aa8-01988780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a86c0cd2158b38ba43c22e878c18a481b39b70' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1391945113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19904655055309d14fbb2aa8-01988780',
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
  'unifunc' => 'content_5309d14fbc8e46_21133777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14fbc8e46_21133777')) {function content_5309d14fbc8e46_21133777($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>