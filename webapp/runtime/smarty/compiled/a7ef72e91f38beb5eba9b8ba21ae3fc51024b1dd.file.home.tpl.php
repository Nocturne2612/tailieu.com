<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:03
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/layouts/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173715627459813af47e4448-81116851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ef72e91f38beb5eba9b8ba21ae3fc51024b1dd' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/layouts/home.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173715627459813af47e4448-81116851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813af4816ca7_52276436',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813af4816ca7_52276436')) {function content_59813af4816ca7_52276436($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
    <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang;?>
"/>
            <meta name="description" content="<?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->desc);?>
"/>
            <meta name="language" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang;?>
"/>
            <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->keywords;?>
"/>
            <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->author;?>
"/>
            <meta name="copyright" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->copyright;?>
"/>
            <meta name="robots" content="index,archive,follow,noodp"/>
            <meta name="googlebot" content="index,archive,follow,noodp"/>
            <meta name="msnbot" content="all,index,follow"/>
            <link rel="alternate" href="https://tailieukientruc.net/" hreflang="x-default" />
            <link rel="icon" sizes="228x228" href="<?php echo @constant('ICON');?>
"/>
            <link rel="apple-touch-icon" href="<?php echo @constant('ICON');?>
"/>
            <title><?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->pageTitle);?>
</title>
            <meta property="fb:admins" content="1166439067"/>
            <meta property="fb:app_id" content="882475878492163"/>
            <meta name="p:domain_verify" content="193005d7a6b9c4139f83cea395207688"/>

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9158244511857348",
			enable_page_level_ads: true
			});
			</script>
			
	    <link rel="stylesheet" href="https://tailieukientruc.net/assets/tailieu/popup/qc.css">	
		<script type="text/javascript" src="https://code.jquery.com/jquery­1.9.1.js"></script>
		<script type="text/javascript" src="https://tailieukientruc.net/assets/tailieu/popup/jquery.popup.js"></script>	
		
		<script type="text/javascript" >
			$(window).load(function() {
			  $('#myModal').linhnguyen($('#myModal').data());
			});
		</script>	
	

			
    </head>
            
    <body>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=882475878492163";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65082801-1', 'auto');
  ga('send', 'pageview');

</script>





        
        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'head'),true);?>

		
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'footer'),true);?>

		
		
		
    </body>
</html>
<?php }} ?>
