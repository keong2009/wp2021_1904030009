    <html>pertemuan 3</html>
</head>
<body>
    <!-- PHP dalam HTML --> 
    <h1>Selamat Datang, <?php echo "Unisian"; ?></h1>

    <!-- tag HTML dalam php -->

    <?php echo "<h2>di Pembelajaran Web Programing</h2>";
    ?>
<hr> 
    <h2>Tipe data integer</h2> 

    <?php
    echo "Desimal : " ; var_dump(1900); echo "<br>";
    echo "Octa : " ; var_dump(012345); echo "<br>"; 
    echo "Hexadesimal : " ; var_dump(0x1f); echo "<br>";
    echo "Binary : " ; var_dump(0b11111); echo"<br>";
    echo "Underscore di nomor : " ; var_dump(1_500_000);
        echo "<br>";
        
    ?>

    <hr>
    <h2>variable</h2>
<?php
$namadepan = "Fridiyan";
$namabelakang = "Geri Suseno";
$mk = "Web Programing";
$nim = "1904030009";
$hobi = "Mencintai wanita";
$Umur = (0x17);
$Alamat = "Kp. Jati Kel. Jatiuwung Kec. Cibodas";
$Jeniskelamin = "Laki-Laki";
$ttl = "Ciamis, 24-07-1998";
$NoHp = "08953488xxx";
?>

<h4>Identitas diri</h4>
<p>Nama : <?php echo $namadepan ." ". $namabelakang; ?></p>
<p>Mata kuliah : <?php echo $mk; ?></p>
<p>NIM : <?php echo $nim ?></p>
<p>Hobi : <?php echo $hobi ?></p>
<p>Umur : <?php echo $Umur ?></p>
<p>Alamat : <?php echo $Alamat ?></p>
<p>Jenis Kelamin : <?php echo $Jeniskelamin ?></p>
<p> Tempat Tanggal Lahir : <?php echo $ttl ?></p>
<p>Nomer Hp : <?php echo $NoHp ?></p>

</body>
</html> 