<!DOCTYPE html>
<html>
<head>
	<title>SHOW DATA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center><h1 style="color:blue;font-family:'Algerian';font-size: 70px;"><u>BOOKING DETAILS</u></h1></center>
  <br>
  <form id="f">
    <center><input type="text" name="search" id="se" style="font-size:20px;">
    </center>
  </form><br>
  <div id="d"></div></br>
  <!-- SHOW DATA BY AJAX -->
  <script type="text/javascript">

    $(document).ready(function(){

      $("#p").click(function(){
        event.preventDefault();
        $.ajax({
          type:"post",
          url:"show.php",
          data:$('#f').serialize(),
          success: function(response){
            $("#d").html(response);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#se').keyup(function(){//#se is the input fiels's id
        event.preventDefault();
        $.ajax({
          type:"post",
          url:"check.php",
          data:$('#f').serialize(),//#f is the form fiels's id
          success: function(response){
            $("#d").html(response);//#se is the input fiels's id
          }
        });
      });
    });

  </script>

  

<center><table border="4">
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
  include('config.php');
  $query=mysqli_query($con,"select * from registration");
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
    <span>	<button><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></button> &nbsp; &nbsp;
    	<button><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></button></span>
    </td>
    </tr>
   <?php
   $c++;
  }  ?>
</table></center>
<br><center><button style="font-size: 20px;"><a href="logout.php">LOGOUT</button></center>
<br>
<br>
</body>
</html>