<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\bgvoice\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:6868562105afaeae3942dd2-56215930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd191af5705eb81ed0ebbd0f5880bded915c00e' => 
    array (
      0 => 'plugin\\bgvoice\\template\\edit.lbi',
      1 => 1494044298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6868562105afaeae3942dd2-56215930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3975a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3975a6')) {function content_5afaeae3975a6($_smarty_tpl) {?> <button type="button" class="btn" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="为全景加入语音解说" onclick="openVoice()"<?php }?> >语音解说设置</button><?php }} ?>