<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/www/wwwroot/a.topv.club/application/app/view/index/wap_v4.html";i:1581257904;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title><?php echo Ryan_name(); ?> - <?php echo $app_index_subtitle; ?></title>
    <link rel="stylesheet" type="text/css" href="/public/static/v4/wap/aui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static/v4/wap/swiper.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .swiper-wrapper .swiper-slide:nth-child(1){
          background: url('<?php echo $app_wap_background_one; ?>') no-repeat #1b1f2a;
            background-size: contain;
        }
        .swiper-wrapper .swiper-slide:nth-child(2){
            background: url('<?php echo $app_wap_background_two; ?>') no-repeat #1b1f2a;
            background-size: contain;
        }
        .swiper-wrapper .swiper-slide:nth-child(3){
            background: url('<?php echo $app_wap_background_three; ?>') no-repeat #1b1f2a;
            background-size: contain;
        }
        img.phone-img {
            position: absolute;
            width: 80%;
            left: 10%;
            bottom: 0;
            z-index: 1;
        }
        img.bottom-img {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }
        .wrap {
            width: 100%;
            position: absolute;
            top: 90px;
            text-align: center;
            left: 0;
            color: #fff;
        }
        .wrap .title {
            font-size: 36px;
            font-weight: 700;
        }
        .wrap .desc {
            font-size: 14px;
        }
        .top{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 1001;
            background-color: rgba(31,31,31,.46);
        }
        .aui-list {
            background: none;;
        }
        .text-white {
            color: #fff !important;
        }
        .aui-list .aui-list-item-media img {
            width: 2.5rem;
        }
      
      

#shade{
    position: fixed;
    z-index: 1002;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background:rgba(0,0,0,.75);
}
#shade img{
    position: absolute;
    right: .1rem;
    top:.1rem;
    display: block;
    width: 50%;
}

      
      
      
    </style>
</head>

<body>
  
    <script type="text/javascript">
    
  
if (!(navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
		window.location.href = "/app/index";
}

</script>
  
  
    <div id="shade" style="display: none">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAa8AAADDCAMAAAAC9G6mAAAAz1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////8zMzOZmZnr6+uMjIz19fXLy8tubm6np6ezs7PW1tbl5eVJSUl9fX1dXV3g4OCampoiIiK/v7/d3d38/PxpaWktLS3w8PDs7Oy4uLjT09Pz8/Pq6uqhoaHOzs7IyMi9vb2rq6swMDD5+fnn5+ecnJyenp6vr6/ExMSkpKTu7u7a2tpkaPIRAAAAGXRSTlMA9OG0GQiT7c1oYA4D5ZacWlVIOi7XxXokt1TU6QAAD2hJREFUeNrs2FluwzAUQ1Fakmc3g52Ji/D+t9fALVqkTYD+9RHg2cIFIeHB/tH1CtPRkz1MxcC7AabhyM0RpmBeuVlnWHxLxU/VAotuafmlPcFiO7Wkg8m4vfFBusHiKok/pAKLqpz5y9nBoho7PtGNsIjqC5+61LB46swXsoPFM2W+lKe/Vx9yWmkxrSkPD+ObEy22NH9vtKHF10z4sKMp2GHT0zT0uCsVTUNVAPjx0tEAo+eloxpxoOk4YE/TsUdH09HBlw0lLfzdkAKaEvfS4l5a3EuLe2lxLy3upcW93tmvtySnYSiKouM4p/RWSbIx1T0A5j8vQIabmFhpuw2mDVo/yXUq+dCOIudaeq9r6b2upfe6lt7rWnqva+m9rqX3upbe61p6r2vpva6l97qW3utaeq9r6b2upfe6lt7rWnb1MtOYncvjZPAnmd/4JqUAIOIwOwFQ04C/aVevQdONYZrCWKgHbODp0aI1Wgoj1k3M+17RtEAsDkd5MsMkMuI8h3qNaZRIw8gRb3nay5Cm/ZLCukCHVSpxwiPNAES6AUdpksNAMuM8B3oZ5xTuDM4ZvMVTK2Fw87SXZUFDq5dxpBZKPqlGdMXgsFi3ViYdzre/lykjZkOIqPLby+B5J+Dmaa+RGg2tXpn3pJdOBlD0+B08FWCSxvn293Ias5hkNbPDGzyTE7a+XUZSntb1NWzwEI1eJjNFNZsSR/zkyBGRZMRxxWHesafb38s7zAIpvUzxeGbt/LJccbCXckwDZhMZIDJJpUhqHKUyI2CTw+n29xo4r4dPZKG+XVZ4Yq2X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">
  </div>
  
  
  
    <div class="top">
        <div class="aui-list aui-list-noborder">
            <div class="aui-list-item">
                <div class="aui-list-item-left">
                    <div class="aui-list-item-media">
                        <img src="<?php echo $app_wap_logo; ?>" />
                    </div>
                </div>
                <div class="aui-list-item-center">
                    <div class="aui-list-item-title text-white"><?php echo Ryan_name(); ?></div>
                    <div class="aui-list-item-subtitle text-white aui-margin-t-5 aui-font-size-12">已有 <?php echo $app_wap_down_num; ?> 人下载</div>
                </div>
                <div class="aui-list-item-right"  onclick="down()">
                    <img src="/public/static/v4/wap/download.png" style="width:100px" />
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide item-1">
                <div class="wrap">
                    <div class="title"><?php echo $app_wap_title_one; ?></div>
                    <div class="desc"><?php echo $app_wap_subtitle_one; ?></div>
                </div>
                <img src="<?php echo $app_wap_phone; ?>" class="phone-img"/>
                <img src="<?php echo $app_wap_poster_one; ?>" class="bottom-img" />
            </div>
            <div class="swiper-slide">
                <div class="wrap">
                    <div class="title"><?php echo $app_wap_title_two; ?></div>
                    <div class="desc"><?php echo $app_wap_subtitle_two; ?></div>
                </div>
                <img src="<?php echo $app_wap_phone; ?>" class="phone-img"/>
                <img src="<?php echo $app_wap_poster_two; ?>" class="bottom-img" />
            </div>
            <div class="swiper-slide">
                <div class="wrap">
                    <div class="title"><?php echo $app_wap_title_three; ?></div>
                    <div class="desc"><?php echo $app_wap_subtitle_three; ?></div>
                </div>
                <img src="<?php echo $app_wap_phone; ?>" class="phone-img"/>
                <img src="<?php echo $app_wap_poster_three; ?>" class="bottom-img" />
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</body>
<script type="text/javascript" src="/public/static/v4/wap/swiper.min.js"></script>
<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        autoplay:true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            
        },
    });
  
  
  
    function down(){
      
 if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) { //判断iPhone|iPad|iPod|iOS
 // alert(navigator.userAgent); 
  //           var iosShade = document.getElementById('iosShade')
//            iosShade.style.display = 'block'
   
  window.location.href ="<?php echo $app_ios_down; ?>";
} else if (/(Android)/i.test(navigator.userAgent)) {  //判断Android
// alert(navigator.userAgent); 
  window.location.href ="<?php echo $app_android_down; ?>";
} else { //pc
  window.location.href ="<?php echo $app_android_down; ?>";
};

  }  
  
  
  
  
    window.onload = function(){
        if(isWeiXin()){
            var shade = document.getElementById('shade')
            shade.style.display = 'block'
        }
    }
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }  
  
  
  
</script>

</html>