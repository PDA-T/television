<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/www/wwwroot/a.topv.club/application/index/view/user/user_list.html";i:1572969142;s:59:"/www/wwwroot/a.topv.club/application/index/view/layout.html";i:1588953790;}*/ ?>
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

  
  
  
  
          	 <div class="content-i">
            <div class="content-box">
              
              
              <!--START - Transactions Table-->
              <div class="element-wrapper">
                <h6 class="element-header">
                  用户列表
                </h6>
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                          <th>
                            Status
                          </th>
                          <th>
                            Account
                          </th>
                          <th>
                            Last Login Time
                          </th>
                          <th>
                            Login Num
                          </th>
                          <th>
                            More Data
                          </th>
                          <th class="text-center">
                            VIP Time
                          </th>
                          <th  class="text-right">
                            Come From
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                     <?php if(is_array($user_list) || $user_list instanceof \think\Collection || $user_list instanceof \think\Paginator): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                          
                        <tr onclick="window.open('edit?edit_id=<?php echo $vo['id']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>')" style="cursor:pointer">
                          <td class="nowrap">
                            <span class="smaller lighter red"><?php echo $vo['id']; ?></span> 
                            
                            
                            <?php  if($vo['status']=='1') {  ?>
                            	 <div class="status-pill green" data-title="正常" data-toggle="tooltip" ></div>
                            <?php }else{  ?>
                           		 <div class="status-pill red" data-title="已禁封" data-toggle="tooltip" ></div>
                            <?php }  ?>    
                            
                            
                            
                          </td>
                          <td class="cell-with-media ">
                            
                            <div class="cell-image-list">
                                  <div class="cell-img" style="height: 25px;width: 25px; margin-right: 10px; background-image: url(/public/static/v4/img/Ryan.png)" ></div>
                                </div>
                            <span ><?php echo $vo['username']; ?></span>
                            
                          </td>   
                          
                          
                          <td>
                            
                            <?php  if($vo['logintime']=='0') {  ?>
                             <span class="smaller lighter">未登录</span>
                            <?php }else{  ?>
                            <span><?php echo  date('Y-m-d',$vo['logintime']); ?></span><span class="smaller lighter"><?php echo  date('H:i:s',$vo['logintime']); ?></span>
                            <?php }  ?>
                            
                            
                          </td>
                          <td>
                            <span class="smaller lighter"><?php echo $vo['count']; ?></span>
                          </td>

                           <td class="bolder nowrap">
                            
                            <div class="cell-image-list">
                               <?php if($vo['tx']=='1') { echo '<div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/CashOut.gif)"  data-title="正在提现" data-toggle="tooltip" ></div>'; } if(!empty($vo['weichat'])) { echo '<div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/WeChat.png)"  data-title="微信客服已设置" data-toggle="tooltip" > </div>'; } if(!empty($vo['phone'])) { echo '<div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/mobilephone.png)"  data-title="手机已设置" data-toggle="tooltip"  ></div>'; } if(!empty($vo['zfb'])) { echo '<div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/alipay.png)"  data-title="支付宝已设置" data-toggle="tooltip" ></div>'; } if(!empty($vo['safetycode'])) { echo ' <div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/safetycode.png)"  data-title="安全码已设置" data-toggle="tooltip" ></div>'; } if(!empty($vo['email'])) { echo '<div class="cell-img" style="height: 20px;width: 20px; margin-right: 10px; background-image: url(/public/static/v4/img/email.png)"  data-title="邮箱已设置" data-toggle="tooltip" ></div>'; } ?>
                              
                                </div>
                            
                          </td>
                          <td class="text-center">
                                <?php
                                if($vo['type']=='1'){
                                	echo '<span class="badge badge-secondary"><i class="os-icon os-icon-crown"></i>  永久会员</span>';
                                }else{
                                    if($vo['lasttime']=='0'){
                                            echo '<span class=" btn btn-Danger btn-xs  ">未充值</span>';
                                        }elseif($vo['lasttime']<time()){
                                            echo ' <span class="badge badge-danger"  data-title="过期于 '.date('Y年m月d日 H:i:s',$vo['lasttime']).'" data-toggle="tooltip" ><i class="os-icon os-icon-others-43"></i>  会员过期</span>';
                                    }else{
                                         echo '<span class="badge badge-primary"  data-title="将于 '.date('Y年m月d日',$vo['lasttime']).' 过期" data-toggle="tooltip" ><i class="os-icon os-icon-ui-02"></i>  超级会员</span>';
                                    }
                                }

                                ?>
                            

                          </td>
                          <td class="text-right bolder nowrap">
                            <span class="smaller lighter"><?php echo $vo['Source']; ?></span>
                          </td>

                        </tr>
                        
                        
                        
						<?php endforeach; endif; else: echo "" ;endif; ?> 
                            
                        </tbody>
                       </table> 
                        <?php echo $user_list->render(); ?>
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