<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/kematian'/aksi.php";
	$hal = "kematian";
	$module = "kematian";

	switch($_GET['act']){
		case "list":
	?>
			<section class="content">
				<div class="row">
				<div class="col-md-12">

				  <div class="box">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Kematian</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active">Kematian</li>
						</ol>
					</div><!-- /.box-header -->
				
					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Asal Dusun</th>
							<th width="23%" class="center">NIK</th>
							<th width="15%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							$no = 1;
							$tampil = $pdo->query("SELECT * from kematian ORDER BY tanggal_kematian DESC");
							while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$kematian = $pdo->query("SELECT * from dusun WHERE id_dusun = '$r[id_dusun]'");
							$rr = $kematian->fetch(PDO::FETCH_ASSOC);
							$id_kematian = $r['id_kematian'];
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
							    <td><?php echo  $rr['nama_dusun']; ?></td>
								<td><?php echo  $r['nik']; ?></td>
							  
						
							
									<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<!-- <td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_kematian']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td> -->
											
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_kematian']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="23%" class="center">Asal Dusun</th>
							<th width="23%" class="center">NIK</th>
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
		case "add":
	?>
			<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Kematian</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>">Kematian</a></li>
							<li class="active">Tambah Kematian</li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="kematian-nik" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Dusun <span title="wajib" style="color: red;">*</span></label>
									
										 <select class="form-control" name="dusun">
												 	<?php
														$dusun = $pdo->query("SELECT * FROM dusun ORDER BY nama_dusun ASC");
														while($d = $dusun->fetch(PDO::FETCH_ASSOC)){
														$id_dusun = $d['id_dusun'];
													?>
													   <option value="<?php echo $d['id_dusun'];?>"><?php echo $d['nama_dusun'];?></option>
													  <?php } ?>
									      </select> 
								</div>
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</div>
			</section>

			<?php
		break;
		case "nik":
	?>
			<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Kematian</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>">Kematian</a></li>
							<li class="active">Tambah Kematian</li>
						</ol>
					</div><!-- /.box-header -->
					
					
					<!-- form start -->
					<form role="form" action="modul/kematian/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
		  					 <input name="id_dusun" type="hidden" class="form-control" value="<?php echo $_POST['dusun']; ?>">

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Penduduk <span title="wajib" style="color: red;">*</span></label>
									
										 <select class="form-control" name="nik">
												 	<?php
														$penduduk = $pdo->query("SELECT * FROM penduduk WHERE id_dusun = '$_POST[dusun]'");
														while($p = $penduduk->fetch(PDO::FETCH_ASSOC)){
													?>
													   <option value="<?php echo $p['nik'];?>"><?php echo $p['nama_penduduk'];?> - <?php echo $p['nik'];?></option>
													  <?php } ?>
									      </select> 
								</div>
							</div>


							<div class="col-md-12">
									<?php
											$asaldusun = $pdo->query("SELECT * FROM dusun WHERE id_dusun = '$_POST[dusun]'");
											$ad = $asaldusun->fetch(PDO::FETCH_ASSOC);
									?>
								<div class="form-group">
									<label for="exampleInputEmail1">Asal Dusun  <span title="wajib" style="color: red;">*</span></label>
									<input name="asal_dusun" type="text" class="form-control" value="<?php echo $ad['nama_dusun']; ?>" readonly>
								</div>
							</div>

				
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal Kematian  <span title="wajib" style="color: red;">*</span></label>
									<input name="tanggal_kematian" type="date" class="form-control" required="">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Keterangan  <span title="wajib" style="color: red;">*</span></label>
									<input name="keterangan" type="text" class="form-control" required="">
								</div>
							</div>



						</div>

					
					

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</div>
			</section>
		
	<?php
		break;
		case "edit":
		$edit = $pdo->query("SELECT * FROM kematian WHERE id_kematian ='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		
	?>
			<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Mutasi</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>">Mutasi</a></li>
							<li class="active">Edit Mutasi</li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/mutasi/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_mutasi" value="<?php echo $tedit['id_mutasi']; ?>">
						
						<div class="box-body table-responsive">

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Penduduk <span title="wajib" style="color: red;">*</span></label>

									
										 <select class="form-control" name="nik">
												 	<?php
														$penduduk = $pdo->query("SELECT * FROM penduduk ");
														while($p = $penduduk->fetch(PDO::FETCH_ASSOC)){
													?>
													   <option value="<?php echo $p['nik'];?>"  <?php if ($tedit['nik'] == $p['nik']) { echo 'selected'; } ?> ><?php echo $p['nama_penduduk'];?> - <?php echo $p['nik'];?></option>
													  <?php } ?>
									      </select> 
								</div>
							</div>


							<div class="col-md-12">
									<?php
											$asaldusun = $pdo->query("SELECT * FROM dusun WHERE id_dusun = '$_POST[dusun]'");
											$ad = $asaldusun->fetch(PDO::FETCH_ASSOC);
									?>
								<div class="form-group">
									<label for="exampleInputEmail1">Asal Dusun  <span title="wajib" style="color: red;">*</span></label>
									<input name="asal_dusun" type="text" class="form-control" value="<?php echo $ad['nama_dusun']; ?>" readonly>
								</div>
							</div>

						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul  <span title="wajib" style="color: red;">*</span></label>
									<input name="judul" type="text" class="form-control" value="<?php echo $tedit['judul']; ?>" required>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Gambar</label>
									<div class="photo">
										<p class="help-block"><a href="../images/<?php echo "order/$imgname2-$tedit[gambar]"; ?>" target="_blank"><img src="../images/<?php echo "order/small/$imgname2-$tedit[gambar]"; ?>" width="220px" alt=""></a></p>
									<?php if($tedit['gambar']!=""){ ?>
										<a href="modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=romoveimg&id=<?php echo $tedit['id_berita']; ?>">Hapus Gambar</a>
									<?php } ?>
									
									<input name="fupload" type="file">
									<p class="help-block">*) Ukuran Gambar Minimal Lebar 460px dan Tinggi 360px</p>
									<p class="help-block">*) Maksimal Size Gambar 2MB</p>
									<p class="help-block">*) Apabila Gambar tidak diubah, dikosongkan saja.</p>
									</div>
								
								</div><!-- /.box-body -->
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea class="ckeditor" name="deskripsi"><?php echo $tedit['deskripsi']; ?></textarea>
								</div>
							</div>
							
						
							<div class="col-md-12">
								<div class="panel panel-default">
									<!-- /.panel-heading -->
									<div class="panel-body">
									<label for="exampleInputEmail1">SEO (Search Engine Optimization)
										<span data-toggle="tooltip" title="SEO berfungsi untuk meningkatkan rating website di pencarian google, sekali pasang SEO minimal membutuhkan waktu 3 Bulan untuk terdeteksi Google." class="badge bg-light-blue" >?</span></label>
									</label>
									
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="#key" data-toggle="tab">Keyword</a></li>
											<li class=""><a href="#desz" data-toggle="tab">Description</a></li>
										</ul>
		
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade active in" id="key">
												<div class="form-group">
													<label for="exampleInputEmail1">Keyword
														 <span data-toggle="tooltip" title="Keyword adalah kata-kata yang akan terindek oleh mesin pencarian Google, Keyword berfungsi untuk meningkatkan rating web di google, keyword bisa lebih dari 1, contoh : Cake Jogja, Cake Thiwul, dll" class="badge bg-light-blue" >?</span>
													</label>
													<textarea name="keyword" maxlength="400" style="width: 100%;height: 100px;"><?php echo $tedit['keyword']; ?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="desz">
												<div class="form-group">
													<label for="exampleInputEmail1">Description
														 <span data-toggle="tooltip" title="Description adalah deskripsi singkat dari halaman ini, Description akan terindek oleh mesin pencarian Google dan berfungsi untuk meningkatkan rating web di google" class="badge bg-light-blue" >?</span>
													</label>
													<textarea name="description" maxlength="156" style="width: 100%;height: 100px;"><?php echo $tedit['description']; ?></textarea>
												</div>
											</div>
										</div>
									</div>
									<!-- /.panel-body -->
								</div>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								
								<input type="button" class="btn btn-success" value="Back" onclick="location.href='<?php echo $module; ?>' ">
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
