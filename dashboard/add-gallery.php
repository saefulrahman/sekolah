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
            <a href="#">Staff</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Galeri</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">Kegiatan</label>
                        <div class="controls">
                            <select data-rel="chosen" class="form-control" name="jkegiatan">
                                <option value="">Pilih Kegiatan</option>
                                <?php
                                $kegiatan = mysqli_query($link, "select * from kegiatan");
                                while($data = mysqli_fetch_array($kegiatan)){
                                    echo"<option value='$data[id_kegiatan]'>$data[judul]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" name="images1"><br>
                        <input type="file" name="images2"><br>
                        <input type="file" name="images3"><br>
                        <input type="file" name="images4" multiple><br>
                        <input type="file" name="images5">
                    </div>
                    <input type="hidden" name="gallery" value="gallery">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

