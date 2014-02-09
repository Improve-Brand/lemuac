<?php /* Smarty version Smarty-3.1.14, created on 2014-02-07 15:00:19
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200837890652f53b53c5d835-76459827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0a4ea3c33f243cdbf49f27bfe1b84cc16d8530' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/footer.tpl',
      1 => 1387292344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200837890652f53b53c5d835-76459827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f53b53cfd2c5_95396335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f53b53cfd2c5_95396335')) {function content_52f53b53cfd2c5_95396335($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
								<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product'){?>
									<div id="right_column" class="span3">
									    <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

									</div>
								<?php }?>
				
							</div>
						</div>
					</div>
				</div>
			</div>
			

<!-- Footer -->		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"brandSlider"),$_smarty_tpl);?>

			<div id="footer">
				<div class="pos-footer-top">
					<div class="container">
						<div class="container-inner">
							<div class="pos-footer-static">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

							</div>	
						</div>
					</div>
				</div>

				<div class="pos-footer-bottom">
					<div class="container">
						<div class="container-inner">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
	</div>
	<?php }?>
	<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
	</body>
</html>
<?php }} ?>