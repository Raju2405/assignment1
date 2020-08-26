<?php

session_start();
require 'config/db.php';
$errors=array();
$username="";
$email="";


// after clicking on signup button
if (isset($_POST['signup-btn'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	//username should not be empty
	if(empty($username)){
		$errors['username']="username required";
	}
	//verification of email 
	// if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	// 	$errors['email']="email invalid";
	// }
	//email should not be empty
	if(empty($email)){
		$errors['email']="email required";
	}
	//password should not be empty
	if(empty($password)){
		$errors['password']="password required";
	}
	$emailQuery="SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt=$conn->prepare($emailQuery);
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result=$stmt->get_result();
	$userCount=$result->num_rows;
	$stmt->close();

	//if user is already signin with that mail id
	if ($userCount>0) {
		$errors['email']="already exist";
	}


	//if no error
	if (count($errors===0)) {
		$password=password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
		$verified=false;

		//insert database into sql
		$sql="INSERT INTO users (username,email,verified,token,password) VALUES (?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssbss',$username,$email,$verified,$token,$password);
		if($stmt->execute()){
			//login user
			$user_id=$conn->insert_id;
			$_SESSION['id']=$user_id;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['verified']=$verified;


			//flash message
			$_SESSION['message']="you are loged in";
			$_SESSION['alert-class']="alert-success";
			header('location:index.php');
			exit();

		}else {
			$errors['db_error']="Database error";
		}
	}
}

//after clicking on sign in button 
if (isset($_POST['login-btn'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	//username should not be empty
	if(empty($username)){
		$errors['username']="username required";
	}
	
	//password should not be empty
	if(empty($password)){
		$errors['password']="password required";
	}
	if (count($errors)===0) {

		$sql="SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss', $username,$username);
		$stmt->execute();
		$result=$stmt->get_result();
		$user=$result->fetch_assoc();
		if(password_verify($password, $user['password'])){
			//successfully login
			$_SESSION['id']=$user['id'];
			$_SESSION['username']=$user['username'];
			$_SESSION['email']=$user['email'];
			$_SESSION['verified']=$user['verified'];

			//flash message
			$_SESSION['message']="you are loged in";
			$_SESSION['alert-class']="alert-success";
			header('location:index.php');
			exit();

		}else{
			$errors['login_fail']="wrong credentials";
		}
		
	}

}


//logout
if (isset($_GET['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['verification']);
	header('location:login.php');
	exit();
}