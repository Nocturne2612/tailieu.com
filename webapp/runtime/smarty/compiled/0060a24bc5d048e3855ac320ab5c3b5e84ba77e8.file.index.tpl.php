<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 08:08:33
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10128212815abc8d68b2c6b6-92172560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0060a24bc5d048e3855ac320ab5c3b5e84ba77e8' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/news/index.tpl',
      1 => 1568001971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10128212815abc8d68b2c6b6-92172560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8d68be6c69_51080912',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8d68be6c69_51080912')) {function content_5abc8d68be6c69_51080912($_smarty_tpl) {?>
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
