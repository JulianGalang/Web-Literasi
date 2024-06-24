<?php 
if(isset($_GET['role'])){
      $role = $_GET['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
      <style>
            /**
 * POPPINS FONT
 *
 * @format
 */

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
* {
  font-family: "Poppins", sans serif;
}
body {
  background: #858ae3;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}
.box {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 90vh;
}
.container {
  width: 350px;
  display: flex;
  flex-direction: column;
  padding: 0 15px 0 15px;
}
span {
  color: #fff;
  font-size: small;
  display: flex;
  justify-content: center;
  padding: 10px 0 10px 0;
}
header {
  color: #fff;
  font-size: 30px;
  display: flex;
  justify-content: center;
  padding: 10px 0 10px 0;
}
.input-field {
  display: flex;
  flex-direction: column;
}
.input-field .input {
  height: 45px;
  width: 87%;
  border: none;
  outline: none;
  border-radius: 30px;
  color: #fff;
  padding: 0 0 0 42px;
  background: rgba(255, 255, 255, 0.1);
}
.input-field .radiobutton{
      flex-direction: row;
}
.input-field i {
  position: relative;
  top: -31px;
  left: 17px;
  color: #fff;
}
::-webkit-input-placeholder {
  color: #fff;
}
.submit {
  border: none;
  border-radius: 30px;
  font-size: 15px;
  height: 45px;
  outline: none;
  width: 100%;
  background: rgba(255, 255, 255, 0.7);
  cursor: pointer;
  transition: 0.3s;
}
.submit:hover {
  box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.bottom {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  font-size: small;
  color: #fff;
  margin-top: 10px;
}
.left {
  display: flex;
}
label a {
  color: #fff;
  text-decoration: none;
}

      </style>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Register Akun <?=$role?></header>
            </div>
            <form action="" method="post">
            <?php 
            if($role == "guru"){
            ?>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Nama" name="nama" required >
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Telepon" name="telepon" required >
                  <i class='bx bx-phone-call position-absolute top-50 start-10 translate-middle-y' style="pointer-events: none;"></i>
            </div>
          
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="NUPTK" name="nuptk" required >
                <i class='bx bx-plus-medical position-absolute top-50 start-10 translate-middle-y' style="pointer-events: none;"></i>
            </div>

            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Username" name="username" required>
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="password" class="input" placeholder="Password" name="password" required>
                <i class="bx bx-lock-alt position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <?php 
            }elseif($role=="siswa"){
              ?>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Nama" name="nama" required >
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Telepon" name="telepon" required >
                <i class="bx bx-phone-call position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="NISN" name="nisn" required >
                <i class="bx bx-plus-medical position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>

            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Username" name="username" required>
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="password" class="input" placeholder="Password" name="password" required>
                <i class="bx bx-lock-alt position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <?php
            }elseif($role=="guest"){
            ?>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Nama" name="nama" required >
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Telepon" name="telepon" required >
                <i class="bx bx-phone-call position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Username" name="username" required>
                <i class="bx bx-user position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="password" class="input" placeholder="Password" name="password" required>
                <i class="bx bx-lock-alt position-absolute top-50 start-10 translate-middle-y" style="pointer-events: none;"></i>
            </div>
            <?php
            }
            ?>
            <div class="input-field">
                <input type="submit" class="submit" value="register">
            </div>
            </form>
            
            <div class="bottom">
            <span>Have an account?<a href="login.php">Sign In</a></span>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>
</html>


<?php
// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil nilai input dari formulir
  $nama = $_POST["nama"];
  $telepon = $_POST["telepon"];
  $username1 = $_POST["username"];
  $password1 = $_POST["password"];
  


  if($role == "guru"){
      $nuptk = $_POST["nuptk"];
      $sql = "INSERT INTO user (nama, telepon, nuptk, username, password, role) VALUES ('$nama','$telepon','$nuptk','$username1', '$password1', '$role')";
  }elseif($role == "siswa"){
      $nisn = $_POST["nisn"];
      $sql = "INSERT INTO user (nama, telepon, nisn, username, password, role) VALUES ('$nama','$telepon','$nisn','$username1', '$password1', '$role')";
  }elseif($role == "guest"){
      $sql = "INSERT INTO user (nama, telepon, username, password, role, verifikasi) VALUES ('$nama','$telepon','$username1', '$password1', '$role', 'D')";
  }

  include 'auth/koneksi.php';
  // Menjalankan query
  $query = "SELECT * FROM user WHERE username = '$username1'";
  $result = mysqli_query($c, $query);
  $rowcount = mysqli_num_rows($result);
  if ($rowcount > 0) {
    echo '
    <script>
    alert("Username sudah dipakai");
    window.location.href="register.php"
    </script>
    ';
  } else {
    if (mysqli_query($c, $sql)) {
      echo '
      <script>
      alert("Berhasil mendaftar");
      window.location.href="login.php"
      </script>
      ';  
    } else {
      echo '
      <script>
      alert("Pendaftaran gagal");
      window.location.href="register.php"
      </script>
      ';  
    }
  }

  // Menutup koneksi
  mysqli_close($conn);
}
?>