<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="w3ls-heading" style="text-align: left;margin-left:  15px;margin-right: 15px;margin-bottom: -30px;">
				<h2>Sejarah Siompu Barat</h2>
			</div><br><br>
			<div class="blog-top-grids"  style="margin: 2em 0 0 0">
				<?php
					$sejarahh = $pdo->query("SELECT * FROM desa ORDER BY id_desa ASC");
					while($gal = $sejarahh->fetch(PDO::FETCH_ASSOC)){
					if($gal["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "desa/small/$imgname2-$gal[gambar]";}
				?>
				<div class="col-md-6 agile-welcome-grid">
						<div class="blog-left">
						    	<a><img class="img-responsive berita" src="images/<?php echo $gbr; ?>" /></a>
							<div class="blog-left-right">
								<h3 style="text-align: left;"><?php echo $gal['judul'];?></h3>
								<?php echo $gal['sejarah']; ?>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>

			<?php } ?>
						
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>

<!-- <div class="container" style="margin-bottom:  55px;margin-top: -40px;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama.." title="Type in a name">
<div class="table-responsive">
<table id="myTable">
  <tr class="header">
  	 <th style="width:20%;">No</th>
     <th style="width:60%;">Nama Kecamatan</th>
     <th style="width:60%;">Total Penduduk</th>
  </tr>
		
      <?php
        $no = 1;
        $camat = $pdo->query("SELECT * FROM kecamatan ORDER BY id_kecamatan DESC");
        while($mat = $camat->fetch(PDO::FETCH_ASSOC)){
      ?>
  <tr>
	    <td align="center"><?php echo  $no; ?></td>
	    <td><?php echo  $mat['nama_kecamatan']; ?></td>
        <td><?php echo  $mat['total_penduduk']; ?></td>
      
	
  </tr>
  
  <?php
			$no++; }
   ?>
</table>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div> -->


	<?php include 'footer.php'?>