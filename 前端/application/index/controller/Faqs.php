<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Faqs extends SuncommonRyan
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
		$_var_2 = db('faq')->order('id DESC')->paginate(12);
		return view('index', ['faq_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
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
			$_var_9 = input('question');
			$_var_10 = input('answer');
			$_var_11['question'] = $_var_9;
			$_var_11['answer'] = $_var_10;
			db('faq')->where('id', $_var_8)->update($_var_11);
			$this->write_ryan_operation_log('编辑 帮助文档', 0, $_var_9);
			$_var_12 = url('faqs/index', ['Ryan_time' => $_var_4, 'Ryan_key' => $_var_3]);
			$this->success('修改成功', $_var_12);
		}
		$_var_13['id'] = input('edit_id');
		$_var_14 = db('faq')->where($_var_13)->find();
		$_var_15 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit', ['admin_list' => $_var_15, 'faq_data' => $_var_14, 'Ryan_time' => $_var_4, 'Ryan_key' => $_var_3]);
	}
	public function add()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_16 = $this->random_ryan_key(session('user'));
		$_var_17 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_18 = input('key');
			$_var_19 = input('uid');
			$_var_20 = input('time');
			$_var_21 = input('question');
			$_var_22 = input('answer');
			$_var_23['question'] = $_var_21;
			$_var_23['answer'] = $_var_22;
			db('faq')->insert($_var_23);
			$this->write_ryan_operation_log('新增 帮助文档', 0, $_var_21);
			$_var_24 = url('faqs/index', ['Ryan_time' => $_var_17, 'Ryan_key' => $_var_16]);
			$this->success('添加成功', $_var_24);
		}
		return view('add', ['Ryan_time' => $_var_17, 'Ryan_key' => $_var_16]);
	}
	public function del()
	{
		$this->check_power();
		$_var_25 = $this->random_ryan_key(session('user'));
		$_var_26 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_27['id'] = input('del_id');
			$_var_28 = db('faq')->where($_var_27)->find();
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_29);
			}
			$_var_30 = input('key');
			$_var_31 = input('uid');
			$_var_32 = input('time');
			$_var_33 = input('del_id');
			db('faq')->where('id', $_var_33)->delete();
			$this->write_ryan_operation_log('删除 帮助文档', 0, 'ID:' . $_var_33);
			$_var_29 = url('faqs/index', ['Ryan_time' => $_var_26, 'Ryan_key' => $_var_25]);
			$this->success('删除成功', $_var_29);
		}
	}
}