<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Profil</h3>
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
					<h2>Profil user</h2>&nbsp;
					<a href="<?= base_url() ?>users/edit_profile" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Edit Profil</a>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="row" align="center">
						<div class="col-md-12 col-sm-10 col-xs-12">
							<div class="pricing">
								<div class="title">
									<center>
										<img src="<?= base_url() ?>assets/upload/users/<?= $users[0]['gambar'] ?>" alt="" class="img-circle img-responsive" style=" width: 80px; height: 80px;">
									</center>
								</div>
								<div class="x_content">
									<div class="">
										<div class="pricing_features">
											<ul class="list-unstyled">
												<center>
													<div class="">
														<strong>Username</strong><br>
														<p><?= htmlspecialchars(ucfirst($group[0]['username'])) ?></p>
														<hr>
													</div>
													<div class="">
														<strong>Nama Depan</strong>
														<p><?= htmlspecialchars(ucfirst($group[0]['first_name'])) ?></p>
														<hr>
													</div>
													<div class="">
														<strong>No Telepon/WA</strong>
														<p><?= htmlspecialchars(ucfirst($group[0]['phone'])) ?></p>
														<hr>
													</div>
													<div class="">
														<strong>Jenis Kelamin</strong>
														<p><?= htmlspecialchars(ucfirst($group[0]['jenis_kelamin'])) ?></p>
													</div>
												</center>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
