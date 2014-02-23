<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:11
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2684666845309d2db080434-65146514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8200ea9685adf13fdad3572549a4b53389175bd3' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1391946362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2684666845309d2db080434-65146514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'context' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d2db0d9694_96272172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2db0d9694_96272172')) {function content_5309d2db0d9694_96272172($_smarty_tpl) {?>

<!-- Block currencies module -->
<script type="text/javascript">
$(document).ready(function () {
	$("#setCurrency").mouseover(function(){
		$(this).addClass("countries_hover");
		$(".currencies_ul").addClass("currencies_ul_hover");
	});
	$("#setCurrency").mouseout(function(){
		$(this).removeClass("countries_hover");
		$(".currencies_ul").removeClass("currencies_ul_hover");
	});
});
</script>

<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		<p>
			<input type="hidden" name="id_currency" id="id_currency" value=""/>
			<input type="hidden" name="SubmitCurrency" value="" />
			<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>class="selected"<?php }?>
			<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['context']->value->currency->name;?>

		</p>
		<ul id="first-currencies" class="currencies_ul">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>class="selected"<?php }?>>
					<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
					<span class="currency_name"><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
</span></a>
				</li>
			<?php } ?>
		</ul>
	</form>
</div>
<!-- /Block currencies module -->
<?php }} ?>