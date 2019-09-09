<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:55:58
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:336235075b28a8fed56e76-03854314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c5a375c3a071de7cefbef87f444302249b4e92e' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1529384683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336235075b28a8fed56e76-03854314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a8fed9fe43_59717048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a8fed9fe43_59717048')) {function content_5b28a8fed9fe43_59717048($_smarty_tpl) {?>﻿<div id="content">
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
