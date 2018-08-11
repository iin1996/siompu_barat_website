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
	include "../../../system/fungsi_download.php";

	$module=$_GET["module"];
	$module2="materi";
	$hal = "materi";
	$act=$_GET["act"];
	
	// Update modul
	if ($module==$module2 AND $act=='add'){
				$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
                $file_name      = $_FILES['file']['name'];
                $file_ext       = strtolower(end(explode('.', $file_name)));
                $file_size      = $_FILES['file']['size'];
                $file_tmp       = $_FILES['file']['tmp_name'];
 				$acak           = rand(00,99);
                $nama           = $_POST['nama'];
                $nama_file_unik = $nama."-".$acak.".".$file_ext;
                
                   
                try{



					$stmt = $pdo->prepare("INSERT INTO materi
											(tanggal_upload, nama_file, tipe_file,ukuran_file, file)
										VALUES(now(),:nama,:file_ext,:file_size,:lokasi )" );

					
					$stmt->bindParam(":nama", $nama, PDO::PARAM_STR);
					$stmt->bindParam(":file_ext", $file_ext, PDO::PARAM_STR);	
					$stmt->bindParam(":file_size", $file_size, PDO::PARAM_STR);
					$stmt->bindParam(":lokasi", $nama_file_unik, PDO::PARAM_STR);						
					
				
					$count = $stmt->execute();

					
					 $lokasi = '../../../images/files/'.$nama_file_unik.'.'.$file_ext;

                 	 move_uploaded_file($file_tmp, $lokasi);

					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
        
              
			
		
	}
	  
	
	// remove modul
	elseif ($module==$module2 AND $act=='remove'){
		
		$edit = $pdo->query("SELECT file FROM materi WHERE id_materi='$_GET[id]'");
		$rr = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/files/$rr[file]");
		
		$del = $pdo->query("DELETE FROM materi WHERE id_materi ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
	}

	
}



?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>