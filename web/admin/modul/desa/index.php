<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/produk/aksi.php";
	$hal = "Data Desa";
	$module = "desa";

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
							<th width="23%" class="center">Nama</th>
							<th width="10%" class="center">Jabatan</th>
							<th width="10%" class="center">No RT/RW</th>
							<th width="10%" class="center">Alamat</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from desa ORDER BY id_desa DESC");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$id_desa = $r['id_desa'];
						
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['nama']; ?></td>
								<td><?php echo  $r['jabatan']; ?></td>
								<td><?php echo  $r['no']; ?></td>
								<td><?php echo  $r['alamat']; ?></td>
							
								<td align="center">
									<button class="btn btn-success btn-flat btnadmin" onclick="location.href='<?php echo $module; ?>-edit-<?php echo $r['id_desa']; ?>'">Edit</button>
									
									<button class="btn btn-danger btn-flat btnadmin" onClick="myFunctionDel()">Delete</button>
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
							<th width="23%" class="center">Nama</th>
							<th width="10%" class="center">Jabatan</th>
							<th width="10%" class="center">No RT/RW</th>
							<th width="10%" class="center">Alamat</th>
							<th width="60%"  class="center">Aksi</th>
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
					window.location.assign("modul/desa/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $id_desa; ?>")
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
					<form role="form" action="modul/desa/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jabatan <span title="wajib" style="color: red;">*</span></label>
									<input name="jabatan" type="text" class="form-control" required>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No RT/RW <span title="wajib" style="color: red;">*</span></label>
									<input name="no" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Alamat</label>
									<textarea class="ckeditor" name="alamat"></textarea>
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
		$edit = $pdo->query("SELECT * FROM desa WHERE id_desa = '$_GET[id]'");
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
							<li class="active"><?php echo $tedit['nama']; ?></li>
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="modul/desa/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id_desa" value="<?php echo $tedit['id_desa']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama <span title="wajib" style="color: red;">*</span></label>
									<input name="nama" type="text" class="form-control" value="<?php echo $tedit['nama']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Jabatan <span title="wajib" style="color: red;">*</span></label>
									<input name="jabatan" type="text" class="form-control" value="<?php echo $tedit['jabatan']; ?>" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">No RT/RW <span title="wajib" style="color: red;">*</span></label>
									<input name="no" type="text" class="form-control" value="<?php echo $tedit['no']; ?>" required>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Alamat</label>
									<textarea class="ckeditor" name="alamat"><?php echo $tedit['alamat']; ?></textarea>
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
