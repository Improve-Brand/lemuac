<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:56
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154041112752f15e6824aa01-99953427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bde4ed67626caacfce1659789fde55d6c6ccced' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1390343457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154041112752f15e6824aa01-99953427',
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
  'unifunc' => 'content_52f15e6826d943_22693513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e6826d943_22693513')) {function content_52f15e6826d943_22693513($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>