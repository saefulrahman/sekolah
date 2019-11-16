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
                <a href="gallery.php">Gallery</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Gallery</h2>

                    <div class="box-icon">
                        <a href="add-gallery.php" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                        <?php
                        $batas = 42;
                        $page = isset( $_GET['page'] ) ? $_GET['page'] : "";

                        if ( empty( $page ) ) {
                            $posisi = 0;
                            $page = 1;
                        } else {
                            $posisi = ( $page - 1 ) * $batas;
                        }

                        $i=1;
                        $query_gallery = mysqli_query($link, "select GL.*, K.* from gallery GL join kegiatan K using(id_kegiatan) where GL.id_kegiatan=K.id_kegiatan limit $posisi, $batas");
                        while($data = mysqli_fetch_array($query_gallery)){
                            $save = sha1(sha1($data[0]).sha1('SQL-Inj3cti0N'));
                        ?>
                            <!-- Button trigger modal -->
                            <button type="button" data-toggle="modal" data-target="#myModal<?php echo $i ?>" class="gallery">
                                <img src="img/gallery/<?php echo $data['foto'] ?>" width="130px" height="136px" class="img-responsive">
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $i.". ".$data['judul'] ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="img/gallery/<?php echo $data['foto'] ?>" class="img-responsive">
                                            </center>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-info btn-sm" href="edit-gallery.php?id=<?= abs($data[0]) ?>&id2=<?= $save ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#" onclick="hapus('lib/action-delete.php?id_gallery=<?php echo abs($data['id_gallery']) ?>')">
                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $i++;
                        }

                        $jml_data = mysqli_num_rows(mysqli_query($link, "select * from gallery"));
                        $JmlHalaman = ceil($jml_data/$batas);

                        if ( $page > 1 ) {
                            $link = $page-1;
                            $prev = "<a href='?page=$link'>Prev </a>";
                        } else {
                            $prev = "Prev";
                        }

                        $nmr = '';
                        for ( $i = 1; $i<= $JmlHalaman; $i++ ){

                            if ( $i == $page ) {
                                $nmr .= $i;
                            } else {
                                $nmr .= "<a class='active' href='?page=$i'>$i</a> ";
                            }
                        }

                        if ( $page < $JmlHalaman ) {
                            $link = $page + 1;
                            $next = " <a href='?page=$link'>Next</a>";
                        } else {
                            $next = "Next";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <ul class="pagination pagination-centered">
                <li><a href="#"><?= $prev ?></a></li>
                <li><a href="#"><?= $nmr ?></a></li>
                <li><a href="#"><?= $next ?></a></li>
            </ul>
        </div>
    </div>
<?php require('footer.php'); 
}else{
    ?>
    <script language="JavaScript">
        alert('Anda harus login terlebih dahulu');
        parent.location.href='login.php';
    </script>
    <?php
}
?>