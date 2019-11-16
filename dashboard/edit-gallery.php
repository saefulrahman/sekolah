<?php
session_start();
require('header.php');
$link = connect();

if(isset($_GET['id'])){
    $id_gallery = $_GET['id'];
}

if(isset($_GET['id2'])){
    $cek = $_GET['id2'];
}

$injection = sha1(sha1($id_gallery).sha1('SQL-Inj3cti0N'));

if($cek == $injection){
    $edit_gallery = mysqli_query($link, "select * from gallery where id_gallery='$id_gallery'");
    while($data = mysqli_fetch_array($edit_gallery)){
        $id_kegiatan = $data['id_kegiatan'];
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
            <a href="#">Home</a>
        </li>
        <li>
            <a href="gallery.php">Gallery</a>
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
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Foto</h2>
            </div>
            <div class="box-content">
                    <div><center>
                        <img src="img/gallery/<?= $foto ?>" height="200px"><br>
                        <?php
                            $kegiatan2 = mysqli_query($link, "select * from kegiatan WHERE id_kegiatan='$id_kegiatan'");
                            $data2 = mysqli_fetch_array($kegiatan2);
                        ?>
                        <font size="5"><i><?php echo $data2['judul'];?></i></font><br>
                            <button type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                        </div>

                                        <div class="modal-body">
                                            <form action="lib/action-edit.php" method="post" enctype="multipart/form-data">
                                                <div>
                                                    <input type="hidden" value="<?= $foto ?>" name="foto">
                                                    <input type="hidden" value="<?= $id_gallery ?>" name="id_gallery">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                    <label class="control-label">Kegiatan</label>
                                                        <select class="form-control" name="id_kegiatan">
                                                            <?php
                                                            $kegiatan = mysqli_query($link, "select * from kegiatan");
                                                            while($data3 = mysqli_fetch_array($kegiatan)){
                                                                if ($id_kegiatan == $data3[0])
                                                                {
                                                                    echo"<option value='$data3[id_kegiatan]' selected='selected'>$data3[judul]</option>";
                                                                }
                                                                else
                                                                {
                                                                    echo"<option value='$data3[id_kegiatan]'>$data3[judul]</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                    <label class="control-label">Foto</label>
                                                        <input type="file" name="images">
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                <input type="hidden" name="gallery" value="gallery">
                                                <button type="submit" class="btn btn-default">Edit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </center></div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

