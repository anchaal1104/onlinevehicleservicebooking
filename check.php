<?php

include('config.php');

// WHERE CustomerName LIKE 'a%'  Finds any values that start with "a"
// WHERE CustomerName LIKE '%a'  Finds any values that end with "a"
// WHERE CustomerName LIKE '%or%'  Finds any values that have "or" in any position
// WHERE CustomerName LIKE '_r%' Finds any values that have "r" in the second position
// WHERE CustomerName LIKE 'a_%_%' Finds any values that start with "a" and are at least 3 characters in length
// WHERE ContactName LIKE 'a%o'  Finds any values that start with "a" and ends with "o"

$name=$_POST['search'];
$query=mysqli_query($con,"SELECT * FROM registration WHERE name LIKE'%$name%'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding-top: 44px;">
  
  <form method="post" action="insert.php">         
  <table class="table table-bordered">
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
    <td>
      <button><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></button> &nbsp; &nbsp;
      <button><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></button>
    </td>
    </tr>
   <?php
   $c++;
  } ?>
      </table>  
    </form>
</div>
</body>
</html>