<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:14
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posstaticfooter/block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20221849755309d2de0bf1e8-88760829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd090ee18441ecd86d5252ee2d23600a85d71c4e' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posstaticfooter/block_footer.tpl',
      1 => 1391946389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20221849755309d2de0bf1e8-88760829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d2de103710_01518850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2de103710_01518850')) {function content_5309d2de103710_01518850($_smarty_tpl) {?><div class="footer-static row-fluid">
	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1){?>
			<p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1),$_smarty_tpl);?>
 </p>
		      
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

		<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1){?>
		      <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

		 <?php }?>
	<?php } ?>
</div>

<?php }} ?>