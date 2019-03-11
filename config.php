<?php

$server = "localhost";
$user = "id8944056_vera";
$password = "veralaras";
$nama_database = "id8944056_akademik";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
