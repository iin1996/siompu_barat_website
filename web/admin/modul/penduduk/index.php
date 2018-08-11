
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
							
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->
			
			
	
