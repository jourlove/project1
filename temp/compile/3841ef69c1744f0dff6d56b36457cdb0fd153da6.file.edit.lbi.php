<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\custom_logo\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:18958356025afaeae3c6b817-91390010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3841ef69c1744f0dff6d56b36457cdb0fd153da6' => 
    array (
      0 => 'plugin\\custom_logo\\template\\edit.lbi',
      1 => 1494044310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18958356025afaeae3c6b817-91390010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3c9679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3c9679')) {function content_5afaeae3c9679($_smarty_tpl) {?> <button type="button" class="btn btn-custom-logo"  data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="为全景加入左上角自定义LOGO" onclick="openLogo()"<?php }?>>自定义LOGO</button><?php }} ?>