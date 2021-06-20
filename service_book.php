
<!DOCTYPE html>
<?php
require('fun.php');
session_start();
if(isset($_SESSION['loginid']))
{
?>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
.form-control{
  color: black;
}


</style>
  </head>
  <body>
 


    <!-- MAIN CONTENT -->

   <div class="container-fluid" >

    <!-- HEADER -->

    <section id="header" >

      <!-- NAVIGATION -->
      <nav class="navbar sticky-top" style=" background-color: black;">
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
              <li><a href="user_index.php">About</a></li>              
              <li><a href="user_index.php">Portfolio</a></li>
             <li><a href="user_index.php">Contact</a></li>

  <li><a href="service_book.php">Service Booking</a></li>
              <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">View</a>
              <div class="dropdown-content">
                <a href="status.php">Vechicle status</a>
                  <a href="user_fin.php">Finished Services</a>
              </div>
            </li>

             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Account</a>
              <div class="dropdown-content">
           <a href="viewacc.php">View Account</a>
                  <a href="Card-master/card.php">Card Details</a>
                <a href="logout.php">Logout</a>
              </div>
            </li>
              
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

     
    </section>
  </div>

    <!-- HEADER END -->
<div style="padding:50px;" class="container">
  <div id="content" class="container-fluid p-5">
        <section class="py-3">
          <!-- Highlights -->
          <div class="row">
            <div class="col-md-12">
          <div class="form-group">
          </div>
         
          <div class="row">


                  
                </div>
               <h1 class="mb-3" style="text-align: center;font-size: 50px;">Vehicle Details</h1>
               <form method="POST" action="book.php">

             <div class="form-group">
            <label for="exampleInputEmail">Vehicle Registration No</label>
            <input type="text" class="form-control" id="vreg" name="vreg" onkeypress="return /[0-9A-Z-]/i.test(event.key)" placeholder="KL-57-E-5678" required>
            </div>
<?php
$con=mysqli_connect("localhost","root","","car") or die("couldn't connect");
$q=$_SESSION['loginid'];
$q2="SELECT * FROM `tbl_vehicle`"; 
$result=mysqli_query($con,$q2);
?>
            <div class="form-group">
           <label for="exampleInputEmail5">Vehicle Name </label>
           <select type="text" class="form-control" name="vname" id="vname" required>
            <?php 
            while($row=mysqli_fetch_array($result))
              {
                ?>
                                <option value="<?php echo $row['vehicle_id']?>" ><?php echo $row['vehicle_name']?></option>
     <?php 
                               }
                ?>
                              </select>
           </div>

           <div class="form-group">
          <label for="vkm">Mileage</label>
          <input type="number" class="form-control" id="vkm" name="vkm"  placeholder="Kilometer Done" required>
          </div>
          <div class="form-group">
         <label for="date1">Date</label>
         <input type="date" class="form-control" id="date1" name="date1"   required>
         </div>
         <div class="form-group">
        <label for="time1">Time</label>
        <input type="time" class="form-control" id="time1" name="time1"   required>
        </div>

        <hr class="mb-4">
          <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" />
          </form>
            </div>
          </div>

        </section>
      </div>
</div>


    <!-- FOOTER CONTACT -->

   <!-- style=" position: fixed;left: 0;bottom: 0;width: 100%;" -->
    <section id="footer" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>AUTO GENIUS <i class="fa fa-heart"></i> <a href=""></a></p>
            <p><small></small></p>
          </div>
        </div>
      </div>
    </section>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main1.js"></script>
  </body>
</html>
<?php
}
else
{
  header("location:login.html");
}
?>