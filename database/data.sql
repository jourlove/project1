/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50635
Source Host           : 127.0.0.1:3306
Source Database       : vrsystem

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2017-05-12 12:30:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for u_admin
-- ----------------------------
DROP TABLE IF EXISTS `u_admin`;
CREATE TABLE `u_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(16) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL,
  PRIMARY KEY (`id`,`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_admin
-- ----------------------------
INSERT INTO `u_admin` VALUES ('1', 'admin', '63ee451939ed580ef3c4b6f0109d1fd0');

-- ----------------------------
-- Table structure for u_article
-- ----------------------------
DROP TABLE IF EXISTS `u_article`;
CREATE TABLE `u_article` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '标题',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类id，为0则是单页面',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `content` text NOT NULL COMMENT '正文',
  `is_nav` varchar(32) NOT NULL DEFAULT '' COMMENT '是否导航，左下导航为：left_bottom',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '199' COMMENT '排序规则，越小越靠前',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_article
-- ----------------------------
INSERT INTO `u_article` VALUES ('1', '关于我们', '1', '', '<p>\r\n	关于我们页面。\r\n</p>', 'left_bottom', '195', '2016-11-14 10:26:12');
INSERT INTO `u_article` VALUES ('2', '友情链接', '1', '', '友情链接页面', 'left_bottom', '199', '2016-11-21 18:25:26');
INSERT INTO `u_article` VALUES ('3', '使用协议', '1', '', '使用协议页面', 'left_bottom', '199', '2016-11-21 18:25:48');
INSERT INTO `u_article` VALUES ('4', '测试页面', '1', '测试页面', '测下视频新闻模块', '', '199', '2016-12-20 16:49:33');

-- ----------------------------
-- Table structure for u_article_cat
-- ----------------------------
DROP TABLE IF EXISTS `u_article_cat`;
CREATE TABLE `u_article_cat` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(5) unsigned NOT NULL DEFAULT '29' COMMENT '排序规则，越小越靠前',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_article_cat
-- ----------------------------
INSERT INTO `u_article_cat` VALUES ('1', '单页面', '0', '29');

-- ----------------------------
-- Table structure for u_atlasmain
-- ----------------------------
DROP TABLE IF EXISTS `u_atlasmain`;
CREATE TABLE `u_atlasmain` (
  `pk_atlas_main` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pk_user_main` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `create_time` datetime NOT NULL,
  `atlas_type` tinyint(1) NOT NULL COMMENT '图册类型  0 默认图册  1 用户自己创建',
  PRIMARY KEY (`pk_atlas_main`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_atlasmain
-- ----------------------------

-- ----------------------------
-- Table structure for u_comment
-- ----------------------------
DROP TABLE IF EXISTS `u_comment`;
CREATE TABLE `u_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pk_works_main` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `head_img` varchar(255) NOT NULL,
  `ath` smallint(6) NOT NULL,
  `atv` smallint(6) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `add_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_works_wid` (`pk_works_main`),
  CONSTRAINT `comment_works_wid` FOREIGN KEY (`pk_works_main`) REFERENCES `u_worksmain` (`pk_works_main`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_comment
-- ----------------------------

-- ----------------------------
-- Table structure for u_cus_mediares
-- ----------------------------
DROP TABLE IF EXISTS `u_cus_mediares`;
CREATE TABLE `u_cus_mediares` (
  `pk_media_res` int(11) NOT NULL AUTO_INCREMENT,
  `media_type` tinyint(1) NOT NULL COMMENT '1音乐 0图片',
  `view_uuid` varchar(16) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `media_path` varchar(255) NOT NULL,
  `absolutelocation` varchar(255) NOT NULL,
  `media_name` varchar(100) NOT NULL,
  `pk_user_main` int(11) NOT NULL COMMENT '关联userid',
  `media_suffix` varchar(100) NOT NULL COMMENT '后缀',
  `media_size` int(11) NOT NULL COMMENT '文件大小 ',
  PRIMARY KEY (`pk_media_res`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_cus_mediares
-- ----------------------------

-- ----------------------------
-- Table structure for u_def_mediares
-- ----------------------------
DROP TABLE IF EXISTS `u_def_mediares`;
CREATE TABLE `u_def_mediares` (
  `pk_defmedia_main` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `absolutelocation` varchar(255) NOT NULL,
  `flag_del` tinyint(1) NOT NULL COMMENT '是否删除图标 0 正常 1删除',
  `suffix` varchar(10) NOT NULL,
  `thumb_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT '0 静态图标 1 动态程序循环图标 2 其他资源用的图片，例如添加电话等',
  PRIMARY KEY (`pk_defmedia_main`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_def_mediares
-- ----------------------------
INSERT INTO `u_def_mediares` (`pk_defmedia_main`, `absolutelocation`, `flag_del`, `suffix`, `thumb_path`, `title`, `type`) VALUES
(1, '/static/images/kr/navigation_b.png', 0, '.png', '/static/images/kr/navigation_b.png', '地图导航蓝色', '2'),
(2, '/static/images/kr/navigation_w.png', 0, '.png', '/static/images/kr/navigation_w.png', '地图导航白色', '2'),
(3, '/static/sysico/715CFD367DEAFFC9.png', 0, '.png', '/static/sysico/B318626858717C5B.gif', '动态向上箭头', '1'),
(4, '/static/sysico/1484634164322lio.png', 0, '.png', '/static/sysico/1484634164322lio.png', '静态隐藏热点', '0'),
(5, '/static/sysico/14846341865308ii.png', 0, '.png', '/static/sysico/14846341865308ii.png', '静态框', '0'),
(6, '/static/sysico/1484634210913e1e.png', 0, '.png', '/static/sysico/1484634210913e1e.png', '静态定位', '0'),
(7, '/static/sysico/1484634261679rrs.png', 0, '.png', '/static/sysico/1484634261679rrs.png', '静态导航', '0'),
(8, '/static/sysico/1484634287832qgz.png', 0, '.png', '/static/sysico/1484634287832qgz.png', '静态加号2', '0'),
(9, '/static/sysico/1484634304431d5y.png', 0, '.png', '/static/sysico/1484634304431d5y.png', '静态加号1', '0'),
(10, '/static/sysico/1484634318631os4.png', 0, '.png', '/static/sysico/1484634318631os4.png', '静态加号', '0'),
(11, '/static/sysico/1484634348310ry8.png', 0, '.png', '/static/sysico/1484634348310ry8.png', '静态放大', '0'),
(12, '/static/sysico/1484634364891sz9.png', 0, '.png', '/static/sysico/1484634364891sz9.png', '静态放大镜', '0'),
(13, '/static/sysico/14846343952139c2.png', 0, '.png', '/static/sysico/14846343952139c2.png', '静态字体', '0'),
(14, '/static/sysico/1484634408781ntk.png', 0, '.png', '/static/sysico/1484634408781ntk.png', '静态图片', '0'),
(15, '/static/sysico/1484634428031wdf.png', 0, '.png', '/static/sysico/1484634428031wdf.png', '静态音乐', '0'),
(16, '/static/sysico/1484634459756o1s.png', 0, '.png', '/static/sysico/1484634459756o1s.png', '静态链接1', '0'),
(17, '/static/sysico/1484634481164ps7.png', 0, '.png', '/static/sysico/1484634481164ps7.png', '静态链接', '0'),
(18, '/static/sysico/1484634508811173.png', 0, '.png', '/static/sysico/1484634508811173.png', '静态播放', '0'),
(19, '/static/sysico/1484634617241j97.png', 0, '.png', '/static/sysico/1484634617241j97.png', '静态向前7', '0'),
(20, '/static/sysico/1484634648993qbn.png', 0, '.png', '/static/sysico/1484634648993qbn.png', '静态向前6', '0'),
(21, '/static/sysico/1484634666629dcb.png', 0, '.png', '/static/sysico/1484634666629dcb.png', '静态向前5', '0'),
(22, '/static/sysico/1484634684152s17.png', 0, '.png', '/static/sysico/1484634684152s17.png', '静态向前4', '0'),
(23, '/static/sysico/1484634702183wpt.png', 0, '.png', '/static/sysico/1484634702183wpt.png', '静态向前3', '0'),
(24, '/static/sysico/1484634721071r1o.png', 0, '.png', '/static/sysico/1484634721071r1o.png', '静态向前2', '0'),
(25, '/static/sysico/1484634738052w2w.png', 0, '.png', '/static/sysico/1484634738052w2w.png', '静态向前1', '0'),
(26, '/static/sysico/1484634754727618.png', 0, '.png', '/static/sysico/1484634754727618.png', '静态向前', '0'),
(27, '/static/sysico/1484634830437edo.png', 0, '.png', '/static/sysico/1484634830437edo.png', '静态右拐', '0'),
(28, '/static/sysico/14846348502215nt.png', 0, '.png', '/static/sysico/14846348502215nt.png', '静态左拐', '0'),
(29, '/static/sysico/14846349006911jd.png', 0, '.png', '/static/sysico/14846349006911jd.png', '静态直升机', '0'),
(30, '/static/sysico/1484634948763kxo.png', 0, '.png', '/static/sysico/1484634948763kxo.png', '静态圆点', '0'),
(31, '/static/sysico/1484634985690m2z.png', 0, '.png', '/static/sysico/1484634985690m2z.png', '静态圆心渐变1', '0'),
(32, '/static/sysico/1484635006322884.png', 0, '.png', '/static/sysico/1484635006322884.png', '静态圆心渐变', '0'),
(33, '/static/sysico/14846350320570hn.png', 0, '.png', '/static/sysico/14846350320570hn.png', '静态点击', '0'),
(34, '/static/sysico/1484635058273occ.png', 0, '.png', '/static/sysico/1484635058273occ.png', '静态左上', '0'),
(35, '/static/sysico/1484635073841cd8.png', 0, '.png', '/static/sysico/1484635073841cd8.png', '静态右上', '0'),
(36, '/static/sysico/14846351205113l0.png', 0, '.png', '/static/sysico/14846351205113l0.png', '静态向左', '0'),
(37, '/static/sysico/1484635137679zne.png', 0, '.png', '/static/sysico/1484635137679zne.png', '静态向右', '0'),
(38, '/static/sysico/1484635156319gn9.png', 0, '.png', '/static/sysico/1484635156319gn9.png', '静态向下', '0'),
(39, '/static/sysico/14846351825358j9.png', 0, '.png', '/static/sysico/14846351825358j9.png', '静态向上', '0'),
(40, '/static/sysico/14846366442800jm.png', 0, '.png', '/static/sysico/1484636644288i9x.png', '动态加号', '1'),
(41, '/static/sysico/1484636762006msw.png', 0, '.png', '/static/sysico/1484636762013n1f.png', '动态放大', '1'),
(42, '/static/sysico/1484638271871112.png', 0, '.png', '/static/sysico/1484638271880ogk.png', '动态圆心渐变2', '1'),
(43, '/static/sysico/1484638337613hdt.png', 0, '.png', '/static/sysico/1484638337621qz5.png', '动态圆心渐变1', '1'),
(44, '/static/sysico/1484638376420tro.png', 0, '.png', '/static/sysico/1484638376428ttt.png', '动态圆心渐变', '1'),
(45, '/static/sysico/1484638475345t3o.png', 0, '.png', '/static/sysico/14846384753547yj.png', '动态手型', '1'),
(46, '/static/sysico/1484638532176tpt.png', 0, '.png', '/static/sysico/1484638532183eny.png', '动态飞机', '1'),
(47, '/static/sysico/1484638569407q70.png', 0, '.png', '/static/sysico/14846385694140xg.png', '动态直升机', '1'),
(48, '/static/sysico/1484638619125ixh.png', 0, '.png', '/static/sysico/1484638619133d6e.png', '动态椭圆', '1'),
(49, '/static/sysico/14846386687403g5.png', 0, '.png', '/static/sysico/1484638668748zq9.png', '动态右上', '1'),
(50, '/static/sysico/14846387045795lf.png', 0, '.png', '/static/sysico/1484638704586cew.png', '动态左上', '1'),
(51, '/static/sysico/1484638873718qqw.png', 0, '.png', '/static/sysico/1484638873726qrl.png', '动态点', '1'),
(52, '/static/sysico/1484638964908wqo.png', 0, '.png', '/static/sysico/1484638964915tkd.png', '动态向下箭头', '1'),
(53, '/static/sysico/148463900805960d.png', 0, '.png', '/static/sysico/1484639008066oqy.png', '动态向右', '1'),
(54, '/static/sysico/1484639053745wff.png', 0, '.png', '/static/sysico/14846390537510w8.png', '动态向左', '1'),
(55, '/static/sysico/14846390951599sl.png', 0, '.png', '/static/sysico/148463909516794z.png', '动态向下', '1'),
(56, '/static/sysico/1484639129526qz0.png', 0, '.png', '/static/sysico/14846391295343nm.png', '动态向上', '1');

-- ----------------------------
-- Table structure for u_def_voice
-- ----------------------------
DROP TABLE IF EXISTS `u_def_voice`;
CREATE TABLE `u_def_voice` (
  `pk_voice` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `absolutelocation` varchar(255) NOT NULL,
  `flag_del` tinyint(1) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `name_uniqid` char(32) NOT NULL,
  PRIMARY KEY (`pk_voice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_def_voice
-- ----------------------------

-- ----------------------------
-- Table structure for u_imgs_works
-- ----------------------------
DROP TABLE IF EXISTS `u_imgs_works`;
CREATE TABLE `u_imgs_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pk_img_main` int(11) NOT NULL,
  `pk_works_main` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uiw_img_id` (`pk_img_main`),
  KEY `uiw_works_id` (`pk_works_main`),
  CONSTRAINT `uiw_img_id` FOREIGN KEY (`pk_img_main`) REFERENCES `u_imgsmain` (`pk_img_main`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `uiw_works_id` FOREIGN KEY (`pk_works_main`) REFERENCES `u_worksmain` (`pk_works_main`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_imgs_works
-- ----------------------------

-- ----------------------------
-- Table structure for u_imgsmain
-- ----------------------------
DROP TABLE IF EXISTS `u_imgsmain`;
CREATE TABLE `u_imgsmain` (
  `pk_img_main` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL COMMENT '图片路径',
  `thumb_path` varchar(255) NOT NULL,
  `view_uuid` varchar(16) NOT NULL,
  `pk_atlas_main` int(11) NOT NULL DEFAULT '0',
  `pk_user_main` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`pk_img_main`),
  KEY `imgsmain_user_pk` (`pk_user_main`),
  KEY `imgsmain_atlas_pk` (`pk_atlas_main`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_imgsmain
-- ----------------------------

-- ----------------------------
-- Table structure for u_object_around
-- ----------------------------
DROP TABLE IF EXISTS `u_object_around`;
CREATE TABLE `u_object_around` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgs` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `view_num` int(11) NOT NULL DEFAULT '0',
  `pk_user_main` int(11) NOT NULL,
  `thumb_path` varchar(200) NOT NULL,
  `create_time` datetime NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否公开作品 1 公开 0 不公开',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_object_around
-- ----------------------------

-- ----------------------------
-- Table structure for u_pano_atlas
-- ----------------------------
DROP TABLE IF EXISTS `u_pano_atlas`;
CREATE TABLE `u_pano_atlas` (
  `pk_atlas_main` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pk_user_main` int(11) NOT NULL,
  PRIMARY KEY (`pk_atlas_main`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_pano_atlas
-- ----------------------------

-- ----------------------------
-- Table structure for u_pano_config
-- ----------------------------
DROP TABLE IF EXISTS `u_pano_config`;
CREATE TABLE `u_pano_config` (
  `pk_pano_config` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pk_works_main` int(11) NOT NULL,
  `open_alert` text NOT NULL,
  `bg_music` text NOT NULL,
  `sky_land_shade` text NOT NULL,
  `footmark` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `tour_guide` text NOT NULL,
  `url_phone_nvg` text NOT NULL,
  `speech_explain` text NOT NULL,
  `angle_of_view` text NOT NULL,
  `special_effects` text NOT NULL,
  `littleplanet` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `gyro` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `sand_table` text NOT NULL,
  `custom_logo` text NOT NULL,
  `scene_group` text NOT NULL,
  `scenechoose` tinyint(1) NOT NULL DEFAULT '1',
  `comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `hotspot` mediumtext NOT NULL,
  `autorotate` tinyint(1) NOT NULL DEFAULT '1',
  `loading_img` text NOT NULL,
  `custom_right_button` text NOT NULL COMMENT '自定义右键菜单',
  PRIMARY KEY (`pk_pano_config`),
  KEY `pano_config_works_wid` (`pk_works_main`),
  CONSTRAINT `pano_config_works_wid` FOREIGN KEY (`pk_works_main`) REFERENCES `u_worksmain` (`pk_works_main`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_pano_config
-- ----------------------------

-- ----------------------------
-- Table structure for u_project_download
-- ----------------------------
DROP TABLE IF EXISTS `u_project_download`;
CREATE TABLE `u_project_download` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL COMMENT '关联用户id',
  `pid` mediumint(8) unsigned NOT NULL COMMENT '关联项目id',
  `pname` varchar(255) NOT NULL COMMENT '项目名',
  `thumb` varchar(255) NOT NULL COMMENT '缩略图',
  `folder` varchar(100) NOT NULL DEFAULT '' COMMENT '临时文件夹名,压缩包名称',
  `step` smallint(2) NOT NULL DEFAULT '0' COMMENT '步骤',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 等待执行 1执行中 2执行完成 -1 出现异常',
  `msg` varchar(100) DEFAULT '' COMMENT '当前步骤对应信息',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '生成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_project_download
-- ----------------------------

-- ----------------------------
-- Table structure for u_site_config
-- ----------------------------
DROP TABLE IF EXISTS `u_site_config`;
CREATE TABLE `u_site_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(32) NOT NULL DEFAULT '' COMMENT '父级id，配置信息为一维数组时',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '配置项',
  `value` varchar(255) NOT NULL DEFAULT '' COMMENT '配置内容',
  PRIMARY KEY (`id`),
  UNIQUE KEY `parent_id` (`parent_id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COMMENT='站点配置表';

-- ----------------------------
-- Records of u_site_config
-- ----------------------------
INSERT INTO `u_site_config` VALUES ('1', '', 'title', 'VrSystem');
INSERT INTO `u_site_config` VALUES ('2', '', 'subtitle', '全景vr系统源码,krpano源码插件');
INSERT INTO `u_site_config` VALUES ('3', '', 'address', '广东省广州市天河路');
INSERT INTO `u_site_config` VALUES ('4', '', 'icp', '粤ICP备16088888号');
INSERT INTO `u_site_config` VALUES ('5', '', 'tel', '15308000360');
INSERT INTO `u_site_config` VALUES ('6', '', 'rewrite', '1');
INSERT INTO `u_site_config` VALUES ('7', '', 'closereason', '站点将于10月23日01点—10月23日06点进行升级，请稍候访问！');
INSERT INTO `u_site_config` VALUES ('8', '', 'qq', '38585404');
INSERT INTO `u_site_config` VALUES ('9', '', 'tempclose', '0');
INSERT INTO `u_site_config` VALUES ('10', '', 'desciption', 'VrSystem是专业的全景VR平台系统开发商,基于最新krpano二次开发,为客户部署服务器及交付源码,每周免费插件更新,提供功能定制。');
INSERT INTO `u_site_config` VALUES ('11', '', 'close_reg', '0');
INSERT INTO `u_site_config` VALUES ('59', 'oss', 'bucket', '');
INSERT INTO `u_site_config` VALUES ('57', 'oss', 'access_id', '');
INSERT INTO `u_site_config` VALUES ('55', 'oss', 'zone', 'zone2');
INSERT INTO `u_site_config` VALUES ('54', 'qiniu', 'cdn_host', 'opwgxgcgx.bxt.clouddn.com');
INSERT INTO `u_site_config` VALUES ('53', 'qiniu', 'bucket', 'vrsystem');
INSERT INTO `u_site_config` VALUES ('52', 'qiniu', 'secretKey', '_NPiCLK5Q0c245uMYTtzCwGMdv_W_8qYQQQkwGx8');
INSERT INTO `u_site_config` VALUES ('51', 'qiniu', 'accessKey', 'dnLKT7sldvA_LxjGYHtlAnwjmUIZi25R0-6rmnDh');
INSERT INTO `u_site_config` VALUES ('50', 'qiniu', 'zone', 'zone2');
INSERT INTO `u_site_config` VALUES ('49', '', 'local', 'disable');
INSERT INTO `u_site_config` VALUES ('48', '', 'oss', 'disable');
INSERT INTO `u_site_config` VALUES ('47', '', 'qiniu', 'enable');
INSERT INTO `u_site_config` VALUES ('46', '', 'global_storage', 'qiniu');
INSERT INTO `u_site_config` VALUES ('61', '', 'global_sms', 'alidayu');
INSERT INTO `u_site_config` VALUES ('62', '', 'yuntongxun', 'disable');
INSERT INTO `u_site_config` VALUES ('63', '', 'alidayu', 'enable');
INSERT INTO `u_site_config` VALUES ('64', 'yuntongxun', 'accountSid', '');
INSERT INTO `u_site_config` VALUES ('65', 'yuntongxun', 'accountToken', '');
INSERT INTO `u_site_config` VALUES ('66', 'yuntongxun', 'appId', '');
INSERT INTO `u_site_config` VALUES ('67', 'yuntongxun', 'templateId', '');
INSERT INTO `u_site_config` VALUES ('68', 'alidayu', 'appkey', '23559888');
INSERT INTO `u_site_config` VALUES ('69', 'alidayu', 'secretkey', 'da998cd89532f8d8b9068xb718d6e98b');
INSERT INTO `u_site_config` VALUES ('70', 'alidayu', 'freesignname', '全景');
INSERT INTO `u_site_config` VALUES ('71', 'alidayu', 'templatecode', 'SMS_33695888');
INSERT INTO `u_site_config` VALUES ('74', 'wx', 'appid', 'wx2d6f30e7c269c88c');
INSERT INTO `u_site_config` VALUES ('75', 'wx', 'appsecret', 'cca2026761f8b587982f993a28cc163b');
INSERT INTO `u_site_config` VALUES ('37', 'wx', 'token', 'useevr');
INSERT INTO `u_site_config` VALUES ('76', 'wxweb', 'appid', 'wx9fb62b965b696af8');
INSERT INTO `u_site_config` VALUES ('77', 'wxweb', 'appsecret', 'a0a5782377c183de3a97dbc81bac2af2');
INSERT INTO `u_site_config` VALUES ('56', 'oss', 'internal', '0');
INSERT INTO `u_site_config` VALUES ('72', '', 'wx', 'enable');
INSERT INTO `u_site_config` VALUES ('73', '', 'wxweb', 'enable');
INSERT INTO `u_site_config` VALUES ('43', '', 'moban', 'default');
INSERT INTO `u_site_config` VALUES ('58', 'oss', 'access_secret', '');
INSERT INTO `u_site_config` VALUES ('60', 'oss', 'cdn_host', '');

-- ----------------------------
-- Table structure for u_tag
-- ----------------------------
DROP TABLE IF EXISTS `u_tag`;
CREATE TABLE `u_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 图片标签  2 视频标签',
  `sort` smallint(5) unsigned NOT NULL DEFAULT '99' COMMENT '排序，越小越靠前',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_tag
-- ----------------------------
INSERT INTO `u_tag` VALUES ('1', '图片全景', '1', '99');
INSERT INTO `u_tag` VALUES ('2', '视频全景', '2', '99');

-- ----------------------------
-- Table structure for u_tag_video
-- ----------------------------
DROP TABLE IF EXISTS `u_tag_video`;
CREATE TABLE `u_tag_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_video_vid` (`video_id`),
  CONSTRAINT `tag_video_vid` FOREIGN KEY (`video_id`) REFERENCES `u_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_tag_video
-- ----------------------------

-- ----------------------------
-- Table structure for u_tag_works
-- ----------------------------
DROP TABLE IF EXISTS `u_tag_works`;
CREATE TABLE `u_tag_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `works_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_works_wid` (`works_id`),
  KEY `tag_works_tid` (`tag_id`),
  CONSTRAINT `tag_works_tid` FOREIGN KEY (`tag_id`) REFERENCES `u_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tag_works_wid` FOREIGN KEY (`works_id`) REFERENCES `u_worksmain` (`pk_works_main`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_tag_works
-- ----------------------------

-- ----------------------------
-- Table structure for u_user
-- ----------------------------
DROP TABLE IF EXISTS `u_user`;
CREATE TABLE `u_user` (
  `pk_user_main` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL DEFAULT '',
  `openid` varchar(32) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `level` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '用户组',
  `limit_num` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '可发布项目数量限制，默认为0，无限制',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(1) unsigned DEFAULT '0' COMMENT '用户是否被禁用  0 正常 1禁用',
  PRIMARY KEY (`pk_user_main`),
  KEY `openid` (`openid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_user
-- ----------------------------
INSERT INTO `u_user` VALUES ('1', '15388888888', '', 'snake', '63ee451939ed580ef3c4b6f0109d1fd0', '1', '0', '2017-05-12 12:25:08', '2017-05-12 12:25:08', '0');

-- ----------------------------
-- Table structure for u_user_level
-- ----------------------------
DROP TABLE IF EXISTS `u_user_level`;
CREATE TABLE `u_user_level` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '组id，1为系统默认，不可删除',
  `level_name` varchar(15) NOT NULL DEFAULT '' COMMENT '用户组名称',
  `privileges` text NOT NULL COMMENT '组权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- ----------------------------
-- Records of u_user_level
-- ----------------------------
INSERT INTO `u_user_level` VALUES ('1', '注册会员', 'bgmusic,comment,gyro,bgvoice,footmarker,link,showuser,shade_sky_floor,showlogo,open_alert,showviewnum,showvrglass,custom_right_button,custom_logo,custom_user,profile,praise,share,allowed_recomm');

-- ----------------------------
-- Table structure for u_user_profile
-- ----------------------------
DROP TABLE IF EXISTS `u_user_profile`;
CREATE TABLE `u_user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pk_user_main` mediumint(8) unsigned NOT NULL COMMENT '用户id',
  `avatar` varchar(255) NOT NULL COMMENT '头像路径',
  `province` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL COMMENT '1为男性，2为女性',
  PRIMARY KEY (`id`),
  KEY `pk_user_main` (`pk_user_main`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_user_profile
-- ----------------------------

-- ----------------------------
-- Table structure for u_video
-- ----------------------------
DROP TABLE IF EXISTS `u_video`;
CREATE TABLE `u_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pk_user_main` int(11) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `profile` text NOT NULL,
  `videos` text NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 未发布 1发布',
  `create_time` datetime NOT NULL,
  `size` bigint(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 等待编辑 1 已编辑',
  `praised_num` int(11) NOT NULL DEFAULT '0',
  `browsing_num` int(11) NOT NULL DEFAULT '0',
  `thumb_path` varchar(255) NOT NULL,
  `sort` smallint(4) NOT NULL DEFAULT '999',
  `recommend` tinyint(1) NOT NULL DEFAULT '0',
  `user_sort` smallint(4) NOT NULL DEFAULT '999',
  `user_recommend` tinyint(1) NOT NULL DEFAULT '0',
  `cdn_host` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_video
-- ----------------------------

-- ----------------------------
-- Table structure for u_worksmain
-- ----------------------------
DROP TABLE IF EXISTS `u_worksmain`;
CREATE TABLE `u_worksmain` (
  `pk_works_main` int(11) NOT NULL AUTO_INCREMENT,
  `pk_user_main` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profile` text COMMENT '场景简介',
  `thumb_path` varchar(255) NOT NULL COMMENT '缩略图',
  `pk_atlas_main` int(11) NOT NULL COMMENT '类别',
  `view_uuid` varchar(16) NOT NULL,
  `photo_date` datetime NOT NULL,
  `privacy_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否设置为公开浏览 0 公开  1私有',
  `privacy_password` varchar(32) DEFAULT NULL COMMENT '私有密码',
  `hidelogo_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'logo隐藏',
  `hideuser_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '作者隐藏',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '0',
  `browsing_num` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `praised_num` int(11) NOT NULL DEFAULT '0' COMMENT '点赞',
  `hideshare_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '隐藏分享',
  `hidevrglasses_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '隐藏vr眼镜',
  `hideprofile_flag` tinyint(1) NOT NULL DEFAULT '0',
  `hidepraise_flag` tinyint(1) NOT NULL DEFAULT '0',
  `hideviewnum_flag` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '隐藏人气',
  `create_time` datetime NOT NULL,
  `sort` smallint(4) NOT NULL DEFAULT '999' COMMENT '管理员定义的排序',
  `recommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐 0 不推荐 1推荐',
  `user_sort` smallint(4) NOT NULL DEFAULT '999',
  `user_recommend` tinyint(1) NOT NULL DEFAULT '0',
  `flag_allowed_recomm` tinyint(1) NOT NULL DEFAULT '1',
  `cdn_host` varchar(100) NOT NULL,
  PRIMARY KEY (`pk_works_main`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of u_worksmain
-- ----------------------------
