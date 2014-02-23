<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:13
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107049611752f15e79659c20-14639233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55748f763ebd3a2d5cc4247c192611616e32b9fc' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/index.tpl',
      1 => 1390347966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107049611752f15e79659c20-14639233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e7966a457_48416055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e7966a457_48416055')) {function content_52f15e7966a457_48416055($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>