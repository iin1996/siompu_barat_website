<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/potensi-desa/aksi.php";
	$hal = "Potensi Desa";
	$module = "potensi-desa";

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
							<th width="30%" class="center">Nama Desa</th>
							<th width="10%" class="center">Nama <?php echo $hal; ?></th>
							<th width="30%" class="center">Gambar</th>
							<th width="28%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from potensi_desa ORDER BY id_potensi_desa DESC");
						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
						$namaddesa = $pdo->query("SELECT * from desa WHERE id_desa = '$r[id_desa]'");
						$dd = $namaddesa->fetch(PDO::FETCH_ASSOC);
						$id_potensi_desa = $r['id_potensi_desa'];
							
							if($r["gambar"]==""){$gbr = "no-images.jpg";}else{$gbr = "galeri/small/$imgname2-$r[gambar]";}
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $dd['judul']; ?></td>
								<td><?php echo  $r['nama']; ?></td>
								<td align="center"><img src="../images/<?php echo $gbr; ?>" width="180px"></td>
								
								<td align="center">
									<table class="tbltmbahan" style="width: 100%;padding: 0px;min-height: 28px;text-align: center; border: 0px;">
										<tr>
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_potensi_desa']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>
											
											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_potensi_desa']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
							<th width="30%" class="center">Nama Desa</th>
							<th width="10%" class="center">Nama <?php echo $hal; ?></th>
							<th width="30%" class="center">Gambar</th>
							<th width="28%"  class="center">Aksi</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->
			
			
			<script type="text/javascript">
			function myFunctionDel() {
				if (confirm("Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!") == true) {
					window.location.assign("modul/potensi-desa/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $id_potensi_desa; ?>")
				}
			}
			</script>
			
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
					<form role="form" action="modul/potensi-desa/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
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
											  	$namadesa = $pdo->query("SELECT * from desa ORDER BY judul ASC");
												while($nd = $namadesa->fetch(PDO::FETCH_ASSOC)){
										  ?>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="id_desa" value="<?php echo $nd['id_desa']; ?>">
                                                   <i class="input-helper"></i><?php echo $nd['judul']; ?>
												    </label>
                                        </div>
										<?php } ?>
							</div>
						</div>	
						
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
													<h2>Potensi Desa
														<small>Pilih Tipe Potensi Desa
													</small>
													</h2>
											  </div>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="potensidesa" value="PAKAIAN">
                                                   <i class="input-helper"></i>Pakaian
												    </label>
                                                </div>
										<div class="radio m-b-15">
											       <label>
												   <input type="radio" name="potensidesa" value="TENUNAN">
                                                   <i class="input-helper"></i>Tenunan
												  </label>
                                        </div>
                                        <div class="radio m-b-15">
											       <label>
												   <input type="radio" name="potensidesa" value="ADAT ISTIADAT">
                                                   <i class="input-helper"></i>Adat Istiadat
												  </label>
                                        </div>
                                        <div class="radio m-b-15">
											       <label>
												   <input type="radio" name="potensidesa" value="MAKANAN KHAS">
                                                   <i class="input-helper"></i>Makanan Khas
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
		$edit = $pdo->query("SELECT * FROM potensi_desa WHERE id_potensi_desa ='$_GET[id]'");
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
					<form role="form" action="modul/potensi-desa/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_potensi_desa" value="<?php echo $tedit['id_potensi_desa']; ?>">
						
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
											  	$namadesa = $pdo->query("SELECT * from desa ORDER BY judul ASC");
												while($nd = $namadesa->fetch(PDO::FETCH_ASSOC)){
										  ?>

										  <?php
												  if($tedit['id_desa']==$nd['id_desa']){
											?>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="id_desa" value="<?php echo $nd['id_desa']; ?>" checked>
                                                   <i class="input-helper"></i><?php echo $nd['judul']; ?>
												    </label>
                                        </div>
                                    <?php } else { ?>

										<div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="id_desa" value="<?php echo $nd['id_desa']; ?>">
                                                   <i class="input-helper"></i><?php echo $nd['judul']; ?>
												    </label>
                                        </div>
										<?php } }  ?>
                                    
							</div>
						</div>	
						
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
													<h2>Potensi Desa
														<small>Tipe Potensi Desa
													</small>
													</h2>
											  </div>
											  
								
                                             	<?php
												  if($tedit['potensidesa']=='PAKAIAN'){
												?>
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="potensidesa" value="PAKAIAN" checked>
		                                                   <i class="input-helper"></i>Pakaian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="TENUNAN">
                                                 			  <i class="input-helper"></i>Tenunan
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="ADAT ISTIADAT">
                                                 			  <i class="input-helper"></i>Adat Istiadat
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="MAKANAN KHAS">
                                                 			  <i class="input-helper"></i>Makanan Khas
												 		 </label>
                                                  </div>


                                               <?php }else if($tedit['potensidesa']=='TENUNAN'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="potensidesa" value="PAKAIAN">
		                                                   <i class="input-helper"></i>Pakaian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="TENUNAN" checked>
                                                 			  <i class="input-helper"></i>Tenunan
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="ADAT ISTIADAT">
                                                 			  <i class="input-helper"></i>Adat Istiadat
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="MAKANAN KHAS">
                                                 			  <i class="input-helper"></i>Makanan Khas
												 		 </label>
                                                  </div>
 
                                                    <?php }else if($tedit['potensidesa']=='ADAT ISTIADAT'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="potensidesa" value="PAKAIAN">
		                                                   <i class="input-helper"></i>Pakaian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="TENUNAN">
                                                 			  <i class="input-helper"></i>Tenunan
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="ADAT ISTIADAT" checked>
                                                 			  <i class="input-helper"></i>Adat Istiadat
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="MAKANAN KHAS">
                                                 			  <i class="input-helper"></i>Makanan Khas
												 		 </label>
                                                  </div>

                                                  <?php }else if($tedit['potensidesa']=='MAKANAN KHAS'){ ?>     

												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="potensidesa" value="PAKAIAN">
		                                                   <i class="input-helper"></i>Pakaian
													    </label>
                                                  </div>

												  <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="TENUNAN">
                                                 			  <i class="input-helper"></i>Tenunan
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="ADAT ISTIADAT">
                                                 			  <i class="input-helper"></i>Adat Istiadat
												 		 </label>
                                                  </div>

                                                   <div class="radio m-b-15">
											      		 <label>
												  			 <input type="radio" name="potensidesa" value="MAKANAN KHAS" checked>
                                                 			  <i class="input-helper"></i>Makanan Khas
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
										<a href="modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=romoveimg&id=<?php echo $tedit['id_potensi_desa']; ?>">Hapus Gambar</a>
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
