<?php
	$DB_host = "172.18.0.2"; // SERVER
	$DB_name = "siompubarat"; // NAMA DATA BASE
	$DB_user = "root"; // USER DATA BASE SERVER
	$DB_pass = "siompu123"; // PASWORD SERVER

	// KONEKSI PDO MYSQL
	try
	{
		$pdo= new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo  "
				<div class='alert alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Terjadi kesalahan !</strong> Koneksi Ke Database Terputus, Hubungi Administrator
				</div>";
	}

?>
