<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

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

    <link rel="alternate" href="http://tailieukientruc.net/" hreflang="vi-vn" />
    <link rel="icon" sizes="228x228" href="{$smarty.const.ICON}" />
    <link rel="apple-touch-icon" href="{$smarty.const.ICON}" />
    <title>{CHtml::encode($this->pageTitle)}</title>
    <meta property="fb:admins" content="1166439067" />
    <meta property="fb:app_id" content="882475878492163" />

    <meta name="p:domain_verify" content="193005d7a6b9c4139f83cea395207688" />

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


    <!--<script type='text/javascript' src='http://nhadep365.vn/js/snow.js'></script>-->

    <div class="container">
        <div id="topLink">
            {$this->widget('TWidgets',['methodName'=>'ex_link'],true)}
            <div class="mxh">
                <a class="PINTEREST" href="{$smarty.const.PINTEREST}" target="_blank"></a>
                <a class="EMAIL" href="{$smarty.const.EMAIL}" target="_blank"></a>
                <a class="GOOGLE_PLUS" href="{$smarty.const.GOOGLE_PLUS}" target="_blank"></a>
                <a class="YOUTUBE" href="{$smarty.const.YOUTUBE}" target="_blank"></a>
                <a class="TWITTER" href="{$smarty.const.TWITTER}" target="_blank"></a>
                <a class="FACEBOOK" href="{$smarty.const.FACEBOOK}" target="_blank"></a>
            </div>
        </div>
    </div>
    <div id="container" class="container"> {$this->widget('TWidgets',['methodName'=>'head'],true)}
        <div class="clearfix">
            <div id="tabs"> {$this->widget('TWidgets',['methodName'=>'nav'],true)} </div>
        </div>
        <div class="adbox" id="adpageexpanding">
            {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_TOP'],true)} </div>
        <div id="page" class="homepage threecolumn clearfix">
            <div id="maincontent" class="clearfix"> {$content} </div>
            <div id="rightsidebar" class="clearfix">
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_RIGHT_1'],true)}
                {$this->widget('TWidgets',['methodName'=>'topcountdown_right'],true)}
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_RIGHT_2'],true)} </div>
            <div id="leftsidebar" class="clearfix">
                <div id="leftNav">
                    <ul id="leftnavigation" class="leftnavigation">
                        <li class=""> <a class="first"><span>Danh mục tiêu biểu</span></a> </li>
                        {$this->widget('TWidgets',['methodName'=>'menu_left'],true)}
                    </ul>
                </div>
                <div class="clear"> </div>
                <div class="qc">
                    {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}</div>
            </div>
        </div>
        <div class="clear"> </div>
        <div id="footer"> {$this->widget('TWidgets',['methodName'=>'footer'],true)} </div>
    </div>

    <div style="position: fixed; top: 0px;   overflow: hidden;right:50%;margin-right:490px;" id="BG_leftBanner">
        {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
    </div>
    <div style="position: fixed; top: 0px; ;margin-left:490px; overflow: hidden;left:50%;" id="BG_rightBanner">
        {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_RIGHT_SLIDER'],true)}
    </div>


    {$this->widget('TWidgets',['methodName'=>'add_code'],true)}

    <div id="side-navigation" class="side-navigation" style="">
        <div class="side-card">
            <h6 class="side-card-title">Share and get free downloads</h6>
            <div class="side-card-contain" style="display: none;">
                <div class="side-card-copy">
                    <span class="side-card-copytext">https://pngtree.com/invite-login/MTQ3ODcyMjE=?f=lk</span>
                    <a href="javascript:;" class="side-card-copybtn" data-share="sidelk">Copy</a>
                </div>
                <div class="side-card-linkgroup">
                    <a href="javascript:;" class="side-card-link" data-share="sidefb"
                        data-url="https://www.facebook.com/dialog/share?app_id=141858443049568&display=popup&href=https%3A%2F%2Fpngtree.com%2Finvite-login%2FMTQ3ODcyMjE%3D?f=fb"><i
                            class="icon-fb"></i></a>
                    <a href="javascript:;" class="side-card-link" data-share="sideme"
                        data-url="https://pngtree.com/invite-login/MTQ3ODcyMjE=?f=me?>"><i class="icon-msg"></i></a>
                </div>
                <p class="side-card-tips"><i class="icon-gift"></i>Up to 40 downloads for every friend you invite</p>
                <p class="side-card-tips">More info: <a href="/invite-friends" data-enter_referral="side"
                        target="_blank"><span>click here&gt;&gt;</span></a></p>
                <a href="javascript:;" class="side-card-brand"></a>
            </div>
        </div>
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
</body>

</html>