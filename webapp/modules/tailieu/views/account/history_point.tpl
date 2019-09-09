

<div class="user-main user-main-inner recruit-wrap">
    <div class="">
        <ul class="recruit-faqs-item">
            <h3>Lịch sử point  <span>(1)</span> </h3>
            {if $product}
                {$no = 0}
                {foreach $product['data'] as $k=>$t}
                    <li data-id="{$t.id}">
                        <p>{$no++}. {$arr_type[$t.type]} <i class="iconfont icon-jiahao"></i><i
                                class="iconfont icon-jianhao"></i></p>
                        <div class="recruit-faqs-question">
                            <p>
                                POINT:  {$t.point|number_format:2:",":"."|replace:',00':''}
                            </p>
                            <p>
                                Mô tả:  {$t.desc}
                            </p>
                            <p>
                                Thời gian:  {$t.create_time|date_format:"%d-%m-%Y"}
                            </p>
                            <p>
                                Trạng thái:  {if $t.status == 1} Thành công {elseif $t.status == 2}Chờ kết quả{else} Thất bại{/if}
                            </p>
                        </div>
                    </li>

                {/foreach}
                {$product['pageHtml']} 
            {else}
                <tr class="danger">
                    <td colspan="6" align="center">Không tồn tại tài liệu</td>
                </tr>
            {/if}
        </ul>
    </div>
</div>




<style>
    .fl {
        float: left;

    }
    .mg { 
        padding: 10px;
    }
    .bootstrap-datetimepicker-widget {
        position: absolute;
        background: white;
        z-index: 100;
    }
</style>














<style>
    .bootstrap-datetimepicker-widget {
        position: absolute;
        background: white;
        z-index: 100;
    }
</style>