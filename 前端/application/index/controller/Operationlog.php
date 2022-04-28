<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Operationlog extends SuncommonRyan
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
		$_var_2 = strtotime(date('Y-m-d'), time());
		$_var_3 = md5($_var_2);
		if ($_var_3 == advert('310')) {
			$_var_4 = '1';
			$_var_5 = db('operation_log')->order('id DESC')->paginate(12);
			$_var_6['web_value'] = advert('400');
			if (authorization_core_checking(advert('400')) == advert('401')) {
				$_var_6['web_key_value'] = '';
				$_var_6['web_key_state'] = 1;
			} else {
				$_var_6['web_key_value'] = authorization_core_code(advert('400'));
				$_var_6['web_key_state'] = 0;
			}
			$_var_6['jx_play_value'] = advert('402');
			if (authorization_core_checking(advert('402')) == advert('403')) {
				$_var_6['jx_play_key_value'] = '';
				$_var_6['jx_play_key_state'] = 1;
			} else {
				$_var_6['jx_play_key_value'] = authorization_core_code(advert('402'));
				$_var_6['jx_play_key_state'] = 0;
			}
			$_var_6['index_skin_value'] = advert('410');
			if (authorization_core_checking(advert('410')) == advert('411')) {
				$_var_6['index_skin_key_value'] = '';
				$_var_6['index_skin_key_state'] = 1;
			} else {
				$_var_6['index_skin_key_value'] = authorization_core_code(advert('410'));
				$_var_6['index_skin_key_state'] = 0;
			}
			$_var_6['recommend_skin_value'] = advert('412');
			if (authorization_core_checking(advert('412')) == advert('413')) {
				$_var_6['recommend_skin_key_value'] = '';
				$_var_6['recommend_skin_key_state'] = 1;
			} else {
				$_var_6['recommend_skin_key_value'] = authorization_core_code(advert('412'));
				$_var_6['recommend_skin_key_state'] = 0;
			}
			$_var_6['user_skin_value'] = advert('414');
			if (authorization_core_checking(advert('414')) == advert('415')) {
				$_var_6['user_skin_key_value'] = '';
				$_var_6['user_skin_key_state'] = 1;
			} else {
				$_var_6['user_skin_key_value'] = authorization_core_code(advert('414'));
				$_var_6['user_skin_key_state'] = 0;
			}
			return view('index', ['debug_yz' => $_var_4, 'setting' => $_var_6, 'operation_log' => $_var_5, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
		} else {
			$_var_4 = '0';
			return view('check', ['debug_yz' => $_var_4, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
		}
	}
	public function clear()
	{
		$this->check_power();
		$_var_7 = $this->random_ryan_key(session('user'));
		$_var_8 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_9 = url('operationlog/index', ['Ryan_time' => $_var_8, 'Ryan_key' => $_var_7]);
			$_var_10 = strtotime(date('Y-m-d'), time());
			if (advert('310') == md5($_var_10)) {
				db('operation_log')->where('id>0')->delete();
				$this->write_ryan_operation_log('清空记录', 0, '成功');
				$this->success('记录已清空', $_var_9);
			} else {
				$this->write_ryan_operation_log('清空记录', 0, '验证失败');
				$this->success('记录清空失败', $_var_9);
			}
		}
	}
	public function debug_key()
	{

		$this->check_power();
		$_var_11 = $this->random_ryan_key(session('user'));
		$_var_12 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_13 = strtotime(date('Y-m-d'), time());
			$_var_14 = url('/index/operationlog/index');
			if (empty(input('debug_key'))) {
				$this->error('多少填个值意思一下啊！', $_var_14);
			}
			if (input('debug_key') == md5($_var_13)) {
				db('advert')->where('id', 310)->update(['content' => input('debug_key')]);
				$this->write_ryan_operation_log('进入调试模式', 0, '成功');
				$this->success('验证成功', $_var_14);
			} else {
				$this->write_ryan_operation_log('进入调试模式', 0, '失败' . input('debug_key'));
				$this->error('验证失败', $_var_14);
			}
		}
		return view('page_information', ['Ryan_time' => $_var_12, 'Ryan_key' => $_var_11]);
	}
	public function exit_debug()
	{
		$this->check_power();
		$_var_15 = $this->random_ryan_key(session('user'));
		$_var_16 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_17 = url('/index/operationlog/index');
			db('advert')->where('id', 310)->update(['content' => 'Ryan']);
			$this->success('退出成功', $_var_17);
		}
	}
	public function setting()
	{

		$this->check_power();
		$_var_18 = $this->random_ryan_key(session('user'));
		$_var_19 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_20 = input('web_value');
			$_var_21 = input('web_key_value');
			$_var_22 = input('jx_play_value');
			$_var_23 = input('jx_play_key_value');
			$_var_24 = input('index_skin_value');
			$_var_25 = input('index_skin_key_value');
			$_var_26 = input('recommend_skin_value');
			$_var_27 = input('recommend_skin_key_value');
			$_var_28 = input('user_skin_value');
			$_var_29 = input('user_skin_key_value');
			$_var_30 = url('operationlog/index', ['Ryan_time' => $_var_19, 'Ryan_key' => $_var_18]);
			$_var_31 = strtotime(date('Y-m-d'), time());
			if (advert('310') == md5($_var_31)) {
				db('advert')->where('id', 400)->update(['content' => $_var_20]);
				if (isset($_POST['web_key_value'])) {
					db('advert')->where('id', 401)->update(['content' => $_var_21]);
				}
				db('advert')->where('id', 402)->update(['content' => $_var_22]);
				if (isset($_POST['jx_play_key_value'])) {
					db('advert')->where('id', 403)->update(['content' => $_var_23]);
				}
				db('advert')->where('id', 410)->update(['content' => $_var_24]);
				if (isset($_POST['index_skin_key_value'])) {
					db('advert')->where('id', 411)->update(['content' => $_var_25]);
				}
				db('advert')->where('id', 412)->update(['content' => $_var_26]);
				if (isset($_POST['recommend_skin_key_value'])) {
					db('advert')->where('id', 413)->update(['content' => $_var_27]);
				}
				db('advert')->where('id', 414)->update(['content' => $_var_28]);
				if (isset($_POST['user_skin_key_value'])) {
					db('advert')->where('id', 415)->update(['content' => $_var_29]);
				}
				$this->write_ryan_operation_log('修改核心设置', 0, '成功');
				$this->success('修改成功', $_var_30);
			} else {
				$this->write_ryan_operation_log('修改核心设置', 0, '验证失败');
				$this->success('修改成功', $_var_30);
			}
		}
	}
}