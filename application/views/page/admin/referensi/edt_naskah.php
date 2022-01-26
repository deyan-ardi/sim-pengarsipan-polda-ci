<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Jenis Naskah</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Edit
                        Jenis Naskah</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form Edit surat masuk -->
                    <form class="form-horizontal form-label-left"
                        action="<?= base_url() ?>referensi/proses_edit_jenis_naskah" method="post">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Naskah<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="jenis_naskah" value="<?= $jenis_naskah[0]['jenis_naskah'] ?>"
                                    class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <input type="hidden" name="id_naskah" value="<?= $jenis_naskah[0]['kode_naskah'] ?>">
                        <input type="hidden" name="id" value="<?= $jenis_naskah[0]['id'] ?>">
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
