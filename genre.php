<?php
include 'auth/koneksi.php';
require 'auth/session.php';
  $query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $role = $row['role'];

  if(isset($_GET['tipe'])){
    $title = $_GET['tipe'];}
?>
<!-- @format -->

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
                <li><a class="dropdown-item" href="action/settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-secondary genre fs-5 me-3">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <?php 
            $sql = mysqli_query($c, "SELECT DISTINCT tipe FROM karya order by tipe DESC");
            if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
              $tipe = $row["tipe"];
              ?>
              <li class="nav-item">
                <a class="nav-link" href="genre.php?tipe=<?= $tipe ?>"><?= $tipe ?></a>
              </li>
              <?php 
            }}
              ?>
          </ul>
        </div>
      </div>
    </nav>

    <style>
      .navbar-nav .nav-link {
        padding: 0.5rem 1rem;
      }
      @media (max-width: 768px) {
        .navbar-nav .nav-link {
          padding: 0.5rem;
        }
      }
    </style>



    <div class="container p-3">
      <h3 class="text-start" style="padding: 28px 0px 0px 15px">
        <span><?=$title?></span>
      </h3>
      <div class="row">
      <?php 
      if(isset($_GET['tipe'])){
      $tipe = $_GET['tipe'];
      $query = "SELECT * FROM karya WHERE tipe = '$tipe'";
      $sql = mysqli_query($c, $query);
      $result = mysqli_num_rows($sql);
      if($result > 0){
        while($row = mysqli_fetch_assoc($sql)){
          $id = $row['id'];
          $judul = $row['judul'];
          $author = $row['author'];
          $tipe = $row['tipe'];
          $cover = $row['gambar'];
          
          ?>

        <div class="col-md-3 col-sm-6 p-2">
          <div class="card h-100">
            <img
              src="../file/<?= $cover ?>"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title m-0"><?= $judul ?></h5>
              <p class="card-text">Author : <?= $author ?></span></p>
              <p class="card-text">Tipe : <?= $tipe ?></p>
              <a href="../action/preview.php?idbuku=<?= $id ?>" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php 
        }
      }else{
        ?>
          <h1 class="text-center mt-5">Buku Belum Tersedia</h1>
        <?php
      }
    } ?>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      window.addEventListener("scroll", function () {
        var navbar = document.querySelector(".genre");
        if (window.pageYOffset > 0) {
          navbar.classList.add("fixed-top");
        } else {
          navbar.classList.remove("fixed-top");
        }
      });
    </script>
  </body>
</html>
