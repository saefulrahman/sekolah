<?php
session_start();
require('header.php');

$date = date("Y-m-d");

if(isset($_GET['id'])){
    $id_kabar = $_GET['id'];
}

if(isset($_GET['id2'])){
    $cek = $_GET['id2'];
}

$injection = sha1(sha1($id_kabar).sha1('SQL-Inj3cti0N'));

if($cek == $injection){
    $edit_kabar = mysqli_query($link, "select * from kabar_terkini where id_kabar='$id_kabar'");
    while($data = mysqli_fetch_array($edit_kabar)){
        $judul = $data['judul'];
        $keterangan = $data['keterangan'];
        $foto = $data['foto'];
    }
}else{
    ?>
    <script language="JavaScript">
        alert('.......... Blocked ..........');
        parent.location.href='logout.php';
    </script>
<?php
}
?>

    <div>
        <ul class="breadcrumb">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="berita-terkini.php">Berita Terkini</a>
            </li>
            <li>
                <a href="#">Edit</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Edit Berita</h2>
                </div>
                <div class="box-content">
                    <form action="lib/action-edit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Berita</label>
                            <input type="text" class="form-control" value="<?= $judul ?>" name="judul" required="">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Berita</label>
                            <textarea class="form-control" rows="3" name="deskripsi"><?= $keterangan ?></textarea>
                        </div>
                        <input type="hidden" name="id_kabar" value="<?= $id_kabar ?>">
                        <input type="hidden" name="foto" value="<?= $foto ?>">
                        <div class="form-group">
                            <label class="control-label">Foto</label>
                            <br>
                            <img src="img/news/<?= $foto ?>" height="150px" class="img-rounded"><br><br>
                            <input type="file" name="images">
                        </div>
                        <input type="hidden" value="<?= $date ?>" name="tanggal" required="">
                        <input type="hidden" name="news" value="news">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require('footer.php'); ?>
