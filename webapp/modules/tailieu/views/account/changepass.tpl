
{* <div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">

            <h1>Đổi Mật khẩu</h1>
             {CHtml::beginForm('','post',['name' => 'changepass','id'=>'changepass'])}
            <div class="user-profile-inner user-connect"> 
                <div class="window-jobCollect-contain">
                    {if $errors <> ''}
                        <div class="alert alert-danger">{$errors}</div>
                    {/if}
                    {if $success <> ''}
                        <div class="alert alert-success">{$success}</div>
                    {/if}
                    <p class="window-jobCollect-question">Mật khẩu cũ</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="password_old" name="password_old" placeholder="Mật khẩu hiện tại" type="password" autocomplete="off">
                    </div>
                    <p class="window-jobCollect-question">Mật khẩu mới</p>
                    <div class="window-jobCollect-group _job">
                         <input class="ui-input" id="password" name="password" placeholder="Mật khẩu mới" type="password">
                    </div>
                    <p class="window-jobCollect-question">Xác nhận lại mật khẩu</p>
                    <div class="window-jobCollect-group _job">
                         <input class="ui-input" id="repassword" placeholder="Xác nhận mật khẩu mới" name="repassword" type="password">
                    </div>
                    <p class="window-jobCollect-question">Mã bảo mật</p>
                    <div class="window-jobCollect-group _job ccaptcha">
                        <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                        {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}
                    </div>
                    <button type="submit" href="javascript:;" class="submit">Thực hiện</button>

                </div>
            </div>

            {CHtml::endForm()}
        </div>
        {literal}
            <style>
            </style>
            <style>
                #ccaptcha_button {
                    display: none}
            </style>
        {/literal}
    </div>
</div> *}


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

    <div id="send-success" class="new-password clearfix" >
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
