

{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

  {if isset($products)}
	{if $smarty.cookies.product_mode  =='list'}
	<ul id="product_list" class="list_view clear">
	{foreach from=$products item=product name=products}
		<li class="ajax_block_product {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{else}item{/if} clearfix">
			<div class="row-fluid">
				<div class="left_block span4">
					<a id = "bigpic_{$product.id_product}" href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
					<img id="bigpic" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'pos_product')|escape:'html'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" />
					{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
				</a>
					
				</div>
				<div class="center_block span5">					
					<h3>{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a class="product-name" href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h3>
					<div class="content_price">
						{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="price" style="display: inline;">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span><br />{/if}
						{if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}<span class="availability">{if ($product.allow_oosp || $product.quantity > 0)}{l s='Available'}{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}{l s='Product available with different options'}{else}{l s='Out of stock'}{/if}</span>{/if}
					</div>
					<p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}" >{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a></p>
				
					{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!'}</span>
					{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!'}</span>{/if}
					{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}

					{/if}
				</div>
				<div class="right_block span3">
					<div class="actions">
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                                            {if ($product.allow_oosp || $product.quantity > 0)}
                                                    {if isset($static_token)}
                                                            <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                    {else}
                                                            <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                    {/if}						
                                            {else}
                                                    <span class="exclusive"><span></span>{l s='Add to cart'}</span>
                                            {/if}
						{/if}
						
						<ul class="add-to-links">
							<li>
	<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1); return false;" class="add-wishlist" id="wishlist_button" href="#">{l s='Add to Wishlist'}</a>
	</li>
							<li><a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='Detail'}">{l s='Detail'}</a></li>
							{if isset($comparator_max_item) && $comparator_max_item}
								<li class="compare">
									<input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} autocomplete="off"/> 
									<label for="comparator_item_{$product.id_product}">{l s='Compare'}</label>
								</li>
							{/if}
						    
						</ul>
					</div>
				</div>
			</div>
		</li>
	{/foreach}
	</ul>
        {/if}
      {if $smarty.cookies.product_mode  =='grid' ||  $smarty.cookies.product_mode  ==''}
            <div id="product_list" class="grid_view clear">
            {foreach from=$products item=product name=products}
		{if $product@iteration%3==1}
		    <ul class="product-grid row-fluid">
		{/if}
                    <li class="ajax_block_product span4 {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{else}item{/if} clearfix">
			<div class="item-inner">
				<a id = "bigpic_{$product.id_product}" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img id="bigpic" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'pos_product')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
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
                                            <div class="product_desc"><a href="{$product.link|escape:'html'}" title="{l s='More'}">{$product.description_short|strip_tags|truncate:65:'...'}</a></div>
                                        {/if}
					
                                        <div class="actions">
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                                            {if ($product.allow_oosp || $product.quantity > 0)}
                                                    {if isset($static_token)}
                                                            <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                    {else}
                                                            <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                    {/if}						
                                            {else}
                                                    <span class="exclusive"><span></span>{l s='Add to cart'}</span>
                                            {/if}
						{/if}
						{if isset($comparator_max_item) && $comparator_max_item}
							<p class="compare">
								<input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} autocomplete="off"/> 
								<label for="comparator_item_{$product.id_product}">{l s='Compare'}</label>
							</p>
						{/if}
					<ul class="add-to-links">
						<li>
<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1); return false;" class="add-wishlist" id="wishlist_button" href="#" title="{l s='Add to Wishlist'}>{l s='Add to Wishlist'}</a>
</li>
						<li><a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='Detail'}">{l s='Detail'}</a></li>
                                            
					</ul>
					</div>
			</div>
                    </li>
		    {if $product@iteration%3==0||$smarty.foreach.products.last}
		</ul>
		{/if}
            {/foreach}
            </div>
            {/if}
{/if}
