<?php
session_start();
require('header.php');
$link = connect();
/*
$id_staff = '';
if(isset($_GET['id_staff'])){
    $id_staff = $_GET['id_staff'];
}

$sql = "SELECT * FROM staff join lembaga using (id_lembaga) WHERE id_staff = '$id_staff'";
$query = mysqli_query($link, $sql);
$data = mysqli_fetch_array($query);
*/

if(isset($_GET['id'])){
    $id_staff = $_GET['id'];
}

if(isset($_GET['id2'])){
    $cek = $_GET['id2'];
}

$injection = sha1(sha1($id_staff).sha1('SQL-Inj3cti0N'));

if($cek == $injection){
    $edit_staff = mysqli_query($link, "select * from staff where id_staff='$id_staff'");
    while($data = mysqli_fetch_array($edit_staff)){
        $nama = $data['nama'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $alamat = $data['alamat'];
        $pendidikan = $data['pendidikan'];
        $status = $data['status'];
        $anak = $data['anak'];
        $jabatan = $data['jabatan'];
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
            <a href="staff.php">Staff</a>
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
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Staff</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $nama ?>" required="">
                    </div>
                    <table>
                      <tr>
                        <td>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" value="<?= $tempat_lahir ?>" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Tangal Lahir</label>
                            <input type="text" class="form-control" name="tanggal" value="<?= $tanggal_lahir ?>" required="">
                        </div>
                        </td>
                      </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan" value="<?= $pendidikan ?>" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="status" value="<?= $status ?>" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Anak</label>
                            <input type="text" class="form-control" name="anak" value="<?= $anak ?>" >
                        </div>
                      </td>
                      <td>
                      <div class="form-group">
                          <label>Jabatan</label>
                          <input type="text" class="form-control" name="jabatan" value="<?= $jabatan ?>" required="">
                      </div>
                    </td>
                      </tr>
                    </table>
                    <input type="hidden" name="foto" value="<?= $foto ?>">
                    <input type="hidden" name="cek" value="<?= $cek ?>">
                    <input type="hidden" name="id_staff" value="<?= $id_staff ?>">

                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <br>
                        <img src="img/staff/<?= $foto ?>" height="150px" class="img-rounded"><br><br>
                        <input type="file" name="images">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" required=""><?= $alamat ?></textarea>
                    </div>
                    <input type="hidden" name="staff" value="staff">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>
