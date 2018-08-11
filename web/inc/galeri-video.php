	<br>
<div class="choose">
		<div class="container">
			<h3>Galeri Video</h3>
	<br><br><br>

				<div class="col-md-12 column">
					<div class="row">
						<div class="portfolio-sec with-gap">
							<?php
								$video = $pdo->query("SELECT * FROM video ORDER BY id");
								$res = $pdo->query('SELECT COUNT(*) FROM video');
								$jumlah = $res->fetchColumn();
								if ($jumlah == "" OR $jumlah == "0") {
												echo"
													<div class='col-sm-12' style='margin-bottom: 40px;'>
														<div class='alert alert-danger'>
															<center>Maaf Video Masih Kosong !!!</center>
														</div>
													</div><br><br>
												";
												} else {
								while($fot = $video->fetch(PDO::FETCH_ASSOC)){
							?>
																						
											<div class="col-md-3">
											
													<div class="widget">
													<div class="video-widget">
													<div class="popup-video">
											  	<?php echo youtube($fot['video']);?>
													<a data-rel="prettyPhoto" href="<?php echo $fot['video']?>" title=""><img src="images/icon-play2.png" alt="" /></a>
													</div>
												<h3 style="font-size: 13px;"><?php echo"$fot[judul]" ?></h3>
													</div>
													</div><!-- Video Widget -->
													
											
													
				
										  </div>
											
											<?php } } ?>
														
														
									</div>				
							</div>
					</div>
				
			</div>
		</div>

		<br><br><br><br><br>
	<?php include 'footer.php'?>