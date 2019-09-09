<?php /* Smarty version Smarty-3.1.19, created on 2018-07-12 04:13:58
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/products/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3340686245b28d7086beb85-96838553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d752ffc0a853ebb46c8f9fab70da88e2384834' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/products/form.tpl',
      1 => 1531368822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3340686245b28d7086beb85-96838553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28d7087c1687_57988521',
  'variables' => 
  array (
    'link_back' => 0,
    'title_page' => 0,
    'link_action' => 0,
    'error' => 0,
    'success' => 0,
    'data' => 0,
    'combo_category' => 0,
    'combo_category2' => 0,
    'i' => 0,
    'arr_types' => 0,
    'type' => 0,
    'combo_status' => 0,
    'arr_img' => 0,
    'img' => 0,
    'link_images_full' => 0,
    'link_images' => 0,
    'link_tailieu' => 0,
    'fck_noidung' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28d7087c1687_57988521')) {function content_5b28d7087c1687_57988521($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>﻿<div class="page-title">
    <div class="title-env">
        <h1 class="title">Thêm tài liệu</h1>
        <p class="description">Thêm tài liệu</p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['link_back']->value;?>
">Danh sách tài liệu</a> </li>
            <li class="active"> <strong><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</strong> </li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="boxModule">
        <ul class="nav nav-tabs" role="tablist">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_back']->value;?>
" role="tab">Danh sách tài liệu</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
" role="tab"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body"><?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
            <?php }?>
                        <?php echo CHtml::beginForm('','post',array('role'=>'form','class'=>'form-wizard','enctype'=>'multipart/form-data'));?>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title" class="control-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" required="" placeholder="Bắt buộc nhập">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="p_id" class="control-label">Mã tài liệu:</label>
                            <input type="text" class="form-control" id="p_id" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['p_id'];?>
" required="" placeholder="Bắt buộc nhập">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="link_other" class="control-label">Link tài liệu:(Dạng link https://drive.google.com/open?id=0B8doUciFn3didFJtUWM5OXJLVDA)</label>
                            <input type="text" class="form-control" id="link_other" name="link_other" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['link_other'];?>
">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="count" class="control-label">Lượt view:</label>
                            <input type="text" class="form-control" id="count" name="count" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['count'];?>
">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="count_down" class="control-label">Lượt down:</label>
                            <input type="text" class="form-control" id="count_down" name="count_down" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['count_down'];?>
">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="acsii" class="control-label">Desc:</label>
                            <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="control-label">Danh mục (*):</label>
                            <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>
 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="control-label">Danh mục Hiển thị thêm:</label>
                            <?php echo $_smarty_tpl->tpl_vars['combo_category2']->value;?>
 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tag" class="control-label">Tag:</label>
                            <input type="text" class="form-control" id="tag" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tag'];?>
">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Thuộc tính tài liệu</label>
                            <br>
                            <?php $_smarty_tpl->tpl_vars["arr_types"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['data']->value['type']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <label class="cbr-inline">
                                    <input type="checkbox" class="cbr cbr-secondary" name="type[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['arr_types']->value[$_smarty_tpl->tpl_vars['i']->value-1])&&$_smarty_tpl->tpl_vars['arr_types']->value[$_smarty_tpl->tpl_vars['i']->value-1]==$_smarty_tpl->tpl_vars['i']->value) {?> checked="" <?php }?> >
                                    <?php echo $_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['i']->value];?>
&nbsp; &nbsp;&nbsp; </label>
                            <?php }} ?> </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price" class="control-label">Giá bán:</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="proprice" class="control-label">Giá khuyến mãi:</label>
                                <input type="text" class="form-control" id="proprice" name="proprice" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['proprice'];?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty" class="control-label">Số lượng:</label>
                                <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['qty'];?>
">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Trạng thái:</label>
                                <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>
 </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Thời gian đăng:</label>
                                <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="begin_time" name="begin_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%d-%m-%Y");?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Người đăng: <?php if ($_smarty_tpl->tpl_vars['data']->value['account_id']) {?><a href="<?php echo Yii::app()->createUrl("admin/account/view/",array('id'=>$_smarty_tpl->tpl_vars['data']->value['account_id']));?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['account_name'];?>
</a><?php }?></label>
                                <input type="text" class="form-control" name="account_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['account_name'];?>
" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ảnh bìa  </label>
                            <div id="uploadfile">
                                <input type="file" id="file" name="file[]" data-bfi-disabled>
                            </div>
                        </div>
                        <div class="col-md-12"> <?php if (isset($_smarty_tpl->tpl_vars['data']->value['picture2'])&&$_smarty_tpl->tpl_vars['data']->value['picture2']!='') {?> 
                            <?php $_smarty_tpl->tpl_vars["arr_img"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['data']->value['picture2']), null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['img']->value!='') {?>
                                    <div class="col-md-2 center"> <a href="<?php echo $_smarty_tpl->tpl_vars['link_images_full']->value;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" width="80"/> </a><br>
                                        <a  style="padding-left:30px; " href="<?php echo Yii::app()->createUrl("admin/products/edit/",array('id'=>$_smarty_tpl->tpl_vars['data']->value['id'],'image'=>base64_encode($_smarty_tpl->tpl_vars['img']->value)));?>
" class="fa-hover"><i class="fa fa-trash"></i></a></div>
                                        <?php }?>  
                                    <?php } ?> 
                                    <?php }?> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nhiều ảnh  </label>
                                <div id="uploadfile2">
                                    <input type="file"  name="file2[]" data-bfi-disabled multiple>
                                </div>
                            </div>
                        </div>        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Upload tài liệu</label>
                                <div id="uploadfile">
                                    <input type="file" id="file" name="file_tailieu" data-bfi-disabled>
                                    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['file'])&&$_smarty_tpl->tpl_vars['data']->value['file']!='') {?>
                                        <p><a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['link_tailieu']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
"><?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['link_tailieu']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
</a></p>

                                        <a  style="padding-left:30px; " href="<?php echo Yii::app()->createUrl("admin/products/edit/",array('id'=>$_smarty_tpl->tpl_vars['data']->value['id'],'files'=>$_smarty_tpl->tpl_vars['data']->value['file']));?>
" class="fa-hover"><i class="fa fa-trash"></i></a>
                                    <?php }?> </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tóm tắt:</label>
                                <textarea name="short" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['short'];?>
</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nội dung:</label>
                                <?php echo $_smarty_tpl->tpl_vars['fck_noidung']->value;?>
 </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"></label>
                                <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                            </div>
                        </div>
                        <?php echo CHtml::endForm();?>
 </div>
                </div>
            </div>
        </div>
         
            <script type="text/javascript">

                function onPlus(value) {
                    if (parseInt(value) > 0) {
                        var tag = "";
                        for (var i = 0; i < parseInt(value); i++)
                        {
                            tag += "<input type='file' name='file[]' data-bfi-disabled/>";
                        }
                        document.getElementById('uploadfile').innerHTML = tag;
                    }
                }
                $(document).ready(function() {
                    $('.datepicker').datepicker({
                        format: "dd-mm-yyyy",
                        autoclose: true,
                    });
                    $('#sub_category_id').change(function() {
                        console.log($(this).val());
                    }).multipleSelect({
                        width: '100%'
                    });
                });

            </script> 

        <?php }} ?>
