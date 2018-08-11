<div class="choose">
			<!-- container -->
			<div class="container">
				<h3>Pantai</h3>
				<br><br><br>
				<div class="choose-w3layoutsinfo">

				<?php
					$inspiration = $pdo->query("SELECT * FROM wisata WHERE wisata = 'PANTAI' ORDER BY id_wisata DESC");
					while($gal = $inspiration->fetch(PDO::FETCH_ASSOC)){
					$kata = $gal["deskripsi"];
					$potong=substr($kata, 0, 200);
					if($gal["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "galeri/small/$imgname2-$gal[gambar]";}
				?>
					<div class="col-md-4 choose-grid">
						<div class="blog-left">
							<div class="blog-left-left">
								<a><img src="images/<?php echo $gbr; ?>" alt="" /></a>
							</div>
							<div class="blog-left-right">
								<?php echo $gal['nama']; ?>
								<?php echo $potong;?> ...
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="choose-button">
							<a href="detail-pantai-<?php echo $gal['nama'];?>-<?php echo $gal['id_wisata'];?>">Selengkapnya</a>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>

		<br><br><br><br>

	<?php include 'footer.php' ?>