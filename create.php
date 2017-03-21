<html>
<head>	
	<title>Mac n' Cheese | Make a Recipe</title>
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
	
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 headtitle" id="maketitle">
			<h1>Make a Recipe</h1>
		</div>		
	</div>
	<!--You may have to mess with this a lot. action is not set yet-->
	<form id="newrecipe" method="post" action="#">	
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			    <div class="form-group">
					<!--max 35 characters-->
			      <label for="title">Title</label>
			      <input type="text" class="form-control" id="max35" maxlength="35" id="newrecipe" placeholder="Title" name="newrecipe[title]" method="post" action="#">
				  <span id="max35_feedback"></span>
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			    <div class="form-group">
					<!--max 125 characters-->
			      <label for="description">Description</label>
			      <textarea class="form-control noresize" id="max125" maxlength="125" id="newrecipe" rows="2" name="newrecipe[description]" method="post" action="#"></textarea>
				  <span id="max125_feedback"></span>
			    </div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-xs-6 col-sm-4 col-sm-offset-2">
				<div class="form-group">
				    <label for="Prep Time">Prep Time</label>
				    <select class="form-control" id="newrecipe" name="newrecipe[prep]" method="post" action="#" type="list">
		      			<option>1 minute</option>
		      			<option>5 minutes</option>
		      			<option>10 minutes</option>
		      			<option>15 minutes</option>
		      			<option>20 minutes</option>
			  			<option>25 minutes</option>
			  			<option>30 minutes</option>
			  			<option>30+ minutes</option>
				    </select>
			  	</div>
			</div>
			
			<div class="col-xs-6 col-sm-4">
				<div class="form-group">
				    <label for="Cook Time">Cook Time</label>
				    <select class="form-control" id="newrecipe" name="newrecipe[cook]" method="post" action="#" type="list">
		      			<option>1 minute</option>  
		      			<option>5 minutes</option>  
		      			<option>10 minutes</option> 
		      			<option>15 minutes</option> 
		      			<option>20 minutes</option> 
			  			<option>25 minutes</option> 
			  			<option>30 minutes</option> 
			  			<option>35 minutes</option> 
			  			<option>40 minutes</option> 
			  			<option>45 minutes</option> 
			  			<option>45+ minutes</option>
				    </select>
			  	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			    <div class="form-group">
			      <label for="ingredients">Ingredients</label>
			      <textarea class="form-control vresize" id="newrecipe" rows="6" name="newrecipe[ingredients]" method="post" action="#"></textarea>
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			    <div class="form-group">
			      <label for="directions">Directions</label>
			      <textarea class="form-control vresize" id="newrecipe" rows="6" name="newrecipe[directions]" method="post" action="#"></textarea>
			    </div>
			</div>
		</div>
	    <div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		      	  	<label for="image">Image</label>
		      		<input type="file" class="form-control-file" id="newrecipe" aria-describedby="fileHelp" name="newrecipe[image]" method="post" action="#" enctype="multipart/form-data">
		    	</div>
			</div>
		</div>
	</form>
	<!--end of form-->
	<!-- button is linked to recipes-->
	<div class="row">
		<div class="col-sm-12 centertext">
			<a href="recipes.php" class="btn btn-lg redbtn outline" id="submitbtn" role="button">Submit</a></p>
		</div>
	</div>
	
</div>

<?php
footer();
scripts();
?>
</body>