<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Pirate Lending Homepage">
	 <meta name="keywords" content="Web Design, IT Professional">
  	<meta name="author" content="James Vincent">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="./css/default.css">
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<title>  Pirate Lending | For Members</title>
</head>
<body>
	<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Pirate Lending </span></h1> 
        </div>&nbsp;<img src="./img/logo.png" width="50px;">
        <nav>
          <ul>
            <li><a href="index.php">Homepage</a></li>
            <li class="current"><a href="members.php">For Members</a></li>
			<li><a href="loans.php">Loan Estimator</a></li>
			<li><a href="about.php">About</a></li>
            
          </ul>
        </nav>
      </div>
    </header>
	<style type="text/css">
	
		#text{
		font-family: 'Montserrat', sans-serif;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #FDC82F;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: #592A8A;
		background-color: #FDC82F;
		border: none;
		border-radius: 5px;
	}

	#box{

		background-color: #592A8A;
		border-radius:6px;
		margin: auto;
		width: 400px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: #FDC82F;"><center>Signup</center></div>
			<label style="color: #FDC82F;">Username</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label style="color: #FDC82F;">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<center><input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" style="text-decoration: none; color: #FDC82F;">Login</a><br><br></center>
		</form>
	</div>
</body>
</html>
