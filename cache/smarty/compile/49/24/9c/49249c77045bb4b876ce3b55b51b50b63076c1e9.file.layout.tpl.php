<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:40
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14260949835309d154e946e5-05809346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49249c77045bb4b876ce3b55b51b50b63076c1e9' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/layout.tpl',
      1 => 1391946224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14260949835309d154e946e5-05809346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d154ee5904_51451363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d154ee5904_51451363')) {function content_5309d154ee5904_51451363($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>