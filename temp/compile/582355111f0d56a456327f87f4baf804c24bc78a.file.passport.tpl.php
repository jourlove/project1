<?php /* Smarty version Smarty-3.1.7, created on 2018-05-14 23:29:07
         compiled from "F:/develop/phpStudy/WWW/vr720/template\default\passport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238105af9ab43a12f22-52670444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582355111f0d56a456327f87f4baf804c24bc78a' => 
    array (
      0 => 'F:/develop/phpStudy/WWW/vr720/template\\default\\passport.tpl',
      1 => 1494044504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238105af9ab43a12f22-52670444',
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
  'unifunc' => 'content_5af9ab43ada2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9ab43ada2d')) {function content_5af9ab43ada2d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/passport_header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/passport/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>