<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 14:09:35
         compiled from "/var/www/html/modernfuny.com/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6406135255d2d782fc5fc72-19457118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1224beaceb3d816473d9f8a7ba4572abda056b30' => 
    array (
      0 => '/var/www/html/modernfuny.com/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1563125848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6406135255d2d782fc5fc72-19457118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d782fca6c27_61672562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d782fca6c27_61672562')) {function content_5d2d782fca6c27_61672562($_smarty_tpl) {?>﻿<div id="content">
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
