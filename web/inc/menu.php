
        <div class="kode_navigation_outr_wrap bgwhite">
            <div>
                <!--Logo Wrap Start-->
                <div class="kode_logo">
                    <a href="home"><img src="images/logo.png" alt="Jogja Regale" width="350px"></a>
                </div>
                <!--Logo Wrap Start-->
                
                <!--Navigation Wrap Start-->
                <div class="kode_ui_element">
                    
                    <!--Navigation Wrap Start-->
                    <div class="kode_menu">
                        <ul>
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="produk">Produk Kami</a>
                                <ul>
								<?php
								$kate = $pdo->query("SELECT * FROM produk ORDER BY id_produk ASC");
								while($tkate = $kate->fetch(PDO::FETCH_ASSOC)) {
								?>
                                    <li><a href="<?php echo $imgname1.'-'.$tkate['judul_seo']; ?>-<?php echo $tkate['id_produk']; ?>"><?php echo $tkate['judul']; ?></a></li>
								<?php
								}
								?>
                                </ul>
                            </li>
							<li><a href="cerita">Cerita</a></li>
							<li><a href="kontak">Kontak</a></li>
							<li style="padding-left: 40px;"><a href="<?php echo $deskrip[20]; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $deskrip[17]; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!--Navigation Wrap End-->
					
					<!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper"><div style="color: white; float: left; text-align: center; /* width: 100%; */ font-size: large; font-weight: bold; padding-top: 7px; padding-left: 10px;">Menu</div>
						<button class="dl-trigger"><div style="color: white;">Home</div></button>
						<ul class="dl-menu">
                            <li class="active"><a href="home">Home</a></li>
                            <li class="menu-item kode-parent-menu"><a href="#">Produk Kami</a>
								<ul class="dl-submenu">
								<?php
								$kate = $pdo->query("SELECT * FROM produk ORDER BY id_produk ASC");
								while($tkate = $kate->fetch(PDO::FETCH_ASSOC)) {
								?>
                                    <li><a href="<?php echo $imgname1.'-'.$tkate['judul_seo']; ?>-<?php echo $tkate['id_produk']; ?>"><?php echo $tkate['judul']; ?></a></li>
								<?php
								}
								?>
                                </ul>
                            </li>
							<li><a href="cerita">Cerita</a></li>
							<li><a href="kontak">Kontak</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                    
                </div>
                <!--Navigation Wrap End-->
                
            </div>
        </div>