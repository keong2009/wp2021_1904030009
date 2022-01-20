<html>
<head>
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Membuat Array</h1>
    <?php
    $values = array(1,2,3,4,5.50);
    var_dump($values);

    echo"<br>";
    echo($values[4]);

    echo"<br>";

    $prodi = ["T.Sipil","T.Industri","T.Kimia","T.Informatika"];
    var_dump($prodi);
    echo"<br>";
    echo "$prodi[3]";

    echo"<br>";
    // mengganti isi value
    $prodi[2] = "T.Nuklir";
    var_dump($prodi);
    echo"<br>";

    // menambahkan value
    $prodi[] = "T.Komputer";
    var_dump($prodi);
    echo"<br>";

    // menghapus salah satu value
    unset($prodi[2]);
    var_dump($prodi);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($prodi));

    ?>
<hr>
<h1>Map dengan array</h1>
<?php

$djamaludin = array(
             "id" => "pakjems",
             "nama" => "Djamaludin",
             "umur" => 40,
             "alamat" => [
                 "kota" => "Tangerang",
                 "prov" => "Banten"
             ]      
                   );
var_dump($djamaludin);
echo"<br>";
$sukisno = array(
                "id" => "maskis",
                "nama" => "Sukisno NHP",
                "umur" => 38,
                "alamat" => [
                    "kota" => "Pandeglang",
                    "prov" => "Banten"
                ]
                );
var_dump($sukisno);
echo"<br>";

echo("nama id : " . $djamaludin["id"]);
echo"<br>";
echo("nama lengkap : " . $djamaludin["nama"]);
echo"<br>";
echo("umur : " . $djamaludin["umur"]);
echo"<br>";

echo("nama id : " . $sukisno["id"]);
echo"<br>";
echo("nama lengkap : " . $sukisno["nama"]);
echo"<br>";
echo("umur : " . $sukisno["umur"]);
echo"<br>";

?>

<hr>
<h1>Operator Matematika</h1>

<?php
$tambah = 2740 + 1234444;
$kurang = 2467 - 357;
$kali = 208*109;
$bagi = 3100 / 20;
$modular = 998 % 3;
$pangkat = 300**2;
echo "tambah : " . $tambah . "<br>";
echo "kurang : " . $kurang . "<br>";
echo "kali : " . $kali . "<br>";
echo "bagi : " . $bagi . "<br>";
echo "modular : " . $modular . "<br>";
echo "pangkat : " . $pangkat . "<br>";
?>

<hr>
<h2>Increment</h2>
<?php
$b = 95;
$b++;
$b--;
$b--;
$b--;
$b--;
$b--;
$b--;
echo($b);

?>




</body>
</html>

