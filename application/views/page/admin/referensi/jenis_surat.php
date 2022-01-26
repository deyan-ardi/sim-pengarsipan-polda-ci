<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Daftar Jenis Surat</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Jenis Surat</h2>&nbsp; &nbsp;<a href="<?= base_url() ?>referensi/tmb_jenis_surat"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Jenis Naskah</a>
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
                                    <center>Kode Jenis Surat</center>
                                </th>
                                <th>
                                    <center>Nama Jenis Surat</center>
                                </th>
                                <?php if ($group[0]['group_id'] == "1") { ?>
                                <th>
                                    <center>Fitur</center>
                                </th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($jenis_surat as $data) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['kode_surat'] ?></td>
                                <td><?= $data['nama_jenis'] ?></td>
                                <?php if ($group[0]['group_id'] == "1") { ?>
                                <td>
                                    <center>
                                        <a href="<?= base_url() ?>referensi/edit_surat/<?= $data['id'] ?>"
                                            class="btn btn-warning" title="Edit"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?= base_url() ?>referensi/hapus_surat/<?= $data['id'] ?>"
                                            class="btn btn-danger tombol-hapus" title="Hapus"><i
                                                class="fa fa-trash-o"></i></a>
                                    </center>
                                </td>
                                <?php } ?>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
