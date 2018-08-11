<?php
session_start();
error_reporting(0);

if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	include "../../../system/koneksi.php";
	include "../../../system/fungsi_seo.php";
	include "../../../system/z_setting.php";

	$module=$_GET["module"];
	$module2="video";
	$hal = "video";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
		
		$judul_seo 	= seo($_POST["judul"]);
		
		
		try {
					$sql = "UPDATE video
							SET judul 		= :judul,
								seo 		= :seo,
								video       = :video,
								tanggal 		= NOW()
							WHERE id 	= :id
						  ";
						  
					$statement = $pdo->prepare($sql);
					$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
					$statement->bindParam(":seo", $judul_seo, PDO::PARAM_STR);
					$statement->bindParam(":video", $_POST["video"], PDO::PARAM_STR);
					
					
					$statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
					$count = $statement->execute();
					
				
					echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id]'</script>";
				}catch(PDOException $e){
					echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../video-edit-$_POST[id]'</script>";
				}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		

		$judul_seo 	= seo($_POST["judul"]);
		
			
		try{
					$stmt = $pdo->prepare("INSERT INTO video
											(judul,seo,video,tanggal)
											VALUES(:judul,:seo,:video,now())" );
					
					$stmt->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
					$stmt->bindParam(":seo", $judul_seo, PDO::PARAM_STR);	
					$stmt->bindParam(":video", $_POST["video"], PDO::PARAM_STR);			
					
				
					$count = $stmt->execute();
					
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-edit-$insertId'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		
		$del = $pdo->query("DELETE FROM video WHERE id ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}

	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>