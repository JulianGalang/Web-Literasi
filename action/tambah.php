<?php
include '../auth/koneksi.php';
require '../auth/session.php';

$query = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
  $result = $c->query($query);
  $row = $result->fetch_assoc();
  $nama = $row['nama'];
  $role = $row['role'];

    $profile = $row['gambar'];


  $h1 = mysqli_query($c, "SELECT * FROM user WHERE role = 'Guru'");
  $h2 = mysqli_query($c, "SELECT * FROM user WHERE role = 'Siswa'");
  $guru = mysqli_num_rows($h1);
  $siswa = mysqli_num_rows($h2);
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
      <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body style="background:#e4e9f7;">
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
            <i class='bx bx-cog'></i>
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
        <span class="text">Tambah Karya</span>
      </div>
      <div class="card m-5 mt-0">
          <div class="card-header">
            <h3 class="card-title m-0">Tambah Karya</h3>
          </div>
          <div class="card-body">
            <form id="formPost" action="#" method="POST" enctype="multipart/form-data">
                  <label for="judul" class="form-label fs-5">Judul Karya</label>
                  <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul" required>
                  <label for="tipe" class="form-label fs-5 mt-3">Tipe</label>
                  <select name="tipe" id="tipe" class="form-select" required>
                    <option value="" disabled readonly>Pilih Tipe</option>
                    <option value="Novel">Novel</option>
                    <option value="Ensiklopedia">Ensiklopedia</option>
                    <option value="Dongeng">Dongeng</option>
                    <option value="Biografi">Biografi</option>
                    <option value="Catatan">Catatan</option>
                    <option value="Panduan">Panduan</option>
                    <option value="Cerpen">Cerpen</option>
                    <option value="Pantun">Pantun</option>
                    <option value="Puisi">Puisi</option>
                  </select>
                  <label for="sinopsis" class="form-label fs-5 mt-3">Sinopsis</label>
                  <textarea name="sinopsis" id="sinopsis" class="form-control" placeholder="Sinopsis" required maxlength="800"></textarea>
                  <label for="konten" class="form-label fs-5 mt-3">Konten</label>
                  <div id="editor" style="height: 200px;"></div>
                  <input type="hidden" name="content" id="content">
                  <div id="editorError" class="text-danger mt-2" style="display: none;">Content cannot be empty!</div>
                  <div class="mb-3">
                        <label class="form-label fs-5 mt-3">Foto Cover</label>
				<input type="file" name="foto" class="form-control" >
                  </div>
                  <button type="submit" class="btn btn-primary mt-1 form-control" name="tambah">Submit</button>
            </form>
      </section>

      <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
      ></script>

      <script src="../assets/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

      <!-- Initialize Quill editor -->
      <script>
          const quill = new Quill('#editor', {
            modules:{
              toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['code-block'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                [{ script: 'sub' }, { script: 'super' }],
                [{ indent: '-1' }, { indent: '+1' }],
                [{ direction: 'rtl' }],
                [{ size: ['small', false, 'large', 'huge'] }],
                [{ header: 1 }, { header: 2 }],
                [{ color: [] }, { background: [] }],
                [{ font: [] }],
                [{ align: [] }],
                ['clean']
              ]
            },
            theme: 'snow'
          });

      document.querySelector('#formPost').onsubmit = function(event) {
            var content = quill.root.innerHTML.trim();
            if (content === '<p><br></p>') {
                document.querySelector('#editorError').style.display = 'block';
                event.preventDefault(); // Prevent form submission
            } else {
                document.querySelector('#content').value = content;
            }
        };
      </script>
  </body>
</html>
<?php
if(isset($_POST['tambah'])){
  $judul = $_POST['judul'];
  $sinopsis = $_POST['sinopsis'];
  $tipe = $_POST['tipe'];
  $konten = $_POST['content'];
  $foto = $_FILES['foto']['name'];
  $file_tmp = $_FILES['foto']['tmp_name'] ;
  move_uploaded_file($file_tmp, '../file/'.$foto) ;

  $sql = "INSERT INTO karya (judul, tipe, author, status, sinopsis, konten, gambar) VALUES ('$judul', '$tipe', '$nama', '$role', '$sinopsis', '$konten','$foto')";
  $query = mysqli_query($c, $sql);
  if($query){
    echo '
        <script>
        alert("Berhasil ditambahkan");
        window.location.href="../action/karya.php"
        </script>
        ';
  }else{
    echo '
        <script>
        alert("Gagal ditambahkan");
        window.location.href="../action/tambah.php"
        </script>
        ';
  }}
?>