<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>thanks</title>
	<link rel="stylesheet" href="css/grid_styling.css">
	<link rel="stylesheet" href="css/main.css">
	<!--<link rel="stylesheet" href="http://basehold.it/24">-->
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>




</head>
<body>

<header>
	<div class=" rowtop">
		

		<nav>

				<div class="col-1-6 logo">
					<img src="images/pl_logo3.png" alt="pl logo" title="pic">
				</div>
            
        		<ul>
            		<li><a href="index.php">Home</a></li>
            		<li><a href="aboutMe.php">About Me</a></li>
            		<li><a href="aboutMe.php">Work</a></li>
            		<li><a href="aboutMe.php">Skills</a></li>
            		<li><a href="aboutMe.php">Family</a></li>
            		<li><a href="aboutMe.php">Fitness</a></li>
            		<li><a href="contact.php">Contact</a></li>
            
        		</ul>
            
			</nav> 

	</div>
</header>



<div class="container">

<main>

	<section class="section">
		<div class="row row_contact__header--response">
			<div class="col-1-1">
				<?php echo "<h1>Thanks for the message ".$_POST['firstName']."</h1>"; 
				?>				
			</div>
		</div>
		<div class="row row_contact__details--response">
			<div class="col-1-1">
				<h2>I'll be in touch within the next 24 hours!</h2> 
			</div>
		</div>
	
	

</body>
</html>