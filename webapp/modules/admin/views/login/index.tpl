
<div class="login-container">

    <div class="row">

        <div class="col-sm-6">


            <!-- Errors container -->
            {if Yii::app()->user->hasFlash('error_messages')}
                <div class="errors-container">
                    <div class="alert alert-danger">{Yii::app()->user->getFlash('error_messages')}</div>
                </div>
            {/if}
            {CHtml::beginForm('','post',['enctype' => '','class'=>'login-form fade-in-effect','id'=>'login','role'=>'form'])}
            <div class="login-header">
                <a href="{Yii::app()->params['Website']}" class="logo">
                    <img src="{$logo}" alt="" width="80" />
                    <span>Đăng nhập</span>
                </a>

                <p>Đăng nhập quản trị CMS.</p>
            </div>


            <div class="form-group">
                <label class="control-label" for="username">Tài khoản</label>
                <input autocomplete="off" type="text" class="form-control" id="username" name="username" value="{$username}" placeholder="">
            </div>

            <div class="form-group">
                <label class="control-label" for="pass">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" autocomplete="off" placeholder="" name="pass" value="{$pass}">
            </div>
            <div class="form-group">
                <label class="control-label" for="verifyCode">Mã bảo mật</label>
                <input type="text" class="form-control" maxlength="3" id="verifyCode" autocomplete="off" placeholder="" name="verifyCode">
            </div>
            <div class="form-group">
                {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}
            </div>        
            <div class="form-group">
                <button type="submit" class="btn btn-primary  btn-block text-left">
                    <i class="fa-lock"></i>
                    Đăng nhập
                </button>
            </div>

            <div class="login-footer">
                <a href="#">Quên mật khẩu?</a>
            </div>

            {CHtml::endForm()}

        </div>

    </div>

</div>
{literal}
    <script type="text/javascript">
        $(document).ready(function ($)
        {
            // Reveal Login form
            setTimeout(function () {
                $(".fade-in-effect").addClass('in');
            }, 1);
            $("form#login").validate({
                rules: {
                    username: {
                        required: true
                    },
                    pass: {
                        required: true
                    },
                    verifyCode: {
                        required: true
                    }
                },
                messages: {
                    username: {
                        required: 'Bạn chưa nhập Tài Khoản.'
                    },
                    pass: {
                        required: 'Bạn chưa nhập Mật Khẩu.'
                    },
                    verifyCode: {
                        required: 'Bạn chưa nhập Mã bảo mật'
                    }
                },
            });
            $("form#login .form-group:has(.form-control):first .form-control").focus();
        });
    </script>
{/literal}