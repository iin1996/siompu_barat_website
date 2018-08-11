<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	
	$aksi="modul/profil/aksi.php";
	$hal = "Profil";
	$module = "profil";
	$edit = $pdo->query("SELECT * FROM modul WHERE id_modul='23'");
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
						</ol>
					</div><!-- /.box-header -->
					
					<!-- form start -->
					<form role="form" action="<?php echo "$aksi"; ?>?module=<?php echo $module ?>&act=update" method="POST" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $tedit['id_modul']; ?>">
						
						<div class="box-body table-responsive">
						
							<div class="col-md-12">
								<div class="form-group">
										<label for="exampleInputEmail1">Deskripsi</label>
										<textarea class="ckeditor" name="isi"><?php echo"$tedit[deskripsi]" ?>
										</textarea>
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
	
}
?>
