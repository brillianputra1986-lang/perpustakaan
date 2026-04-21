<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM perpustakaan WHERE id=$id");
$data = mysqli_fetch_array($query);
?>

<h2>Detail Buku</h2>
<table>
    <tr>
        <th>judul</th>
        <td><?= $data['judul'] ?></td>
    </tr>
    <tr>
        <th>Penulis</th>
        <td><?= $data['penulis'] ?></td>
    </tr>
    <tr>
        <th>Penerbit</th>
        <td><?= $data['penerbit'] ?></td>
    </tr>
</table>

<a href="index.php" class="btn-kembali">Kembali</a>
<!-- Tombol Edit -->
<a href="edit.php?id=<?= $data['id'] ?>" class="btn-edit">Edit</a>
<!-- Tombol Hapus -->
<a href="hapus.php?id=<?= $data['id'] ?>" class="btn-hapus">Hapus</a>
<!-- Tombol Tambah Data -->
<a href="tambah.php" class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data </a>
    <!-- Tombol Kembali -->
<a href="index.php" class="btn-kembali">Kembali</a> 