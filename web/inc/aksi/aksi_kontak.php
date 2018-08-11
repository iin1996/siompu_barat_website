<?php
session_start();
include ("../../system/koneksi.php");


$nama 		= $_POST['nama'];
$email 		= $_POST['email'];
$subjek 	= $_POST['subjek'];
$pesan 		= $_POST['pesan'];


if(trim($nama) == '')
{
	echo "<script>alert('Maaf! Nama tidak boleh kosong.'); window.location = 'kontak';</script>";
}
else if(trim($email) == '')
{
	echo "<script>alert('Maaf! Email tidak boleh kosong.'); window.location = 'kontak';</script>";
} 
else if(trim($subjek) == '')
{
	echo "<script>alert('Maaf! Subjek tidak boleh kosong.'); window.location = 'kontak';</script>";
} 
else if(trim($pesan == ''))
{
	echo "<script>alert('Maaf! Pesan tidak boleh kosong.'); window.location = 'kontak';</script>";
}
else
{

			try{
					$stmt = $pdo->prepare("INSERT INTO masukkan
											(nama,email,subjek,pesan)
											VALUES(:nama,:email,:subjek,:pesan)" );
					
					$stmt->bindParam(":nama", $nama, PDO::PARAM_STR);
					$stmt->bindParam(":email", $email, PDO::PARAM_STR);		
					$stmt->bindParam(":subjek", $subjek, PDO::PARAM_STR);			
					$stmt->bindParam(":pesan", $pesan, PDO::PARAM_STR);
				
				
					$count = $stmt->execute();
					
					$insertId = $pdo->lastInsertId();
				
					echo "<script>alert('Terimakasih! Pesan anda telah berhasil terkirim.'); window.location = 'home';</script>";		
					
				}catch(PDOException $e){
						echo "<script>alert('Maaf! Pesan anda tidak terkirim.'); window.location = 'kontak';</script>";
				}
	
}
?>