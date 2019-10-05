<?php 
include('config.php');
			
	if (isset($_POST['subt'])) 
		            $tdate=$_POST['tdate'];
	          		$name= $_POST['name'];
				  	$email= $_POST['email'];
					$contact = $_POST['contact'];
					$address= $_POST['address'];
					$pincode= $_POST['pincode'];
					$vtype= $_POST['vtype'];
					$vmodel= $_POST['vmodel'];
					$vregno= $_POST['vregno'];
					$sdetails= $_POST['sdetails'];
					$bookdt= $_POST['bookdt']; //$bookdt = date("Y-m-d H:i:s");
                    $booktime= $_POST['booktime'];
					$comments=$_POST['comments'];
		            $bookingno=rand();
	                $status="pending";
					$query = mysqli_query($con,"INSERT INTO registration(tdate,name,email,contact,address,pincode,vtype,vmodel,vregno,sdetails,bookdt,booktime,comments,status,bookingno) VALUES ('$tdate','$name','$email','$contact','$address','$pincode','$vtype','$vmodel','$vregno','$sdetails','$bookdt','$booktime','$comments','$status','$bookingno')");
if($query==true)  
{
$query=mysqli_query($con,"select * from registration");
$row=mysqli_fetch_assoc($query);
include('action.php');
}
else
{
	echo "error";
}
?>


