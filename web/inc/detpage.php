<?php include ('slide.php'); ?>
<div class="welcome">
		<!-- container -->
		<div class="container">
			<?php
					$inspiration = $pdo->query("SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
					$gal = $inspiration->fetch(PDO::FETCH_ASSOC);
				?>
			<div class="w3ls-heading" style="text-align: left;margin-left:  15px;margin-right: 15px;margin-bottom: -30px;">
				<h2><?php echo $gal['judul']; ?></h2>
			</div>
			<div class="blog-top-grids"  style="margin: 2em 0 0 0">
				<div class="col-md-12 agile-welcome-grid">
						<div class="blog-left">
						    	<a><img class="img-responsive berita" src="images/order/-<?php echo $gal['gambar']; ?>" /></a>
							<div class="blog-left-right"><br>
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