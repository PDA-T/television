<?php


namespace app\Partner\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Cdkey extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power_agent();
		if (advert('48') !== authorization_checking()) {
			$this->error('系统维护 暂时不可用');
			exit;
		}
	}
	public function index()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		if (request()->Post()) {
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止提取激活码！');
				return;
			}
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power_agent();
			$_var_2 = input('cdkey_type');
			$_var_3 = input('cdkey_num');
			$_var_4 = input('token');
			$_var_5 = session('user');
			if ($_var_4 != session('token')) {
				$this->error(' 请勿重复提交 ');
				return;
			}
			$_var_6 = advert('1100');
			if (advert('352') == '' || advert('352') == null || advert('352') == '0' || advert('352') > '1000') {
				$_var_7 = '1000';
			} else {
				$_var_7 = advert('352');
			}
			session('token', null);
			$_var_8 = db('user')->where('id', $_var_5)->find();
			$_var_9 = advert('28');
			$_var_10 = mb_strwidth($_var_9);
			$_var_11 = advert('29');
			$_var_12 = bcsub($_var_11, $_var_10);
			if (!$_var_8) {
				$this->error('无权限 信息错误');
				return;
			} else {
				if ($_var_6 == '0') {
					$this->error('系统维护中 为了数据安全，当前禁止提取激活码！');
					return;
				} else {
					if ($_var_8['power'] > 1) {
						$this->error('无权限');
						return;
					} else {
						if ($_var_3 < 1 || $_var_3 == '') {
							$this->error('提取数量输入有误');
							return;
						} else {
							if ($_var_3 > $_var_7) {
								$this->error(' 单次提取最大不得超过  ' . $_var_7 . '个');
								return;
							} else {
								if ($_var_10 > 5) {
									$this->error(' 激活码设置不合理 请联系管理员 ');
									return;
								}
								if ($_var_11 > 21 || $_var_12 < 6) {
									$this->error(' 激活码设置不合理 请联系管理员 ');
									return;
								}
								if ($_var_2 == '1000') {
									$_var_13 = '体验';
								} else {
									if ($_var_2 == '1001') {
										$_var_13 = '一月';
									} else {
										if ($_var_2 == '1002') {
											$_var_13 = '半年';
										} else {
											if ($_var_2 == '1003') {
												$_var_13 = '一年';
											} else {
												if ($_var_2 == '1004') {
													$_var_13 = '永久';
												}
											}
										}
									}
								}
								$_var_14 = intval(AgentCdkeyQuery($_var_5, $_var_2)) + intval($_var_3);
								if (advert('380') > '0' && $_var_14 > advert('380')) {
									$_var_15 = intval(advert('380')) - intval(AgentCdkeyQuery($_var_5, $_var_2));
									if ($_var_15 > 0) {
										$this->error(' 目前您还可以提取 ' . $_var_15 . '个' . $_var_13 . '激活码');
										return;
									} else {
										$this->error(' 您已有大量该类型激活码未使用 请使用后再生成！ ');
										return;
									}
								}
								if ($_var_3) {
									switch ($_var_2) {
										case 1000:
											$_var_16 = '1000';
											$_var_17 = advert('17') * 60;
											$_var_18 = '体验';
											$_var_19 = advert('1000');
											break;
										case 1001:
											$_var_16 = '1001';
											$_var_17 = 30 * 60 * 60 * 24;
											$_var_18 = '一月';
											$_var_19 = advert('1001');
											break;
										case 1002:
											$_var_16 = '1002';
											$_var_17 = 180 * 60 * 60 * 24;
											$_var_18 = '半年';
											$_var_19 = advert('1002');
											break;
										case 1003:
											$_var_16 = '1003';
											$_var_17 = 365 * 60 * 60 * 24;
											$_var_18 = '一年';
											$_var_19 = advert('1003');
											break;
										case 1004:
											$_var_16 = '1004';
											$_var_17 = 0;
											$_var_18 = '永久';
											$_var_19 = advert('1004');
											break;
									}
									$_var_20 = db('user')->where('id', $_var_5)->value('money');
									if ($_var_20 < $_var_3 * $_var_19) {
										$_var_21 = $_var_3 * $_var_19;
										$this->error(' 余额不足 ' . $_var_21 . ' 元 ');
										return;
									}
									$_var_22 = time();
									$_var_23['uid'] = $_var_5;
									$_var_23['name'] = $_var_18;
									$_var_23['number'] = $_var_3;
									$_var_23['time'] = $_var_22;
									if ($_var_8['power'] == '0') {
										$_var_23['money'] = 0;
									} else {
										$_var_23['money'] = $_var_3 * $_var_19;
									}
									$_var_24 = Db::name('cdkey_log')->insertGetId($_var_23);
									for ($_var_25 = 0; $_var_25 < $_var_3; $_var_25++) {
										$_var_26 = randstring($_var_12);
										$_var_27['uid'] = $_var_5;
										$_var_27['cdkey'] = $_var_26;
										$_var_27['ctime'] = $_var_22;
										$_var_27['y'] = 0;
										$_var_27['yid'] = NULL;
										$_var_27['time'] = $_var_17;
										$_var_27['type'] = $_var_16;
										$_var_27['name'] = $_var_18;
										$_var_27['log'] = $_var_24;
										db('cdkey')->insert($_var_27);
									}
									db('user')->where('id', $_var_5)->update(['money' => $_var_20 - $_var_3 * $_var_19]);
								} else {
									$this->error(' 提取错误 稍后再试 ');
									return;
								}
								$_var_28 = db('user')->where('id', $_var_5)->value('money');
								$this->write_ryan_operation_log('提取激活码', 1, $_var_3 . '张' . $_var_18);
								$_var_29 = url('list_details', ['k' => $_var_24, 'i' => $_var_5, 't' => $_var_1, 'r' => $_var_0]);
								$this->success(' 成功提取 ' . $_var_3 . '张' . $_var_18 . ' 激活码', $_var_29);
								return;
							}
						}
					}
				}
			}
		}
		if (advert('311') == 1) {
			$_var_30['uid'] = 1;
			$_var_30['type'] = array(array('gt', 999), array('lt', 1010));
			$_var_31 = db('cdkey_type')->where($_var_30)->order('type asc')->select();
		} else {
			$_var_32[0]['id'] = 1;
			$_var_32[0]['name'] = '体验';
			$_var_32[0]['cost_price'] = '无';
			$_var_32[0]['type'] = 1000;
			$_var_32[1]['id'] = 2;
			$_var_32[1]['name'] = '一月';
			$_var_32[1]['cost_price'] = '无';
			$_var_32[1]['type'] = 1001;
			$_var_32[2]['id'] = 3;
			$_var_32[2]['name'] = '半年';
			$_var_32[2]['cost_price'] = '无';
			$_var_32[2]['type'] = 1002;
			$_var_32[3]['id'] = 4;
			$_var_32[3]['name'] = '一年';
			$_var_32[3]['cost_price'] = '无';
			$_var_32[3]['type'] = 1003;
			$_var_32[4]['id'] = 5;
			$_var_32[4]['name'] = '永久';
			$_var_32[4]['cost_price'] = '无';
			$_var_32[4]['type'] = 1004;
			$_var_31 = $_var_32;
		}
		session('token', time());
		return view('index', ['cdkey_type_list' => $_var_31, 'Ryan_key' => $_var_0, 'Ryan_time' => $_var_1, 'token' => session('token')]);
	}
	public function log()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		$_var_33['uid'] = session('user');
		$_var_34 = db('cdkey_log')->where($_var_33)->order('id DESC')->limit(50)->select();
		$_var_35 = $this->random_ryan_key(session('user'));
		$_var_36 = time();
		return view('log', ['cdkey_log_list' => $_var_34, 'Ryan_key' => $_var_35, 'Ryan_time' => $_var_36]);
	}
	public function list_details()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		if (session('user') != input('i')) {
			$this->error('无权查看～');
		}
		$_var_37['uid'] = session('user');
		$_var_37['log'] = input('k');
		$_var_38 = db('cdkey')->where($_var_37)->select();
		$_var_39['id'] = input('k');
		$_var_39['uid'] = session('user');
		$_var_40 = db('cdkey_log')->where($_var_39)->find();
		$_var_41 = $this->random_ryan_key(session('user'));
		$_var_42 = time();
		return view('list_details', ['cdkey_list' => $_var_38, 'cdkey_type_data' => $_var_40, 'Ryan_key' => $_var_41, 'Ryan_time' => $_var_42]);
	}
	public function retrieval()
	{
		$this->check_power_agent();
		$this->check_ryan_referer();
		$_var_43 = $this->random_ryan_key(session('user'));
		$_var_44 = time();
		if (input('cdkey')) {
			$this->check_ryan_referer();
			$_var_45 = trim(input('cdkey'));
			if (!session_id()) {
				session_start();
			}
			$_var_46 = date('H');
			if (!isset($_SESSION['count'])) {
				$_SESSION['count'] = 0;
			}
			if (!isset($_SESSION['h'])) {
				$_SESSION['h'] = $_var_46;
			}
			if ($_SESSION['h'] !== $_var_46) {
				$_SESSION['count'] = 0;
				$_SESSION['h'] = $_var_46;
			}
			$_SESSION['count'] = $_SESSION['count'] + 1;
		} else {
			$_var_45 = '';
		}
		$_var_47['cdkey'] = $_var_45;
		$_var_48 = db('cdkey')->where($_var_47)->find();
		$_var_49 = advert('126');
		if ($_SESSION['count'] > $_var_49) {
			$_var_50 = '请求频繁 请稍后再试！';
			$_var_51 = '0';
		} else {
			if ($_var_48['uid'] == session('user')) {
				$_var_50 = '查询成功';
				$_var_51 = '1';
			} else {
				$_var_50 = '不存在 或 该激活码不属于您，无权查看该信息!';
				$_var_51 = '0';
			}
		}
		$_var_52 = $_var_49 - $_SESSION['count'];
		if ($_var_52 > 0) {
			$_var_53 = $_var_49 - $_SESSION['count'];
		} else {
			$_var_53 = '0';
		}
		if ($_var_48['y'] == '1') {
			$_var_54 = '1';
			$_var_55['id'] = $_var_48['yid'];
			$_var_56 = db('user')->where($_var_55)->find();
			$_var_57 = substr_replace($_var_56['username'], '****', 3, 4);
			$_var_58 = $_var_56['id'];
			if ($_var_56['type'] == '1') {
				$_var_59 = '1';
			} else {
				$_var_59 = $_var_56['lasttime'];
			}
		} else {
			$_var_54 = '0';
			$_var_57 = '';
			$_var_58 = '';
			$_var_59 = '';
		}
		return view('retrieval', ['cdkey_data_is' => $_var_51, 'cdkey_use_is' => $_var_54, 'cdkey_data' => $_var_48, 'cdkey_state' => $_var_50, 'use_user_name' => $_var_57, 'use_user_id' => $_var_58, 'use_user_vip' => $_var_59, 'retrieval_num' => $_var_53, 'cdkey' => $_var_45, 'Ryan_key' => $_var_43, 'Ryan_time' => $_var_44]);
	}
}