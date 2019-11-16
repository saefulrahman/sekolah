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
            <a href="kegiatan.php">Kegiatan</a>
        </li>
        <li>
            <a href="#">Add</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Kegiatan</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post">
                  <table border="0">
                    <tr>
                      <td>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Tanggal</label>
                              <input type="text" class="form-control" placeholder="Tanggal" name="tgl" required="">
                          </div>
                      </td>
                      <td>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Bulan</label>
                              <input type="text" class="form-control" placeholder="Bulan" name="bulan" required="">
                          </div>
                      </td>
                      <td>
                          <div class="form-group">
                              <label>Tahun</label>
                              <input type="text" class="form-control" placeholder="Tahun" name="tahun" required="">
                          </div>
                      </td>
                      <td>
                          <div class="form-group">
                              <label>Waktu</label>
                              <input type="text" class="form-control" placeholder="Waktu Pelaksanaan" name="jam" required="">
                          </div>
                      </td>
                    </tr>
                  </table>
                    <div class="form-group">
                        <label>Judul kegiatan</label>
                        <input type="text" class="form-control" placeholder="Judul kegiatan" name="jkegiatan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tempat</label>
                        <input type="text" class="form-control" placeholder="Tempat kegiatan" name="tempat" required="">
                    </div>
                    <input type="hidden" name="keg" value="keg">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>
