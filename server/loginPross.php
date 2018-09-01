<?php
$errors = array();
// if the login button is cliked
if (isset($_POST['login'])) {
	// ensure that form fields are filled property
	if (empty($_POST['email'])) {
			array_push($errors,"email is required");
	} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // validate email
			array_push($errors,"Invalid email address");
	} else {
		// Check email exists
			$e = mysqli_real_escape_string($conn, $_POST['email']);
			$sql = "SELECT email from users WHERE email = '$e'";
			$r = mysqli_query($conn, $sql);
			if(mysqli_num_rows($r) != 1){
				array_push($errors,"User not found");
			}
	}
	if (empty($_POST['password'])) {
			array_push($errors,"password is required");
	}

	// if there are no errors, save user to database
	if (count($errors) == 0){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password = md5($password); // encrypt password
    $sql = "SELECT username FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 1) {
      while($row = mysqli_fetch_assoc($result)) {
          $_SESSION['username'] = $row['username'];
		      $_SESSION['success'] = "You are now logged in";
      }
		header('location:index.php'); //rederect to home page
		} else {
				array_push($errors,"Incorrect password");
		}
	}
}
?>
