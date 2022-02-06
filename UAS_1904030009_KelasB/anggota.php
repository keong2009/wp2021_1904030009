<?php
// date_default_timezone_set('Asia/Jakarta');

require 'functions.php';
// $calgota = query("SELECT * FROM anggota");
$result = $conn->query("SELECT * FROM anggota");
// print_r($result->num_rows);die();
// while($row = $result->fetch_assoc()) {
//   print_r($row);
// }
// die();

if (isset($_POST['cari'])) {
    $result = cari($_POST['keyword']);
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

        <!-- Header -->
        <header class="masthead d-flex align-items-center">
                <div class="container px-4 px-lg-5 text-center">
                    <h1 class="mb-1">PERPUS UNISIAN</h1>
                    <h3 class="mb-5"><em>Mari Membaca Buku</em></h3>
                    <!-- Sidebar -->
        <div class="row mt-4">
            <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
                <!-- Menu -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <hr class="bg-dark">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="anggota.php"><i class="fas fa-users"></i> Daftar Anggota</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="tambah.php"><i class="fas fa-user-edit"></i>  Input Anggota</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="buku.php"><i class="fas fa-book"></i>  Daftar Buku</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="tambahbuku.php"><i class="fas fa-address-book"></i>  Input Buku</a>
                        <hr>
                    </li>
                </ul>
            </div>

            <div class="col-md-10 p-5 pt-5">
                <!-- Konten -->
                <h3><i class="fas fa-users"></i>Daftar Anggota</h3>
                <hr>
                <!-- Pencarian data -->
                <form action="" method="POST">
                    <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
                    <button type="submit" class="btn btn-primary" name="cari">CARI</button>
                </form>

                <br>
                <hr>

                <!-- Akhir pencarian data -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Foto Anggota</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>

                    <?php if ($result->num_rows == 0) : ?>
                        <tr>
                            <td colspan="5" class="alert alert-danger text-center" role="alert">
                                <p><b>
                                        Data Anggota tidak ditemukan</p>
                                </b>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php
                          // print_r($calgota);
                        // foreach ($calgota as $cag) :
                          while($row = $result->fetch_assoc()) {
                            // print_r($cag);
                          ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['jenis_kelamin']; ?></td>
                                <td><img src="image/anggota/<?php echo $row['foto']; ?>" width="50px"></td>
                                <td>
                                  <a title="Lihat Detail Anggota" href="detail.php?id=<?= $row['id']; ?>" class="btn-sm btn-primary" role="button"><i class="fa fa-eye"></i></a>
                                  <a title="Ubah Anggota" href="edit.php?id=<?= $row['id']; ?>" class="btn-sm btn-warning" role="button"><i class="fa fa-pen"></i></a>
                                  <a title="Hapus Anggota" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');" class="btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $no++ ?>
                        <?php } ?>
                    </tbody>
                </table>
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
