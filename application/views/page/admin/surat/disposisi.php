<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Disposisi</h3>
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
					<h2>Disposisi Surat</h2>&nbsp; &nbsp;
					<a href="<?= base_url() ?>surat/tmb_disposisi" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Disposisi</a>
					<a href="<?= base_url() ?>surat" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i> Kembali</a>
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
								<th style="vertical-align: middle;">
									<center>Perihal</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Tujuan</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Isi Disposisi</center>
								</th>
								<th>
									<center>Sifat,<br>Batas Waktu</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Catatan</center>
								</th>
								<th style="vertical-align: middle;">
									<center>File</center>
								</th>
								<th style="vertical-align: middle;">
									<center>Action</center>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($surat as $data) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $data['no_agenda'] ?>,<br><?= $data['nomor_agenda'] ?> - <?= $data['no_surat'] ?></td>
									<td><?= $data['perihal'] ?></td>
									<td><?= $data['tujuan'] ?></td>
									<td><?= $data['isi_disposisi'] ?></td>
									<td><?= $data['sifat'] ?>,<br><?= $data['batas_waktu'] ?></td>
									<td><?= $data['catatan'] ?></td>
									<td><a href="<?= base_url() ?>assets/upload/disposisi/<?= $data['file'] ?>" target="blank"><?= $data['file'] ?></a></td>
									<td>
										<?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "3") { ?>
											<center>
												<a href="<?= base_url() ?>surat/edit_disposisi/<?= $data['id_disp'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
												<a href="<?= base_url() ?>surat/hapus_disposisi/<?= $data['id_disp'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
											</center>
										<?php } else { ?>
											<center>
												<a href="<?= base_url() ?>surat/edit_disposisi/<?= $data['id_disp'] ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
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
