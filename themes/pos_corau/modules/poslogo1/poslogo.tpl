<div class="pos-logo-container">
	<div class="container">
		<div class="container-inner">
			<div class="pos-logo">
				<div class="pos-logo-title"><h2>{l s='$slideOptions.title_slide' mod='poslogo'}</h2></div>
				<div class="flexslider carousel">
					<ul class="slides">'
						{foreach from=$logos item=logo name=posLogo}
							<li>
							    <a href ="{$logo.link}">
								<img src ="{$logo.image}" alt ="{l s="Logo"}" />
							    </a>
							</li>
						{/foreach}
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
              $(document).ready(function(){
                    $('.pos-logo .flexslider').flexslider({
                            slideshow: {if $slideOptions.auto_slide != 1}{$slideOptions.auto}{else}1{/if},
                            itemWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
                            itemMargin: 5,
                            minItems: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
                            maxItems: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
                            slideshowSpeed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
                            animationSpeed: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
                            directionNav: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
                            animation: "slide",
                            controlNav: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
                    });
                });
	</script>
		 
</div>