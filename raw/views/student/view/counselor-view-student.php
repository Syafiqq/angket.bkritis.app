<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 06 May 2017, 8:12 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');

if (!isset($students))
{
    $students = [];
}
if (!isset($now))
{
    $now = Carbon::now('Asia/Jakarta');
}
if (!isset($window))
{
    $window = 7;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Siswa</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.min.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables-autofill-bootstrap/css/autoFill.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/student/view/counselor-view-student.min.css') ?>" rel="stylesheet">

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
                <div class="panel panel-default">
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        <div class="col-sm-2 col-sm-offset-10">
                            <a class="btn btn-default" href="<?php echo site_url('student/report') ?>" role="button">Cetak</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="student_tb" class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width: 40px">No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th style="width: 150px">Kelas</th>
                                <th style="width: 150px">Sekolah</th>
                                <th style="width: 150px">Jenis Kelamin</th>
                                <th style="width: 150px">Pengisian</th>
                                <th style="width: 150px">Izinkan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $activeURL = site_url('student/do_activate');
                            foreach ($students as $no => $student)
                            {
                                ++$no;
                                $student['gender'] = $student['gender'] === 'male' ? 'Laki Laki' : 'Perempuan';
                                $student['grade'] = $student['grade'] === null ? '-' : $student['grade'];
                                $student['school'] = $student['school'] === null ? '-' : $student['school'];
                                $student['last_answer'] = $student['last_answer'] === null ? null : $student['last_answer'];
                                $activation = $student['last_answer'] === null ? '<p>Sudah Memiliki Izin</p>' : "<button data-student-id=\"{$student['id']}\" data-student-action=\"{$activeURL}\" class=\"btn btn-default do-active\" type=\"submit\">Aktifkan</button>";
                                if ($student['last_answer'] !== null)
                                {
                                    $student['last_answer'] = Carbon::createFromFormat('Y-m-d H:i:s', $student['last_answer']);
                                    if ((int)$student['is_active'] === 1)
                                    {
                                        $student['last_answer'] = "<span class=\"label label-success\">{$student['last_answer']->formatLocalized('%d %B %Y %H:%M')}</span>";
                                    }
                                    else
                                    {
                                        if ($student['last_answer']->diffInDays($now) <= $window)
                                        {
                                            $student['last_answer'] = "<span class=\"label label-warning\">{$student['last_answer']->formatLocalized('%d %B %Y %H:%M')}</span>";
                                        }
                                        else
                                        {
                                            $student['last_answer'] = "<span class=\"label label-success\">{$student['last_answer']->formatLocalized('%d %B %Y %H:%M')}</span>";
                                        }
                                    }
                                }
                                else
                                {
                                    $student['last_answer'] = '<p>Belum Pernah</p>';
                                }

                                echo '<tr>';
                                echo "<td>{$no}</td>";
                                echo "<td>{$student['credential']}</td>";
                                echo "<td>{$student['name']}</td>";
                                echo "<td>{$student['grade']}</td>";
                                echo "<td>{$student['school']}</td>";
                                echo "<td>{$student['gender']}</td>";
                                echo "<td>{$student['last_answer']}</td>";
                                echo "<td>{$activation}</td>";
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-autofill/js/dataTables.autoFill.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables-autofill-bootstrap/js/autoFill.bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-buttons/js/dataTables.buttons.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/student/view/counselor-view-student.min.js') ?>"></script>

</body>
</html>

