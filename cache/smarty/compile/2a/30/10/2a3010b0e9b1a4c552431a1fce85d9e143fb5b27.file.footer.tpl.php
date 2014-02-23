<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:43
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/mobile/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11474022585309d157189ee3-55631440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3010b0e9b1a4c552431a1fce85d9e143fb5b27' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/mobile/footer.tpl',
      1 => 1391946266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11474022585309d157189ee3-55631440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'PS_SHOP_NAME' => 0,
    'conditions' => 0,
    'id_cgv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d1571e16c4_59091109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d1571e16c4_59091109')) {function content_5309d1571e16c4_59091109($_smarty_tpl) {?>

			<div id="footer">
				<div class="ui-grid-a">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMobileFooterChoice"),$_smarty_tpl);?>

				</div><!-- /grid-a -->

				<div id="full-site-section" class="center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?no_mobile_theme" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Browse the full site'),$_smarty_tpl);?>
</a>
				</div>

				<div data-role="footer" data-theme="a" id="bar_footer">
					<div id="link_bar_footer" class="ui-grid-a">
						<div class="ui-block-a">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo $_smarty_tpl->tpl_vars['PS_SHOP_NAME']->value;?>
</a>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['conditions']->value){?>
						<div class="ui-block-b">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cgv']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Terms of service'),$_smarty_tpl);?>
</a>
						</div>
						<?php }?>
					</div>
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
	</body>
</html>
<?php }} ?>