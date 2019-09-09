<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 16:58:56
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/layouts/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143355d33da200f5ac4-76511007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbdea34b0f3d8b3360dead7560347a7025df63a0' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/layouts/account.tpl',
      1 => 1563720535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143355d33da200f5ac4-76511007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d33da201aee83_46984845',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d33da201aee83_46984845')) {function content_5d33da201aee83_46984845($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="<?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->desc);?>
"/>
            <meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->lang;?>
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

            <!-- End Adsense tu dong-->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-9158244511857348",
                    enable_page_level_ads: true
                });
            </script>
            <!-- End Adsense tu dong-->
            
                <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                    ga('create', 'UA-65082801-1', 'auto');
                    ga('send', 'pageview');

                </script>
            
    </head>
    <body >
        <div id="wrapper" class="home  UNLOGIN VND">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'head'),true);?>

<div class="user-wrap">
    <div class="w1520">
        <div class="user-inner">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'info_account'),true);?>

            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
  
        </div>
    </div>
</div>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'footer'),true);?>

    </body>
</html>
<?php }} ?>
