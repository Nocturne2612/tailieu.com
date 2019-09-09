<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 09:22:27
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/products/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16021014565abc8fa43f22d7-58752707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d06b634d149c74109f86f2855541c3995417a5b' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/products/index.tpl',
      1 => 1563752345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16021014565abc8fa43f22d7-58752707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8fa44cf455_59898651',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_category' => 0,
    'combo_types' => 0,
    'combo_status' => 0,
    'error' => 0,
    'success' => 0,
    'totalRecord' => 0,
    'data_ouput' => 0,
    'item' => 0,
    'arr_type' => 0,
    't' => 0,
    'type' => 0,
    'array_category' => 0,
    'link_images' => 0,
    'arr_pic' => 0,
    'arr_statuss' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8fa44cf455_59898651')) {function content_5abc8fa44cf455_59898651($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>﻿<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách tài liệu</h1>
        <p class="description">Thêm, sửa, xóa danh sách tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh sách tài liệu</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/products/create/");?>
">  
    <div class="alert alert-info"> Thêm tài liệu </div>                
</a>
<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm tài liệu</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo CHtml::beginForm($_tmp1,'get',array('role'=>'form','class'=>'form-wizard'));?>



                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="title">Mã tài liệu:</label>
                        <input type="text" class="form-control" id="p_id" class="p_id" name="p_id" value="<?php if ($_smarty_tpl->tpl_vars['get_data']->value['p_id']!='') {?><?php echo $_smarty_tpl->tpl_vars['get_data']->value['p_id'];?>
<?php }?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="title">Tiêu đề:</label>
                        <input type="text" class="form-control" id="title" class="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['title'];?>
">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group">
                        <label class="control-label" for="category">Danh mục:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="begin_createtime">Ngày tạo:</label>
                        <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="begin_createtime" name="begin_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['begin_createtime'];?>
">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="end_createtime">Đến:</label>
                        <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="end_createtime" name="end_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['end_createtime'];?>
">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="category">Loại tài liệu:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_types']->value;?>

                    </div>
                </div>
				 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="account_id">Mã tài khoản:</label>
                         <input type="text" class="form-control" id="account_id" class="account_id" name="account_id" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['account_id'];?>
">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="account_name">Tên tài khoản:</label>
                         <input type="text" class="form-control" id="account_name" class="account_name" name="account_name" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['account_name'];?>
">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Trạng thái:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>

                    </div>
                </div>
                <div class="col-md-4 pager">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="search" value="   ">Tìm kiếm</button>
                        <button type="reset" class="btn btn-default" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>
                    </div>
                </div>

                <?php echo CHtml::endForm();?>
  
            </div>

        </div>
    </div>
</div>
<div class="row" >   
    <div class="col-md-12">
        <div class="panel panel-default">
            <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
            <?php }?>
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> tài liệu</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>


            <div class="panel-body"> 
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo CHtml::beginForm($_tmp2,'post',array('role'=>'form','class'=>'form-horizontal','name'=>'frmV'));?>
  
                <!--Table style1-->

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã tài liệu</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th>Hình ảnh</th>
                                <th>SL Tải</th>
                                <th>TG tạo</th>
                                <th>TG cập nhật</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <?php if ($_smarty_tpl->tpl_vars['data_ouput']->value) {?>
                            <tbody class="table-hover">

                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_ouput']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='2') {?>class="danger"<?php }?>>
                                        <td><label><input name="element[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="checkbox">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['p_id'];?>
</label></td>
                                        <td style="width:350px;"><a href="<?php echo SystemBase::buildUrl('tailieu/document/',array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title']));?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']!='0'&&$_smarty_tpl->tpl_vars['item']->value['type']!='') {?>
                                                <?php $_smarty_tpl->tpl_vars["arr_type"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['item']->value['type']), null, 0);?>

                                                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><br /> <strong> - <?php echo $_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['t']->value];?>
</strong><?php } ?>
                                            <?php }?> 
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['proprice']>0) {?><br />Giá KM: <strong class="label label-danger"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['item']->value['proprice'],2,",","."),',00','');?>
 đ</strong> <?php }?>
                                            <br />Giá: <strong><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['item']->value['price'],2,",","."),',00','');?>
 đ</strong> 
                                        </td>

                                        <td><?php if (isset($_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['category_id']])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['category_id']]['title'];?>

                                            <?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['sub_category_id']])) {?>
                                                    &rightarrow;<?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['sub_category_id']]['title'];?>

													
                                                <?php }?>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['picture2']!='') {?>
                                                    <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['item']->value['picture2']), null, 0);?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" height="50"/>
                                                <?php }?>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count_down'];?>
</td>
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d-%m-%Y");?>
<br> Người tạo: <?php echo $_smarty_tpl->tpl_vars['item']->value['account_name'];?>
</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['update_time']>0) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['update_time'],"%d-%m-%Y");?>
<?php }?></td>
                                            <td style="width:250px;"> 
                                                <span class="input-group-btn">
                                                    <a href="<?php echo Yii::app()->createUrl("admin/products/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status'],'key_change'=>'tailieu.net'));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a>
                                                    <a href="<?php echo Yii::app()->createUrl("admin/products/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
" class="btn btn-warning">Sửa</a> | 
                                                    <a href="<?php echo Yii::app()->createUrl("admin/products/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xoá');">Xóa</a>
                                                </span>

                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        <?php } else { ?>
                                            <tr><td colspan="8" class="alert-danger danger"> Không có dữ liệu.</td></tr>
                                            <?php }?>

                                            </table>
                                        </div>
                                        <div class="row">
                                            <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                                            <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                                        </div>
                                        <?php echo CHtml::endForm();?>
  
                                        <!--Paging--->
                                        <div class="row"><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
<p>&nbsp; </p> </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                         
                            <script type="text/javascript">
                                $(document).ready(function () {

                                    $('.datepicker').datepicker({
                                        format: "dd-mm-yyyy",
                                        autoclose: true,
                                    });

                                });
                                function uncheck() {
                                    for (i = 0; i < document.frmV.length; i++) {
                                        if (document.frmV[i].type == "checkbox") { //Kiểm tra xem có phải là checkbox ?
                                            if (document.frmV[i].checked) {
                                                document.frmV[i].checked = false;
                                            }
                                            else {
                                                document.frmV[i].checked = true;
                                            }
                                        }
                                    }
                                }
                            </script> 
                        <?php }} ?>
