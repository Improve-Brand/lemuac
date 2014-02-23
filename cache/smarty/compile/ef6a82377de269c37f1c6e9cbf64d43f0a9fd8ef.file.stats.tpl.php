<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:49
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181041975552f15e618fdf55-44628009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6a82377de269c37f1c6e9cbf64d43f0a9fd8ef' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/stats/stats.tpl',
      1 => 1390343441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181041975552f15e618fdf55-44628009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e61935fe5_68738541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e61935fe5_68738541')) {function content_52f15e61935fe5_68738541($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>