<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:40:50
         compiled from "/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69695248652f15e6263dc52-53338627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8c504d842f96aea611abc1b8e119bee08185b9' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1390343439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69695248652f15e6263dc52-53338627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e62679c23_58317330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e62679c23_58317330')) {function content_52f15e62679c23_58317330($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/improvebrand.com/web/lemuac/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>