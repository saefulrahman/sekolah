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
            <a href="berita-terkini.php">Berita Terkini</a>
        </li>
        <li>
            <a href="#">Add</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Berita</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">Judul Berita</label>
                        <input type="text" class="form-control" placeholder="Judul Berita" name="judul" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi Berita</label>
                        <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto Berita</label>
                        <input type="file" name="images" required="">
                    </div>
                    <input type="hidden" name="news" value="news">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->

<?php require('footer.php'); ?>
