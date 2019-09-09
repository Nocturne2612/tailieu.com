<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 20:50:43
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/history_point.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194005d34cdc234b295-22297036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1b78c522f1c18c6c2b729b6fe07980404f869e' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/history_point.tpl',
      1 => 1563741985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194005d34cdc234b295-22297036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d34cdc2481271_23664543',
  'variables' => 
  array (
    'product' => 0,
    't' => 0,
    'arr_type' => 0,
    'errors' => 0,
    'success' => 0,
    'link_action' => 0,
    'get_data' => 0,
    'combo_type' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d34cdc2481271_23664543')) {function content_5d34cdc2481271_23664543($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.date_format.php';
?><div class="newAll-con w1200" style="-webkit-border-radius:6px;min-height:600px;">
    <h3>Lịch sử point  <span>(1)</span> </h3>

    <ul>
        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <li data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                    <div  class="history-notice-click">
                        <?php echo $_smarty_tpl->tpl_vars['arr_type']->value[$_smarty_tpl->tpl_vars['t']->value['type']];?>

                    </div>
                    <span  class="fl-r">
                        <?php echo $_smarty_tpl->tpl_vars['t']->value['desc'];?>

                    </span>
                    <span  class="fl-r">
                        <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['point'],2,",","."),',00','');?>
 POINT
                    </span>
                    <span class="fl-r"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['create_time'],"%d-%m-%Y");?>
</span>
                    <span class="fl-r"> <?php if ($_smarty_tpl->tpl_vars['t']->value['status']==1) {?> Thành công <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['status']==2) {?>Chờ kết quả<?php } else { ?> Thất bại<?php }?></span>
                </li>

            <?php } ?>
            <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>
 
        <?php } else { ?>
            <tr class="danger">
                <td colspan="6" align="center">Không tồn tại tài liệu</td>
            </tr>
        <?php }?>
        <li data-id="855259">
            <i id="li_text_855259" class="new">New</i>
            <a target="_blank" href="/user/index" onclick="notice_statis(16)" class="history-notice-click">Congratulations! You are level 1 now, click message and get your reward.</a>
            <span class="fl-r"> Jul 21,2019</span>
        </li>
    </ul>
</div>

    <script language="javascript" type="text/javascript">
        $(function () {
            $('.datepicker2').datetimepicker({format: 'DD/MM/YYYY'});
        });
    </script>

<div class="common-mains">
    <div class="about-content">
        <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
        <?php }?>
        <table class="table table-cart">
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo CHtml::beginForm($_tmp1,'get',array('enctype'=>''));?>

            <tr>
                <td colspan="">
                    <div class="fl mg">
                        <label>Từ ngày</label>
                    </div>
                    <div class="fl">
                        <div class='input-group date datepicker2' id='datepicker2'>
                            <input type='text' class="ui-input datepicker2" name="begin_createtime" id="begin_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['begin_createtime'];?>
"/>
                            <span class="input-group-addon ">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                    </div>


                </td>
                <td>
                    <div class='input-group date datepicker2' id='datepicker2'>
                        <div class="fl mg">
                            Đến ngày
                        </div>
                        <div class="fl">
                            <input type='text' class="ui-input datepicker2" name="end_createtime" id="end_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['end_createtime'];?>
"/>
                            <span class="input-group-addon ">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                    </div>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['combo_type']->value;?>

                </td>
            </tr>
            <tr>
                <td> 
                    <button class="btn btn-info" type="button" name="reset" value="Tìm kiếm" onClick="document.location.href = '<?php echo SystemBase::buildUrl('tailieu/account/historypoint',array());?>
';">Bỏ lọc</button>
                </td>
                <td>
                    <button class="btn btn-warning" type="submit" name="search" value="Tìm kiếm"> Tìm kiếm </button>
                </td>
                <td></td>
            </tr>
            <?php echo CHtml::endForm();?>

        </table>

        <h1>Lịch sử POINT</h1>
        <table class="table table-cart">
            <tbody>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Point</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['arr_type']->value[$_smarty_tpl->tpl_vars['t']->value['type']];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value['desc'];?>
&nbsp;&nbsp;</td>
                            <td><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['point'],2,",","."),',00','');?>
 POINT</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['create_time'],"%d-%m-%Y");?>
</td>
                            <td <?php if ($_smarty_tpl->tpl_vars['t']->value['status']==1) {?> class="alert alert-success" <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['status']==2) {?>  class="alert alert-info" <?php } else { ?> class="alert alert-danger" <?php }?>><?php if ($_smarty_tpl->tpl_vars['t']->value['status']==1) {?> Thành công <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['status']==2) {?>Chờ kết quả<?php } else { ?> Thất bại<?php }?></td>

                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="6"> <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>
 </td>
                    </tr>
                <?php } else { ?>
                    <tr class="danger">
                        <td colspan="6" align="center">Không tồn tại tài liệu</td>
                    </tr>
                <?php }?>
            </tbody>
        </table>  
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
