<?php /* Smarty version Smarty-3.1.19, created on 2018-07-26 03:43:48
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/ads/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18989825255b594374d0d181-03108744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786db89d75d6c614c5c1928edeba84ea13a990d7' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/ads/index.tpl',
      1 => 1529384677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18989825255b594374d0d181-03108744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_status' => 0,
    'combo_position' => 0,
    'error' => 0,
    'success' => 0,
    'totalRecord' => 0,
    'output' => 0,
    'item' => 0,
    'link_images' => 0,
    'arr_status' => 0,
    'posititons' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b594374d9c0f5_78821306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b594374d9c0f5_78821306')) {function content_5b594374d9c0f5_78821306($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách ads</h1>
        <p class="description">Thêm, sửa, xóa banner, quảng cáo</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Ads</strong>
            </li>
        </ol>
    </div>
</div>
<a href="<?php echo Yii::app()->createUrl("admin/ads/create/");?>
">  
    <div class="alert alert-info"> Tạo ads</div>                
</a>
<?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-wizard','name'=>'ordersform'));?>
    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm ads</h3>
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
                        <label class="control-label" for="fullname">Tiêu đề:</label>
                        <input type="text" class="form-control" id="title" class="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['title'];?>
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
                        <label class="control-label" for="view">Vị trí:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_position']->value;?>

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success" name="search" value="   ">Tìm kiếm</button>
                        <button type="reset" class="btn btn-default" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>

                    </div>



                </div>

            </div>

        </div>
        <div class="panel panel-default">            
            <div class="panel-body">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger" value="1" name="cache" onclick="return confirm('Bạn chắc chắn');"> Tạo cache </button></div><div class="col-sm-5">
                    <?php echo $_smarty_tpl->tpl_vars['combo_position']->value;?>

                </div>

            </div>        
        </div> 
    </div>
</div> 
<?php echo CHtml::endForm();?>
                     
<?php echo CHtml::beginForm(Yii::app()->createUrl("admin/ads/del/"),'post',array('enctype'=>'','name'=>'ordersforms'));?>
   
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
</strong> ads</div>
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
                            <tr><th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>STT</th>
                                <th>Trạng thái</th>
                                <th>Vị trí</th>
                                <th>Link liên kết</th>
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
                                        <td><label>
                                                <input name="element[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="checkbox">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</label></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['pic_link']!='') {?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['picture'];?>
" width="50"/><?php }?></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['stt'];?>
 </td>
                                        <td> <strong><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</strong></td>
                                        <td><san class="text-danger"><?php echo $_smarty_tpl->tpl_vars['posititons']->value[$_smarty_tpl->tpl_vars['item']->value['position']];?>
</san></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("admin/ads/view/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xem</a> |                         
                                    <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="<?php echo Yii::app()->createUrl("admin/ads/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xóa</a> 

                                </td>
                                </tr>
                            <?php } ?>

                        <?php } else { ?>
                            <tr><td colspan="7"> Không có dữ liệu.</td></tr>
                        <?php }?>  
                        </tbody>
                    </table>

                </div>
                <div class="row">

                    <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
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
