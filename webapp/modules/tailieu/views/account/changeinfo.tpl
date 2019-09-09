
<div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">
            <h2 class="user-main-title">Thông tin</h2>
            <ul class="user-methods">
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        <strong class="user-methods-num">{$data.point|number_format:2:",":"."|replace:',00':''}</strong>
                    </div>
                    <span class="user-methods-type">Point</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        <strong class="user-methods-num">{$data.count_upload}</strong>
                    </div>
                    <span class="user-methods-type">Upload</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">

                    </div>
                    <span class="user-methods-type">Level</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        {$data.count_down}
                    </div>
                    <span class="user-methods-type">Download</span>
                </li>
            </ul>
            <div class="user-profile-inner user-connect">
                <div class="user-profile-form">
                    {CHtml::beginForm('','post',['name' => 'changeinfo','id'=>'changeinfo'])}
                    {if $errors <> ''}
                        <div class="alert alert-danger">{$errors}</div>
                    {/if}
                    {if $success <> ''}
                        <div class="alert alert-success">{$success}</div>
                    {/if}
                    <div class="user-profile-account">
                        <h4 class="user-profile-title">Thông tin khác</h4>
                        <div class="form-item">
                            <input class="ui-input" id="email_other" placeholder="" name="email_other" type="text" data-toggle="popover" autocomplete="off" value="{$params.email_other}">
                            <label for="email_other"><span>Email</span></label>
                        </div>
                        <div class="form-item">
                            <input class="ui-input" id="mobile_phone" placeholder="" name="mobile_phone" type="text" data-toggle="popover" autocomplete="off" value="{$params.mobile_phone}">
                            <label for="mobile_phone"><span>Số điện thoại</span></label>
                        </div>
                        <div class="form-item ccaptcha">
                            <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                            <label for="verifyCode"><span>Mã bảo mật</span></label>
                            {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}
                        </div>

                        
                    </div>
                    <div class="user-profile-personal">
                        <h4 class="user-profile-title">Thông tin tài khoản</h4>
                        <div class="form-item">
                            <input type="text" id="lastName" name="lastName" value="{$params.last_name}" class="real-name-input ">
                            <label for="lastName"><span>Họ</span></label>
                        </div>
                        <div class="form-item">
                            <input type="text" id="firstName" name="firstName" value="{$params.first_name}" class="job-title-input ">
                            <label for="firstName"><span>Tên</span></label>
                        </div>
                        <div class="form-item">
                            <input class="ui-input" id="dob" name="dob" placeholder="Ngày sinh định dạng ngày/tháng/năm" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom" value="{$params.dob|date_format:"%d/%m/%Y"}">
                            <label for="Telephone Number"><span>Ngày sinh</span></label>
                        </div>
                        <div class="form-item">
                            <select name="gender" id="gender"  class="">
                                <option value="M" {if  $params.gender eq 'M'}selected="selected"{/if}>NAM</option>
                                <option value="F" {if  $params.gender eq 'F'}selected="selected"{/if}>NỮ</option>
                            </select>
                            <label for="gender"><span>Giới tính</span></label>
                        </div>
                    </div>
                    <div class="ui-form-item fn-clear">
                        <input type="submit" class="user-profile-submit user-profile-btn"  value="Cập nhật">
                    </div>
                    {CHtml::endForm()}
                </div>
            </div>
        </div>
    </div>
</div>

{literal}
    <style>
        #ccaptcha{width:80px;}
    </style>
    <style>
        #ccaptcha_button {
            display: none}
    </style>
{/literal}



