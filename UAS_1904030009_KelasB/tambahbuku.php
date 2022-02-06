<?php
//date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambahbuku($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di Tambah');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal diTambah');
    </script>";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS_1904030009_KELASB</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">PERPUS || UNIS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="text-white">
          <?php
          echo date('l, d-m-y');
          ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Sidebar -->
  <div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
      <!-- Menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="buku.php"><i class="fas fa-book"></i> Daftar Buku</a>
          <hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- Konten -->
      <h3><i class="fas fa-address-book"></i>Input Data Buku</h3>
      <hr>

      <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="judul">Judul Buku : </label>
          <input type="text" class="form-control" id="judul" placeholder="Input Judul lengkap" name="judul" autofocus required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="jenis_buku">Jenis Buku : </label>
          <input type="text" class="form-control" id="jenis_buku" placeholder="Input Jenis Buku" name="jenis_buku" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="qty">Jumlah Buku : </label>
          <input type="number" class="form-control" id="qty" placeholder="Input Jumlah Buku" name="qty" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="penerbit">Penerbit : </label>
          <input type="text" class="form-control" id="penerbit" placeholder="Input Penerbit" name="penerbit" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="no_rak">No. Rak : </label>
          <input type="text" class="form-control" id="no_rak" placeholder="No Rak" name="no_rak" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="foto_buku">Foto : </label>
          <input type="file" class="form-control" id="foto_buku" placeholder="Input foto buku" name="foto_buku" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
      </form>

      <!-- Akhir Konten -->
    </div>
  </div>
  <!-- Akhir Sidebar -->



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
