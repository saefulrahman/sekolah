<?php
/**
 * Created by PhpStorm.
 * User: server-studio
 * Date: 8/20/15
 * Time: 8:35 AM
 */
session_start();
require_once "connection.php";
include "function.php";

$link = connect();

if(isset($_POST['Username'])){
    $Username = filter($_POST['Username']);
}

if(isset($_POST['Password'])){
    $Password = filter($_POST['Password']);
}

$passwd_hash = sha1($Password);

$query = ("select * from admin where username='$Username' and password='$passwd_hash'");
$result = $link->query($query);

if($result->num_rows == 1){
    $_SESSION['username']=$Username;
    header("location:../index.php");
}else{
    ?>
    <script language="JavaScript">
        alert('<span class="alert alert-danger">Maaf. Username atau Password salah</span>');
        window.location.href='../login.php';
    </script>
    <?php
}