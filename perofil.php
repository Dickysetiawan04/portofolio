<?php
//
include "./koneksi.php";

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="index1.css" />
  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#3c7aaf;">

    <div class="container">
      <a class="navbar-brand" href="#">dicky setiawan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarnav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutme">profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galery">galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--jumbotron-->
  <div class="jumbotron mt-5 text-center" id="home">
    <img src="img/unnamed.jpg" alt="gambar saya" class="rounded-circle img-thumbnail" width="200px">
    <h1 class="display-4">DICKY SETIAWAN</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
      featured content or information.</p>


  </div>
  <!--akhir jumbotron-->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="    #3c7aaf" fill-opacity="1"
      d="M0,160L20,170.7C40,181,80,203,120,181.3C160,160,200,96,240,101.3C280,107,320,181,360,213.3C400,245,440,235,480,197.3C520,160,560,96,600,96C640,96,680,160,720,197.3C760,235,800,245,840,261.3C880,277,920,299,960,293.3C1000,288,1040,256,1080,224C1120,192,1160,160,1200,122.7C1240,85,1280,43,1320,37.3C1360,32,1400,64,1420,80L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
      ></path>
  </svg>

  <br><br>
  <!--about me-->
  <div class="container mt-5" id="aboutme">
    <div class="row mt-5">
      <div class="col">
        <h2 class="text-center">about me</h2>
      </div>
    </div>

    <div class="row mt-5">
      <?php 
                    $querysql="SELECT * FROM aboutme ORDER BY tanggal DESC";
                    $query = mysqli_query($connect,$querysql);
                    ?>
      <?php $no=1; foreach($query as $about):?>
      <div class="col">
        <?php echo $about['content'];?>
      </div>
      <?php endforeach;?>

    </div>
  </div>

  <br><br>
  <!--galery-->
  <div class="container" id="galery">
    <div class="row">
      <h2 class="text-center">galeri</h2>
      <?php 
                    $querysql="SELECT * FROM galery ORDER BY tanggal DESC";
                    $query = mysqli_query($connect,$querysql);
                    ?>
                    <?php $no=1; foreach($query as $galeri):?>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $galeri['gambar'];?>" class="card-img-top" alt="gambar">

          <div class="card-body">
            <h5 class="card-title"><?php echo $galeri['judul'];?></h5>
            <p class="card-text"><?php echo $galeri['deskripsi'];?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
  </div>

  <br><br><br>
  <!--amd galery-->


  <!--contact-->
  <form action="./tambahkontak.php" method="POST">
    <div class="container" id="contact">
      <div class="mb-3">
        <h2 class="text-center">contact</h2>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="your name">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
            placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
          <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-info" name="contact" value="isi">Contact me</button></div>
  </form>
  <!--and contact-->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
