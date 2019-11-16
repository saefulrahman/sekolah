<?php
session_start();
if(isset($_SESSION['username'])){
require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Admin</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Data Admin</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="add-admin.php" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $data_admin = mysqli_query($link, "select * from admin limit 1");
                                while($row = mysqli_fetch_array($data_admin)){
                                    $save = sha1(sha1($row[0]).sha1('SQL-Inj3cti0N'));
                                    //$id = $row[0];
                                    ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row[1] ?></td>
                                        <td class="center"><?= $row[2] ?></td>
                                        <td class="center">
                                            <a class="btn btn-info btn-sm" href="edit-admin.php?id=<?= $row[0] ?>&id2=<?= $save ?>">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            ?>

                        </tbody>
                    </table>
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