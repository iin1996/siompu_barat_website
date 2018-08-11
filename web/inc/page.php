
	
	<div class="welcome">
		<!-- container -->
		<div class="container">
				<?php
					$profil = $pdo->query("SELECT * FROM page WHERE id_page='$_GET[id]'");
					$pro = $profil->fetch(PDO::FETCH_ASSOC);
				?>
			<div class="welcome-info">
				<h2 class="agileits-title"><?php echo $pro['nama']; ?></h2>
				<p><?php echo $pro['deskripsi']; ?></p>
			</div>
		</div>
		<!-- //container -->
	</div>
	
	<?php include 'footer.php' ?>