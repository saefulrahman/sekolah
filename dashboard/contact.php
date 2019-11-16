<?php
session_start();
if(isset($_SESSION['username'])){
require('header.php');
include "lib/function.php";
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="contact.php">Kotak Pesan</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-comment"></i> Data Pesan</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Telepon</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $batas = 20;
                        $page = isset( $_GET['page'] ) ? $_GET['page'] : "";

                        if ( empty( $page ) ) {
                            $posisi = 0;
                            $page = 1;
                        } else {
                            $posisi = ( $page - 1 ) * $batas;
                        }

                        $no  = 1 + $posisi;
                        $event = mysqli_query($link, "select * from contact limit $posisi,$batas");
                        while($data = mysqli_fetch_array($event)){
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $data[1] ?></td>
                                <td class="center"><?= $data[2] ?></td>
                                <td class="center"><?= $data[3] ?></td>
                                <td class="center"><?= $data[4] ?></td>
                                <td class="center"><?= waktuIndo($data[5]) ?></td>
                                <td class="center">
                                    <a class="btn btn-danger btn-sm" href="#" onclick="hapus('lib/action-delete.php?contact_id=<?= abs($data[0]) ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }

                        $jml_data = mysqli_num_rows(mysqli_query($link, "select * from contact"));
                        $JmlHalaman = ceil($jml_data/$batas);

                        if ( $page > 1 ) {
                            $link = $page-1;
                            $prev = "<a href='?page=$link'>Prev </a>";
                        } else {
                            $prev = "Prev";
                        }

                        $nmr = '';
                        for ( $i = 1; $i <= $JmlHalaman; $i++ ){

                            if ( $i == $page ) {
                                $nmr .= $i ."";
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
                        <li><a href="#">
                                <?php
                                if($nmr < 1){

                                } else
                                    if($nmr >= 1){
                                    echo $nmr;
                                }
                                ?>
                            </a>
                        </li>
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