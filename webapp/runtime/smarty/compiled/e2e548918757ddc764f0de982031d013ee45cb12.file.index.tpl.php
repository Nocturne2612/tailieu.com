<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 23:58:17
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/point/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:344029405b299899321568-82442545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e548918757ddc764f0de982031d013ee45cb12' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/point/index.tpl',
      1 => 1529384680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344029405b299899321568-82442545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_status' => 0,
    'combo_type' => 0,
    'error' => 0,
    'success' => 0,
    'totalRecord' => 0,
    'output' => 0,
    'item' => 0,
    'arr_type' => 0,
    'arr_status' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2998993bded1_05771181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2998993bded1_05771181')) {function content_5b2998993bded1_05771181($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?><div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách lịch sử point</h1>
    <p class="description">Thêm, sửa, xóa lịch sử point</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>lịch sử point</strong> </li>
    </ol>
  </div>
</div>
<!--<a href="<?php echo Yii::app()->createUrl("admin/point/create/");?>
">  
    <div class="alert alert-info"> Tạo lịch sử point</div>                
</a>--> 
<?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-wizard','name'=>'ordersform'));?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm lịch sử point</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      <div class="panel-body">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="ref_code">Mã ref_code:</label>
            <input type="text" class="form-control" id="ref_code" class="ref_code" name="ref_code" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['ref_code'];?>
">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="id_product">Keyword(serial, pin_card...):</label>
            <input type="text" class="form-control" id="keyword" class="keyword" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['keyword'];?>
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
         <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="status">Loại point</label>
            <?php echo $_smarty_tpl->tpl_vars['combo_type']->value;?>
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
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> lịch sử point</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>Mã </th>
                <th>Ngày tạo</th>
                <th>Loại</th>
                 <th>Point</th>
                <th>Mô tả</th>
                <th>ID accunt</th>
                <th>Trạng thái</th>
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
              <td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</label></td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d/%m/%Y %H:%M");?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_type']->value[$_smarty_tpl->tpl_vars['item']->value['type']];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['point'];?>
</td>
              <td  style="overflow: auto;"><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
 </td>
              <td><a href="<?php echo Yii::app()->createUrl("admin/account/view",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id_account']));?>
">Mã TK : <?php echo $_smarty_tpl->tpl_vars['item']->value['id_account'];?>
</a></td>
              <td><strong><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</strong></td>
            </tr>
            <?php } ?>
            
            <?php } else { ?>
            <tr>
              <td colspan="7" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            <?php }?>
              </tbody>
            
          </table>
        </div>
        <div class="row"> 
          <!--  <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                     <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                    <!--Paging--->
          <div class="row">
            <div class="col-xs-6"> <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 </div>
          </div>
        </div>
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
