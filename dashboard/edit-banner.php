<?php
session_start();
require('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Banner</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Banner</h2>
            </div>
            <div class="box-content">
                <?php
                    $date = date("Y-m-d");

                    if(isset($_GET['id'])){
                        $id_banner = $_GET['id'];
                    }

                    if(isset($_GET['id2'])){
                        $cek = $_GET['id2'];
                    }

                    $injection = sha1(sha1($id_banner).sha1('SQL-Inj3cti0N'));

                    if($cek == $injection){
                        $edit_banner = mysqli_query($link, "select * from slider where id_slider='$id_banner'");
                        while($data = mysqli_fetch_array($edit_banner)){
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
                <form action="lib/action-edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $judul ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="<?= $keterangan ?>" required="">
                    </div>
                   <div class="form-group">
                       <label class="control-label">Foto</label>
                       <br>
                       <img src="img/slider/<?= $foto ?>" height="150px" class="img-rounded"><br><br>
                        <input type="file" name="images">
                    </div>
                    <input type="hidden" name="banner" value="banner">
                    <input type="hidden" name="id_banner" value="<?= $id_banner ?>">
                    <input type="hidden" name="cek" value="<?= $cek ?>">
                    <input type="hidden" name="foto" value="<?= $foto ?>">
                    <input type="hidden" name="tanggal" value="<?= $date ?>">
                    <button type="submit" class="btn btn-default">Save</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

