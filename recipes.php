<html>
<head>
	<title>Mac n' Cheese | Recipes</title>
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
		      <img src="images/recipes.jpg" class="mainimg"/>
		</div>		
	</div>	
</div>	
	<!-- container makes it stop expanding. this is on all pages.-->
<div class="container" style="max-width: 970px;">
	
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3 centertext recipefront frontpad lineunder">
			<h2>Recipes</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12 centertext">
			<!--goes to create.php right now. I think it should go to account.php if not signed in-->
			<a href="create.php" class="btn btn-lg redbtn outline" id="btnlesspad" role="button" aria-label="Make a Recipe">Make a recipe</a></p>
		</div>
		
	</div>
	
  	<!--featured thumbnails (should have 9). It would be awesome if you could keep the 3 in each row together (div class=row)-->
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
    <!--end of row 2
	start of row 3-->
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
    <!--end of row 3-->
	

	
	<!--PAGINATION-->
	<div class="row">
		<div class="col-sm-6 col-xs-8">
			<nav aria-label="Page navigation">
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
		<div class="col-sm-4 col-sm-offset-2 col-xs-4 ">
			<!--I can remove this if this takes too much time. I was thinking since on the form it is a drop-down it might work, but it might not-->
			<div class="form-group">
			    <label for="filter" aria-label="filter">Filter Recipes:</label>
			    <select class="form-control" id="#" name="#" method="#" action="#" type="list">
				  <option>Choose a filter</option>
			      <option>Prep time &raquo; low-high</option>
			      <option>Prep time &raquo; high-low</option>
			      <option>Cook time &raquo; low-high</option>
			      <option>Cook time &raquo; high-low</option>
			    </select>
		  	</div>
		</div>
	</div>

	
	
</div>

<?php
footer();
?>
</body>