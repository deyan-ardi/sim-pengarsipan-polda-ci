<<<<<<< HEAD
=======
<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah Jenis Naskah</h3>
        </div>
    </div>
<<<<<<< HEAD
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
=======
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah
                        Jenis Naskah</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form tambah surat masuk -->
                    <form class="form-horizontal form-label-left"
                        action="<?= base_url() ?>referensi/proses_tmb_jenis_naskah" method="post">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Naskah<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="jenis_naskah" class="form-control col-md-7 col-xs-12"
                                    required="required">
                            </div>
                        </div>
                        <input type="hidden" id="id_naskah" name="id_naskah" value="<?= $id_naskah ?>">
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