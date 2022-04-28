<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use think\Session;
use app\index\controller\SuncommonRyan;
class Index extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();
	}
	public function index_v4()
	{
		$this->check_power();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('advert')->where('id', 21)->value('content');
		if (empty($_var_2)) {
			$_var_3 = '完美网服';
		} else {
			$_var_3 = $_var_2;
		}
		$_var_4 = db('user')->where('(power = 1 or power =2) and logintime >' . strtotime(date('Y-m-d')))->count();
		$_var_5 = 60 * 60 * 24 * 30;
		$_var_6 = strtotime(date('Y-m-d'));
		$_var_7 = $_var_6 - $_var_5;
		$_var_8 = db('user')->where('(power = 1 or power =2) and logintime >' . $_var_7)->count('distinct(id)');
		$_var_9 = db('user')->where('power = 1')->count();
		$_var_10 = db('user')->where('power > 0')->count();
		$_var_11 = db('cdkey')->where('yid>1')->count('distinct(yid)');
		$_var_12['id'] = array('neq', 1);
		$_var_12['lasttime'] = array('egt', time());
		$_var_13 = db('user')->where($_var_12)->count();
		$_var_14['type'] = array('eq', 1);
		$_var_14['power'] = array('neq', 0);
		$_var_15 = db('user')->where($_var_14)->count();
		$_var_16 = $_var_13 + $_var_15;
		if ($_var_10 == '0') {
			$_var_17 = '0.00';
			$_var_18 = '0.00';
			$_var_19 = '0.00';
			$_var_20 = '0.00';
		} else {
			$_var_17 = number_format($_var_11 / $_var_10 * 100, 2, '.', '');
			$_var_18 = number_format($_var_16 / $_var_10 * 100, 2, '.', '');
			$_var_19 = number_format($_var_4 / $_var_10 * 100, 2, '.', '');
			$_var_20 = number_format($_var_8 / $_var_10 * 100, 2, '.', '');
		}
		$_var_21['tx'] = '1';
		$_var_21['status'] = '1';
		$_var_22 = db('user')->where($_var_21)->count();
		$_var_23 = db('cdkey')->count();
		$_var_24 = db('cdkey')->where('y = 1')->count();
		$_var_25 = db('cdkey')->where('y = 0')->count();
		if ($_var_23 == '0') {
			$_var_26 = '0.00';
		} else {
			$_var_26 = number_format($_var_24 / $_var_23 * 100, 2, '.', '');
		}
		if (advert('48') !== authorization_checking()) {
			$_var_27 = 0;
		} else {
			$_var_27 = 1;
		}
		$_var_28 = db('advertisement')->where('audit = 2')->count();
		$_var_29 = db('user')->order('ctime DESC')->limit(18)->select();
		$_var_30 = db('cdkey')->where('y', '1')->order('stime DESC')->limit(6)->select();
		$_var_31 = advert('43');
		return view('index_v4', ['advertisement_audit' => $_var_28, 'appId' => substr_replace(advert('47'), '****', 4, 6), 'authorization_tips' => $_var_27, 'login_count' => $_var_4, 'login_ratio' => $_var_19, 'thirty_day_count' => $_var_8, 'thirty_day_ratio' => $_var_20, 'agent_count' => $_var_9, 'paying_users_count' => $_var_11, 'paying_users_ratio' => $_var_17, 'vip_users_count' => $_var_16, 'permanent_vip_users_count' => $_var_15, 'vip_users_ratio' => $_var_18, 'free_users_count' => $_var_10 - $_var_11, 'users_count' => $_var_10, 'cash_conut' => $_var_22, 'all_Activation_code' => $_var_23, 'yy_Activation_code' => $_var_24, 'wy_Activation_code' => $_var_25, 'cdkey_usage_ratio' => $_var_26, 'maintenance_mode' => $_var_31, 'app_name' => $_var_3, 'user_list' => $_var_29, 'cdkey_list' => $_var_30, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0, 'SERVER_SOFTWARE' => $_SERVER['SERVER_SOFTWARE'], 'PHP_OS' => PHP_OS, 'SERVER_NAME' => $_SERVER['SERVER_NAME'], 'PHP_VERSION' => PHP_VERSION, 'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'], 'HTTP_USER_AGENT' => substr($_SERVER['HTTP_USER_AGENT'], 0, 40), 'SERVER_PROTOCOL' => $_SERVER['SERVER_PROTOCOL'], 'max_execution_time' => ini_get('max_execution_time') . 's', 'datetime' => date('Y-n-j H:i:s'), 'gmdate' => gmdate('Y-n-j H:i:s', time() + 8 * 3600), 'SERVER_IP' => gethostbyname($_SERVER['SERVER_NAME']), 'disk_free_space' => round(disk_free_space('.') / (1024 * 1024), 2) . 'M', 'disk_free' => round(disk_total_space('.') / (1024 * 1024), 2) . 'M', 'disk' => number_format(round(disk_free_space('.') / (1024 * 1024), 2) / round(disk_total_space('.') / (1024 * 1024), 2) * 100, 2)]);
	}
	public function appId()
	{
		$this->check_power();
		$_var_32 = $this->random_ryan_key(session('user'));
		$_var_33 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power();
			db('advert')->where('id', 47)->update(['content' => input('appId')]);
			$this->success('操作成功', 'index/index_v4');
		}
		return view('appId', ['Ryan_time' => $_var_33, 'Ryan_key' => $_var_32]);
	}
	public function appKey()
	{
		$this->check_power();
		$_var_34 = $this->random_ryan_key(session('user'));
		$_var_35 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power();
			db('advert')->where('id', 48)->update(['content' => input('appKey')]);
			if (input('appKey') !== authorization_checking()) {
				$this->success('授权码无效', 'index/appKey');
			} else {
				$this->success('授权成功', 'index/index_v4');
			}
		}
		return view('appKey', ['Ryan_time' => $_var_35, 'Ryan_key' => $_var_34]);
	}
	public function basic_information()
	{

		$this->check_power();
		$_var_36 = $this->random_ryan_key(session('user'));
		$_var_37 = time();
		$_var_38 = db('user')->where('id', session('user'))->value('weichat');
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 2)->update(['content' => input('sign_down')]);
			db('advert')->where('id', 3)->update(['content' => input('sign_pass')]);
			db('advert')->where('id', 4)->update(['content' => input('sign')]);
			db('advert')->where('id', 5)->update(['content' => intval(input('time'))]);
			db('advert')->where('id', 21)->update(['content' => input('app_name')]);
			db('advert')->where('id', 22)->update(['content' => input('app_ios_down')]);
			db('advert')->where('id', 23)->update(['content' => input('app_android_down')]);
			db('advert')->where('id', 24)->update(['content' => input('app_android_apk_down')]);
			db('advert')->where('id', 30)->update(['content' => input('domain_name')]);
			db('advert')->where('id', 126)->update(['content' => input('cdkey_search_frequency')]);
			db('advert')->where('id', 34)->update(['content' => input('Invitation_points')]);
			db('advert')->where('id', 45)->update(['content' => input('index_video_num')]);
			db('user')->where('id', session('user'))->update(['weichat' => input('wechat')]);
			db('advert')->where('id', 20)->update(['content' => input('agent_default_money')]);
			db('advert')->where('id', 121)->update(['content' => input('tencent_x5')]);
			db('advert')->where('id', 44)->update(['content' => input('agent_bulletin')]);
			db('advert')->where('id', 300)->update(['content' => input('Hot_search')]);
			db('advert')->where('id', 112)->update(['content' => input('exemption_from_declaration')]);
			db('advert')->where('id', 66)->update(['content' => input('SingleSignOnRate')]);
			db('advert')->where('id', 67)->update(['content' => input('advertising_slogan')]);
			db('advert')->where('id', 111)->update(['content' => input('agent_introduction_picture')]);
			db('advert')->where('id', 115)->update(['content' => input('User_AgentIntroductionBanner')]);
			db('advert')->where('id', 68)->update(['content' => input('safety_threshold')]);
			db('advert')->where('id', 35)->update(['content' => input('Sm_Authorization')]);
			db('advert')->where('id', 83)->update(['content' => input('connection_failed_tips')]);
			db('advert')->where('id', 114)->update(['content' => input('DefaultLogo')]);
			$this->write_ryan_operation_log('编辑基础信息', 0, '');
			$this->success('操作成功', 'index/basic_information');
		}
		$_var_39 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('basic_information', ['wechat' => $_var_38, 'admin_list' => $_var_39, 'Ryan_time' => $_var_37, 'Ryan_key' => $_var_36]);
	}
	public function advanced_functions()
	{

		$this->check_power();
		$_var_40 = $this->random_ryan_key(session('user'));
		$_var_41 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			db('advert')->where('id', 43)->update(['content' => input('maintenance_mode')]);
			if (input('maintenance_mode') == '1') {
				db('advert')->where('id', 353)->update(['content' => '0']);
				db('advert')->where('id', 1100)->update(['content' => '0']);
				db('advert')->where('id', 330)->update(['content' => '0']);
			} else {
				db('advert')->where('id', 353)->update(['content' => input('register_switch')]);
				db('advert')->where('id', 1100)->update(['content' => input('CDKEY_on_off')]);
				db('advert')->where('id', 330)->update(['content' => input('cdkey_use_switch')]);
			}
			db('advert')->where('id', 172)->update(['content' => intval(input('Vip_Voice_cues'))]);
			db('advert')->where('id', 6)->update(['content' => input('deviceId')]);
			db('advert')->where('id', 7)->update(['content' => input('Dynamic_Token')]);
			db('advert')->where('id', 390)->update(['content' => input('Proxy_login')]);
			db('advert')->where('id', 93)->update(['content' => input('mainFooter')]);
			db('advert')->where('id', 342)->update(['content' => input('invitation_attribution_control')]);
			db('advert')->where('id', 130)->update(['content' => input('ranking_agent_ad')]);
			db('advert')->where('id', 92)->update(['content' => input('RePassPriority')]);
			db('advert')->where('id', 69)->update(['content' => input('juhe_AppKey')]);
			db('advert')->where('id', 70)->update(['content' => input('juhe_id')]);
			db('advert')->where('id', 309)->update(['content' => input('debug_model')]);
			db('advert')->where('id', 311)->update(['content' => input('agent_activation_setup_power')]);
			db('advert')->where('id', 2000)->update(['content' => input('mod_open_Live')]);
			db('advert')->where('id', 2100)->update(['content' => input('mod_open_notice')]);
			db('advert')->where('id', 312)->update(['content' => input('mod_open_search')]);
			db('advert')->where('id', 81)->update(['content' => input('ActivationCodeDetection')]);
			db('advert')->where('id', 82)->update(['content' => input('SingleSignOn')]);
			db('advert')->where('id', 90)->update(['content' => input('offlineState')]);
			db('advert')->where('id', 91)->update(['content' => input('Admiralty')]);
			$this->write_ryan_operation_log('编辑高级功能', 0, '');
			$this->success('操作成功', 'index/advanced_functions');
		}
		$_var_42 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('advanced_functions', ['admin_list' => $_var_42, 'Ryan_time' => $_var_41, 'Ryan_key' => $_var_40]);
	}
	public function cdkey()
	{

		$this->check_power();
		$_var_43 = $this->random_ryan_key(session('user'));
		$_var_44 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 28)->update(['content' => input('kami_prefix')]);
			db('advert')->where('id', 29)->update(['content' => intval(input('kami_length'))]);
			db('advert')->where('id', 380)->update(['content' => input('Activation_code_upper_limit')]);
			db('advert')->where('id', 352)->update(['content' => input('SingleLaunchOfCdkey')]);
			if (!empty(input('experience_cdkey_time'))) {
				db('advert')->where('id', 17)->update(['content' => input('experience_cdkey_time')]);
				db('cdkey')->where('type', 1000)->update(['time' => input('experience_cdkey_time') * 60]);
			}
			db('advert')->where('id', 1000)->update(['content' => input('experience_price')]);
			db('advert')->where('id', 1001)->update(['content' => input('onemonth_price')]);
			db('advert')->where('id', 1002)->update(['content' => input('halfayear_price')]);
			db('advert')->where('id', 1003)->update(['content' => input('oneyear_price')]);
			db('advert')->where('id', 1004)->update(['content' => input('permanent_price')]);
			$this->write_ryan_operation_log('编辑激活码设置', 0, '');
			$this->success('操作成功', 'index/cdkey');
		}
		$_var_45 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('cdkey', ['admin_list' => $_var_45, 'Ryan_time' => $_var_44, 'Ryan_key' => $_var_43]);
	}
	public function smtp()
	{

		$this->check_power();
		$_var_46 = $this->random_ryan_key(session('user'));
		$_var_47 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 370)->update(['content' => input('Simple_Mail_Transfer_Protocol_server')]);
			db('advert')->where('id', 371)->update(['content' => intval(input('Simple_Mail_Transfer_Protocol_port'))]);
			db('advert')->where('id', 372)->update(['content' => input('Simple_Mail_Transfer_Protocol_username')]);
			db('advert')->where('id', 373)->update(['content' => input('Simple_Mail_Transfer_Protocol_password')]);
			db('advert')->where('id', 374)->update(['content' => input('Simple_Mail_Transfer_Protocol_name')]);
			$this->write_ryan_operation_log('编辑SMTP设置', 0, '');
			$this->success('操作成功', 'index/smtp');
		}
		$_var_48 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('smtp', ['admin_list' => $_var_48, 'Ryan_time' => $_var_47, 'Ryan_key' => $_var_46]);
	}
	public function rakeback()
	{

		$this->check_power();
		$_var_49 = $this->random_ryan_key(session('user'));
		$_var_50 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('rebate_set')->where('id', 1)->update(['agent_rebate_a' => input('agent_rebate_a')]);
			db('rebate_set')->where('id', 1)->update(['agent_rebate_c' => input('agent_rebate_b')]);
			db('rebate_set')->where('id', 1)->update(['agent_rebate_c' => input('agent_rebate_c')]);
			db('rebate_set')->where('id', 1)->update(['minimum_amount' => input('minimum_amount')]);
			$this->write_ryan_operation_log('编辑返佣比例', 0, '');
			$this->success('操作成功', 'index/rakeback');
		}
		$_var_51 = db('rebate_set')->where('id', 1)->select();
		$_var_52 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('rakeback', ['admin_list' => $_var_52, 'list' => $_var_51, 'Ryan_time' => $_var_50, 'Ryan_key' => $_var_49]);
	}
	public function price()
	{

		if (advert('43') == '1') {
			$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
			return;
		}
		$this->check_power();
		$_var_53 = $this->random_ryan_key(session('user'));
		$_var_54 = time();
		$_var_55 = db('cdkey_type')->where('uid', session('user'))->order('type ASC')->select();
		$_var_56 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('price', ['Ryan_time' => $_var_54, 'Ryan_key' => $_var_53, 'cdkey_type_list' => $_var_55, 'admin_list' => $_var_56]);
	}
	public function price_add()
	{

		$this->check_power();
		$_var_57 = $this->random_ryan_key(session('user'));
		$_var_58 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			if (isset($_POST['type'])) {
				$_var_59['name'] = input('name');
				$_var_59['cost_price'] = input('cost_price');
				$_var_59['discount_price'] = input('cost_price') * 1.5;
				$_var_59['content'] = input('content');
				$_var_59['type'] = input('type');
				$_var_59['uid'] = session('user');
				$_var_59['gokaurl'] = input('gokaurl');
				db('cdkey_type')->insert($_var_59);
				$this->write_ryan_operation_log('添加发卡列表', 0, $_var_59['name']);
				$this->success('操作成功', 'index/price');
			} else {
				$this->error('请选择绑定类型', 'index/price_add');
			}
		}
		$_var_60['uid'] = session('user');
		$_var_60['type'] = '1000';
		$_var_61 = db('cdkey_type')->where($_var_60)->find();
		if ($_var_61) {
			$_var_62 = 1;
		} else {
			$_var_62 = 0;
		}
		$_var_63['uid'] = session('user');
		$_var_63['type'] = '1001';
		$_var_64 = db('cdkey_type')->where($_var_63)->find();
		if ($_var_64) {
			$_var_65 = 1;
		} else {
			$_var_65 = 0;
		}
		$_var_66['uid'] = session('user');
		$_var_66['type'] = '1002';
		$_var_67 = db('cdkey_type')->where($_var_66)->find();
		if ($_var_67) {
			$_var_68 = 1;
		} else {
			$_var_68 = 0;
		}
		$_var_69['uid'] = session('user');
		$_var_69['type'] = '1003';
		$_var_70 = db('cdkey_type')->where($_var_69)->find();
		if ($_var_70) {
			$_var_71 = 1;
		} else {
			$_var_71 = 0;
		}
		$_var_72['uid'] = session('user');
		$_var_72['type'] = '1004';
		$_var_73 = db('cdkey_type')->where($_var_72)->find();
		if ($_var_73) {
			$_var_74 = 1;
		} else {
			$_var_74 = 0;
		}
		$_var_75['uid'] = session('user');
		$_var_75['type'] = '1010';
		$_var_76 = db('cdkey_type')->where($_var_75)->find();
		if ($_var_76) {
			$_var_77 = 1;
		} else {
			$_var_77 = 0;
		}
		if ($_var_77 == 1 && $_var_74 == 1 && $_var_71 == 1 && $_var_68 == 1 && $_var_65 == 1 && $_var_62 == 1) {
			$_var_78 = 1;
		} else {
			$_var_78 = 0;
		}
		$_var_79 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('price_add', ['admin_list' => $_var_79, 'experience' => $_var_62, 'one_month' => $_var_65, 'half_a_year' => $_var_68, 'one_year' => $_var_71, 'permanent' => $_var_74, 'agent' => $_var_77, 'SetupState' => $_var_78, 'Ryan_time' => $_var_58, 'Ryan_key' => $_var_57]);
	}
	public function price_edit()
	{

		$this->check_power();
		$_var_80 = $this->random_ryan_key(session('user'));
		$_var_81 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_82['name'] = input('name');
			$_var_82['cost_price'] = input('cost_price');
			$_var_82['discount_price'] = input('cost_price') * 1.5;
			$_var_82['content'] = input('content');
			$_var_82['gokaurl'] = input('gokaurl');
			$_var_83['uid'] = session('user');
			$_var_83['id'] = input('id');
			db('cdkey_type')->where($_var_83)->update($_var_82);
			$this->write_ryan_operation_log('编辑发卡列表', 0, $_var_82['name']);
			$this->success('编辑成功', 'index/price');
		}
		$_var_84['uid'] = session('user');
		$_var_84['id'] = input('id');
		$_var_85 = db('cdkey_type')->where($_var_84)->find();
		if ($_var_85['type'] == 1000) {
			$_var_86 = '体验';
		} else {
			if ($_var_85['type'] == 1001) {
				$_var_86 = '一月';
			} else {
				if ($_var_85['type'] == 1002) {
					$_var_86 = '半年';
				} else {
					if ($_var_85['type'] == 1003) {
						$_var_86 = '一年';
					} else {
						if ($_var_85['type'] == 1004) {
							$_var_86 = '永久';
						} else {
							if ($_var_85['type'] == 1010) {
								$_var_86 = '代理';
							}
						}
					}
				}
			}
		}
		$_var_87 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('price_edit', ['admin_list' => $_var_87, 'cdkey_type_data' => $_var_85, 'cdkey_type_name' => $_var_86, 'Ryan_time' => $_var_81, 'Ryan_key' => $_var_80]);
	}
	public function price_del()
	{
		$this->check_power();
		if (advert('43') == '1') {
			$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
			return;
		}
		$_var_88 = $this->random_ryan_key(session('user'));
		$_var_89 = time();
		$this->check_ryan_time(input('Ryan_time'));
		$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
		$this->check_ryan_referer();
		$_var_90 = url('index/price', ['Ryan_time' => $_var_89, 'Ryan_key' => $_var_88]);
		$_var_91['id'] = input('del_id');
		$_var_92 = db('cdkey_type')->where($_var_91)->find();
		if (!$_var_92) {
			$this->error('操作失败', $_var_90);
			return;
		}
		if (input('del_id') == '1' || $_var_92['type'] == '1010') {
			$this->error('代理类目 不可删除', $_var_90);
			return;
		}
		$_var_93 = input('key');
		$_var_94 = input('uid');
		$_var_95 = input('time');
		$_var_96 = input('del_id');
		db('cdkey_type')->where('id', $_var_96)->delete();
		$this->write_ryan_operation_log('删除发卡列表', 0, $_var_92['name']);
		$this->success('删除成功', $_var_90);
	}
	public function interface()
	{

		$this->check_power();
		$_var_97 = $this->random_ryan_key(session('user'));
		$_var_98 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 8)->update(['content' => input('interface_one')]);
			db('advert')->where('id', 9)->update(['content' => input('interface_two')]);
			db('advert')->where('id', 10)->update(['content' => input('interface_three')]);
			db('advert')->where('id', 11)->update(['content' => input('interface_four')]);
			db('advert')->where('id', 12)->update(['content' => input('interface_five')]);
			db('advert')->where('id', 1500)->update(['content' => input('Ios_alone_interface_switch')]);
			db('advert')->where('id', 1501)->update(['content' => input('jx_ios_Interface_one')]);
			db('advert')->where('id', 1502)->update(['content' => input('jx_ios_Interface_two')]);
			db('advert')->where('id', 1503)->update(['content' => input('jx_ios_Interface_three')]);
			db('advert')->where('id', 1504)->update(['content' => input('jx_ios_Interface_four')]);
			db('advert')->where('id', 1505)->update(['content' => input('jx_ios_Interface_five')]);
			db('advert')->where('id', 13)->update(['content' => input('interface_json_one_id')]);
			db('advert')->where('id', 14)->update(['content' => input('interface_json_one_token')]);
			db('advert')->where('id', 15)->update(['content' => input('interface_json_two_id')]);
			db('advert')->where('id', 16)->update(['content' => input('interface_json_two_token')]);
			db('advert')->where('id', 301)->update(['content' => input('interface_json_opt')]);
			db('advert')->where('id', 80)->update(['content' => input('interface_type_opt')]);
			db('advert')->where('id', 113)->update(['content' => input('search_api_url')]);
			$_var_99 = strtotime(date('Y-m-d'), time());
			$_var_100 = md5($_var_99);
			if (advert('309') == '1' && advert('310') == $_var_100) {
				$_var_101 = base64_encode(input('iqy_play_decide'));
				$_var_102 = base64_encode(input('tx_play_decide'));
				$_var_103 = base64_encode(input('yk_play_decide'));
				$_var_104 = base64_encode(input('sohu_play_decide'));
				$_var_105 = base64_encode(input('leshi_play_decide'));
				$_var_106 = base64_encode(input('m1905_play_decide'));
				$_var_107 = base64_encode(input('mg_play_decide'));
				$_var_108 = base64_encode(input('migu_play_decide'));
				$_var_109 = base64_encode(input('pptv_play_decide'));
				$_var_110 = base64_encode(input('fx_play_decide'));
			} else {
				$_var_101 = input('iqy_play_decide');
				$_var_102 = input('tx_play_decide');
				$_var_103 = input('yk_play_decide');
				$_var_104 = input('sohu_play_decide');
				$_var_105 = input('leshi_play_decide');
				$_var_106 = input('m1905_play_decide');
				$_var_107 = input('mg_play_decide');
				$_var_108 = input('migu_play_decide');
				$_var_109 = input('pptv_play_decide');
				$_var_110 = input('fx_play_decide');
			}
			if (!empty(input('iqy_play_decide')) && !empty(input('tx_play_decide')) && !empty(input('yk_play_decide')) && !empty(input('sohu_play_decide')) && !empty(input('leshi_play_decide')) && !empty(input('m1905_play_decide')) && !empty(input('mg_play_decide')) && !empty(input('migu_play_decide')) && !empty(input('pptv_play_decide')) && !empty(input('fx_play_decide'))) {
				db('advert')->where('id', 1300)->update(['content' => $_var_101]);
				db('advert')->where('id', 1301)->update(['content' => $_var_102]);
				db('advert')->where('id', 1302)->update(['content' => $_var_103]);
				db('advert')->where('id', 1303)->update(['content' => $_var_104]);
				db('advert')->where('id', 1304)->update(['content' => $_var_105]);
				db('advert')->where('id', 1305)->update(['content' => $_var_106]);
				db('advert')->where('id', 1306)->update(['content' => $_var_107]);
				db('advert')->where('id', 1307)->update(['content' => $_var_108]);
				db('advert')->where('id', 1308)->update(['content' => $_var_109]);
				db('advert')->where('id', 1309)->update(['content' => $_var_110]);
			}
			$this->write_ryan_operation_log('编辑解析接口', 0, '');
			$this->success('操作成功', 'index/interface');
		}
		$_var_111 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		$_var_99 = strtotime(date('Y-m-d'), time());
		$_var_100 = md5($_var_99);
		if ($_var_100 == advert('310')) {
			$_var_112['iqy'] = base64_decode(advert('1300'));
			$_var_112['tx'] = base64_decode(advert('1301'));
			$_var_112['yk'] = base64_decode(advert('1302'));
			$_var_112['sohu'] = base64_decode(advert('1303'));
			$_var_112['ls'] = base64_decode(advert('1304'));
			$_var_112['m1905'] = base64_decode(advert('1305'));
			$_var_112['mg'] = base64_decode(advert('1306'));
			$_var_112['migu'] = base64_decode(advert('1307'));
			$_var_112['pptv'] = base64_decode(advert('1308'));
			$_var_112['fx'] = base64_decode(advert('1309'));
		} else {
			$_var_112['iqy'] = advert('1300');
			$_var_112['tx'] = advert('1301');
			$_var_112['yk'] = advert('1302');
			$_var_112['sohu'] = advert('1303');
			$_var_112['ls'] = advert('1304');
			$_var_112['m1905'] = advert('1305');
			$_var_112['mg'] = advert('1306');
			$_var_112['migu'] = advert('1307');
			$_var_112['pptv'] = advert('1308');
			$_var_112['fx'] = advert('1309');
		}
		$_var_99 = strtotime(date('Y-m-d'), time());
		$_var_100 = md5($_var_99);
		if ($_var_100 == advert('310')) {
			$_var_113 = '1';
		} else {
			$_var_113 = '0';
		}
		return view('interface', ['debug_yz' => $_var_113, 'play_decide' => $_var_112, 'admin_list' => $_var_111, 'Ryan_time' => $_var_98, 'Ryan_key' => $_var_97]);
	}
	public function page_information()
	{

		$this->check_power();
		$_var_114 = $this->random_ryan_key(session('user'));
		$_var_115 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 50)->update(['content' => input('app_index_subtitle')]);
			db('advert')->where('id', 46)->update(['content' => input('app_index_logo')]);
			db('advert')->where('id', 31)->update(['content' => input('app_index_content')]);
			db('advert')->where('id', 32)->update(['content' => input('app_index_img')]);
			db('advert')->where('id', 33)->update(['content' => input('app_index_scrolling_keywords')]);
			db('advert')->where('id', 40)->update(['content' => input('app_index_keywords')]);
			db('advert')->where('id', 51)->update(['content' => input('app_wap_logo')]);
			db('advert')->where('id', 52)->update(['content' => input('app_wap_phone')]);
			db('advert')->where('id', 53)->update(['content' => input('app_wap_poster_one')]);
			db('advert')->where('id', 54)->update(['content' => input('app_wap_title_one')]);
			db('advert')->where('id', 55)->update(['content' => input('app_wap_subtitle_one')]);
			db('advert')->where('id', 56)->update(['content' => input('app_wap_poster_two')]);
			db('advert')->where('id', 57)->update(['content' => input('app_wap_title_two')]);
			db('advert')->where('id', 58)->update(['content' => input('app_wap_subtitle_two')]);
			db('advert')->where('id', 59)->update(['content' => input('app_wap_poster_three')]);
			db('advert')->where('id', 60)->update(['content' => input('app_wap_title_three')]);
			db('advert')->where('id', 61)->update(['content' => input('app_wap_subtitle_three')]);
			db('advert')->where('id', 62)->update(['content' => input('app_wap_down_num')]);
			db('advert')->where('id', 63)->update(['content' => input('app_wap_background_one')]);
			db('advert')->where('id', 64)->update(['content' => input('app_wap_background_two')]);
			db('advert')->where('id', 65)->update(['content' => input('app_wap_background_three')]);
			$this->write_ryan_operation_log('编辑站点信息', 0, '');
			$this->success('操作成功', 'index/page_information');
		}
		$_var_116 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('page_information', ['admin_list' => $_var_116, 'Ryan_time' => $_var_115, 'Ryan_key' => $_var_114]);
	}
	public function PaymentConfig()
	{

		$this->check_power();
		$_var_117 = $this->random_ryan_key(session('user'));
		$_var_118 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 1400)->update(['content' => input('alipay_app_id')]);
			db('advert')->where('id', 1401)->update(['content' => input('alipay_public_key')]);
			db('advert')->where('id', 1402)->update(['content' => input('merchant_private_key')]);
			db('advert')->where('id', 1410)->update(['content' => input('alipay_up_agent_switch')]);
			db('advert')->where('id', 1411)->update(['content' => input('alipay_up_agent_custom_identity')]);
			$this->write_ryan_operation_log('编辑支付接口', 0, '');
			$this->success('操作成功', 'index/PaymentConfig');
		}
		$_var_119 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('paymentconfig', ['admin_list' => $_var_119, 'Ryan_time' => $_var_118, 'Ryan_key' => $_var_117]);
	}
	public function HelpDocs()
	{

		$this->check_power();
		$_var_120 = $this->random_ryan_key(session('user'));
		$_var_121 = time();
		$_var_122 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('helpdocs', ['admin_list' => $_var_122, 'Ryan_time' => $_var_121, 'Ryan_key' => $_var_120]);
	}
	public function UpdateLocalData()
	{
		$_var_123 = strtotime(date('Y-m-d'), time());
		$_var_124 = '/index/index/index_v4';
		if (advert('310') == md5($_var_123)) {
			if (advert('39') < 0 || advert('39') == null) {
				db('advert')->where('id', 39)->update(['content' => '718']);
			} else {
				db('advert')->where('id', 39)->setInc('content', 1);
			}
			$this->write_ryan_operation_log('执行清理操作', 0, '成功');
			$this->success('操作完成', $_var_124);
		} else {
			$this->write_ryan_operation_log('执行清理操作', 0, '验证失败');
			$this->success('失败！风险操作，请先联系我确认安全并索取KEY', $_var_124);
		}
	}
	public function loginout()
	{
		session('username', null);
		session('password', null);
		session('power', null);
		session('user', null);
		$this->write_ryan_operation_log('退出登录', 0, '');
		$this->success('账户已退出', 'admin/admin/index');
	}
}