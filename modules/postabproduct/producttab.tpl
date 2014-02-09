<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		$(".tab_content").removeClass("animate1 {$tab_effect}");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 {$tab_effect}");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>

	
	
	<ul class="tabs"> 
	{$count=0}
	{foreach from=$productTabs item=productTab name=posTabProduct}
			<li rel="tab_{$productTab.id}" {if $count==0} class="active"  {/if} > {$productTab.name}</li>
			{$count= $count+1}
	{/foreach}	
	</ul>

	<div class="tab_container"> 
	{foreach from=$productTabs item=productTab name=posTabProduct}
		 <div id="tab_{$productTab.id}" class="tab_content"> 
		 	
						{foreach from=$productTab.productInfo item=product name=posFeatureProducts}
						{if $product@iteration%$product_on_row==1}
							<ul class="productTabContent">
						{/if}	
							<li class=" feature-productslider-item ajax_block_product {if $smarty.foreach.posFeatureProducts.first}first_item{elseif $smarty.foreach.posFeatureProducts.last}last_item{else}item{/if} {if $smarty.foreach.posFeatureProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.posFeatureProducts.iteration%$nbItemsPerLine == 1} {/if} {if $smarty.foreach.posFeatureProducts.iteration > ($smarty.foreach.posFeatureProducts.total - $totModulo)}last_line{/if}">
								<a href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" />
									{if isset($product.new) && $product.specific_prices} 
										{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
									{else}
									{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
									{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
									{/if}								
								</a>
								<h5 class="s_title_block"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
												
													<div>
														<a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='View' mod='posfeatureproduct'}">{l s='View' mod='posfeatureproduct'}</a>
												                                          
														{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
											
														{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
																{if ($product.quantity > 0 OR $product.allow_oosp)}
														
																	<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')|escape:'html'}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='posfeatureproduct'}">{l s='Add to cart' mod='posfeatureproduct'}</a>
													
																{else}
														
																	<span class="exclusive">{l s='Add to cart' mod='posfeatureproduct'}</span>
															
																{/if}
														{else}
																<div style="height:23px;"></div>
														{/if}
								</div>
							</li>
						{if $product@iteration%$product_on_row==0}
							</ul>
						{/if}	
						{/foreach}
				
				</div>
	{/foreach}	
	 </div> <!-- .tab_container --> 
