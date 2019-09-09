<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:12:43
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/download/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196016068759813a4a233a25-72820958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e516e4d0a961ea4ef38d15138e0747c3292c9d' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/download/index.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196016068759813a4a233a25-72820958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813a4a31d6c6_55214300',
  'variables' => 
  array (
    'this' => 0,
    'flag' => 0,
    'errors' => 0,
    'success' => 0,
    'product' => 0,
    'output' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813a4a31d6c6_55214300')) {function content_59813a4a31d6c6_55214300($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">

            <div class="ui-box panel sign-panel" id="signin-panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
				
				<!-- // adsense-->
			
							<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>

				<!-- // end_adsense-->	
				
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

                    <?php } else { ?>
                        <div class="ui-form signin">
                            <div class="error_show">Tài khoản không đủ point để download tài liệu này. Vui lòng nạp thêm point để download tài liệu!
							 <a class="btn btn-large btn-primary" href="http://tailieukientruc.net/tailieu/addfund.html" class="download-button"> Nạp POINT tại đây</a>
							
							</div>
                        </div>
                    <?php }?>

                    <div class="not-member">
                        <div class="not-member-inner">
                            <p class="desc">Vui lòng chọn tài liệu cần download trong bộ sưu tập và nhập mã xác nhận vào ô bên dưới.</a></p>
                            <p class="desc"> Lưu ý: Phần mềm gõ tiếng việt trên máy có thể nhập không đúng. </p>
                        </div>
						<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>

                    </div>
                    <!-- not-member end -->

                </div>
				
	
            </div>


            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 100%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin sản phẩm?</h3>
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
" style="width: 100%;"/>
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
