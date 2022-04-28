<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Payment extends SuncommonRyan
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
		$_var_2 = db('order')->order('id DESC')->paginate(10);
		return view('index', ['payment_log' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function search()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		$_var_3 = $this->random_ryan_key(session('user'));
		$_var_4 = time();
		if (input('search_key')) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_5 = input('search_key');
		} else {
			$_var_5 = '0';
		}
		$_var_6['out_trade_no'] = $_var_5;
		$_var_7 = db('order')->where($_var_6)->find();
		if (!$_var_7) {
			$_var_8['trade_no'] = $_var_5;
			$_var_7 = db('order')->where($_var_8)->find();
		}
		$_var_9['id'] = $_var_7['uid'];
		$_var_10 = db('user')->where($_var_9)->find();
		$_var_11['id'] = $_var_10['parentid'];
		$_var_12 = db('user')->where($_var_11)->find();
		return view('search', ['search_user_ok' => $_var_5, 'from_user_data' => $_var_12, 'search_key' => $_var_7['out_trade_no'], 'user_data' => $_var_10, 'order_data' => $_var_7, 'Ryan_key' => $_var_3, 'Ryan_time' => $_var_4]);
	}
}