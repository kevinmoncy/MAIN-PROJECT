<?php
session_start();
$userid=$_SESSION['loginid'];
require('fun.php');
    
if(!isset($_SESSION['loginid']))
{
    
    
  header("location:login.html");
}
else{
    $id=$_SESSION['loginid'];
$bid=$_GET['id'];
// echo $bid;
// echo $id;
    $total=0;?>
    <!DOCTYPE html>
<html>
<head>
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <style type="text/css">
        body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
 background-image: url(" images/p-1.jpg");
    font-size: 0.8rem
}

.card {
    max-width: 1000px;
    margin: 2vh
}

.card-top {
    padding: 0.7rem 5rem
}

.card-top a {
    float: left;
    margin-top: 0.7rem
}

#logo {
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 1.6rem
}

.card-body {
    padding: 0 5rem 5rem 5rem;
    background-image: url("https://i.imgur.com/4bg1e6u.jpg");
    background-size: cover;
    background-repeat: no-repeat
}

@media(max-width:768px) {
    .card-body {
        padding: 0 1rem 1rem 1rem;
        background-image: url("https://i.imgur.com/4bg1e6u.jpg");
        background-size: cover;
        background-repeat: no-repeat
    }

    .card-top {
        padding: 0.7rem 1rem
    }
}

.row {
    margin: 0
}

.upper {
    padding: 1rem 0;
    justify-content: space-evenly
}

#three {
    border-radius: 1rem;
    width: 22px;
    height: 22px;
    margin-right: 3px;
    border: 1px solid blue;
    text-align: center;
    display: inline-block
}

#payment {
    margin: 0;
    color: blue
}

.icons {
    margin-left: auto
}

form span {
    color: rgb(179, 179, 179)
}

form {
    padding: 2vh 0
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.header {
    font-size: 1.5rem
}

.left {
    background-color: #ffffff;
    padding: 2vh
}

.left img {
    width: 2rem
}

.left .col-4 {
    padding-left: 0
}

.right .item {
    padding: 0.3rem 0
}

.right {
    background-color: #ffffff;
    padding: 2vh
}

.col-8 {
    padding: 0 1vh
}

.lower {
    line-height: 2
}

.btn {
    background-color: rgb(23, 4, 189);
    border-color: rgb(23, 4, 189);
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

input[type=checkbox] {
    width: unset;
    margin-bottom: unset
}

#cvv {
    background-image: linear-gradient(to left, rgba(200, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}

#cvv:hover {}
    </style>
    <title></title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>

<div class="card">

    <form  method="post">
    <div class="card-top border-bottom text-center"> <a href="index.php"> Back to shop</a> <span id="logo">Auto Genius</span> </div>
    <div class="card-body">
        <div class="row upper">  <span><i class="fa fa-check-circle-o"></i> Order details</span> <span id="payment"><span id="three">3</span>Payment</span> </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left border">
                    <div class="row"> <span class="header">Payment</span>
                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
                    <?php
                               $con=connect();
                                $sql2="select * from bank_card_info_tbl where login_id='$userid'";
                                $res2=mysqli_query($con,$sql2);
                                while($row2=mysqli_fetch_array($res2))
                                {
                                            $cvv=$row2['card_cvv'];
                                 ?>
 <form> <span>Cardholder's name:</span> <input placeholder="Card holder name" required  value=<?php echo $row2['card_holder_name']; ?> disabled>
                     <span>Card Number:</span> <input placeholder="card number" required value="<?php echo $row2['card_num']; ?>" disabled >
                        <div class="row">
                            
                            <div class="col-4"><span>Expiry date:</span> <input placeholder="YY/MM" value=<?php echo $row2['card_exp'];} ?> required disabled> </div>
                            <div class="col-4"><span>CVV:</span> <input id="cvv" required="" oninput="checkcvv(this);"> </div>
                        </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right border">
                    <div class="header">Payment Summary</div>
                    
                                            <?php
                        require("dbconnection.php");


$q2="SELECT * FROM `tbl_booking` b, `tbl_vehicle` v, `tbl_reg` r, `tbl_adv` a, tbl_bill i WHERE b.login_id=r.login_id AND v.vehicle_id=b.vehicle_id AND b.adviser=a.adv_id AND b.login_id=$id and b.status!=4 and b.book_id=$bid AND i.book_id=b.book_id";

$result=mysqli_query($con,$q2);

while ($row = mysqli_fetch_array($result))
{




?>
                    <div class="row item">
                     
                        <div class="col" >
                            <div class="row">
                                <table>
                                    <tr>
                                        <td >
                                             BOOKING ID 
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php echo $row['book_id']; ?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Booking Date
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php echo $row['date']; ?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                           Customer Name
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php echo $row['name']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Customer number
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php echo $row['phone']; ?>
                                        </td>
                                    </tr>
                                </table>
                                    
                                </div>
                                
                                    
                               
                            </div>
                            
                           
                        </div>
                    </div>

                    <hr>
                    
                   
                    <div class="row lower">
                        <div class="col text-left"><b>Total to pay</b></div>
                        <div class="col text-right"><b> <?php echo " ".$row['charge']." /-"; ?></b></div>
                    </div>
                    <input type="button" class="btn" name="" id="confirmbtn" onclick="confirmpayment()" value="Place order" disabled>
                    <!-- <a class="btn" href="placeorder.php?total=<?php echo  $total; ?>">Place order</a> -->
                    
                    <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div> </div>
</div>
</body>
</html>
<?php
}
}


?>
<script>
    function confirmpayment()
    {
        var inputcvv=document.getElementById("cvv").value;
        var cvv=<?php echo $cvv ?>;
        if(inputcvv==cvv)
            {
               window.location.assign("userbill.php?id=<?php echo $bid; ?>");
                
            }
        else{
            alert("failed");
        }
        
    }
  function checkcvv(cvv)
{
  var value = cvv.value;
  if(value.length==3)
  {
    document.getElementById("confirmbtn").disabled=false;

  }
  else
  {
    document.getElementById("confirmbtn").disabled=true;
  }

}
 function logout()
 {
         var x=confirm("Click ok  to logout");
         if(x===true)
         {


             window.location.assign("logout.php");


         }
         else
         {
             return false;
         }
 }
 </script>
