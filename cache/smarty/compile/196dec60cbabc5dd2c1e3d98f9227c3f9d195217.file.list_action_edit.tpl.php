<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:56
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83784223152f15e680e8ea0-24344923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196dec60cbabc5dd2c1e3d98f9227c3f9d195217' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1390343457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83784223152f15e680e8ea0-24344923',
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
  'unifunc' => 'content_52f15e68120c48_36396168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e68120c48_36396168')) {function content_52f15e68120c48_36396168($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>