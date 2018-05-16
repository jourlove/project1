<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\bgmusic\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:19223131105afaeae38d9636-97938245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31af5126984a73878f72ddb2bbae400c6518607f' => 
    array (
      0 => 'plugin\\bgmusic\\template\\edit.lbi',
      1 => 1494044780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19223131105afaeae38d9636-97938245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae390c2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae390c2c')) {function content_5afaeae390c2c($_smarty_tpl) {?> <button type="button" class="btn" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="为全景加入背景音乐" onclick="openMusic()"<?php }?> > 背景音乐设置 </button><?php }} ?>