<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\link\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:9615067905afaeae3a83329-50639575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ab4733194e6f06f0c73310f089b92c9cc40633' => 
    array (
      0 => 'plugin\\link\\template\\edit.lbi',
      1 => 1494044324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9615067905afaeae3a83329-50639575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3ab212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3ab212')) {function content_5afaeae3ab212($_smarty_tpl) {?><button type="button" class="btn" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?> title="全景中加入站外链接、电话号码或导航" onclick="openLink()"<?php }?>>链接、电话与导航</button><?php }} ?>