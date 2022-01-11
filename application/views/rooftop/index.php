<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rooftop | PT. Lutungan Indoutama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!-- <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon"> -->
    <link href="<?= base_url() ?>assets/img/lutindo.png" rel="icon">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf mt-0 footer-paralax bg-image sect-mt4 route" style="background-image: url(<?= base_url('assets/img/overlay-bg.jpg'); ?>)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a" style="color: white;">
                            Layanan
                        </h3>
                        <p class="subtitle-a" style="color: white;">
                            Telah membuat pesanan sebelumnya? <a href="http://localhost/lutindo/check">Cek disini</a>!
                        </p>
                        <p class="subtitle-a" style="color: white;">
                            Memilih tipe pemasangan tower.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-ios-home"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Rooftop</h2>
                            <p class="s-description text-center">
                                Rooftop Towers adalah Pemasangan menara yang terletak di atap bangunan dan biasanya digunakan di <br>
                                daerah perkotaan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-3">
                    <a href="<?= base_url('greenfield'); ?>">
                        <div class="service-box" style="background-color:darkgray;">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-android-wifi"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Greenfield</h2>
                                <!-- <p class="s-description text-center">
                                    Greenfield Towers adalah Pemasangan menara tunggal yang memerlukan lebih banyak ruang dan biasanya terletak di daerah pedesaan.
                                </p> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                    Form Pemesanan
                                </h5>
                            </div>
                            <div>
                                <form action="<?= base_url('lutindo/pesanan/rooftop'); ?>" method="post" role="form" class="contactForm">
                                    <div id="sendmessage">Pesananmu telah dikirim, silahkan tunggu!</div>
                                    <div id="errormessage"></div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="customer" class="form-control" id="customer" placeholder="Provider" data-rule="minlen:2" data-msg="Masukkan 2 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="region" class="form-control" id="region" placeholder="Region" data-rule="minlen:4" data-msg="Masukkan 4 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="site_id" id="site_id" placeholder="Site ID" data-rule="minlen:4" data-msg="Masukkan 4 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="site_name" id="site_name" placeholder="Site Name" data-rule="minlen:4" data-msg="Masukkan 4 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat Pembangunan" data-rule="minlen:8" data-msg="Masukkan 8 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="project" class="form-control" id="project" placeholder="Contractor" data-rule="minlen:4" data-msg="Masukkan 4 karakter atau lebih" value="Mini CME New Pole Outdoor" readonly />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="contractor" class="form-control" id="contractor" placeholder="Contractor" data-rule="minlen:4" data-msg="Masukkan 4 karakter atau lebih" value="PT. Lutungan Indoutama" readonly />
                                                <div class="validation"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="type_tower" class="form-control" id="type_tower" placeholder="Rooftop" readonly value="Rooftop" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Tolong isi dengan email yang valid" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="no_phone" class="form-control" id="no_phone" placeholder="No. Telp" data-rule="minlen:8" data-msg="Masukkan 8 karakter atau lebih" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="button button-a button-big button-rouded">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>Team Lutindo</strong>. All Rights Reserved</p>
                            <div class="credits">
                                Designed by <a href="#">Team Lutindo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Section Contact-footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url() ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/counterup/jquery.counterup.js"></script>
    <script src="<?= base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url() ?>assets/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>