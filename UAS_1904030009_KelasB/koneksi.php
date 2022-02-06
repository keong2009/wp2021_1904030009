<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'uas_1904030009';


$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_anggota');

//Ambil data dari tabel anggota

//$calgota = mysqli_fetch_assoc($result);

?>