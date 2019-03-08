
<!DOCTYPE html>
<html>



<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
         
  
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                
                 <form class="login-form" action="<?php echo base_url(); ?>admincontroller/newpassword" method="post" id="login_form">
                <h3>New Password </h3>
                        <?php if(isset($_GET['msg'])) { ?>
             <?php echo form_open('admincontroller/login'); ?>
                        <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This Email ID Not Register.</div>
                        <?php  }?>
                  <!--  <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">-->
                  <input type="hidden" name="id">
                        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="New password" name="pass"/>
                </div>
                        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type New Password" name="c_pass"/>
                </div>
                
                <div class="form-actions">
                             
                    <button type="submit" class="btn btn-success uppercase" name="newpasword">Submit</button>
                </div>
                 <?php echo form_close(); ?>
               </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>login/js/main.js"></script>
    

 


</body>
</html>