-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-06-07 05:20:34
-- 服务器版本： 5.6.43-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ys01_ryan_com`
--

-- --------------------------------------------------------

--
-- 表的结构 `ap_adduser`
--

CREATE TABLE `ap_adduser` (
  `uid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `time` char(10) DEFAULT NULL,
  `lasttime` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_advert`
--

CREATE TABLE `ap_advert` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `id` int(1) NOT NULL,
  `content` text,
  `Type` text NOT NULL,
  `Mark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_advert`
--

INSERT INTO `ap_advert` (`user_id`, `id`, `content`, `Type`, `Mark`) VALUES
(1, 1, '1', '', 'app_working_mode'),
(1, 2, '1', '', 'down'),
(1, 3, '100', '', 'pass'),
(1, 4, '888', '', 'sign'),
(1, 5, '888', '', '试用时间 / 注册赠送'),
(1, 6, '1', '', 'deviceId'),
(1, 7, '0', '', 'vip_movies_theme'),
(1, 8, '', '', '解析接口 一 （ 默认调用 ）'),
(1, 9, '', '', '解析接口 二'),
(1, 10, '', '', '解析接口 三'),
(1, 11, '', '', '解析接口  四'),
(1, 12, '', '', '解析接口  五'),
(1, 13, '', '', '解析接口  六'),
(1, 14, '', '', '解析接口  七'),
(1, 15, '', '', '解析接口 八'),
(1, 16, '', '', '解析接口 九'),
(1, 17, NULL, '', ''),
(1, 20, '000000', '', 'default_password'),
(1, 21, '完美网服 - PNS', '', 'app_name'),
(1, 22, '', '', 'app_ios_down'),
(1, 23, '', '', 'app_android_down'),
(1, 24, '', '', 'app_android_apk_down'),
(1, 28, 'PNS', '', 'kami_prefix'),
(1, 29, '9', '', 'kami_length'),
(1, 30, '', '', 'domain_name'),
(1, 31, '', '', 'app_index_content'),
(1, 32, '', '', 'app_index_img'),
(1, 33, '', '', 'wap_index_img'),
(1, 34, '888', '', 'Invitation_points'),
(1, 35, NULL, '', ''),
(1, 36, NULL, '', ''),
(1, 37, NULL, '', ''),
(1, 38, NULL, '', ''),
(1, 39, NULL, '', ''),
(1, 40, '', '', 'app_share_help'),
(1, 41, '', '', 'app_Invitation_slogans'),
(1, 42, '8888', '', 'app_secret_key'),
(1, 43, '', '', ''),
(1, 44, '', '', 'agency_notice'),
(1, 45, '888', '', 'index_video_num'),
(1, 46, '888', '', 'look_record_num'),
(1, 47, '', '', 'AppId'),
(1, 48, '', '', 'Key'),
(1, 80, '', '', 'upload_headimg_integral'),
(1, 81, '', '', 'set_nickname_integral'),
(1, 82, '', '', 'upload_alipay_code_integral'),
(1, 83, '888', '', 'wechat_login_code_integral'),
(1, 90, '1', '', 'agent_upgrade_commission'),
(1, 91, '1', '', 'agent_upgrade_to_send_members'),
(1, 92, '888', '', 'agent_upgrade_time'),
(1, 93, '', '', 'agent_introduction_picture'),
(1, 110, '1', '', 'wechat_login_device_judgment'),
(1, 111, '', '', 'agent_upgrade_tips'),
(1, 112, '1', '', 'touping_switch'),
(1, 113, '', '', 'touping_picture'),
(1, 114, '', '', 'Ryan_logo'),
(1, 115, '', '', 'Ryan_login_picture'),
(1, 116, '1', '', 'Invitation_mode'),
(1, 117, '', '', 'Invitation_Domain_separation'),
(1, 118, '', '', 'Invitation_Key_separation'),
(1, 119, NULL, '', 'imgapi_Token'),
(1, 120, '0', '', 'Picture_upload_API'),
(1, 121, '', '', 'tencent_x5'),
(1, 125, '完美网服 微信 gox718', '1', ''),
(1, 126, '1', '2', ''),
(1, 130, '0', '2', 'ranking_agent_ad'),
(1, 150, '0.0.0', '', 'Android_Updated_version'),
(1, 151, '', '', 'Android_Updated_content'),
(1, 152, '0.0.0', '', 'Ios_Updated_version'),
(1, 153, '1.精简文件；2.收款码改为支付宝账户填写；3.新增图片上传大小限制（后台调整）；4.快捷登录用户禁止修改头像；5.调整部分页面UI；6.腾讯X5调用自定义；7.APP版本更新控制由云改为本地后台', '', 'Ios_Updated_content'),
(1, 154, '0', '', 'Android_Updated_switch'),
(1, 155, '0', '', 'Ios_Updated_switch'),
(1, 170, '50000', '', 'Upload_Picture_Size'),
(1, 171, '0', '', 'Activation_Code_Limitation'),
(1, 172, '1', '', 'Vip_Voice_cues'),
(1, 173, '1', '', 'Is_Quick_login'),
(1, 174, NULL, '', 'vip_movies_theme_top'),
(1, 175, NULL, '', 'vip_movies_theme_foot'),
(1, 176, 'http://i2.tiimg.com/674035/09152a6c51da72de.png', '', 'share_Poster_template_one'),
(1, 177, 'http://i2.tiimg.com/674035/11b7f23e9f6b0e76.png', '', 'share_Poster_template_two'),
(1, 178, 'http://i1.fuimg.com/674035/12c732eaef4da321.jpg', '', 'share_Poster_template_three'),
(1, 208, '', '', '解析接口 一'),
(1, 209, '', '', '解析接口 二'),
(1, 210, '', '', '解析接口 三'),
(1, 211, '', '', '解析接口 四'),
(1, 212, '', '', '解析接口 五'),
(1, 213, '', '', '解析接口 六'),
(1, 214, '', '', '解析接口 七'),
(1, 215, '', '', '解析接口 八'),
(1, 216, '', '', '解析接口 九');

-- --------------------------------------------------------

--
-- 表的结构 `ap_app`
--

CREATE TABLE `ap_app` (
  `id` int(1) NOT NULL DEFAULT '0',
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_app`
--

INSERT INTO `ap_app` (`id`, `content`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- 表的结构 `ap_artical`
--

CREATE TABLE `ap_artical` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `url` tinytext NOT NULL,
  `sort` int(11) NOT NULL,
  `picture` tinytext NOT NULL,
  `eject` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0N 1Y',
  `time` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0公告  1最新消息  3小编推荐'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_banner`
--

CREATE TABLE `ap_banner` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `del` int(11) DEFAULT '1',
  `audit` int(11) NOT NULL DEFAULT '0' COMMENT '0N 1Y 2S 3J'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_category`
--

CREATE TABLE `ap_category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL COMMENT '类名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_category`
--

INSERT INTO `ap_category` (`id`, `cname`) VALUES
(1, '首页 - 轮播图'),
(2, '全网影视'),
(3, '首页 - 中部横幅'),
(4, '首页 - 2列广告位'),
(8, '首页 - 右上角'),
(9, '分类 - 左侧文字'),
(10, '分类 - 顶部图片'),
(11, '分类 - 推荐'),
(12, '分类 - 文字链接'),
(13, '分类 - 横幅'),
(15, '推荐页 - 顶部图标'),
(16, '推荐页 - BANNER'),
(17, '推荐页 - 中部滚动'),
(18, '推荐页 - 横幅大图'),
(19, '推荐页 - 横幅小图'),
(20, '推荐页 - 文字广告\r\n'),
(21, '解析播放页 - 文字广告\r\n'),
(22, '解析播放页 - BANNER\r\n'),
(23, '解析播放页 - 小图\n');

-- --------------------------------------------------------

--
-- 表的结构 `ap_count`
--

CREATE TABLE `ap_count` (
  `day` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_dianka`
--

CREATE TABLE `ap_dianka` (
  `id` int(11) NOT NULL COMMENT '编号',
  `dianka` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL COMMENT '谁生成的',
  `ctime` int(11) NOT NULL COMMENT '生成时间',
  `y` int(1) NOT NULL COMMENT '0待激活 1已使用',
  `yid` int(1) DEFAULT NULL COMMENT '谁用的',
  `time` int(11) NOT NULL COMMENT '添加会员时间',
  `type` int(1) NOT NULL COMMENT '0普通 1永久',
  `name` varchar(255) NOT NULL,
  `stime` int(11) DEFAULT NULL COMMENT '使用时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_fxtb`
--

CREATE TABLE `ap_fxtb` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_jilu`
--

CREATE TABLE `ap_jilu` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `ping` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_kai`
--

CREATE TABLE `ap_kai` (
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_login_code`
--

CREATE TABLE `ap_login_code` (
  `uid` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `client_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_mn`
--

CREATE TABLE `ap_mn` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `img` text,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `region` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_moneylog`
--

CREATE TABLE `ap_moneylog` (
  `uid` int(11) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `cid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_option`
--

CREATE TABLE `ap_option` (
  `id` int(11) NOT NULL,
  `daili_price` float NOT NULL,
  `vip1` float DEFAULT NULL COMMENT '七天价格',
  `vip2` float NOT NULL COMMENT '1月价格',
  `vip3` float NOT NULL COMMENT '3月价格',
  `vip4` float NOT NULL COMMENT '6月价格',
  `vip5` float NOT NULL COMMENT '12月价格',
  `vip6` float NOT NULL COMMENT '永久价格',
  `weichat` tinytext NOT NULL,
  `d_vip1` float DEFAULT NULL COMMENT '代理拿货7天',
  `d_vip2` float NOT NULL COMMENT '代理拿货1月',
  `d_vip3` float NOT NULL COMMENT '代理拿货3月',
  `d_vip4` float NOT NULL COMMENT '代理拿货6月',
  `d_vip5` float NOT NULL COMMENT '代理拿货1年',
  `d_vip6` float NOT NULL COMMENT '代理拿货永久价格',
  `pay` varchar(999) NOT NULL COMMENT '用户支付接口',
  `d_pay` varchar(999) NOT NULL COMMENT '代理支付接口',
  `faka_vip1` varchar(255) NOT NULL,
  `faka_vip2` varchar(255) NOT NULL,
  `faka_vip3` varchar(255) NOT NULL,
  `faka_vip4` varchar(255) NOT NULL,
  `faka_vip5` varchar(255) NOT NULL,
  `faka_vip6` varchar(255) NOT NULL,
  `faka_agent` varchar(255) NOT NULL,
  `daili_yue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_option`
--

INSERT INTO `ap_option` (`id`, `daili_price`, `vip1`, `vip2`, `vip3`, `vip4`, `vip5`, `vip6`, `weichat`, `d_vip1`, `d_vip2`, `d_vip3`, `d_vip4`, `d_vip5`, `d_vip6`, `pay`, `d_pay`, `faka_vip1`, `faka_vip2`, `faka_vip3`, `faka_vip4`, `faka_vip5`, `faka_vip6`, `faka_agent`, `daili_yue`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, '完美网服 微信：GOX718', 1, 2, 3, 4, 5, 6, 'pay', 'daili_pay', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ap_pass_log`
--

CREATE TABLE `ap_pass_log` (
  `ip` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `old_pass` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `web` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_pass_log`
--

INSERT INTO `ap_pass_log` (`ip`, `ctime`, `uid`, `old_pass`, `pass`, `aid`, `web`, `id`) VALUES
('192.168.3.103', 1559836812, '1', '7b9e49b79200cb8069dff056cd6aba2b', '0c7540eb7e65b553ec1ba6b20de79608', 1, 0, 47);

-- --------------------------------------------------------

--
-- 表的结构 `ap_pay`
--

CREATE TABLE `ap_pay` (
  `id` int(11) NOT NULL,
  `outtrade` varchar(200) NOT NULL,
  `trade` varchar(200) NOT NULL,
  `type` char(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `trade_status` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `kami` varchar(15) DEFAULT NULL,
  `time` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_rebate`
--

CREATE TABLE `ap_rebate` (
  `id` int(11) NOT NULL,
  `get_id` int(11) NOT NULL COMMENT '获取分成用户ID',
  `give_id` int(11) NOT NULL COMMENT '充值人员ID',
  `money` decimal(11,2) NOT NULL COMMENT '获得分成金额',
  `info` varchar(255) NOT NULL COMMENT '余额说明',
  `time` varchar(255) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_sad`
--

CREATE TABLE `ap_sad` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `title` varchar(225) NOT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_set`
--

CREATE TABLE `ap_set` (
  `id` int(11) NOT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `pay_key` text,
  `appkey` text,
  `appid` text,
  `logo` text NOT NULL,
  `MASTERSECRET` text COMMENT 'GOX718'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_share`
--

CREATE TABLE `ap_share` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_shezi`
--

CREATE TABLE `ap_shezi` (
  `id` int(11) NOT NULL,
  `jbday` int(11) NOT NULL,
  `jbmoney` int(11) NOT NULL,
  `dljba` decimal(11,2) NOT NULL COMMENT '代理一级 ',
  `dljbb` decimal(11,2) NOT NULL COMMENT '代理二级',
  `dljbc` decimal(11,2) NOT NULL COMMENT '代理一级 初级',
  `dljbd` decimal(11,2) NOT NULL COMMENT '代理二级 初级',
  `dljbe` decimal(11,2) NOT NULL,
  `fdljb` int(11) NOT NULL,
  `sharefjb` int(11) NOT NULL,
  `ckfa` decimal(11,2) NOT NULL COMMENT '用户一级',
  `ckfb` decimal(11,2) NOT NULL COMMENT '用户二级',
  `ckfc` decimal(11,2) NOT NULL COMMENT '用户一级 初级',
  `ckfd` decimal(11,2) NOT NULL COMMENT '用户二级 初级',
  `ckfe` decimal(11,2) NOT NULL DEFAULT '1.00',
  `qqkf` varchar(22) NOT NULL,
  `zcjb` int(11) NOT NULL,
  `zcmoney` int(11) NOT NULL,
  `mobi` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `ap_shezi`
--

INSERT INTO `ap_shezi` (`id`, `jbday`, `jbmoney`, `dljba`, `dljbb`, `dljbc`, `dljbd`, `dljbe`, `fdljb`, `sharefjb`, `ckfa`, `ckfb`, `ckfc`, `ckfd`, `ckfe`, `qqkf`, `zcjb`, `zcmoney`, `mobi`) VALUES
(1, 10, 0, '0.50', '0.30', '0.20', '0.10', '0.00', 0, 0, '0.50', '0.30', '0.20', '0.10', '0.00', '', 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `ap_stop`
--

CREATE TABLE `ap_stop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_task`
--

CREATE TABLE `ap_task` (
  `id` int(11) NOT NULL,
  `name` text,
  `total` int(11) DEFAULT NULL,
  `remaind` int(11) DEFAULT '0',
  `distribute` int(11) DEFAULT '0',
  `price` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_task_detail`
--

CREATE TABLE `ap_task_detail` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) DEFAULT '1' COMMENT '1待提交2待审核3通过4驳回',
  `start_time` int(11) NOT NULL,
  `push_time` int(11) NOT NULL,
  `picture` text NOT NULL,
  `audited_time` int(11) DEFAULT NULL,
  `imei` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_timelog`
--

CREATE TABLE `ap_timelog` (
  `uid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `money` decimal(11,2) DEFAULT NULL,
  `day` varchar(11) DEFAULT NULL,
  `lasttime` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_tongji`
--

CREATE TABLE `ap_tongji` (
  `id` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_top`
--

CREATE TABLE `ap_top` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL COMMENT 'UID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `cash` varchar(255) NOT NULL COMMENT '提现总金额',
  `team` varchar(255) NOT NULL COMMENT '团队成员'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_tuijian`
--

CREATE TABLE `ap_tuijian` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_tv`
--

CREATE TABLE `ap_tv` (
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0普通 1专题',
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_tv`
--

INSERT INTO `ap_tv` (`title`, `img`, `url`, `id`, `type`, `content`) VALUES
('犯罪悬疑', '/public/uploads/20190527/496a56fddd5c97f9f101e808e2da8946.png', 'http://tx.hls.huya.com/huyalive/30765679-2480288304-10652757150331305984-2789274538-10057-A-1511757260-1.m3u8', 36, 1, '究竟谁更无情?'),
('神雕侠侣 古天乐', '/public/uploads/20190508/96388bf0a2899317c9495d48e6d3ff0a.jpg', 'http://aldirect.hls.huya.com/huyalive/29359996-2689607114-11551774593718943744-2847687530-10057-A-1525492553-1_1200.m3u8', 42, 1, '最经典的《神雕侠侣》版本，没有之一'),
('赵本山小品系列', '/public/uploads/20190508/e7279be080861ba739f8299af3fea212.jpg', 'http://js.hls.huya.com/huyalive/29106097-2689443426-11551071559112196096-2789253866-10057-A-0-1_1200.m3u8', 43, 1, '众多本山大叔经典小品不容错过！'),
('猫和老鼠', '/public/uploads/20190508/9949484c19e35927925132a5db09a75d.jpg', 'https://aldirect.hls.huya.com/huyalive/94525224-2475824398-10633584820048887808-2847687532-10057-A-0-1_1200.m3u8', 44, 1, '机灵老鼠与笨猫的故事'),
('宝莲灯前传', '/public/uploads/20190508/1ab68a0d9f0c9aa7e372710d8e5f21e6.jpg', 'http://js.hls.huya.com/huyalive/30765679-2525901744-10848665383389364224-2847699200-10057-A-0-1_1200.m3u8', 46, 1, '正当阳光少年，家中却突遭变故，父死，哥死，母亲被关。当至亲至爱在你面前死去、消失，而自己却无能为力。'),
('楚汉传奇', '/public/uploads/20190508/5c7c6e5cd045fa32b7d4edbc51a0ecc5.jpg', 'https://aldirect.hls.huya.com/huyalive/29169025-2686221304-11537232650498473984-2789253854-10057-A-0-1_1200.m3u8', 47, 1, '霸王、虞姬、刘邦、吕后，上演缠绵悱恻的传奇爱情'),
('康熙王朝', '/public/uploads/20190508/fb987b9f7a759e311855f26495878333.jpg', 'https://aldirect.hls.huya.com/huyalive/29141112-2691519968-11559990239090966528-3049003118-10057-A-0-1_1200.m3u8', 51, 1, '清朝初期康熙皇帝充满传奇的一生'),
('康熙微服私访记', '/public/uploads/20190508/2cbdba19e8272214a91a17a1bbd34aea.jpg', 'https://aldirect.hls.huya.com/huyalive/29169025-2686221704-11537234368485392384-2789274536-10057-A-0-1_1200.m3u8', 52, 1, '亲自九下江南'),
('三国演义', '/public/uploads/20190508/0a29ad9f972cd94b66960216622da621.jpg', 'https://aldirect.hls.huya.com/huyalive/29169025-2686221140-11537231946123837440-3049003146-10057-A-0-1_1200.m3u8', 54, 1, '欲显刘备之长厚而似伪，状诸葛之多智而近妖'),
('西游记(86版)', '/public/uploads/20190508/8f3775b29a87af71b943bb5b362e8c27.jpg', 'https://aldirect.hls.huya.com/huyalive/29141112-2689673336-11552059015043219456-3048991588-10057-A-0-1_1200.m3u8', 333, 1, '你挑着担我牵着马'),
('铁齿铜牙纪晓岚', '/public/uploads/20190508/acdd391e3b303fcc0088a06fbff95a17.png', 'http://aldirect.hls.huya.com/huyalive/94525224-2468571348-10602433207502635008-2789253864-10057-A-0-1_1200.m3u8', 444, 1, '百无一用是书生'),
('亮剑 李云龙', '/public/uploads/20190508/3ae3090142e8c941e45a9116603f7fe2.jpg', 'http://aldirect.hls.huya.com/huyalive/30765679-2475713500-10633108516765696000-2789274576-10057-A-0-1_1200.m3u8', 555, 1, '狭路相逢勇者胜'),
('天龙八部', '/public/uploads/20190508/15a5c6efcaf462fc421857426d660254.png', 'https://aldirect.hls.huya.com/huyalive/30765679-2475713428-10633108207528050688-3048991608-10057-A-0-1_1200.m3u8', 666, 1, '江湖儿女的爱恨情仇'),
('香港电影', '/public/uploads/20190508/defa450b6927909554ba767ffe2663d6.png', 'http://aldirect.hls.huya.com/huyalive/29106097-2689453724-11551115788685410304-2847687506-10057-A-1525422901-1_1200.m3u8', 777, 1, '还有多少人记得曾经那些香港电影中的天然美女'),
('倚天屠龙记 苏有朋', '/public/uploads/20190508/f60387ab1c332a13cc7ef9a6f1b450bd.png', 'http://aldirect.hls.huya.com/huyalive/30765679-2523417175-10837994240789708800-2789253884-10057-A-0-1_1200.m3u8', 888, 1, '武林至尊，宝刀屠龙，号令天下，莫敢不从'),
('赌博电影', '/public/uploads/20190526/b1efc5033a723f768cb728bd77156ce5.png', 'http://js.hls.huya.com/huyalive/29106097-2689446042-11551082794746642432-2789253870-10057-A-0-1_1200.m3u8', 1003, 1, '看我发功……'),
('王晶导演', '/public/uploads/20190526/b1e90606aebcab2e58e5647e06f17498.png', 'https://aldirect.hls.huya.com/huyalive/94525224-2579683592-11079656661667807232-2847687574-10057-A-0-1_1200.m3u8', 1005, 1, '到底是不是烂片之王？'),
('徐克导演', '/public/uploads/20190526/83e7b759101545cd614dd6455429a471.png', 'http://tx.hls.huya.com/huyalive/29106097-2689447148-11551087544980471808-2789253872-10057-A-1525420294-1.m3u8', 1006, 1, '徐克的电影里从来不缺少爱情'),
('黄渤', '/public/uploads/20190526/ce30d6cca116a47f0931a35c59b0a4ee.jpg', 'https://aldirect.hls.huya.com/huyalive/30765679-2554414680-10971127511022305280-3048991634-10057-A-0-1_1200.m3u8', 1007, 1, '有颜的人迟早会被更有颜的人替代，而才华与人品，却会让人一路追随'),
('陈小春', '/public/uploads/20190526/8a75d12b8e929beff623901b877f2dc1.jpg', 'http://ws4.streamhls.huya.com/huyalive/30765679-2523417522-10837995731143360512-2777068634-10057-A-0-1_1200/playlist.m3u8', 1011, 1, '影坛扮英雄， 扮混混，电视剧幽默诙谐，搞怪悠长'),
('甄子丹', '/public/uploads/20190526/ffccf270c4e5f021d606de3b34152ded.jpg', 'http://ws4.streamhls.huya.com/huyalive/29169025-2686219938-11537226783573147648-2847699096-10057-A-1524024759-1_1200/playlist.m3u8', 1013, 1, '电影中一贯都是冷酷和面无表情，但是生活中却非常亲切乐观'),
('李连杰', '/public/uploads/20190526/3ad42c0b062b775fdb5ddc1c76689583.jpg', 'http://js.hls.huya.com/huyalive/94525224-2460686093-10568566295157014528-2789253848-10057-A-0-1_1200.m3u8', 1014, 1, '一股完全不同于“李小龙时代”的功夫旋风'),
('刘德华', '/public/uploads/20190526/b5034864c4fa2c53911e77cb2ee91aee.jpg', 'http://aldirect.hls.huya.com/huyalive/94525224-2467341872-10597152648291418112-2789274550-10057-A-0-1_1200.m3u8', 1015, 1, '集坚毅、认真、永不言败等正能量品质于一身，堪称娱乐圈艺人的典范'),
('成龙', '/public/uploads/20190526/348308396c013d9af97d5e55c2d63cab.png', 'http://aldirect.hls.huya.com/huyalive/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1_1200.m3u8', 1016, 1, '在好莱坞向人们展示了中国传统文化中英雄的概念'),
('林正英', '/public/uploads/20190526/616a76d6939f584dfd69e6928bf66f0d.png', 'http://js.hls.huya.com/huyalive/94525224-2460686034-10568566041753944064-2789274542-10057-A-0-1_1200.m3u8', 1018, 1, '僵尸片的开山祖师，给了我们无数的惊喜和欢笑'),
('红色经典-电影轮播', '/public/uploads/20190526/18e46de9ff306d266bb9fe5152920e2d.png', 'https://aldirect.hls.huya.com/huyalive/30765679-2533224718-10880117317228822528-3049003134-10057-A-0-1_1200.m3u8', 1025, 1, '伴随新中国一代又一代人成长的革命题材电影'),
('黑帮大片-电影轮播', '/public/uploads/20190526/e0285d41b8ff9848993d15224560d84d.png', 'https://js.hls.huya.com/huyalive/30765679-2523417522-10837995731143360512-2777068634-10057-A-0-1_1200.m3u8', 1026, 1, '最脍炙人口的黑帮电影'),
('惊悚大片-电影轮播', '/public/uploads/20190526/ee43722e0348cbc8a0a4a73778be9512.jpg', 'https://aldirect.hls.huya.com/huyalive/29106097-2689447600-11551089486305689600-2789274568-10057-A-1525420695-1_1200.m3u8', 1028, 1, '没有最恐怖只有更恐怖'),
('金庸电影-电影轮播', '/public/uploads/20190526/3431e80f0e8c8212973f066bb777da0b.png', 'https://aldirect.hls.huya.com/huyalive/29359996-2689645314-11551938661469650944-2847687586-10057-A-0-1_1200.m3u8', 1030, 1, '80后90后的经典回忆'),
('洪金宝-电影轮播', '/public/uploads/20190526/dd7fc1c52184813f59f90fdcedd57b4a.png', 'https://tx.hls.huya.com/huyalive/29106097-2689406282-11550912026846953472-2789274558-10057-A-0-1_1200.m3u8', 1032, 1, '可能是影坛最灵活的胖子'),
('篮球火-电视剧', '/public/uploads/20190526/8106ee96ca4ec0e058069e29f13d4722.jpg', 'https://aldirect.hls.huya.com/huyalive/30765679-2682197822-11519951926892429312-2847699094-10057-A-0-1_1200.m3u8', 1034, 1, '台湾篮球题材青春偶像剧'),
('家有儿女-电视剧', '/public/uploads/20190526/5be9832039e6f2234e6aaa27c5c238b0.png', 'https://aldirect.hls.huya.com/huyalive/29169025-2686221252-11537232427160174592-2847687508-10057-A-0-1_1200.m3u8', 1037, 1, '父母和三个孩子间的各种有趣故事'),
('济公-电视剧', '/public/uploads/20190526/285625fab3c06fd45e0b58c18ae558a1.png', 'https://aldirect.hls.huya.com/huyalive/29169025-2686221242-11537232384210501632-2847687560-10057-A-0-1_1200.m3u8', 1038, 1, '他鞋儿破 帽儿破 身上的袈裟破'),
('大长今-电视剧', '/public/uploads/20190526/3a27faa2ad736eceb7360a771b4073bd.png', 'https://aldirect.hls.huya.com/huyalive/30765679-2533158964-10879834905949241344-2847687638-10057-A-0-1_1200.m3u8', 1039, 1, '一代奇女子徐长今是如何成为朝鲜王朝历史上首位女性御医'),
('电影轮播', '/public/uploads/20190527/480951e609ce29164c7a028c371407da.png', 'http://aldirect.hls.huya.com/huyalive/94525224-2460686093-10568566295157014528-2789253848-10057-A-0-1.m3u8', 8998, 1, ''),
('战争电影', '/public/uploads/20190527/f0e591dec280865ebc41f8104f74c4d6.png', 'http://tx.hls.huya.com/huyalive/28466698-2689659358-11551998979990355968-2789274580-10057-A-0-1.m3u8', 8999, 1, '告诉你什么是战争'),
('随便看看', '/public/uploads/20190527/1e51f1677d16617263ac414879759b48.png', 'http://aldirect.hls.huya.com/huyalive/28466698-2689659358-11551998979990355968-2789274580-10057-A-0-1_1200.m3u8', 9000, 1, ''),
('搞笑港片-电影轮播', '/public/uploads/20190526/84bfb7fdca2988a744cca6d6217836da.png', 'https://aldirect.hls.huya.com/huyalive/30765679-2480413542-10653295043445522432-3048959596-10057-A-0-1_1200.m3u8', 9992, 1, ''),
('生化危机-电影轮播', '/public/uploads/20190526/663624406136a632ef17e4b7a052eec7.png', 'https://aldirect.hls.huya.com/huyalive/28466698-2689654156-11551976637570482176-2847699186-10057-A-0-1_1200.m3u8', 9993, 1, '用血腥揭示恐怖背后的意义'),
('五福星系列-电影轮播', '/public/uploads/20190526/6b77055e80d027f3dec109edd0036f9e.png', 'https://aldirect.hls.huya.com/huyalive/29169025-2686220040-11537227221659811840-2713685416-10057-A-1524041498-1_1200.m3u8', 9994, 1, '承载了很多经典回忆，最后一部你看过吗'),
('女神系列-电影轮播', '/public/uploads/20190526/6b29af39a08ddadc864e5ce911cb0dba.png', 'https://aldirect.hls.huya.com/huyalive/94525224-2472147404-10617792251071299584-2777026638-10057-A-0-1_1200.m3u8', 9995, 1, '香港电影女神大合集,究竟哪个惊艳到你了'),
('速度与激情', '/public/uploads/20190526/49fbcda8e45218286af3ff52e05d1b13.png', 'http://aldirect.hls.huya.com/huyalive/29169025-2686219962-11537226886652362752-2710080226-10057-A-0-1_1200.m3u8', 9996, 1, '疾驰的跑车、玩命的飞车比赛、鼓动的肌肉、穿紧身裙子的辣妹……'),
('周星驰', '/public/uploads/20190508/bd813b209e9db66f8e411274471af5c2.png', 'http://aldirect.hls.huya.com/huyalive/94525224-2460685313-10568562945082523648-2789274524-10057-A-0-1_1200.m3u8', 9997, 1, '无厘头鼻祖 独乐乐不如众乐乐'),
('科幻电影', '/public/uploads/20190526/8806e7c64a8e33eac839b4366e54215a.png', 'http://aldirect.hls.huya.com/huyalive/28466698-2689656864-11551988268341919744-2847699194-10057-A-0-1_1200.m3u8', 9998, 1, '人类对未来或未知的孜孜探索'),
('漫威电影', '/public/uploads/20190507/1f399f223b010965bcaa673c8b107d79.png', 'http://tx.hls.huya.com/huyalive/30765679-2504742278-10757786168918540288-3049003128-10057-A-0-1.m3u8', 9999, 1, '英雄生死即将揭晓');

-- --------------------------------------------------------

--
-- 表的结构 `ap_txlog`
--

CREATE TABLE `ap_txlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `time` int(22) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `jine` int(11) NOT NULL,
  `zfb` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `weixin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `ap_user`
--

CREATE TABLE `ap_user` (
  `id` int(11) NOT NULL,
  `Source` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL DEFAULT '',
  `power` varchar(255) NOT NULL DEFAULT '0' COMMENT '0管理  1代理  2用户',
  `status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0禁封  1正常',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `logintime` int(11) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00',
  `limit_money` int(11) DEFAULT '0',
  `type` int(1) DEFAULT NULL COMMENT '1永久',
  `phone` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) DEFAULT '0',
  `share_ma` varchar(255) DEFAULT NULL,
  `zfb` text NOT NULL,
  `weichat` varchar(255) DEFAULT NULL,
  `url` text,
  `url1` text,
  `url2` text,
  `url3` text,
  `url4` text,
  `url5` text,
  `url6` text,
  `key` varchar(255) DEFAULT NULL,
  `tx` int(111) NOT NULL,
  `txje` int(111) NOT NULL,
  `qdtime` int(11) DEFAULT NULL,
  `headimgurl` varchar(255) NOT NULL COMMENT '用户头像',
  `banner_number` int(11) NOT NULL DEFAULT '0',
  `banner_switch` int(11) NOT NULL DEFAULT '0' COMMENT '0N 1Y 2S 3J',
  `deviceId` varchar(255) DEFAULT NULL COMMENT '设备ID',
  `player_starttimes` int(11) NOT NULL DEFAULT '1' COMMENT '0N 1Y',
  `zfb_name` text NOT NULL COMMENT '支付宝实名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_user`
--

INSERT INTO `ap_user` (`id`, `Source`, `username`, `password`, `nick_name`, `power`, `status`, `parentid`, `ctime`, `logintime`, `lasttime`, `money`, `limit_money`, `type`, `phone`, `imei`, `count`, `sign`, `share_ma`, `zfb`, `weichat`, `url`, `url1`, `url2`, `url3`, `url4`, `url5`, `url6`, `key`, `tx`, `txje`, `qdtime`, `headimgurl`, `banner_number`, `banner_switch`, `deviceId`, `player_starttimes`, `zfb_name`) VALUES
(1, '超管', 'admin', '0c7540eb7e65b553ec1ba6b20de79608', '完美网服', '0', '1', 1, 1559836812, 1559492915, 1595328591, '0.00', 0, 1, '', '672382B9-4C3E-42A5-B639-AFB89892FE94', 6222, 98283, 'MM0714', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa3556861ba2edc1fd68fb8f65bb7b13', 0, 0, NULL, 'http://i2.tiimg.com/674035/f1ce775b55faddab.jpg', 0, 0, 'Perfect Network Service', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `ap_video`
--

CREATE TABLE `ap_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_zce`
--

CREATE TABLE `ap_zce` (
  `phone` varchar(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_zhibo`
--

CREATE TABLE `ap_zhibo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_advert`
--
ALTER TABLE `ap_advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_app`
--
ALTER TABLE `ap_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_artical`
--
ALTER TABLE `ap_artical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_banner`
--
ALTER TABLE `ap_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_category`
--
ALTER TABLE `ap_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_count`
--
ALTER TABLE `ap_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_dianka`
--
ALTER TABLE `ap_dianka`
  ADD PRIMARY KEY (`id`,`dianka`),
  ADD UNIQUE KEY `dianka` (`dianka`);

--
-- Indexes for table `ap_fxtb`
--
ALTER TABLE `ap_fxtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_jilu`
--
ALTER TABLE `ap_jilu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_kai`
--
ALTER TABLE `ap_kai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_login_code`
--
ALTER TABLE `ap_login_code`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ap_mn`
--
ALTER TABLE `ap_mn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_moneylog`
--
ALTER TABLE `ap_moneylog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_option`
--
ALTER TABLE `ap_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_pass_log`
--
ALTER TABLE `ap_pass_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_pay`
--
ALTER TABLE `ap_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_rebate`
--
ALTER TABLE `ap_rebate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_sad`
--
ALTER TABLE `ap_sad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_set`
--
ALTER TABLE `ap_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_share`
--
ALTER TABLE `ap_share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_shezi`
--
ALTER TABLE `ap_shezi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_stop`
--
ALTER TABLE `ap_stop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_task`
--
ALTER TABLE `ap_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_task_detail`
--
ALTER TABLE `ap_task_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_timelog`
--
ALTER TABLE `ap_timelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_tongji`
--
ALTER TABLE `ap_tongji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_top`
--
ALTER TABLE `ap_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_tv`
--
ALTER TABLE `ap_tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_txlog`
--
ALTER TABLE `ap_txlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_user`
--
ALTER TABLE `ap_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_video`
--
ALTER TABLE `ap_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ap_zce`
--
ALTER TABLE `ap_zce`
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `ap_zhibo`
--
ALTER TABLE `ap_zhibo`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ap_advert`
--
ALTER TABLE `ap_advert`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- 使用表AUTO_INCREMENT `ap_artical`
--
ALTER TABLE `ap_artical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `ap_banner`
--
ALTER TABLE `ap_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- 使用表AUTO_INCREMENT `ap_category`
--
ALTER TABLE `ap_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用表AUTO_INCREMENT `ap_count`
--
ALTER TABLE `ap_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_dianka`
--
ALTER TABLE `ap_dianka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `ap_fxtb`
--
ALTER TABLE `ap_fxtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用表AUTO_INCREMENT `ap_jilu`
--
ALTER TABLE `ap_jilu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_kai`
--
ALTER TABLE `ap_kai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- 使用表AUTO_INCREMENT `ap_mn`
--
ALTER TABLE `ap_mn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- 使用表AUTO_INCREMENT `ap_moneylog`
--
ALTER TABLE `ap_moneylog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- 使用表AUTO_INCREMENT `ap_option`
--
ALTER TABLE `ap_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ap_pass_log`
--
ALTER TABLE `ap_pass_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- 使用表AUTO_INCREMENT `ap_pay`
--
ALTER TABLE `ap_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- 使用表AUTO_INCREMENT `ap_rebate`
--
ALTER TABLE `ap_rebate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- 使用表AUTO_INCREMENT `ap_sad`
--
ALTER TABLE `ap_sad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用表AUTO_INCREMENT `ap_share`
--
ALTER TABLE `ap_share`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用表AUTO_INCREMENT `ap_shezi`
--
ALTER TABLE `ap_shezi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ap_stop`
--
ALTER TABLE `ap_stop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_task`
--
ALTER TABLE `ap_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_task_detail`
--
ALTER TABLE `ap_task_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `ap_timelog`
--
ALTER TABLE `ap_timelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- 使用表AUTO_INCREMENT `ap_tongji`
--
ALTER TABLE `ap_tongji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_tv`
--
ALTER TABLE `ap_tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- 使用表AUTO_INCREMENT `ap_txlog`
--
ALTER TABLE `ap_txlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_user`
--
ALTER TABLE `ap_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- 使用表AUTO_INCREMENT `ap_video`
--
ALTER TABLE `ap_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `ap_zhibo`
--
ALTER TABLE `ap_zhibo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
