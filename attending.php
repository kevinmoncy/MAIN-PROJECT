<?php
session_start();
if(!isset($_SESSION['loginid']))
{

  header("location:login.html");
}
else{

  ?><!DOCTYPE html>
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
          <a class="sidebar-brand brand-logo" href="index_adv.php" style="color: white;font-size: 30px;font-weight: bolder;">Auto Genius</a>
          <a class="sidebar-brand brand-logo-mini" href="index_adv.php">Auto Genius</a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Advisor</h5>
                </div>
              </div>
              
            </div>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="viewbookadvisor.php">
              <span class="menu-icon">
               <i class="mdi mdi-format-align-justify"></i>
              </span>
              <span class="menu-title">View Bookings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="attending.php">
              <span class="menu-icon">
               <i class="mdi mdi-format-align-justify"></i>
              </span>
              <span class="menu-title">Attending Services</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="finished.php">
              <span class="menu-icon">
               <i class="mdi mdi-format-align-justify"></i>
              </span>
              <span class="menu-title">Finished Services</span>
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
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Settings</p>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="viewaccadv.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">View Profile</p>
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
<?php
$con=mysqli_connect("localhost","root","","car") or die("couldn't connect");
$q=$_SESSION['loginid'];
// echo $q;
$q2="SELECT b.book_id, r.name, b.reg_no,v.vehicle_name, b.date,b.time,b.mileage,a.advname,b.adviser, v.ser_charge FROM `tbl_booking` b, `tbl_vehicle` v, `tbl_reg` r, `tbl_adv` a WHERE b.login_id=r.login_id AND v.vehicle_id=b.vehicle_id AND a.adv_id=b.adviser AND b.status=2 AND a.login_id=$q"; 
$result=mysqli_query($con,$q2) or die( mysqli_error($con));
$result=mysqli_query($con,$q2) or die( mysqli_error($con));
if(mysqli_num_rows($result)==0)
{
?>
<div class="container" style="padding: 200px; padding-left: 350px;">
<h1 style="font-weight: bolder;">NO ATTENDING SERVICES</h1>
  </div>
  <?php
}
else
{
?>
<form method="post" action="attend.php">
<div class="col grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service Bookings</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Booking ID</th>
                            <th>Customer Name</th>
                            <th>Vehicle Registration Number</th>
                            <th>Vehicle Model</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Vehicle Mileage</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           while ($row = mysqli_fetch_array($result))
                         {
                          ?>
                          <tr style="font-size: 30px; font-weight: bold;">
                            <td>
                              <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
                              <?php echo $row['book_id']; ?></td>

                            <td><?php echo $row['name']; ?></td>
                             <input type="hidden" name="name" value="<?php echo $row['name']; ?>">

                            <td><?php echo $row['reg_no']; ?></td>
                             <input type="hidden" name="reg_no" value="<?php echo $row['reg_no']; ?>">

                            <td><?php echo $row['vehicle_name']; ?></td>
                             <input type="hidden" name="vid" value="<?php echo $row['vehicle_id']; ?>">

                             <input type="hidden" name="vehicle_name" value="<?php echo $row['vehicle_name']; ?>">

                            <td><?php echo $row['date']; ?></td>
                             <input type="hidden" name="date" value="<?php echo $row['date']; ?>">
                             <td>
                              <?php echo $row['time']; ?>
                            <input type="hidden" name="ser_charge" value="<?php echo $row['ser_charge']; ?>">
                             </td>
                              <td><?php echo $row['mileage']; ?></td>
                              <td>  <input type="submit" class="btn btn-primary btn-icon-text" name="assign" value="Finish"></td>
                             
                          </tr>
                          <?php
                            }}
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div></form>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Auto Genius 2020</span>
              
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
<?php
}

?>