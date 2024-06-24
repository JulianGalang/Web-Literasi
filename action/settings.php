<?php 
include '../auth/koneksi.php';
require '../auth/session.php';

  $query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $id = $row['id'];
  $nama = $row['nama'];
  $role = $row['role'];
  $telepon = $row['telepon'];
  $gambar = $row['gambar'];
  if($role == "guru"){
      $nuptk = $row['nuptk'];
  }elseif($role == "siswa"){
      $nisn = $row['nisn'];
  }
  $username = $row['username'];
  $oldpassword = $row['password'];

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
              if ($gambar) {
                echo '<img src="../file/'.$gambar.'" alt="profileImg" />';
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
        <span class="text">Pengaturan</span>
      </div>
      <div class="container container-fluid d-flex align-items-center bg-light rounded-4 mt-5">
        <div class="d-flex flex-column w-50">
          <div class="d-flex flex-row justify-content-center">
            <?php
              if ($gambar) {
                echo '<img src="../file/'.$gambar.'" alt="profileImg" class="img-fluid m-3" />';
              } else {
               $random_color = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                $initials = substr($nama, 0, 2);
                echo '<img src="https://place-hold.it/500x500/'.$random_color.'/white&text='.$initials.'&fontsize=250" alt="profileImg class="img-fluid m-3"" />';
              }
              ?>
          </div>
        </div>
        <div class="d-flex flex-column w-50 pt-4">
          <div class="d-flex flex-row justify-content-center align-top">
            <h1 class="text-center pt-5">Pengaturan Akun</h1>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <form action="../action/settings.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                        <?php if(!empty($gambar)): ?>
                        <label class="form-label fs-5 mt-3">Foto Cover</label>
                        <input type="file" name="foto" class="form-control" >
                        <input type="hidden" name="foto_lama" value="<?=$gambar?>">
                    <?php else: ?>
                        <label class="form-label fs-5 mt-3">Foto Cover</label>
                        <input type="file" name="foto" class="form-control" >
                    <?php endif; ?>
              </div>
              
                  <?php 
                  if($role == 'guru'){
                  ?>
                    <div class="mb-3">
                    <label for="nama" class="form-label fs-5 mt-3">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?=$nama?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="telepon" class="form-label fs-5 mt-3">Telepon</label>
                      <input type="number" name="telepon" class="form-control" value="<?=$telepon?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="nuptk" class="form-label fs-5 mt-3">NUPTK</label>
                      <input type="text" name="nuptk" class="form-control" value="<?=$nuptk?>" required>
                      </div>
                    <div class="mb-3">
                      <label for="username" class="form-label fs-5 mt-3">Username</label>
                      <input type="text" name="newusername" class="form-control" value="<?=$username?>" required>
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label fs-5 mt-3">Password Lama <span class="text-danger">(opsional)</span></label>
                    <input type="password" name="password" class="form-control">
                    <label for="repassword" class="form-label fs-5 mt-3">Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repassword" class="form-control">
                    <label for="repasswords" class="form-label fs-5 mt-3">Ulangi Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repasswords" class="form-control">
                      <?php
                  }elseif($role == 'siswa'){
                  ?>
                  <div class="mb-3">
                    <label for="nama" class="form-label fs-5 mt-3">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?=$nama?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="telepon" class="form-label fs-5 mt-3">Telepon</label>
                      <input type="number" name="telepon" class="form-control" value="<?=$telepon?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="nisn" class="form-label fs-5 mt-3">NISN</label>
                      <input type="text" name="nisn" class="form-control" value="<?=$nisn?>" required>
                      </div>
                    <div class="mb-3">
                      <label for="username" class="form-label fs-5 mt-3">Username</label>
                      <input type="text" name="newusername" class="form-control" value="<?=$username?>" required>
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label fs-5 mt-3">Password Lama <span class="text-danger">(opsional)</span></label>
                    <input type="password" name="password" class="form-control">
                    <label for="repassword" class="form-label fs-5 mt-3">Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repassword" class="form-control">
                    <label for="repasswords" class="form-label fs-5 mt-3">Ulangi Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repasswords" class="form-control">
                  <?php
                  }elseif($role == 'guest'){
                  ?>
                    <div class="mb-3">
                      <label for="nama" class="form-label fs-5 mt-3">Nama</label>
                      <input type="text" name="nama" class="form-control" value="<?=$nama?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="telepon" class="form-label fs-5 mt-3">Telepon</label>
                      <input type="number" name="telepon" class="form-control" value="<?=$telepon?>" required>
                    </div>
                                        <div class="mb-3">
                      <label for="username" class="form-label fs-5 mt-3">Username</label>
                      <input type="text" name="newusername" class="form-control" value="<?=$username?>" required>
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label fs-5 mt-3">Password Lama <span class="text-danger">(opsional)</span></label>
                    <input type="password" name="password" class="form-control">
                    <label for="repassword" class="form-label fs-5 mt-3">Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repassword" class="form-control">
                    <label for="repasswords" class="form-label fs-5 mt-3">Ulangi Password Baru<span class="text-danger">(opsional)</span></label>
                    <input type="password" name="repasswords" class="form-control">
            </div>
            <?php 
            }?>
              <button type="submit" class="btn btn-primary mt-1 form-control" name="edit">Submit</button>
            </form>
          </div>
          <div class="d-flex justify-content-center align-items-center">
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

if(isset($_POST['edit'])){
if($role == 'guru'){
    $newusername = $_POST['newusername'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $nuptk = $_POST['nuptk'];
    }elseif($role == 'siswa'){
    $newusername = $_POST['newusername'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $nisn = $_POST['nisn'];
    }elseif($role == 'guest'){
    $newusername = $_POST['newusername'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    }

    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'] ;
    move_uploaded_file($file_tmp, '../file/'.$foto);


      if($username == $newusername and $_POST['password'] == "" and $_POST['repassword'] == "" and $_POST['repasswords'] == ""){
        if(!empty($foto)){
          if($role == 'guru'){
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon', nuptk = '$nuptk', gambar = '$foto' WHERE id = '$id'";
    
          }elseif($role == 'siswa'){
    
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon', nisn = '$nisn', gambar = '$foto' WHERE id = '$id'";
    
          }elseif($role == 'guest'){
    
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon',  gambar = '$foto' WHERE id = '$id'";
    
          }
          $query = mysqli_query($c, $update);
                if($query){
                echo '
                      <script>
                      alert("Berhasil diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
                }else{
                echo '
                      <script>
                      alert("Gagal diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
                }
        }else{
          if($role == 'guru'){
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon', nuptk = '$nuptk' WHERE id = '$id'";
    
          }elseif($role == 'siswa'){
    
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon', nisn = '$nisn' WHERE id = '$id'";
    
          }elseif($role == 'guest'){
    
                $update = "UPDATE user SET nama = '$nama', telepon = '$telepon' WHERE id = '$id'";
    
          }
          $query = mysqli_query($c, $update);
                if($query){
                echo '
                      <script>
                      alert("Berhasil diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
                }else{
                echo '
                      <script>
                      alert("Gagal diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
                }
        }
      }elseif($username != $newusername and $_POST['password'] == "" and $_POST['repassword'] == "" and $_POST['repasswords'] == ""){
        if(!empty($foto)){
      if($role == 'guru'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon', nuptk = '$nuptk', gambar = '$foto' WHERE id='$id'";          

        
      }elseif($role == 'siswa'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon', nisn = '$nisn', gambar = '$foto' WHERE id = '$id'";          
 
      }elseif($role == 'guest'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon',  gambar = '$foto' WHERE id = '$id'";          
   
        }
          $query = mysqli_query($c, $update);
            if($query){
                echo '
                      <script>
                      alert("Berhasil diedit");
                      window.location.href="../auth/logout.php"
                      </script>
                      ';
            }else{
                echo '
                      <script>
                      alert("Gagal diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
            }
        }else{
          if($role == 'guru'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon', nuptk = '$nuptk' WHERE id='$id'";          

        
          }elseif($role == 'siswa'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon', nisn = '$nisn' WHERE id = '$id'";          
 
          }elseif($role == 'guest'){

            $update = "UPDATE user SET username = '$newusername', nama = '$nama', telepon = '$telepon' WHERE id = '$id'";          
   
        }
          $query = mysqli_query($c, $update);
            if($query){
                echo '
                      <script>
                      alert("Berhasil diedit");
                      window.location.href="../auth/logout.php"
                      </script>
                      ';
            }else{
                echo '
                      <script>
                      alert("Gagal diedit");
                      window.location.href="../index.php"
                      </script>
                      ';
            }
        }
        
      }elseif($username == $newusername and $_POST['password'] == $oldpassword and $_POST['repassword'] ==  $_POST['repasswords']){
      $newpassword = $_POST['repasswords'];
      if(!empty($foto)){
        if($role == 'guru'){
        
            $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nuptk = '$nuptk', gambar = '$foto' WHERE id = '$id'";          
        
        }elseif($role == 'siswa'){
        
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nisn = '$nisn', gambar = '$foto' WHERE id = '$id'";

        }elseif($role == 'guest'){
        
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', gambar = '$foto' WHERE id = '$id'";        
      
        }
           $query = mysqli_query($c, $update);
            if($query){
            echo '
                  <script>
                  alert("Berhasil diedit");
                  window.location.href="../auth/logout.php"
                  </script>
                  ';
            }else{
            echo '
                  <script>
                  alert("Gagal diedit");
                  window.location.href="../index.php"
                  </script>
                  ';
            }
      }else{
        if($role == 'guru'){
        
            $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nuptk = '$nuptk' WHERE id = '$id'";          
        
      }elseif($role == 'siswa'){
        
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nisn = '$nisn' WHERE id = '$id'";

      }elseif($role == 'guest'){
        
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon' WHERE id = '$id'";        
      
    }
      $query = mysqli_query($c, $update);
            if($query){
            echo '
                  <script>
                  alert("Berhasil diedit");
                  window.location.href="../auth/logout.php"
                  </script>
                  ';
            }else{
            echo '
                  <script>
                  alert("Gagal diedit");
                  window.location.href="../index.php"
                  </script>
                  ';
            }
      }
      
      }elseif($username != $newusername and $_POST['password'] == $oldpassword and $_POST['repassword'] ==  $_POST['repasswords']){
      $newpassword = $_POST['repasswords'];
        if(!empty($foto)){
        if($role == 'guru'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nuptk = '$nuptk', gambar = '$foto' WHERE id = '$id'";
        }elseif($role == 'siswa'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nisn = '$nisn', gambar = '$foto' WHERE id = '$id'";
        }elseif($role == 'guest'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', gambar = '$foto' WHERE id = '$id'";
        }
        $query = mysqli_query($c, $update);
            if($query){
            echo '
                  <script>
                  alert("Berhasil diedit");
                  window.location.href="../auth/logout.php"
                  </script>
                  ';
            }else{
            echo '
                  <script>
                  alert("Gagal mengedit");
                  window.location.href="../action/settings.php";
                  </script>
                  ';
      }
      }else{
        if($role == 'guru'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nuptk = '$nuptk' WHERE id = '$id'";
        }elseif($role == 'siswa'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon', nisn = '$nisn' WHERE id = '$id'";
        }elseif($role == 'guest'){
          $update = "UPDATE user SET username = '$newusername', password = '$newpassword' , nama = '$nama', telepon = '$telepon' WHERE id = '$id'";
          }
            $query = mysqli_query($c, $update);
            if($query){
            echo '
                  <script>
                  alert("Berhasil diedit");
                  window.location.href="../auth/logout.php"
                  </script>
                  ';
            }else{
            echo '
                  <script>
                  alert("Gagal mengedit");
                  window.location.href="../action/settings.php";
                  </script>
                  ';
      }
      }
      
    }else{
            echo '
                  <script>
                  alert("Gagal mengedit");
                  window.location.href="../index.php";
                  </script>
                  ';
    }
  }
      
    
?>
