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
	<title>  Pirate Lending | Homepage</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Pirate Lending</span></h1> 
        </div>&nbsp;<img src="./img/logo.png" width="50px;">
        <nav>
          <ul>
            <li class="current"><a href="index.php">Homepage</a></li>
            <li><a href="members.php">For Members</a></li>
			<li><a href="loans.php">Loan Estimator</a></li>
			<li><a href="about.php">About</a></li>
            
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
                
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1><center>Lending For Pirates Both Near & Far</center></h1>
		<p>Whether it be for a new Home, Car, or Personal Loan<br> Our goal is to provide 
		our members with financial means to pursue whatever life brings <br>We are dedicated
		to providing quality lending services and pride ourselves in our efforts to empowering 
		our community</p>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <div class="hvrbox"><img src="./img/home.png"><div class="hvrbox-layer_top">
			<div class="hvrbox-text">Loans Range from 1.5%-8%</div></div></div>
		  <h3>Home Loans</h3>
          <p>Whether you're buying or building your home, let us help you start your 
		  journey to becoming a successful home owner!</p>
        </div>
        <div class="box">
          <div class="hvrbox"><img src="./img/vehicle.png"><div class="hvrbox-layer_top">
			<div class="hvrbox-text">Loans Range from 0.9%-29%</div></div></div>
		  <h3>Vehicle Loans</h3>
          <p>With some of the most competitive Vehicle loans around, we make it easy to 
		  ride into your next new/used vehicle!</p>
        </div>
        <div class="box">
          <div class="hvrbox"><img src="./img/personal.png"><div class="hvrbox-layer_top">
			<div class="hvrbox-text">Loans Range from 2%-8%</div></div></div>
          <h3>Personal Loans</h3>
          <p>Need some cash to start that special project? Or to take that last minute 
		  vacation? Let us Help you get the cash you need!</p>
        </div>
      </div>
    </section>

    <footer>
      <p>CSCI 4710/6710 - Group 7 - Final Project | Copyright &copy; 2021</p>
    </footer>
  </body>
</html>
