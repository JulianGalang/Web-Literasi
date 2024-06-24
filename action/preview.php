<?php 
include '../auth/koneksi.php';
require '../auth/session.php';

  $query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $nama = $row['nama'];
  $role = $row['role'];
  $profile = $row['gambar'];


  if(isset($_GET['idbuku'])){
    $idbuku = $_GET['idbuku'];
    $query = "SELECT * FROM karya WHERE id = '$idbuku'";
    $result = $c->query($query);
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $judul = $row['judul'];
    $tipe = $row['tipe'];
    $author = $row['author'];
    $sinopsis = $row['sinopsis'];
    $gambar = $row['gambar'];}

    if(isset($_GET['edit'])){
      $idbuku = $_GET['edit'];
      $query = "SELECT * FROM karya WHERE id = '$idbuku'";
      $result = $c->query($query);
      $row = $result->fetch_assoc();
      $id = $row['id'];
      $judul = $row['judul'];
      $tipe = $row['tipe'];
      $author = $row['author'];
      $sinopsis = $row['sinopsis'];
      $gambar = $row['gambar'];
    }

      if(isset($_GET['guest'])){
      $idbuku = $_GET['guest'];
      $query = "SELECT * FROM karya WHERE id = '$idbuku'";
      $result = $c->query($query);
      $row = $result->fetch_assoc();
      $id = $row['id'];
      $judul = $row['judul'];
      $tipe = $row['tipe'];
      $author = $row['author'];
      $sinopsis = $row['sinopsis'];
      $gambar = $row['gambar'];
    }


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
    <?php 
    if($role == 'admin'){
    ?>
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
        <?php 
    }elseif($role == 'guru'){
        ?>
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
        <?php
        }elseif($role == 'siswa'){
        ?>
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
        <?php
        }elseif($role == 'guest'){
        ?>
      <li>
        <div class="logo-details">
          <i class="bx bx-book-open"></i>
          <span class="logo_name">Guest</span>
        </div>
        <ul class="nav-links">
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
        <?php 
        }
        ?>
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
              <div class="profile_name" style="white-space: normal; word-wrap: break-word;"><?=$nama?></div>
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
        <span class="text">Rincian Buku</span>
      </div>
      <div class="container container-fluid d-flex align-items-center bg-light rounded-4 mt-5">
        <div class="d-flex flex-column w-50">
          <div class="d-flex flex-row justify-content-center">
            <img src="../file/<?=$gambar?>" class="img-fluid m-3 w-100">
          </div>
        </div>
        <div class="d-flex flex-column w-50 pt-4">
          <div class="d-flex flex-row justify-content-center align-top">
            <h1 class="text-center"><?=$judul?></h1>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <p class="text-center mb-1"><?=$tipe?></p>
            <p class="text-center mb1">Sinopsis Buku</p>
            <p class="text-start p-2 pt-0"><?=$sinopsis?></p>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <p class="text-center mb-1"><?=$author?></p>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <?php 
            if(isset($_GET['edit'])){
            ?>
            <a href="../action/baca.php?idbuku=<?=$id?>" class="btn btn-primary w-100 m-3">Baca Buku</a>
            <a href="../action/pratinjau.php?edit=<?=$id?>" class="btn btn-primary w-100 m-3">Edit Buku</a>
            <?php 
            }else{
            ?>
            <a href="../action/baca.php?idbuku=<?=$id?>" class="btn btn-primary w-100 m-3">Baca Buku</a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      </div>
      
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h3>Komentar</h3>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="comment">Komentar</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary w-100" name="submit" >Kirim Komentar</button>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h3>Komentar:</h3>
                <div class="container p-3 ">
                  <?php
                  
                    $sql = "SELECT * FROM komentar WHERE idbuku = '$idbuku'";
                    $result = $c->query($sql);
                    $comments = $result->fetch_all(MYSQLI_ASSOC);
                    
                  if(!empty($comments)){
                    foreach($comments as $comment){
                      $username = $comment['username'];
                      $sql_user = "SELECT * FROM user WHERE username = '$username'";
                      $result_user = $c->query($sql_user);
                      $user = $result_user->fetch_assoc();
                      $nama = $user['nama'];
                      if($user['gambar']){
                      echo "<div class='d-flex'><img src='../file/". $user['gambar'] . "' alt='profile' class='rounded-circle me-3' style='width: 50px; height: 50px;'>";
                      }else{
                        $random_color = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                        $initials = substr($nama, 0, 2);
 
                      echo "<div class='d-flex'><img src='https://place-hold.it/500x500/'.$random_color.'/white&text='.$initials.'&fontsize=250' alt='profile' class='rounded-circle me-3' style='width: 50px; height: 50px;'>";
                      }
                      echo "<p style='white-space: normal; word-wrap: break-word; max-width: 100%;' class='mt-2 mb-5'>" . $nama . ": " . $comment['komentar'] . "</p></div>";
                    }
                  }else{
                    echo "<p>Belum ada komentar.</p>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col">
            
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

if(isset($_POST['submit'])){

  $comment = $_POST['comment'];
  $username = $_SESSION['username'];
  $sql = "INSERT INTO komentar (idbuku, username, komentar) VALUES ('$idbuku', '$username', '$comment')";
  $result = $c->query($sql);

  if($result){
    echo "<script>alert('Komentar Terkirim')
    window.location.href = 'preview.php?idbuku=$idbuku';</script>";
  }
}

?>