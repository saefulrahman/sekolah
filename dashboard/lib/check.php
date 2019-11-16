<?php
/**
 * Created by PhpStorm.
 * User: doe
 * Date: 9/17/15
 * Time: 1:42 PM
 */
require_once "connection.php";
$link = connect();

if(isset($_POST['password'])){
    $password = $_POST['password'];
}

$hash = sha1($password);

$checker = ("select * from admin where password='$hash'");
$result = $link->query($checker);

if($result->num_rows == 1){
    echo 'OK';
} else {
    echo 'Password beda';
}