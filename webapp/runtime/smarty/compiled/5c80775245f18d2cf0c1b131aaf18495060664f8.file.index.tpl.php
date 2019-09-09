<?php /* Smarty version Smarty-3.1.19, created on 2018-03-09 00:38:20
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115805248759826a758d9ed1-09074104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80775245f18d2cf0c1b131aaf18495060664f8' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/account/index.tpl',
      1 => 1520530699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115805248759826a758d9ed1-09074104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59826a759bc7d0_59352482',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'type_arr' => 0,
    'totalRecord' => 0,
    'accounts' => 0,
    'item' => 0,
    'typeArr' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59826a759bc7d0_59352482')) {function content_59826a759bc7d0_59352482($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách tài khoản người dùng</h1>
        <p class="description">Thêm, sửa, xóa người dùng</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Tài khoản người dùng</strong>
            </li>
        </ol>

    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm người dùng</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">

                <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-inline','name'=>'userform'));?>

                 <div class="form-group">
                    <input placeholder="Mã khách hàng" type="text" class="form-control" id="id" name="id" value="<?php if ($_smarty_tpl->tpl_vars['get_data']->value['id']) {?> <?php echo $_smarty_tpl->tpl_vars['get_data']->value['id'];?>
 <?php } else { ?><?php }?>" />	
                </div>

                <div class="form-group">
                    <input placeholder="Tên đầy đủ" type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['fullname'];?>
" />	
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['email'];?>
" />	
                </div>
                <div class="form-group">
                    <input placeholder="Số điện thoại" type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['mobile_phone'];?>
" />	
                </div>
                <div class="form-group">
                    <label for="begin_createtime">Ngày tạo:</label>
                    <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="begin_createtime" name="begin_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['begin_createtime'];?>
">
                </div>
                <div class="form-group">
                    <label class="control-label" for="end_createtime">Đến:</label>
                    <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="end_createtime" name="end_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['end_createtime'];?>
">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="end_createtime">Loại TK:</label>
                    <?php echo $_smarty_tpl->tpl_vars['type_arr']->value;?>

                </div>
                
                
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>
                </div>
                <?php echo CHtml::endForm();?>
   
            </div>
        </div>
    </div>
</div>            
<!--Fillter--> 
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> tài khoản</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body dataTables_wrapper form-inline dt-bootstrap">

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Loại TK</th>
                                <th>Email tài khoản
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'email','by'=>'asc'));?>
" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'email','by'=>'desc'));?>
" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>
                                    Point
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'point','by'=>'asc'));?>
" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'point','by'=>'desc'));?>
" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>Họ Tên
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'first_name','by'=>'asc'));?>
" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'first_name','by'=>'desc'));?>
" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>Mobile  <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'mobile_phone','by'=>'asc'));?>
" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="<?php echo Yii::app()->createUrl('admin/account',array('sort'=>'mobile_phone','by'=>'desc'));?>
" rel="point_desc" class="sorting sorting_desc"></a></th>
                                <th>Giới tính</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php if ($_smarty_tpl->tpl_vars['accounts']->value) {?>

                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                        <td><b style="<?php if ($_smarty_tpl->tpl_vars['item']->value['type']==2) {?>color:red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['typeArr']->value[$_smarty_tpl->tpl_vars['item']->value['type']];?>
</b></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                        <td><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['item']->value['point'],2,",","."),',00','');?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile_phone'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['gender']=='M') {?>Nam<?php } else { ?>Nữ<?php }?></td>
                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d-%m-%Y");?>
</td>
                                        <td>
                                            <a href="<?php echo Yii::app()->createUrl("admin/account/view/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xem</a> |                         
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="<?php echo Yii::app()->createUrl("admin/account/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            <?php } else { ?>
                                <tr><td colspan="5"> Không có dữ liệu.</td></tr>
                            <?php }?>  
                        </tbody>
                    </table>
                </div>
                <!--Paging--->
                <div class="row"><div class="col-xs-6"> <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 </div></div>
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
    </script> 
<?php }} ?>
