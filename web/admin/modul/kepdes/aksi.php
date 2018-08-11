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
	include "../../../system/z_setting.php";
		include "../../../system/fungsi_seo.php";
	include "../../../system/fungsi_seo2.php";

	$module=$_GET["module"];
	$module2="kepdes";
	$hal = "kepdes";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='add'){
		$lokasi_file 	= $_FILES['fupload']['tmp_name'];
		$nama_file   	= $_FILES['fupload']['name'];
		$tipe_file   	= $_FILES['fupload']['type'];
		$tipe_file2   	= seo2($tipe_file);
		$acak           = rand(00,99);
		$nama_file_unik = $acak.".".$tipe_file2;

	
		if(empty($lokasi_file)){
			echo "<script>window.alert('Gambar Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}else{
			try{
				$stmt = $pdo->prepare("INSERT INTO kepdes
											(id_desa, gambar)
										VALUES(:id_desa,:gambar )" );
				
				$stmt->bindParam(":id_desa", $_POST["id_desa"], PDO::PARAM_STR);
				$stmt->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
			
				$count = $stmt->execute();
				
				UploadSlider($nama_file_unik);
				unlink("../../../images/slider/$nama_file_unik");
				
				$insertId = $pdo->lastInsertId();
			
				echo "<script>alert('Halaman berhasil ditambah'); window.location(history.back(-1))</script>";
				
			}catch(PDOException $e){
				echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
			}
		}
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		$edit = $pdo->query("SELECT gambar FROM kepdes WHERE id_kepdes ='$_GET[id]'");
		$rr = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/slider/$imgname1-$rr[gambar]");
		unlink("../../../images/slider/small/$imgname2-$rr[gambar]");
		
		$del = $pdo->query("DELETE FROM kepdes WHERE id_kepdes ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}
	
	
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>