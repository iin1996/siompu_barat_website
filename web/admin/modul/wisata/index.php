<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/wisata/aksi.php";
	$hal = "Wisata";
	$module = "wisata";

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
							<th width="10%" class="center">Nama <?php echo $hal; ?></th>
							<th width="30%" class="center">Gambar</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from wisata ORDER BY id_wisata DESC");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$id_wisata = $r['id_wisata'];
							
							if($r["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "galeri/small/$imgname2-$r[gambar]";}
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['nama']; ?></td>
								<td align="center"><img src="../images/<?php echo $gbr; ?>" width="180px"></td>
								<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_wisata']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>
											
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_wisata']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
					<form role="form" action="modul/wisata/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea class="ckeditor" name="deskripsi"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Wisata
														<small>Pilih Tipe Wisata
													</small>
													</h2>
											  </div>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="wisata" value="PEMANDIAN">
                                                   <i class="input-helper"></i>Pemandian
												    </label>
                                                </div>
										<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="wisata" value="PANTAI">
                                                   <i class="input-helper"></i>Pantai
												  </label>
                                        </div>
                                       
							</div>
						</div>		
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Gambar</label>
									<div class="photo">
									
									<input name="fupload" type="file" id="exampleInputFile">
									<p class="help-block">*) Ukuran Gambar Minimal Lebar 512px dan Tinggi 512px</p>
									<p class="help-block">*) Maksimal Size Gambar 2MB</p>
									<p class="help-block">*) Apabila Gambar tidak diubah, dikosongkan saja.</p>
									</div>

								
								</div><!-- /.box-body -->
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
		$edit = $pdo->query("SELECT * FROM wisata WHERE id_wisata ='$_GET[id]'");
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
					<form role="form" action="modul/wisata/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_wisata" value="<?php echo $tedit['id_wisata']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" value="<?php echo $tedit['nama']; ?>" required>
								</div>
							</div>
								<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea class="ckeditor" name="deskripsi"><?php echo $tedit['deskripsi']; ?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
							 <div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Wisata
														<small>Tipe Wisata
													</small>
													</h2>
											  </div>
											  
								
                                             	<?php
												  if($tedit['wisata']=='PEMANDIAN'){
												?>
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="wisata" value="PEMANDIAN" checked>
		                                                   <i class="input-helper"></i>Pemandian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="wisata" value="PANTAI">
                                                 			  <i class="input-helper"></i>Pantai
												 		 </label>
                                                  </div>

                   


                                               <?php }else if($tedit['wisata']=='PANTAI'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="wisata" value="PEMANDIAN">
		                                                   <i class="input-helper"></i>Pemandian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="wisata" value="PANTAI" checked>
                                                 			  <i class="input-helper"></i>Pantai
												 		 </label>
                                                  </div>

                                                   

												 <?php } ?>
												
									</div>
								</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Gambar</label>
									<div class="photo">
										<p class="help-block"><a href="../images/<?php echo "galeri/$imgname2-$tedit[gambar]"; ?>" target="_blank"><img src="../images/<?php echo "galeri/small/$imgname2-$tedit[gambar]"; ?>" width="220px" alt=""></a></p>
									<?php if($tedit['gambar']!=""){ ?>
										<a href="modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=romoveimg&id=<?php echo $tedit['id_wisata']; ?>">Hapus Gambar</a>
									<?php } ?>
									
									<input name="fupload" type="file">
									<p class="help-block">*) Ukuran Gambar Minimal Lebar 512px dan Tinggi 512px</p>
									<p class="help-block">*) Maksimal Size Gambar 2MB</p>
									<p class="help-block">*) Apabila Gambar tidak diubah, dikosongkan saja.</p>
									</div>
								
								</div><!-- /.box-body -->
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
