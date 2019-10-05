<?php 
include('config.php');
if(isset($_POST['subt']))
      {             
                $sdate=$_POST['sdate'];
                $scname= $_POST['scname'];
                $saddress= $_POST['saddress'];
                $spincode= $_POST['spincode'];
                $svtype= $_POST['svtype'];
                $gstno= $_POST['gstno'];
            $semail= $_POST['semail'];
          $scontact = $_POST['scontact'];
          $query = mysqli_query($con,"INSERT INTO service_details(sdate,scname,saddress,spincode,svtype,gstno,semail,scontact) VALUES ('$sdate','$scname','$saddress','$spincode','$svtype','$gstno','$semail','$scontact')");

if($query==true)  
{
$query1=mysqli_query($con,"select * from service_details");
$row1=mysqli_fetch_assoc($query1);
$query2=mysqli_query($con,"select * from registration");
$row=mysqli_fetch_assoc($query2);
$email= $row['email'];

include ('action1.php');

}
else
{
  echo "error";
}
}
?>


