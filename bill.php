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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }

      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
      }

      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }

      .invoice-box table tr td:nth-child(2) {
        text-align: right;
      }

      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }

      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }

      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }

      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }

      .invoice-box table tr.item.last td {
        border-bottom: none;
      }

      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }

      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }

        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }

      /** RTL **/
      .invoice-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      }

      .invoice-box.rtl table {
        text-align: right;
      }

      .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
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
                  <a class="dropdown-item preview-item" href="changepass.php">
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

<div class="container-fluid" >
   <h1 style="text-align: center;padding: 10px;">Customer Details</h1> 
<?php
  require('fun.php');
      $con=connect();
       $bid=$_SESSION['bid'];
       $id=$_SESSION['loginid'];
$sq="update `tbl_booking` set `status`=3 where `book_id`=$bid"; // for attending
mysqli_query($con,$sq);
     
     $add=$_POST[ 'addcharge'];
  $q2="SELECT * FROM  `tbl_reg` r, `tbl_booking` b,`tbl_vehicle` v  WHERE r.login_id=b.login_id and b.book_id=$bid and v.vehicle_id=b.vehicle_id";
  $result=mysqli_query($con,$q2) or die( mysqli_error($con));;
 
   while ($row = mysqli_fetch_array($result))
  {
                          ?>

 

    <div class="invoice-box" style="background-color: white;color: black;"  id="d1">
      <table cellpadding="0" cellspacing="0">
        <tr class="top">
          <td colspan="2">
            <table>
              <tr>
                <td class="title">
                  <h1 style="width: 100%; max-width: 300px" > AUTO GENIUS</h1> 
                </td>

                <td>
                  Invoice #:
                  <?php 
                  $q3="SELECT max(bill_id)+1 as bill_id FROM  `tbl_bill`";
  $r=mysqli_query($con,$q3) or die( mysqli_error($con));;
 
   while ($r1 = mysqli_fetch_array($r))
  {
                          
                      echo $r1['bill_id'];     }?><br />
                  Created: <?php echo date("Y/m/d") ?><br />
                  Due: <?php echo date("Y/m/d") ?>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <tr class="information">
          <td colspan="2">
            <table>
              <tr>
                <td>
                  Auto Genius, Inc.<br />
                 Edapalli,Kochi<br />
                  +919544627462
                   autogenius@gmail.com
                </td>

                <td>
                 <?php echo $row['name']; ?>.<br />
                  <?php echo $row['address']; ?><br />
                  <?php echo $row['phone']; ?><br />
                  <?php echo $row['email']; ?>

                </td>
              </tr>
            </table>
          </td>
        </tr>

       

        <tr class="heading">
          <td>Item</td>

          <td>Price</td>
        </tr>

        <tr class="item">
          <td>Service Charge</td>

          <td> <?php echo $row['ser_charge']; ?></td>
        </tr>

        <tr class="item">
          <td>Additional charge</td>

          <td><?php echo $add; ?></td>
        </tr>

        <tr class="item last">
          <td>GST</td>

          <td>100</td>
        </tr>

        <tr class="total">
          <td></td><?php
          $t=$row['ser_charge'];
$total=$t+ $add+100;?>
          <td>Total:<?php echo $total; ?> </td>
        </tr>
      </table>
    </div>
  </body>
</html>
  <?php
 }
  $d3=date('Y-m-d');
 $q2="insert into `tbl_bill`(book_id,date,addcharge,charge) values($bid,'$d3',$add,$total)";
  $result=mysqli_query($con,$q2) or die( mysqli_error($con));
 ?>
      </div>
<div style="padding: 20px;">
  <center><button class="btn" id="btnExport" ><i class="fa fa-download"></i> Export</button></center>



</div>
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
</html><?php
}

?>
<script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#d1')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("bill.pdf");
                }
            });
        });
    </script>

