<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

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
	<title>  Pirate Lending | Loan Estimator</title>
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
	
	
       
    <div>   
	<a href="logout.php" style="text-decoration:none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px">
				<button style="height: 30px; padding-left: 20px; padding-right:20px; 
				background-color:#FDC82F; border: none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px;">Logout</a></div>
	<h1>User Dashboard</h1>
	<hr style="height:1px;color:#FDC82F;background-color:#FDC82F">

	<br>
	Hello, <?php echo $user_data['user_name']; ?>


	
    <footer>
      <p>CSCI 4710/6710 - Group 7 - Final Project | Copyright &copy; 2021</p>
    </footer>
  </body>
</html>

