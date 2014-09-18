<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Me</title>
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
		<div class="row row_contact__header">
			<div class="col-1-1">
				<h1>Have your people call my people</h1>
			</div>
		</div>
		<div class="row row_contact__details">
			<div class="col-1-1">
				<h2>Leave me your details and I'll get right back to you, honest...</h2> 
			</div>
		</div>

				<form method="post" action="thanks.php" id="contact_form">
				<div class="contact__first_name">
					<label>first name:</label><input type="text" name="firstName" class="field contact__first_name">
				</div><br>
				<div class="contact__last_name">
				<label>last name:</label><input type="text" name="lastName" class="field contact__last_name">
				</div><br>
				<div class="contact__email_address">
				<label>email address:</label><input type="text" name="emailAdd" class="field contact__email_address">
				</div><br>
				<div class="contact__first_name">
				<label>phone:</label><input type="text" name="phone" class="field contact__phone">
				</div><br>


				what's the best way to get in touch?
				<select name="contactType" id="contactType" class="field contact__type">
					<option value="eMail">eMail</option>
					<option value="call">call</option>
					<option value="text">text</option>
					<option value="carrier pigeon">carrier pigeon</option>
				</select><br>

				message:<br>
				<textarea rows="10" cols="100" class="field contact__textarea" placeholder="here's what I've got to say..."></textarea><br><br>



				<input type="submit" value="Submit">


				<div class="contact__email_me">
				 <p><strong>Or:</strong>

				<a href="mailto:plammo5@live.com?subject=Hey%20Paul%20lets%20catch%20up" class="contact__email">eMail me!</a></p>
				</div>
				</form>
			</div>
		</div>
	</section>
		







		
</main>


</div>


			

</body>
</html>