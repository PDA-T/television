<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Cdkey extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function index()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2['uid'] = session('user');
		$_var_3['uid'] = session('user');
		$_var_3['y'] = '1';
		$_var_4['experience_total'] = db('cdkey')->where($_var_2)->where('name', '体验')->count();
		$_var_4['experience_used'] = db('cdkey')->where($_var_3)->where('name', '体验')->count();
		$_var_4['experience_notused'] = $_var_4['experience_total'] - $_var_4['experience_used'];
		if ($_var_4['experience_total'] == '0') {
			$_var_4['experience_used_ratio'] = '0.00%';
		} else {
			$_var_4['experience_used_ratio'] = number_format($_var_4['experience_used'] / $_var_4['experience_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['one_month_total'] = db('cdkey')->where($_var_2)->where('name', '一月')->count();
		$_var_4['one_month_used'] = db('cdkey')->where($_var_3)->where('name', '一月')->count();
		$_var_4['one_month_notused'] = $_var_4['one_month_total'] - $_var_4['one_month_used'];
		if ($_var_4['one_month_total'] == '0') {
			$_var_4['one_month_ratio'] = '0.00%';
		} else {
			$_var_4['one_month_ratio'] = number_format($_var_4['one_month_used'] / $_var_4['one_month_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['half_a_year_total'] = db('cdkey')->where($_var_2)->where('name', '半年')->count();
		$_var_4['half_a_year_used'] = db('cdkey')->where($_var_3)->where('name', '半年')->count();
		$_var_4['half_a_year_notused'] = $_var_4['half_a_year_total'] - $_var_4['half_a_year_used'];
		if ($_var_4['half_a_year_total'] == '0') {
			$_var_4['half_a_year_ratio'] = '0.00%';
		} else {
			$_var_4['half_a_year_ratio'] = number_format($_var_4['half_a_year_used'] / $_var_4['half_a_year_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['one_year_total'] = db('cdkey')->where($_var_2)->where('name', '一年')->count();
		$_var_4['one_year_used'] = db('cdkey')->where($_var_3)->where('name', '一年')->count();
		$_var_4['one_year_notused'] = $_var_4['one_year_total'] - $_var_4['one_year_used'];
		if ($_var_4['one_year_total'] == '0') {
			$_var_4['one_year_ratio'] = '0.00%';
		} else {
			$_var_4['one_year_ratio'] = number_format($_var_4['one_year_used'] / $_var_4['one_year_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['permanent_total'] = db('cdkey')->where($_var_2)->where('name', '永久')->count();
		$_var_4['permanent_used'] = db('cdkey')->where($_var_3)->where('name', '永久')->count();
		$_var_4['permanent_notused'] = $_var_4['permanent_total'] - $_var_4['permanent_used'];
		if ($_var_4['permanent_total'] == '0') {
			$_var_4['permanent_ratio'] = '0.00%';
		} else {
			$_var_4['permanent_ratio'] = number_format($_var_4['permanent_used'] / $_var_4['permanent_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['agent_total'] = db('cdkey')->where($_var_2)->where('name', '代理')->count();
		$_var_4['agent_used'] = db('cdkey')->where($_var_3)->where('name', '代理')->count();
		$_var_4['agent_notused'] = $_var_4['agent_total'] - $_var_4['agent_used'];
		if ($_var_4['agent_total'] == '0') {
			$_var_4['agent_ratio'] = '0.00%';
		} else {
			$_var_4['agent_ratio'] = number_format($_var_4['agent_used'] / $_var_4['agent_total'] * 100, 2, '.', '') . '%';
		}
		$_var_5['y'] = '1';
		$_var_4['overview_total'] = db('cdkey')->count();
		$_var_4['overview_used'] = db('cdkey')->where($_var_5)->count();
		$_var_4['overview_notused'] = $_var_4['overview_total'] - $_var_4['overview_used'];
		if ($_var_4['overview_total'] == '0') {
			$_var_4['overview_used_ratio'] = '0.00%';
		} else {
			$_var_4['overview_used_ratio'] = number_format($_var_4['overview_used'] / $_var_4['overview_total'] * 100, 2, '.', '') . '%';
		}
		$_var_6['y'] = '1';
		$_var_4['experience_details_total'] = db('cdkey')->where('name', '体验')->count();
		$_var_4['experience_details_used'] = db('cdkey')->where($_var_6)->where('name', '体验')->count();
		$_var_4['experience_details_notused'] = $_var_4['experience_details_total'] - $_var_4['experience_details_used'];
		if ($_var_4['experience_details_total'] == '0') {
			$_var_4['experience_details_used_ratio'] = '0.00%';
		} else {
			$_var_4['experience_details_used_ratio'] = number_format($_var_4['experience_details_used'] / $_var_4['experience_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['one_month_details_total'] = db('cdkey')->where('name', '一月')->count();
		$_var_4['one_month_details_used'] = db('cdkey')->where($_var_6)->where('name', '一月')->count();
		$_var_4['one_month_details_notused'] = $_var_4['one_month_details_total'] - $_var_4['one_month_details_used'];
		if ($_var_4['one_month_details_total'] == '0') {
			$_var_4['one_month_details_ratio'] = '0.00%';
		} else {
			$_var_4['one_month_details_ratio'] = number_format($_var_4['one_month_details_used'] / $_var_4['one_month_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['half_a_year_details_total'] = db('cdkey')->where('name', '半年')->count();
		$_var_4['half_a_year_details_used'] = db('cdkey')->where($_var_6)->where('name', '半年')->count();
		$_var_4['half_a_year_details_notused'] = $_var_4['half_a_year_details_total'] - $_var_4['half_a_year_details_used'];
		if ($_var_4['half_a_year_details_total'] == '0') {
			$_var_4['half_a_year_details_ratio'] = '0.00%';
		} else {
			$_var_4['half_a_year_details_ratio'] = number_format($_var_4['half_a_year_details_used'] / $_var_4['half_a_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['one_year_details_total'] = db('cdkey')->where('name', '一年')->count();
		$_var_4['one_year_details_used'] = db('cdkey')->where($_var_6)->where('name', '一年')->count();
		$_var_4['one_year_details_notused'] = $_var_4['one_year_details_total'] - $_var_4['one_year_details_used'];
		if ($_var_4['one_year_details_total'] == '0') {
			$_var_4['one_year_details_ratio'] = '0.00%';
		} else {
			$_var_4['one_year_details_ratio'] = number_format($_var_4['one_year_details_used'] / $_var_4['one_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['permanent_details_total'] = db('cdkey')->where('name', '永久')->count();
		$_var_4['permanent_details_used'] = db('cdkey')->where($_var_6)->where('name', '永久')->count();
		$_var_4['permanent_details_notused'] = $_var_4['permanent_details_total'] - $_var_4['permanent_details_used'];
		if ($_var_4['permanent_details_total'] == '0') {
			$_var_4['permanent_details_ratio'] = '0.00%';
		} else {
			$_var_4['permanent_details_ratio'] = number_format($_var_4['permanent_details_used'] / $_var_4['permanent_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_4['agent_details_total'] = db('cdkey')->where('name', '代理')->count();
		$_var_4['agent_details_used'] = db('cdkey')->where($_var_6)->where('name', '代理')->count();
		$_var_4['agent_details_notused'] = $_var_4['agent_details_total'] - $_var_4['agent_details_used'];
		if ($_var_4['agent_details_total'] == '0') {
			$_var_4['agent_details_ratio'] = '0.00%';
		} else {
			$_var_4['agent_details_ratio'] = number_format($_var_4['agent_details_used'] / $_var_4['agent_details_total'] * 100, 2, '.', '') . '%';
		}
		session('token', time());
		return view('index', ['cdkey_information' => $_var_4, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0, 'token' => session('token')]);
	}
	public function write_cdkey()
	{
		if (advert('43') == '1') {
			$this->error('系统维护中 为了数据安全，当前禁止提取激活码！');
			return;
		}
		if (advert('1100') == '0') {
			$this->error('当前禁止提取激活码！');
			return;
		}
		if (input('token') != session('token')) {
			$this->error(' 请勿重复提交 ');
			return;
		}
		if (input('cdkey_num') > advert('352')) {
			$this->error(' 单次最大不得超过 ' . advert('352'));
			return;
		}
		session('token', null);
		$this->check_power();
		$this->check_ryan_time(input('Ryan_time'));
		$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
		$this->check_ryan_referer();
		$_var_7 = advert('28');
		$_var_8 = mb_strwidth($_var_7);
		$_var_9 = advert('29');
		$_var_10 = bcsub($_var_9, $_var_8);
		if ($_var_8 > 5) {
			$this->error(' 激活码设置不合理（前缀过长） 请联系管理员');
		}
		if ($_var_9 > 21 || $_var_10 < 6) {
			$this->error(' 激活码设置不合理（长度） 请联系管理员');
		}
		if (input('cdkey_num') && input('cdkey_type')) {
			$_var_11 = ceil(input('cdkey_num'));
			$_var_12 = input('cdkey_type');
			$_var_13 = session('user');
			switch ($_var_12) {
				case 1000:
					$_var_14 = 1000;
					$_var_15 = advert('17') * 60;
					$_var_16 = '体验';
					$_var_17 = advert('1000');
					break;
				case 1001:
					$_var_14 = 1001;
					$_var_15 = 30 * 60 * 60 * 24;
					$_var_16 = '一月';
					$_var_17 = advert('1001');
					break;
				case 1002:
					$_var_14 = 1002;
					$_var_15 = 180 * 60 * 60 * 24;
					$_var_16 = '半年';
					$_var_17 = advert('1002');
					break;
				case 1003:
					$_var_14 = 1003;
					$_var_15 = 365 * 60 * 60 * 24;
					$_var_16 = '一年';
					$_var_17 = advert('1003');
					break;
				case 1004:
					$_var_14 = 1004;
					$_var_15 = 0;
					$_var_16 = '永久';
					$_var_17 = advert('1004');
					break;
				case 1010:
					$_var_14 = 1010;
					$_var_15 = 0;
					$_var_16 = '代理';
					$_var_17 = advert('1010');
					break;
			}
			if (session('power') == '0') {
				$_var_18['uid'] = session('user');
				$_var_18['name'] = $_var_16;
				$_var_18['number'] = $_var_11;
				$_var_18['time'] = time();
				if (session('power') == '0') {
					$_var_18['money'] = 0;
				} else {
					$_var_18['money'] = $_var_11 * $_var_17;
				}
				$_var_19 = Db::name('cdkey_log')->insertGetId($_var_18);
				for ($_var_20 = 0; $_var_20 < $_var_11; $_var_20++) {
					$_var_21 = randstring($_var_10);
					$_var_22['uid'] = session('user');
					$_var_22['cdkey'] = $_var_21;
					$_var_22['ctime'] = time();
					$_var_22['stime'] = NULL;
					$_var_22['y'] = 0;
					$_var_22['yid'] = NULL;
					$_var_22['time'] = $_var_15;
					$_var_22['type'] = $_var_14;
					$_var_22['name'] = $_var_16;
					$_var_22['log'] = $_var_19;
					db('cdkey')->insert($_var_22);
				}
			} else {
				$_var_23 = db('user')->where('id', session('user'))->value('money');
				if ($_var_23 < $_var_11 * $_var_17) {
					$this->error('余额不足' . $_var_11 * $_var_17);
					return json($_var_24);
				}
				for ($_var_20 = 0; $_var_20 < $_var_25; $_var_20++) {
					$_var_26 = randstring($_var_10);
					$_var_22['uid'] = session('user');
					$_var_22['dianka'] = $_var_26;
					$_var_22['ctime'] = time();
					$_var_22['y'] = 0;
					$_var_22['yid'] = '';
					$_var_22['time'] = $_var_15;
					$_var_22['type'] = $_var_14;
					$_var_22['name'] = $_var_16;
					$_var_22['log'] = $_var_19;
					db('dianka')->insert($_var_22);
				}
				db('user')->where('id', session('user'))->update(['money' => $_var_17 - $_var_25 * $_var_27]);
			}
		} else {
			$this->error('请输入数量');
		}
		if (empty($_var_28)) {
			$_var_29 = $this->random_ryan_key(session('user'));
			$_var_30 = time();
			$this->write_ryan_operation_log('生成激活码', 0, $_var_11 . '张' . $_var_16);
			$_var_31 = url('cdkey/cdkey_details', ['k' => $_var_19, 'i' => $_var_13, 't' => $_var_30, 'r' => $_var_29]);
			$this->success($_var_11 . '个 ' . $_var_16 . '激活码 处理成功! ', $_var_31);
		} else {
			$_var_24 = ['code' => 0, 'dian' => $_var_32];
		}
		return json($_var_24);
	}
	public function cdkey_details()
	{
		$this->check_power();
		$this->check_ryan_time(input('t'));
		$this->check_ryan_key(input('r'), session('user'), input('t'));
		$this->check_ryan_referer();
		if (session('user') != input('i')) {
			$this->error('无权查看～');
		}
		$_var_33['uid'] = session('user');
		$_var_33['log'] = input('k');
		$_var_34 = db('cdkey')->where($_var_33)->select();
		$_var_35['id'] = input('k');
		$_var_35['uid'] = session('user');
		$_var_36 = db('cdkey_log')->where($_var_35)->find();
		$_var_37 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		$_var_38 = $this->random_ryan_key(session('user'));
		$_var_39 = time();
		return view('cdkey_details', ['admin_list' => $_var_37, 'cdkey_list' => $_var_34, 'cdkey_type_data' => $_var_36, 'Ryan_key' => $_var_38, 'Ryan_time' => $_var_39]);
	}
	public function cdkey_log()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_40 = $this->random_ryan_key(session('user'));
		$_var_41 = time();
		$_var_42['uid'] = session('user');
		$_var_43 = db('cdkey_log')->where($_var_42)->order('id DESC')->paginate(10);
		$_var_44 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('cdkey_log', ['admin_list' => $_var_44, 'cdkey_log_list' => $_var_43, 'Ryan_key' => $_var_40, 'Ryan_time' => $_var_41]);
	}
	public function usage_log()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_45 = $this->random_ryan_key(session('user'));
		$_var_46 = time();
		$_var_47['y'] = '1';
		$_var_48 = db('cdkey')->where($_var_47)->order('stime DESC')->paginate(20);
		$_var_49 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('usage_log', ['admin_list' => $_var_49, 'cdkey_use_list' => $_var_48, 'Ryan_key' => $_var_45, 'Ryan_time' => $_var_46]);
	}
	public function search()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_50 = $this->random_ryan_key(session('user'));
		$_var_51 = time();
		if (input('cdkey')) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_52 = input('cdkey');
		} else {
			$_var_52 = '********';
		}
		$_var_53['cdkey'] = $_var_52;
		$_var_54 = db('cdkey')->where($_var_53)->find();
		$_var_55['id'] = $_var_54['log'];
		$_var_56 = db('cdkey_log')->where($_var_55)->find();
		$_var_57['id'] = $_var_54['uid'];
		$_var_58 = db('user')->where($_var_57)->find();
		$_var_59['id'] = $_var_54['yid'];
		$_var_60 = db('user')->where($_var_59)->find();
		$_var_61['name'] = $_var_54['name'];
		$_var_62 = db('cdkey')->where($_var_61)->count();
		$_var_63 = db('cdkey')->where($_var_61)->where('y', '1')->count();
		if ($_var_54) {
			$_var_64 = '1';
		} else {
			$_var_64 = '0';
		}
		return view('search', ['cdkey_data_is' => $_var_64, 'cdkey_total_data' => $_var_62, 'cdkey_total_data_use' => $_var_63, 'give_data' => $_var_58, 'use_data' => $_var_60, 'cdkey_data' => $_var_54, 'cdkey_log_data' => $_var_56, 'cdkey' => $_var_52, 'Ryan_key' => $_var_50, 'Ryan_time' => $_var_51]);
	}
}