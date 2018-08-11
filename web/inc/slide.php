<section>
	<div id="carousel-example-generic" class="carousel slide">
                        
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
</section>