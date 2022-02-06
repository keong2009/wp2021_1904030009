<?php
require "functions.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
if (hapusbuku($id) > 0) {
  echo
  "<script>
  alert('Buku berhasil di hapus');
  document.location.href = 'buku.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
 </script>";
}
