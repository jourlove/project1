<?php /* Smarty version Smarty-3.1.7, created on 2018-05-14 12:19:19
         compiled from "F:/develop/phpStudy/WWW/vr720/template\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76245af90e4794cd35-06759012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0860a04581a6f2d450e82135c57afa0c3722e716' => 
    array (
      0 => 'F:/develop/phpStudy/WWW/vr720/template\\default\\index.tpl',
      1 => 1494044504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76245af90e4794cd35-06759012',
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
  'unifunc' => 'content_5af90e47a622f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af90e47a622f')) {function content_5af90e47a622f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/index/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>