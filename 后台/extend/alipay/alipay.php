<?php
namespace alipay;
use think\Validate;
use think\Log;
/**
 * 支付宝扫码支付
 */
class Alipay
{
    public function qrpay($data = [])
    {
        $validate = new Validate([
            ['out_trade_no','require','订单编号输入错误'],
            ['total_fee','require','金额输入错误'],
            ['subject','require','请输入标题'],
            ['body','require','请输入描述'],
            ['notify_url','require','异步通知地址不为空'],
        ]);
        if (!$validate->check($data)) {
            return ['code'=>0,'msg'=>$validate->getError()];
        }


        $timeExpress = "5m";//超时时间
        import('alipay.f2fpay.model.builder.AlipayTradePrecreateContentBuilder', EXTEND_PATH);
        import('alipay.f2fpay.service.AlipayTradeService', EXTEND_PATH);
        // 创建请求builder，设置请求参数
        $qrPayRequestBuilder = new \AlipayTradePrecreateContentBuilder();
        $qrPayRequestBuilder->setOutTradeNo($data['out_trade_no']);
        $qrPayRequestBuilder->setTotalAmount($data['total_fee']);
        $qrPayRequestBuilder->setTimeExpress($timeExpress);
        $qrPayRequestBuilder->setSubject($data['subject']);
        $qrPayRequestBuilder->setBody($data['body']);
        // 调用qrPay方法获取当面付应答
      //  $config = config('alipay');
        $config=alipay_confing();
        if (!empty($data['notify_url'])) {
            $config['notify_url'] = $data['notify_url'];
        }
        $qrPay = new \AlipayTradeService($config);
        $qrPayResult = $qrPay->qrPay($qrPayRequestBuilder);

        //  根据状态值进行业务处理
        switch ($qrPayResult->getTradeStatus()){
            case "SUCCESS":
            //     echo "支付宝创建订单二维码成功:"."<br>---------------------------------------<br>";

                $response = $qrPayResult->getResponse();
//                return ['code'=>1,'msg'=>$qrPay->create_erweima($response->qr_code)];
                return ['code'=>1,'msg'=>$response->qr_code];
                break;
            case "FAILED":
                // echo "支付宝创建订单二维码失败!!!"."<br>--------------------------<br>";

                return ['code'=>0,'msg'=>'支付宝创建订单二维码失败!!!'];
                break;
            case "UNKNOWN":
                // echo "系统异常，状态未知!!!"."<br>--------------------------<br>";

                return ['code'=>0,'msg'=>'系统异常，状态未知!!!'];
                break;
            default:

                return ['code'=>0,'msg'=>'不支持的返回状态，创建订单二维码返回异常!!!'];
                break;
        }
        return ;
    }

}

