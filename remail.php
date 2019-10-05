<?php
if(isset($_POST['subt']))
{
	include('config.php');
$email=$_POST['email'];
$query=mysqli_query($con,"select * from registration where id='$id'");
$row=mysqli_fetch_assoc($query);
                    $tdate=$row['tdate'];
	          		$name= $row['name'];
					$contact = $row['contact'];
					$address= $row['address'];
					$pincode= $row['pincode'];
					$vtype= $row['vtype'];
					$vmodel= $row['vmodel'];
					$vregno= $row['vregno'];
					$sdetails= $row['sdetails'];
					$bookdt= $row['bookdt']; 
                    $booktime= $row['booktime'];
					$comments=$row['comments'];
					$status=$row['status'];
					$bookingno=$row['bookingno'];
if($row)
{
//echo "password successfully mailed";
//include('sdetails.php');
i//nclude('insertsd.php');
//include('action1.php');

}
else
{
echo "error";
}
}
?>

