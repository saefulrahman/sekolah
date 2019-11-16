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
                <a href="#">Staff</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Data Kepengurusan</h2>

                    <div class="box-icon">
                        <a href="add-staff.php" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pendidikan</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $query_staff = mysqli_query($link, "select * from staff");
                            while($data = mysqli_fetch_array($query_staff)){
                                $save = sha1(sha1($data[0]).sha1('SQL-Inj3cti0N'));
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td class="center"><?= $data['pendidikan'] ?></td>
                                    <td class="center"><?= $data['jabatan'] ?></td>
                                    <td class="center"><?php echo "<img src='img/staff/$data[foto]' width='40' height='46'>"; ?></td>
                                    <td class="center">
                                        <a class="btn btn-info btn-sm" href="edit-staff.php?id=<?= abs($data['id_staff']) ?>&id2=<?= $save ?>">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#" onclick="hapus('lib/action-delete.php?id_staff=<?php echo abs($data['id_staff']) ?>')">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            Delete
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