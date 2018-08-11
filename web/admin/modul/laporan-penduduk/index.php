<?php	
	$aksi="modul/laporan-penduduk/aksi.php";
	$hal = "Laporan Penduduk";
	$module = "laporan-penduduk";

	switch($_GET['act']){
		case "list":
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
                            <a href="<?php echo $module; ?>-tambah" class="btn btn-success pull-right"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Penduduk</a>
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
						$dusun = $pdo->query("SELECT * from penduduk ORDER BY id_penduduk DESC");
						while($r = $dusun->fetch(PDO::FETCH_ASSOC)){
						$desa = $pdo->query("SELECT * from dusun WHERE id_dusun = '$r[id_dusun]'");
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
											<td style="border-right: 2px solid #f4f4f4;"><a href="<?php echo $module; ?>-edit-<?php echo $r['id_penduduk']; ?>" title="Edit"><img src="add-icon.gif"><br/>Edit</a></td>

											<td style="border-right: 2px solid #f4f4f4;"><a title="Hapus" onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');" href='modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id_penduduk']; ?>' ><img src="hr.gif"><br/>Hapus</a>	</td>
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
		case "add":
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
					<form role="form" action="modul/laporan-penduduk/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
					
						
						<div class="box-body table-responsive">

							<div class="col-md-12">
								<div class="form-group">
							<div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Nama Dusun
														<small>Pilih Nama Dusun
													</small>
													</h2>
											  </div>
											  <?php
													$tmbhdesa = $pdo->query("SELECT * FROM dusun ORDER BY nama_dusun ASC");
													while($ds = $tmbhdesa->fetch(PDO::FETCH_ASSOC)){
											  ?>
										 <div class="radio m-b-15">
											       <label>
                                                   <input type="radio" name="id_dusun" value="<?php echo $ds['id_dusun']; ?>">
                                                   <i class="input-helper"></i><?php echo $ds['nama_dusun']; ?>
												    </label>
                                                </div>
										<?php } ?>
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
		case "edit":
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
					<form role="form" action="modul/laporan-penduduk/aksi.php?module=<?php echo $module; ?>&act=edit" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_penduduk" value="<?php echo $es['id_penduduk']; ?>">
						
						<div class="box-body table-responsive">

							<div class="col-md-12">
								<div class="form-group">
							 <div class="card-header" style="padding: 0;margin-bottom: 10px;">
													<h2>Nama Dusun
														<small>Pilih Nama Dusun
													</small>
													</h2>
											  </div>
											  
											 	 <?php
													$dusunnn = $pdo->query("SELECT * FROM dusun");
													while($as = $dusunnn->fetch(PDO::FETCH_ASSOC)){
													$namadusun = $as['id_dusun'];
												    if($es['id_dusun']== $namadusun){

												?>
								
                   
												
												 <div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="id_dusun" value="<?php echo $as['id_dusun'];?>" checked>
		                                                   <i class="input-helper"></i><?php echo $as['nama_dusun'];?>
													    </label>
                                                  </div>

                                              <?php } else { ?>

 												<div class="radio m-b-15">
												       <label>
		                                                   <input type="radio" name="id_dusun" value="<?php echo $as['id_dusun'];?>">
		                                                   <i class="input-helper"></i><?php echo $as['nama_dusun'];?>
													    </label>
                                                  </div>

                                           
											 <?php } }  ?>
												
									</div>
								</div>
						
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
?>			
			
	
