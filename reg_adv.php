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

<form method="POST" action="addadv.php">
                 <center>
                 <div style="padding-top: 50px; font-size: 50px; font-weight: bold;">ADVISOR REGISTRATION FORM</div> 
                 <center><a style="font-size: 20px; font-weight: bold;" href="login.html">Login Page</a></center>
                 <div style="padding: 10px;"></div>
                 <table >
                  <tr>
                      <td><label for="txt1"> Name</label></td>
                      <td><input type="text" id="txt1" class="form-control" name='name' placeholder="First name" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required autofocus="autofocus" onblur="myname()"><br><span id = "consid"></span></td>
                  </tr>
                  <tr>
                      <td> <label for="textarea1">Address</label></td>
                      <td> <input type="textarea"  id="textarea1" class="form-control" name='address' onkeypress="return /[a-zA-Z(), ]/i.test(event.key)" placeholder="Address" required onblur="myaddress()"><br>
                      <span id = "consid3"></span></td><br><br>
                  </tr>
                  <tr>
                      <td><label for="inputEmail">Email address</label></td>
                      <td><input type="email" id="inputEmail" class="form-control" name='email' placeholder="Email address" required onblur=" myemail()"><br>
                      <span id = "consid4"></span></td>
                  </tr>
             <tr>
                 <td>
                   <label for="phno">Phone</label>
                 </td>
                 <td>
              <input type="text" id="phno" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Phone" name='phone' required onblur="myphno()"><br>
              <span id = "consid6"></span></td>
             </tr>
                 <tr>
                    <td>
                     <label for="txt6">UserName </label>
                    </td>
                     <td>
                         <input type="text"  id="txt6" class="form-control" name='username' placeholder="UserName" required onblur="myusername()"><br>
                          <span id = "consid5"></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="txt7">Password</label>
                     </td>
                     <td>
                        <input type="password" id="txt7" class="form-control" name='password' placeholder="Password" required onblur="mypassword()"><br>
                        <span id = "consid7"></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="txt8">Confirm password</label>
                     </td>
                     <td>
                       <input type="password" id="txt8" class="form-control" placeholder="Confirm password" required onblur="mycpassword()"><br>
                       <span id = "consid8"></span>
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2">
                      <input type="hidden" name="user" id="user" value="adviser">
                         <center><button class="btn btn-primary btn-block" href="login.html">Register</button></center>
                     </td>
                 </tr>
          </table>
       </center>
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