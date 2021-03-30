<?php
include("dbconnection.php");

$Name=$_POST['aname'];
$address=$_POST['aadd'];
$email=$_POST['aemail'];
$Phone=$_POST['aphone'];
$username=$_POST['auser'];
$password='12345678';
$usertype='adv';
$sql="insert into log_kvn(usertype,username,password,status)
values('$usertype','$username','$password','1')";

mysqli_query($con,$sql);
$n=mysqli_insert_id($con);

$sq="INSERT INTO `adv_kvn`(`login_id`, `name`, `address`, `phone`, `email`)
VALUES ($n,'$Name','$address','$email',$Phone)";
if(mysqli_query($con,$sq))
{
header('location:advisorreg.php');
}
mysqli_close($con);
?>
