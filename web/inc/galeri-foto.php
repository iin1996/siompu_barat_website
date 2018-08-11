<br><br><br>
<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Galeri Foto</h2>
			</div>
				<div class="welcome-grids" style="margin: 2em 0 0 0">
		<div class="col-md-12 agile-welcome-grid">
			<div class="gallery-grids">
				<?php
					$galeri = $pdo->query("SELECT * FROM galeri ORDER BY id_galeri DESC");
					while($gal = $galeri->fetch(PDO::FETCH_ASSOC)){
					$res = $pdo->query('SELECT COUNT(*) FROM galeri');
					$jumlah = $res->fetchColumn();
				?>
					<div class="col-md-3 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="images/galeri/-<?php echo $gal['gambar']; ?>" data-lightbox="<?php echo $gal['judul']; ?> ">
									<img src="images/galeri/-<?php echo $gal['gambar']; ?>" alt="" class="img-responsive"/>
									
								</a>
							</figure>
						</div>
					</div>

					<?php } ?>

					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
					
			</div>
		</div>
		</div>
		</div>
	</div>
<br><br><br>
	<?php include 'footer.php'?>