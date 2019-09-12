<div id="content">
    <div class="layout fn-clear">
        <div class="fn-clear" id="signin-wrapper">
            <div class="modal-content" id="tabs1">
                <div class="modal-header popup_header">
                    
                    <p class="modal-title text-center" id="myModalLabel">NẠP TIỀN VÀO TÀI KHOẢN</p>

                </div>
                <div class="modal-body">
                    <div class="row bg-tab">
                        <div class="col-xs-12">
                            <ul class="nav nav-tabs" role="tablist">
                               <!-- <li role="presentation" class="bold"><a href="javascript:void(0)" onclick="openCity(event, 'CARD')" rel="nofollow" role="tab" data-toggle="tab" aria-expanded="false">1 - THẺ ĐIỆN THOẠI</a></li> -->
                                <li role="presentation" class="bold active"><a href="javascript:void(0)" onclick="openCity(event, 'ATM')" rel="nofollow" role="tab" data-toggle="tab" aria-expanded="true" style="color: rgb(141, 198, 63); background: rgb(238, 238, 238);">2 - THẺ ATM</a></li>
                                <li role="presentation" class="bold"><a href="javascript:void(0)" rel="nofollow" onclick="openCity(event, 'BALANCE')" role="tab" data-toggle="tab" aria-expanded="false">3 - VÍ NGÂN LƯỢNG</a></li>
                                <li role="presentation" class="bold"><a href="javascript:void(0)" rel="nofollow" role="tab" onclick="openCity(event, 'PAYPAL')" data-toggle="tab" aria-expanded="false">4 - PAYPAL</a></li>
                                <li role="presentation" class="bold"><a href="javascript:void(0)" rel="nofollow" role="tab" data-toggle="tab" onclick="openCity(event, 'TRANSFER')" aria-expanded="false">5 - CHUYỂN KHOẢN</a></li>
                            </ul>
                        </div>
                    </div>
                    {literal}
                        <script>
                            function openCity(evt, cityName) {
                                // Declare all variables
                                var i, tabcontent, tablinks;
                                // Get all elements with class="tabcontent" and hide them
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }

                                // Get all elements with class="tablinks" and remove the class "active"
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }

                                // Show the current tab, and add an "active" class to the button that opened the tab
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";
                            }
                        </script>
                    {/literal}
                    <div class="row">
                        <div class="tab-content col-xs-12">
                           <!-- <div role="tabpanel" class="row tabcontent active" id="CARD" style="display: {$CARD};">
                                {include file="$template_card"}
                            </div> -->
                            <div role="tabpanel" class="row tabcontent active" id="ATM" style="display: {$ATM};">
                                {include file="$template_atm"}
                            </div>
                            <div role="tabpanel" class="row tabcontent" id="BALANCE" style="display: {$BALANCE};">
                                {include file="$template_balance"}

                            </div>
                            <div role="tabpanel" class="row tabcontent" id="PAYPAL" style="display: {$PAYPAL};">
                                {include file="$template_paypal"}
                            </div>
                            <div role="tabpanel" class="row tabcontent" id="TRANSFER" style="display: {$CHUYENKHOAN};">
                                {include file="$template_chuyenkhoan"}
                            </div>
                        </div>
                    </div>
                    <div class="line_orn"></div>
                    <div class="modal-footer">
                        
						
						
						<p class="text-center green bold line-h">
                    <img src="https://tailieukientruc.net/images/bank/secure.png" height="40" alt="secure">
                    <br>Chứng nhận giao dịch an toàn!
                </p>
						
						
						
						
						
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
                           


    <style>
        #ccaptcha_button {
            display: none}
        </style>
        {literal}
            <script language="javascript">
                var mc_flow = new NGANLUONG.apps.MCFlow({trigger: 'btn_deposit', url: '{/literal}{$link_checkout}{literal}'});
            </script>
            <style> 
            
            .sendRequestCapcha img {
                float: right;
    position: absolute;
    top: 0px;
    right: 135px;
            }

            .popup_header {
                background: #8dc63f;
                font-size: 18px;
                color: #fff;
                height: 45px;
                border-radius: 6px 6px 0px 0px;
                text-shadow: 1px 1px 2px #648d03;
                padding-top: 10px;
            }.modal-body {
                background: #f4f0e2;
                overflow: hidden;
            }

            .modal-body {
                position: relative;
                padding: 15px;
            }.bg-pop-info {
                padding: 8px 0px;
                margin-top: -15px;
                line-height: 20px;
            }
            .row {
                margin-right: -15px;
                margin-left: -15px;
            }.col-xs-12 {
                width: 100%;
            }
            .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
                float: left;
            }
            .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
                position: relative;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
            }.bg-tab {
                background: white;
                padding-top: 10px;
            }

            .row {
                margin-right: -15px;
                margin-left: -15px;
            }.nav-tabs {
                border-bottom: 1px solid #e2d8c7;
                margin: 0px -15px;
                padding-left: 15px;
            }
            .nav-tabs {
                border-bottom: 1px solid #ddd;
            }
            .nav {
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }.nav-tabs>li {
                float: left;
                margin-bottom: -1px;
            }
            .nav>li {
                position: relative;
                display: block;
            }
            .bold {
                font-weight: bold;
            }.nav > li > a {
                background-color: #e2d8c7;
            }
            .nav-tabs>li>a {
                margin-right: 2px;
                line-height: 1.42857143;
                border: 1px solid transparent;
                border-radius: 4px 4px 0 0;
            }
            .nav>li>a {
                position: relative;
                display: block;
                padding: 10px 15px;
            }
            #tabs1 {
                margin: auto;;
                padding: 0px;
                width: 800px;
            }
            .modal-content {
                border: 5px solid rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            @media (min-width: 768px){
                .modal-content {
                    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
                    box-shadow: 0 5px 15px rgba(0,0,0,.5);
                }
                .modal-content {
                    position: relative;
                    background-color: #fff;
                    -webkit-background-clip: padding-box;
                    background-clip: padding-box;
                    border: 1px solid #999;
                    border: 1px solid rgba(0,0,0,.2);
                    border-radius: 6px;
                    outline: 0;
                    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
                    box-shadow: 0 3px 9px rgba(0,0,0,.5);
                }}
            .tabcontent {
                animation: fadeEffect 1s; /* Fading effect takes 1 second */
            }
            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons that are used to open the tab content */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border-top: none;
            }
          
            .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
                position: relative;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
                float: left;
            }
            @media (min-width: 768px) {
                .col-sm-pull-5 {
                    right: 41.66666667%;
                }
            }
            .green {
                color: #84c52c;
            }.bg-pop .note em {
                color: #cebda2;
            }.bg-pop ul {
                margin-left: 10px;
            }

            .introduce-list {
                padding-left: 16px;
                list-style: inherit;
            }.introduce-list li {
                padding-top: 2px;
                padding-bottom: 2px;
            }@media (min-width: 768px){
                .col-sm-7 {
                    width: 58.33333333%;
                }.col-sm-5 {
                    width: 41.66666667%;
                }
                .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
                    float: left;
                }
            }.form-control {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #7e592a;
                background-color: #fff;
                background-image: none;
                border: 1px solid #cebda2;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            }
            .form-horizontal .form-group {
                margin-right: -15px;
                margin-left: -15px;
            }
            .form-group {
                margin-bottom: 10px;
            }.input-group {
                position: relative;
                display: table;
                border-collapse: separate;
            }input[type="text"]:not(.txt-search):hover, input[type="password"]:hover, textarea:hover {
                border: 1px solid #ffd666;
            }

            .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child>.btn-group:not(:first-child)>.btn, .input-group-btn:first-child>.btn:not(:first-child), .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group>.btn, .input-group-btn:last-child>.dropdown-toggle {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .input-group .form-control, .input-group-addon, .input-group-btn {
                display: table-cell;
            }
            .input-group .form-control {
                position: relative;
                z-index: 2;
                float: left;
                width: 100%;
                margin-bottom: 0;
            }.adon-custom {
                background: #cbf592;
                color: #648d03;
                border: 1px solid #84c52c;
            }
            .input-group-addon {
                color: #7e592a;
                background-color: #f0ecdd;
                border: 1px solid #cebda2;
            }
            .input-group-addon {
                padding: 6px 12px;
                font-size: 14px;
                font-weight: 400;
                line-height: 1;
                color: #555;
                text-align: center;
                background-color: #eee;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .input-group-addon, .input-group-btn {
                width: 1%;
                white-space: nowrap;
                vertical-align: middle;
            }
            .button-orange {
                white-space: nowrap;
                padding: 10px 20px;
                background: url(/assets/images/bg_orange.jpg) #ff8401;
                border: 1px solid #ff8401;
                color: #fff;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
            }
            .line-h {
                line-height: 40px;
            }
            .col-xs-12 {
                width: 100%;
            }
        </style>

    {/literal}
    {literal}


        <script src="https://www.nganluong.vn/webskins/javascripts/jquery_min.js" type="text/javascript"></script>		
        <script language="javascript">
            $('input[name="PaymentForm[option_payment]"]').bind('click', function() {
                $('.list-content li').removeClass('active');
                $(this).parent().parent('li').addClass('active');
            });
            function htmlLoading() {
                var html = '';
                html += '<style type="text/css">';
                html += '.sk-spinner-three-bounce.sk-spinner {margin: 0 auto;width: 70px;text-align: center;}.sk-spinner-three-bounce div {width: 18px;height: 18px;background-color: #333;border-radius: 100%;display: inline-block;-webkit-animation: sk-threeBounceDelay 1.4s infinite ease-in-out;animation: sk-threeBounceDelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode: both;animation-fill-mode: both;}.sk-spinner-three-bounce .sk-bounce1 {-webkit-animation-delay: -0.32s;animation-delay: -0.32s; }.sk-spinner-three-bounce .sk-bounce2 {-webkit-animation-delay: -0.16s;animation-delay: -0.16s; }@-webkit-keyframes sk-threeBounceDelay {0%, 80%, 100% {-webkit-transform: scale(0);transform: scale(0); }40% {-webkit-transform: scale(1);transform: scale(1); } }@keyframes sk-threeBounceDelay {0%, 80%, 100% {-webkit-transform: scale(0);transform: scale(0); }40% {-webkit-transform: scale(1);transform: scale(1); } }';
                html += '</style>';
                html += '<div class="sk-spinner sk-spinner-three-bounce">';
                html += '<div class="sk-bounce1"></div>';
                html += '<div class="sk-bounce2"></div>';
                html += '<div class="sk-bounce3"></div>';
                html += '</div>';
                //$('.btns').after(html);
                //alert(1);
                return html;
            }
            function getCaptraR(nameCapcha) {
                var url = "{/literal}{Yii::app()->createUrl('tailieu/addfund/BuyCard')}{literal}";
                $.get(url, {getcaptra: 'getcaptra', renewid: Math.random()}, function(data, status) {
                    data = JSON.parse(data);
                    $('.' + nameCapcha).html(data['data']);
                });
            }
            $(document).ready(function() {
                getCaptraR('sendRequestCapcha');
            });
            function SEND_CARD() {
                var token = '{/literal}{Yii::app()->request->csrfToken}{literal}';
                //successValidate();
                var url = "{/literal}{Yii::app()->createUrl('tailieu/addfund/buyCard')}{literal}";

                var selectMethod = $('#select_method').val();
                var card_serial = $('#card_serial').val();
                var card_code = $('#card_code').val();

                var capchaCARD = $('#capchaCARD').val();

                var error_check = false;

                if (error_check) {
                    return false;
                }
                $.post(url, {buycard: 'buycard', YII_CSRF_TOKEN: token, card_serial: card_serial, card_code: card_code, select_method: select_method, verify_image: capchaCARD}, function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (!data['error']) {
                        location.reload();
                    } else {
                        $('#errCARD').html(data['error']);
                        getCaptraR('sendRequestCapcha');
                    }
                });
            }
			var buttons = document.querySelector("ul[class*='nav nav-tabs']").querySelectorAll("a");
            var btselected;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].addEventListener("click", function () {
                    for (var i = 0; i < buttons.length; i++) {
                        if (buttons[i] != btselected) {
                            buttons[i].style.color = "#ff8401";
                            buttons[i].style.background = "#e2d8c7"
                        }
                    }
                    btselected = buttons[i];
                    this.style.color = "#8dc63f";
                    this.style.background = "#eee";
                });
            }
        </script> 
    {/literal}
</div>