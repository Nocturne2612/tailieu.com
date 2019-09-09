{if $data}


                <div class="ui-box tab-box">
                    <div class="tab-title">
                        <ul    class="tabs">
                            <li id="tab1" onmouseover="setTab('tab', 1, 3);" class="current">Tải nhiều</li>

                        </ul>
                    </div>
                    <div class="tab-cnt">
                        <div id="con_tab_1" class="tab-item">

                            <ul class="list-group">
                                {foreach $data as $d}
                                    <li>
                                        <div class="thumb ">
                                            <a href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}">
                                                {if $d.picture <> ""}{assign var="arr_pic" value="|"|explode:$d.picture} <img  alt="{$d.title}" src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" style="margin:-25px 0 0 -30px;"/> {/if}</a>
                                            </a>
                                        </div>
                                        <h5><a href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}">{$d.title}</a></h5>
                                        <p class="category">4 <i class="icon-star"></i> - 302 <i class="icon-download"></i>
                                            <span class="filetype">.SKP</span>
                                        </p>
                                    </li>
                                {/foreach}

                                

                            </ul>
                        </div>
                        <!-- // tab-item end -->

                        <div id="con_tab_2" class="tab-item fn-hide">

                            <ul class="list-group">

                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ban-tho-than-tai-p529.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Bàn thờ thần tài" src="http://thuvien3d.net/upload/product/thumb/ban-tho-than-tai-095045020416.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ban-tho-than-tai-p529.html">Bàn thờ thần tài</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 8 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/copper-candle-holders-p528.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Copper Candle Holders" src="http://thuvien3d.net/upload/product/thumb/copper-candle-holders-204004010416.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/copper-candle-holders-p528.html">Copper Candle Holders</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 0 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/pumpkin-storage-head-p527.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Pumpkin Storage Head" src="http://thuvien3d.net/upload/product/thumb/pumpkin-storage-head-203741010416.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/pumpkin-storage-head-p527.html">Pumpkin Storage Head</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 3 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/sofa-wood-p526.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Sofa Wood" src="http://thuvien3d.net/upload/product/thumb/sofa-wood-134052180316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/sofa-wood-p526.html">Sofa Wood</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 11 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/grand-repose-lounge-chair-p525.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Grand Repose Lounge Chair" src="http://thuvien3d.net/upload/product/thumb/grand-repose-lounge-chair-234151100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/grand-repose-lounge-chair-p525.html">Grand Repose Lounge Chair</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 1 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/fortuny-stage-lamp-p524.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Fortuny Stage Lamp " src="http://thuvien3d.net/upload/product/thumb/fortuny-stage-lamp-234106100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/fortuny-stage-lamp-p524.html">Fortuny Stage Lamp </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 2 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/beat-lights-p523.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Beat Lights" src="http://thuvien3d.net/upload/product/thumb/beat-lights-233920100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/beat-lights-p523.html">Beat Lights</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 13 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/new-imac-by-apple-p522.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="New iMac by Apple
                                                 " src="http://thuvien3d.net/upload/product/thumb/new-imac-by-apple-233803100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/new-imac-by-apple-p522.html">New iMac by Apple
                                        </a></h5>
                                    <p class="category">4 <i class="icon-star"></i> - 21 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/hollywood-floor-lamp-p521.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Hollywood Floor Lamp" src="http://thuvien3d.net/upload/product/thumb/hollywood-floor-lamp-233558100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/hollywood-floor-lamp-p521.html">Hollywood Floor Lamp</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 1 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ironica-chair-p520.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Ironica Chair " src="http://thuvien3d.net/upload/product/thumb/ironica-chair-233419100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ironica-chair-p520.html">Ironica Chair </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 10 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/pikap-ott2000-p519.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Pikap OTT2000" src="http://thuvien3d.net/upload/product/thumb/pikap-ott2000-233059100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/pikap-ott2000-p519.html">Pikap OTT2000</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 1 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/oliver-tray-table-p518.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Oliver Tray Table 
                                                 " src="http://thuvien3d.net/upload/product/thumb/oliver-tray-table-233015100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/oliver-tray-table-p518.html">Oliver Tray Table 
                                        </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 1 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/hello-floor-lamp-by-normann-copenhagen-p517.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Hello Floor Lamp by Normann Copenhagen
                                                 " src="http://thuvien3d.net/upload/product/thumb/hello-floor-lamp-by-normann-copenhagen-232828100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/hello-floor-lamp-by-normann-copenhagen-p517.html">Hello Floor Lamp by Normann Copenhagen
                                        </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 3 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/corner-sliding-wardrobe-p516.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Corner sliding wardrobe
                                                 " src="http://thuvien3d.net/upload/product/thumb/corner-sliding-wardrobe-195832070316.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/corner-sliding-wardrobe-p516.html">Corner sliding wardrobe
                                        </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 12 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/halloween-pumpkin-p515.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Halloween Pumpkin
                                                 " src="http://thuvien3d.net/upload/product/thumb/halloween-pumpkin-195720070316.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/halloween-pumpkin-p515.html">Halloween Pumpkin
                                        </a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 1 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/corner-cabinet-made-of-mdf-p514.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Corner cabinet made of MDF" src="http://thuvien3d.net/upload/product/thumb/corner-cabinet-made-of-mdf-195623070316.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/corner-cabinet-made-of-mdf-p514.html">Corner cabinet made of MDF</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 9 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/tu-tivi-p513.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="tủ tivi" src="http://thuvien3d.net/upload/product/thumb/tu-tivi-203024280216.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/tu-tivi-p513.html">tủ tivi</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 2 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/china-light-2-p512.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="China light 2" src="http://thuvien3d.net/upload/product/thumb/china-light-2-151635250216.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/china-light-2-p512.html">China light 2</a></h5>
                                    <p class="category">0 <i class="icon-star"></i> - 9 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>

                            </ul>
                        </div>
                        <!-- // tab-item end -->
                        <div id="con_tab_3" class="tab-item fn-hide">

                            <ul class="list-group">	
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ban-tho-tu-tho-p16.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Bàn thờ - tủ thờ" src="http://thuvien3d.net/upload/product/thumb/ban-tho-tu-tho-104805010815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ban-tho-tu-tho-p16.html">Bàn thờ - tủ thờ</a></h5>
                                    <p class="category">4 <i class="icon-star"></i> - 302 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ban-tho-than-tai-p69.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Bàn thờ thần tài" src="http://thuvien3d.net/upload/product/thumb/ban-tho-than-tai-184317040815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ban-tho-than-tai-p69.html">Bàn thờ thần tài</a></h5>
                                    <p class="category">4 <i class="icon-star"></i> - 253 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/new-imac-by-apple-p522.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="New iMac by Apple
                                                 " src="http://thuvien3d.net/upload/product/thumb/new-imac-by-apple-233803100316.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/new-imac-by-apple-p522.html">New iMac by Apple
                                        </a></h5>
                                    <p class="category">4 <i class="icon-star"></i> - 21 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ghe-sofa-p19.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Ghế sofa" src="http://thuvien3d.net/upload/product/thumb/ghe-sofa-105752010815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ghe-sofa-p19.html">Ghế sofa</a></h5>
                                    <p class="category">3 <i class="icon-star"></i> - 53 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/lau-dai-p45.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Lâu đài" src="http://thuvien3d.net/upload/product/thumb/lau-dai-101626030815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/lau-dai-p45.html">Lâu đài</a></h5>
                                    <p class="category">3 <i class="icon-star"></i> - 114 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/chau-hoa-sketchup-3d-objects-p6.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Chậu hoa - Sketchup 3D Objects " src="http://thuvien3d.net/upload/product/thumb/chau-hoa-sketchup-3d-objects-224403310715.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/chau-hoa-sketchup-3d-objects-p6.html">Chậu hoa - Sketchup 3D Objects </a></h5>
                                    <p class="category">2 <i class="icon-star"></i> - 74 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ghe-van-phong-3dsmax-2015-p10.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Ghế văn phòng - 3dsMax 2015" src="http://thuvien3d.net/upload/product/thumb/office-chair-3dsmax-2015-000725010815.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ghe-van-phong-3dsmax-2015-p10.html">Ghế văn phòng - 3dsMax 2015</a></h5>
                                    <p class="category">2 <i class="icon-star"></i> - 25 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/phong-lam-viec-working-room-p130.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Phòng làm việc - working room" src="http://thuvien3d.net/upload/product/thumb/phong-lam-viec-working-room-114618080815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/phong-lam-viec-working-room-p130.html">Phòng làm việc - working room</a></h5>
                                    <p class="category">2 <i class="icon-star"></i> - 163 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/phong-ngu-tre-em-p168.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Phòng ngủ trẻ em
                                                 " src="http://thuvien3d.net/upload/product/thumb/phong-ngu-tre-em-231713110815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/phong-ngu-tre-em-p168.html">Phòng ngủ trẻ em
                                        </a></h5>
                                    <p class="category">2 <i class="icon-star"></i> - 34 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/lu-dong-p448.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Lư Đồng" src="http://thuvien3d.net/upload/product/thumb/lu-dong-012356271015.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/lu-dong-p448.html">Lư Đồng</a></h5>
                                    <p class="category">2 <i class="icon-star"></i> - 65 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/ghe-sketchup-3d-objects-p7.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Ghế - Sketchup 3d Objects" src="http://thuvien3d.net/upload/product/thumb/ghe-sketchup-3d-objects-225100310715.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/ghe-sketchup-3d-objects-p7.html">Ghế - Sketchup 3d Objects</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 19 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/den-dien-3dsmax-2014-p9.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Đèn điện - 3dsMax 2014" src="http://thuvien3d.net/upload/product/thumb/flos-wan-s-pendant-lamp-000236010815.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/den-dien-3dsmax-2014-p9.html">Đèn điện - 3dsMax 2014</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 42 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/den-tran-ceiling-light-p18.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Đèn trần - Ceiling light" src="http://thuvien3d.net/upload/product/thumb/den-tran-ceiling-light-105521010815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/den-tran-ceiling-light-p18.html">Đèn trần - Ceiling light</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 84 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/phong-bep-p20.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Phòng bếp" src="http://thuvien3d.net/upload/product/thumb/phong-bep-114917010815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/phong-bep-p20.html">Phòng bếp</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 33 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/bo-ban-ghe-dong-ky-voi-phuc-p43.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Bộ bàn ghế Đồng Kỵ voi phục" src="http://thuvien3d.net/upload/product/thumb/bo-ban-ghe-dong-ky-voi-phuc-100819030815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/bo-ban-ghe-dong-ky-voi-phuc-p43.html">Bộ bàn ghế Đồng Kỵ voi phục</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 226 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/tuong-quan-the-am-bo-tat-p48.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Tượng quan thế âm bồ tát" src="http://thuvien3d.net/upload/product/thumb/tuong-quan-the-am-bo-tat-103056030815.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/tuong-quan-the-am-bo-tat-p48.html">Tượng quan thế âm bồ tát</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 62 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/cua-keo-slide-door-p68.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Của kéo - Slide door" src="http://thuvien3d.net/upload/product/thumb/cua-keo-slide-door-184211040815.jpg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/cua-keo-slide-door-p68.html">Của kéo - Slide door</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 147 <i class="icon-download"></i>
                                        <span class="filetype">.SKP</span>
                                    </p>
                                </li>
                                <li>
                                    <div class="thumb ">
                                        <a href="http://thuvien3d.net/hoa-tiet-trang-tri-p81.html">
                                            <img style="margin:-25px 0 0 -30px;" width="60" alt="Họa tiết trang trí" src="http://thuvien3d.net/upload/product/thumb/hoa-tiet-trang-tri-125155050815.jpeg"/>
                                        </a>
                                    </div>
                                    <h5><a href="http://thuvien3d.net/hoa-tiet-trang-tri-p81.html">Họa tiết trang trí</a></h5>
                                    <p class="category">1 <i class="icon-star"></i> - 22 <i class="icon-download"></i>
                                        <span class="filetype">.MAX</span>
                                    </p>
                                </li>


                            </ul>
                        </div>
                        <!-- // tab-item end -->
                    </div>
                </div>
                {/if}