<div class="page-title">
  <div class="title-env">
    <h1 class="title">Quản trị Link</h1>
    <p class="description">Thêm, sửa, xóa link</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Link</strong> </li>
    </ol>
  </div>
</div>
<!--Fillter-->
<a href="{Yii::app()->createUrl("admin/link/create/")}">  
    <div class="alert alert-info"> Thêm Link </div>
</a>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont">{$counts}</strong> danh mục</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
                <div class="clearfix"></div> 
            </div>

            <!--fillter-->

            <div class="panel-body">  
                {CHtml::beginForm(Yii::app()->createUrl("admin/link/edit/"),'post',['role' => 'form','class'=>'form-horizontal'])}
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cột</th>
                                <th>Text hiển thị</th>
                                <th>Vị trí</th>
                                <th>Link</th>
                                <th>Mạng xã hội</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                        {if $links}
                          {foreach $links as $k => $item}
                            <tr>
                                <th>{$item.id}</th>
                                <th>
                                    {if $item.type == 1}
                                        TRANG
                                    {elseif $item.type == 2}
                                        TRỢ GIÚP
                                    {else}
                                        PHÁP LÝ
                                    {/if}
                                </th>
                                <th>{$item.name}</th>
                                <th>{$item.position}</th>
                                <th><a href="{$item.link}" target="_blank">{$item.link}</a></th>
                                <td>{if $item.image <>""}<img src="{$link_images}{$item.image}" width="50"/>{/if}</td>
                                <th style="width:250px;">
                                <span class="input-group-btn">                                   
                                    <a class="btn btn-warning" href='{Yii::app()->createUrl("admin/link/edit/",['id'=>$item.id])}' >Sửa</a>
                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='{Yii::app()->createUrl("admin/link/del/",['id'=>$item.id])}'>Xóa</a>
                                </span>
                                </th>
                            </tr>
                          {/foreach}
                        {else} 
                            <tr> <td colspan="6" class="alert-danger danger">Không có dữ liệu</td></tr>  
                        {/if} 
                        </tbody>
                    </table>
                </div>
                {CHtml::endForm()}     
            </div>

        </div>
    </div>

</div>    
