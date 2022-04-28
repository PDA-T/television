<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Live extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function live_tv()
	{
		$this->check_power();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('live')->where('type', 1)->order('sort ASC')->paginate(12);
		$_var_3 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('live_tv', ['admin_list' => $_var_3, 'live_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function live_special()
	{
		$this->check_power();
		$_var_4 = $this->random_ryan_key(session('user'));
		$_var_5 = time();
		$_var_6 = db('live')->where('type', 2)->order('sort ASC')->paginate(12);
		$_var_7 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('live_special', ['admin_list' => $_var_7, 'live_special' => $_var_6, 'Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
	}
	public function edit_tv()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_8 = $this->random_ryan_key(session('user'));
		$_var_9 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_10 = input('key');
			$_var_11 = input('uid');
			$_var_12 = input('time');
			$_var_13 = input('edit_id');
			$_var_14 = input('tv_name');
			$_var_15 = input('tv_introduce');
			$_var_16 = input('tv_type');
			$_var_17 = input('tv_picture');
			$_var_18 = input('tv_live_url');
			$_var_19 = input('tv_state');
			if (input('tv_sort') == '') {
				$_var_20 = null;
			} else {
				$_var_20 = input('tv_sort');
			}
			$_var_21['name'] = $_var_14;
			$_var_21['introduce'] = $_var_15;
			$_var_21['type'] = $_var_16;
			$_var_21['picture'] = $_var_17;
			$_var_21['live_url'] = $_var_18;
			$_var_21['state'] = $_var_19;
			$_var_21['sort'] = $_var_20;
			db('live')->where('id', $_var_13)->update($_var_21);
			if ($_var_16 == '1') {
				$_var_22 = url('live/live_tv', ['edit_id' => $_var_13, 'Ryan_time' => $_var_9, 'Ryan_key' => $_var_8]);
			} else {
				if ($_var_16 == '2') {
					$_var_22 = url('live/live_special', ['edit_id' => $_var_13, 'Ryan_time' => $_var_9, 'Ryan_key' => $_var_8]);
				}
			}
			$this->write_ryan_operation_log('编辑 TV/直播', 0, $_var_14);
			$this->success('修改成功', $_var_22);
		}
		$_var_23['id'] = input('edit_id');
		$_var_24 = db('live')->where($_var_23)->find();
		$_var_25 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit_tv', ['admin_list' => $_var_25, 'tv_data' => $_var_24, 'Ryan_time' => $_var_9, 'Ryan_key' => $_var_8]);
	}
	public function add_tv()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_26 = $this->random_ryan_key(session('user'));
		$_var_27 = time();
		if (request()->Post()) {
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			$_var_28 = input('key');
			$_var_29 = input('uid');
			$_var_30 = input('time');
			$_var_31 = input('tv_name');
			$_var_32 = input('tv_introduce');
			$_var_33 = input('tv_type');
			$_var_34 = input('tv_picture');
			$_var_35 = input('tv_live_url');
			$_var_36 = input('tv_state');
			if (input('tv_sort') == '') {
				$_var_37 = null;
			} else {
				$_var_37 = input('tv_sort');
			}
			$_var_38['name'] = $_var_31;
			$_var_38['introduce'] = $_var_32;
			$_var_38['type'] = $_var_33;
			$_var_38['picture'] = $_var_34;
			$_var_38['live_url'] = $_var_35;
			$_var_38['state'] = $_var_36;
			$_var_38['sort'] = $_var_37;
			if (input('tv_sort') == '') {
				$_var_37 = null;
			} else {
				$_var_37 = input('tv_sort');
			}
			db('live')->insert($_var_38);
			if ($_var_33 == '1') {
				$_var_39 = url('live/live_tv', ['Ryan_time' => $_var_27, 'Ryan_key' => $_var_26]);
			} else {
				if ($_var_33 == '2') {
					$_var_39 = url('live/live_special', ['Ryan_time' => $_var_27, 'Ryan_key' => $_var_26]);
				}
			}
			$this->write_ryan_operation_log('新增 TV/直播', 0, $_var_31);
			$this->success('新增成功', $_var_39);
		}
		$_var_40 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('add_tv', ['admin_list' => $_var_40, 'Ryan_time' => $_var_27, 'Ryan_key' => $_var_26]);
	}
	public function del_tv()
	{
		$this->check_power();
		$_var_41 = $this->random_ryan_key(session('user'));
		$_var_42 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_43['id'] = input('del_id');
			$_var_44 = db('live')->where($_var_43)->find();
			if ($_var_44['type'] == '1') {
				$_var_45 = url('live/live_tv', ['Ryan_time' => $_var_42, 'Ryan_key' => $_var_41]);
			} else {
				if ($_var_44['type'] == '2') {
					$_var_45 = url('live/live_special', ['Ryan_time' => $_var_42, 'Ryan_key' => $_var_41]);
				}
			}
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_45);
			}
			$_var_46 = input('key');
			$_var_47 = input('uid');
			$_var_48 = input('time');
			$_var_49 = input('del_id');
			db('live')->where('id', $_var_49)->delete();
			$this->write_ryan_operation_log('删除 TV/直播', 0, 'ID:' . $_var_49);
			$this->success('删除成功', $_var_45);
		}
	}
	public function setup_tv()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_50 = $this->random_ryan_key(session('user'));
		$_var_51 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 2001)->update(['content' => input('live_text')]);
			db('advert')->where('id', 2002)->update(['content' => input('live_button')]);
			db('advert')->where('id', 2003)->update(['content' => input('live_left_upper_img')]);
			db('advert')->where('id', 2004)->update(['content' => input('live_left_upper_url')]);
			db('advert')->where('id', 2005)->update(['content' => input('live_right_upper_img')]);
			db('advert')->where('id', 2006)->update(['content' => input('live_right_upper_url')]);
			db('advert')->where('id', 2007)->update(['content' => input('live_right_lower_img')]);
			db('advert')->where('id', 2008)->update(['content' => input('live_right_lower_url')]);
			db('advert')->where('id', 2009)->update(['content' => input('live_benner_img')]);
			db('advert')->where('id', 2010)->update(['content' => input('live_benner_url')]);
			$this->write_ryan_operation_log('设置 TV/直播', 0, '');
			$_var_52 = url('live/setup_tv', ['Ryan_time' => $_var_51, 'Ryan_key' => $_var_50]);
			$this->success('设置成功', $_var_52);
		}
		$_var_53 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('setup_tv', ['admin_list' => $_var_53, 'Ryan_time' => $_var_51, 'Ryan_key' => $_var_50]);
	}
	public function search_tv()
	{
		$this->check_power();
		$_var_54 = $this->random_ryan_key(session('user'));
		$_var_55 = time();
		$_var_56 = input('search_video');
		$_var_57 = url('video/hot', ['Ryan_time' => $_var_55, 'Ryan_key' => $_var_54]);
		if (!$_var_56) {
			$this->error('检索关键词为空', $_var_57);
		}
		$_var_58['title'] = array('like', '%' . $_var_56 . '%');
		$_var_59 = db('video')->order('id desc')->where($_var_58)->paginate(12, false, ['query' => request()->param()]);
		$_var_60 = db('video')->where($_var_58)->count();
		return view('search_hot', ['search_video' => $_var_56, 'video_hot_list' => $_var_59, 'video_hot_count' => $_var_60, 'Ryan_time' => $_var_55, 'Ryan_key' => $_var_54]);
	}
}