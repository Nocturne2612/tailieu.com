<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="{$this->lang}" />
    <meta name="description" content="{CHtml::encode($this->desc)}" />
    <meta name="language" content="{$this->lang}" />
    <meta name="keywords" content="{$this->keywords}" />
    <meta name="author" content="{$this->author}" />
    <meta name="copyright" content="{$this->copyright}" />
    <meta name="robots" content="index,archive,follow,noodp" />
    <meta name="googlebot" content="index,archive,follow,noodp" />
    <meta name="msnbot" content="all,index,follow" />
    <link rel="alternate" href="https://tailieukientruc.net/" hreflang="x-default" />
    <link rel="icon" sizes="228x228" href="{$smarty.const.ICON}" />
    <link rel="apple-touch-icon" href="{$smarty.const.ICON}" />
    <title>{CHtml::encode($this->pageTitle)}</title>
    <meta property="fb:admins" content="1166439067" />
    <meta property="fb:app_id" content="882475878492163" />
    <meta name="p:domain_verify" content="193005d7a6b9c4139f83cea395207688" />

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9158244511857348",
            enable_page_level_ads: true
        });
    </script>

    <link rel="stylesheet" href="https://tailieukientruc.net/assets/tailieu/popup/qc.css" />
    <script type="text/javascript" src="https://tailieukientruc.net/assets/tailieu/popup/jquery.popup.js"></script>
</head>

<body>
    <div id="fb-root"></div>
    {literal}
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
    <div id="wrapper" class="home  UNLOGIN VND">


        {$this->widget('TWidgets',['methodName'=>'head'],true)}

        {$content}
        {$this->widget('TWidgets',['methodName'=>'footer'],true)}

        <div id="side-navigation" class="side-navigation" style="">
            <div class="side-group">
                <div class="side-function-wrap">
                    <ul class="side-function">
                        <li class="side-toTop">
                            <a href="javascript:;">
                                <i class="iconfont icon-zhiding"></i>
                            </a>
                            <a href="javascript:;" rel="nofollow" class="hide-top">TOP</a>
                        </li>
                    </ul>
                </div>

            </div>


        </div>
    </div>
    <script type="text/javascript" src="/assets/tailieu/js/nganluong.apps.mcflow.js"></script>
</body>

</html>