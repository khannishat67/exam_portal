<?php 
	session_start();

	$username = "";
	$email = "";
	$regno = "";
	$dept ="";
	$phoneno=0;
	$errors = array();
	// connect to the db
	$db = mysqli_connect('localhost', 'root', '', 'db_exam');

	// if the signup button is clicked
	if (isset($_POST['signup'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$regno = $_POST['regno'];
		$phoneno = $_POST['phoneno'];
		$dept = $_POST['dept'];

		// ensure form fields are not empty
		if (empty($username)) {
			array_push($errors, "Username is required");
		}

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($regno)) {
			array_push($errors, "Registration number is required");
		}
		if (empty($phoneno)) {
			array_push($errors, "Phone number is required");
		}
		if (empty($dept)) {
			array_push($errors, "Department name is required");
		}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$sql = "INSERT INTO t_student (username, regno, email, phoneno, dept) VALUES ('$username', '$regno', '$email', '$phoneno', '$dept')"; 
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Signup successful";
			header('location: index.php'); // redirect to home page
		}
	}


	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: signup.php');
	}

	

?>