<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:57:51
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/addfund/include/paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16706694405b28a96fc759d0-09235453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244ceff0fc3a9e586dcc559491f46baa40446580' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/addfund/include/paypal.tpl',
      1 => 1529384694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16706694405b28a96fc759d0-09235453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a96fc8d8f4_21086253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a96fc8d8f4_21086253')) {function content_5b28a96fc8d8f4_21086253($_smarty_tpl) {?><div >

    <div class="col-sm-6">
        <div class="bg-pop" id="boxMoneyATM">
            <div class="note"><b class="green">SỐ TIỀN NẠP</b> </div>
            <div>
                <input  type="radio" name="moneyPayPal" value="1" checked="">
                <span>Nạp</span> <b>1$</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+160 Point vào tài khoản)</em>
            </div>
            <div>
                <input  type="radio" name="moneyPayPal" value="5">
                <span>Nạp</span> <b>5$</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+800 Point vào tài khoản)</em>
            </div>
            <div>
                <input  type="radio" name="moneyPayPal" value="10" >
                <span>Nạp</span> <b>10$</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+1600 Point vào tài khoản)</em>
            </div>
            <div>
                <input  type="radio" name="moneyPayPal" value="50">
                <span>Nạp</span> <b>50$</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+8000 Point vào tài khoản)</em>
            </div>
            <div>
                <input  type="radio" name="moneyPayPal" value="100">
                <span>Nạp</span> <b>100$</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+16000 Point vào tài khoản)</em>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="ucPopupMoney_loginPanel" onkeypress="" >

            <div class="form-horizontal" style="margin-top: 15px;">
                <div class="form-group">
                    <div class="col-xs-12">
                        <span class="text-error" id="errPalPal"></span>
                    </div>
                </div>

                <div class="ui-form signin" style="width: 100%;">
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                        <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                        <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                    <?php }?>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="capchaPalPal" name="verifyCodePayPal" type="text" class="form-control alignleft " placeholder="Xác nhận" style="width:150px;">

                            <div style="height: 10px; width: 140px; float: left; margin-left: 10px;">
                                <div class="sendRequestCapcha"></div>

                            </div>
                        </div>
                    </div><div class="form-group">
                        <div class="col-xs-12 line-h submitbuttonpaypal">
                            <a onclick="return SEND_PAYPAL();" id="ucPopupMoney_btnATM" href="javascript:void(0)"><img src="https://tailieukientruc.net/images/bank/btn-paypal.png" style="height: 40px; width: 200px;" alt="PayPal Checkout"> &nbsp;<i class="fa fa-money fa-lg" aria-hidden="true"></i></a>
							<img src="https://tailieukientruc.net/images/bank/btn-paypal-2.png" style="height: 30px; width: 200px;" alt="PayPal Checkout card" class="paypal-card">

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
<br><br>	
    <div class="col-xs-12">
        <div class="bg-pop">
            <ul class="introduce-list">
                <li>Xem lịch sử nạp tiền của bạn <a href="/tailieu/account/historypoint.html" class="aorange" target="_blank">tại đây</a> (Hoặc) <a href="/huong-dan-cach-nap-tien-vao-tai-khoan-b124.html#paypal" class="aorange" target="_blank">Hướng dẫn nạp tiền qua Paypal</a>.</li>
                <li>Hotline hỗ trợ giao dịch 24/7: <a class="bold" href="tel:+84886454623" title="Click gọi ngay!">0886.4546.23</a></li>
            </ul>
        </div>
    </div>

</div>

    <script language="javascript">
        function findSelection(field) {
            var radios = document.getElementsByName(field);

            for (var i = 0, length = radios.length; i < length; i++)
            {
                if (radios[i].checked)
                {
                    return radios[i].value;
                }
            }

            return 0;
        }
        function SEND_PAYPAL() {
            var amount = findSelection('moneyPayPal');
            if (amount == 0) {
                alert('Bạn chưa chọn số tiền nạp');
                return false;
            }
            var token = '<?php echo Yii::app()->request->csrfToken;?>
';
            //successValidate();
            var url = "<?php echo Yii::app()->createUrl('tailieu/addfund/buyCard');?>
";
            var capchaCARD = $('#capchaPalPal').val();

            var error_check = false;

            if (error_check) {
                return false;
            }
            var old_html = $('.submitbuttonpaypal').html();
            var new_html = htmlLoading();
            $('.submitbuttonpaypal').html(new_html);
            var result = postData(url, token, amount, capchaCARD);
            setTimeout(function() {
                if (result = 1) {
                    $('.submitbuttonpaypal').html(old_html);
                }
            }, 3000);

        }
        function postData(url, token, amount, capchaCARD) {
            var a = false;
            $.post(url, {buyPayPal: 'buyPayPal', YII_CSRF_TOKEN: token, amount: amount, verify_image: capchaCARD}, function(data) {
                data = JSON.parse(data);
                if (!data['error']) {
                    window.location = data['data'];
                    return 2;
                } else {
                    a = true;
                    $('#errPalPal').html(data['error']);
                    getCaptraR('sendRequestCapcha');

                }
            });
            return a;

        }
    </script> 
<?php }} ?>
