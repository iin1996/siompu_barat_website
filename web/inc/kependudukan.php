<div class="container" style="margin-bottom:  55px;margin-top: 40px;">
  <div class="w3ls-heading" style="text-align: left;margin-right: 15px;margin-bottom: -30px;">
        <h2>Kependudukan</h2>
      </div><br><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama.." title="Type in a name">
<div class="table-responsive">
<table id="myTable">
  <tr class="header">
  	 <th style="width:20%;">No</th>
     <th style="width:60%;">Nama Desa</th>
     <th style="width:60%;">Lihat</th>
  </tr>
		
      <?php
        $no = 1;
        $desaa = $pdo->query("SELECT * FROM desa ORDER BY id_desa ASC");
        while($d = $desaa->fetch(PDO::FETCH_ASSOC)){
      ?>
  <tr>
	    <td align="center"><?php echo  $no; ?></td>
	    <td><?php echo  $d['judul']; ?></td>
         <td><a href="dusun-<?php echo $d['judul'];?>-<?php echo $d['id_desa'];?>">Lihat Dusun</a></td>
      
	
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


	<?php include 'footer.php'?>