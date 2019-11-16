<?php
require_once"dashboard/lib/connection.php";
$link = connect();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>SMK Guna Dharma  Nusantara</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="16x16.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** -->
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul><!--//social-icons-->
                </div>
            </div><!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="index.php"><img id="logo" src="assets/images/logo.png" alt="SMK Guna Dharma Nusantara"></a>
                </h1><!--//logo-->
                <div class="info col-md-8 col-sm-8">
                    <br />
                    <div class="contact pull-right">
                        <p class="phone"><i class="fa fa-phone"></i>(022) 79522201</p>
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">gunadharmanusantarasmk@yahoo.co.id </a></p>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->

        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="index.php">Home</a></li>
                        <li class="nav-item"><a href="profil.php">Profil</a></li>
                        <li class="nav-item"><a href="kepengurusan.php">Kepengurusan</a></li>
                        <li class="nav-item"><a href="list-news.php">Berita</a></li>
                        <li class="nav-item"><a href="gallery.php">Arsip Gallery</a></li>
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div>
        </nav><!--//main-nav-->

        <!-- ******CONTENT****** -->
        <div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <?php
                    $slide = mysqli_query($link, "SELECT * FROM slider");
                    while($data = mysqli_fetch_array($slide)){
                        ?>
                        <li>
                            <?php echo "<img class='thumb' src='dashboard/img/slider/$data[foto]' alt='' width='1140' height='530' />"?>
                            <p class="flex-caption">
                                <span class="main" ><?= $data[1] ?></span>
                                <br />
                                <span class="secondary clearfix" ><?= $data[2] ?></span>
                            </p>
                        </li>
                        <?php
                    }
                    ?>
                </ul><!--//slides-->
            </div><!--//flexslider-->
            <section class="promo box box-dark">
                <div class="col-md-12">
                    <h1 class="section-heading">SMK Guna Dharma Nusantara</h1>
                    <p>Dalam upaya menghasilkan insan indonesia yang cerdas dan kompetitif, SMK Guna Dharma Nusantara berupaya agar setiap individu memperoleh kesempatan mendapatkan pendidikan yang bermutu dengan utuh. Hal itu diwujudkan melalui Tiga Pilar utama yaitu : </br>
                    <ol>
                      <li>Pemerataan dan perluasan akses pendidikan.</li>
                      <li>Peningkatan mutu, relevansi, dan daya saing.</li>
                      <li>Penguatan tata kelola, akuntabilitas, dan pencitraan publik.</li>
                    </ol>
                    <br/>
                    Tiga pilar ini sesuai dengan program pendidikan nasional Indonesia. Bukti ini diharapkan dapat menjadi referensi bagi semua pihak terutama orang tua siswa yang akan melanjutkan putera-puterinya serta dunia usaha dan dunia industri dalam mendapatkan tenaga kerja yang sesuai dengan kebutuhanm, siap kerja, cerdas dan kompetitif dalam menghadapi persaingan global.
                  </p>
                </div>

            </section>
            <section class="news">
                <h1 class="section-heading text-highlight"><span class="line">Lastest News</span></h1>
                <div class="carousel-controls">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div><!--//carousel-controls-->
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
                            <?php
                            $query = mysqli_query($link, "select * from kabar_terkini order by id_kabar ASC limit 3");
                            while($data = mysqli_fetch_array($query)){
                                $direct = sha1(sha1($data[0]).sha1('Sq1-Inj3Ct10N'));
                                ?>
                                <div class="item active">
                                    <div class="col-md-4 news-item">
                                        <h5 class="title"><b><?= $data[1] ?></b></h5>
                                        <img class="thumb" src="dashboard/img/news/<?= $data[3] ?>" width="100" height="100"  alt="" />
                                        <p><?= substr($data[2],0,75)."..."; ?></p>
                                        <a class="read-more" href="news.php?page=<?= abs((int) $data[0]) ?>&lastest_news=<?= $direct ?>">Read more<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            <?php
                            }

                            $query2 = mysqli_query($link, "select * from kabar_terkini order by id_kabar DESC limit 3");
                            while($data = mysqli_fetch_array($query2)){
                                $direct = sha1(sha1($data[0]).sha1('Sq1-Inj3Ct10N'));
                                ?>
                                <div class="item">
                                    <div class="col-md-4 news-item">
                                        <h5 class="title"><b><?= $data[1] ?></b></h5>
                                        <img class="thumb" src="dashboard/img/news/<?= $data[3] ?>" width="100" height="100"  alt="" />
                                        <p><?= substr($data[2],0,75)."..."; ?></p>
                                        <a class="read-more" href="news.php?page=<?= abs((int) $data[0]) ?>&lastest_news=<?= $direct ?>">Read more<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div><!--//carousel-inner-->
                    </div><!--//news-carousel-->
                </div><!--//section-content-->
            </section><!--//news-->
            <div class="row cols-wrapper">
                <div class="col-md-3">
                    <section class="events">
                        <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                        <div class="section-content">
                            <?php
                            $other_event = mysqli_query($link, "select * from kegiatan order by id_kegiatan desc limit 5");
                            while($data = mysqli_fetch_array($other_event)){
                                ?>
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month"><?= substr($data[2],0,3); ?></span>
                                        <span class="date-number"><?= $data[1]; ?></span>
                                        <span class="btn btn-info btn-xs text-center" style="margin-top: 16%;"><?= $data[3]; ?></span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title"><?= $data[5]; ?></h2>
                                        <p class="time"><i class="fa fa-clock-o"></i><?= $data[4]; ?></p>
                                        <p class="location"><i class="fa fa-map-marker"></i><?= $data[6]; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <a class="read-more" href="all-events.php">All events<i class="fa fa-chevron-right"></i></a>
                        </div><!--//section-content-->
                    </section><!--//events-->
                </div><!--//col-md-3-->
                <div class="col-md-6">
                    <section class="video">
                        <h1 class="section-heading text-highlight"><span class="line">Gallery Tour</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#videos-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#videos-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content img-responsive">
                           <div id="videos-carousel" class="videos-carousel carousel slide">
                                <div class="carousel-inner">
                                    <?php
                                    $gallery = mysqli_query($link, "select * from gallery WHERE id_gallery = 69 limit 1");
                                    while($row = mysqli_fetch_array($gallery)){
                                        ?>
                                        <div class="item active">
                                            <a class="img-thumbnail thumb" ><img src="dashboard/img/gallery/<?= $row[2]; ?>" ></a>
                                        </div>
                                        <?php
                                    }

                                    $gallery2 = mysqli_query($link, "select * from gallery WHERE id_gallery = 56 limit 1");
                                    while($row = mysqli_fetch_array($gallery2)){
                                        ?>
                                        <div class="item ">
                                            <a class="img-thumbnail" ><img src="dashboard/img/gallery/<?= $row[2]; ?>" ></a>
                                        </div>
                                        <?php
                                    }

                                    $gallery3 = mysqli_query($link, "select * from gallery WHERE id_gallery = 66 limit 1");
                                    while($row = mysqli_fetch_array($gallery3)){
                                        ?>
                                        <div class="item ">
                                            <a class="img-thumbnail" ><img src="dashboard/img/gallery/<?= $row[2]; ?>" ></a>
                                        </div>
                                        <?php
                                    }

                                    $gallery4 = mysqli_query($link, "select * from gallery WHERE id_gallery = 63 limit 1");
                                    while($row = mysqli_fetch_array($gallery4)){
                                        ?>
                                        <div class="item ">
                                            <a class="img-thumbnail" ><img src="dashboard/img/gallery/<?= $row[2]; ?>" ></a>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                           </div>
                            <p class="description"></p>
                        </div><!--//section-content-->
                    </section><!--//video-->
                </div>
                <div class="col-md-3">
                    <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>Kami berupaya untuk turut andil dalam bidang........</p>
                                        </blockquote>
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Dra. Dadah Jubaedah, M.Si</span><br /><span class="title">Kepala Sekolah SD IT Fatur Rachman</span></p>
                                            <img class="profile col-md-4 pull-right" src="assets/images/testimonials/kepsek.png"  alt="" />
                                        </div>
                                    </div><!--//item-->
                                    <div class="item">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>
                                                Selamat datang untuk setiap.......</p>
                                        </blockquote>
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Drs. Achmad Mawardi H. Spd, SE</span><br /><span class="title"> Ketua Yayasan Aksara Buana</span></p>
                                            <img class="profile col-md-4 pull-right" src="assets/images/testimonials/ketua.jpg"  alt="" />
                                        </div>
                                    </div><!--//item-->

                                </div><!--//carousel-inner-->
                            </div>
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                    <section class="links">
                        <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                        <div class="section-content">
                            <p><a href="gallery.php"><i class="fa fa-caret-right"></i>Gallery</a></p>
                            <p><a href="contact.php"><i class="fa fa-caret-right"></i>Contact</a></p>
                        </div><!--//section-content-->
                    </section><!--//links-->

                </div><!--//col-md-3-->
            </div><!--//cols-wrapper-->
            <section class="awards">
                <div id="awards-carousel" class="awards-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="logos">
                                <?php
                                $list_award = mysqli_query($link, "select * from achievement limit 6");
                                while($data = mysqli_fetch_array($list_award)){
                                    ?>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <a href="#"><img class="img-responsive" src="dashboard/img/achievement/<?= $data[3] ?>" width="85" height="90"  alt="" /></a>
                                        <div class="control-label"><?= $data[1] ?></div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul><!--//slides-->
                        </div><!--//item-->

                        <div class="item">
                            <ul class="logos">
                                <?php
                                $list_award = mysqli_query($link, "select * from achievement where achievement_id > 6 limit 6 ");
                                while($data = mysqli_fetch_array($list_award)){
                                    ?>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <a href="#"><img class="img-responsive" src="dashboard/img/achievement/<?= $data[3] ?>" width="80" height="85"  alt="" /></a>
                                        <div class="control-label"><?= $data[1] ?></div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul><!--//slides-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                    <a class="left carousel-control" href="#awards-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#awards-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </section>
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3 col-sm-4 about">
                        <div class="footer-col-inner">
                            <h3>Info SMK</h3>
                            <ul>
                                <li><a href="/profil.php"><i class="fa fa-caret-right"></i>About us</a></li>
                                <li><a href="/contact.php"><i class="fa fa-caret-right"></i>Contact us</a></li>
                                <li><a href="/pendaftaran.php"><i class="fa fa-caret-right"></i>Pendaftaran</a></li>
                                <li><a href="/list-achievement.php"><i class="fa fa-caret-right"></i>Prestasi</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col col-md-4 col-sm-12 contact">
                        <div class="footer-col-inner">
                            <h3>Info Pelayanan</h3>
                            <div class="row">
                                <p class="tel col-md-7 col-sm-3"><i class="fa fa-phone"></i>(022) 79522201</p>
                                <p class="email col-md-7 col-sm-3"><i class="fa fa-envelope"></i><a href="#">gunadharmanusantarasmk@yahoo.co.id</a></p>
                            </div>

                        </div>
                    </div>
                    <div class="footer-col col-md-4 col-sm-12 contact">
                        <div class="footer-col-inner">
                            <h3>Contact us</h3>
                            <div class="row">
                                <p class="adr clearfix col-md-12 col-sm-4">
                                    <i class="fa fa-map-marker pull-left"></i>
                                    <span class="adr-group pull-left">
                                        <span class="street-address">SMK Guna Dharma Nusantara</span><br>
                                        <span class="region">Jl. Raya Bypass Km. 30 Cipeutag Cikopo Cicalengka</span><br>
                                        <span class="region">Kabupaten Bandung</span><br />
                                        <span class="region">Jawa Barat</span><br />
                                        <span class="postal-code">40395</span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2017 SMK Guna Dharma Nusantara</small>
                    <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fa fa-skype"></i></a></li>
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
