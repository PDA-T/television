<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Appupgrade extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function android()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			if (empty(advert('24')) && input('Android_Updated_switch') == '1') {
				$this->error('操作失败！（更新包地址未设置）');
				exit;
			}
			db('advert')->where('id', 154)->update(['content' => input('Android_Updated_switch')]);
			db('advert')->where('id', 150)->update(['content' => input('Android_Updated_version')]);
			db('advert')->where('id', 151)->update(['content' => input('Android_Updated_content')]);
			$this->write_ryan_operation_log('编辑 安卓版本更新', 0, '');
			$this->success('操作成功', 'appupgrade/android');
		}
		return view('android', ['Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function ios()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_2 = $this->random_ryan_key(session('user'));
		$_var_3 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			if (empty(advert('22')) && input('Ios_Updated_switch') == '1') {
				$this->error('操作失败！（更新包地址未设置）');
				exit;
			}
			db('advert')->where('id', 155)->update(['content' => input('Ios_Updated_switch')]);
			db('advert')->where('id', 152)->update(['content' => input('Ios_Updated_version')]);
			db('advert')->where('id', 153)->update(['content' => input('Ios_Updated_content')]);
			$this->write_ryan_operation_log('编辑 IOS版本更新', 0, '');
			$this->success('操作成功', 'appupgrade/ios');
		}
		return view('ios', ['Ryan_time' => $_var_3, 'Ryan_key' => $_var_2]);
	}
}