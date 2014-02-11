<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 19:18:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/administrator/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78856912852f96c555d8f47-43437458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a83ce5a0854fb588b4997a9bc8ad4dd809de813' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/administrator/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1392073968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78856912852f96c555d8f47-43437458',
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
  'unifunc' => 'content_52f96c555e7e30_97699990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f96c555e7e30_97699990')) {function content_52f96c555e7e30_97699990($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>