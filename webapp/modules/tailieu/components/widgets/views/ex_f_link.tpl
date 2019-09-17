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
            <div class="foot-item foot-pngtree xs-hide">
                <dl>
                    <dt>HƯỚNG DẪN</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 2}
                            <dd>
                                <a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
            <div class="foot-item foot-pngtree xs-hide">
                <dl>
                    <dt>TRỢ GIÚP</dt>
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
                <i class="icon-pngtree"></i><i class="iconfont icon-copyright "></i> 2014-2019 Thư viện kiến trúc - tài liệu cho kiến trúc sư. All Rights Reserved.
            </p>
            <div class="foot-bottom-payment">
                <p>Thanh toán đảm bảo:</p>
                <figure>
                    <img data-original="/assets/tailieuv3/images/nganluong.png" class="" alt="" style="display: inline;" src="/assets/tailieuv3/images/nganluong.png">
                    <img data-original="/assets/tailieuv3/images/footPayment.png" class="" alt="" style="display: inline;" src="/assets/tailieuv3/images/footPayment.png">
                </figure>
            </div>
        </div>
    </div>
</div>
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