<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:35
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15848531755309d14fbcb7a0-06070324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff1ca253b2a3e9c13d0319897f1d6a815703a8ef' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1391945113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15848531755309d14fbcb7a0-06070324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d14fbf5d45_13823474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d14fbf5d45_13823474')) {function content_5309d14fbf5d45_13823474($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>