<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\private_access\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:11157215645afaeae3da4055-22962219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33364770f3f715fd69588a4ae9c25630eaf91f39' => 
    array (
      0 => 'plugin\\private_access\\template\\edit.lbi',
      1 => 1494044288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11157215645afaeae3da4055-22962219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3dd6ce',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3dd6ce')) {function content_5afaeae3dd6ce($_smarty_tpl) {?> <button type="button" class="btn btn-custom-logo"  data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="设置输入密码才能访问项目" onclick="openPrivacyWordModal()"<?php }?> >密码访问</button><?php }} ?>