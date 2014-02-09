<?php /* Smarty version Smarty-3.1.14, created on 2014-02-07 19:51:18
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/default/mobile/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186755282852f5393684b0d1-59312372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a3e97946122917564b090fe74308e2f4cde4a57' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/default/mobile/category-tree-branch.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186755282852f5393684b0d1-59312372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f539368eaec9_73716930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f539368eaec9_73716930')) {function content_52f539368eaec9_73716930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/lemuac/tools/smarty/plugins/modifier.escape.php';
?>

<li <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>data-icon="more"<?php }?>>
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'htmlall', 'UTF-8');?>

		<ul data-inset="true">
			<li>
				<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['desc'], 'htmlall', 'UTF-8');?>
" data-ajax="false">
					<?php echo smartyTranslate(array('s'=>'See products'),$_smarty_tpl);?>

				</a>
			</li>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

		<?php } ?>
		</ul>
	<?php }else{ ?>
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['desc'], 'htmlall', 'UTF-8');?>
" data-ajax="false">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'htmlall', 'UTF-8');?>

		</a>
	<?php }?>
</li>
<?php }} ?>