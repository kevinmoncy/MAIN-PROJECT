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
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AUTO GENIUS</title>

    <link rel="stylesheet" href="css/bootstrap1.min.css"/>
    <link rel="stylesheet" href="css/font-awesome1.min.css"/>
    <link rel="stylesheet" href="css/animate1.css"/>

    <link rel="stylesheet" href="css/style1.css" />

    <script type="text/javascript" src="js/jquery1-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap1.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="js/plugins1.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<style type="text/css">
  
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
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
  <div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>


    <!-- MAIN CONTENT -->

   <div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">AUTO GENIUS</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="user_index.php">Home</a></li>
              <li><a href="#about">About</a></li>              
              <li><a href="#portfolio">Portfolio</a></li>
             <li><a href="#contact">Contact</a></li>

             <li><a href="service_book.php">Service Booking</a></li>
              <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">View</a>
              <div class="dropdown-content">
                <a href="status.php">Vechicle status</a>
              </div>
            </li>
             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Account</a>
              <div class="dropdown-content">
                <a href="viewacc.php">View Account</a>
                <a href="logout.php">Logout</a>
              </div>
            </li>
              
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

     
    </section>

    <!-- HEADER END -->
<div style="padding-top: 100px;">
  

<div class="content-wrapper">

<div class="container-fluid" >
   
<?php
  require('fun.php');
      $con=connect();
       $bid=$_GET['id'];
       $id=$_SESSION['loginid'];
$sq="update `tbl_booking` set `status`=4 where `book_id`=$bid"; // for payment
mysqli_query($con,$sq);
     
     // $add=$_POST[ 'addcharge'];
  $q2="SELECT * FROM `tbl_reg` r, `tbl_booking` b,`tbl_vehicle` v ,`tbl_bill` bi WHERE bi.book_id= b.book_id AND r.login_id=b.login_id and b.book_id=$bid and v.vehicle_id=b.vehicle_id";
  $result=mysqli_query($con,$q2) or die( mysqli_error($con));
 
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
                                
                      echo $row['bill_id'];     ?><br />
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

          <td><?php echo $row['addcharge']; ?></td>
        </tr>

        <tr class="item last">
          <td>GST</td>

          <td>100</td>
        </tr>

        <tr class="total">
          <td></td>

          <td>Total:<?php echo $row['charge']; ?> </td>
        </tr>
      </table>
    </div>
  </body>
</html>
  <?php
 }
 //  $d3=date('Y-m-d');
 // $q2="insert into `tbl_bill`(book_id,date,charge) values($bid,'$d3',$total)";
 //  $result=mysqli_query($con,$q2) or die( mysqli_error($con));
 ?>
      </div>
<div style="padding: 10px;">
  <center><button class="btn" id="btnExport" ><i class="fa fa-download"></i> Download</button></center>



</div>

  
</div>


    <!-- FOOTER CONTACT -->

   
   

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main1.js"></script>
  </body>
</html>
<?php
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
                    pdfMake.createPdf(docDefinition).download("Bill.pdf");
                }
            });
        });
    </script>