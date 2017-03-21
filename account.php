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
		
	<!--IF NOT LOGGED IN, DISPLAY THIS-->
	<!--
	<div class="row">
	        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="well loginwell">
					<h1 class="centertext">Log in</h1>
					<br></br>
				<form class="login">
				  <div class="form-group">
					   <label for="email">Username:</label>
					   <input type="email" class="form-control" id="username">
					 </div>
					 <div class="form-group">
					   <label for="pwd">Password:</label>
					   <input type="password" class="form-control" id="pwd">
					 </div>
					 <div class="checkbox">
					   <label><input type="checkbox">Remember me</label>
					 </div>
					 <button type="submit" class="btn btn-default redbtn" id="loginbtn">Go</button>
					 
				</form>
				<p><a href="signup.php" id="signuplink">Or sign up &raquo;</a></p>
				</div>
	        </div>
	</div>
	-->
		
	<!--IF LOGGED IN, DISPLAY THIS-->
	
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			<h1 id="hello">Hello echo name</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<a href="create.php" role="button" class="btn btn-lg redbtn outline" id="makebtn">Make a Recipe</button></a>

		</div>
	</div>
	
	<!--recipes the user has made-->
	<div class="row">
		<div class="col-sm-5 col-sm-offset-1">
			<ul class="list-group">
			  <li class="list-group-item front">
			  	<h1>Your Recipes</h1>
			  </li>
			  <!--first 'your recipe' li item-->
			  <a href="single.php" class="list-group-item">
				<div class="row">
					<div class="col-sm-12">
			    		<h4 class="list-group-item-heading">Title(linked to a recipe page)</h4>
			    		<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!--btn to remove a recipe-->
					<button type="button" class="btn btn-default trashbtn"  data-toggle="tooltip" data-placement="bottom" title="Remove Recipe">
					  <span class="glyphicon glyphicon-trash"></span>
					</button>
					</div>
				</div>
			  </a>
			  <!--/first item-->
			  <!--second li item-->
			  <a href="single.php" class="list-group-item">
				<div class="row">
					<div class="col-sm-12">
			    		<h4 class="list-group-item-heading">Title(linked to a recipe page)</h4>
			    		<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!--btn to remove a recipe-->
					<button type="button" class="btn btn-default trashbtn"  data-toggle="tooltip" data-placement="bottom" title="Remove Recipe">
					  <span class="glyphicon glyphicon-trash"></span>
					</button>
					</div>
				</div>
			  </a>
			  <!--/second item-->
			</ul>
		</div>
		<!--recipes the user has bookmarked-->
		<div class="col-sm-5">
			<ul class="list-group">
			  <li class="list-group-item front">
			  	<h1>Bookmarks</h1>
			  </li>
			  <!--first 'your recipe' li item-->
			  <a href="single.php" class="list-group-item">
				<div class="row">
					<div class="col-sm-12">
			    		<h4 class="list-group-item-heading">Title(linked to a recipe page)</h4>
			    		<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!--btn to remove a bookmark-->
					<button type="button" class="btn btn-default trashbtn"  data-toggle="tooltip" data-placement="bottom" title="Un-bookmark Recipe">
					  <span class="glyphicon glyphicon-minus"></span>
					</button>
					</div>
				</div>
			  </a>
			  <!--/first item-->
			  <!--second li item-->
			  <a href="single.php" class="list-group-item">
				<div class="row">
					<div class="col-sm-12">
			    		<h4 class="list-group-item-heading">Title(linked to a recipe page)</h4>
			    		<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!--btn to remove a bookmark-->
					<button type="button" class="btn btn-default trashbtn"  data-toggle="tooltip" data-placement="bottom" title="Un-bookmark Recipe">
					  <span class="glyphicon glyphicon-minus"></span>
					</button>
					</div>
				</div>
			  </a>
			  <!--/second item-->
			</ul>
		</div>
	</div>
	<!--the sign-out button doesnt work. It goes to the home right now-->
	<div class="row">
		<div class="col-sm-5 col-sm-offset-1">
			<p><a href="index.php" id="signoutbtn">Sign Out &raquo; </a></p>
			</div>
		</div>
	</div>
	
	
</div>

<?php
footer();
scripts();
?>


</body>