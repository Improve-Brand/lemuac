<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 21:41:19
         compiled from "/usr/home/improvebrand.com/web/lemuac/themes/default/modules/blocklink/blocklink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5656159852f15e7faf6129-92813358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed30b658be14eba6d23fff36ae20f76973128e85' => 
    array (
      0 => '/usr/home/improvebrand.com/web/lemuac/themes/default/modules/blocklink/blocklink.tpl',
      1 => 1390348099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5656159852f15e7faf6129-92813358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklink_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f15e7fb7fb44_25739899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f15e7fb7fb44_25739899')) {function content_52f15e7fb7fb44_25739899($_smarty_tpl) {?>

<!-- Block links module -->
<div id="links_block_left" class="block">
	<p class="title_block">
	<?php if ($_smarty_tpl->tpl_vars['url']->value){?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php }else{ ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
	</p>
	<ul class="block_content bullet">
	<?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklink_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value){
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])){?> 
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']){?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php }?>
	<?php } ?>
	</ul>
</div>
<!-- /Block links module -->
<?php }} ?>