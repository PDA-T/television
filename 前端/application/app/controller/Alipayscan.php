<?php


namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Db;
use phpqrcode\QRcode;
use alipay\alipay;
use app\app\controller\Plugin;
class Alipayscan extends Plugin
{
	public function aaa()
	{
		$_var_0 = $this->GetPaymentName('1010');
		return $_var_0;
	}
	public function GetPaymentPrice($_var_1)
	{
		$_var_2['uid'] = '1';
		$_var_2['type'] = $_var_1;
		$_var_3 = db('cdkey_type')->where($_var_2)->find();
		if (!$_var_3) {
			$_var_4 = '';
		} else {
			$_var_4 = $_var_3['cost_price'];
		}
		return $_var_4;
	}
	public function GetPaymentName($_var_5)
	{
		if ($_var_5 == '1010' && !empty(advert('1411'))) {
			$_var_6 = advert('1411');
		} else {
			$_var_7['uid'] = '1';
			$_var_7['type'] = $_var_5;
			$_var_8 = db('cdkey_type')->where($_var_7)->find();
			if (!$_var_8) {
				$_var_6 = '';
			} else {
				$_var_6 = $_var_8['name'];
			}
		}
		return $_var_6;
	}
	public function NewOrder()
	{
		$_var_9 = input('key');
		$_var_10 = input('uid');
		$_var_11 = input('time');
		$_var_12 = time();
		$_var_13 = SecurityVerificationKey($_var_10, $_var_11);
		$_var_14 = TimeValidation($_var_11);
		if ($_var_13 == $_var_9 && $_var_14 < safety_threshold() || debug_model() == true && $_var_9 == strtotime(date('Y-m-d'), time())) {
			$_var_15 = db('user')->where('id', $_var_10)->find();
			if ($_var_15) {
				$_var_16 = input('type');
				$_var_17 = $this->GetPaymentName($_var_16);
				$_var_18 = $this->GetPaymentPrice($_var_16);
				$_var_19 = OrderNumber('5');
				$_var_20 = ['notify_url' => 'http://app.qukan.im/app/alipayscan/notify_url', 'return_url' => '', 'out_trade_no' => $_var_19, 'subject' => $_var_17 . '-' . $_var_15['username'], 'total_fee' => $_var_18, 'body' => $_var_10];
				import('alipay.alipay', EXTEND_PATH, '.php');
				$_var_21 = new Alipay();
				$_var_22 = $_var_21->qrpay($_var_20);
				if (!$_var_22['code']) {
					return json(['status' => '0', 'data' => '支付请求异常!']);
				}
				$_var_23['uid'] = $_var_10;
				$_var_23['type'] = $_var_16;
				$_var_23['username'] = $_var_15['username'];
				$_var_23['total_amount'] = $_var_18;
				$_var_23['receipt_amount'] = '';
				$_var_23['out_trade_no'] = $_var_19;
				$_var_23['trade_no'] = '';
				$_var_23['buyer_logon_id'] = '';
				$_var_23['subject'] = $_var_17;
				$_var_23['gmt_create'] = date('Y-m-d H:i:s');
				$_var_23['gmt_payment'] = '';
				$_var_23['trade_status'] = 'WAIT_BUYER_PAY';
				db('order')->insert($_var_23);
				$_var_24 = $_var_22['msg'];
				$_var_25 = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/app/alipayscan/QR?data=' . $_var_24;
				return json(['status' => '1', 'alipay_url' => $_var_24, 'alipay_url_qr' => $_var_25, 'out_trade_no' => $_var_19]);
			} else {
				return json(['status' => '404', 'data' => '非法请求 - 用户不存在']);
			}
		} else {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
	}
	public function QR()
	{
		import('phpqrcode.phpqrcode', EXTEND_PATH, '.php');
		$_var_26 = $_GET['data'];
		QRcode::png($_var_26);
	}
	public function notify_url()
	{
if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
    $_var_30 = db('order')->where('out_trade_no', $_POST['out_trade_no'])->find();
    if ($_var_30 && $_var_30['trade_status'] == 'WAIT_BUYER_PAY' && $_var_30['total_amount'] == $_POST['receipt_amount']) {
     $_var_31['receipt_amount'] = $_POST['receipt_amount'];
     $_var_31['trade_no'] = $_POST['trade_no'];
     $_var_31['buyer_logon_id'] = $_POST['buyer_logon_id'];
     $_var_31['gmt_payment'] = $_POST['gmt_payment'];
     $_var_31['trade_status'] = $_POST['trade_status'];
     $_var_32['out_trade_no'] = $_POST['out_trade_no'];
     db('order')->where($_var_32)->update($_var_31);
     if ($_var_30['type'] == 1010) {
      db('user')->where('id', $_var_30['uid'])->update(['power' => '1']);
      db('user')->where('id', $_var_30['uid'])->update(['money' => advert('20')]);
      db('agent_up_log')->insert(['uid' => $_var_30['uid'], 'provider' => 'Alipay', 'cdkey' => $_var_30['out_trade_no'], 'time' => time()]);
      Ryan_rebate($_var_33, $_POST['receipt_amount'], 1);
     }
    }
    echo 'success';
   }else{
       echo 'fail';
   }
	}
	public function CheckOrder()
	{
		$_var_34 = input('key');
		$_var_35 = input('uid');
		$_var_36 = input('time');
		$_var_37 = time();
		$_var_38 = SecurityVerificationKey($_var_35, $_var_36);
		$_var_39 = TimeValidation($_var_36);
		if ($_var_38 == $_var_34 && $_var_39 < safety_threshold() || debug_model() == true && $_var_34 == strtotime(date('Y-m-d'), time())) {
			$_var_40 = input('out_trade_no');
			$_var_41['out_trade_no'] = $_var_40;
			$_var_41['uid'] = $_var_35;
			$_var_42 = db('order')->where($_var_41)->find();
			if ($_var_42) {
				if ($_var_42['trade_status'] == 'WAIT_BUYER_PAY') {
					return json(['status' => '2', 'data' => '等待支付', 'out_trade_no' => $_var_42['out_trade_no']]);
				} else {
					if ($_var_42['trade_status'] == 'TRADE_SUCCESS') {
						return json(['status' => '1', 'data' => '已支付', 'out_trade_no' => $_var_42['out_trade_no'], 'uid' => $_var_42['uid']]);
					} else {
						return json(['status' => '3', 'data' => '状态异常 请联系管理员', 'out_trade_no' => $_var_42['out_trade_no']]);
					}
				}
			} else {
				return json(['status' => '404', 'data' => '非法请求 - 信息不存在']);
			}
		} else {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
	}
	public function payment_log()
	{
		$_var_43 = 18;
		$_var_44 = input('skip') * $_var_43;
		$_var_45 = input('key');
		$_var_46 = input('uid');
		$_var_47 = input('time');
		$_var_48 = time();
		$_var_49 = SecurityVerificationKey($_var_46, $_var_47);
		$_var_50 = TimeValidation($_var_47);
		if ($_var_49 == $_var_45 && $_var_50 < safety_threshold() || debug_model() == true && $_var_45 == strtotime(date('Y-m-d'), time())) {
			$_var_51['uid'] = $_var_46;
			$_var_52 = db('order')->order('id desc')->where($_var_51)->limit($_var_44, $_var_43)->select();
			return json(['status' => 1, 'data' => $_var_52]);
		} else {
			return json(['status' => '718', 'data' => '\\u8ba4\\u8bc1\\u5931\\u8d25\\uff01\\u6280\\u672f\\u652f\\u6301\\u0020\\u0052\\u0079\\u0061\\u006e\\u0020\\uff08\\u0020\\u4f01\\u9e45\\uff1a\\u0020\\u0031\\u0037\\u0036\\u0035\\u0033\\u0030\\u0030\\u0039\\u0020\\uff09']);
		}
	}
}