<?php
class pagingProdukAll{
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total page
	function jmlhalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif == 1){
			
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>";
		}elseif($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<a href='$_GET[module]-page-1'><i class='fa fa-arrow-left' aria-hidden='true'></i> First</a> 
							<a href='$_GET[module]-page-$prev' title='Previous'><i class='fa fa-arrow-left' aria-hidden='true'></i></a> ";
		}else{ 
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<i class='fa fa-arrow-left' aria-hidden='true'></i> First < Prev | ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
			if ($i < 1)
				continue;
				$angka .= "<a href=$_GET[module]-page-$i>$i</a> ";
			}
			  $angka .= " <strong class='current-pag'><b>$halaman_aktif</b></strong>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<a href=$_GET[module]-page-$i>$i</a> ";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=$_GET[module]-page-$jmlhalaman>$jmlhalaman</a> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <a href='$_GET[module]-page-$next' title='Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></i></a>
							 <a href='$_GET[module]-page-$jmlhalaman'>Last <i class='fa fa-arrow-right' aria-hidden='true'></i></a>
							 ";
		}else{
			$link_halaman .= "";
		}
		return $link_halaman;
	}
}

class pagingKategoriAll{
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total page
	function jmlhalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif == 1){
			
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>";
		}elseif($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<a href='categories-page-1'><i class='fa fa-arrow-left' aria-hidden='true'></i> First</a> 
							<a href='categories-page-$prev' title='Previous'><i class='fa fa-arrow-left' aria-hidden='true'></i></a> ";
		}else{ 
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<i class='fa fa-arrow-left' aria-hidden='true'></i> First < Prev | ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
			if ($i < 1)
				continue;
				$angka .= "<a href=categories-page-$i>$i</a> ";
			}
			  $angka .= " <strong class='current-pag'><b>$halaman_aktif</b></strong>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<a href=categories-page-$i>$i</a> ";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=categories-page-$jmlhalaman>$jmlhalaman</a> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <a href='categories-page-$next' title='Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></i></a>
							 <a href='categories-page-$jmlhalaman'>Last <i class='fa fa-arrow-right' aria-hidden='true'></i></a>
							 ";
		}else{
			$link_halaman .= "";
		}
		return $link_halaman;
	}
}


class pagingKategori{
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total page
	function jmlhalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif == 1){
			
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>";
		}elseif($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<a href='product-$_GET[seo]-$_GET[id]-page-1'><i class='fa fa-arrow-left' aria-hidden='true'></i> First</a> 
							<a href='product-$_GET[seo]-$_GET[id]-page-$prev' title='Previous'><i class='fa fa-arrow-left' aria-hidden='true'></i></a> ";
		}else{ 
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<i class='fa fa-arrow-left' aria-hidden='true'></i> First < Prev | ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
			if ($i < 1)
				continue;
				$angka .= "<a href=product-$_GET[seo]-$_GET[id]-page-$i>$i</a> ";
			}
			  $angka .= " <strong class='current-pag'><b>$halaman_aktif</b></strong>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<a href=product-$_GET[seo]-$_GET[id]-page-$i>$i</a> ";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=product-$_GET[seo]-$_GET[id]-page-$jmlhalaman>$jmlhalaman</a> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <a href='product-$_GET[seo]-$_GET[id]-page-$next' title='Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></i></a>
							 <a href='product-$_GET[seo]-$_GET[id]-page-$jmlhalaman'>Last <i class='fa fa-arrow-right' aria-hidden='true'></i></a>
							 ";
		}else{
			$link_halaman .= "";
		}
		return $link_halaman;
	}
}




class pagingPrice{
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total page
	function jmlhalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif == 1){
			
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>";
		}elseif($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<a href='price-up-$_GET[price]-page-1'><i class='fa fa-arrow-left' aria-hidden='true'></i> First</a> 
							<a href='price-up-$_GET[price]-page-$prev' title='Previous'><i class='fa fa-arrow-left' aria-hidden='true'></i></a> ";
		}else{ 
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<i class='fa fa-arrow-left' aria-hidden='true'></i> First < Prev | ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
			if ($i < 1)
				continue;
				$angka .= "<a href=price-up-$_GET[price]-page-$i>$i</a> ";
			}
			  $angka .= " <strong class='current-pag'><b>$halaman_aktif</b></strong>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<a href=price-up-$_GET[price]-page-$i>$i</a> ";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=price-up-$_GET[price]-page-$jmlhalaman>$jmlhalaman</a> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <a href='price-up-$_GET[price]-page-$next' title='Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></i></a>
							 <a href='price-up-$_GET[price]-page-$jmlhalaman'>Last <i class='fa fa-arrow-right' aria-hidden='true'></i></a>
							 ";
		}else{
			$link_halaman .= "";
		}
		return $link_halaman;
	}
}




class pagingPriceSort{
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total page
	function jmlhalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif == 1){
			
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>";
		}elseif($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<a href='price-up-$_GET[price]-page-1'><i class='fa fa-arrow-left' aria-hidden='true'></i> First</a> 
							<a href='price-up-$_GET[price]-page-$prev' title='Previous'><i class='fa fa-arrow-left' aria-hidden='true'></i></a> ";
		}else{ 
			$link_halaman .= "<span class='pages'>Page $halaman_aktif of $jmlhalaman:</span>
							<i class='fa fa-arrow-left' aria-hidden='true'></i> First < Prev | ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
			if ($i < 1)
				continue;
				$angka .= "<a href=price-up-$_GET[price]-page-$i>$i</a> ";
			}
			  $angka .= " <strong class='current-pag'><b>$halaman_aktif</b></strong>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<a href=price-up-$_GET[price]-page-$i>$i</a> ";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=price-up-$_GET[price]-page-$jmlhalaman>$jmlhalaman</a> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <a href='price-up-$_GET[price]-page-$next' title='Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></i></a>
							 <a href='price-up-$_GET[price]-page-$jmlhalaman'>Last <i class='fa fa-arrow-right' aria-hidden='true'></i></a>
							 ";
		}else{
			$link_halaman .= "";
		}
		return $link_halaman;
	}
}
?>