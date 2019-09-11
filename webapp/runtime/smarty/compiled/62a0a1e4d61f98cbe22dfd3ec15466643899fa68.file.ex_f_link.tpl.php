<?php /* Smarty version Smarty-3.1.19, created on 2019-09-11 06:18:23
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/ex_f_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6092948175abc8670000651-92842811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a0a1e4d61f98cbe22dfd3ec15466643899fa68' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/ex_f_link.tpl',
      1 => 1568182682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6092948175abc8670000651-92842811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc86700049c2_04533168',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc86700049c2_04533168')) {function content_5abc86700049c2_04533168($_smarty_tpl) {?><div id="v2-foot" class="v2-footer">
    <div class="w1520">
        <div class="xs-contain">
            <div class="xs-footer-box">
                <a href="/about" rel="nofollow">
                    ABOUT
                </a>
                <span></span>
                <a href="javascript:;" rel="nofollow" onclick="$('.side-contact').trigger('click')" class="contact-foot">
                    Contact us
                </a>
            </div>
        </div>
        <div class="foot-inner">
            <div class="foot-item foot-pngtree xs-hide">
                <dl>
                    <dt>TRANG</dt>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==1) {?>
                            <dd><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank" class="foot-link" data-ga="About"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>
                        <?php }?>
                    <?php } ?>
                </dl>
            </div>
            <div class="foot-item foot-help xs-hide">
                <dl>
                    <dt>TRỢ GIÚP</dt>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==2) {?>
                            <dd><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank" class="foot-link" data-ga="About"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>
                        <?php }?>
                    <?php } ?>
                </dl>
            </div>
            <div class="foot-item foot-legal xs-hide">
                <dl>
                    <dt>PHÁP LÝ</dt>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==3) {?>
                            <dd><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank" class="foot-link" data-ga="About"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>
                        <?php }?>
                    <?php } ?>
                    
                </dl>
            </div>
            <div class="foot-item foot-follow">
                <dl>
                    <dt>MẠNG XÃ HỘI</dt>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==4) {?>
                            <dd>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" rel="nofollow" class="foot-btn"
                                style="background-size: contain;
                                        background-repeat: no-repeat;
                                        background-image: url(https://tailieukientruc.com/<?php echo @constant('IMG_LINK');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
);">
                                </a>
                            </dd>
                        <?php }?>
                    <?php } ?>
                </dl>
            </div>
        </div>
        <div class="foot-bottom">
            <p class="foot-bottom-text"><i class="icon-pngtree"></i><i class="iconfont icon-copyright "></i> 2017-2019 Shanghai HuaiTu Network Technology Co., Ltd. -All Rights Reserved.
            </p>
            <div class="foot-bottom-payment">
                <p>Secure Payment:</p>
                <figure>
                    <img data-original="//js.pngtree.com/web3/images/home/jcb.png?code=156775615209" class="" alt="" style="display: inline;" src="//js.pngtree.com/web3/images/home/jcb.png?code=156775615209">
                    <img data-original="//js.pngtree.com/web3/images/home/footPayment.png?code=156775615209" class="" alt="" style="display: inline;" src="//js.pngtree.com/web3/images/home/footPayment.png?code=156775615209">
                </figure>
            </div>
        </div>
    </div>
</div><?php }} ?>
