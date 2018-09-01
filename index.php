
<?php include('db.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Online Banking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body >

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">SMART BANK <span>by Online Banking</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>
			<?php if (isset($_SESSION['username'])): ?>
				<div class="content">
					<?php if (isset($_SESSION['success'])): ?>
						<div class="error success">
							<h3>
								<?php
								echo $_SESSION['success'];
								unset($_SESSION['success']);
								?>
							</h3>
						</div>
					<?php endif ?>
					<?php if (isset($_SESSION["username"])) : ?>
					<p>Welcome <strong><?php echo $_SESSION['username'];?></strong> | <a href="logout.php" style="color: red;">Logout</a></p>
					<p></p>
				<?php endif?>
			</div>
		<?php endif?>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about us.php">ABOUT US</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="transaction.php">TRANSACTION</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>Online Banking</h1>
					<p>The bast way to save<br />
					<?php if (!isset($_SESSION['username'])): ?>
					 <a href="https://templated.co/">Time</a> and  <a href="https://templated.co/license">Money</a>.</p>
					<a href="login.php" class="button special scrolly">LOGIN HEAR</a>
					<?php endif?>
				</div>
			</section>

		
		

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
