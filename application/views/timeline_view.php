<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/_all-skins.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<!-- Site wrapper -->
	<div class="wrapper">

  		<header class="main-header">
    <!-- Logo -->
    		<a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      			<span class="logo-lg"><b>Friends</b>Zone</span>
    		</a>
    <!-- Header Navbar: style can be found in header.less -->
    		<nav class="navbar navbar-static-top" >
    			<ul class="nav navbar-nav">
    				<li>
    					<div class="col-md-4" >
	    					<form action="#" method="get" class="sidebar-form">
	        					<div class="input-group"  >
	          						<input type="text" name="q" class="form-control" placeholder="Search" style="background-color: white;   " id="src">
	             					<span class="input-group-btn">
	               				 		<button type="submit" name="search" id="search-btn" class="btn btn-flat" style="background-color: white;"><i  
	               				 		  class="fa fa-search"></i>
	               			 			</button>
	              					</span>
	       						 </div>
	      					</form>
      					</div>
    				</li>
            <li style="margin-left: 850px; margin-top: -40px; color: white; font-size: 130%;">
                <button class="btn btn-primary glyphicon glyphicon-user" id="srcf">
                  
                </button>
                
            </li>
            <li style="margin-left: 950px; margin-top: -50px; color: white; font-size: 130%;">
               <a href="<?php echo base_url();?>Home_controler/friend_list"> <?php echo $_SESSION['user'];?></a>
                
            </li>
           <li style="margin-left: 1058px; margin-top: -50px; color: red; font-size: 110%;">
              <a href="<?php echo base_url();?>Home_controler/logout">Logout</a>
           </li>
    			</ul>
 			</nav>
  		</header>

  <!-- =============================================== -->

  <!-- L
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper" >

    <!-- Content Header (Page header) -->
   			<section class="content-header">
        <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <div style="background-color: white; width:46%; margin-left: 10px; margin-top: -20px; display: none; " id="rs">
      
             </div>
          </div>
          <div class="col-md-4">
            <div style="background-color: white; width:66%; margin-left: 100px; margin-top: -20px; display: none; " id="rsf">
      
             </div>
             </div>

        </div>
   			

		<br />
   				<div class="col-md-6 col-md-offset-1" >
   					<div class="box box-info" >
     					<div class="box-header">
      						<center><h3 class="box-title">Share your thinking</h3></center>
      					</div>			
      					<div class="box-body pad">

              				<form>
                    			<textarea id="editor1" name="post" rows="10" cols="77">
                                            
                    			</textarea>
              				
              				<input type="submit" class="btn btn-info " value="share" name="share" style="margin-left: 45%; width: 13%;">
                      </form>
            			</div>

            		</div>
            	</div>	
                </div>
                <div style="margin-left: 4%;">
                  <?php  
                      foreach($posts  as $p)
                    {   
                      echo "<span style='color: rgb(7, 103, 132); font-weight: bold; font-size: 130%;'>".$p["user_name"]."</span><br/>";
                      echo "<span style='font-size: 80%;'>".$p["post_date"]."</span><br/>";
                      echo $p["post"]."<hr/>";


                    } ?>
                    </div>
    		</section>
          
    <!-- /.content -->
  		</div>
 
  
	</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>js/demo.js"></script>
<script> 
$(document).ready(function(){
    $("#src").click(function(){
    	var name = $('#src').val();

    	 $("#rs").load("<?php echo base_url();?>Home_controler/friends?nm="+name, function(responseTxt, statusTxt, xhr){
        
    });
        $("#rs").show();
    });
    $("#srcf").click(function(){
      var name = $('#src').val();

       $("#rsf").load("<?php echo base_url();?>Home_controler/friendrequests", function(responseTxt, statusTxt, xhr){
        
    });
        $("#rsf").show();
    });
     $("#src").keyup(function(){
    	var name = $('#src').val();

    	 $("#rs").load("<?php echo base_url();?>Home_controler/friends?nm="+name, function(responseTxt, statusTxt, xhr){
        
    });
        $("#rs").show();
    });
   
    $(".content-wrapper").click(function(){
        $("#rs").hide();
        $("#rsf").hide();
    });
});
</script>
</body>
</html>
