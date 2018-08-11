
			<section class="content">
				<div class="row">
				<div class="col-md-12">

				  <div class="box">
					<div class="box-header">
						<h1 style="text-transform: capitalize;">Mutasi</h1>
						<ol class="breadcrumb">
							<li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active">Mutasi</li>
						</ol>
					</div><!-- /.box-header -->
				
					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Asal Dusun</th>
							<th width="23%" class="center">NIK</th>
						    <th width="23%" class="center">Tujuan Mutasi</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
							$no = 1;
							$tampil = $pdo->query("SELECT * from mutasi ORDER BY tanggal_mutasi DESC");
							while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
							$mutasi = $pdo->query("SELECT * from dusun WHERE id_dusun = '$r[tujuan_mutasi]'");
							$rr = $mutasi->fetch(PDO::FETCH_ASSOC);
							$id_mutasi = $r['id_mutasi'];
						?>
							<tr>
								<td align="center"><?php echo  $no; ?></td>
								<td><?php echo  $r['asal_dusun']; ?></td>
								<td><?php echo  $r['nik']; ?></td>
							    <td><?php echo  $rr['nama_dusun']; ?></td>
						
							
									

								
							</tr>
						<?php
						$no++;
						}
						?>
						</tbody>
						<tfoot>
						  <tr>
							<th width="2%" class="center">No</th>
							<th width="23%" class="center">Asal Dusun</th>
							<th width="23%" class="center">NIK</th>
						    <th width="23%" class="center">Tujuan Mutasi</th>
						
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			   
				</div><!-- /.col -->
			</section><!-- /.col -->
			
			
	
