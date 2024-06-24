<?php
include "../auth/koneksi.php";
require "../auth/session.php";

$query = "SELECT * FROM user WHERE username = '" . $_SESSION["username"] . "'";
$result = $c->query($query);
$row = $result->fetch_assoc();
$nama = $row["nama"];
$role = $row["role"];
  $profile = $row['gambar'];

if(isset($_GET['action'])){
    $action = $_GET['action'];
if($action == "pribadi"){
    $h1 = mysqli_query($c, "SELECT * FROM karya where author = '$nama'");
    $query_tipe = "SELECT DISTINCT tipe FROM karya where author = '$nama'";
}}else{
    $h1 = mysqli_query($c, "SELECT * FROM karya");
    $query_tipe = "SELECT DISTINCT tipe FROM karya";}


$karya = mysqli_num_rows($h1);

// Menghitung jumlah tipe yang sudah diinputkan
$result_tipe = $c->query($query_tipe);
$jumlah_tipe = mysqli_num_rows($result_tipe);

?>
<!-- @format -->

<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard Owner</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <!-- Boxiocns CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body style="background: #e4e9f7;">
    <div class="sidebar close">
    <?php if ($role == "admin") { ?>
      <div class="logo-details">
        <i class="bx bx-book-open"></i>
        <span class="logo_name">Admin</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="../dashboard/dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#" disable>
              <i class="bx bx-shield-plus"></i>
              <span class="link_name">Auth</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Auth</a></li>
            <li><a href="../action/account.php?role=guru">Verifikasi Guru</a></li>
            <li><a href="../action/account.php?role=siswa">Verifikasi Siswa</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="bx bxs-bookmark-star"></i>
              <span class="link_name">Karya</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Karya</a></li>
            <li><a href="../action/karya.php">Lihat Karya</a></li>
            <li><a href="../action/tambah.php">Tambah Karya</a></li>
            <li><a href="../action/karya.php?action=pribadi">Karya Pribadi</a></li>
          </ul>
        </li>
        <li>
          <a href="../index.php">
            <i class="bx bx-home-alt"></i>
            <span class="link_name">Home</span>
          </a>
        </li>
        <?php } elseif ($role == "guru") { ?>
        <li>
      <div class="logo-details">
        <i class="bx bx-book-open"></i>
        <span class="logo_name">Guru</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="../dashboard/dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#" disable>
              <i class="bx bx-shield-plus"></i>
              <span class="link_name">Auth</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Auth</a></li>
            <li><a href="../action/account.php?role=siswa">Verifikasi Siswa</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="bx bxs-bookmark-star"></i>
              <span class="link_name">Karya</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Karya</a></li>
            <li><a href="../action/karya.php">Lihat Karya</a></li>
            <li><a href="../action/tambah.php">Tambah Karya</a></li>
            <li><a href="../action/karya.php?action=pribadi">Karya Pribadi</a></li>
          </ul>
        </li>
        <li>
          <a href="../index.php">
            <i class="bx bx-home-alt"></i>
            <span class="link_name">Home</span>
          </a>
        </li>
        <li>
          <a href="../action/settings.php">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Settings</span>
          </a>
        </li>
        <?php } elseif ($role == "siswa") { ?>
      <li>
        <div class="logo-details">
          <i class="bx bx-book-open"></i>
          <span class="logo_name">Siswa</span>
        </div>
        <ul class="nav-links">
        <li>
          <a href="../dashboard/dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
        </li>
          <li>
            <a href="../index.php">
              <i class="bx bx-home-alt"></i>
              <span class="link_name">Home</span>
            </a>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class="bx bxs-bookmark-star"></i>
                <span class="link_name">Karya</span>
              </a>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Karya</a></li>
              <li><a href="../action/karya.php">Lihat Karya</a></li>
              <li><a href="../action/tambah.php">Tambah Karya</a></li>
              <li><a href="../action/karya.php?action=pribadi">Karya Pribadi</a></li>

            </ul>
            </li>
            <li>
          <a href="../action/settings.php">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Settings</span>
          </a>
        </li>
        <?php } ?>
        <li>
          <div class="profile-details">
            <div class="profile-content">
              <?php
              if ($profile) {
                echo '<img src="../file/'.$profile.'" alt="profileImg" />';
              } else {
               $random_color = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                $initials = substr($nama, 0, 2);
                echo '<img src="https://place-hold.it/500x500/'.$random_color.'/white&text='.$initials.'&fontsize=250" alt="profileImg" />';
              }
              ?>
            </div>
            <div class="name-job">
              <div class="profile_name" style="white-space: normal; word-wrap: break-word;"><?= $nama ?></div>
              <div class="job" style="white-space: normal; word-wrap: break-word;"><?= $role ?></div>
            </div>
            <a href="../auth/logout.php">
            <i class="bx bx-log-out"></i>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Karya Karya</span>
      </div>
      <div class="container pt-5">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header text-center">Jumlah Karya</div>
              <div class="card-body p-3 text-center fs-5"><?= $karya ?></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header text-center">Jumlah Genre</div>
              <div class="card-body p-3 text-center fs-5"><?=$jumlah_tipe?></div>
            </div>
          </div>
        </div>
      <div class="card mb-4 mt-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Karya
        </div>
        <div class="container ">
        <div class="row pb-3">
          <?php
          if(isset($_GET['action'])){
            $action = $_GET['action'];
          if($action == "pribadi"){
            $query = "SELECT * FROM karya where author = '$nama' order by id desc";
          }}else{
              $query = "SELECT * FROM karya order by status desc";
          }
          // Menampilkan data buku sesuai kategori
          $result = mysqli_query($c, $query);

          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $idbuku = $row["id"]; ?>
          <div class="col-12 col-md-6 col-lg-4 p-2">
            <div class="card">
              <div class="card-header">
                <img
                  src="../file/<?php echo $row["gambar"]; ?>""
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body pt-5">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text m-0">Author : <?= $row["author"] ?></p>
                <p class="card-text m-0">Tipe   : <?= $row["tipe"] ?></p>
                <p class="card-text m-0">Status : <?= $row["status"] ?></p>
                <?php 
                if(isset($_GET['action'])){
                  $action = $_GET['action'];
                if($action == "pribadi"){

                ?>
                <a href="../action/preview.php?idbuku=<?= $idbuku ?>" class="btn btn-primary w-100">Selengkapnya</a>
                <a href="../action/preview.php?edit=<?= $idbuku ?>" class="btn btn-warning w-100 mt-2">Edit</a>
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-toggle="modal" data-bs-target="#hapus<?=$idbuku?>">
                  Delete
                </button>
                <?php 
                 }}else{
                   
                   ?>
                   <a href="../action/preview.php?idbuku=<?= $idbuku ?>" class="btn btn-primary w-100">Selengkapnya</a>
                  <?php
                }
                ?>
              </div>
                <div class="modal fade" id="hapus<?=$idbuku;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title">Hapus <?= $row["judul"] ?></h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>

                          <form method="post">
                              <!-- Modal body -->
                              <div class="modal-body">
                                  <p>Apakah anda yakin ingin menghapus akun ini ?</p>
                                  <input type="hidden" name="idbuku" value="<?=$idbuku;?>">
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="hapus">Submit</button>
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                              </div>
                          </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <?php }
          } else {
               ?>
          <div class="col-12 text-center mt-5">
            <h1>Buku Belum Tersedia</h1>
          </div>
        <?php
          }
          ?>
          </div>
        </div>
      </div>

    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script src="../assets/script.js"></script>
  </body>
</html>
<?php

if(isset($_POST['hapus'])){
  $idbuku = $_POST['idbuku'];
  $query = mysqli_query($c, "DELETE FROM karya WHERE id='$idbuku'");
  if($query){
    echo '
    <script>
    alert("Berhasil Menghapus Karya");
    window.location.href="../action/karya.php?action=pribadi"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Menghapus Karya");
    window.location.href="../action/karya.php?action=pribadi"
    </script>
    ';
  }  
  }

?>