<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:13
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/order-slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4902233552f15e790b1c82-26411188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0e73d1a20854f2983e1c0fd3993e624c04a006' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/mobile/order-slip.tpl',
      1 => 1390347972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4902233552f15e790b1c82-26411188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'ordersSlip' => 0,
    'slip' => 0,
    'id_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e791b91f9_30258830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e791b91f9_30258830')) {function content_52f15e791b91f9_30258830($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="content" id="content">
	<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>

	<p><?php echo smartyTranslate(array('s'=>'Credit slips you have received after cancelled orders'),$_smarty_tpl);?>
.</p>
	<div class="block-center" id="block-history">
		<?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value&&count($_smarty_tpl->tpl_vars['ordersSlip']->value)){?>
			<ul data-role="listview" data-theme="c" data-inset="true" data-split-theme="c" data-split-icon="prestashop-pdf">
			<?php  $_smarty_tpl->tpl_vars['slip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersSlip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->key => $_smarty_tpl->tpl_vars['slip']->value){
$_smarty_tpl->tpl_vars['slip']->_loop = true;
?>
				<li>
					<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_order"] = new Smarty_variable($_tmp1, null, 0);?>
					<a class="color-myaccount" id="order-<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['id_order']->value)), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">
						<h3><?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
</h3>
						<p><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
</p>
						<span class="ui-li-aside"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</span>
					</a>
					<a rel="external" data-iconshadow="false" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
" data-ajax="false">
						<?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>

					</a>
				</li>
			<?php } ?>
			</ul>
		<div id="block-order-detail" class="hidden">&nbsp;</div>
		<?php }else{ ?>
			<p class="warning"><?php echo smartyTranslate(array('s'=>'You have not received any credit slips.'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div><!-- /content -->
<?php }} ?>