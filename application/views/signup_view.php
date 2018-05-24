<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
  <link rel="stylesheet" href="<?php echo base_url();?>css/all.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/blue.css">
   <link rel="stylesheet" href="<?php echo base_url();?>css/datepicker3.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="jumbotron">

  <div class="register-logo">
    <b>Friends</b>Zone
  </div>
  <section>
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
  <div class="box box-primary"  >
    <div class="box-header with-border solid " align="center">
              <h3 class="box-title" >Register a new membership</h3>
            </div>
    
    
    <form method="post">
      <div class="box-body"> 
      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="fn" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
        </div><!--col-md-6-->
        <div class="col-md-6">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="ln" placeholder="Last name">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
       </div>
       </div><!--col-md-6-->
      </div><!--row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-feedback">
        <input type="text" class="form-control" name="un" placeholder="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        </div><!--col-md-6-->
        <div class="col-md-6">
        <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
       </div><!--col-md-6-->
      </div><!--row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-feedback">
        <input type="text" class="form-control" name="mb" placeholder="mobile number">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
        </div><!--col-md-6-->
        <div class="col-md-6 form-group"> 
        <select class="form-control" name="gnd">
                    <option value="none">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                  </select>
       </div><!--col-md-6-->
      </div><!--row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass"  placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        </div><!--col-md-6-->
        <div class="col-md-6">
        <div class="form-group has-feedback">
        <input type="password" class="form-control" name="rpass" placeholder="Retype Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       </div><!--col-md-6-->
      </div><!--row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                <label>Date of birth:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="dob">
                </div>
                <!-- /.input group -->
              </div>
        </div><!--col-md-6-->
        <div class="col-md-6"  style=" font-size: 125%; ">
			<br />
          <div class="checkbox icheck">
            <label style="margin-left:15px;">
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        
      
       </div><!--col-md-6-->
      </div><!--row-->
      
      
    
      </div><!-- box body -->
        <div class="box-footer">
        <div class="row">
      <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
         <!-- <button type="submit" class="btn btn-primary btn-block btn-flat" name="buttonSave">Register</button>-->
         <input type="submit" name="buttonSave">
        </div>
        <div class="col-md-4">
          
        </div>
        </div>
        <br />
          <div class="col-md-4">
          
        </div> 
      &nbsp; &nbsp; &nbsp;<a href="<?php echo base_url();?>Home_controler/signin"  ><b>I already have a membership</b></a>
        </div>
      </form>
      <span style="color: red;">
        <?php echo validation_errors(); ?>
      </span>
		
    
  </div>
  </div>
  </section>
  <!-- /.form-box -->

<!-- /.register-box -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url();?>js/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>js/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>js/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url();?>js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>js/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url();?>js/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="j<?php echo base_url();?>s/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>js/demo.js"></script>
<script>
  
   $(function () {
	  
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
	
    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
