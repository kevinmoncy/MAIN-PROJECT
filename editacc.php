<?php
session_start();
if(isset($_SESSION['loginid']))
{
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
.form-group{
  color: black;
  font-size: 20px;
}
.form-control{
  color: black;
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
              <li><a href="user_index.php">About</a></li>              
              <li><a href="user_index.php">Portfolio</a></li>
             <li><a href="user_index.php">Contact</a></li>

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
               <a href="editpass.php">Change Password</a>
                <a href="logout.php">Logout</a>
              </div>
            </li>
              
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

     
    </section>
 <?php
$con=mysqli_connect("localhost","root","","car") or die("couldn't connect");
$q=$_SESSION['loginid'];
$q2="SELECT * FROM `tbl_reg` WHERE `login_id`=$q";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>
    <!-- HEADER END -->
<div class="container" style="padding-top: 100px; padding-left: 200px;">
<div class="container">
    <h1 style="padding-left: 300px;">Edit Profile</h1>
    <hr>
  <div class="row">
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <form class="form-horizontal" role="form" method="post" action="updateacc.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" id="name" required="" value="<?php echo $row['name']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="address" id="address"  required="" value="<?php echo $row['address']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="email" id="email" required="" value="<?php echo $row['email']; ?>" >
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" id="phone" required="" value="<?php echo $row['phone']; ?>" >
            </div>
          </div>
         
          <div class="form-group" style="padding-left: 100px;">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
<!--              <input type="reset" class="btn btn-default" value="Cancel">-->
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
  
</div>
<?php
}
?>
</div>

    <!-- FOOTER CONTACT -->

   
   

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