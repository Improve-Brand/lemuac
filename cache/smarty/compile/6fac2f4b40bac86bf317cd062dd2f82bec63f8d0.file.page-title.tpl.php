<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:10
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76793532252f15e76498fc1-52732210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fac2f4b40bac86bf317cd062dd2f82bec63f8d0' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/page-title.tpl',
      1 => 1390347972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76793532252f15e76498fc1-52732210',
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
  'unifunc' => 'content_52f15e764e13c5_94009067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e764e13c5_94009067')) {function content_52f15e764e13c5_94009067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/improvebrand.com/web/lemuac/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>