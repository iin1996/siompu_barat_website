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
	$module2="wisata";
	$hal = "wisata";
	$act=$_GET["act"];
	
	// Update modul
	if ($module=='wisata' AND $act=='update'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$ukuran   		= $_FILES['fupload']['size'];
		$seojdul        = seo($_POST["nama"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak;
	
		
		if (!empty($nama_file)){
			if( ($ukuran==0) OR ($ukuran==02) OR ($ukuran>2060817) ){
				echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
			}else{
				$edit = $pdo->query("SELECT gambar FROM wisata WHERE id_wisata ='$_POST[id_wisata]'");
				$tedit = $edit->fetch(PDO::FETCH_ASSOC);
				unlink("../../../images/galeri/$imgname1-$tedit[gambar]");
				unlink("../../../images/galeri/small/$imgname2-$tedit[gambar]");
				
				UploadGaleri($nama_file_unik);

				try {
					$sql = "UPDATE wisata
							SET nama 			= :nama,
							    deskripsi		= :deskripsi,
							    wisata		= :wisata,
								gambar 			= :gambar
							WHERE id_wisata 	= :id_wisata
						  ";
						  
					$statement = $pdo->prepare($sql);
					$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
					$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					$statement->bindParam(":wisata", $_POST["wisata"], PDO::PARAM_STR);
					$statement->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
					
					
					$statement->bindParam(":id_wisata", $_POST["id_wisata"], PDO::PARAM_INT);
					$count = $statement->execute();
					
					unlink("../../../images/galeri/$nama_file_unik");
				
					echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_wisata]'</script>";
				}catch(PDOException $e){
					echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../wisata-edit-$_POST[id_wisata]'</script>";
				}
			}
		}else{
			try {
					$sql = "UPDATE wisata
							SET nama 			= :nama,
								deskripsi		= :deskripsi,
							    wisata			= :wisata
							WHERE id_wisata 	= :id_wisata
						  ";
						  
					$statement = $pdo->prepare($sql);
					$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
					$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					$statement->bindParam(":wisata", $_POST["wisata"], PDO::PARAM_STR);
					
					$statement->bindParam(":id_wisata", $_POST["id_wisata"], PDO::PARAM_INT);
					$count = $statement->execute();
					
				
					echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_wisata]'</script>";
				}catch(PDOException $e){
					echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../wisata-edit-$_POST[id_wisata]'</script>";
				}
		}
	}
	  
	
	// add modul
	elseif ($module==$module2 AND $act=='add'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$ukuran   		= $_FILES['fupload']['size'];
		$seojdul        = seo($_POST["nama"]);
		$acak           = rand(00,99);
		$nama_file_unik = $seojdul."-".$acak;

		if(empty($nama_file)){
			echo "<script>window.alert('Gambar Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}else{
			if( ($ukuran==0) OR ($ukuran==02) OR ($ukuran>2060817) ){
				echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
			}else{
				try{
					$stmt = $pdo->prepare("INSERT INTO wisata
											(nama,deskripsi,wisata,gambar)
											VALUES(:nama,:deskripsi,:wisata,:gambar)" );
					
					$stmt->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
					$stmt->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					$stmt->bindParam(":wisata", $_POST["wisata"], PDO::PARAM_STR);
					$stmt->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
				
				
					$count = $stmt->execute();
					
					UploadGaleri($nama_file_unik);
					unlink("../../../images/galeri/$nama_file_unik");
					
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
		$edit = $pdo->query("SELECT gambar FROM wisata WHERE id_wisata ='$_GET[id]'");
		$rr = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/galeri/$imgname1-$rr[gambar]");
		unlink("../../../images/galeri/small/$imgname2-$rr[gambar]");
		
		$del = $pdo->query("DELETE FROM wisata WHERE id_wisata ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
	
	elseif($module==$module2 AND $act=='romoveimg'){
		$edit = $pdo->query("SELECT gambar FROM wisata WHERE id_wisata ='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/galeri/$imgname1-$tedit[gambar]");
		unlink("../../../images/galeri/small/$imgname2-$tedit[gambar]");
			
				$sql = "UPDATE wisata   
						SET gambar 			= :gambar
						WHERE id_wisata 	= :id_wisata
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
				$statement->bindParam(":id_wisata", $_GET["id"], PDO::PARAM_INT);
				$count = $statement->execute();
		
		header('location:../../'.$module2.'-edit-'.$_GET['id']);
	}
	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>