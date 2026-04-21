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
<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM buku");
?>

<!-- Tombol Tambah Data -->
<a href="tambah.php" 
   class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['judul'] ?></td>
        <td><?= $data['penulis'] ?></td>
        <td><?= $data['penerbit'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>