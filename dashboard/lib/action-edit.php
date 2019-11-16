<?php
/**
 * Created by PhpStorm.
 * User: server-studio
 * Date: 9/11/15
 * Time: 3:33 PM
 */

require_once "connection.php";
$link = connect();

if(isset($_POST['id_admin'])){
    $id_admin = $_POST['id_admin'];
}

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
}

if(isset($_POST['password'])){
    $password = $_POST['password'];
    $hash = sha1($password);
}

if(isset($_POST['neoPassword'])){
    $neoPassword = $_POST['neoPassword'];
    $new_hash = sha1($neoPassword);
}

if(isset($_POST['cek'])){
    $cek = $_POST['cek'];
}

if(isset($_POST['tgl'])){
    $tgl = $_POST['tgl'];
}

if(isset($_POST['bulan'])){
    $bulan = $_POST['bulan'];
}

if(isset($_POST['tahun'])){
    $tahun = $_POST['tahun'];
}

if(isset($_POST['jam'])){
    $jam = $_POST['jam'];
}

if(isset($_POST['judul'])){
    $judul = $_POST['judul'];
}

if(isset($_POST['tempat'])){
    $tempat = $_POST['tempat'];
}

if(isset($_POST['id_kegiatan'])){
    $id_kegiatan = $_POST['id_kegiatan'];
}

if(isset($_POST['kegiatan'])){
    $kegiatan = $_POST['kegiatan'];
}

if(isset($_POST['gallery'])){
    $gallery = $_POST['gallery'];
}

if(isset($_POST['id_gallery'])){
    $id_gallery = $_POST['id_gallery'];
}

if (isset($_POST['staff'])) {
    $staff = $_POST['staff'];
}

if (isset($_POST['id_staff'])) {
    $id_staff = $_POST['id_staff'];
}

if (isset($_POST['tempat'])) {
    $tempat = $_POST['tempat'];
}

if (isset($_POST['tanggal'])) {
    $tanggal = $_POST['tanggal'];
}

if (isset($_POST['alamat'])) {
    $alamat = $_POST['alamat'];
}

if (isset($_POST['pendidikan'])) {
    $pendidikan = $_POST['pendidikan'];
}

if (isset($_POST['status'])) {
    $status = $_POST['status'];
}

if (isset($_POST['anak'])) {
    $anak = $_POST['anak'];
}

if (isset($_POST['jabatan'])) {
    $jabatan = $_POST['jabatan'];
}

if(isset($_POST['id_kabar'])){
    $id_kabar = $_POST['id_kabar'];
}

if(isset($_POST['news'])){
    $news = $_POST['news'];
}

if(isset($_POST['deskripsi'])){
    $deskripsi = $_POST['deskripsi'];
}

if(isset($_POST['banner'])){
    $banner = $_POST['banner'];
}

if(isset($_POST['id_banner'])){
    $id_banner = $_POST['id_banner'];
}

if(isset($_POST['foto'])){
    $foto = $_POST['foto'];
}

if(isset($_POST['id_achievement'])){
    $id_achievement = $_POST['id_achievement'];
}

if(isset($_POST['achievement'])){
    $achievement = $_POST['achievement'];
}

if(!empty($id_admin)){

    if(isset($password)){
        $check = mysqli_num_rows(mysqli_query($link, "select * from admin where id_admin='$id_admin' and password='$hash'"));
        if($check == 1){
            $update = mysqli_query($link, "update admin set nama='$nama', username='$username', password='$new_hash' where id_admin='$id_admin'");
        }else{
            ?>
            <script language="JavaScript">
                alert('Password lama berbeda!');
                parent.location.href='../edit-admin.php?id=<?= $id_admin ?>&id2=<?= $cek ?>';
            </script>
            <?php
        }
    } else {
        $update = mysqli_query($link, "update admin set nama='$nama', username='$username' where id_admin='$id_admin'");
    }

    if($update){
        header('location:../admin.php');
    }else{
        ?>
        <script language="JavaScript">
            alert('Perubahan tidak berhasil!');
            parent.location.href='../edit-admin.php?id=<?= $id_admin ?>&id2=<?= $cek ?>';
        </script>
        <?php
    }

} else
    if(isset($gallery)){
        if(empty($_FILES["images"]["name"])){
            $filename = $_POST['foto'];
        }else{
            $foto = $_POST['foto'];
            $filename = $_FILES["images"]["name"];
            $filesize = $_FILES["images"]["size"];
            $fileError = $_FILES["images"]["error"];
        }

        $edit_gallery = mysqli_query($link, "UPDATE gallery SET id_kegiatan = '$id_kegiatan', foto = '$filename' WHERE id_gallery = '$id_gallery'");
        if($edit_gallery) {
            if (empty($_FILES["images"]["name"])) {
                header('location:../gallery.php');
            }else{
                $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/gallery/" . $filename);
                if($move){
                    $gambar = mysqli_query($link, "select * from gallery WHERE id_gallery = '$id_gallery'");
                    while($data = mysqli_fetch_array($gambar)){
                        unlink('../img/gallery/'.$foto);
                    }
                    header('location:../gallery.php');
                }else{
                    ?>
                    <script language="JavaScript">
                        alert('Gagal unggah foto!');
                        parent.location.href='../edit-gallery.php?id=<?= $id_gallery ?>&id2=<?= $cek ?>';
                    </script>
                <?php
                }
            }
        }else{
            ?>
            <script language="JavaScript">
                alert('Gagal masuk database!');
                parent.location.href='../edit-staff.php?id=<?= $id_gallery ?>&id2=<?= $cek ?>';
            </script>
        <?php
        }

    } else
         if(isset($kegiatan)&&!isset($gallery)){

             $Q_kegiatan = mysqli_query($link, "update kegiatan set tanggal='$tgl', bulan='$bulan',tahun='$tahun',jam='$jam',judul='$judul',tempat='$tempat' where id_kegiatan='$id_kegiatan'");
             if($Q_kegiatan){
                 header("location:../kegiatan.php");
             } else {
                 ?>
                 <script language="JavaScript">
                     alert('Perubahan tidak berhasil!');
                     parent.location.href='../edit-kegiatan.php?id=<?= $id_kegiatan ?>&id2=<?= $cek ?>';
                 </script>
             <?php
             }

         } else
            if(isset($staff)){

                if(empty($_FILES["images"]["name"])){
                    $filename = $_POST['foto'];
                }else{
                    $foto = $_POST['foto'];
                    $filename = $_FILES["images"]["name"];
                    $filesize = $_FILES["images"]["size"];
                    $fileError = $_FILES["images"]["error"];
                }

                $edit_staf = mysqli_query($link, "update staff set nama='$nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal', alamat='$alamat', pendidikan='$pendidikan', status='$status', anak='$anak', jabatan='$jabatan', foto='$filename' WHERE id_staff = '$id_staff'"); //id_lembaga & foto belum
                if($edit_staf) {
                    if (empty($_FILES["images"]["name"])) {
                        header('location:../staff.php');
                    } else {
                        $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/staff/" . $filename);
                        if ($move) {
                            $gambar = mysqli_query($link, "select * from staff WHERE id_staff = '$id_staff'");
                            while($data = mysqli_fetch_array($gambar)){
                                unlink('../img/staff/'.$foto);
                            }
                            header('location:../staff.php');
                        } else {
                            ?>
                            <script language="JavaScript">
                                alert('Gagal menyimpan foto!');
                                parent.location.href = '../edit-staff.php?id=<?= $id_staff ?>&id2=<?= $cek ?>';
                            </script>
                        <?php
                        }
                    }
                }else{
                    ?>
                    <script language="JavaScript">
                        alert('Gaga masuk database!');
                        parent.location.href='../edit-staff.php?id=<?= $id_staff ?>&id2=<?= $cek ?>';
                    </script>
                    <?php

                }

            } else
                if(isset($news)) {
                    if (empty($_FILES["images"]["name"])) {
                        $filename = $_POST['foto'];
                    } else {
                        $foto = $_POST['foto'];
                        $filename = $_FILES["images"]["name"];
                        $filesize = $_FILES["images"]["size"];
                        $fileError = $_FILES["images"]["error"];
                    }

                    $edit_news = mysqli_query($link, "update kabar_terkini set judul='$judul', keterangan='$deskripsi', tanggal='$tanggal', foto='$filename' WHERE id_kabar='$id_kabar' ");

                    if ($edit_news) {
                        $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/news/" . $filename);
                        if ($move) {
                            $gambar = mysqli_query($link, "select * from kabar_terkini WHERE id_kabar = '$id_kabar'");
                            while($data = mysqli_fetch_array($gambar)){
                                unlink('../img/news/'.$foto);
                            }
                            header('location:../berita-terkini.php');
                        } else {
                            ?>
                            <script language="JavaScript">
                                parent.location.href = '../berita-terkini.php';
                            </script>
                        <?php
                        }
                    }else{
                        echo "gagal";
                    }
                } else
                    if(isset($banner)){
                        if (empty($_FILES["images"]["name"])) {
                            $filename = $_POST['foto'];
                        } else {
                            $foto = $_POST['foto'];
                            $filename = $_FILES["images"]["name"];
                            $filesize = $_FILES["images"]["size"];
                            $fileError = $_FILES["images"]["error"];
                        }

                        $edit_banner = mysqli_query($link, "update slider set judul='$nama', keterangan='$deskripsi', foto='$filename', tanggal='$tanggal' WHERE id_slider = '$id_banner'");
                        if ($edit_banner) {
                            if (empty($_FILES["images"]["name"])) {
                                header('location:../banner.php');
                            } else {
                                $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/slider/" . $filename);
                                if ($move) {
                                    $gambar = mysqli_query($link, "select * from slider WHERE id_slider = '$id_banner'");
                                    while($data = mysqli_fetch_array($gambar)){
                                        unlink('../img/slider/'.$foto);
                                    }
                                    header('location:../banner.php');
                                } else {
                                    ?>
                                    <script language="JavaScript">
                                        alert('Gagal menyimpan foto!');
                                        parent.location.href='../edit-banner.php?id=<?= $id_banner ?>&id2=<?= $cek ?>';
                                    </script>
                                    <?php
                                }
                            }
                        } else {
                            ?>
                            <script language="JavaScript">
                                alert('gaga masuk database!');
                                parent.location.href='../edit-banner.php?id=<?= $id_banner ?>&id2=<?= $cek ?>';
                            </script>
                            <?php
                        }
                    } else
                        if(isset($achievement)){

                            if (empty($_FILES["images"]["name"])) {
                                $filename = $_POST['foto'];
                            } else {
                                $foto = $_POST['foto'];
                                $filename = $_FILES["images"]["name"];
                                $filesize = $_FILES["images"]["size"];
                                $fileError = $_FILES["images"]["error"];
                            }

                            $edit = mysqli_query($link, "update achievement set title='$judul', description='$deskripsi', photo='$filename' WHERE achievement_id='$id_achievement'");
                            if ($edit) {
                                $move = move_uploaded_file($_FILES["images"]["tmp_name"], "../img/achievement/" . $filename);
                                if ($move) {
                                    $gambar = mysqli_query($link, "select * from achievement WHERE achievement_id='$id_achievement' ");
                                    while($data = mysqli_fetch_array($gambar)){
                                        unlink('../img/achievement/'.$foto);
                                    }
                                    header('location:../achievement.php');
                                } else {
                                    ?>
                                    <script language="JavaScript">
                                        alert('Perubahan data gagal!');
                                        parent.location.href = '../edit-achievement.php?id=<?= $id_achievement ?>&id2=<?= $cek ?>';
                                    </script>
                                    <?php
                                }
                            }
                        } else {
                            echo('Gagal ');
                        }
