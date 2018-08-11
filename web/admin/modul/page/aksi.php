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
	$module2="page";
	$act=$_GET["act"];

	if($module==$module2 AND $act=='update'){
		//'Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images'
			
		if(($_POST['jenis_modul']=='Images')OR($_POST['jenis_modul']=='Images SEO')OR($_POST['jenis_modul']=='Text Images')OR($_POST['jenis_modul']=='Textarea Images')){	
			$lokasi_file 	= $_FILES['fupload']['tmp_name'];
			$nama_file   	= $_FILES['fupload']['name'];
			$tipe_file   	= $_FILES['fupload']['type'];
			$ukuran   		= $_FILES['fupload']['size'];
			$tipe_file2   	= seo2($tipe_file);
			$seojdul        = seo($_POST["nama"]);
			$acak           = rand(00,99);
			$nama_file_unik = $seojdul."-".$acak.".".$tipe_file2;
			
			if(empty($nama_file)){ 
				$gambar=$_POST['gambar'];
				$gambarsta = "tdkada";
				//echo "tdkada";
				//echo $gambar;
			}else{
				$edit = $pdo->query("SELECT gambar FROM page WHERE id_page='$_POST[id_page]'");
				$tedit = $edit->fetch(PDO::FETCH_ASSOC);
				unlink("../../../images/$imgname1-$tedit[gambar]");
			
				UploadPage($nama_file_unik);
				$gambar=$nama_file_unik;
				$gambarsta = "ada";
				//echo "ada";
				unlink("../../../images/$nama_file_unik");
			}
			
			
		}
		
		$nama_seo     	= seo(trim($_POST['nama']));

		try {
			$sql = "UPDATE page   
					SET nama 			= :nama,
						nama_seo 		= :nama_seo,
						deskripsi 		= :deskripsi,
						title 			= :title,
						keyword 		= :keyword,
						description 	= :description,
						gambar 			= :gambar,
						tgl_update 		= NOW()
					WHERE id_page 		= :id_page
				  ";
				  
			$statement = $pdo->prepare($sql);
			$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
			$statement->bindParam(":nama_seo", $nama_seo, PDO::PARAM_STR);
			$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
			$statement->bindParam(":title", $_POST["title"], PDO::PARAM_STR);
			$statement->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
			$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
			$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
			$statement->bindParam(":id_page", $_POST["id_page"], PDO::PARAM_INT);
			$count = $statement->execute();
			
			if($gambarsta=='tdkada'){
				echo "<script>alert('Modul berhasil di Update'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_page]'</script>";
			}else{
				if( ($ukuran==0) OR ($ukuran>2060817) ){
					echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
					//echo $ukuran;
					//echo "1";
				}else{
					echo "<script>alert('Modul berhasil di Update'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_page]'</script>";
					//echo $ukuran;
					//echo "2";
				}
			}
			//echo "<script>alert('Modul berhasil di Update'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_page]'</script>";
			//header('location:../../page-edit-'.$_POST["id_page"]);
		}catch(PDOException $e){
			echo "<script>window.alert('Halaman Gagal diedit!'); window.location(history.back(-1))</script>";
		}
	}
	
	
	elseif($module==$module2 AND $act=='romoveimg'){
		$gambar = '';
		$edit = $pdo->query("SELECT gambar FROM page WHERE id_page='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/$imgname1-$tedit[gambar]");
			
				$sql = "UPDATE page   
						SET gambar 			= :gambar
						WHERE id_page 	= :id_page
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
				$statement->bindParam(":id_page", $_GET["id"], PDO::PARAM_INT);
				$count = $statement->execute();
		
		header('location:../../page-edit-'.$_GET["id"]);
	}
}
?>

<center style="margin-top: 250px;"><img src="../../load.gif"></center>