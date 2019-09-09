<?php /* Smarty version Smarty-3.1.19, created on 2018-03-18 12:39:05
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/addfund/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103774112559813c84bc7141-74818482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f477372882a16c54ba882a669c7b28fb298dd03a' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/addfund/index.tpl',
      1 => 1521376741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103774112559813c84bc7141-74818482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813c84c28a79_95474872',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'this' => 0,
    'link_checkout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813c84c28a79_95474872')) {function content_59813c84c28a79_95474872($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">
        <div class="fn-clear" id="signin-wrapper">
            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">1. Nạp Point qua thẻ cào</h3> 
                </div>


				<div class="detail-info fn-clear cc" style="
                             position: relative;
							     color: #fff;
                             background: #fb0000;
                             margin-top: 3px;
                             padding: 6px;">
                            <p>Chú ý: Các nhà mạng hiện đang bảo trì, vui lòng nạp tiền qua ATM, ví điện tử hoặc Chuyển khoản Internet Banking trực tiếp (Cột bên phải) => Liên hệ 0886.45.46.23 để được hỗ trợ!. Cảm ơn quý khách!</p>
                  </div>
				
				
                <div class="panel-body fn-clear">
                    <?php echo CHtml::beginForm('','post',array('name'=>'addfund'));?>

                    <div class="ui-form signin" style="width: 100%;">
                        <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                        <?php }?>

                        <div class="ui-form-item fn-clear" >
                            <label for="92" class="ui-label" style="height: 100%;"><img  src="<?php echo @constant('ROOT_URL');?>
/assets/tailieu/images/mobifone.jpg" /> <input type="radio" name="select_method" checked="true" value="VMS" id="92"  /></label>
                            <label for="93" class="ui-label" style="height: 100%;"><img  src="<?php echo @constant('ROOT_URL');?>
/assets/tailieu/images/vinaphone.jpg" />  <input type="radio"  name="select_method"value="VNP" id="93" /></label>
                            <label for="107" class="ui-label" style="height: 100%;"><img  src="<?php echo @constant('ROOT_URL');?>
/assets/tailieu/images/viettel.jpg" /> <input type="radio"  name="select_method" value="VIETTEL" id="107" /></label>
                            <label for="120" class="ui-label" style="height: 100%;"><img  src="<?php echo @constant('ROOT_URL');?>
/assets/tailieu/images/gate.jpg" /><input type="radio" id="120" value="GATE" name="select_method"></label>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="password">Số Seri:</label>
                            <input class="ui-input" id="txtSoSeri" name="txtSoSeri" type="text" required>
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="password">Mã thẻ:</label>
                            <input class="ui-input" id="txtSoPin" name="txtSoPin" type="text" required>
                        </div>   

                        <div class="ui-form-item fn-clear">
                            <label for="" class="ui-label">Mã bảo mật:</label>
                            <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                            <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">&nbsp;</label>
                            <input type="hidden" name="next_url" value="/">
                            <button class="btn btn-secondary btn-large fn-left" name="dangnhap" type="submit" id="signin_button">Nạp tiền</button>
                        </div>
                    </div>
                    <?php echo CHtml::endForm();?>

                </div>
				
				
				
            </div>
                <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 412px">
                <div class="panel-heading">
                    <h3 class="panel-title">2. Nạp Point online qua Ngân Lượng, Ngân hàng</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">

                        <div class="ui-form-item fn-clear">
                            <input type="button" class="btn btn-primary" id="btn_deposit" value="Nạp tiền">

							<br><img  src="<?php echo @constant('ROOT_URL');?>
/assets/tailieu/images/nganhang.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #ccaptcha_button {
        display: none}
    </style>
    
        <script language="javascript">
            var mc_flow = new NGANLUONG.apps.MCFlow({trigger: 'btn_deposit', url: '<?php echo $_smarty_tpl->tpl_vars['link_checkout']->value;?>
'});
        </script>
        <style> #ccaptcha{width:80px;} </style>
<?php }} ?>
