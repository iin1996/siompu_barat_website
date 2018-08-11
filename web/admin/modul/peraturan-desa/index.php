<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/peraturan-desa/aksi.php";
	$hal = "Peraturan Desa";
	$module = "peraturan-desa";

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
							<th width="23%" class="center">Judul <?php echo $hal; ?></th>
							<th width="23%" class="center">Gambar</th>
							<th width="10%" class="center">Tanggal Update</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from desa ORDER BY tgl_post DESC");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$id_desa = $r['id_desa'];
							if($r["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "desa/small/$imgname2-$r[gambar]";}
							
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['judul']; ?></td>
								<td align="center"><img src="../images/<?php echo $gbr; ?>" width="180px"></td>
								<td align="center"><?php echo  tgl2($r['tgl_update']); ?></td>
								
									<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_desa']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>

											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-dusun-<?php echo $r['id_desa']; ?>" title="Dusun"><img src="add-icon.gif"><br/>Dusun</a></td>
											
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_desa']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="23%" class="center">Nama <?php echo $hal; ?></th>
							<th width="23%" class="center">Gambar</th>
							<th width="10%" class="center">Tanggal Update</th>
							<th width="15%" class="center">Aksi</th>
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
						<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>"><?php echo $hal; ?></a></li>
							<li class="active">Tambah <?php echo $module; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul <span title="wajib" style="color: red;">*</span></label>
									<input name="judul" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Gambar</label>
									<div class="photo">
									
									<input name="fupload" type="file" id="exampleInputFile">
									<p class="help-block">*) Ukuran Gambar Minimal Lebar 460px dan Tinggi 360px</p>
									<p class="help-block">*) Maksimal Size Gambar 2MB</p>
									<p class="help-block">*) Apabila Gambar tidak diubah, dikosongkan saja.</p>
									</div>

									<div class="form-group">
										<label for="exampleInputEmail1">Deskripsi</label>
										<textarea class="ckeditor" name="deskripsi">
										</textarea>
									</div>
								
								</div><!-- /.box-body -->
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Sejarah</label>
									<textarea class="ckeditor" name="sejarah"></textarea>
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
													<label for="exampleInputEmail1">Keyword</label>
														 <span data-toggle="tooltip" title="Keyword adalah kata-kata yang akan terindek oleh mesin pencarian Google, Keyword berfungsi untuk meningkatkan rating web di google, keyword bisa lebih dari 1, contoh : Cake Jogja, Cake Thiwul, dll" class="badge bg-light-blue" >?</span>
													<textarea name="keyword" maxlength="400" style="width: 100%;height: 100px;"></textarea>
													<p class="help-block">*) keyword Maksimal 400 Karakter </p>
												</div>
											</div>
											<div class="tab-pane fade" id="desz">
												<div class="form-group">
													<label for="exampleInputEmail1">Description</label>
														 <span data-toggle="tooltip" title="Description adalah deskripsi singkat dari halaman ini, Description akan terindek oleh mesin pencarian Google dan berfungsi untuk meningkatkan rating web di google" class="badge bg-light-blue" >?</span>
													<textarea name="description" maxlength="156" style="width: 100%;height: 100px;"></textarea>
													<p class="help-block">*) Description Maksimal 156 Karakter </p>
												</div>
											</div>
										</div>
									</div>
									<!-- /.panel-body -->
								</div>
							</div>
							
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</section>
		
	<?php
		break;
		case "edit":
		$edit = $pdo->query("SELECT * FROM desa WHERE id_desa='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		
	?>
			<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;"><?php echo $hal; ?></h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li><a href="<?php echo $module; ?>"><?php echo $hal; ?></a></li>
							<li class="active"><?php echo $tedit['judul']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_desa" value="<?php echo $tedit['id_desa']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul <span title="wajib" style="color: red;">*</span></label>
									<input name="judul" type="text" class="form-control" value="<?php echo $tedit['judul']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Gambar</label>
									<div class="photo">
										<p class="help-block"><a href="../images/<?php echo "desa/$imgname2-$tedit[gambar]"; ?>" target="_blank"><img src="../images/<?php echo "desa/small/$imgname2-$tedit[gambar]"; ?>" width="220px" alt=""></a></p>
									<?php if($tedit['gambar']!=""){ ?>
										<a href="modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=romoveimg&id=<?php echo $tedit['id_desa']; ?>">Hapus Gambar</a>
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
								<div class="form-group">
									<label for="exampleInputEmail1">Sejarah</label>
									<textarea class="ckeditor" name="sejarah"><?php echo $tedit['sejarah']; ?></textarea>
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
													<p class="help-block">*) keyword Maksimal 400 Karakter </p>
												</div>
											</div>
											<div class="tab-pane fade" id="desz">
												<div class="form-group">
													<label for="exampleInputEmail1">Description
														 <span data-toggle="tooltip" title="Description adalah deskripsi singkat dari halaman ini, Description akan terindek oleh mesin pencarian Google dan berfungsi untuk meningkatkan rating web di google" class="badge bg-light-blue" >?</span>
													</label>
													<textarea name="description" maxlength="156" style="width: 100%;height: 100px;"><?php echo $tedit['description']; ?></textarea>
													<p class="help-block">*) keyword Maksimal 156 Karakter </p>
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
		case "dusun":
		$edit = $pdo->query("SELECT * FROM dusun WHERE id_desa='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		$id_dusun = $_GET['id'];
		
	?>

	<section class="content">
				<div class="row">
				<div class="col-md-12">

				  <div class="box">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Dusun</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active">Dusun</li>
						</ol>
					</div><!-- /.box-header -->
				
					<div class="box-body table-responsive">
						 <p class="c-black f-500 m-b-20">Daftar Dusun
                            <a href="<?php echo $module; ?>-tambah-dusun-<?php echo $id_dusun; ?>" class="btn btn-success pull-right"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Dusun</a>
                        </p>
                        <br>
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Nama Dusun</th>
							<th width="23%" class="center">Nama Desa</th>
							<th width="10%" class="center">Jumlah RT</th>
							<th width="10%" class="center">Jumlah RW</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$dusun = $pdo->query("SELECT * from dusun WHERE id_desa = '$_GET[id]' ORDER BY id_dusun DESC");
						while($r = $dusun->fetch(PDO::FETCH_ASSOC)){
						$desa = $pdo->query("SELECT * from desa WHERE id_desa = '$_GET[id]'");
						$d = $desa->fetch(PDO::FETCH_ASSOC);
						$id_desa = $r['id_desa'];
						
							
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['nama_dusun']; ?></td>
								<td><?php echo  $d['judul']; ?></td>
								<td><?php echo  $r['jumlah_rt']; ?></td>
								<td><?php echo  $r['jumlah_rw']; ?></td>
								
									<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-dusun-<?php echo $r['id_dusun']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>

											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-penduduk-<?php echo $r['id_dusun']; ?>" title="Penduduk"><img src="add-icon.gif"><br/>Penduduk</a></td>

											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=removedusun&id=<?php echo $r['id_dusun']; ?>&id_desa=<?php echo $d['id_desa']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="23%" class="center">Nama Dusun</th>
							<th width="23%" class="center">Nama Desa</th>
							<th width="10%" class="center">Jumlah RT</th>
							<th width="10%" class="center">Jumlah RW</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->
	<?php
		break;
		case "tambahdusun":
		$tmbhdesa = $pdo->query("SELECT * FROM desa WHERE id_desa='$_GET[id]'");
		$ds = $tmbhdesa->fetch(PDO::FETCH_ASSOC);
	?>

	<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Tambah Dusun</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active"><?php echo $ds['judul']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=tambahdusun" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_desa" value="<?php echo $ds['id_desa']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Desa <span title="wajib" style="color: red;">*</span></label>
									<input type="text" class="form-control" value="<?php echo $ds['judul']; ?>" readonly>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Dusun <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah RT <span title="wajib" style="color: red;">*</span></label>
									<input name="rt" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah RW <span title="wajib" style="color: red;">*</span></label>
									<input name="rw" type="text" class="form-control" required>
								</div>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
								
							</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</section>
	<?php
		break;
		case "editdusun":
		$editdusun = $pdo->query("SELECT * FROM dusun WHERE id_dusun ='$_GET[id]'");
		$es = $editdusun->fetch(PDO::FETCH_ASSOC);
	?>
	<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Edit Dusun</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active"><?php echo $es['nama_dusun']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=editdusun" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_dusun" value="<?php echo $es['id_dusun']; ?>">
						<input type="hidden" name="id_desa" value="<?php echo $es['id_desa']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Dusun <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" value="<?php echo $es['nama_dusun']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah RT <span title="wajib" style="color: red;">*</span></label>
									<input name="rt" type="text" class="form-control" value="<?php echo $es['jumlah_rt']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jumlah RW <span title="wajib" style="color: red;">*</span></label>
									<input name="rw" type="text" class="form-control" value="<?php echo $es['jumlah_rw']; ?>" required>
								</div>
							</div>
							
						
							

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								
							</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</section>
			<?php
		break;
		case "penduduk":
		$edit = $pdo->query("SELECT * FROM penduduk WHERE id_dusun ='$_GET[id]'");
		$tedit = $edit->fetch(PDO::FETCH_ASSOC);
		$id_dusun = $_GET['id'];
		
	?>

	<section class="content">
				<div class="row">
				<div class="col-md-12">

				  <div class="box">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Penduduk</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active">Penduduk</li>
						</ol>
					</div><!-- /.box-header -->
				
					<div class="box-body table-responsive">
						 <p class="c-black f-500 m-b-20">Daftar Penduduk
                            <a href="<?php echo $module; ?>-tambah-penduduk-<?php echo $id_dusun; ?>" class="btn btn-success pull-right"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Penduduk</a>
                        </p>
                        <br>
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Nama Dusun</th>
							<th width="23%" class="center">Nama Penduduk</th>
							<th width="23%" class="center">No KK</th>
							<th width="10%" class="center">NIK</th>
							<th width="10%" class="center">Alamat</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$dusun = $pdo->query("SELECT * from penduduk WHERE id_dusun = '$_GET[id]' ORDER BY id_penduduk DESC");
						while($r = $dusun->fetch(PDO::FETCH_ASSOC)){
						$desa = $pdo->query("SELECT * from dusun WHERE id_dusun = '$_GET[id]'");
						$d = $desa->fetch(PDO::FETCH_ASSOC);
						$id_desa = $r['id_desa'];
						
							
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $d['nama_dusun']; ?></td>
								<td><?php echo  $r['nama_penduduk']; ?></td>
								<td><?php echo  $r['no_kk']; ?></td>
								<td><?php echo  $r['nik']; ?></td>
								<td><?php echo  $r['alamat']; ?></td>
								
									<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-penduduk-<?php echo $r['id_penduduk']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>

											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=removependuduk&id=<?php echo $r['id_penduduk']; ?>&id_dusun=<?php echo $d['id_dusun']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="23%" class="center">Nama Dusun</th>
							<th width="23%" class="center">Nama Penduduk</th>
							<th width="23%" class="center">No KK</th>
							<th width="10%" class="center">NIK</th>
							<th width="10%" class="center">Alamat</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->

			<?php
		break;
		case "tambahpenduduk":
		$tmbhdesa = $pdo->query("SELECT * FROM dusun WHERE id_dusun ='$_GET[id]'");
		$ds = $tmbhdesa->fetch(PDO::FETCH_ASSOC);
	?>

	<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Tambah Penduduk</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active"><?php echo $ds['nama_dusun']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=tambahpenduduk" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_dusun" value="<?php echo $ds['id_dusun']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Dusun <span title="wajib" style="color: red;">*</span></label>
									<input type="text" class="form-control" value="<?php echo $ds['nama_dusun']; ?>" readonly>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Penduduk <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No KK <span title="wajib" style="color: red;">*</span></label>
									<input name="kk" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">NIK <span title="wajib" style="color: red;">*</span></label>
									<input name="nik" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Alamat <span title="wajib" style="color: red;">*</span></label>
									<input name="alamat" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Tempat Lahir <span title="wajib" style="color: red;">*</span></label>
									<input name="tl" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Status Menikah
														<small>Pilih Status Menikah
													</small>
													</h2>
											  </div>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="status_menikah" value="Y">
                                                   <i class="input-helper"></i>Menikah
												    </label>
                                                </div>
										<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="status_menikah" value="N">
                                                   <i class="input-helper"></i>Belum Menikah
												  </label>
                                        </div>
							</div>
						</div>		

						<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Pekerjaan <span title="wajib" style="color: red;">*</span></label>
									<input name="pekerjaan" type="text" class="form-control" required>
								</div>
						</div>

						<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Agama
														<small>Pilih Agama
													</small>
													</h2>
											  </div>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="agama" value="Islam">
                                                   <i class="input-helper"></i>Islam
												    </label>
                                                </div>
										<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="agama" value="Kristen">
                                                   <i class="input-helper"></i>Kristen
												  </label>
                                        </div>
                                    	<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="agama" value="Hindu">
                                                   <i class="input-helper"></i>Hindu
												  </label>
                                        </div>
                                        	<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="agama" value="Budha">
                                                   <i class="input-helper"></i>Budha
												  </label>
                                        </div>
                                        	<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="agama" value="Khatolik">
                                                   <i class="input-helper"></i>Khatolik
												  </label>
                                        </div>
							</div>
						</div>	

						<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal Lahir <span title="wajib" style="color: red;">*</span></label>
									<input name="ttl" type="date" class="form-control" required>
								</div>
						</div>

						<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Jenis Kelamin
														<small>Pilih Jenis Kelamin
													</small>
													</h2>
											  </div>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="jenis_kelamin" value="P">
                                                   <i class="input-helper"></i>Perempuan
												    </label>
                                                </div>
										<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="agama" value="L">
                                                   <i class="input-helper"></i>Laki - Laki
												  </label>
                                        </div>
							</div>
						</div>	

						<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No Telepon <span title="wajib" style="color: red;">*</span></label>
									<input name="hp" type="number" class="form-control" required>
								</div>
						</div>

						<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Pendidikan Terakhir <span title="wajib" style="color: red;">*</span></label>
									<input name="pendidikan" type="text" class="form-control" required>
								</div>
						</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
								
							</div>
					</form>
				  </div><!-- /.box -->
				</div>
			</section>
	<?php
		break;
		case "editpenduduk":
		$editdusun = $pdo->query("SELECT * FROM penduduk WHERE id_penduduk ='$_GET[id]'");
		$es = $editdusun->fetch(PDO::FETCH_ASSOC);
	?>
	<section class="content">
			  <div class="row">
			  
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Edit Penduduk</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active"><?php echo $es['nama_penduduk']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/peraturan-desa/aksi.php?module=<?php echo $module; ?>&act=editpenduduk" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_penduduk" value="<?php echo $es['id_penduduk']; ?>">
						<input type="hidden" name="id_dusun" value="<?php echo $es['id_dusun']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Penduduk <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" value="<?php echo $es['nama_penduduk']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No KK <span title="wajib" style="color: red;">*</span></label>
									<input name="kk" type="text" class="form-control" value="<?php echo $es['no_kk']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nik <span title="wajib" style="color: red;">*</span></label>
									<input name="nik" type="text" class="form-control" value="<?php echo $es['nik']; ?>" required>
								</div>
							</div>
							

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Alamat <span title="wajib" style="color: red;">*</span></label>
									<input name="alamat" type="text" class="form-control" value="<?php echo $es['alamat']; ?>" required>
								</div>
							</div>
						

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Tempat Lahir <span title="wajib" style="color: red;">*</span></label>
									<input name="tl" type="text" class="form-control" value="<?php echo $es['tempat_lahir']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
							 <div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Status Menikah
														<small>Pilih Status Menikah
													</small>
													</h2>
											  </div>
											  
								
                                             	<?php
												  if($es['status_menikah']=='Y'){
												?>
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="status_menikah" value="Y" checked>
		                                                   <i class="input-helper"></i>Menikah
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="status_menikah" value="N">
                                                 			  <i class="input-helper"></i>Belum Menikah
												 		 </label>
                                                  </div>

                                                 


                                               <?php }else if($es['status_menikah']=='N'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="status_menikah" value="Y">
		                                                   <i class="input-helper"></i>Menikah
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="status_menikah" value="N" checked>
                                                 			  <i class="input-helper"></i>Belum Menikah
												 		 </label>
                                                  </div>
											 <?php } ?>
												
									</div>
								</div>
							

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Pekerjaan <span title="wajib" style="color: red;">*</span></label>
									<input name="pekerjaan" type="text" class="form-control" value="<?php echo $es['pekerjaan']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
							 <div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Agama
														<small>Pilih Agama
													</small>
													</h2>
											  </div>
											  
								
                                             	<?php
												  if($es['agama']=='Islam'){
												?>
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="agama" value="Islam" checked>
		                                                   <i class="input-helper"></i>Islam
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Kristen">
                                                 			  <i class="input-helper"></i>Kristen
												 		 </label>
                                                  </div>

                                              	  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Hindu">
                                                 			  <i class="input-helper"></i>Hindu
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Budha">
                                                 			  <i class="input-helper"></i>Budha
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Khatolik">
                                                 			  <i class="input-helper"></i>Khatolik
												 		 </label>
                                                  </div>

                                                 


                                               <?php }else if($es['agama']=='Kristen'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="agama" value="Islam">
		                                                   <i class="input-helper"></i>Islam
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Kristen" checked>
                                                 			  <i class="input-helper"></i>Kristen
												 		 </label>
                                                  </div>

                                              	  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Hindu">
                                                 			  <i class="input-helper"></i>Hindu
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Budha">
                                                 			  <i class="input-helper"></i>Budha
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Khatolik">
                                                 			  <i class="input-helper"></i>Khatolik
												 		 </label>
                                                  </div>

                                                  <?php }else if($es['agama']=='Hindu'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="agama" value="Islam">
		                                                   <i class="input-helper"></i>Islam
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Kristen">
                                                 			  <i class="input-helper"></i>Kristen
												 		 </label>
                                                  </div>

                                              	  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Hindu" checked>
                                                 			  <i class="input-helper"></i>Hindu
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Budha">
                                                 			  <i class="input-helper"></i>Budha
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Khatolik">
                                                 			  <i class="input-helper"></i>Khatolik
												 		 </label>
                                                  </div>

                                                  <?php }else if($es['agama']=='Budha'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="agama" value="Islam">
		                                                   <i class="input-helper"></i>Islam
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Kristen">
                                                 			  <i class="input-helper"></i>Kristen
												 		 </label>
                                                  </div>

                                              	  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Hindu">
                                                 			  <i class="input-helper"></i>Hindu
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Budha" checked>
                                                 			  <i class="input-helper"></i>Budha
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Khatolik">
                                                 			  <i class="input-helper"></i>Khatolik
												 		 </label>
                                                  </div>

                                                  <?php }else if($es['agama']=='Khatolik'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="agama" value="Islam">
		                                                   <i class="input-helper"></i>Islam
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Kristen">
                                                 			  <i class="input-helper"></i>Kristen
												 		 </label>
                                                  </div>

                                              	  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Hindu">
                                                 			  <i class="input-helper"></i>Hindu
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Budha">
                                                 			  <i class="input-helper"></i>Budha
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="agama" value="Khatolik" checked>
                                                 			  <i class="input-helper"></i>Khatolik
												 		 </label>
                                                  </div>
											 <?php } ?>
												
									</div>
								</div>


							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal Lahir <span title="wajib" style="color: red;">*</span></label>
									<input name="ttl" type="date" class="form-control" value="<?php echo $es['tgl_lahir']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
							 <div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Jenis Kelamin
														<small>Pilih Jenis Kelamin
													</small>
													</h2>
											  </div>
											  
								
                                             	<?php
												  if($es['jenis_kelamin']=='P'){
												?>
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="jenis_kelamin" value="P" checked>
		                                                   <i class="input-helper"></i>Perempuan
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="jenis_kelamin" value="L">
                                                 			  <i class="input-helper"></i>Laki - Laki
												 		 </label>
                                                  </div>

                                                 


                                               <?php }else if($es['jenis_kelamin']=='L'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="jenis_kelamin" value="P">
		                                                   <i class="input-helper"></i>Perempuan
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="jenis_kelamin" value="L" checked>
                                                 			  <i class="input-helper"></i>Laki - Laki
												 		 </label>
                                                  </div>
											 <?php } ?>
												
									</div>
								</div>


							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No Telepon <span title="wajib" style="color: red;">*</span></label>
									<input name="hp" type="number" class="form-control" value="<?php echo $es['no_hp']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Pendidikan Terakhir <span title="wajib" style="color: red;">*</span></label>
									<input name="pendidikan" type="text" class="form-control" value="<?php echo $es['pendidikan_terakhir']; ?>" required>
								</div>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								
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
