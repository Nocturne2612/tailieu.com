<div >
    <div class="col-sm-7">
        <div class="bg-pop">
            <div class="note"><b class="green">GIÁ TRỊ THẺ NẠP</b> <em class="orange">(Point nhận bằng <b>80%</b> giá trị thẻ nạp)</em></div>
            <ul class="introduce-list">
                <li>Thẻ <b>10.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+80 Point vào tài khoản)</em></li>
                <li>Thẻ <b>20.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+160 Point vào tài khoản)</em></li>
                <li>Thẻ <b>30.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+240 Point vào tài khoản)</em></li>
                <li>Thẻ <b>50.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+400 Point vào tài khoản)</em></li>
                <li>Thẻ <b>100.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+800 Point vào tài khoản)</em></li>
                <li>Thẻ <b>200.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+1600 Point vào tài khoản)</em></li>
                <li>Thẻ <b>300.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+2400 Point vào tài khoản)</em></li>
                <li>Thẻ <b>500.000 đ</b>&nbsp;&nbsp;&nbsp;&nbsp;<em>(+4000 Point vào tài khoản)</em></li>
            </ul>

        </div>
    </div>
    <div class="col-sm-5">
        <div id="ucPopupMoney_loginPanel" onkeypress="" >
            <div class="form-horizontal" style="margin-top: 15px;">
                <div class="form-group">
                    <div class="col-xs-12">
                        <span class="text-error" id="errCARD"></span>
                    </div>
                </div>
                
                <div class="detail-info fn-clear cc" style="
                     position: relative;
                     color: #fff;
                     background: #fb0000;
                     margin-top: 3px;
                     padding: 6px;">
                    <p>Chú ý: Các nhà mạng hiện đang bảo trì, vui lòng nạp tiền qua ATM, ví điện tử hoặc Chuyển khoản Internet Banking trực tiếp => Liên hệ 0886.45.46.23 để được hỗ trợ!. Cảm ơn quý khách!</p>
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
                            <select name="select_method" id="select_method" class="form-control">
                                <option value="VMS">Thẻ cào MOBIFONE</option>
                                <option value="VNP">Thẻ cào VINAPHONE</option>
                                <option value="VIETTEL">Thẻ cào VIETTEL</option>
                                <option value="GATE">Thẻ cào GATE</option>

                            </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon adon-custom">Mã thẻ&nbsp;</span>
                        <input id="card_code" name="txtSoPin" type="text" class="form-control" placeholder="Mã thẻ dưới lớp giấy bạc" required>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon adon-custom">Seri thẻ</span>
                                <input id="card_serial" name="txtSoSeri" type="text" required class="form-control" placeholder="Số seri thẻ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="capchaCARD" name="verifyCode" type="text" class="form-control alignleft " placeholder="Xác nhận" style="width:90px;">

                            <div style="height: 30px; width: 140px; float: left; margin-left: 10px;">
                                <div class="sendRequestCapcha"></div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 line-h">
                            <a onclick="return SEND_CARD();" id="ucPopupMoney_btnATM" class="button-orange" href="javascript:void(0)">NẠP TIỀN VÀO TÀI KHOẢN &nbsp;<i class="fa fa-money fa-lg" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
    <div class="col-xs-12">
        <div class="bg-pop">
            <ul class="introduce-list">
                <li>Mua thẻ nạp Online <a href="https://thanhtoanonline.vn/mua-the-dien-thoai.html" class="aorange" target="_blank">tại đây</a></li>
                <li>Xem lịch sử nạp tiền của bạn <a href="/tailieu/account/historypoint.html" class="aorange" target="_blank">tại đây</a> (Hoặc) <a href="/huong-dan-cach-nap-tien-vao-tai-khoan-b124.html#thedt" class="aorange" target="_blank">Hướng dẫn nạp tiền qua thẻ nạp ĐT</a>.</li>
                <li>Hotline hỗ trợ giao dịch 24/7: <a class="bold" href="tel:+84886454623" title="Click gọi ngay!">0886.4546.23</a></li>
            </ul>
        </div>
    </div>
</div>