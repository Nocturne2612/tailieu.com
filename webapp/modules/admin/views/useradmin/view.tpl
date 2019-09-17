<div class="page-title">
    <div class="title-env">
        <h1 class="title">Thông tin tài khoản</h1>
        <p class="description">Thêm, sửa, phân quyền tài khoản quản trị</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>
            <li>
                <a href="{$link_account}">Tài khoản</a>
            </li>
            <li class="active">
                <strong>Thông tin tài khoản</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/useradmin/create/")}">  
    <div class="alert alert-info"> Thêm tài khoản </div>                
</a>
<div class="panel panel-default"> 
    <h3 class="panel-title">Thông tin tài khoản {$data.username}</h3>
    <div class="panel-body">        
        <div class="row">

            {if $err <> ''}
                <div class="alert alert-danger" role="alert">{$err}</div>
            {/if}

            {CHtml::beginForm('','post',['role' => 'form','class'=>'form-horizontal'])}
            <div class="form-group">
                <label class="col-sm-2 control-label">Họ và tên:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="fullname" value="{$data.fullname}" id="fullname" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tài khoản:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="username" value="{$data.username}" id="username" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-9">
                    <input type="text" name="email" value="{$data.email}" id="email" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Trạng thái:</label>
                <div class="col-sm-9">
                    <select name="status" id="status" class="form-control">
                        <option value="1" {if $data.status eq '1'}selected="selected"{/if}>Khóa tài khoản</option>
                        <option value="2" {if $data.status eq '2'}selected="selected"{/if}>Hoạt động</option>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Mật khẩu:</label>
                <div class="col-sm-9">
                    <input type="text" name="password" value="" id="password" class="form-control" />
                </div>
            </div>
            <div class="form-group-separator"></div> 
            <div class="form-group">
                <label class="col-sm-2 control-label"><strong>Phân quyền:</strong></label>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    {foreach $controllers as $key=>$c}
                        <p class="col-sm-6">
                            <label> 
                                <input type="checkbox" class="cbr cbr-danger " name="c[]" value="{$c|lower}" {if isset($permission[$c|lower])}checked="checked"{/if} id="parent{$key}" onclick="return checks('{$key}');">
                                <strong> {if isset($arrController[$c|lower])}{$arrController[$c|lower]}{else}{$c}{/if} </strong>   
                            </label>  
                            <br>----                       
                            {foreach Yii::app()->metadata->getActions($c, 'admin') as $k=>$a}
                                <label class="cbr-inline lb{$key}">
                                    <input type="checkbox" class="cbr cbr-secondary child{$key}" name="a[{$c|lower}][]" value="{$a}" {if isset($permission[$c|lower])&&in_array($a,$permission[$c|lower])}checked="checked"{/if}> 

                            {if isset($arrAction[$a])}{$arrAction[$a]}{else}{$a}{/if}
                        </label>
                    {/foreach}

                </p> 
            {/foreach}
        </div>
    </div> 
    <div class="form-group-separator"></div>        
    <div class="form-group"> 
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-9">
            <button type="submit" class="btn btn-success" name="edit" value="   ">Cập nhật</button>
            <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
        </div>
    </div>        
    {CHtml::endForm()}  
</div>
</div>
</div>
{literal}
    <script>
        function checks(c) {
            var v = $('#parent' + c).is(':checked');
            $('.child' + c).prop('checked', v);
            if(v==true){
                $('.lb'+c+' .cbr-replaced').addClass('cbr-checked');
            }else{
                 $('.lb'+c+' .cbr-replaced').removeClass('cbr-checked');
            }
        }
    </script>
{/literal}