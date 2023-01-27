<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin-viewcampaigncss.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="AdminDashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="AdminDashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Bloodstock
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="updatebloodstocks.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Update</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewbloodstocks.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Campaigns
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="CreateEvent.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Create</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="updateattendance.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Update Attendances</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admin-viewcampaign.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>View</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="AdminLogin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->

                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="profile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Main Content -->
                <div id="content">
                  <div class="hero">

                    <div class="container">
                    <div class="row">
                      <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                        <ul class="event-list">
                          <li>
                            <time datetime="2014-07-20">
                              <span class="day">4</span>
                              <span class="month">Jul</span>
                              <span class="year">2014</span>
                              <span class="time">ALL DAY</span>
                            </time>
                            <img alt="Independence Day" src="ppum.jpg" />
                            <div class="info">
                              <h2 class="title">Let's Donate 2023</h2>
                              <p class="desc">PPUM</p>
                              <ul>
                                <li style="width:33%;">133 <span class="glyphicon glyphicon-ok"></span></li>

                              </ul>
                            </div>

                          </li>

                          <li>
                            <time datetime="2014-07-20 0000">
                              <span class="day">8</span>
                              <span class="month">Jul</span>
                              <span class="year">2014</span>
                              <span class="time">12:00 AM</span>
                            </time>
                            <img alt="Blood" src="pic3.png" />
                            <div class="info">
                              <h2 class="title">HKL Open Day 2023</h2>
                              <p class="desc">Hospital Kuala Lumpur</p>
                              <ul>
                                <li style="width:33%;">159 <span class="glyphicon glyphicon-ok"></span></li>

                              </ul>

                            </div>

                          </li>

                          <li>
                            <time datetime="2014-07-20 2000">
                              <span class="day">20</span>
                              <span class="month">Jan</span>
                              <span class="year">2014</span>
                              <span class="time">8:00 PM</span>
                            </time>
                            <img alt="My 24th Birthday!" src="faruq.jpg" />
                            <div class="info">
                              <h2 class="title">Do Donate!</h2>
                              <p class="desc">Mahallah Faruq</p>
                              <ul>
                                <li style="width:33%;">298 <span class="glyphicon glyphicon-ok"></span></li>

                              </ul>
                            </div>

                          </li>

                          <li>
                            <time datetime="2014-07-31 1600">
                              <span class="day">31</span>
                              <span class="month">Jan</span>
                              <span class="year">2014</span>
                              <span class="time">4:00 PM</span>
                            </time>
                            <img alt="Disney Junior Live On Tour!" src="news8.jpg" />
                            <div class="info">
                              <h2 class="title">Jom Derma!</h2>
                              <p class="desc"> Klinik Kesihatan Gombak Setia</p>
                              <ul>
                                <li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>

                              </ul>
                            </div>
                          </li>

                          <li>
                            <time datetime="2014-07-20 2000">
                              <span class="day">20</span>
                              <span class="month">23</span>
                              <span class="year">2014</span>
                              <span class="time">8:00 PM</span>
                            </time>
                            <img alt="My 24th Birthday!" src="walkin.jpg" />
                            <div class="info">
                              <h2 class="title">Walk-In</h2>
                              <p class="desc">Desired Clinic</p>
                              <ul>


                              </ul>
                            </div>

                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>




                  </div>
    <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
