<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:32
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49271233859813e824ff2a9-61358492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f14a0ee32e236b1d084d4ac1a855fd0bceee403c' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/index.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49271233859813e824ff2a9-61358492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813e825889f5_89857758',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'transactions' => 0,
    'k' => 0,
    't' => 0,
    'arr_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813e825889f5_89857758')) {function content_59813e825889f5_89857758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>
                <script language="javascript" type="text/javascript">
                    $(function () {
                        $('.datepicker2').datetimepicker({format: 'DD/MM/YYYY'});
                    });
                </script>
                

<div class="common-mains">
    <div class="about-content">

        <table class="table ">
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
                <select class="ui-input" name="status">
                    <option value="0">-- Trạng thái--</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['get_data']->value['status']=='2') {?> selected="selected" <?php }?>>Đang chờ xử lý</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['get_data']->value['status']=='1') {?> selected="selected" <?php }?>>Đã duyệt</option>
                </select>
            </td>
            </tr>
            <tr>
                <td> 
                    <button class="btn btn-info" type="button" name="reset" value="Tìm kiếm" onClick="document.location.href = '<?php echo SystemBase::buildUrl('tailieu/account/',array());?>
';">Bỏ lọc</button>
                </td>
                <td>
                    <button class="btn btn-warning" type="submit" name="search" value="Tìm kiếm"> Tìm kiếm </button>
                </td>
                <td></td>
            </tr>
            <?php echo CHtml::endForm();?>

        </table>

        <h1>Lịch sử download</h1>
        <table class="table table-cart">
            <tbody>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Mã GD</th>
                    <th>Số tiền</th>
                    <th>Ngày download</th>
                    <th>Trạng thái</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td><strong><a href="<?php echo SystemBase::buildUrl('tailieu/document',array('title'=>$_smarty_tpl->tpl_vars['t']->value['title'],'id'=>$_smarty_tpl->tpl_vars['t']->value['id_product']));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</a></strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
</td>
                            <td><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['price'],2,",","."),',00','');?>
 POINT</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['time_download'],"%d-%m-%Y");?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['t']->value['status']];?>
&nbsp;&nbsp;</td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="6"> <?php echo $_smarty_tpl->tpl_vars['transactions']->value['pageHtml'];?>
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
</style><?php }} ?>
