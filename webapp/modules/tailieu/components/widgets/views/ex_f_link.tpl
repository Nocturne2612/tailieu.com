<div id="v2-foot" class="v2-footer">
    <div class="w1520">
        <div class="xs-contain">
            <div class="xs-footer-box">
                <a href="/about" rel="nofollow">
                    ABOUT
                </a>
                <span></span>
                <a href="javascript:;" rel="nofollow" onclick="$('.side-contact').trigger('click')" class="contact-foot">
                    Contact us
                </a>
            </div>
        </div>
        <div class="foot-inner">
            <div class="foot-item foot-pngtree xs-hide">
                <dl>
                    <dt>TRANG</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 1}
                            <dd>
                                <a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
            <div class="foot-item foot-help xs-hide">
                <dl>
                    <dt>TRỢ GIÚP</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 2}
                            <dd>
                                <a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
            <div class="foot-item foot-legal xs-hide">
                <dl>
                    <dt>PHÁP LÝ</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 3}
                            <dd>
                                <a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a>
                            </dd>
                        {/if}
                    {/foreach}

                </dl>
            </div>
            <div class="foot-item foot-follow">
                <dl>
                    <dt>MẠNG XÃ HỘI</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 4}
                            <dd>
                                <a target="_blank" href="{$item.link}" rel="nofollow" class="foot-btn"
                                   style="background-size: contain;
                                           background-repeat: no-repeat;
                                           background-image: url(https://tailieukientruc.com/{$smarty.const.IMG_LINK}{$item.image});">
                                </a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
        </div>
        <div class="foot-bottom">
            <p class="foot-bottom-text">
                <i class="icon-pngtree"></i><i class="iconfont icon-copyright "></i> 2017-2019 Shanghai HuaiTu Network Technology Co., Ltd. -All Rights Reserved.
            </p>
            <div class="foot-bottom-payment">
                <p>Secure Payment:</p>
                <figure>
                    <img data-original="//js.pngtree.com/web3/images/home/jcb.png?code=156775615209" class="" alt="" style="display: inline;" src="//js.pngtree.com/web3/images/home/jcb.png?code=156775615209">
                    <img data-original="//js.pngtree.com/web3/images/home/footPayment.png?code=156775615209" class="" alt="" style="display: inline;" src="//js.pngtree.com/web3/images/home/footPayment.png?code=156775615209">
                </figure>
            </div>
        </div>
    </div>
</div>
<div id="side-navigation" class="side-navigation" style="">
    <div class="side-card">
        <h6 class="side-card-title">Share and get free downloads</h6>
        <div class="side-card-contain" style="display: none;">
            <div class="side-card-copy">
                <span class="side-card-copytext">https://pngtree.com/invite-login/MTQ4MDUyMjk=?f=lk</span>
                <a href="javascript:;" class="side-card-copybtn" data-share="sidelk">Copy</a>
            </div>
            <div class="side-card-linkgroup">
                <a href="javascript:;" class="side-card-link" data-share="sidefb" data-url="https://www.facebook.com/dialog/share?app_id=141858443049568&amp;display=popup&amp;href=https%3A%2F%2Fpngtree.com%2Finvite-login%2FMTQ4MDUyMjk%3D?f=fb"><i class="icon-fb"></i></a>
                <a href="javascript:;" class="side-card-link" data-share="sideme" data-url="https://pngtree.com/invite-login/MTQ4MDUyMjk=?f=me?>"><i class="icon-msg"></i></a>
            </div>
            <p class="side-card-tips"><i class="icon-gift"></i>Up to 40 downloads for every friend you invite</p>
            <p class="side-card-tips">More info:
                <a href="/invite-friends" data-enter_referral="side" target="_blank"><span>click here&gt;&gt;</span></a>
            </p>
            <a href="javascript:;" class="side-card-brand"></a>
        </div>
    </div>
    <div class="side-group">
        <div class="side-follow-wrap show" style="">
            <div class="side-entrance side-share">
                <a href="javascript:;">
                    <i class="icon-entrance"></i>
                </a>
            </div>
            <p class="side-follow-title">Follow</p>
            <ul class="side-follow">
                <li class="side-follow-facebook">
                    <a target="_blank" rel="nofollow" href="https://www.facebook.com/pngtree/">
                        <i class="iconfont icon-facebook"></i>
                    </a>
                </li>
                <li class="side-follow-twitter">
                    <a target="_blank" href="https://twitter.com/pngtree" rel="nofollow">
                        <i class="iconfont icon-tuite"></i>
                    </a>
                </li>
                <li class="side-follow-pinterest">
                    <a target="_blank" href="https://www.pinterest.com/pngtree/" rel="nofollow">
                        <i class="iconfont icon-pinterest"></i>
                    </a>
                </li>
                <li class="side-follow-instagram">
                    <a target="_blank" href="https://www.instagram.com/pngtree/" rel="nofollow">
                        <i class="iconfont icon-ins"></i>
                    </a>
                </li>
            </ul>
            <a href="javascript:;" class="side-follow-close" onclick="$('.side-follow-wrap').toggleClass('show')">
                <i class="iconfont icon-arrowLeft"></i>
                <i class="iconfont icon-arrowRight"></i>
            </a>
        </div>
        <div class="side-function-wrap">
            <ul class="side-function">
                <li class="side-contact">
                    <a href="javascript:;" rel="nofollow"><i class="iconfont icon-linedesign-"></i></a>
                    <a href="javascript:;" rel="nofollow" class="hide-contact">Contact</a>
                </li>
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