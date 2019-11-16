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
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Staff</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
                    </div>
                    <table border="0">
                      <tr>
                        <td>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Tangal Lahir</label>
                            <input type="text" class="form-control" placeholder="25 Mei 1980" name="tanggal" required="">
                        </div>
                      </td>
                      </tr>
                      <tr>
                        <td>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" placeholder="Status" name="status" required="">
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Anak</label>
                            <input type="text" class="form-control" placeholder="Anak" name="anak" >
                        </div>
                      </td>
                        <td>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required="">
                        </div>
                      </td>
                      </tr>
                    </table>
                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" name="images" required="">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" placeholder="Alamat" name="alamat" required=""></textarea>
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
