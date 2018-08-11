<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500">
                        
		<ol class="carousel-indicators hidden-xs">
							
			<?php
				$no=1;
				$slide = $pdo->query("SELECT * FROM slider ORDER BY id_slider");
				$slid = $slide->fetch(PDO::FETCH_ASSOC);
			?>
						
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							
			<?php
				while($slie = $slide->fetch(PDO::FETCH_ASSOC)) {
			?>
								
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo"$no"; ?>"></li>
							
			<?php $no++; } ?>
							
		</ol>
						
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
							
			<?php
				$slider = $pdo->query("SELECT * FROM slider ORDER BY id_slider");
				$slid = $slider->fetch(PDO::FETCH_ASSOC);
			?>
								
				<div class="item active">
					<img class="img-responsive img-full" src="images/slider/-<?php echo"$slid[gambar]"; ?>" alt="<?php echo"$slid[judul]"; ?>">
				</div>
								
			<?php
				while($sl = $slider->fetch(PDO::FETCH_ASSOC)) {
			?>
							
				<div class="item">
					<img class="img-responsive img-full" src="images/slider/-<?php echo"$sl[gambar]"; ?>" alt="<?php echo"$sl[judul]"; ?>">
				</div>
								
			<?php } ?>
						
		</div>

		<!-- Controls -->
		<a class="left carousel-control" data-target="#carousel-example-generic"  data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" data-target="#carousel-example-generic"  data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
	
	<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="welcome-info">
				<h2 class="agileits-title">Tentang Kami</h2>
					<?php
						$profil = $pdo->query("SELECT * FROM page WHERE id_page = '1'");
						$pro = $profil->fetch(PDO::FETCH_ASSOC);
						$home = $pdo->query("SELECT * FROM page WHERE id_page = '0'");
						$hom = $home->fetch(PDO::FETCH_ASSOC);
						$text= $hom["deskripsi"];
						$potong=substr($text, 0, 740);
					?>
				<p><?php echo $pro['deskripsi']; ?></p>
			</div>
		</div>
		<!-- //container -->
	</div>
	
<div class="choose">
			<!-- container -->
			<div class="container">
				<h3>Berita Terbaru</h3>
				<div class="choose-w3layoutsinfo">

				<?php
					$inspiration = $pdo->query("SELECT * FROM berita ORDER BY id_berita DESC");
					while($gal = $inspiration->fetch(PDO::FETCH_ASSOC)){
					$kata = $gal["deskripsi"];
					$potong=substr($kata, 0, 200);
				?>
					<div class="col-md-4 choose-grid">
						<div class="blog-left">
							<div class="blog-left-left">
								<a><img src="images/order/-<?php echo $gal['gambar']; ?>" alt="" /></a>
							</div>
							<div class="blog-left-right">
								<?php echo $gal['judul']; ?>
								<?php echo $potong;?> ...
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="choose-button">
							<a href="detail-berita-<?php echo $gal['seo'];?>-<?php echo $gal['id_berita'];?>">Selengkapnya</a>
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