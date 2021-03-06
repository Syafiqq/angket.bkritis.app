<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 02 May 2017, 12:04 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.min.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/dashboard/view/counselor-view-dashboard.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>
<body>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a class="_nav-a-link" href="<?php echo site_url('dashboard/jump?tab=dashboard') ?>">B-Kritis
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Profile
                        <span class="caret"></span>
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('profile/jump?tab=profile') ?>">Lihat</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('profile/jump?tab=profile%2Fedit') ?>">Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Inventory
                        <span class="caret"></span>
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('inventory/jump?tab=inventory') ?>">Lihat</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('inventory/jump?tab=inventory%2Fadd') ?>">Tambah Inventory</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Data Siswa
                        <span class="caret"></span>
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('student/jump?tab=student') ?>">Aktifkan Siswa</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('student/jump?tab=student%2Freport') ?>">Nilai Siswa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a id="logout" href="<?php echo site_url('auth/do_logout') ?>">Logout
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Selamat Datang</h1>
                <h3>
                    Selamat datang di Inventori
                    <b>Berpikir Kritis</b>
                </h3>
                <ul>
                    <li style="padding: 2px">Klik
                        <a class="btn btn-default _nav-a-link" href="<?php echo site_url('inventory/jump?tab=inventory') ?>">
                            <b>Inventory</b>
                        </a>
                                             &nbsp;untuk memulai memodifikasi angket
                    </li>
                    <li style="padding: 2px">Klik
                        <a class="btn btn-default _nav-a-link" href="<?php echo site_url('student/jump?tab=student') ?>">
                            <b>Siswa</b>
                        </a>
                                             &nbsp;untuk melihat daftar siswa
                    </li>
                    <li style="padding: 2px">Klik
                        <a class="btn btn-default _nav-a-link" href="<?php echo site_url('student/jump?tab=student%2Freport') ?>">
                            <b>Laporan</b>
                        </a>
                                             &nbsp;untuk melihat laporan siswa
                    </li>
                    <li style="padding: 2px">Klik
                        <button id="coupon_generator" class="btn btn-default" data-coupon-action="<?php echo site_url('dashboard/do_generate_coupon') ?>" type="button">
                            <b>Generate Kode Registrasi</b>
                        </button>
                                             &nbsp;untuk men-generate kode registrasi pendaftaran
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<audio src="<?php echo base_url('/assets/audio/mp3/black_heaven.mp3') ?>" preload="auto" autoplay loop/>


<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/dashboard/view/counselor-view-dashboard.min.js') ?>"></script>

</body>
</html>
