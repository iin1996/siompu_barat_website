<?php
$default 	= "Dokter Agung Kris";
$default2 	= "Dokter Agung Kris";
$default3 	= "DokterAgungKris.com";

if(($_GET['module']=='home')OR($_GET['module']=='produk-training')){
	$tirl = $pdo->query("SELECT title, keyword, description FROM page WHERE id_page='$_GET[id]'");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$title = "$ttirl[title]";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";
	
}elseif($_GET['module']=='about'){
	echo "About | $default";
	
}else{
	echo "$default";
}
?>