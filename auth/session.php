<?php 
session_start();
if($_SESSION['status'] == "Login"){

}else{
  echo "<script>alert('Login Terlebih Dahulu');
  window.location='../login.php';
  </script>";
}
?>
