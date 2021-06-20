<?php
session_start();
   function redirectTo($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
if(isset($_SESSION['loginid']))
{
  echo $_SESSION['loginid'];
require('fun.php');
$con = connect();


$login_id=$_SESSION['loginid'];
$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$sql="update `tbl_adv` set `advname`='$name', `address`='$address', `email`='$email', `phone`=$phone where login_id=$login_id";
$sql2 = mysqli_query($con,$sql);
redirectTo('viewaccadv.php');
$error = "<center><h4><font color='green'>successfully changed!</h4></center></font>";

}
else
{
  header("location:viewaccadv.php");
}
?>