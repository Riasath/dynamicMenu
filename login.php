<!DOCTYPE html>
<html>
<head>
	<title>Main Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div class="page-header">
	  		<h1>Belancer Education Home </h1>
	  		<h4><small>Its all about PHP Batch 5</small></h4>
		</div>
	</div>
	
</header>
<?php
session_start();
?>
<section class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form method="POST" action="validation.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	<br>
	<?php
                if(!empty($_SESSION["error"]))
                    {
                    	?>

                    	
                        <div class="label label-danger"><?php
                        echo $_SESSION["error"];
                        ?></div>
                        <?php
                        session_unset();
                        session_destroy();
                    }
    ?>
	</div>
	<div class="col-md-3"></div>
	
</section>
</body>



</html>