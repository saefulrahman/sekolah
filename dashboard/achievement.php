<?php
session_start();
if(isset($_SESSION['username'])){
require('header.php');
require('lib/function.php');
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="achievement.php">Prestasi</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-star"></i> Prestasi</h2>

                    <div class="box-icon">
                        <a href="add-achievement.php" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $batas = 10;
                        $page = isset( $_GET['page'] ) ? $_GET['page'] : "";

                        if ( empty( $page ) ) {
                            $posisi = 0;
                            $page = 1;
                        } else {
                            $posisi = ( $page - 1 ) * $batas;
                        }

                        $news = mysqli_query($link, "select * from achievement limit $posisi, $batas");
                        $no = 1 + $posisi;
                        while($data = mysqli_fetch_array($news)){
                            $save = sha1(sha1($data[0]).sha1('SQL-Inj3cti0N'));
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $data['title'] ?></td>
                                <td><?= $data['description'] ?></td>
                                <td class="text-center"><?php echo "<img src='img/achievement/$data[3]' width='40' height='45'>" ?></td>
                                <td class="center">
                                    <a class="btn btn-info btn-sm" href="edit-achievement.php?id=<?= abs($data['achievement_id']) ?>&id2=<?= $save ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" onclick="hapus('lib/action-delete.php?achievement_id=<?= abs($data[0]) ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }

                        $jml_data = mysqli_num_rows(mysqli_query($link, "select * from achievement"));
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
                        </tbody>
                    </table>
                    <ul class="pagination pagination-centered">
                        <li><a href="#"><?= $prev ?></a></li>
                        <li><a href="#"><?= $nmr ?></a></li>
                        <li><a href="#"><?= $next ?></a></li>
                    </ul>
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