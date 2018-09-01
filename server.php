<?php

include('./db.php');

$username = "";
$email = "";
$errors = array();

// if the register button is cliked
if (isset($_POST['register'])) {
	// ensure that form fields are filled property
	if (empty($username)) {
			array_push($errors,"Username is required");
		
	}
	if (empty($email)) {
			array_push($errors,"email is required");
		
	}
	if (empty($password_1)) {
			array_push($errors,"password is required");
	}

	if ($password_1 != $password_2){
		array_push($errors,"The two oassword do not match");
	}

	$_SESSION['errors'] = $errors;

	// if there are no errors, save user to database
	if (count($errors) == 0){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
		$password = md5($password_1); // encrypt password befor storing in database(sequrity)
		$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

		if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
		} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location:index.php'); //rederect to home page
	} else {
		header('location:register.php');
	}
}
?>
