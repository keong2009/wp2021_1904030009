<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030009');

// pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  global $conn;


  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_tlp = htmlspecialchars($data['no_tlp']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $foto = '';
  // $foto_anggota = htmlspecialchars($data['foto_anggota']);
  if ($_FILES["foto_anggota"]["size"] > 0) {
    // upload($_FILES["foto_anggota"],'anggota');


    $target_dir = "image/anggota/";
    $target_file = $target_dir . basename($_FILES["foto_anggota"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // print_r($imageFileType);die();
    $filename = time().'.'.$imageFileType;
    $uploadOk = 1;

    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    move_uploaded_file($_FILES["foto_anggota"]["tmp_name"], $target_dir.$filename);

    $foto = $filename;
  }

  $query = "INSERT INTO anggota
  VALUES
  (null,'$nama','$jenis_kelamin','$no_tlp','$alamat','$foto');";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM anggota WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_tlp = htmlspecialchars($data['no_tlp']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $foto = htmlspecialchars($data['foto']);

  if ($_FILES["foto_anggota"]["size"] > 0) {

  // if(isset($_FILES["foto_anggota"]) && !empty($_FILES["foto_anggota"])){
    // print_r($_FILES["foto_anggota"]);
    // upload($_FILES["foto_anggota"],'anggota');

    $target_dir = "image/anggota/";
    $target_file = $target_dir . basename($_FILES["foto_anggota"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // print_r($imageFileType);die();
    $filename = time().'.'.$imageFileType;
    $uploadOk = 1;

    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }
    move_uploaded_file($_FILES["foto_anggota"]["tmp_name"], $target_dir.$filename);
    $foto = $filename;
  }

  $query = "UPDATE anggota SET
  nama ='$nama',
  no_tlp ='$no_tlp',
  alamat ='$alamat',
  jenis_kelamin ='$jenis_kelamin',
  foto ='$foto'
  WHERE id =$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM anggota WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  // return $rows;
  return $conn->query($query);
}

function tambahbuku($data)
{
  global $conn;


  $judul = htmlspecialchars($data['judul']);
  $jenis_buku = htmlspecialchars($data['jenis_buku']);
  $qty = htmlspecialchars($data['qty']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $no_rak = htmlspecialchars($data['no_rak']);
  $foto = '';
  // $foto_anggota = htmlspecialchars($data['foto_anggota']);
  if ($_FILES["foto_buku"]["size"] > 0) {
  // if(isset($_FILES["foto_buku"]) && !empty($_FILES["foto_buku"])){
    // upload($_FILES["foto_anggota"],'anggota');


    $target_dir = "image/buku/";
    $target_file = $target_dir . basename($_FILES["foto_buku"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // print_r($imageFileType);die();
    $filename = time().'.'.$imageFileType;
    $uploadOk = 1;

    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    move_uploaded_file($_FILES["foto_buku"]["tmp_name"], $target_dir.$filename);

    $foto = $filename;
  }

  $query = "INSERT INTO buku
  VALUES
  (null,'$judul','$jenis_buku','$qty','$penerbit','$foto','$no_rak');";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editbuku($data)
{
  global $conn;

  $id = $data['id'];
  $judul = htmlspecialchars($data['judul']);
  $jenis_buku = htmlspecialchars($data['jenis_buku']);
  $qty = htmlspecialchars($data['qty']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $no_rak = htmlspecialchars($data['no_rak']);
  $foto = htmlspecialchars($data['foto']);
  // $foto_anggota = htmlspecialchars($data['foto_anggota']);
  if ($_FILES["foto_buku"]["size"] > 0) {
  // if(isset($_FILES["foto_buku"]) && !empty($_FILES["foto_buku"])){
    // upload($_FILES["foto_anggota"],'anggota');


    $target_dir = "image/buku/";
    $target_file = $target_dir . basename($_FILES["foto_buku"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // print_r($imageFileType);die();
    $filename = time().'.'.$imageFileType;
    $uploadOk = 1;

    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    move_uploaded_file($_FILES["foto_buku"]["tmp_name"], $target_dir.$filename);

    $foto = $filename;
  }

  $query = "UPDATE buku SET
  judul ='$judul',
  jenis_buku ='$jenis_buku',
  qty ='$qty',
  penerbit ='$penerbit',
  foto ='$foto',
  no_rak ='$no_rak'
  WHERE id =$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function caribuku($keyword)
{
  global $conn;

  $query = "SELECT * FROM buku WHERE judul LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  // return $rows;
  return $conn->query($query);
}
//
// function hapusbuku($id)
// {
//   global $conn;
//   mysqli_query($conn, "DELETE FROM buku WHERE id =$id") or die(mysqli_error($konn));
//   return mysqli_affected_rows($conn);
// }
function hapusbuku($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
