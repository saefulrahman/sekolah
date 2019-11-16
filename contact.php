<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>SMK Guna Dharma Nusantara</title>
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

<body>
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
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Contact</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="breadcrumbs-label">Contact</li>
                        </ul>
                    </div>
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-3 page-row">
                            <h3 class="title"></h3>
                            <p>Jika ada pertanyaan atau informasi untuk kami silakan kirimkan lewat pesan dibawah ini. </p>
                            <form action="dashboard/lib/action-contact.php" method="post">
                                <div class="form-group name">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter your name" name="nama" required="">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter your email" name="email" required="">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="email">Phone<span class="required">*</span></label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number" name="phone" required="">
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..." name="pesan" required=""></textarea>
                                </div>
                                <input type="hidden" name="kontak" value="kontak">
                                <button type="submit" class="btn btn-theme">Send message</button>
                            </form>
                        </article>
                    </div><!--//page-row-->

                </div><!--//page-content-->
            </div><!--//page-wrapper-->
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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script>
    <script type="text/javascript" src="assets/js/map.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
