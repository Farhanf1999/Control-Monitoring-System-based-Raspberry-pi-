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


 <!DOCTYPE html>
 <html>
 	<head>
 		<title>	</title>
 	</head>
 <body>

 	<div class="row mt-3">	

		<div class="col">
			<div class="card" style="max-width:18rem;">
		 		 <h5 class="card-header bg-info text-white">Sensor 1</h5>
		 			<div class="card-body bg-dark text-light">
		 				<h5 class="card-title">Arus (A)</h5>
		   					<h3><?=$data["IN_1"];?></h3>
		 			</div>
			</div>
		</div>

		<div class="col">
			<div class="card" style="max-width:18rem;">
				<h5 class="card-header bg-info text-white">Sensor 2</h5>
					<div class="card-body bg-dark text-light">
		 			  	<h5 class="card-title">Arus (A)</h5>
		      				<h3><?=$data["IN_2"];?></h3>
		 			</div>
			</div>
		</div>

		<div class="col">
			<div class="card" style="max-width:18rem;">
		 		<h5 class="card-header bg-info text-white">Sensor 3</h5>
		 			<div class="card-body bg-dark text-light">
		    			<h5 class="card-title">Arus (A)</h5>
		     				<h3><?=$data["IN_3"];?></h3>
		  			</div>
			</div>
		</div>
		<div class="col">
			<div class="card" style="max-width:18rem;">
				<h5 class="card-header bg-info text-white">Sensor 4</h5>
		  			<div class="card-body bg-dark text-light">
		    			<h5 class="card-title">Arus (A)</h5>
		       				<h3><?=$data["IN_4"];?></h3>
		 			</div>
			</div>
		</div>

	</div>			
       
 
 </body>
 </html>