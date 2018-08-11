<?php
//error_reporting(0);
  // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  
  $online = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));
?>
<!--
		<table width="100%">
			<tbody>
				<tr><td style="font-size:2; text-align:;color:;"><img src="images/mvcvisit.png"> Visit Today : <?php echo $pengunjung; ?></td></tr>
				<tr><td style="font-size:2; text-align:;color:;"><img src="images/mvctotal.png"> Total Visit : <?php echo $totalpengunjung; ?></td></tr>
				<tr><td style="font-size:2; text-align:;color:;"><img src="images/mvctoday.png"> Hits Today : <?php echo $online; ?></td></tr>
				<tr><td style="font-size:2; text-align:;color:;"><img src="images/mvctotalhits.png"> Total Hits :  <?php echo $hits['hitstoday']; ?></td></tr>
				<tr><td style="font-size:2; text-align:;color:;"><img src="images/mvconline.png"> Whos Online : <?php echo $online; ?></td></tr>
			</tbody>
		</table>
-->