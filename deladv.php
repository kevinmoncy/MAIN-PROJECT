<?php
include("dbconnection.php");
 $log_id = $_GET['id'];

$sql="DELETE FROM `tbl_adv` WHERE login_id= $log_id ; ";

mysqli_query($con,$sql);


$sq="DELETE FROM `tbl_log` WHERE login_id= $log_id;";

mysqli_query($con,$sq);
header('location:viewadv.php',true, $permanent ? 301 : 302);
mysqli_close($con);
?>
