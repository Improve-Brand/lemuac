<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:12
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posmegamenu/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17010721055309d2dc0f6b88-63555329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d65593c96eeb4f34628189b8a380991df414a8c' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posmegamenu/megamenu.tpl',
      1 => 1391946386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17010721055309d2dc0f6b88-63555329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'isDhtml' => 0,
    'child' => 0,
    'megamenu' => 0,
    'effect' => 0,
    'top_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d2dc15f027_87051681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2dc15f027_87051681')) {function content_5309d2dc15f027_87051681($_smarty_tpl) {?>
<!-- Block categories module -->
<?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value!=''){?>
	<div class="ma-nav-mobile-container hidden-desktop">
		<div class="navbar">
			<div id="navbar-inner" class="navbar-inner navbar-inactive">
				<div class="menu-mobile">
					<a class="btn btn-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<span class="brand"><?php echo smartyTranslate(array('s'=>'Category'),$_smarty_tpl);?>
</span>
				</div>
				<ul id="ma-mobilemenu" class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value){?>dhtml<?php }?>  mobilemenu nav-collapse collapse">
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']){?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php }?>
					<?php } ?>
				</ul>
                                <script type="text/javascript">
                                // <![CDATA[
                                        // we hide the tree only if JavaScript is activated
                                        $('div#categories_block_left ul.dhtml').hide();
                                // ]]>
                                </script>
			</div>
		</div>
</div>
<?php }?>
<!-- /Block categories module -->

<div class="nav-container visible-desktop">
    <div id="pt_custommenu" class="pt_custommenu">
        <?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

    </div>
</div>

<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = <?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
;
var CUSTOMMENU_POPUP_TOP_OFFSET = <?php echo $_smarty_tpl->tpl_vars['top_offset']->value;?>
;
//]]>
</script><?php }} ?>