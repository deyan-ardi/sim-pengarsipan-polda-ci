<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> SIAP BALI | <?= $title ?></title>
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url() ?>assets/template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
<<<<<<< HEAD
    <link href="<?= base_url() ?>assets./template/vendors/animate.css/animate.min.css" rel="stylesheet">
=======
    <link href="<?= base_url() ?>assets/template/vendors/animate.css/animate.min.css" rel="stylesheet">
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937

    <!-- Custom Theme Style -->
    <link href="<?= base_url() ?>assets/template/build/css/custom.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url() ?>assets/template/vendors/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/template/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <!-- Data tables -->
    <link href="<?= base_url() ?>assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
        rel="stylesheet">
    <!-- Sweetalert -->
<<<<<<< HEAD
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sweetalert2.css">
=======
    <link href="<?= base_url() ?>assets/css/sweetalert2.css" rel="stylesheet">
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
</head>
<?php if ($active == "0") { ?>

<body class="login">
    <?php } else { ?>

    <body class="nav-md">
        <?php } ?>

        <?php if ($active != "0") { ?>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= base_url() ?>" class="site_title"><i class="fa fa-home"></i> SIAP BALI </a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?= base_url() ?>assets/upload/users/<?= $users[0]['gambar'] ?>" alt="..."
                                    class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?= ucfirst($_SESSION["identity"]); ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <?php if ($active == "1") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Dashboard </a>
                                    </li>
                                    <?php if ($active == "2") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a><i class="fa fa-edit"></i> Transaksi Surat<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url() ?>surat/surat_masuk">Surat Masuk</a></li>
                                            <li><a href="<?= base_url() ?>surat/surat_keluar">Surat Keluar</a></li>
                                            <li><a href="<?= base_url() ?>surat/disposisi">Disposisi</a></li>
                                        </ul>
                                    </li>
                                    <?php if ($active == "3") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a><i class="fa fa-print"></i> Buku Agenda <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url() ?>agenda/surat_masuk">Surat Masuk</a></li>
                                            <li><a href="<?= base_url() ?>agenda/surat_keluar">Surat Keluar</a></li>
                                        </ul>
                                    </li>
                                    <?php if ($active == "8") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a><i class="fa fa-external-link"></i> Referensi<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url() ?>referensi/pegawai">Data Pegawai</a></li>
                                            <li><a href="<?= base_url() ?>referensi/satker">Data Satker</a></li>
                                            <li><a href="<?= base_url() ?>referensi/jenis_surat">Jenis Surat</a></li>
                                            <li><a href="<?= base_url() ?>referensi/jenis_naskah">Jenis Naskah Surat</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>referensi/klasifikasi">Klasifikasi Surat</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>referensi/arsip_surat">Kode Arsip Surat</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <?php if ($group[0]['group_id'] == "1") { ?>
                            <div class="menu_section">
                                <h3>Setting</h3>
                                <!-- Jika admin baru bisa liat -->
                                <ul class="nav side-menu">
                                    <?php if ($active == "4") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a href="<?= base_url() ?>users"><i class="fa fa-user"></i> Users </a>
                                    </li>
                                    <?php if ($active == "5") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a><i class="fa fa-files-o"></i> Data <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url() ?>data/backup">Backup</a></li>
                                            <li><a href="<?= base_url() ?>data/restore">Restore</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
                            <div class="menu_section">
                                <h3>Application</h3>
                                <ul class="nav side-menu">
                                    <?php if ($active == "6") { ?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                        <?php } ?>
                                        <a href="<?= base_url() ?>about"><i class="fa fa-info"></i> About </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="" href="<?= base_url() ?>auth/logout"
                                data-original-title="Logout">
                                <span class="glyphicon glyphicon-off"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a class="user-profile dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="<?= base_url() ?>assets/upload/users/<?= $users[0]['gambar'] ?>"
                                            alt=""><?= ucfirst($_SESSION["identity"]); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?= base_url() ?>users/profile"> Profile</a></li>
                                        <li><a href="<?= base_url() ?>users/ganti_password"> Ganti Password</a></li>
<<<<<<< HEAD
                                        <li><a href="<?= base_url() ?>auth/logout"><i
=======
                                        <li><a href="<?= base_url() ?>auth/logout" class="log-out"><i
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
                                                    class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- page content -->
                <div class="right_col" role="main">
                    <?php } ?>