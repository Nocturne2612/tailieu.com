
<div class="row">
    {if $err <>''}
        <div class="alert alert-danger">{$err} </div>
    {/if}
</div>
<div class="row">
    <div class="col-sm-3">

        <div data-duration="2" data-suffix="%" data-to="99.9" data-from="0" data-count=".num" class="xe-widget xe-counter">
            <div class="xe-icon">
                <i class="linecons-cloud" style="padding-top: 10px;"></i>
            </div>
            <div class="xe-label">
                <strong class="num">{$count}</strong>
                <span><a href="{Yii::app()->createUrl('admin/products')}">Bài viết chưa duyệt</a></span>
            </div>
        </div>



    </div>


    {if $Top5Account}
        <div class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">5 Tài khoản mới đăng ký</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $Top5Account as $v}
                            <tr>
                                <td><a href="{Yii::app()->createUrl('admin/account/view',['id'=>$v.id])}">{$v.email}</a></td>
                                <td>{$v.mobile_phone}</td>
                                <td>{$v.point|number_format:2:",":"."|replace:',00':''}</td>
                            </tr>
                        {/foreach}    
                    </tbody>
                </table>
            </div>

        </div>
    {/if}
    {if $Top5Transaction}
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">5 Giao dịch gần nhất</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Loại</th>
                            <th>Point</th>
                            <th>Mô tả</th>
                            <th>Ngày tạo</th>

                        </tr>
                    </thead>
                    <tbody>
                        {foreach $Top5Transaction as $item}
                            <tr>
                                <td>{$arr_type[$item.type]}</td>
                                <td>{$item.point|number_format:2:",":"."|replace:',00':''}</td>
                                <td  style="overflow: auto;">{$item.desc} </td>
                                <td>{$item.create_time|date_format:"%d/%m/%Y %H:%M"}</td>

                            </tr>
                        {/foreach} 
                    </tbody>
                </table>
            </div>

        </div>
    {/if}
</div>




