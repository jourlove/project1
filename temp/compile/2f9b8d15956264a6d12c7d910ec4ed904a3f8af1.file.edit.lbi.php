<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\custom_right_button\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:17842110615afaeae3c05ef7-97737630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9b8d15956264a6d12c7d910ec4ed904a3f8af1' => 
    array (
      0 => 'plugin\\custom_right_button\\template\\edit.lbi',
      1 => 1494044312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17842110615afaeae3c05ef7-97737630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3c38b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3c38b8')) {function content_5afaeae3c38b8($_smarty_tpl) {?><button type="button" class="btn" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?> title="右键菜单加入站外链接、电话号码" onclick="open_custom_right()"<?php }?>>自定义右键</button><?php }} ?>