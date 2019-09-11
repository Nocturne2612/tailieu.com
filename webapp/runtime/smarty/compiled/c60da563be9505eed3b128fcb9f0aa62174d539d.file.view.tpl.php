<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 17:54:55
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/useradmin/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18985805565afa987f3ac849-36872717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c60da563be9505eed3b128fcb9f0aa62174d539d' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/useradmin/view.tpl',
      1 => 1563752346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18985805565afa987f3ac849-36872717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afa987f75e340_41330382',
  'variables' => 
  array (
    'link_account' => 0,
    'data' => 0,
    'err' => 0,
    'controllers' => 0,
    'c' => 0,
    'permission' => 0,
    'key' => 0,
    'arrController' => 0,
    'a' => 0,
    'arrAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa987f75e340_41330382')) {function content_5afa987f75e340_41330382($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Thông tin tài khoản</h1>
        <p class="description">Thêm, sửa, phân quyền tài khoản quản trị</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link_account']->value;?>
">Tài khoản</a>
            </li>
            <li class="active">
                <strong>Thông tin tài khoản</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/useradmin/create/");?>
">  
    <div class="alert alert-info"> Thêm tài khoản </div>                
</a>
<div class="panel panel-default"> 
    <h3 class="panel-title">Thông tin tài khoản <?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
</h3>
    <div class="panel-body">        
        <div class="row">

            <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
            <?php }?>

            <?php echo CHtml::beginForm('','post',array('role'=>'form','class'=>'form-horizontal'));?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Họ và tên:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['fullname'];?>
" id="fullname" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tài khoản:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
" id="username" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-9">
                    <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" id="email" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Trạng thái:</label>
                <div class="col-sm-9">
                    <select name="status" id="status" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='1') {?>selected="selected"<?php }?>>Khóa tài khoản</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='2') {?>selected="selected"<?php }?>>Hoạt động</option>
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
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['controllers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                        <p class="col-sm-6">
                            <label> 
                                <input type="checkbox" class="cbr cbr-danger " name="c[]" value="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['permission']->value[mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8')])) {?>checked="checked"<?php }?> id="parent<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="return checks('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');">
                                <strong> <?php if (isset($_smarty_tpl->tpl_vars['arrController']->value[mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8')])) {?><?php echo $_smarty_tpl->tpl_vars['arrController']->value[mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8')];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
<?php }?> </strong>   
                            </label>  
                            <br>----                       
                            <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = Yii::app()->metadata->getActions($_smarty_tpl->tpl_vars['c']->value,'admin'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
                                <label class="cbr-inline lb<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                    <input type="checkbox" class="cbr cbr-secondary child<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="a[<?php echo mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8');?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['permission']->value[mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8')])&&in_array($_smarty_tpl->tpl_vars['a']->value,$_smarty_tpl->tpl_vars['permission']->value[mb_strtolower($_smarty_tpl->tpl_vars['c']->value, 'UTF-8')])) {?>checked="checked"<?php }?>> 

                            <?php if (isset($_smarty_tpl->tpl_vars['arrAction']->value[$_smarty_tpl->tpl_vars['a']->value])) {?><?php echo $_smarty_tpl->tpl_vars['arrAction']->value[$_smarty_tpl->tpl_vars['a']->value];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
<?php }?>
                        </label>
                    <?php } ?>

                </p> 
            <?php } ?>
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
    <?php echo CHtml::endForm();?>
  
</div>
</div>
</div>

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
<?php }} ?>
