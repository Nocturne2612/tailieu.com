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
                    <div class="pull-left">Có <strong class="blueFont">{count($links)}</strong> danh mục</div>
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
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                        {if $links}
                          {foreach $links as $k => $item}
                            <tr>
                            <?php var_dump($item) die();  ?>
                                <th>{$item.id}</th>
                                <th>{$item.type}</th>
                                <th>{$item.name}</th>
                                <th>{$item.position}</th>
                                <th>{$item.link}</th>
                                <th style="width:250px;">
                                <div class="col-sm-3" style="padding: 0px;">
                                    <input class="form-control no-right-border form-focus-purple" type="text" value="{$item.stt}" name="stt[]">
                                </div>
                                <input type="hidden" value="{$item.id}" name="ids[]">
                                <span class="input-group-btn">                                   
                                    <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>                                        
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
