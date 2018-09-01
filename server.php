<?php

	$username = "";
	$email = "";
	$errors = array();
	// connect to the database
	$db =mysql_connect('localhost','root','registration');

	// if the register button is cliked
	if (isset($_POST['register'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);

		// ensure that form fields are filled property
		if (empty($username)) {
			 array_push($errors,"Username is required");
			
		}
		if (empty($email)) {
			 array_push($errors,"email is required");
			
		}
		if (empty($password_1)) {
			 array_push($errors,"password is required");

		if ($password_1 != $password_2){
			array_push($errors,"The two oassword do not match");
		}	
		
		// if there are no errors, save user to database
		if (count($errors) == 0){
		
			$password = md5($password_1); // encrypt password befor storing in database(sequrity)
			$sql = "INSERT INTO user (username, eamai, password)
				VALUES('$username','$email','$password'");	
			
			mysql_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location:index.php'); //rederect to home page
		}

	}

?>