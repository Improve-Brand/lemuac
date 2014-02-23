<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:45:24
         compiled from "/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/attachments/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20930838955309d144ec2e91-61840001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737f87d54bea7acb0b0c16c5104310a0ca41ff3a' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/admin/themes/default/template/controllers/attachments/list_action_delete.tpl',
      1 => 1391945033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20930838955309d144ec2e91-61840001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'href' => 0,
    'id' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d144eff911_92331597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d144eff911_92331597')) {function content_5309d144eff911_92331597($_smarty_tpl) {?>
<script>
	function confirmProductAttached(productList)
	{
		var confirm_text = "<?php echo smartyTranslate(array('s'=>'This attachment is associated with the following products:'),$_smarty_tpl);?>
";
		if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
'))
			return confirm(confirm_text + product_list);
		return false;
	}
</script>

<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[$_smarty_tpl->tpl_vars['id']->value])){?>return confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[$_smarty_tpl->tpl_vars['id']->value];?>
')<?php }else{ ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>

<?php }} ?>