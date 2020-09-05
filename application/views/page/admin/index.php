<div class="flash-success" data-flashsuccess="<?= $this->session->flashdata('success') ?>"></div>
<!-- Info Box -->
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Dashboard</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row top_tiles">
        <a href="index.php?page=surat_masuk">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-envelope-o"></i></div>
                    <div class="count"><?= $surat_masuk ?></div>
                    <h3>Surat Masuk</h3>
                </div>
            </div>
        </a>
        <a href="index.php?page=surat_keluar">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-envelope-o"></i></div>
                    <div class="count"><?= $surat_keluar ?></div>
                    <h3>Surat Keluar</h3>
                </div>
            </div>
        </a>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                <div class="count"><?= $disposisi ?></div>
                <h3>Disposisi</h3>
            </div>
        </div>

        <a href="index.php?page=users">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="count"><?= $jml_users ?></div>
                    <h3>Users account</h3>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Welcome <?= ucfirst($_SESSION["identity"]); ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"> <i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"> <i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-8 col-lg-8 col-sm-7">
                        <!-- blockquote -->
                        <blockquote>
                            <span class="info-box-number">SELAMAT DATANG DI SISTEM INFORMASI ARSIP PERSURATAN (SIAP
                                BALI).</span>
                            <p>Silahkan pilih menu Navigator untuk mempermudah anda dalam bekerja.</p>
                            <footer>Have a nice day ;)</footer>
                        </blockquote>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Grafik Data <small>Persentase</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="chart" id="chart" style="height: 100%; width: 100%"></div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Log activity <small>Lates Update</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content bs-example-popovers">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <?php if (!empty($log_surat_masuk)) { ?>
                    No Agenda <strong><u><?= $log_surat_masuk[0]['no_agenda'] ?></u></strong> Telah di tambahkan ke
                    Surat Masuk.
                    <?php } else { ?>
                    <em>Belum Ada Aktifitas Terbaru</em>
                    <?php } ?>
                </div>
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <?php if (!empty($log_surat_keluar)) { ?>
                    No Agenda <strong><u><?= $log_surat_keluar[0]['no_agenda'] ?></u></strong> Telah ditambahkan ke
                    Surat Keluar.
                    <?php } else { ?>
                    <em>Belum Ada Aktifitas Terbaru</em>
                    <?php } ?>
                </div>

                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <?php if (!empty($log_disposisi)) { ?>
                    No Agenda <strong><u><?= $log_disposisi[0]['no_agenda'] ?></u></strong> Telah Ditambahkan Ke
                    Tujuan Disposisi terbaru.
                    <?php } else { ?>
                    <em>Belum Ada Aktifitas Terbaru</em>
                    <?php } ?>
                </div>

                <div class="alert alert-danger  alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <?php if (!empty($log_users)) { ?>
                    User <strong><u><?= $log_users[0]['first_name'] ?></u></strong> Telah ditambahkan sebagai user /
                    pengguna.
                    <?php } else { ?>
                    <em>Belum Ada Aktifitas Terbaru</em>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>