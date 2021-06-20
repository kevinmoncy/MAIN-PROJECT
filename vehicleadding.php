<?php
include("dbconnection.php");

$Name=$_POST['name'];
$charge=$_POST['charge'];
$sql="insert into `tbl_vehicle`(`vehicle_name`,`ser_charge`) values( '$Name',$charge)";


if(mysqli_query($con,$sql))
{
header('location:addvehicle.php');
}
mysqli_close($con);
?>
