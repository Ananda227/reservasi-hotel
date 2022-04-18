<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url() ?>/image/favicon.png" type="image/png">
    <title>Hotel Hebat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="<?= base_url() ?>/image/Logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.html">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Fasilitas</a></li>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <p style="color: #fff; font-size: 18px;">Halo<b style="color: #fff; font-size: 16px; font-weight: bold;"></b></p>
                    <h2><span>SELAMAT DATANG DI</span> <span style="color :gold">HOTEL HEBAT</span></h2>
                    <p>Kami menyediakan tempat yang baik, lokasi yang strategis, ruangan yang nyaman dan pelayanan prima<br> Sehingga pelanggan tidak merasa kapok setelah datang kesini</p>
                    <a href="#" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Book<br> Your Room</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Arrival Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Departure Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Adult">Adult</option>
                                                <option value="1">Old</option>
                                                <option value="2">Younger</option>
                                                <option value="3">Potato</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Child">Child</option>
                                                <option value="1">Child</option>
                                                <option value="2">Baby</option>
                                                <option value="3">Child</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Child">Number of Rooms</option>
                                                <option value="1">Room 01</option>
                                                <option value="2">Room 02</option>
                                                <option value="3">Room 03</option>
                                            </select>
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Kamar Hotel</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-9">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room1.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Pesan</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>IDR-3,5JT<small>/malam</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-9">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room2.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Pesan</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>IDR-3JT<small>/malam</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-9">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room3.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Pesan</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>IDR-6JT<small>/malam</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-9">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Pesan</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>IDR-3JT<small>/malam</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Fasilitas</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Tentang Kami</h2>
                        <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang dikolam renang dengan pemandangan matahri terbenam yang memukau. Kid's Club yang luas menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convetion Center kami, dilengkapi pelayanan lengkap dengan ruangan konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggara konvesi M.I.C.E ataupun mewujudkan acara pernikahan yang mewah</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>/js/popper.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url(); ?>/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="<?= base_url(); ?>/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>/js/stellar.js"></script>
    <script src="<?= base_url(); ?>/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?= base_url(); ?>/js/custom.js"></script>
</body>

</html>