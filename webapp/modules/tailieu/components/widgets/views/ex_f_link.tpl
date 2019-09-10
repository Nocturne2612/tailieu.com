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
                            <dd><a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a></dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
            <div class="foot-item foot-help xs-hide">
                <dl>
                    <dt>TRỢ GIÚP</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 2}
                            <dd><a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a></dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
            <div class="foot-item foot-legal xs-hide">
                <dl>
                    <dt>PHÁP LÝ</dt>
                    {foreach $data as $k=>$item}
                        {if $item.type == 3}
                            <dd><a rel="nofollow" href="{$item.link}" target="_blank" class="foot-link" data-ga="About">{$item.name}</a></dd>
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
                                <a target="_blank" href="{$item.link}" rel="nofollow" class="foot-btn" style="backgroud: url(https://tailieukientruc.com/{$smarty.const.IMG_LINK}{$item.image})">
                                </a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            </div>
        </div>
        <div class="foot-bottom">
            <p class="foot-bottom-text"><i class="icon-pngtree"></i><i class="iconfont icon-copyright "></i> 2017-2019 Shanghai HuaiTu Network Technology Co., Ltd. -All Rights Reserved.
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