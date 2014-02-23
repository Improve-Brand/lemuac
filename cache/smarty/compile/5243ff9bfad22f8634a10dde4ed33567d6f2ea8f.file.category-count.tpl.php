<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:05
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204586506652f15e719173b2-87834624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5243ff9bfad22f8634a10dde4ed33567d6f2ea8f' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/category-count.tpl',
      1 => 1390347888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204586506652f15e719173b2-87834624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e7197d253_42237445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e7197d253_42237445')) {function content_52f15e7197d253_42237445($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>