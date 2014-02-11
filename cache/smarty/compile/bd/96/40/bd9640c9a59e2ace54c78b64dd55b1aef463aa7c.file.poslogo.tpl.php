<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 19:23:31
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/lemuac/modules/poslogo/poslogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54440557652f96d835bede8-45877251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9640c9a59e2ace54c78b64dd55b1aef463aa7c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/lemuac/modules/poslogo/poslogo.tpl',
      1 => 1392073971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54440557652f96d835bede8-45877251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'logo' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f96d8362d812_66991611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f96d8362d812_66991611')) {function content_52f96d8362d812_66991611($_smarty_tpl) {?><div class="pos-logo-container">
	<div class="container">
		<div class="container-inner">
			<div class="pos-logo">
				<div class="pos-logo-title"><h2><?php echo smartyTranslate(array('s'=>'Our Brands','mod'=>'poslogo'),$_smarty_tpl);?>
</h2></div>
				<div class="flexslider carousel">
					<ul class="slides">
						<?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value){
$_smarty_tpl->tpl_vars['logo']->_loop = true;
?>
							<li>
							    <a href ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['link'];?>
">
								<img src ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['image'];?>
" alt ="<?php echo smartyTranslate(array('s'=>"Logo"),$_smarty_tpl);?>
" />
							    </a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
              $(document).ready(function(){
                    $('.pos-logo .flexslider').flexslider({
                            slideshow: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto']!=1){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto'];?>
<?php }else{ ?>1<?php }?>,
                            itemWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!=''){?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php }else{ ?>250<?php }?>,
                            itemMargin: 5,
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
                });
	</script>
		 
</div><?php }} ?>