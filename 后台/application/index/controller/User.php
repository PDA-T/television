<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class User extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function user_list()
	{
		$this->check_power();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('user')->where('power = 2')->order('id DESC')->paginate(20);
		return view('user_list', ['user_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function agent_list()
	{
		$this->check_power();
		$_var_3 = $this->random_ryan_key(session('user'));
		$_var_4 = time();
		$_var_5 = db('user')->where('power = 1')->order('id DESC')->paginate(20);
		return view('agent_list', ['user_list' => $_var_5, 'Ryan_time' => $_var_4, 'Ryan_key' => $_var_3]);
	}
	public function edit()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_6 = $this->random_ryan_key(session('user'));
		$_var_7 = time();
		$_var_8['id'] = input('edit_id');
		$_var_9 = db('user')->where($_var_8)->find();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_10 = input('key');
			$_var_11 = input('uid');
			$_var_12 = input('time');
			$_var_13 = input('edit_id');
			if ($_var_13 == 1) {
				$_var_14 = '1';
				$_var_15 = '1';
				$_var_16 = '0';
				$_var_17 = '1';
			} else {
				$_var_14 = input('user_status');
				$_var_15 = input('user_type');
				$_var_16 = input('user_power');
				$_var_17 = input('user_banner_switch');
			}
			$_var_18 = input('user_phone');
			$_var_19 = input('user_zfb_name');
			$_var_20 = input('user_zfb');
			$_var_21 = input('user_weichat');
			$_var_22 = input('user_email');
			$_var_23 = input('user_money');
			$_var_24 = input('user_sign');
			$_var_25 = input('user_deviceId');
			$_var_26 = input('user_lasttime');
			$_var_27 = input('user_parentid');
			$_var_28 = input('user_safetycode');
			$_var_29 = input('user_password');
			$_var_30['status'] = $_var_14;
			$_var_30['type'] = $_var_15;
			$_var_30['power'] = $_var_16;
			$_var_30['phone'] = $_var_18;
			$_var_30['zfb_name'] = $_var_19;
			$_var_30['zfb'] = $_var_20;
			$_var_30['weichat'] = $_var_21;
			$_var_30['email'] = $_var_22;
			$_var_30['money'] = $_var_23;
			$_var_30['sign'] = $_var_24;
			$_var_30['deviceId'] = $_var_25;
			if ($_var_15 == '1') {
				$_var_30['lasttime'] = '0';
			} else {
				$_var_30['lasttime'] = strtotime(date($_var_26));
			}
			$_var_30['parentid'] = $_var_27;
			$_var_30['banner_switch'] = $_var_17;
			if (!empty($_var_28)) {
				$_var_30['safetycode'] = $_var_28;
			}
			if (!empty($_var_29)) {
				$_var_30['password'] = md5(sha1($_var_29));
			}
			$_var_31 = url('user/edit', ['edit_id' => $_var_13, 'Ryan_time' => $_var_7, 'Ryan_key' => $_var_6]);
			$_var_32['id'] = $_var_27;
			$_var_33 = db('user')->where($_var_32)->find();
			if (!$_var_33) {
				$this->error('失败！（上级ID:' . $_var_27 . '不存在）', $_var_31);
				exit;
			}
			db('user')->where('id', $_var_13)->update($_var_30);
			$this->write_ryan_operation_log('编辑用户信息', 0, $_var_9['id'] . ' / ' . $_var_9['username']);
			$this->success('修改成功', $_var_31);
		}
		$_var_34['parentid'] = input('edit_id');
		$_var_35 = db('user')->where($_var_34)->order('id desc')->limit(8)->select();
		$_var_36 = db('user')->where($_var_34)->count();
		$_var_37['get_id'] = input('edit_id');
		$_var_38 = db('rebate')->where($_var_37)->sum('money');
		if ($_var_38 == 0) {
			$_var_39 = '0';
		} else {
			$_var_39 = $_var_38;
		}
		$_var_40['id'] = $_var_9['parentid'];
		$_var_41 = db('user')->where($_var_40)->find();
		$_var_42 = db('user')->where('parentid', $_var_9['parentid'])->count();
		$_var_43['yid'] = $_var_9['id'];
		$_var_44 = db('cdkey')->where($_var_43)->order('stime desc')->select();
		$_var_45['y'] = '1';
		$_var_45['uid'] = $_var_9['id'];
		$_var_46['experience_details_total'] = db('cdkey')->where('name', '体验')->where('uid', $_var_9['id'])->count();
		$_var_46['experience_details_used'] = db('cdkey')->where($_var_45)->where('name', '体验')->count();
		$_var_46['experience_details_notused'] = $_var_46['experience_details_total'] - $_var_46['experience_details_used'];
		if ($_var_46['experience_details_total'] == '0') {
			$_var_46['experience_details_used_ratio'] = '0.00%';
		} else {
			$_var_46['experience_details_used_ratio'] = number_format($_var_46['experience_details_used'] / $_var_46['experience_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_46['one_month_details_total'] = db('cdkey')->where('name', '一月')->where('uid', $_var_9['id'])->count();
		$_var_46['one_month_details_used'] = db('cdkey')->where($_var_45)->where('name', '一月')->count();
		$_var_46['one_month_details_notused'] = $_var_46['one_month_details_total'] - $_var_46['one_month_details_used'];
		if ($_var_46['one_month_details_total'] == '0') {
			$_var_46['one_month_details_ratio'] = '0.00%';
		} else {
			$_var_46['one_month_details_ratio'] = number_format($_var_46['one_month_details_used'] / $_var_46['one_month_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_46['half_a_year_details_total'] = db('cdkey')->where('name', '半年')->where('uid', $_var_9['id'])->count();
		$_var_46['half_a_year_details_used'] = db('cdkey')->where($_var_45)->where('name', '半年')->count();
		$_var_46['half_a_year_details_notused'] = $_var_46['half_a_year_details_total'] - $_var_46['half_a_year_details_used'];
		if ($_var_46['half_a_year_details_total'] == '0') {
			$_var_46['half_a_year_details_ratio'] = '0.00%';
		} else {
			$_var_46['half_a_year_details_ratio'] = number_format($_var_46['half_a_year_details_used'] / $_var_46['half_a_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_46['one_year_details_total'] = db('cdkey')->where('name', '一年')->where('uid', $_var_9['id'])->count();
		$_var_46['one_year_details_used'] = db('cdkey')->where($_var_45)->where('name', '一年')->count();
		$_var_46['one_year_details_notused'] = $_var_46['one_year_details_total'] - $_var_46['one_year_details_used'];
		if ($_var_46['one_year_details_total'] == '0') {
			$_var_46['one_year_details_ratio'] = '0.00%';
		} else {
			$_var_46['one_year_details_ratio'] = number_format($_var_46['one_year_details_used'] / $_var_46['one_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_46['permanent_details_total'] = db('cdkey')->where('name', '永久')->where('uid', $_var_9['id'])->count();
		$_var_46['permanent_details_used'] = db('cdkey')->where($_var_45)->where('name', '永久')->count();
		$_var_46['permanent_details_notused'] = $_var_46['permanent_details_total'] - $_var_46['permanent_details_used'];
		if ($_var_46['permanent_details_total'] == '0') {
			$_var_46['permanent_details_ratio'] = '0.00%';
		} else {
			$_var_46['permanent_details_ratio'] = number_format($_var_46['permanent_details_used'] / $_var_46['permanent_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_46['agent_details_total'] = db('cdkey')->where('name', '代理')->where('uid', $_var_9['id'])->count();
		$_var_46['agent_details_used'] = db('cdkey')->where($_var_45)->where('name', '代理')->count();
		$_var_46['agent_details_notused'] = $_var_46['agent_details_total'] - $_var_46['agent_details_used'];
		if ($_var_46['agent_details_total'] == '0') {
			$_var_46['agent_details_ratio'] = '0.00%';
		} else {
			$_var_46['agent_details_ratio'] = number_format($_var_46['agent_details_used'] / $_var_46['agent_details_total'] * 100, 2, '.', '') . '%';
		}
		return view('edit', ['user_data' => $_var_9, 'Invitation_list_data' => $_var_35, 'Invitation_count' => $_var_36, 'rebate_count' => $_var_39, 'from_user_data' => $_var_41, 'from_user_t_count' => $_var_42, 'use_cdkey_list' => $_var_44, 'cdkey_data' => $_var_46, 'Ryan_time' => $_var_7, 'Ryan_key' => $_var_6]);
	}
	public function search()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_47 = $this->random_ryan_key(session('user'));
		$_var_48 = time();
		if (input('search_user')) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_49 = input('search_user');
		} else {
			$_var_49 = '0';
		}
		$_var_50['id'] = $_var_49;
		$_var_51 = db('user')->where($_var_50)->find();
		if (!$_var_51) {
			$_var_52['username'] = $_var_49;
			$_var_51 = db('user')->where($_var_52)->find();
			if (!$_var_51) {
				$_var_52['username'] = $_var_49;
				$_var_51 = db('user')->where($_var_52)->find();
			}
		}
		$_var_53['id'] = $_var_51['parentid'];
		$_var_54 = db('user')->where($_var_53)->find();
		return view('search', ['search_user_ok' => $_var_49, 'from_user_data' => $_var_54, 'search_user' => $_var_51['username'], 'user_data' => $_var_51, 'Ryan_key' => $_var_47, 'Ryan_time' => $_var_48]);
	}
}