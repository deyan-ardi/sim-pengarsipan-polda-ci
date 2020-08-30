<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit User</h3>
        </div>
    </div>
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
    <div class="clearfix"></div>
    <div id="infoMessage"><?php echo $message; ?></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Edit User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!--Form Ganti Password -->
                    <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto User<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Awal<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" class="form-control col-md-7 col-xs-12"
                                    required="required" value="<?= $first_name['value'] ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Akhir<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="last_name" class="form-control col-md-7 col-xs-12"
                                    required="required" value="<?= $last_name['value'] ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-7 col-xs-12"
                                    required="required">
                                    <?php if ($jenis_kelamin['value'] == "Laki-Laki") { ?>
                                    <option value="Laki-Laki" selected>Laki-Laki</option>
                                    <?php } else { ?>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <?php } ?>
                                    <?php if ($jenis_kelamin['value'] == "Perempuan") { ?>
                                    <option value="Perempuan" selected>Perempuan</option>
                                    <?php } else { ?>
                                    <option value="Perempuan">Perempuan</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon/WA<span
                                    class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" class="form-control col-md-7 col-xs-12"
                                    required="required" value="<?= $phone['value'] ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password (Jika ingin
                                mengganti)<span class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Re-Password (Jika ingin
                                mengganti)<span class="required">&nbsp; :</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="password_confirm" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <?php if ($this->ion_auth->is_admin()) : ?>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Level User<span
                                    class="required">&nbsp; :</span></label>
                            <?php foreach ($groups as $group) : ?>
                            <label class="checkbox control-label col-md-1 col-sm-2 col-xs-3">
                                <?php
                                        $gID = $group['id'];
                                        $checked = null;
                                        $item = null;
                                        foreach ($currentGroups as $grp) {
                                            if ($gID == $grp->id) {
                                                $checked = ' checked="checked"';
                                                break;
                                            }
                                        }
                                        ?>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"
                                        <?php echo $checked; ?>>
                                    <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                            </label>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>
                        <input type="hidden" name="old_file" value="<?= $user->gambar ?>">
                        <?php echo form_hidden('id', $user->id); ?>
                        <?php echo form_hidden($csrf); ?>
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