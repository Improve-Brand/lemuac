<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 09:59:28
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/pos_corau/modules/posfraction/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88223112152f8e950ab68d7-14642102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa15d980accfa2f3c284774093833a4ff4a1f16' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/themes/pos_corau/modules/posfraction/slideshow.tpl',
      1 => 1389105724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88223112152f8e950ab68d7-14642102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'slides' => 0,
    'slide' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f8e950b10c31_01594136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8e950b10c31_01594136')) {function content_52f8e950b10c31_01594136($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
	<div class="slider-wrapper">
		<div class="responisve-container">
			<div class="slider">
				<div class="fs_loader"></div>
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
				   <?php if ($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==1){?>
					    <div class="slide">
						    <img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" width = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['width'];?>
"  height = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['height'];?>
" data-position="25,700" data-in="right" data-step="1" data-delay="500" data-out="fade" />													
							    <h2 class="teaser turky small" style= "width:300; height:auto;" data-position="100,50" data-in="left" data-step="1" data-delay="700">
							    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>

							    </h2>	
							    <h3 width ="800" height = "auto"	class="teaser turky small" 	data-position="175,50" data-in="left" data-step="1" data-delay="600">
							    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>

							    </h3>
							    <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']){?>
							    <p  width ="auto" height = "auto" class="teaser turky small" 	data-position="310,50" data-in="left" data-step="1" data-delay="1000">
							    <a href = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'shop now','mod'=>'posfraction'),$_smarty_tpl);?>
</a>
							    </p>
							    <?php }?>
							    <div width ="500" height ="50" class="teaser turky small" 	data-position="230,50" data-in="left" data-step="1" data-delay="900">
								    <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

							    </div>
					   </div>
				    <?php }elseif($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==2){?>
					    
						    <div class="slide">
								    <img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" width = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['width'];?>
"  height = "auto" data-position="40,70" data-in="top" data-step="1" data-delay="300" data-out="right" />													
									    <h2 width ="500" height = "auto"	class="teaser turky small"  	data-position="80,300" data-in="left" data-out="right" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>

									    </h2>	
									    <h3 width ="750" height = "auto"	class="teaser turky small" 	data-position="155,300" data-in="top" data-out="right" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>

									    </h3>
									    <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']){?>
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="290,300" data-in="bottom" data-out="right"  data-step="1" data-delay="1000">
									    <a href = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'shop now','mod'=>'posfraction'),$_smarty_tpl);?>
</a>
									    </p>
									    <?php }?>
									    <div width ="500" height = "50"		class="teaser turky small" 	data-position="210,300" data-in="bottom" data-out="right" data-step="1" data-delay="1000">
										    <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

									    </div>
						    </div>
					    
					    <?php }elseif($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==3){?>
					    
						    <div class="slide">
								    <img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" width = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['width'];?>
"  height = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['height'];?>
"  data-position="20,590" data-in="bottom" data-step="1" data-delay="300" data-out="right" />													
									    <h2 width ="300" height = "auto"  class="teaser turky small"  	data-position="100,100" data-in="top" data-out="left" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>

									    </h2>	
									    <h3 	width ="550" height = "auto"	class="teaser turky small" 	data-position="175,100" data-in="top" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>

									    </h3>
									    <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']){?>
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="310,100" data-in="top" data-step="1" data-delay="1000">
									    <a href = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'shop now','mod'=>'posfraction'),$_smarty_tpl);?>
</a>
									    </p>
									    <?php }?>
									    <div width ="500" height = "50"		class="teaser turky small" 	data-position="230,100" data-in="top" data-step="1" data-delay="1000">
										    <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

									    </div>
						    </div>
					    
					    <?php }elseif($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==4){?>
					    
						    <div class="slide">
								    <img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" width = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['width'];?>
"  height = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['height'];?>
" data-position="0,0" data-in="bottom" data-step="1" data-delay="500" data-out="left" />													
									    <h2 width ="300" height = "auto"	class="teaser turky small"  	data-position="240,600" data-in="bottom" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>

									    </h2>	
									    <h3 	width ="550" height = "auto"	class="teaser turky small" 	data-position="80,600" data-in="bottom" data-step="1" data-delay="1000">
									    <?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>

									    </h3>
									    <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']){?>
									    <p  width ="auto" height = "auto"		class="teaser turky small" 	data-position="350,600" data-in="bottom" data-step="1" data-delay="1000">
									    <a href = "<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'shop now','mod'=>'posfraction'),$_smarty_tpl);?>
</a>
									    </p>
									    <?php }?>
									    <div width ="400" height = "50"		class="teaser turky small" 	data-position="150,600" data-in="bottom" data-step="1" data-delay="1000">
										    <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

									    </div>
						    </div>
					    
				    <?php }?>


				    <?php } ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
			$jq(document).ready(function(){
					$jq('.slider').fractionSlider({
						'autoChange' : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=0){?>true<?php }else{ ?>false<?php }?>, // auto change slides
						'fullWidth': 			true,
						'pager': 	<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']!=0){?>true<?php }else{ ?>false<?php }?>, 
						'controls': 		<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation']!=0){?>true<?php }else{ ?>false<?php }?>, 
						'responsive': 			true,
						'dimensions': 			"1000,500",
						'increase': 			false,
						'pauseOnHover': 		<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['hover']!=0){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['hover'];?>
<?php }else{ ?>false<?php }?>, 
						'slideTransitionSpeed' : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed'];?>
<?php }else{ ?>600<?php }?>,
						'delay' : 1000				});

				});
    </script>

<?php }?><?php }} ?>