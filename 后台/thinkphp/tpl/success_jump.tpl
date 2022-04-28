{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta charset="utf-8">
<title>操作成功</title>

<script type="text/javascript" src="js/jquery.min.js"></script>

<style>
html, body {
  background: #28254C;
  font-family: 'Ubuntu';
}

* {
  box-sizing: border-box;
}

.box {
  width: 80%;
  height: 50%;
  background: #332F63;
  border-radius: 20px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  padding: 30px 50px;
}
.box .box__ghost {
  padding: 15px 25px 25px;
  position: absolute;
  left: 50%;
  top: 30%;
  transform: translate(-50%, -30%);
}
.box .box__ghost .symbol:nth-child(1) {
  opacity: .2;
  animation: shine 4s ease-in-out 3s infinite;
}
.box .box__ghost .symbol:nth-child(1):before, .box .box__ghost .symbol:nth-child(1):after {
  content: '';
  width: 12px;
  height: 4px;
  background: #fff;
  position: absolute;
  border-radius: 5px;
  bottom: 65px;
  left: 0;
}
.box .box__ghost .symbol:nth-child(1):before {
  transform: rotate(45deg);
}
.box .box__ghost .symbol:nth-child(1):after {
  transform: rotate(-45deg);
}
.box .box__ghost .symbol:nth-child(2) {
  position: absolute;
  left: -5px;
  top: 30px;
  height: 18px;
  width: 18px;
  border: 4px solid;
  border-radius: 50%;
  border-color: #fff;
  opacity: .2;
  animation: shine 4s ease-in-out 1.3s infinite;
}
.box .box__ghost .symbol:nth-child(3) {
  opacity: .2;
  animation: shine 3s ease-in-out .5s infinite;
}
.box .box__ghost .symbol:nth-child(3):before, .box .box__ghost .symbol:nth-child(3):after {
  content: '';
  width: 12px;
  height: 4px;
  background: #fff;
  position: absolute;
  border-radius: 5px;
  top: 5px;
  left: 40px;
}
.box .box__ghost .symbol:nth-child(3):before {
  transform: rotate(90deg);
}
.box .box__ghost .symbol:nth-child(3):after {
  transform: rotate(180deg);
}
.box .box__ghost .symbol:nth-child(4) {
  opacity: .2;
  animation: shine 6s ease-in-out 1.6s infinite;
}
.box .box__ghost .symbol:nth-child(4):before, .box .box__ghost .symbol:nth-child(4):after {
  content: '';
  width: 15px;
  height: 4px;
  background: #fff;
  position: absolute;
  border-radius: 5px;
  top: 10px;
  right: 30px;
}
.box .box__ghost .symbol:nth-child(4):before {
  transform: rotate(45deg);
}
.box .box__ghost .symbol:nth-child(4):after {
  transform: rotate(-45deg);
}
.box .box__ghost .symbol:nth-child(5) {
  position: absolute;
  right: 5px;
  top: 40px;
  height: 12px;
  width: 12px;
  border: 3px solid;
  border-radius: 50%;
  border-color: #fff;
  opacity: .2;
  animation: shine 1.7s ease-in-out 7s infinite;
}
.box .box__ghost .symbol:nth-child(6) {
  opacity: .2;
  animation: shine 2s ease-in-out 6s infinite;
}
.box .box__ghost .symbol:nth-child(6):before, .box .box__ghost .symbol:nth-child(6):after {
  content: '';
  width: 15px;
  height: 4px;
  background: #fff;
  position: absolute;
  border-radius: 5px;
  bottom: 65px;
  right: -5px;
}
.box .box__ghost .symbol:nth-child(6):before {
  transform: rotate(90deg);
}
.box .box__ghost .symbol:nth-child(6):after {
  transform: rotate(180deg);
}

.box .box__ghost .box__ghost-shadow {
  height: 20px;
  box-shadow: 0 50px 15px 5px #3B3769;
  border-radius: 50%;
  margin: 0 auto;
  animation: smallnbig 3s ease-in-out infinite;
}
.box .box__description {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
}
.box .box__description .box__description-container {
  color: #fff;
  text-align: center;
  width: 100%;
  font-size: 16px;
  margin: 0 auto;
}
.box .box__description .box__description-container .box__description-title {
  font-size: 24px;
  letter-spacing: .5px;
}
.box .box__description .box__description-container .box__description-text {
  color: #8C8AA7;
  line-height: 20px;
  margin-top: 20px;
}
.box .box__description .box__button {
  display: block;
  position: relative;
  background: #FF5E65;
  border: 1px solid transparent;
  border-radius: 50px;
  height: 50px;
  text-align: center;
  text-decoration: none;
  color: #fff;
  line-height: 50px;
  font-size: 18px;
  padding: 0 70px;
  white-space: nowrap;
  margin-top: 25px;
  transition: background .5s ease;
  overflow: hidden;
}
.box .box__description .box__button:before {
  content: '';
  position: absolute;
  width: 20px;
  height: 100px;
  background: #fff;
  bottom: -25px;
  left: 0;
  border: 2px solid #fff;
  transform: translateX(-50px) rotate(45deg);
  transition: transform .5s ease;
}
.box .box__description .box__button:hover {
  background: transparent;
  border-color: #fff;
}
.box .box__description .box__button:hover:before {
  transform: translateX(250px) rotate(45deg);
}

@keyframes upndown {
  0% {
    transform: translateY(5px);
  }
  50% {
    transform: translateY(15px);
  }
  100% {
    transform: translateY(5px);
  }
}
@keyframes smallnbig {
  0% {
    width: 90px;
  }
  50% {
    width: 100px;
  }
  100% {
    width: 90px;
  }
}
@keyframes shine {
  0% {
    opacity: .2;
  }
  25% {
    opacity: .1;
  }
  50% {
    opacity: .2;
  }
  100% {
    opacity: .2;
  }
}
</style>
</head>
<body style="">
<div class="box">
  <div class="box__ghost">
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    
    <div class="box__ghost-container">
      
           <?php switch ($code) {?>
            <?php case 1:?>
            <svg t="1571771906934" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2638" width="50" height="50"><path d="M287.2 372.6m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#ffffff" p-id="2639"></path><path d="M736.8 372.6m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#ffffff" p-id="2640"></path><path d="M513 800.7c-68.4 0-132.7-26.6-181-75-48.4-48.4-75-112.6-75-181 0-17.7 14.3-32 32-32s32 14.3 32 32c0 105.9 86.1 192 192 192s192-86.1 192-192c0-17.7 14.3-32 32-32s32 14.3 32 32c0 68.4-26.6 132.7-75 181-48.3 48.4-112.6 75-181 75z" fill="#ffffff" p-id="2641"></path><path d="M512 1024c-69.1 0-136.2-13.5-199.3-40.2C251.7 958 197 921 150 874c-47-47-84-101.7-109.8-162.7C13.5 648.2 0 581.1 0 512s13.5-136.2 40.2-199.3C66 251.7 103 197 150 150c47-47 101.7-84 162.7-109.8C375.8 13.5 442.9 0 512 0c151.1 0 293.7 66.3 391.3 181.8 11.4 13.5 9.7 33.7-3.8 45.1-13.5 11.4-33.7 9.7-45.1-3.8C769 122 644.2 64 512 64 265 64 64 265 64 512s201 448 448 448 448-201 448-448c0-28.9-2.8-57.8-8.2-85.9-3.4-17.3 8-34.1 25.3-37.5 17.3-3.4 34.1 8 37.5 25.3 6.2 32.1 9.4 65.1 9.4 98.1 0 69.1-13.5 136.2-40.2 199.3C958 772.3 921 827 874 874c-47 47-101.8 83.9-162.7 109.7-63.1 26.8-130.2 40.3-199.3 40.3z" fill="#ffffff" p-id="2642"></path></svg>
            <?php break;?>
      
            <?php case 0:?>
			<svg t="1571771241100" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1789" width="50" height="50"><path d="M845.8752 116.43904 178.1248 116.43904c-34.22208 0-62.06464 27.83232-62.06464 62.04416l0 667.0336c0 34.21184 27.84256 62.0544 62.06464 62.0544l667.76064 0c34.22208 0 62.06464-27.84256 62.06464-62.0544L907.95008 178.4832C907.93984 144.26112 880.09728 116.43904 845.8752 116.43904zM803.81952 187.06432c14.68416 0 26.58304 11.90912 26.58304 26.59328 0 14.6944-11.89888 26.59328-26.58304 26.59328-14.70464 0-26.60352-11.90912-26.60352-26.59328C777.216 198.97344 789.12512 187.06432 803.81952 187.06432zM708.51584 187.06432c14.70464 0 26.60352 11.90912 26.60352 26.59328 0 14.6944-11.89888 26.59328-26.60352 26.59328-14.68416 0-26.58304-11.90912-26.58304-26.59328C681.94304 198.97344 693.84192 187.06432 708.51584 187.06432zM837.0176 836.64896 186.9824 836.64896 186.9824 306.26816l650.0352 0L837.0176 836.64896zM297.8816 759.31648l428.19584 0c0.01024 0 0.03072 0 0.03072 0 7.168 0 12.97408-5.79584 12.97408-12.9536 0-2.73408-0.84992-5.2736-2.29376-7.36256L523.20256 369.05984c-2.31424-4.01408-6.59456-6.48192-11.22304-6.48192s-8.9088 2.46784-11.22304 6.48192L286.65856 739.87072c-2.31424 4.01408-2.31424 8.94976 0 12.96384C288.98304 756.84864 293.25312 759.31648 297.8816 759.31648zM536.65792 710.72768c0 4.90496-3.98336 8.88832-8.87808 8.88832L496.2304 719.616c-4.90496 0-8.87808-3.98336-8.87808-8.88832l0-31.31392c0-4.90496 3.98336-8.88832 8.87808-8.88832l31.54944 0c4.90496 0 8.87808 3.98336 8.87808 8.88832L536.65792 710.72768zM491.78624 462.55104l40.42752 0c4.90496 0 8.88832 3.98336 8.88832 8.88832l-4.4544 170.0352c0 4.90496-3.98336 8.88832-8.87808 8.88832L496.2304 650.36288c-4.90496 0-8.87808-3.97312-8.87808-8.88832L482.89792 471.4496C482.89792 466.5344 486.88128 462.55104 491.78624 462.55104z" p-id="1790" fill="#ffffff"></path></svg>
            <?php break;?>

        <?php } ?>   

      
      <div class="box__ghost-bottom">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="box__ghost-shadow"></div>
  </div>
  
  <div class="box__description">
    <div class="box__description-container">
      
      <div class="box__description-title"><?php echo(strip_tags($msg));?></div>
      
      <?php	if(strpos(strip_tags($url),'dark_room') !==false){ ?>
      
  			<div class="box__description-text"> 您的行为存在高危风险  </div>
        
      <?php }else{  ?>
          
          	<div class="box__description-text"><b id="wait"><?php echo($wait);?></b> 后自动跳转 </div>
        

      
      
      <?php } ?>
      
      

      
      
      
    </div>
    
    
    
     <?php	if(strip_tags($url) == '/index/index/dark_room.html'){  ?>
      
  			<a  href="https://baike.baidu.com/item/破坏计算机信息系统罪/10459409" class="box__button">学习</a>
        
      <?php }else{  ?>
          
          	<a  id="href" href="<?php echo($url);?>" class="box__button"><?php if($code == '1'){ echo '跳转'; }else{ echo '返回'; } ?></a>
        
      <?php } ?>
    
    
    
  </div>
  
</div>


      
      <script>
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
</script>
      


</body></html>
