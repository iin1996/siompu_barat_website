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
	$module2="desa";
	$hal = "desa";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
		
		try {
				$sql = "UPDATE desa
						SET nama 			= :nama,
							jabatan 		= :jabatan,
							no 				= :no,
							alamat 			= :alamat
						WHERE id_desa 		= :id_desa
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
				$statement->bindParam(":jabatan", $_POST["jabatan"], PDO::PARAM_STR);
				$statement->bindParam(":no", $_POST["no"], PDO::PARAM_STR);
				$statement->bindParam(":alamat", $_POST["alamat"], PDO::PARAM_STR);
				$statement->bindParam(":id_desa", $_POST["id_desa"], PDO::PARAM_INT);
				$count = $statement->execute();
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_desa]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../desa-edit-$_POST[id_desa]'</script>";
			}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		
	try{
					$stmt = $pdo->prepare("INSERT INTO desa
											(nama,jabatan,no,alamat)
											VALUES(:nama,:jabatan,:no,:alamat)");
					
					$stmt->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
					$stmt->bindParam(":jabatan", $_POST["jabatan"], PDO::PARAM_STR);		
					$stmt->bindParam(":no", $_POST["no"], PDO::PARAM_STR);	
					$stmt->bindParam(":alamat", $_POST["alamat"], PDO::PARAM_STR);
					$count = $stmt->execute();	
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-edit-$insertId'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
	
		$del = $pdo->query("DELETE FROM desa WHERE id_desa ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
		
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>