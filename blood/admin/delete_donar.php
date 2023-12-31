<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"blood");
	$query = "delete from donar where d_id = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Donar Deleted...");
	window.location.href = "donar.php";
</script>