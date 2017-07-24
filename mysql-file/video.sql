/*
Navicat MySQL Data Transfer

Source Server         : aliyun
Source Server Version : 50715
Source Host           : rm-uf6s3gdz3i15vtu17o.mysql.rds.aliyuncs.com:3306
Source Database       : video

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2017-07-24 21:59:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` varchar(18) NOT NULL,
  `password` char(64) NOT NULL,
  `tel` char(11) DEFAULT '0' COMMENT '电话',
  `email` varchar(50) DEFAULT '0',
  `regtime` int(10) unsigned DEFAULT NULL COMMENT '注册时间(自动添加)',
  `lastlogtime` int(10) unsigned DEFAULT '0' COMMENT '上次登录时间',
  `jiaose` varchar(255) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`adminname`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('12', 'nzx', '$2y$10$aj7Z8FrwYTfjDb7n6aw90.I7nOIpZiiLA9aN7g9FHvnwTxmYzLDgm', '13388888888', '123@123.com', null, '1500886711', '');
INSERT INTO `admin` VALUES ('13', 'niuben', '$2y$10$oB63mBCt4UYgKeY33TT.EuBoetKOAJ8da5bD9ucCSwm/6gvMBTxtm', '13131313131', '666@qq.com', null, '1500877187', '');
INSERT INTO `admin` VALUES ('14', 'niwenjie', '$2y$10$K2d7/GL5orLMfr9YHcKyB.rD6rPN2cCvr7/xqMd7zBB5fl7eytgt6', '1851314886', 'douyacaiyagg@163.com', null, '1500618322', '');
INSERT INTO `admin` VALUES ('20', 'nnn', '$2y$10$ihHldOHsJXOiodPGwCfC3.LN7mJyHAnwSpJXx3g8Lw8PX5HyNkE0q', '1345677654', 'nzx52050@126.com', null, '0', '3');

-- ----------------------------
-- Table structure for admin_jiaose
-- ----------------------------
DROP TABLE IF EXISTS `admin_jiaose`;
CREATE TABLE `admin_jiaose` (
  `admin_id` int(10) NOT NULL,
  `jiaose_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_jiaose
-- ----------------------------
INSERT INTO `admin_jiaose` VALUES ('12', '1');
INSERT INTO `admin_jiaose` VALUES ('13', '1');
INSERT INTO `admin_jiaose` VALUES ('14', '3');
INSERT INTO `admin_jiaose` VALUES ('20', '1');

-- ----------------------------
-- Table structure for adver
-- ----------------------------
DROP TABLE IF EXISTS `adver`;
CREATE TABLE `adver` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) DEFAULT NULL,
  `teamer` varchar(50) DEFAULT NULL,
  `img` varchar(80) NOT NULL,
  `content` varchar(200) NOT NULL,
  `starttime` int(10) unsigned DEFAULT '0',
  `endtime` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adver
-- ----------------------------
INSERT INTO `adver` VALUES ('1', '新浪', '官方团队', '/static/picture/1497860546452.jpg', 'fsdafdsf', '3121', '12132');
INSERT INTO `adver` VALUES ('2', '勇者大作战', 'aa工作室', '/static/picture/1498042297213.jpg', 'dfafa', '21312', '3213');

-- ----------------------------
-- Table structure for auth
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `urlname` varchar(100) NOT NULL,
  `urldesc` varchar(255) NOT NULL COMMENT '路由描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth
-- ----------------------------
INSERT INTO `auth` VALUES ('1', 'App\\Http\\Controllers\\Admin\\UserController@getUser', '查看用户路由');
INSERT INTO `auth` VALUES ('2', 'App\\Http\\Controllers\\Admin\\UserController@getInsert', '增加用户');
INSERT INTO `auth` VALUES ('3', 'App\\Http\\Controllers\\Admin\\UserController@getDelete', '删除用户');
INSERT INTO `auth` VALUES ('4', 'App\\Http\\Controllers\\Admin\\UserController@postUpdate', '修改用户');
INSERT INTO `auth` VALUES ('5', 'App\\Http\\Controllers\\Admin\\AdminController@getAdmininsert', '增加管理员');
INSERT INTO `auth` VALUES ('6', 'App\\Http\\Controllers\\Admin\\AdminController@getAdmin', '浏览管理员');
INSERT INTO `auth` VALUES ('7', 'App\\Http\\Controllers\\Admin\\AdminController@getAdmindelete', '删除管理员');
INSERT INTO `auth` VALUES ('8', 'App\\Http\\Controllers\\Admin\\TypeController@getIndex', '浏览分类');
INSERT INTO `auth` VALUES ('9', 'App\\Http\\Controllers\\Admin\\TypeController@getAdd', '增加分类');
INSERT INTO `auth` VALUES ('10', 'App\\Http\\Controllers\\Admin\\TypeController@getDelete', '删除分类');
INSERT INTO `auth` VALUES ('11', 'App\\Http\\Controllers\\Admin\\TypeController@getDetail', '修改分类');
INSERT INTO `auth` VALUES ('12', 'App\\Http\\Controllers\\Admin\\VideoController@getAdd', '增加视频');
INSERT INTO `auth` VALUES ('13', 'App\\Http\\Controllers\\Admin\\VideoController@getDelete', '删除视频');
INSERT INTO `auth` VALUES ('14', 'App\\Http\\Controllers\\Admin\\VideoController@getDetail', '修改视频');
INSERT INTO `auth` VALUES ('15', 'App\\Http\\Controllers\\Admin\\VideoController@getIndex', '浏览视频');
INSERT INTO `auth` VALUES ('16', 'App\\Http\\Controllers\\Admin\\UrlController@getInserturl', '增加友情链接');
INSERT INTO `auth` VALUES ('17', 'App\\Http\\Controllers\\Admin\\UrlController@getDelete', '删除友情链接');
INSERT INTO `auth` VALUES ('18', 'App\\Http\\Controllers\\Admin\\UrlController@getEdit', '修改友情表单链接');
INSERT INTO `auth` VALUES ('19', 'App\\Http\\Controllers\\Admin\\UrlController@getUrl', '浏览友情链接');
INSERT INTO `auth` VALUES ('20', 'App\\Http\\Controllers\\Admin\\AdminController@postAdminupdate', '修改管理员信息');
INSERT INTO `auth` VALUES ('21', 'App\\Http\\Controllers\\Admin\\AdminController@getShiyan', '试验用路由');
INSERT INTO `auth` VALUES ('23', 'App\\Http\\Controllers\\Admin\\AdminController@getAdmindetail', '管理员详情路由');
INSERT INTO `auth` VALUES ('24', 'App\\Http\\Controllers\\Admin\\AdminController@getIndex', '后台主页路由');
INSERT INTO `auth` VALUES ('25', 'App\\Http\\Controllers\\Admin\\RecommendController@getIndex', '视频推荐路由');
INSERT INTO `auth` VALUES ('27', 'App\\Http\\Controllers\\Admin\\UrlController@postEdits', '修改友情链接数据路由');
INSERT INTO `auth` VALUES ('28', 'App\\Http\\Controllers\\Admin\\UrlController@getStatus', '友情链接推荐状态修改路由');
INSERT INTO `auth` VALUES ('29', 'App\\Http\\Controllers\\Admin\\UrlController@postUrldata', '接收友情链接数据并修改路由     ');
INSERT INTO `auth` VALUES ('30', 'App\\Http\\Controllers\\Admin\\RankController@getRank', '排行榜列表路由');
INSERT INTO `auth` VALUES ('31', 'App\\Http\\Controllers\\Admin\\RankController@getClick', '点击量排行路由');
INSERT INTO `auth` VALUES ('32', 'App\\Http\\Controllers\\Admin\\RankController@getUpdate', '更新排行榜路由');
INSERT INTO `auth` VALUES ('33', 'App\\Http\\Controllers\\Admin\\RankController@getTtype', '视频类型排行路由');
INSERT INTO `auth` VALUES ('34', 'App\\Http\\Controllers\\Admin\\ConfigController@getIndex', '网站配置路由');
INSERT INTO `auth` VALUES ('35', 'App\\Http\\Controllers\\Admin\\ConfigController@postDoedit', '网站配置修改路由');
INSERT INTO `auth` VALUES ('36', 'App\\Http\\Controllers\\Admin\\UserController@getDetail', '用户详情路由 ');
INSERT INTO `auth` VALUES ('37', 'App\\Http\\Controllers\\Admin\\UserController@getEditpsw', '管理员修改密码表单路由 ');
INSERT INTO `auth` VALUES ('38', 'App\\Http\\Controllers\\Admin\\UserController@postEditpsws', '密码修改数据路由');
INSERT INTO `auth` VALUES ('39', 'App\\Http\\Controllers\\Admin\\UserController@postSearch', '用户搜索路由');
INSERT INTO `auth` VALUES ('40', 'App\\Http\\Controllers\\Admin\\AdminController@postInsertdata', '修改管理员数据路由');
INSERT INTO `auth` VALUES ('41', 'App\\Http\\Controllers\\Admin\\AdminController@getUniquer', '验证账号是否重复');
INSERT INTO `auth` VALUES ('42', 'App\\Http\\Controllers\\Admin\\UserController@postData', '增加用户路由');
INSERT INTO `auth` VALUES ('43', 'App\\Http\\Controllers\\Admin\\AdminController@getAuth', '增加权限表单路由');
INSERT INTO `auth` VALUES ('44', 'App\\Http\\Controllers\\Admin\\AdminController@postAuths', '权限数据分配路由');
INSERT INTO `auth` VALUES ('53', 'App\\Http\\Controllers\\Admin\\AdminController@getJin', '金牌角色权限路由');
INSERT INTO `auth` VALUES ('54', 'App\\Http\\Controllers\\Admin\\AdminController@getYin', '银牌角色权限路由');
INSERT INTO `auth` VALUES ('55', 'App\\Http\\Controllers\\Admin\\AdminController@getTong', '铜牌角色权限路由');
INSERT INTO `auth` VALUES ('56', 'App\\Http\\Controllers\\Admin\\AdminController@getAuthedit', '修改路由信息路由');
INSERT INTO `auth` VALUES ('57', 'App\\Http\\Controllers\\Admin\\AdminController@getAuthdelete', '删除路由路由');
INSERT INTO `auth` VALUES ('58', 'App\\Http\\Controllers\\Admin\\AdminController@getSelect', '路由总览路由');
INSERT INTO `auth` VALUES ('59', 'App\\Http\\Controllers\\Admin\\AdminController@postEdit', '权限路由修改路由');
INSERT INTO `auth` VALUES ('60', 'App\\Http\\Controllers\\Admin\\AdminController@getDelete', '删除指定权限路由');
INSERT INTO `auth` VALUES ('66', 'App\\Http\\Controllers\\Admin\\TypeController@getIndex', '分类主页面路由');
INSERT INTO `auth` VALUES ('67', 'App\\Http\\Controllers\\Admin\\TypeController@getAdd', '视频添加路由');
INSERT INTO `auth` VALUES ('68', 'App\\Http\\Controllers\\Admin\\TypeController@postUpload', '视频上传路由');
INSERT INTO `auth` VALUES ('69', 'App\\Http\\Controllers\\Admin\\TypeController@postDoadd', '视频分类路由');
INSERT INTO `auth` VALUES ('70', 'App\\Http\\Controllers\\Admin\\TypeController@getOrder', '视频排序');
INSERT INTO `auth` VALUES ('71', 'App\\Http\\Controllers\\Admin\\TypeController@getDetail', '视频修改页面');
INSERT INTO `auth` VALUES ('72', 'App\\Http\\Controllers\\Admin\\TypeController@postEdit', '视频修改路由');
INSERT INTO `auth` VALUES ('73', 'App\\Http\\Controllers\\Admin\\TypeController@getDelete', '视频删除');
INSERT INTO `auth` VALUES ('74', 'App\\Http\\Controllers\\Admin\\UserController@getOld', '发送修改密码的ajax');
INSERT INTO `auth` VALUES ('75', 'App\\Http\\Controllers\\Admin\\VideoController@postDoadd', '插入视频路由');
INSERT INTO `auth` VALUES ('76', 'App\\Http\\Controllers\\Admin\\VideoController@postUpload', '视频上传');
INSERT INTO `auth` VALUES ('77', 'App\\Http\\Controllers\\Admin\\VideoController@postDoedit', '修改视频信息');
INSERT INTO `auth` VALUES ('78', 'App\\Http\\Controllers\\Admin\\VideoController@getCheck', '审核路由');
INSERT INTO `auth` VALUES ('79', 'App\\Http\\Controllers\\Admin\\ConfigController@getIndex', '网站配置路由');
INSERT INTO `auth` VALUES ('80', 'App\\Http\\Controllers\\Admin\\ConfigController@postDoedit', '修改网站配置数据');
INSERT INTO `auth` VALUES ('81', 'App\\Http\\Controllers\\Admin\\ConfigController@postUpdate', '更新网站配置');
INSERT INTO `auth` VALUES ('82', 'igtiuyoiuy', 'juhkjhkj');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `vid` int(11) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `hfcontent` varchar(255) DEFAULT NULL COMMENT '回复给哪个评论',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论时间',
  `uname` varchar(18) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '4', '阿萨达速度三大', '', '1499578796', 'aaaa', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('9', '4', '4', 'qeqweqewq', '', '1499669055', 'vvvv', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('10', '4', '4', 'aaaaaaaaaaaaaaaaaaaaaaa', '', '1499669072', 'ewsad', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('11', '1', '1', '请问', '', '1499582821', 's', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('12', '4', '4', '撒打算', '', '1499670304', 'asdsdd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('13', '4', '4', '撒大大', '', '1499670314', 'dsd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('14', '4', '4', '多岁的广告费', '', '1499671045', 'sad', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('15', '1', '1', '驱蚊器', '', '0', 'addf', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('16', '4', '4', '东方闪电', '', '1499671389', 'fdf', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('17', '4', '4', 'qwqweqweqweqw', '', '1499673373', 'asd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('18', '4', '4', '对方的孤独感', '', '1499700783', 'dfd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('19', '1', '1', '哈珀看将很快就好了考核', '', '1499599114', 'asd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('20', '1', '1', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '', '1499599160', 'fdf', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('21', '1', '2', '请问', '', '1499582821', 'd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('22', '1', '2', '驱蚊器', '', '0', 'dfdf', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('23', '1', '2', '哈珀看将很快就好了考核', '', '1499599114', 'd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('24', '4', '4', '是否撒发生股份', ' ', '1500217532', 's', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('25', '1', '1', 'jfhdzvkjsvkjhzkjcxvsa', '', '1500217804', 's', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('26', '1', '1', 'nkjdsahgkjdsahksajfa', '', '1500217823', 'dsd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('27', '4', '4', '对方水电费', ' ', '1500220050', 'dsd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('28', '4', '4', '大幅度发', ' ', '1500220081', 'sdsd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('29', '4', '4', '大幅度发打广告', ' ', '1500220306', 'aaa', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('30', '4', '4', '阿萨达速度', ' ', '1500220608', 'aaa', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('31', '1', '1', 'afsdsfsad', '', '1500220616', 'dsddff', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('32', '1', '1', '空间的撒谎个客户的撒客户vhdkj', '', '1500220694', 'sd', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('33', '1', '1', 'sadhfkhsakfhasadfas11111111111', ' ', '1500221094', 'fand', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('34', '9', '9', '大傻逼!', ' ', '1500472669', '牛犇', '/uploads/image/69881499869003.jpg');
INSERT INTO `comment` VALUES ('35', '9', '9', '一点都不好看', ' ', '1500472746', '唐磊', '/uploads/image/201707161206576883.jpg');
INSERT INTO `comment` VALUES ('36', '9', '9', '装逼之王,我只服....', ' ', '1500475468', '樊东东', '/uploads/image/201707171902284534.jpg');
INSERT INTO `comment` VALUES ('37', '9', '9', '什么情况', null, '1500475496', '123123213', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('38', '9', '9', '真特么难看  ', null, '1500486531', '123123213', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('39', '9', '9', 'qweqwewqe', null, '1500514430', '123123213', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('40', '9', '9', '张叶璇大傻逼', null, '1500565130', '牛大爷', '/uploads/image/45211500466801.jpg');
INSERT INTO `comment` VALUES ('41', '9', '9', '北京兄弟连php182班!', null, '1500565354', 'bbb', '/uploads/image/45211500466801.jpg');
INSERT INTO `comment` VALUES ('42', '5', '5', '真特么难看  什么破视频', null, '1500597706', 'qweqwe', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('43', '2', '5', '牛儿~~~~', null, '1500599393', ' fand', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('44', '43', '5', '啊啊啊啊啊啊啊啊啊啊', null, '1500600046', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('45', '43', '9', '玩儿完', null, '1500731234', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('46', '60', '9', '且看他高楼起  \r\n且看他宴宾客   \r\n且看他楼塌了.....', null, '1500796303', 'nzx52050', '/uploads/image/211338010csan7q5.jpg');
INSERT INTO `comment` VALUES ('47', '43', '9', '牛犇3秒钟', null, '1500821689', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('48', '43', '7', '12324213 ', null, '1500827841', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('49', '43', '5', '123', null, '1500828037', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('50', '43', '1', '123', null, '1500829649', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('51', '43', '1', '沙发垫工会经费的  ', null, '1500830602', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('52', '43', '10', '斯柯达', null, '1500832080', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('53', '43', '95', 'fgdsgfsd\\', null, '1500833922', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('54', '43', '1', 'cssds', null, '1500869159', 'nizexing', '/uploads/image/1495771862238.png');
INSERT INTO `comment` VALUES ('55', '43', '9', 'kjhkjhkjhkjhjk', null, '1500887069', 'nizexing', '/uploads/image/1495771862238.png');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `title` varchar(10) NOT NULL,
  `keys` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `contact` text COMMENT '联系我们',
  `about` text COMMENT '关于我们',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `copyright` varchar(50) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `width_image` varchar(100) DEFAULT NULL,
  `width_image_title` varchar(10) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `video_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('video阿萨德', '搞笑,综艺,MV音乐', '/static/picture/logo.png', '<p>阿萨德</p>', '<p style=\"text-align: center;\">fds<br/></p>', '1', 'copyright@video-group', 'AcFun是一家弹幕视频网站，致力于为每一个人带来欢乐', '/static/images/1498537936194.jpg', 'AC娘，大发明家！', 'uploads/image', 'uploads/video');

-- ----------------------------
-- Table structure for jiaose
-- ----------------------------
DROP TABLE IF EXISTS `jiaose`;
CREATE TABLE `jiaose` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jname` varchar(20) NOT NULL,
  `desc` varchar(255) NOT NULL COMMENT '角色描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jiaose
-- ----------------------------
INSERT INTO `jiaose` VALUES ('1', '金牌管理员', '具有所有权限');
INSERT INTO `jiaose` VALUES ('2', '银牌管理员', '具有增加,查看权限');
INSERT INTO `jiaose` VALUES ('3', '铜牌管理员', '只具有查看的权限');

-- ----------------------------
-- Table structure for jiaose_auth
-- ----------------------------
DROP TABLE IF EXISTS `jiaose_auth`;
CREATE TABLE `jiaose_auth` (
  `jiaose_id` int(10) NOT NULL,
  `auth_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jiaose_auth
-- ----------------------------
INSERT INTO `jiaose_auth` VALUES ('1', '1');
INSERT INTO `jiaose_auth` VALUES ('1', '2');
INSERT INTO `jiaose_auth` VALUES ('1', '3');
INSERT INTO `jiaose_auth` VALUES ('1', '4');
INSERT INTO `jiaose_auth` VALUES ('1', '5');
INSERT INTO `jiaose_auth` VALUES ('1', '6');
INSERT INTO `jiaose_auth` VALUES ('1', '7');
INSERT INTO `jiaose_auth` VALUES ('1', '8');
INSERT INTO `jiaose_auth` VALUES ('1', '9');
INSERT INTO `jiaose_auth` VALUES ('1', '10');
INSERT INTO `jiaose_auth` VALUES ('1', '11');
INSERT INTO `jiaose_auth` VALUES ('1', '12');
INSERT INTO `jiaose_auth` VALUES ('1', '13');
INSERT INTO `jiaose_auth` VALUES ('1', '14');
INSERT INTO `jiaose_auth` VALUES ('1', '15');
INSERT INTO `jiaose_auth` VALUES ('1', '16');
INSERT INTO `jiaose_auth` VALUES ('1', '17');
INSERT INTO `jiaose_auth` VALUES ('1', '18');
INSERT INTO `jiaose_auth` VALUES ('1', '19');
INSERT INTO `jiaose_auth` VALUES ('1', '20');
INSERT INTO `jiaose_auth` VALUES ('2', '1');
INSERT INTO `jiaose_auth` VALUES ('2', '2');
INSERT INTO `jiaose_auth` VALUES ('2', '4');
INSERT INTO `jiaose_auth` VALUES ('2', '5');
INSERT INTO `jiaose_auth` VALUES ('2', '6');
INSERT INTO `jiaose_auth` VALUES ('2', '8');
INSERT INTO `jiaose_auth` VALUES ('2', '9');
INSERT INTO `jiaose_auth` VALUES ('2', '11');
INSERT INTO `jiaose_auth` VALUES ('2', '12');
INSERT INTO `jiaose_auth` VALUES ('2', '14');
INSERT INTO `jiaose_auth` VALUES ('2', '15');
INSERT INTO `jiaose_auth` VALUES ('2', '16');
INSERT INTO `jiaose_auth` VALUES ('2', '18');
INSERT INTO `jiaose_auth` VALUES ('2', '19');
INSERT INTO `jiaose_auth` VALUES ('2', '20');
INSERT INTO `jiaose_auth` VALUES ('3', '1');
INSERT INTO `jiaose_auth` VALUES ('3', '6');
INSERT INTO `jiaose_auth` VALUES ('3', '8');
INSERT INTO `jiaose_auth` VALUES ('3', '15');
INSERT INTO `jiaose_auth` VALUES ('3', '19');
INSERT INTO `jiaose_auth` VALUES ('1', '23');
INSERT INTO `jiaose_auth` VALUES ('1', '24');
INSERT INTO `jiaose_auth` VALUES ('1', '25');
INSERT INTO `jiaose_auth` VALUES ('1', '27');
INSERT INTO `jiaose_auth` VALUES ('1', '28');
INSERT INTO `jiaose_auth` VALUES ('1', '29');
INSERT INTO `jiaose_auth` VALUES ('1', '30');
INSERT INTO `jiaose_auth` VALUES ('1', '31');
INSERT INTO `jiaose_auth` VALUES ('1', '32');
INSERT INTO `jiaose_auth` VALUES ('1', '33');
INSERT INTO `jiaose_auth` VALUES ('1', '34');
INSERT INTO `jiaose_auth` VALUES ('1', '35');
INSERT INTO `jiaose_auth` VALUES ('1', '36');
INSERT INTO `jiaose_auth` VALUES ('1', '37');
INSERT INTO `jiaose_auth` VALUES ('1', '38');
INSERT INTO `jiaose_auth` VALUES ('1', '39');
INSERT INTO `jiaose_auth` VALUES ('1', '40');
INSERT INTO `jiaose_auth` VALUES ('1', '41');
INSERT INTO `jiaose_auth` VALUES ('1', '42');
INSERT INTO `jiaose_auth` VALUES ('2', '23');
INSERT INTO `jiaose_auth` VALUES ('2', '24');
INSERT INTO `jiaose_auth` VALUES ('2', '25');
INSERT INTO `jiaose_auth` VALUES ('2', '27');
INSERT INTO `jiaose_auth` VALUES ('2', '28');
INSERT INTO `jiaose_auth` VALUES ('2', '29');
INSERT INTO `jiaose_auth` VALUES ('2', '30');
INSERT INTO `jiaose_auth` VALUES ('2', '31');
INSERT INTO `jiaose_auth` VALUES ('2', '32');
INSERT INTO `jiaose_auth` VALUES ('2', '33');
INSERT INTO `jiaose_auth` VALUES ('2', '34');
INSERT INTO `jiaose_auth` VALUES ('2', '35');
INSERT INTO `jiaose_auth` VALUES ('2', '36');
INSERT INTO `jiaose_auth` VALUES ('2', '38');
INSERT INTO `jiaose_auth` VALUES ('2', '39');
INSERT INTO `jiaose_auth` VALUES ('3', '23');
INSERT INTO `jiaose_auth` VALUES ('3', '24');
INSERT INTO `jiaose_auth` VALUES ('3', '30');
INSERT INTO `jiaose_auth` VALUES ('3', '31');
INSERT INTO `jiaose_auth` VALUES ('3', '32');
INSERT INTO `jiaose_auth` VALUES ('3', '33');
INSERT INTO `jiaose_auth` VALUES ('3', '36');
INSERT INTO `jiaose_auth` VALUES ('3', '39');
INSERT INTO `jiaose_auth` VALUES ('1', '43');
INSERT INTO `jiaose_auth` VALUES ('2', '43');
INSERT INTO `jiaose_auth` VALUES ('1', '44');
INSERT INTO `jiaose_auth` VALUES ('1', '53');
INSERT INTO `jiaose_auth` VALUES ('1', '54');
INSERT INTO `jiaose_auth` VALUES ('1', '55');
INSERT INTO `jiaose_auth` VALUES ('1', '56');
INSERT INTO `jiaose_auth` VALUES ('1', '57');
INSERT INTO `jiaose_auth` VALUES ('1', '58');
INSERT INTO `jiaose_auth` VALUES ('1', '59');
INSERT INTO `jiaose_auth` VALUES ('1', '60');
INSERT INTO `jiaose_auth` VALUES ('2', '64');
INSERT INTO `jiaose_auth` VALUES ('1', '66');
INSERT INTO `jiaose_auth` VALUES ('1', '67');
INSERT INTO `jiaose_auth` VALUES ('1', '68');
INSERT INTO `jiaose_auth` VALUES ('1', '69');
INSERT INTO `jiaose_auth` VALUES ('1', '70');
INSERT INTO `jiaose_auth` VALUES ('1', '71');
INSERT INTO `jiaose_auth` VALUES ('1', '72');
INSERT INTO `jiaose_auth` VALUES ('1', '73');
INSERT INTO `jiaose_auth` VALUES ('1', '75');
INSERT INTO `jiaose_auth` VALUES ('1', '74');
INSERT INTO `jiaose_auth` VALUES ('1', '76');
INSERT INTO `jiaose_auth` VALUES ('1', '77');
INSERT INTO `jiaose_auth` VALUES ('1', '78');
INSERT INTO `jiaose_auth` VALUES ('1', '79');
INSERT INTO `jiaose_auth` VALUES ('1', '80');
INSERT INTO `jiaose_auth` VALUES ('1', '81');
INSERT INTO `jiaose_auth` VALUES ('1', '82');
INSERT INTO `jiaose_auth` VALUES ('2', '82');

-- ----------------------------
-- Table structure for rank
-- ----------------------------
DROP TABLE IF EXISTS `rank`;
CREATE TABLE `rank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `tid` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` int(10) NOT NULL,
  `dclick` int(10) NOT NULL,
  `mclick` int(10) NOT NULL,
  `wclick` int(10) NOT NULL,
  `click` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rank
-- ----------------------------
INSERT INTO `rank` VALUES ('1', '1', '2', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358358.png', '1', '122', '14', '180', '50', '6');
INSERT INTO `rank` VALUES ('2', '2', '6', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358046.png', '1', '122', '14', '180', '50', '23');
INSERT INTO `rank` VALUES ('3', '3', '1', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496920270.gif', '1', '12', '145424', '1805435', '505355', '4');
INSERT INTO `rank` VALUES ('4', '4', '6', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498277289663.png', '1', '122', '14', '180', '50', '423322');
INSERT INTO `rank` VALUES ('5', '5', '1', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496740174237.jpg', '2', '122', '14535', '1805345', '50', '712');
INSERT INTO `rank` VALUES ('6', '6', '2', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145424', '1805435', '8678', '43343217');
INSERT INTO `rank` VALUES ('7', '7', '6', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358358.png', '1', '122', '145435', '180543', '76', '4335437');
INSERT INTO `rank` VALUES ('8', '8', '6', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358046.png', '1', '122', '145424', '1805435', '4324', '434');
INSERT INTO `rank` VALUES ('9', '9', '6', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496920270.gif', '1', '122', '14535', '1805345', '50', '33773');
INSERT INTO `rank` VALUES ('10', '10', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498277289663.png', '1', '122', '145424', '1805435', '8678', '438');
INSERT INTO `rank` VALUES ('11', '11', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496740174237.jpg', '2', '122', '145435', '180543', '76', '433');
INSERT INTO `rank` VALUES ('12', '12', '1', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145424', '1805435', '4324', '534');
INSERT INTO `rank` VALUES ('13', '13', '4', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358358.png', '1', '122', '145424', '1805435', '8678', '535345');
INSERT INTO `rank` VALUES ('14', '14', '3', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358046.png', '3', '122', '145435', '180543', '76', '535345');
INSERT INTO `rank` VALUES ('15', '16', '3', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498277289663.png', '1', '122', '14535', '1805345', '50', '433354');
INSERT INTO `rank` VALUES ('16', '17', '1', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496740174237.jpg', '2', '122', '145424', '1805435', '8678', '43353');
INSERT INTO `rank` VALUES ('17', '18', '3', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145435', '180543', '76', '43353');
INSERT INTO `rank` VALUES ('18', '19', '2', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496920270.gif', '1', '122', '145424', '1805435', '4324', '4335345');
INSERT INTO `rank` VALUES ('19', '20', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498277289663.png', '1', '122', '145424', '1805435', '4324', '433');
INSERT INTO `rank` VALUES ('20', '21', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145424', '1805435', '8678', '43343215');
INSERT INTO `rank` VALUES ('21', '22', '1', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358358.png', '43', '122', '145435', '180543', '76', '4335435');
INSERT INTO `rank` VALUES ('22', '23', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358046.png', '1', '122', '145424', '1805435', '4324', '433');
INSERT INTO `rank` VALUES ('23', '24', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496920270.gif', '10', '122', '14535', '1805345', '50', '33452');
INSERT INTO `rank` VALUES ('24', '26', '3', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496740174237.jpg', '2', '122', '145435', '180543', '76', '433');
INSERT INTO `rank` VALUES ('25', '27', '2', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145424', '1805435', '4324', '534');
INSERT INTO `rank` VALUES ('26', '29', '2', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498358046.png', '1', '122', '145435', '180543', '76', '535345');
INSERT INTO `rank` VALUES ('27', '31', '5', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1498277289663.png', '1', '122', '14535', '1805345', '50', '433354');
INSERT INTO `rank` VALUES ('28', '32', '4', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496740174237.jpg', '2', '122', '145424', '1805435', '8678', '43353');
INSERT INTO `rank` VALUES ('29', '33', '9', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1493118050122.jpg', '2', '122', '145435', '180543', '76', '43353');
INSERT INTO `rank` VALUES ('30', '34', '10', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/1496920270.gif', '1', '122', '145424', '1805435', '4324', '4335345');
INSERT INTO `rank` VALUES ('31', '46', '8', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/201707220946116454.jpg', '0', '0', '0', '0', '0', '0');
INSERT INTO `rank` VALUES ('32', '47', '4', '喷射黑R第三期既然暑假了那就来发卡牌游戏', '/uploads/image/201707220946116454.jpg', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for tjvideo
-- ----------------------------
DROP TABLE IF EXISTS `tjvideo`;
CREATE TABLE `tjvideo` (
  `vid` int(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tid` int(10) unsigned NOT NULL,
  `img` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `upload_time` int(255) unsigned DEFAULT NULL COMMENT '上传时间',
  `tjstatus` char(1) NOT NULL COMMENT '推荐视频状态(1栏目推荐,2轮播图推荐,3top推荐,4猴子推荐)',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` int(10) unsigned DEFAULT NULL COMMENT '评论数',
  `click` int(10) unsigned DEFAULT NULL COMMENT '点击量',
  `status` int(1) unsigned NOT NULL,
  `desc` varchar(200) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '100',
  `collect` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tjvideo
-- ----------------------------
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '3', '122', '433', '0', 'dfasdfsjadf', '2', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '6', '122', '433', '0', 'dfasdfsjadf', '13', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '4', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '3', '8', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '4', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '9', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '9', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '10', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '3', '11', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '12', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '13', '122', '433', '0', 'dfasdfsjadf', '4', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '14', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '15', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '16', '122', '433', '0', 'dfasdfsjadf', '3', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '2', '17', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '18', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '19', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '2', '20', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '21', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '2', '22', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '4', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '23', '122', '433', '0', 'dfasdfsjadf', '20', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '4', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '24', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '9', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '25', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '26', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '2', '27', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '28', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '29', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '4', '30', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '2', '31', '122', '433', '0', 'dfasdfsjadf', '1', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '32', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '3', '33', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '3', '34', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '35', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '36', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '4', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '3', '37', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '4', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '38', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '9', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '39', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '3', '40', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '3', '41', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '3', '42', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '43', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '3', '44', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '45', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '3', '46', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '47', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '48', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '49', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '3', '50', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '51', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '52', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '53', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '54', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '55', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '118', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '119', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '120', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '121', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '1', '122', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '123', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '124', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '125', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '126', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '127', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '3', '128', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '129', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '130', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '131', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '1', '132', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '133', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '134', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '135', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '136', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '137', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '2', '138', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '139', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '140', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '141', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '4', '/uploads/image/1498386915.gif', '1', '1', '1', '142', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '143', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '144', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '10', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '145', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '146', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '147', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '148', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '149', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '5', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '150', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '151', '122', '433', '0', 'dfasdfsjadf', '3', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '152', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '153', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '11', '/uploads/image/1498386915.gif', '1', '1', '1', '154', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '11', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '155', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '11', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '156', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '11', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '157', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '11', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '158', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '11', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '159', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '11', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '160', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '11', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '161', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '12', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '162', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '12', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '163', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '12', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '164', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '12', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '165', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '12', '/uploads/image/1498386915.gif', '1', '1', '1', '166', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '11', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '167', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '11', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '168', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '11', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '169', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '11', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '170', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '11', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '171', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '11', '/uploads/image/1498386915.gif', '1', '1', '1', '172', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '11', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '173', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '11', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '174', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '12', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '175', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '12', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '176', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '12', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '177', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '12', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '178', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '12', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '179', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '12', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '180', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '12', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '181', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '12', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '182', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '12', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '183', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('1', '1', 'youxi', '12', '/uploads/image/1498386915.gif', '1', '1', '1', '184', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '12', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '185', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '12', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '186', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '12', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '187', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '12', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '188', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '12', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '189', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '10', '/uploads/image/1498358358.png', '工作', '1499432555', '3', '190', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '13', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '191', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '13', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '3', '192', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '13', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '193', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '13', '/uploads/image/1498277289663.png', '游戏', '1493332555', '3', '194', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '13', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '3', '195', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '13', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '3', '196', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '13', '/uploads/image/1498358358.png', '工作', '1499432555', '3', '197', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '13', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '198', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '13', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '3', '199', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '13', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '200', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '13', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '201', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '13', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '202', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '12', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '203', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '14', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '204', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '14', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '205', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '14', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '206', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '14', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '207', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '14', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '208', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '14', '/uploads/image/1498358358.png', '工作', '1499432555', '3', '209', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '14', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '210', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '14', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '211', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '14', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '212', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '14', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '213', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '14', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '214', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '14', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '215', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '14', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '216', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '15', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '217', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '15', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '218', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '15', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '219', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '15', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '220', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '15', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '221', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '15', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '222', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '15', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '223', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '15', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '224', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '15', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '225', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '1', 'donghua', '15', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '4', '226', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('7', '1', 'youxi', '15', '/uploads/image/1498358358.png', '工作', '1499432555', '1', '227', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('8', '1', 'donghua', '15', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '1', '228', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('9', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '15', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '1', '229', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('10', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '15', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '230', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('4', '1', 'Steam国区销量月榜（2017年6月）夏促成绩单', '15', '/uploads/image/1498277289663.png', '游戏', '1493332555', '1', '231', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('5', '2', '【游戏CG混剪】——战争，永不改变', '15', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '1', '232', '122', '433', '0', 'dfasdfsjadf', '100', '0');
INSERT INTO `tjvideo` VALUES ('6', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '14', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '233', '122', '433', '0', 'dfasdfsjadf', '100', '0');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(10) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `path` varchar(200) NOT NULL DEFAULT '' COMMENT '路径(1,2,3,4)',
  `timg` varchar(255) NOT NULL,
  `order` int(5) NOT NULL COMMENT '排序',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '动画', '0', '0-', '/uploads/image/1498358358.png', '1');
INSERT INTO `type` VALUES ('2', '音乐', '0', '0-', '/uploads/image/monkey.png', '45');
INSERT INTO `type` VALUES ('3', '游戏', '0', '0-', '/uploads/image/youxi.gif', '0');
INSERT INTO `type` VALUES ('4', '新产动画', '1', '0-1-', '/uploads/image/banana.gif', '1');
INSERT INTO `type` VALUES ('5', '二次元', '1', '0-1', '/uploads/image/201707122303446543.jpg', '1');
INSERT INTO `type` VALUES ('6', '科技 ', '0', '0-', '/uploads/image/monkey.png', '18');
INSERT INTO `type` VALUES ('8', '舞蹈', '0', '0-', '/uploads/image/banana.gif', '32');
INSERT INTO `type` VALUES ('9', '教程', '6', '0-6-', '/uploads/image/monkey.png', '2');
INSERT INTO `type` VALUES ('10', '汽车', '6', '0-6-', '/uploads/image/youxi.gif', '4');
INSERT INTO `type` VALUES ('11', '翻唱', '2', '0-2-', '/uploads/image/banana.gif', '1');
INSERT INTO `type` VALUES ('12', '手游', '3', '0-3-', '/uploads/image/1498358358.png', '1');
INSERT INTO `type` VALUES ('13', '网游', '3', '0-3-', '/uploads/image/monkey.png', '1');
INSERT INTO `type` VALUES ('14', 'NBA', '7', '0-7-', '/uploads/image/youxi.gif', '1');
INSERT INTO `type` VALUES ('15', '拉丁', '8', '0-8-', '/uploads/image/youxi.gif', '1');
INSERT INTO `type` VALUES ('16', '欧冠', '7', '', '/uploads/image/201707121930368154.gif', '0');
INSERT INTO `type` VALUES ('18', '海贼王', '3', '', '/uploads/image/201707122006063646.jpg', '0');
INSERT INTO `type` VALUES ('20', '晶华', '6', '', '/uploads/image/201707122110415912.jpg', '3');
INSERT INTO `type` VALUES ('21', 'rap', '2', '', '/uploads/image/201707231747562857.jpg', '1');
INSERT INTO `type` VALUES ('22', 'sad', '2', '', '//201707231938378297.jpg', '1');
INSERT INTO `type` VALUES ('23', 'yghj', '0', '', '/uploads/image/201707241714406639.jpg', '1');

-- ----------------------------
-- Table structure for url
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL COMMENT '链接地址',
  `name` varchar(50) NOT NULL COMMENT '链接名称',
  `img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '推荐状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url
-- ----------------------------
INSERT INTO `url` VALUES ('1', 'www.baidu.com', '百度', 'uploads/urllogo/FJASDdk02c1500883703.jpg', '0');
INSERT INTO `url` VALUES ('2', 'www.sina.com', '新浪', '/uploads/urllogo/4XQ92cA5aL1500018816.jpg', '1');
INSERT INTO `url` VALUES ('3', 'www.douyu.com', '斗鱼', '/uploads/urllogo/wN3HScp4p81500018828.jpg', '0');
INSERT INTO `url` VALUES ('4', 'www.163.com', '网易', '/uploads/urllogo/iLTHNSGefJ1500018841.jpg', '0');
INSERT INTO `url` VALUES ('5', 'www.youku.com', '优酷', '/uploads/urllogo/G1e8ut0S311500018862.jpg', '1');
INSERT INTO `url` VALUES ('7', 'www.56.com', '我乐', '/uploads/urllogo/ZhgxjQJ9481500018919.jpg', '0');
INSERT INTO `url` VALUES ('8', 'www.iqiyi.com', '爱奇艺', '/uploads/urllogo/2unlAcb64n1500018934.jpg', '1');
INSERT INTO `url` VALUES ('9', 'v.qq.com', '腾讯', '/uploads/urllogo/inbHmvqHyN1500023156.jpg', '0');
INSERT INTO `url` VALUES ('11', 'tv.sohu.com', '搜狐视频', 'uploads/urllogo/clT0rBuyPz1500449818.jpg', '1');
INSERT INTO `url` VALUES ('18', 'www.niuAV.com', '牛奔成人电影网站', '/uploads/urllogo/dZJJ3SgUwZ1500467864.jpg', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(18) NOT NULL COMMENT '用户名 唯一',
  `password` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '小白用户' COMMENT '呢称',
  `tel` char(11) DEFAULT '0' COMMENT '电话',
  `score` int(10) DEFAULT '0' COMMENT '积分',
  `regtime` int(11) DEFAULT NULL COMMENT '注册时间 (自动添加)',
  `lastlogtime` int(10) DEFAULT '0',
  `status` char(1) DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('0', '13233', '$2y$10$.KvzQey6Zcbz04ItITmbeel4.guYFDZAb.V74HyX9GUjEU9/Ik2Z2', '官方', '1212', '0', '1499253899', '0', '0');
INSERT INTO `user` VALUES ('1', 'niubens', '12312313', '牛犇', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('2', ' fand', '123', '3213', '0131', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('3', '13233625827', '$2y$10$.KvzQey6Zcbz04ItITmbeel4.guYFDZAb.V74HyX9GUjEU9/Ik2Z2', '梦工厂', '0', '0', '1499253899', '0', '0');
INSERT INTO `user` VALUES ('5', 'qweqwe', 'asdsad3', '3242r32r', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('6', 'aaa', '213123', 'efrv4t4', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('9', 'niu', '123123', '牛大哥', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('10', 'wrdwfr', '23213', 'wewe32e', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('11', 'wefwf', '234234', '43t3t3', '0', '0', '1500466801', '0', '0');
INSERT INTO `user` VALUES ('43', 'nizexing', '$2y$10$b5cg4o5mOErXYGXVUfTIoegJpZGF2CYIFZCjuZvepCN0SozrlhYVy', '帅到掉渣', '12312312312', '0', '1500466801', '0', '1');
INSERT INTO `user` VALUES ('44', 'niuben', '$2y$10$aG.f3uuc6L/o7mRnvckCSu39GXBTf293N5UtobhGwilZSGw7hDklW', '小白用户', '15971975153', '0', '1500513665', '0', '0');
INSERT INTO `user` VALUES ('58', 'yyy', '$2y$10$h7Yaeq1ioU71eZzIwXWLpujHHW8eMhEwARS.pF1RD1YSUZdb9UfwK', '小白用户', '13245677654', '0', '1500639017', '0', '0');
INSERT INTO `user` VALUES ('59', 'rrr', '$2y$10$GOCcQ5kmjme9fPx8KeIq.u3RxUqesFxIHUZrT441d88SfL70uVTFG', '小白用户', '13422456755', '0', '1500639410', '0', '0');
INSERT INTO `user` VALUES ('60', 'nzx52050', '$2y$10$cYFoBwWZsXh2i/Wg.RLr1euQuvUt2GGVXp3VlRq6FXd6RDJCq6RUi', '小白用户', '15886688668', '0', '1500796183', '0', '0');
INSERT INTO `user` VALUES ('62', '12345678', '$2y$10$kFC/mpezCH1R7fnAMcKqjuJ3cS.qxYgSkXd/4alhkPR0Oc7q.9xkW', '小白用户', '18889898989', '0', '1500799222', '0', '0');
INSERT INTO `user` VALUES ('64', 'nwj', '$2y$10$JSKFLGKbERHntdrzLBeOYeHJ8jvQbIFXZ9iUnAnQCDBibgnvQgdda', '小白用户', '18513148867', '0', '1500800702', '0', '0');
INSERT INTO `user` VALUES ('68', 'nnnz', '$2y$10$/a25RtmNLOZrcmjsTSJBa.IQPon/AZxiQDo4QOhY5a868BCHYd2LG', '小白用户', '13000000007', '0', '1500856548', '0', '0');
INSERT INTO `user` VALUES ('69', 'fandong', '$2y$10$3b/jGPTZ8PYEMQXx/bT/8eE81DpVJgQHStkGsxg0Gk0ss4fcMNVyi', '小白用户', '13233625827', '0', '1500874757', '0', '0');
INSERT INTO `user` VALUES ('70', 'aaw', '$2y$10$UNEzwo8/o5KqItmvEZvVl.QoEHlrgj0Tuo0mADxMlVG/F.4970eYG', '小白用户', '13242422424', '0', '1500875063', '0', '0');
INSERT INTO `user` VALUES ('71', 'mmm', '$2y$10$Kcc/c7fya6QkDXPXDprGe.dkI47yl3wQNic2nDfHBeCdmayUUnaMi', '小白用户', '13009090909', '0', '1500875154', '0', '0');

-- ----------------------------
-- Table structure for user_brower
-- ----------------------------
DROP TABLE IF EXISTS `user_brower`;
CREATE TABLE `user_brower` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `vid` int(10) unsigned NOT NULL COMMENT '视频id',
  `looktime` int(10) unsigned NOT NULL COMMENT '浏览内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=419 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_brower
-- ----------------------------
INSERT INTO `user_brower` VALUES ('20', '2', '9', '1500479226');
INSERT INTO `user_brower` VALUES ('21', '2', '9', '1500479247');
INSERT INTO `user_brower` VALUES ('22', '2', '9', '1500479388');
INSERT INTO `user_brower` VALUES ('23', '2', '9', '1500479408');
INSERT INTO `user_brower` VALUES ('24', '2', '9', '1500479479');
INSERT INTO `user_brower` VALUES ('25', '2', '9', '1500479636');
INSERT INTO `user_brower` VALUES ('26', '2', '9', '1500479870');
INSERT INTO `user_brower` VALUES ('27', '2', '9', '1500479921');
INSERT INTO `user_brower` VALUES ('28', '2', '9', '1500480089');
INSERT INTO `user_brower` VALUES ('29', '2', '9', '1500480278');
INSERT INTO `user_brower` VALUES ('30', '2', '9', '1500486008');
INSERT INTO `user_brower` VALUES ('31', '2', '9', '1500486515');
INSERT INTO `user_brower` VALUES ('32', '2', '9', '1500486532');
INSERT INTO `user_brower` VALUES ('33', '44', '9', '1500514310');
INSERT INTO `user_brower` VALUES ('34', '44', '9', '1500514432');
INSERT INTO `user_brower` VALUES ('35', '44', '9', '1500514454');
INSERT INTO `user_brower` VALUES ('36', '44', '9', '1500514977');
INSERT INTO `user_brower` VALUES ('37', '45', '9', '1500515211');
INSERT INTO `user_brower` VALUES ('38', '45', '9', '1500515377');
INSERT INTO `user_brower` VALUES ('39', '45', '9', '1500515412');
INSERT INTO `user_brower` VALUES ('40', '45', '9', '1500515511');
INSERT INTO `user_brower` VALUES ('41', '45', '9', '1500515872');
INSERT INTO `user_brower` VALUES ('42', '45', '9', '1500515913');
INSERT INTO `user_brower` VALUES ('43', '45', '9', '1500515943');
INSERT INTO `user_brower` VALUES ('44', '45', '9', '1500515978');
INSERT INTO `user_brower` VALUES ('45', '45', '9', '1500515993');
INSERT INTO `user_brower` VALUES ('46', '45', '9', '1500516193');
INSERT INTO `user_brower` VALUES ('47', '45', '9', '1500516233');
INSERT INTO `user_brower` VALUES ('48', '45', '9', '1500516450');
INSERT INTO `user_brower` VALUES ('49', '45', '9', '1500516475');
INSERT INTO `user_brower` VALUES ('50', '45', '9', '1500516625');
INSERT INTO `user_brower` VALUES ('51', '45', '9', '1500516742');
INSERT INTO `user_brower` VALUES ('52', '45', '9', '1500516918');
INSERT INTO `user_brower` VALUES ('53', '45', '9', '1500519571');
INSERT INTO `user_brower` VALUES ('54', '45', '9', '1500520297');
INSERT INTO `user_brower` VALUES ('55', '45', '9', '1500520429');
INSERT INTO `user_brower` VALUES ('56', '45', '9', '1500520636');
INSERT INTO `user_brower` VALUES ('57', '45', '9', '1500520659');
INSERT INTO `user_brower` VALUES ('58', '45', '9', '1500520712');
INSERT INTO `user_brower` VALUES ('59', '45', '9', '1500520734');
INSERT INTO `user_brower` VALUES ('326', '60', '9', '1500796232');
INSERT INTO `user_brower` VALUES ('327', '60', '9', '1500796306');
INSERT INTO `user_brower` VALUES ('328', '62', '9', '1500799290');
INSERT INTO `user_brower` VALUES ('329', '64', '9', '1500803047');
INSERT INTO `user_brower` VALUES ('330', '64', '4', '1500803446');
INSERT INTO `user_brower` VALUES ('349', '64', '4', '1500810182');
INSERT INTO `user_brower` VALUES ('411', '69', '1', '1500883263');

-- ----------------------------
-- Table structure for user_detail
-- ----------------------------
DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE `user_detail` (
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `photo` varchar(255) DEFAULT '/uploads/image/211338010csan7q5.jpg' COMMENT '头像',
  `sign` varchar(255) DEFAULT NULL COMMENT '个人签名',
  `sex` enum('x','w','m') DEFAULT 'x' COMMENT '性别',
  `realname` varchar(32) DEFAULT NULL,
  `vip` int(1) unsigned DEFAULT NULL COMMENT '1普通用户  2vip',
  `birth` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `age` int(3) unsigned DEFAULT '0' COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_detail
-- ----------------------------
INSERT INTO `user_detail` VALUES ('0', '/uploads/image/211338010csan7q5.jpg', 'aabbsgff', 'w', 'xxoo', '0', '0', '南京', 'asdsa', '42');
INSERT INTO `user_detail` VALUES ('1', '/uploads/image/45211500466801.jpg', '江湖离我们并不远', 'x', 'qweqwe', '1', null, null, null, '34');
INSERT INTO `user_detail` VALUES ('2', '/uploads/image/211338010csan7q5.jpg', 'yrethreht', 'x', null, null, null, null, null, '45');
INSERT INTO `user_detail` VALUES ('3', '/uploads/image/211338010csan7q5.jpg', 'aabbsgff', 'w', 'xxoo', '0', '1499253899', '南京', '', '42');
INSERT INTO `user_detail` VALUES ('5', '/uploads/image/211338010csan7q5.jpg', '131233123', 'x', null, null, null, null, null, '65');
INSERT INTO `user_detail` VALUES ('9', '/uploads/image/45211500466801.jpg', 'sadasdasd', 'w', null, null, '1970', null, 'nzx52050@126.com', '11');
INSERT INTO `user_detail` VALUES ('43', '/uploads/image/201707241721352389.jpg', 'aaaaaaaaaaaaaaaa', 'm', '帅到掉渣', null, '151430400', '北京-宣武区', 'nzx52050@126.com', '12');
INSERT INTO `user_detail` VALUES ('44', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '32');
INSERT INTO `user_detail` VALUES ('58', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '23');
INSERT INTO `user_detail` VALUES ('59', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '44');
INSERT INTO `user_detail` VALUES ('60', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '65');
INSERT INTO `user_detail` VALUES ('62', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '10');
INSERT INTO `user_detail` VALUES ('64', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '20');
INSERT INTO `user_detail` VALUES ('68', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, 'nzx52050@126.com', '0');
INSERT INTO `user_detail` VALUES ('69', '/uploads/image/211338010csan7q5.jpg', '1222132321', 'w', 'fadfdsfsda', null, null, '不公开-不公开', 'dsafds', '12');
INSERT INTO `user_detail` VALUES ('70', '/uploads/image/211338010csan7q5.jpg', null, 'x', null, null, null, null, null, '0');
INSERT INTO `user_detail` VALUES ('71', '/uploads/image/201707241347599965.jpg', null, 'x', null, null, null, null, null, '0');

-- ----------------------------
-- Table structure for user_store
-- ----------------------------
DROP TABLE IF EXISTS `user_store`;
CREATE TABLE `user_store` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `vid` int(10) unsigned NOT NULL,
  `storetime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_store
-- ----------------------------
INSERT INTO `user_store` VALUES ('41', '60', '9', '1500796248');
INSERT INTO `user_store` VALUES ('42', '62', '9', '1500799317');

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `vid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tid` int(10) unsigned NOT NULL,
  `img` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `upload_time` int(10) unsigned DEFAULT NULL COMMENT '上传时间',
  `status` char(1) NOT NULL COMMENT '视频状态(1审核中,2审核通过,3冻结,4为推荐)',
  `comment` int(10) DEFAULT '0' COMMENT '评论数',
  `click` int(10) DEFAULT NULL COMMENT '点击量',
  `collect` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '9', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '14', '1');
INSERT INTO `video` VALUES ('2', '1', 'youxi', '1', '/uploads/image/1498358358.png', '工作', '1499432555', '3', '122', '1', '0');
INSERT INTO `video` VALUES ('3', '1', 'donghua', '4', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '2', '122', '23', '0');
INSERT INTO `video` VALUES ('4', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '1', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '5', '0');
INSERT INTO `video` VALUES ('5', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423323', '0');
INSERT INTO `video` VALUES ('6', '2', '【游戏CG混剪】——战争，永不改变', '10', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '676', '0');
INSERT INTO `video` VALUES ('7', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '2', '122', '43343223', '1');
INSERT INTO `video` VALUES ('8', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335436', '0');
INSERT INTO `video` VALUES ('9', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '457', '3');
INSERT INTO `video` VALUES ('10', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33456', '1');
INSERT INTO `video` VALUES ('11', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '10', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('12', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('13', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '1', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '2', '122', '534', '0');
INSERT INTO `video` VALUES ('14', '1', 'youxi', '2', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('15', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('16', '1', 'youxi', '1', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('17', '1', 'donghua', '4', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('18', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '9', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('19', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423321', '0');
INSERT INTO `video` VALUES ('20', '2', '【游戏CG混剪】——战争，永不改变', '10', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('21', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('22', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335435', '0');
INSERT INTO `video` VALUES ('23', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '433', '0');
INSERT INTO `video` VALUES ('24', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '10', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33452', '0');
INSERT INTO `video` VALUES ('25', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '2', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('26', '2', '【游戏CG混剪】——战争，永不改变', '9', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('27', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '534', '0');
INSERT INTO `video` VALUES ('28', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('29', '1', 'donghua', '2', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('30', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('31', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('32', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '9', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('33', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423321', '0');
INSERT INTO `video` VALUES ('34', '2', '【游戏CG混剪】——战争，永不改变', '10', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('35', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('36', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335435', '0');
INSERT INTO `video` VALUES ('37', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '433', '0');
INSERT INTO `video` VALUES ('38', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '3', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33452', '0');
INSERT INTO `video` VALUES ('39', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '2', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('40', '2', '【游戏CG混剪】——战争，永不改变', '3', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('41', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '534', '0');
INSERT INTO `video` VALUES ('42', '1', 'youxi', '2', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('43', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('44', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('45', '1', 'donghua', '4', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('46', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '2', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('47', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423322', '0');
INSERT INTO `video` VALUES ('48', '2', '【游戏CG混剪】——战争，永不改变', '1', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('49', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('50', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335435', '0');
INSERT INTO `video` VALUES ('51', '1', 'donghua', '1', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '433', '0');
INSERT INTO `video` VALUES ('52', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '1', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33452', '0');
INSERT INTO `video` VALUES ('53', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '3', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('54', '2', '【游戏CG混剪】——战争，永不改变', '2', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('55', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '3', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '534', '0');
INSERT INTO `video` VALUES ('56', '1', 'donghua', '2', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('57', '1', 'youxi', '3', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('58', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('59', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '2', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('60', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '3', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423321', '0');
INSERT INTO `video` VALUES ('61', '2', '【游戏CG混剪】——战争，永不改变', '1', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('62', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('63', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335435', '0');
INSERT INTO `video` VALUES ('64', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '433', '0');
INSERT INTO `video` VALUES ('65', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '2', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33452', '0');
INSERT INTO `video` VALUES ('66', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '2', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('67', '2', '【游戏CG混剪】——战争，永不改变', '3', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('68', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '2', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '534', '0');
INSERT INTO `video` VALUES ('69', '1', 'youxi', '8', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('70', '1', 'donghua', '3', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('71', '1', 'youxi', '8', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('72', '1', 'donghua', '4', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('73', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '8', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('74', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '1', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423321', '0');
INSERT INTO `video` VALUES ('75', '2', '【游戏CG混剪】——战争，永不改变', '10', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('76', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '8', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('77', '1', 'youxi', '5', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '4335435', '0');
INSERT INTO `video` VALUES ('78', '1', 'donghua', '1', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '433', '0');
INSERT INTO `video` VALUES ('79', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '8', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '122', '33452', '0');
INSERT INTO `video` VALUES ('80', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '8', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('81', '2', '【游戏CG混剪】——战争，永不改变', '1', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('82', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '8', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '534', '0');
INSERT INTO `video` VALUES ('83', '1', 'youxi', '4', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '433', '0');
INSERT INTO `video` VALUES ('84', '1', 'donghua', '9', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('85', '1', 'donghua', '8', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '535345', '0');
INSERT INTO `video` VALUES ('86', '1', 'youxi', '1', '/uploads/image/1498358358.png', '工作', '1499432555', '2', '122', '1', '0');
INSERT INTO `video` VALUES ('87', '1', 'donghua', '1', '/uploads/image/1498358046.png', '鬼畜', '1499432555', '3', '122', '23', '0');
INSERT INTO `video` VALUES ('88', '1', '广东外语外贸大学公开学院学生CSGO官匹5黑作弊视角20170705', '8', '/uploads/image/1496920270.gif', 'fdsf', '1499432311', '2', '12', '4', '0');
INSERT INTO `video` VALUES ('89', '1', 'Steam国区销量月榜（2017年6月）夏促成绩', '5', '/uploads/image/1498277289663.png', '游戏', '1493332555', '2', '122', '423321', '0');
INSERT INTO `video` VALUES ('90', '2', '【游戏CG混剪】——战争，永不改变', '8', '/uploads/image/1496740174237.jpg', '游戏', '1499478555', '2', '122', '675', '0');
INSERT INTO `video` VALUES ('91', '2', '『喷射黑R』第三期 既然暑假了，那就来发卡牌游戏吧', '4', '/uploads/image/1493118050122.jpg', '暗黑系', '1495632555', '1', '122', '43343215', '0');
INSERT INTO `video` VALUES ('92', '43', '虎皮', '11', '/uploads/image/201707240200285929.jpg', '虎-皮', '1500832902', '1', '0', '0', '0');
INSERT INTO `video` VALUES ('95', '43', '3424', '21', '/uploads/image/201707240205481178.jpg', 'rwqerwq', '1500833313', '1', '0', '2', '0');

-- ----------------------------
-- Table structure for video_detail
-- ----------------------------
DROP TABLE IF EXISTS `video_detail`;
CREATE TABLE `video_detail` (
  `vid` int(10) NOT NULL,
  `video` varchar(255) NOT NULL,
  `attension` int(10) unsigned DEFAULT '0' COMMENT '关注度',
  `collect` int(10) unsigned DEFAULT '0',
  `ptime` int(10) unsigned DEFAULT NULL COMMENT '发布时间(审核自动添加)',
  `dclick` int(10) unsigned DEFAULT '0',
  `mclick` int(10) unsigned DEFAULT '0',
  `wclick` int(10) unsigned DEFAULT '0',
  `download` int(10) unsigned DEFAULT '0',
  `desc` varchar(200) DEFAULT NULL COMMENT '描述神情',
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_detail
-- ----------------------------
INSERT INTO `video_detail` VALUES ('1', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332555', '14', '180', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('2', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '14', '180', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('3', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332555', '145424', '1805435', '505355', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('4', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232555', '14', '180', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('5', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332375', '14535', '1805345', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('6', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('7', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('8', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('9', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332375', '14535', '1805345', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('10', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('11', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('12', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('13', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('14', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('15', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('16', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332375', '14535', '1805345', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('17', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('18', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('19', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('20', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('21', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('22', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('23', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('24', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332375', '14535', '1805345', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('26', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('27', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('28', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('29', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('30', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('31', '/uploads/video/201707140036021693.mp4', '1111100', '100', '1493332375', '14535', '1805345', '50', '1', 'werqwer');
INSERT INTO `video_detail` VALUES ('32', '/uploads/video/201707140036021693.mp4', '1100321', '100312', '1493332555', '145424', '1805435', '8678', '111', 'werqwer');
INSERT INTO `video_detail` VALUES ('33', '/uploads/video/201707140036021693.mp4', '111323200', '100', '1499232345', '145435', '180543', '76', '14535', 'werqwer');
INSERT INTO `video_detail` VALUES ('34', '/uploads/video/201707140036021693.mp4', '1104320321', '100312', '1493332111', '145424', '1805435', '4324', '154657', 'werqwer');
INSERT INTO `video_detail` VALUES ('46', '/uploads/video/201707220946262246.mp4', '0', '0', null, '0', '0', '0', '0', 'fdsafsadfs');
INSERT INTO `video_detail` VALUES ('47', '/uploads/video/201707220946262246.mp4', '0', '0', null, '0', '0', '0', '0', 'fdsafsadfsrasf');
INSERT INTO `video_detail` VALUES ('92', '/uploads/video/201707240201033552.mp4', '0', '0', null, '0', '0', '0', '0', '虎皮gh');
INSERT INTO `video_detail` VALUES ('95', '/uploads/video/201707240206042706.mp4', '0', '0', null, '0', '0', '0', '0', '热武器rwrewr');
