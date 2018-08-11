<div class="choose">
			<!-- container -->
			<div class="container">
				<h3>Adat Istiadat</h3>
				<br><br><br>
				<?php
					$res = $pdo->query("SELECT COUNT(*) FROM potensi_desa WHERE potensidesa = 'ADAT ISTIADAT' AND id_desa = '$_GET[id]'");
					$jumlah = $res->fetchColumn();
				?>

				<?php if($jumlah != 0){ ?>
				<div class="choose-w3layoutsinfo">

				<?php
					$inspiration = $pdo->query("SELECT * FROM potensi_desa WHERE potensidesa = 'ADAT ISTIADAT' AND id_desa = '$_GET[id]' ORDER BY id_potensi_desa DESC");
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
							<a href="detail-istiadat-<?php echo $gal['nama'];?>-<?php echo $gal['id_potensi_desa'];?>">Selengkapnya</a>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
			<?php } else { ?>
				<div class="alert alert-danger" role="alert" style="text-align: center;">
				 Desa ini tidak mempunyai adat istiadat
				</div>
			<?php } ?>
			</div>
			<!-- //container -->
		</div>

		<br><br><br><br>

	<?php include 'footer.php' ?>