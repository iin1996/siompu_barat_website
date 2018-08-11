<?php
	ob_start();
	error_reporting(0);
	include "system/koneksi.php";
	include "system/seo.php";
	include "system/fungsi_youtube.php";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Kecamatan Siompu Barat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kecamatan Siompu Barat" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />  
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/lightbox.css">				<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	 

<script src="js/menu_jquery.js"></script> <!-- pop-up -->	
 

<!-- //js -->
</head>
<body>

	<div class="header">
		<!-- container -->
		<div class="container">
			<div class="header-bottom">
				<div class="w3ls-logo logoatas">
					<img src="images/logo.png">
					<div class="tulislogo">
										<span class="tapanuli">PEMERINTAH DESA SIOMPU BARAT</span><br>
										<span class="desa">KECAMATAN SIOMPU BARAT</span><br>
										<!-- <span class="alamatbaru">SAROGODUNG</span><br> -->

								</div>
					<!-- <h1><a href="index.html">Fuel <span>Serve</span></a></h1> -->
				</div>
				<div class="header-top-right">
						<form method="POST" action="searching">
						 <input type="text" name="query" placeholder="Search" required=""/>
						<input type="submit" value="">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="container">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="home-icon"><a href="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>

							<!--<li><a href="page-11" class="active">PPID</a></li>-->
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL KECAMATAN <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="page-11">VISI MISI</a></li>
									<li><a class="hvr-bounce-to-bottom" href="sejarah">SEJARAH SIOMPU BARAT</a></li>
									<li><a class="hvr-bounce-to-bottom" href="kependudukan">KEPENDUDUKAN</a></li>        
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL DESA <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php
												$blog = $pdo->query("SELECT * FROM desa ORDER BY id_desa ASC");
												while($tblog = $blog->fetch(PDO::FETCH_ASSOC)) {
												echo '
													<li><a class="hvr-bounce-to-bottom" href="detail-profil-desa-'.$tblog["seo"].'-'.$tblog["id_desa"].'">'.$tblog["judul"].'</a></li>
													';
													}
											?>      
								</ul>
							</li>
							<!-- <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POTENSI DESA <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="pakaian">PAKAIAN</a></li>
									<li><a class="hvr-bounce-to-bottom" href="tenunan">TENUNAN</a></li>
									<li><a class="hvr-bounce-to-bottom" href="adat-istiadat">ADAT ISTIADAT</a></li>   
									<li><a class="hvr-bounce-to-bottom" href="makanan-khas">MAKANAN KHAS</a></li>        
								</ul>
							</li>
 -->

							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POTENSI DESA <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php
										$dessa = $pdo->query("SELECT * FROM desa ORDER BY id_desa ASC");
										while($dd = $dessa->fetch(PDO::FETCH_ASSOC)) {	
									?>
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">
										<?php echo $dd['judul']; ?> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="pakaian-<?php echo $dd['judul'];?>-<?php echo $dd['id_desa'];?>">PAKAIAN</a></li>
											<li><a href="tenunan-<?php echo $dd['judul'];?>-<?php echo $dd['id_desa'];?>">TENUNAN</a></li>
											<li><a href="adat-istiadat-<?php echo $dd['judul'];?>-<?php echo $dd['id_desa'];?>">ADAT ISTIADAT</a></li>   
											<li><a href="makanan-khas-<?php echo $dd['judul'];?>-<?php echo $dd['id_desa'];?>">MAKANAN KHAS</a></li>      
										</ul>
									</li> 
									<?php } ?>         
								</ul>
							</li>	
							 
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WISATA <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="pemandian">PEMANDIAN</a></li>
									<li><a class="hvr-bounce-to-bottom" href="pantai">PANTAI</a></li>
								</ul>
							</li>	 

							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALERI <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="galeri-foto">FOTO</a></li>
									<li><a class="hvr-bounce-to-bottom" href="galeri-video">VIDEO</a></li>
								</ul>
							</li>	
							<li><a href="kontak">KOTAK SARAN</a></li>
							<li><a href="admin">ADMIN</a></li>
						</ul>	
						<div class="clearfix"> </div>
					</div>	
				</nav>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<?php include ('inc/content.php'); ?>
	
	<!-- //footer -->
	<!-- smooth-scrolling-of-move-up --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});

	</script> 
	<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
    <script type='text/javascript'>
		function refresh_Captcha(){
			var img = document.images['captcha_img'];
			img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
		}
	</script>


	<!-- //smooth-scrolling-of-move-up -->
</body>
</html>