<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Edit Disposisi Surat</h3>
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
					<h2>Form Edit Disposisi Surat</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- Form Edit Disposisi Surat-->
					<form class="form-horizontal form-label-left" method="post" action="<?= base_url() ?>surat/proses_edt_disposisi" enctype="multipart/form-data">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="no_surat" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih No Surat</option>
									<?php foreach ($surat as $data) : ?>
										<?php if ($disposisi[0]['id_surat'] == $data['id_surat']) { ?>
											<option value="<?= $data['id_surat'] ?>" selected><?= $data['no_agenda'] ?> - <?= $data['no_surat'] ?></option>
										<?php } else { ?>
											<option value="<?= $data['id_surat'] ?>"><?= $data['no_agenda'] ?> - <?= $data['no_surat'] ?></option>
										<?php } ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="perihal" value="<?= $disposisi[0]['perihal'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tujuan" value="<?= $disposisi[0]['tujuan'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Isi Disposisi<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="isi_disposisi" value="<?= $disposisi[0]['isi_disposisi'] ?>" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Sifat<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php
								$biasa = '';
								$penting = '';
								$segera = '';
								$rahasia = '';
								if ($disposisi[0]['sifat'] == "Biasa") {
									$biasa = "selected";
								} else if ($disposisi[0]['sifat'] == "Penting") {
									$penting = "selected";
								} else if ($disposisi[0]['sifat'] == "Segera") {
									$segera = "selected";
								} else if ($disposisi[0]['sifat'] == "Rahasia") {
									$rahasia = "selected";
								}
								?>
								<select class="form-control col-md-7 col-xs-12" name="sifat" required="required">
									<option value="Biasa" <?= $biasa ?>>Biasa</option>
									<option value="Penting" <?= $penting ?>>Penting</option>
									<option value="Segera" <?= $segera ?>>Segera</option>
									<option value="Rahasia" <?= $rahasia ?>>Rahasia</option>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Batas Waktu<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="date" name="batas_waktu" value="<?= $disposisi[0]['batas_waktu'] ?>" class="form-control has-feedback-left" id="tanggal">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Catatan<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="catatan" class="form-control col-md-7 col-xs-12" required="required"><?= $disposisi[0]['catatan'] ?> </textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">File<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="file" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<input type="hidden" value="<?= $disposisi[0]['id_disp'] ?>" name="id">
						<input type="hidden" value="<?= $disposisi[0]['no_agenda'] ?>" name="agenda">
						<input type="hidden" value="<?= $disposisi[0]['file'] ?>" name="file">
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3 ">
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
