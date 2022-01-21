<?php
require "functions.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: dosen.php");
  exit;
}

$id = $_GET['id'];
if (hapusdsn($id) > 0) {
  echo
  "<script>
  alert('data berhasil di hapus');
  document.location.href = 'dosen.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
 </script>";
}
