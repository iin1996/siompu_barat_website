<?php
session_start();
error_reporting(0);

	include "../../../system/koneksi.php";
	include "../../../system/z_setting.php";

	$module=$_GET["module"];
	$module2="laporan-penduduk";
	$hal = "laporan-penduduk";
	$act=$_GET["act"];
	
	// Update modul
	
	if ($module==$module2 AND $act=='edit'){
		

			try {
				$sql = "UPDATE penduduk
						SET 
							nama_penduduk 	= :nama,
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

			
				echo "<script>alert('Halaman berhasil diedit'); window.location = '../../$module2'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal diupdate!'); window.location(history.back(-1))</script>";
				}
		
		
	}

	elseif ($module==$module2 AND $act=='add'){
		


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

						echo "<script>alert('Halaman berhasil ditambah'); window.location = '../../$module2'</script>";
					
				}catch(PDOException $e){
					echo "<script>window.alert('Halaman Gagal ditambah!'); window.location(history.back(-1))</script>";
				}
	}


	elseif ($module==$module2 AND $act=='remove'){
		
		$del = $pdo->query("DELETE FROM penduduk WHERE id_penduduk ='$_GET[id]'");
		$del->execute();
		
		echo "<script>alert('Halaman berhasil dihapus'); window.location = '../../$module2'</script>";
		
	}
	

?>
<center style="margin-top: 250px;"><img src="../../load.gif"></center>