<?php
error_reporting(0);
$default 	= "";
$default2 	= "";
$default3 	= "gishanfloristklaten.com";

if(($_GET['module']=='home')OR($_GET['module']=='produk')OR($_GET['module']=='cerita')OR($_GET['module']=='kontak')){
	$tseo = $pdo->query("SELECT title, keyword, description FROM page WHERE id_page='$_GET[id]'");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);

	$title = "$seo[title]";
	$keyword = "$seo[keyword]";
	$description = "$seo[description]";
	
}elseif($_GET['module']=='detproduk'){
	$tirl = $pdo->query("SELECT judul, keyword, description FROM produk WHERE id_produk='$_GET[id]'");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$title = "$ttirl[judul] | $default";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";
	
}elseif($_GET['module']=='detcerita'){
	$tirl = $pdo->query("SELECT judul, keyword, description FROM cerita WHERE id_cerita='$_GET[id]'");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$title = "$ttirl[judul] | $default";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";
	
}else{
	echo "$default";
}
?>