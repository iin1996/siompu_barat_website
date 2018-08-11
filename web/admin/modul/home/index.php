<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	$tanggal = date("Y-m-d"); // Mendapatkan tanggal sekarang
	$bataswaktu       = time() - 300;
	
	$edit1 = $pdo->query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip ASC");
	$edit2 = $pdo->query("SELECT COUNT(hits) as totalz FROM statistik");
	$edit3 = $pdo->query("SELECT hits FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal ASC");
	$edit4 = $pdo->query("SELECT SUM(hits) as totalz FROM statistik");
	$edit5 = $pdo->query("SELECT * FROM statistik WHERE online > '$bataswaktu'");
	
	
	$row_count1 = $edit1->rowCount();
	$row_count3 = $edit3->rowCount();
	$row_count5 = $edit3->rowCount();

	$pengunjung       = $row_count1;
	$totalpengunjung  = $edit2->fetch(PDO::FETCH_ASSOC);
	$hits             = $row_count3;
	$totalhits        = $edit4->fetch(PDO::FETCH_ASSOC);
	$tothitsgbr       = $edit4->fetch(PDO::FETCH_ASSOC);
	$pengunjungonline = $row_count5;
	
?>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $pengunjung; ?></h3>
                  <p>Pengunjung Hari Ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div><!-- ./col -->
			
            <div class="col-lg-3 col-xs-12">
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $hits; ?></h3>
                  <p>Hits Hari Ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div><!-- ./col -->
			
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $pengunjungonline; ?></h3>
                  <p>Pengunjung Online</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div><!-- ./col -->
		  
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $totalhits['totalz']; ?></h3>
                  <p>Total Hits</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div><!-- ./col -->
		  
            <div class="col-lg-12 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $totalpengunjung['totalz']; ?></h3>
                  <p>Total Pengunjung</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div><!-- ./col -->
		  
		  </div>
		</section>
		
		
<?php
}
?>
