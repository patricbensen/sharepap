<?php include('templates/authenticate.php');?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="Benson Sifuna">
  <title>Generate Certificate - <?php echo $sysName; ?> Portal  </title>
  <?php include('templates/header-styles.php');?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <?php include('templates/nav-bar.php');?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include('templates/menu.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Generate Certificate</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Certificate</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-colored-form-control">Capture Vehicle Details</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                    </div>
                    <form class="form" method="post">
					<?php
					if(isset($_POST['regVehicle'])){
						if($_POST['regno'] ==""){
							echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'><sup>&times;</sup></button>Vehicle Registration No required</div>";
						}
						elseif($_POST['bodytype'] ==""){
							echo "<div class='alert alert-danger' role='alert'>Body type is a requirement to generate certificate</div>";
						}
						else {
							$reg_no = $dbConnect->real_escape_string(strip_tags($_POST['regno']));
							$model = $dbConnect->real_escape_string(strip_tags($_POST['modelno']));
							$body = $dbConnect->real_escape_string(strip_tags($_POST['bodytype']));
							$validity = $dbConnect->real_escape_string(strip_tags($_POST['validity']));
							$yom = $dbConnect->real_escape_string(strip_tags($_POST['yom']));
							$chassis = $dbConnect->real_escape_string(strip_tags($_POST['chassisno']));
							$capacity = $dbConnect->real_escape_string(strip_tags($_POST['capacity']));
							$enginecc = $dbConnect->real_escape_string(strip_tags($_POST['enginecc']));
							$startdate = $dbConnect->real_escape_string(strip_tags($_POST['startdate']));
							$fullnames = $dbConnect->real_escape_string(strip_tags($_POST['fullnames']));
							$idno = $dbConnect->real_escape_string(strip_tags($_POST['idno']));
							$email_address = $dbConnect->real_escape_string(strip_tags($_POST['emailaddress']));
							$address = $dbConnect->real_escape_string(strip_tags($_POST['address']));
							$phoneno = $dbConnect->real_escape_string(strip_tags($_POST['phoneno']));
							$end_date = date('Y-m-d',strtotime('+'.$validity.'days',strtotime($startdate)));
							
							$checkModel = "SELECT * FROM tbl_certificates WHERE vehicle_regno='$reg_no'";
							$c4b = mysqli_query($dbConnect,$checkModel);
							$bCheck = mysqli_num_rows($c4b);
							  
							$getvehicle = mysqli_query($dbConnect,"SELECT * FROM tbl_certificates WHERE vehicle_regno='$reg_no'");
							$bq = mysqli_fetch_array($getvehicle);
							
							if($bCheck>0){
								echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'><sup>&times;</sup></button>Vehicle Registration No $reg_no already exists</div>";
							}
							else {
								$addCert = "INSERT INTO tbl_certificates (vehicle_regno, vehicle_model, bodytype, yearmanufactured, chassis_number, seating_capacity, vehicle_type, start_date, full_names, id_number, email_address, address, phone_number, end_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
								if($stmt = $dbConnect->prepare($addCert)){
									$stmt->bind_param('ssssssssssssss', $reg_no, $model, $body, $yom, $chassis, $capacity, $enginecc, $startdate, $fullnames, $idno, $email_address, $address, $phoneno, $end_date);
									$stmt->execute();
									
									echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'><sup>&times;</sup></button>Certificate generated successfully</div>";
								}
								else {
									echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'><sup>&times;</sup></button>An error occured</div>";
								}
							}
							
						}
					}
					
					?>
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-car"></i> Vehicle Details</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput1">Vehicle Registration No</label>
                              <input type="text" id="userinput1" name="regno" class="form-control border-primary" placeholder="Registration No"
                              name="name">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput2">Model No</label>
                              <input type="text" id="userinput2" name="modelno" class="form-control border-primary" placeholder="Model No"
                              name="company">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput2">Body Type</label>
                              <input type="text" id="userinput2" name="bodytype" class="form-control border-primary" placeholder="Body Type"
                              name="company">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput4">Year of Manufacture</label>
                              <input type="text" id="userinput4" name="yom" class="form-control border-primary" placeholder="Year of Manufacture"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput4">Chassis Number</label>
                              <input type="text" id="userinput4" name="chassisno" class="form-control border-primary" placeholder="Chassis No"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput3">Seating Capacity</label>
                              <select class="form-control" name="capacity">
								<option value="">Select Capacity</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							  </select>
                            </div>
                          </div>
                        </div>
						<!-- Other vehicle details -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput4">Engine CC</label>
                              <input type="text" id="userinput4" name="enginecc" class="form-control border-primary" placeholder="Engine CC"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput4">Start Date</label>
                              <input type="date" id="userinput4" name="startdate" class="form-control border-primary" placeholder=""
                              name="nickname">                              
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="userinput3">Select Duration</label>
                              <select class="form-control" name="validity" required>
								<option value="">Select duration</option>
								<option value="30">30 Days</option>
								<option value="365">1 Year</option>
							  </select>
                            </div>
                          </div>
                        </div>
						<!-- Personal Details -->
                        <h4 class="form-section"><i class="ft-mail"></i>Personal Information</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput4">Full Names</label>
                              <input type="text" id="userinput4" name="fullnames" class="form-control border-primary" placeholder="Full Names"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="userinput4">ID Number</label>
                              <input type="text" id="userinput4" name="idno" class="form-control border-primary" placeholder="ID number"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="userinput4">Postal Address</label>
                              <input type="text" id="userinput4" name="address" class="form-control border-primary" placeholder="Postal Address"
                              name="nickname">
                            </div>
                          </div>
                        </div>
						
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput4">Email Address</label>
                              <input type="email" id="userinput4" name="emailaddress" class="form-control border-primary" placeholder="Email Address"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="userinput4">Phone Number</label>
                              <input type="text" id="userinput4" name="phoneno" class="form-control border-primary" placeholder="Phone Number"
                              name="nickname">
                            </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="reset" class="btn btn-warning mr-1"><i class="ft-x"></i> Clear</button>
                        <button type="submit" name="regVehicle" class="btn btn-primary"><i class="la la-check-square-o"></i> Submit Information</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include('templates/footer.php');?>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>
</html>