<?php
require "koneksi.php";

			$IN_1  = $_GET["IN_1"];
			$IN_2  = $_GET["IN_2"];
			$IN_3  = $_GET["IN_3"];
			$IN_4  = $_GET["IN_4"];
			
			$sql      = "UPDATE tabel_monitoring SET 
	   	  	               IN_1	= '$IN_1', IN_2	= '$IN_2', IN_3	= '$IN_3', IN_4	= '$IN_4'";
	   	  	$koneksi->query($sql);

$data = query("SELECT * FROM tabel_total")[0];

$rph1 = $data["Rp_IN1"];
$rph2 = $data["Rp_IN2"];
$rph3 = $data["Rp_IN3"];
$rph4 = $data["Rp_IN4"];

$kwh1 = $data["KwH_IN1"];
$kwh2 = $data["KwH_IN2"];
$kwh3 = $data["KwH_IN3"];
$kwh4 = $data["KwH_IN4"];

$watt1 = $data["Watt_IN1"];
$watt2 = $data["Watt_IN2"];
$watt3 = $data["Watt_IN3"];
$watt4 = $data["Watt_IN4"];



$temp_kwh_1 = ((($IN_1 * 220) / 1000) / 3600); //watt/kwh/second
$temp_kwh_2 = ((($IN_2 * 220) / 1000) / 3600);
$temp_kwh_3 = ((($IN_3 * 220) / 1000) / 3600);
$temp_kwh_4 = ((($IN_4 * 220) / 1000) / 3600);

$perhitungan_watt1 = $IN_1 * 220; //arus x tegangan
$perhitungan_watt2 = $IN_2 * 220;
$perhitungan_watt3 = $IN_3 * 220;
$perhitungan_watt4 = $IN_4 * 220;

$temp_rph_1 = $temp_kwh_1 * 1000;  
$temp_rph_2 = $temp_kwh_2 * 1000;
$temp_rph_3 = $temp_kwh_3 * 1000;
$temp_rph_4 = $temp_kwh_4 * 1000;


$kwh1 += $temp_kwh_1;
$kwh2 += $temp_kwh_2;
$kwh3 += $temp_kwh_3;
$kwh4 += $temp_kwh_4;

$rph1 += $temp_rph_1;
$rph2 += $temp_rph_2;
$rph3 += $temp_rph_3;
$rph4 += $temp_rph_4;

$watt1 += $perhitungan_watt1;
$watt2 += $perhitungan_watt2;
$watt3 += $perhitungan_watt3;
$watt4 += $perhitungan_watt4;

$sql = "UPDATE tabel_total SET 
	   	  	               Rp_IN1 = '$rph1', Rp_IN2 = '$rph2', Rp_IN3 = '$rph3', Rp_IN4 = '$rph4', KwH_IN1 = '$kwh1', KwH_IN2 = '$kwh2', KwH_IN3 = '$kwh3', KwH_IN4 = '$kwh4', Watt_IN1 = '$watt1', Watt_IN2 = '$watt2', Watt_IN3 = '$watt3', Watt_IN4 = '$watt4'";
	   	  	$koneksi->query($sql);

$data = query("SELECT * FROM tabel_kontrol")[0];
		
		$result  = json_encode($data);
        echo $result;


?>