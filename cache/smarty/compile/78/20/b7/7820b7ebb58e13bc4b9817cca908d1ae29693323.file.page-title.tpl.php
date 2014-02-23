<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:46
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11009033395309d15a745532-11812784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7820b7ebb58e13bc4b9817cca908d1ae29693323' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/mobile/page-title.tpl',
      1 => 1391946263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11009033395309d15a745532-11812784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d15a78f7f8_40453946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d15a78f7f8_40453946')) {function content_5309d15a78f7f8_40453946($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/lemuac/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>