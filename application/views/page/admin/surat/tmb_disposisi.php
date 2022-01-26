<<<<<<< HEAD
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Tambah Disposisi Surat</h3>
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
					<h2>Form Tambah Disposisi Surat</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- Form Tambah Disposisi Surat-->
					<form class="form-horizontal form-label-left" method="post" action="<?= base_url() ?>surat/proses_tmb_disposisi" enctype="multipart/form-data">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No Surat<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="no_surat" class="form-control col-md-7 col-xs-12" required="required">
									<option value="">Pilih No Surat</option>
									<?php foreach ($surat as $data) : ?>
										<option value="<?= $data['id_surat'] ?>"><?= $data['no_agenda'] ?> - <?= $data['no_surat'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="perihal" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tujuan" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Isi Disposisi<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="isi_disposisi" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Sifat<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control col-md-7 col-xs-12" name="sifat" required="required">
									<option value="Biasa">Biasa</option>
									<option value="Penting">Penting</option>
									<option value="Segera">Segera</option>
									<option value="Rahasia">Rahasia</option>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Batas Waktu<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="date" name="batas_waktu" class="form-control has-feedback-left" id="tanggal">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Catatan<span class="required">&nbsp;</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="catatan" class="form-control col-md-7 col-xs-12" required="required"></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">File<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="file" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
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
=======
<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah Disposisi Surat</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah Disposisi Surat</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- Form Tambah Disposisi Surat-->
                    <form class="form-horizontal form-label-left" method="post"
                        action="<?= base_url() ?>surat/proses_tmb_disposisi" enctype="multipart/form-data">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="no_surat" class="form-control col-md-7 col-xs-12" required="required">
                                    <option value="">Pilih No Surat</option>
                                    <?php foreach ($surat as $data) : ?>
                                    <option value="<?= $data['id_surat'] ?>"><?= $data['no_agenda'] ?> -
                                        <?= $data['no_surat'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="perihal" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan<span class="required">&nbsp;
                                    :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="tujuan" class="form-control col-md-7 col-xs-12">
                                    <option value="">Pilih Tujuan Disposisi</option>
                                    <?php foreach ($pegawai as $data) : ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['first_name'] ?>
                                        - <?= $data['jabatan'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Isi Disposisi<span
                                    class="required">&nbsp;</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="isi_disposisi" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sifat<span
                                    class="required">&nbsp;</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-7 col-xs-12" name="sifat" required="required">
                                    <option value="Biasa">Biasa</option>
                                    <option value="Penting">Penting</option>
                                    <option value="Segera">Segera</option>
                                    <option value="Rahasia">Rahasia</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Batas Waktu<span
                                    class="required">&nbsp;</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" min="<?= date('Y-m-d') ?>" name="batas_waktu"
                                    class="form-control has-feedback-left" id="tanggal">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Catatan<span
                                    class="required">&nbsp;</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="catatan" class="form-control col-md-7 col-xs-12"
                                    required="required"></textarea>
                            </div>
                        </div>
                        <input type="hidden" value="<?= $_SESSION['user_id']; ?>" name="id_user">
                        <div class=" ln_solid">
                        </div>
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
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
