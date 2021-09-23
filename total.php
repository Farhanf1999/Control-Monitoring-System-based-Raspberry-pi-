<?php
	session_start();
	if(!isset($_SESSION['masuk'])){
	header("location: index.php");
	exit();
	}
?>
<?php 
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel Total</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>


<table class="table table-striped table-dark">
<thead>
	 <tr>
      <th scope="col">id</th>
      <th scope="col">Total Watt</th>
      <th scope="col">Total KwH</th>
      <th scope="col">Total Harga</th>
    </tr>
 </thead>
	<a href="webcontrol.php"><button type="button" class="btn btn-secondary float-left">     BACK     </button></a>
	<?php
		$no=1;
		$koneksi = mysqli_connect("localhost","admin","riko1234","dbcontrol");
		$ambil = mysqli_query($koneksi, "SELECT * FROM tabel_total");
		while($data = mysqli_fetch_array($ambil)){ //string jadi array

		$rp1 = 	$data['Rp_IN1'];
		$rp2 = 	$data['Rp_IN2'];
		$rp3 = 	$data['Rp_IN3'];
		$rp4 = 	$data['Rp_IN4'];

		$kwh1 = $data["KwH_IN1"];
		$kwh2 = $data["KwH_IN2"];
		$kwh3 = $data["KwH_IN3"];
		$kwh4 = $data["KwH_IN4"];

		$watt1 = $data["Watt_IN1"];
		$watt2 = $data["Watt_IN2"];
		$watt3 = $data["Watt_IN3"];
		$watt4 = $data["Watt_IN4"];


		$convertkwh1 = number_format($data['KwH_IN1'],3,'.','.');
		$convertkwh2 = number_format($data['KwH_IN2'],3,'.','.');
		$convertkwh3 = number_format($data['KwH_IN3'],3,'.','.');
		$convertkwh4 = number_format($data['KwH_IN4'],3,'.','.');

		$convert1 = number_format($data['Rp_IN1'],3,'.','.');
		$convert2 = number_format($data['Rp_IN2'],3,'.','.');
		$convert3 = number_format($data['Rp_IN3'],3,'.','.');
		$convert4 = number_format($data['Rp_IN4'],3,'.','.');

		$convertwatt1 = number_format($data['Watt_IN1'],0,',',',');
		$convertwatt2 = number_format($data['Watt_IN2'],0,',',',');
		$convertwatt3 = number_format($data['Watt_IN3'],0,',',',');
		$convertwatt4 = number_format($data['Watt_IN4'],0,',',',');
		


	?>
<tbody>
	<tr>
		
		<td><?php echo $no++ ?></td>
		<td><?php echo $convertwatt1 ?></td>
		<td><?php echo $convertkwh1 ?></td>
		<td><?php echo "Rp. "; echo $convert1?></td>
	</tr>
	<tr>
		 
		<td><?php echo $no++ ?></td>
		<td><?php echo $convertwatt2 ?></td>
		<td><?php echo $convertkwh2 ?></td>
		<td><?php echo "Rp. "; echo $convert2?></td>
	</tr>
	<tr>
		
		<td><?php echo $no++ ?></td>
		<td><?php echo $convertwatt3 ?></td>
		<td><?php echo $convertkwh3 ?></td>
		<td><?php echo "Rp. "; echo $convert3?></td>
	</tr>
	<tr>
	
		<td><?php echo $no++ ?></td>
		<td><?php echo $convertwatt4 ?></td>
		<td><?php echo $convertkwh4 ?></td>
		<td><?php echo "Rp. "; echo $convert4?></td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>


 
</body>
</html>