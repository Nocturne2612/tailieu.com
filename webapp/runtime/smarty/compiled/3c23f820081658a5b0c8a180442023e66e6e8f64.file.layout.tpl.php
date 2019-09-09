<?php /* Smarty version Smarty-3.1.19, created on 2019-07-20 11:06:40
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/layouts/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130265d2e8c5778f105-31969951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c23f820081658a5b0c8a180442023e66e6e8f64' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/layouts/layout.tpl',
      1 => 1563617327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130265d2e8c5778f105-31969951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2e8c577f0e96_22002105',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2e8c577f0e96_22002105')) {function content_5d2e8c577f0e96_22002105($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <script>
        (function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
            h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
            (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
        })(window,document.documentElement,'async-hide','dataLayer',10,
            {'GTM-PJ8J78F':true});
    </script>
            
<!--参数传递js脚本模块-->

            <!-- End Adsense tu dong-->
    </head>
    <body >
        
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
        
<div id="wrapper" class="home  UNLOGIN VND">

            <div class="window-register-top">

            </div>
            <div class="window-extra-top xs-contain mobile-question" style="display: none">
                <p class="window-extra-top-text">
                    <i class="iconfont icon-tiaocha"></i>Chance to win free 5 days Premium Plan
                    <a href="javascript:;" class="window-extra-top-close">
                        <i class="iconfont icon-guanbi"></i></a>
                    <a href="https://wj.qq.com/s2/3792165/c41c/" class="window-extra-top-link">Go</a>
                </p>
            </div>

        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'head'),true);?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <!-- // header end -->

        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'footer'),true);?>

</div>
    </body>
    
        <script>
            $( document ).ready(function() {
    addLoadEvent(function () {
        if(no_bot==1){
            var k = window.performance || window.webkitPerformance || window.msPerformance || window.mozPerformance;
            if (typeof k == 'undefined') return !1;
            var d = k.timing;
            k = d.requestStart - d.navigationStart;
            var e = d.responseStart - d.requestStart;
            var r = d.loadEventStart - d.responseStart;
            $.getJSON('/api/statistics/load-t',{_csrf:csrf,requestTime:k,serverProcessTime:e,firstScreen:r,uid:uid,country:14,pageGroup:pageGroup,executeTime:'0.0735'});
        }
    });
    if(0==1){
        alert('Your account has been logged on other devices.');
    }
});
</script>
<script>
    function Base64() {
        // private property
        _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

        // public method for encoding
        this.encode = function (input) {
            var output = "";
            var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
            var i = 0;
            input = _utf8_encode(input);
            while (i < input.length) {
                chr1 = input.charCodeAt(i++);
                chr2 = input.charCodeAt(i++);
                chr3 = input.charCodeAt(i++);
                enc1 = chr1 >> 2;
                enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                enc4 = chr3 & 63;
                if (isNaN(chr2)) {
                    enc3 = enc4 = 64;
                } else if (isNaN(chr3)) {
                    enc4 = 64;
                }
                output = output +
                    _keyStr.charAt(enc1) + _keyStr.charAt(enc2) +
                    _keyStr.charAt(enc3) + _keyStr.charAt(enc4);
            }
            return output;
        }

        // public method for decoding
        this.decode = function (input) {
            var output = "";
            var chr1, chr2, chr3;
            var enc1, enc2, enc3, enc4;
            var i = 0;
            input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
            while (i < input.length) {
                enc1 = _keyStr.indexOf(input.charAt(i++));
                enc2 = _keyStr.indexOf(input.charAt(i++));
                enc3 = _keyStr.indexOf(input.charAt(i++));
                enc4 = _keyStr.indexOf(input.charAt(i++));
                chr1 = (enc1 << 2) | (enc2 >> 4);
                chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                chr3 = ((enc3 & 3) << 6) | enc4;
                output = output + String.fromCharCode(chr1);
                if (enc3 != 64) {
                    output = output + String.fromCharCode(chr2);
                }
                if (enc4 != 64) {
                    output = output + String.fromCharCode(chr3);
                }
            }
            output = _utf8_decode(output);
            return output;
        }

        // private method for UTF-8 encoding
        _utf8_encode = function (string) {
            string = string.replace(/\r\n/g,"\n");
            var utftext = "";
            for (var n = 0; n < string.length; n++) {
                var c = string.charCodeAt(n);
                if (c < 128) {
                    utftext += String.fromCharCode(c);
                } else if((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                } else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }

            }
            return utftext;
        }

        // private method for UTF-8 decoding
        _utf8_decode = function (utftext) {
            var string = "";
            var i = 0;
            var c = c1 = c2 = 0;
            while ( i < utftext.length ) {
                c = utftext.charCodeAt(i);
                if (c < 128) {
                    string += String.fromCharCode(c);
                    i++;
                } else if((c > 191) && (c < 224)) {
                    c2 = utftext.charCodeAt(i+1);
                    string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                    i += 2;
                } else {
                    c2 = utftext.charCodeAt(i+1);
                    c3 = utftext.charCodeAt(i+2);
                    string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                    i += 3;
                }
            }
            return string;
        }
    }
    function PV() {
        var k1 = window.performance || window.webkitPerformance || window.msPerformance || window.mozPerformance;
        var d1 = k1.timing;
        server_req_time = d1.requestStart - d1.navigationStart;
        var server_exe_time = d1.responseStart - d1.requestStart;
        var loadtime = d1.loadEventStart - d1.responseStart;

        var timestamp = Date.parse( new Date() ).toString();
        timestamp = timestamp.substr(0,10);
        tableName='user_pv';
        pvData.uid = 0;
        pvData.page = 'element/detail';
        pvData.url = location.href;
        pvData.lang_version = 'en';
        pvData.server_req_time = server_req_time;
        pvData.server_exe_time = server_exe_time;
        pvData.exetime = 76;
        pvData.loadtime = loadtime;
        pvData.vip_type = 0;
        pvData.works_id = pvData.works_id || 0;
        pvData.works_type = pvData.works_type || 0;
        pvData.ref_url = document.referrer;
        // 主字段进行编码
        var jsonstr = JSON.stringify(pvData);
        var b = new Base64();
        var d = b.encode(jsonstr);
        $.get("https://tj.pngtree.com/sa.gif", { "d":d, "time":timestamp, "t":tableName},
            function(data){});
    }
    function searchKeyword(search_keyword,search_result,search_type,search,down_id){
        if (search_keyword == "" || search_type == ""){
            return false;
        }
        var timestamp = Date.parse( new Date() ).toString();
        timestamp = timestamp.substr(0,10);
        var tableName = "search_keyword";
        searchKeywordData.search_keyword = search_keyword;
        searchKeywordData.search_result = search_result !== ""?search_result:0;
        searchKeywordData.search_type = search_type;
        searchKeywordData.search = search;
        searchKeywordData.down_id = down_id;
        searchKeywordData.uid = 0;
        searchKeywordData.page = 'element/detail';
        // searchKeywordData.url = location.href;
        searchKeywordData.lang_version = 'en';
        searchKeywordData.vip_type = 0;
        // searchKeywordData.works_id = pvData.works_id || 0;
        // searchKeywordData.works_type = pvData.works_type || 0;
        searchKeywordData.ref_url = document.referrer;
        var jsonstr = JSON.stringify(searchKeywordData);
        var b = new Base64();
        var d = b.encode(jsonstr);
        $.get("https://tj.pngtree.com/sa.gif", { "d":d, "time":timestamp, "t":tableName},
            function(data){});

    }
    addLoadEvent(PV);//执行PV统计
</script>
</body>

<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

</html>
<?php }} ?>
