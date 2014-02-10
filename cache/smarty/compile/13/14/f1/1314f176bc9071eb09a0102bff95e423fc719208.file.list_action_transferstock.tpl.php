<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 15:53:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44114152252f8e7d068a931-12345501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1314f176bc9071eb09a0102bff95e423fc719208' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44114152252f8e7d068a931-12345501',
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
  'unifunc' => 'content_52f8e7d068f255_68243329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8e7d068f255_68243329')) {function content_52f8e7d068f255_68243329($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>