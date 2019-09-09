<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:07:07
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6945951545abc8f8a467e36-50244649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c81d137a6cd226c69d60a1020157633ba40890c' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/default/index.tpl',
      1 => 1563752343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6945951545abc8f8a467e36-50244649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f8a4ce7f5_57077813',
  'variables' => 
  array (
    'err' => 0,
    'count' => 0,
    'Top5Account' => 0,
    'v' => 0,
    'Top5Transaction' => 0,
    'item' => 0,
    'arr_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f8a4ce7f5_57077813')) {function content_5abc8f8a4ce7f5_57077813($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>
<div class="row">
    <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 </div>
    <?php }?>
</div>
<div class="row">
    <div class="col-sm-3">

        <div data-duration="2" data-suffix="%" data-to="99.9" data-from="0" data-count=".num" class="xe-widget xe-counter">
            <div class="xe-icon">
                <i class="linecons-cloud" style="padding-top: 10px;"></i>
            </div>
            <div class="xe-label">
                <strong class="num"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong>
                <span><a href="<?php echo Yii::app()->createUrl('admin/products');?>
">Bài viết chưa duyệt</a></span>
            </div>
        </div>



    </div>


    <?php if ($_smarty_tpl->tpl_vars['Top5Account']->value) {?>
        <div class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">5 Tài khoản mới đăng ký</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Top5Account']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <tr>
                                <td><a href="<?php echo Yii::app()->createUrl('admin/account/view',array('id'=>$_smarty_tpl->tpl_vars['v']->value['id']));?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mobile_phone'];?>
</td>
                                <td><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['v']->value['point'],2,",","."),',00','');?>
</td>
                            </tr>
                        <?php } ?>    
                    </tbody>
                </table>
            </div>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Top5Transaction']->value) {?>
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">5 Giao dịch gần nhất</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Loại</th>
                            <th>Point</th>
                            <th>Mô tả</th>
                            <th>Ngày tạo</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Top5Transaction']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_type']->value[$_smarty_tpl->tpl_vars['item']->value['type']];?>
</td>
                                <td><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['item']->value['point'],2,",","."),',00','');?>
</td>
                                <td  style="overflow: auto;"><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
 </td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d/%m/%Y %H:%M");?>
</td>

                            </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>

        </div>
    <?php }?>
</div>




<?php }} ?>
