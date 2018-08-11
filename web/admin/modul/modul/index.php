<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	$aksi="modul/modul/aksi.php";
		
	$hal = "Modul";
	$module = "modul";

	switch($_GET['act']){
	  // Tampil Modul
	  default:
	?>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">

						<div class="box">
							<div class="box-header">
								<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
								<ol class="breadcrumb">
									<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
									<li class="active"><?php echo $hal; ?></li>
								</ol>
							</div><!-- /.box-header -->
							<!-- <button class="btn bg-olive margin" onclick="window.location.href='?module=modul&act=add';">Tambah Halaman</button> -->
							<div class="box-body table-responsive">
								<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th width="2%">No</th>
									<th width="23%">Nama Content / Halaman</th>
									<th width="15%">Tanggal Update</th>
									<th width="15%" colspan="2">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$no = 1;
								$tampil = $pdo->query("SELECT * FROM modul WHERE tampil='Ya' ORDER BY no_urut ASC");
								while($r = $tampil->fetch(PDO::FETCH_ASSOC)){  
									$tanggal2=tgl2($r['tgl_update']);
								?>
									<tr>
										<td align="center"><?php echo  $no; ?></td>
										<td><?php echo  $r['nama']; ?></td>
										<td><?php echo  $tanggal2; ?></td>
										<td align="center">
											<a href="<?php echo $module; ?>-edit-<?php echo $r['id_modul']; ?>" title="Edit"><img src="add-icon.gif"></a>
										</td>
										<?php
										if($r['hapus']=="Yes"){
										?>
										<td align="center">
											<a href="modul/modul/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_modul']; ?>" title="Hapus"><img src="hr.gif"></a>
										</td>
										<?php
										}
										?>
									</tr>
								<?php
								$no++;
								}
								?>
								</tbody>
							</table>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
			   
					</div><!-- /.col -->
				</div><!-- /.row -->
			</section><!-- /.content -->
			
	<?php
		break;
		case "edit":
		$edit = $pdo->query("SELECT * FROM modul WHERE id_modul='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
	?>
			<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h1 style="text-transform: capitalize;">Edit <?php echo $hal; ?></h1>
							<ol class="breadcrumb">
								<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
								<li class=""><a href="media.php?module=<?php echo "$module"; ?>"><?php echo $hal; ?></a></li>
								<li class="active">Edit <?php echo $tedit['nama']; ?></li>
							</ol>
						</div><!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="modul/modul/aksi.php?module=modul&act=update" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="id_modul" value="<?php echo $tedit['id_modul']; ?>">
							<input type="hidden" name="jenis_modul" value="<?php echo $tedit['jenis_modul']; ?>">
							
							<div class="box-body table-responsive">			
								<?php
								if( ($tedit['jenis_modul']=='Judul & Text') OR ($tedit['jenis_modul']=='Judul & Textarea')){
								?>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Halaman</label>
									<input name="nama" type="text" class="form-control" value="<?php echo $tedit['nama']; ?>">
								</div>
								<?php
								}else{
								?>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Halaman</label>
									<input name="nama" type="text" class="form-control" value="<?php echo $tedit['nama']; ?>" readonly>
								</div>
								<?php
								}
								?>
								
								
								<?php
								if(($tedit['jenis_modul']=='Text')OR($tedit['jenis_modul']=='Judul & Text')OR($tedit['jenis_modul']=='Text Images')){
								?>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label><br>
									<textarea name="deskripsi" style="width: 100%; height: 100px;"><?php echo $tedit['deskripsi']; ?></textarea>
								</div>
								<?php
								}elseif(($tedit['jenis_modul']=='Textarea')OR($tedit['jenis_modul']=='Judul & Textarea')OR($tedit['jenis_modul']=='Textarea Images')){
								?>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea class="ckeditor" name="deskripsi"><?php echo $tedit['deskripsi']; ?></textarea>
								</div>
								<?php
								}else{
									echo '<input type="hidden" name="deskripsi" value="'.$tedit['deskripsi'].'">';
								}
								
								if(($tedit['jenis_modul']=='Images')OR($tedit['jenis_modul']=='Text Images')OR($tedit['jenis_modul']=='Textarea Images')){
								?>
								<div class="form-group">
									<label for="exampleInputFile">Ganti Foto</label>
									<p class="help-block"><img src="../images/<?php echo $tedit['gambar']; ?>" width="200px"></p>
									<input name="fupload" type="file">
									<p class="help-block">*) Maksimal Lebar Foto 670pixel</p>
									<p class="help-block">*) Apabila Foto tidak diubah, dikosongkan saja.</p>
								</div>
								<?php
								}else{
									echo '<input type="hidden" name="gambar" value="'.$tedit['gambar'].'">';
								}
								?>
								
								
							</div><!-- /.box-body -->
		
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								<input type="button" class="btn btn-success" value="Kembali" onclick="location.href='media.php?module=<?php echo $module; ?>'">
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</section>
			
	<?php
		break;  
	}
}
?>
