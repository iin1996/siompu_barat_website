<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/video/aksi.php";
	$hal = "Video";
	$module = "video";

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
							<th width="10%" class="center">Tanggal Update</th>
							<th width="60%"  class="center">Aksi</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						$tampil = $pdo->query("SELECT * from video ORDER BY id DESC");

						while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$id = $r['id'];
							
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['judul']; ?></td>
								<td align="center"><?php echo  tgl2($r['tanggal']); ?></td>
								
								<td align="center">
									<button class="btn btn-success btn-flat btnadmin" onclick="location.href='<?php echo $module; ?>-edit-<?php echo $r['id']; ?>'">Edit</button>
									
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
							<th width="23%" class="center">Judul <?php echo $hal; ?></th>
							<th width="10%" class="center">Tanggal Update</th>
							<th width="60%" class="center">Aksi</th>
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
					window.location.assign("modul/video/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $id; ?>")
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
					<form role="form" action="modul/video/aksi.php?module=<?php echo $module; ?>&act=add" method="POST" enctype="multipart/form-data" >
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul <span title="wajib" style="color: red;">*</span></label>
									<input name="judul" type="text" class="form-control" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Link Video <span title="wajib" style="color: red;">*</span></label>
									<input name="video" type="text" class="form-control" required>
								</div>
							</div>
							
							

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
		$edit = $pdo->query("SELECT * FROM video WHERE id ='$_GET[id]'");
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
					<form role="form" action="modul/video/aksi.php?module=<?php echo $module; ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $tedit['id']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul <span title="wajib" style="color: red;">*</span></label>
									<input name="judul" type="text" class="form-control" value="<?php echo $tedit['judul']; ?>" required>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Video <span title="wajib" style="color: red;">*</span></label>
									<input name="video" type="text" class="form-control" value="<?php echo $tedit['video']; ?>" required>
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
