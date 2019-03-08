<!DOCTYPE html>
<html>



<head>
    <title>Cancel Appointment</title>
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
                <form class="login100-form validate-form" action="" method="post">


                  <!--  <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>-->

                    <span class="login100-form-title p-b-34 p-t-27">
                       Cancel Appointment
                    </span>
   <!--<?php echo @$error; ?>-->
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                   
                 
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit"><a href="<?php echo base_url('welcome/index'); ?>">Submit</a>
                    



                        </button>
                    </div>


                    <?php
                       if($this->session->flashdata('error')){
                    ?>
                    <div class="alert alert-danger text-center" style="margin-top:20px;">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php
                }
            ?>
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