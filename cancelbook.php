
<?php
include("dbconnection.php");
$book_id=$_GET['id'];

$sql="delete from `tbl_booking` where book_id=$book_id";
if(mysqli_query($con,$sql))
{?>
 <script>
alert("Booking Canceled");
location.href="user_index.php";
</script><?php
// header('location:user_index.php');
}

?>