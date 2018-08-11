<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/kepdes/aksi.php";
	$hal = "Kepdes";
	$module = "kepdes";

	switch($_GET['act']){
		case "list":
	?>
			<section class="content">
				<div class="row">
				<div class="col-md-8">

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
							<th width="23%" class="center">Desa</th>
							<th width="23%" class="center">Gambar</th>
							<th width="15%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * FROM kepdes");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
						$kepdess = $pdo->query("SELECT * FROM desa WHERE id_desa = '$r[id_desa]'");
						$kk = $kepdess->fetch(PDO::FETCH_ASSOC);
							if($r["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "slider/small/$imgname2-$r[gambar]";}
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $kk['judul']; ?></td>
								<td align="center"><img src="../images/<?php echo $gbr; ?>" width="180px"></td>
								
								
								<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>		
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_kepdes']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="23%" class="center">Desa</th>
							<th width="23%" class="center">Gambar</th>
							<th width="15%" class="center">Aksi</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
				</div>
					
					
				<div class="col-md-4">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>"><?php echo $hal; ?></a></li>
							<li class="active">Tambah <?php echo $module; ?></li>
						</ol>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="modul/kepdes/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
					
						
						<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Nama Desa
														<small>Pilih Nama Desa
													</small>
													</h2>
											  </div>
					  <?php
							$tampildesa = $pdo->query("SELECT * FROM desa ORDER BY id_desa ASC");
							while($dd = $tampildesa->fetch(PDO::FETCH_ASSOC)){
						?>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="id_desa" value="<?php echo $dd['id_desa'];?>">
                                                   <i class="input-helper"></i><?php echo $dd['judul']; ?>
												    </label>
                                                </div>
									<?php } ?>
							</div>
						</div>	

								
								<div class="form-group">
									<label for="exampleInputFile">Gambar <span title="wajib" style="color: red;">*</span></label>
									<div class="photo">
									
									<input name="fupload" type="file" id="exampleInputFile">
									<p class="help-block">*) Ukuran Gambar Minimal Lebar 1170px dan Tinggi 620px</p>
									<p class="help-block">*) Maksimal Size Gambar 2MB</p>
									<p class="help-block">*) Apabila Gambar tidak diubah, dikosongkan saja.</p>
									</div>
								
								</div><!-- /.box-body -->
							
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Tambah</button>
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
