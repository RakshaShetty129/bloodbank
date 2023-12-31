<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"blood");
	$query = "delete from store where b_id = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert(" Blood Deleted...");
	window.location.href = "blood.php";
</script>