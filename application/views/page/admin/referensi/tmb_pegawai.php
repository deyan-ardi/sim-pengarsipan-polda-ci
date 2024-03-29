<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Tambah Pegawai</h3>
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
					<h2>Form Tambah
						Pegawai</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!--Form tambah surat masuk -->
					<form class="form-horizontal form-label-left" action="<?= base_url() ?>referensi/proses_tmb_pegawai" method="post" enctype="multipart/form-data">

						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Pegawai<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="file" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">NRP<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="nrp" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="nama_pegawai" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="pangkat" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="jabatan" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan Kerja<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="satuan_kerja" id="satker" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih Satuan Kerja</option>
									<?php foreach ($satker as $data) : ?>
										<option value="<?= $data['id_satker'] ?>"><?= $data['kode_satker'] ?> - <?= $data['nama_satker'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>

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
