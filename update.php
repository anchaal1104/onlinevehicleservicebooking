<?php
include('config.php');
$status = $_POST['status'];
$comments= $_POST['comments'];

//$bookingdt= $_POST['bookingdt'];
//$bookingtime = $_POST['bookingtime'];
$id=$_POST['id'];
$query=mysqli_query($con,"update registration set status='$status',comments='$comments' where id='$id'");
if($query==true)
{   
/*
	?>
	<script type="text/javascript">

		alert('you are successfully updated');
   </script>

	<?php*/ 
$query1=mysqli_query($con,"select * from registration where id='$id'");
$row=mysqli_fetch_assoc($query1);
                    $tdate=$row['tdate'];
	          		$name= $row['name'];
	          		$email= $row['email'];
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
include('sdetails.php');
//include('action1.php');

//include('action1.php');

}
else
{
echo "error";
}
}
else 
{
	?>
	<script type="text/javascript">

		alert('you are not successfully updated')
		window.location.href='show.php';
	</script>
	<?php 
}
?>