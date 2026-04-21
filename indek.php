<?php
session_start();

// Cek apakah pengguna belum login
if (!isset($_SESSION['status_login'])) {
    header("Location: login.php");
    exit;
}
?>

<!-- Lanjutkan dengan kode HTML/PHP Anda di bawah -->
<!DOCTYPE html>
<html>
<body>
    <h1>Beranda Perpustakaan</h1>
    <p>Selamat Datang, <strong><?php echo $_SESSION['nama_lengkap']; ?></strong></p>
</body>
</html>
<a href="buku/index.php">buku</a>
<a href="anggota/index.php">anggota</a>
<a href="peminjaman/index.php">peminjaman</a>
<a href="logout.php">logout</a>