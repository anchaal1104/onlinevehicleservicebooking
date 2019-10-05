<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
	alert('you are successfully logged out');
	window.location.href='login.php';
</script>