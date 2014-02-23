<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:46
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22266654552f15e5eebd277-55184756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc8582e930d183b5e927b74c3dd23eeaa85957c' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1390343421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22266654552f15e5eebd277-55184756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e5eedb038_73764513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e5eedb038_73764513')) {function content_52f15e5eedb038_73764513($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/improvebrand.com/web/lemuac/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>