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
	$module2="kematian";
	$hal = "kematian";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
	
		
		try {
					$sql = "UPDATE berita
							SET judul 			= :judul,
								judul_seo 		= :judul_seo,
								deskripsi 		= :deskripsi,
								
								keyword 		= :keyword,
								description 	= :description,
								gambar 			= :gambar,
								tgl_update 		= NOW()
							WHERE id_berita 	= :id_berita
						  ";
						  
					$statement = $pdo->prepare($sql);
					$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
					$statement->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);
					$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					
					$statement->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
					$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
					$statement->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
					$statement->bindParam(":id_berita", $_POST["id_berita"], PDO::PARAM_INT);
					$count = $statement->execute();
					
					unlink("../../../images/order/$nama_file_unik");
				
					echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_berita]'</script>";
				}catch(PDOException $e){
					echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../inspirasi-edit-$_POST[id_berita]'</script>";
				}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		
				try{
					$stmt = $pdo->prepare("INSERT INTO kematian
											(id_dusun,tanggal_kematian,nik,keterangan)
											VALUES(:id_dusun,:tanggal_kematian,:nik,:keterangan)" );
					
					$stmt->bindParam(":id_dusun", $_POST["id_dusun"], PDO::PARAM_STR);
					$stmt->bindParam(":tanggal_kematian", $_POST["tanggal_kematian"], PDO::PARAM_STR);
					$stmt->bindParam(":nik", $_POST["nik"], PDO::PARAM_STR);
					$stmt->bindParam(":keterangan", $_POST["keterangan"], PDO::PARAM_STR);
				
						
					$count = $stmt->execute();
									
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}

		
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		
		$del = $pdo->query("DELETE FROM kematian WHERE id_kematian ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
	
	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>