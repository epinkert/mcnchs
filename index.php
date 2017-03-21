<html>
<head>
	<title>Mac n' Cheese</title>
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

<div class="row">
    <div class="col-xs-12">
		<div class="image">
		      <img src="images/home.jpg" class="mainimg"/>
		</div>		
	</div>	
</div>	
	<!-- container makes it stop expanding. this is on all pages.-->
<div class="container" style="max-width: 970px;">
	
	<div class=row>
		<div class="col-sm-12 centertext front" id="fronttitle">
			<h2>Mac n' Cheese is Awesome</h2>
		</div>
	</div>
	<div class=row>
		<div class="col-sm-8 col-sm-offset-2 centertext justify">
			<p class="intro">Two simple ingredients, cheese and pasta, are the start of a world of possibilities. You can make mac n' cheese many ways, from baking to grilling, and add whatever you desire, vegetables, endless types of cheeses, and so on. On this website, we have recipies galore, and you can even submit your own!</p>
		</div>
	</div>

	<div class=row>
		<div class="col-sm-12 centertext front frontpad ">
			<h2>Featured</h2>
		</div>
	</div>
	<!--featured thumbnails (should have 6). It would be awesome if you could keep the 3 in each row together (div class=row)-->
	<!--note: descriptions are 125 character max, titles are max 35 characters-->
	<div class="row"> 
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
  	</div>
	<!--end of row 1
		
		start of row 2-->
	<div class="row"> 
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
	  <div class="col-xs-12 col-sm-4">
	    <a href="single.php" class="thumbnail">
	      <img src="images/recipes/avocadomnc.jpg" alt="echo title">
	      <div class="caption">
	        <h3>Lorem ipsum dolor sit amet, consect</h3>
	        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
	      </div>
	    </a>
	  </div>
  	</div>
  <!--end of row 2-->
	<div class="row">
		<div class="col-sm-6 col-xs-8">
			<a href="recipes.php" class="btn btn-default" id="seeallbtn" role="button" aria-label="See all recipes">All Recipes &raquo;</a>
		</div>
	</div>
</div>

<?php
footer();
scripts();
?>	


</body>