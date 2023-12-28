<?php
include "db.php";
session_start();
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	$query = "SELECT * FROM users WHERE email = '{$email}'";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		$_SESSION['login_err'] = "You are not registerd!";
		header("Location: ../login.php");
	}else if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$db_user_id = $row['id'];
			$db_fname = $row['fname'];
			$db_lname = $row['lname'];
			$db_user_email = $row['email'];
			$db_user_password = $row['password'];
		}

		if($email === $db_user_email && password_verify($password, $db_user_password)){
			$_SESSION['user_id'] = $db_user_id;
			$_SESSION['name'] = $db_fname. ' ' .$db_lname;
			$_SESSION['user_email'] = $db_user_email;

			header("Location: ../home.php");
		}else{
			$_SESSION['login_err'] = "Email or Password is incorrect";
			header("Location: ../login.php");
		}
	}else{
		$_SESSION['login_err'] = "You are not registerd!";
		header("Location: ../login.php");
	}
}
?>