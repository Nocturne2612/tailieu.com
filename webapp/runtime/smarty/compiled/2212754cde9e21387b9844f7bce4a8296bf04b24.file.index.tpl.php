<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:06:34
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21046394415b28ab7a4c0d16-39618035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2212754cde9e21387b9844f7bce4a8296bf04b24' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/news/index.tpl',
      1 => 1529384684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21046394415b28ab7a4c0d16-39618035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrC' => 0,
    'd1' => 0,
    'this' => 0,
    'd' => 0,
    'arr_lq' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28ab7a532bc0_98767831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28ab7a532bc0_98767831')) {function content_5b28ab7a532bc0_98767831($_smarty_tpl) {?>
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu"> 
            <?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value) {
$_smarty_tpl->tpl_vars['d1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d1']->key;
?>
                <h5><a href="<?php echo SystemBase::buildUrl('tailieu/categorynews',array('id'=>$_smarty_tpl->tpl_vars['d1']->value['id'],'title'=>$_smarty_tpl->tpl_vars['d1']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
"> <?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
 <i class="icon-angle-right menuright"></i></a></h5>				
                    <?php } ?>


        </div>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>

    </div>
    <div class="common-mains">
        <div class="about-content">
            <h1><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h1>
            <div class="about-block">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

                <?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>

                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>
 

                <?php if ($_smarty_tpl->tpl_vars['arr_lq']->value['data']) {?>
                    <h2>Bài xem thêm</h2>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_lq']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li>
                                <a class="more-link" href="<?php echo SystemBase::buildUrl('tailieu/news',array('id'=>$_smarty_tpl->tpl_vars['v']->value['id'],'title'=>$_smarty_tpl->tpl_vars['v']->value['title']));?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                            </li>

                        <?php } ?>
                    </ul>
                    <?php echo $_smarty_tpl->tpl_vars['arr_lq']->value['pageHtml'];?>

                <?php }?>
                <!-- // about-block end -->
            </div>
        </div>
    </div>
</div><?php }} ?>
