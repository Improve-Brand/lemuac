<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:13
         compiled from "/Applications/MAMP/htdocs/lemuac/modules/poslogo/poslogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209910855309d2ddab1d82-75897655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41683deb5b6640f626447ffdb8ee0375eef79bed' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/modules/poslogo/poslogo.tpl',
      1 => 1391946091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3209910855309d2ddab1d82-75897655',
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
  'unifunc' => 'content_5309d2ddb94625_85273711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2ddb94625_85273711')) {function content_5309d2ddb94625_85273711($_smarty_tpl) {?><div class="pos-logo-container">
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