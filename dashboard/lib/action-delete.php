<?php

require_once("connection.php");

$link = connect();

if(isset($_GET['id_kabar'])){
    $id_kabar = $_GET['id_kabar'];
}

if(isset($_GET['id_kegiatan'])){
    $id_kegiatan = $_GET['id_kegiatan'];
}

if (isset($_GET['id_staff'])){
    $id_staff = $_GET['id_staff'];
}

if (isset($_GET['id_gallery'])){
    $id_gallery = $_GET['id_gallery'];
}

if(isset($_GET['id_slider'])){
    $id_slider = $_GET['id_slider'];
}

if(isset($_GET['achievement_id'])){
    $achievement_id = $_GET['achievement_id'];
}

if(isset($_GET['contact_id'])){
    $contact_id = $_GET['contact_id'];
}

if(isset($id_kabar)){
    $gambar = mysqli_query($link, "select * from kabar_terkini WHERE id_kabar = '$id_kabar'");
    while($data = mysqli_fetch_array($gambar)){
        unlink('../img/news/'.$data['foto']);
    }

    $sql = "DELETE FROM kabar_terkini WHERE id_kabar = '$id_kabar'";
    $hasil = mysqli_query($link, $sql);
    if ($hasil) {
        header('location:../berita-terkini.php?berhasil_hapus');
    } else {
        ?>
        <script language="JavaScript">
            alert('Penghapusan kegiatan gagal. Silakan ulangi');
            parent.location.href='../berita-terkini.php';
        </script>
        <?php
    }
}else
    if(isset($id_kegiatan)){
        $sql = "DELETE FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'";
        $hasil = mysqli_query($link, $sql);
        if ($hasil) {
        
            $gallery_kegiatan = mysqli_query($link, "delete from gallery WHERE id_kegiatan='$id_kegiatan'");
            if($gallery_kegiatan){
                while($data = mysqli_fetch_array($gallery_kegiatan)){
                    unlink("../img/gallery/".$data['foto']);
                }

                header('location:../kegiatan.php');
            }
            
        } else {
            ?>
            <script language="JavaScript">
                alert('Penghapusan kegiatan gagal. Silakan ulangi');
                parent.location.href='../kegiatan.php';
            </script>
            <?php
        }
    }else
        if(isset($id_staff)){
            $gambar = mysqli_query($link, "select * from staff WHERE id_staff = '$id_staff'");
            while($data = mysqli_fetch_array($gambar)){
                unlink('../img/staff/'.$data['foto']);
            }

            $sql = "DELETE FROM staff WHERE id_staff = '$id_staff'";
            $hasil = mysqli_query($link, $sql);
            if ($hasil){
                header('location:../staff.php?Berhasil_hapus');
            }else{
                ?>
                <script language="JavaScript">
                    alert('Penghapusan data gagal. Silakan ulangi');
                    parent.location.href='../staff.php';
                </script>
            <?php
            }
        } else
            if(isset($id_gallery)){
                $gambar = mysqli_query($link, "select * from gallery WHERE id_gallery = '$id_gallery'");
                while($data = mysqli_fetch_array($gambar)){
                    unlink('../img/gallery/'.$data['foto']);
                }

                $sql = "DELETE FROM gallery WHERE id_gallery = '$id_gallery'";
                $hasil = mysqli_query($link, $sql);
                if ($hasil){

                    header('location:../gallery.php?Berhasil_hapus');
                }else{
                    ?>
                    <script language="JavaScript">
                        alert('Penghapusan data gagal. Silakan ulangi');
                        parent.location.href='../gallery.php';
                    </script>
                    <?php
                }
            } else
                if(isset($id_slider)){
                    $gambar = mysqli_query($link, "select * from slider WHERE id_slider = '$id_slider'");
                    while($data = mysqli_fetch_array($gambar)){
                        unlink('../img/slider/'.$data['foto']);
                    }

                    $sql = "DELETE FROM slider WHERE id_slider = '$id_slider'";
                    $hasil = mysqli_query($link, $sql);
                    if ($hasil){
                        header('location:../banner.php');
                    }else{
                        ?>
                        <script language="JavaScript">
                            alert('Penghapusan data gagal. Silakan ulangi');
                            parent.location.href='../banner.php';
                        </script>
                        <?php
                    }
                } else
                    if(isset($achievement_id)){
                        $gambar = mysqli_query($link, "select * from achievement WHERE achievement_id = '$achievement_id'");
                        while($data = mysqli_fetch_array($gambar)){
                            unlink('../img/achievement/'.$data['photo']);
                        }

                        $sql = "DELETE FROM achievement WHERE achievement_id = '$achievement_id'";
                        $hasil = mysqli_query($link, $sql);
                        if ($hasil){
                            header('location:../achievement.php');
                        }else{
                            ?>
                            <script language="JavaScript">
                                alert('Penghapusan data gagal. Silakan ulangi');
                                parent.location.href='../achievement.php';
                            </script>
                            <?php
                        }
                    } else 
                    	if(isset($contact_id)){
                            $sql = "DELETE FROM contact WHERE contact_id = '$contact_id'";
                            $hasil = mysqli_query($link, $sql);
                            if ($hasil) {
                                header('location:../contact.php');
                            } else {
                                ?>
                                <script language="JavaScript">
                                    alert('Penghapusan kegiatan gagal. Silakan ulangi');
                                    parent.location.href='../contact.php';
                                </script>
                                <?php
                            }
                        }else{
                            echo "salah";
                        }