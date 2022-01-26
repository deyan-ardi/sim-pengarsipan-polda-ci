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
                    <h2>Data Pegawai</h2>&nbsp; &nbsp;
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pegawai as $data) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['nrp'] ?></td>
                                <td><img src="<?= base_url() ?>assets/upload/users/<?= $data['gambar'] ?>" alt="gambar"
                                        width="50px"></td>
                                <td><?= $data['first_name'] ?></td>
                                <td><?= $data['pangkat'] ?></td>
                                <td><?= $data['jabatan'] ?></td>
                                <td><?= $data['kode_satker'] ?> - <?= $data['nama_satker'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
