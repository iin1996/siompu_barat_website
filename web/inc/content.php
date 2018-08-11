<?php 
if($_GET['module']=='home') { 
	include("home.php");
}

elseif($_GET['module']=='produk-training') { 
	include("produk-training.php");
}

elseif($_GET['module']=='sejarah') { 
	include("sejarah.php");
}
elseif($_GET['module']=='page'){
	include "page.php";
}
elseif($_GET['module']=='kependudukan'){
	include "kependudukan.php";
}
elseif($_GET['module']=='profil-desa') { 
	include("profil-desa.php");
}
elseif($_GET['module']=='detail-home') { 
	include("detail-home.php");
}

elseif($_GET['module']=='dusun') { 
	include("dusun.php");
}

elseif($_GET['module']=='detail-dusun') { 
	include("detail-dusun.php");
}

elseif($_GET['module']=='lihat-hubungi-kami') { 
	include("lihat-hubungi-kami.php");
}
elseif($_GET['module']=='pakaian') { 
	include("pakaian.php");
}
elseif($_GET['module']=='detpakaian') { 
	include("detpakaian.php");
}
elseif($_GET['module']=='tenunan') { 
	include("tenunan.php");
}
elseif($_GET['module']=='dettenunan') { 
	include("dettenunan.php");
}
elseif($_GET['module']=='adat-istiadat') { 
	include("adat-istiadat.php");
}
elseif($_GET['module']=='detistiadat') { 
	include("detistiadat.php");
}
elseif($_GET['module']=='makanan-khas') { 
	include("makanan-khas.php");
}
elseif($_GET['module']=='detmakanankhas') { 
	include("detmakanankhas.php");
}
elseif($_GET['module']=='pemandian') { 
	include("pemandian.php");
}
elseif($_GET['module']=='detpemandian') { 
	include("detpemandian.php");
}
elseif($_GET['module']=='pantai') { 
	include("pantai.php");
}
elseif($_GET['module']=='detpantai') { 
	include("detpantai.php");
}
elseif($_GET['module']=='detpage') { 
	include("detpage.php");
}

elseif($_GET['module']=='galeri-foto') { 
	include("galeri-foto.php");
}


elseif($_GET['module']=='galeri-video') { 
	include("galeri-video.php");
}

elseif($_GET['module']=='video') { 
	include("video.php");
}

elseif($_GET['module']=='searching') { 
	include("aksi/aksi_searching.php");
}

elseif($_GET['module']=='kontak') { 
	include("kontak.php");
}

elseif($_GET['module']=='detail-produk-training') { 
	include("detail_produk_training.php");
}

else{
	echo "ERROR";
}
?>