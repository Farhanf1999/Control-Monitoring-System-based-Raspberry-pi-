<?php
	session_start();
	if(!isset($_SESSION['masuk'])){
	header("location: index.php");
	exit();
	}
?>

<?php 
    require "koneksi.php";
	 
	$data = query("SELECT * FROM tabel_monitoring, tabel_kontrol")[0];
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Web Kontrol</title>
    
  </head>
  <body class="bg-dark">

        <div class="bg-info clearfix">
  		<a href="logout.php"><button type="button" class="btn btn-secondary float-left">     Logout     </button></a>
  		<a href="total.php"><button type="button" class="btn btn-secondary float-right">Total Penggunaan</button></a>
		</div>

  	 <br />
  	 <br />
     <center><h4 class="mt-5 text-white">PANEL KONTROL & MONITORING</h4></center>
	 <br />
	    <center>
		<div class="row mt-3">	
			<div class="col">
				<div class="card" style="max-width:18rem;">
					<h5 class="card-header bg-info text-white">Relay 1</h5>
						<div class="card-body bg-dark text-light">
		  
		     				<?php if($data["CH_1"] == 0) { ?>
		       	 			   		<a href="data-api.php?channel=CH_1&state=1" class="btn btn-danger">OFF</a>
		     				<?php }
		       			   		if($data["CH_1"] == 1) { ?>
		       	 		   			<a href="data-api.php?channel=CH_1&state=0" class="btn btn-success">ON</a>
		      				<?php } ?>

		  				</div>
				</div>
			</div>

			<div class="col">
				<div class="card" style="max-width:18rem;">
		  			<h5 class="card-header bg-info text-white">Relay 2</h5>
		 				 <div class="card-body bg-dark text-light">
		    
		       				<?php if($data["CH_2"] == 0) { ?>
		       	   				 <a href="data-api.php?channel=CH_2&state=1" class="btn btn-danger">OFF</a>
		       				<?php }
		          			 	 if($data["CH_2"] == 1) { ?>
		       	     		     <a href="data-api.php?channel=CH_2&state=0" class="btn btn-success">ON</a>
		       				<?php } ?>

		 		 		</div>
				</div>
			</div>

			<div class="col">
				<div class="card" style="max-width:18rem;">
		  			<h5 class="card-header bg-info text-white">Relay 3</h5>
		 		         <div class="card-body bg-dark text-light">
		    
		    				<?php if($data["CH_3"] == 0) { ?>
		       	    			 <a href="data-api.php?channel=CH_3&state=1" class="btn btn-danger">OFF</a>
		      				<?php }
		          				if($data["CH_3"] == 1) { ?>
		       	   				 <a href="data-api.php?channel=CH_3&state=0" class="btn btn-success">ON</a>
		       				<?php } ?>

		  				 </div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="max-width:18rem;">
		 			 <h5 class="card-header bg-info text-white">Relay 4</h5>
		 				 <div class="card-body bg-dark text-light">
		    
		       				 <?php if($data["CH_4"] == 0) { ?>
		       	    			 <a href="data-api.php?channel=CH_4&state=1" class="btn btn-danger">OFF</a>
		       				 <?php }
		         				  if($data["CH_4"] == 1) { ?>
		       	     			 <a href="data-api.php?channel=CH_4&state=0" class="btn btn-success">ON</a>
		     			     <?php } ?>

						  </div>
				</div>
			</div>

		</div>			
		
		
		
		
		
		

    <div class="load-input"></div>
		
      	<footer class="py-3">
          	<div class="container">
                <p class="m-0 text-center text-light">Webpuppets999</p>
         	 </div>
        </footer>


     </center>        

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- My Javascript/jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Sweet Alert -->
    <script src="js/sweetalert2.all.min.js"></script>

  </body>
</html>

