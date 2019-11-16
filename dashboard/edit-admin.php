<?php
session_start();
require('header.php');
?>
<script type="text/javascript">
    pic1 = new Image(16, 16);
    pic1.src = "lib/loader.gif";
    $(document).ready(function(){
        $("#password").change(function() {
            var pas = $("#password").val();
            if(pas != ''){
                $("#status").html('<img src="lib/loader.gif" align="absmiddle">&nbsp;Checking availability...');
                $.ajax({
                    type: "POST",
                    url: "check.php",
                    data: "password="+ pas,
                    success: function(msg){
                        $("#status").ajaxComplete(function(event, request, settings){
                            if(msg == 'OK'){
                                $("#password").removeClass('object_error'); // if necessary
                                $("#password").addClass("object_ok");
                            } else {
                                $("#password").removeClass('object_ok'); // if necessary
                                $("#password").addClass("object_error");
                                $(this).html(msg);
                            }
                        });
                    }
                });

            }else{
                $("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
                $("#password").removeClass('object_ok'); // if necessary
                $("#password").addClass("object_error");
            }
        });
    });
</script>
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
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Admin</h2>
            </div>
            <div class="box-content">
                <?php
                    if(isset($_GET['id'])){
                        $id_admin = $_GET['id'];
                    }

                    if(isset($_GET['id2'])){
                        $cek = $_GET['id2'];
                    }

                    $injection = sha1(sha1($id_admin).sha1('SQL-Inj3cti0N'));

                    if($cek == $injection){
                        $edit_admin = mysqli_query($link, "select * from admin where id_admin='$id_admin'");
                        while($data = mysqli_fetch_array($edit_admin)){
                            $nama = $data['nama'];
                            $username = $data['username'];
                            $password = $data['password'];
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
                <form action="lib/action-edit.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $nama ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Lama</label>
                        <input type="password" class="form-control" placeholder="Old Password" id="password" name="password" >
                        <div id="results"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru</label>
                        <input type="password" class="form-control" placeholder="New Password" name="neoPassword" >
                    </div>
                    <input type="hidden" name="admin" value="admin">
                    <input type="hidden" name="id_admin" value="<?= $id_admin ?>">
                    <input type="hidden" name="cek" value="<?= $cek ?>">
                    <button type="submit" class="btn btn-default">Save</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>

