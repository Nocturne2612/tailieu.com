<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:06:34
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/layouts/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12614093275b28ab7a549e61-57717832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '970a9e7121815060eb1166cad49d14f6c383d0c0' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/layouts/news.tpl',
      1 => 1529384683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12614093275b28ab7a549e61-57717832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28ab7a575194_52218870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28ab7a575194_52218870')) {function content_5b28ab7a575194_52218870($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml"
      xmlns:og="https://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
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
                <meta property="fb:admins" content="truongdesign2"/>
                <meta property="fb:app_id" content="882475878492163"/>
                
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65082801-1', 'auto');
  ga('send', 'pageview');

</script>

                <title><?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->pageTitle);?>
</title>
                </head>
                <body>

                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=882475878492163";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div id="content"    >
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'head'),true);?>

                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'footer'),true);?>

                    </div>
                </body>
                </html>
<?php }} ?>
