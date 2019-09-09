<div class="tkw-window " id="base-public-login" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-LoginCont rlg-main quick-login-cont">
            <span class="cls-btn"></span>
            <div class="login-wrap">
                <div class="login-section">
                    <div class="rlg-with-box">
                        <p class="big-tit">Login pngtree</p>
                        <p class="small-tit">with your social network.</p>
                        <div class="share-website clearfix ">
                            <a href="{SystemBase::buildUrl('tailieu/login/google',[])}" rel="nofollow" data-type="gg" class="btn-google  fl-l">
                                <i class="iconfont icon-google"></i>Google</a>
                            <a href="{$fb_login}" rel="nofollow" data-type="fb"
                               class="btn-facebook  fl-l">
                                <i class="icon-facebook iconfont"></i>Facebook
                            </a>
                        </div>
                    </div>
                    <div class="fg-line"> or </div>
                    <!-- 快速登录部分 -->
                    <div class="quick-login-box" style="display: none;">
                        <div class="quick-login-inner">
                            <a href="javascript:;" rel="nofollow">
                                <div class="quick-login-img">
                                    <img src="" alt="">
                                </div>
                                <p class="quick-login-username"></p>
                            </a>
                        </div>
                        <p class="wx-prompt">
                            <a href="javascript:;" rel="nofollow" class="another-login-btn">Login with another account</a>
                            <span class="fl-r">Not a member?                                
                                <a href="javascript:;" rel="nofollow" id="base-reg-trigger" class="reg-trigger">Register</a>
                            </span>
                        </p>
                    </div>
                    <!-- 其他账号登录部分 -->
                    {CHtml::beginForm('/site/login','post',['enctype' => '','class'=> 'other-account','id' => 'login_form_header'])}
                    <input type="email" maxlength="100" id="base-public-login-email-text" placeholder="Email" name="email_login_header" />
                    <div class="password-box">
                        <input type="password" maxlength="20" id="base-public-login-password-text"
                               placeholder="Password" class="pwdPut" name="password_login_header"/>
                        <i class="iconfont icon-w_yanjingkai password_toggle"></i>
                    </div>
                    <a class="ipt-btn" id="base-sub-Login-Btn" />Login</a>
                    <p class="wx-prompt">
                        <a href="/password/find" style="" class="reg-trigger">Reset my password</a>
                        <span class="fl-r">Not a member?                                
                            <a href="javascript:;" rel="nofollow" id="base-reg-trigger"
                               class="reg-trigger">Register</a>
                        </span>
                    </p>
                    {CHtml::endForm()}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tkw-window " id="base-register-window" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-registerCont rlg-main" >
            <span class="cls-btn"></span>
            <div class="register-wrap">
                <!-- 侧边隐藏 -->
                <div class="register-asideImage">
                    <p class="register-asideImage-title">pngtree</p>
                    <p class="register-asideImage-text"><span style="color:#78c972;">5,563,653+</span> designers have joined Pngtree</p>
                </div>
                <!-- 侧边隐藏 -->
                <!-- 主体 -->
                <div class="register-section">
                    <div class="rlg-with-box">
                        <p class="big-tit">Register and start download</p>
                        <p class="small-tit">

                        </p>
                        <div class="share-website clearfix ">
                            <!--                    <a href="javascript:;" rel="nofollow" data-type="fb" style="display: none;"  class="btn-facebook base-go-login fl-l"><i class="icon-facebook"></i>Facebook</a>-->
                            <a href="{SystemBase::buildUrl('tailieu/login/google',[])}" rel="nofollow" data-type="gg" class="btn-google base-go-login fl-l">
                                <i class="iconfont icon-google"></i>Google</a>
                            <a href="{$fb_login}" rel="nofollow" data-type="fb"
                               class="btn-facebook base-go-login fl-l">
                                <i class="iconfont icon-facebook"></i>Facebook</a>
                        </div>
                    </div>
                    <div class="fg-line">
                        or </div>
                        {CHtml::beginForm('/site/register','post',['enctype' => '','class'=> 'other-account','id' => 'register_form_header'])}
                            <input class="ui-input" id="email" name="email" placeholder="Email" type="email" data-toggle="popover" autocomplete="off" data-placement="bottom" value="">
                            <input class="ui-input" id="mobile_phone" name="mobile_phone" placeholder="Số điện thoại" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="">
                            <input class="ui-input" id="password" name="password" placeholder="Mật khẩu" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                            <input class="ui-input" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                            <select class="ui-input" name="gender" id="gender">
                                <option  value="" selected="selected">-- Chọn giới tính --</option>
                                <option value="M" >NAM</option>
                                <option value="F">NỮ</option>
                            </select>
                            <a class="ipt-btn" id="base-sub-regist-Btn">Register</a>
                    {CHtml::endForm()}

                    <p class="window-register-tips">By creating an account, I agree to Pngtree's <a
                            href="/terms-of-service">Terms of Service</a>, <a href="/privacy-policy">Privacy Policy</a>
                        and <a href="/protocol">Intellectual Property Rights</a></p>

                    <p class="wx-prompt">Already have an account? <a href="javascript:;" rel="nofollow"
                                                                     id="base-login-trigger" class="login-trigger">Log in</a>
                    </p>
                </div>



            </div>
        </div>

        <div class="register-success rlg-main" style="display: none;">
            <span class="cls-btn"></span>

            <p class="big-tit">Thank you!</p>
            <p class="small-tit" >
                Đăng ký thành công
            </p>
        </div>
    </div>
</div>                    








{$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_TOP'],true)}
<div id="v2-head" class="v2-header">
    <div class="header clearfix">
        <!-- logo -->
        <!-- Topnav -->
        <ul class="fl-l Topnav" style="display: block">
            <li>
                <a href="{$smarty.const.ROOT_URL}">Trang chủ</a>
            </li>
            <li class="pulldown-box ga-c" data-ga="Danh mục">
                <a href="#">Danh mục</a>
                <div class="drop-down tran right">
                    <ul class="mainCont">
                        {$this->widget('TWidgets',['methodName'=>'CategoryMenu','check'=>false],true)}

                    </ul>
                </div>
            </li>
            <li class="nav-item "><a ref="nofollow" class="nav-link" href="{SystemBase::buildUrl('tailieu/home',['sort'=>'hot'])}">Models mới</a></li>
            <li class="nav-item "><a ref="nofollow" class="nav-link" href="{SystemBase::buildUrl('tailieu/home',['sort'=>'free'])}">MIỄN PHÍ</a></li> 
            <li class="nav-item "><a ref="nofollow" class="nav-link" href="{SystemBase::buildUrl('tailieu/categorynews',[])}">TIN TỨC</a></li> 
        </ul>
        <!-- right infor -->
        <div class="Top-infor fl-r clearfix">
            <!--设计师上传入口-->
            <div class="ti-credit fl-l desinger-head-btn" style="display: block">
                <a rel="nofollow" href="{SystemBase::buildUrl('tailieu/account/upload',[])}" data-join='head' target="_blank" data-invite-click="button" class="btn-Referral designer-project ga-c" data-ga="UPLOAD A MODEL"><i class="iconfont icon-upload"></i>UPLOAD A MODEL </a>
                <a rel="nofollow" href="{SystemBase::buildUrl('tailieu/account/upload',[])}" target="_blank" data-invite-click="button" class="btn-Referral designer-upload ga-c" data-ga="Go_Upload" style="display:none;"><i class="iconfont icon-upload"></i>Go Upload</a>
            </div>
            <!--设计师上传入口END-->
            <div class="fl-l top-collect-box pr"  style="display: block">
                <a class="iconfont icon-star"></a>
                <div class="top-collect-down">
                    <img src="//js.pngtree.com/v2/images/v2/collect-xx.jpg" alt="">
                    <p><i class="iconfont icon-star"></i>Ctrl+D</p>
                    <p>Mark us if you like us</p>
                </div>
            </div>
            {if !$check_login}
                <div class="Beforelogin-boxs fl-l">
                    <a href="javascript:;" rel="nofollow" class="btn-logo base-public-login-button index-login-click" data-lg="">Login</a>
                    <a href="javascript:;" rel="nofollow" class="btn-register base-public-register-button  index-login-reg" data-lg="">Register</a>
                </div>
            {else}
                <div class="user-infor fl-l">
                    <a href="{SystemBase::buildUrl('tailieu/account',[])}" class="user-entry ga-c" data-ga="User_Center">
                        <div class="user-img">
                            <img  src="/assets/images/007-nature-29.png">
                        </div>
                        <span class="user-name">0343373988 MrT</span>
                    </a>



                    <!-- 用户下拉界面 -->
                    <!--普通用户下拉界面-->
                    <div class="user-dropbox">
                        <div class="db-top">
                            <i class="vip-icon free-vip"></i>
                            <span class="user-name">{$check_login.first_name}</span>
                            <span>UID: {$check_login.id}</span>
                        </div>
                        <div class="db-subbox">
                            <a href="{SystemBase::buildUrl('tailieu/account',[])}" class="sub-li ga-c" data-ga="User_Center" target="_blank">
                                <i class="iconfont icon-yonghu"></i>Tài khoản                                </a>
                            <a href="{SystemBase::buildUrl('tailieu/addfund',[])}" class="sub-li ga-c" data-ga="Referral_Program">
                                <i class="iconfont icon-liwu"></i>Nạp tiền                                </a>
                            <a target="_blank" href="{SystemBase::buildUrl('tailieu/account/upload',[])}" class="sub-li ga-c" data-ga="Go_Upload">
                                <i class="iconfont icon-upload"></i> Go Upload                                </a>

                            <a  href="{SystemBase::buildUrl('tailieu/account/logout',[])}" class="sub-li ga-c" data-ga="Logout"><i class="iconfont icon-tuichu"></i> Thoát</a>
                        </div>
                    </div>
                </div>
            </div>
        {/if}
    </div>
    <div class="continuous-login-tips keep-login-alert" style="display: none;">
        <a href="javascript:;" class="continuous-login-close" onclick="this.parentNode.style.display = 'none'"></a>
        <div class="continuous-login-img"></div>
        <p class="continuous-login-title">+<span class="keep-title">X</span> Points</p>
        <p class="continuous-login-text">Continuous login for <span class="keep-day">X</span> Days</p>
    </div>
</div>
</div>

<!-- v2  Scroll navigation -->
<div id="scroll-Nav" class="v2-header scroll-Nav">
    <div class="w1520 clearfix">
        <!-- logo -->
        <a href="//pngtree.com" class="Newlogo fl-l"></a>

        <!--scroll search -->
        <form  class="sb-form clearfix fl-l search-box-outer" style="">
            <div class="pulldown-title fl-l">
                {$platforms = ObjInput::get('platforms', 'int')}
                <span class="sb-val">
                    Graphic design                
                </span>
                <div class="searchItems-list tran serach-box">
                    <ul id="fixed-search-tag" class="sTt-bg search-box-item-li" data-search="top">
                        <p>SEARCH ITEMS </p>
                        {foreach item=v from=$data.parent_category}
                            <li id="{$v.id}" for="category__{$v.id}" {if $platforms == $v.id}class="current"{/if}>{$v.title}</li>
                            {/foreach}
                    </ul>
                </div>
            </div>
            <input type="text" placeholder="" class="sb-input fl-l search-box-input">
            <div class=" search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap" style="display: none;">
                <div class="search-dropdown head-dop" data-type="headen" >
                    <!--<p class="recent-search">
                        <b><i></i>RECENTLY SEARCHED:</b><span>flower</span><span>flower</span><span>flower</span><span>flower</span>
                    </p>-->
                </div>
            </div>
            <a href="javascript:;" class="sb-btn fl-l search-click-btn">
                <i class="iconfont icon-sousuo"></i>
            </a>
        </form>

        <!-- search search end -->
        <!-- right infor -->
        {if !$check_login}
            <div class="Top-infor fl-r clearfix">

                <div class="Beforelogin-boxs fl-l">

                    <a href="javascript:;" {SystemBase::buildUrl('tailieu/login',[])} rel="nofollow" class="btn-logo base-public-login-button index-login-click" data-lg="">Login</a>
                    <a href="javascript:;" rel="nofollow" {SystemBase::buildUrl('tailieu/register',[])} class="btn-register base-public-register-button  index-login-reg" data-lg="">Register</a>

                </div>

            </div>
        {else}
            <!-- user -->
            <div class="user-infor fl-l">
                <a href="{SystemBase::buildUrl('tailieu/account',[])}" class="user-entry ga-c" data-ga="User_Center">
                    <div class="user-img">
                        <img  src="/assets/images/007-nature-29.png">
                    </div>
                    <span class="user-name">0343373988 MrT</span>
                </a>



                <!-- 用户下拉界面 -->
                <!--普通用户下拉界面-->
                <div class="user-dropbox">
                    <div class="db-top">
                        <i class="vip-icon free-vip"></i>
                        <span class="user-name">{$check_login.first_name}</span>
                        <span>UID: {$check_login.id}</span>
                    </div>
                    <div class="db-subbox">
                        <a href="{SystemBase::buildUrl('tailieu/account',[])}" class="sub-li ga-c" data-ga="User_Center" target="_blank">
                            <i class="iconfont icon-yonghu"></i>Tài khoản                                </a>
                        <a href="{SystemBase::buildUrl('tailieu/addfund',[])}" class="sub-li ga-c" data-ga="Referral_Program">
                            <i class="iconfont icon-liwu"></i>Nạp tiền                                </a>
                        <a target="_blank" href="{SystemBase::buildUrl('tailieu/account/upload',[])}" class="sub-li ga-c" data-ga="Go_Upload">
                            <i class="iconfont icon-upload"></i> Go Upload                                </a>

                        <a  href="{SystemBase::buildUrl('tailieu/account/logout',[])}" class="sub-li ga-c" data-ga="Logout"><i class="iconfont icon-tuichu"></i> Thoát</a>
                    </div>
                </div>
            </div>
        </div>
    {/if}
</div>

</div>





{literal} 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'auto', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>

    <!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->


    <script type="text/javascript">        function searching() {
            var cate = document.getElementById('tid').value;
            var keyword = document.getElementById('q').value;
            if (keyword == '' || typeof keyword == 'undefined') {
                return false;
            }
            keyword = keyword.replace(/&quot;/g, '"');
            keyword = keyword.replace(/([?*#<>!$%^&()/]+)/g, "");
            keyword = keyword.replace(/([ ]+)/g, " ");
            keyword = keyword.replace(/"/g, '');
            if (parseInt(cate) > 0) {
                location.href = '{/literal}{$smarty.const.ROOT_URL}/{literal}tim-kiem/' + cate + '-' + encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';
            } else {
                location.href = '{/literal}{$smarty.const.ROOT_URL}/{literal}tim-kiem/' + encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';
            }
            return false;
        }</script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1563895650496031',
                cookie: true,
                xfbml: true,
                version: 'v3.0'
            });

            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }
    </script>

{/literal}

<div class="xs-contain">
    <!--    <div class="xs-nav-mask" onclick="$('.xs-header-box-btn').click()"></div>--><!--head_search_type-->
    <div class="xs-header">
        <a href="/" class="xs-header-logo"></a>
        <a href="javascript:;" class="xs-header-box-btn"><i class="iconfont icon-menu"></i></a>
        <a href="javascript:;" class="xs-header-search">
            <i class="iconfont icon-sousuo"></i>
        </a>
        <div class="xs-header-search-box bg-greenLinear fcc">
            <a class="xs-header-search-close">
                <i class="iconfont icon-guanbi"></i>
            </a>
            <div class="xs-header-search-wrap">
                <input type="text" class="xs-header-search-input" placeholder="Seach...">
                <a href="javascript:;" class="xs-header-search-btn" data-type="-1">
                    <i class="iconfont icon-sousuo"></i>
                </a>
            </div>
        </div>
        <div class="xs-nav-box">
            <a href="javascript:;" class="xs-nav-box-close">
                <i class="iconfont icon-guanbi"></i>
            </a>
            {if !$check_login}
                <div class="xs-nav-header">
                    <div class="xs-nav-header-unlogin">
                        <a href="javascript:;" class="xs-nav-header-toLogin base-public-login-button">Login</a>
                    </div>
                </div>
            {else}
                <div class="xs-nav-header">
                    <div class="xs-nav-header-user">
                        <a href="javascript:;" class="xs-nav-header-avatar">
                            <img src="/assets/images/007-nature-29.png" alt="">
                        </a>
                        <a target="_blank" href="{SystemBase::buildUrl('tailieu/account',[])}" class="xs-nav-header-btn">Thông tin</a>
                        <a href="{SystemBase::buildUrl('tailieu/account/logout',[])}" class="xs-nav-header-btn">Logout</a>
                    </div>
                </div>

            {/if}
            <ul class="xs-nav">
                {foreach item=v from=$data.parent_category}
                    <li > <a href="/">{$v.title}</a></li>
                    {/foreach}
                <li class="on">
                    <a href="/">Trang chủ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
