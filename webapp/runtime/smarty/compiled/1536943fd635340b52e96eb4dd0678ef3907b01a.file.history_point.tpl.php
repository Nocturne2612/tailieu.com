<?php /* Smarty version Smarty-3.1.19, created on 2019-09-03 08:42:48
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/history_point.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16037640045abccbc71917d0-37881288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1536943fd635340b52e96eb4dd0678ef3907b01a' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/history_point.tpl',
      1 => 1566790391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16037640045abccbc71917d0-37881288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abccbc7201715_51752539',
  'variables' => 
  array (
    'product' => 0,
    't' => 0,
    'no' => 0,
    'arr_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abccbc7201715_51752539')) {function content_5abccbc7201715_51752539($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>

<div class="user-main user-main-inner recruit-wrap">
    <div class="">
        <ul class="recruit-faqs-item">
            <h3>Lịch sử point  <span>(1)</span> </h3>
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                    <li data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
. <?php echo $_smarty_tpl->tpl_vars['arr_type']->value[$_smarty_tpl->tpl_vars['t']->value['type']];?>
 <i class="iconfont icon-jiahao"></i><i
                                class="iconfont icon-jianhao"></i></p>
                        <div class="recruit-faqs-question">
                            <p>
                                POINT:  <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['point'],2,",","."),',00','');?>

                            </p>
                            <p>
                                Mô tả:  <?php echo $_smarty_tpl->tpl_vars['t']->value['desc'];?>

                            </p>
                            <p>
                                Thời gian:  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['create_time'],"%d-%m-%Y");?>

                            </p>
                            <p>
                                Trạng thái:  <?php if ($_smarty_tpl->tpl_vars['t']->value['status']==1) {?> Thành công <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['status']==2) {?>Chờ kết quả<?php } else { ?> Thất bại<?php }?>
                            </p>
                        </div>
                    </li>

                <?php } ?>
                <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>
 
            <?php } else { ?>
                <tr class="danger">
                    <td colspan="6" align="center">Không tồn tại tài liệu</td>
                </tr>
            <?php }?>
        </ul>
    </div>
</div>




<style>
    .fl {
        float: left;

    }
    .mg { 
        padding: 10px;
    }
    .bootstrap-datetimepicker-widget {
        position: absolute;
        background: white;
        z-index: 100;
    }
</style>














<style>
    .bootstrap-datetimepicker-widget {
        position: absolute;
        background: white;
        z-index: 100;
    }
</style><?php }} ?>
