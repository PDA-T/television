<?php

//by http://ik2021.com
error_reporting(E_ALL ^ E_NOTICE);
use think\Db;
use think\Cache;
use mail\PHPMailer;
use mail\SMTP;
function getIP()
{
	if (getenv('HTTP_CLIENT_IP')) {
		$_var_0 = getenv('HTTP_CLIENT_IP');
	} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		$_var_0 = getenv('HTTP_X_FORWARDED_FOR');
	} elseif (getenv('HTTP_X_FORWARDED')) {
		$_var_0 = getenv('HTTP_X_FORWARDED');
	} elseif (getenv('HTTP_FORWARDED_FOR')) {
		$_var_0 = getenv('HTTP_FORWARDED_FOR');
	} elseif (getenv('HTTP_FORWARDED')) {
		$_var_0 = getenv('HTTP_FORWARDED');
	} else {
		$_var_0 = $_SERVER['REMOTE_ADDR'];
	}
	return $_var_0;
}
function getusercount($_var_1)
{
	$_var_2 = db('user')->where(['parentid' => $_var_1, 'power' => '1'])->count();
	return $_var_2;
}
function getvipcount($_var_3)
{
	$_var_4 = db('user')->where(['parentid' => $_var_3, 'power' => '2'])->count();
	return $_var_4;
}
function getRandomString($_var_5, $_var_6 = null, $_var_7 = false)
{
	if ($_var_7 == true) {
		$_var_8 = rand('100000', '999999');
		$_var_9 = db('user')->where('share_ma', $_var_8)->count();
		if ($_var_9 > 0 || in_array($_var_8, ['111111', '222222', '333333', '444444', '555555', '666666', '777777', '888888', '999999', '000000', '123456', '654321'])) {
			$_var_8 = getRandomString($_var_5, $_var_6, $_var_7);
		}
	} else {
		srand((double) microtime() * 1000000);
		$_var_10 = '0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
		$_var_11 = explode(',', $_var_10);
		$_var_8 = '';
		for ($_var_12 = 0; $_var_12 < 6; $_var_12++) {
			$_var_13 = rand(0, 35);
			$_var_8 .= $_var_11[$_var_13];
		}
	}
	return $_var_8;
}
function randstring($_var_14)
{
	$_var_15 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$_var_16 = str_shuffle($_var_15);
	$_var_17 = $_var_16;
	$_var_18 = substr($_var_17, 0, $_var_14);
	$_var_19 = db('advert')->where('id', 28)->value('content');
	$_var_20 = $_var_19 . $_var_18;
	return $_var_20;
}
function SecurityVerificationKey($_var_21, $_var_22)
{
	$_var_23 = $_var_21 + $_var_22;
	$_var_24 = md5($_var_23);
	return $_var_24;
}
function TimeValidation($_var_25)
{
	$_var_26 = abs(time() - $_var_25);
	return $_var_26;
}
function Version()
{
	$_var_27 = '4.0.3';
	return $_var_27;
}
function RyanToken()
{
	$_var_28 = explode('-', date('H-i-s'));
	$ran=rand(1,9);
	$_var_29 = $_var_28[0] + $ran;
	$_var_30 = $_var_28[1] + 1;
	$_var_31 = $_var_28[2] + 8;
	$_var_32 = str_pad(substr($_var_29 * $_var_30 * 11, 1, 2), 2, '0', STR_PAD_LEFT);
	$_var_33 = str_pad(substr($_var_29 * $_var_30 * $_var_32 * 22, 1, 2), 2, '0', STR_PAD_LEFT);
	$_var_34 = str_pad(substr($_var_29 * $_var_30 * $_var_33 * 33, 1, 2), 2, '0', STR_PAD_LEFT);
	$_var_115=$_var_34 . $_var_32 . $_var_33 . $_var_31;
	db('advert')->where('id', 3111)->update(['content' => $_var_115]);
	return $_var_115;
}
function GetToken()
{
	$_var_35 = advert('3111');
	$_var_36 = substr($_var_35,0,6);
	return $_var_36;
}
function RandomInvitationCode($_var_36)
{
	$_var_37 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$_var_38 = str_shuffle($_var_37);
	$_var_39 = $_var_38;
	$_var_40 = substr($_var_39, 0, $_var_36);
	$_var_41 = db('user')->where('share_ma', $_var_40)->count();
	if ($_var_41 == 0) {
		$_var_42 = $_var_40;
	} else {
		$_var_43 = substr($_var_39, 0, 1);
		$_var_42 = $_var_40 . $_var_43;
	}
	return $_var_42;
}
function OrderNumber($_var_44)
{
	$_var_45 = '1234567890';
	$_var_46 = str_shuffle($_var_45);
	$_var_47 = $_var_46;
	$_var_48 = substr($_var_47, 0, $_var_44);
	$_var_49 = db('advert')->where('id', 28)->value('content');
	$_var_50 = date('YmdHis');
	$_var_51 = $_var_49 . $_var_50 . $_var_48;
	$_var_52 = db('order')->where('out_trade_no', $_var_51)->count();
	if ($_var_52 == 0) {
		$_var_53 = $_var_51;
	} else {
		$_var_54 = substr($_var_47, 0, 1);
		$_var_53 = $_var_51 . $_var_54;
	}
	return $_var_53;
}
function GetUserInformation($_var_55)
{
	$_var_56 = db('user')->where('id', $_var_55)->find();
	return $_var_56;
}
function GetUserParentInformation($_var_57)
{
	$_var_58 = db('user')->where('id', GetUserInformation($_var_57)['parentid'])->find();
	return $_var_58;
}
function GetCdkeyInformation($_var_59)
{
	$_var_60 = db('cdkey')->where('cdkey', $_var_59)->find();
	return $_var_60;
}
function name()
{
	$_var_61 = session('user');
	$_var_62 = db('user')->where('id', $_var_61)->value('nick_name');
	if (empty($_var_62)) {
		$_var_63 = db('user')->where('id', $_var_61)->value('username');
	} else {
		$_var_63 = $_var_62;
	}
	return $_var_63;
}
function _name($_var_64)
{
	$_var_65 = db('user')->where('id', $_var_64)->value('username');
	return $_var_65 ? $_var_65 : '无数据';
}
function sname($_var_66, $_var_67)
{
	$_var_67 = db('user')->where('id', $_var_66)->value($_var_67);
	return $_var_67 ? $_var_67 : '无数据';
}
function id()
{
	$_var_68 = session('user');
	return $_var_68;
}
function power()
{
	$_var_69 = session('user');
	$_var_70 = db('user')->where('id', $_var_69)->value('power');
	if ($_var_70 == '1') {
		return '代理';
	} else {
		return '管理员';
	}
}
function advert($_var_71 = null)
{
	if ($_var_71 != null) {
		$_var_72 = db('advert')->where('id', $_var_71)->value('content');
	} else {
		$_var_72 = db('advert')->where('id', 1)->value('content');
	}
	return $_var_72;
}
function Ryan_name()
{
	$_var_73 = db('advert')->where('id', 21)->value('content');
	return $_var_73;
}
function authorization()
{
	$_var_74 = '910728GrassYouCode';
	$_var_75 = md5($_var_74);
	$_var_76 = base64_encode($_var_74);
	$_var_77 = $_SERVER['SERVER_NAME'];
	$_var_78 = md5($_var_77);
	$_var_79 = base64_encode($_var_77);
	$_var_80 = $_var_77 . advert('47') . $_var_75;
	return md5($_var_80);
}
function authorization_checking()
{
	$_var_81 = '910829';
	$_var_82 = authorization() . $_var_81;
	$_var_83 = md5($_var_82);
	$_var_84 = '150714';
	$_var_85 = $_var_83 . $_var_84;
	$_var_86 = md5($_var_85);
	$_var_87 = '891107';
	$_var_88 = $_var_86 . $_var_87;
	$_var_89 = md5($_var_88);
	$_var_90 = 'PNS';
	$_var_91 = $_var_89 . $_var_90;
	$_var_92 = md5($_var_91);
	$_var_93 = 'LEEI';
	$_var_94 = $_var_92 . $_var_93;
	$_var_95 = md5($_var_94);
	return strtoupper($_var_83 . $_var_86 . $_var_89 . $_var_92 . $_var_95);
}
function authorization_core_code($_var_96)
{
	$_var_97 = $_SERVER['SERVER_NAME'];
	$_var_98 = md5($_var_97);
	$_var_99 = base64_encode($_var_97);
	$_var_100 = $_SERVER['SERVER_ADDR'];
	$_var_101 = md5($_var_100);
	$_var_102 = base64_encode($_var_100);
	$_var_103 = $_var_96;
	$_var_104 = md5($_var_103);
	$_var_105 = base64_encode($_var_103);
	$_var_106 = advert('47');
	$_var_107 = md5($_var_106);
	$_var_108 = base64_encode($_var_106);
	$_var_109 = '910728GrassYouCode';
	$_var_110 = md5($_var_109);
	$_var_111 = base64_encode($_var_109);
	$_var_112 = $_var_98 . $_var_104 . $_var_107 . $_var_110;
	$_var_113 = base64_encode($_var_112);
	$_var_114 = $_var_112 . $_var_113;
	$_var_115 = md5($_var_114);
	$_var_116 = $_var_115 . md5($_var_111);
	$_var_117 = strtoupper($_var_116 . $_var_105);
	return $_var_117;
}
function authorization_core_checking($_var_118)
{
	$_var_119 = '910829';
	$_var_120 = authorization_core_code($_var_118) . $_var_119;
	$_var_121 = md5($_var_120);
	$_var_122 = '150714';
	$_var_123 = $_var_121 . $_var_122;
	$_var_124 = md5($_var_123);
	$_var_125 = '891107';
	$_var_126 = $_var_124 . $_var_125;
	$_var_127 = md5($_var_126);
	$_var_128 = 'PNS';
	$_var_129 = $_var_127 . $_var_128;
	$_var_130 = md5($_var_129);
	$_var_131 = 'LEEI';
	$_var_132 = $_var_130 . $_var_131;
	$_var_133 = md5($_var_132);
	return strtoupper($_var_121 . $_var_124 . $_var_127 . $_var_130 . $_var_133);
}
function rand_sign()
{
	if (advert('2') < 1) {
		$_var_134 = '1';
	} else {
		$_var_134 = advert('2');
	}
	if (advert('3') < 1) {
		$_var_135 = '5';
	} else {
		$_var_135 = advert('3');
	}
	$_var_136 = rand($_var_134, $_var_135);
	return $_var_136;
}
function AgentCdkeyQuery($_var_137, $_var_138)
{
	$_var_139['uid'] = $_var_137;
	$_var_139['y'] = '0';
	$_var_139['type'] = $_var_138;
	$_var_140 = db('cdkey')->where($_var_139)->count();
	return $_var_140;
}
function juhecurl($_var_141, $_var_142 = false, $_var_143 = 0)
{
	$_var_144 = array();
	$_var_145 = curl_init();
	curl_setopt($_var_145, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	curl_setopt($_var_145, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22');
	curl_setopt($_var_145, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($_var_145, CURLOPT_TIMEOUT, 30);
	curl_setopt($_var_145, CURLOPT_RETURNTRANSFER, true);
	if ($_var_143) {
		curl_setopt($_var_145, CURLOPT_POST, true);
		curl_setopt($_var_145, CURLOPT_POSTFIELDS, $_var_142);
		curl_setopt($_var_145, CURLOPT_URL, $_var_141);
	} else {
		if ($_var_142) {
			curl_setopt($_var_145, CURLOPT_URL, $_var_141 . '?' . $_var_142);
		} else {
			curl_setopt($_var_145, CURLOPT_URL, $_var_141);
		}
	}
	$_var_146 = curl_exec($_var_145);
	if ($_var_146 === false) {
		return false;
	}
	$_var_147 = curl_getinfo($_var_145, CURLINFO_HTTP_CODE);
	$_var_144 = array_merge($_var_144, curl_getinfo($_var_145));
	curl_close($_var_145);
	return $_var_146;
}
function Ryan_logo()
{
	$_var_148 = db('advert')->where('id', 114)->value('content');
	if (empty($_var_148)) {
		$_var_149 = 'data:image/png;base64,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';
	} else {
		$_var_149 = $_var_148;
	}
	return $_var_149;
}
function gui($_var_150)
{
	$_var_151 = db('user')->where('id', $_var_150)->value('username');
	return $_var_151;
}
function gui_nickname($_var_152)
{
	$_var_153 = db('user')->where('id', $_var_152)->value('nick_name');
	if ($_var_153 == '') {
	} else {
		return ' || ' . $_var_153;
	}
}
function user_money()
{
	$_var_154 = session('user');
	$_var_155 = session('power');
	$_var_156['id'] = $_var_154;
	$_var_157 = db('user')->where($_var_156)->value('money');
	return $_var_157;
}
function share()
{
	$_var_158 = session('user');
	$_var_159 = session('power');
	if ($_var_159 == '1') {
		$_var_160['id'] = $_var_158;
	} else {
		$_var_160 = '';
		return '';
	}
	$_var_161 = db('user')->where($_var_160)->value('share_ma');
	return '分享码:' . $_var_161;
}
function safety_threshold()
{
	if (advert('68') < '30') {
		$_var_162 = '30';
	} else {
		if (advert('68') > '43200') {
			$_var_162 = '43200';
		} else {
			$_var_162 = advert('68');
		}
	}
	return floor($_var_162);
}
function debug_model()
{
	if (advert('309') == '1') {
		$_var_163 = true;
	} else {
		$_var_163 = false;
	}
	return $_var_163;
}
function Redis_Write($_var_164, $_var_165)
{
	$_var_166 = new Cache();
	$_var_166->set($_var_164, $_var_165);
}
function Redis_Check($_var_167, $_var_168)
{
	$_var_169 = new Cache();
	$_var_170 = $_var_169->get($_var_167);
	if ($_var_168 == $_var_170) {
		$_var_171 = 0;
	} else {
		$_var_171 = 1;
	}
	return $_var_171;
}
function ApiSafetyVerification($_var_172, $_var_173, $_var_174)
{
	$_var_175 = SecurityVerificationKey($_var_173, $_var_172);
	$_var_176 = TimeValidation($_var_172);
	if (debug_model() == true && $_var_174 == strtotime(date('Y-m-d'), time())) {
		$_var_177 = 1;
	} else {
		if ($_var_175 == $_var_174 && $_var_176 < safety_threshold()) {
			if (advert('91') == 1) {
				$_var_178 = Redis_Check($_var_173, $_var_174);
				if ($_var_178 == 1) {
					$_var_177 = 1;
				} else {
					$_var_177 = 9;
				}
			} else {
				$_var_177 = 1;
			}
		} else {
			$_var_177 = 0;
		}
	}
	return $_var_177;
}
function alipay_confing()
{
	$_var_179['sign_type'] = 'RSA2';
	$_var_179['alipay_public_key'] = advert('1401');
	$_var_179['merchant_private_key'] = advert('1402');
	$_var_179['charset'] = 'UTF-8';
	$_var_179['gatewayUrl'] = 'https://openapi.alipay.com/gateway.do';
	$_var_179['app_id'] = advert('1400');
	$_var_179['notify_url'] = 'https://ysii.Cc';
	$_var_179['MaxQueryRetry'] = '10';
	$_var_179['QueryDuration'] = '3';
	$_var_179['return_url'] = '';
	$_var_179['log_file'] = '';
	return $_var_179;
}
function Ryan_rebate($_var_180 = '', $_var_181 = '')
{
	$_var_182 = '';
	$_var_183 = db('user')->where('id', $_var_180)->field('parentid')->find();
	if ($_var_183['parentid'] == 1) {
		$_var_182 = 0;
		return $_var_182;
	}
	$_var_184 = db('user')->where('id', $_var_183['parentid'])->value('money');
	$_var_185 = db('user')->where('id', $_var_183['parentid'])->field('parentid')->find();
	$_var_186 = db('user')->where('id', $_var_185['parentid'])->value('money');
	$_var_187 = db('user')->where('id', $_var_185['parentid'])->field('parentid')->find();
	$_var_188 = db('user')->where('id', $_var_187['parentid'])->value('money');
	$_var_189 = db('rebate_set')->find();
	if ($_var_185['parentid'] == 1) {
		Db::startTrans();
		try {
			if ($_var_183) {
				$_var_190 = $_var_189['agent_rebate_a'] / 100;
				$_var_191 = '代理升级 一级奖励';
				db('user')->where('id', $_var_183['parentid'])->update(['money' => $_var_184 + $_var_181 * $_var_190]);
				db('rebate')->data(['get_id' => $_var_183['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
			}
			Db::commit();
			$_var_182 = 1;
			return $_var_182;
		} catch (\Exception $_var_192) {
			Db::rollback();
			$_var_182 = 0;
			return $_var_182;
		}
	} else {
		if ($_var_187['parentid'] == 1) {
			Db::startTrans();
			try {
				if ($_var_183) {
					$_var_190 = $_var_189['agent_rebate_a'] / 100;
					$_var_191 = '代理升级 一级奖励';
					db('user')->where('id', $_var_183['parentid'])->update(['money' => $_var_184 + $_var_181 * $_var_190]);
					db('rebate')->data(['get_id' => $_var_183['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
				}
				if ($_var_185) {
					$_var_190 = $_var_189['agent_rebate_b'] / 100;
					$_var_191 = '代理升级 二级奖励';
					db('user')->where('id', $_var_185['parentid'])->update(['money' => $_var_186 + $_var_181 * $_var_190]);
					db('rebate')->data(['get_id' => $_var_185['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
				}
				Db::commit();
				$_var_182 = 1;
				return $_var_182;
			} catch (\Exception $_var_192) {
				Db::rollback();
				$_var_182 = 0;
				return $_var_182;
			}
		} else {
			Db::startTrans();
			try {
				if ($_var_183) {
					$_var_190 = $_var_189['agent_rebate_a'] / 100;
					$_var_191 = '代理升级 一级奖励';
					db('user')->where('id', $_var_183['parentid'])->update(['money' => $_var_184 + $_var_181 * $_var_190]);
					db('rebate')->data(['get_id' => $_var_183['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
				}
				if ($_var_185) {
					$_var_190 = $_var_189['agent_rebate_b'] / 100;
					$_var_191 = '代理升级 二级奖励';
					db('user')->where('id', $_var_185['parentid'])->update(['money' => $_var_186 + $_var_181 * $_var_190]);
					db('rebate')->data(['get_id' => $_var_185['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
				}
				if ($_var_187) {
					$_var_190 = $_var_189['agent_rebate_c'] / 100;
					$_var_191 = '代理升级 三级奖励';
					db('user')->where('id', $_var_187['parentid'])->update(['money' => $_var_188 + $_var_181 * $_var_190]);
					db('rebate')->data(['get_id' => $_var_187['parentid'], 'give_id' => $_var_180, 'money' => $_var_181 * $_var_190, 'info' => $_var_191, 'time' => time()])->insert();
				}
				Db::commit();
				$_var_182 = 1;
				return $_var_182;
			} catch (\Exception $_var_192) {
				Db::rollback();
				$_var_182 = 0;
				return $_var_182;
			}
		}
	}
}
function sendEmail($_var_193, $_var_194, $_var_195, $_var_196, $_var_197, $_var_198, $_var_199)
{
	foreach ($_var_193 as $_var_200) {
		$_var_201[] = $_var_200['cdkey'];
	}
	$_var_202 = implode('</hr>', $_var_201);
	$_var_203 = date('Y-m-d H:i:s', $_var_198);
	$_var_204 = '你好：<b>' . $_var_195 . '</b><br>
            		 数量：<b>' . $_var_196 . '</b>(' . $_var_199 . ')<br>
            		 类型：<b>' . $_var_197 . '</b><br>
            		 批次：<b>No.' . $_var_198 . '</b><br>
            		 生成时间：<b>' . $_var_203 . '</b><br>
                     <br><br></hr>' . $_var_202 . '</hr><br><br>';
	$_var_205 = new PHPMailer();
	$_var_205->isSMTP();
	$_var_205->CharSet = 'utf8';
	$_var_205->Host = advert('370');
	$_var_205->SMTPAuth = true;
	$_var_205->Username = advert('372');
	$_var_205->Password = advert('373');
	$_var_205->SMTPSecure = 'ssl';
	$_var_205->Port = advert('371');
	$_var_205->setFrom(advert('372'), advert('374'));
	$_var_205->addAddress($_var_194, '回复消息');
	$_var_205->addReplyTo(advert('372'), 'Reply');
	$_var_205->IsHTML(true);
	$_var_205->Subject = '激活码导出 批次：' . $_var_198 . ' - ' . $_var_199;
	$_var_205->Body = $_var_204;
	$_var_205->AltBody = '您的邮箱可能不支持当前操作';
	if (!$_var_205->send()) {
		return $_var_205->ErrorInfo;
	} else {
		return 1;
	}
}