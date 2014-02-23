<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:56
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38107690152f15e68127937-30349853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5723de7e475411417c04d4324d1a80a4f9da68' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1390343457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38107690152f15e68127937-30349853',
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
  'unifunc' => 'content_52f15e6813df26_83537903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e6813df26_83537903')) {function content_52f15e6813df26_83537903($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>