<?php
include("dbconnection.php");

$Name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$Phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['user'];
$sql="insert into tbl_log(usertype,username,password,status) values( '$usertype','$username','$password','1')";

mysqli_query($con,$sql);
$n=mysqli_insert_id($con);

$sq="insert into tbl_adv(login_id,advname,advaddress,advemail,advphone) values($n,'$Name','$address','$email','$Phone')";

if(mysqli_query($con,$sq))
{
	
	
		header('location:reg_adv.php');
	

}
mysqli_close($con);
?>
