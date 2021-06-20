<?php
session_start();
   function redirectTo($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
if(isset($_SESSION['loginid']))
{
  
require('fun.php');
$con = connect();


$login_id=$_SESSION['loginid'];
$currentpass = $_POST['old'] ;
  	$newpass = $_POST['new'];
  	$cnewpass = $_POST['renew'];
  $sql =  "SELECT `password` FROM `tbl_log` WHERE `login_id`= $login_id";
    $result = mysqli_query($con,$sql);
    if (!$result) die('check result will not get');

    while ($row = mysqli_fetch_array($result))
    {
    
      $pass = $row['password'];
     
      if ($currentpass != $pass) 
      {
        echo " <script>alert('Incorrect Current Password!'); </script>";
        echo "<script> window.location.href = 'changepass.php'; </script>";
      	  	
      }
      else if ($currentpass == $pass && $newpass == $cnewpass)
      {
      $s="UPDATE `tbl_log` SET `password`='$newpass' WHERE `login_id` =$login_id";
      $sql1 = mysqli_query($con, $s);
      $error = "<center><h4><font color='green'>Password successfully changed!</h4></center></font>";
      $user=$_SESSION['user'] ;
      if($user=='admin')
      {
         redirectTo('admin_index.php');
      }
      elseif ($user=='user') 
      {
        redirectTo('viewacc.php');
      }
      else{

        redirectTo('viewaccadv.php');
         }
      }
      
      else 
      {
        echo " <script>alert('Incorrect new Passwords!'); </script>";
        echo "<script> window.location.href = 'changepass.php'; </script>";
      	// $error = "<center><h4><font color='#FF0000'>New Password and Confirm Password does not match!</h4></center></font>";
      	
      }
    }
  }
 

  

else
{
  header("location:login.html");
}
?>