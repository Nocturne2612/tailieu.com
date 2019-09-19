<div id="v2-details">
    <div class="clearfix details-box detail_ele">
        <div class="db-nav">
            <div class="detail-header">
                <h1 class="detail-title"><span class="detail-title-contain">{$output.title}</span></h1>
                <p class="detail-breadcrumbs" style="font-size: 12px;">
                    {$this->widget('TWidgets',['methodName'=>'breadcrums','data'=>$data],true)}
                </p>
            </div>
            <div class="inner-search-wrap js_search">
                <div class="inner-search-input" style="left: 5px;">
                    <input class="js_search-input" id="detailsearch-input" type="text"
                        placeholder="Tìm kiếm" data-type="0">
                </div>
                <a href="javascript:;" class="inner-search-btn bg-greenLinear js_search-btn"><i
                        class="iconfont icon-sousuo"></i></a>
            </div>
        </div>


        <div class="fl-l db-leftPic">
            <div class="detail-inner">
                <a href="#detail-more-more">
                    <div class="dbl-picbox commercial">
                        {if $output.picture <> ""}
                            <li data-thumb="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}">
                                {assign var="arr_pic" value="|"|explode:$output.picture}
                                <img data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT}{$arr_pic[0]}"
                                    itemprop="image" title="{$output.title}" alt="{$output.title}" class="lazy"
                                    style="width: 100%"
                                    >

                            </li>
                            {/if}
                    </div>
                </a>
                {literal}
                <script type="application/ld+json">
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "contentUrl": "{/literal}{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}{literal}",
                        "caption": "{/literal}{$output.title}{literal}",
                        "uploadDate": ""
                    }
                </script>
                {/literal}
                <div class="detail-infoBox">
                    <ul class="detail-info-list">
                        <li>
                            <span>{if $account}
                                <label>Upload:&nbsp;</label>
                                <a style="color:#2e9fe2"
                                    href="{Yii::app()->createUrl('tailieu/account/member',['id'=> $account.id])}"
                                    title="Views all models upload by tailieukientruc.net">{$account.first_name}
                                    {$account.last_name}</a>
                                {else}
                                <label>Upload:&nbsp;</label>
                                <a style="color:#2e9fe2" href="{$smarty.const.ROOT_URL}"
                                    title="Views all models upload by tailieukientruc.net">{$admin.fullname}</a>
                                {/if}
                            </span>
                        </li>
                        <li>
                            <label>Ngày đăng:&nbsp;</label>
                            <span>{$output.create_time|date_format:"%d-%m-%Y"}</span>
                        </li>
                        <li>
                            <label>Lượt tải:&nbsp;</label>
                            <span>{$output.count_down|number_format:2:",":"."|replace:',00':''}</span>
                        </li>
                        <li>
                            <label>Lượt xem:&nbsp;</label>
                            <span>{$output.count}</span>
                        </li>
                        <li>
                            <span>Chia sẻ bài viết này:&nbsp;</span>
                            <div class="
normal share-group circle
">
    <a href="javascript:;" onclick="Pngtree.BaseFun.Base_OpenWin('https://www.facebook.com/share.php?u={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}','facebook-share')" data-type="8" class="share-two bg-facebook share-user-btn">
        <i class="iconfont icon-facebook"></i>
    </a>
    <a href="javascript:;" onclick="Pngtree.BaseFun.Base_OpenWin('https://twitter.com/intent/tweet?url={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}','twitter-share')" data-type="8" class="bg-twitter share-one share-user-btn">
        <i class="iconfont icon-twitter"></i>
    </a>
    <a href="javascript:;" onclick="Pngtree.BaseFun.Base_OpenWin('https://www.pinterest.com/pin/create/button/?url={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}?share=3&amp;media=','pinterest-share')" data-type="8" class="bg-pinterest share-user-btn share-three">
        <i class="iconfont icon-pinterest"></i>
    </a>
</div>
                        </li>
                        <li>
                            <span><i class="iconfont icon-i"></i></span>&nbsp; <label> <a target="_blank" style="color:#333" href="https://www.messenger.com/t/thuvienkientrucchiase">Báo lỗi file </a></label>
                           
                        </li>

                    </ul>
                </div>
            </div>
            <div class="keyWords-wrap needmore">
                <div class="dl-keyWords clearfix ele_keyword ">
                    {assign var="arr_tag" value=","|explode:$output.tag}
                    {foreach $arr_tag as $t}
                    <a target="_blank" href="{SystemBase::buildUrl('tailieu/search',['keyword'=> $t])}" title="{$t}"
                        class="">{$t}</a>
                    {/foreach}<br />
                    <br />
                </div>
                <div style="text-align: left" id="detail-more-more" class="dbl-pictitle">
                    {$output.full}
                </div>
                <div id="fb-root"></div>
                <script src="https://connect.facebook.net/vi_VN/all.js#appId=882475878492163&xfbml=1"></script>
                <fb:comments href="{SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}"
                    num_posts="5" width="auto"></fb:comments>
            </div>


        </div>
        <div class="fl-r db-rightInfor">
            <!-- infor -->
            <div class="dbr-items">
                <div class="dbr-btnbox clearfix detail-down-click">
                    <a data-down="{$output.id}_DOWNLOAD" rel="nofollow"  {if $check_login} target="_blank" href="{SystemBase::buildUrl('tailieu/download',['id'=>$output.id,'title'=>$output.title])}" class="fl-l btn-free"{else}href="javascript:;" class="fl-l btn-free down-no-login"{/if}>
                        <i class="iconfont icon-xiazai"></i>
                        {if $output.proprice > 0}
                        <span class="oldprice"
                            style="text-decoration: line-through; font-size: small;">{$output.price|number_format:2:",":"."|replace:',00':''}
                            POINT</span>
                        <span class="proprice" style="color: #F44359; font-size: medium;">
                            {$output.proprice|number_format:2:",":"."|replace:',00':''} POINT &nbsp;&nbsp;&nbsp;</span>
                        {else if $output.proprice == '0' && $output.price > 0}
                        {$output.price|number_format:2:",":"."|replace:',00':''} POINT
                        {else}
                        Free download{/if}

                    </a>
                    <a {if $check_login}href="/tailieu/account/favorite/like/{$output.id}.html" class="btn-star fl-r btn-Temstar"{else}href="javascript:;" class="btn-star fl-r btn-Temstar down-no-login"{/if}><i></i></a>
                </div>
            </div>

            <div class="recommend-swiper">
                <p class="recommend-swiper-title">
                    <span>Tài liệu liên quan</span>
                </p>
                <div class="recommend-list-wrap">
                    <div class="recommend-list-page">
                    </div>
                    <div class="recommend-list-box">
                        <div class="recommend-list js_slick">
                            <div class="recommend-list-item slide-item">
                                {$this->widget('TWidgets',['methodName'=>'productView','product'=> $relation,'check'=>
                                false],true)}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-recommend dbr-items ele_recommend needmore">
                <h3>Quảng cáo</h3>
                <div class="hpnp-Related">
                    {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                    </div>
            </div>
        </div>
    </div>
    {* <div class="detail-banner">
        <div class="w1520">
            <div class="detail-banner-inner">
                <ul class="mb-box clearfix">
                    {$this->widget('TWidgets',['methodName'=>'CategoryMenu','check'=> true],true)}
                </ul>
            </div>
        </div>
    </div> *}
</div>
<div class="xs-contain detail-widget-fix">
    <div class="xs-detail-group">
        <div class="xs-detail-share-box">
        <a href="javascript:;" class="xs-detail-share fcc" onclick="$('.xs-detail-share-list').addClass('on')">
            <i class="iconfont icon-share"></i>
            <span>Share</span>
        </a>
        <div class="xs-detail-share-list">
            <a href="javascript:;" class="xs-detail-share-list-close" onclick="$(this).parent().removeClass('on')">
                <i class="iconfont icon-guanbi"></i>
            </a>
            <p class="xs-detail-share-list-title">Share this</p>
            <a href="javascript:;" class="xs-detail-share-btn bg-facebook fcc" onclick="Pngtree.BaseFun.Base_OpenWin('https://www.facebook.com/share.php?u={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}?share=2','facebook-share')" data-type="1">
                <span>
                    <i class="iconfont icon-facebook"></i>
                    Facebook
                </span>
            </a>
            <a href="javascript:;" class="xs-detail-share-btn bg-twitter fcc" onclick="Pngtree.BaseFun.Base_OpenWin('https://twitter.com/intent/tweet?{SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}?share=1','twitter-share')" data-type="1">
                <span>
                    <i class="iconfont icon-twitter"></i>
                    Twitter
                </span>
            </a>
            <a href="javascript:;" class="xs-detail-share-btn bg-google fcc" onclick="Pngtree.BaseFun.Base_OpenWin('https://www.pinterest.com/pin/create/button/?url={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}?share=3&amp;media=','pinterest-share')">
                <span>
                    <i class="iconfont icon-pinterest"></i>
                    Pinterest
                </span>
            </a>
        </div>
    </div>
    <div class="xs-detail-star-box">
        <a {if $check_login}href="/tailieu/account/favorite/like/{$output.id}.html" class="xs-detail-star fcc"{else}href="javascript:;" class="xs-detail-star fcc star-btn-click "{/if} >
            <i class="iconfont icon-xin"></i>
            <span>Keep</span>
        </a>
    </div>
        <div class="xs-detail-download-box">
            <a {if $check_login} target="_blank" href="{SystemBase::buildUrl('tailieu/download',['id'=>$output.id,'title'=>$output.title])}" class="xs-detail-download bg-greenLinear fcc"{else}href="javascript:;" class="xs-detail-download bg-greenLinear fcc save-picture"{/if}>
                <span>Free download</span>
            </a>
            <div class="tkw-window " id="xs-download-dialog" style="display: none;">
                <div class="tkw-mask"></div>
                <div class="tkw-main">
                    <div class="xs-download-dialog">
                        <a href="javascript:;" class="xs-download-dialog-btn _register login-alert">PNG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>