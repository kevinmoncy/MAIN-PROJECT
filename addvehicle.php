<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auto Genius</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style2.css">
    <!-- End layout styles -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="admin_index.php" style="color: white;font-size: 30px;font-weight: bolder;">Auto Genius</a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html">Auto Genius</a>
        </div>
        <ul class="nav">
             <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                </div>
              </div>
              
            </div>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="viewbookad.php">
              <span class="menu-icon">
               <i class="mdi mdi-format-align-justify"></i>
              </span>
              <span class="menu-title">View Bookings</span>
            </a>
          </li>
         <li class="nav-item menu-items">
            <a class="nav-link"  href="viewusers.php" >
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">View Users</span>
              
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="reg_adv.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Register Advisor</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="viewadv.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View Advisors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="assign.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Assign Advisor</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addvehicle.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Add vehicle</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="viewvehicle.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View vehicle</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="viewfinser.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Completed services</span>
            </a>
          </li>
            <li class="nav-item menu-items">
            <a class="nav-link" href="adminnotification.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
         
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            
           
            <ul class="navbar-nav navbar-nav-right">
              
               <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Reports</p>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="userreport.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">All Users</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="reportfinshedservices.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Completed services</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
             
             
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Settings</p>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="changepass.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Edit Password</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

<div class="container" style="padding-top: 100px;">
    <h1 style="padding-left: 450px;">Add Vehicle</h1>
    <hr>
  <div class="row" style="padding-left: 300px;">
      
      <!-- edit form column -->
      <div class="col personal-info">
        
        <form class="form-horizontal" role="form" method="post" action="vehicleadding.php">
          
          <div class="form-group">
            <label class="col-md-3 control-label">Vehicle name</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="name" id="name" value="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Service Charge</label>
            <div class="col-md-8">
              <input class="form-control" type="number" name="charge" id="charge" value="" required="">
            </div>
          </div>
          
          <div class="form-group" style="padding-left: 100px;">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? Auto Genius 2020</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>