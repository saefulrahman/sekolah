<?php
session_start();
if(isset($_SESSION['username'])){
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
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Banner</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" placeholder="Judul Banner" name="judul" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" name="images" required="">
                    </div>
                    <input type="hidden" name="banner" value="banner">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

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

