<?php
session_start();
if(!isset($_SESSION['loginid']))
{

  header("location:login.html");
}
else{

  ?>
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
    <style type="text/css">
   #t{
        
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="admin_index.php" style="color: white;font-size: 30px;font-weight: bolder;">Auto Genius</a>
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
include("dbconnection.php");

$bid=$_POST['book_id'];
$name=$_POST['name'];
$reg_no=$_POST['reg_no'];
$vehicle_name=$_POST['vehicle_name'];
$date=$_POST['date'];
$vid=$_POST['vid'];
$_SESSION['bid']=$bid;
$ser_charge=$_POST['ser_charge'];

 $id=$_SESSION['loginid'];
$sq="update `tbl_booking` set `status`=2 where `book_id`=$bid"; // for attending
mysqli_query($con,$sq);
?>  <form action="bill.php" method="post">
<h1 style="padding-left: 100px;padding-right: 100px;padding-top: 30px;">
  <center><h1>BOOKING DETAILS</h1></center>
<table class="table table-hover" style="color: white;">
  <tr>
<!--    <input type="hidden" name="book_id" value="$_POST['book_id'].value"> -->
    <td id="t" > BOOKING ID</td >
    <td id="t"> <?php echo $bid; ?></td >
  </tr>
   <tr>
    <td id="t"> CUSTOMER NAME</td >
    <td id="t"> <?php echo $name; ?></td >
  </tr>
   <tr>
    <td id="t"> VEHICLE REGISTRATION NUMBER</td >
    <td id="t"><?php echo $reg_no; ?> </td >
  </tr>
   <tr>
    <td id="t"> VEHICLE MODEL</td >
    <td id="t"> <?php echo $vehicle_name; ?></td>
  </tr>
   <tr>
    <td id="t"> BOOKING DATE</td>
    <td id="t"> <?php echo $date; ?></td>
  </tr>
   
   <tr>
    <td id="t"> SERVICE CHARGE</td >
    <td id="t"> <?php echo $ser_charge; ?></td>
  </tr>
  <tr>
    <td id="t"> ADDITIONAL CHARGE</td >
    <td id="t"> <input type="NUMBER" value="0" name="addcharge"></td >
  </tr>
</table></h1>
<center><input type="submit" class="btn btn-primary btn-icon-text" name="fin" value="COMPLETED SERVICE" style="padding: 20px;"></center>
</form>
          </div>

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