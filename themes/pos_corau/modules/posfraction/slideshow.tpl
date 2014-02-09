{if $page_name == 'index'}
	<div class="slider-wrapper">
		<div class="responisve-container">
			<div class="slider">
				<div class="fs_loader"></div>
				{foreach from=$slides key=key item=slide}
				   {if $slide.kind_effect==1}
					    <div class="slide">
						    <img src="{$slide.image}" width = "{$slide.width}"  height = "{$slide.height}" data-position="25,700" data-in="right" data-step="1" data-delay="500" data-out="fade" />													
							    <h2 class="teaser turky small" style= "width:300; height:auto;" data-position="100,50" data-in="left" data-step="1" data-delay="700">
							    {$slide.title1}
							    </h2>	
							    <h3 width ="800" height = "auto"	class="teaser turky small" 	data-position="175,50" data-in="left" data-step="1" data-delay="600">
							    {$slide.title2}
							    </h3>
							    {if $slide.link}
							    <p  width ="auto" height = "auto" class="teaser turky small" 	data-position="310,50" data-in="left" data-step="1" data-delay="1000">
							    <a href = "{$slide.link}">{l s='shop now' mod='posfraction'}</a>
							    </p>
							    {/if}
							    <div width ="500" height ="50" class="teaser turky small" 	data-position="230,50" data-in="left" data-step="1" data-delay="900">
								    {$slide.description}
							    </div>
					   </div>
				    {elseif $slide.kind_effect==2}
					    
						    <div class="slide">
								    <img src="{$slide.image}" width = "{$slide.width}"  height = "auto" data-position="40,70" data-in="top" data-step="1" data-delay="300" data-out="right" />													
									    <h2 width ="500" height = "auto"	class="teaser turky small"  	data-position="80,300" data-in="left" data-out="right" data-step="1" data-delay="1000">
									    {$slide.title1}
									    </h2>	
									    <h3 width ="750" height = "auto"	class="teaser turky small" 	data-position="155,300" data-in="top" data-out="right" data-step="1" data-delay="1000">
									    {$slide.title2}
									    </h3>
									    {if $slide.link}
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="290,300" data-in="bottom" data-out="right"  data-step="1" data-delay="1000">
									    <a href = "{$slide.link}">{l s='shop now' mod='posfraction'}</a>
									    </p>
									    {/if}
									    <div width ="500" height = "50"		class="teaser turky small" 	data-position="210,300" data-in="bottom" data-out="right" data-step="1" data-delay="1000">
										    {$slide.description}
									    </div>
						    </div>
					    
					    {elseif $slide.kind_effect==3}
					    
						    <div class="slide">
								    <img src="{$slide.image}" width = "{$slide.width}"  height = "{$slide.height}"  data-position="20,590" data-in="bottom" data-step="1" data-delay="300" data-out="right" />													
									    <h2 width ="300" height = "auto"  class="teaser turky small"  	data-position="100,100" data-in="top" data-out="left" data-step="1" data-delay="1000">
									    {$slide.title1}
									    </h2>	
									    <h3 	width ="550" height = "auto"	class="teaser turky small" 	data-position="175,100" data-in="top" data-step="1" data-delay="1000">
									    {$slide.title2}
									    </h3>
									    {if $slide.link}
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="310,100" data-in="top" data-step="1" data-delay="1000">
									    <a href = "{$slide.link}">{l s='shop now' mod='posfraction'}</a>
									    </p>
									    {/if}
									    <div width ="500" height = "50"		class="teaser turky small" 	data-position="230,100" data-in="top" data-step="1" data-delay="1000">
										    {$slide.description}
									    </div>
						    </div>
					    
					    {elseif $slide.kind_effect==4}
					    
						    <div class="slide">
								    <img src="{$slide.image}" width = "{$slide.width}"  height = "{$slide.height}" data-position="0,0" data-in="bottom" data-step="1" data-delay="500" data-out="left" />													
									    <h2 width ="300" height = "auto"	class="teaser turky small"  	data-position="240,600" data-in="bottom" data-step="1" data-delay="1000">
									    {$slide.title1}
									    </h2>	
									    <h3 	width ="550" height = "auto"	class="teaser turky small" 	data-position="80,600" data-in="bottom" data-step="1" data-delay="1000">
									    {$slide.title2}
									    </h3>
									    {if $slide.link}
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="350,600" data-in="bottom" data-step="1" data-delay="1000">
									    <a href = "{$slide.link}">{l s='shop now' mod='posfraction'}</a>
									    </p>
									    {/if}
									    <div width ="400" height = "50"		class="teaser turky small" 	data-position="150,600" data-in="bottom" data-step="1" data-delay="1000">
										    {$slide.description}
									    </div>
						    </div>
					    
				    {/if}


				    {/foreach}
			</div>
		</div>
	</div>
	<script type="text/javascript">
			$jq(document).ready(function(){
					$jq('.slider').fractionSlider({
						'autoChange' : {if $slideOptions.auto_slide != 0}true{else}false{/if}, // auto change slides
						'fullWidth': 			true,
						'pager': 	{if $slideOptions.show_arrow != 0}true{else}false{/if}, 
						'controls': 		{if $slideOptions.show_navigation != 0}true{else}false{/if}, 
						'responsive': 			true,
						'dimensions': 			"1000,500",
						'increase': 			false,
						'pauseOnHover': 		{if $slideOptions.hover != 0}{$slideOptions.hover}{else}false{/if}, 
						'slideTransitionSpeed' : {if $slideOptions.animation_speed != ''}{$slideOptions.animation_speed}{else}600{/if},
						'delay' : 1000				});

				});
    </script>

{/if}