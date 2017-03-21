<html>
<head>	
	<!--echo the recipe title-->
	<title>Mac n' Cheese | Echo Recipe</title>
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
	<!--I recommend using id numbers to identify each page, just in case there is the same title or something-->
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="well recipewell">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 lineunder" id="singletitle">
				    	<h1>Title</h1>	
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1" id="postinfo">
						<p>Echo Date | Echo Author</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-5 col-xs-offset-1 col-lg-6 col-lg-offset-1" id="singleimg">
						<div class="thumbnail">
							<img src="images/recipes/avocadomnc.jpg" alt="echo title">
						</div>
					</div>
					<div class="col-sm-5 col-lg-4">
						<div class="row">
							<div class="col-sm-11 col-sm-offset-1 col-xs-offset-1"  id="postdescription">
								<p>echo description Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Com</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1 col-xs-offset-1 " id="postprepcook">
								<p>Prep Time: echo</p><p>Cook Time: echo</p>
							</div>
						</div>
					</div>			
				</div>
				
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1" id="singlemaincontent">
						<p class="hfont"><strong>Ingredients:</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Vivamus at sapien interdum arcu suscipit interdum.
							Fusce sed odio fermentum, ultrices eros id, luctus odio.
							Mauris luctus lectus in turpis luctus venenatis.</p>
						<p class="hfont" id="directionstitle"><strong>Directions:</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget risus ut enim dignissim venenatis vel eu elit. Nunc efficitur lectus turpis, a faucibus ipsum gravida a. Proin enim leo, molestie vel turpis non, facilisis placerat ex. Sed libero eros, faucibus in finibus maximus, cursus ac mauris. Donec laoreet vulputate ipsum vitae aliquet. Nulla tincidunt risus venenatis sagittis fringilla. Pellentesque blandit, tellus egestas aliquet luctus, orci turpis eleifend sem, </p>
					
					</div>
				</div>
				<!--So what I'm trying to do here is give an alert that to bookmark a recipe, you must be logged in. 
					Right now I have a button that will just bookmark it and a button that will tell you to log in.-->
					
					
				<!--USE THIS BUTTON IF LOGGED IN. (it does not work currently)-->	
				<!-- 
	 			<div class="row">
	 				<div class="col-xs-10 col-xs-offset-1" id="bookmarkbtn">
	 					<button type="button" class="btn btn-default btn-lg" aria-label="Left Align" data-toggle="tooltip" data-placement="bottom" title="Bookmark">
	 					  <span class="glyphicon glyphicon-bookmark"></span>
	 					</button>
					</div>
				</div>
				-->
	 			<div class="row">
	 				<div class="col-xs-10 col-xs-offset-1" id="bookmarkbtn">
						<!--use this button if NOT logged in. Im sure there is a better way to do this in php.-->
	 					<button type="button" class="btn btn-default btn-lg" aria-label="Left Align" data-toggle="tooltip" data-placement="bottom" title="Bookmark" id="bookmarkalert">
	 					  <span class="glyphicon glyphicon-bookmark"></span>
	 					</button>
						<!--not logged in alert. hidden in javascript.js-->
						<div class="alert alert-danger fade in" id="bookmarkerror">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <p><a href="account.php" class="redlink"><strong>Log in</strong></a> to bookmark recipes!</p>
						</div>
						<!--end of alert-->
					</div>
				</div>

				
			</div>
		</div>
	</div>
	
</div>

<?php
footer();
scripts();
?>
</body>