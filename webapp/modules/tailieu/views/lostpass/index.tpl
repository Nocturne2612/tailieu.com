
<style>
    #ccaptcha_button {
        display: none}
    </style>


<div class="find-password find-one" style="margin-top: 100px;">

    <div class="close-btn"></div>
    
    <h3>Quên mật khẩu</h3>
    {if $err <> ''}
        <p style="color: #f05f5c">{$err}</p>
    {/if}
    {CHtml::beginForm('','post',['name' => 'changepass','id'=>'changepass'])}
    
    <div id="email-div" class="email">
        <input class="ui-input find-input" pattern="[^ @]*@[^ @]*" name="email" placeholder="Email" type="email" autocomplete="off" value="{$params.email}">
    </div>
    <div class="email">
        <input class="ui-input find-input" name="mobile_phone" placeholder="Số điện thoại" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.mobile_phone}">
    </div>
    <div class="email">
        <input class="ui-input find-input" id="verify_code"  name="verify_code" placeholder="Mã bảo mật" type="text">
    </div>
    <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)} </div>

    <div><a onclick="document.getElementById('changepass').submit();" class="reset">Reset password</a></div>
    {CHtml::endForm()}

    <div class="clearfix f-bottom">
        <p class="fl-r">Không phải là thành viên? <a href="javascript:;" id="find-register" class="com-green reg-trigger">Register</a></p>
    </div>
</div>