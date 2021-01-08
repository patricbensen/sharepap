<?php 
session_start();
include_once('inc/auth.php');

/** Check if loggedin or not */
if(isset($_SESSION['insuredLogin']) != ""){
	header('location:index.php');
	exit;
}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Insurance Dashboard provides a platform to design, come up with insurance certificates for Motorbikes, PSVs, Private Vehicle, Commercial vehicles etc.">
  <meta name="keywords" content="Insurance Dashboard, Insurance Prints, Vehicle Insurance Certificates Portal, Print Certificates Portal online">
  <meta name="author" content="PIXINVENT">
  <title>Login - Insurance Admin Portal</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="app-assets/images/logo/logo-dark.png" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Easily Using</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                      <span class="la la-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                      <span class="la la-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                      <span class="la la-linkedin font-medium-4"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                      <span class="la la-github font-medium-4"></span>
                    </a>
                  </div>
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>OR Using Account Details</span>
                  </p>
                  <div class="card-body">
                    <form class="form-horizontal" method="post" novalidate>
					  <?php
						if(isset($_POST['loginInsured'])){
							if($_POST['userName']==" "){
								echo "<div class='alert alert-danger alert-dismissible'>
								  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								  Email address is required.
								</div>";
							}
							elseif($_POST['userPass']==" "){
								echo "<div class='alert alert-danger alert-dismissible'>
								  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								  A password is required.
								</div>";
							}
							else{
								$suName = $_POST['userName'];
								$suPass = $_POST['userPass'];
								
								$suName = strip_tags(trim($suName));
								$suPass = strip_tags(trim($suPass));
								
								$securepass = hash('sha256',$suPass);
								
								if($stmt = $dbConnect->prepare("SELECT userID,firstName,lastName,userEmail,userName FROM tbl_users WHERE userName=? AND passWord=?")){
									$stmt->bind_param('ss',$suName,$securepass);
									$stmt->execute();
									$stmt->bind_result($vid,$vfname,$vlname,$vmail,$vuser);
									$stmt->store_result();
									$stmt->fetch();
									
									if($num_of_rows = $stmt->num_rows >= 1){
										$_SESSION['vid'] = $vid;
										$_SESSION['vfname'] = $vfname;
										$_SESSION['vlname'] = $vlname;
										$_SESSION['vmail'] = $vmail;
										$_SESSION['insuredLogin'] = $vuser;
										$logMail = $_SESSION['vmail'];
										$logUser = $_SESSION['insuredLogin'];
										
										echo "<div class='alert alert-success alert-dismissible'>
											  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
											  Login Successful. Redirecting in a moment</div>";
											  
										echo '<META HTTP-EQUIV="Refresh" Content="5; URL=index.php">';
									}
									else{						
										echo "<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">x</button><i class=\"fa fa-exclamation-triangle\"></i> Error logging in. Check credentials</div>";
										
									}
								}
								
							}
						}
						
						
						?>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control" name="userName" id="user-name" placeholder="Your Username"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" name="userPass" id="user-password" placeholder="Enter Password"
                        required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="submit" name="loginInsured" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>New to <?php echo $sysName;?> ?</span>
                  </p>
                  <div class="card-body">
                    <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>