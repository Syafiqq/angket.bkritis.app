<?php
/**
 * This <angket.bkritis.app> project created by :
 * Name         : syafiq
 * Date / Time  : 09 May 2017, 8:18 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Berpikir Kritis</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/baked/agency/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/baked/agency/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url('/assets/baked/agency/css/agency.min.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="color: blue">Berpikir Kritis</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Pengantar</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Profil Pengembang</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Selamat Datang di</div>
            <div class="intro-heading">Aplikasi Inventori Berpikir Kritis Siswa</div>
            <a href="<?php echo site_url('auth/login')?>" class="page-scroll btn btn-xl"> Login</a>
            <a href="<?php echo site_url('auth/register')?>" class="page-scroll btn btn-xl"> Daftar</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pengantar</h2>
                <h3 class="section-subheading text-muted">Pengantar singkat tentang berpikir kritis</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Pengertian</h4>
                <p class="text-muted">Sternberg menyatakan bahwa berpikir kritis merupakan proses mental, strategi, dan representasi seseorang untuk menyelesaikan masalah, membuat keputusan, dan belajar konsep baru (Hidayah, 2015). Edgen dan Kauchak (2012:120) “Berpikir kritis adalah kemampuan dan kecenderungan untuk membuat dan melakukan asesmen terhadap kesimpulan yang didasarkan pada bukti”. Sedangkan menurut Fisher, (dalam Mia: 2016) definisi dari berpikir kritis adalah “Interpretasi dan evaluasi yang terampil dan aktif terhadap observasi dan komunikasi, informasi dan argumentasi”.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Proses Berpikir Kritis</h4>
                <p class="text-muted">Facion (Filsaime, 2008; dalam Karim, 2015) mengungkapkan enam kecakapan berpikir kritis utama yang terlibat di dalam proses berpikir kritis, yaitu: (1) Interpretasi; (2) Analisis; (3) Evaluasi;(4) Inferensi.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Tingkatan Berpikir Kritis</h4>
                <p class="text-muted"> Elder & Paul (dalam Fatmawati dkk, 2014) menyebutkan ada enam tingkatan berpikir kritis yaitu 1) Berpikir yang tidak direfleksikan (unreflective thinking); 2) Berpikir yang menantang (challenged thinking); 3) Berpikir permulaan (beginning thinking); 4) Berpikir latihan (practicing thinking); 5) Berpikir lanjut (advanced thinking); 6) Berpikir yang unggul (accomplished thinking).</p>
            </div>


        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Profil Pengembang</h2>
                <h3 class="section-subheading text-muted">Dosen Pembimbing, Asisten, Fire Team dan Programmer</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/p.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Prof. Dr. Hj. Nur Hidayah, M.Pd</h4>
                                <h5 class="subheading">Dosen Pembimbing</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Gresik, 17 Agustus 1959 dan Bertempat tinggal di Perum Permata Hijau D/57. Memiliki Hobby Membaca dan Motto “ Be Your Self”. Telah selesai menempuh Pendidikan S-1, S-2, S-3 jurusan Bimbingan dan Konseling</p>
                                Email : nurhidayahum@yahoo.com, nur.hidayah.fip.um.ac.id
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/fa.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Feny Andriyanti</h4>
                                <h5 class="subheading">Asisten Dosen</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Sidoarjo, 17 Juni 1995 dan beralamat di Ds. Janti, Kec. Tarik,Kab.Sidoarjo. Memiliki Hobby Browsing dan Motto Inginkan yang Terbaik dan Lakukan yang Terbaik</p>
                                Email :Feny.andriyanti95@gmail.com
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/l.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Maghfirotul Amalia</h4>
                                <h5 class="subheading">Asisten Dosen</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Malang, 06 April 1995 dan beralamat Jl Raya Pang. Sudirman No.74 Bululawang-Malang. Memiliki Hobi berwisata kuliner dan Motto Selalu Berpikir Besar dan Bertindak Mulai Sekarang </p>
                                Email : amalia_maghfirotul@yahoo.com
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/f.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Febri Safril Arifin</h4>
                                <h5 class="subheading">Fire Team (Tim Pengembang)</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Malang, 01 Februari 1997 dan beralamat di Jalan Adi Mulyo 01/01 Kec. Kepanjen, Kabupaten Malang. Memiliki hobi Berenang dan Motto ”Solidaritas itu Mahal”.</p>
                                Email: febri.safril@gmail.com, HP: 081230044542
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/n.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Ning Fuadah Karimah Elnur</h4>
                                <h5 class="subheading">Fire Team (Tim Pengembang)</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Situbondo, 06 Juli 1996 dan beralamat di Perum Griya Panji Mulya A. 34, Curah Jeru, Kec. Panji, Kab. Situbondo. Memiliki hobi Membaca dan browsing. Motonya adalah ”Belajar tak pandang usia dan belajar tak hanya di bangku sekolah” </p>
                                Email : karimah.elnur6796@gmail.com, HP: 082234964358
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/q.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Noor Qituf Alfarqi </h4>
                                <h5 class="subheading">Fire Team (Tim Pengembang)</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Temanggung, 18 Agustus 1996 dan beralamat di Kec. Margorejo Kab. Temanggung. Memiliki hobi Bermain musik dan memiliki motto “Belajar dan mengajar dengan hati-hati”</p>
                                Email : alfarqi@gmail.com, HP: 082323688658
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/r.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Ratih Arum Pangestuningtyas</h4>
                                <h5 class="subheading">Fire Team (Tim Pengembang)</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lahir di Sidoarjo, 25 Mei 1997 dan beralamat di Jalan Mawar 02/01 Desa Wonomlati, Kec. Krembung, Kab. Sidoarjo. Memiliki hobi Traveling and Culinary. Motonya adalah “Tiada perjuangan yang sia-sia” </p>
                                Email : karimah.elnur6796@gmail.com, HP: 082234964358
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/s.png') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Muhammad Syafiq, S.kom</h4>
                                <h5 class="subheading">Programmer</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">"Lahir di Pasuruan, 16 Desember 1993 dan beralamat di Jl. Apel I No. 449 Bangil, Pasuruan. Memiliki Motto Hidup Bermakna seperti Larry. Telah menyelesaikan Pendidikan S-1 Teknik Informatika Universitas Brawijaya”</p>
                                Email : id.muhammad.syafiq@gmail.com
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php echo base_url('/assets/baked/agency/img/about/h.jpg') ?>" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Husni Hanafi,S.Pd</h4>
                                <h5 class="subheading">Programmer</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">"LaLahir di Pasuruan, 19 Juni 1994 dan beralamat di Jl. Suro No. 40 Bangil, Pasuruan. Memiliki Motto Semua mudah di jalan yang tepat. Telah menyelesaikan Pendidikan S-1 Bimbingan dan Konseling Universitas Negeri Malang ambil itu ssebagai alasan ttidak aoa" </p>
                                Email : Hannafihusni.19@gmail.com
                            </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Inventory
                                <br>
                                Berpikir
                                <br>
                                Kritis
                                <br>

                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->

<!-- Contact Section -->


<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/roundicons-free.png') ?>" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>
                                You can download 60 of them for free, courtesy of
                                <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>
                                , or you can purchase the 1500 icon set
                                <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>
                                .
                            </p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/startup-framework-preview.png') ?>" alt="">
                            <p>
                                <a href="http://designmodo.com/startup/?u=787">Startup Framework</a>
                                is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.
                            </p>
                            <p>You can preview Startup Framework
                                <a href="http://designmodo.com/startup/?u=787">here</a>
                               .
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/treehouse-preview.png') ?>" alt="">
                            <p>Treehouse is a free PSD web template built by
                                <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>
                               . This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.
                            </p>
                            <p>You can download the PSD template in this portfolio sample item at
                                <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>
                               .
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/golden-preview.png') ?>" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by
                                <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>
                               . Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.
                            </p>
                            <p>You can download the PSD template in this portfolio sample item at
                                <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>
                               .
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/escape-preview.png') ?>" alt="">
                            <p>Escape is a free PSD web template built by
                                <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>
                               . Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.
                            </p>
                            <p>You can download the PSD template in this portfolio sample item at
                                <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>
                               .
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?php echo base_url('/assets/baked/agency/img/portfolio/dreams-preview.png') ?>" alt="">
                            <p>Dreams is a free PSD web template built by
                                <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>
                               . Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.
                            </p>
                            <p>You can download the PSD template in this portfolio sample item at
                                <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>
                               .
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('/assets/baked/agency/vendor/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('/assets/baked/agency/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url('/assets/baked/agency/js/jqBootstrapValidation.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/baked/agency/js/contact_me.min.js') ?>"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url('/assets/baked/agency/js/agency.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js')?>"></script>

</body>

</html>


