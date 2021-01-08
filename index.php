<?php include('templates/authenticate.php');?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard - <?php echo $sysName; ?> </title>
  <?php include('templates/header-styles.php');?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <?php include('templates/nav-bar.php');?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include('templates/menu.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Revenue</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row mb-1">
                    <div class="col-6 col-md-4">
                      <h5>Current week</h5>
                      <h2 class="danger">$82,124</h2>
                    </div>
                    <div class="col-6 col-md-4">
                      <h5>Previous week</h5>
                      <h2 class="text-muted">$52,502</h2>
                    </div>
                  </div>
                  <div class="chartjs">
                    <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                    <canvas id="lastYearRevenue" width="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-header bg-hexagons">
                    <h4 class="card-title">Hit Rate
                      <span class="danger">-12%</span>
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons">
                    <div class="card-body pt-0">
                      <div class="chartjs">
                        <canvas id="hit-rate-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content collapse show bg-gradient-directional-danger ">
                    <div class="card-body bg-hexagons-danger">
                      <h4 class="card-title white">Deals
                        <span class="white">-55%</span>
                        <span class="float-right">
                          <span class="white">152</span>
                          <span class="red lighten-4">/200</span>
                        </span>
                      </h4>
                      <div class="chartjs">
                        <canvas id="deals-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Order Value </h6>
                          <h3>$ 88,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-trophy success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Calls</h6>
                          <h3>3,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-call-in danger font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Revenue, Hit Rate & Deals -->
        <!-- Emails Products & Avg Deals -->
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Emails</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <p>Open rate
                    <span class="float-right text-bold-600">89%</span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="pt-1">Sent
                    <span class="float-right">
                      <span class="text-bold-600">310</span>/500</span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%"
                    aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Top Products</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a href="#">Show all</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <tbody>
                        <tr>
                          <th scope="row" class="border-top-0">iPone X</th>
                          <td class="border-top-0">2245</td>
                        </tr>
                        <tr>
                          <th scope="row">One Plus</th>
                          <td>1850</td>
                        </tr>
                        <tr>
                          <th scope="row">Samsung S7</th>
                          <td>1550</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center">Average Deal Size</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                      <h6 class="danger text-bold-600">-30%</h6>
                      <h4 class="font-large-2 text-bold-400">$12,536</h4>
                      <p class="blue-grey lighten-2 mb-0">Per rep</p>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                      <h6 class="success text-bold-600">12%</h6>
                      <h4 class="font-large-2 text-bold-400">$18,548</h4>
                      <p class="blue-grey lighten-2 mb-0">Per team</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Emails Products & Avg Deals -->
        <!-- Total earning & Recent Sales  -->
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-content">
                <div class="earning-chart position-relative">
                  <div class="chart-title position-absolute mt-2 ml-2">
                    <h1 class="display-4">$1,596</h1>
                    <span class="text-muted">Total Earning</span>
                  </div>
                  <canvas id="earning-chart" class="height-450"></canvas>
                  <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                    <a href="#" class="btn round btn-danger mr-1 btn-glow">Statistics <i class="ft-bar-chart"></i></a>
                    <span class="text-muted">for the <a href="#" class="danger darken-2">last year.</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="recent-sales" class="col-12 col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Sales</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="invoice-summary.html" target="_blank">View all</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content mt-1">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Product</th>
                        <th class="border-top-0">Customers</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Popularity</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">iPone X</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-4.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-5.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-6.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+8 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">iPad</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-7.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-8.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+5 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1190.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">OnePlus</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-1.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-2.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-3.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+3 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 999.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">ZenPad</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-11.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-12.png"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1150.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">Pixel 2</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-6.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-4.png"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1180.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total earning & Recent Sales  -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="#"
        target="_blank">Ben10 </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart red"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
  type="text/javascript"></script>
  <script src="app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>