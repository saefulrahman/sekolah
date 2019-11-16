<?php
session_start();
if(isset($_SESSION['username'])){
require('header.php');
?>
<SCRIPT type="text/javascript">
    pic1 = new Image(16, 16);
    pic1.src = "loader.gif";
    $(document).ready(function(){
        $("#username").change(function() {
            var usr = $("#username").val();

            $('#status').html('');
            if(usr.length > 5){
                $("#username").removeClass('object_error'); // if necessary
                $("#username").addClass("object_ok");
                $("#status2").html('<font color="red">Sebaiknya password minimal <strong>8</strong> karakter.</font>');
            }else{
                $("#status").html('<font color="red">Username harus lebih dari <strong>5</strong> karakter.</font>');
                $("#status2").html('<font color="red">Sebaiknya password minimal <strong>8</strong> karakter.</font>');
                $("#username").removeClass('object_ok'); // if necessary
                $("#username").addClass("object_error");
            }
        });
    });
</SCRIPT>
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
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Admin</h2>
            </div>
            <div class="box-content">
                <form action="lib/action-add.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="nama" required="">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required="">
                        <div id="status"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="">
                        <div id="status2"></div>
                    </div>
                    <input type="hidden" name="admin" value="admin">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

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

