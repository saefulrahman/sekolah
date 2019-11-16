<?php
$no_visible_elements = true;
include('header.php'); ?>

    <div class="row">
        <div class="col-md-12 center login-header">
            <h3>Selamat Datang</h3>
            <h4>Di Dashboard SMK Guna Dharma Nusantara</h4>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-4 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="lib/action-login.php" method="post">
                <fieldset>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="Password">
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-4">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
<?php require('footer.php'); ?>
