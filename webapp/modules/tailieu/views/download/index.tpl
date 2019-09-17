{* <div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">

            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-body fn-clear">
                    {if $flag===1}

                    {CHtml::beginForm('','post',['enctype' => ''])}
                    <div class="ui-form signin">
                        {if $errors <> ''}
                            <div class="error_show">{$errors}</div>

                            {/if}
                            {if $success <> ''}
                                <div class="error_show">{$success}</div>
                                {/if}
                                <div class="ui-form-item fn-clear">

                                    <label for="" class="ui-label">Mã bảo mật:</label>
                                    <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                                    <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}
                                    </div>
                                </div>

                                <div class="ui-form-item fn-clear">
                                    <label class="ui-label">&nbsp;</label>
                                    <input type="hidden" name="next_url" value="/">

                                    <button class="btn btn-secondary btn-large fn-left" name="dangnhap" type="submit"
                                        id="signin_button">Download</button>

                                </div>

                    </div>
                    {CHtml::endForm()}
                    {else if $flag===2}
                    <div class="ui-form signin">
                        <div class="error_show">Tài khoản của bạn đã hết hạn VIP. Vui lòng Gia hạn để được download tài
                            liệu!
                            <a class="btn btn-large btn-primary" href="http://tailieukientruc.net/tailieu/addfund.html"
                                class="download-button"> Click Nạp POINT để gia hạn</a>

                        </div>
                    </div>

                    {else}
                    <div class="ui-form signin">
                        <div class="error_show">Tài khoản không đủ POINT để download tài liệu này. Vui lòng nạp thêm
                            POINT để download tài liệu!
                            <br>
                            <a class="btn btn-large btn-primary" href="http://tailieukientruc.net/tailieu/addfund.html"
                                class="download-button"> Click Nạp POINT để Download</a>

                        </div>
                    </div>
                    {/if}

                    <div class="not-member">
                        <div class="not-member-inner">
                            <p class="desc">Vui lòng chọn tài liệu cần download trong bộ sưu tập và nhập mã xác nhận vào
                                ô bên dưới.</a></p>
                            <p class="desc"> Lưu ý: Phần mềm gõ tiếng việt trên máy có thể nhập không đúng. </p>
                        </div>
                    </div>
                    <!-- not-member end -->

                </div>
                <!-- // adsense-->

                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
                <!-- // end_adsense-->

            </div>


            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 100%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin chi tiết download:</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">
                        <h1 class="title">Download tài liệu: <a class="featured-image" title="{$product.title}"
                                href="{SystemBase::buildUrl('tailieu/document',['id'=>$product.id,'title'=>$product.title])}">
                                {$product.title}</a> </h1>
                        {if $product.picture <> ""}
                            {$output = $product}
                            {assign var="arr_pic" value="|"|explode:$output.picture} <img itemprop="image"
                                alt="{$output.title}"
                                src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"
                                style="width: 100%; height: 400px;" />
                            {/if}

                    </div>
                    <!-- ui-form end -->

                </div>
            </div>
            <!-- // panel.forgot-psw end -->

        </div>
        <!-- // signin-wrapper end -->

    </div>
    <!-- layout#translation-focus end -->
</div>
<style>
    #ccaptcha_button {
        display: none
    }
</style>




*}
<style>
#ccaptcha_button {
    display: none;
}
</style>
<div class="download-wrap">
    <div class="download-contain">
        <div class="download-detail">
            <div class="download-img">
            {if $product.picture <> ""}
                            {$output = $product}
                            {assign var="arr_pic" value="|"|explode:$output.picture}
                            <img itemprop="image"
                                alt="{$output.title}"
                                src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"
                            />
                            {/if}
            </div>
            <p class="download-img-title "><a href="{SystemBase::buildUrl('tailieu/document',['id'=>$product.id,'title'=>$product.title])}">{$output.title}</a></p>
        </div>
        <div class="download-section">
            <div class="download-tips-box" style="display: none">
                <p class="download-tips">Vui lòng chọn tài liệu cần download trong bộ sưu tập và nhập mã xác nhận vào ô bên dưới.</p>
                <p class="download-tips">Lưu ý: Phần mềm gõ tiếng việt trên máy có thể nhập không đúng.</a> .
                </p>
            </div>
                {if $flag===1}
                        {CHtml::beginForm('','post',['enctype' => ''])}
                        <div class="download-article">
                            {if $errors <> ''}
                                <div class="error_show">{$errors}</div>
                            {/if}
                            {if $success <> ''}
                                <div class="error_show">{$success}</div>
                            {/if}
                            <p class="file-license-tips">Nhập mã xác thực: </p>
                            <input type="hidden" name="next_url" value="/">

                            <div class="file-license-copy-group">
                                <input id="verifyCode"  name="verifyCode" type="text" class="file-license-copy-link file-copy" value="">
                                {* <a class="file-license-copy-btn btn-copy">Copy</a> *}
                                <a class="file-license-copy-btn btn-copy" name="dangnhap" type="submit"
                                            id="signin_button">Download</a>
                            </div>
                            <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}</div>
                        </div>
                        
                        {CHtml::endForm()}
                {else if $flag===2}
                    <div class="download-article">
                        <div class="download-premium_AD">
                            <p class="download-premium_AD-title">Tài khoản của bạn đã hết hạn VIP. Vui lòng Gia hạn để được download tài
                            liệu!</p>
                            <p class="download-premium_AD-text">Click <a href="/tailieu/addfund.html"> NẠP POINT</a>
                                để gia hạn</p>
                        </div>
                    </div>
                {else}
                     <div class="download-article">
                        <div class="download-premium_AD">
                            <p class="download-premium_AD-title">Tài khoản không đủ POINT để download tài liệu này. Vui lòng nạp thêm
                            POINT để download tài liệu!</p>
                            <p class="download-premium_AD-text">Click <a href="/tailieu/addfund.html"> NẠP POINT</a>
                                để Download</p>
                        </div>
                    </div>
                {/if}
            {* <div class="download-tips-box" style="display: none">
                <p class="download-tips">Your download will start in <span class="download-timeleft" id="num">0</span>
                    seconds.</p>
                <p class="download-tips">If your download doesn't start automatically please <a target="_blank"
                        href="javascript:;" class="download-immediately down-again">click here</a> .
                </p>
            </div>
            <div class="download-article">
                <p class="file-license-title">File license:You must credit the author in your Web</p>
                <p class="file-license-tips">You need to copy this link to your blog or website</p>
                <div class="file-license-copy-group">
                    <input type="text" class="file-license-copy-link file-copy" value="" readonly>
                    <a href="javascript:;" class="file-license-copy-btn btn-copy">Copy</a>
                </div>
                <div class="download-premium_AD">
                    <p class="download-premium_AD-title">Don't want to credit the author?</p>
                    <p class="download-premium_AD-text">Go <a href="/pay?b=257"><i class="icon-pricing"></i>PREMIUM</a>
                        and enjoy unlimited downloads with no attribution.</p>
                </div>
                <p class="download-text">Share this: <span class="share-group">
                        <a href="javascript:;" class="share-tuite twitter" data-type="4"><i
                                class="iconfont icon-tuite"></i></a>
                        <a href="javascript:;" class="share-facebook facebook" data-type="5"><i
                                class="iconfont icon-facebook"></i></a>
                        <a href="javascript:;" class="share-pin pinterest" data-type="6"><i
                                class="iconfont icon-pinterest"></i></a>
                    </span>
                </p>
            </div> *}
        </div>
    </div>
</div>