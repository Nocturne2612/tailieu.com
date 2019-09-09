<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 13:14:10
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57356057659813af472ce02-97202039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6776f21b83fd916e49f02afa1e12c4a9a76c69c9' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1519712046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57356057659813af472ce02-97202039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813af47892a6_78605303',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813af47892a6_78605303')) {function content_59813af47892a6_78605303($_smarty_tpl) {?>﻿<div id="content">
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
				
            <ul class="thumbnail-group fn-clear">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new'),true);?>

            </ul>

        </div>
		
		<!-- // adsense-->	
				<div style="text-align:center; ">
				<!-- QC_TuDong -->
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-side"
     data-ad-layout-key="-f5+2u+dv-cs-ac"
     data-ad-client="ca-pub-9158244511857348"
     data-ad-slot="4501451364"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!-- // end adsense-->
		
        <div style="text-align:center; "></br>
		<a style="width:200px;" class="btn btn-primary" href="<?php echo @constant('ROOT_URL');?>
/thu-vien-3ds-max.html">Xem nhiều hơn</a></br>



		</div>
    </div>
</div>

        <?php }} ?>
