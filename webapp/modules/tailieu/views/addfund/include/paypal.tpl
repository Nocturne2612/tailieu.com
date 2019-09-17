<div >

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
                    {if $errors <> ''}
                        <div class="error_show">{$errors}</div>

                    {/if}
                    {if $success <> ''}
                        <div class="error_show">{$success}</div>
                    {/if}
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
{literal}
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
            var token = '{/literal}{Yii::app()->request->csrfToken}{literal}';
            //successValidate();
            var url = "{/literal}{Yii::app()->createUrl('tailieu/addfund/buyCard')}{literal}";
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
{/literal}