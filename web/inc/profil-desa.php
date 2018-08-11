<?php
	$res = $pdo->query("SELECT COUNT(*) FROM kepdes WHERE id_desa ='$_GET[id]'");
	$jumlah = $res->fetchColumn();
	if($jumlah != 0){
?>
<br>
	<section>
	<div id="carousel-example-generic" class="carousel slide">
                        

						
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
							
			<?php
				$slider = $pdo->query("SELECT * FROM kepdes WHERE id_desa ='$_GET[id]'");
				$slid = $slider->fetch(PDO::FETCH_ASSOC);
			?>
								
				<div class="item active">
					<img style="width: 300px; height: 300px;" class="img-responsive" src="images/slider/-<?php echo"$slid[gambar]"; ?>" alt="<?php echo"$slid[judul]"; ?>">
				</div>
								
			<?php
				while($sl = $slider->fetch(PDO::FETCH_ASSOC)) {
			?>
							
				<div class="item">
					<img style="width: 300px; height: 300px;" class="img-responsive" src="images/slider/-<?php echo"$sl[gambar]"; ?>" alt="<?php echo"$sl[judul]"; ?>">
				</div>
								
			<?php } ?>
						
		</div>

		<!-- Controls -->

	</div>
</section>
<?php } ?>
<br>

	<div class="container" style="margin-bottom:  55px;margin-top: 40px;">
  <div class="w3ls-heading" style="text-align: left;margin-right: 15px;margin-bottom: -30px;">
		<?php
			$profil = $pdo->query("SELECT * FROM desa WHERE id_desa ='$_GET[id]'");
			$pro = $profil->fetch(PDO::FETCH_ASSOC);
		?>
        <h2><?php echo $pro['judul']; ?></h2>
      </div><br><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama.." title="Type in a name">
<div class="table-responsive">
<table id="myTable">
  <tr class="header">
  	 <th style="width:10%;">No</th>
     <th style="width:30%;">Nama Dusun</th>
       <th style="width:30%;">Jumlah RT</th>
     <th style="width:30%;">Jumlah RW</th>
  </tr>
		
      <?php
        $no = 1;
        $desaa = $pdo->query("SELECT * FROM dusun WHERE id_desa = '$_GET[id]'");
        while($d = $desaa->fetch(PDO::FETCH_ASSOC)){
      ?>
  <tr>
	    <td align="center"><?php echo  $no; ?></td>
	    <td><?php echo  $d['nama_dusun']; ?></td>
        <td><?php echo  $d['jumlah_rt']; ?></td>
        <td><?php echo  $d['jumlah_rw']; ?></td>
      
	
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
</div>
	
	<?php include 'footer.php' ?>