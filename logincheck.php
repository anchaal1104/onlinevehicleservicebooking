<?php
session_start();
include('config.php');
if(!isset($_SESSION["email"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	$_SESSION["email"]=$email;
    if($email=='admin@gmail.com' && $password=='admin')
    {

		header("location:show.php");
	}
	/*else if($rowcount2==true)
	{
		header("location:show");
	}*/
	else
	{
     ?>
     <script type="text/javascript">
     	alert('sorry wrong userid or password');
     	window.location.href="login.php";

     </script>
     <?php
	}
}
else
{
	?>
	<script type="text/javascript">
		alert('please logout');
     	window.location.href="logout.php";
	</script>
	<?php
}
?>