<?php
  session_start(); // Mulai sesi
  session_unset(); // Hapus semua variabel sesi
  session_destroy(); // Hancurkan sesi

  // Alihkan ke halaman beranda atau halaman lain yang diinginkan setelah logout
  header('Location: index.php');
  exit;
?>
