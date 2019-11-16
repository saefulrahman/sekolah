<?php
session_start();
require('header.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_GET['id2'])){
    $cek = $_GET['id2'];
}

$injection = sha1(sha1($id).sha1('SQL-Inj3cti0N'));

if($cek == $injection){
    $edit_kabar = mysqli_query($link, "select * from achievement where achievement_id='$id'");
    while($data = mysqli_fetch_array($edit_kabar)){
        $judul = $data['title'];
        $keterangan = $data['description'];
        $foto = $data['3'];
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
                <a href="achievement.php">Prestasi</a>
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
                    <h2><i class="glyphicon glyphicon-edit"></i> Edit Data Prestasi</h2>
                </div>
                <div class="box-content">
                    <form action="lib/action-edit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Prestasi</label>
                            <input type="text" class="form-control" value="<?= $judul ?>" name="judul" required="">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Prestasi</label>
                            <textarea class="form-control" rows="3" name="deskripsi"><?= $keterangan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Foto</label>
                            <br>
                            <img src="img/achievement/<?= $foto ?>" height="150px" class="img-rounded"><br><br>
                            <input type="file" name="images">
                        </div>
                        <input type="hidden" name="achievement" value="achievement">
                        <input type="hidden" name="id_achievement" value="<?= $id ?>">
                        <input type="hidden" name="foto" value="<?= $foto ?>">
                        <input type="hidden" name="cek" value="<?= $injection ?>">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require('footer.php'); ?>
