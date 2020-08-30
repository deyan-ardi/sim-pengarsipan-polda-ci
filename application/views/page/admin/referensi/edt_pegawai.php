<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Pegawai</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Edit
                        Pegawai</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form Edit surat masuk -->
                    <form class="form-horizontal form-label-left"
                        action="<?= base_url() ?>referensi/proses_edit_pegawai" method="post"
                        enctype="multipart/form-data">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Pegawai<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">NRP<span class="required">&nbsp;
                                    :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="nrp" value="<?= $pegawai[0]['nrp'] ?>"
                                    class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="nama_pegawai" value="<?= $pegawai[0]['nama'] ?>"
                                    class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="pangkat" value="<?= $pegawai[0]['pangkat'] ?>"
                                    class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="jabatan" value="<?= $pegawai[0]['jabatan'] ?>"
                                    class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan Kerja<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="satuan_kerja" id="satker" class="form-control col-md-7 col-xs-12"
                                    required="required">
                                    <option value="">Pilih Satuan Kerja</option>
                                    <?php foreach ($satker as $data) : ?>
                                    <?php if ($pegawai[0]['id_satker'] == $data['id_satker']) { ?>
                                    <option value="<?= $data['id_satker'] ?>" selected><?= $data['kode_satker'] ?> -
                                        <?= $data['nama_satker'] ?></option>
                                    <?php } else { ?>
                                    <option value="<?= $data['id_satker'] ?>"><?= $data['kode_satker'] ?> -
                                        <?= $data['nama_satker'] ?></option>
                                    <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="file_old" value="<?= $pegawai[0]['gambar'] ?>">
                        <input type="hidden" name="id" value="<?= $pegawai[0]['id'] ?>">
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