<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:39
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15052199535309d1538c4374-21490314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b33f117e59926d573e307f73078372be25833c8' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/category-count.tpl',
      1 => 1391946226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15052199535309d1538c4374-21490314',
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
  'unifunc' => 'content_5309d153902935_22312132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d153902935_22312132')) {function content_5309d153902935_22312132($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>