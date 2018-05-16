<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:14:20
         compiled from "plugin\gyro\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:14692388245afaeb3c2848e7-08508581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33877298b7390adbe85128ca84c6357289aa6375' => 
    array (
      0 => 'plugin\\gyro\\template\\resource.lbi',
      1 => 1494044320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14692388245afaeb3c2848e7-08508581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeb3c2c30f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeb3c2c30f')) {function content_5afaeb3c2c30f($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(gyro_init);
})
function gyro_init(data,settings){
	 if (data.gyro!="0") {
            $(".btn_gyro").show;
     }
     settings['skin_settings.gyro'] = data.gyro=="1" ? true : false;
}
function showGyroBtn() {
    var gyro = $("body").data("panoData").gyro;
    if (gyro) {
        var krpano = document.getElementById('krpanoSWFObject');
        krpano.set("plugin[skin_gyro].enabled",true);
        $(".btn_gyro").show();
    }
}

function toggleGyro(el) {
    var krpano = document.getElementById('krpanoSWFObject');
    if ($(el).hasClass("btn_gyro")) {
        krpano.set("plugin[skin_gyro].enabled",false);
        $(el).removeClass("btn_gyro");
        $(el).addClass("btn_gyro_off");
    } else {
        krpano.set("plugin[skin_gyro].enabled",true);
        $(el).removeClass("btn_gyro_off");
        $(el).addClass("btn_gyro");
    }
}
function openGyro(){
    var krpano = document.getElementById('krpanoSWFObject');
    alert(krpano.get("plugin[skin_gyro].isavailable"));
}
</script><?php }} ?>