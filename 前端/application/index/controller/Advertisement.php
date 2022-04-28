<?php


namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Db;
use app\index\controller\SuncommonRyan;
class Advertisement extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
		$this->check_ryan_referer();

	}
	public function banner_index()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_0 = $this->random_ryan_key(session('user'));
		$_var_1 = time();
		$_var_2 = input('type');
		if ($_var_2) {
			if ($_var_2 == 1) {
				$_var_3['audit'] = '1';
				$_var_4 = ' - 审核通过';
			} else {
				if ($_var_2 == 2) {
					$_var_3['audit'] = '2';
					$_var_4 = ' - 待审核';
				} else {
					if ($_var_2 == 3) {
						$_var_3['audit'] = '3';
						$_var_4 = ' - 驳回';
					} else {
						$this->error('违规操作！');
						exit;
					}
				}
			}
		} else {
			$_var_4 = '';
		}
		$_var_5 = '100';
		$_var_3['cid'] = $_var_5;
		$_var_3['del'] = 0;
		$_var_6 = db('advertisement')->where($_var_3)->order('id DESC')->paginate(10);
		$_var_7['cid'] = $_var_5;
		$_var_7['del'] = 0;
		$_var_8 = db('advertisement')->where($_var_7)->count();
		$_var_9['cid'] = $_var_5;
		$_var_9['del'] = 0;
		$_var_9['audit'] = '1';
		$_var_10 = db('advertisement')->where($_var_9)->count();
		$_var_11['cid'] = $_var_5;
		$_var_11['del'] = 0;
		$_var_11['audit'] = '2';
		$_var_12 = db('advertisement')->where($_var_11)->count();
		$_var_13['cid'] = $_var_5;
		$_var_13['del'] = 0;
		$_var_13['audit'] = '3';
		$_var_14 = db('advertisement')->where($_var_13)->count();
		if ($_var_8 == '0') {
			$_var_15 = '0.00';
			$_var_16 = '0.00';
			$_var_17 = '0.00';
		} else {
			$_var_15 = round($_var_10 / $_var_8 * 100, 2);
			$_var_16 = round($_var_12 / $_var_8 * 100, 2);
			$_var_17 = round($_var_14 / $_var_8 * 100, 2);
		}
		$_var_18 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('banner_index', ['admin_list' => $_var_18, 'type_name' => $_var_4, 'type' => $_var_5, 'banner_index_count' => $_var_8, 'banner_index_ok_count' => $_var_10, 'banner_index_ok_count_proportion' => $_var_15, 'banner_index_wait_count' => $_var_12, 'banner_index_wait_count_proportion' => $_var_16, 'banner_index_no_count' => $_var_14, 'banner_index_no_count_proportion' => $_var_17, 'banner_index_list' => $_var_6, 'Ryan_time' => $_var_1, 'Ryan_key' => $_var_0]);
	}
	public function banner_recommend()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_19 = $this->random_ryan_key(session('user'));
		$_var_20 = time();
		$_var_21 = input('type');
		if ($_var_21) {
			if ($_var_21 == 1) {
				$_var_22['audit'] = '1';
				$_var_23 = ' - 审核通过';
			} else {
				if ($_var_21 == 2) {
					$_var_22['audit'] = '2';
					$_var_23 = ' - 待审核';
				} else {
					if ($_var_21 == 3) {
						$_var_22['audit'] = '3';
						$_var_23 = ' - 驳回';
					} else {
						$this->error('违规操作！');
						exit;
					}
				}
			}
		} else {
			$_var_23 = '';
		}
		$_var_24 = '1';
		$_var_22['cid'] = $_var_24;
		$_var_22['del'] = 0;
		$_var_25 = db('advertisement')->where($_var_22)->order('id DESC')->paginate(10);
		$_var_26['cid'] = $_var_24;
		$_var_26['del'] = 0;
		$_var_27 = db('advertisement')->where($_var_26)->count();
		$_var_28['cid'] = $_var_24;
		$_var_28['del'] = 0;
		$_var_28['audit'] = '1';
		$_var_29 = db('advertisement')->where($_var_28)->count();
		$_var_30['cid'] = $_var_24;
		$_var_30['del'] = 0;
		$_var_30['audit'] = '2';
		$_var_31 = db('advertisement')->where($_var_30)->count();
		$_var_32['cid'] = $_var_24;
		$_var_32['del'] = 0;
		$_var_32['audit'] = '3';
		$_var_33 = db('advertisement')->where($_var_32)->count();
		if ($_var_27 == '0') {
			$_var_34 = '0.00';
			$_var_35 = '0.00';
			$_var_36 = '0.00';
		} else {
			$_var_34 = round($_var_29 / $_var_27 * 100, 2);
			$_var_35 = round($_var_31 / $_var_27 * 100, 2);
			$_var_36 = round($_var_33 / $_var_27 * 100, 2);
		}
		$_var_37 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('banner_recommend', ['admin_list' => $_var_37, 'type_name' => $_var_23, 'type' => $_var_24, 'banner_recommend_count' => $_var_27, 'banner_recommend_ok_count' => $_var_29, 'banner_recommend_ok_count_proportion' => $_var_34, 'banner_recommend_wait_count' => $_var_31, 'banner_recommend_wait_count_proportion' => $_var_35, 'banner_recommend_no_count' => $_var_33, 'banner_recommend_no_count_proportion' => $_var_36, 'banner_recommend_list' => $_var_25, 'Ryan_time' => $_var_20, 'Ryan_key' => $_var_19]);
	}
	public function ico_recommend()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_38 = $this->random_ryan_key(session('user'));
		$_var_39 = time();
		$_var_40 = input('type');
		if ($_var_40) {
			if ($_var_40 == 1) {
				$_var_41['audit'] = '1';
				$_var_42 = ' - 审核通过';
			} else {
				if ($_var_40 == 2) {
					$_var_41['audit'] = '2';
					$_var_42 = ' - 待审核';
				} else {
					if ($_var_40 == 3) {
						$_var_41['audit'] = '3';
						$_var_42 = ' - 驳回';
					} else {
						$this->error('违规操作！');
						exit;
					}
				}
			}
		} else {
			$_var_42 = '';
		}
		$_var_43 = '2';
		$_var_41['cid'] = $_var_43;
		$_var_41['del'] = 0;
		$_var_44 = db('advertisement')->where($_var_41)->order('id DESC')->paginate(10);
		$_var_45['cid'] = $_var_43;
		$_var_45['del'] = 0;
		$_var_46 = db('advertisement')->where($_var_45)->count();
		$_var_47['cid'] = $_var_43;
		$_var_47['del'] = 0;
		$_var_47['audit'] = '1';
		$_var_48 = db('advertisement')->where($_var_47)->count();
		$_var_49['cid'] = $_var_43;
		$_var_49['del'] = 0;
		$_var_49['audit'] = '2';
		$_var_50 = db('advertisement')->where($_var_49)->count();
		$_var_51['cid'] = $_var_43;
		$_var_51['del'] = 0;
		$_var_51['audit'] = '3';
		$_var_52 = db('advertisement')->where($_var_51)->count();
		if ($_var_46 == '0') {
			$_var_53 = '0.00';
			$_var_54 = '0.00';
			$_var_55 = '0.00';
		} else {
			$_var_53 = round($_var_48 / $_var_46 * 100, 2);
			$_var_54 = round($_var_50 / $_var_46 * 100, 2);
			$_var_55 = round($_var_52 / $_var_46 * 100, 2);
		}
		$_var_56 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('ico_recommend', ['admin_list' => $_var_56, 'type_name' => $_var_42, 'type' => $_var_43, 'ico_recommend_count' => $_var_46, 'ico_recommend_ok_count' => $_var_48, 'ico_recommend_ok_count_proportion' => $_var_53, 'ico_recommend_wait_count' => $_var_50, 'ico_recommend_wait_count_proportion' => $_var_54, 'ico_recommend_no_count' => $_var_52, 'ico_recommend_no_count_proportion' => $_var_55, 'ico_recommend_list' => $_var_44, 'Ryan_time' => $_var_39, 'Ryan_key' => $_var_38]);
	}
	public function big_picture_recommend()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_57 = $this->random_ryan_key(session('user'));
		$_var_58 = time();
		$_var_59 = input('type');
		if ($_var_59) {
			if ($_var_59 == 1) {
				$_var_60['audit'] = '1';
				$_var_61 = ' - 审核通过';
			} else {
				if ($_var_59 == 2) {
					$_var_60['audit'] = '2';
					$_var_61 = ' - 待审核';
				} else {
					if ($_var_59 == 3) {
						$_var_60['audit'] = '3';
						$_var_61 = ' - 驳回';
					} else {
						$this->error('违规操作！');
						exit;
					}
				}
			}
		} else {
			$_var_61 = '';
		}
		$_var_62 = '3';
		$_var_60['cid'] = $_var_62;
		$_var_60['del'] = 0;
		$_var_63 = db('advertisement')->where($_var_60)->order('id DESC')->paginate(10);
		$_var_64['cid'] = $_var_62;
		$_var_64['del'] = 0;
		$_var_65 = db('advertisement')->where($_var_64)->count();
		$_var_66['cid'] = $_var_62;
		$_var_66['del'] = 0;
		$_var_66['audit'] = '1';
		$_var_67 = db('advertisement')->where($_var_66)->count();
		$_var_68['cid'] = $_var_62;
		$_var_68['del'] = 0;
		$_var_68['audit'] = '2';
		$_var_69 = db('advertisement')->where($_var_68)->count();
		$_var_70['cid'] = $_var_62;
		$_var_70['del'] = 0;
		$_var_70['audit'] = '3';
		$_var_71 = db('advertisement')->where($_var_70)->count();
		if ($_var_65 == '0') {
			$_var_72 = '0.00';
			$_var_73 = '0.00';
			$_var_74 = '0.00';
		} else {
			$_var_72 = round($_var_67 / $_var_65 * 100, 2);
			$_var_73 = round($_var_69 / $_var_65 * 100, 2);
			$_var_74 = round($_var_71 / $_var_65 * 100, 2);
		}
		$_var_75 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('big_picture_recommend', ['admin_list' => $_var_75, 'type_name' => $_var_61, 'type' => $_var_62, 'big_picture_recommend_count' => $_var_65, 'big_picture_recommend_ok_count' => $_var_67, 'big_picture_recommend_ok_count_proportion' => $_var_72, 'big_picture_recommend_wait_count' => $_var_69, 'big_picture_recommend_wait_count_proportion' => $_var_73, 'big_picture_recommend_no_count' => $_var_71, 'big_picture_recommend_no_count_proportion' => $_var_74, 'big_picture_recommend_list' => $_var_63, 'Ryan_time' => $_var_58, 'Ryan_key' => $_var_57]);
	}
	public function launch_page()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_76 = $this->random_ryan_key(session('user'));
		$_var_77 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			db('advert')->where('id', 354)->update(['content' => input('launchImageAd')]);
			db('advert')->where('id', 358)->update(['content' => input('launchImageAd_bottom')]);
			db('advert')->where('id', 355)->update(['content' => input('launchImageAd_url')]);
			db('advert')->where('id', 356)->update(['content' => input('launchImageAd_time')]);
			db('advert')->where('id', 357)->update(['content' => input('launchImageAd_skip')]);
			$this->write_ryan_operation_log('编辑启动页广告', 0, '');
			$this->success('操作成功', 'advertisement/launch_page');
		}
		return view('launch_page', ['Ryan_time' => $_var_77, 'Ryan_key' => $_var_76]);
	}
	public function edit()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_78 = $this->random_ryan_key(session('user'));
		$_var_79 = time();
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_80 = input('key');
			$_var_81 = input('uid');
			$_var_82 = input('time');
			$_var_83 = input('edit_id');
			$_var_84 = input('ad_content');
			$_var_85 = input('ad_audit');
			if ($_var_85 !== '1' && $_var_85 !== '3') {
				$this->error('违规操作！');
				exit;
			}
			$_var_86['id'] = input('edit_id');
			$_var_87 = db('advertisement')->where($_var_86)->find();
			if (!$_var_87) {
				$this->error('违规操作！');
				exit;
			}
			$_var_88['content'] = $_var_84;
			$_var_88['audit'] = $_var_85;
			if ($_var_85 == 0) {
				$_var_89 = '未知';
			} else {
				if ($_var_85 == 1) {
					$_var_89 = '审核通过';
				} else {
					if ($_var_85 == 2) {
						$_var_89 = '待审核';
					} else {
						if ($_var_85 == 3) {
							$_var_89 = '驳回';
						}
					}
				}
			}
			db('advertisement')->where('id', $_var_83)->update($_var_88);
			if ($_var_87['cid'] == '100') {
				$this->write_ryan_operation_log($_var_89 . ' 首页轮播', 0, '编号：' . $_var_83);
				$_var_90 = url('advertisement/banner_index', ['Ryan_time' => $_var_79, 'Ryan_key' => $_var_78]);
			} else {
				if ($_var_87['cid'] == '1') {
					$this->write_ryan_operation_log($_var_89 . ' 推荐轮播', 0, '编号：' . $_var_83);
					$_var_90 = url('advertisement/banner_recommend', ['Ryan_time' => $_var_79, 'Ryan_key' => $_var_78]);
				} else {
					if ($_var_87['cid'] == '2') {
						$this->write_ryan_operation_log($_var_89 . ' 推荐图标', 0, '编号：' . $_var_83);
						$_var_90 = url('advertisement/ico_recommend', ['Ryan_time' => $_var_79, 'Ryan_key' => $_var_78]);
					} else {
						if ($_var_87['cid'] == '3') {
							$this->write_ryan_operation_log($_var_89 . ' 推荐横幅', 0, '编号：' . $_var_83);
							$_var_90 = url('advertisement/big_picture_recommend', ['Ryan_time' => $_var_79, 'Ryan_key' => $_var_78]);
						}
					}
				}
			}
			$this->success('操作成功', $_var_90);
		}
		$_var_86['id'] = input('edit_id');
		$_var_87 = db('advertisement')->where($_var_86)->find();
		$_var_91['id'] = $_var_87['user_id'];
		$_var_92 = db('user')->where($_var_91)->find();
		$_var_93 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('edit', ['admin_list' => $_var_93, 'user_data' => $_var_92, 'ad_data' => $_var_87, 'Ryan_time' => $_var_79, 'Ryan_key' => $_var_78]);
	}
	public function add()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_94 = $this->random_ryan_key(session('user'));
		$_var_95 = time();
		$_var_96 = input('type');
		$_var_97 = input('ad_name');
		$_var_98 = input('ad_linkurl');
		$_var_99 = input('ad_picurl');
		if (request()->Post()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_100 = input('key');
			$_var_101 = input('time');
			$_var_102 = db('user')->where('id', session('user'))->find();
			if (!$_var_102) {
				$this->error('违规操作！');
				exit;
			}
			if ($_var_96 == '100') {
				$_var_103['cid'] = '100';
				$_var_104 = url('advertisement/banner_index', ['Ryan_time' => $_var_95, 'Ryan_key' => $_var_94]);
				$_var_105 = '5';
			} else {
				if ($_var_96 == '1') {
					$_var_103['cid'] = '1';
					$_var_104 = url('advertisement/banner_recommend', ['Ryan_time' => $_var_95, 'Ryan_key' => $_var_94]);
					$_var_105 = '5';
				} else {
					if ($_var_96 == '2') {
						$_var_103['cid'] = '2';
						$_var_104 = url('advertisement/ico_recommend', ['Ryan_time' => $_var_95, 'Ryan_key' => $_var_94]);
						$_var_105 = '8';
					} else {
						if ($_var_96 == '3') {
							$_var_103['cid'] = '3';
							$_var_104 = url('advertisement/big_picture_recommend', ['Ryan_time' => $_var_95, 'Ryan_key' => $_var_94]);
							$_var_105 = '3';
						} else {
							$this->error('违规操作！');
							exit;
						}
					}
				}
			}
			$_var_103['user_id'] = $_var_102['id'];
			$_var_106 = db('advertisement')->where($_var_103)->count();
			if ($_var_106 > $_var_105 || $_var_102['power'] == '1') {
				$this->error('该类广告位已经用完！');
				exit;
			}
			$_var_107['name'] = $_var_97;
			$_var_107['linkurl'] = $_var_98;
			$_var_107['picurl'] = $_var_99;
			$_var_107['user_id'] = session('user');
			$_var_107['cid'] = $_var_96;
			if ($_var_102['id'] == '1') {
				$_var_107['audit'] = '1';
			} else {
				$_var_107['audit'] = '2';
			}
			db('advertisement')->insert($_var_107);
			$this->write_ryan_operation_log('新增 广告', 0, $_var_97);
			$this->success('添加成功', $_var_104);
		}
		$_var_102 = db('user')->where('id', session('user'))->find();
		if (!$_var_102) {
			$this->error('违规操作！');
			exit;
		}
		if ($_var_96 == '100') {
			$_var_103['cid'] = '100';
			$_var_108 = '首页轮播';
			$_var_105 = '5';
		} else {
			if ($_var_96 == '1') {
				$_var_103['cid'] = '1';
				$_var_108 = '推荐轮播';
				$_var_105 = '5';
			} else {
				if ($_var_96 == '2') {
					$_var_103['cid'] = '2';
					$_var_108 = '推荐图标';
					$_var_105 = '8';
				} else {
					if ($_var_96 == '3') {
						$_var_103['cid'] = '3';
						$_var_108 = '推荐横幅';
						$_var_105 = '3';
					} else {
						$this->error('违规操作！');
						exit;
					}
				}
			}
		}
		$_var_103['user_id'] = $_var_102['id'];
		$_var_106 = db('advertisement')->where($_var_103)->count();
		$_var_109 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('add', ['admin_list' => $_var_109, 'user_data' => $_var_102, 'type' => $_var_96, 'type_name' => $_var_108, 'current_use_count' => $_var_106, 'ad_limit' => $_var_105, 'Ryan_time' => $_var_95, 'Ryan_key' => $_var_94]);
	}
	public function del()
	{
		$this->check_power();
		$_var_110 = $this->random_ryan_key(session('user'));
		$_var_111 = time();
		if (request()->Get()) {
			$this->check_ryan_time(input('Ryan_time'));
			$this->check_ryan_key(input('Ryan_key'), session('user'), input('Ryan_time'));
			$this->check_ryan_referer();
			if (advert('43') == '1') {
				$this->error('系统维护中 为了数据安全，当前禁止变更数据！');
				return;
			}
			$_var_112['id'] = input('del_id');
			$_var_113 = db('advertisement')->where($_var_112)->find();
			if ($_var_113['cid'] == '100') {
				$_var_114 = url('advertisement/banner_index', ['Ryan_time' => $_var_111, 'Ryan_key' => $_var_110]);
			} else {
				if ($_var_113['cid'] == '1') {
					$_var_114 = url('advertisement/banner_recommend', ['Ryan_time' => $_var_111, 'Ryan_key' => $_var_110]);
				} else {
					if ($_var_113['cid'] == '2') {
						$_var_114 = url('advertisement/ico_recommend', ['Ryan_time' => $_var_111, 'Ryan_key' => $_var_110]);
					} else {
						if ($_var_113['cid'] == '3') {
							$_var_114 = url('advertisement/big_picture_recommend', ['Ryan_time' => $_var_111, 'Ryan_key' => $_var_110]);
						}
					}
				}
			}
			if (!isset($_GET['del_id'])) {
				$this->error('操作失败', $_var_114);
			}
			$_var_115 = input('key');
			$_var_116 = input('uid');
			$_var_117 = input('time');
			$_var_118 = input('del_id');
			$_var_119['del'] = 1;
			$_var_120 = db('advertisement')->where('id', $_var_118)->update($_var_119);
			if ($_var_120 > 0) {
				$this->write_ryan_operation_log('删除 广告', 0, '编号：' . $_var_118);
				$this->success('删除成功', $_var_114);
				exit;
			} else {
				$this->error('删除失败 请稍后重试！', $_var_114);
				exit;
			}
		}
	}
	public function check()
	{
		$this->check_power();
		$this->check_ryan_referer();
		$_var_121 = $this->random_ryan_key(session('user'));
		$_var_122 = time();
		$_var_123 = db('advertisement')->count();
		$_var_124['audit'] = '1';
		$_var_125 = db('advertisement')->where($_var_124)->count();
		$_var_126['audit'] = '2';
		$_var_127 = db('advertisement')->where($_var_126)->order('id DESC')->paginate(10);
		$_var_128 = db('advertisement')->where($_var_126)->count();
		$_var_129['audit'] = '3';
		$_var_130 = db('advertisement')->where($_var_129)->count();
		if ($_var_123 == 0) {
			$_var_131 = '0.00';
			$_var_132 = '0.00';
			$_var_133 = '0.00';
		} else {
			$_var_131 = round($_var_128 / $_var_123 * 100, 2);
			$_var_132 = round($_var_125 / $_var_123 * 100, 2);
			$_var_133 = round($_var_130 / $_var_123 * 100, 2);
		}
		$_var_134 = db('user')->where('power = 0')->order('id ASC')->limit(3)->select();
		return view('check', ['admin_list' => $_var_134, 'check_count' => $_var_123, 'check_ok_count' => $_var_125, 'check_ok_count_proportion' => $_var_132, 'check_wait_count' => $_var_128, 'check_wait_count_proportion' => $_var_131, 'check_no_count' => $_var_130, 'check_no_count_proportion' => $_var_133, 'check_list' => $_var_127, 'Ryan_time' => $_var_122, 'Ryan_key' => $_var_121]);
	}
}