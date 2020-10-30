<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center><br><br>
	<h1>Student Management System</h1><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<br>
		<br>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<br>
	<br>
	<img src="pic/school.jpg">
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>