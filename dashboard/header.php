<?php
include 'config.php';
require_once "lib/connection.php";

$link = connect();

if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $query = ("select * from admin where username='$user'");
    $result = $link->query($query);
    while($row = mysqli_fetch_array($result)){
        $id_admin = $row[0];
        $nama = $row[1];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | SMK Guna Dharma Nusantara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Doe">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!--checker-->
    <link href='css/style.css' rel='stylesheet'>
    <script src="js/jquery-1.2.6.min.js"></script>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/32x32.png">

    <!-- Confirm -->
    <script type="text/javascript">
        function hapus(link){
            if(confirm('Apakah data ini akan di hapus?')){
                window.location.href = link;
            }
        }
    </script>
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Dashboard</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?= $nama ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="../index.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
            </ul>
        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
                        <li class="nav-header hidden-md">Next Setting</li>
                        <li><a class="ajax-link" href="banner.php"><i class="glyphicon glyphicon-flag"></i><span> Banner</span></a></li>
                        <li><a class="ajax-link" href="staff.php"><i class="glyphicon glyphicon-user"></i><span> Staff</span></a></li>
                        <li><a class="ajax-link" href="berita-terkini.php"><i class="glyphicon glyphicon-info-sign"></i><span> Berita Terkini</span></a></li>
                        <li><a class="ajax-link" href="kegiatan.php"><i class="glyphicon glyphicon-calendar"></i><span> Kegiatan</span></a></li>
                        <li><a class="ajax-link" href="gallery.php"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a></li>
                        <li><a class="ajax-link" href="achievement.php"><i class="glyphicon glyphicon-star"></i><span> Prestasi</span></a></li>
                        <li><a class="ajax-link" href="contact.php"><i class="glyphicon glyphicon-comment"></i><span> Kotak Pesan</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
