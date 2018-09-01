<?php include('db.php'); // Include databse
if(isset($_SESSION['username'])) header('Location: index.php');
// Redirect to index if user loggedin
?>
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
				<h2>Login</h2>
			</div>
			<?php include('server/loginPross.php'); ?>
			<form method="post" action="">
			<?php include('errors.php'); ?>
				<div class="input group">
					<label>Email</label>
					<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
				</div>
				
				<div class="input group">
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<br>
				<div class="input group">
					<button type="submit" name="login" class="btn">Login</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">sign up</a>
				</p>

			</form>

		
	 </div>
</body>
</html>

