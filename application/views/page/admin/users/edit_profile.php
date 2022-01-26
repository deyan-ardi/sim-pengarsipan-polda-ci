<<<<<<< HEAD
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Edit Users</h3>
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
						<h2>Form Edit Users</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form Edit Users -->

						<form class="form-horizontal form-label-left" action="<?= base_url() ?>users/proses_edit_users" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Depan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="first_name" class="form-control col-md-7 col-xs-12" required="required" value="<?= $users[0]['first_name'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/WA<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="phone" class="form-control col-md-7 col-xs-12" required="required" value="<?= $users[0]['phone'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-7 col-xs-12" required="required">
										<?php if ($users[0]['jenis_kelamin'] == "Laki-Laki") { ?>
											<option value="Laki-Laki" selected>Laki-Laki</option>
										<?php } else { ?>
											<option value="Laki-Laki">Laki-Laki</option>
										<?php } ?>
										<?php if ($users[0]['jenis_kelamin'] == "Perempuan") { ?>
											<option value="Perempuan" selected>Perempuan</option>
										<?php } else { ?>
											<option value="Perempuan">Perempuan</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="file" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<input type="hidden" value="<?= $users[0]['id'] ?>" name="id">
							<input type="hidden" value="<?= $users[0]['gambar'] ?>" name="file_lama">
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="reset" class="btn btn-default">Reset</button>
									<input type="submit" class="btn btn-success" name="edit" value="Simpan">
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
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
	<div class="">
	    <div class="page-title">
	        <div class="title_left">
	            <h3>Edit Users</h3>
	        </div>
	    </div>
	    <div class="clearfix"></div>

	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="x_panel">
	                <div class="x_title">
	                    <h2>Form Edit Users</h2>
	                    <ul class="nav navbar-right panel_toolbox">
	                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
	                    </ul>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="x_content">
	                    <!-- Form Edit Users -->

	                    <form class="form-horizontal form-label-left" action="<?= base_url() ?>users/proses_edit_users"
	                        method="post" enctype="multipart/form-data">
	                        <div class="item form-group">
	                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Depan<span
	                                    class="required">&nbsp; :</span></label>
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" name="first_name" class="form-control col-md-7 col-xs-12"
	                                    required="required" value="<?= $users[0]['first_name'] ?>">
	                            </div>
	                        </div>
	                        <div class="item form-group">
	                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/WA<span
	                                    class="required">&nbsp; :</span></label>
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" name="phone" class="form-control col-md-7 col-xs-12"
	                                    required="required" value="<?= $users[0]['phone'] ?>">
	                            </div>
	                        </div>
	                        <div class="item form-group">
	                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span
	                                    class="required">&nbsp; :</span></label>
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-7 col-xs-12"
	                                    required="required">
	                                    <?php if ($users[0]['jenis_kelamin'] == "Laki-Laki") { ?>
	                                    <option value="Laki-Laki" selected>Laki-Laki</option>
	                                    <?php } else { ?>
	                                    <option value="Laki-Laki">Laki-Laki</option>
	                                    <?php } ?>
	                                    <?php if ($users[0]['jenis_kelamin'] == "Perempuan") { ?>
	                                    <option value="Perempuan" selected>Perempuan</option>
	                                    <?php } else { ?>
	                                    <option value="Perempuan">Perempuan</option>
	                                    <?php } ?>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="item form-group">
	                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">&nbsp;
	                                    :</span></label>
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="file" name="file" class="form-control col-md-7 col-xs-12">
	                            </div>
	                        </div>
	                        <input type="hidden" value="<?= $users[0]['id'] ?>" name="id">
	                        <input type="hidden" value="<?= $users[0]['gambar'] ?>" name="file_lama">
	                        <div class="ln_solid"></div>
	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-3">
	                                <button type="reset" class="btn btn-default">Reset</button>
	                                <input type="submit" class="btn btn-success" name="edit" value="Simpan">
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
