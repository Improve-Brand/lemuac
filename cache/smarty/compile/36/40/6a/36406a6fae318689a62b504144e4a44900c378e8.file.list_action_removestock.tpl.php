<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 15:53:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185173886052f8e7d066a595-85700438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36406a6fae318689a62b504144e4a44900c378e8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185173886052f8e7d066a595-85700438',
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
  'unifunc' => 'content_52f8e7d066ef09_37329765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8e7d066ef09_37329765')) {function content_52f8e7d066ef09_37329765($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>