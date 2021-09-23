<?php 

//Simpan dengan nama file proses.php
require "koneksi.php";


//$data = query("SELECT * FROM tabel_kontrol")[0];

	if(isset($_GET['channel']) && isset($_GET['state'])){
		  $channel = $_GET['channel'];
		  $state   = $_GET['state'];
				if ($channel == 'CH_1') {
					$sql = "UPDATE tabel_kontrol SET CH_1 = '$state'";
				}
				else if ($channel == 'CH_2') {
					$sql = "UPDATE tabel_kontrol SET CH_2 = '$state'";
				}
				else if ($channel == 'CH_3') {
					$sql = "UPDATE tabel_kontrol SET CH_3 = '$state'";
				}
				else  if ($channel == 'CH_4'){
					$sql = "UPDATE tabel_kontrol SET CH_4 = '$state'";
				}
			  $koneksi->query($sql);
			  header('Location:webcontrol.php');
        }
/*
        else  {
			
			
			$IN_1  = $_GET["IN_1"];
			$IN_2  = $_GET["IN_2"];
			$IN_3  = $_GET["IN_3"];
			$IN_4  = $_GET["IN_4"];
			
			$sql      = "UPDATE tabel_monitoring SET 
	   	  	              IN_1	= '$IN_1', IN_2	= '$IN_2', IN_3	= '$IN_3', IN_4	= '$IN_4'";
	   	  	$koneksi->query($sql);
	   	  	//$data = query("SELECT * FROM tabel_monitoring")[0];
			 
			//$result = json_encode($data);
			//echo $result;
		//$data = query("SELECT * FROM tabel_kontrol")[0];
		
		//$result  = json_encode($data);
       // echo $result;

		}

  */   
        



 ?>