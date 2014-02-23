<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:56
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60640404952f15e68070246-78697315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a152068fddf861561e2992ea36e1b4a47e2339e3' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1390343458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60640404952f15e68070246-78697315',
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
  'unifunc' => 'content_52f15e68087893_41002018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e68087893_41002018')) {function content_52f15e68087893_41002018($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>