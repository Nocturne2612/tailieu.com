<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{CHtml::encode($this->desc)}"/>
    <meta http-equiv="content-language" content="{$this->lang}"/>
    <meta name="language" content="{$this->lang}"/>
    <meta name="keywords" content="{$this->keywords}"/>
    <meta name="author" content="{$this->author}"/>
    <meta name="copyright" content="{$this->copyright}"/>
    <meta name="robots" content="index,archive,follow,noodp"/>
    <meta name="googlebot" content="index,archive,follow,noodp"/>
    <meta name="msnbot" content="all,index,follow"/>

    <link rel="alternate" href="https://tailieukientruc.net/" hreflang="x-default"/>
    <link rel="icon" sizes="228x228" href="{$smarty.const.ICON}"/>
    <link rel="apple-touch-icon" href="{$smarty.const.ICON}"/>
    <title>{CHtml::encode($this->pageTitle)}</title>
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
    {literal}
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
    {/literal}
</head>
<body>
<div id="wrapper" class="home  UNLOGIN VND">
    {$this->widget('TWidgets',['methodName'=>'head'],true)}
    <div class="user-wrap">
        <div class="w1520">
            <div class="user-inner">
                {$this->widget('TWidgets',['methodName'=>'info_account'],true)}
                {$content}

            </div>
        </div>
    </div>
    {$this->widget('TWidgets',['methodName'=>'footer'],true)}
</body>
</html>
