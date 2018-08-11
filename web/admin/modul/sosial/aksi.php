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

	$module=$_GET["module"];
	$module2="sosial";
	$act=$_GET["act"];

	if($module==$module2 AND $act=='update'){
		//'Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images'
			
		try {
			$sql = "UPDATE sosial   
					SET nama 			= :nama
					WHERE id_sosial 		= :id_sosial
				  ";
				  
			$statement = $pdo->prepare($sql);
			$statement->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
			$statement->bindParam(":id_sosial", $_POST["id_sosial"], PDO::PARAM_INT);
			$count = $statement->execute();
			
		 echo "<script>alert('Modul berhasil di Update'); window.location = '../../media.php?module=$module&act=edit&id=$_POST[id_sosial]'</script>";
		}catch(PDOException $e){
			echo "<script>window.alert('Halaman Gagal diedit!'); window.location(history.back(-1))</script>";
		}
	}
}
?>

<center style="margin-top: 250px;"><img src="../../load.gif"></center>