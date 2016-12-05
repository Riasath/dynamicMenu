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
	<?php
	
	session_start();
	if(empty($_SESSION["IdValidation"]))
    {
    		 $_SESSION["error"] = "You try to break the link or SQL Injection";
             header('Location: '.'login.php');
    }
    ?>

	?>
<header>
	<div class="container">
		<div class="page-header">
		
	  		<h1>Belancer Education Home
	  		<?php
	  			if($_SESSION["userType"]==1){
	  				?>
	  				<samp style="float:right" >

			   <a href="settings.php">Add Menu</a>

			</samp>
			<?php 
	  			}
	  			else
	  			{

	  			}

	  		?>

	  		<samp style="float:right" >

			   <a href="logout.php">Logout</a>

			</samp>
	  		
	  		</h1>
	  		<h4><small>Its all about PHP Batch 5</small></h4>
	  		
		</div>
	</div>
	
</header>
<section class="container">
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
		      <a class="navbar-brand" href="main.php">Home</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        
		        <?php
		        	require_once 'connection.php';
					
					$res=$conn->query("SELECT * FROM mainmenu ");
				   $row=$res->fetch_array();
				   while($row=$res->fetch_array())
					{

		        ?>
		        <li class="dropdown">


		        	
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['mainMenuName']; ?> <span class="caret"></span></a>

		          <?php
					$res_pro=$conn->query("SELECT * FROM smenu WHERE manu=".$row['mainMenuId']);
					?>


		          <ul class="dropdown-menu">
		          	<?php  
					while($pro_row=$res_pro->fetch_array())
					{
						?>


		            <li><a href="#"><?php echo $pro_row['name']; ?></a></li>
		            

		            <?php
		            	}
		            ?>
		          </ul>
		        </li>
		        <?php
		        	}
		        ?>
		      </ul>
		      
		      
		    </div>
  		</div>
	</nav>
</section>


</body>



</html>