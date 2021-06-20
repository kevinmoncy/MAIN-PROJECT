<?php
include("dbconnection.php");

$id=isset($_POST['book_id']) ? $_POST['book_id'] : '';

$vid=isset($_POST['adname']) ? $_POST['adname'] : '';

$sql="insert into tbl_assign(`adv_id`,`book_id`) values($vid,$id)";


mysqli_query($con,$sql);


$sq="update `tbl_booking` set `status`=1, `adviser`= $vid where `book_id`=$id";

mysqli_query($con,$sq);
header('location:assign.php',true, $permanent ? 301 : 302);
mysqli_close($con);
?>
