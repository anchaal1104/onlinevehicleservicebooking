<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('config.php');
$id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM registration where id='$id'");
if($query==true)
{
	?>
	<script type="text/javascript">
		alert('data deleted successfully');
		window.location.href='show.php';
	</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
		alert('error');
		window.location.href='show.php';
	</script>
	<?php
}
?>
</body>
</html>