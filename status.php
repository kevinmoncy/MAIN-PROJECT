<?php
session_start();
if(!isset($_SESSION['loginid']))
{

  header("location:login.html");
}
else{
 
function  createConfirmationmbox() {

    echo '<script type="text/javascript"> ';  
    echo ' function openulr(newurl) {';  
    echo '  if (confirm("Are you sure you want cancel your booking")) {';  
    echo '    document.location = newurl;';  
    echo '  }';  
    echo '}';  
    echo '</script>';  
}  
 
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

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
 body{
    margin-top:20px;
    background:#f3f3f3;
}

.card.user-card {
    border-top: none;
    -webkit-box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
    box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
    -webkit-transition: all 150ms linear;
    transition: all 150ms linear;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-header {
    background-color: transparent;
    border-bottom: none;
    padding: 20px;
}

.card .card-header h5 {
    margin-bottom: 0;
    color: #222;
    font-size: 25px;
    font-weight: 600;
    display: inline-block;
    margin-right: 10px;
    line-height: 1.4;
}
h6{
   font-size: 15px;
   font-weight: 100;
   /*font-family: "Sofia", sans-serif;*/
}
.card .card-header+.card-block, .card .card-header+.card-block-big {
    padding-top: 0;
}

.user-card .card-block {
    text-align: center;
}

.card .card-block {
    padding: 20px;
}

.user-card .card-block .user-image {
    position: relative;
    margin: 0 auto;
    display: inline-block;
    padding: 5px;
    width: 110px;
    height: 110px;
}

.user-card .card-block .user-image img {
    z-index: 20;
    position: absolute;
    top: 5px;
    left: 5px;
        width: 100px;
    height: 100px;
}

.img-radius {
    border-radius: 50%;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-25 {
    margin-top: 25px;
}

.m-t-15 {
    margin-top: 15px;
}

.card .card-block p {
    line-height: 1.4;
}

.text-muted {
    color: #919aa3!important;
}

.user-card .card-block .activity-leval li.active {
    background-color: #2ed8b6;
}

.user-card .card-block .activity-leval li {
    display: inline-block;
    width: 15%;
    height: 4px;
    margin: 0 3px;
    background-color: #ccc;
}

.user-card .card-block .counter-block {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}

.m-t-10 {
    margin-top: 10px;
}

.p-20 {
    padding: 20px;
}

.user-card .card-block .user-social-link i {
    font-size: 30px;
}

.text-facebook {
    color: #3B5997;
}

.text-twitter {
    color: #42C0FB;
}

.text-dribbble {
    color: #EC4A89;
}

.user-card .card-block .user-image:before {
    bottom: 0;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
}

.user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
    content: "";
    width: 100%;
    height: 48%;
    border: 2px solid #4099ff;
    position: absolute;
    left: 0;
    z-index: 10;
}

.user-card .card-block .user-image:after {
    top: 0;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
}

.user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
    content: "";
    width: 100%;
    height: 48%;
    border: 2px solid #4099ff;
    position: absolute;
    left: 0;
    z-index: 10;
}
#adv{
  color: red;
  font-weight:bold;
}

</style>
<?php  
createConfirmationmbox();  
?> 
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
              <a href="user_fin.php">FInished Services</a>
              </div>
            </li>

             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Account</a>
              <div class="dropdown-content">
                <a href="viewacc.php">View Account</a>
                  <a href="Card-master/card.php" >Card Details</a>
                <a href="logout.php">Logout</a>
              </div>
            </li>
              
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

     
    </section>

    <!-- HEADER END -->
<div  style="padding:50px; padding-top: 60px;">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"><center>
  <form action="cancelbook.php" method="post">
  <?php
$con=mysqli_connect("localhost","root","","car") or die("couldn't connect");
$q=$_SESSION['loginid'];

$q2="SELECT * FROM `tbl_booking` b, `tbl_vehicle` v, `tbl_reg` r, `tbl_adv` a WHERE b.login_id=r.login_id AND v.vehicle_id=b.vehicle_id AND b.adviser=a.adv_id AND b.login_id=$q and b.status!=4"; 
$result=mysqli_query($con,$q2) or die( mysqli_error($con));

if(mysqli_num_rows($result)==0)
{
?>
<div class="container" style="padding-top: 300px;">
<h1 style="font-weight: bolder;">PLEASE BOOK FOR A SERVICE </h1>
  </div>
  <?php
}
else
{
?>

<div class="container" >
  <h1>ALL BOOKINGS</h1>
  
    <div class="row">
        <?php
  $i=1;
  while ($row = mysqli_fetch_array($result))
    {

    
  ?>
        <div class="col-md-4">

            <div class="card user-card">
                <div class="card-header" style="padding: 5px;">
                    <h5>BOOKING NO:<?php echo $i; $i=$i+1;?></h5>
                </div>
                <div class="card-block">
                      <div class="row">
<!--
                         <div class="col-md-7">
                          <h6 class="f-w-600 m-t-25 m-b-10">BOOKING ID</h6>
                        </div>
                        <div class="col-md-4">
                          <h6 class="f-w-600 m-t-25 m-b-10"> <?php echo $row['book_id']; ?></h6>
                          <input type="hidden" name="book_id" id="book_id" value="<?php echo $row['book_id']; ?>">
                        </div>
-->
                      </div>
                       <div class="row">
                         <div class="col-md-7">
                          <h6 class="f-w-600 m-t-25 m-b-10">REGISTRATION NUMBER</h6>
                        </div>
                        <div class="col-md-4">
                          <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $row['reg_no']; ?></h6>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-7">
                          <h6 class="f-w-600 m-t-25 m-b-10">DATE</h6>
                        </div>
                        <div class="col-md-4">
                          <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $row['date']; ?></h6>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-7">
                          <h6 class="f-w-600 m-t-25 m-b-10">TIME SLOT</h6>
                        </div>
                        <div class="col-md-4">
                          <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $row['time']; ?></h6>
                        </div>
                      </div>
                       

                            <?php 
                            $status= $row['status']; 
                              if ($status==0) 
                              {
                                ?>
                                 <div class="row">
                                 <h6 class="f-w-600 m-t-25 m-b-10">Status</h6>
                                 <h6 class="f-w-600 m-t-25 m-b-10" style="color: blue;"><?php
                                echo "your booking is confirmed please wait for your adviser assignment";
                                ?>
                                 </h6>
                       
                                </div>

                                <div class="row">
                                  <div class ="confirm">  
                                    <?php 
                                    $_SESSION['book_id'] = $row['book_id'];?>
                                  <strong>  <b> <a href="javascript:openulr('cancelbook.php?id=<?php echo $row['book_id']; ?>');" class="btn btn-primary button1"> Confirm to cancel <input type="hidden" name="book_id" id="book_id" value="<?php echo $row['book_id']; ?>"> </a> </b> </strong>  
                                  </div>  
                              </div>
                            <?php
                              }
                              
                                
                              elseif ($status==1) {
                                 ?>
                                 <div class="row">
                                 <h6 class="f-w-600 m-t-25 m-b-10">Status</h6>
                                 <h6 class="f-w-600 m-t-25 m-b-10" style="color: blue;">
                                  <?php
                                echo "   please wait for your service update <br>";
                                echo "<h6 id='adv'>"."Adviser Name: ".$row['advname'] . "<br>"."Contact Number: ".$row['advphone']."</h6>";
                                ?>
                                </h6>
                       
                                </div>

                                <div class="row">
                                  <div class ="confirm">  
                                    <?php 
                                    $_SESSION['book_id'] = $row['book_id'];?>
                                  <strong>  <b> <a href="javascript:openulr('cancelbook.php?id=<?php echo $row['book_id']; ?>');" class="btn btn-primary button1"> Confirm to cancel <input type="hidden" name="book_id" id="book_id" value="<?php echo $row['book_id']; ?>"> </a> </b> </strong>  
                                  </div>  
                              </div>
                            <?php
                              }
                              elseif ($status==2) {
                                echo "your vehicle is being serviced please wait for it to finish<br>";
                                echo "<h6 id='adv'>"."Adviser Name: ".$row['advname'] . "<br>"."Contact Number: ".$row['advphone']."</h6>";
                              }
                                elseif ($status==3) {
                                  ?>
                                 <div class="row">
                                 <h6 class="f-w-600 m-t-25 m-b-10">Status</h6>
                                 <h6 class="f-w-600 m-t-25 m-b-10" style="color: blue;">
                                  <?php
                                echo "your service has been completed";
                                ?>
                                </h6>
                       
                                </div>

                                <div class="row">
                                   <div class ="confirm">  
                                    <?php 
                                    $_SESSION['book_id'] = $row['book_id'];
                                       $bookid= $row['book_id'];?>
                                  <strong>  <b><!-- <a href="userpayment.php?id=<?php// echo $row['book_id']; ?>" class="btn btn-danger button1"> --><a href="" onclick="checkcard();" class="btn btn-danger button1">Payment <input type="hidden" name="book_id" id="book_id" value="<?php echo $row['book_id']; ?>"> </a> </b> </strong>  
                                  </div>  
                                 <!--  <div class ="confirm">  
                                    <?php 
                                    $_SESSION['book_id'] = $row['book_id'];?>
                                  <strong>  <b> <a href="userbill.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger button1"> View Bill <input type="hidden" name="book_id" id="book_id" value="<?php echo $row['book_id']; ?>"> </a> </b> </strong>  
                                  </div>   -->
                              </div>
                                  <?php
                                }
                                # code...
                              

                            ?>
                       
                    
                   
                
            </div>



            


        </div>
      </div>
        <?php
}}
?>
        
       </center>
</form>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">
function checkcard()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function()
  {
    
    if (this.readyState == 4 && this.status == 200)
    {
      console.log("yes : status and state are okay");
      
        console.log(this.responseText);
      if(parseInt(this.responseText)==0)
        {
          
            alert("Add card to initiate payment");
            
        }
          else if(parseInt(this.responseText)==1)
          {
              
              window.location.assign("userpayment.php?id=<?php echo $bookid; ?>");

          }
        else
            {
                alert("ERROR");
            }
    }
    
  };
         xhttp.open("GET", "checkcard.php", true);
         xhttp.send();
}
</script>

</div>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main1.js"></script>
  </body>
</html>
<?php
}

?>