<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >

<?php
	
	session_start();
	if(empty($_SESSION["IdValidation"]))
    {
    		 $_SESSION["error"] = "You try to break the link or SQL Injection";
             header('Location: '.'login.php');
    }
    if($_SESSION["userType"]!=1){
    	$_SESSION["error"] = "You try to break the link or SQL Injection";
             header('Location: '.'login.php');
    }
    ?>

	
<header>
	<div class="container">
		<div class="page-header">
		
	  		<h1>Belancer Education Home
	  		<?php
	  			if($_SESSION["userType"]==1){
	  				?>
	  				<samp style="float:right" >

			   <a href="logout.php">Logout</a>

			</samp>
			<?php 
	  			}
	  			else
	  			{
	  				header('Location: '.'login.php');
	  			}

	  		?>
	  		
	  		</h1>
	  		<h4><small>Its all about PHP Batch 5</small></h4>
	  		
		</div>
	</div>
	
</header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">Add Menu</div>
				  <div class="panel-body">
				    	<form method="POST" action="store.php">
						  <div class="form-group">
						    <label >Manu Name</label>
						    <input type="test" class="form-control" name="manuName" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label >Link</label>
						    <input type="test" class="form-control" name="link" placeholder="link">
						  </div>
						  
						  <button type="submit" name="manuStore" class="btn btn-default">Store</button>
					</form>
				  </div>
				 <div class="panel-footer">
				 	<?php
				        if(!empty($_SESSION["resuly"]))
				        {
				                        echo $_SESSION["resuly"];
				                        session_unset();
				                        session_destroy();
				        }
				    ?>
				 </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-warning">
				  <div class="panel-heading">Add Sub Menu</div>
				  <div class="panel-body">
				    <form method="POST" action="store.php">
				    	
				    	<div class="form-group">




						   <label >Select Menu:</label>
						   <select id="mainMenuId" name="mainMenuId" class="form-control ">

						   	<?php
				    			require_once 'connection.php';
								$res=$conn->query("SELECT * FROM mainmenu");
								$row=$res->fetch_array();
							   	while($row=$res->fetch_array())
								{
								

			        		?>	 

						    <option value="<?php echo $row['mainMenuId'];?>"><?php echo $row['mainMenuName']; ?></option>  
						    <?php
						}
						    ?>
						    </select>
						  </div>

						  <div class="form-group">
						    <label >Sub Memu Name</label>
						    <input type="test" class="form-control" name="submenu" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label >Link</label>
						    <input type="test" class="form-control" name="link" placeholder="link">
						  </div>
						  
						  <button type="submit" name="sStore" class="btn btn-default">Store</button>
					</form>
				  </div>
				 <div class="panel-footer"></div>
				</div>
			</div>
		</div>
	</div>
</section>

</body>
</html>


<!-- <label >Select Menu:</label>
				    	<select id="mainMenuId" name="mainMenuId" class="form-control ">

							<option>Chose Menu</option>
							<!-- <?php
								$res=$conn->query("SELECT * FROM mainmenu");
								$row=$res->fetch_array();
							   	while($row=$res->fetch_array())
								{

			        		?>	  
							<option value="<?php echo $row['mainMenuId'];?>"><?php echo $row['mainMenuName']; ?></option>      
				  
							<?php     
								} 
							?>    -->          
						</select> -->