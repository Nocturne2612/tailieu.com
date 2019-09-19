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


<div class="find-password find-one">
    <div class="close-btn"></div>
    <h3>Đổi Mật khẩu</h3>
    {* <p>Enter the email of your account to reset password.</p>
    <p>Then you will receive a link to email to reset the password.If </p>
    <p>you have any issue about reset password <span><a style="color: #88b04b;" id="find-contact" href="javascript:;">contact us</a></span></p> *}
    {CHtml::beginForm('','post',['name' => 'changepass','id'=>'changepass'])}
    
    <div id="email-div" class="email">
        <input type="email" placeholder="Email" pattern="[^ @]*@[^ @]*" class="find-input" id="find-email">
    </div>

    <div id="send-success" class=".warning clearfix" >
        <div class="p-right fl-l">
            <p class="mb12">An e-mail with instructions to create a new </p>
            <p>password has been sent to you.</p>
        </div>

    </div>
    {CHtml::endForm()}

    <div class="clearfix f-bottom">
        <a href="javascript:;" id="find-login" class="fl-l com-green f-login">Login</a>
        <p class="fl-r">Not a member? <a href="javascript:;" id="find-register" class="com-green">Register</a></p>
    </div>
</div>