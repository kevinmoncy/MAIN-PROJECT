<?php
require('fun.php');
$con=connect();

if(sessioncheck() == true)
{
$vreg=$_POST['vreg'];
$vid=$_POST['vname'];
$vkm=$_POST['vkm'];
$date=date('Y-m-d',strtotime($_POST['date1']));
$time=$_POST['time1'];
$id=$_SESSION['loginid'];
echo $vreg,"   ", $vid,"  ",$vkm,"  ",$date,"  ",$time;

$q=mysqli_query($con,"SELECT * FROM `tbl_reg` WHERE `login_id`=$id") or die ("sigin in error");
$row=mysqli_fetch_array($q);
$regno=$row['reg_id'];

$q1="INSERT INTO `tbl_booking`( `login_id`, `reg_no`, `vehicle_id`, `date`, `time`, `mileage`,`adviser`) VALUES($id,'$vreg',$vid,'$date','$time',$vkm,3)";
if(mysqli_query($con,$q1))
{
    echo "success";?>
    <script>
alert("Booking Confirmed");
location.href="service_book.php";
</script>
<?php
}
else {
    echo "fail";
}
mysqli_close($con);


}
?>
