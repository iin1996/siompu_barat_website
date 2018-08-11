<?php
session_start();

if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	include "../../../system/koneksi.php";
	include "../../../system/fungsi_thumb.php";
	include "../../../system/fungsi_seo.php";

	$module=$_GET["module"];
	$module2="admin";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
			
		$username = $_POST['username'];
		
		if($_POST['password_lama']!=$_POST['password']){
			$pass     = md5($_POST['password']);
		}else{
			$pass     = $_POST['password_lama'];
		}

			$sql = "UPDATE admin   
					SET nama_lengkap 	= :nama_lengkap,
						email 			= :email,
						no_telp 		= :no_telp,
						username 		= :username,
						password 		= :password
					WHERE id 			= :id
				  ";
				  
			$statement = $pdo->prepare($sql);
			$statement->bindParam(":nama_lengkap", $_POST["nama_lengkap"], PDO::PARAM_STR);
			$statement->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
			$statement->bindParam(":no_telp", $_POST["no_telp"], PDO::PARAM_STR);
			$statement->bindParam(":username", $username, PDO::PARAM_STR);
			$statement->bindParam(":password", $pass, PDO::PARAM_STR);
			$statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
			$count = $statement->execute();
			
			
		echo "<script>alert('Data Admin berhasil diedit'); window.location = '../../logout.php'</script>";
	}
}
?>
