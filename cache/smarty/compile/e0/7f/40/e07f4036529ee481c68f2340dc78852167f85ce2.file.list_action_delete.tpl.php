<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 19:18:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/administrator/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12258466252f96c555ee598-29757404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e07f4036529ee481c68f2340dc78852167f85ce2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/administrator/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1392073968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12258466252f96c555ee598-29757404',
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
  'unifunc' => 'content_52f96c55601800_66088046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f96c55601800_66088046')) {function content_52f96c55601800_66088046($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>