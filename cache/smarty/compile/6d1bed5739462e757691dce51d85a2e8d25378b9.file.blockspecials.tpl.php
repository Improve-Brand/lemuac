<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:20
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147374179852f15e80693584-89591710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1bed5739462e757691dce51d85a2e8d25378b9' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/modules/blockspecials/blockspecials.tpl',
      1 => 1390348106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147374179852f15e80693584-89591710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'mediumSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'specific_prices' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e80834bf1_80249644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e80834bf1_80249644')) {function content_52f15e80834bf1_80249644($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/improvebrand.com/web/lemuac/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/home/improvebrand.com/web/lemuac/tools/smarty/plugins/modifier.date_format.php';
?>

<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<p class="title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a></p>
	<div class="block_content">

<?php if ($_smarty_tpl->tpl_vars['special']->value){?>
		<ul class="products clearfix">
			<li class="product_image">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['legend'], 'html', 'UTF-8');?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
" /></a>
			</li>
			<li>
				<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
					<?php if ($_smarty_tpl->tpl_vars['special']->value['specific_prices']){?>
						<?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['special']->value['specific_prices'], null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
							<span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>
						<?php }?>
					<?php }?>
				<?php }?>

					<p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
</a></p>
				<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
					<span class="price-discount"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['priceWithoutReduction_tax_excl']->value),$_smarty_tpl);?>
<?php }?></span>
					<span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
				<?php }?>
			</li>
		</ul>
		<p>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">&raquo; <?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a>
		</p>
<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No specials at this time','mod'=>'blockspecials'),$_smarty_tpl);?>
</p>
<?php }?>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>