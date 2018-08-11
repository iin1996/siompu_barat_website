<?php
include "z_setting.php";

	//$imgname1 = "red-center";
	//$imgname2 = "red";


function UploadProduk($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/produk/";
	$vdir_upload2 = "../../../images/produk/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1000;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 347;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}

function UploadGaleri($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/galeri/";
	$vdir_upload2 = "../../../images/galeri/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1000;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 347;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}

function UploadTestimoni($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/testimoni/";
	$vdir_upload2 = "../../../images/testimoni/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1000;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 347;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}


function UploadCerita($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/order/";
	$vdir_upload2 = "../../../images/order/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1000;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 347;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}


function UploadDesa($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/desa/";
	$vdir_upload2 = "../../../images/desa/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1000;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 347;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}

function UploadGallery($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/gallery/";
	$vdir_upload2 = "../../../images/gallery/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1200;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_width2 = 250;
	$dst_height2 = ($dst_width2/$src_width)*$src_height;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}

function UploadListing($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload = "../../../images/listing/";
	$vdir_upload2 = "../../../images/listing/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1150;
	$dst_height = ($dst_width/$src_width)*$src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_height2 = 358;
	$dst_width2 = ($dst_height2/$src_height)*$src_width;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	imagealphablending($im2, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im2, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im2, true);
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}




function UploadSlider($fupload_name){
	global $imgname1;
	global $imgname2;
	
	//direktori gambar
	$vdir_upload  = "../../../images/slider/";
	$vdir_upload2 = "../../../images/slider/small/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file    = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = 1349;
	$dst_height = 490;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	//tambahan untuk warna background
    $bgc = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
    imagefilledrectangle($im, 0, 0, $dst_width, $dst_height, $bgc);
	//tambahan
	
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	$dst_width2 = 232;
	$dst_height2 = 124;

	$im2 = imagecreatetruecolor($dst_width2,$dst_height2);
	
	//tambahan untuk warna background
    $bgc = imagecolorallocate($im2, 0xFF, 0xFF, 0xFF);
    imagefilledrectangle($im2, 0, 0, $dst_width2, $dst_height2, $bgc);
	//tambahan
	
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im2,$vdir_upload2 . $imgname2."-" . $fupload_name);
    }
  
	imagedestroy($im_src);
	imagedestroy($im);
	imagedestroy($im2);
}



function UploadModul($fupload_name){
	//direktori gambar
	$vdir_upload = "../../../images/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadPage($fupload_name){
	global $imgname1;
	
	//direktori gambar
	$vdir_upload = "../../../images/";
	$vfile_upload = $vdir_upload . $fupload_name;
	$tipe_file   = $_FILES['fupload']['type'];

	//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

	//identitas file asli  
	if ($tipe_file=="image/jpeg" ){
		$im_src = imagecreatefromjpeg($vfile_upload);
	}elseif ($tipe_file=="image/png" ){
		$im_src = imagecreatefrompng($vfile_upload);
	}elseif ($tipe_file=="image/gif" ){
		$im_src = imagecreatefromgif($vfile_upload);
    }elseif ($tipe_file=="image/wbmp" ){
		$im_src = imagecreatefromwbmp($vfile_upload);
    }
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	$dst_width = $src_width;
	$dst_height = $src_height;

	$im = imagecreatetruecolor($dst_width,$dst_height);
	
	// Turn off transparency blending (temporarily)
	imagealphablending($im, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha($im, 0, 0, 0, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill($im, 0, 0, $color);
	// Restore transparency blending
	imagesavealpha($im, true);
	//0, 0, 0, 0 letak gambar
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	if ($_FILES["fupload"]["type"]=="image/jpeg" ){
		imagejpeg($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/png" ){
		imagepng($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif ($_FILES["fupload"]["type"]=="image/gif" ){
		imagegif($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
		imagewbmp($im,$vdir_upload . $imgname1."-" . $fupload_name);
    }

	imagedestroy($im_src);
	imagedestroy($im);
}

?>
