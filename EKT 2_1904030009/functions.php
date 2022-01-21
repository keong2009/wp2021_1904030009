<?php
$konn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// pemanggilan tabel
function query($query)
{
  global $konn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($konn, $query);

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
  global $konn;

  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "INSERT INTO calon_mhs
  VALUES
  (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function hapus($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}

function edit($data)
{
  global $konn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat =  htmlspecialchars($data['alamat']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $agama =  htmlspecialchars($data['agama']);
  $sekolah_asal =  htmlspecialchars($data['sekolah_asal']);
  $foto_maba =  htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mhs SET
  nama ='$nama',
  alamat ='$alamat',
  jenis_kelamin ='$jenis_kelamin',
  agama ='$agama',
  sekolah_asal ='$sekolah_asal',
  foto_maba ='$foto_maba'
  WHERE id =$id;";

  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function cari($keyword)
{
  global $konn;

  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function caridsn($keyword)
{
  global $konn;

  $query = "SELECT * FROM daftar_dosen WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function hapusdsn($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM daftar_dosen WHERE nidn =$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}
