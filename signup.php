<html>
<head>
	
	<title>Mac n' Cheese | Account</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>

	</style>
</head>


<body>
	<!-- NAVBAR AND FOOTER ARE FUNCTIONS ON ALL PAGES-->
	<?php
	include ("functions.php");
	navbar();
	?>
	

	<!-- container makes it stop expanding. this is on all pages.-->
<div class="container" style="max-width: 970px;">
	
		
	<!--All sign up stuff-->
	
	<div class="row">
	        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="well loginwell">
					<h1 class="centertext">Sign up</h1>
					<h4 class="centertext">{it's free!}</h4>
					<br></br>
				<form class="login">
				  	<div class="form-group">
					   <label for="name">Your name:</label>
					   <input type="text" class="form-control" id="name">
					 </div>
					 <!--only using email if this is sanatized. I dont want a security situation!-->
					 <!--
				  	<div class="form-group">
					   <label for="email">Email:</label>
					   <input type="email" class="form-control" id="email">
					 </div>
						 -->
				  	<div class="form-group">
					   <label for="username">Username:</label>
					   <input type="text" class="form-control" id="username">
					 </div>
					 <div class="form-group">
					   <label for="pwd">Password:</label>
					   <input type="password" class="form-control" id="pwd">
					 </div>
					 <div class="checkbox">
					   <label><input type="checkbox">Remember me</label>
					 </div>
					 <a href="account.php" role="button" type="submit" class="btn btn-default redbtn" id="loginbtn">Go</button></a> 
				</form>
				<p><a href="account.php" id="signuplink">Or log in &raquo;</a></p>
				</div>
	        </div>
	</div>
	<!--end sign up stuff
		link on go goes to account.php right now-->

		
</div>

<?php
footer();
scripts();
?>
</body>