<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:12
         compiled from "/Applications/MAMP/htdocs/lemuac/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11204662525309d2dc3a6a17-02556504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '022f0c0c0267b99c1e54b281654d40126a3a62d5' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/modules/blockadvertising/blockadvertising.tpl',
      1 => 1391945925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11204662525309d2dc3a6a17-02556504',
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
  'unifunc' => 'content_5309d2dc3c89f1_38361567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2dc3c89f1_38361567')) {function content_5309d2dc3c89f1_38361567($_smarty_tpl) {?>

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