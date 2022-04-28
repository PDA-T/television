<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Artical extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function index()
	{
		$this->check_power();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('artical')->where('type', '0')->order('id DESC')->paginate(12);
		return view('index', ['artical_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function edit()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_3 = $this->random_ryan_key(session('user'));
		$_var_4 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_5 = input('key');
			$_var_6 = input('uid');
			$_var_7 = input('time');
			$_var_8 = input('edit_id');
			$_var_9 = input('artical_title');
			$_var_10 = input('artical_content');
			$_var_11 = input('artical_url');
			$_var_12 = input('artical_picture');
			$_var_13 = input('artical_eject');
			$_var_7 = input('artical_time');
			$_var_14 = input('artical_type');
			$_var_15 = input('artical_popup_rate');
			if ($_var_13 == '1') {
				$_var_16['eject'] = '1';
				$_var_17 = db('artical')->where($_var_16)->find();
				if ($_var_17) {
					$_var_18['eject'] = '0';
					db('artical')->where('id', $_var_17['id'])->update($_var_18);
				}
			}
			$_var_19['title'] = $_var_9;
			$_var_19['content'] = $_var_10;
			$_var_19['url'] = $_var_11;
			$_var_19['picture'] = $_var_12;
			$_var_19['eject'] = $_var_13;
			$_var_19['time'] = strtotime(date($_var_7));
			$_var_19['type'] = $_var_14;
			$_var_19['popup_rate'] = $_var_15;
			db('artical')->where('id', $_var_8)->update($_var_19);
			$this->write_ryan_operation_log('编辑 公告', 0, $_var_9);
			$_var_20 = url('artical/index', ['Ryan_time' => $_var_4, 'Ryan_key' => $_var_3]);
			$this->success('修改成功', $_var_20);
		}
		$_var_21['id'] = input('edit_id');
		$_var_22 = db('artical')->where($_var_21)->find();
		$_var_23 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit', ['admin_list' => $_var_23, 'artical_data' => $_var_22, 'Ryan_time' => $_var_4, 'Ryan_key' => $_var_3]);
	}
	public function add()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_24 = $this->random_ryan_key(session('user'));
		$_var_25 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_26 = input('key');
			$_var_27 = input('uid');
			$_var_28 = input('time');
			$_var_29 = input('artical_title');
			$_var_30 = input('artical_content');
			$_var_31 = input('artical_eject');
			$_var_28 = input('artical_time');
			$_var_32 = input('artical_type');
			$_var_33 = input('artical_popup_rate');
			if ($_var_31 == '1') {
				$_var_34['eject'] = '1';
				$_var_35 = db('artical')->where($_var_34)->find();
				if ($_var_35) {
					$_var_36['eject'] = '0';
					db('artical')->where('id', $_var_35['id'])->update($_var_36);
				}
			}
			$_var_37['title'] = $_var_29;
			$_var_37['content'] = $_var_30;
			$_var_37['eject'] = $_var_31;
			$_var_37['time'] = strtotime(date($_var_28));
			$_var_37['type'] = $_var_32;
			$_var_37['popup_rate'] = $_var_33;
			db('artical')->insert($_var_37);
			$this->write_ryan_operation_log('新增 公告', 0, $_var_29);
			$_var_38 = url('artical/index', ['Ryan_time' => $_var_25, 'Ryan_key' => $_var_24]);
			$this->success('添加成功', $_var_38);
		}
		return view('add', ['Ryan_time' => $_var_25, 'Ryan_key' => $_var_24]);
	}
}