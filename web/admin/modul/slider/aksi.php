<?php
session_start();
error_reporting(0);

if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	include "../../../system/koneksi.php";
	include "../../../system/fungsi_thumb.php";
	include "../../../system/fungsi_seo.php";
	include "../../../system/fungsi_seo2.php";
	include "../../../system/z_setting.php";

	$module=$_GET["module"];
	$module2="slider";
	$hal = "slider";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$tipe_file2   	= seo2($tipe_file);
		$seojdul        = seo($_POST["judul"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak.".".$tipe_file2;

		$judul_seo 	= seo($_POST["judul"]);
		
		if (!empty($lokasi_file)){
			$edit = $pdo->query("SELECT gambar FROM slider WHERE id_slider='$_POST[id_slider]'");
			$tedit = $edit->fetch(PDO::FETCH_ASSOC);
			unlink("../../../images/slider/$imgname1-$tedit[gambar]");
			unlink("../../../images/slider/small/$imgname2-$tedit[gambar]");
			
			UploadSlider($nama_file_unik);
			
			try {
				$sql = "UPDATE slider   
						SET judul 			= :judul,
							gambar 			= :gambar,
							tgl_update 		= NOW()
						WHERE id_slider 	= :id_slider
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$statement->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
				$statement->bindParam(":id_slider", $_POST["id_slider"], PDO::PARAM_INT);
				$count = $statement->execute();
				
				unlink("../../../images/slider/$nama_file_unik");
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_slider]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../slider-edit-$_POST[id_slider]'</script>";
			}
		}else{
			try {
				$sql = "UPDATE slider   
						SET judul 			= :judul,
							tgl_update 		= NOW()
						WHERE id_slider 	= :id_slider
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$statement->bindParam(":id_slider", $_POST["id_slider"], PDO::PARAM_INT);
				$count = $statement->execute();
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_slider]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../slider-edit-$_POST[id_slider]'</script>";
			}
		}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$tipe_file2   	= seo2($tipe_file);
		$seojdul        = seo($_POST["judul"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak.".".$tipe_file2;

		$judul_seo 	= seo($_POST["judul"]);
		
			
		if(empty($lokasi_file)){
			echo "<script>window.alert('Gambar Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}else{
			try{
				$stmt = $pdo->prepare("INSERT INTO slider
											(judul, gambar, tgl_update)
										VALUES(:judul,:gambar, now() )" );
				
				$stmt->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$stmt->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
			
				$count = $stmt->execute();
				
				UploadSlider($nama_file_unik);
				unlink("../../../images/slider/$nama_file_unik");
				
				$insertId = $pdo->lastInsertId();
			
				echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-edit-$insertId'</script>";
				
			}catch(PDOException $e){
				echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
			}
		}
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		$edit = $pdo->query("SELECT gambar FROM slider WHERE id_slider='$_GET[id]'");
		$rr = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/slider/$imgname1-$rr[gambar]");
		unlink("../../../images/slider/small/$imgname2-$rr[gambar]");
		
		$del = $pdo->query("DELETE FROM slider WHERE id_slider='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
	
	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>