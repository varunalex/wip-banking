<?php
$errors = array();
// if the register button is cliked
if (isset($_POST['register'])) {
	// ensure that form fields are filled property
	if (empty($_POST['username'])) {
			array_push($errors,"Username is required");
	} elseif (strlen($_POST['username']) < 3) { // username should contain more than 3 characters
		  array_push($errors,"Username should conatin more than 3 characters");
	} else {
		// Check user name exists
			$u = mysqli_real_escape_string($conn, $_POST['username']);
			$sql = "SELECT username from users WHERE username = '$u'";
			$r = mysqli_query($conn, $sql);
			if(mysqli_num_rows($r) != 0){
				array_push($errors,"Username already exists");
			}
	}
	if (empty($_POST['email'])) {
			array_push($errors,"email is required");
	} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Validate email
			array_push($errors,"Invalid email address");
	} else {
		// Check email exists
			$e = mysqli_real_escape_string($conn, $_POST['email']);
			$sql = "SELECT email from users WHERE email = '$e'";
			$r = mysqli_query($conn, $sql);
			if(mysqli_num_rows($r) != 0){
				array_push($errors,"Email already exists");
			}
	}
	if (empty($_POST['password_1'])) {
			array_push($errors,"password is required");
	} elseif (strlen($_POST['password_1']) < 5) { // check password lenght
		  array_push($errors,"Preferred strong password than you entered. Tip : use more than 5 characters ");
	} elseif (empty($_POST['password_2'])) {
		array_push($errors,"confirm password is required");
	}
	elseif ($_POST['password_1'] != $_POST['password_2']){
		array_push($errors,"The two password do not match");
	}

	// if there are no errors, save user to database
	if (count($errors) == 0){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
		$password = md5($password_1); // encrypt password befor storing in database(sequrity)
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

		if (mysqli_query($conn, $sql)) {
    $_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location:index.php'); //rederect to home page
		} else {
				die("Error: " . $sql . "<br>" . mysqli_error($conn));
		}
	}
}
?>
