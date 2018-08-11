
<?php include ('slide.php'); ?>

	<div class="welcome">
				<div class="container">
				
			<?php
				$profil = $pdo->query("SELECT * FROM page WHERE id_page = '0'");
				$pro = $profil->fetch(PDO::FETCH_ASSOC);
				$text= $pro["deskripsi"];
				
			?>
		<div class="welcome-grids" style="margin-top: -40px;">
				

				<div class="agileinfo-welcome-right">
					<a href="#"><p><?php echo $text;?> </p></a>
				</div>
		
			</div>
		</div>
	</div>
