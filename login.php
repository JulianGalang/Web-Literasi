<?php
include 'auth/koneksi.php';
if(isset($_POST['login'])){
    // Inisialiasi Variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c, "SELECT * FROM user WHERE username='$username' and password='$password' and verifikasi='D'");
    $data = mysqli_fetch_assoc($check);
    $hitung = mysqli_num_rows($check);
    $role = $data['role'];

    if($hitung>0){
        // Jika datanya ditemukan
        // Berhasil login
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "Login";
        if($role == 'guest'){
            echo '
            <script>            
            alert("Berhasil login Selamat Datang!");
            window.location.href="index.php"
            </script>
            ';
        }else{
            echo '
            <script>
            alert("Berhasil login Selamat Datang!");
            window.location.href="dashboard/dashboard.php"
            </script>
            ';
        }
    }else{
        // Data tidak ditemukan
        // Gagal login
        echo '
        <script>
        alert("Username Password Salah! / Akun belum di verifikasi admin");
        window.location.href="login.php"
        </script>
        ';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  width: 100%;
  border: none;
  outline: none;
  border-radius: 30px;
  color: #fff;
  padding: 0 0 0 42px;
  background: rgba(255, 255, 255, 0.1);
}
i.pas {
  position: relative;
  top: -33px;
  left: 17px;
  color: #fff;
  margin: 0;
  padding: 0;
}
i.use {
  position: relative;
  top: -33px;
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
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login</header>
            </div>
            <form action="" method="post">
            <div class="input-field d-flex flex-column position-relative mb-2">
                <input type="text" class="input" placeholder="Username" name="username" required>
                <i class="bi bi-person-circle use position-absolute top-50 start-10 translate-middle-y"></i>
            </div>
            <div class="input-field d-flex flex-column position-relative mb-2 ">
                <input type="password" class="input" placeholder="Password" name="password" required>
                <i class="bi bi-shield-lock pas position-absolute top-50 start-10 translate-middle-y"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="login" value="Login">
            </div>
            <div class="d-flex justify-content-center mt-3">
              <label for="" class="text-white from-label text-center mb-0">Sign Up</label>
            </div>  
            <div class="input-field flex-row gap-4 justify-content-center mt-2 ">
                <div style="display:flex; align-items:center" >
                    <a href="registrasi.php?role=guru" class="text-decoration-none text-center text-light">
                      <i class="bi bi-universal-access-circle fs-2"></i>
                      <p class="form-label">Guru</p>                        
                    </a>
                </div>
                <div style="display:flex; align-items:center;">
                    <a href="registrasi.php?role=siswa" class="text-decoration-none text-center text-light">
                        <i class="bi bi-person-circle fs-2"></i>
                        <p class="form-label">Siswa</p>  
                    </a>
                </div>
                <div style="display:flex; align-items:center;">
                    <a href="registrasi.php?role=guest" class="text-decoration-none text-center text-light">
                        <i class="bi bi-person-fill fs-2"></i>
                        <p class="form-label">Guest</p>  
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.mijsintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHzcrossorigin="anonymous">
    </script>

</body>
</html>




