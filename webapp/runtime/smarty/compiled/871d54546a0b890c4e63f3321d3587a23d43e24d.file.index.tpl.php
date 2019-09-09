<?php /* Smarty version Smarty-3.1.19, created on 2018-11-28 02:34:11
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/download/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3147435035b28a95ddeb278-12526612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871d54546a0b890c4e63f3321d3587a23d43e24d' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/download/index.tpl',
      1 => 1543372455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3147435035b28a95ddeb278-12526612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a95de7cd43_08479014',
  'variables' => 
  array (
    'flag' => 0,
    'errors' => 0,
    'success' => 0,
    'this' => 0,
    'product' => 0,
    'output' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a95de7cd43_08479014')) {function content_5b28a95de7cd43_08479014($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">

            <div class="ui-box panel sign-panel" id="signin-panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
				
				
				
                <div class="panel-body fn-clear">
                    <?php if ($_smarty_tpl->tpl_vars['flag']->value===1) {?>

                        <?php echo CHtml::beginForm('','post',array('enctype'=>''));?>

                        <div class="ui-form signin">
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                                <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                                <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                            <?php }?>
                            <div class="ui-form-item fn-clear">
							
                                <label for="" class="ui-label">Mã bảo mật:</label>
                                <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                                <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                            </div>

                            <div class="ui-form-item fn-clear">
                                <label class="ui-label">&nbsp;</label>
                                <input type="hidden" name="next_url" value="/">

                                <button class="btn btn-secondary btn-large fn-left" name="dangnhap" type="submit" id="signin_button">Download</button>

                            </div>

                        </div>
                        <?php echo CHtml::endForm();?>

					<?php } elseif ($_smarty_tpl->tpl_vars['flag']->value===2) {?>
					<div class="ui-form signin">
                            <div class="error_show">Tài khoản của bạn đã hết hạn VIP. Vui lòng Gia hạn để được download tài liệu!
							 <a class="btn btn-large btn-primary" href="http://tailieukientruc.net/tailieu/addfund.html" class="download-button"> Click Nạp POINT để gia hạn</a>
							
							</div>
                        </div>
						
                    <?php } else { ?>
                        <div class="ui-form signin">
                            <div class="error_show">Tài khoản không đủ POINT để download tài liệu này. Vui lòng nạp thêm POINT để download tài liệu!
							<br>
							 <a class="btn btn-large btn-primary" href="http://tailieukientruc.net/tailieu/addfund.html" class="download-button"> Click Nạp POINT để Download</a>
							
							</div>
                        </div>
                    <?php }?>

                    <div class="not-member">
                        <div class="not-member-inner">
                            <p class="desc">Vui lòng chọn tài liệu cần download trong bộ sưu tập và nhập mã xác nhận vào ô bên dưới.</a></p>
                            <p class="desc"> Lưu ý: Phần mềm gõ tiếng việt trên máy có thể nhập không đúng. </p>
                        </div>
                    </div>
                    <!-- not-member end -->

                </div>
			<!-- // adsense-->
			
							<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>

				<!-- // end_adsense-->		
	
            </div>


            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 100%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin chi tiết download:</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">
                        <h1 class="title">Download tài liệu: <a class="featured-image" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['product']->value['id'],'title'=>$_smarty_tpl->tpl_vars['product']->value['title']));?>
"> <?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a> </h1>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['picture']!='') {?>
                            <?php $_smarty_tpl->tpl_vars['output'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['output']->value['picture']), null, 0);?> <img  itemprop="image" alt="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="width: 100%; height: 400px;"/>
                        <?php }?>
						
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





<?php }} ?>
