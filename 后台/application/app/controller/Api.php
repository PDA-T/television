<?php


namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Db;
use think\Cache;
use app\app\controller\Plugin;
class Api extends Plugin
{
	public function ServerTime()
	{
		$_var_0 = time();
		$_var_1['launchImageAd'] = advert('354');
		$_var_1['launchImageAd_url'] = advert('355');
		$_var_1['launchImageAd_time'] = advert('356') + '1000';
		$_var_1['launchImageAd_skip'] = advert('357');
		$_var_1['launchImageAd_bottom'] = advert('358');
		$_var_1['iqy_play_decide'] = advert('1300');
		$_var_1['tx_play_decide'] = advert('1301');
		$_var_1['yk_play_decide'] = advert('1302');
		$_var_1['sohu_play_decide'] = advert('1303');
		$_var_1['leshi_play_decide'] = advert('1304');
		$_var_1['m1905_play_decide'] = advert('1305');
		$_var_1['mg_play_decide'] = advert('1306');
		$_var_1['migu_play_decide'] = advert('1307');
		$_var_1['pptv_play_decide'] = advert('1308');
		$_var_1['fx_play_decide'] = advert('1309');
		return json(['Code' => '7181107714', 'RyanTime' => $_var_0, 'data' => $_var_1]);
	}
	public function GetServerTime()
	{
		$_var_2 = input('time');
		$_var_3 = time();
		$_var_4 = floor($_var_2 - $_var_3);
		return json(['status' => '1', 'data' => $_var_4]);
	}
	public function GetSkin()
	{
		if (authorization_core_checking(advert('400')) == advert('401')) {
			$_var_5['web'] = advert('400');
		} else {
			$_var_5['web'] = '0';
		}
		if (authorization_core_checking(advert('402')) == advert('403')) {
			$_var_5['jx_play'] = advert('402');
		} else {
			$_var_5['jx_play'] = '0';
		}
		if (authorization_core_checking(advert('410')) == advert('411')) {
			$_var_6['index'] = advert('410');
		} else {
			$_var_6['index'] = '0';
		}
		if (authorization_core_checking(advert('412')) == advert('413')) {
			$_var_6['recommend'] = advert('412');
		} else {
			$_var_6['recommend'] = '0';
		}
		if (authorization_core_checking(advert('414')) == advert('415')) {
			$_var_6['user'] = advert('414');
		} else {
			$_var_6['user'] = '0';
		}
		return json(['status' => '1', 'skin' => $_var_6, 'module' => $_var_5]);
	}
	public function RyanToken()
	{
		$_var_7 = input('key');
		$_var_8 = input('uid');
		$_var_9 = input('time');
		if (ApiSafetyVerification($_var_9, $_var_8, $_var_7) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_9, $_var_8, $_var_7) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_8, $_var_7);
		}
		$_var_10 = RyanToken();
		$_var_11['zero'] = $_var_10[2];
		$_var_11['one'] = $_var_10[1];
		$_var_11['two'] = $_var_10[4];
		$_var_11['eight'] = $_var_10[3];
		$_var_11['nine'] = $_var_10[0];
		$_var_11['nine_two'] = $_var_10[5];
		$_var_11['time_remaining'] = 60 - substr($_var_10, -2);
		return json(['status' => '7181107714', 'RyanTokenDispersed' => $_var_11]);
	}
	public function SingleSignOn()
	{
		$_var_12 = input('uid');
		$_var_13 = input('deviceId');
		if ($_var_12 == 0) {
			return json(['status' => '0', 'data' => '非法请求']);
		} else {
			$_var_14 = db('user')->where('id', $_var_12)->find();
			if (!$_var_14) {
				return json(['status' => '10', 'data' => '非法请求 用户不存在']);
			} else {
				if ($_var_14['imei'] == null) {
					return json(['status' => '9', 'data' => '请求设备' . $_var_13]);
				} else {
					if ($_var_13 == $_var_14['imei']) {
						return json(['status' => '8']);
					} else {
						return json(['status' => '1', 'data' => '登录设备不匹配']);
					}
				}
			}
		}
	}
	public function AccountViolationDetection()
	{
		$_var_15 = input('uid');
		if ($_var_15 == 0) {
			return json(['status' => '0', 'data' => '非法请求']);
		} else {
			$_var_16 = db('user')->where('id', $_var_15)->find();
			if (!$_var_16) {
				return json(['status' => '1', 'data' => 0]);
			} else {
				return json(['status' => '1', 'data' => $_var_16['status']]);
			}
		}
	}
	public function Hello_app()
	{
		$_var_17 = input('key');
		$_var_18 = input('uid');
		$_var_19 = input('time');
		if (ApiSafetyVerification($_var_19, $_var_18, $_var_17) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_19, $_var_18, $_var_17) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_18, $_var_17);
		}
		$_var_20 = db('cdkey_type')->where('uid', 1)->where('type', 1010)->find();
		$_var_21 = db('user')->where('id', 1)->find();
		$_var_22 = db('artical')->where('eject', 1)->find();
		$_var_23['apicloud_app_id'] = advert('47');
		$_var_23['app_name'] = advert('21');
		$_var_23['index_video_num'] = advert('45');
		$_var_23['SingleSignOn'] = advert('82');
		$_var_23['ActivationCodeDetection'] = advert('81');
		$_var_23['offlineState'] = advert('90');
		$_var_23['RePassPriority'] = advert('92');
		$_var_23['DefaultLogo'] = advert('114');
		$_var_23['localDB'] = advert('39');
		$_var_23['integral_consumption_proportion'] = advert('4');
		$_var_23['CDKEY_length'] = advert('29');
		$_var_23['CDKEY_prefix'] = advert('28');
		$_var_23['experience_price'] = advert('1000');
		$_var_23['onemonth_price'] = advert('1001');
		$_var_23['halfayear_price'] = advert('1002');
		$_var_23['oneyear_price'] = advert('1003');
		$_var_23['permanent_price'] = advert('1004');
		$_var_23['agent_gokarul'] = $_var_20['gokaurl'];
		$_var_23['agent_introduction_picture'] = advert('111');
		$_var_23['User_AgentIntroductionBanner'] = advert('115');
		$_var_23['mainFooter'] = advert('93');
		$_var_23['Vip_Voice_cues'] = advert('172');
		$_var_23['jx_Interface_one'] = advert('8');
		$_var_23['jx_Interface_two'] = advert('9');
		$_var_23['jx_Interface_three'] = advert('10');
		$_var_23['jx_Interface_four'] = advert('11');
		$_var_23['jx_Interface_five'] = advert('12');
		$_var_23['Ios_alone_interface_switch'] = advert('1500');
		$_var_23['jx_ios_Interface_one'] = advert('1501');
		$_var_23['jx_ios_Interface_two'] = advert('1502');
		$_var_23['jx_ios_Interface_three'] = advert('1503');
		$_var_23['jx_ios_Interface_four'] = advert('1504');
		$_var_23['jx_ios_Interface_five'] = advert('1505');
		$_var_23['search_api_url'] = advert('113');
		$_var_23['interface_json_one_id'] = advert('13');
		$_var_23['interface_json_one_token'] = advert('14');
		$_var_23['interface_json_two_id'] = advert('15');
		$_var_23['interface_json_two_token'] = advert('16');
		$_var_23['interface_json_opt'] = advert('301');
		$_var_23['interface_type_opt'] = advert('80');
		$_var_23['iqy_play_decide'] = advert('1300');
		$_var_23['tx_play_decide'] = advert('1301');
		$_var_23['yk_play_decide'] = advert('1302');
		$_var_23['sohu_play_decide'] = advert('1303');
		$_var_23['leshi_play_decide'] = advert('1304');
		$_var_23['m1905_play_decide'] = advert('1305');
		$_var_23['mg_play_decide'] = advert('1306');
		$_var_23['migu_play_decide'] = advert('1307');
		$_var_23['pptv_play_decide'] = advert('1308');
		$_var_23['fx_play_decide'] = advert('1309');
		$_var_23['Android_Updated_version'] = advert('150');
		$_var_23['Android_Updated_content'] = advert('151');
		$_var_23['app_android_down'] = advert('23');
		$_var_23['app_android_apk_down'] = advert('24');
		$_var_23['Android_Updated_switch'] = advert('154');
		$_var_23['Ios_Updated_version'] = advert('152');
		$_var_23['Ios_Updated_content'] = advert('153');
		$_var_23['app_ios_down'] = advert('22');
		$_var_23['Ios_Updated_switch'] = advert('155');
		$_var_23['domain_name'] = advert('30');
		$_var_23['advertising_slogan'] = advert('67');
		$_var_23['admin_token'] = advert('7');
		$_var_23['SingleSignOnRate'] = advert('66');
		$_var_23['admin_name'] = $_var_21['nick_name'];
		$_var_23['exemption_from_declaration'] = advert('112');
		$_var_23['search_api_url'] = advert('113');
		$_var_23['alipay_up_agent_switch'] = advert('1410');
		if ($_var_22) {
			$_var_23['artical_eject'] = $_var_22;
		} else {
			$_var_23['artical_eject'] = '0';
		}
		$_var_23['mod_open_live'] = advert('2000');
		$_var_23['mod_open_notice'] = advert('2100');
		$_var_23['mod_open_search'] = advert('312');
		$_var_23['Sm_Authorization'] = advert('35');
		$_var_23['agent_bulletin'] = advert('44');
		$_var_23['Proxy_login'] = advert('390');
		$_var_23['ranking_agent_ad'] = advert('130');
		$_var_23['Live_text'] = advert('2001');
		$_var_23['Live_button'] = advert('2002');
		$_var_23['live_left_upper_img'] = advert('2003');
		$_var_23['live_left_upper_url'] = advert('2004');
		$_var_23['live_right_upper_img'] = advert('2005');
		$_var_23['live_right_upper_url'] = advert('2006');
		$_var_23['live_right_lower_img'] = advert('2007');
		$_var_23['live_right_lower_url'] = advert('2008');
		$_var_23['live_benner_img'] = advert('2009');
		$_var_23['live_benner_url'] = advert('2010');
		$_var_23['launchImageAd'] = advert('354');
		$_var_23['launchImageAd_url'] = advert('355');
		$_var_23['launchImageAd_time'] = advert('356') + '1000';
		$_var_23['launchImageAd_skip'] = advert('357');
		$_var_23['launchImageAd_bottom'] = advert('358');
		return json(['status' => '1', 'data' => $_var_23]);
	}
	public function HotSearch()
	{
		$_var_24 = input('key');
		$_var_25 = input('uid');
		$_var_26 = input('time');
		if (ApiSafetyVerification($_var_26, $_var_25, $_var_24) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_26, $_var_25, $_var_24) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_25, $_var_24);
		}
		$_var_27 = advert('300');
		return json(['status' => '1', 'data' => $_var_27]);
	}
	public function faq()
	{
		$_var_28 = input('time');
		$_var_29 = TimeValidation($_var_28);
		if ($_var_29 < safety_threshold()) {
			$_var_30 = db('faq')->order('id desc')->select();
			$_var_31 = count($_var_30);
			if ($_var_31 == 0) {
				$_var_30 = array(0 => array('id' => 1, 'question' => '请到后台添加常见问题解答', 'answer' => '有疑问请联系微信  gox718'));
				return json(['status' => '1', 'title' => '常见问题 EMPTY', 'list' => $_var_30]);
			} else {
				return json(['status' => '1', 'title' => '常见问题', 'list' => $_var_30]);
			}
		} else {
			return json(['status' => '0', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
	}
	public function artical()
	{
		$_var_32 = input('time');
		$_var_33 = TimeValidation($_var_32);
		if ($_var_33 < safety_threshold()) {
			$_var_34 = 'id=1';
			$_var_35 = db('user')->where($_var_34)->find();
			$_var_36 = db('artical')->order('id desc')->limit(10)->select();
			$_var_37 = count($_var_36);
			if ($_var_37 == 0) {
				$_var_36 = array(0 => array('id' => 1, 'title' => '暂无公告', 'content' => '一切只为您更畅快的观影体验', 'time' => '679817234'));
				return json(['status' => '1', 'title' => '常见问题 EMPTY', 'list' => $_var_36]);
			} else {
				return json(['status' => '1', 'title' => '常见问题', 'list' => $_var_36]);
			}
		} else {
			return json(['status' => '0', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
	}
	public function RyanIndex()
	{
		$_var_38 = input('key');
		$_var_39 = input('uid');
		$_var_40 = input('time');
		if (ApiSafetyVerification($_var_40, $_var_39, $_var_38) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_40, $_var_39, $_var_38) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_39, $_var_38);
		}
		if (input('uid') < 1) {
			$_var_41 = '1';
		} else {
			$_var_42 = GetUserInformation($_var_39);
			if ($_var_42) {
				$_var_41 = input('uid');
			} else {
				$_var_41 = '1';
			}
		}
		$_var_43 = GetUserInformation($_var_41);
		$_var_44['banner_ico'] = db('advertisement')->where('user_id=1 or user_id=' . $_var_43['parentid'] . ' or user_id = ' . $_var_43['id'] . '')->select();
		$_var_44['privilegeMovies'] = db('privilege')->where('cid', 2)->limit(100)->select();
		$_var_44['RecommendedVideo'] = db('video')->limit(advert('45') * 2)->order('id desc')->select();
		$_var_44['getArtListTitle'] = db('artical')->field('id,time,title')->order('id desc')->limit(1)->select();
		return json(['status' => '1', 'data' => $_var_44]);
	}
	public function RyanIndex_v4()
	{
		$_var_45 = input('key');
		$_var_46 = input('uid');
		$_var_47 = input('time');
		if (ApiSafetyVerification($_var_47, $_var_46, $_var_45) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_47, $_var_46, $_var_45) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_46, $_var_45);
		}
		if (input('uid') < 1) {
			$_var_48 = '1';
		} else {
			$_var_49 = GetUserInformation($_var_46);
			if ($_var_49) {
				$_var_48 = input('uid');
			} else {
				$_var_48 = '1';
			}
		}
		$_var_50 = GetUserInformation($_var_48);
		$_var_51 = GetUserParentInformation($_var_48);
		$_var_52 = advert('130');
		$_var_53['cid'] = 100;
		$_var_53['del'] = 0;
		$_var_53['audit'] = 1;
		$_var_54 = db('advertisement')->where('user_id=1')->where($_var_53)->select();
		$_var_55 = db('advertisement')->where('user_id', $_var_50['parentid'])->where($_var_53)->select();
		$_var_56 = db('advertisement')->where('user_id', $_var_48)->where($_var_53)->select();
		if ($_var_50['parentid'] == 1 || count($_var_55) <= 0 || $_var_51['power'] != 1 || $_var_52 != 1) {
			$_var_57 = array();
		} else {
			$_var_57 = $_var_55;
		}
		if (count($_var_56) <= 0 || $_var_50['power'] != 1 || $_var_52 != 1) {
			$_var_58 = array();
		} else {
			$_var_58 = $_var_56;
		}
		$_var_59['banner'] = array_merge($_var_57, $_var_58, $_var_54);
		$_var_53['cid'] = 1;
		$_var_53['del'] = 0;
		$_var_53['audit'] = 1;
		$_var_60 = db('advertisement')->where('user_id=1')->where($_var_53)->select();
		$_var_61 = db('advertisement')->where('user_id', $_var_50['parentid'])->where($_var_53)->select();
		$_var_62 = db('advertisement')->where('user_id', $_var_48)->where($_var_53)->select();
		if ($_var_50['parentid'] == 1 || count($_var_61) <= 0 || $_var_51['power'] != 1 || $_var_52 != 1) {
			$_var_63 = $_var_60;
		} else {
			$_var_63 = array_merge($_var_61, $_var_60);
		}
		if (count($_var_62) <= 0 || $_var_50['power'] != 1 || $_var_52 != 1) {
			$_var_64 = array();
		} else {
			$_var_64 = $_var_56;
		}
		$_var_59['two_banner'] = array_merge($_var_63, $_var_64);
		$_var_53['cid'] = 2;
		$_var_53['del'] = 0;
		$_var_53['audit'] = 1;
		$_var_65 = db('advertisement')->where('user_id=1')->where($_var_53)->select();
		$_var_66 = db('advertisement')->where('user_id', $_var_50['parentid'])->where($_var_53)->select();
		$_var_67 = db('advertisement')->where('user_id', $_var_48)->where($_var_53)->select();
		if ($_var_50['parentid'] == 1 || count($_var_66) <= 0 || $_var_51['power'] != 1 || $_var_52 != 1) {
			$_var_68 = $_var_65;
		} else {
			$_var_68 = $_var_66;
		}
		if (count($_var_62) <= 0 || $_var_50['power'] != 1 || $_var_52 != 1) {
			$_var_69 = array();
		} else {
			$_var_69 = $_var_67;
		}
		$_var_59['two_ico'] = array_merge($_var_68, $_var_69);
		$_var_53['cid'] = 3;
		$_var_53['del'] = 0;
		$_var_53['audit'] = 1;
		$_var_70 = db('advertisement')->where('user_id=1')->where($_var_53)->select();
		$_var_71 = db('advertisement')->where('user_id', $_var_50['parentid'])->where($_var_53)->select();
		$_var_72 = db('advertisement')->where('user_id', $_var_48)->where($_var_53)->select();
		if ($_var_50['parentid'] == 1 || count($_var_71) <= 0 || $_var_51['power'] != 1 || $_var_52 != 1) {
			$_var_73 = $_var_70;
		} else {
			$_var_73 = $_var_71;
		}
		if (count($_var_62) <= 0 || $_var_50['power'] != 1 || $_var_52 != 1) {
			$_var_74 = array();
		} else {
			$_var_74 = $_var_72;
		}
		$_var_59['two_big'] = array_merge($_var_73, $_var_74);
		$_var_59['privilegeMovies'] = db('privilege')->where('del', 0)->where('cid', 2)->order('sort asc')->limit(100)->select();
		$_var_59['RecommendedVideo'] = db('video')->where('del', 0)->limit(advert('45'))->order('id desc')->select();
		$_var_59['getArtListTitle'] = db('artical')->field('id,time,title')->order('id desc')->limit(1)->select();
		return json(['status' => '1', 'data' => $_var_59]);
	}
	public function live_tv()
	{
		$_var_75 = 8;
		$_var_76 = input('skip') * $_var_75;
		$_var_77 = input('key');
		$_var_78 = input('uid');
		$_var_79 = input('time');
		if (ApiSafetyVerification($_var_79, $_var_78, $_var_77) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_79, $_var_78, $_var_77) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_78, $_var_77);
		}
		$_var_80 = input('type');
		$_var_81['type'] = $_var_80;
		$_var_82 = db('live')->order('sort ASC')->where($_var_81)->limit($_var_76, $_var_75)->select();
		return json(['status' => 1, 'data' => $_var_82]);
	}
	public function SharePoster()
	{
		$_var_83 = input('key');
		$_var_84 = input('uid');
		$_var_85 = input('time');
		if (ApiSafetyVerification($_var_85, $_var_84, $_var_83) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_85, $_var_84, $_var_83) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_84, $_var_83);
		}
		$_var_86 = db('share_poster')->order('id desc')->limit(10)->select();
		$_var_87 = count($_var_86);
		if ($_var_87 == 0) {
			$_var_86 = array(0 => array('id' => 1, 'name' => '暂无公告', 'img' => '一切只为您更畅快的观影体验'));
			return json(['code' => '1', 'list' => $_var_86]);
		} else {
			return json(['code' => '1', 'list' => $_var_86]);
		}
	}
	public function UserAttendance()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 暂时停止签到操作']);
		}
		$_var_88 = input('key');
		$_var_89 = input('uid');
		$_var_90 = input('time');
		if (ApiSafetyVerification($_var_90, $_var_89, $_var_88) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_90, $_var_89, $_var_88) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_89, $_var_88);
		}
		$_var_91['id'] = $_var_89;
		$_var_92 = db('user')->where($_var_91)->find();
		if (!$_var_92) {
			return json(['status' => '9', 'data' => '签到失败 非法操作']);
		}
		$_var_93['uid'] = $_var_89;
		$_var_93['time'] = array(array('egt', strtotime(date('Y-m-d', time()))), array('lt', strtotime(date('Y-m-d', time()) . '+1 day')));
		$_var_94 = db('attendance_log')->where($_var_93)->find();
		if ($_var_94) {
			return json(['status' => '0', 'data' => '今天已签到 明天再来噢！']);
		} else {
			$_var_95 = rand_sign();
			$_var_96['uid'] = $_var_89;
			$_var_96['time'] = time();
			$_var_96['give'] = $_var_95;
			$_var_97 = db('attendance_log')->insert($_var_96);
			$_var_98 = db('user')->where('id', $_var_89)->setInc('sign', $_var_95);
			if ($_var_97 > 0 && $_var_98 > 0) {
				return json(['status' => '1', 'data' => '签到成功！奖励' . $_var_95 . '积分', 'rand_sign' => $_var_95]);
			} else {
				return json(['status' => '1', 'data' => '签到失败 请稍后再试！']);
			}
		}
	}
	public function MembershipInformation()
	{
		$_var_99 = input('key');
		$_var_100 = input('uid');
		$_var_101 = input('time');
		if (ApiSafetyVerification($_var_101, $_var_100, $_var_99) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_101, $_var_100, $_var_99) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_100, $_var_99);
		}
		$_var_102['id'] = $_var_100;
		$_var_103 = db('user')->where($_var_102)->find();
		if ($_var_103['power'] == '0' || $_var_103['type'] == '1') {
			$_var_104['vip_time'] = '-1';
		} else {
			$_var_104['vip_time'] = $_var_103['lasttime'];
		}
		if ($_var_103['safetycode'] == null) {
			$_var_104['safetycode'] = 0;
		} else {
			$_var_104['safetycode'] = 1;
		}
		$_var_104['parentid'] = $_var_103['parentid'];
		$_var_104['id'] = $_var_103['id'];
		$_var_104['power'] = $_var_103['power'];
		$_var_104['sign'] = $_var_103['sign'];
		$_var_104['zfb'] = $_var_103['zfb'];
		$_var_104['zfb_name'] = $_var_103['zfb_name'];
		$_var_104['Source'] = $_var_103['Source'];
		$_var_104['money'] = $_var_103['money'];
		$_var_104['weichat'] = $_var_103['weichat'];
		$_var_104['email'] = $_var_103['email'];
		$_var_104['status'] = $_var_103['status'];
		$_var_104['share_ma'] = $_var_103['share_ma'];
		$_var_104['txje'] = $_var_103['txje'];
		$_var_104['username'] = substr_replace($_var_103['username'], '****', 3, 4);
		$_var_104['username_t'] = $_var_103['username'];
		$_var_104['password'] = $_var_103['password'];
		$_var_104['parent_weichat'] = db('user')->where('id', $_var_103['parentid'])->value('weichat');
		$_var_104['admin_weichat'] = db('user')->where('id', 1)->value('weichat');
		$_var_104['team_num'] = db('user')->where('parentid', $_var_103['id'])->count();
		$_var_105 = db('rebate')->where('get_id', $_var_100)->sum('money');
		if ($_var_105 == null) {
			$_var_104['rebate_money'] = '0';
		} else {
			$_var_104['rebate_money'] = $_var_105;
		}
		$_var_104['isfaka'] = db('cdkey_type')->where('uid', $_var_100)->count();
		if ($_var_103) {
			return json(['status' => '1', 'data' => $_var_104]);
		} else {
			return json(['status' => '0', 'data' => '信息获取失败']);
		}
	}
	public function AppMemberLogin()
	{
		// if (advert('48') !== authorization_checking()) {
		// 	return json(['status' => 0, 'data' => '当前禁止登录 错误码:718']);
		// }
		$_var_106 = input('key');
		$_var_107 = input('uid');
		$_var_108 = input('time');
		$_var_109 = input('username');
		$_var_110 = input('password');
		$_var_111 = input('deviceId');
		if (ApiSafetyVerification($_var_108, $_var_107, $_var_106) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_108, $_var_107, $_var_106) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_107, $_var_106);
		}
		$_var_112['username'] = $_var_109;
		$_var_112['password'] = md5(sha1($_var_110));
		$_var_113 = db('user')->where($_var_112)->find();
		if ($_var_113) {
			if ($_var_113['status'] == 0) {
				return json(['status' => 9, 'data' => '账户违规 已禁封']);
			}
			if (empty($_var_113['deviceId'])) {
				$_var_114 = db('user')->where('deviceId', $_var_111)->count();
				if ($_var_114 == 0) {
					$_var_115['deviceId'] = $_var_111;
					db('user')->where('username', $_var_113['username'])->update($_var_115);
					db('user')->where('id', $_var_113['parentid'])->setInc('sign', advert('34'));
				} else {
					if (advert('6') == '1') {
						$_var_116 = db('user')->where('deviceId', $_var_111)->value('username');
						$_var_117 = substr_replace($_var_116, '****', 3, 4);
						return json(['status' => 8, 'data' => '当前设备已绑定账户：' . $_var_117 . '请登陆']);
					} else {
						$_var_115['deviceId'] = $_var_111;
						db('user')->where('username', $_var_113['username'])->update($_var_115);
						db('user')->where('id', $_var_113['parentid'])->setInc('sign', advert('34'));
					}
					
				}
				
				
			}
			db('user')->where('id', $_var_113['id'])->setInc('count', 1);
			$_var_118['logintime'] = time();
			$_var_118['imei'] = $_var_111;
			db('user')->where('id', $_var_113['id'])->update($_var_118);
			if (empty($_var_113['share_ma'])) {
				$_var_119['share_ma'] = RandomInvitationCode('6');
				db('user')->where('id', $_var_113['id'])->update($_var_119);
			}
			$_var_120 = db('user')->where('share_ma', $_var_113['share_ma'])->count();
			if ($_var_120 > 1) {
				$_var_119['share_ma'] = RandomInvitationCode('6');
				db('user')->where('id', $_var_113['id'])->update($_var_119);
			}
			$_var_121['id'] = $_var_113['id'];
			return json(['status' => '1', 'data' => $_var_121]);
		} else {
			return json(['status' => '0', 'data' => '账户或密码错误']);
		}
	}
	public function AppRevisePassword()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 暂时禁止修改密码操作']);
		}
		$_var_122 = input('key');
		$_var_123 = input('uid');
		$_var_124 = input('time');
		$_var_125 = input('username');
		$_var_126 = input('oldpswd');
		$_var_127 = input('newpassword');
		if (ApiSafetyVerification($_var_124, $_var_123, $_var_122) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_124, $_var_123, $_var_122) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_123, $_var_122);
		}
		$_var_128 = db('user')->where('username', $_var_125)->count();
		if ($_var_128 == '0') {
			return json(['status' => 0, 'data' => '验证不通过']);
		}
		if ($_var_127) {
			$_var_129['password'] = md5(sha1($_var_127));
			$_var_130 = db('user')->where('username', input('username'))->value('password');
			if ($_var_130 != $_var_126) {
				return json(['status' => 0, 'data' => '验证不通过']);
			}
			db('user')->where('username', $_var_125)->update($_var_129);
			return json(['status' => 1, 'data' => '密码修改成功!请重新登陆']);
		}
	}
	public function AppSetSafetyCode()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全 暂时禁止变更会员信息']);
		}
		$_var_131 = input('key');
		$_var_132 = input('uid');
		$_var_133 = input('time');
		$_var_134 = input('username');
		$_var_135 = input('safetycode');
		$_var_136 = input('password');
		if (ApiSafetyVerification($_var_133, $_var_132, $_var_131) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_133, $_var_132, $_var_131) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_132, $_var_131);
		}
		$_var_137 = db('user')->where('username', $_var_134)->count();
		if ($_var_137 == '0') {
			return json(['status' => 0, 'data' => '验证不通过']);
		}
		if ($_var_135) {
			$_var_138['safetycode'] = $_var_135;
			$_var_139 = db('user')->where('username', input('username'))->value('password');
			if ($_var_139 != md5(sha1($_var_136))) {
				return json(['status' => 0, 'data' => '验证不通过']);
			}
			db('user')->where('username', $_var_134)->update($_var_138);
			return json(['status' => 1, 'data' => '安全码设置成功 ' . $_var_135 . ' 请牢记！']);
		}
	}
	public function AppRePass_for_safetycode()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全 暂时禁止变更会员信息']);
		}
		$_var_140 = input('key');
		$_var_141 = input('uid');
		$_var_142 = input('time');
		$_var_143 = input('username');
		$_var_144 = input('safetycode');
		$_var_145 = input('newpassword');
		if (ApiSafetyVerification($_var_142, $_var_141, $_var_140) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_142, $_var_141, $_var_140) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_141, $_var_140);
		}
		$_var_146 = db('user')->where('username', $_var_143)->find();
		if (!$_var_146) {
			return json(['status' => 0, 'data' => '用户不存在']);
		} else {
			if ($_var_146['safetycode'] == null) {
				return json(['status' => 0, 'data' => '安全码未设置 请通过短信验证找回']);
			}
		}
		if (!$_var_145) {
			return json(['status' => 0, 'data' => '请输入新密码']);
		}
		if (!$_var_144) {
			return json(['status' => 0, 'data' => '请输入安全码']);
		}
		if ($_var_144 != $_var_146['safetycode']) {
			return json(['status' => 0, 'data' => '安全码错误']);
		}
		$_var_147['password'] = md5(sha1($_var_145));
		$_var_148 = db('user')->where('username', $_var_143)->update($_var_147);
		if ($_var_148 > 0) {
			return json(['status' => 1, 'data' => '密码已重置 请牢记!']);
		} else {
			return json(['status' => 0, 'data' => '修改失败 请稍后再试!']);
		}
	}
	public function AppRePass()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全 暂时禁止变更会员信息']);
		}
		$_var_149 = input('key');
		$_var_150 = input('uid');
		$_var_151 = input('time');
		$_var_152 = input('username');
		$_var_153 = input('VerificationCode');
		$_var_154 = input('newpassword');
		if (ApiSafetyVerification($_var_151, $_var_150, $_var_149) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_151, $_var_150, $_var_149) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_150, $_var_149);
		}
		$_var_155 = db('user')->where('username', $_var_152)->count();
		if ($_var_155 == '0') {
			return json(['status' => 0, 'data' => '用户不存在']);
		}
		$_var_156 = db('sms_code')->where('smscode', $_var_153)->find();
		if (!$_var_156) {
			return json(['status' => 0, 'data' => '验证码错误']);
		}
		$_var_157['username'] = $_var_152;
		$_var_158 = db('sms_code')->where($_var_157)->order('time desc')->limit(1)->select();
		$_var_159 = time() - $_var_158[0]['time'];
		if ($_var_159 > 1800) {
			return json(['status' => 0, 'data' => '验证码已失效']);
		}
		if ($_var_153 !== $_var_158[0]['smscode']) {
			return json(['status' => 0, 'data' => '验证码错误']);
		}
		if (!$_var_154) {
			return json(['status' => 0, 'data' => '请输入新密码']);
		}
		$_var_160['password'] = md5(sha1($_var_154));
		db('user')->where('username', $_var_152)->update($_var_160);
		return json(['status' => 1, 'data' => '密码已重置 请牢记!']);
	}
	public function SendVerificationCode()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全 暂时禁止变更会员信息']);
		}
		$_var_161 = input('key');
		$_var_162 = input('uid');
		$_var_163 = input('time');
		$_var_164 = input('username');
		if (ApiSafetyVerification($_var_163, $_var_162, $_var_161) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_163, $_var_162, $_var_161) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_162, $_var_161);
		}
		$_var_165 = db('user')->where('username', $_var_164)->find();
		if (!$_var_165) {
			return json(['status' => 0, 'data' => '用户不存在']);
		}
		if ($_var_165['status'] == '0') {
			return json(['status' => 0, 'data' => '该账户违规 已禁封']);
		}
		$_var_166 = '1234567890';
		$_var_167 = str_shuffle($_var_166);
		$_var_168 = substr($_var_167, 0, 6);
		header('content-type:text/html;charset=utf-8');
		$_var_169 = 'http://v.juhe.cn/sms/send';
		$_var_170 = array('key' => advert('69'), 'mobile' => $_var_164, 'tpl_id' => advert('70'), 'tpl_value' => '#code#=' . $_var_168);
		$_var_171 = juhecurl($_var_169, $_var_170, 1);
		if ($_var_171) {
			$_var_172 = json_decode($_var_171, true);
			$_var_173 = $_var_172['error_code'];
			if ($_var_173 == 0) {
				$_var_174['time'] = time();
				$_var_174['username'] = $_var_164;
				$_var_174['ip'] = getIP();
				$_var_174['smscode'] = $_var_168;
				$_var_174['smsid'] = $_var_172['result']['sid'];
				db('sms_code')->insert($_var_174);
				return json(['status' => 1, 'data' => '短信发送成功!']);
			} else {
				$_var_175 = $_var_172['reason'];
				return json(['status' => 0, 'data' => '短信发送失败(' . $_var_173 . ')：' . $_var_175]);
			}
		} else {
			return json(['status' => 0, 'data' => '短信发送请求失败']);
		}
	}
	public function AppMemberReg()
	{
		// if (advert('48') !== authorization_checking()) {
		// 	return json(['status' => 0, 'data' => '当前禁止注册 错误码:718']);
		// }
		if (advert('353') == '0') {
			return json(['status' => 0, 'data' => '管理员已关闭注册']);
		}
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统临时维护 暂时关闭注册']);
		}
		$_var_176 = input('key');
		$_var_177 = input('uid');
		$_var_178 = input('time');
		$_var_179 = input('username');
		$_var_180 = input('password');
		$_var_181 = input('share_ma');
		$_var_182 = input('deviceId');
		$_var_183 = input('source');
		if (ApiSafetyVerification($_var_178, $_var_177, $_var_176) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_178, $_var_177, $_var_176) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_177, $_var_176);
		}
		$_var_184 = db('user')->where('username', $_var_179)->count();
		if ($_var_184 > 0) {
			return json(['status' => 10, 'data' => '账户已存在 请登录']);
		}
		if ($_var_181 == '') {
			$_var_185 = 1;
		} else {
			$_var_186 = db('user')->where('share_ma', $_var_181)->value('id');
			if (advert('342') == 1) {
				$_var_187 = db('user')->where('id', $_var_186)->value('power');
				if ($_var_187 == 1) {
					$_var_185 = $_var_186;
				} else {
					$_var_185 = db('user')->where('id', $_var_186)->value('parentid');
				}
			} else {
				$_var_185 = $_var_186;
			}
		}
		$_var_188['sign'] = '0';
		$_var_188['username'] = $_var_179;
		$_var_188['deviceId'] = $_var_182;
		$_var_188['Source'] = $_var_183;
		$_var_188['password'] = md5(sha1($_var_180));
		$_var_188['phone'] = $_var_179;
		$_var_188['power'] = '2';
		$_var_188['status'] = '1';
		$_var_188['parentid'] = $_var_185;
		$_var_188['ctime'] = time();
		$_var_188['logintime'] = '0';
		$_var_188['lasttime'] = time() + advert('5') * 60;
		$_var_188['money'] = '0.00';
		$_var_188['share_ma'] = substr(base_convert(md5(uniqid(md5(microtime(true)), true)), 16, 10), 0, 6);
		if (advert('6') == '1') {
			$_var_189 = db('user')->where('deviceId', $_var_182)->count();
			$_var_190 = db('user')->where('deviceId', $_var_182)->value('username');
			$_var_191 = substr_replace($_var_190, '****', 3, 4);
			if ($_var_189 > 0) {
				return json(['status' => 0, 'data' => '您已注册过账户' . $_var_191 . ' 请登录！']);
			}
		}
		if (db('user')->insert($_var_188)) {
			$_var_192['username'] = $_var_179;
			$_var_193 = db('user')->where($_var_192)->find();
			$_var_194['id'] = $_var_193['id'];
			return json(['status' => '1', 'msg' => '注册成功', 'data' => $_var_194]);
		} else {
			return json(['status' => 0, 'data' => '注册失败']);
		}
	}
	public function AddVideoHistory()
	{
		$_var_195 = input('key');
		$_var_196 = input('uid');
		$_var_197 = input('time');
		$_var_198 = input('url');
		$_var_199 = input('title');
		if (ApiSafetyVerification($_var_197, $_var_196, $_var_195) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_197, $_var_196, $_var_195) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_196, $_var_195);
		}
		$_var_200['uid'] = $_var_196;
		$_var_200['url'] = $_var_198;
		$_var_201 = db('video_history')->where($_var_200)->find();
		if ($_var_201) {
			$_var_202['time'] = time();
			$_var_202['time'] = date('Y-m-d H:i:s');
			db('video_history')->where($_var_200)->update($_var_202);
			return json(['status' => '1', 'data' => '已更新']);
		} else {
			if (strpos($_var_198, 'youku') !== false) {
				$_var_202['source'] = '优酷';
				$_var_202['img'] = 'yk';
			} else {
				if (strpos($_var_198, 'iqiyi') !== false) {
					$_var_202['source'] = '爱奇艺';
					$_var_202['img'] = 'iqy';
				} else {
					if (strpos($_var_198, 'v.qq.com') !== false) {
						$_var_202['source'] = '腾讯';
						$_var_202['img'] = 'tx';
					} else {
						if (strpos($_var_198, 'sohu.com') !== false) {
							$_var_202['source'] = '搜狐';
							$_var_202['img'] = 'sh';
						} else {
							if (strpos($_var_198, 'mgtv.com') !== false) {
								$_var_202['source'] = '芒果';
								$_var_202['img'] = 'mg';
							} else {
								if (strpos($_var_198, '1905.com') !== false) {
									$_var_202['source'] = 'M1905';
									$_var_202['img'] = '1905';
								} else {
									if (strpos($_var_198, 'pptv.com') !== false) {
										$_var_202['source'] = 'PPTV';
										$_var_202['img'] = 'pptv';
									} else {
										if (strpos($_var_198, 'fun.tv') !== false) {
											$_var_202['source'] = '风行';
											$_var_202['img'] = 'fx';
										} else {
											if (strpos($_var_198, 'miguvideo.com') !== false) {
												$_var_202['source'] = '咪咕';
												$_var_202['img'] = 'migu';
											} else {
												if (strpos($_var_198, 'le.com') !== false) {
													$_var_202['source'] = '乐视';
													$_var_202['img'] = 'ls';
												} else {
													if (strpos($_var_198, 'baofeng.com') !== false) {
														$_var_202['source'] = '暴风';
														$_var_202['img'] = 'bf';
													} else {
														$_var_202['source'] = '其他';
														$_var_202['img'] = 'ryan';
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			$_var_202['time'] = date('Y-m-d H:i:s');
			$_var_202['uid'] = $_var_196;
			$_var_202['title'] = $_var_199;
			$_var_202['url'] = $_var_198;
			db('video_history')->insert($_var_202);
			return json(['status' => '1', 'data' => '已记录']);
		}
	}
	public function SeeVideoHistory()
	{
		$_var_203 = input('key');
		$_var_204 = input('uid');
		$_var_205 = input('time');
		if (ApiSafetyVerification($_var_205, $_var_204, $_var_203) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_205, $_var_204, $_var_203) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_204, $_var_203);
		}
		$_var_206['uid'] = $_var_204;
		$_var_207 = db('video_history')->where($_var_206)->find();
		if ($_var_207) {
			$_var_208 = db('video_history')->where($_var_206)->order('time desc')->limit(30)->select();
			return json(['status' => '1', 'data' => $_var_208]);
		} else {
			return json(['status' => '3', 'data' => '空空如也']);
		}
	}
	public function IntegralExchange()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 暂时关闭兑换']);
		}
		$_var_209 = input('key');
		$_var_210 = input('uid');
		$_var_211 = input('time');
		$_var_212 = input('day');
		if (ApiSafetyVerification($_var_211, $_var_210, $_var_209) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_211, $_var_210, $_var_209) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_210, $_var_209);
		}
		$_var_213 = floor($_var_212 * advert('4'));
		if ($_var_213 % advert('4') != '0' || $_var_213 <= 0) {
			return json(['status' => 0, 'data' => '消耗积分参数不正确']);
		}
		$_var_214 = db('user')->where('id', $_var_210)->find();
		if (!$_var_214) {
			return json(['status' => 0, 'data' => '用户不存在']);
		}
		if ($_var_214['power'] == '0' || $_var_214['type'] == '1') {
			return json(['status' => 0, 'data' => '您已经是永久会员']);
		} else {
			if ($_var_213 > $_var_214['sign']) {
				return json(['status' => 0, 'data' => '您的积分不够']);
			} else {
				$_var_215 = $_var_214['sign'];
				$_var_216 = $_var_213 / advert('4');
				$_var_217 = 60 * 60 * 24 * $_var_216;
				$_var_218 = db('user')->where('id=' . $_var_210)->value('lasttime');
				if ($_var_218 < time()) {
					db('user')->where('id=' . $_var_210)->update(['lasttime' => time() + $_var_217]);
				} else {
					db('user')->where('id=' . $_var_210)->update(['lasttime' => $_var_218 + $_var_217]);
				}
				db('user')->where('id=' . $_var_210)->update(['sign' => $_var_215 - $_var_213]);
				$_var_219['uid'] = $_var_210;
				$_var_219['type'] = '兑换会员';
				$_var_219['expend_num'] = $_var_213;
				$_var_219['time'] = time();
				db('integral_record')->insert($_var_219);
				$_var_220 = db('user')->where('id=' . $_var_210)->value('lasttime');
				return json(['status' => 1, 'data' => '兑换成功 会员时间为：' . date('Y-m-d H:i:s', $_var_220)]);
			}
		}
	}
	public function MembershipTypeInformation()
	{
		$_var_221 = input('key');
		$_var_222 = input('uid');
		$_var_223 = input('time');
		$_var_224 = input('day');
		if (ApiSafetyVerification($_var_223, $_var_222, $_var_221) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_223, $_var_222, $_var_221) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_222, $_var_221);
		}
		$_var_225['id'] = $_var_222;
		$_var_226 = db('user')->where($_var_225)->find();
		$_var_227['uid'] = $_var_226['parentid'];
		$_var_228 = db('cdkey_type')->where($_var_227)->find();
		if ($_var_228) {
			$_var_229['uid'] = $_var_226['parentid'];
		} else {
			$_var_229['uid'] = 1;
		}
		$_var_230 = db('cdkey_type')->where($_var_229)->order('type asc')->select();
		return json(['status' => 1, 'data' => $_var_230]);
	}
	public function UseActivationCode()
	{
		// if (advert('48') !== authorization_checking()) {
		// 	return json(['status' => 0, 'data' => '当前状态不可使用 718']);
		// }
		if (advert('330') == '0') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全，暂停使用激活码！']);
		}
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 暂时停止使用激活码']);
		}
		$_var_231 = input('key');
		$_var_232 = input('uid');
		$_var_233 = input('time');
		$_var_234 = input('CDKEY');
		if (ApiSafetyVerification($_var_233, $_var_232, $_var_231) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_233, $_var_232, $_var_231) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_232, $_var_231);
		}
		if (!empty($_var_232) && !empty($_var_234)) {
			$_var_235 = db('user')->where('id', $_var_232)->find();
			$_var_236 = db('cdkey')->where('cdkey', $_var_234)->find();
			$_var_237['uid'] = 1;
			if ($_var_236['type'] == 1000) {
				$_var_237['type'] = 1000;
			} else {
				if ($_var_236['type'] == 1001) {
					$_var_237['type'] = 1001;
				} else {
					if ($_var_236['type'] == 1002) {
						$_var_237['type'] = 1002;
					} else {
						if ($_var_236['type'] == 1003) {
							$_var_237['type'] = 1003;
						} else {
							if ($_var_236['type'] == 1004) {
								$_var_237['type'] = 1004;
							} else {
								if ($_var_236['type'] == 1010) {
									$_var_237['type'] = 1010;
								}
							}
						}
					}
				}
			}
			$_var_238 = db('cdkey_type')->where($_var_237)->find();
			$_var_239 = $_var_238['cost_price'];
			if (!$_var_235) {
				return json(['status' => 0, 'data' => '用户不存在']);
			}
			if (!$_var_236) {
				return json(['status' => 0, 'data' => '激活码错误']);
			}
			if ($_var_236['y'] == '1') {
				return json(['status' => 0, 'data' => '激活码已被使用']);
			}
			if ($_var_235['power'] == '0' || $_var_235['type'] == '1' && $_var_236['type'] != '1010') {
				return json(['status' => 0, 'data' => '升级失败 您已经是永久会员']);
			}
			if ($_var_236['type'] == 1010) {
				if ($_var_235['power'] == '1') {
					return json(['status' => 0, 'data' => '升级失败 您已经是代理！']);
				}
				db('user')->where('id', $_var_232)->update(['power' => '1']);
				db('cdkey')->where('cdkey', $_var_234)->update(['y' => '1', 'yid' => $_var_232, 'stime' => time()]);
				db('cdkey_log')->where('id', $_var_236['log'])->setInc('invalid', 1);
				db('user')->where('id', $_var_232)->update(['money' => advert('20')]);
				db('agent_up_log')->insert(['uid' => $_var_232, 'provider' => $_var_236['uid'], 'cdkey' => $_var_234, 'time' => time()]);
				Ryan_rebate($_var_232, $_var_239, 1);
				return json(['status' => '1', 'data' => '代理升级成功']);
			} else {
				db('cdkey')->where('cdkey', $_var_234)->update(['y' => '1', 'yid' => $_var_232, 'stime' => time()]);
				db('cdkey_log')->where('id', $_var_236['log'])->setInc('invalid', 1);
				db('vip_up_log')->insert(['uid' => $_var_232, 'provider' => $_var_236['uid'], 'cdkey' => $_var_234, 'time' => time()]);
				if ($_var_236['type'] == 1004) {
					$_var_240['type'] = '1';
					$_var_240['lasttime'] = '0';
					db('user')->where('id', $_var_232)->update($_var_240);
					return json(['status' => '1', 'data' => '成功升级为永久会员']);
				} else {
					if ($_var_235['lasttime'] > time()) {
						db('user')->where('id', $_var_232)->update(['lasttime' => $_var_235['lasttime'] + $_var_236['time']]);
						return json(['status' => '1', 'data' => '会员续期成功']);
					} else {
						db('user')->where('id', $_var_232)->update(['lasttime' => time() + $_var_236['time']]);
						return json(['status' => '1', 'data' => '会员开通成功']);
					}
				}
			}
		} else {
			return json(['status' => '0', 'data' => '错误 请稍后再试！']);
		}
	}
	public function RebateDetailed()
	{
		$_var_241 = 18;
		$_var_242 = input('skip') * $_var_241;
		$_var_243 = input('key');
		$_var_244 = input('uid');
		$_var_245 = input('time');
		if (ApiSafetyVerification($_var_245, $_var_244, $_var_243) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_245, $_var_244, $_var_243) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_244, $_var_243);
		}
		$_var_246['get_id'] = $_var_244;
		$_var_247 = db('rebate')->order('id desc')->where($_var_246)->limit($_var_242, $_var_241)->select();
		return json(['status' => 1, 'data' => $_var_247]);
	}
	public function GetADinformation()
	{
		$_var_248 = input('key');
		$_var_249 = input('uid');
		$_var_250 = input('time');
		if (ApiSafetyVerification($_var_250, $_var_249, $_var_248) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_250, $_var_249, $_var_248) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_249, $_var_248);
		}
		$_var_251 = db('user')->where('id', $_var_249)->find();
		$_var_252 = db('user')->where('id', $_var_251['parentid'])->find();
		$_var_253 = advert('130');
		if ($_var_252['power'] == 1 && $_var_252['banner_switch'] == 1 && $_var_253 == 1) {
			$_var_254['user_id'] = $_var_251['parentid'];
			$_var_254['cid'] = 1;
			$_var_255 = db('advertisement')->where($_var_254)->find();
			if ($_var_255) {
				$_var_256['user_id'] = $_var_251['parentid'];
				$_var_256['cid'] = 1;
			} else {
				$_var_256['user_id'] = 1;
				$_var_256['cid'] = 1;
			}
			$_var_257['user_id'] = $_var_251['parentid'];
			$_var_257['cid'] = 2;
			$_var_258 = db('advertisement')->where($_var_257)->find();
			if ($_var_258) {
				$_var_259['user_id'] = $_var_251['parentid'];
				$_var_259['cid'] = 2;
			} else {
				$_var_259['user_id'] = 1;
				$_var_259['cid'] = 2;
			}
			$_var_260['user_id'] = $_var_251['parentid'];
			$_var_260['cid'] = 3;
			$_var_261 = db('advertisement')->where($_var_260)->find();
			if ($_var_261) {
				$_var_262['user_id'] = $_var_251['parentid'];
				$_var_262['cid'] = 3;
			} else {
				$_var_262['user_id'] = 1;
				$_var_262['cid'] = 3;
			}
			$_var_263['user_id'] = $_var_251['parentid'];
		} else {
			$_var_256['user_id'] = 1;
			$_var_256['cid'] = 1;
			$_var_259['user_id'] = 1;
			$_var_259['cid'] = 2;
			$_var_262['user_id'] = 1;
			$_var_262['cid'] = 3;
			$_var_263['user_id'] = 1;
		}
		$_var_264['banner'] = db('advertisement')->where($_var_256)->order('sort desc')->select();
		$_var_264['small_icons'] = db('advertisement')->where($_var_259)->order('sort desc')->select();
		$_var_264['big_picture'] = db('advertisement')->where($_var_262)->order('sort desc')->select();
		$_var_265 = db('advertisement')->where($_var_263)->order('sort desc')->select();
		return json(['status' => '1', 'data' => $_var_264, 'data_focus' => $_var_265]);
	}
	public function AppCdkeyDetails()
	{
		$_var_266 = input('key');
		$_var_267 = input('uid');
		$_var_268 = input('time');
		if (ApiSafetyVerification($_var_268, $_var_267, $_var_266) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_268, $_var_267, $_var_266) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_267, $_var_266);
		}
		$_var_269 = db('user')->where('id', $_var_267)->find();
		$_var_270 = db('cdkey')->where('uid', $_var_267)->find();
		if (!$_var_269) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_269['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			}
		}
		$_var_271['uid'] = $_var_267;
		$_var_272['uid'] = $_var_267;
		$_var_272['y'] = '1';
		$_var_273['experience_total'] = db('cdkey')->where($_var_271)->where('name', '体验')->count();
		$_var_273['experience_used'] = db('cdkey')->where($_var_272)->where('name', '体验')->count();
		if ($_var_273['experience_total'] == '0') {
			$_var_273['experience_proportion'] = $_var_273['experience_total'];
		} else {
			$_var_273['experience_proportion'] = number_format($_var_273['experience_used'] / $_var_273['experience_total'] * 100, 2, '.', '');
		}
		$_var_273['one_month_total'] = db('cdkey')->where($_var_271)->where('name', '一月')->count();
		$_var_273['one_month_used'] = db('cdkey')->where($_var_272)->where('name', '一月')->count();
		if ($_var_273['one_month_total'] == '0') {
			$_var_273['one_month_proportion'] = $_var_273['one_month_total'];
		} else {
			$_var_273['one_month_proportion'] = number_format($_var_273['one_month_used'] / $_var_273['one_month_total'] * 100, 2, '.', '');
		}
		$_var_273['half_a_year_total'] = db('cdkey')->where($_var_271)->where('name', '半年')->count();
		$_var_273['half_a_year_used'] = db('cdkey')->where($_var_272)->where('name', '半年')->count();
		if ($_var_273['half_a_year_total'] == '0') {
			$_var_273['half_a_year_proportion'] = $_var_273['half_a_year_total'];
		} else {
			$_var_273['half_a_year_proportion'] = number_format($_var_273['half_a_year_used'] / $_var_273['half_a_year_total'] * 100, 2, '.', '');
		}
		$_var_273['one_year_total'] = db('cdkey')->where($_var_271)->where('name', '一年')->count();
		$_var_273['one_year_used'] = db('cdkey')->where($_var_272)->where('name', '一年')->count();
		if ($_var_273['one_year_total'] == '0') {
			$_var_273['one_year_proportion'] = $_var_273['one_year_total'];
		} else {
			$_var_273['one_year_proportion'] = number_format($_var_273['one_year_used'] / $_var_273['one_year_total'] * 100, 2, '.', '');
		}
		$_var_273['permanent_total'] = db('cdkey')->where($_var_271)->where('name', '永久')->count();
		$_var_273['permanent_used'] = db('cdkey')->where($_var_272)->where('name', '永久')->count();
		if ($_var_273['permanent_total'] == '0') {
			$_var_273['permanent_proportion'] = $_var_273['permanent_total'];
		} else {
			$_var_273['permanent_proportion'] = number_format($_var_273['permanent_used'] / $_var_273['permanent_total'] * 100, 2, '.', '');
		}
		return json(['status' => 1, 'data' => $_var_273]);
	}
	public function AppCdkeyCreateList()
	{
		$_var_274 = 8;
		$_var_275 = input('skip') * $_var_274;
		$_var_276 = input('key');
		$_var_277 = input('uid');
		$_var_278 = input('time');
		if (ApiSafetyVerification($_var_278, $_var_277, $_var_276) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_278, $_var_277, $_var_276) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_277, $_var_276);
		}
		$_var_279 = db('user')->where('id', $_var_277)->find();
		if (!$_var_279) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_279['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			}
		}
		$_var_280['uid'] = $_var_277;
		$_var_281 = db('cdkey_log')->where($_var_280)->order('id desc')->limit($_var_275, $_var_274)->select();
		$_var_282['activation_code_log_list'] = $_var_281;
		return json(['status' => 1, 'data' => $_var_282]);
	}
	public function AppCdkeySingleBatchDetails()
	{
		$_var_283 = 20;
		$_var_284 = input('skip') * $_var_283;
		$_var_285 = input('key');
		$_var_286 = input('uid');
		$_var_287 = input('time');
		$_var_288 = input('log_id');
		if (ApiSafetyVerification($_var_287, $_var_286, $_var_285) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_287, $_var_286, $_var_285) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_286, $_var_285);
		}
		$_var_289 = db('user')->where('id', $_var_286)->find();
		if (!$_var_289) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_289['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			}
		}
		$_var_290['uid'] = $_var_286;
		$_var_290['log'] = $_var_288;
		$_var_291 = db('cdkey')->where($_var_290)->order('ctime desc')->limit($_var_284, $_var_283)->select();
		$_var_292['activation_code_list'] = $_var_291;
		return json(['status' => 1, 'data' => $_var_292]);
	}
	public function AppCdkeyCreate()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 暂时停止提取激活码']);
		}
		$_var_293 = input('key');
		$_var_294 = input('uid');
		$_var_295 = input('time');
		$_var_296 = input('type');
		$_var_297 = input('number');
		if (ApiSafetyVerification($_var_295, $_var_294, $_var_293) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_295, $_var_294, $_var_293) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_294, $_var_293);
		}
		$_var_298 = db('user')->where('id', $_var_294)->find();
		$_var_299 = advert('28');
		$_var_300 = mb_strwidth($_var_299);
		$_var_301 = advert('1100');
		if (advert('352') == '' || advert('352') == null || advert('352') == '0' || advert('352') > '1000') {
			$_var_302 = '1000';
		} else {
			$_var_302 = advert('352');
		}
		$_var_303 = advert('29');
		$_var_304 = bcsub($_var_303, $_var_300);
		if (!$_var_298) {
			return json(['status' => 0, 'data' => '无权限']);
		} else {
			if ($_var_301 == '0') {
				return json(['status' => '0', 'data' => '系统维护中 为了您的数据安全，暂停新的激活码提取！']);
			} else {
				if ($_var_298['power'] > 1) {
					return json(['status' => '0', 'data' => '无权限']);
				} else {
					if ($_var_297 < 1 || $_var_297 == '') {
						return json(['status' => '0', 'data' => '请输入数量']);
					} else {
						if ($_var_297 > $_var_302) {
							return json(['status' => '0', 'data' => '单次最多允许成 ' . $_var_302 . ' 个激活码']);
						} else {
							if ($_var_300 > 5) {
								return json(['status' => '0', 'data' => '激活码设置不合理 请联系管理员']);
							}
							if ($_var_303 > 21 || $_var_304 < 6) {
								return json(['status' => '0', 'data' => '激活码设置不合理 请联系管理员']);
							}
							$_var_305 = intval(AgentCdkeyQuery($_var_294, $_var_296)) + intval($_var_297);
							if (advert('380') > '0' && $_var_305 > advert('380')) {
								$_var_306 = intval(advert('380')) - intval(AgentCdkeyQuery($_var_294, $_var_296));
								if ($_var_306 > 0) {
									return json(['status' => '0', 'data' => '目前您还可以提取 ' . $_var_306 . '个 当前类型激活码']);
								} else {
									return json(['status' => '0', 'data' => '您已有大量该类型激活码未使用 请使用后再提取！']);
								}
							}
							if ($_var_297) {
								switch ($_var_296) {
									case 1000:
										$_var_307 = '1000';
										$_var_308 = advert('17') * 60;
										$_var_309 = '体验';
										$_var_310 = advert('1000');
										break;
									case 1001:
										$_var_307 = '1001';
										$_var_308 = 30 * 60 * 60 * 24;
										$_var_309 = '一月';
										$_var_310 = advert('1001');
										break;
									case 1002:
										$_var_307 = '1002';
										$_var_308 = 180 * 60 * 60 * 24;
										$_var_309 = '半年';
										$_var_310 = advert('1002');
										break;
									case 1003:
										$_var_307 = '1003';
										$_var_308 = 365 * 60 * 60 * 24;
										$_var_309 = '一年';
										$_var_310 = advert('1003');
										break;
									case 1004:
										$_var_307 = '1004';
										$_var_308 = 0;
										$_var_309 = '永久';
										$_var_310 = advert('1004');
										break;
								}
								$_var_311 = db('user')->where('id', $_var_294)->value('money');
								if ($_var_311 < $_var_297 * $_var_310) {
									$_var_312 = $_var_297 * $_var_310;
									return json(['status' => '0', 'data' => '余额不足' . $_var_312 . '元']);
								}
								$_var_313 = time();
								$_var_314['uid'] = $_var_294;
								$_var_314['name'] = $_var_309;
								$_var_314['number'] = $_var_297;
								$_var_314['time'] = $_var_313;
								if ($_var_298['power'] == '0') {
									$_var_314['money'] = 0;
								} else {
									$_var_314['money'] = $_var_297 * $_var_310;
								}
								$_var_315 = Db::name('cdkey_log')->insertGetId($_var_314);
								for ($_var_316 = 0; $_var_316 < $_var_297; $_var_316++) {
									$_var_317 = randstring($_var_304);
									$_var_318['uid'] = $_var_294;
									$_var_318['cdkey'] = $_var_317;
									$_var_318['ctime'] = $_var_313;
									$_var_318['y'] = 0;
									$_var_318['yid'] = NULL;
									$_var_318['time'] = $_var_308;
									$_var_318['type'] = $_var_307;
									$_var_318['name'] = $_var_309;
									$_var_318['log'] = $_var_315;
									db('cdkey')->insert($_var_318);
								}
								db('user')->where('id', $_var_294)->update(['money' => $_var_311 - $_var_297 * $_var_310]);
							} else {
								return json(['status' => '0', 'data' => '错误']);
							}
							$_var_319 = db('user')->where('id', $_var_294)->value('money');
							return json(['status' => '1', 'data' => '提取 ' . $_var_297 . ' 张 ' . $_var_309 . ' 激活码', 'log_id' => $_var_315, 'money' => $_var_319]);
						}
					}
				}
			}
		}
		return json(['status' => 1, 'data' => $_var_320]);
	}
	public function AppCdkeySendMail()
	{
		$_var_321 = input('key');
		$_var_322 = input('uid');
		$_var_323 = input('time');
		$_var_324 = input('type');
		$_var_325 = input('log_id');
		if (ApiSafetyVerification($_var_323, $_var_322, $_var_321) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_323, $_var_322, $_var_321) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_322, $_var_321);
		}
		$_var_326 = db('user')->where('id', $_var_322)->find();
		$_var_327 = db('cdkey')->where('log', $_var_325)->find();
		if (!$_var_326) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_326['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_326['email'] == '') {
					return json(['status' => '0', 'data' => '请先设置邮箱']);
				}
			}
		}
		$_var_328['uid'] = $_var_322;
		$_var_328['log'] = $_var_325;
		if ($_var_324 == 0) {
			$_var_328['y'] = 0;
			$_var_329 = '未激活';
		} else {
			$_var_329 = '  全部';
		}
		$_var_330 = db('cdkey')->where($_var_328)->count();
		if ($_var_330 <= 0) {
			return json(['status' => '0', 'data' => ' 发送失败！该批激活码未激活数量为零']);
		}
		$_var_331 = db('cdkey')->where($_var_328)->order('ctime desc')->select();
		if ($_var_326['nick_name'] == '') {
			$_var_332 = $_var_326['username'];
		} else {
			$_var_332 = $_var_326['nick_name'];
		}
		$_var_333 = $this->sendEmail($_var_331, $_var_326['email'], $_var_332, $_var_330, $_var_327['name'], $_var_327['ctime'], $_var_329);
		if ($_var_333) {
			return json(['status' => '1', 'data' => '已发送至邮箱' . $_var_326['email']]);
		} else {
			return json(['status' => '0', 'data' => '邮件发送失败 请稍后再试']);
		}
	}
	public function GetAdvertisementDetails()
	{
		$_var_334 = input('key');
		$_var_335 = input('uid');
		$_var_336 = input('time');
		if (ApiSafetyVerification($_var_336, $_var_335, $_var_334) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_336, $_var_335, $_var_334) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_335, $_var_334);
		}
		$_var_337 = db('user')->where('id', $_var_335)->find();
		$_var_338 = db('advertisement')->where('user_id', $_var_335)->find();
		$_var_339 = advert('1200');
		if (!$_var_337) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_337['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_339 == 1) {
					return json(['status' => '0', 'data' => '临时维护中']);
				}
			}
		}
		$_var_340['user_id'] = $_var_335;
		$_var_340['del'] = '0';
		$_var_341['Ad_limit_type_1_audit_1'] = db('advertisement')->where($_var_340)->where('cid', 1)->where('audit', 1)->count();
		$_var_341['Ad_limit_type_1_audit_2'] = db('advertisement')->where($_var_340)->where('cid', 1)->where('audit', 2)->count();
		$_var_341['Ad_limit_type_1_audit_3'] = db('advertisement')->where($_var_340)->where('cid', 1)->where('audit', 3)->count();
		$_var_341['Ad_limit_type_2_audit_1'] = db('advertisement')->where($_var_340)->where('cid', 2)->where('audit', 1)->count();
		$_var_341['Ad_limit_type_2_audit_2'] = db('advertisement')->where($_var_340)->where('cid', 2)->where('audit', 2)->count();
		$_var_341['Ad_limit_type_2_audit_3'] = db('advertisement')->where($_var_340)->where('cid', 2)->where('audit', 3)->count();
		$_var_341['Ad_limit_type_3_audit_1'] = db('advertisement')->where($_var_340)->where('cid', 3)->where('audit', 1)->count();
		$_var_341['Ad_limit_type_3_audit_2'] = db('advertisement')->where($_var_340)->where('cid', 3)->where('audit', 2)->count();
		$_var_341['Ad_limit_type_3_audit_3'] = db('advertisement')->where($_var_340)->where('cid', 3)->where('audit', 3)->count();
		$_var_341['Ad_limit_type_100_audit_1'] = db('advertisement')->where($_var_340)->where('cid', 100)->where('audit', 1)->count();
		$_var_341['Ad_limit_type_100_audit_2'] = db('advertisement')->where($_var_340)->where('cid', 100)->where('audit', 2)->count();
		$_var_341['Ad_limit_type_100_audit_3'] = db('advertisement')->where($_var_340)->where('cid', 100)->where('audit', 3)->count();
		$_var_341['Ad_limit_type_1'] = advert('1201');
		$_var_341['Ad_limit_type_2'] = advert('1202');
		$_var_341['Ad_limit_type_3'] = advert('1203');
		$_var_341['Ad_limit_type_100'] = advert('1204');
		return json(['status' => '1', 'data' => $_var_341]);
	}
	public function GetAdvertisementList()
	{
		$_var_342 = input('key');
		$_var_343 = input('uid');
		$_var_344 = input('time');
		$_var_345 = input('type');
		if (ApiSafetyVerification($_var_344, $_var_343, $_var_342) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_344, $_var_343, $_var_342) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_343, $_var_342);
		}
		$_var_346 = db('user')->where('id', $_var_343)->find();
		if (!$_var_346) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_346['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			}
		}
		$_var_347['user_id'] = $_var_343;
		$_var_347['cid'] = $_var_345;
		$_var_347['del'] = '0';
		$_var_348 = db('advertisement')->where($_var_347)->order('audit desc')->select();
		return json(['status' => '1', 'data' => $_var_348]);
	}
	public function GetAdvertisementEdit()
	{
		$_var_349 = input('key');
		$_var_350 = input('uid');
		$_var_351 = input('time');
		$_var_352 = input('adid');
		if (ApiSafetyVerification($_var_351, $_var_350, $_var_349) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_351, $_var_350, $_var_349) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_350, $_var_349);
		}
		$_var_353 = db('user')->where('id', $_var_350)->find();
		$_var_354 = db('advertisement')->where('id', $_var_352)->find();
		if (!$_var_353) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_353['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_354['audit'] != 3) {
					return json(['status' => '0', 'data' => '无权限']);
				} else {
					if ($_var_354['user_id'] != $_var_350) {
						return json(['status' => '0', 'data' => '无权限']);
					}
				}
			}
		}
		$_var_355['user_id'] = $_var_350;
		$_var_355['del'] = '0';
		$_var_355['id'] = $_var_352;
		$_var_356 = db('advertisement')->where($_var_355)->find();
		return json(['status' => '1', 'data' => $_var_356]);
	}
	public function AdvertisementEdit()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 暂时停止广告编辑操作']);
		}
		$_var_357 = input('key');
		$_var_358 = input('uid');
		$_var_359 = input('time');
		$_var_360 = input('adid');
		$_var_361 = input('url');
		$_var_362 = input('name');
		$_var_363 = input('picurl');
		if (ApiSafetyVerification($_var_359, $_var_358, $_var_357) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_359, $_var_358, $_var_357) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_358, $_var_357);
		}
		$_var_364 = db('user')->where('id', $_var_358)->find();
		$_var_365 = db('advertisement')->where('id', $_var_360)->find();
		if (!$_var_364) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_364['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_365['audit'] != 3) {
					return json(['status' => '0', 'data' => '无权限']);
				} else {
					if ($_var_365['user_id'] != $_var_358) {
						return json(['status' => '0', 'data' => '无权限']);
					}
				}
			}
		}
		if ($_var_361 != '') {
			$_var_366['linkurl'] = $_var_361;
		}
		if ($_var_363 != '') {
			$_var_366['picurl'] = $_var_363;
		}
		if ($_var_362 != '') {
			$_var_366['name'] = $_var_362;
		}
		$_var_366['audit'] = '2';
		$_var_367['user_id'] = $_var_358;
		$_var_367['id'] = $_var_360;
		db('advertisement')->where($_var_367)->update($_var_366);
		return json(['status' => '1', 'data' => '更新成功 请耐心等待审核']);
	}
	public function AdvertisementDel()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 为了数据安全 暂时停止广告删除操作']);
		}
		$_var_368 = input('key');
		$_var_369 = input('uid');
		$_var_370 = input('time');
		$_var_371 = input('adid');
		if (ApiSafetyVerification($_var_370, $_var_369, $_var_368) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_370, $_var_369, $_var_368) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_369, $_var_368);
		}
		$_var_372 = db('user')->where('id', $_var_369)->find();
		$_var_373 = db('advertisement')->where('id', $_var_371)->find();
		if (!$_var_372) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_372['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_373['audit'] == 2 || $_var_373['audit'] == 0) {
					return json(['status' => '0', 'data' => '无权限']);
				} else {
					if ($_var_373['user_id'] != $_var_369) {
						return json(['status' => '0', 'data' => '无权限']);
					}
				}
			}
		}
		$_var_374['user_id'] = $_var_369;
		$_var_374['id'] = $_var_371;
		$_var_375['del'] = 1;
		db('advertisement')->where('id', $_var_371)->update($_var_375);
		return json(['status' => '1', 'data' => '删除成功']);
	}
	public function AdvertisementAdd()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护 为了数据安全 暂时停止广告添加操作']);
		}
		$_var_376 = input('key');
		$_var_377 = input('uid');
		$_var_378 = input('time');
		$_var_379 = input('type');
		$_var_380 = input('url');
		$_var_381 = input('name');
		$_var_382 = input('picurl');
		if (ApiSafetyVerification($_var_378, $_var_377, $_var_376) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_378, $_var_377, $_var_376) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_377, $_var_376);
		}
		$_var_383 = db('user')->where('id', $_var_377)->find();
		$_var_384['user_id'] = $_var_377;
		$_var_384['cid'] = $_var_379;
		$_var_384['del'] = 0;
		$_var_385 = db('advertisement')->where($_var_384)->count();
		if ($_var_379 == 1) {
			$_var_386 = advert('1201');
		} else {
			if ($_var_379 == 2) {
				$_var_386 = advert('1202');
			} else {
				if ($_var_379 == 3) {
					$_var_386 = advert('1203');
				} else {
					if ($_var_379 == 100) {
						$_var_386 = advert('1204');
					}
				}
			}
		}
		if (!$_var_383) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_383['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_379 != 1 && $_var_379 != 2 && $_var_379 != 3 && $_var_379 != 100) {
					return json(['status' => '0', 'data' => '无权限']);
				} else {
					if ($_var_385 == $_var_386 || $_var_385 > $_var_386) {
						return json(['status' => '0', 'data' => '您的 ' . $_var_386 . ' 个广告位已用完']);
					}
				}
			}
		}
		if ($_var_380 == '') {
			return json(['status' => '0', 'data' => '请设置跳转URL地址']);
		}
		if ($_var_382 == '') {
			return json(['status' => '0', 'data' => '请上传广告图片']);
		}
		if ($_var_381 == '') {
			return json(['status' => '0', 'data' => '请填写标题']);
		}
		$_var_387['user_id'] = $_var_377;
		$_var_387['cid'] = $_var_379;
		$_var_387['picurl'] = $_var_382;
		$_var_387['linkurl'] = $_var_380;
		$_var_387['name'] = $_var_381;
		$_var_387['audit'] = '2';
		$_var_387['sort'] = '0';
		$_var_387['del'] = '0';
		db('advertisement')->insert($_var_387);
		return json(['status' => '1', 'data' => '广告新增成功 等待审核']);
	}
	public function AgentIndexBannerPreview()
	{
		$_var_388 = input('key');
		$_var_389 = input('uid');
		$_var_390 = input('time');
		if (ApiSafetyVerification($_var_390, $_var_389, $_var_388) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_390, $_var_389, $_var_388) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_389, $_var_388);
		}
		$_var_391 = db('user')->where('id', $_var_389)->find();
		$_var_392 = db('user')->where('id', $_var_391['parentid'])->find();
		$_var_393['user_id'] = $_var_389;
		$_var_393['cid'] = 100;
		$_var_393['del'] = '0';
		$_var_394['banner'] = db('advertisement')->where($_var_393)->order('sort desc')->select();
		return json(['status' => '1', 'data' => $_var_394]);
	}
	public function AgentRecommendBannerPreview()
	{
		$_var_395 = input('key');
		$_var_396 = input('uid');
		$_var_397 = input('time');
		if (ApiSafetyVerification($_var_397, $_var_396, $_var_395) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_397, $_var_396, $_var_395) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_396, $_var_395);
		}
		$_var_398 = db('user')->where('id', $_var_396)->find();
		$_var_399['user_id'] = $_var_396;
		$_var_399['cid'] = 1;
		$_var_399['del'] = '0';
		$_var_400['user_id'] = $_var_396;
		$_var_400['cid'] = 2;
		$_var_400['del'] = '0';
		$_var_401['user_id'] = $_var_396;
		$_var_401['cid'] = 3;
		$_var_401['del'] = '0';
		$_var_402['banner'] = db('advertisement')->where($_var_399)->order('sort desc')->select();
		$_var_402['small_icons'] = db('advertisement')->where($_var_400)->order('sort desc')->select();
		$_var_402['big_picture'] = db('advertisement')->where($_var_401)->order('sort desc')->select();
		return json(['status' => '1', 'data' => $_var_402]);
	}
	public function AppAgentSetup()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了数据安全 暂时停止信息变更操作']);
		}
		$_var_403 = input('key');
		$_var_404 = input('uid');
		$_var_405 = input('time');
		$_var_406 = input('safetycode');
		$_var_407 = input('weichat');
		$_var_408 = input('alipay');
		$_var_409 = input('alipayname');
		$_var_410 = input('email');
		if (ApiSafetyVerification($_var_405, $_var_404, $_var_403) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_405, $_var_404, $_var_403) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_404, $_var_403);
		}
		if ($_var_406 == '') {
			return json(['status' => '0', 'data' => '请输入安全码！']);
		}
		$_var_411 = db('user')->where('id', $_var_404)->find();
		if (!$_var_411) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_411['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_411['safetycode'] == '') {
					return json(['status' => '0', 'data' => '请先设置安全码']);
				} else {
					if ($_var_411['safetycode'] != $_var_406) {
						return json(['status' => '0', 'data' => '验证失败 安全码错误！']);
					}
				}
			}
		}
		$_var_412['weichat'] = $_var_407;
		$_var_412['zfb'] = $_var_408;
		$_var_412['zfb_name'] = $_var_409;
		$_var_412['email'] = $_var_410;
		db('user')->where('id', $_var_404)->update($_var_412);
		return json(['status' => 1, 'data' => ' 设置成功！']);
	}
	public function GetAgentActivationinformation()
	{
		$_var_413 = input('key');
		$_var_414 = input('uid');
		$_var_415 = input('time');
		if (ApiSafetyVerification($_var_415, $_var_414, $_var_413) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_415, $_var_414, $_var_413) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_414, $_var_413);
		}
		$_var_416 = db('user')->where('id', $_var_414)->find();
		if (!$_var_416) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_416['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			}
		}
		$_var_417['uid'] = $_var_414;
		$_var_417['type'] = '1000';
		$_var_418 = db('cdkey_type')->where($_var_417)->find();
		$_var_419['uid'] = $_var_414;
		$_var_419['type'] = '1001';
		$_var_420 = db('cdkey_type')->where($_var_419)->find();
		$_var_421['uid'] = $_var_414;
		$_var_421['type'] = '1002';
		$_var_422 = db('cdkey_type')->where($_var_421)->find();
		$_var_423['uid'] = $_var_414;
		$_var_423['type'] = '1003';
		$_var_424 = db('cdkey_type')->where($_var_423)->find();
		$_var_425['uid'] = $_var_414;
		$_var_425['type'] = '1004';
		$_var_426 = db('cdkey_type')->where($_var_425)->find();
		return json(['status' => 1, 'experience' => $_var_418, 'one_month' => $_var_420, 'half_a_year' => $_var_422, 'one_year' => $_var_424, 'permanent' => $_var_426]);
	}
	public function AgentActivationSetup()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了数据安全 暂时停止发卡编辑/变更操作']);
		}
		$_var_427 = input('key');
		$_var_428 = input('uid');
		$_var_429 = input('time');
		$_var_430 = input('safetycode');
		$_var_431 = input('cost_price');
		$_var_432 = input('gokaurl');
		$_var_433 = input('type');
		$_var_434 = input('del');
		if (ApiSafetyVerification($_var_429, $_var_428, $_var_427) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_429, $_var_428, $_var_427) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_428, $_var_427);
		}
		if ($_var_430 == '') {
			return json(['status' => '0', 'data' => '请输入安全码！']);
		}
		if ($_var_434 == 'del' || $_var_434 == 'DEL') {
			$_var_435['uid'] = $_var_428;
			$_var_435['type'] = $_var_433;
			db('cdkey_type')->where($_var_435)->delete();
			return json(['status' => 1, 'data' => ' 删除成功！']);
		}
		if ($_var_431 == '') {
			return json(['status' => '0', 'data' => '请输入价格！']);
		}
		if ($_var_432 == '') {
			return json(['status' => '0', 'data' => '请输入发卡地址！']);
		}
		if ($_var_433 == '') {
			return json(['status' => '0', 'data' => '参数错误！']);
		}
		$_var_436 = db('user')->where('id', $_var_428)->find();
		if (!$_var_436) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_436['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_436['safetycode'] == '') {
					return json(['status' => '0', 'data' => '请先设置安全码']);
				} else {
					if ($_var_436['safetycode'] != $_var_430) {
						return json(['status' => '0', 'data' => '验证失败 安全码错误！']);
					}
				}
			}
		}
		$_var_437['uid'] = 1;
		$_var_437['type'] = $_var_433;
		$_var_438 = db('cdkey_type')->where($_var_437)->find();
		if (!$_var_438 && advert('311') == 1) {
			return json(['status' => 0, 'data' => ' 该类型暂时不可设置！']);
		}
		$_var_435['uid'] = $_var_428;
		$_var_435['type'] = $_var_433;
		$_var_439 = db('cdkey_type')->where($_var_435)->find();
		if (!$_var_438) {
			$_var_440 = '专属会员·无广告·海量资源';
			if ($_var_433 == 1000) {
				$_var_441 = '体验';
			} else {
				if ($_var_433 == 1001) {
					$_var_441 = '月卡';
				} else {
					if ($_var_433 == 1002) {
						$_var_441 = '半年';
					} else {
						if ($_var_433 == 1003) {
							$_var_441 = '一年';
						} else {
							if ($_var_433 == 1004) {
								$_var_441 = '永久';
							}
						}
					}
				}
			}
		} else {
			$_var_441 = $_var_438['name'];
			$_var_440 = $_var_438['content'];
		}
		if ($_var_439) {
			$_var_442['gokaurl'] = $_var_432;
			$_var_442['cost_price'] = $_var_431;
			$_var_442['discount_price'] = $_var_431 * 1.5;
			$_var_442['name'] = $_var_441;
			$_var_442['content'] = $_var_440;
			db('cdkey_type')->where($_var_435)->update($_var_442);
			return json(['status' => 1, 'data' => ' 更新成功！']);
		} else {
			$_var_443['gokaurl'] = $_var_432;
			$_var_443['cost_price'] = $_var_431;
			$_var_443['discount_price'] = $_var_431 * 1.5;
			$_var_443['name'] = $_var_441;
			$_var_443['content'] = $_var_440;
			$_var_443['type'] = $_var_433;
			$_var_443['uid'] = $_var_428;
			db('cdkey_type')->insert($_var_443);
			return json(['status' => 1, 'data' => ' 设置成功！']);
		}
	}
	public function AgentCashOut()
	{
		if (advert('43') == '1') {
			return json(['status' => 0, 'data' => '系统维护中 为了您的数据安全 暂时停止提现操作']);
		}
		$_var_444 = input('key');
		$_var_445 = input('uid');
		$_var_446 = input('time');
		$_var_447 = input('safetycode');
		$_var_448 = input('money');
		if (ApiSafetyVerification($_var_446, $_var_445, $_var_444) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_446, $_var_445, $_var_444) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_445, $_var_444);
		}
		$_var_449 = db('user')->where('id', $_var_445)->find();
		$_var_450 = db('rebate_set')->where('id', 1)->find();
		if (!$_var_449) {
			return json(['status' => '0', 'data' => '无权限']);
		} else {
			if ($_var_449['power'] > 1) {
				return json(['status' => '0', 'data' => '无权限']);
			} else {
				if ($_var_449['status'] == 0) {
					return json(['status' => '0', 'data' => '账户已禁封']);
				}
			}
		}
		if (isset($_GET['money'])) {
			if ($_var_449['safetycode'] == '') {
				return json(['status' => '0', 'data' => '请先设置安全码']);
			} else {
				if ($_var_449['safetycode'] != $_var_447) {
					return json(['status' => '0', 'data' => '验证失败 安全码错误！']);
				} else {
					if (empty($_var_449['zfb'])) {
						return json(['status' => '0', 'data' => '您还没有设置提现账户！']);
					} else {
						$_var_451 = floor($_var_448);
						if ($_var_451 > 0) {
							$_var_452['uid'] = $_var_445;
							$_var_452['status'] = 1;
							$_var_453 = db('rebate_cashout_log')->where($_var_452)->sum('money');
							$_var_454['get_id'] = $_var_445;
							$_var_455 = db('rebate')->where($_var_454)->sum('money');
							$_var_456 = $_var_455 - $_var_453;
							if ($_var_451 < $_var_450['minimum_amount']) {
								return json(['status' => '0', 'data' => '最低提现额度' . $_var_450['minimum_amount'] . '元！']);
							}
							if ($_var_451 > $_var_456) {
								return json(['status' => '0', 'data' => '您可提现金额不足' . $_var_451 . '元！']);
							}
							if ($_var_449['tx'] == 1) {
								return json(['status' => '0', 'data' => '已有提现申请正在审核 请耐心等待！']);
							} else {
								db('user')->where('id=' . $_var_445)->update(['tx' => '1']);
								db('user')->where('id=' . $_var_445)->update(['txje' => $_var_451]);
								return json(['status' => '1', 'data' => $_var_451 . '元 提现申请成功 等待审核！']);
							}
						} else {
							return json(['status' => '0', 'data' => '参数不正确,不要搞事情！用户id已记录~IP已记录~']);
						}
					}
				}
			}
		} else {
			$_var_452['uid'] = $_var_445;
			$_var_452['status'] = 1;
			$_var_453 = db('rebate_cashout_log')->where($_var_452)->sum('money');
			$_var_454['get_id'] = $_var_445;
			$_var_455 = db('rebate')->where($_var_454)->sum('money');
			$_var_456 = $_var_455 - $_var_453;
			$_var_457['txje'] = $_var_449['txje'];
			$_var_457['tx'] = $_var_449['tx'];
			$_var_457['zfb'] = $_var_449['zfb'];
			$_var_457['zfb_name'] = $_var_449['zfb_name'];
			$_var_457['status'] = $_var_449['status'];
			if ($_var_455 == null) {
				$_var_457['rebate_money'] = '0';
			} else {
				$_var_457['rebate_money'] = $_var_455;
			}
			if ($_var_453 == null) {
				$_var_457['Cash_ok'] = '0';
			} else {
				$_var_457['Cash_ok'] = $_var_453;
			}
			$_var_457['money'] = $_var_456;
			if ($_var_449) {
				return json(['status' => '1', 'data' => $_var_457]);
			} else {
				return json(['status' => '0']);
			}
		}
	}
	public function agent_userlist()
	{
		$_var_458 = 10;
		$_var_459 = input('skip') * $_var_458;
		$_var_460 = input('key');
		$_var_461 = input('uid');
		$_var_462 = input('time');
		if (ApiSafetyVerification($_var_462, $_var_461, $_var_460) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_462, $_var_461, $_var_460) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_461, $_var_460);
		}
		$_var_463 = db('user')->where('id', $_var_461)->find();
		if ($_var_463['power'] > '1') {
			return json(['status' => 0, 'data' => '无权查看']);
		}
		$_var_464['parentid'] = $_var_461;
		$_var_464['power'] = '2';
		$_var_465 = db('user')->order('id desc')->where($_var_464)->limit($_var_459, $_var_458)->select();
		return json(['status' => 1, 'data' => $_var_465]);
	}
	public function agent_agentlist()
	{
		$_var_466 = 10;
		$_var_467 = input('skip') * $_var_466;
		$_var_468 = input('key');
		$_var_469 = input('uid');
		$_var_470 = input('time');
		if (ApiSafetyVerification($_var_470, $_var_469, $_var_468) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_470, $_var_469, $_var_468) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_469, $_var_468);
		}
		$_var_471 = db('user')->where('id', $_var_469)->find();
		if ($_var_471['power'] > '1') {
			return json(['status' => 0, 'data' => '无权查看']);
		}
		$_var_472['parentid'] = $_var_469;
		$_var_472['power'] = '1';
		$_var_473 = db('user')->order('id desc')->where($_var_472)->limit($_var_467, $_var_466)->select();
		return json(['status' => 1, 'data' => $_var_473]);
	}
	public function agent_usersearch()
	{
		$_var_474 = input('key');
		$_var_475 = input('uid');
		$_var_476 = input('time');
		$_var_477 = input('search_user');
		if (ApiSafetyVerification($_var_476, $_var_475, $_var_474) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_476, $_var_475, $_var_474) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_475, $_var_474);
		}
		$_var_478 = db('user')->where('id', $_var_475)->find();
		if ($_var_478['power'] > '1') {
			return json(['status' => 0, 'data' => '无权查看']);
		}
		if ($_var_477 == '1') {
			return json(['status' => 0, 'data' => '该用户你无权查看']);
		}
		if ($_var_475 == $_var_477) {
			return json(['status' => 0, 'data' => '自己的信息还需要查？']);
		}
		$_var_479 = db('user')->where('id', $_var_477)->find();
		if (!$_var_479) {
			$_var_479 = db('user')->where('username', $_var_477)->find();
		}
		if ($_var_479['parentid'] != $_var_475) {
			return json(['status' => 0, 'data' => '该用户你无权查看']);
		}
		$_var_480['id'] = $_var_477;
		$_var_478 = db('user')->where($_var_480)->find();
		$_var_481['id'] = $_var_478['parentid'];
		$_var_482 = db('user')->where($_var_481)->find();
		if (!$_var_478) {
			$_var_483['username'] = $_var_477;
			$_var_478 = db('user')->where($_var_483)->find();
			$_var_481['id'] = $_var_478['parentid'];
			$_var_482 = db('user')->where($_var_481)->find();
			if (!$_var_478) {
				return json(['status' => 0, 'data' => '无权查看']);
			}
		}
		return json(['status' => 1, 'data' => $_var_478, 'parent_data' => $_var_482]);
	}
	public function agent_cdkeysearch()
	{
		$_var_484 = input('key');
		$_var_485 = input('uid');
		$_var_486 = input('time');
		$_var_487 = input('search_cdkey');
		if (ApiSafetyVerification($_var_486, $_var_485, $_var_484) == 0) {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
		if (ApiSafetyVerification($_var_486, $_var_485, $_var_484) == 9) {
			return json(['status' => '829', 'data' => '密钥失效']);
		}
		if (advert('91') == 1) {
			Redis_Write($_var_485, $_var_484);
		}
		$_var_488 = GetUserInformation($_var_485);
		$_var_489 = GetCdkeyInformation($_var_487);
		if (!$_var_488 || !$_var_489) {
			return json(['status' => 10, 'data' => '该信息无权查看']);
		}
		if ($_var_488['power'] > 1) {
			return json(['status' => 9, 'data' => '非法请求 权限不足']);
		}
		if ($_var_488['id'] != $_var_489['uid']) {
			return json(['status' => 8, 'data' => '该信息无权查看']);
		}
		if ($_var_488['id'] == $_var_489['uid']) {
			if ($_var_489['y'] == 1) {
				$_var_490 = GetUserInformation($_var_489['yid']);
				return json(['status' => 1, 'user_data' => $_var_488, 'cdkey_data' => $_var_489, 'use_user_data' => $_var_490]);
			} else {
				return json(['status' => 0, 'data' => '该激活码未被使用', 'cdkey_data' => $_var_489]);
			}
		}
	}
	public function dologin()
	{
		session(null);
		$this->redirect('login/index');
	}
	function getIP()
	{
		if (getenv('HTTP_CLIENT_IP')) {
			$_var_491 = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$_var_491 = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$_var_491 = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$_var_491 = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$_var_491 = getenv('HTTP_FORWARDED');
		} else {
			$_var_491 = $_SERVER['REMOTE_ADDR'];
		}
		return $_var_491;
	}
}