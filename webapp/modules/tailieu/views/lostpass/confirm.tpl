<div id="content">
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
                            <label class="ui-label">Mật khẩu mới:</label>
                            <input class="ui-input" id="password" name="password" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                            
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Xác nhận lại:</label>
                           <input class="ui-input" id="repassword" name="repassword" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">

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
                           
                                <input type="submit" value="Xác nhận" class="btn btn-block btn-warning btn-primary">
                        </div>
                    </div>
                    {CHtml::endForm()}
                    <!-- not-member end -->

                </div>
            </div>

            <!-- // panel#signup-panel end -->

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
    {CHtml::beginForm('','post',['name' => 'register','id'=>'changepass'])}
    
    <div id="email-div" class="email">
        <input class="ui-input find-input" name="password" placeholder="Mật khẩu mới" type="password" placeholder="Email" autocomplete="off">
    </div>
    <div class="email">
        <input class="ui-input find-input"   name="repassword" placeholder="Xác nhận lại" type="password"  data-toggle="popover" autocomplete="off" data-placement="bottom" >
    </div>
    <div class="email">
        <input class="ui-input find-input" id="verify_code"  name="verify_code" placeholder="Mã bảo mật" type="text">
    </div>
    <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)} </div>

    <div><a onclick="document.getElementById('changepass').submit();" class="reset">Xác nhận</a></div>
    {CHtml::endForm()}

    <div class="clearfix f-bottom">
        <p class="fl-r">Không phải là thành viên? <a href="javascript:;" id="find-register" class="com-green reg-trigger">Register</a></p>
    </div>
</div>
    
    
    
    
    
    