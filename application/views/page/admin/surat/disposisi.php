<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Disposisi</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Disposisi Surat</h2>&nbsp; &nbsp;
                    <a href="<?= base_url() ?>surat/tmb_disposisi" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> Tambah Disposisi</a>
                    <a href="<?= base_url() ?>surat" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i>
                        Kembali</a>
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
                                <th style="vertical-align: middle;">
                                    <center>Tipe</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Dikirim Oleh</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($surat as $data) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['no_agenda'] ?> -
                                    <?= $data['no_surat'] ?></td>
                                <td><?= $data['perihal'] ?></td>
                                <td><?= $data['first_name'] ?> - <?= $data['jabatan'] ?> </td>
                                <td><?= $data['isi_disposisi'] ?></td>
                                <td><?= $data['sifat'] ?>,<br><?= $data['batas_waktu'] ?></td>
                                <td><?= $data['catatan'] ?></td>
                                <td><a href="<?= base_url() ?>assets/upload/surat_masuk/<?= $data['file'] ?>"
                                        target="blank"><?= $data['file'] ?></a></td>
                                <td>
                                    <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "3") { ?>
                                    <center>
                                        <a href="<?= base_url() ?>surat/edit_disposisi/<?= $data['id_disp'] ?>"
                                            class="btn btn-warning" title="Edit"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                        <?php if ($data['id_users'] != $_SESSION['user_id'] && $data['created_by'] == $_SESSION['user_id']) { ?>
                                        <a href="<?= base_url() ?>surat/hapus_disposisi/<?= $data['id_disp'] ?>"
                                            class="btn btn-danger tombol-hapus" title="Hapus"><i
                                                class="fa fa-trash-o"></i></a>
                                        <?php } ?>
                                        <a href="<?= base_url() ?>surat/print_disposisi/<?= $data['id_disp'] ?>"
                                            class="btn btn-primary" title="Print"><i class="fa fa fa-print"></i></a>
                                    </center>
                                    <?php } else { ?>
                                    <center>
                                        <a href="<?= base_url() ?>surat/print_disposisi/<?= $data['id_disp'] ?>"
                                            class="btn btn-primary" title="Print"><i class="fa fa fa-print"></i></a>
                                    </center>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($data['id_users'] == $_SESSION['user_id'] && $data['created_by'] != $_SESSION['user_id']) { ?>
                                    <a href="#" class="btn btn-success" title="Disposisi Masuk">In</a>
                                    <?php } else { ?>
                                    <a href="#" class="btn btn-warning" title="Disposisi Keluar">Out</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php
                                        $user = $this->All_model->getUsers($data['created_by']);
                                        echo $user[0]['first_name'];
                                        ?>

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