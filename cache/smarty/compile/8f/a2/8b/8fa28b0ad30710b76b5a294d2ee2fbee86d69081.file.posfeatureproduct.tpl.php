<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 19:23:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/pos_corau/modules/posfeatureproduct/posfeatureproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145237271552f96d82cc7ca1-82733582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fa28b0ad30710b76b5a294d2ee2fbee86d69081' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/pos_corau/modules/posfeatureproduct/posfeatureproduct.tpl',
      1 => 1392073972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145237271552f96d82cc7ca1-82733582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbItemsPerLine' => 0,
    'totModulo' => 0,
    'product' => 0,
    'link' => 0,
    'slideOptions' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f96d82e1e176_27882213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f96d82e1e176_27882213')) {function content_52f96d82e1e176_27882213($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/lemuac/tools/smarty/plugins/modifier.escape.php';
?><div class="pos-feature-product">
	<div class="pos-feature-product-title"><h2><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</h2></div>
	<?php if (count($_smarty_tpl->tpl_vars['products']->value)>0){?>
	<div class="flexslider carousel">
		<ul class="slides">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<li class=" feature-productslider-item ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?> <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)){?>last_line<?php }?>">
					<div class="item-inner">
					<a class = "bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_featuredproduct product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'pos_product'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" />
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']){?> 
				<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?><span class="sale"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span><?php }?>
			       <?php }else{ ?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?><span class="sale"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span><?php }?>
			       <?php }?>	
					</a>
                                        <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_price']==1){?>                                            
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php }else{ ?><div style="height:21px;"></div><?php }?>
                                            <?php }?>
					
					<h5 class="s_title_block"><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a></h5>
                                        
					<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_des']==1){?>
                                            <div class="product_desc"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</a></div>
                                        <?php }?>
					
                                        <div class="actions">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                                                    <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1){?>
                                                        <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</a>
                                                    <?php }?>
                                                    <?php }else{ ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1){?>
                                                        <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    <?php }?>
                                            <?php }else{ ?>
                                                    <div style="height:23px;"></div>
                                            <?php }?>
					<ul class="add-to-links">
						<li>
<a onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', $('#idCombination').val(), 1,'featuredproduct'); return false;" class="add-wishlist wishlist_button" href="#"><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</a>
</li>
						<li><a class="lnk_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</a></li>
                                            
					</ul>
					</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
	<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this feadtured products.'),$_smarty_tpl);?>
</p>
	<?php }?>
	<script type="text/javascript">
		$('.pos-feature-product .flexslider').flexslider({
            slideshow: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=1){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide'];?>
<?php }else{ ?>1<?php }?>,
            itemWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php }else{ ?>250<?php }?>,
			itemMargin: 19,
			minItems: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php }else{ ?>3<?php }?>,
			maxItems: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php }else{ ?>8<?php }?>,
			slideshowSpeed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php }else{ ?>5000<?php }?>,
			animationSpeed: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php }else{ ?>1000<?php }?>,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php }else{ ?>false<?php }?>,
			animation: "slide",
            controlNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php }else{ ?>false<?php }?>,
		});
	</script>
		 
</div>
<?php }} ?>