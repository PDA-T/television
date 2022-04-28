<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/a.topv.club/application/admin/view/admin/index.html";i:1573336774;}*/ ?>
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
    <link href="/public/static/v4/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/public/static/v4/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/public/static/v4/css/main.css?version=4.4.0" rel="stylesheet">
    
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
            <img alt="" src="/public/static/v4/img/RyanLogo.png"  style=" width: 80px; ">
        </div>
        <h4 class="auth-header">
          管理后台
        </h4>

        <form class="form-material"   role="form" id="form1" method="post" action="<?php echo url('admin/index'); ?>" >
          <div class="form-group">
            <label for="">账户</label><input class="form-control" placeholder="Enter username" type="text"  name="username" id="username" >
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">密码</label><input class="form-control" placeholder="Enter password" type="password" name="passwd" id="passwd">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          
          
          

          <div class="form-group" <?php if($token_switch == 1){ echo ' style="display:block" ';}else{  echo ' style="display:none" '; }?> >
            <label for="">动态令牌</label><input class="form-control" placeholder="Enter token" type="password" name="token" id="token">
            <div class="pre-icon os-icon os-icon-robot-2"></div>
          </div>
          
          <div class="buttons-w">
            <button class="btn btn-primary">登录</button>
          </div>
        </form>
      </div>
    </div>
    
    
    
    
  </body>
</html>
