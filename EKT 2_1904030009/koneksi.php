<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wpsmt5';

$konn = mysqli_connect($host, $user, $pass, $db);

$rslt = mysqlI_query($conn, 'SELECT * FROM calon_mhs');

// Ambil data dari tabel calon mhs

//mysqli_fetch_row(); => Mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc(); => Mengembalikan data dalam bentuk nama field
//mysqli_fetch_array(); => Menampilkan data dalam bentuk numerik dan nama field

// while ($camaba = mysqli_fetch_row($rslt)){
// var_dump($camaba);
// }
