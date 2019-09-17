
<div class="user-main">
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
</div>


