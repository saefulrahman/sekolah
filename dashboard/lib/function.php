<?php
function filter($data){
    $filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES )));
    return $filter;
}

function waktuIndo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
    return($result);
}

function ubahformatTgl($tanggal) {
    $pisah = explode('/',$tanggal);
    $urutan = array($pisah[2],$pisah[1],$pisah[0]);
    $satukan = implode('-',$urutan);
    return $satukan;
}
