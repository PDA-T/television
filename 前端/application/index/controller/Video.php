<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Video extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function privilege()
	{
		$this->check_power();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = db('privilege')->where('del', 0)->order('sort asc')->limit(100)->select();
		$_var_3 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('privilege', ['admin_list' => $_var_3, 'privilege_list' => $_var_2, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function hot()
	{
		$this->check_power();
		$_var_4 = $this->random_ryan_key(session('user'));
		$_var_5 = time();
		$_var_6 = db('video')->where('del', 0)->order('id DESC')->paginate(12);
		$_var_7 = db('video')->where('del', 0)->count();
		return view('hot', ['video_hot_list' => $_var_6, 'video_hot_count' => $_var_7, 'Ryan_time' => $_var_5, 'Ryan_key' => $_var_4]);
	}
	public function edit_privilege()
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
			$_var_14 = input('video_name');
			$_var_15 = input('video_content');
			$_var_16 = input('video_linkurl');
			$_var_17 = input('video_picurl');
			$_var_18 = input('video_sort');
			$_var_19['name'] = $_var_14;
			$_var_19['content'] = $_var_15;
			$_var_19['linkurl'] = $_var_16;
			$_var_19['picurl'] = $_var_17;
			$_var_19['sort'] = $_var_18;
			db('privilege')->where('id', $_var_13)->update($_var_19);
			$this->write_ryan_operation_log('编辑 特权影视', 0, $_var_14);
			$_var_20 = url('video/privilege', ['edit_id' => $_var_13, 'Ryan_time' => $_var_9, 'Ryan_key' => $_var_8]);
			$this->success('修改成功', $_var_20);
		}
		$_var_21['id'] = input('edit_id');
		$_var_22 = db('privilege')->where($_var_21)->find();
		$_var_23 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit_privilege', ['admin_list' => $_var_23, 'privilege_data' => $_var_22, 'Ryan_time' => $_var_9, 'Ryan_key' => $_var_8]);
	}
	public function add_privilege()
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
			$_var_29 = input('video_name');
			$_var_30 = input('video_content');
			$_var_31 = input('video_linkurl');
			$_var_32 = input('video_picurl');
			$_var_33 = input('video_sort');
			$_var_34['name'] = $_var_29;
			$_var_34['content'] = $_var_30;
			$_var_34['linkurl'] = $_var_31;
			$_var_34['picurl'] = $_var_32;
			$_var_34['sort'] = $_var_33;
			$_var_34['user_id'] = '1';
			$_var_34['cid'] = '2';
			$_var_34['audit'] = '2';
			$_var_34['del'] = '0';
			db('privilege')->insert($_var_34);
			$this->write_ryan_operation_log('新增 特权影视', 0, $_var_29);
			$_var_35 = url('video/privilege', ['Ryan_time' => $_var_25, 'Ryan_key' => $_var_24]);
			$this->success('新增成功', $_var_35);
		}
		$_var_36 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('add_privilege', ['admin_list' => $_var_36, 'Ryan_time' => $_var_25, 'Ryan_key' => $_var_24]);
	}
	public function del_privilege()
	{
		$this->check_power();
		$_var_37 = $this->random_ryan_key(session('user'));
		$_var_38 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_39 = url('video/privilege', ['Ryan_time' => $_var_38, 'Ryan_key' => $_var_37]);
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_39);
			}
			$_var_40 = input('key');
			$_var_41 = input('uid');
			$_var_42 = input('time');
			$_var_43 = input('del_id');
			$_var_44['del'] = '1';
			db('privilege')->where('id', $_var_43)->update($_var_44);
			$this->write_ryan_operation_log('删除 特权影视', 0, 'ID:' . $_var_43);
			$this->success('删除成功', $_var_39);
		}
	}
	public function add_hot()
	{
		$this->check_power();
		$_var_45 = $this->random_ryan_key(session('user'));
		$_var_46 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_47 = input('key');
			$_var_48 = input('uid');
			$_var_49 = input('time');
			$_var_50 = input('video_title');
			$_var_51 = input('video_img');
			$_var_52 = input('video_url');
			$_var_53 = input('video_content');
			$_var_54 = input('video_type');
			$_var_55 = input('video_region');
			$_var_56['title'] = $_var_50;
			$_var_56['img'] = $_var_51;
			$_var_56['url'] = $_var_52;
			$_var_56['content'] = $_var_53;
			$_var_56['type'] = $_var_54;
			$_var_56['region'] = $_var_55;
			$_var_56['del'] = '0';
			db('video')->insert($_var_56);
			$this->write_ryan_operation_log('新增 推荐影视', 0, $_var_50);
			$_var_57 = url('video/hot', ['Ryan_time' => $_var_46, 'Ryan_key' => $_var_45]);
			$this->success('新增成功', $_var_57);
		}
		$_var_58 = db('video')->count();
		return view('add_hot', ['video_hot_count' => $_var_58, 'Ryan_time' => $_var_46, 'Ryan_key' => $_var_45]);
	}
	public function edit_hot()
	{
		$this->check_power();
		$_var_59 = $this->random_ryan_key(session('user'));
		$_var_60 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_61 = input('key');
			$_var_62 = input('uid');
			$_var_63 = input('time');
			$_var_64 = input('edit_id');
			$_var_65 = input('video_title');
			$_var_66 = input('video_img');
			$_var_67 = input('video_url');
			$_var_68 = input('video_content');
			$_var_69 = input('video_type');
			$_var_70 = input('video_region');
			$_var_71['title'] = $_var_65;
			$_var_71['img'] = $_var_66;
			$_var_71['url'] = $_var_67;
			$_var_71['content'] = $_var_68;
			$_var_71['type'] = $_var_69;
			$_var_71['region'] = $_var_70;
			db('video')->where('id', $_var_64)->update($_var_71);
			$this->write_ryan_operation_log('编辑 推荐影视', 0, $_var_65);
			$_var_72 = url('video/hot', ['Ryan_time' => $_var_60, 'Ryan_key' => $_var_59]);
			$this->success('修改成功', $_var_72);
		}
		$_var_73['id'] = input('edit_id');
		$_var_74 = db('video')->where($_var_73)->find();
		$_var_75 = db('video')->count();
		return view('edit_hot', ['video_hot_count' => $_var_75, 'video_hot_data' => $_var_74, 'Ryan_time' => $_var_60, 'Ryan_key' => $_var_59]);
	}
	public function del_hot()
	{
		$this->check_power();
		$_var_76 = $this->random_ryan_key(session('user'));
		$_var_77 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_78 = url('video/hot', ['Ryan_time' => $_var_77, 'Ryan_key' => $_var_76]);
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_78);
			}
			$_var_79 = input('key');
			$_var_80 = input('uid');
			$_var_81 = input('time');
			$_var_82 = input('del_id');
			$_var_83['del'] = '1';
			db('video')->where('id', $_var_82)->update($_var_83);
			$this->write_ryan_operation_log('删除 推荐影视', 0, 'ID:' . $_var_82);
			$this->success('删除成功', $_var_78);
		}
	}
	public function search_hot()
	{
		$this->check_power();
		$_var_84 = $this->random_ryan_key(session('user'));
		$_var_85 = time();
		$_var_86 = input('search_video');
		$_var_87 = url('video/hot', ['Ryan_time' => $_var_85, 'Ryan_key' => $_var_84]);
		if (!$_var_86) {
			$this->error('检索关键词为空', $_var_87);
		}
		$_var_88['title'] = array('like', '%' . $_var_86 . '%');
		$_var_88['del'] = '0';
		$_var_89 = db('video')->order('id desc')->where($_var_88)->paginate(12, false, ['query' => request()->param()]);
		$_var_90 = db('video')->where($_var_88)->count();
		return view('search_hot', ['search_video' => $_var_86, 'video_hot_list' => $_var_89, 'video_hot_count' => $_var_90, 'Ryan_time' => $_var_85, 'Ryan_key' => $_var_84]);
	}
}