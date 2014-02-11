<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 19:23:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135908657752f96d82575ef3-62908990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560b0924802863498f8660e7fd66395df1a96247' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/modules/blockadvertising/blockadvertising.tpl',
      1 => 1392073971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135908657752f96d82575ef3-62908990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f96d82584b03_69638625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f96d82584b03_69638625')) {function content_52f96d82584b03_69638625($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>