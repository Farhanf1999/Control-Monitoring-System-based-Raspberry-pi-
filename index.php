<?php

session_start();
	if(isset($_SESSION['masuk'])) {
		header("location: webcontrol.php");
		exit();
	}


require_once('koneksi.php');

if(isset($_POST['login'])) {
	$username = mysqli_escape_string($koneksi,$_POST['username']); 
	//$username = $_POST['username'];
	$password = md5($_POST['pwd']);
	
	if($username == "" || $password == ""){
			$message = "Username / Password harus diisi";
			echo "<script type='text/javascript'>alert('$message');
			history.back(self);
			</script>";
			exit;
	}
	
	$sql = mysqli_query($koneksi,"SELECT * FROM tblogin WHERE username='$username' AND password='$password'");
	
	if (mysqli_num_rows($sql) != 0){
			$_SESSION['masuk'] = 1;
			session_start();
			header("Location: webcontrol.php");
	}
	
			if (mysqli_num_rows($sql) != 1) {
				$messagee = "Username / Password salah";
				echo "<script type='text/javascript'>alert('$messagee');
				history.back(self);
				</script>";
			}
				
	}
		

?>

<!DOCTYPE html>


<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
	<body>


<form action="" method="post">
	
	<div class="kotak_login">
		<center><p class="tulisan_login"><h2> WEB CONTROL </h2></center>
			<label>Username</label>
			<input type="text" name="username" id="username" class="form_login" placeholder="Username ..">
				
		
			<label><br>Password</label>
			<input type="password" name="pwd" id="pwd" class="form_login" placeholder="Password ..">
			
			
			<input type="submit" class="tombol_login" name="login" id="login" value="login"> </input>
			
		</form>
		
	</div>


</body>

</html>





