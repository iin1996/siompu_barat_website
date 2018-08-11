
<?php if($_SESSION['leveladmin'] == 'admin'){ ?>

          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li class="<?php if($_GET['module']=='home'){echo "active";} ?>"><a href="home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			
			
            <li class="treeview <?php if(($_GET['module']=='fasilitas')OR($_GET['module']=='keunggulan')OR($_GET['module']=='slider')OR($_GET['module']=='page')AND($_GET['id']=='0')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Home</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='slider')){echo "active";} ?>"><a href="slider"><i class="fa fa-file-image-o"></i> <span>Slider</span></a></li>
				
				</ul>
            </li>
			
			<li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='1')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Tentang Kami</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='1')){echo "active";} ?>"><a href="page-edit-1"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Tentang Kami</span></a></li>
				
				</ul>
            </li>

			<li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='11')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Visi Misi</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='11')){echo "active";} ?>"><a href="page-edit-11"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Visi Misi</span></a></li>
				
				</ul>
            </li>

            <!-- <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='23')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Sejarah</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='23')){echo "active";} ?>"><a href="page-edit-23"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Sejarah</span></a></li>
				
				</ul>
            </li>


			<li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='24')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Kependudukan</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='24')){echo "active";} ?>"><a href="page-edit-24"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Kependudukan</span></a></li>
				
				</ul>
            </li> -->


            <li class="treeview <?php if(($_GET['module']=='peraturan-desa')OR($_GET['module']=='page')AND($_GET['id']=='2')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Profil Desa</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">

				
			
					<li class="<?php if(($_GET['module']=='kepdes')){echo "active";} ?>"><a href="kepdes"><i class="fa fa-file-image-o"></i> <span>Foto Kepala Desa</span></a></li>
				
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='2')){echo "active";} ?>"><a href="page-edit-2"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Profil Desa</span></a></li>
			
					<li class="<?php if(($_GET['module']=='peraturan-desa')AND($_GET['act']!='add')){echo "active";} ?>"><a href="peraturan-desa"><i class="fa fa-file" aria-hidden="true"></i> <span>Profil Desa</span></a></li>
			
					<li class="<?php if(($_GET['module']=='peraturan-desa')AND($_GET['act']=='add')){echo "active";} ?>"><a href="peraturan-desa-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Profil Desa</span></a></li>
				
				</ul>
            </li>


           <li class="treeview <?php if(($_GET['module']=='potensi-desa')OR($_GET['module']=='page')AND($_GET['id']=='25')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Potensi Desa</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='25')){echo "active";} ?>"><a href="page-edit-25"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Potensi Desa</span></a></li>
			
					<li class="<?php if(($_GET['module']=='potensi-desa')AND($_GET['act']!='add')){echo "active";} ?>"><a href="potensi-desa"><i class="fa fa-file" aria-hidden="true"></i> <span>Potensi Desa</span></a></li>
			
					<li class="<?php if(($_GET['module']=='potensi-desa')AND($_GET['act']=='add')){echo "active";} ?>"><a href="potensi-desa-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Potensi Desa</span></a></li>
				
				</ul>
            </li>

   			<li class="treeview <?php if(($_GET['module']=='wisata')OR($_GET['module']=='page')AND($_GET['id']=='26')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Wisata</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='26')){echo "active";} ?>"><a href="page-edit-26"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Wisata</span></a></li>
			
					<li class="<?php if(($_GET['module']=='wisata')AND($_GET['act']!='add')){echo "active";} ?>"><a href="wisata"><i class="fa fa-file" aria-hidden="true"></i> <span>Wisata</span></a></li>
			
					<li class="<?php if(($_GET['module']=='wisata')AND($_GET['act']=='add')){echo "active";} ?>"><a href="wisata-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Wisata</span></a></li>
				
				</ul>
            </li>

			<!-- <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='12')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Pakaian</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='12')){echo "active";} ?>"><a href="page-edit-12"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Pakaian</span></a></li>
				
				</ul>
            </li>


			<li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='13')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Tenunan</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='13')){echo "active";} ?>"><a href="page-edit-13"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Tenunan</span></a></li>
				
				</ul>
            </li>

            <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='14')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Adat Istiadat</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='14')){echo "active";} ?>"><a href="page-edit-14"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Adat Istiadat</span></a></li>
				
				</ul>
            </li>

 			 <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='15')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Makanan Khas</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='15')){echo "active";} ?>"><a href="page-edit-15"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Makanan Khas</span></a></li>
				
				</ul>
            </li> -->

            <!--  <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='16')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Wisata Pemandian</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='16')){echo "active";} ?>"><a href="page-edit-16"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Wisata Pemandian</span></a></li>
				
				</ul>
            </li>

             <li class="treeview <?php if(($_GET['module']=='page')AND($_GET['id']=='17')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Wisata Pantai</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='17')){echo "active";} ?>"><a href="page-edit-17"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Wisata Pantai</span></a></li>
				
				</ul>
            </li> -->

            
        
            <li class="treeview <?php if(($_GET['module']=='inspirasi')OR($_GET['module']=='page')AND($_GET['id']=='4')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Berita Terbaru</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='4')){echo "active";} ?>"><a href="page-edit-4"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Berita</span></a></li>
			
					<li class="<?php if(($_GET['module']=='inspirasi')AND($_GET['act']!='add')){echo "active";} ?>"><a href="inspirasi"><i class="fa fa-file" aria-hidden="true"></i> <span>Berita</span></a></li>
			
					<li class="<?php if(($_GET['module']=='inspirasi')AND($_GET['act']=='add')){echo "active";} ?>"><a href="inspirasi-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Berita</span></a></li>
				
				</ul>
            </li>



            <li class="treeview <?php if(($_GET['module']=='galeri')OR($_GET['module']=='page')AND($_GET['id']=='5')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Galeri Foto</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='5')){echo "active";} ?>"><a href="page-edit-5"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Foto Galeri</span></a></li>
			
					<li class="<?php if(($_GET['module']=='galeri')AND($_GET['act']=='list')){echo "active";} ?>"><a href="galeri-list"><i class="fa fa-file" aria-hidden="true"></i> <span>Foto Galeri</span></a></li>
			
					<li class="<?php if(($_GET['module']=='galeri')AND($_GET['act']=='add')){echo "active";} ?>"><a href="galeri-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Foto Galeri</span></a></li>
				
				</ul>
            </li>

            <li class="treeview <?php if(($_GET['module']=='video')OR($_GET['module']=='page')AND($_GET['id']=='6')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Video</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='6')){echo "active";} ?>"><a href="page-edit-6"><i class="fa fa-file" aria-hidden="true"></i> <span>Deskripsi Video</span></a></li>
			
					<li class="<?php if(($_GET['module']=='video')AND($_GET['act']!='add')){echo "active";} ?>"><a href="video"><i class="fa fa-file" aria-hidden="true"></i> <span>Video</span></a></li>
			
					<li class="<?php if(($_GET['module']=='video')AND($_GET['act']=='add')){echo "active";} ?>"><a href="video-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Video</span></a></li>
				
				</ul>
            </li>


             <li class="treeview <?php if(($_GET['module']=='sosial')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Modul</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='1')){echo "active";} ?>"><a href="sosial-edit-1"><i class="fa fa-file" aria-hidden="true"></i> <span>Facebook</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='2')){echo "active";} ?>"><a href="sosial-edit-2"><i class="fa fa-file" aria-hidden="true"></i> <span>Twiter</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='3')){echo "active";} ?>"><a href="sosial-edit-3"><i class="fa fa-file" aria-hidden="true"></i> <span>Instagram</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='4')){echo "active";} ?>"><a href="sosial-edit-4"><i class="fa fa-file" aria-hidden="true"></i> <span>Google Plus</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='5')){echo "active";} ?>"><a href="sosial-edit-5"><i class="fa fa-file" aria-hidden="true"></i> <span>No Telepon</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='6')){echo "active";} ?>"><a href="sosial-edit-6"><i class="fa fa-file" aria-hidden="true"></i> <span>Alamat Email</span></a></li>
					<li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='7')){echo "active";} ?>"><a href="sosial-edit-7"><i class="fa fa-file" aria-hidden="true"></i> <span>Alamat Desa</span></a></li>
					<!-- <li class="<?php if(($_GET['module']=='sosial')AND($_GET['id']=='8')){echo "active";} ?>"><a href="sosial-edit-8"><i class="fa fa-file" aria-hidden="true"></i> <span>Peta Desa</span></a></li> -->
				
				</ul>
            </li>
           
			
			<li class="<?php if(($_GET['module']=='page')AND($_GET['id']=='3')){echo "active";} ?>"><a href="page-edit-3"><i class="fa fa-file" aria-hidden="true"></i> <span>Kotak Saran</span></a></li>
			
			
           <!--  <li class=""><a href="admin"><i class="fa fa-user"></i> <span>Admin</span></a></li> -->

           <li class="<?php if(($_GET['module']=='contact')){echo "active";} ?>"><a href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Kontak Saran</span></a></li>

            <li class="treeview <?php if(($_GET['module']=='mutasi')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Daftar Mutasi</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='mutasi')AND($_GET['act']!='add')){echo "active";} ?>"><a href="mutasi"><i class="fa fa-file" aria-hidden="true"></i> <span>Mutasi</span></a></li>
			
					<li class="<?php if(($_GET['module']=='mutasi')AND($_GET['act']=='add')){echo "active";} ?>"><a href="mutasi-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Mutasi</span></a></li>
				
				</ul>
            </li>

              <li class="treeview <?php if(($_GET['module']=='kematian')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Daftar Kematian</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='kematian')AND($_GET['act']!='add')){echo "active";} ?>"><a href="kematian"><i class="fa fa-file" aria-hidden="true"></i> <span>Kematian</span></a></li>
			
					<li class="<?php if(($_GET['module']=='kematian')AND($_GET['act']=='add')){echo "active";} ?>"><a href="kematian-tambah"><i class="fa fa-file" aria-hidden="true"></i> <span>Tambah Kematian</span></a></li>
				
				</ul>
            </li>
			
			
          </ul>

          <?php } elseif($_SESSION['leveladmin'] == 'kepdes') { ?>
 			
		   <ul class="sidebar-menu">

 			 <li class="treeview <?php if(($_GET['module']=='laporan-penduduk')){echo "active";} ?>">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Laporan Penduduk</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="<?php if(($_GET['module']=='laporan-penduduk')){echo "active";} ?>"><a href="laporan-penduduk"><i class="fa fa-file" aria-hidden="true"></i> <span>Penduduk</span></a></li>
						
				</ul>
            </li>

             <li class="treeview active">			
				<a href="#">
					<i class="fa fa-folder-open"></i> <span>Laporan Mutasi</span>
					<i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
			
					<li class="active"><a href="laporan-mutasi"><i class="fa fa-file" aria-hidden="true"></i> <span>Mutasi</span></a></li>
						
				</ul>
            </li>
        </ul>

          	<?php } ?>