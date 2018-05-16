<?php /* Smarty version Smarty-3.1.7, created on 2018-05-14 23:36:31
         compiled from "F:/develop/phpStudy/WWW/vr720/template\default\member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98385af9acff0d1436-80983572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc429b3c9e2efb19fcdacbc583838c91c1d73c17' => 
    array (
      0 => 'F:/develop/phpStudy/WWW/vr720/template\\default\\member.tpl',
      1 => 1494044504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98385af9acff0d1436-80983572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5af9acff14e44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9acff14e44')) {function content_5af9acff14e44($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/member/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>