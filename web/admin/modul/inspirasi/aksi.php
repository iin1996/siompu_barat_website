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
	$module2="inspirasi";
	$hal = "inspirasi";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='update'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$ukuran   		= $_FILES['fupload']['size'];
		$tipe_file2   	= seo2($tipe_file);
		$seojdul        = seo($_POST["judul"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak.".".$tipe_file2;

		$judul_seo 	= seo($_POST["judul"]);
		
		
		if (!empty($nama_file)){
			if( ($ukuran==0) OR ($ukuran==02) OR ($ukuran>2060817) ){
				echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
			}else{
				$edit = $pdo->query("SELECT gambar FROM berita WHERE id_berita='$_POST[id_berita]'");
				$tedit = $edit->fetch(PDO::FETCH_ASSOC);
				unlink("../../../images/order/$imgname1-$tedit[gambar]");
				unlink("../../../images/order/small/$imgname2-$tedit[gambar]");
				
				UploadCerita($nama_file_unik);

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
		}else{
			try {
				$sql = "UPDATE berita
						SET judul 			= :judul,
							judul_seo 		= :judul_seo,
							deskripsi 		= :deskripsi,
							
							keyword 		= :keyword,
							description 	= :description,
							tgl_update 		= NOW()
						WHERE id_berita 	= :id_berita
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$statement->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);
				$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
				
				$statement->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
				$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
				$statement->bindParam(":id_berita", $_POST["id_berita"], PDO::PARAM_INT);
				$count = $statement->execute();
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_berita]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../inspirasi-edit-$_POST[id_berita]'</script>";
			}
		}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$ukuran   		= $_FILES['fupload']['size'];
		$tipe_file2   	= seo2($tipe_file);
		$seojdul        = seo($_POST["judul"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak.".".$tipe_file2;

		$judul_seo 	= seo($_POST["judul"]);
		
			
		if(empty($_POST["deskripsi"])){
			echo "<script>window.alert('Deskripsi Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}elseif(empty($nama_file)){
			echo "<script>window.alert('Gambar Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}else{
			if( ($ukuran==0) OR ($ukuran==02) OR ($ukuran>2060817) ){
				echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
			}else{
				try{
					$stmt = $pdo->prepare("INSERT INTO berita
											(judul,judul_seo,deskripsi,keyword,description,gambar, tgl_post, tgl_update)
											VALUES(:judul,:judul_seo,:deskripsi,:keyword,:description,:gambar, now(), now() )" );
					
					$stmt->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
					$stmt->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);				
					$stmt->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					
					
					$stmt->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
					$stmt->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
					$stmt->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
				
					$count = $stmt->execute();
					
					UploadCerita($nama_file_unik);
					unlink("../../../images/order/$nama_file_unik");
					
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-edit-$insertId'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
			}
		}
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		$edit = $pdo->query("SELECT gambar FROM berita WHERE id_berita='$_GET[id]'");
		$rr = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/order/$imgname1-$rr[gambar]");
		unlink("../../../images/order/small/$imgname2-$rr[gambar]");
		
		$del = $pdo->query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
	
	elseif($module==$module2 AND $act=='romoveimg'){
		$edit = $pdo->query("SELECT gambar FROM berita WHERE id_berita='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/order/$imgname1-$tedit[gambar]");
		unlink("../../../images/order/small/$imgname2-$tedit[gambar]");
			
				$sql = "UPDATE berita   
						SET gambar 			= :gambar
						WHERE id_berita 	= :id_berita
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
				$statement->bindParam(":id_berita", $_GET["id"], PDO::PARAM_INT);
				$count = $statement->execute();
		
		header('location:../../'.$module2.'-edit-'.$_GET['id']);
	}
	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>