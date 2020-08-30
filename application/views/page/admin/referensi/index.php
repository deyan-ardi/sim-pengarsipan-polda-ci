<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Daftar Pegawai</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Pegawai</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>referensi/tmb_pegawai"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Pegawai</a>
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
                                    <center>NRP</center>
                                </th>
                                <th>
                                    <center>Foto</center>
                                </th>
                                <th>
                                    <center>Nama Pegawai</center>
                                </th>
                                <th>
                                    <center>Pangkat</center>
                                </th>
                                <th>
                                    <center>Jabatan</center>
                                </th>
                                <th>
                                    <center>Satuan Kerja</center>
                                </th>
                                <th>
                                    <center>Fitur</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pegawai as $data) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><img src="<?= base_url() ?>assets/upload/pegawai/<?= $data['gambar'] ?>"
                                        alt="gambar" width="50px"></td>
                                <td><?= $data['nrp'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['pangkat'] ?></td>
                                <td><?= $data['jabatan'] ?></td>
                                <td><?= $data['nama_satker'] ?></td>
                                <td>
                                    <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "3") { ?>
                                    <center>
                                        <a href="<?= base_url() ?>referensi/edit_pegawai/<?= $data['id'] ?>"
                                            class="btn btn-warning" title="Edit"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?= base_url() ?>referensi/hapus_pegawai/<?= $data['id'] ?>"
                                            class="btn btn-danger tombol-hapus" title="Hapus"><i
                                                class="fa fa-trash-o"></i></a>
                                    </center>
                                    <?php } else { ?>
                                    <center>
                                        <a href="<?= base_url() ?>referensi/edit_pegawai/<?= $data['id'] ?>"
                                            class="btn btn-warning" title="Edit"><i
                                                class="fa fa-pencil-square-o"></i></a>
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