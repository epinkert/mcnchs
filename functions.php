<?php
//functions for navbar and footer
function navbar() { ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hfont" href="index.php">Mac n' Cheese</a>
    </div>

    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="recipes.php">Recipes</a></li>
		<!-- change "Log In" to say "Account" when logged in-->
		<li class="active"><a href="account.php">Log In</a></li>
	  </ul>
</nav>

<?php
}

function footer() { ?>
 <footer class="footer">
   <div class="container">
     <p class="text-muted">&copy; 2017 copyright</p>
   </div>
 </footer>

<?php
}

function scripts() { ?>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/javascript.js"></script>

<?php
}

?>