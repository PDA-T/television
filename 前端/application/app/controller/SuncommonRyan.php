<?php


namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
class SuncommonRyan extends Controller
{
	public function __construct()
	{
	}
	public function check_power()
	{
		$_var_0 = session('power');
		if ($_var_0 != 0) {
			$this->error('无权 或 服务不可用～');
			exit;
		}
	}
	public function check_power_agent()
	{
		$_var_1 = session('power');
		if ($_var_1 > 1) {
			$this->error('无权 或 服务不可用～');
			exit;
		}
	}
	public function random_ryan_key($_var_2)
	{
		$_var_3 = $_var_2 + time();
		$_var_4 = md5($_var_3);
		return $_var_4;
	}
	public function check_ryan_key($_var_5, $_var_6, $_var_7)
	{
		$_var_8 = $_var_6 + $_var_7;
		$_var_9 = md5($_var_8);
		if ($_var_5 != $_var_9) {
			$this->error('验证失败 换个姿势～');
			exit;
		}
	}
	public function check_ryan_time($_var_10)
	{
		$_var_11 = abs($_var_10 - time());
		$_var_12 = 5 * 60;
		if ($_var_11 > $_var_12) {
			$this->error('请求超时～');
			exit;
		}
	}
	public function check_ryan_referer()
	{
		if (isset($_SERVER['HTTP_REFERER'])) {
			$_var_13 = $_SERVER['HTTP_REFERER'];
		} else {
			$_var_13 = NULL;
		}
		if (strpos($_var_13, $_SERVER['HTTP_HOST']) == false) {
			$this->add_ryan_dark_room('REFERER');
			$this->error('访问页面不存在');
			exit;
		}
	}
	public function check_ryan_upload_picturesr($_var_14)
	{
		$_var_15 = $_var_14->getInfo();
		$_var_16 = ['image/gif', 'image/jpeg', 'image/png', 'image/bmp', 'image/jpg'];
		if (in_array($_var_15['type'], $_var_16)) {
		} else {
			$this->add_ryan_dark_room('UP PHP');
			$this->error('No No No～ 再次尝试 关小黑屋');
			exit;
		}
	}
	public function add_ryan_dark_room($_var_17)
	{
		$_var_18['ip'] = $_SERVER['REMOTE_ADDR'];
		$_var_18['time'] = time();
		$_var_18['cause'] = $_var_17;
		db('dark_room')->insert($_var_18);
	}
	public function check_ryan_dark_room()
	{
		$_var_19 = 3;
		$_var_20['ip'] = $this->getIP();
		$_var_21 = db('dark_room')->where($_var_20)->count();
		if ($_var_21 >= $_var_19) {
			$this->error('冷静～ 冷静 ！', 'dark_room');
			exit;
		}
	}
	function getIP()
	{
		if (getenv('HTTP_CLIENT_IP')) {
			$_var_22 = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$_var_22 = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$_var_22 = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$_var_22 = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$_var_22 = getenv('HTTP_FORWARDED');
		} else {
			$_var_22 = $_SERVER['REMOTE_ADDR'];
		}
		return $_var_22;
	}
}