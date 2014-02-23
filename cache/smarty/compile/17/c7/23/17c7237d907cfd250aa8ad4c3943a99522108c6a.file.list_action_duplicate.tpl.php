<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:35
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914593065309d14fd11010-54494891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c7237d907cfd250aa8ad4c3943a99522108c6a' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1391945113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914593065309d14fd11010-54494891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14fd338b9_96864460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14fd338b9_96864460')) {function content_5309d14fd338b9_96864460($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>