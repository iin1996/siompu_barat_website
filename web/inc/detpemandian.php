<div class="welcome">
		<!-- container -->
		<div class="container">
			<?php
					$inspiration = $pdo->query("SELECT * FROM wisata WHERE id_wisata = '$_GET[id]'");
					$gal = $inspiration->fetch(PDO::FETCH_ASSOC);
					if($gal["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "galeri/small/$imgname2-$gal[gambar]";}
				?>
			<div class="w3ls-heading" style="text-align: left;margin-left:  15px;margin-right: 15px;margin-bottom: -30px;">
				<h2><?php echo $gal['nama']; ?></h2>
			</div>
			<div class="blog-top-grids"  style="margin: 2em 0 0 0">
				<div class="col-md-12 agile-welcome-grid">
						<div class="blog-left">
						    	<a><img class="img-responsive berita" src="images/<?php echo $gbr; ?>" /></a>
							<div class="blog-left-right">
								<?php echo $gal['deskripsi']; ?>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
						
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>

	<?php include 'footer.php'?>