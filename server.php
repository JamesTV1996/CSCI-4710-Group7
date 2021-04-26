<?php

session_start();

//initialising variables

$username = "";
$email = "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','lending') or die("Couldn't Connect to Database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//Form Validation

if(empty($username)) {array_push($errors, "Username is required")} ;
if(empty($email)) {array_push($errors, "Email is required")} ;
if(empty($password_1)) {array_push($errors, "Password is required")} ;
if($password_1 != $password_2) {array_push($errors, "Passwords do not match")} ;

//Check for Existing Username
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
	if($user['username'] === $username){array_push($errors, "Username already exists");}
	if($user['email'] === $email){array_push($errors, "This Email is already associated with an account");}

} 
//Register The User if No Errors

if(count($errors) == 0){
   $password = md5($password_1); //Password Encryption
   $query = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password');
   
   mysqli_query($db,$query);
   $_SESSION['username'] = $username;
   $_SESSION['success'] = "You are now logged in";
   
   
   header('location: dashboard.php');
}


?>