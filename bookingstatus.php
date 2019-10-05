<!DOCTYPE html>
<html>
<head>
  <title>SHOW DATA</title>
</head>
<body>
  <center><h1><U>BOOKING STATUS</U></h1></center>
<center><table border="2">
  <tr>
    <td>SL.NO</td>
    <td>TODAY'S DATE</td>
    <td>NAME</td>
    <td>EMAIL ID</td>
    <td>CONTACT NO</td>
    <td>ADDRESS</td>
    <td>PINCODE</td>
    <td>VEHICLE TYPE</td>
    <td>VEHICLE MODEL</td>
    <td>VEHICLE REGISTRATION NO</td>
    <td>SERVICE DETAILS</td>
    <td>BOOKING DATE</td>
    <td>BOOKING TIME</td>
    <td>COMMENTS</td>
    <td>STATUS</td>
    <td>BOOKING NO</td>
    <td>ACTION</td>
  </tr>
 <?php
if(isset($_POST['subt']))
{
  include('config.php');
  $bookingid=$_POST['bookingid'];
  $query=mysqli_query($con,"select * from registration where bookingno=$bookingid");
  $c=1;
  while($row=mysqli_fetch_assoc($query))
  { ?>
   <tr>
    <td><?php echo $c; ?></td>
    <td><?php echo $row['tdate']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['pincode']; ?></td>
    <td><?php echo $row['vtype']; ?></td>
    <td><?php echo $row['vmodel']; ?></td>
    <td><?php echo $row['vregno']; ?></td>
    <td><?php echo $row['sdetails']; ?></td>
    <td><?php echo $row['bookdt']; ?></td>
    <td><?php echo $row['booktime']; ?></td>
    <td><?php echo $row['comments']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['bookingno']; ?></td>
  </tr>
   <?php
   $c++;
  }
}  ?>
</table></center>
<br>
<center><button><a href="index.php">BACK TO HOME</button></center>
  <br>
</body>
</html>