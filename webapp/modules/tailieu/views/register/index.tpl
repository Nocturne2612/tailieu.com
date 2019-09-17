<div id="content">
    <div class="layout fn-clear">
        <div class="fn-clear" id="signin-wrapper">
            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký tài khoản</h3>
                </div>
                <div class="panel-body fn-clear">
                    {CHtml::beginForm('','post',['name' => 'register','id'=>'defaultForm'])}
                    <div class="ui-form signin" style="width: 100%">
                        {if $errors <> ''}
                            <div class="error_show">{$errors}</div>

                        {/if}
                        {if $success <> ''}
                            <div class="error_show">{$success}</div>
                        {/if}

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Họ *</label>
                            <input class="ui-input" id="lastName" name="lastName" placeholder="Họ" type="text" value="{$params.last_name}">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Tên *</label>
                            <input class="ui-input" id="firstName" name="firstName" placeholder="Tên" type="text" value="{$params.first_name}">
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Địa chỉ Email *</label>
                            <input class="ui-input" id="email" name="email" placeholder="" type="email" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.email}">

                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Điện thoại *</label>
                            <input class="ui-input" id="mobile_phone" name="mobile_phone" placeholder="" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.mobile_phone}">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="dob">Ngày sinh *</label>
                            <input class="ui-input" id="dob" name="dob" placeholder="Ngày sinh định dạng ngày/tháng/năm" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.dob|date_format:"%d/%m/%Y"}">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mật khẩu đăng nhập *</label>
                            <input class="ui-input" id="password" name="password" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Xác nhận mật khẩu *</label>
                            <input class="ui-input" id="repassword" name="repassword" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                        </div>
                        <hr>

                        
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Giới tính *</label>
                            <select class="ui-input" name="gender" id="gender">
                                <option  value="" selected="selected">-- Chọn giới tính --</option>
                                <option value="M" {if $params.gender eq 'M'}selected="selected"{/if}>NAM</option>
                                <option value="F" {if $params.gender eq 'F'}selected="selected"{/if}>NỮ</option>
                            </select>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mã bảo mật:</label>
                            <input class="ui-input" id="verify_code" name="verify_code" placeholder="" type="text">
                            <div class="col-sm-4 pdl5"> {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)} </div>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <input type="submit" value="Đăng ký" class="btn btn-block btn-warning btn-primary">
                        </div>
                    </div>
                    {CHtml::endForm()}

                    
                    <!-- not-member end -->

                </div>
            </div>

            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw">
                <div class="panel-heading">
                    <h3 class="panel-title">Bạn quên mật khẩu?</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">

                        <div class="ui-form-item fn-clear">
                            <a class="btn btn-primary " id="password_button" type="submit" href="{Yii::app()->createUrl('tailieu/lostpass')}">Lấy lại mật khẩu</a>
                            <br>
                            <a class="btn btn-danger " id="password_button" type="submit" href="{Yii::app()->createUrl('tailieu/login')}">Đăng nhập</a>
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
</div>
<style>
    #ccaptcha_button {
        display: none}
    </style>
















   