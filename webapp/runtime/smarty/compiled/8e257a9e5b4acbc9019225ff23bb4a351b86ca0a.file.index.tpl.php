<?php /* Smarty version Smarty-3.1.19, created on 2018-06-22 05:50:12
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/setup/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12558369275b2c8e14a0a7c2-30546437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e257a9e5b4acbc9019225ff23bb4a351b86ca0a' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/setup/index.tpl',
      1 => 1529384681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12558369275b2c8e14a0a7c2-30546437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'link_action' => 0,
    'arr_define' => 0,
    'k1' => 0,
    's1' => 0,
    'arr_point' => 0,
    'k' => 0,
    's' => 0,
    'arr_point2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2c8e14a95758_77829901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c8e14a95758_77829901')) {function content_5b2c8e14a95758_77829901($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Cấu hình hệ thống</h1>
        <p class="description">Thêm, sửa, </p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
            <li class="active"> <strong>Cấu hình hệ thống</strong> </li>
        </ol>
    </div>
</div>

<!--Fillter-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default"> <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
                    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>
                <div class="row"> <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'post',array('role'=>'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>

                    <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                        <?php }?>
                    <div class="col-sm-6">
                        <?php if ($_smarty_tpl->tpl_vars['arr_define']->value) {?>
                            <?php  $_smarty_tpl->tpl_vars['s1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_define']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s1']->key => $_smarty_tpl->tpl_vars['s1']->value) {
$_smarty_tpl->tpl_vars['s1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['s1']->key;
?>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
:</label>
                                    <div class="col-sm-8">
                                        <?php if ($_smarty_tpl->tpl_vars['k1']->value=='CHANGE_POINT') {?> Tỉ lệ quy đổi &rarr; POINT = (Số tiền nạp * 50%) - Nhập 0.5<?php }?>
                                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['s1']->value;?>
"  class="form-control"/>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php }?>  
                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Mệnh giá thẻ cào:</label>
                            <div class="col-sm-8">
                                <?php if ($_smarty_tpl->tpl_vars['arr_point']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_point']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
                                        Thẻ <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 VNĐ &rarr; POINT<input type="text" name="POINT[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" class="form-control"/>

                                    <?php } ?>
                                <?php }?>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">PAYPAL POINT:</label>
                            <div class="col-sm-8">
                                <?php if ($_smarty_tpl->tpl_vars['arr_point2']->value) {?>
                                    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_point2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
                                         <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 $ &rarr; POINT<input type="text" name="PAYPAL[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" class="form-control"/>

                                    <?php } ?>
                                <?php }?>   
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6  control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                            <button type="button" class="btn btn-success" name="SiteMap" onClick="location.href = '<?php echo Yii::app()->createUrl('admin/setup/CreatedSiteMap');?>
'">Tạo site map</button>
                        </div>
                    </div>
                    <?php echo CHtml::endForm();?>
 </div>
            </div>
        </div>
    </div>
<?php }} ?>
