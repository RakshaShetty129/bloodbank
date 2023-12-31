<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"blood");
	$query = "delete from register where email = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Register Deleted...");
	window.location.href = "show_register.php";
</script>