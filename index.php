<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logoHutang.png">
    <title>HutangMU</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            background: url(img/bank2.png);
            background-attachment: fixed;
            /* background-size: cover; */
            background-repeat: no-repeat;
        }   

        .parallax2 {
            background: url(img/paket2.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <img src="img/logo.png" width="20px" style="margin-right: 10px; margin-bottom: 2px;">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">HutangMu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/login.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <header id="home" class="text-light parallax">
        <div class="container konten">
            <h1 style="font-size: 36pt;">Selamat Datang di HutangMU</h1>
            <p class="lead" style="font-size: 16pt;">HutangMU kini hadir membantu pencatatan hutang yang lebih
            efektif dan mudah untuk diproses</p>
            <a href="registrasi.php" class="btn btn-outline-light button">Registrasi</a>
        </div>
    </header>
    <!-- header -->

    <!-- features -->
    <section id="features" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FITUR</div>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">HutangMU</h4>
                <p class="isi-fitur text-center">HutangMU adalah sebuah layanan website yang memberikan kemudahan
                    dalam mendukung pencatatan hutang piutang pada pelanggan dengan fitur-fitur yang selalu diupdate</p>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/transaksi2.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Catatan Harian</h4>
                    <p class="isi-fitur">
                        Kami memberikan fitur Catatan harian yang akan menampilkan data
                        hasil pencatatan harian yang bisa mempermudah pengguna dalam mengelola hutang piutang. dan data keuangan pengguna akan
                        tersimpan dengan aman di dalam aplikasi ini.</p>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs text-right">
                    <h4 class="headline">Rekening Pengguna</h4>
                    <p class="isi-fitur">Kami menyediakan fitur rekening pengguna yang dapat mempermudah pengguna dalam
                        melakukan pengelolaan keuangan di kas dan juga di rekening. Dengan fitur ini,
                        pengelolaan
                        uang pengguna di rekening menjadi lebih mudah dan terkelola dengan baik.</p>
                </div>
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/rekening2.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/monitor2.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Monitoring Keuangan</h4>
                    <p class="isi-fitur">Monitoring keuangan tentunya sangat diperlukan untuk mengelola hutang dan
                        piutang pelanggan. kami menyediakan dashboard yang berisi beberapa fitur, seperti saldo, total
                        uang yang masuk dan keluar, dan rekening.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- features -->

    <!-- about us -->
    <section id="about" class="bg-primary parallax2">
        <div class="container">
            <div style="color: white;" class="garis garis3 text-center">TESTIMONIAL</div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <a href="https://maps.app.goo.gl/rsU1kCaE98JX9tedA" target="_blank">
                                    <img class="img" src="profile/warung.png" width="100%">
                                </a>
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Mie Ayam Ibu Sarmi</h3>
                            <p>Penggunaan Fitur Sangat Mudah</p>
                            <p>Sangat Membantu Warung Saya</p>
                            <p> &#11088; &#11088; &#11088; &#11088; &#11088;</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <a href="https://maps.app.goo.gl/TmwMCH1Cwwqz7GMF7" target="_blank">
                                <img class="img" src="profile/toidi.png" width="100%">
                            </a>
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Toidiholic Store</h3>
                            <p>Fiturnya Si Boleh-Boleh Ya !!</p>
                            <p>Keren Dah</p>
                            <p> &#11088; &#11088; &#11088; &#11088; &#11088;</p>
                        </div>
                    </div>
                </div>
               <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <a href="https://maps.app.goo.gl/Tq6r5iSPFfuAXEZ27" target="_blank">
                                <img class="img" src="profile/wanowan.png" width="100%">
                            </a>
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Wanowan Store</h3>
                            <p>Lumayan Ngebantu Banget Ini Mah</p>
                            <p>Ditingkatkan Lagi Kalo Bisa</p>
                            <p> &#11088; &#11088; &#11088; &#11088; &#11088;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="garis garis2 text-center">KONTAK KAMI</div>
                    <div class="row text-center">
                        <div class="col col1">
                            <a href="https://www.facebook.com" target="_blank">
                                <!-- <img src="icons/facebook.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/facebook.png" width="70%">
                            </a>
                        </div>
                        <div class="col col2">
                            <a href="https://plus.google.com" target="_blank">
                                <!-- <img src="icons/google-plus.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/96/000000/google-plus-squared.png" width="70%">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="https://www.instagram.com/jihadanbs/" target="_blank">
                                <!-- <img src="icons/instagram.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/instagram-new.png" width="70%">
                            </a>
                        </div>
                        <div class="col col4">
                            <a href="https://www.linkedin.com/in/jihadan-beckhianosyuhada-68b977277" target="_blank">
                                <!-- <img src="icons/linkedin.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/linkedin.png" width="70%">
                            </a>
                        </div>
                        <div class="col col5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <!-- <img src="icons/pinterest.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/pinterest.png" width="70%">
                            </a>
                        </div>
                    </div>
                    <div class="row row3 text-center">
                        <div class="col-4 text-right">
                            <a href="https://twitter.com" target="_blank">
                                <!-- <img src="icons/twitter.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/twitter.png" width="38%">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://api.whatsapp.com/send/?phone=088215178312&text&type=phone_number&app_absent=0" target="_blank">
                                <!-- <img src="icons/whatsapp.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/whatsapp.png" width="38%">
                            </a>
                        </div>
                        <div class="col-4 text-left">
                            <a href="https://youtube.com/@jihadanbeckhiano3044?si=GoGAIwVxqoEObdqb" target="_blank">
                                <!-- <img src="icons/youtube.png" width="38%"> -->
                                <img src="https://img.icons8.com/color/480/000000/youtube-squared.png" width="38%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- Footer -->
    <div class="py-3 bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Utama</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="#home" class="js-scroll-trigger foot-link">Beranda</a> </li>
                        <li> <a href="#features" class="js-scroll-trigger foot-link">Fitur</a> </li>
                        <li> <a href="#about" class="js-scroll-trigger foot-link">Testimonial</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Lainnya</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="faq" class="foot-link">FAQ</a> </li>
                        <li> <a href="#" class="foot-link">Vidio Promosi</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>Tentang</b> </h5>
                    <p class="mb-0">Aplikasi HutangMU dilengkapi dengan fitur menarik yang dapat mempermudah pengguna mengelola Hutang-Piutangnya.</p>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>Ikuti Kami</b> </h5>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                            <a href="https://www.facebook.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-facebook-official warna-icon fa-lg mr-2"></i>
                            </a>
                            <a href="https://www.instagram.com/jihadanbs/" class="foot-link" target="_blank">
                                <i class="d-block fa fa-instagram warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://plus.google.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-google-plus-official warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.pinterest.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-pinterest-p warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.reddit.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-reddit warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://twitter.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-twitter warna-icon fa-lg ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2">Copyright © 2023 HutangMU. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- <footer class="bg-dark foot">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2018 Semicolon SQUAD</p>
        </div>
    </footer> -->

    <!-- js utama -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html>