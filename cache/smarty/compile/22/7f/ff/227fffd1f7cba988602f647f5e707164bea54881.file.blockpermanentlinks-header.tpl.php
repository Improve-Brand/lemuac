<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:11
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20784849685309d2db0e1dd2-39395570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227fffd1f7cba988602f647f5e707164bea54881' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1391946367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20784849685309d2db0e1dd2-39395570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'context' => 0,
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d2db192956_73721462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2db192956_73721462')) {function content_5309d2db192956_73721462($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
<li><a class="link-wishlist wishlist_block" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li><a class="link-mycart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
			<!--<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>-->
			<li class="last"><a class="link-out" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
		<?php }else{ ?>
			<li class="last"><a class="link-login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>