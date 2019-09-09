<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 13:48:12
         compiled from "/var/www/html/Mach7Clinical/tailieu/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4455915945d2d732c4f9666-11375281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a94323d2ddc8089f161116c3c29f45ee422496e' => 
    array (
      0 => '/var/www/html/Mach7Clinical/tailieu/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1563125848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4455915945d2d732c4f9666-11375281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d732c539793_19585191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d732c539793_19585191')) {function content_5d2d732c539793_19585191($_smarty_tpl) {?>﻿<div id="content">
    <div class="layout-fluid  fn-clear">
        <div class="thumbnail-wrapper">
		
		<!-- // Popup thong bao-->
		<!--<div id="myModal" class="linhnguyen-modal">
			<a href="https://www.facebook.com/thuvienkientrucchiase/" target="_blank"><img src="https://tailieukientruc.net/assets/tailieu/popup/popup-tl.gif" /></a>
			<a class="close-linhnguyen-modal">X</a>
		</div>-->			
		<!-- // end Popup thong bao-->
<div class="ui-box listing-aside" style="text-align:center; ">	
   <!-- QC_TuDong -->
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>
   
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>
   

</div>
		<!-- // end_adsense-->	
				
            
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new'),true);?>



        </div>
		
</div>
    </div>
</div>
<!-- // end_adsense-->		
<div class="ui-box listing-aside" style="text-align:center; ">	
   <!-- QC_TuDong -->
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>
   
</div>
<!-- // end_adsense-->
        <?php }} ?>
