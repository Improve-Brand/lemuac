<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 05:52:11
         compiled from "/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posmodeproduct/swithmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19329482245309d2dbb418e1-77506353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b1310329e26891400ae6ea116543a0e77308af' => 
    array (
      0 => '/Applications/MAMP/htdocs/lemuac/themes/pos_corau/modules/posmodeproduct/swithmode.tpl',
      1 => 1391946387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19329482245309d2dbb418e1-77506353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5309d2dbba20c3_10805283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309d2dbba20c3_10805283')) {function content_5309d2dbba20c3_10805283($_smarty_tpl) {?><script type='text/javascript'>
//<![CDATA[

function setCookie1(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
function setCookie(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setTime(exdate.getTime() + (expiredays * 86400000));

	document.cookie= c_name + "=" + escape(value) + ((expiredays==null) ? "" : ";expires=" + exdate.toUTCString());
}
function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

$(document).ready(function() {
		 setCookie('product_mode', 'grid',1);  
         var mode_product = '<?php echo $_smarty_tpl->tpl_vars['product_mode']->value;?>
'; 
         var modeButton = '<div id="view_as">';
            if(mode_product == 'grid') {
                modeButton += '<div class="switch_mode products_left_grid_button active"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_left_grid_button"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            }
            if(mode_product == 'list') {
                modeButton += '<div class="switch_mode products_right_grid_button active"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_right_grid_button"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            }
            modeButton += '</div>';
			
			var modeP = getCookie('product_mode');
			/*if (typeof(modeP) == "undefined")  {
				 setCookie('product_mode', 'grid',1);  
			}*/

         var selectMode = '<select name ="switch_mode_product" class = "switch_mode_product">';
             if(mode_product == 'list') {
                selectMode += '<option value="list" selected ="selected"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="list"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             }
             if(mode_product == 'grid') {
                selectMode += '<option value="grid" selected = "selected"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="grid"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             }
             selectMode +='</select>';

    
         //$('.content_sortPagiBar .product_mode_view').append(modeButton);
		 $('.sortPagiBar .mode-view').append(modeButton);
         //$('.content_sortPagiBar').append(selectMode);
		 
         $('.switch_mode_product').bind('change', function() {
            var url = window.location.href;
            if(mode_product!=""){
                var mode = $(this).val();
             
                if(mode=='grid'){
                        setCookie('product_mode', 'grid',1);  
                        location.reload();
                }
                if(mode=='list'){
                     
                     setCookie('product_mode', 'list',1);  
                       location.reload();
                }
			
            }
          
         });
      
	$('.products_left_grid_button').bind('click', function(){
				$('.products_right_grid_button').removeClass('active');
				$(this).addClass('active');
                //grid
                setCookie('product_mode', 'grid',1); 
				reloadContent();
  
	});
	
	$('.products_right_grid_button').bind('click', function(){
			$('.products_left_grid_button').removeClass('active');
			$(this).addClass('active');
             //list
             setCookie('product_mode', 'list',1);  
			 reloadContent();
  	});
});
//]]>
</script>

<?php }} ?>