<div class="footer"> 
	<?php
		$sosial = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '1'");
		$s = $sosial->fetch(PDO::FETCH_ASSOC);
		$sosial1 = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '2'");
		$s1 = $sosial1->fetch(PDO::FETCH_ASSOC);
		$sosial2 = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '3'");
		$s2 = $sosial2->fetch(PDO::FETCH_ASSOC);
		$sosial3 = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '4'");
		$s3 = $sosial3->fetch(PDO::FETCH_ASSOC);
		$sosial4 = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '7'");
		$s4 = $sosial4->fetch(PDO::FETCH_ASSOC);
		$sosial5 = $pdo->query("SELECT * FROM sosial WHERE id_sosial = '5'");
		$s5 = $sosial5->fetch(PDO::FETCH_ASSOC);
		
	?>
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-6 footer-right">
					<h5>Stay in Touch</h5>
					<form action="#" method="post">
						<input type="text" name="Email" placeholder="Email Id" required="">
						<input type="submit" value="Subscribe">
					</form>
					<div class="footer-right-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31761.710019316022!2d122.47452636807922!3d-5.682215481507367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da467a00070de75%3A0xdc7d5a3172232e78!2sSiompu+Bar.%2C+Kabupaten+Buton%2C+Sulawesi+Tenggara!5e0!3m2!1sid!2sid!4v1531955808398">
						</iframe>

					</div>
				</div>
				<div class="col-md-6 footer-left"> 
					<div class="w3-agileitsicons">
						<ul>
							<li><a href="<?php echo $s['nama']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="twt" href="<?php echo $s1['nama']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
							<li><a class="drbl" href="<?php echo $s2['nama']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
							<li><a class="be" href="<?php echo $s3['nama']; ?>"><i class="fa fa-dribbble" aria-hidden="true"></i> </a></li>
						</ul> 
					</div>
					<div class="f-address">
						<p class="text"><?php echo $s4['nama']; ?></p>
						<p class="number"><?php echo $s5['nama']; ?></p>
					</div>
					<div class="copyright">
						<p>© 2018 - 2019 Pemerintah Desa Siompu Barat All rights reserved</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>