<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Rebate extends SuncommonRyan
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
		$_var_2['tx'] = '1';
		$_var_2['power'] = '1';
		$_var_3 = db('user')->where($_var_2)->order('id DESC')->paginate(10);
		return view('index', ['cash_out_list' => $_var_3, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function cash_application()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_4 = $this->random_ryan_key(session('user'));
		$_var_5 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_6 = input('application_id');
			$_var_7 = input('status');
			$_var_8 = input('remarks');
			$_var_9['id'] = $_var_6;
			$_var_10 = db('user')->where($_var_9)->find();
			if (!($_var_10['txje'] > 0)) {
				$this->error('违规操作！');
				exit;
			}
			switch ($_var_7) {
				case 0:
					$this->error('操作类型错误！');
					break;
				case 1:
					$_var_11['get_id'] = $_var_10['id'];
					$_var_12 = db('rebate')->where($_var_11)->sum('money');
					$_var_13['uid'] = $_var_10['id'];
					$_var_13['status'] = '1';
					$_var_14 = db('rebate_cashout_log')->where($_var_13)->sum('money');
					$_var_15 = $_var_12 - $_var_14;
					if ($_var_10['txje'] > $_var_15) {
						$this->error('可提现佣金不足');
						exit;
					}
					$_var_16['uid'] = $_var_10['id'];
					$_var_16['time'] = time();
					$_var_16['name'] = $_var_10['username'];
					$_var_16['status'] = '1';
					$_var_16['money'] = $_var_10['txje'];
					$_var_16['zfb'] = $_var_10['zfb'];
					db('rebate_cashout_log')->insert($_var_16);
					db('user')->where('id', $_var_10['id'])->update(['tx' => '0']);
					db('user')->where('id', $_var_10['id'])->update(['txje' => '0']);
					$this->write_ryan_operation_log('提现审核（ 成功 ）', 0, $_var_10['username'] . ' 金额： ' . $_var_10['txje']);
					$_var_17 = url('rebate/index', ['Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
					$this->success('处理成功', $_var_17);
					break;
				case 3:
					$_var_16['uid'] = $_var_10['id'];
					$_var_16['time'] = time();
					$_var_16['name'] = $_var_10['username'];
					$_var_16['status'] = '3';
					$_var_16['money'] = $_var_10['txje'];
					$_var_16['zfb'] = $_var_10['zfb'];
					$_var_16['remarks'] = $_var_8;
					db('rebate_cashout_log')->insert($_var_16);
					db('user')->where('id', $_var_10['id'])->update(['tx' => '0']);
					db('user')->where('id', $_var_10['id'])->update(['txje' => '0']);
					$this->write_ryan_operation_log('提现审核（ 驳回 ）', 0, $_var_10['username'] . ' 金额： ' . $_var_10['txje']);
					$_var_17 = url('rebate/index', ['Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
					$this->error('处理成功（ 驳回 ）', $_var_17);
					break;
			}
		}
		$_var_6 = input('application_id');
		if (empty($_var_6)) {
			$this->error('违规操作!');
			exit;
		}
		$_var_9['id'] = $_var_6;
		$_var_10 = db('user')->where($_var_9)->find();
		if (!$_var_10) {
			$this->error('违规操作!');
			exit;
		}
		$_var_9['id'] = $_var_6;
		$_var_10 = db('user')->where($_var_9)->find();
		$_var_18['parentid'] = $_var_6;
		$_var_19 = db('user')->where($_var_18)->order('id desc')->limit(8)->select();
		$_var_11['get_id'] = $_var_6;
		$_var_12 = db('rebate')->where($_var_11)->sum('money');
		if ($_var_12 == 0) {
			$_var_20 = '0';
		} else {
			$_var_20 = $_var_12;
		}
		$_var_13['uid'] = $_var_6;
		$_var_13['status'] = '1';
		$_var_14 = db('rebate_cashout_log')->where($_var_13)->sum('money');
		if ($_var_14 == 0) {
			$_var_21 = '0';
		} else {
			$_var_21 = $_var_14;
		}
		$_var_22['id'] = $_var_10['parentid'];
		$_var_23 = db('user')->where($_var_22)->find();
		$_var_24 = db('user')->where('parentid', $_var_10['parentid'])->count();
		$_var_25['y'] = '1';
		$_var_25['uid'] = $_var_10['id'];
		$_var_26['experience_details_total'] = db('cdkey')->where('name', '体验')->where('uid', $_var_10['id'])->count();
		$_var_26['experience_details_used'] = db('cdkey')->where($_var_25)->where('name', '体验')->count();
		$_var_26['experience_details_notused'] = $_var_26['experience_details_total'] - $_var_26['experience_details_used'];
		if ($_var_26['experience_details_total'] == '0') {
			$_var_26['experience_details_used_ratio'] = '0.00%';
		} else {
			$_var_26['experience_details_used_ratio'] = number_format($_var_26['experience_details_used'] / $_var_26['experience_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_26['one_month_details_total'] = db('cdkey')->where('name', '一月')->where('uid', $_var_10['id'])->count();
		$_var_26['one_month_details_used'] = db('cdkey')->where($_var_25)->where('name', '一月')->count();
		$_var_26['one_month_details_notused'] = $_var_26['one_month_details_total'] - $_var_26['one_month_details_used'];
		if ($_var_26['one_month_details_total'] == '0') {
			$_var_26['one_month_details_ratio'] = '0.00%';
		} else {
			$_var_26['one_month_details_ratio'] = number_format($_var_26['one_month_details_used'] / $_var_26['one_month_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_26['half_a_year_details_total'] = db('cdkey')->where('name', '半年')->where('uid', $_var_10['id'])->count();
		$_var_26['half_a_year_details_used'] = db('cdkey')->where($_var_25)->where('name', '半年')->count();
		$_var_26['half_a_year_details_notused'] = $_var_26['half_a_year_details_total'] - $_var_26['half_a_year_details_used'];
		if ($_var_26['half_a_year_details_total'] == '0') {
			$_var_26['half_a_year_details_ratio'] = '0.00%';
		} else {
			$_var_26['half_a_year_details_ratio'] = number_format($_var_26['half_a_year_details_used'] / $_var_26['half_a_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_26['one_year_details_total'] = db('cdkey')->where('name', '一年')->where('uid', $_var_10['id'])->count();
		$_var_26['one_year_details_used'] = db('cdkey')->where($_var_25)->where('name', '一年')->count();
		$_var_26['one_year_details_notused'] = $_var_26['one_year_details_total'] - $_var_26['one_year_details_used'];
		if ($_var_26['one_year_details_total'] == '0') {
			$_var_26['one_year_details_ratio'] = '0.00%';
		} else {
			$_var_26['one_year_details_ratio'] = number_format($_var_26['one_year_details_used'] / $_var_26['one_year_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_26['permanent_details_total'] = db('cdkey')->where('name', '永久')->where('uid', $_var_10['id'])->count();
		$_var_26['permanent_details_used'] = db('cdkey')->where($_var_25)->where('name', '永久')->count();
		$_var_26['permanent_details_notused'] = $_var_26['permanent_details_total'] - $_var_26['permanent_details_used'];
		if ($_var_26['permanent_details_total'] == '0') {
			$_var_26['permanent_details_ratio'] = '0.00%';
		} else {
			$_var_26['permanent_details_ratio'] = number_format($_var_26['permanent_details_used'] / $_var_26['permanent_details_total'] * 100, 2, '.', '') . '%';
		}
		$_var_26['agent_details_total'] = db('cdkey')->where('name', '代理')->where('uid', $_var_10['id'])->count();
		$_var_26['agent_details_used'] = db('cdkey')->where($_var_25)->where('name', '代理')->count();
		$_var_26['agent_details_notused'] = $_var_26['agent_details_total'] - $_var_26['agent_details_used'];
		if ($_var_26['agent_details_total'] == '0') {
			$_var_26['agent_details_ratio'] = '0.00%';
		} else {
			$_var_26['agent_details_ratio'] = number_format($_var_26['agent_details_used'] / $_var_26['agent_details_total'] * 100, 2, '.', '') . '%';
		}
		return view('cash_application', ['user_data' => $_var_10, 'Invitation_list_data' => $_var_19, 'rebate_count' => $_var_20, 'rebate_ok_count' => $_var_21, 'from_user_data' => $_var_23, 'from_user_t_count' => $_var_24, 'cdkey_data' => $_var_26, 'Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
	}
	public function withdrawals_record()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_27 = $this->random_ryan_key(session('user'));
		$_var_28 = time();
		$_var_29 = db('rebate_cashout_log')->order('id DESC')->paginate(10);
		return view('withdrawals_record', ['withdrawals_record' => $_var_29, 'Ryan_time' => $_var_28, 'Ryan_key' => $_var_27]);
	}
	public function rebate_list()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_30 = $this->random_ryan_key(session('user'));
		$_var_31 = time();
		$_var_32 = db('rebate')->order('id DESC')->paginate(10);
		return view('rebate_list', ['rebate_list' => $_var_32, 'Ryan_time' => $_var_31, 'Ryan_key' => $_var_30]);
	}
	public function rebate_details()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_33 = $this->random_ryan_key(session('user'));
		$_var_34 = time();
		$_var_35 = input('application_id');
		if (empty($_var_35)) {
			$this->error('违规操作!');
			exit;
		}
		$_var_36['id'] = $_var_35;
		$_var_37 = db('rebate')->where($_var_36)->find();
		if (!$_var_37) {
			$this->error('违规操作!');
			exit;
		}
		$_var_38['id'] = $_var_37['get_id'];
		$_var_39 = db('user')->where($_var_38)->find();
		$_var_40['id'] = $_var_37['give_id'];
		$_var_41 = db('user')->where($_var_40)->find();
		return view('rebate_details', ['rebate_get_data' => $_var_39, 'rebate_give_data' => $_var_41, 'rebate_data' => $_var_37, 'Ryan_time' => $_var_34, 'Ryan_key' => $_var_33]);
	}
}