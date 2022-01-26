<<<<<<< HEAD
 <div class="">
 	<div class="page-title">
 		<div class="title_left">
 			<h3>Surat Keluar</h3>
 		</div>
 	</div>
 	<?php if ($this->session->flashdata('berhasil')) : ?>
 		<div class="alert alert-success alert-dismissible fade show" role="alert">
 			Data <strong>Berhasil</strong> <?= $this->session->flashdata('berhasil'); ?>
 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 				<span aria-hidden="true">&times;</span>
 			</button>
 		</div>
 	<?php endif; ?>
 	<?php if ($this->session->flashdata('gagal')) : ?>
 		<div class="alert alert-danger alert-dismissible fade show" role="alert">
 			Data <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 				<span aria-hidden="true">&times;</span>
 			</button>
 		</div>
 	<?php endif; ?>
 	<div class="clearfix"></div>

 	<div class="row">
 		<div class="col-md-12 col-sm-12 col-xs-12">
 			<div class="x_panel">
 				<div class="x_title">
 					<h2>Data Surat Keluar</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>surat/tmb_surat_keluar" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Keluar</a>
 					<ul class="nav navbar-right panel_toolbox">
 						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 					</ul>
 					<div class="clearfix"></div>
 				</div>
 				<div class="x_content">
 					<table id="dataTable" class="table table-striped table-bordered table-hover">
 						<thead>
 							<tr style="font-size: 13px;">
 								<th width="1" style="vertical-align: middle;">No</th>
 								<th>
 									<center>No Agd,<br>No Surat</center>
 								</th>
 								<th>
 									<center>Tanggal Surat</center>
 								</th>
 								<th>
 									<center>Jenis Naskah,<br>Jenis Surat</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Klasifikasi Surat</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Kode Arsip</center>
 								</th>
 								<th>
 									<center>Asal Surat,<br> Perihal</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Isi Ringkas</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Jumlah Lampiran</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Keterangan</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Diupload Oleh</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>File</center>
 								</th>
 								<th style="vertical-align: middle;">
 									<center>Fitur</center>
 								</th>
 						</thead>
 						<tbody>
 							<?php
								$i = 1;
								foreach ($surat as $data) : ?>
 								<tr>
 									<td><?= $i++ ?></td>
 									<td><?= $data['no_agenda'] ?>,<br><?= $data['no_surat'] ?> </td>
 									<td><?= $data['tanggal_surat'] ?></td>
 									<td><?= $data['jenis_naskah'] ?>,<br><?= $data['nama_jenis'] ?></td>
 									<td><?= $data['nama_klasifikasi'] ?></td>
 									<td><?= $data['kode_arsip'] ?></td>
 									<td><?= $data['tujuan'] ?>,<br><?= $data['perihal'] ?></td>
 									<td><?= $data['isi_ringkas'] ?></td>
 									<td><?= $data['lampiran'] ?> Lembar</td>
 									<td><?= $data['keterangan'] ?></td>
 									<td><?= $data['username'] ?></td>
 									<td><a href="<?= base_url() ?>assets/upload/surat_keluar/<?= $data['file'] ?>" target="blank"><?= $data['file'] ?></a></td>
 									<td>
 										<?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "3") { ?>
 											<center>
 												<a href="<?= base_url() ?>surat/print_surat_keluar/<?= $data['id'] ?>" class="btn btn-primary" title="Print"><i class="fa fa fa-print"></i></a>
 												<a href="<?= base_url() ?>surat/edit_surat_keluar/<?= $data['id'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 												<a href="<?= base_url() ?>surat/hapus_surat_keluar/<?= $data['id'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											</center>
 										<?php } else { ?>
 											<center>
 												<a href="<?= base_url() ?>surat/print_surat_keluar/<?= $data['id'] ?>" class="btn btn-primary" title="Print"><i class="fa fa fa-print"></i></a>
 												<a href="<?= base_url() ?>surat/edit_surat_keluar/<?= $data['id'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											</center>
 										<?php } ?>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
=======
 <div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
 <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
 <div class="">
     <div class="page-title">
         <div class="title_left">
             <h3>Surat Keluar</h3>
         </div>
     </div>
     <div class="clearfix"></div>

     <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
                 <div class="x_title">
                     <h2>Data Surat Keluar</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>surat/tmb_surat_keluar"
                         class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Keluar</a>
                     <ul class="nav navbar-right panel_toolbox">
                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                     </ul>
                     <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                     <table id="dataTable" class="table table-striped table-bordered table-hover">
                         <thead>
                             <tr style="font-size: 13px;">
                                 <th width="1" style="vertical-align: middle;">No</th>
                                 <th>
                                     <center>No Agd,<br>No Surat</center>
                                 </th>
                                 <th>
                                     <center>Tanggal Surat</center>
                                 </th>
                                 <th>
                                     <center>Jenis Naskah,<br>Jenis Surat</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Klasifikasi Surat</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Kode Arsip</center>
                                 </th>
                                 <th>
                                     <center>Asal Surat,<br> Perihal</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Isi Ringkas</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Jumlah Lampiran</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Keterangan</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Diupload Oleh</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>File</center>
                                 </th>
                                 <th style="vertical-align: middle;">
                                     <center>Fitur</center>
                                 </th>
                         </thead>
                         <tbody>
                             <?php
                                $i = 1;
                                foreach ($surat as $data) : ?>
                             <tr>
                                 <td><?= $i++ ?></td>
                                 <td><?= $data['no_agenda'] ?>,<br><?= $data['no_surat'] ?> </td>
                                 <td><?= $data['tanggal_surat'] ?></td>
                                 <td><?= $data['jenis_naskah'] ?>,<br><?= $data['nama_jenis'] ?></td>
                                 <td><?= $data['nama_klasifikasi'] ?></td>
                                 <td><?= $data['kode_arsip'] ?></td>
                                 <td><?= $data['tujuan'] ?>,<br><?= $data['perihal'] ?></td>
                                 <td><?= $data['isi_ringkas'] ?></td>
                                 <td><?= $data['lampiran'] ?> Lembar</td>
                                 <td><?= $data['keterangan'] ?></td>
                                 <td><?= $data['username'] ?></td>
                                 <td><a href="<?= base_url() ?>assets/upload/surat_keluar/<?= $data['file'] ?>"
                                         target="blank"><?= $data['file'] ?></a></td>
                                 <td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <center>
                                         <a href="<?= base_url() ?>assets/upload/surat_keluar/<?= $data['file'] ?>"
                                             target="_blank" class="btn btn-primary" title="Print"><i
                                                 class="fa fa fa-print"></i></a>
                                         <a href="<?= base_url() ?>surat/edit_surat_keluar/<?= $data['id'] ?>"
                                             class="btn btn-warning" title="Edit"><i
                                                 class="fa fa-pencil-square-o"></i></a>
                                         <a href="<?= base_url() ?>surat/hapus_surat_keluar/<?= $data['id'] ?>"
                                             class="btn btn-danger tombol-hapus" title="Hapus"><i
                                                 class="fa fa-trash-o"></i></a>
                                     </center>
                                     <?php } else { ?>
                                     <center>
                                         <a href="<?= base_url() ?>assets/upload/surat_keluar/<?= $data['file'] ?>"
                                             target="_blank" class="btn btn-primary" title="Print"><i
                                                 class="fa fa fa-print"></i></a>
                                     </center>
                                     <?php } ?>
                                 </td>
                             </tr>
                             <?php endforeach ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
