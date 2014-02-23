<div class="pos-feature-product">
	<div class="pos-feature-product-title"><h2>{l s ='Featured Products' mod='posfeatureproduct'}</h2></div>
	{if count($products)>0}
	<div class="flexslider carousel">
		<ul class="slides">
			{foreach from=$products item=product name=posFeatureProducts}
				<li class=" feature-productslider-item ajax_block_product {if $smarty.foreach.posFeatureProducts.first}first_item{elseif $smarty.foreach.posFeatureProducts.last}last_item{else}item{/if} {if $smarty.foreach.posFeatureProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.posFeatureProducts.iteration%$nbItemsPerLine == 1} {/if} {if $smarty.foreach.posFeatureProducts.iteration > ($smarty.foreach.posFeatureProducts.total - $totModulo)}last_line{/if}">
					<div class="item-inner">
					<a class = "bigpic_{$product.id_product}_featuredproduct product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" ><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'pos_product')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
					{if isset($product.new) && $product.specific_prices} 
				{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
			       {else}
				{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
				{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
			       {/if}	
					</a>
                                        {if $slideOptions.show_price ==1 }                                            
                                            {if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
                                            {/if}
					
					<h5 class="s_title_block"><a class="product-name" href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
                                        
					{if $slideOptions.show_des ==1 }
                                            <div class="product_desc"><a href="{$product.link|escape:'html'}" title="{l s='More' mod='posfeatureproduct'}">{$product.description_short|strip_tags|truncate:65:'...'}</a></div>
                                        {/if}
					
                                        <div class="actions">
						{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
                                                    {if ($product.quantity > 0 OR $product.allow_oosp)}
                                                    {if $slideOptions.show_addtocart ==1 }
                                                        <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')|escape:'html'}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='posfeatureproduct'}">{l s='Add to cart' mod='posfeatureproduct'}</a>
                                                    {/if}
                                                    {else}
                                                    {if $slideOptions.show_addtocart ==1 }
                                                        <span class="exclusive">{l s='Add to cart' mod='posfeatureproduct'}</span>
                                                    {/if}
                                                    {/if}
                                            {else}
                                                    <div style="height:23px;"></div>
                                            {/if}
					<ul class="add-to-links">
						<li>
<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1,'featuredproduct'); return false;" class="add-wishlist wishlist_button" href="#">{l s='Add to Wishlist' mod='posfeatureproduct'}</a>
</li>
						<li><a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='Detail' mod='posfeatureproduct'}">{l s='Detail' mod='posfeatureproduct'}</a></li>
                                            
					</ul>
					</div>
					</div>
				</li>
			{/foreach}
		</ul>
	</div>
	{else}
	<p class="warning">{l s='No products for this feadtured products.'}</p>
	{/if}
	<script type="text/javascript">
		$('.pos-feature-product .flexslider').flexslider({
            slideshow: {if $slideOptions.auto_slide != 1}{$slideOptions.auto_slide}{else}1{/if},
            itemWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
			itemMargin: 19,
			minItems: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
			maxItems: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
			slideshowSpeed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
			animationSpeed: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
			directionNav: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
			animation: "slide",
            controlNav: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
		});
	</script>
		 
</div>
