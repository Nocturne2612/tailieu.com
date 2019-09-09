<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 02:45:08
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/orders/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4458969535abda4b4b4de08-03303948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055b80c5c0285b18c55a976740f45623a687f182' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/orders/index.tpl',
      1 => 1522308730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4458969535abda4b4b4de08-03303948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_status' => 0,
    'error' => 0,
    'success' => 0,
    'totalRecord' => 0,
    'output' => 0,
    'item' => 0,
    'arr_status' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abda4b4c14524_34544352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abda4b4c14524_34544352')) {function content_5abda4b4c14524_34544352($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách download tài liệu</h1>
        <p class="description">Thêm, sửa, xóa download tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>download tài liệu</strong>
            </li>
        </ol>
    </div>
</div>
<!--<a href="<?php echo Yii::app()->createUrl("admin/orders/create/");?>
">  
    <div class="alert alert-info"> Tạo download tài liệu</div>                
</a>-->
<?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-wizard','name'=>'ordersform'));?>
    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm download tài liệu</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->  
            <div class="panel-body">

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="id">Mã download:</label>
                        <input type="text" class="form-control" id="id" class="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['id'];?>
">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="id_product">Mã tài liệu:</label>
                        <input type="text" class="form-control" id="id_product" class="id_product" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['id_product'];?>
">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group">
                        <label class="control-label" for="id_account">Mã tài khoản:</label>
                        <input type="text" class="form-control" id="id_account" class="id_account" name="id_account" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['id_account'];?>
">
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

            </div>
        </div>
    </div>
</div> 
<?php echo CHtml::endForm();?>
                     
<?php echo CHtml::beginForm(Yii::app()->createUrl("admin/orders/del/"),'post',array('enctype'=>'','name'=>'ordersforms'));?>
   
<!--Fillter--> 
<div class="row">
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
</strong> download tài liệu</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã </th>
                                <th>Ngày download</th>
                                <th>Thông tin tài liệu</th>
                                <th>Thông tin khách hàng</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php if ($_smarty_tpl->tpl_vars['output']->value) {?>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['output']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td><label><input name="element[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="checkbox">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</label></td>
                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['time_download'],"%H:%M ,%d/%m/%Y");?>
</td>
                                        <td  style="overflow: auto;">
                                            <strong>Tiêu đề </strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<br>
                                            <strong>Mã tài liệu</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
<br>
                                            <strong>Giá</strong>: <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['item']->value['price'],2,",","."),',00','');?>


                                        </td>

                                        <td><a href="<?php echo Yii::app()->createUrl("admin/account/view",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id_account']));?>
">Mã TK : <?php echo $_smarty_tpl->tpl_vars['item']->value['id_account'];?>
</a></td>
                                        <td> <strong><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</strong> </td>
                                        <td>
                                           
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="<?php echo Yii::app()->createUrl("admin/orders/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xóa</a> 

                                        </td>
                                    </tr>
                                <?php } ?>

                            <?php } else { ?>
                                <tr><td colspan="6" class="alert-danger danger"> Không có dữ liệu.</td></tr>
                            <?php }?>  
                        </tbody>
                    </table>

                </div>
                <div class="row">
                   <!--  <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                    <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                    <!--Paging--->
                    <div class="row"><div class="col-xs-6"> <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 </div></div>
                </div>

            </div>
        </div>

    </div>      
</div>

<?php echo CHtml::endForm();?>
 

 
    <script type="text/javascript">
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
            });

        });
        function uncheck() {
            for (i = 0; i < document.ordersforms.length; i++) {
                if (document.ordersforms[i].type == "checkbox") { //Kiểm tra xem có phải là checkbox ?
                    if (document.ordersforms[i].checked) {
                        document.ordersforms[i].checked = false;
                    }
                    else {
                        document.ordersforms[i].checked = true;
                    }
                }
            }
        }
    </script> 


<?php }} ?>
