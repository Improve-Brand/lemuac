<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 15:53:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36354439752f8e7d207d1a0-78273276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4dc271a8e7232b00dccd1f310ac22a625e2c5c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/default/mobile/index.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36354439752f8e7d207d1a0-78273276',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f8e7d20809f4_42931548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8e7d20809f4_42931548')) {function content_52f8e7d20809f4_42931548($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>