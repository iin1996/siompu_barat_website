<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/contact/aksi.php";
	$hal = "Contact";
	$module = "contact";

	switch($_GET['act']){
		case "list":
	?>
			<section class="content">
				<div class="row">
				<div class="col-md-12">

				  <div class="box">
					<div class="box-header">
						<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active"><?php echo $hal; ?></li>
						</ol>
					</div><!-- /.box-header -->
				
					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Nama Pengirim</th>
							<th width="23%" class="center">Email</th>
							<th width="23%" class="center">Subjek</th>
							<th width="15%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from masukkan ORDER BY id_masukkan ASC");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['nama']; ?></td>
								<td align="center"><?php echo  $r['email']; ?></td>
								<td align="center"><?php echo  $r['subjek']; ?></td>
								
								<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_masukkan']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>
											
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_masukkan']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
										</tr>		
									</table>
								</td>
								
							</tr>
						<?php
						$no++;
						}
						?>
						</tbody>
						<tfoot>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Nama Pengirim</th>
							<th width="23%" class="center">Email</th>
							<th width="23%" class="center">Subjek</th>
							<th width="15%"  class="center">Aksi</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->
			
		
	<?php
		break;
		case "edit":
		$edit = $pdo->query("SELECT * FROM masukkan WHERE id_masukkan ='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		
	?>
					
			<section class="content">
			  <div class="row">
				<!-- left column -->
				<div class="col-md-7">
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>"><?php echo $hal; ?></a></li>
							<li class="active">Read Email</li>
						</ol>
					</div><!-- /.box-header -->
					<div class="box-body no-padding">
					  <div class="mailbox-read-info">
						<table>
							<tr>
								<td>Pengirim</td><td width="10px">:</td><td><?php echo $tedit['nama']; ?></td>
							</tr>
							<tr>
								<td>Email</td><td>:</td><td><?php echo $tedit['email']; ?></td>
							</tr>
							<tr>
								<td>Subjek</td><td width="10px">:</td><td><?php echo $tedit['subjek']; ?></td>
							</tr>
							<tr>
								<td>Pesan</td><td width="10px">:</td><td><?php echo $tedit['pesan']; ?></td>
							</tr>
							
					
						</table>
						
					  </div><!-- /.mailbox-read-info -->
					  <div class="mailbox-read-message">
						<?php echo $tedit['message']; ?>
					  </div><!-- /.mailbox-read-message -->
					</div><!-- /.box-body -->
					<div class="box-footer">
					  <!-- <div class="pull-right">
						<button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
						<button class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
					  </div> -->
						<a onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href="modul/contact/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $tedit['id_masukkan']; ?>" title="Hapus"><button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button></a>
					  <!-- <button class="btn btn-default"><i class="fa fa-print"></i> Print</button> -->
					  
						<input type="button" class="btn btn-success" value="Back" onclick="location.href='contact'">
					</div><!-- /.box-footer -->
				  </div><!-- /. box -->
				</div>
			</section>
			
			
			
	<?php
		break;  
	}
}
?>
