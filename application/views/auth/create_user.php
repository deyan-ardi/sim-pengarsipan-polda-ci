<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah User</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <?php if ($this->session->flashdata('gagal')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <?php if ($message) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data <strong>Gagal</strong> <?= $message ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form Ganti Password -->
                    <form class="form-horizontal form-label-left" action="<?= base_url() ?>auth/create_user"
                        method="post" enctype="multipart/form-data">
                        <?php if ($identity_column !== 'email') { ?>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="identity" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <?php } ?>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto User<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">NRP<span class="required">&nbsp;
                                    :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="0" name="nrp" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama User<span
                                    class="required">&nbsp;
                                    :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-7 col-xs-12"
                                    required="required">
                                    <option value="">Pilih Jenis Kelamin...</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="pangkat" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="jabatan" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon/WA<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="phone" class="form-control col-md-7 col-xs-12"
                                    required="required">
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
                                    <option value="<?= $data['id_satker'] ?>"><?= $data['kode_satker'] ?> -
                                        <?= $data['nama_satker'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="password" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Konfirmasi Password<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="password_confirm" class="form-control col-md-7 col-xs-12"
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
