<?php

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

    <!--<section id="newsletter">
      <div class="container">
        <div class="sign-up-form">
		<h1>Become A Member</h1>
		<form>
		<label>First Name</label>
		<input type="fname" class="input-box" placeholder="">
		<label>Last Name</label>
		<input type="lname" class="input-box" placeholder="">
		<label>Date of Birth</label>
		<input type="dob" class="input-box" placeholder="MM/DD/YYYY">
		<label>Email</label>
		<input type="e-mail" class="input-box" placeholder="">
		<label>Password</label>
		<input type="password" class="input-box" placeholder="">
		<label>Confirm Password</label>
		<input type="cpassword" class="input-box" placeholder="">
		<center><input type="button" value="Submit"></center>
		<h4>Already A Member?</h4>
		<center><input type="button" value="Login"></center>
		</form>
		<h5>By Submitting this information, you agree to our 
		<br><a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></h5>
		</div>
      </div>
    </section>-->

    <section id="main" style="background-image: url('./img/fountain1.jpg'); background-size: cover;">
      <div class="container">
        <article id="main-col">
          <center><h2 style="font-size: 30px; color: #FDC82F; text-shadow: 0 0 5px #592A8A; text-decoration: underline">Member Advantages</h2>
          <ul id="services">
            <li style="background-color: #592A8A; border: 3px solid #FDC82F; color: #FDC82F;">
              <h3>Website Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $1,000 - $3,000</p>
            </li>
            <li style="background-color: #592A8A; border: 3px solid #FDC82F; color: #FDC82F;">
              <h3>Website Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $1,000 - $3,000</p>
            </li>
            <li style="background-color: #592A8A; border: 3px solid #FDC82F; color: #FDC82F;">
              <h3>Website Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $1,000 - $3,000</p>
            </li>
          </ul><br>
        </article>

        <aside id="sidebar" style="background-color: rgba(76, 175, 80, 0.0); padding-top: 74px;">
          
		  <div class="dark" style="padding-top:0px;">
            <h3>Current Members</h3>
            	<a href="login.php" style="text-decoration:none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px">
				<button style="height: 30px; padding-left: 20px; padding-right:20px; 
				background-color:#FDC82F; border: none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px;"><b>Sign In</b></a></button>
  			<br>
			<h3>Become A Member</h3>
  				<a href="signup.php" style="text-decoration:none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px">
				<button style="height: 30px; padding-left: 20px; padding-right:20px; 
				background-color:#FDC82F; border: none; color:#592A8A; 
				font-family: Montserrat; font-size: 14px;"><b>Sign Up</b></a></button>
  		  </div><br>
        </aside>
		
		<aside id="sidebar" style="background-color: rgba(76, 175, 80, 0.0); padding-top: 0px;">
          
		  <div class="dark" style="padding-top:0px;">
            <h3>Quick Loans <sup style="font-size:8px;">NEW</sup></h3>
            <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
		    <p style="font-size: 15px">Pricing: $1,000 - $3,000</p>	
			<p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
			<p style="font-size: 15px">Pricing: $1,000 - $3,000</p>
  		  </div><br>
        </aside>
      </div>
    </section>
	
    <footer style="margin-top:0px; ">
      <p>CSCI 4710/6710 - Group 7 - Final Project | Copyright &copy; 2021</p>
    </footer>
  </body>
</html>
