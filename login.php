<!DOCTYPE html>
<html>
<head>
	<title>User Registration System Using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="Password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">login</a>
		</p>
	</form>

</body>
</html>