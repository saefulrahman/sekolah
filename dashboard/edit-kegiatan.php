<?php
session_start();
require('header.php');

if(isset($_GET['id'])){
    $id_kegiatan = $_GET['id'];
}

if(isset($_GET['id2'])){
    $cek = $_GET['id2'];
}

$injection = sha1(sha1($id_kegiatan).sha1('SQL-Inj3cti0N'));

if($cek == $injection){
    $edit_kegiatan = mysqli_query($link, "select * from kegiatan where id_kegiatan='$id_kegiatan'");
    while($data = mysqli_fetch_array($edit_kegiatan)){
        $tgl = $data['tanggal'];
        $bulan = $data['bulan'];
        $tahun = $data['tahun'];
        $jam = $data['jam'];
        $judul = $data['judul'];
        $tempat = $data['tempat'];
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
                <a href="kegiatan.php">Kegiatan</a>
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
                    <h2><i class="glyphicon glyphicon-edit"></i> Edit Kegiatan</h2>
                </div>
                <div class="box-content">
                    <form action="lib/action-edit.php" method="post">
                      <table>
                        <tr>
                          <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="text" class="form-control" value="<?= $tgl ?>" name="tgl" required="">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label >Bulan</label>
                                <input type="text" class="form-control" value="<?= $bulan ?>" name="bulan" required="">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" class="form-control" value="<?= $tahun ?>" name="tahun" required="">
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" class="form-control" value="<?= $jam ?>" name="jam" required="">
                            </div>
                          </td>
                        </tr>
                      </table>
                        <div class="form-group">
                            <label>Judul Kegiatan</label>
                            <input type="text" class="form-control" value="<?= $judul ?>" name="judul" required="">
                        </div>
                        <div class="form-group">
                            <label>Tempat Kegiatan</label>
                            <input type="text" class="form-control" value="<?= $tempat ?>" name="tempat" required="">
                        </div>
                        <input type="hidden" name="id_kegiatan" value="<?= $id_kegiatan ?>">
                        <input type="hidden" name="kegiatan" value="kegiatan">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

<?php require('footer.php'); ?>
