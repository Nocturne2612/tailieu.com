<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 09:55:05
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/favorite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155709497359816409243896-30853277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105cf89a31f868d52d55a2d3f99aaacdc0d3d9ff' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/favorite.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155709497359816409243896-30853277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598164092f5ed4_97633576',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'product' => 0,
    'k' => 0,
    't' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598164092f5ed4_97633576')) {function content_598164092f5ed4_97633576($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?>
<div class="common-mains">
    <div class="about-content">
        <h1>Danh sách tài liệu ưa thích</h1>
         <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                    <div class="" style="margin: 0 0 20px 0;color: #468847;
                         background-color: #dff0d8;
                         border-color: #d3e2c7;font-size: 14px;
                         cursor: pointer;
                         padding: 10px 20px 10px 14px;
                         margin-top: 20px;
                         text-shadow: 0 1px 0 #fff;
                         border: 1px solid #eadcc0;
                         position: relative;
                         border-radius: 3px;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>

                <?php }?>
        <table class="table table-cart">
            <tbody>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh minh họa</th>
                    <th>POINT</th>
                    <th>Thao tác</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['data']) {?>
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
                                        <td><strong><a href="<?php echo SystemBase::buildUrl('tailieu/document',array('title'=>$_smarty_tpl->tpl_vars['t']->value['title'],'id'=>$_smarty_tpl->tpl_vars['t']->value['id']));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</a></strong></td>
                                        <td><?php if (isset($_smarty_tpl->tpl_vars['t']->value['picture'])&&$_smarty_tpl->tpl_vars['t']->value['picture']!='') {?>
                                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['t']->value['picture']), null, 0);?> <img  title="<?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="height: 100px"/> <?php }?></td>
                                        
                                        <td><?php if ($_smarty_tpl->tpl_vars['t']->value['proprice']>0) {?> 
                                    <span class="oldprice" style="text-decoration: line-through;"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['price'],2,",","."),',00','');?>
 POINT</span>

                                    <span class="proprice" style="    color: #F44359;
                                          font-size: 14px;
                                          font-weight: 600;"> <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['proprice'],2,",","."),',00','');?>
 POINT  &nbsp;&nbsp;&nbsp;</span> 
                                    <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['proprice']=='0'&&$_smarty_tpl->tpl_vars['t']->value['price']>0) {?> 
                                        <span class="price" style="    color: #F44359;
                                              font-size: 14px;
                                              font-weight: 600;"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['price'],2,",","."),',00','');?>
 POINT</span> 
                                        <?php } else { ?> 
                                            <span class="" > &nbsp;&nbsp;&nbsp;Miễn phí</span><span class="free" > &nbsp;</span><?php }?></td>
                                        <td><a href="<?php echo SystemBase::buildUrl('tailieu/account/favorite',array('delete'=>$_smarty_tpl->tpl_vars['t']->value['id']));?>
">Xóa</a></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="6"> <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>
 </td>
                                </tr>
                            <?php } else { ?>
                                <tr class="danger">
                                    <td colspan="6" align="center">Bạn chưa thêm tài liệu nào vào ưa thích</td>
                                </tr>
                            <?php }?>
            </tbody>
        </table>  
    </div>
</div>



















<?php }} ?>
