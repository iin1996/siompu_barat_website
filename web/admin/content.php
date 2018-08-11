<?php
//error_reporting(E_PARSE); 

// Bagian Home
if ($_SESSION['leveladmin']=='admin'){
	if ($_GET['module']=='home'){
		include "modul/home/index.php";
	}

	elseif($_GET['module']=='page'){
		include "modul/page/index.php";
	}

	elseif($_GET['module']=='sosial'){
		include "modul/sosial/index.php";
	}

	elseif($_GET['module']=='perangkat-desa'){
		include "modul/perangkat-desa/index.php";
	}

	elseif($_GET['module']=='peraturan-desa'){
		include "modul/peraturan-desa/index.php";
	}

	elseif($_GET['module']=='desa'){
		include "modul/desa/index.php";
	}

	elseif($_GET['module']=='kepdes'){
		include "modul/kepdes/index.php";
	}

	elseif($_GET['module']=='mutasi'){
		include "modul/mutasi/index.php";
	}

	elseif($_GET['module']=='kematian'){
		include "modul/kematian/index.php";
	}

	elseif($_GET['module']=='lahir'){
		include "modul/lahir/index.php";
	}

	elseif($_GET['module']=='inspirasi'){
		include "modul/inspirasi/index.php";
	}
	
	elseif($_GET['module']=='slider'){
		include "modul/slider/index.php";
	}

	elseif($_GET['module']=='profil'){
		include "modul/profil/index.php";
	}

	elseif($_GET['module']=='galeri'){
		include "modul/galeri/index.php";
	}

	elseif($_GET['module']=='potensi-desa'){
		include "modul/potensi-desa/index.php";
	}

	elseif($_GET['module']=='wisata'){
		include "modul/wisata/index.php";
	}
	
	elseif($_GET['module']=='materi'){
		include "modul/materi/index.php";
	}

	elseif($_GET['module']=='video'){
		include "modul/video/index.php";
	}

	elseif($_GET['module']=='modul'){
		include "modul/modul/index.php";
	}

	elseif($_GET['module']=='contact'){
		include "modul/contact/index.php";
	}
	
	elseif($_GET['module']=='admin'){
		include "modul/admin/index.php";
	}
	
	elseif($_GET['module']=='error'){
		include "modul/error/index.php";
	}
	
	// Apabila modul tidak ditemukan
	else{
	  echo "<p><b>not found!</b></p>";
	}

}else{
    if($_GET['module']=='laporan-penduduk'){
		include "modul/laporan-penduduk/index.php";
	}

	elseif($_GET['module']=='laporan-mutasi'){
		include "modul/laporan-mutasi/index.php";
	}

	if($_GET['module']=='penduduk'){
		include "modul/penduduk/index.php";
	}
}

?>
