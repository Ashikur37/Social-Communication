<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Friends Zone | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="jumbotron">

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Friends</b>Zone</a>
  </div>
  <!-- /.login-logo -->
  <div class="box box-primary">
    
    <div class="box-header with-border solid " align="center">
              <h3 class="box-title" >Sign in to start your session</h3>
            </div>
            <div class="box-body"> 
    <form  method="post">
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php
        if(isset($email))
            echo $email;
        ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="col-xs-5" style="margin-left: 100px;">
          <input type="submit" name="buttonlogin">
        </div>
        <br />
        <div >
        <br />
          <div class="checkbox icheck">
            <label style="margin-left:134px;">
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      
      
    </form>
    <span style="color: red;">
      <?php echo validation_errors(); ?>
    </span>
    
    </div>
    
    <!-- /.social-auth-links -->
    <div class="box-footer">
    <center><a href="#">I forgot my password</a><br>
      
   <a href="<?php echo base_url();?>Home_controler/signup" >Register a new membership</a></center> 
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- iCheck -->

<script>
  
</script>
</body>
</html>
