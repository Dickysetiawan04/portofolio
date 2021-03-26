<?php
// Proses nya jadi satu dengan file nya
include "./koneksi.php";

if(isset($_POST['tambahgalery'])){
  $judul = $_POST['judul'];
  $gambar = $_POST['gambar'];
  $deskripsi = $_POST['deskripsi'];
  $insertquery = "INSERT INTO `galery` (`gambar`, `judul`, `deskripsi`, `tanggal`) VALUES ('$judul', '$gambar', '$deskripsi', CURRENT_TIMESTAMP);";
  $query = mysqli_query($connect,$insertquery);
  // kondisi jika gagal dan berhasil
  if ($query) {
header('Location: galery.php');
  }else{
   echo "<script>alert('data gagal di tambahkan');</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar navbar container -->
    <?php require "./component/navbar.php";?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- Include custom component of sidebar -->
    <?php include "./component/sidebar.php";?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 p-5">
            <form action=" " method="POST">
              <!-- your steps content here -->
              <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" name="Judul" id="exampleInputEmail1"
                    placeholder="Masukkan Judul" required>
                </div>
                <hr>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gambar</label>
                  <input type="text" class="form-control" name="gambar" id="exampleInputPassword1"
                    placeholder="Masukkan Link Gambar" required>
                </div>
                <hr>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10" required></textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary btn-block" value="tambah" name="tambahgalery">Tambah
                  Galery</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
    </div>
    </section>
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b>
    </div>
    <strong>Copyright &copy; 2021 <a href="#">Program</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>
