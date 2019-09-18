<div class="individual-banner"></div>
<div id="v2-content">
    <div class="sns-wrapper w1520">
        <div class="individual-panel">
            <div class="individual-info-wrap">
                <div class="individual-info-avatar ">
                    <div class="level-avatar sliver">
                        <a rel="nofollow" href="javascript:;" class="level-avatar-link">
                            <img onerror="this.src='//js.pngtree.com/web3/user_profile/head_img/014-travel.png'"
                                 alt="{$data.first_name} {$data.last_name}" src="//js.pngtree.com/user_profile/head_img/011-star.png">
                        </a>
                        <a rel="nofollow" href="javascript:;" class="level-avatar-icon-link">
                            <i class="icon-badge"></i>
                        </a>
                    </div>
                </div>
                <div class="individual-info">
                    <div class="individual-info-title">
                        <span class="individual-name">{$data.first_name} {$data.last_name}</span>

                        <a href="javascript:;" class="individual-followBtn ">{if $data.type == 2}VIP{else}Thường{/if}</a>
                    </div>
                    <ul class="individual-info-main">
                        <li class="individual-info-item">
                            <span class="individual-info-num">{$data.create_time|date_format:"%d-%m-%Y"}</span>
                            <p class="individual-info-type">Gia nhập từ:</p>
                        </li>
                        <li class="individual-info-item">
                            <span class="individual-info-num">{$data.point|number_format:2:",":"."|replace:',00':''}</span>
                            <p class="individual-info-type">Số Point:</p>
                        </li>
                        <li class="individual-info-item">
                            <span class="individual-info-num">{$data.count_upload}</span>
                            <p class="individual-info-type">Upload:</p>
                        </li>
                    </ul>

                    <div class="individual-share">
                        <span>Chia sẻ trang:</span>
                        <div class="share-group circle larger">
                            <a href="javascript:;"
                               onclick="Pngtree.BaseFun.Base_OpenWin('https://www.facebook.com/share.php?u={SystemBase::buildUrl('tailieu/account/member/id/'.$data.id.'.html')}?share=2','facebook-share')"
                               data-type="1" class="share-two bg-facebook share-user-btn">
                                <i class="iconfont icon-facebook"></i>
                            </a>
                            <a href="javascript:;"
                               onclick="Pngtree.BaseFun.Base_OpenWin('https://twitter.com/intent/tweet?url={SystemBase::buildUrl('tailieu/account/member/id/'.$data.id.'.html')}?share=1','twitter-share')"
                               data-type="1" class="bg-twitter share-one share-user-btn">
                                <i class="iconfont icon-twitter"></i>
                            </a>
                            <a href="javascript:;"
                               onclick="Pngtree.BaseFun.Base_OpenWin('https://www.pinterest.com/pin/create/button/?url={SystemBase::buildUrl('tailieu/account/member/id/'.$data.id.'.html')}?share=3','pinterest-share')"
                               data-type="1" class="bg-pinterest share-user-btn share-three">
                                <i class="iconfont icon-pinterest"></i>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="individual-becomeDesign">
                <a href="/designer-rules" class="individual-becomeDesign-link">
                    <img src="//js.pngtree.com/web3/images/design/becomeDesign.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="main-con et-photobox">
            <div class="main-con gd-photobox ">
                <div class="main-body">
                    <ul class="mb-box masonry-element clearfix tpl-ul">
                        {if $outputs}
                        {foreach $outputs['data'] as $k=>$t}
                            <li class="li-box search_keyword_statis_js" data-id="{$t.id}">

                                <!-- png -->

                                <div class="mb-picbox" style="">
                                    {if isset($t.picture) && $t.picture != ""}
                                        {assign var="arr_pic" value="|"|explode:$t.picture}
                                        <img data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"
                                             alt="{$t.title}" class="lazy" style="width:100%" height="260">
                                    {/if}
                                    <a target="_blank" title="{$t.title}"
                                       href="{SystemBase::buildUrl('tailieu/document',['title'=>$t.title,'id'=>$t.id])}"
                                       class="tran">
                                    </a>

                                </div>
                                <p class="pic-detail text-overflow">{$t.title}</p>
                                <div class="pic-infor clearfix">
                                    <span class="fl-l">{$t.price|number_format:2:",":"."|replace:',00':''} POINT</span>
                                </div>
                            </li>
                            <div class="gutter-sizer"></div>
                        {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
        <div class="user-list-wrap">
            {$outputs['pageHtml']}
        </div>
    </div>
</div>

