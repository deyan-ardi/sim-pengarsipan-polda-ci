<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah surat masuk</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah Surat Masuk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form tambah surat masuk -->
                    <form class="form-horizontal form-label-left" action="<?= base_url() ?>surat/proses_tmb_surat_masuk"
                        method="post" enctype="multipart/form-data">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="no_surat" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" max="<?= date('Y-m-d') ?>" name="tanggal_surat"
                                    class="form-control has-feedback-left" id="tanggal_surat">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Naskah Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="jenis_naskah" class="form-control col-md-7 col-xs-12" required="required">
                                    <option value="">Pilih Jenis Naskah Surat</option>
                                    <?php foreach ($naskah as $data) : ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['kode_naskah'] ?> -
                                        <?= $data['jenis_naskah'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="jenis_surat" class="form-control col-md-7 col-xs-12" required="required">
                                    <option value="">Pilih Jenis Surat</option>
                                    <?php foreach ($surat as $data) : ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['kode_surat'] ?> -
                                        <?= $data['nama_jenis'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Klasifikasi Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="klasifikasi_surat" class="form-control col-md-7 col-xs-12"
                                    required="required">
                                    <option value="">Pilih Klasifikasi Surat</option>
                                    <?php foreach ($klasifikasi as $data) : ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['kode_klasifikasi'] ?> -
                                        <?= $data['nama_klasifikasi'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Arsip<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="kode_arsip" class="form-control col-md-7 col-xs-12" required="required">
                                    <option value="">Pilih Kode Arsip</option>
                                    <?php foreach ($arsip as $data) : ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['kode_arsip'] ?> -
                                        <?= $data['nama_arsip'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="asal_surat" class="form-control col-md-7 col-xs-12" required="required">
                                    <option value="">Pilih Satuan Kerja</option>
                                    <?php foreach ($satker as $data) : ?>
                                    <option value="<?= $data['id_satker'] ?>"><?= $data['kode_satker'] ?> -
                                        <?= $data['nama_satker'] ?></option>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Isi ringkas<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="isi_ringkas" class="form-control col-md-7 col-xs-12"
                                    required="required"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Lampiran<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="lampiran" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="keterangan" class="form-control col-md-7 col-xs-12"
                                    required="required"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">File<span class="required">&nbsp;
                                    :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
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
