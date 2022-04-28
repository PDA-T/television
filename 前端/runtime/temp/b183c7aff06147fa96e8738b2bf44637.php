<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/www/wwwroot/a.topv.club/application/index/view/index/index_v4.html";i:1587876610;s:59:"/www/wwwroot/a.topv.club/application/index/view/layout.html";i:1588953790;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo Ryan_name(); ?>   - 管理后台</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">

    <link href="/public/static/v4/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/public/static/v4/css/main.css?version=4.4.0" rel="stylesheet">
    <link href="/public/static/v4/css/switch.css" rel="stylesheet">
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
          <div class="element-search">
            <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
              <div class="close-search-suggestions">
                <i class="os-icon os-icon-x"></i>
              </div>
           
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-box"></div>
              </div>
              <div class="ssg-name">
                Projects
              </div>
              <div class="ssg-info">
                24 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-boxed">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(/public/static/v4/img/company6.png)"></div>
                  <div class="item-name">
                    Integ<span>ration</span> with API
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(/public/static/v4/img/company7.png)"></div>
                  <div class="item-name">
                    Deve<span>lopm</span>ent Project
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-users"></div>
              </div>
              <div class="ssg-name">
                Customers
              </div>
              <div class="ssg-info">
                12 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-list">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(/public/static/v4/img/Ryan.png)"></div>
                  <div class="item-name">
                    John Ma<span>yer</span>s
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(/public/static/v4/img/avatar2.jpg)"></div>
                  <div class="item-name">
                    Th<span>omas</span> Mullier
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(/public/static/v4/img/avatar3.jpg)"></div>
                  <div class="item-name">
                    Kim C<span>olli</span>ns
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-folder"></div>
              </div>
              <div class="ssg-name">
                Files
              </div>
              <div class="ssg-info">
                17 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-blocks">
                <a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-file-text"></i>
                  </div>
                  <div class="item-name">
                    Work<span>Not</span>e.txt
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-film"></i>
                  </div>
                  <div class="item-name">
                    V<span>ideo</span>.avi
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-database"></i>
                  </div>
                  <div class="item-name">
                    User<span>Tabl</span>e.sql
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-image"></i>
                  </div>
                  <div class="item-name">
                    wed<span>din</span>g.jpg
                  </div>
                </a>
              </div>
              <div class="ssg-nothing-found">
                <div class="icon-w">
                  <i class="os-icon os-icon-eye-off"></i>
                </div>
                <span>No files were found. Try changing your query...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-w" style=" display: flex; min-height: 100vh;">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            
            <a class="mm-logo"><img src="/public/static/v4/img/RyanLogo.png"><span><?php echo Ryan_name(); ?>  </span></a>
            <div class="mm-buttons">

              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="/public/static/v4/img/Ryan.png">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                 <?php echo name(); ?>
                </div>
                <div class="logged-user-role">
                  <?php echo power(); ?>
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>设置</span></a>
                <ul class="sub-menu">
                  <li>
                   <a href="<?php echo url('index/basic_information'); ?>">基础信息</a>
                  </li>
                  <li>
                 	 <a href="<?php echo url('index/advanced_functions'); ?>">高级功能 <strong class="badge badge-success">New</strong></a>
                  </li>
                  <li>
                     <a href="<?php echo url('index/cdkey'); ?>">激活码</a>
                  </li>
                  <li>
                    <a href="<?php echo url('index/smtp'); ?>">SMTP</a>
                  </li>
                  <li>
                     <a href="<?php echo url('index/rakeback'); ?>">返佣比例</a>
                  </li>
                  <li>
                    <a href="<?php echo url('index/price'); ?>">价格 / 发卡</a>
                  </li>
                  <li>
                 	 <a href="<?php echo url('index/paymentconfig'); ?>">支付接口 <strong class="badge badge-success">New</strong></a>
                  </li>
                  <li>
                     <a href="<?php echo url('index/interface'); ?>">解析接口</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-fingerprint"></div> 
                  </div>
                  <span>激活码管理</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('cdkey/index'); ?>">激活码生成<strong class="badge badge-danger">Hot</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/cdkey_log'); ?>">生成记录<strong class="badge badge-success">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/usage_log'); ?>">激活码使用日志 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/search'); ?>">激活码查询</a>
                    </li>

                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                  </div>
                  <span>用户管理</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('user/user_list'); ?>">用户列表 <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('user/agent_list'); ?>">代理列表</a>
                    </li>
                    <li>
                      <a href="<?php echo url('user/search'); ?>">用户查询</a>
                    </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-others-29"></div>
                  </div>
                  <span>影视管理</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('video/privilege'); ?>">特权影视  <strong class="badge badge-danger">Hot</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('video/hot'); ?>">热门推荐 </a>
                    </li>
    <!--                <li>
                      <a href="<?php echo url('video/tvlive'); ?>">电视直播 <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('video/speciallive'); ?>">专题直播 <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('video/hide'); ?>">私人影片 <strong class="badge badge-danger">New</strong></a>
                    </li>
-->
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-phone-21"></div>
                  </div>
                  <span>公告管理</span></a>                
                	<ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('artical/index'); ?>">公告列表</a>
                    </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-robot-2"></div>
                  </div>
                  <span>APP更新推送</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('appupgrade/android'); ?>">Android</a>
                    </li>
                    <li>
                      <a href="<?php echo url('appupgrade/ios'); ?>">IOS</a>
                    </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                  <div class="os-icon os-icon-wallet-loaded"></div>
                  </div>
                  <span>佣金管理</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('rebate/index'); ?>">提现申请</a>
                    </li>
                    <li>
                      <a href="<?php echo url('rebate/withdrawals_record'); ?>">提现记录 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('rebate/rebate_list'); ?>">返佣明细 <strong class="badge badge-danger">New</strong></a>
                    </li>

                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                  </div>
                  <span>广告管理</span></a>
                <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('advertisement/banner_index'); ?>">首页轮播</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/banner_recommend'); ?>">推荐页轮播 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/ico_recommend'); ?>">推荐页小图标</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/big_picture_recommend'); ?>">推荐页横幅</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/launch_page'); ?>">启动页<strong class="badge badge-danger">New</strong></a>
                    </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-grid"></div>
                  </div>
                  <span>广告 <strong class="badge badge-danger">审核</strong></span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo url('advertisement/check'); ?>">待审核列表</a>
                  </li>
        
                </ul>
              </li>

              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-phone-21"></div>
                  </div>
                  <span>FAQS</span></a>                
                	<ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('faqs/index'); ?>">帮助文档列表</a>
                    </li>
                </ul>
              </li>
              

              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-phone-21"></div>
                  </div>
                  <span>海报</span></a>                
                	<ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('poster/index'); ?>">邀请海报</a>
                    </li>
                </ul>
              </li>
              
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->

          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        -------------------->
        <!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-bright sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-flyout" >
          <div class="logo-w">
            <a class="logo" href="<?php echo url('index/index/index_v4'); ?>">


                  <img style="border-radius: 4px;" src="/public/static/v4/img/RyanLogo.png">
       
              
              <div class="logo-label">
                <?php echo Ryan_name(); ?>  
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="/public/static/v4/img/Ryan.png">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                 <?php echo name(); ?>
                </div>
                <div class="logged-user-role">
                 <?php echo power(); ?>
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="/public/static/v4/img/Ryan.png">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo name(); ?>
                    </div>
                    <div class="logged-user-role">
                     <?php echo power(); ?> 
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="<?php echo url('index/user/edit'); ?>?edit_id=<?php echo id(); ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>"><i class="os-icon os-icon-user-male-circle2"></i><span>编辑信息</span></a>
                  </li>
                 
                  <li>
                    <a href="<?php echo url('index/index/loginout'); ?>"><i class="os-icon os-icon-signs-11"></i><span>退出</span></a> 
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="menu-page-header">
            Page Header121111111111111
          </h1>
          <ul class="main-menu">

            <li class="sub-header">
              <span>管理</span>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-fingerprint"></div> 
                </div>
                <span>激活码</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  激活码管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-package"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('cdkey/index'); ?>">激活码生成<strong class="badge badge-danger">Hot</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/cdkey_log'); ?>">生成记录<strong class="badge badge-success">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/usage_log'); ?>">激活码使用日志 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('cdkey/search'); ?>">激活码查询</a>
                    </li>


                  </ul>
                </div>
              </div>
            </li>
            
            
             
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-wallet-loaded"></div>
                </div>
                <span>支付</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  支付管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('payment/index'); ?>">支付记录</a>
                    </li>
                    <li>
                      <a href="<?php echo url('payment/search'); ?>">订单检索 </a>
                    </li>


                    </ul>
                </div>
              </div>
            </li>
            
            
            

            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-users"></div>
                </div>
                <span>用户</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  用户管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-life-buoy"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('user/user_list'); ?>">用户列表 <strong class="badge badge-danger">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('user/agent_list'); ?>">代理列表</a>
                    </li>
                    <li>
                      <a href="<?php echo url('user/search'); ?>">用户查询</a>
                    </li>

                  </ul>
                </div>
              </div>
            </li>
            


  
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-others-29"></div> 
                </div>
                <span>影视</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  影视管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-others-29"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('video/privilege'); ?>">特权影视  <strong class="badge badge-danger">Hot</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('video/hot'); ?>">热门推荐 </a>
                    </li>

   <!--                  <li>
                      <a href="<?php echo url('video/hide'); ?>">私人影片 <strong class="badge badge-danger">New</strong></a>
                    </li>
-->
                    </ul>
                </div>
              </div>
            </li>           
            
            
   

  
            <?php if(advert('2000') ==1){ ?> 
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-92"></div> 
                </div>
                <span>直播 <strong class="badge badge-success">New</strong></span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  直播管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-others-29"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
 
                   <li>
                      <a href="<?php echo url('live/live_tv'); ?>">TV直播 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('live/live_special'); ?>">专题直播 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('live/setup_tv'); ?>">个性化 / 广告 </a>
                    </li>
                    </ul>
                </div>
              </div>
            </li>           
                     
             <?php } ?>
            
             <li class="sub-header">
              <span>设置</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>基础设置</span>
              </a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  基础设置
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('index/basic_information'); ?>">基础信息</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/advanced_functions'); ?>">高级功能 <strong class="badge badge-success">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/cdkey'); ?>">激活码</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/smtp'); ?>">SMTP</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/rakeback'); ?>">返佣比例</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/price'); ?>">价格 / 发卡</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/paymentconfig'); ?>">支付接口 <strong class="badge badge-success">New</strong></a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/interface'); ?>">解析接口</a>
                    </li>
                    <li>
                      <a href="<?php echo url('index/page_information'); ?>">站点信息</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
    
            
         
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-donut-chart-2"></div> 
                </div>
                <span>模板 <strong class="badge badge-secondary"><d>目前免费</d></strong></span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  模板选择
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-others-29"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
 
                 <!--  <li>
                      <a href="<?php echo url('skin/one'); ?>">首页 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('skin/two'); ?>">推荐页 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('skin/three'); ?>">会员中心 </a>
                    </li> -->
                    <li>
                      <a href="<?php echo url('skin/wap'); ?>">WAP下载页 </a>
                    </li>
                    </ul>
                </div>
              </div>
            </li>           
             
            
            
            
            
            <li class="sub-header">
              <span>运营</span>
            </li>
            <li class=" has-sub-menu">
              <a href="<?php echo url('artical/index'); ?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-phone-21"></div>
                </div>
                <span>公告列表</span></a>    

            </li>
            
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-robot-2"></div>
                </div>
                <span>APP更新推送</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  APP更新推送
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-mail"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('appupgrade/android'); ?>">Android</a>
                    </li>
                    <li>
                      <a href="<?php echo url('appupgrade/ios'); ?>">IOS</a>
                    </li>

                  </ul>
                </div>
              </div>
            </li>            
             
 
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-wallet-loaded"></div>
                </div>
                <span>佣金</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  佣金管理
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('rebate/index'); ?>">提现申请</a>
                    </li>
                    <li>
                      <a href="<?php echo url('rebate/withdrawals_record'); ?>">提现记录 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('rebate/rebate_list'); ?>">返佣明细 <strong class="badge badge-danger">New</strong></a>
                    </li>

                    </ul>
                </div>
              </div>
            </li>
            
             
           <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>广告列表</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  广告列表
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo url('advertisement/banner_index'); ?>">首页轮播</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/banner_recommend'); ?>">推荐页轮播 </a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/ico_recommend'); ?>">推荐页小图标</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/big_picture_recommend'); ?>">推荐页横幅</a>
                    </li>
                    <li>
                      <a href="<?php echo url('advertisement/launch_page'); ?>">启动页<strong class="badge badge-danger">New</strong></a>
                    </li>
                    </ul>
                </div>
              </div>
            </li>           
            
            
            
            <li class=" has-sub-menu">
              <a href="<?php echo url('advertisement/check'); ?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-others-43"></div>
                </div>
                <span>广告 <strong class="badge badge-danger">审核</strong></span></a>
            </li>

            <li class=" has-sub-menu">
              <a href="<?php echo url('faqs/index'); ?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-pencil-1"></div>
                </div>
                <span>FAQS</span></a>    

            </li>
                        
            <li class=" has-sub-menu">
              <a href="<?php echo url('poster/index'); ?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-documents-07"></div>
                </div>
                <span>邀请海报</span></a>    

            </li>
                        
            
            
          </ul>
          <div class="side-menu-magic">
            <h4>
              P N S
            </h4>
            <p>
              Just Start !
            </p>
            <div class="btn-w">
              <a class="btn btn-white btn-rounded" href="<?php echo url('operationlog/index'); ?>" target="_blank">v4</a>
            </div>
          </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-bright">
            <div class="fancy-selector-w">
              <div class="fancy-selector-current">
                <div class="fs-img">
                  <img alt="" src="/public/static/v4/img/card4.png">
                </div>
                <div class="fs-main-info">
                  <div class="fs-name">
                   <strong>常用菜单</strong>
                  </div>

                </div>
                <div class="fs-selector-trigger">
                  <i class="os-icon os-icon-arrow-down4"></i>
                </div>
              </div>
              <div class="fancy-selector-options">

                <div class="fancy-selector-option" onclick="javascrtpt:window.location.href='<?php echo url('index/index_v4'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card2.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                      <strong>仪表盘</strong>
                    </div>
                    <div class="fs-sub">
                    <!--  <span>Ryan:</span><strong>待处理</strong> -->
                    </div>
                  </div>
         
                </div>
                
                <div class="fancy-selector-option" onclick="javascrtpt:window.location.href='<?php echo url('user/user_list'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card5.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                      <strong>用户管理</strong>
                    </div>
                    <div class="fs-sub">
                    </div>
                  </div>
                </div>
                <div class="fancy-selector-option " onclick="javascrtpt:window.location.href='<?php echo url('cdkey/index'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card6.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                      <strong>激活码</strong>
                    </div>
                    <div class="fs-sub">
                    </div>
                  </div>
                </div>
                <div class="fancy-selector-option" onclick="javascrtpt:window.location.href='<?php echo url('index/interface'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card7.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                     <strong>解析接口</strong>
                    </div>
                    <div class="fs-sub">
                    </div>
    
                  </div>
                </div>

                <div class="fancy-selector-option" onclick="javascrtpt:window.location.href='<?php echo url('advertisement/check'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card8.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                     <strong>广告审核</strong>
                    </div>
                    <div class="fs-sub">
                    </div>
    
                  </div>
                </div>

                <div class="fancy-selector-option" onclick="javascrtpt:window.location.href='<?php echo url('rebate/index'); ?>'">
                  <div class="fs-img">
                    <img alt="" src="/public/static/v4/img/card9.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                     <strong>佣金提现</strong>
                    </div>
                    <div class="fs-sub">
                    </div>
    
                  </div>
                </div>

              </div>
            </div>



            <div class="top-menu-controls">

              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left" onclick="javascrtpt:window.location.href='<?php echo url('index/helpdocs'); ?>'">
                <i class="os-icon os-icon-mail-14"></i>
                <div class="new-messages-count">
                  Help?
                </div>

              </div>
            </div>


          </div>
          <!--------------------
          END - Top Bar
          -------------------->

  
  
  
  
          	 

<div class="row content-box">

          <?php if($maintenance_mode == 1){ ?>
                <div class="col-lg-12 col-xxl-12">
                  <!--START - maintenance_mode-->
                  <div class="alert alert-warning borderless">
                    <p>
                      当前系统处于维护模式！ 用户暂时无法进行 注册/提取激活码/使用激活码/签到 等写入/变更数据操作…… 如已确定维护完毕可以点击关闭！
                    </p>
                    <div class="alert-btn">
                      <a class="btn btn-white-gold" href="<?php echo url('index/advanced_functions'); ?>"><i class="os-icon os-icon-ui-92"></i><span>关闭维护模式</span></a>
                    </div>
                  </div>
                  <!--END - maintenance_mode-->
                </div>

  <?php  } ?>



                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="<?php echo url('user/user_list'); ?>">
                    <div class="label" style=" margin-top: 10px; ">
                      用户数量
                    </div>
                    <div class="value">
                     <?php echo $users_count; ?>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="<?php echo url('user/agent_list'); ?>">
                    <div class="label" style=" margin-top: 10px; ">
                      代理数量
                    </div>
                    <div class="value text-danger">
                     <?php echo $agent_count; ?>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      付费用户
                    </div>
                    <div class="value">
                     <?php echo $paying_users_count; ?>
                    </div>
                    <div class="trending trending-up">
                      <span>用户比例：<?php echo $paying_users_ratio; ?> %</span>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      VIP用户
                    </div>
                    <div class="value">
                     <?php echo $vip_users_count; ?>
                    </div>
                      <div class="trending trending-down">
                          <span>永久：<?php echo $permanent_vip_users_count; ?> 个</span>
                      </div>
                  </a>
                </div>
            
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      普通用户
                    </div>
                    <div class="value">
                     <?php echo $free_users_count; ?>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      今日登陆用户
                    </div>
                    <div class="value">
                     <?php echo $login_count; ?>
                    </div>
                    <div class="trending trending-up">
                      <span>用户比例：<?php echo $login_ratio; ?> %</span>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      30天活跃用户
                    </div>
                    <div class="value">
                     <?php echo $thirty_day_count; ?>
                    </div>
                    <div class="trending trending-up">
                      <span>用户比例：<?php echo $thirty_day_ratio; ?> %</span>
                    </div>
                  </a>
                </div>

                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="<?php echo url('cdkey/index'); ?>">
                    <div class="label" style=" margin-top: 10px; ">
                      激活码总数
                    </div>
                    <div class="value">
                     <?php echo $all_Activation_code; ?>
                    </div>
                    <div class="trending trending-down">
                      <span>使用率：<?php echo $cdkey_usage_ratio; ?> %</span>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="<?php echo url('cdkey/usage_log'); ?>">
                    <div class="label" style=" margin-top: 10px; ">
                      已使用
                    </div>
                    <div class="value">
                     <?php echo $yy_Activation_code; ?>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="<?php echo url('cdkey/index'); ?>">
                    <div class="label" style=" margin-top: 10px; ">
                      未使用
                    </div>
                    <div class="value">
                     <?php echo $wy_Activation_code; ?>
                    </div>
                  </a>
                </div>
            
                 <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label" style=" margin-top: 10px; ">
                      服务器空间剩余
                    </div>
                    <div class="value">
                     <?php echo $disk_free_space; ?>
                    </div>
                    <div class="trending trending-down">
                      <span>剩余：<?php echo $disk; ?> %</span>
                    </div>
                  </a>
                </div>
            
            
              </div>
          
          
          
          
          
          
          
          <div class="content-i">
            
            <div class="content-box" style=" padding-top: 0px; ">
              

                  
				<div class="row">
                    <div class="col-12 col-xxl-12">
                      <div class="element-wrapper compact pt-4">
                        <h6 class="element-header">
                          待办事项
                        </h6>
                        <div class="element-box-tp">
                          <div class="post-box">
                            <div class="post-media" style="background-image: url(/public/static/v4/img/portfolio1.jpg)"></div>
                            <div class="post-content">
                              <h6 class="post-title">
                                提现申请
                              </h6>
                              <div class="post-foot">
                                <div class="post-tags">
                                  <div class="badge badge-primary">
                                    <?php echo $cash_conut; ?>
                                  </div>
                                </div>
                                <a class="post-link" href="<?php echo url('rebate/index'); ?>"><span>立即处理</span><i class="os-icon os-icon-arrow-right7"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="post-box">
                            <div class="post-media" style="background-image: url(/public/static/v4/img/portfolio2.jpg)"></div>
                            <div class="post-content">
                              <h6 class="post-title">
                                广告审核
                              </h6>
                              <div class="post-foot">
                                <div class="post-tags">
                                  <div class="badge badge-primary">
                                    <?php echo $advertisement_audit; ?>
                                  </div>
                                </div>
                                <a class="post-link" href="<?php echo url('advertisement/check'); ?>"><span>立即处理</span><i class="os-icon os-icon-arrow-right7"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!--  <div class="col-12 d-sm-none d-xxl-block col-xxl-4">
                      <div class="cta-w orange text-center">
                        <div class="cta-content extra-padded">
                          <div class="highlight-header">
                            Bonus
                          </div>
                          <h5 class="cta-header">
                            Invite your friends and make money with referrals
                          </h5>
                          <form action="">
                            <div class="newsletter-field-w">
                              <input placeholder="Email address..." type="text"><button class="btn btn-sm btn-primary">Send</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  -->
                  </div>
                </div>

                
                
                <div class="col-sm-6 d-none d-lg-block">
                  <div class="cta-w cta-with-media purple">
                    <div class="cta-content" style="padding: 2%;">
                      <div class="highlight-header">
                        <?php echo $app_name; ?>
                      </div>
              
              

              
                      <?php if(strlen($appId)!= 12){  ?>
                        <a href="appId" ><div class="btn btn-danger btn-sm" style="float:right " > 请输入 APPID  </div></a>
                      <?php   }else{   if($authorization_tips == 0){   ?>
                          		<a href="appKey" ><div class="btn btn-success btn-sm" style="float:right ">  APPID: <?php echo $appId; ?> - 已授权</div></a>
                         <?php   }else{   ?>
                         
                                <a href="UpdateLocalData" ><div class="btn btn-secondary btn-sm "  ><svg t="1583237429828" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3242" width="10" height="10"><path d="M610.798167 58.296731L278.95634 492.243027h306.315454L278.95634 951.714673l536.051788-510.524392-331.841827-25.526373z" fill="#ffffff" p-id="3243"></path></svg></path></svg> 清理 </div></a>     
                         
                         
                          		<div class="btn btn-success btn-sm" style="float:right "><svg t="1573998848993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3179" width="10" height="10"><path d="M352.4 801.6c-16.5 0-29.5-13.4-29.5-29.5v-44.5c0-16.5 13.4-29.5 29.5-29.5 16 0 29.5 13.4 29.5 29.5v44.5c0 16.1-13 29.5-29.5 29.5z m0 0M669.9 801.6c-16.5 0-29.5-13.4-29.5-29.5v-44.5c0-16.5 13.4-29.5 29.5-29.5 16 0 29.5 13.4 29.5 29.5v44.5c-0.1 16.1-13 29.5-29.5 29.5z m0 0" fill="#ffffff" p-id="3180"></path><path d="M511.4 959.6c-60.3 0-118.8-11.8-174-35.1-53.2-22.5-101-54.7-142-95.8-41-41-73.2-88.8-95.8-142-23.3-55.2-35.1-113.7-35.1-174s11.8-118.8 35.1-173.9c22.5-53.2 54.7-101 95.8-142s88.8-73.2 142-95.8c55.1-23.3 113.6-35.1 174-35.1S630.2 77.7 685.3 101c53.2 22.5 101 54.7 142 95.8 41 41 73.2 88.8 95.8 142 23.3 55.1 35.1 113.6 35.1 173.9s-11.8 118.8-35.1 173.9c-22.5 53.2-54.7 101-95.8 142-41 41-88.8 73.2-142 95.8-55.1 23.3-113.6 35.2-173.9 35.2z m0-837c-215.1 0-390.1 175-390.1 390.1 0 215.1 175 390.1 390.1 390.1s390.1-175 390.1-390.1c-0.1-215.1-175-390.1-390.1-390.1z" fill="#ffffff" p-id="3181"></path><path d="M731.4 490.3l26.4-81.2c4.7-14-1.6-29-14.5-35.7l-76-38.8-38.8-76c-6.7-12.9-21.7-19.1-35.7-14.5l-81.2 26.4-81.2-26.4c-14-4.7-29 1.6-35.7 14.5l-39.3 75.5-76 38.8c-12.9 6.7-19.1 21.7-14.5 35.7l26.4 81.2L265 571c-4.7 14 1.5 29 14.5 35.7l76 38.8 38.8 76C401 734.4 416 740.6 430 736l81.2-26.4 81.2 26.4c3.1 1 6.2 1.5 9.3 1.5 10.9 0 21.2-5.7 26.9-15.5l38.8-76 76-38.8c12.9-6.7 19.1-21.7 14.5-35.7l-26.5-81.2z m-101.8-36.7L505 578.2c-0.2 0.2-0.3 0.4-0.5 0.6l-0.1 0.1c-10.1 10.1-26.7 10.1-36.8 0l-74.5-74.5c-10.1-10.1-10.1-26.7 0-36.8l0.1-0.1c10.1-10.1 26.7-10.1 36.8 0l56 56 106.8-106.8c10.1-10.1 26.7-10.1 36.8 0l0.1 0.1c10.1 10.1 10.1 26.7-0.1 36.8z" fill="#ffffff" p-id="3182"></path><path d="M679.4 490.3l20.1-62c3.6-10.7-1.2-22.1-11.1-27.2l-58-29.6-29.6-58c-5.1-9.9-16.6-14.6-27.2-11.1l-62 20.1-62-20.1c-10.7-3.6-22.1 1.2-27.2 11.1l-30 57.6-58 29.6c-9.9 5.1-14.6 16.6-11.1 27.2l20.1 62-20.1 62c-3.6 10.7 1.2 22.1 11.1 27.2l58 29.6 29.6 58c5.1 9.9 16.6 14.6 27.2 11.1l62-20.1 62 20.1c2.4 0.8 4.7 1.2 7.1 1.2 8.3 0 16.2-4.3 20.5-11.8l29.6-58 58-29.6c9.9-5.1 14.6-16.6 11.1-27.2l-20.1-62.1z m-49.8-36.7L505 578.2c-0.2 0.2-0.3 0.4-0.5 0.6l-0.1 0.1c-10.1 10.1-26.7 10.1-36.8 0l-74.5-74.5c-10.1-10.1-10.1-26.7 0-36.8l0.1-0.1c10.1-10.1 26.7-10.1 36.8 0l56 56 106.8-106.8c10.1-10.1 26.7-10.1 36.8 0l0.1 0.1c10.1 10.1 10.1 26.7-0.1 36.8z" fill="#ffffff" p-id="3183"></path></svg>  APPID: <?php echo $appId; ?> -  已授权</div>
                         <?php   }     }   ?>
                
                     <br>
                      <br>
                      <span>Version：<?php echo Version(); ?></span>
                      <br>
                      <span>ServerSoftware：<?php echo $SERVER_SOFTWARE; ?></span>
                      <br>
                      <span>System：<?php echo $PHP_OS; ?></span>
                      <br>
                      <span>DomainName：<?php echo $SERVER_NAME; ?></span>
                      <br>
                      <br>
                      <span>ServerIP：45.121.106.65</span>
                      <br>
                      <span>PHP Version：<?php echo $PHP_VERSION; ?></span>
                      <br>
                      <span>DocumentRoot：<?php echo $DOCUMENT_ROOT; ?></span>
                      <br>
                      <span>HttpUserAgent：<?php echo $HTTP_USER_AGENT; ?></span>
                      <br>
                      <span>ServerProtocol：<?php echo $SERVER_PROTOCOL; ?></span>
                      <br>
                      <span>MaxExecutionTime：<?php echo $max_execution_time; ?></span>
                      <br>
                      <span>ServerTime：<?php echo $datetime; ?></span>

                 	 </div>
                    <div class="cta-media">
                      <img alt="" src="/public/static/v4/img/phone1.png">
                    </div>
                  </div>
                </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
              </div>
          
          
          
          
          

              <div class="row content-box" >
                <div class="col-sm-8">
                  <div class="element-wrapper compact pt-4">
                    <div class="element-actions d-none d-sm-block">
                      <a class="btn btn-primary btn-sm" href="<?php echo url('user/user_list'); ?>"><i class="os-icon os-icon-user-male-circle2"></i><span>用户列表</span></a>
                      <a class="btn btn-success btn-sm" href="<?php echo url('user/agent_list'); ?>"><i class="os-icon os-icon-crown"></i><span>代理列表</span></a>
                    </div>
                    <h6 class="element-header">
                      最新用户
                    </h6>
                    <div class="element-box-tp">
                      <div class="inline-profile-tiles">
                        <div class="row">
      					 <?php if(is_array($user_list) || $user_list instanceof \think\Collection || $user_list instanceof \think\Paginator): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                          <div class="col-6 col-sm-3 col-xxl-2">
                            <div class="profile-tile profile-tile-inlined">
                              <a class="profile-tile-box" href="<?php echo url('user/edit'); ?>?edit_id=<?php echo $vo['id']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>" target="_blank">
                                <div class="pt-avatar-w">
                                  <img alt="" src="/public/static/v4/img/Ryan.png">
                                </div>
                                <div class="pt-user-name">
                              <span style=" font-size: 0.7rem; color: rgb(4, 123, 248); ">  <?php   echo  substr_replace($vo['username'],'****',3,4); ?></span> <br/> <span style=" font-size: 0.7rem; color: rgba(90, 99, 126, 0.49); "><?php   echo  date('m-d H:i:s',$vo['ctime']); ?></span>
                                </div>
                              </a>
                            </div>
                          </div>
                         <?php endforeach; endif; else: echo "" ;endif; ?> 
                       
  
                        </div>
                      </div>
                    </div>
                  </div>
 
                </div>
                <div class="col-sm-4">
                  <div class="element-wrapper compact pt-4">
    
                    <h6 class="element-header">
                      最近使用激活码
                    </h6>
                    <div class="element-box-tp">
                      <table class="table table-clean">
                        <?php if(is_array($cdkey_list) || $cdkey_list instanceof \think\Collection || $cdkey_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cdkey_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cdkey): $mod = ($i % 2 );++$i;?>
                        <tr  onclick="window.open('<?php echo url('cdkey/search'); ?>?cdkey=<?php echo $cdkey['cdkey']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>')" style="cursor:pointer">
                          <td>
                            <div class="value">
                             <?php echo $cdkey['cdkey']; ?>
                            </div>
                            <span class="sub-value"><?php echo $cdkey['name']; ?></span>
                          </td>
                          <td class="text-right">
                            <div class="value">
                            使用ID: <?php echo $cdkey['yid']; ?>
                            </div>
                            <span class="sub-value"><?php echo  date('Y-m-d H:i:s',$cdkey['stime']); ?></span>
                          </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
   
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>



  
  

  
  
    <script src="/public/static/v4/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/public/static/v4/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="/public/static/v4/bower_components/moment/moment.js"></script>
    <script src="/public/static/v4/bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="/public/static/v4/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="/public/static/v4/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="/public/static/v4/bower_components/ckeditor/ckeditor.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/public/static/v4/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="/public/static/v4/bower_components/dropzone/dist/dropzone.js"></script>
    <script src="/public/static/v4/bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="/public/static/v4/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/public/static/v4/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/public/static/v4/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/public/static/v4/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/public/static/v4/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="/public/static/v4/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/util.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/button.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="/public/static/v4/bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="/public/static/v4/js/demo_customizer.js?version=4.4.0"></script>
    <script src="/public/static/v4/js/main.js?version=4.4.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>