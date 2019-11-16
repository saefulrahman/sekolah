<?php
/**
 * Created by PhpStorm.
 * User: server-studio
 * Date: 10/1/15
 * Time: 9:09 AM
 */
require"function.php";
require_once"connection.php";
$link = connect();

if(isset($_POST['nama'])){
    $name = filter($_POST['nama']);
}

if(isset($_POST['email'])){
    $email = filter($_POST['email']);
}

if(isset($_POST['phone'])){
    $phone = filter($_POST['phone']);
}

if(isset($_POST['pesan'])){
    $message = filter($_POST['pesan']);
}

if(isset($_POST['kontak'])){
    $kontak = filter($_POST['kontak']);
}
if (isset($kontak)) {
    $date = date("Y-m-d");

    $Q_Message = mysqli_query($link, "insert into contact value ('','$name','$email','$phone','$message','$date')");
    if ($Q_Message) {
        header("location:../../contact.php");
    } else {
        ?>
        <script>
            alert('Pesan tidak bisa dikirim.');
            parent.location.href = '../../contact.php';
        </script>
        <?php
    }
}
