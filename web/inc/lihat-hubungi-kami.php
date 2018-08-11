
	<div class="welcome">
				<div class="container">
				
			
		<div class="welcome-grids" style="margin-top: -40px;">
			<?php
				$profil = $pdo->query("SELECT * FROM masukkan ORDER BY id_masukkan ASC");
				while($pro = $profil->fetch(PDO::FETCH_ASSOC)){
				
			?>
				<div class="agileinfo-welcome-right" style="border-bottom: solid 1px #ddd;padding-bottom: 10px;">
					<p style="text-align: left;font-weight: bold;font-size: 23px;">Pengirim :  <span style="font-weight: 100;font-size: 17px;"><?php echo $pro['nama'];?></span></p>
					<p style="text-align: left;font-weight: bold;font-size: 23px;">Pesan :  <span style="font-weight: 100;font-size: 17px;"><?php echo $pro['pesan'];?></span></p>
				</div>
		<?php } ?>
			</div>
		
		</div>
	</div>

	<?php include ('footer.php'); ?>
