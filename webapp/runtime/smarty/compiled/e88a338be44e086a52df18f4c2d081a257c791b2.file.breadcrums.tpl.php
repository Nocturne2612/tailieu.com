<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:56:02
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7082613775b28a902b5af02-95355808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e88a338be44e086a52df18f4c2d081a257c791b2' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl',
      1 => 1529384693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7082613775b28a902b5af02-95355808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'output' => 0,
    'data_p' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a902baba69_17894329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a902baba69_17894329')) {function content_5b28a902baba69_17894329($_smarty_tpl) {?><div class="rdfa-breadcrumb">

    <div xmlns:v="http://rdf.data-vocabulary.org/#">
        <span typeof="v:Breadcrumb">
            <a rel="v:url" property="v:title" href="<?php echo @constant('ROOT_URL');?>
" class="home">Trang chủ</a>
        </span>
        &raquo
        <?php if ($_smarty_tpl->tpl_vars['output']->value['parent_id']>0) {?> 

            <span typeof="v:Breadcrumb">
                <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['data_p']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['data_p']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['data_p']->value['title'];?>
</a>
            </span>&raquo
            <?php if ($_smarty_tpl->tpl_vars['controller']->value!='search') {?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php } else { ?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['output']->value['title'],'platforms'=>$_smarty_tpl->tpl_vars['output']->value['parent_id']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php }?>
        <?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['controller']->value!='search') {?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php } else { ?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['output']->value['title'],'platforms'=>$_smarty_tpl->tpl_vars['output']->value['parent_id']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php }?>
        <?php }?>
    </div>
</div>




<?php }} ?>
