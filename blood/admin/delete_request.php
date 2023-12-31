<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"blood");
	$query = "delete from request where h_id = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Request Deleted...");
	window.location.href = "show_request.php";
</script>