<?php 
namespace app\app\controller; 
use think\Db;
use mail\PHPMailer;
use mail\SMTP;
use think\Controller; 
class Plugin extends Controller 
{
//   完美网服  旺旺 RAVEN_718   微信 gox718

  

// 发送邮件函数 - 激活码		
public function sendEmail($content, $toemail, $username, $number, $name, $ctime , $type){
//    echo $desc_content;
//    echo $toemail;
 //   echo count($content);
 //   dump($content);    


foreach ($content as $value) {
  
  				$data[] = $value['cdkey'];
}


  $result=implode("</hr>",$data);
//  dump($result);  
 //echo $data;
 // return;
    

  	$time_s = date("Y-m-d H:i:s",$ctime);

            $body = '你好：<b>'.$username.'</b><br>
            		 数量：<b>'.$number.'</b>('.$type.')<br>
            		 类型：<b>'.$name.'</b><br>
            		 批次：<b>No.'.$ctime.'</b><br>
            		 生成时间：<b>'.$time_s.'</b><br>
                     <br><br></hr>'.$result.'</hr><br><br>';       
  		
         
          
        $mail = new PHPMailer();
        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = advert('370');// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = advert('372');// 发送方的163邮箱用户名，就是你申请163的SMTP服务使用的163邮箱</span><span style="color:#333333;">
        $mail->Password = advert('373');// 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！</span><span style="color:#333333;">
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式
        $mail->Port = advert('371');// 163邮箱的ssl协议方式端口号是465/994
        $mail->setFrom(advert('372'),advert('374'));// 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示
        $mail->addAddress($toemail,'回复消息');// 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@163.com)
        $mail->addReplyTo(advert('372'),"Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
		$mail->IsHTML(true); //支持html格式内容 
        //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
        //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
        //$mail->addAttachment("bug0.jpg");// 添加附件
        $mail->Subject = "激活码导出 批次：".$ctime.' - '.$type;// 邮件标题
     // $mail->Body = "以下是博客博主回复你的内容:".$content." 点击可以查看文章地址:".$desc_url;	// 邮件正文
 	//	$mail->msgHTML($content);
		$mail->Body = $body; //邮件主体内容 
        $mail->AltBody = "您的邮箱可能不支持当前操作";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
      
        if(!$mail->send()){// 发送邮件
       //    echo 22;
            return $mail->ErrorInfo;
        // echo "Message could not be sent.";
        // echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
        }else{
            return 1;
        }
}
  

  
  
  
  
 
}
