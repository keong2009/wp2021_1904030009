<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wpsmt5';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

// AMBIL data dari tabel calon mhs
// mysqli_fetch_row(); mengembalikan data dalam bentuk numerik
// mysqli_fetch_assoc(); mengembalikan data dalam nama field
// mysqli_fetch_array(); mengembalikan data dalam bentuk nama field dan numerik

//while ($camaba = mysqli_fetch_assoc($result)){
//var_dump($camaba);
//}

?>