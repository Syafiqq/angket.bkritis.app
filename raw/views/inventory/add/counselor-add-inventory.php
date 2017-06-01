<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 04 May 2017, 6:22 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

if (!isset($categories))
{
    $categories = [];
}

if (!isset($favourables))
{
    $favourables = [];
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tambah Inventory</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.min.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/inventory/add/counselor-add-inventory.min.css') ?>" rel="stylesheet">

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
                <li>
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
                <li class="dropdown active">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Inventory
                        <span class="caret"></span>
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li>
                            <a class="_nav-a-link" href="<?php echo site_url('inventory/jump?tab=inventory') ?>">Lihat</a>
                        </li>
                        <li class="divider"></li>
                        <li class="active">
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
        <form id="add" action="<?php echo site_url('inventory/do_add') ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-1">
                    <span class="label label-danger">Perhatian : </span>&nbsp;Sebelum anda menambahkan item pernyataan.
                    <strong>Pastikan</strong>&nbsp;bahwa item pernyataan yang akan anda tambahkan telah diuji validitas dan realibilitasnya sesuai dengan prosedur pengembangan inventori berpikir kritis akademik siswa SMP yang telah tertulis pada
                    <strong>
                        <i>Manual Book</i>
                    </strong>&nbsp;Aplikasi ini.
                </div>
            </div>
            <div class="form-group">
                <label for="question" class="col-sm-2 control-label">Pernyataan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control option-text-disable" id="question" placeholder="Pernyataan" name="question">
                </div>
            </div>
            <div class="form-group">
                <label for="category" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-10">
                    <select id="category" name="category" class="form-control">
                        <option class="option-select-disable" value="-1">Silahkan Pilih</option>
                        <?php
                        foreach ($categories as $category)
                        {
                            $category['description'] = ucfirst($category['description']);
                            echo "<option value=\"{$category['id']}\">{$category['description']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="favour" class="col-sm-2 control-label">Favourable</label>
                <div class="col-sm-10">
                    <select id="favour" name="favour" class="form-control">
                        <option class="option-select-disable" value="-1">Silahkan Pilih</option>
                        <?php
                        foreach ($favourables as $favourable)
                        {
                            $favourable['description'] = ucfirst($favourable['description']);
                            echo "<option value=\"{$favourable['id']}\">{$favourable['description']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="active" class="col-sm-2 control-label">Aktif</label>
                <div class="col-sm-10">
                    <select id="active" name="active" class="form-control">
                        <option class="option-select-disable" value="-1">Silahkan Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="background-color: white">
                <label for="caution" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input id="caution" type="checkbox" required class="option-checkbox-disable">
                            Dengan ini saya menyatakan bahwa pernyataan yang saya tambahkan telah teruji validitas dan realibilitiasnya sesuai dengan prosedur pengembangan inventori berpikir kritis akademik siswa SMP yang telah tertulis pada
                            <strong>
                                <i>Manual Book</i>
                            </strong>&nbsp;Aplikasi ini.
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Simpan</button>
                </div>
            </div>
        </form>
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
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-serialize-object/dist/jquery.serialize-object.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/inventory/add/counselor-add-inventory.min.js') ?>"></script>

</body>
</html>
