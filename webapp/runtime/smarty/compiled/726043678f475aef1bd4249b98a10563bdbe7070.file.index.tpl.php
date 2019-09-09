<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:06:56
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19118560775abc8f80e1d3d6-01572006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726043678f475aef1bd4249b98a10563bdbe7070' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/login/index.tpl',
      1 => 1563752344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19118560775abc8f80e1d3d6-01572006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f80e66714_69233905',
  'variables' => 
  array (
    'logo' => 0,
    'username' => 0,
    'pass' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f80e66714_69233905')) {function content_5abc8f80e66714_69233905($_smarty_tpl) {?>
<div class="login-container">

    <div class="row">

        <div class="col-sm-6">


            <!-- Errors container -->
            <?php if (Yii::app()->user->hasFlash('error_messages')) {?>
                <div class="errors-container">
                    <div class="alert alert-danger"><?php echo Yii::app()->user->getFlash('error_messages');?>
</div>
                </div>
            <?php }?>
            <?php echo CHtml::beginForm('','post',array('enctype'=>'','class'=>'login-form fade-in-effect','id'=>'login','role'=>'form'));?>

            <div class="login-header">
                <a href="<?php echo Yii::app()->params['Website'];?>
" class="logo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" width="80" />
                    <span>Đăng nhập</span>
                </a>

                <p>Đăng nhập quản trị CMS.</p>
            </div>


            <div class="form-group">
                <label class="control-label" for="username">Tài khoản</label>
                <input autocomplete="off" type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="">
            </div>

            <div class="form-group">
                <label class="control-label" for="pass">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" autocomplete="off" placeholder="" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
            </div>
            <div class="form-group">
                <label class="control-label" for="verifyCode">Mã bảo mật</label>
                <input type="text" class="form-control" maxlength="3" id="verifyCode" autocomplete="off" placeholder="" name="verifyCode">
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>

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

            <?php echo CHtml::endForm();?>


        </div>

    </div>

</div>

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
<?php }} ?>
