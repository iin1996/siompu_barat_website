<?php 
include ('inc/slide.php');
$cari 	= $_POST['query'];

if(isset($cari))
{ 
	if(!empty($cari))
	{ 
?>
<div class="welcome" style="
    margin-bottom: -50px;
">
<!-- PARALLAX BACKGROUND IMAGE -->				
	<div class="container">
		<div class="alert alert-success" role="alert">Hasil Pencarian Dengan Kata Kunci <strong><?php echo $cari;?></strong></div>
	</div>
</div>	

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="blog-posts">
		
			<?php 

			$res = $pdo->query("select * from cerita where judul like '%$cari%' or deskripsi like '%$cari%' order by id_cerita");
			$jumlah = $res->fetchColumn();
		
			if($jumlah > 0 ){ ?>
			


<div class="welcome">
		<!-- container -->
		<div class="container">
					<?php
					while($tt = $res->fetch(PDO::FETCH_ASSOC)){
					$produk = $pdo->query("SELECT * FROM cerita  WHERE id_cerita = '$tt[id_cerita]'");
				    $prs = $produk->fetch(PDO::FETCH_ASSOC);
					$texts = $prs["deskripsi"];
					$potong=substr($texts, 0, 839);
					
				?>
			<div class="w3ls-heading" style="text-align: left;margin-left:  15px;margin-right: 15px;margin-bottom: -30px;">
				<h2><?php echo $prs['judul']; ?></h2>
			</div>
			<div class="blog-top-grids"  style="margin: 2em 0 0 0">
				<div class="col-md-12 agile-welcome-grid">
						<div class="blog-left">
						    	<a><img class="img-responsive berita" src="images/order/-<?php echo $prs['gambar']; ?>" /></a>
							<div class="blog-left-right"><br>
								<?php echo $prs['deskripsi']; ?>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
						
				
				
				<div class="clearfix"> </div>
			</div>
			<?php } ?>
		</div>
		<!-- //container -->
	</div>

				
				<?php
			}else{
				echo '<div class="alert alert-info" role="alert">Maaf Kata Kunci Yang Anda Masukkan Tidak Ada</div>';
			}
			?>
		
             </div>
</div>
				
			</div>
				
		</div>
	</div>
</section>
	

<!-- jika data yang di masukan kosong ke bagian ini -->
<?php 
	}
	else
	{
		echo '<div class="alert alert-info" role="alert">Ups Sorry. Please enter a search query.</div>';
	}
}
else
{
	echo '<div class="alert alert-info" role="alert">Ups Sorry. Please enter a search query.</div>';
}
?>

<?php include 'inc/footer.php'?>
