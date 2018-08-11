<?php
session_start();
//error_reporting(0);

if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	include "../../../system/koneksi.php";
	include "../../../system/fungsi_thumb.php";
	include "../../../system/fungsi_seo.php";

	$module=$_GET["module"];
	$module2="modul";
	$act=$_GET["act"];
	
	if($module==$module2 AND $act=='update'){
		//'Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images'
		
		if(($_POST['jenis_modul']=='Images')OR($_POST['jenis_modul']=='Text Images')OR($_POST['jenis_modul']=='Textarea Images')){			
			$lokasi_file 	= $_FILES['fupload']['tmp_name'];
			$nama_file   	= $_FILES['fupload']['name'];
			$acak           = rand(00,99);
			$nama_file_unik = $acak.$nama_file;
			
			
			$edit = $pdo->query("SELECT gambar FROM modul WHERE id_modul='$_POST[id_modul]'");
			$tedit = $edit->fetch(PDO::FETCH_ASSOC);
			unlink("../../../images/$tedit[gambar]");
			
			if (empty($lokasi_file)){ $gambar=$_POST['gambar']; }else{ Uploadmodul($nama_file_unik); $gambar=$nama_file_unik; }
		}
		
		$nama_seo     	= seo(trim($_POST['nama']));

		try {
			$sql = "UPDATE modul   
					SET nama 			= :nama,
						deskripsi 		= :deskripsi,
						gambar 			= :gambar,
						tgl_update 		= NOW()
					WHERE id_modul 		= :id_modul
				  ";
				  
			$statement = $pdo->prepare($sql);
			$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
			$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
			$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
			$statement->bindParam(":id_modul", $_POST["id_modul"], PDO::PARAM_INT);
			$count = $statement->execute();
			
			echo "<script>alert('Modul berhasil di Update'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_modul]'</script>";
		}catch(PDOException $e){
			echo 'Updated failed!';
			echo 'Error: ' . $e->getMessage();
			
			$this->pdo->rollback();
			
			return false;
		}
	}
}
?>

<center style="margin-top: 250px;"><img src="../../load.gif"></center>