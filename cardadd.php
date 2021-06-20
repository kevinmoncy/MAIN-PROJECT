<?php
session_start();
if(isset($_SESSION['loginid']))
{
  require('fun.php');
     $con=connect();
  $tmpid=$_SESSION['loginid'];

  $cardnum=$_POST['cardnum'];


  $cardexp=$_POST['cardexp'];
  $cardname=$_POST['cardname'];
  $cardcvv=$_POST['cardcvv'];
    echo $tmpid,$cardnum,$cardexp,$cardname,$cardcvv;
  $sql="update bank_card_info_tbl set card_num='$cardnum',
  card_exp='$cardexp',card_holder_name='$cardname',
  card_cvv='$cardcvv',account_status='1' where login_id='$tmpid'";
  if(mysqli_query($con,$sql))
  {
    header("location:user_index.php");

  }
  else {
    header("location:Card-master/card.php");
  }
}
else
    {
        header("location:index.php");
    }
    ?>
