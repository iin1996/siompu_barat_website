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
	$module2="peraturan-desa";
	$hal = "peraturan-desa";
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
				$edit = $pdo->query("SELECT gambar FROM desa WHERE id_desa ='$_POST[id_desa]'");
				$tedit = $edit->fetch(PDO::FETCH_ASSOC);
				unlink("../../../images/desa/$imgname1-$tedit[gambar]");
				unlink("../../../images/desa/small/$imgname2-$tedit[gambar]");
				
				UploadDesa($nama_file_unik);

				try {
				$sql = "UPDATE desa
						SET judul 			= :judul,
							judul_seo 		= :judul_seo,
							deskripsi 		= :deskripsi,
							sejarah			= :sejarah,
							keyword 		= :keyword,
							description 	= :description,
							gambar 			= :gambar,
							tgl_update 		= NOW()
						WHERE id_desa 	= :id_desa
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$statement->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);
				$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
				$statement->bindParam(":sejarah", $_POST["sejarah"], PDO::PARAM_STR);
				$statement->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
				$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
				$statement->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
				$statement->bindParam(":id_desa", $_POST["id_desa"], PDO::PARAM_INT);
				$count = $statement->execute();
				unlink("../../../images/desa/$nama_file_unik");
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_desa]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../produk-edit-$_POST[id_desa]'</script>";
			}
		 }
		}else{
			try {
				$sql = "UPDATE desa
						SET judul 			= :judul,
							judul_seo 		= :judul_seo,
							deskripsi 		= :deskripsi,
							sejarah			= :sejarah,
							keyword 		= :keyword,
							description 	= :description,
							tgl_update 		= NOW()
						WHERE id_desa 	= :id_desa
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
				$statement->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);
				$statement->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
				$statement->bindParam(":sejarah", $_POST["sejarah"], PDO::PARAM_STR);
				
				$statement->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
				$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
				$statement->bindParam(":id_desa", $_POST["id_desa"], PDO::PARAM_INT);
				$count = $statement->execute();
			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_desa]'</script>";
			}catch(PDOException $e){
				echo "<script>alert('Halaman Gagal diedit!'); window.location = '../../produk-edit-$_POST[id_desa]'</script>";
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

		if(empty($_POST["sejarah"])){
			echo "<script>window.alert('Sejarah Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}elseif(empty($nama_file)){
			echo "<script>window.alert('Gambar Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
		}else{
			if( ($ukuran==0) OR ($ukuran==02) OR ($ukuran>2060817) ){
				echo "<script>window.alert('Gagal Upload Gambar, ukuran gambar lebih dari 2 MB !'); window.location(history.back(-1))</script>";
			}else{

				try{
					$stmt = $pdo->prepare("INSERT INTO desa
											(judul,judul_seo,deskripsi,sejarah,keyword,description,gambar,tgl_post, tgl_update)
											VALUES(:judul,:judul_seo,:deskripsi,:sejarah,:keyword,:description,:gambar, now(), now() )" );
					
					$stmt->bindParam(":judul", $_POST["judul"], PDO::PARAM_STR);
					$stmt->bindParam(":judul_seo", $judul_seo, PDO::PARAM_STR);				
					$stmt->bindParam(":deskripsi", $_POST["deskripsi"], PDO::PARAM_STR);
					$stmt->bindParam(":sejarah", $_POST["sejarah"], PDO::PARAM_STR);
					$stmt->bindParam(":keyword", $_POST["keyword"], PDO::PARAM_STR);
					$stmt->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
					$stmt->bindParam(":gambar", $nama_file_unik, PDO::PARAM_STR);
					
	
					$count = $stmt->execute();
					UploadDesa($nama_file_unik);
					unlink("../../../images/desa/$nama_file_unik");
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
		
		$del = $pdo->query("DELETE FROM desa WHERE id_desa='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
		
	}

	elseif($module==$module2 AND $act=='romoveimg'){
		$edit = $pdo->query("SELECT gambar FROM desa WHERE id_desa='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		unlink("../../../images/desa/$imgname1-$tedit[gambar]");
		unlink("../../../images/desa/small/$imgname2-$tedit[gambar]");
			
				$sql = "UPDATE desa   
						SET gambar 			= :gambar
						WHERE id_desa 	= :id_desa
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":gambar", $gambar, PDO::PARAM_STR);
				$statement->bindParam(":id_desa", $_GET["id"], PDO::PARAM_INT);
				$count = $statement->execute();
		
		header('location:../../'.$module2.'-edit-'.$_GET['id']);
	}
	
elseif ($module==$module2 AND $act=='tambahdusun'){
		


				try{
					$stmt = $pdo->prepare("INSERT INTO dusun
											(nama_dusun,id_desa,jumlah_rt,jumlah_rw)
											VALUES(:nama_dusun,:id_desa,:jumlah_rt,:jumlah_rw)" );
					
					$stmt->bindParam(":nama_dusun", $_POST["nama"], PDO::PARAM_STR);
					$stmt->bindParam(":id_desa", $_POST["id_desa"], PDO::PARAM_STR);				
					$stmt->bindParam(":jumlah_rt", $_POST["rt"], PDO::PARAM_STR);
					$stmt->bindParam(":jumlah_rw", $_POST["rw"], PDO::PARAM_STR);
				
	
					$count = $stmt->execute();
				
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-dusun-$_POST[id_desa]'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
	}
	elseif ($module==$module2 AND $act=='editdusun'){
		

			try {
				$sql = "UPDATE dusun
						SET nama_dusun 		= :nama_dusun,
							jumlah_rt		= :jumlah_rt,
							jumlah_rw 		= :jumlah_rw
						WHERE id_dusun 		= :id_dusun
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":nama_dusun", $_POST["nama"], PDO::PARAM_STR);
				$statement->bindParam(":jumlah_rt", $_POST["rt"], PDO::PARAM_STR);
				$statement->bindParam(":jumlah_rw", $_POST["rw"], PDO::PARAM_STR);
				$statement->bindParam(":id_dusun", $_POST["id_dusun"], PDO::PARAM_INT);
				$count = $statement->execute();

			
				echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-dusun-$_POST[id_desa]'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
		
		
	}

	elseif ($module==$module2 AND $act=='removedusun'){
		
		$del = $pdo->query("DELETE FROM dusun WHERE id_dusun ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2-dusun-$_GET[id_desa]'</script>";
		
	}

	elseif ($module==$module2 AND $act=='editpenduduk'){
		

			try {
				$sql = "UPDATE penduduk
						SET nama_penduduk 	= :nama,
							id_dusun		= :id_dusun,
							no_kk			= :kk,
							nik             = :nik,
							alamat			= :alamat,
							tempat_lahir	= :tl,
							status_menikah  = :status_menikah,
							pekerjaan		= :pekerjaan,
							agama			= :agama,
							tgl_lahir		= :ttl,
							jenis_kelamin	= :jenis_kelamin,
							no_hp           = :hp,
							pendidikan_terakhir = :pendidikan
						WHERE id_penduduk 		= :id_penduduk
					  ";
					  
				$statement = $pdo->prepare($sql);
				$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
				$statement->bindParam(":id_dusun", $_POST["id_dusun"], PDO::PARAM_STR);
				$statement->bindParam(":kk", $_POST["kk"], PDO::PARAM_STR);
				$statement->bindParam(":nik", $_POST["nik"], PDO::PARAM_STR);
				$statement->bindParam(":alamat", $_POST["alamat"], PDO::PARAM_STR);
				$statement->bindParam(":tl", $_POST["tl"], PDO::PARAM_STR);
				$statement->bindParam(":status_menikah", $_POST["status_menikah"], PDO::PARAM_STR);
				$statement->bindParam(":pekerjaan", $_POST["pekerjaan"], PDO::PARAM_STR);
				$statement->bindParam(":agama", $_POST["agama"], PDO::PARAM_STR);
				$statement->bindParam(":ttl", $_POST["ttl"], PDO::PARAM_STR);
				$statement->bindParam(":jenis_kelamin", $_POST["jenis_kelamin"], PDO::PARAM_STR);
				$statement->bindParam(":hp", $_POST["hp"], PDO::PARAM_STR);
				$statement->bindParam(":pendidikan", $_POST["pendidikan"], PDO::PARAM_STR);
				$statement->bindParam(":id_penduduk", $_POST["id_penduduk"], PDO::PARAM_INT);
				$count = $statement->execute();

			
				echo "<script>alert('Halaman berhasil di update'); window.location = '../../$module2-penduduk-$_POST[id_dusun]'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal diupdate!'); window.location(history.back(-1))</script>";
				}
		
		
	}

	elseif ($module==$module2 AND $act=='tambahpenduduk'){
		


				try{
					$stmt = $pdo->prepare("INSERT INTO penduduk
											(nama_penduduk,id_dusun,no_kk,nik,alamat,tempat_lahir,status_menikah,pekerjaan,agama,tgl_lahir,jenis_kelamin,no_hp,pendidikan_terakhir)
											VALUES(:nama,:id_dusun,:kk,:nik,:alamat,:tl,:status_menikah,:pekerjaan,:agama,:ttl,:jenis_kelamin,:hp,:pendidikan)" );
					
					$stmt->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
					$stmt->bindParam(":id_dusun", $_POST["id_dusun"], PDO::PARAM_STR);				
					$stmt->bindParam(":kk", $_POST["kk"], PDO::PARAM_STR);
					$stmt->bindParam(":nik", $_POST["nik"], PDO::PARAM_STR);
					$stmt->bindParam(":alamat", $_POST["alamat"], PDO::PARAM_STR);
					$stmt->bindParam(":tl", $_POST["tl"], PDO::PARAM_STR);
					$stmt->bindParam(":status_menikah", $_POST["status_menikah"], PDO::PARAM_STR);
					$stmt->bindParam(":pekerjaan", $_POST["pekerjaan"], PDO::PARAM_STR);
					$stmt->bindParam(":agama", $_POST["agama"], PDO::PARAM_STR);
					$stmt->bindParam(":ttl", $_POST["ttl"], PDO::PARAM_STR);
					$stmt->bindParam(":jenis_kelamin", $_POST["jenis_kelamin"], PDO::PARAM_STR);
					$stmt->bindParam(":hp", $_POST["hp"], PDO::PARAM_STR);
					$stmt->bindParam(":pendidikan", $_POST["pendidikan"], PDO::PARAM_STR);
				
	
					$count = $stmt->execute();
				
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2-penduduk-$_POST[id_dusun]'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
	}


	elseif ($module==$module2 AND $act=='removependuduk'){
		
		$del = $pdo->query("DELETE FROM penduduk WHERE id_penduduk ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2-penduduk-$_GET[id_dusun]'</script>";
		
	}
	
}
?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>