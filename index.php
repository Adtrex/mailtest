<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"  initial-scale=1, shrink-to-fit=no">

	<title>Adekunte Tolulope</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		
<div class="page1">
	<center>
	<H1>I AM ADEKUNTE TOLUOPE</H1>
	<a href="#page2" ><button class="btn1">KNOW ABOUT ME</button></a>
</center>
</div>

<div id="page2" class="page2">
	<center>
	
	<div style="width: 48%; float: left; height: 400px; margin-top: 0px; " class="about">
		<div class="tolu-image">
	<img src="tolu.jpg">
</div>
	<p>Name: Adekunte Tolulope</p>
	<p>State of origin: Ogun State</p>
	<p>Date of Birth: 22 May 2002</p>
	<p>Address: Abeokuta, Ogun State</p>
	<p>Occupation: Student</p>
	<p>Home Town: Sawonjo</p>
	<p>Slack ID: Adtrex</p>
	</div>

	<div style="width: 48%; float: left; height: 400px; margin-top: 0px">
		<h1>ABOUT ME</h1>
		<div class="about-txt"><p>I am a developer and blogger. I started programming in 2018 and since then I can't stop writing codes because of my love for it. I also create a blog <a href="https://www.techunknown.com" style="text-decoration: none; color: green;">TECHUNKNOWN</a> because I have a passion for tech and I want people to be updated about the lastest Gadgets and Technologies.</p></P></div>
	</div>
</center>

</div>

<div class="page3">
	<center>
		<?php
		echo "<span style='color:red'>" . $_SESSION['error']. "</span>";
	?>
	<?php
		echo "<span style='color:green'>" . $_SESSION['message']. "</span>";
	?>
	<form method="POST" action="processmail.php">
		<input type="text" name="first_name" placeholder="First Name" class="first_name" style=" color: green;">
		<input type="text" name="last_name" placeholder="Last Name" class="last_name" style=" color: green;"><br />
		<input type="Email" name="email" placeholder="Email" style=" color: green;"><br />
		<textarea placeholder="Enter your message..." name="message" style=" color: green;"></textarea><br />
		<button class="btn2" type="submit">CONTACT ME</button>
	</form>
</center>
</div>
<hr>
<center>
<p style=""><a href="https://www.twitter.com/techydev_" style="text-decoration: none; color: green;">Created by Adekunte Tolulope</a></p>
</center>
</body>
</html>