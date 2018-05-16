<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 20:34:49
         compiled from "D:/Develop/xampp/htdocs/vr720/template\default\member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7755921305afad3e9ce6d30-23033974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdc8e9ddd3fb32c9423c1fd55ee26d204dafa36c' => 
    array (
      0 => 'D:/Develop/xampp/htdocs/vr720/template\\default\\member.tpl',
      1 => 1494044504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7755921305afad3e9ce6d30-23033974',
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
  'unifunc' => 'content_5afad3e9e5609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afad3e9e5609')) {function content_5afad3e9e5609($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/member/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>