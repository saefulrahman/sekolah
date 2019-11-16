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
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }

                    if(isset($_GET['id2'])){
                        $cek = $_GET['id2'];
                    }

                    $injection = sha1(sha1($id).sha1('SQL-Inj3cti0N'));

                    if($cek == $injection){
                        $edit_baner = mysqli_query($link, "select * from slider where id_slider='$id'");
                        while($data = mysqli_fetch_array($edit_baner)){
                            $save = sha1(sha1($data[0]).sha1('SQL-Inj3cti0N'));
                            $id = $data['id_slider'];
                            $judul = $data['judul'];
                            $foto = $data['foto'];
                            $keterangan = $data['keterangan'];
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
                <form action="lib/action-edit.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Kegiatan</label>
                        <input type="text" class="form-control" name="nama" value="<?= $judul ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan Kegiatan</label>
                        <input type="text" class="form-control" name="keterangan" value="<?= $keterangan ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="images" value="<?= $foto ?>">
                    </div>
                    <input type="hidden" name="banner" value="banner">
                    <input type="text" name="id_slider" value="<?= $id ?>">
                    <input type="text" name="id2" value="<?= $save ?>">
                    <button type="submit" class="btn btn-default">Save</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

