<?php
$con=mysqli_connect('localhost','root','','project');
if($con==false)
{
	die("could not connect");
}
else
{
	echo "connection done"."<br>";
}
?>