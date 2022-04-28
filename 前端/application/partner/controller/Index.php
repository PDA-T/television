<?php


namespace app\Partner\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Index extends SuncommonRyan
{
	public function index()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('advert')->where('id', 21)->value('content');
		if (empty($_var_2)) {
			$_var_3 = '完美网服';
		} else {
			$_var_3 = $_var_2;
		}
		$_var_4 = db('user')->where('power = 2 and parentid = ' . session('user'))->count();
		$_var_5 = db('user')->where('power = 1 and parentid = ' . session('user'))->count();
		$_var_6 = GetUserInformation(session('user'));
		$_var_7 = $_var_6['money'];
		$_var_8 = $_var_6['username'];
		$_var_9 = db('cdkey')->where('uid', session('user'))->count();
		$_var_10 = db('cdkey')->where('y = 1 and uid = ' . session('user'))->count();
		$_var_11 = db('cdkey')->where('y = 0 and uid = ' . session('user'))->count();
		$_var_12 = db('cdkey')->where('uid=' . session('user') . ' and name="体验"')->count();
		$_var_13 = db('cdkey')->where('uid=' . session('user') . ' and name="体验"  and y="1"')->count();
		if ($_var_12 == '0') {
			$_var_14 = $_var_12;
		} else {
			$_var_14 = number_format($_var_13 / $_var_12 * 100, 2, '.', '');
		}
		$_var_15 = db('cdkey')->where('uid=' . session('user') . ' and name="一月"')->count();
		$_var_16 = db('cdkey')->where('uid=' . session('user') . ' and name="一月"  and y="1"')->count();
		if ($_var_15 == '0') {
			$_var_17 = $_var_15;
		} else {
			$_var_17 = number_format($_var_16 / $_var_15 * 100, 2, '.', '');
		}
		$_var_18 = db('cdkey')->where('uid=' . session('user') . ' and name="半年"')->count();
		$_var_19 = db('cdkey')->where('uid=' . session('user') . ' and name="半年"  and y="1"')->count();
		if ($_var_18 == '0') {
			$_var_20 = $_var_18;
		} else {
			$_var_20 = number_format($_var_19 / $_var_18 * 100, 2, '.', '');
		}
		$_var_21 = db('cdkey')->where('uid=' . session('user') . ' and name="一年"')->count();
		$_var_22 = db('cdkey')->where('uid=' . session('user') . ' and name="一年"  and y="1"')->count();
		if ($_var_21 == '0') {
			$_var_23 = $_var_21;
		} else {
			$_var_23 = number_format($_var_22 / $_var_21 * 100, 2, '.', '');
		}
		$_var_24 = db('cdkey')->where('uid=' . session('user') . ' and name="永久"')->count();
		$_var_25 = db('cdkey')->where('uid=' . session('user') . ' and name="永久"  and y="1"')->count();
		if ($_var_24 == '0') {
			$_var_26 = $_var_24;
		} else {
			$_var_26 = number_format($_var_25 / $_var_24 * 100, 2, '.', '');
		}
		$_var_27 = db('user')->where('parentid=' . session('user'))->order('ctime DESC')->limit(18)->select();
		$_var_28 = db('cdkey')->where('uid=' . session('user') . ' and y="1"')->order('stime DESC')->limit(7)->select();
		$_var_29 = db('cdkey_log')->where('uid=' . session('user'))->order('id DESC')->limit(10)->select();
		return view('index', ['Ryan_key' => $_var_0, 'Ryan_time' => $_var_1, 'money' => $_var_7, 'username' => $_var_8, 'all_Activation_code' => $_var_9, 'yy_Activation_code' => $_var_10, 'wy_Activation_code' => $_var_11, 'user_count' => $_var_4, 'app_name' => $_var_3, 'agent_count' => $_var_5, 'user_list' => $_var_27, 'cdkey_list' => $_var_28, 'cdkey_log_list' => $_var_29, 'experience_activation_code' => $_var_12, 'experience_activation_code_ok' => $_var_13, 'experience_activation_code_proportion' => $_var_14, 'one_month_activation_code' => $_var_15, 'one_month_activation_code_ok' => $_var_16, 'one_month_activation_code_proportion' => $_var_17, 'half_a_year_activation_code' => $_var_18, 'half_a_year_activation_code_ok' => $_var_19, 'half_a_year_activation_code_proportion' => $_var_20, 'year_activation_code' => $_var_21, 'year_activation_code_ok' => $_var_22, 'year_activation_code_proportion' => $_var_23, 'permanent_activation_code' => $_var_24, 'permanent_activation_code_ok' => $_var_25, 'permanent_activation_code_proportion' => $_var_26]);
	}
	public function cdkey_details()
	{
		if (advert('48') !== authorization_checking()) {
			$this->error('维护中 暂不可用');
			exit;
		}
		$this->check_power_agent();
		if (session('user') != input('i')) {
			$this->error('无权查看～');
		}
		$_var_30['uid'] = session('user');
		$_var_30['log'] = input('k');
		$_var_31 = db('cdkey')->where($_var_30)->select();
		$_var_32['id'] = input('k');
		$_var_32['uid'] = session('user');
		$_var_33 = db('cdkey_log')->where($_var_32)->find();
		return view('cdkey_details', ['Ryan_time' => $_var_34, 'Ryan_key' => $_var_35, 'cdkey_list' => $_var_31, 'cdkey_type_data' => $_var_33]);
	}
	public function loginout()
	{
		session('username', null);
		session('password', null);
		session('power', null);
		session('user', null);
		$this->success('账户已退出', '/partner/login');
	}
}