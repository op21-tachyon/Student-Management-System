<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
</head>
<body>
	<center><br><br>
		<h1>Student Login Page</h1><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br><br>
		<img src="pic/student-login.jpg">
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: student_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>