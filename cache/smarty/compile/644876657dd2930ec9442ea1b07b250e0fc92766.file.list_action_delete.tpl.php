<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:56
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110650210652f15e6808e400-72599754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644876657dd2930ec9442ea1b07b250e0fc92766' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1390343457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110650210652f15e6808e400-72599754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e680bc1c2_57534744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e680bc1c2_57534744')) {function content_52f15e680bc1c2_57534744($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>