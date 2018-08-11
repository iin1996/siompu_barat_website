<div class="container" style="margin-bottom:  55px;margin-top: 40px;">
  <div class="w3ls-heading" style="text-align: left;margin-right: 15px;margin-bottom: -30px;">
    <?php
        $namadusun = $pdo->query("SELECT * FROM dusun WHERE id_dusun = '$_GET[id]'");
        $ndd = $namadusun->fetch(PDO::FETCH_ASSOC);
    ?>
    
    <h2><?php echo $ndd['nama_dusun'];?></h2>
      </div><br><br><br>

<div class="table-responsive">
 

<table id="myTable" class = "table-bordered">
  <tr class="header">
  	 <th>No</th>
     <th style="text-align: center;">Jumlah Penduduk</th>
     <th style="text-align: center;">Jumlah Mutasi</th>
     <th style="text-align: center;">Jumlah Kematian</th>
     <th colspan="5" style="text-align: center;">Jumlah Lahir</th>
  
  </tr>

   <tr class="header">
    <th></th> 
    <th></th> 
    <th></th>
    <th></th>
    <th style="text-align: center;">2014</th>
    <th style="text-align: center;">2015</th>
    <th style="text-align: center;">2016</th>
    <th style="text-align: center;">2017</th>
    <th style="text-align: center;">2018</th>
  
     </tr>
		
      <?php
        $no = 1;
        $desaa = $pdo->query("SELECT * FROM penduduk WHERE id_dusun = '$_GET[id]'");
        $d = $desaa->fetch(PDO::FETCH_ASSOC);
        $res = $pdo->query("SELECT COUNT(*) FROM penduduk WHERE id_dusun ='$_GET[id]'");
        $jumlahpenduduk = $res->fetchColumn();
        $resa = $pdo->query("SELECT COUNT(*) FROM mutasi WHERE id_dusun ='$_GET[id]'");
        $jumlahmutasi = $resa->fetchColumn();
        $resn = $pdo->query("SELECT COUNT(*) FROM kematian WHERE id_dusun ='$_GET[id]'");
        $jumlahkematian = $resn->fetchColumn();
        $resm1 = $pdo->query("SELECT COUNT(*) FROM penduduk  WHERE YEAR(tgl_lahir) = '2014' AND id_dusun = '$_GET[id]' ");
        $jumlahlahir2014 = $resm1->fetchColumn();
        $resm2 = $pdo->query("SELECT COUNT(*) FROM penduduk  WHERE YEAR(tgl_lahir) = '2015' AND id_dusun = '$_GET[id]' ");
        $jumlahlahir2015 = $resm2->fetchColumn();
        $resm3 = $pdo->query("SELECT COUNT(*) FROM penduduk  WHERE YEAR(tgl_lahir) = '2016' AND id_dusun = '$_GET[id]' ");
        $jumlahlahir2016 = $resm3->fetchColumn();
        $resm4 = $pdo->query("SELECT COUNT(*) FROM penduduk  WHERE YEAR(tgl_lahir) = '2017' AND id_dusun = '$_GET[id]' ");
        $jumlahlahir2017 = $resm4->fetchColumn();
        $resm5 = $pdo->query("SELECT COUNT(*) FROM penduduk  WHERE YEAR(tgl_lahir) = '2018' AND id_dusun = '$_GET[id]' ");
        $jumlahlahir2018 = $resm5->fetchColumn();

      ?>
  <tr>
	    <td align="center"><?php echo  $no; ?>.</td>
	    <td style="text-align: center;"><?php echo  $jumlahpenduduk; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahmutasi; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahkematian; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahlahir2014; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahlahir2015; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahlahir2016; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahlahir2017; ?></td>
      <td style="text-align: center;"><?php echo  $jumlahlahir2018; ?></td>
        
      
	
  </tr>

    <tr>
      <td align="center">Keterangan</td>
      <?php if($jumlahpenduduk > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahmutasi > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahkematian > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahlahir2014 > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahlahir2015 > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahlahir2016 > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
      <?php if($jumlahlahir2017 > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>
     <?php if($jumlahlahir2018 > 50 ){ ?>
           <td style="text-align: center;"> > 50</td>
      <?php } else { ?>
          <td style="text-align: center;"> < 50</td>
      <?php } ?>    
  </tr>

  <?php
			$no++; 
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