<?php
 if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/admin/aksi.php";
$hal = "Admin";
$module = "admin";

switch($_GET['act']){
  // Tampil Modul
  /*
  //default:
?>
	<!--
        <section class="content-header">
			<h1>Daftar <?php echo $hal; ?></h1>
			<ol class="breadcrumb">
				<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Daftar <?php echo $hal; ?></li>
			</ol>
        </section>
		
        <section class="content">
			<div class="row">
				<div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar <?php echo $hal; ?></h3>
                </div>
				<button class="btn bg-olive margin" onclick="window.location.href='?module=admin&act=add';">Tambah <?php echo $hal; ?></button>
                <div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="2%">No</th>
                        <th width="23%">Nama Lengkap</th>
                        <th width="30%">Email</th>
                        <th width="15%">No Telpon</th>
                        <th width="15%">Level Admin</th>
                        <th width="15%">Terakhir Login</th>
                        <th width="15%" colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					$tampil = mysql_query("SELECT * FROM admin ORDER BY id DESC");		  
					$no = 1;
					while($r=mysql_fetch_array($tampil)){
						$tanggal2=tgl2($r['tgl']);
					?>
						<tr>
							<td align="center"><?php echo  $no; ?></td>
							<td><?php echo  $r['nama_lengkap']; ?></td>
							<td><?php echo  $r['email']; ?></td>
							<td><?php echo  $r['no_telp']; ?></td>
							<td><?php echo  $r['level']; ?></td>
							<td><?php echo  $tanggal2; ?></td>
							<td align="center">
								<a href="media.php?module=<?php echo $module; ?>&act=edit&id=<?php echo $r['id']; ?>" title="Edit"><img src="add-icon.gif"></a>
							</td>
							<td align="center">
								<a href="modul/admin/aksi.php?module=<?php echo $module; ?>&act=remove&id=<?php echo $r['id']; ?>" title="Hapus"><img src="hr.gif"></a>
							</td>
						</tr>
					<?php
					$no++;
					}
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Tanggal Posting</th>
                        <th>Tanggal Update</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
           
				</div>
			</div>
        </section>
		-->
<?php
   // break;
  case "add":	
?>
        <section class="content-header">
          <h1> <?php echo $hal; ?></h1>
          <ol class="breadcrumb">
            <li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> <?php echo $hal; ?></li>
          </ol>
        </section>
		
		<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah <?php echo $hal; ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="modul/admin/aksi.php?module=admin&act=add" method="POST" enctype="multipart/form-data" >
					<div class="box-body table-responsive">
						
					
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#ina" data-toggle="tab">Content Indonesia</a>
									</li>
									<li class=""><a href="#en" data-toggle="tab">Content English</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade active in" id="ina">														
										<div class="form-group">
											<label for="exampleInputEmail1">Judul</label>
											<input name="judul_ind" type="text" class="form-control">
										</div>

										<div class="form-group">
											<label for="exampleInputEmail1">Deskripsi</label>
											<textarea class="ckeditor" name="deskripsi_ind"></textarea>
										</div>
									</div>
									<div class="tab-pane fade" id="en">													
										<div class="form-group">
											<label for="exampleInputEmail1">Title</label>
											<input name="judul_eng" type="text" class="form-control">
										</div>

										<div class="form-group">
											<label for="exampleInputEmail1">Description</label>
											<textarea class="ckeditor" name="deskripsi_eng"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- /.panel-body -->
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">Gambar</label>
							<input name="fupload" type="file" id="exampleInputFile">
							<p class="help-block">*) Maksimal Lebar Foto 732pixel</p>
							<p class="help-block">*) Gambar Harus ada!.</p>
						</div>
					
					</div><!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
                </form>
              </div><!-- /.box -->
            </div>
		</section>
		
<?php
    break;
   */
	case "edit":
	$edit = $pdo->query("SELECT * FROM admin WHERE id='$_GET[id]'");
	$tedit = $edit->fetch(PDO::FETCH_ASSOC);
	
?>
        <section class="content-header">
          <h1> <?php echo $hal; ?></h1>
          <ol class="breadcrumb">
            <li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> <?php echo $hal; ?></li>
          </ol>
        </section>
		
		<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit <?php echo $hal; ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="modul/admin/aksi.php?module=admin&act=update" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="id" value="<?php echo $tedit['id']; ?>">
					<input type="hidden" name="password_lama" value="<?php echo $tedit['password']; ?>">
					<div class="box-body table-responsive">
					
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Lengkap</label>
							<input name="nama_lengkap" type="text" class="form-control" value="<?php echo $tedit['nama_lengkap']; ?>">
						</div>
					
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input name="email" type="text" class="form-control" value="<?php echo $tedit['email']; ?>">
						</div>
					
						<div class="form-group">
							<label for="exampleInputEmail1">No Telpon</label>
							<input name="no_telp" type="text" class="form-control" value="<?php echo $tedit['no_telp']; ?>">
						</div>
					
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input name="username" type="text" class="form-control" value="<?php echo $tedit['username']; ?>">
						</div>
					
						<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input name="password" type="password" class="form-control" value="<?php echo $tedit['password']; ?>">
						</div>
						
						<!--
						<div class="form-group">
							<label>Status Admin</label>
							<select class="form-control" name="status">
								<option value="Blokir" <?php if($tedit['status']=='Blokir'){echo "selected";}?>>Blokir</option>
								<option value="Aktif" <?php if($tedit['status']=='Aktif'){echo "selected";}?>>Aktif</option>
							</select>
						</div>
						-->
						
					
					</div><!-- /.box-body -->

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
