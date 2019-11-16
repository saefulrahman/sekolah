<?php
include "function.php";
require_once "connection.php";
$link = connect();

if(isset($_POST)){

    if(isset($_POST['admin'])){
        $admin = $_POST['admin'];
    }

    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
    }

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }

    if(isset($_POST['password'])){
        $password = (filter($_POST['password']));
        $password_hash = sha1($password);
    }

    if(isset($_POST['staff'])){
        $staff = $_POST['staff'];
    }

    if(isset($_POST['tempat'])){
        $tempat = $_POST['tempat'];
    }

    if(isset($_POST['tanggal'])){
        $tanggal = $_POST['tanggal'];
    }

    if(isset($_POST['alamat'])){
        $alamat = $_POST['alamat'];
    }

    if(isset($_POST['pendidikan'])){
        $pendidikan = $_POST['pendidikan'];
    }

    if(isset($_POST['status'])){
        $status = $_POST['status'];
    }

    if(isset($_POST['anak'])){
        $anak = $_POST['anak'];
    }

    if(isset($_POST['jabatan'])){
        $jabatan = $_POST['jabatan'];
    }

    if(isset($_POST['news'])){
        $news = $_POST['news'];
    }

    if(isset($_POST['judul'])){
        $judul = $_POST['judul'];
    }

    if(isset($_POST['deskripsi'])){
        $deskripsi = $_POST['deskripsi'];
    }

    if(isset($_POST['banner'])){
        $banner = $_POST['banner'];
    }

    if(isset($_POST['keterangan'])){
        $keterangan = $_POST['keterangan'];
    }

    if(isset($_POST['tgl'])){
        $tgl = $_POST['tgl'];
    }

    if(isset($_POST['bulan'])) {
        $bulan = $_POST['bulan'];
    }

    if(isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];
    }

    if(isset($_POST['jam'])){
        $jam = $_POST['jam'];
    }

    if(isset($_POST['jkegiatan'])) {
        $jkegiatan = $_POST['jkegiatan'];
    }

    if(isset($_POST['tempat'])){
        $tempat = $_POST['tempat'];
    }

    if (isset($_POST['keg'])) {
        $keg = $_POST['keg'];
    }

    if(isset($_POST['gallery'])){
        $gallery = $_POST['gallery'];
    }

    if(isset($_POST['achievement'])){
        $achievement = $_POST['achievement'];
    }

    if(isset($admin)){

        $int_user = strlen($username);

        if($int_user > 5){
            $add_admin = mysqli_query($link, "INSERT INTO admin value ('','$nama','$username','$password_hash')");

            if($add_admin){
                header("location:../admin.php");
            }else{
                ?>
                <script>
                    alert("Maaf, penambahan akun admin tidak berhasil");
                    window.location.href='../add-admin.php';
                </script>
            <?php
            }
        }else{
            ?>
            <script>
                alert("username harus lebih dari 5 karakter");
                window.location.href='../add-admin.php';
            </script>
        <?php
        }

    } else
        if(isset($staff)){

            $filename = $_FILES["images"]["name"];
            $filesize = $_FILES["images"]["size"];
            $fileError = $_FILES["images"]["error"];

            $check = mysqli_num_rows(mysqli_query($link, "SELECT * FROM WHERE nama='$nama' and tangal_lahir='$tanggal'"));
            if($check <= 0){
                $add_staff = mysqli_query($link, "INSERT INTO staff value ('','$nama','$tempat','$tanggal','$alamat','$pendidikan','$status','$anak','$jabatan','$filename')");
                if($add_staff){

                    $move=move_uploaded_file($_FILES["images"]["tmp_name"],"../img/staff/".$filename);
                    if($move){
                        header('location:../staff.php');
                    } else {
                        ?>
                        <script language="JavaScript">
                            alert('Penambahan data staff gagal. Silakan ulangi');
                            parent.location.href='../add-staff.php';
                        </script>
                        <?php
                    }

                }
            } else {
                ?>
                <script language="JavaScript">
                    alert('Data sudah tersedia !');
                    parent.location.href='../add-staff.php';
                </script>
                <?php
            }

        } else
            if(isset($news)){

                $date = date("Y-m-d");

                $filename = $_FILES["images"]["name"];
                $filesize = $_FILES["images"]["size"];
                $fileError = $_FILES["images"]["error"];

                $query_news = mysqli_query($link, "INSERT INTO kabar_terkini VALUE ('','$judul','$deskripsi','$filename','$date')");
                if($query_news){

                    $move = move_uploaded_file($_FILES["images"]["tmp_name"],"../img/news/".$filename);
                    if($move){
                        header('location:../berita-terkini.php');
                    } else {
                        ?>
                        <script language="JavaScript">
                            alert('Penambahan berita gagal. Silakan ulangi');
                            parent.location.href='../add-news.php';
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script language="JavaScript">
                        alert('Penambahan berita gagal insert');
                        parent.location.href='../add-news.php';
                    </script>
                <?php
                }
            } else
                if(isset($banner)){

                    $date = date("Y-m-d");

                    $filename = $_FILES["images"]["name"];
                    $filesize = $_FILES["images"]["size"];
                    $fileError = $_FILES["images"]["error"];

                    $check = mysqli_query($link, "select * from slider");
                    $sum = mysqli_num_rows($check);
                    if($sum <= 4){
                        $query_banner = mysqli_query($link, "INSERT INTO slider VALUE ('','$judul','$keterangan', '$filename','$date')");
                        if($query_banner){

                            $move=move_uploaded_file($_FILES["images"]["tmp_name"],"../img/slider/".$filename);
                            if($move){
                                header('location:../banner.php');
                            } else {
                                ?>
                                <script language="JavaScript">
                                    alert('Penambahan berita gagal. Silakan ulangi');
                                    parent.location.href='../add-banner.php';
                                </script>
                                <?php
                            }

                        }
                    } else {
                        ?>
                        <script language="JavaScript">
                            alert('Maksimal banner 5. Silakan edit atau hapus yang lama');
                            parent.location.href='../banner.php';
                        </script>
                        <?php
                    }

                } else
                    if (isset($keg)) {

                        $query_keg = mysqli_query($link, "INSERT INTO kegiatan value ('','$tgl','$bulan','$tahun','$jam','$jkegiatan','$tempat')");
                        if ($query_keg) {
                            header('location:../kegiatan.php');
                        } else {
                            ?>
                            <script language="JavaScript">
                                alert("Maaf, penambahan kegiatan tidak berhasil");
                                parent.location.href = '../add-kegiatan.php';
                            </script>
                        <?php
                        }

                    } else
                        if(isset($gallery)){

                            if(!empty($_FILES["images1"]["name"])) {
                                $filename = $_FILES["images1"]["name"];
                                $filesize = $_FILES["images1"]["size"];
                                $fileError = $_FILES["images1"]["error"];

                                $add_gallery = mysqli_query($link, "INSERT INTO gallery value ('','$jkegiatan','$filename')");
                                if ($add_gallery) {
                                    $move = move_uploaded_file($_FILES["images1"]["tmp_name"], "../img/gallery/" . $filename);
                                    if ($move) {
                                        header('location:../gallery.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-gallery.php';
                                        </script>
                                        <?php
                                    }

                                }
                            }else{
                                header('location:../gallery.php');
                            }
                            if(!empty($_FILES["images2"]["name"])) {
                                $filename = $_FILES["images2"]["name"];
                                $filesize = $_FILES["images2"]["size"];
                                $fileError = $_FILES["images2"]["error"];

                                $add_gallery = mysqli_query($link, "INSERT INTO gallery value ('','$jkegiatan','$filename')");
                                if ($add_gallery) {
                                    $move = move_uploaded_file($_FILES["images2"]["tmp_name"], "../img/gallery/" . $filename);
                                    if ($move) {
                                        header('location:../gallery.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-gallery.php';
                                        </script>
                                        <?php
                                    }

                                }
                            }else{
                                header('location:../gallery.php');
                            }

                            if(!empty($_FILES["images3"]["name"])) {
                                $filename = $_FILES["images3"]["name"];
                                $filesize = $_FILES["images3"]["size"];
                                $fileError = $_FILES["images3"]["error"];

                                $add_gallery = mysqli_query($link, "INSERT INTO gallery value ('','$jkegiatan','$filename')");
                                if ($add_gallery) {
                                    $move = move_uploaded_file($_FILES["images3"]["tmp_name"], "../img/gallery/" . $filename);
                                    if ($move) {
                                        header('location:../gallery.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-gallery.php';
                                        </script>
                                    <?php
                                    }

                                }
                            }else{
                                header('location:../gallery.php');
                            }

                            if(!empty($_FILES["images4"]["name"])) {
                                $filename = $_FILES["images4"]["name"];
                                $filesize = $_FILES["images4"]["size"];
                                $fileError = $_FILES["images4"]["error"];

                                $add_gallery = mysqli_query($link, "INSERT INTO gallery value ('','$jkegiatan','$filename')");
                                if ($add_gallery) {
                                    $move = move_uploaded_file($_FILES["images4"]["tmp_name"], "../img/gallery/" . $filename);
                                    if ($move) {
                                        header('location:../gallery.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-gallery.php';
                                        </script>
                                    <?php
                                    }

                                }
                            }else{
                                header('location:../gallery.php');
                            }

                            if(!empty($_FILES["images5"]["name"])) {
                                $filename = $_FILES["images5"]["name"];
                                $filesize = $_FILES["images5"]["size"];
                                $fileError = $_FILES["images5"]["error"];

                                $add_gallery = mysqli_query($link, "INSERT INTO gallery value ('','$jkegiatan','$filename')");
                                if ($add_gallery) {
                                    $move = move_uploaded_file($_FILES["images5"]["tmp_name"], "../img/gallery/" . $filename);
                                    if ($move) {
                                        header('location:../gallery.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-gallery.php';
                                        </script>
                                        <?php
                                    }
                                }
                            }else{
                                header('location:../gallery.php');
                            }
                        } else
                            if(isset($achievement)){

                                $filename = $_FILES["images"]["name"];
                                $filesize = $_FILES["images"]["size"];
                                $fileError = $_FILES["images"]["error"];

                                $Q_achievement = mysqli_query($link,"insert into achievement value ('','$judul','$deskripsi','$filename')");
                                if($Q_achievement){
                                    $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/achievement/" . $filename);
                                    if ($move) {
                                        header('location:../achievement.php');
                                    } else {
                                        ?>
                                        <script language="JavaScript">
                                            alert('Penambahan data gagal. Silakan ulangi');
                                            parent.location.href = '../add-achievement.php';
                                        </script>
                                    <?php
                                    }
                                }

                            }
}else{
    echo "salah";
}
