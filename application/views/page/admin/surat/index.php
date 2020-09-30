<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Surat Masuk</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Surat Masuk</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>surat/tmb_surat_masuk"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Masuk</a>
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
                                <th>
                                    <center>Tanggal Surat</center>
                                </th>
                                <th>
                                    <center>Jenis Naskah,<br>Jenis Surat</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Klasifikasi Surat</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Kode Arsip</center>
                                </th>
                                <th>
                                    <center>Asal Surat,<br> Perihal</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Isi Ringkas</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Jumlah Lampiran</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Keterangan</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>File</center>
                                </th>
                                <th style="vertical-align: middle;">
                                    <center>Fitur</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($surat as $data) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['no_agenda'] ?>,<br><?= $data['no_surat'] ?> </td>
                                <td><?= $data['tanggal_surat'] ?></td>
                                <td><?= $data['jenis_naskah'] ?>,<br><?= $data['nama_jenis'] ?></td>
                                <td><?= $data['nama_klasifikasi'] ?></td>
                                <td><?= $data['kode_arsip'] ?></td>
                                <td><?= $data['nama_satker'] ?>,<br><?= $data['perihal'] ?></td>
                                <td><?= $data['isi_ringkas'] ?></td>
                                <td><?= $data['lampiran'] ?> Lembar</td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><a href="<?= base_url() ?>assets/upload/surat_masuk/<?= $data['file'] ?>"
                                        target="blank"><?= $data['file'] ?></a></td>
                                <td>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <center>
                                        <a href="<?= base_url() ?>assets/upload/surat_masuk/<?= $data['file'] ?>"
                                            target="_blank" class="btn btn-primary" title="Print"><i
                                                class="fa fa fa-print"></i></a>
                                        <a href="<?= base_url() ?>surat/edit_surat_masuk/<?= $data['id_surat'] ?>"
                                            class="btn btn-warning" title="Edit"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?= base_url() ?>surat/hapus_surat_masuk/<?= $data['id_surat'] ?>"
                                            class="btn btn-danger tombol-hapus" title="Hapus"><i
                                                class="fa fa-trash-o"></i></a>
                                    </center>
                                    <?php } else { ?>
                                    <center>
                                        <a href="<?= base_url() ?>assets/upload/surat_masuk/<?= $data['file'] ?>"
                                            target="_blank" class="btn btn-primary" title="Print"><i
                                                class="fa fa fa-print"></i></a>

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