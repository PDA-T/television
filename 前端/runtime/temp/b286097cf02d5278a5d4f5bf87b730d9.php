<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"/www/wwwroot/a.topv.club/application/index/view/user/edit.html";i:1580035360;s:59:"/www/wwwroot/a.topv.club/application/index/view/layout.html";i:1588953790;}*/ ?>
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
            <div class="content-box"><div class="row">
  <div class="col-sm-5">
    <div class="user-profile compact">
      <div class="up-head-w" style="background-image:url(/public/static/v4/img/profile_bg1.jpg)">
        <div class="up-social">
          
          
                               <?php if($user_data['tx']=='1') { echo '<a href="#"><i class="os-icon os-icon-pie-chart-2"  data-title="正在提现" data-toggle="tooltip" ></i></a>'; } if(!empty($user_data['weichat'])) { echo '<a href="#"><i class="os-icon os-icon-mail-07"  data-title="微信客服已设置" data-toggle="tooltip" ></i></a>'; } if(!empty($user_data['phone'])) { echo '<a href="#"><i class="os-icon os-icon-phone"  data-title="手机已设置" data-toggle="tooltip" ></i></a>'; } if(!empty($user_data['zfb'])) { echo '<a href="#"><i class="os-icon os-icon-cv-2"  data-title="支付宝已设置" data-toggle="tooltip" ></i></a>'; } if(!empty($user_data['safetycode'])) { echo '<a href="#"><i class="os-icon os-icon-fingerprint"  data-title="安全码已设置" data-toggle="tooltip" ></i></a>'; } if(!empty($user_data['email'])) { echo '<a href="#"><i class="os-icon os-icon-mail-01"  data-title="邮箱已设置" data-toggle="tooltip" ></i></a>'; } ?>

          
        </div>
        <div class="up-main-info">
          <h2 class="up-header">
            <?php echo $user_data['username']; ?>
          </h2>
          <h6 class="up-sub-header">
            账户注册时间：<?php echo  date('Y年m月d日 H:i:s',$user_data['ctime']); ?>
          </h6>
          <h6 class="up-sub-header">
            最后登录时间：<?php echo  date('Y年m月d日 H:i:s',$user_data['logintime']); ?>
          </h6>
        </div>
        <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g></svg>
      </div>
      <div class="up-controls">
        <div class="row">
          <div class="col-sm-6">
            <div class="value-pair">
              <div class="label">
                Status:
              </div>


                 <?php  if($user_data['status']=='1') {  ?>
              		  <div class="value badge badge-pill badge-success">  正常   <?php echo ' / UID:'.$user_data['id']; ?></div>
                 <?php }else{  ?>
              		  <div class="value badge badge-pill badge-danger">  已禁封  </div>
                 <?php }  ?>    

            </div>
          </div>
          <div class="col-sm-6 text-right">
            
                                 <?php
                                   if($user_data['power']!='1'){
                                      if($user_data['type']=='1'){
                                          echo '<span class="btn btn-secondary btn-sm"><i class="os-icon os-icon-crown"></i>  永久会员</span>';
                                      }else{
                                          if($user_data['lasttime']=='0'){
                                                  echo '<span class=" btn btn-Danger btn-sm ">未充值</span>';
                                              }elseif($user_data['lasttime']<time()){
                                                  echo ' <span class="btn btn-danger btn-sm"  data-title="过期于 '.date('Y年m月d日 H:i:s',$user_data['lasttime']).'" data-toggle="tooltip" ><i class="os-icon os-icon-others-43"></i>  会员过期</span>';
                                          }else{
                                               echo '<span class="btn btn-primary btn-sm"  data-title="将于 '.date('Y年m月d日',$user_data['lasttime']).' 过期" data-toggle="tooltip" ><i class="os-icon os-icon-ui-02"></i>  超级会员</span>';
                                          }
                                      }
 									}else{
 										 echo '<span class="btn btn-secondary btn-sm"><i class="os-icon os-icon-crown"></i>  荣誉代理</span>';
									}
                                ?>           
            
            
            
          </div>
        </div>
      </div>
     <?php if($user_data['power']<'2'){ ?> 

      <div class="up-contents">
        <div class="m-b">
          
          <div class="row m-b">
            
            <div class="col-sm-6 b-r b-b">
              <div class="el-tablo centered padded-v">
                <div class="value">
                  <?php echo $Invitation_count; ?>
                </div>
                <div class="label">
                  下级用户
                </div>
              </div>
            </div>
            
            <div class="col-sm-6 b-b">
              <div class="el-tablo centered padded-v">
                <div class="value">
                  <?php echo $rebate_count; ?>
                </div>
                <div class="label">
                  获取佣金总额
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="padded">
            
 			 <div class="os-progress-bar primary">
               <div class="bar-labels">
               	 <div class="bar-label-left">
                     <span>体验</span><span class="positive" style="color: #456CF9;">激活率：<?php echo $cdkey_data['experience_details_used_ratio']; ?></span>
                 </div>
                 <div class="bar-label-right">
                     <span class="info"><?php echo $cdkey_data['experience_details_used']; ?>/<?php echo $cdkey_data['experience_details_total']; ?></span>
                  </div>
                </div>
                <div class="bar-level-1" style="width: 100%">
                   <div class="bar-level-2" style="width: <?php echo $cdkey_data['experience_details_used_ratio']; ?>">
                      <!--  <div class="bar-level-3" style="width: 25%"></div> -->
                   </div>
                </div>
             </div>
            
            
 			 <div class="os-progress-bar primary">
               <div class="bar-labels">
               	 <div class="bar-label-left">
                     <span>一月</span><span class="positive" style="color: #456CF9;">激活率：<?php echo $cdkey_data['one_month_details_ratio']; ?></span>
                 </div>
                 <div class="bar-label-right">
                     <span class="info"><?php echo $cdkey_data['one_month_details_used']; ?>/<?php echo $cdkey_data['one_month_details_total']; ?></span>
                  </div>
                </div>
                <div class="bar-level-1" style="width: 100%">
                   <div class="bar-level-2" style="width: <?php echo $cdkey_data['one_month_details_ratio']; ?>">
                      <!--  <div class="bar-level-3" style="width: 25%"></div> -->
                   </div>
                </div>
             </div>
            
            
 			 <div class="os-progress-bar primary">
               <div class="bar-labels">
               	 <div class="bar-label-left">
                     <span>半年</span><span class="positive" style="color: #456CF9;">激活率：<?php echo $cdkey_data['half_a_year_details_ratio']; ?></span>
                 </div>
                 <div class="bar-label-right">
                     <span class="info"><?php echo $cdkey_data['half_a_year_details_used']; ?>/<?php echo $cdkey_data['half_a_year_details_total']; ?></span>
                  </div>
                </div>
                <div class="bar-level-1" style="width: 100%">
                   <div class="bar-level-2" style="width: <?php echo $cdkey_data['half_a_year_details_ratio']; ?>">
                      <!--  <div class="bar-level-3" style="width: 25%"></div> -->
                   </div>
                </div>
             </div>
            
            
 			 <div class="os-progress-bar primary">
               <div class="bar-labels">
               	 <div class="bar-label-left">
                     <span>一年</span><span class="positive" style="color: #456CF9;">激活率：<?php echo $cdkey_data['one_year_details_ratio']; ?></span>
                 </div>
                 <div class="bar-label-right">
                     <span class="info"><?php echo $cdkey_data['one_year_details_used']; ?>/<?php echo $cdkey_data['one_year_details_total']; ?></span>
                  </div>
                </div>
                <div class="bar-level-1" style="width: 100%">
                   <div class="bar-level-2" style="width: <?php echo $cdkey_data['one_year_details_ratio']; ?>">
                      <!--  <div class="bar-level-3" style="width: 25%"></div> -->
                   </div>
                </div>
             </div>
            
            
 			 <div class="os-progress-bar primary">
               <div class="bar-labels">
               	 <div class="bar-label-left">
                     <span>永久</span><span class="positive" style="color: #456CF9;">激活率：<?php echo $cdkey_data['permanent_details_ratio']; ?></span>
                 </div>
                 <div class="bar-label-right">
                     <span class="info"><?php echo $cdkey_data['permanent_details_used']; ?>/<?php echo $cdkey_data['permanent_details_total']; ?></span>
                  </div>
                </div>
                <div class="bar-level-1" style="width: 100%">
                   <div class="bar-level-2" style="width: <?php echo $cdkey_data['permanent_details_ratio']; ?>">
                      <!--  <div class="bar-level-3" style="width: 25%"></div> -->
                   </div>
                </div>
             </div>
            
            

          </div>
          
        </div>
      </div>

      	<?php	} ?> 
      
    </div>
    <div class="element-wrapper">
      <div class="element-box">
        <h6 class="element-header" style="margin-bottom: 0rem;">
          使用激活码记录
        </h6>
        <div class="timed-activities compact">
          <div class="timed-activity">
            <div class="ta-date">
              <span></span>
            </div>
            <div class="ta-record-w">
              <?php if(is_array($use_cdkey_list) || $use_cdkey_list instanceof \think\Collection || $use_cdkey_list instanceof \think\Paginator): $i = 0; $__LIST__ = $use_cdkey_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                  
              <div class="ta-record">
                <div class="ta-timestamp">
                  <strong><?php echo  date('Y-m-d',$vo['stime']); ?></strong> <?php echo  date('H:i:s',$vo['stime']); ?>
                </div> 
                <div class="ta-activity "> 
                  使用了激活码 <a href="<?php echo url('cdkey/search'); ?>?cdkey=<?php echo $vo['cdkey']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>" target="_blank"><?php echo $vo['cdkey']; ?></a> 
                </div>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>

              
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-7">
    <div class="element-wrapper">
      <div class="element-box">
         <form class="form-material"   role="form" id="form1" method="post" action="<?php echo url('user/edit'); ?>" >
          <div class="element-info">
            <div class="element-info-with-icon">
              <div class="element-info-icon">
                <div class="os-icon os-icon-user-male-circle2"></div>
              </div>
              <div class="element-info-text">
                <h5 class="element-inner-header">
                  用户资料
                </h5>
                <div class="element-inner-desc">
                  用户资料编辑.  <span id="timer" style=" margin-left: 10px; color: #999; font-size: 10px; "></span>
                </div>
              </div>
            </div>
          </div>
          
         <?php if($user_data['power']!='0'){ ?>

           <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label > 禁封账户</label>
                
                <div class="help-block form-text text-muted form-control-feedback">
                  禁止账户登录
                </div> 
              </div>
             <label class="switch ">
               <input type="hidden"  name="user_status" value="1">
              <input type="checkbox" name="user_status" type="checkbox"  value="0"  <?php if($user_data['status'] ==0){echo 'checked';} ?> >
              <div class="slider"></div>
            </label>
            </div>
             
            <div class="col-sm-4">
              <div class="form-group">
                <label > 广告权限</label>
                
                <div class="help-block form-text text-muted form-control-feedback">
                  是否开放广告权限
                </div> 
              </div>
             <label class="switch ">
               <input type="hidden"  name="user_banner_switch" value="0">
              <input type="checkbox" name="user_banner_switch" type="checkbox"  value="1"  <?php if($user_data['banner_switch'] ==1){echo 'checked';} ?> >
              <div class="slider"></div>
            </label>
            </div>
                        
            <div class="col-sm-4">
              <div class="form-group">
                <label > 永久会员</label>
                
                <div class="help-block form-text text-muted form-control-feedback">
                  开通永久会员权限
                </div> 
              </div>
             <label class="switch ">
              <input type="hidden"  name="user_type" value="0">
              <input type="checkbox" name="user_type" value="1"  <?php if($user_data['type'] ==1){echo 'checked';} ?> >
              <div class="slider"></div>
            </label>
            </div>
             



          </div>
               <br>
           
           <div class="row">           
                        
            <div class="col-sm-4">
              <div class="form-group">
                <label > 代理权限</label>
                
                <div class="help-block form-text text-muted form-control-feedback">
                  开通代理权限
                </div> 
              </div>
             <label class="switch ">
               <input type="hidden"    name="user_power" value="2">
              <input type="checkbox" name="user_power" value="1"  <?php if($user_data['power'] ==1){echo 'checked';} ?> >
              <div class="slider"></div>
            </label>
            </div>
          </div>      
          
           <br>
          
          <?php }  ?>   
          
          


          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 手机</label><input class="form-control"  type="text"  maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,'')" name="user_phone"  value="<?php echo $user_data['phone']; ?>">
              </div>
            </div>
              <div class="col-sm-6">
              <div class="form-group">
                <label for="">实名</label><input class="form-control"  type="text"  name="user_zfb_name"   value="<?php echo $user_data['zfb_name']; ?>">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>
            </div>

          </div>
          

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 支付宝</label><input class="form-control"  type="text"   name="user_zfb"   value="<?php echo $user_data['zfb']; ?>">
                <div class="help-block form-text text-muted form-control-feedback">
                  用于佣金提现
                </div>
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 微信</label><input class="form-control"  type="text"    name="user_weichat"  value="<?php echo $user_data['weichat']; ?>">
                <div class="help-block form-text text-muted form-control-feedback">
                  将在代理下级用户APP中显示
                </div>
              </div>
            </div>
          </div>
          
          

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <label for="">邮箱</label><input class="form-control"  type="email"  name="user_email"    value="<?php echo $user_data['email']; ?>">
                <div class="help-block form-text text-muted form-control-feedback">
                  用于接收激活码或其他信息
                </div>
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 余额</label><input class="form-control"  type="number"  name="user_money"     value="<?php echo $user_data['money']; ?>">
                <div class="help-block form-text text-muted form-control-feedback">
                  不可提现 仅可用于激活码消费
                </div>
              </div>
            </div>
          </div>
          
          
          

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 积分</label><input class="form-control"  type="number" name="user_sign"    value="<?php echo $user_data['sign']; ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">IMEI</label><input class="form-control"   type="text"  name="user_deviceId"    value="<?php echo $user_data['deviceId']; ?>">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>
            </div>
          </div>
          
          
          

  <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> 会员到期时间</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Date of birth" type="text"  name="user_lasttime"  value="<?php echo  date('m/d/Y',$user_data['lasttime']); ?>">  
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">上级ID</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        No.
                      </div>
                    </div>
                    <input class="form-control" placeholder="Twitter Username" type="text" name="user_parentid"  value="<?php echo $user_data['parentid']; ?>">
                  </div>
                </div>
              </div>
            </div>        
          

          <fieldset class="form-group">
            <legend><span>Account Security</span></legend>

            

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 安全码</label><input class="form-control" type="password"  placeholder="留空不修改"  name="user_safetycode" >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">密码</label><input class="form-control"  type="password"  placeholder="留空不修改"  name="user_password" >
              </div>
            </div>
          </div>
                    
            

            
            


          </fieldset>

          <div class="form-buttons-w">
            <input type="hidden" name="Ryan_time"  id="Ryan_time"   value="<?php echo $Ryan_time; ?>" ><input type="hidden" name="Ryan_key"  id="Ryan_key"   value="<?php echo $Ryan_key; ?>" >
            <input type="hidden" name="edit_id"  id="edit_id"   value="<?php echo $user_data['id']; ?>" >
            <button class="btn btn-primary disabled" type="submit"> 确认</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
              
            </div>
            <!--------------------
            START - Sidebar
            -------------------->
            <div class="content-panel">
              <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
              </div>
              <!--------------------
              START - Support Agents
              -------------------->
              <div class="element-wrapper">
                <h6 class="element-header">
                  邀请人
                </h6>
                <div class="element-box-tp">

                  <div class="profile-tile">
                    <a class="profile-tile-box">
                      <div class="pt-avatar-w">
                        <img alt="" src="/public/static/v4/img/Ryan.png">
                      </div>
                      <div class="pt-user-name">
                        <?php echo $from_user_data['username']; ?>
                      </div>
                    </a>
                    <div class="profile-tile-meta">
                      <ul>
                        <li>
                          用户ID:<strong> <?php echo $from_user_data['id']; ?></strong>
                        </li>
                        <li>
                          微信:<strong> <?php echo $from_user_data['weichat']; ?></strong>
                        </li>
                        <li>
                          团队人数:<strong><?php echo $from_user_t_count; ?> 人</strong>
                        </li>
                      </ul>
                      <div class="pt-btn">
                      
                        <a class="btn btn-secondary btn-sm" href="<?php echo url('user/edit'); ?>?edit_id=<?php echo $from_user_data['id']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>">   <i class="os-icon os-icon-pencil-1"></i> 查 看 资 料 </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Support Agents
              -------------------->
              <div class="element-wrapper">
                <h6 class="element-header">
                  近期邀请用户
                </h6>
                <div class="element-box-tp">
      
                  <div class="users-list-w">
                    
                   <?php if(is_array($Invitation_list_data) || $Invitation_list_data instanceof \think\Collection || $Invitation_list_data instanceof \think\Paginator): $i = 0; $__LIST__ = $Invitation_list_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                     
                    <div class="user-w with-status status-<?php  if($vo['status']=='1') { echo 'green'; }else{ echo 'red';}  ?>" >  
                      <div class="user-avatar-w">
                        <div class="user-avatar">
                          <img alt="" src="/public/static/v4/img/Ryan.png">
                        </div>
                      </div>
                      <div class="user-name">
                        <h6 class="user-title">
                          <?php echo $vo['username']; ?>
                        </h6>
                        <div class="user-role">
                         邀请时间： <?php echo  date('Y-m-d H:i:s',$vo['ctime']); ?>
                        </div>
                      </div>
                      <div class="user-action"  onclick="window.open('edit?edit_id=<?php echo $vo['id']; ?>&Ryan_time=<?php echo $Ryan_time; ?>&Ryan_key=<?php echo $Ryan_key; ?>')" style="cursor:pointer">
                        <div class="os-icon os-icon-cv-2"></div>
                      </div>
                    </div>
                   <?php endforeach; endif; else: echo "" ;endif; ?> 
                    

                  </div>
                </div>
              </div>
            </div>
            <!--------------------
            END - Sidebar
            -------------------->
          </div>




  
  <script type="text/javascript">

  var maxtime = 5*60; //  

            function CountDown() {

                if (maxtime >= 0) {

                    minutes = Math.floor(maxtime / 60);

                    seconds = Math.floor(maxtime % 60);

                    msg = "离本次会话超时还剩" + minutes + "分" + seconds + "秒";

                    document.all["timer"].innerHTML = msg;

               //   if (maxtime == 2) document.all["timer"].innerHTML = '';
						
                        --maxtime;

                } else{

                    clearInterval(timer);

                     document.all["timer"].innerHTML = '出于安全原因,本次会话已超时！ 请刷新页面后重新填写！';
               		 document.getElementById("buttonid").click();

                }

            }

            timer = setInterval("CountDown()", 1000);     

 </script>
 <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingTextModal" data-toggle="modal" type="button" id="buttonid" style="display:none;">Modal with text only</button>
          
       <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingTextModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">关闭</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="/public/static/v4/img/bigicon2.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                出于安全原因,本次会话已超时！
              </h4>
              <div class="onboarding-text">
                请刷新页面后重新填写提交！
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