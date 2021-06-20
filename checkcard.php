<?php
session_start();
$userid=$_SESSION['loginid'];
require('fun.php');
$con=connect();
$sql="select card_num from bank_card_info_tbl where login_id='$userid'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
    if($row['card_num']=="")
        echo 0;
    else
    {
    echo 1;
    }
}

?>