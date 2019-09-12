<div id="content">
    <div class="layout fn-clear">
        <div class="fn-clear" id="signin-wrapper">
            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">1. Nạp Point qua thẻ cào</h3>
                </div>
                <div class="panel-body fn-clear">
                    {CHtml::beginForm('','post',['name' => 'addfund'])}
                    <div class="ui-form signin" style="width: 100%;">
                        {if $errors <> ''}
                            <div class="error_show">{$errors}</div>

                        {/if}
                        {if $success <> ''}
                            <div class="error_show">{$success}</div>
                        {/if}

                        <div class="ui-form-item fn-clear" >
                            <label for="92" class="ui-label" style="height: 100%;"><img  src="{$smarty.const.ROOT_URL}/assets/tailieu/images/mobifone.jpg" /> <input type="radio" name="select_method" checked="true" value="VMS" id="92"  /></label>
                            <label for="93" class="ui-label" style="height: 100%;"><img  src="{$smarty.const.ROOT_URL}/assets/tailieu/images/vinaphone.jpg" />  <input type="radio"  name="select_method"value="VNP" id="93" /></label>
                            <label for="107" class="ui-label" style="height: 100%;"><img  src="{$smarty.const.ROOT_URL}/assets/tailieu/images/viettel.jpg" /> <input type="radio"  name="select_method" value="VIETTEL" id="107" /></label>
                            <label for="120" class="ui-label" style="height: 100%;"><img  src="{$smarty.const.ROOT_URL}/assets/tailieu/images/gate.jpg" /><input type="radio" id="120" value="GATE" name="select_method"></label>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="password">Số Seri:</label>
                            <input class="ui-input" id="txtSoSeri" name="txtSoSeri" type="text" required>
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="password">Mã thẻ:</label>
                            <input class="ui-input" id="txtSoPin" name="txtSoPin" type="text" required>
                        </div>   

                        <div class="ui-form-item fn-clear">
                            <label for="" class="ui-label">Mã bảo mật:</label>
                            <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                            <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)} </div>
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">&nbsp;</label>
                            <input type="hidden" name="next_url" value="/">
                            <button class="btn btn-secondary btn-large fn-left" name="dangnhap" type="submit" id="signin_button">Nạp tiền</button>
                        </div>
                    </div>
                    {CHtml::endForm()}
                </div>
            </div>
                <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 412px">
                <div class="panel-heading">
                    <h3 class="panel-title">2. Nạp Point online qua Ngân Lượng, Ngân hàng</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">

                        <div class="ui-form-item fn-clear">
                            <input type="button" class="btn btn-primary" id="btn_deposit" value="Nạp tiền">

							<br><img  src="{$smarty.const.ROOT_URL}/assets/tailieu/images/nganhang.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #ccaptcha_button {
        display: none}
    </style>
    {literal}
        <script language="javascript">
            var mc_flow = new NGANLUONG.apps.MCFlow({trigger: 'btn_deposit', url: '{/literal}{$link_checkout}{literal}'});
        </script>
{/literal}