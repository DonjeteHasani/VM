<?php
	$connection = mysqli_connect("db4free.net:3306","rilinda","cfa4b2b5");
	$db = mysqli_select_db($connection,"volunteerapp");
	$query = "INSERT INTO students VALUES('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[class],'$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[remark]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
