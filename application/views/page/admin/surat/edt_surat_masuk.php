<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Edit surat masuk</h3>
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
					<h2>Form Edit Surat Masuk</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!--Form Edit surat masuk -->
					<form class="form-horizontal form-label-left" action="<?= base_url() ?>surat/proses_edt_surat_masuk" method="post" enctype="multipart/form-data">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="no_surat" value="<?= $surat_masuk[0]['no_surat'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="date" name="tanggal_surat" value="<?= $surat_masuk[0]['tanggal_surat'] ?>" class="form-control has-feedback-left" id="tanggal_surat">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>

						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Naskah Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="jenis_naskah" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Jenis Naskah Surat</option>
									<?php foreach ($naskah as $data) : ?>
										<?php if ($surat_masuk[0]['id_jenis_naskah'] == $data['id']) { ?>
											<option value="<?= $data['id'] ?>" selected><?= $data['kode_naskah'] ?> - <?= $data['jenis_naskah'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id'] ?>"><?= $data['kode_naskah'] ?> - <?= $data['jenis_naskah'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="jenis_surat" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Jenis Surat</option>
									<?php foreach ($surat as $data) : ?>
										<?php if ($surat_masuk[0]['id_jenis_surat'] == $data['id']) { ?>
											<option value="<?= $data['id'] ?>" selected><?= $data['kode_surat'] ?> - <?= $data['nama_jenis'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id'] ?>"><?= $data['kode_surat'] ?> - <?= $data['nama_jenis'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Klasifikasi Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="klasifikasi_surat" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Klasifikasi Surat</option>
									<?php foreach ($klasifikasi as $data) : ?>
										<?php if ($surat_masuk[0]['id_klasifikasi'] == $data['id']) { ?>
											<option value="<?= $data['id'] ?>" selected><?= $data['kode_klasifikasi'] ?> - <?= $data['nama_klasifikasi'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id'] ?>"><?= $data['kode_klasifikasi'] ?> - <?= $data['nama_klasifikasi'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Arsip<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="kode_arsip" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Kode Arsip</option>
									<?php foreach ($arsip as $data) : ?>
										<?php if ($surat_masuk[0]['id_arsip'] == $data['id']) { ?>
											<option value="<?= $data['id'] ?>" selected><?= $data['kode_arsip'] ?> - <?= $data['nama_arsip'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id'] ?>"><?= $data['kode_arsip'] ?> - <?= $data['nama_arsip'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="asal_surat" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Satuan Kerja</option>
									<?php foreach ($satker as $data) : ?>
										<?php if ($surat_masuk[0]['id_satker'] == $data['id_satker']) { ?>
											<option value="<?= $data['id_satker'] ?>" selected><?= $data['kode_satker'] ?> - <?= $data['nama_satker'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id_satker'] ?>"><?= $data['kode_satker'] ?> - <?= $data['nama_satker'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="perihal" value="<?= $surat_masuk[0]['perihal'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Isi ringkas<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="isi_ringkas" class="form-control col-md-7 col-xs-12" required="required"><?= $surat_masuk[0]['isi_ringkas'] ?></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Lampiran<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="lampiran" value="<?= $surat_masuk[0]['lampiran'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="keterangan" class="form-control col-md-7 col-xs-12" required="required"><?= $surat_masuk[0]['keterangan'] ?></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">File<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="file" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<input type="hidden" value="<?= $surat_masuk[0]['id_surat_masuk'] ?>" name="id">
						<input type="hidden" value="<?= $surat_masuk[0]['no_agenda'] ?>" name="agenda">
						<input type="hidden" value="<?= $surat_masuk[0]['tanggal_terima'] ?>" name="tanggal_terima">
						<input type="hidden" value="<?= $surat_masuk[0]['file'] ?>" name="file">
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="reset" class="btn btn-default">Reset</button>
								<input type="submit" class="btn btn-success" value="Simpan" name="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
