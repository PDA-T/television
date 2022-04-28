<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Poster extends SuncommonRyan
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
		$_var_2 = db('share_poster')->order('id DESC')->paginate(10);
		$_var_3 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('index', ['admin_list' => $_var_3, 'poster_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function edit()
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
			$_var_6 = input('key');
			$_var_7 = input('uid');
			$_var_8 = input('time');
			$_var_9 = input('edit_id');
			$_var_10 = input('poster_name');
			$_var_11 = input('poster_img');
			$_var_12['id'] = input('edit_id');
			$_var_13 = db('share_poster')->where($_var_12)->find();
			if (!$_var_13) {
				$this->error('违规操作！');
				exit;
			}
			$_var_14['name'] = $_var_10;
			$_var_14['img'] = $_var_11;
			db('share_poster')->where('id', $_var_9)->update($_var_14);
			$this->write_ryan_operation_log('编辑 海报信息', 0, $_var_10);
			$_var_15 = url('poster/index', ['Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
			$this->success('操作成功', $_var_15);
		}
		$_var_12['id'] = input('edit_id');
		$_var_13 = db('share_poster')->where($_var_12)->find();
		$_var_16 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit', ['admin_list' => $_var_16, 'poster_data' => $_var_13, 'Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
	}
	public function add()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_17 = $this->random_ryan_key(session('user'));
		$_var_18 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_19 = input('key');
			$_var_20 = input('time');
			$_var_21 = input('poster_name');
			$_var_22 = input('poster_img');
			$_var_23 = db('user')->where('id', session('user'))->find();
			if (!$_var_23) {
				$this->error('违规操作！');
				exit;
			}
			$_var_24['name'] = $_var_21;
			$_var_24['img'] = $_var_22;
			db('share_poster')->insert($_var_24);
			$this->write_ryan_operation_log('添加 海报信息', 0, $_var_21);
			$_var_25 = url('poster/index', ['Ryan_time' => $_var_18, 'Ryan_key' => $_var_17]);
			$this->success('添加成功', $_var_25);
		}
		$_var_23 = db('user')->where('id', session('user'))->find();
		if (!$_var_23) {
			$this->error('违规操作！');
			exit;
		}
		$_var_26 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('add', ['admin_list' => $_var_26, 'user_data' => $_var_23, 'Ryan_time' => $_var_18, 'Ryan_key' => $_var_17]);
	}
	public function del()
	{
		$this->check_power();
		$_var_27 = $this->random_ryan_key(session('user'));
		$_var_28 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_29['id'] = input('del_id');
			$_var_30 = db('share_poster')->where($_var_29)->find();
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_31);
			}
			$_var_32 = input('key');
			$_var_33 = input('uid');
			$_var_34 = input('time');
			$_var_35 = input('del_id');
			db('share_poster')->where('id', $_var_35)->delete();
			$this->write_ryan_operation_log('删除 海报信息', 0, 'ID:' . $_var_35);
			$_var_31 = url('poster/index', ['Ryan_time' => $_var_28, 'Ryan_key' => $_var_27]);
			$this->success('删除成功', $_var_31);
		}
	}
}