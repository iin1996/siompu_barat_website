<?php
if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";

}else{
	$aksi="modul/sosial/aksi.php";
		
	$hal = "Content";
	$module = "sosial";

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
									<li class="active"><a href="<?php echo "$module"; ?>"><?php echo $hal; ?></a></li>
								</ol>
							</div><!-- /.box-header -->
							<!-- <button class="btn bg-olive margin" onclick="window.location.href='?module=modul&act=add';">Tambah Halaman</button> -->
							<div class="box-body table-responsive">
								<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th width="2%">No</th>
									<th width="23%">Nama Content / Halaman</th>
									<th width="15%" colspan="2">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$no = 1;
								$tampil = $pdo->query("SELECT * FROM sosial ORDER BY id_sosial ASC");
								while($r = $tampil->fetch(PDO::FETCH_ASSOC)){  
								
								?>
									<tr>
										<td align="center"><?php echo  $no; ?></td>
										<td><?php echo  $r['nama']; ?></td>
										<td align="center">
											<a href="<?php echo $module; ?>-edit-<?php echo $r['id_sosial']; ?>" title="Edit"><img src="add-icon.gif"></a>
										</td>
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
		$edit = $pdo->query("SELECT * FROM sosial WHERE id_sosial ='$_GET[id]'");
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
								<li class=""><a href="<?php echo "$module"; ?>"><?php echo $hal; ?></a></li>
								<li class="active">Edit <?php echo $tedit['nama']; ?></li>
							</ol>
						</div><!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="modul/sosial/aksi.php?module=sosial&act=update" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="id_sosial" value="<?php echo $tedit['id_sosial']; ?>">
						
							
							<div class="box-body table-responsive">	
							<div class="form-group">
									<label for="exampleInputEmail1">Nama Halaman</label>
									<input name="nama" type="text" class="form-control" value="<?php echo $tedit['nama']; ?>">
								</div>		
								
									
							</div><!-- /.box-body -->
		
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								<!--
								<input type="button" class="btn btn-success" value="Kembali" onclick="location.href='?module=<?php echo $module; ?>'">
								-->
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
