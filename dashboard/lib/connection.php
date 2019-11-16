<?php
function connect(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_sekolah';

    $link = mysqli_connect($host, $user, $pass, $db);

    return $link;
}
