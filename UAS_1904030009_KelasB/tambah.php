<?php
//date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

if (isset($_POST['tambah'])) {
  // print_r($_FILES);die();
  // $data = $_POST;
  if (tambah($_POST) > 0) {

    echo
    "<script>
    alert('data berhasil di Tambah');
    document.location.href = 'anggota.php';
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
          <a class="nav-link text-white" href="anggota.php"><i class="fas fa-users"></i> Daftar Anggota</a>
          <hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- Konten -->
      <h3><i class="fas fa-user-edit"></i>Input Data Calon Anggota</h3>
      <hr>

      <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama">Nama : </label>
          <input type="text" class="form-control" id="nama" placeholder="Nama lengkap" name="nama" autofocus required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="no_tlp">No. Telepon : </label>
          <input type="number" class="form-control" id="no_tlp" placeholder="No Telepon lengkap" name="no_tlp" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="alamat">Alamat : </label>
          <input type="text" class="form-control" id="alamat" placeholder="Alamat lengkap" name="alamat" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin">Jenis Kelamin : </label>
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <!-- <input type="text" class="form-control" id="jenis_kelamin" placeholder="Jenis kelamin" name="jenis_kelamin" required autocomplete="off"> -->
        </div>
        <!-- <div class="mb-3">
          <label for="foto_anggota">Foto : </label>
          <input type="text" class="form-control" id="foto_anggota" placeholder="Input foto anda" name="foto_anggota" required autocomplete="off">
        </div> -->

        <div class="mb-3">
          <label for="foto_anggota">Foto : </label>
          <input type="file" class="form-control" id="foto_anggota" placeholder="Input foto anda" name="foto_anggota" required autocomplete="off">
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
