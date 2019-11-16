<?php
session_start();
if(isset($_SESSION['username'])){
    require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
    </div>
    <div class=" row">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <?php
            $kegiatan = mysqli_query($link, "select * from kegiatan");
            $total_kgt = mysqli_num_rows($kegiatan);
            ?>
            <a data-toggle="tooltip" title="<?= $total_kgt;?> Kegiatan." class="well top-block" href="kegiatan.php">
                <i class="glyphicon glyphicon-calendar blue"></i>
                <div>Total Kegiatan</div>
                <div><?= $total_kgt; ?></div>
            </a>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
            <?php
            $staff = mysqli_query($link, "select * from staff");
            $total_staff = mysqli_num_rows($staff);
            ?>
            <a data-toggle="tooltip" title="<?= $total_staff; ?> Staff." class="well top-block" href="staff.php">
                <i class="glyphicon glyphicon-user green"></i>
                <div>Total Staff</div>
                <div><?= $total_staff; ?></div>
            </a>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
            <?php
            $kabar = mysqli_query($link, "select * from kabar_terkini");
            $total_kabar = mysqli_num_rows($kabar);
            ?>
            <a data-toggle="tooltip" title="<?= $total_kabar ?> Berita." class="well top-block" href="berita-terkini.php">
                <i class="glyphicon glyphicon-eye-open yellow"></i>
                <div>Total Berita</div>
                <div><?= $total_kabar ?></div>
            </a>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
            <?php
            $gallery = mysqli_query($link, "select * from gallery");
            $total_gallery = mysqli_num_rows($gallery);
            ?>
            <a data-toggle="tooltip" title="<?= $total_gallery ?> Gallery." class="well top-block" href="gallery.php">
                <i class="glyphicon glyphicon-camera red"></i>
                <div>Total Gallery</div>
                <div><?= $total_gallery ?></div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well">
                    <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>
                </div>
                <div class="box-content row">
                    <div class="col-lg-12 col-md-12">
                        <h1>SMK Guna Dharma Nusantara<br>
                            <small></small>
                            <br />
                        </h1>
                        <p>Sistem Informasi SMK Guna Dharma Nusantara yang berupa aplikasi website bertujuan untuk membantu mengenalkan kepada
                        masyarakat umum tentang sekolah, sehingga memudahkan bagia siapa saja yang ingin mendapatkan informasi mengenai SMK Guna Dharma Nusantara melalui media informasi
                        yang berbasis teknologi.</p>

                        <br />
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    require('footer.php');
}else{
    ?>
    <script language="JavaScript">
        alert('Anda harus login terlebih dahulu');
        parent.location.href='login.php';
    </script>
    <?php
}
?>
