<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:47
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/mobile/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13358553855309d15bec5710-14175598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423cfa70358b706415535cdba5ec37de2619e44a' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/mobile/search.tpl',
      1 => 1391946262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13358553855309d15bec5710-14175598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbProducts' => 0,
    'search_query' => 0,
    'search_tag' => 0,
    'ref' => 0,
    'instantSearch' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d15c1089f3_28079860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d15c1089f3_28079860')) {function content_5309d15c1089f3_28079860($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/lemuac/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?>
	<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value>0){?>
		"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['search_tag']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['ref']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ref']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value){?>
	<div data-role="content" id="content">
		<h3 class="nbresult"><span class="big"><?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1){?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?></h3>
		
		<?php if (!isset($_smarty_tpl->tpl_vars['instantSearch']->value)||(isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&!$_smarty_tpl->tpl_vars['instantSearch']->value)){?>
		<div class="clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./category-product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('container_class'=>"container-sort"), 0);?>

		</div>
		<?php }?>
		
		<hr/>
		<?php if (!isset($_smarty_tpl->tpl_vars['instantSearch']->value)||(isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&!$_smarty_tpl->tpl_vars['instantSearch']->value)){?>
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("./category-product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		
		<?php if (!isset($_smarty_tpl->tpl_vars['instantSearch']->value)||(isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&!$_smarty_tpl->tpl_vars['instantSearch']->value)){?>
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		
		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- #content -->
<?php }else{ ?>
	<p class="warning">
		<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
		<?php }elseif(isset($_smarty_tpl->tpl_vars['search_tag']->value)&&$_smarty_tpl->tpl_vars['search_tag']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
"
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Please enter a search keyword'),$_smarty_tpl);?>

		<?php }?>
	</p>
<?php }?><?php }} ?>