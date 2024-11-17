<?php 
function koneksi() {
  $conn = mysqli_connect('localhost', 'root', '', 'db_web-profile') or die('koneksi DB gagal!');
  return $conn;
}

function query($query) {
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function check_login() {
  session_start();
  if (!isset($_SESSION['login'])) {
      header("Location: login.php");
      exit;
  }
}

