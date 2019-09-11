<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:50:33
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6820328285abc8fa1c98221-74816369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94aa3083c91e7620283924503a88b040b0be4e8' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/member.tpl',
      1 => 1568001967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6820328285abc8fa1c98221-74816369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8fa1cf50a5_23343406',
  'variables' => 
  array (
    'data' => 0,
    'total_free' => 0,
    'total_fee' => 0,
    'outputs' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8fa1cf50a5_23343406')) {function content_5abc8fa1cf50a5_23343406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>

<div id="">
    <div class="layout-fluid fn-clear">
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(Yii::app()->controller->action->id, null, 0);?>
            <div class="aside fn-left">
                <div class="ui-box listing-aside">
                    <h5><strong> &nbsp;&nbsp; <?php if ($_smarty_tpl->tpl_vars['data']->value['type']==2) {?>TK VIP<?php } else { ?>TK Bình thường<?php }?></strong></h5> 

                    <ul class="category-group fn-clear">
                        <li class="list-group-item">Họ tên: <b class="alert-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
 </b></li>
                        <li class="list-group-item">Mã Thành viên: <b class="alert-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</b></li>
                        <li class="list-group-item">Thành viên từ: <b class="alert-warning"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%d-%m-%Y");?>
</b></li>
                        <li class="list-group-item">Loại TK: <b class="alert-danger"><?php if ($_smarty_tpl->tpl_vars['data']->value['type']==2) {?>VIP<?php } else { ?>Bình thường <?php }?></b> </li>
                        <li class="list-group-item">Upload: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_upload'];?>
</b> tài liệu</li>
                        <li class="list-group-item">Upload: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['total_free']->value;?>
</b> miễn phí</li>
                        <li class="list-group-item">Upload: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['total_fee']->value;?>
</b> có phí</li>
                        <li class="list-group-item">Download: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_down'];?>
</b> tài liệu</li>
                    </ul> 
                    <hr>
                    <a class="btn btn-small btn-primary"  href="<?php echo SystemBase::buildUrl('tailieu/addfund/',array());?>
">Nạp tiền</a>
                </div>
            </div> 
            <style>
                .about-menu  .active  {
                    border: 1px solid red
                }
                .about-menu  .active  a {
                    font-weight: bold;color:red
                }
            </style>
        <?php }?>
        <div class="mains fn-right">
            <div class="ui-box listing-aside">

                <h2>Tài liệu đã up</h2>
                <div class=" ">
                    <div class="thumbnail-wrapper">
                        <?php if ($_smarty_tpl->tpl_vars['outputs']->value) {?>
                            <ul class="thumbnail-group search-images fn-clear">
                                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['outputs']->value['data'],'check'=>true),true);?>
 
                            </ul>
                            <?php echo $_smarty_tpl->tpl_vars['outputs']->value['pageHtml'];?>

                        <?php } else { ?>
                            CHUA CO

                        <?php }?>
                    </div>
                </div></div>
        </div>
    </div>
</div><?php }} ?>
