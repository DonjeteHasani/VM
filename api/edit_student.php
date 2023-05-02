<?php
	$connection = mysqli_connect("db4free.net","rilinda","cfa4b2b5");
	$db = mysqli_select_db($connection,"volunteerapp");
	$query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "student_dashboard.php";
</script>
