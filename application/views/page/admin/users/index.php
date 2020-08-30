	<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
	<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
	<div class="">
	    <div class="page-title">
	        <div class="title_left">
	            <h3>Users</h3>
	        </div>
	    </div>
	    <div class="clearfix"></div>
	    <!-- Kepengurusan -->

	    <div class="">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="x_panel">
	                <div class="x_title">
	                    <h2>Data users</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>users/tmb_user"
	                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah users</a>
	                    <a href="<?= base_url() ?>users/tmb_group" class="btn btn-success btn-sm"><i
	                            class="fa fa-plus"></i> Tambah level</a>
	                    <ul class="nav navbar-rigth panel_toolbox">
	                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
	                    </ul>
	                </div>
	                <div class="x_content">
	                    <table id="dataTable" class="table table-striped table-bordered table-hover">
	                        <thead>
	                            <tr style="font-size: 13px;">
	                                <th style="vertical-align: middle;">
	                                    <center>Username</center>
	                                </th>
	                                <th style="vertical-align: middle;">Foto</th>
	                                <th style=" vertical-align: middle;">
	                                    <center>Nama Depan</center>
	                                </th>
	                                <th style="vertical-align: middle;">
	                                    <center>Nama Belakang</center>
	                                </th>
	                                <th style="vertical-align: middle;">
	                                    <center>Level</center>
	                                </th>
	                                <th style="vertical-align: middle;">
	                                    Jenis Kelamin
	                                </th>
	                                <th style="vertical-align: middle;">
	                                    No Telepon/WA
	                                </th>
	                                <th style=" vertical-align: middle;">
	                                    <center>Status Aktivasi</center>
	                                </th>
	                                <th>
	                                    <center>Aksi</center>
	                                </th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php
								foreach ($user as $user) : ?>
	                            <tr>
	                                <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
	                                <td><img src="<?= base_url() ?>assets/upload/users/<?= $user->gambar ?>" alt="gambar"
	                                        width="50px"></td>
	                                <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
	                                <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
	                                <td>
	                                    <?php foreach ($user->groups as $group) : ?>
	                                    <?php echo anchor("auth/edit_group/" . $group->id, '<button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> ' . $group->name . '</button>', ENT_QUOTES, 'UTF-8'); ?><br />
	                                    <?php endforeach ?>
	                                </td>
	                                <td><?php echo htmlspecialchars($user->jenis_kelamin, ENT_QUOTES, 'UTF-8'); ?></td>
	                                <td><?php echo htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
	                                <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, '<button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Sudah Aktif</button>') : anchor("auth/activate/" . $user->id, '<button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Non-Aktif </button>'); ?>
	                                </td>
	                                <td>
	                                    <a href="<?= base_url() ?>users/edt_user/<?= $user->id ?>"
	                                        class="btn btn-warning btn-sm" title="Edit"><i
	                                            class="fa fa-pencil-square-o"></i></a>
	                                    <a href="<?= base_url() ?>users/rm_user/<?= $user->id ?>"
	                                        class="btn btn-danger btn-sm tombol-hapus" title="Hapus"><i
	                                            class="fa fa-trash-o"></i></a>
	                            </tr>

	                            <?php endforeach; ?>
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>