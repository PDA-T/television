<?php


namespace app\Partner\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Db;
use think\Controller;
class Login extends Controller
{
	public function index()
	{
		if (request()->Post()) {
			if (advert('390') == 0) {
				$this->error('服务不可用 禁止登陆');
			}
			$_var_0 = input();
			if ($_var_0['username'] == '' || $_var_0['passwd'] == '') {
				$this->error('请输入账户/密码');
			}
			$_var_1 = db('user')->where('username="' . $_var_0['username'] . '" ')->value('power');
			if ($_var_1 != 1) {
				$this->error('无权限 或 服务不可用');
			}
			$_var_2 = db('user')->where('username="' . $_var_0['username'] . '" and password ="' . md5(sha1($_var_0['passwd'])) . '" and status =1 and power <=1 ')->find();
			if ($_var_2) {
				$_var_3['logintime'] = time();
				db('user')->where('id', $_var_2['id'])->update($_var_3);
				db('user')->where('id', $_var_2['id'])->setInc('count', 1);
				session('username', $_var_2['username']);
				session('password', $_var_2['password']);
				session('power', $_var_2['power']);
				session('user', $_var_2['id']);
				$this->login_log('登录成功', '');
				$this->success('登录成功', '/partner/index');
			} else {
				$this->login_log('登陆失败', '账户名：' . $_var_0['username'] . '  密码：' . $_var_0['passwd']);
				$this->error('账户或密码错误');
			}
		}
		$this->view->engine->layout(false);
		return view('index', ['token_switch' => advert('7')]);
	}
	public function login_log($_var_4, $_var_5)
	{
		if (getenv('HTTP_CLIENT_IP')) {
			$_var_6 = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$_var_6 = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$_var_6 = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$_var_6 = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$_var_6 = getenv('HTTP_FORWARDED');
		} else {
			$_var_6 = $_SERVER['REMOTE_ADDR'];
		}
		if (session('user') == '' || session('user') == null) {
			$_var_7 = '';
		} else {
			$_var_7 = session('user');
		}
		if ($_var_5 == '') {
			$_var_8 = '无';
		} else {
			$_var_8 = $_var_5;
		}
		$_var_9['user'] = $_var_7;
		$_var_9['type'] = $_var_4;
		$_var_9['remarks'] = $_var_8;
		$_var_9['source'] = '代理后台';
		$_var_9['time'] = time();
		$_var_9['ip'] = $_var_6;
		db('operation_log')->insert($_var_9);
	}
}