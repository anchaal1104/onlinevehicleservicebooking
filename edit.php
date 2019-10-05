<?php
include('config.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * from registration where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<h1><b><u><center>BOOKING DETAILS</center></u></b></h1>
  <form method="post" action="update.php" enctype="multipart/form-data">
  <center> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            DATE=<input type="text" name="tdate" value="<?php echo $row['tdate']; ?>"><br><br>
            NAME=<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
            E-mail=<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
  	        CONTACT=<input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br><br>
            ADDRESS=<input type="text" name="txt_email" value="<?php echo $row['email']; ?>"><br><br>
            PINCODE=<input type="number" name="pincode" value="<?php echo $row['pincode']; ?>"><br><br>
            VEHICLE TYPE=
            <select name="vtype">
              <option value="<?php echo $row['vtype']; ?>"><?php echo $row['vtype'];?></option>
            	<option value="2">2 wheeler</option>
            	<option value="4">4 wheeler</option>
            </select><br><br>
            VEHICLE MODEL=<input type="text" name="vmodel" value="<?php echo $row['vmodel']; ?>"><br><br>
            VEHICLE REGISTRATION NUMBER=<input type="TEXT" name="vregno" value="<?php echo $row['vregno']; ?>"><br><br>
            SERVICE DETAILS=<input type="text" name="sdetails" value="<?php echo $row['sdetails']; ?>"><br><br>
            BOOKING DATE=<input type="date" name="bookdt" value="<?php echo $row['bookdt']; ?>"><br><br>
            BOOKING TIME=<input type="time" name="booktime" value="<?php echo $row['booktime']; ?>"><br><br>
            COMMENTS=<input type="text" name="comments" value="<?php echo $row['comments']; ?>"><br><br>
            STATUS=<input type="text" name="status" value="<?php echo $row['status']; ?>"><br><br>
                      <center><input type="submit" name="subt"></center>
</center>
</form>
</body>
</html>