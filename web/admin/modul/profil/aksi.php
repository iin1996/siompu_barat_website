<?php
session_start();
error_reporting(0);

if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	include "../../../system/koneksi.php";
	include "../../../system/z_setting.php";

	$module=$_GET["module"];
	$module2="profil";
	$hal = "profil";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){

			try { 

				$sql = "UPDATE modul   
						SET deskripsi 			= :isi,
							tgl_update 		= NOW()
						WHERE id_modul 	= :id
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":isi", $_POST["isi"], PDO::PARAM_STR);
				$statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
				$count = $statement->execute();
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module'</script>";

				} catch(PDOException $e){

				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module'</script>";

			}

	}	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>