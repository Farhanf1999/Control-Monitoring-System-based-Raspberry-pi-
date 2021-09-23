<?php

$dbhost = "localhost";
$dbname = "dbcontrol";
$dbuser = "admin";
$dbpassword = "riko1234";

$koneksi = mysqli_connect("localhost","admin","riko1234","dbcontrol") or die("koneksi ke server error");

//mysqli_select_db($koneksi) or die ("Koneksi ke Database error");
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query );
    $box = [];
    while( $sql = mysqli_fetch_assoc($result) ){
    $box[] = $sql;
    }
    return $box;
}


?>
