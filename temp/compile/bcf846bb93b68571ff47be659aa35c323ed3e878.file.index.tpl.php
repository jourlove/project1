<?php /* Smarty version Smarty-3.1.7, created on 2018-05-11 22:50:40
         compiled from "D:/Develop/xampp/htdocs/vr720/template\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724539295af5adc069e350-72032556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf846bb93b68571ff47be659aa35c323ed3e878' => 
    array (
      0 => 'D:/Develop/xampp/htdocs/vr720/template\\default\\index.tpl',
      1 => 1494044504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724539295af5adc069e350-72032556',
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
  'unifunc' => 'content_5af5adc07ceea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af5adc07ceea')) {function content_5af5adc07ceea($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/index/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>