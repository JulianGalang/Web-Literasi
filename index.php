<?php
include 'auth/koneksi.php';
require 'auth/session.php';

  $query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $role = $row['role'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .carousel-item {
        height: 26rem;
        background: #000;
        color: white;
        position: relative;
      }
      .carousel-inner .container {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 50px;
      }
      .overlay-image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-position: center;
        background-size: cover;
        opacity: 0.5;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CodeLiterasi</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-5 me-5" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <?php 
            if($role == "guest") {
            ?>
            <a class="nav-link active" aria-current="page" href="index.php"
              >Home</a
            >
            <a class="nav-link" href="genre.php?tipe=puisi">Genre</a>
            <?php
            }else{
            ?>
            <a class="nav-link active" aria-current="page" href="index.php"
              >Home</a
            >
            <a class="nav-link" href="genre.php?tipe=puisi">Genre</a>
            <a class="nav-link" href="dashboard/dashboard.php">Upload</a>
            <?php
            } ?>
          </div>
          <div class="navbar-nav ms-auto">
            <div class="dropdown">
              <button class="btn btn-success dropdown-toggle fs-5" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu dropdown-menu-end fs-5" aria-labelledby="dropdownMenuButton">
                <?php 
                if($role == "admin"){
                ?>
                <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                <?php 
                }else{?>
                <li><a class="dropdown-item" href="action/settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div
            class="overlay-image"
            style="background-image: url(./assets/carousel1.jpg)"
          ></div>
          <div class="container">
            <h1>Membangun literasi siswa/siswi</h1>
            <p>
              Dibuatnya website ini untuk meningkatkan kreatifitasan anak, dan juga ketertarikannya dalam membaca karya karya orang terkenal
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div
            class="overlay-image"
            style="background-image: url(./assets/carousel2.jpg)"
          ></div>
          <div class="container">
            <h1>Menyimpan Tugas</h1>
            <p>
              Para siswa bisa menyimpan tugas tugasnya diwebsite ini seperti catatan tugas, ensiklopedia, biografi dari sosok pahlawan indonesia dll. Nanti karyanya bisa dilihat oleh khalayak umum.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div
            class="overlay-image"
            style="background-image: url(./assets/carousel3.jpg)"
          ></div>
          <div class="container">
            <h1>Siapa pun bisa</h1>
            <p>
              Selain siswa/siswi, guru juga bisa menyimpan tugas tugasnya di website ini, mungkin karya karya ilmiah hasil penelitian, panduan/tutorial, catatan tugas, ensiklopedia dll.
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container p-3">
      <?php 
      $sql = mysqli_query($c, "SELECT DISTINCT tipe FROM karya order by tipe DESC");
      if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
          $tipe = $row["tipe"];
          $query = "SELECT * FROM karya WHERE tipe = '$tipe' order by id desc";
          $sql1 = mysqli_query($c, $query);
          if(mysqli_num_rows($sql1) > 0){
      ?>
        <h3 class="text-start" style="padding: 28px 0px 0px 15px">
          <span><?= $tipe ?></span>
        </h3>
        <div class="row">
          <?php 
          while($col = mysqli_fetch_assoc($sql1)){
            $id = $col['id'];
            $judul = $col['judul'];
            $author = $col['author'];
            $type = $col['tipe'];
            $cover = $col['gambar'];
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 p-2">
              <div class="card h-100">
                <img
                  src="../file/<?= $cover ?>"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title m-0"><?= $judul ?></h5>
                  <p class="card-text">Author : <?= $author ?></p>
                  <p class="card-text">Tipe : <?= $type ?></p>
                  <a href="../action/preview.php?idbuku=<?= $id ?>" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
            <?php 
          }
          }
        }
      } ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
