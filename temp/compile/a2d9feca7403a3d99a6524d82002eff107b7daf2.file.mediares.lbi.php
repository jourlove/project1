<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 20:34:49
         compiled from "D:/Develop/xampp/htdocs/vr720/template\default\member\mediares.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3385066545afad3e9ecf237-99848263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d9feca7403a3d99a6524d82002eff107b7daf2' => 
    array (
      0 => 'D:/Develop/xampp/htdocs/vr720/template\\default\\member\\mediares.lbi',
      1 => 1494044500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3385066545afad3e9ecf237-99848263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'act' => 0,
    'total_count' => 0,
    'default_count' => 0,
    'atlas' => 0,
    'v' => 0,
    'up_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afad3ea5da42',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afad3ea5da42')) {function content_5afad3ea5da42($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
  .pano_atlas{
    margin-top: 20px;
  }
  .pano_atlas .pano_count{
    width: 120px;
    margin-left: 1px;
    margin-bottom: 15px;
  }
  .pano_option{
    margin-top: 20px;
  }
  .pano_checkbox{
    position: absolute;
    top: 5px;
    z-index: 100;
    left: 20px
  }
</style>
<script>
  var extParams ={};
</script>
<div class="container">

<div class="content">
<?php if ($_smarty_tpl->tpl_vars['act']->value=="panos"){?>
    <div class="nav_wrap">
      <ul class="nav nav-secondary">
        <li class="active"><a href="/member/mediares?act=panos">全景图片</a></li>
        <li><a href="/member/mediares?act=material">素材</a></li>
        <li><a href="/member/mediares?act=msc">音乐</a></li>
         <li><a href="/member/mediares?act=video">视频</a></li>
      <button class="btn btn-primary up_btn" data-toggle="modal" data-target="#panos_up_modal">上传全景图</button>

      </ul>
    </div>
      
    <div class="list_wrap">
        <div class="row">
            <div class="col-md-3 pano_atlas" style="padding-bottom:20px">
              <nav class="menu" data-toggle="menu" style="width: 200px">
                <div class="row pano_count">
                   共有 <strong><?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
</strong> 个作品
                </div>
                <button class="btn btn-primary" onclick="saveOrUpdateAtlas(0,'')"><i class="icon-plus-sign"></i> 新建分类 </button>
                <ul class="nav nav-primary" id="atlas_nav">
                    <li class="atlas_active" onclick="listPanos(0,this)"><a href="javascript:;"> 
                    <span class="altlas_name">默认分类 (<?php echo $_smarty_tpl->tpl_vars['default_count']->value;?>
)</span></a></li>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atlas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li data-atlasid="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
" onclick="listPanos(<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
,this)">
                      <a href="javascript:;" style="padding-right:2px" >
                        <span class="altlas_name" <?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['name'])>10){?>title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
)"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
)</span>
                         <span class="pull-right">
                        <i class="icon-edit" onclick="saveOrUpdateAtlas('<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"></i>&nbsp; <i class="icon-trash" onclick="del_pano_atlas('<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
')"></i>
                        </span>
                    </a>
                    </li>
                   <?php } ?>
                </ul>
              </nav>
            </div>
            <div class="col-md-9">
                <div class="row pano_option">
                      <div class="col-md-2">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" onclick="setCheck(this,'pano_checkbox')">全选
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-left: -75px;">
                        <select class="form-control" id="atlas_select">
                          <option value="-1" selected="selected">移动到其他图册</option>
                           <option value="0">默认分类</option>
                          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atlas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-3 col-md-offset-4">
                          <input type="text" id="pano_name" class="form-control"  placeholder="作品名">
                        </div>
                      <div class="col-md-1">
                          <button class="btn btn-info" onclick="listPanos(-1)">搜索</button>
                      </div>
                </div>
                <div class="cards">
                </div>
                <div id="pager_wrap" style="margin-top:-10px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="panos_up_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title">上传资源：</h4>
      </div>
        <div class="modal-body">
             <input id="imgUpload" name="file" type="file" multiple="" accept="image/jpeg,image/tiff" class="">
        </div>
      </div>
    </div>
  </div>
<link rel="stylesheet" href="/static/css/fileinput.min.css">
<script language="JavaScript" type="text/javascript" src="/static/js/fileinput-v4.34.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/fileinput_locale_zh.js"></script>
<script>
var up_url = "<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
";

 var type = 1;
 var qn_token ={} ; 
 var upload_flag = false;
$(function(){
      list(1);
      $("#imgUpload").fileinput({
          language: 'zh',
          showUpload: false,
          showRemove: false,
          showCancel: false,
          maxFileCount: 1,
          // showPreview:false;
          previewFileType: "image",
          allowedFileExtensions: ["jpg","tif", "tiff"],
          msgInvalidFileExtension: '不支持文件类型"{name}"。只支持扩展名为"{extensions}"的文件。',
          browseClass: "btn btn-primary",
          browseLabel: "选择本地全景图片",
          browseIcon: "<i class=\"icon icon-picture\"></i> ",
          removeClass: "btn btn-danger",
          removeLabel: "删除",
          removeIcon: "<i class=\"icon icon-trash\"></i> ",
          uploadUrl: up_url,
          uploadAsync: true,
          // previewSettings: {
          //     image: {width: "auto", height: "100px"}
          // },
          fileActionSettings: {},
          // maxFileSize:"",
          dropZoneTitle: "拖拽图片或点击下面按钮上传",
          textEncoding: "UTF-8",
         uploadExtraData: get_token
      }).on('fileloaded', function(event, file, previewId, index, reader) {
          var filename = file.name.substr(file.name.lastIndexOf("."));
         if(filename=='.tiff' || filename=='.tif'){
              var tiff = new Tiff({buffer: reader.result});
              var width = tiff.width();
              var height = tiff.height();
              checkImgWidthAndHeight(width,height,previewId);
              return ;
          }
          var objUrl = window.URL || window.webkitURL;
          var url = objUrl.createObjectURL(file);
          var img = new Image();
          img.src = url;
          img.onload = function(){
              checkImgWidthAndHeight(img.naturalWidth,img.naturalHeight,previewId);
              objUrl.revokeObjectURL(url);
          }
          var extraData = $("#imgUpload").fileinput('uploadExtraData');
          extraData.key = qn_token.prefix+generic_name()+filename;
          extraData.filename = file.name;
          $("#imgUpload").fileinput("upload");
           $("#imgUpload").hide();

         var alert_obj = alert_notice("上传图片成功，等待程序处理....","success","top",0);
    }).on('filebatchuploadcomplete', function (event, files, extra) {
         upload_flag = true;
         var files = $('#imgUpload').fileinput('getFileStack');
         $.post("/member/mediares",{
              "act":"pano_add",
              "imgsrc":extra.key,
              "imgname":extra.filename
         },function(data){
            data = eval("("+data+")");
            if (data.status) {
                alert_notice("上传成功","success");
                setTimeout(function(){
                  window.location.reload();
                },1500);
            }else{
                alert_notice(data.msg);
            }
            $("#imgUpload").show();
            $("#imgUpload").fileinput("clear");
            $("#panos_up_modal").modal("hide");
         })
    });

    $("#atlas_select").change(function(){
      var atlas_id = $(this).val();
      if (atlas_id<0) {
        return false;
      }
      var ids =new Array;
      $("input[name='pano_checkbox']").each(function(){
        if($(this).is(':checked')){
          ids.push($(this).data("pid"));
        }
      });
      if(ids.length==0){
        alert_notice("请先勾选要移动的项目");
        return false;
      }
      $.post("/member/mediares",{
          "act":"move_panos",
          "atlas_id":atlas_id,
          "ids":JSON.stringify(ids)
      },function(res){
          if(res.status == 1){
            alert_notice("操作成功","success");
            window.location.reload();
          }else{
            alert_notice(res.msg);
          }   
      },'json')
    });

})
function get_token() {
  if (qn_token.prefix||upload_flag) {
    if (upload_flag) {
       qn_token={};
       upload_flag=false;
    }
    return qn_token;
  }

  $.ajax({
      url:'/get_token.php',
      method:'post',
      data:{'act':'qj_img'},
      async: false,
      success:function(res){
          var obj = eval ("(" + res + ")");
          qn_token.prefix= obj.prefix;
          if (obj.token) 
            qn_token.token = obj.token;
          else if(obj.policy){
            qn_token.policy = obj.policy;
            qn_token.OSSAccessKeyId = obj.accessid;
            qn_token.host = obj.host;
            qn_token.signature = obj.signature;
          }
          return qn_token;
    }
  })

 return qn_token;

}

function checkImgWidthAndHeight(width,height,previewId){
  if(width != 2*height){
      $('#imgUpload').fileinput('_showError','球面全景图片必须为2:1比例');
      return false;
  }
  return true;
}

function listPanos(atlasId,obj){

    if (atlasId!=-1){
      extParams.atlasId = atlasId;
      extParams.name="";
      $("#pano_name").val("");
      $("#atlas_nav li").removeClass('atlas_active');
      $(obj).addClass('atlas_active');
    }
    else{
      extParams.name=$.trim($("#pano_name").val());
    }
    list(1,extParams);
}

</script>
<?php }elseif($_smarty_tpl->tpl_vars['act']->value=="material"){?>
  <div class="nav_wrap">
    <ul class="nav nav-secondary">
      <li><a href="/member/mediares?act=panos">全景图片</a></li>
      <li class="active"><a href="/member/mediares?act=material">素材</a></li>
      <li><a href="/member/mediares?act=msc">音乐</a></li>
       <li><a href="/member/mediares?act=video">视频</a></li>
    <!-- <button class="btn btn-primary up_btn">上传素材</button> -->

    </ul>
  </div>
    
  <div class="list_wrap">
      <div class="cards">
      </div>
    
      <div id="pager_wrap" style="text-align:center"></div>
  </div>
  <script>
      var type = 2;
      $(function(){
          list(1);
          
      })

  </script>
<?php }elseif($_smarty_tpl->tpl_vars['act']->value=="msc"){?>
  <div class="nav_wrap">
    <ul class="nav nav-secondary">
      <li><a href="/member/mediares?act=panos">全景图片</a></li>
      <li ><a href="/member/mediares?act=material">素材</a></li>
      <li class="active"><a href="/member/mediares?act=msc">音乐</a></li>
      <li><a href="/member/mediares?act=video">视频</a></li>
    <!-- <button class="btn btn-primary up_btn">上传素材</button> -->

    </ul>
  </div>
    
  <div class="list_wrap">
      <div class="cards">
      </div>
    
      <div id="pager_wrap" style="text-align:center"></div>
  </div>
  <script>
    var type = 3;
    $(function(){
        list(1);
        $(".cards").on("click",".audio_wrap",function(){
            
            var audio =document.getElementById("audio_"+$(this).data("aid"));
            if(audio!==null){             
             if(audio.paused){                
                 audio.play();
                 $(this).children("img").attr("src","/static/images/pause.png");
                 $(this).children("span").text("暂停");
               }else{
                audio.pause();
                $(this).children("img").attr("src","/static/images/play.png");
                 $(this).children("span").text("试听");
               }
            } 
          });
    })
   
  </script>
<?php }elseif($_smarty_tpl->tpl_vars['act']->value=="video"){?>
  <div class="nav_wrap">
    <ul class="nav nav-secondary">
      <li><a href="/member/mediares?act=panos">全景图片</a></li>
      <li ><a href="/member/mediares?act=material">素材</a></li>
      <li><a href="/member/mediares?act=msc">音乐</a></li>
      <li class="active"><a href="/member/mediares?act=video">视频</a></li>
     <button class="btn btn-primary up_btn" data-toggle="modal" data-target="#video_up_modal">上传视频</button>

    </ul>
  </div>
    
  <div class="list_wrap">
      <div class="cards">
      </div>
    
      <div id="pager_wrap" style="text-align:center"></div>
  </div>
  <div class="modal fade" id="video_up_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title">上传资源：<small>单个视频大小不能超过100M</small></h4>
      </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-10 ">
                <table class="table table-striped table-hover text-left" id="video_up_table" style="margin-top:10px; ">
                  <thead>
                    <tr>
                      <th class="col-md-4">文件名</th>
                      <th class="col-md-2">大小</th>
                      <th class="col-md-6">进度</th>
                    </tr>
                  </thead>
                    <tbody id="fsUploadProgress">
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                  <button class="btn" id="videoupload" name="video">选择视频</button>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    <button id="publish_video" class="btn btn-primary btn-block">确定上传</button>
                </div>
            </div>
            <div class="row" style="margin-top:20px">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="video_play_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <span >视频预览</span>
      </div>
      <div class="modal-body" style="text-align: center;min-height: 340px;">
           <video src="" controls="controls" style="max-width: 500px;" poster="/static/images/loading.gif" autoplay="true">
              您的浏览器暂不支持视频预览，请升级浏览器版本
            </video>
        </div>
      </div>
    </div>
  </div>
  <script>
   var up_url = "<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
";
   var qn_video_token;
  var videoParams=new Array() ;
    var type = 4;
    $(function(){
        list(1);
        $(".cards").on("click",".audio_wrap",function(){
              $("#video_play_modal .modal-body video").attr('src',$(this).data('location'));
              $("#video_play_modal").modal('show');
          });
        $("#publish_video").click(function(){
            video_up.start();
        })
    })
   
  </script>
<script language="JavaScript" type="text/javascript" src="/static/js/plupload/moxie.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/plupload/plupload.dev.js"></script> 
<?php if ($_smarty_tpl->tpl_vars['_lang']->value['global_storage']=='qiniu'){?>
<script language="JavaScript" type="text/javascript" src="/static/js/qiniu.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/qiniu_ui.js"></script>
<link rel="stylesheet" href="/static/css/qiniu_main.css">
<script>


var video_up = Qiniu.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: 'videoupload',
        max_retries: 1,
        max_file_size: '100mb',
        flash_swf_url: '/static/js/plupload/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        save_key: false,
        unique_names: false,
        filters : {
            max_file_size : '900mb',
            prevent_duplicates: true,
            mime_types: [
                {title : "视频文件", extensions : "mp4"} 
            ]
        },
        multi_selection: false,
        get_new_uptoken: false, 
       // uptoken_url:'/get_token.php?act=video',
        uptoken_func: function (file) {
          qn_video_token ={};
          $.ajax({
            url:"/get_token.php",
            data:{"act":"video"},
          async: false,
          success:function(result){
            result = eval("("+result+")");
            qn_video_token.prefix= result.prefix;
            qn_video_token.token = result.token;
          }
        })
        return qn_video_token.token;
        },
        domain:up_url,
        auto_start: false,
        log_level: 5,
        init: {
            'FilesAdded': function (up, files) {
                plupload.each(files, function (file) {
                    var progress = new FileProgress(file, 'fsUploadProgress');
                    progress.setStatus("点击 \"发布\" 按钮开始上传...");
                    progress.bindUploadCancel(up);
                });
            },
            'BeforeUpload': function (up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                if (up.runtime === 'html5' && chunk_size) {
                    progress.setChunkProgess(chunk_size);
                }
            },
            'UploadProgress': function (up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                progress.setProgress(file.percent + "%", file.speed, chunk_size);
            },
            'UploadComplete': function () {

            },
            'FileUploaded': function (up, file, info) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                progress.setComplete(up, info);
                progress.setStatus("");
                var video = {};
                video.location = eval("("+info+")").key;
                video.name = file.name;
                video.size = file.size;
                videoParams.push(video);
                var files = up.files;
                if(files[files.length-1].id == file.id){
                  var obj = alert_notice("等待执行...","success",'top',0);
                  $.post("/member/mediares",{
                    "act":"video_add",
                    "params":videoParams
                    },function(result){
                      obj.hide();
                      result = eval("("+result+")");
                      if (result.status==1) {
                        alert_notice("上传成功","success");
                        window.location.reload();
                      }else{
                        alert_notice(result.msg);
                      }
                    })
                }
            },
            'Error': function (up, err, errTip) {

                var progress = new FileProgress(err.file, 'fsUploadProgress');
                progress.setError();
                progress.setStatus(errTip);
            }
            ,
            'Key': function (up, file) {

              var name =file.name;
                var key = qn_video_token.prefix+generic_name()+name.substr(name.lastIndexOf("."));
                // do something with key
                return key;
            }
        }
    });
</script>

  <?php }elseif($_smarty_tpl->tpl_vars['_lang']->value['global_storage']=='oss'){?>

  <script>
    var key ;
    function set_upload_param(up, filename, ret)
    {
        if (ret == false)
        {
            qn_video_token ={};
              $.ajax({
                url:"/get_token.php",
                data:{"act":"video"},
              async: false,
              success:function(result){
                result = eval("("+result+")");
                qn_video_token.prefix= result.prefix;
              qn_video_token.policy = result.policy;
              qn_video_token.OSSAccessKeyId = result.accessid;
              qn_video_token.host = result.host;
              qn_video_token.signature = result.signature;
              }
            })
        }else{
              key = qn_video_token.prefix+generic_name()+filename.substr(filename.lastIndexOf("."));
          new_multipart_params = {
              'key' : key,
              'policy': qn_video_token.policy,
              'OSSAccessKeyId': qn_video_token.OSSAccessKeyId, 
              'success_action_status' : '200', //让服务端返回200,不然，默认会返回204
              'host' : qn_video_token.host,
              'signature': qn_video_token.signature,
          };

          up.setOption({
              'url': up_url,
              'multipart_params': new_multipart_params
          });
      }
    }
    var video_up = new plupload.Uploader({
        runtimes : 'html5,flash,silverlight,html4',
        browse_button : 'videoupload', 
        multi_selection: false,
        flash_swf_url: '/static/js/plupload/Moxie.swf',
        silverlight_xap_url : '/static/js/plupload/Moxie.xap',
        url : "http://oss.aliyuncs.com",
        filters: {
              mime_types : [ //只允许上传图片
              { title : "Video files", extensions : "mp4" }, 
              ],
              max_file_size : '100mb', //
              prevent_duplicates : true //不允许选取重复文件
          },
        init: {
            PostInit: function() {
              set_upload_param(video_up, '', false);
            },
            FilesAdded: function(up, files) {
          var file= files[files.length-1];
          $("#fsUploadProgress").append('<tr>'+
                          '<th class="col-md-4">'+file.name+'</th>'+
                          '<th class="col-md-2">'+(file.size/1024).toFixed(1)+' KB</th>'+
                          '<th class="col-md-6"><div class="progress progress-striped" id="'+file.id+'"><div class="progress-bar progress-bar-success" style="width: 0%"></div><span class="text-muted" style="font-size:11px;font-weight:normal;">点击下方发布按钮开始上传</span></div></th>'+
                          '</tr>');
                return false;
            },
            BeforeUpload: function(up, file) {
                $("#videoupload").css('pointer-events','none');
                set_upload_param(up, file.name, true);
            },

            UploadProgress: function(up, file) {
                var d = document.getElementById(file.id);
                d.getElementsByTagName('span')[0].innerHTML = '  ' + file.percent + "%";
                var progBar = d.getElementsByTagName('div')[0];
                // var progBar = prog.getElementsByTagName('div')[0]
                progBar.style.width= file.percent+'%';
                progBar.setAttribute('aria-valuenow', file.percent);
            },

            FileUploaded: function(up, file, info) {
                if (info.status == 200)
                {   
                   var video = {};
                   video.location = key;
                   video.name = file.name;
                   video.size = file.size;
                   videoParams.push(video);
                   var files = up.files;
                   if(files[files.length-1].id == file.id){
                     var obj = alert_notice("等待执行...","success",'top',0);
                     $.post("/member/mediares",{
                       "act":"video_add",
                       "params":videoParams
                       },function(result){
                         obj.hide();
                         result = eval("("+result+")");
                         if (result.status==1) {
                           alert_notice("上传成功","success");
                           window.location.reload();
                         }else{
                           alert_notice(result.msg);
                         }
                       })
                   }
                }
                else
                {
                    alert_notice("上传失败");
                } 
                $("#selectfiles").css('pointer-events','');
            },

            Error: function(up, err) {
                if (err.code == -600) {
                    alert_notice("选择的文件太大了,不能超过900M");
                }
                else if (err.code == -601) {
                     alert_notice("只能上传jpg格式大小的图片");
                }
                else if (err.code == -602) {
                     alert_notice("这个文件已经上传过一遍了");
                }
                else 
                {   
                    alert_notice("上传异常");
                }
            }
        }
    });
    video_up.init();
  </script>


<?php }?>
<?php }?>
  </div>
</div>

<script type="text/javascript">
  function list(page){
    $(".cards").html("");
     var noticeObj = alert_notice('正在加载中...','success');
      $.post("/member/mediares",{
          "act":"list_media_res",
          "type":type,
          "page":page,
          "extParams":extParams!=undefined?JSON.stringify(extParams):"",
          "pageSize":24
      },function(data){
        var data = eval("("+data+")");
        var list = data.list;
        var h="";
        if (list.length>0) {
            for (var i = 0; i <list.length; i++) {
                var o = list[i];
                if(type==1){
                   h += ' <div class="col-md-4 col-sm-6 col-lg-3">'+
                   '<input type="checkbox" name="pano_checkbox" class="pano_checkbox" data-pid="'+o.pk_img_main+'">'+
                  ' <a class="card" href="###">'+
                  '<div class="top_cover"><span class="pull-right" onclick="del('+o.pk_img_main+',1)"><i class="icon-trash"></i>删除</span></div>'+
                  '<img src="'+o.thumb_path+'" style="height:160px;width:100%" alt="'+o.filename+'">'+
                    ' <div class="card-content" style="padding-right:20px;padding-bottom:0;">'+
                   '<div class="row">'+
                   '<div class="col-md-8"><span class="text-muted card_text" id="panos_name_'+o.pk_img_main+'">'+o.filename+'</span></div>'+
                  '        <div class="col-md-4">'+
                  '<button class="btn btn-link card_rename" type="button" onclick="edit('+o.pk_img_main+',1,\''+o.filename+'\')">重命名</button>'+
                   '</div>'+
                   '</div>'+
                   '</div>'+
                  '</a>'+
                 '</div>';
               }else if(type==2){
                   h += ' <div class="col-md-4 col-sm-6 col-lg-3">'+
                  ' <a class="card" href="###">'+
                  '<div class="top_cover"><span class="pull-right" onclick="del('+o.pk_media_res+',2)"><i class="icon-trash"></i>删除</span></div>'+
                  '<img src="'+o.absolutelocation+'" style="height:200px;width:100%" alt="'+o.media_name+'">'+
                    ' <div class="card-content">'+
                   '<div class="row">'+
                   '<div class="col-md-8"><span class="text-muted card_text" id="panos_name_'+o.pk_media_res+'">'+o.media_name+'</span></div>'+
                  '        <div class="col-md-4">'+
                  '<button class="btn btn-link card_rename" type="button" onclick="edit('+o.pk_media_res+',2,\''+o.media_name+'\')">重命名</button>'+
                   '</div>'+
                   '</div>'+
                   '</div>'+
                  '</a>'+
                 '</div>';
               }else if(type ==3){
                 h += ' <div class="col-md-4 col-sm-6 col-lg-3">'+
                    '<audio id="audio_'+o.pk_media_res+'" src="'+o.absolutelocation+'" ></audio>'+
                  ' <a class="card" >'+
                  '<div class="top_cover"><span class="pull-right" onclick="del('+o.pk_media_res+',3)"><i class="icon-trash"></i>删除</span></div>'+
                  '<div class="audio_wrap" data-aid="'+o.pk_media_res+'"><img src="/static/images/play.png" alt="'+o.media_name+'"><span>试听</span></div>'+
                    ' <div class="card-content">'+
                   '<div class="row">'+
                   '<div class="col-md-8"><span class="text-muted card_text" id="panos_name_'+o.pk_media_res+'">'+o.media_name+'</span></div>'+
                  '        <div class="col-md-4">'+
                  '<button class="btn btn-link card_rename" type="button" onclick="edit('+o.pk_media_res+',3,\''+o.media_name+'\')">重命名</button>'+
                   '</div>'+
                   '</div>'+
                   '</div>'+
                  '</a>'+
                 '</div>';
               }else if(type ==4){
                 h += ' <div class="col-md-4 col-sm-6 col-lg-3">'+
                  ' <a class="card" >'+
                  '<div class="top_cover"><span class="pull-right" onclick="del('+o.pk_media_res+',4)"><i class="icon-trash"></i>删除</span></div>'+
                  '<div class="audio_wrap" data-location="'+o.absolutelocation+'" ><img src="/static/images/play.png" alt="'+o.media_name+'"><span>播放</span></div>'+
                    ' <div class="card-content">'+
                   '<div class="row">'+
                   '<div class="col-md-8"><span class="text-muted card_text" id="panos_name_'+o.pk_media_res+'">'+o.media_name+'</span></div>'+
                  '        <div class="col-md-4">'+
                  '<button class="btn btn-link card_rename" type="button" onclick="edit('+o.pk_media_res+',4,\''+o.media_name+'\')">重命名</button>'+
                   '</div>'+
                   '</div>'+
                   '</div>'+
                  '</a>'+
                 '</div>';
               }
            }
         var pg = new Page('list',data.pageCount,data.currentPage);
         $("#pager_wrap").html(pg.printHtml());
        }else{
            h+="<div style='text-align: center;font-size: 18px; margin-top: 30px; ' class='text-muted'>没有结果!</div>";
            $("#pager_wrap").html("");
        }
        noticeObj.hide();
        $(".cards").html(h);

      })
  }
function saveOrUpdateAtlas(atlasId , name){
   bootbox.prompt({
          buttons: {
                  confirm: {  
                      label: '确认',  
                      className: 'btn-primary'  
                  },  
                  cancel: {  
                      label: '取消',  
                      className: 'btn-default'  
                  }  
              },
              value: name?name:"", 
              title:atlasId==0?"新增分类：":"重命名：",
              callback:function(result) {
                if (result!=null) {
                  result = $.trim(result);
                  if (result.length<1||result.length>100) {
                      alert_notice("名字长度在1到100之间");
                      return false;
                  }else{
                      $.post("/member/mediares",{
                          'act':'saveOrUpdateAtlas',
                          'atlasId':atlasId,
                          'name':result
                      },function(res){
                         if(res.status == 1){
                              window.location.reload();
                         }else{
                            alert_notice(res.msg);
                         }
                      },'json')
                }
              }
           }
      })
}
function del_pano_atlas(atlasId){
  bootbox.confirm({
    message:"确定要永久删除吗?",
    buttons: {
            confirm: {  
                label: '确认',  
                className: 'btn-primary'  
            },  
            cancel: {  
                label: '取消',  
                className: 'btn-default'  
            }  
        },
        title:"提示: ",
        callback:function(result) {
          if(result){
            alert_notice("等待执行...","success",'top',5000);
            $.post("/member/mediares",{
              'act':'del_pano_atlas',
              'atlasId':atlasId,
            },function(result){
              if (result.status == 1) {
                alert_notice("操作成功","success");
                window.location.reload();
              }else{
                alert_notice(result.msg);
              }
             },'json')
          }
      }
     })
}
function edit(media_id,type,value){
        bootbox.prompt({
          buttons: {
                  confirm: {  
                      label: '确认',  
                      className: 'btn-primary'  
                  },  
                  cancel: {  
                      label: '取消',  
                      className: 'btn-default'  
                  }  
              },
              value: value?value:"", 
              title:"重命名：",
              callback:function(result) {
                if (result!=null) {
                  result = $.trim(result);
                  if (result.length<1||result.length>100) {
                      alert_notice("名字长度在1到100之间");
                      return false;
                  }else{
                      $.post("/member/mediares",{
                              "media_id":media_id,
                              "type":type,
                              "name":result,
                              'act':"media_rename"
                      },function(res){
                         res = eval("("+res+")");
                         if (res.status) {
                            alert_notice("编辑成功","success");
                           $("#panos_name_"+media_id).text(result);
                         }else{
                            alert_notice(res.msg);
                           
                        }
                      })
                }
              }
           }
      })
}
function del(media_id,type){
        bootbox.confirm({
          message:"确定要永久删除吗?",
          buttons: {
                  confirm: {  
                      label: '确认',  
                      className: 'btn-primary'  
                  },  
                  cancel: {  
                      label: '取消',  
                      className: 'btn-default'  
                  }  
              },
              title:"提示: ",
              callback:function(result) {
                if(result){
                  alert_notice("等待执行...","success",'top',5000);
                  $.post("/member/mediares",{
                    'act':'media_delete',
                    'media_id':media_id,
                    "type":type
                  },function(result){
                    result = eval("("+result+")");
                    if (result.status) {
                      alert_notice("操作成功","success");
                      window.location.reload();
                    }else{
                      alert_notice(result.msg);
                    }
                   })
                }
            }
           })
      }
function generic_name() {
　　var $chars = 'abcdefghijklmnopqrstwxyz0123456789';  
　　var maxPos = $chars.length;
　　var pwd = '';
　　for (i = 0; i < 3; i++) {
　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
　　}
　　return new Date().getTime()+pwd;
}
</script><?php }} ?>