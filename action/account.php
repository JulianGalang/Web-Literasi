<?php
require '../auth/koneksi.php';
require '../auth/session.php';

  $query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $nama = $row['nama'];
  $rolesession = $row['role'];
  $profile = $row['gambar'];

  if (isset($_GET['role'])) {
    $role = $_GET['role'];
    $h1 = mysqli_query($c, "SELECT * FROM user WHERE role = '$role' and verifikasi = 'D'");
    $h2 = mysqli_query($c, "SELECT * FROM user WHERE role = '$role' and verifikasi = 'P'");
    $done = mysqli_num_rows($h1);
    $pending = mysqli_num_rows($h2);
    ;
}


?>
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
    if($rolesession == 'admin'){
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
    }elseif($rolesession == 'guru'){
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
        }elseif($rolesession == 'siswa'){
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
        <span class="text">Zona Admin</span>
      </div>
      <div class="container pt-5">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header text-center">
                Jumlah Akun Terverifikasi
              </div>
              <div class="card-body p-3 text-center fs-5"><?=$done?></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header text-center">
                Jumlah Akun belum terverifikasi
              </div>
              <div class="card-body p-3 text-center fs-5"><?=$pending?></div>
            </div>
          </div>
        </div>
        <div class="card mb-4 mt-5">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Akun <?= $role ?>
          </div>
          <div class="card-body">
            <table id="datatablesSimple" class="table">
              <thead>
                <tr class="text-center">
                  <?php 
                  if($role=="guru"){
                  ?>
                  <th>ID Guru</th>
                  <th>Nama</th>
                  <th>Telepon</th>
                  <th>NUPTK</th>
                  <th>status</th>
                  <th>Aksi</th>
                  <?php
                  }else{
                  ?>
                  <th>ID Siswa</th>
                  <th>Nama</th>
                  <th>Telepon</th>
                  <th>NISN</th>
                  <th>status</th>
                  <th>Aksi</th>
                  <?php
                  }
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php 
                 $get = mysqli_query($c, "SELECT * FROM user WHERE role='$role' and verifikasi in ('D', 'P')");
                  while($p=mysqli_fetch_array($get)){
                  $id = $p['id'];
                  $nama = $p['nama'];
                  $telepon = $p['telepon'];
                  $verifikasi = $p['verifikasi'];

                  if($role == "guru"){
                    $nuptk = $p['nuptk'];
                  }else{
                    $nisn = $p['nisn'];
                  }
                  if($verifikasi == "D"){
                    $status = "Sudah Terverifikasi";
                  }elseif($verifikasi == "P"){
                    $status = "Belum Terverifikasi";
                  }
                  
                if($role=="guru"){
                  
                ?>
                <tr class="text-center">
                  <td><?=$id?></td>
                  <td><?=$nama?></td>
                  <td><?=$telepon?></td>
                  <td><?=$nuptk?></td>
                  <td><?=$status?></td>
                  <td>
                    <?php if($verifikasi == "P"){ ?>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verifikasi<?=$id?>">
                        Verifikasi
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$id?>">
                        Delete
                      </button>
                    <?php }else{ ?>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$id?>">
                        Edit
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$id?>">
                        Delete
                      </button>
                    <?php } ?>
                  </td>
                </tr>
                  <?php 
                  }else{
                  ?>
                <tr class="text-center">
                  <td><?=$id?></td>
                  <td><?=$nama?></td>
                  <td><?=$telepon?></td>
                  <td><?=$nisn?></td>
                  <td><?=$status?></td>
                  <td>
                    <?php if($verifikasi == "P"){ ?>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verifikasi<?=$id?>">
                        Verifikasi
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$id?>">
                        Delete
                      </button>
                    <?php }else{ ?>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$id?>">
                        Edit
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$id?>">
                        Delete
                      </button>
                    <?php }
                    } ?>
                </tr>
                <div class="modal fade" id="verifikasi<?=$id;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title">Verifikasi <?=$nama;?></h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>

                          <form method="post">
                              <!-- Modal body -->
                              <div class="modal-body">
                                  <p>Apakah anda yakin ingin menyetujui akun ini ?</p>
                                  <input type="hidden" name="iduser" value="<?=$id;?>">
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="verifikasi">Submit</button>
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                              </div>
                          </form>

                    </div>
                  </div>
                </div>
      
                <div class="modal fade" id="hapus<?=$id;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title">Hapus <?=$nama;?></h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>

                          <form method="post">
                              <!-- Modal body -->
                              <div class="modal-body">
                                  <p>Apakah anda yakin ingin menghapus akun ini ?</p>
                                  <input type="hidden" name="iduser" value="<?=$id;?>">
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

                <div class="modal fade" id="edit<?=$id;?>">
                  <div class="modal-dialog">
                       <div class="modal-content">

                      <!-- Modal Header -->
                       <div class="modal-header">
                          <h4 class="modal-title">Ubah <?=$nama;?></h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                       </div>

                        <form method="post">
                          <!-- Modal body -->
                           <?php
                            if($role == "guru"){
                           ?>
                            <div class="modal-body">
                              <input type="text" name="nama" id="" class="form-control" placeholder="Nama Guru" value="<?=$nama;?>">
                              <input type="text" name="telepon" id="" class="form-control mt-2" placeholder="No Telepon" value="<?=$telepon;?>">
                              <input type="text" name="nuptk" id="" class="form-control mt-2" placeholder="NUPTK" value="<?=$nuptk;?>">
                              <input type="hidden" name="iduser" value="<?=$id;?>">
                            </div>
                            
                          <!-- Modal footer -->
                            <div div class="modal-footer">
                              <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="edit">Submit</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            <?php
                            }else{
                              ?>
                            <div class="modal-body">
                              <input type="text" name="nama" id="" class="form-control" placeholder="Nama Siswa" value="<?=$nama;?>">
                              <input type="text" name="telepon" id="" class="form-control mt-2" placeholder="No Telepon" value="<?=$telepon;?>">
                              <input type="text" name="nisn" id="" class="form-control mt-2" placeholder="NISN" value="<?=$nisn;?>">
                              <input type="hidden" name="iduser" value="<?=$id;?>">
                            </div>
                            
                          <!-- Modal footer -->
                            <div div class="modal-footer">
                              <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="edit">Submit</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            <?php
                            }
                            ?>
                        </form>

                        </div>
                   </div>
                </div>
             <?php 
                };
                ?>

              </tbody>
            </table>
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

if(isset($_POST['verifikasi'])){
  $iduser = $_POST['iduser'];
  if($role == "guru"){
    $query = mysqli_query($c, "UPDATE user SET verifikasi='D' WHERE id='$iduser'");
    if($query){
    echo '
    <script>
    alert("Berhasil Terverifikasi");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Terverifikasi");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }
  }else{
    $query = mysqli_query($c, "UPDATE user SET verifikasi='D' WHERE id='$iduser'");
    if($query){
    echo '
    <script>
    alert("Berhasil Terverifikasi");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Terverifikasi");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }
  
}
}

if(isset($_POST['hapus'])){
  $iduser = $_POST['iduser'];
  $query = mysqli_query($c, "DELETE FROM user WHERE id='$iduser'");
  if($role == "guru"){
  if($query){
    echo '
    <script>
    alert("Berhasil Menghapus Akun");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Menghapus Akun");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }  
  }else{
  if($query){
    echo '
    <script>
    alert("Berhasil Menghapus Akun");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Menghapus Akun");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }
  }
  
}

if(isset($_POST['edit'])){
  $iduser = $_POST['iduser'];
  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];
  if($role == "guru"){
    $nuptk = $_POST['nuptk'];
    $query = mysqli_query($c, "UPDATE user SET nama='$nama', telepon='$telepon', nuptk='$nuptk' WHERE id='$iduser'");
  if($query){
    echo '
    <script>
    alert("Berhasil Mengedit Akun");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Mengedit Akun");
    window.location.href="../action/account.php?role=guru"
    </script>
    ';
  }
}else{
  $nisn = $_POST['nisn'];
  $query = mysqli_query($c, "UPDATE user SET nama='$nama', telepon='$telepon', nisn='$nisn' WHERE id='$iduser'");
  if($query){
    echo '
    <script>
    alert("Berhasil Mengedit Akun");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }else{
    echo '
    <script>
    alert("Gagal Mengedit Akun");
    window.location.href="../action/account.php?role=siswa"
    </script>
    ';
  }
  }
  
}
?>