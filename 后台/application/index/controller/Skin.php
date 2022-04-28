<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Skin extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

		if (advert('43') == '1') {
			$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
			return;
		}
	}
	public function one()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power();
			$_var_2 = input('key');
			$_var_3 = input('uid');
			$_var_4 = input('time');
			$_var_5 = input('skin_id');
			$_var_6 = input('skin_key');
			if ($_var_5 == 0) {
				$this->error('请先选择授权模板编号！');
				exit;
			} else {
				$_var_7['id'] = $_var_5;
				$_var_8 = db('advert')->where($_var_7)->find();
				if (!$_var_8) {
					$this->error('违规操作！');
					exit;
				}
				if ($_var_5 == 3101) {
					$_var_9 = 'index_one';
					$_var_10 = authorization_skin_checking('3101_index_one');
				} else {
					if ($_var_5 == 3102) {
						$_var_9 = 'index_two';
						$_var_10 = authorization_skin_checking('3102_index_two');
					}
				}
				if ($_var_6 == $_var_10) {
					$_var_11 = db('advert')->where('id', $_var_5)->value('content');
					if ($_var_11 == $_var_6) {
						$this->error('授权失败 或 授权重复！');
						exit;
					}
					$_var_12['content'] = $_var_6;
					$_var_13 = db('advert')->where('id', $_var_5)->update($_var_12);
					if ($_var_13 > 0) {
						$this->success('授权成功！');
						exit;
					} else {
						$this->success('授权码写入失败 请稍后重试！');
						exit;
					}
				} else {
					$this->error('授权失败 信息已记录！');
					exit;
				}
			}
		}
		if (advert('47') == '' || advert('47') == null) {
			$_var_14 = '请先到仪表盘填写APPID';
		} else {
			$_var_14 = advert('47');
		}
		$_var_15['img_index_one'] = advert('3001');
		$_var_15['img_index_two'] = advert('3002');
		$_var_15['key_index_one'] = advert('3101');
		$_var_15['key_index_two'] = advert('3102');
		$_var_15['distinguish_index_one'] = authorization_skin('3101_index_one');
		$_var_15['distinguish_index_two'] = authorization_skin('3102_index_two');
		if (authorization_skin_checking('3101_index_one') == advert('3101')) {
			$_var_15['is_index_one'] = '1';
		} else {
			$_var_15['is_index_one'] = '0';
		}
		if (authorization_skin_checking('3102_index_two') == advert('3102')) {
			$_var_15['is_index_two'] = '1';
		} else {
			$_var_15['is_index_two'] = '0';
		}
		return view('one', ['appid' => $_var_14, 'skin' => $_var_15, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function wap()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_16 = $this->random_ryan_key(session('user'));
		$_var_17 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power();
			$_var_18 = input('key');
			$_var_19 = input('uid');
			$_var_20 = input('time');
			$_var_21 = input('skin_id');
			if ($_var_21 == 1) {
			} else {
				if ($_var_21 == 2) {
				} else {
					$this->error('违规操作！');
					exit;
				}
			}
			$_var_22 = db('advert')->where('id', 223)->update(['content' => $_var_21]);
			if ($_var_22 > 0) {
				$this->success('修改成功！');
				exit;
			} else {
				$this->error('修改失败 请稍后重试！');
				exit;
			}
		}
		if (advert('47') == '' || advert('47') == null) {
			$_var_23 = '请先到仪表盘填写APPID';
		} else {
			$_var_23 = advert('47');
		}
		return view('wap', ['appid' => $_var_23, 'skin' => advert('223'), 'Ryan_time' => $_var_17, 'Ryan_key' => $_var_16]);
	}
	public function skin_use()
	{
		$this->check_power();
		$_var_24 = $this->random_ryan_key(session('user'));
		$_var_25 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$this->check_power();
			$_var_26 = input('key');
			$_var_27 = input('uid');
			$_var_28 = input('time');
			$_var_29 = input('skin_id');
			if ($_var_29 == '3101') {
				$_var_30 = '_a';
				$_var_31 = '200';
				$_var_32 = advert('3101');
				$_var_33 = authorization_skin_checking('3101_index_one');
			} else {
				if ($_var_29 == '3102') {
					$_var_30 = '_b';
					$_var_31 = '201';
					$_var_32 = advert('3102');
					$_var_33 = authorization_skin_checking('3102_index_two');
				}
			}
			if ($_var_32 == $_var_33) {
				$_var_34['content'] = $_var_30;
				$_var_35 = db('advert')->where('id', $_var_31)->update($_var_34);
				if ($_var_35 > 0) {
					$this->success('模板切换成功！');
					exit;
				} else {
					$this->error('模板切换失败 请稍后重试！');
					exit;
				}
			} else {
				$this->error('NO NO NO 未经许可 信息已记录！');
				exit;
			}
		}
	}
}