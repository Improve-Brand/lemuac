<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:43
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10318333305309d15779e477-12793088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '479585de5b4e609b60d7ce3803da1099ed1fe360' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/mobile/index.tpl',
      1 => 1391946266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10318333305309d15779e477-12793088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d1577ac4b5_00554957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d1577ac4b5_00554957')) {function content_5309d1577ac4b5_00554957($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>