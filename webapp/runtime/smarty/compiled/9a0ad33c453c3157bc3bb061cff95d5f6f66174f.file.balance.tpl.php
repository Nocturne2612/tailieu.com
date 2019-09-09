<?php /* Smarty version Smarty-3.1.19, created on 2018-04-14 14:46:50
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/include/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19873587305acc5852782bf0-99962606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0ad33c453c3157bc3bb061cff95d5f6f66174f' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/include/balance.tpl',
      1 => 1523717198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19873587305acc5852782bf0-99962606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acc58527b5476_58458675',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acc58527b5476_58458675')) {function content_5acc58527b5476_58458675($_smarty_tpl) {?><div id="ucPopupMoney_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ucPopupMoney_btnATM')">

    <div class="col-sm-6">
        <div class="bg-pop" id="boxMoneyATM">
            <div class="note"><b class="green">SỐ TIỀN NẠP</b> <em class="orange">(Point nhận bằng <b>110%</b> giá trị tiền nạp)</em></div>
            <div>
                <input id="Radio1" type="radio" name="moneyBalance" value="20000">
                <span>Nạp</span> <b>20.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+220 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio2" type="radio" name="moneyBalance" value="50000">
                <span>Nạp</span> <b>50.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+550 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio3" type="radio" name="moneyBalance" value="100000" checked="">
                <span>Nạp</span> <b>100.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+1100 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio4" type="radio" name="moneyBalance" value="200000">
                <span>Nạp</span> <b>200.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+2200 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio5" type="radio" name="moneyBalance" value="500000">
                <span>Nạp</span> <b>500.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+5500 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio36" type="radio" name="moneyBalance" value="1000000">
                <span>Nạp</span> <b>1.000.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+11.000 Point vào tài khoản)</em>
            </div>
            <div>
                <input id="Radio39" type="radio" name="moneyBalance" value="2000000">
                <span>Nạp</span> <b>2.000.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+22.000 Point vào tài khoản)</em>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="ucPopupMoney_loginPanel" onkeypress="" >

            <div class="form-horizontal" style="margin-top: 15px;">
                <div class="form-group">
                    <div class="col-xs-12">
                        <span class="text-error" id="errBalance"></span>
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
                            <input id="capchaBalance" name="verifyCodeBalance" type="text" class="form-control alignleft " placeholder="Xác nhận" style="width:150px;">

                            <div style="height: 30px; width: 140px; float: left; margin-left: 10px;">
                                <div class="sendRequestCapcha"></div>

                            </div>
                        </div>
                    </div><div class="form-group">
                        <div class="col-xs-12 line-h">
                            <a onclick="return SEND_BALANCE();" id="ucPopupMoney_btnATM" class="button-orange" href="javascript:void(0)">NẠP TIỀN VÀO TÀI KHOẢN &nbsp;<i class="fa fa-money fa-lg" aria-hidden="true"></i></a>

                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>

    </div>
    <div class="row form-group">
        <div class="col-xs-12">                        <div class="bg-pop">                            <ul class="introduce-list">                                <li>Bạn chưa có tài khoản Ngân Lượng? <a href="https://www.nganluong.vn/?portal=nganluong&amp;page=user_register" class="aorange" target="_blank">Đăng kí ngay</a>.</li>                                <li>Xem lịch sử nạp tiền của bạn <a href="/tailieu/account/historypoint.html" class="aorange" target="_blank">tại đây</a> (Hoặc) <a href="/huong-dan-cach-nap-tien-vao-tai-khoan-b124.html#nganluong" class="aorange" target="_blank">Hướng dẫn nạp tiền qua Ngân lượng</a>.</li>								<li>Hotline hỗ trợ giao dịch 24/7: <a class="bold" href="tel:+84886454623" title="Click gọi ngay!">0886.4546.23</a></li>						</ul>                        </div>                    </div>
    </div>


</div>

    <style>

        ul.bankList {
            clear: both;
            height: 202px;
            width: 636px;
        }
        ul.bankList li {
            list-style-position: outside;
            list-style-type: none;
            cursor: pointer;
            float: left;
            margin-right: 0;
            padding: 5px 2px;
            text-align: center;
            width: 90px;
        }
        .list-content li {
            list-style: none outside none;
            margin: 0 0 10px;
        }

        .list-content li .boxContent {
            display: none;
            width: 80%;
            border:1px solid #cccccc;
            padding:10px; 
        }
        .list-content li.active .boxContent {
            display: block;
        }
        .list-content li .boxContent ul {
            /*height:280px;*/
        }

        i.VISA, i.MASTE, i.AMREX, i.JCB, i.VCB, i.TCB, i.MB, i.VIB, i.ICB, i.EXB, i.ACB, i.HDB, i.MSB, i.NVB, i.DAB, i.SHB, i.OJB, i.SEA, i.TPB, i.PGB, i.BIDV, i.AGB, i.SCB, i.VPB, i.VAB, i.GPB, i.SGB,i.NAB,i.BAB 
        { width:80px; height:30px; display:block; background:url(https://www.nganluong.vn/webskins/skins/nganluong/checkout/version3/images/bank_logo.png) no-repeat;}
        i.MASTE { background-position:0px -31px}
        i.AMREX { background-position:0px -62px}
        i.JCB { background-position:0px -93px;}
        i.VCB { background-position:0px -124px;}
        i.TCB { background-position:0px -155px;}
        i.MB { background-position:0px -186px;}
        i.VIB { background-position:0px -217px;}
        i.ICB { background-position:0px -248px;}
        i.EXB { background-position:0px -279px;}
        i.ACB { background-position:0px -310px;}
        i.HDB { background-position:0px -341px;}
        i.MSB { background-position:0px -372px;}
        i.NVB { background-position:0px -403px;}
        i.DAB { background-position:0px -434px;}
        i.SHB { background-position:0px -465px;}
        i.OJB { background-position:0px -496px;}
        i.SEA { background-position:0px -527px;}
        i.TPB { background-position:0px -558px;}
        i.PGB { background-position:0px -589px;}
        i.BIDV { background-position:0px -620px;}
        i.AGB { background-position:0px -651px;}
        i.SCB { background-position:0px -682px;}
        i.VPB { background-position:0px -713px;}
        i.VAB { background-position:0px -744px;}
        i.GPB { background-position:0px -775px;}
        i.SGB { background-position:0px -806px;}
        i.NAB { background-position:0px -837px;}
        i.BAB { background-position:0px -868px;}

        ul.cardList li {
            cursor: pointer;
            float: left;
            margin-right: 0;
            padding: 1px 4px;
            text-align: center;
            width: 80px;
        }
        @media (min-width: 768px) {
            .col-sm-6 {
                width: 50%;
            }
        }
    </style>



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

        function SEND_BALANCE() {
            var amount = findSelection('moneyBalance');
            if (amount == 0) {
                alert('Bạn chưa chọn số tiền nạp');
                return false;
            }
            var token = '<?php echo Yii::app()->request->csrfToken;?>
';
            //successValidate();
            var url = "<?php echo Yii::app()->createUrl('tailieu/addfund/buyCard');?>
";
            var capchaCARD = $('#capchaBalance').val();

            var error_check = false;

            if (error_check) {
                return false;
            }
            $.post(url, {buybalance: 'buybalance', YII_CSRF_TOKEN: token, amount: amount, verify_image: capchaCARD}, function(data) {
                console.log(data);
                data = JSON.parse(data);
                if (!data['error']) {
                    window.location = data['data'];
                } else {
                    $('#errBalance').html(data['error']);
                    getCaptraR('sendRequestCapcha');
                }
            });
        }
    </script> 
<?php }} ?>
