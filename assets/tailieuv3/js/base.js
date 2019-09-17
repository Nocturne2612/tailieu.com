var getInjectData = function(){
            return {
                'isAlert':0,
                'isBack':0,
                'Country':0,
            }
        }

var pvData = {};//统计数据
var searchKeywordData = {};//搜索数据
var csrf = 'UA_mHjHOlw_yJiP-puZPsNGicioz_tJ3jj5kGVPIIOs_boxLeKTDQrNgEpDKojn7ofckGl62lz7BSgNPAKxihA==',
        vip_type = '0',
        vip_expired = 0,
        extra_privilege = 0,
        alert_privilege = 0,
        is_old = 0,
        down_count = '0',
        down_sum = '0',
        lang = 'en',
        STYLE = '//js.pngtree.com/v2',
        no_bot = 1,
        search_ajax = '201',
        source_referer = '201',
        sem_id = '0',
        controll_name = 'element',
        controll_action = 'detail',
        head_search_type = '1',
        page_controller = '',
        g_sitekey = '6LfJlHwUAAAAAM_ntRNed0h50UGsaT4RsWa4Q7ds',
        vip_enterprise_status = 0;
local_ip_hash = 1255669760;
function addLoadEvent(b) {
    var a = window.onload;
    if (typeof window.onload != "function") {
        window.onload = b;
    } else {
        window.onload = function () {
            a();
            b();
        }
    }
}
var getAbTest = '';//用户id
var uid = '0';//用户id
var quick_login_status = '';//用户id
var email_back = '0';//用户id
var email_country = '0';//用户id
var email_uid = '0';//用户id
var nuid = uid > 0 ? uid : undefined;
var page_controller = 'element';
var page_action = 'detail';
var pageGroup = 'element|detail|element|rf';
(function (doc, win) {
    var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth)
                    return;
                if (clientWidth >= 640) {
                    docEl.style.fontSize = '100px';
                } else {
                    docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                }
            };

    if (!doc.addEventListener)
        return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);