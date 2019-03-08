
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url() ?>register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>register/css/main.css" rel="stylesheet" media="all">
</head>
<style>


a:visited {
  color: #2A90E5  ;
}

a:hover {
 color: #85C1E9  ;
}


} 
</style>

<body>
      <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
         
 

    <div class="page-wrapper bg-gra-02 p-t-130  font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
           <!--<?php echo form_open('welcome/login'); ?>-->
           
               <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Firstname</label>
                                    <input class="input--style-4" type="text" name="f_name" value="<?php echo set_value('f_name'); ?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Lastname</label>
                                    <input class="input--style-4" type="text" name="l_name" value="<?php echo set_value('l_name'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <input class="input--style-4" type="date" name="dob" id="dob" value="<?php echo set_value('dob'); ?>">
                                </div>
                            </div>
                           
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mobileno</label>
                                    <input class="input--style-4" type="phone" name="m_no" value="<?php echo set_value('m_no'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">   
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="<?php echo set_value('email'); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="pass" id="pass" value="<?php echo set_value('pass'); ?>">
                                </div>
                            </div>
                        </div>
                              <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="female" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                              <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ConfirmPassword</label>
                                    <input class="input--style-4" type="password" name="c_pass" value="<?php echo set_value('c_pass'); ?>">
                                </div>
                            </div>

                        </div>
                    
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                       
                      <div class="btn btn-success uppercase pull-right font-blue" > <b> <a href="<?php echo base_url('welcome/login'); ?>">LOGIN PAGE</a></b></div>
                     

                         
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url() ?>register/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>register/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->