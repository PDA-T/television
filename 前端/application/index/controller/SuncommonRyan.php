<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
class SuncommonRyan extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$_var_0['status'] = 1;
		$_var_0['username'] = session('username');
		$_var_0['password'] = session('password');
		$_var_1 = db('user')->where($_var_0)->find();
		if (!$_var_1) {
			$this->error('登录状态已失效 请重新登录', '/');
			exit;
		}
		$_var_2 = session('user');
		if (session('power') > 1) {
			$this->redirect('/');
		}
		if (!$_var_2) {
			$this->redirect('/');
		}
	}
	public function check_power()
	{
		$_var_3 = session('power');
		if ($_var_3 != 0) {
			$this->error('无权 或 服务不可用～');
			exit;
		}
	}
	public function check_power_agent()
	{
		$_var_4 = session('power');
		if ($_var_4 > 1) {
			$this->error('无权 或 服务不可用～');
			exit;
		}
	}
	public function random_ryan_key($_var_5)
	{
		$_var_6 = $_var_5 + time();
		$_var_7 = md5($_var_6);
		return $_var_7;
	}
	public function check_ryan_key($_var_8, $_var_9, $_var_10)
	{
		$_var_11 = $_var_9 + $_var_10;
		$_var_12 = md5($_var_11);
		if ($_var_8 != $_var_12) {
			$this->error('验证失败 换个姿势～');
			exit;
		}
	}
	public function check_ryan_time($_var_13)
	{
		$_var_14 = abs($_var_13 - time());
		$_var_15 = 5 * 60;
		if ($_var_14 > $_var_15) {
			$this->error('请求超时～');
			exit;
		}
	}
	public function check_ryan_referer()
	{
		if (isset($_SERVER['HTTP_REFERER'])) {
			$_var_16 = $_SERVER['HTTP_REFERER'];
		} else {
			$_var_16 = NULL;
		}
		if (strpos($_var_16, $_SERVER['HTTP_HOST']) == false) {
			$this->add_ryan_dark_room('REFERER');
			$this->error('访问页面不存在');
			exit;
		}
	}
	public function check_ryan_upload_picturesr($_var_17)
	{
		$_var_18 = $_var_17->getInfo();
		$_var_19 = ['image/gif', 'image/jpeg', 'image/png', 'image/bmp', 'image/jpg'];
		if (in_array($_var_18['type'], $_var_19)) {
		} else {
			$this->add_ryan_dark_room('UP PHP');
			$this->error('No No No～ 再次尝试 关小黑屋');
			exit;
		}
	}
	public function add_ryan_dark_room($_var_20)
	{
		$_var_21['ip'] = $_SERVER['REMOTE_ADDR'];
		$_var_21['time'] = time();
		$_var_21['cause'] = $_var_20;
		db('dark_room')->insert($_var_21);
	}
	public function check_ryan_dark_room()
	{
		$_var_22 = 3;
		$_var_23['ip'] = $this->getIP();
		$_var_24 = db('dark_room')->where($_var_23)->count();
		if ($_var_24 >= $_var_22) {
			$this->error('冷静～ 冷静 ！', 'dark_room');
			exit;
		}
	}
	public function write_ryan_operation_log($_var_25, $_var_26, $_var_27)
	{
		if ($_var_26 == 0) {
			$_var_28 = '管理后台';
		} else {
			if ($_var_26 == 1) {
				$_var_28 = '代理后台';
			} else {
				$_var_28 = '未知/非法操作';
			}
		}
		if ($_var_27 == '') {
			$_var_29 = '无';
		} else {
			$_var_29 = $_var_27;
		}
		if (session('user') == '' || session('user') == null) {
			$_var_30 = '';
		} else {
			$_var_30 = session('user');
		}
		$_var_31['user'] = $_var_30;
		$_var_31['type'] = $_var_25;
		$_var_31['remarks'] = $_var_29;
		$_var_31['source'] = $_var_28;
		$_var_31['time'] = time();
		$_var_31['ip'] = $this->getIP();
		db('operation_log')->insert($_var_31);
	}
	function getIP()
	{
		if (getenv('HTTP_CLIENT_IP')) {
			$_var_32 = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$_var_32 = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$_var_32 = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$_var_32 = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$_var_32 = getenv('HTTP_FORWARDED');
		} else {
			$_var_32 = $_SERVER['REMOTE_ADDR'];
		}
		return $_var_32;
	}
}