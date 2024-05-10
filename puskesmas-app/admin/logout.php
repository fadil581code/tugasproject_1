<?php
session_start();
// Hapus semua session
session_unset();
session_destroy();

if (!isset($_SESSION['logout'])) {
    echo "<script>alert('Anda Telah Logout, Silahkan Login Kembali') </script>";
    echo "<script>window.location.href='login.html'</script>";
}
?>