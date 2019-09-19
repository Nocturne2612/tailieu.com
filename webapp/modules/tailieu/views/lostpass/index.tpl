{* <div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">

            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Quên mật khẩu</h3>
                </div>
                <div class="panel-body fn-clear">
                    {CHtml::beginForm('','post',['name' => 'register','id'=>'defaultForm'])}
                    <div class="ui-form signin" style="width: 100%">
                        {if $err <> ''}
                            <div class="error_show">{$err}</div>

                        {/if}

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Địa chỉ Email:</label>
                            <input class="ui-input" id="email" name="email" placeholder="" type="email" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.email}">
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Số điện thoại:</label>
                            <input class="ui-input" id="mobile_phone" name="mobile_phone" placeholder="" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.mobile_phone}">

                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mã bảo mật:</label>
                            <div class="col-sm-4 pdr5">
                                <input class="ui-input" id="verify_code"  name="verify_code" placeholder="" type="text">
                            </div>
                            <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)} </div>
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                           
                                <input type="submit" value="Gửi yêu cầu" class="btn btn-block btn-warning btn-primary">
                        </div>
                    </div>
                    {CHtml::endForm()}
                    <!-- not-member end -->

                </div>
            </div>

            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 368px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Bạn quên mật khẩu?</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">

                        <div class="ui-form-item fn-clear">
                            <a class="btn btn-primary " id="password_button" type="submit" href="{Yii::app()->createUrl('tailieu/lostpass')}">Lấy lại mật khẩu</a>
                            <br>
                            
                            <a class="btn btn-danger " id="password_button" type="submit" href="{Yii::app()->createUrl('tailieu/login')}">Đăng nhập</a>
                            <br>
                            
                            <a class="btn btn-default " id="password_button" type="submit" href="{Yii::app()->createUrl('tailieu/register')}">Đăng ký</a>

                        </div>
                    </div>
                    <!-- ui-form end -->
                </div>
            </div>
            <!-- // panel.forgot-psw end -->
        </div>
        <!-- // signin-wrapper end -->


    </div>
    <!-- layout#translation-focus end -->
</div> *}
<style>
    #ccaptcha_button {
        display: none}
    </style>


<div class="find-password find-one" style="margin-top: 100px;">

    <div class="close-btn"></div>
    
    <h3>Đổi Mật khẩu</h3>
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