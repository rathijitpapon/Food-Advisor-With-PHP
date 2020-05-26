<?php
	session_start();
	require 'db.php';

	$errors = array();
	$username = "";
	$email = "";

	if(isset($_POST['signup-btn'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$repeat = $_POST['repeat'];

		if(empty($username)){
			$errors['username'] = "Username Required!";
		}

		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Email is Invalid!";
		}

		elseif(empty($email)){
			$errors['email'] = "Email Required!";
		}

		elseif(empty($password)){
			$errors['password'] = "Password Required!";
		}

		elseif($password != $repeat){
			$errors['password'] = "Passwords don't Match!";
		}

		else{

			$res = pg_query($db,"select * from \"Food Advisor\".\"Sign_up\"('$name','$email','$password',1,'$phone')");
			$id = 0;
			while ($row = pg_fetch_row($res)) {
				$id = $row[0];
			}

			if($id == -1){
				$errors['email'] = "Email Already Exists!";
			}
			else{
				$verified = $false;
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['contact'] = $contact;
				$_SESSION['password'] = $password;
				$_SESSION['verified'] = $verified;
				$_SESSION['message'] = "You are Logged In!!";
				$_SESSION['alert-class'] = "alert-success";
				header('location: confirmation.php');
				exit();
			}
		}

	}