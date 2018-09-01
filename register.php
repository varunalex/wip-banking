<?php include('server.php');?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Smart Bank-Online Banking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Smart Bank <span>by Online Banking</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about us.php">ABOUT US</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="services.php">SERVICES</a></li>
				</ul>
			</nav>
			<div class="header">
				<h2>Register</h2>
			</div>
			<form method="post" action="register.php">
				<!-- display validation errors here-->
				<?php include('errors.php'); ?>

				<div class="input group">
					<label>Username</label>
					<input type="text" name="Usewrname" value="<?php echo $Username; ?>">
				</div>
				<div class="input group">
					<label>Email</label>
					<input type="text" name="Email" value="<?php echo $Email; ?>">
				</div>
				<div class="input group">
					<label>Password</label>
					<input type="text" name="password_1">
				</div>
				<div class="input group">
					<label>Confirm Password</label>
					<input type="text" name="password_2">
				</div><br>
				<div class="input group">
					<button type="submit" name="register" class="btn">Register</button>
				</div>
				<p>
					Alreedy a member? <a href="login.php">sign in</a>
				</p>

			</form>

		

		
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>